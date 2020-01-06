var ListRenderingLibraryHash = new Array();

function ListRenderingLibrary() {

    this.id = Common.newGuid();
    ListRenderingLibraryHash[this.id] = this;

    // private properties    

    // public handlers    
    this.HeaderRenderingFunction = null;
    this.ItemRenderingFunction = null;
    this.SeparatorRenderingFunction = null;
    this.FooterRenderingFunction = null;
    this.EmptyListRenderingFunction = null;
    this.AuxListFilteringFunction = null;
    this.SearchStringFromListItemGenerationFunction = null;
    this.PagerLabelGenerationFunction = null;

    //public events
    this.OnRenderInit = null
    this.OnRenderBegin = null
    this.OnRenderComplete = null;
    this.OnSearchBegin = null;
    this.OnSearchComplete = null;
    this.OnPageChanged = null;

    // public properties
    this.ListItems = null; // all items
    this.FilteredItems = null; // items matching filters
    this.ItemsOnPage = null; // visible items    
    this.OutputContainerId = null;
    this.SearchTerms = null;  // array  
    this.ShouldTerminateRenderingProcess = false;
    this.IsRendering = false;
    this.RebuildIndexOnNextFiltering = false;
    this.RenderInOutputContainer = true;

    this.Pager = new Object();
    this.Pager.Enabled = true;
    this.Pager.ItemsPeerPage = 100;
    this.Pager.Containers = null; // array
    this.Pager.LabelMaxLength = 4;
    this.Pager.Page = 0;

    // public functions        
    this.Render = function() {
        raiseEvent(this.OnRenderInit);
        raiseEvent(this.OnSearchBegin);

        var filteredItems = this.filterItems(this.ListItems);
        var itemsOnPage = new Array();

        raiseEvent(this.OnSearchEnd);

        var output = new Array();
        var outputContainer = document.getElementById(this.OutputContainerId);
        var renderFrom = 0;
        var renderTo = filteredItems.length - 1;

        if (this.Pager.Enabled) {
            renderFrom = this.Pager.Page * this.Pager.ItemsPeerPage;
            renderTo = Math.min(renderFrom + this.Pager.ItemsPeerPage, filteredItems.length) - 1;
        }

        raiseEvent(this.OnRenderBegin);

        this.IsRendering = true;

        if (filteredItems.length > 0) {

            if (!this.ItemRenderingFunction) {
                alert("item rendering function is not present");
                return false;
            }

            if (this.HeaderRenderingFunction) {
                output.push(this.HeaderRenderingFunction());
            }

            for (var i = renderFrom; i <= renderTo; i++) {
                if (this.ShouldTerminateRenderingProcess) {
                    this.ShouldTerminateRenderingProcess = false;
                    this.IsRendering = false;
                    return true;
                }

                output.push(this.ItemRenderingFunction(filteredItems[i], i));
                itemsOnPage.push(filteredItems[i]);

                if (this.SeparatorRenderingFunction && (i != filteredItems.length - 1)) {
                    output.push(this.SeparatorRenderingFunction());
                }
            }

            if (this.FooterRenderingFunction) {
                output.push(this.FooterRenderingFunction());
            }

            this.FilteredItems = filteredItems;
            this.ItemsOnPage = itemsOnPage;

            if (this.Pager.Enabled && this.Pager.Containers) {
                for (var i = 0; i < this.Pager.Containers.length; i++) {
                    this.renderPager(this.Pager.Containers[i]);
                }
            }
        }
        else {
            output.splice(0, output.length);
            this.FilteredItems = filteredItems;
            this.ItemsOnPage = itemsOnPage;

            if (this.EmptyListRenderingFunction) {
                output.push(this.EmptyListRenderingFunction());
            }
        }

        if (this.RenderInOutputContainer && outputContainer) {
            outputContainer.innerHTML = output.join('');
        }


        this.IsRendering = false;
        this.ShouldTerminateRenderingProcess = false;
        raiseEvent(this.OnRenderComplete);

        if (this.RenderInOutputContainer) {
            return true;
        }
        {
            return output.join('');
        }
    }

    // private functions    
    this.filterItems = function(list) {
        var result = new Array();

        if (!list) {
            return result;
        }

        for (var i = 0; i < list.length; i++) {
            if (this.ShouldTerminateRenderingProcess) {
                this.ShouldTerminateRenderingProcess = false;
                return true;
            }

            if (this.isItemMatchingFilters(list[i])) {
                result.push(list[i]);
            }
        }

        this.RebuildIndexOnNextFiltering = false;

        return result;
    }


    this.isItemMatchingFilters = function(listItem) {
        if (!this.AuxListFilteringFunction || this.AuxListFilteringFunction(listItem)) {
            if (this.SearchTerms) {
                if (!listItem.SearchIndex || this.RebuildIndexOnNextFiltering) {
                    if (this.SearchStringFromListItemGenerationFunction) {
                        listItem.SearchIndex = this.SearchStringFromListItemGenerationFunction(listItem).toLowerCase();
                    }
                    else {
                        listItem.SearchIndex = generateSearchStringFromListItem(listItem).toLowerCase();
                    }
                }


                for (var i = 0; i < this.SearchTerms.length; i++) {
                    if (listItem.SearchIndex.indexOf(this.SearchTerms[i]) == -1) {
                        return false;
                    }
                }

                return true;
            }
            else {
                return true;
            }
        }

        return false;
    }


    this.renderPager = function(settings) {
        var labelContainer = document.getElementById(settings.labelContainerId);
        var dropDownContainer = document.getElementById(settings.dropDownContainerId);
        var pagerItems = new Array();
        var from;
        var to;
        var page;

        if (!dropDownContainer) {
            return;
        }

        if (!this.FilteredItems || this.FilteredItems.length == 0 || this.FilteredItems.length - 1 < this.Pager.ItemsPeerPage) {
            dropDownContainer.innerHTML = "";
            dropDownContainer.style.display = 'none';

            if (labelContainer) {
                labelContainer.style.display = 'none';
            }

            return;
        }

        dropDownContainer.style.display = '';

        if (labelContainer) {
            labelContainer.style.display = '';
        }

        for (i = 0; i < this.FilteredItems.length; i += this.Pager.ItemsPeerPage) {
            from = i;
            to = Math.min(this.FilteredItems.length - 1, i + this.Pager.ItemsPeerPage - 1);
            page = Math.floor(i / this.Pager.ItemsPeerPage);

            var pagerFrom = this.preparePagerItemLabel(this.FilteredItems[from], true);
            var pagerTo = this.preparePagerItemLabel(this.FilteredItems[to], false);
            var pagerItemText = '';

            if (pagerFrom || pagerTo) {
                pagerItemText = ([
					pagerFrom, ' - ', pagerTo,
					' (', (from + 1), ' - ', (to + 1), ')'
				]).join('');
            }
            else {
                pagerItemText = ([(from + 1), ' - ', (to + 1)]).join('');
            }

            pagerItems.push(
				([
					'<option value="', page, '" ', (page == this.Pager.Page ? "selected" : ""), '>',
						pagerItemText,
					'</option>'
				]).join('')
            );
        }

        dropDownContainer.innerHTML =
         '<select onchange="ListRenderingLibraryHash[' + this.id +
         '].pagerChanged(this);">' + pagerItems.join("") +
         '</select>';
    }



    this.preparePagerItemLabel = function(listItem, appendSpacesBefore) {
        if (!this.PagerLabelGenerationFunction) {
            return '';
        }

        var word = this.PagerLabelGenerationFunction(listItem).substr(0, this.Pager.LabelMaxLength);

        while (word.length < this.Pager.LabelMaxLength) {
            if (appendSpacesBefore) {
                word = ' ' + word;
            }
            else {
                word = word + ' ';
            }
        }

        word = word.replace(/\s/g, "&nbsp;");
        return word;
    }

    this.pagerChanged = function(pager) {
        this.Pager.Page = pager.options[pager.selectedIndex].value;
        raiseEvent(this.OnPageChanged);
        this.Render();
    }


    // private static functions    
    function generateSearchStringFromListItem(listItem) {
        return getAllObjectFields(listItem).join(' ').toLowerCase();
    }

    // TODO: to test
    function getAllObjectFields(item) {
        var values = new Array();

        for (var i in item) {
            var value = item[i];

            switch (typeof (value)) {
                case "object":
                    var childValues = getAllObjectFields(value);
                    values = values.concat(childValues);
                    break;

                case "number":
                case "string":
                    values.push(value);
                    break;

                default:
                    break;
            }
        }

        return values;
    }


    function raiseEvent(ev) {
        if (ev) {
            ev();
        }
    }

    return this;
}




/////////////////////////////////////////////////


var ListHandlingLibraryHash = new Array();

function ListHandlingLibrary(params) {
    this.Id = (new Date()).getTime();
    ListHandlingLibraryHash[this.Id] = this;

    // validation

    if (!params.name) {
        alert('name property is null');
        return;
    }

    if (!params.listRenderer) {
        alert('listRenderer property is null');
        return;
    }

    if (!params.cacheProvider) {
        alert('cacheProvider property is null');
        return;
    }


    // declarations
    var $ = function(id) { return document.getElementById(id); };

    //private properties    
    var renderingProcess = null;
    var searchTimeout = null;
    var isInitialized = false;
    var pThis = this;

    // events
    this.loadFiltersState = null;

    // public properties   
    this.Name = params.name;
    this.ListRenderer = params.listRenderer;
    this.CacheProvider = params.cacheProvider;
    this.ClearCache = clearCache;
    this.SearchEnabled = params.searchEnabled != null ? params.searchEnabled : true;
    this.Cache = null;
    this.UsingCachedListItems = true;
    this.DataSourceWebService = params.dataSourceWebService
        ? params.dataSourceWebService
        : {
            Function: null,
            Parameters: null
        };
    this.Settings = params.settings;
    this.DataSource = params.dataSource ? params.dataSource : null;

    this.Controls =
    {
        OutputContainerId: null,
        ListPagerContainers: [],
        SearchBoxId: null,
        ReloadCacheButtonId: null,
        RecordsCountContainerId: null,
        MessageContainerId: null,
        LoadingIndicatorId: null,
        FilteredRecordsLabelId: null
    };

    this.Labels =
    {
        LoadingLabel: "",
        LoadingErrorMessage: ""
    };

    //public functions
    this.Initialize = initialize
    this.FilteredItems = filteredItems;
    this.LoadListAndRender = loadListAndRender;


    //private functions

    function initialize() {
        initContainers();
        initObjects();
        initListRenderer();
        loadControlsState();

        isInitialized = true;

        if (pThis.SearchEnabled && pThis.Controls.SearchBox) {
        	TextNote(pThis.Controls.SearchBox, pThis.Controls.SearchBoxNote);
        	pThis.Controls.SearchBox.onkeydown = function() { if(this.name) scheduleSearch(); };
        	scheduleSearch();
        }
    }

    function initContainers() {
        pThis.Controls.OutputContainer = $(pThis.Controls.OutputContainerId);
        pThis.Controls.SearchBox = $(pThis.Controls.SearchBoxId);
        pThis.Controls.ReloadCacheButton = $(pThis.Controls.ReloadCacheButtonId);
        pThis.Controls.RecordsCountContainer = $(pThis.Controls.RecordsCountContainerId);
        pThis.Controls.MessageContainer = $(pThis.Controls.MessageContainerId);
        pThis.Controls.LoadingIndicator = $(pThis.Controls.LoadingIndicatorId);
        pThis.Controls.FilteredRecordsLabel = $(pThis.Controls.FilteredRecordsLabelId);
    }

    function initListRenderer() {
        pThis.ListRenderer.OutputContainerId = pThis.Controls.OutputContainerId;
        pThis.ListRenderer.Pager.Containers = pThis.Controls.ListPagerContainers;
        pThis.ListRenderer.Pager.Page = pThis.Cache.Page ? pThis.Cache.Page : 0;
        pThis.ListRenderer.OnPageChanged = onPageChanged;
    }

    function clearCache() {
        var cacheProvider = new TopCacheProvider();
        cacheProvider.Clear(pThis.Name + "Cache");
    }
    function initObjects() {
        var cacheItem = new CacheItem(pThis.CacheProvider, pThis.Name + "Cache");

        if (cacheItem.IsNull()) {
            cacheItem.Set(
            {
                ListItems: null,
                SearchTerms: null
            });
        }

        pThis.Cache = cacheItem.Get();
    }

    function loadControlsState() {
        if (pThis.Controls.SearchBox && pThis.Cache.SearchTerms) {
            pThis.Controls.SearchBox.value = pThis.Cache.SearchTerms;
        }

        if (pThis.loadFiltersState) {
            pThis.loadFiltersState(pThis.Cache);
        }
    }

    function setRenderedState() {
        if (pThis.Controls.ReloadCacheButton) {
            pThis.Controls.ReloadCacheButton.style.display = pThis.UsingCachedListItems ? "inline" : "none";
        }

        if (pThis.Controls.RecordsCountContainer) {
            pThis.Controls.RecordsCountContainer.innerHTML = (pThis.ListRenderer.FilteredItems ? pThis.ListRenderer.FilteredItems.length : 0);
            pThis.Controls.RecordsCountContainer.style.display = "inline";
        }

        if (pThis.Settings.hideRecordsCountWhenNotFiltered && pThis.Controls.FilteredRecordsLabel) {
            var newStyle = isFilterApplied() ? "inline" : "none";
            pThis.Controls.FilteredRecordsLabel.style.display = newStyle;

            if (pThis.Controls.RecordsCountContainer) {
                pThis.Controls.RecordsCountContainer.style.display = newStyle;
            }
        }

        if (pThis.Controls.MessageContainer) {
            pThis.Controls.MessageContainer.innerHTML = "";
        }

        if (pThis.Controls.LoadingIndicator) {
            pThis.Controls.LoadingIndicator.style.display = "none";
        }

        try {
            if (pThis.Controls.SearchBox) {
               // pThis.Controls.SearchBox.focus();
            }
        }
        catch (e) { }
    }
    function isFilterApplied() {
        var itemsCountNotMatch = pThis.ListRenderer.FilteredItems && pThis.ListRenderer.FilteredItems.length != pThis.ListRenderer.ListItems.length;
        var searchTermsExists = pThis.ListRenderer.SearchTerms && (pThis.ListRenderer.SearchTerms.length > 0);

        return itemsCountNotMatch || searchTermsExists;
    }

    function setLoadingState() {
        if (pThis.Controls.ListPagerContainers) {
            for (var i = 0; i < pThis.Controls.ListPagerContainers.length; i++) {
                var dropDownContainer = $(pThis.Controls.ListPagerContainers[i].dropDownContainerId);

                if (dropDownContainer) {
                    dropDownContainer.innerHTML = "";
                    dropDownContainer.style.display = "none";

                    if (pThis.Controls.ListPagerContainers[i].labelContainerId) {
                        var label = $(pThis.Controls.ListPagerContainers[i].labelContainerId);
                        label.style.display = "none";
                    }
                }
            }
        }

        if (pThis.Controls.ReloadCacheButton) {
            pThis.Controls.ReloadCacheButton.style.display = "none";
        }

        if (pThis.Controls.LoadingIndicator) {
            pThis.Controls.LoadingIndicator.style.display = "inline";
        }

        if (pThis.Controls.MessageContainer) {
            pThis.Controls.MessageContainer.innerHTML = pThis.Labels.LoadingLabel;
        }

        if (pThis.Controls.RecordsCountContainer) {
            pThis.Controls.RecordsCountContainer.style.display = "none";
        }

        if (pThis.Settings.hideRecordsCountWhenNotFiltered && pThis.Controls.FilteredRecordsLabel) {
            var newStyle = isFilterApplied() ? "inline" : "none";
            pThis.Controls.FilteredRecordsLabel.style.display = newStyle;
        }
    }

    function loadListAndRender(refreshCache, hideRefreshButton) {
        setLoadingState();

        if (pThis.DataSourceWebService.Function) {
            if (refreshCache || pThis.Cache.ListItems == null) {
                var params = pThis.DataSourceWebService.Parameters ? pThis.DataSourceWebService.Parameters.clone() : new Array();
                params.push(loadRecordsCallback);
                params.push(loadRecordsErrorCallback);

                pThis.ListRenderer.Pager.Page = 0;
                pThis.Cache.Page = 0;
                pThis.DataSourceWebService.Function.apply(pThis, params);

                return;
            }

            pThis.ListRenderer.ListItems = pThis.Cache.ListItems;
        }
        else {
            pThis.UsingCachedListItems = false;
            pThis.ListRenderer.Pager.Page = 0;
            pThis.Cache.Page = 0;
            pThis.ListRenderer.ListItems = pThis.DataSource;
        }


        terminateRenderingProcess();
        renderingProcess = setTimeout(
        function() {
            runRenderingProcess(hideRefreshButton);
        },
        70);
    }

    function runRenderingProcess() {
        if (pThis.ListRenderer.IsRendering &&
          pThis.ListRenderer.ShouldTerminateRenderingProcess) {
            setTimeout(
              function() {
                  runRenderingProcess();
              },
              1000);
            return;
        }

        pThis.ListRenderer.ShouldTerminateRenderingProcess = false;

        if (pThis.Controls.SearchBox) {
            pThis.Cache.SearchTerms = pThis.Controls.SearchBox.value;
            pThis.ListRenderer.SearchTerms = getSearchTermsArray();
        }

        pThis.ListRenderer.Render();

        setRenderedState();
    }


    function loadRecordsCallback(result) {
        if (result) {
            var loadedData = eval(result);
            pThis.Cache.ListItems = loadedData;
        }
        else {
            pThis.Cache.ListItems = new Array();
        }

        pThis.UsingCachedListItems = false;

        loadListAndRender(false, true);
    }


    function loadRecordsErrorCallback(result) {
        alert(pThis.Labels.LoadingErrorMessage);
    }

    function filteredItems() {
        return pThis.ListRenderer.FilteredItems;
    }

    function scheduleSearch() {
        if (searchTimeout) {
            clearTimeout(searchTimeout);
        }
		
        searchTimeout = setTimeout(runSearch, 250);
    }

    function runSearch() {

    	var searchBox = pThis.Controls.SearchBox;
        if (!isInitialized) {
            scheduleSearch();
            return false;
        }

        if (searchBox) {
            if ((pThis.Cache.SearchTerms || '').customTrim() == searchBox.value.customTrim()) {
                scheduleSearch();
                return false;
               }
               if (searchBox.empty) {
               	scheduleSearch();
               	return false;
               }

            pThis.Cache.SearchTerms = searchBox.value;
        }

        pThis.ListRenderer.Pager.Page = 0;
        pThis.Cache.Page = 0;
        pThis.LoadListAndRender(false, true);

        scheduleSearch();
    }

    function getSearchTermsArray() {
    	var searchBox = pThis.Controls.SearchBox;
    	
        if (!searchBox || !searchBox.name || !searchBox.value) {
            return null;
        }
        var searchTerms = [];
        var quotesRegEx = new RegExp('"([^"]+)"', 'gi');
        var spaceRegEx = new RegExp('["\s]+', 'gi');

        var normalizedSearchBoxValue = searchBox.value.customTrim().toLowerCase();

        var match = quotesRegEx.exec(normalizedSearchBoxValue);

        while (match) {
            searchTerms.push(match[1]);
            match = quotesRegEx.exec(normalizedSearchBoxValue);
        }

        normalizedSearchBoxValue = normalizedSearchBoxValue.replace(quotesRegEx, '').replace(spaceRegEx, " ").customTrim();

        if (normalizedSearchBoxValue.length > 0) {
            if (normalizedSearchBoxValue.indexOf(" ") == -1) {
                searchTerms.push(normalizedSearchBoxValue);
            }
            else {
                searchTerms = searchTerms.concat(normalizedSearchBoxValue.split(" "));
            }
        }

        searchTerms = removeDuplicateSearchTerms(searchTerms);

        return searchTerms;
    }

    function removeDuplicateSearchTerms(searchTerms) {
        for (var i = 0; i < searchTerms.length - 1; i++) {
            searchTerms.splice(i, 1, Common.encodeHtml(searchTerms[i]));

            for (var j = i + 1; j < searchTerms.length; j++) {
                if (searchTerms[i] == searchTerms[j]) {
                    searchTerms.splice(j, 1);
                }
            }
        }

        return searchTerms;
    }

    function terminateRenderingProcess() {
        if (renderingProcess) {
            pThis.ListRenderer.ShouldTerminateRenderingProcess = true;
            clearTimeout(renderingProcess);
        }
    }

    function onPageChanged() {
        pThis.Cache.Page = pThis.ListRenderer.Pager.Page;
    }
}




////////////////////////////////////////////////////////



function TopCacheProvider() {
    this.Clear = function(key) {
        if (!top.cache) {
            return;
        }

        if (!key) {
            top.cache = null;
            top.cache = new Object();
        }
        else {
            top.cache[key] = null;
        }
    }

    this.Store = function(key, value) {
        if (!top.cache) {
            top.cache = new Object();
        }

        top.cache[key] = value;
    }

    this.Contains = function(key) {
        return top.cache ? (top.cache[key] ? true : false) : false;
    }

    this.Retrive = function(key) {
        return top.cache ? top.cache[key] : null;
    }

    return this;
}


function CacheItem(chacheProvider, key) {
    var chacheProvider = chacheProvider ? chacheProvider : null;
    var key = key ? key : null;

    if (!chacheProvider) {
        alert("cache provider required");
    }

    if (!key) {
        alert("key required");
    }

    this.Get = function() {
        return chacheProvider.Retrive(key);
    }

    this.Set = function(value) {
        chacheProvider.Store(key, value);
    }

    this.IsNull = function() {
        return (this.Get() == null);
    }

    return this;
}