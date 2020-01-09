// Шаг 5. ОКВЭД
function StepOkvedInfo() {
    var pThis = this;
    var guid = Common.newGuid();
    var tree = null;
    var treeHandler = null;
    var tree222 = null;
    var treeHandler222 = null;
    var controlIds =
        {
            popupFolder1: 'idFolder1' + guid,
            popupFolder2: 'idFolder2' + guid,
            popupFolderHeader1: 'idFolderHeader1' + guid,
            popupFolderHeader2: 'idFolderHeader2' + guid,
            treeContainer: 'idTreeContainer' + guid,
            treeContainer222: 'idTreeContainer222' + guid,
            searchBoxId: 'idSearchBox' + guid,
            searchBoxId222: 'idSearchBox222' + guid,
            loadingIndicatorId: 'idLoadingIndicator' + guid,
            loadingIndicatorId222: 'idLoadingIndicator222' + guid,
            selectedActivitiesContainer: 'idSelectedActivities' + guid,
            popupContainer: 'idOkvedPopup',
            activitiesList: 'idActivitiesList' + guid,
            addActivityLink: 'idAddActivity' + guid,
            addActivityLinkText: 'idAddActivityText' + guid,
            addActivityDescription: 'idAddActivityDescription',
            warningsText: 'idWarnings' + guid,
            activitiesDataLossControl: 'idActivitiesDataLossControl' + guid,
            mainActivityDataLossControl: 'idMainActivityDataLossControl' + guid,
            errorMessageContainer: 'idErrorMessageContainer' + guid
        };
    var listLibrary = null;
    var activitiesPopup = null;
    var selectedActivities = [];
    //var mainActivityMovingTimerId = null;
    //var stepIndex = 3;

    pThis.name = 'ОКВЭД';
    pThis.fullName = 'ОКВЭД';
    pThis.parameters = null;
    pThis.description = '';
    pThis.stepIsDone = false;
    pThis.stepIsOpened = false;

    pThis.initialize = function(params) {
        pThis.parameters = params;
        //pThis.parameters.dataChangedEvent.attach(dataChanged);

        initializeActivitiesListLibrary();
        initializeTreeHandler();
        initializeTreeHandler222();
        initializeActivitiesPopup();
    }

    pThis.activate = function() {
    	pThis.stepIsOpened = true;

    	treeHandler.Controls.OutputContainerId = controlIds.treeContainer;
    	treeHandler.Controls.SearchBoxId = controlIds.searchBoxId;
    	treeHandler.Controls.SearchBoxNote = "Быстрый поиск по видам деятельности";
    	treeHandler.Controls.LoadingIndicatorId = controlIds.loadingIndicatorId;
    	treeHandler.ListRenderer.EmptyMessage = 'Ничего не найдено. Попробуйте ввести другой код или слово.'
    	//treeHandler.ListRenderer.SelectedActivitiesNumberId = controlIds.selectedActivitiesContainer;
    	treeHandler.Initialize();
    	treeHandler.LoadListAndRender();

    	treeHandler222.Controls.OutputContainerId = controlIds.treeContainer222;
    	treeHandler222.Controls.SearchBoxId = controlIds.searchBoxId222;
    	treeHandler222.Controls.SearchBoxNote = "Быстрый поиск по видам деятельности";
    	treeHandler222.Controls.LoadingIndicatorId = controlIds.loadingIndicatorId;
    	treeHandler222.ListRenderer.EmptyMessage = 'Ничего не найдено. Попробуйте ввести другой код или слово, либо выбрать вручную во вкладке «<a href="javascript:void(0);" onclick = \'$("#' + controlIds.popupFolderHeader2 + '").click();return false;\'>Справочник ОКВЭД</a>».'
    	//treeHandler222.ListRenderer.SelectedActivitiesNumberId = controlIds.selectedActivitiesContainer;
    	treeHandler222.Initialize();
    	treeHandler222.LoadListAndRender();

    	loadActivitiesList();
    	activateActivitiesList();
    	bindShowActivitiesPopup();
    	bindPopupFolders();
    	setTreeHeight();

    	var dataLossControlsSelector = ([
                '#', controlIds.activitiesDataLossControl, ',',
                '#', controlIds.mainActivityDataLossControl
            ]).join('');
    	Common.DataLossPrevention.updateInitialValues($(dataLossControlsSelector));
    }

    pThis.validate = function() {
        var validationResult = validateStep();

        return ({
            isValid: validationResult,
            errorMessages: []
        });
    }

    pThis.dispose = function() {
        if (pThis.hasChanges() && !pThis.stepIsDone) {
            saveStep();
        }
    }

    pThis.saveChanges = function() {
        saveStep();
        pThis.stepIsDone = true;
    }

    pThis.render = function() {
        return ([
                //'<!-- form onsubmit="return false;" -->\
                '<table><tbody><tr><td>\
                <div class="errorsMessageContainer" style="display:none;" id="', controlIds.errorMessageContainer, '">',
                //commonHelper.renderRounderCorners('<div class="errorText"></div>', 'red', true),
                '</div></td></tr>',
                //<!--tr><td><div id="', controlIds.warningsText, '"<div id="idWarningText" class="warnings"></div></div></td></tr-->\
                '</tbody></table>',
                //'<!-- /form -->',
                '<div class="list" id="', controlIds.activitiesList, '"></div>',
				'<a class="button-sm" href="javascript:void(0);" id="', controlIds.addActivityLink, '"><s><span class="ie-png-ail"><!----></span></s><u><img src="/theme/images/button-sm-c.png" alt="" class="ie-png-ail" /><span id="', controlIds.addActivityLinkText, '">Выбрать виды деятельности...</span></u><i><span class="ie-png-ail"></span></i></a>',
				'<a class="button-sky" href="javascript:void(0);" id="', controlIds.addActivityLink, '-add" style="display:none;"><s><span class="ie-png-ail"><!----></span></s><u><img src="/theme/images/button-sky-c.png" alt="" class="ie-png-ail" /><span id="', controlIds.addActivityLinkText, '">Добавить еще виды деятельности...</span></u><i><span class="ie-png-ail"></span></i></a>',
				'<div><input type="hidden" preventDataLoss="true" id="', controlIds.activitiesDataLossControl, '"></input>\
				<input type="hidden" preventDataLoss="true" id="', controlIds.mainActivityDataLossControl, '"></input></div>'
            ]).join('');
    }

    pThis.isAvailable = function() {
        return pThis.parameters.isStepAvailableAndDone('');
    }

    pThis.isDone = function() {
        return pThis.stepIsDone;
    }

    pThis.hasChanges = function() {
        var dataLossControlsSelector = ([
                '#', controlIds.activitiesDataLossControl, ',',
                '#', controlIds.mainActivityDataLossControl
            ]).join('');
        return Common.DataLossPrevention.checkIfDataChanged($(dataLossControlsSelector));
    }


    pThis.GetSelectedActivities = function() {
        return selectedActivities;
    }


    function dataChanged() {

    }

    function saveStep() {
        saveLegalPersonActivities();
        var dataLossControlsSelector = ([
                '#', controlIds.activitiesDataLossControl, ',',
                '#', controlIds.mainActivityDataLossControl
            ]).join('');
        Common.DataLossPrevention.updateInitialValues($(dataLossControlsSelector));
    }


    // initializing
    function setTreeHeight() {
    	var treeHeight = document.documentElement.clientHeight - 420;

        var treeContainer = Common.$(controlIds.treeContainer);
        treeContainer.style.height = (treeHeight < 100 ? 100 : treeHeight) + "px";
        treeContainer.style.overflowY = "scroll";

        var treeContainer222 = Common.$(controlIds.treeContainer222);
        treeContainer222.style.height = (treeHeight < 100 ? 100 : treeHeight) + "px";
        treeContainer222.style.overflowY = "auto";
    }

    function initializeActivitiesListLibrary() {
        listLibrary = new ListRenderingLibrary();
        listLibrary.RenderInOutputContainer = false;
        listLibrary.HeaderRenderingFunction = headerRenderingFunction;
        listLibrary.ItemRenderingFunction = itemRenderingFunction;
        listLibrary.FooterRenderingFunction = footerRenderingFunction;
    }

    function initializeTreeHandler() {
        treeHandler = new ListHandlingLibrary({
            name: Common.newGuid(),
            listRenderer: new Tree.TreeRenderingLibrary(),
            cacheProvider: new TopCacheProvider(),
            dataSource: window.StaticResources.okvedDataSource,
            settings:
                {
                    hideRecordsCountWhenNotFiltered: true
                }
            });
    }

    function initializeTreeHandler222() {
        treeHandler222 = new ListHandlingLibrary({
            name: Common.newGuid(),
            listRenderer: new Tree.TreeRenderingLibrary(),
            cacheProvider: new TopCacheProvider(),
            dataSource: window.StaticResources.okvedTopDataSource,
            settings:
                {
                    hideRecordsCountWhenNotFiltered: true
                }
        });
    }

    function initializeActivitiesPopup() {
    	activitiesPopup = Common.PopupBox.create({
    		width: 650,
    		height: -1,
    		title: 'Список видов экономической деятельности',
    		content: renderActivitiesPopup(),
    		select: {
    			title: 'Выбрать',
    			isDefault: true,
    			styleClass: 'wizard-button-save',
    			template: "",
    			onclick: function() {
    				selectedActivities = treeHandler.ListRenderer.SelectedActivities.slice(0);

    				if (selectedActivities.length > 0) {
    					setStepErrorState(false);
    				}

    				activateActivitiesList();
    				this.close();
    				return false;
    			}
    		},
    		cancel: {
    			title: 'Отменить',
    			styleClass: '',
    			onclick: function() {
    				this.close();
    				return false;
    			}
    		}
    	});
    }

    // rendering
    function renderActivitiesPopup() {
        return ([
                '<div id="', controlIds.popupContainer, '">\
                <br/><div class="text-style">', pThis.parameters['RegistrationStepThreeOkvedLightBox'], '</div>\
                <div class="okved-tabs">\
                <div class="okved-tab okved-tab-active"><s>&nbsp;</s><i>&nbsp;</i><a href="javascript:void(0);" id="', controlIds.popupFolderHeader1, '">Популярные виды бизнеса</a></div>\
                <div class="okved-tab"><s>&nbsp;</s><i>&nbsp;</i><a href="javascript:void(0);" id="', controlIds.popupFolderHeader2, '">Справочник ОКВЭД</a></div>\
                <div class="clear"></div></div>\
                <div  class="okved-tab-content" id="', controlIds.popupFolder1, '">\
                <div class="okved-qsearch">\
                <div class="column"><input id="', controlIds.searchBoxId222, '" size="60" name="qsearch" /></div>\
                <div class="okved-tab-loader" id="', controlIds.loadingIndicatorId222, '" style="display:none;"></div>\
                </div>\
                <div id="', controlIds.treeContainer222, '"></div>\
                </div>\
                \
                <div class="okved-tab-content" id="', controlIds.popupFolder2, '" style="display:none">\
                <div class="okved-qsearch">\
                <div class="column"><input id="', controlIds.searchBoxId, '" size="60" name="qsearch" /></div>\
                <div class="okved-tab-loader" id="', controlIds.loadingIndicatorId, '" style="display:none;"></div>\
                </div>\
                <div id="', controlIds.treeContainer, '"></div>\
                </div>\
                </div>\
                '
            ]).join('');
    }

    // binding handlers
    function bindPopupFolders() {
    	$('#' + controlIds.popupFolderHeader1)
            .click(function() {
            	treeHandler222.LoadListAndRender();
            	$('#' + controlIds.popupFolder2).hide();
            	$('#' + controlIds.popupFolder1).show();
            	$('#' + controlIds.popupFolderHeader1).parent().addClass('okved-tab-active');
            	$('#' + controlIds.popupFolderHeader2).parent().removeClass('okved-tab-active');
            	//textNote(controlIds.searchBoxId, "Быстрый поиск по видам деятельности");
            	return false;
            });
            $('#' + controlIds.popupFolderHeader2)
            .click(function() {
            	treeHandler.LoadListAndRender();
            	$('#' + controlIds.popupFolder1).hide();
            	$('#' + controlIds.popupFolder2).show();
            	$('#' + controlIds.popupFolderHeader2).parent().addClass('okved-tab-active');
            	$('#' + controlIds.popupFolderHeader1).parent().removeClass('okved-tab-active');
            	//textNote(controlIds.searchBoxId222, "Быстрый поиск по видам деятельности");
            	return false;
         });
         }
        
    function renderActivitiesList() {
        listLibrary.ListItems = selectedActivities;
        $('#' + controlIds.activitiesList).html(listLibrary.Render());
    }

    function headerRenderingFunction() {
        return '<div class="text-style">\
        <div class="okved-list-caption"><s><i><!----></i><u><!----></u></s><div><p>Выбранные виды деятельности</p></div></div>\
        <table class="okved-list"><tbody>\
        <tr valign="top">\
        <th class="centerAlign">Сделать<br />основным</th>\
        <th class="centerAlign">Код</th>\
        <th>Описание</th>\
        <th align="center"></th>\
        </tr>';
    }

    function itemRenderingFunction(item, index) {
        var isChecked = item.isMain;

        return ([
                '<tr class="clickable', isChecked ? ' selectedActivity' : '', '">\
                <td class="radio-"><input type="radio" name="activities" ', isChecked ? 'checked' : '', '/></td>\
                <td class="activityCode"><b>', item.id, '</b></td>\
                <td width="90%">', item.title, '</td>\
                <td class="del-">\
                <a href="javascript:void(0);" class="anchor">Удалить</a>\
                </td>\
                </tr>'
            ]).join('');
    }

    function footerRenderingFunction() {
        return '</tbody></table></div>';
    }


    // activate list
    function activateActivitiesList() {
        sortActivities();
        setDefaultMainActivityIfNotExists();
        renderActivitiesList();
        bindActivitiesListHandlers();

        updateActivitiesDataLossControl();
        updateMainActivityDataLossControl();

        //checkActivitiesListLength();
        updateAddActivityLink()
        validateStep();
    }
    
    function updateAddActivityLink() {
        //var linkText = $('#' + controlIds.addActivityLinkText);
        //linkText.html(selectedActivities.length == 0 ? "Выбрать виды деятельности..." : "Добавить ещё виды деятельности...");
        var description = $('#' + controlIds.addActivityDescription);
        description.html(selectedActivities.length == 0 
            ? 'Нажмите «Выбрать виды деятельности...» и выберите наиболее подходящие для вас.' 
            : 'Проверьте список выбранных видов деятельности. Если хотите добавить к списку ещё, то нажмите на «Добавить ещё виды деятельности...»'
            );
        if (selectedActivities.length == 0) {
        	$('#' + controlIds.addActivityLink).show();
        	$('#' + controlIds.addActivityLink + '-add').hide();
        } else {
			$('#' + controlIds.addActivityLink + '-add').show();
			$('#' + controlIds.addActivityLink).hide();					
        }
    }

    function checkConflictedActivities() {
        for (var i = 0; i < selectedActivities.length; i++) {
            var parentActivityId = selectedActivities[i].id;

            for (var j = 0; j < selectedActivities.length; j++) {
                var childActivityId = selectedActivities[j].id;

                if (i == j) {
                    continue;
                }

                if (childActivityId.indexOf(parentActivityId) > -1) {
                    return 'Выбор деятельности из уже выбранной группы недопустим. \
                    Группа <b>' + parentActivityId + '</b> "' + selectedActivities[i].title + '" уже содержит деятельность <b>' +
                            childActivityId + '</b> "' + selectedActivities[j].title + '".';
                }
            }
        }

        return null;
    }

    function checkActivitiesListLength() {
        if (selectedActivities.length > 30) {
            $('#' + controlIds.warningsText).addClass('caution');
            $('#' + controlIds.warningsText).show();
            document.getElementById('idWarningText').innerHTML =
                'Внимание! Рекомендуется указывать не более 30 видов деятельности для одной компании. \
                Это может привести к отказу в регистрации юридического лица при подаче документов в налоговую службу';
        }
        else {
            $('#' + controlIds.warningsText).removeClass('caution');
            $('#' + controlIds.warningsText).hide();
            document.getElementById('idWarningText').innerHTML = '';
        }
    }

    function updateActivitiesDataLossControl() {
        var activitiesIds = selectedActivities.customSelect(function(item) { return item.id; });
        $('#' + controlIds.activitiesDataLossControl).val(activitiesIds.join(','));
    }

    function updateMainActivityDataLossControl() {
        var mainActivity = selectedActivities.customFirst(function(item) { return item.isMain; });
        var mainActivityId = mainActivity ? mainActivity.id : '';
        $('#' + controlIds.mainActivityDataLossControl).val(mainActivityId);
    }

    // binding handlers
    function bindShowActivitiesPopup() {
    	var f = function() {
    		treeHandler.ListRenderer.SelectedActivities = selectedActivities.slice(0);
            if (treeHandler.ListRenderer.ListItems == null || treeHandler.ListRenderer.ListItems.length == 0) {
    		treeHandler.LoadListAndRender();
            }
            else {
                treeHandler.ListRenderer.Render();
            }

    		treeHandler222.ListRenderer.SelectedActivities = treeHandler.ListRenderer.SelectedActivities;
            if (treeHandler222.ListRenderer.ListItems == null || treeHandler222.ListRenderer.ListItems.length == 0) {
    		treeHandler222.LoadListAndRender();
            }
            else {
                treeHandler222.ListRenderer.Render();
            }
            
    		activitiesPopup.show();
    		return false;
    	};
        $('#' + controlIds.addActivityLink).click(f);
        $('#' + controlIds.addActivityLink + '-add').click(f);
    }

    function bindActivitiesListHandlers() {
        bindRemoveButtons();
        bindActivityRows();
    }

    function bindRemoveButtons() {
        var dataSource = pThis.parameters.dataSource;

        $('#' + controlIds.activitiesList)
            .find('tr.clickable a')
            .each(function(index, element) {
                $(element).click(function(e) {
                    selectedActivities.splice(index, 1);
                    activateActivitiesList();
                    e.stopPropagation();
                    return false;
                });
            });
    }

    function bindActivityRows() {
        var $rows = $('#' + controlIds.activitiesList).find('tr.clickable');
        var $radioButtons = $rows.find('input[type="radio"]');

        var updateMainActivity = function(activityRowIndex) {
            setMainActivity(activityRowIndex);
            setRowsDecoration($rows, activityRowIndex);
            updateMainActivityDataLossControl();
            //moveMainActivityToTop();
        }

        $rows
            .each(function(index, element) {
                $(element).click(function(e) {
                    var radioButton = $radioButtons.get(index);

                    if (!radioButton.checked) {
                        radioButton.checked = true;
                        updateMainActivity(index);
                    }

                    e.stopPropagation();
                });
            });

        $radioButtons
            .each(function(index, element) {
                $(element).click(function(e) {
                    updateMainActivity(index);
                    e.stopPropagation();
                });
            });
    }

    /*
    function moveMainActivityToTop() {
        if (mainActivityMovingTimerId != null) {
            clearTimeout(mainActivityMovingTimerId);
        }

        mainActivityMovingTimerId = setTimeout(function() {
            activateActivitiesList();
            mainActivityMovingTimerId = null;
        }, 500);
    }
    */

    // save and load data
    function saveLegalPersonActivities() {
        var dataSource = pThis.parameters.dataSource;

        activitiesIds = [];
        for (var i = 0; i < selectedActivities.length; ++i) {
            var activity = selectedActivities[i];
            activitiesIds.push(activity.id);
            if (activity.isMain) {
                commonHelper.setOkvedMainCode(dataSource, activity.id);
            }
        }
        commonHelper.setOkvedCodes(dataSource, activitiesIds);
    }

    function loadActivitiesList() {
        var dataSource = pThis.parameters.dataSource;
        var activitiesIds = commonHelper.getOkvedCodes(dataSource);
        var mainActivityId = commonHelper.getOkvedMainCode(dataSource);

        selectedActivities = activitiesIds.customSelect(function(id) {
            return {
                id: id,
                title: getActivityTitle(id),
                isMain: (mainActivityId == id)
            };
        });
    }

    function getActivityTitle(activityId) {
        var activity = subitemsRecursivelyFirst(window.StaticResources.okvedDataSource, function(a) {
            return a.id == activityId;
        });

        if (activity) {
            return activity.title;
        }

        return '';
    }

    function subitemsRecursivelyFirst(activities, delegate) {
        for (var i = 0; i < activities.length; ++i) {
            var activity = activities[i];

            if (delegate(activity)) {
                return activity;
            }

            var subitems = activity.subitems || activity.parts;

            if (subitems) {
                var foundedActivity = subitemsRecursivelyFirst(subitems, delegate);

                if (foundedActivity != null) {
                    return foundedActivity;
                }
            }
        }

        return null;
    }

    // stuff
    function sortActivities() {
        selectedActivities.sort(function(a, b) {
            /*
            if (a.isMain) {
                return -1;
            }
            else if (b.isMain) {
                return 1;
            }
            */

            if (a.id == b.id) {
                return 0;
            }

            return (a.id < b.id) ? -1 : 1;
        });
    }

    function setMainActivity(activityIndex) {
        selectedActivities.customForEach(function(element, index) {
            element.isMain = (activityIndex == index);
        });
    }

    function setRowsDecoration($rows, indexOfSelectedRow) {
        $rows.each(function(index, element) {
            $(element).toggleClass('selectedActivity', index == indexOfSelectedRow);
        });
    }

    function setDefaultMainActivityIfNotExists() {
        if (selectedActivities.length == 0) {
            return;
        }

        var mainActivityExists = selectedActivities
                .customContains(function(e) { return e.isMain; })

        if (!mainActivityExists) {
            selectedActivities[0].isMain = true;
        }
    }

    // validating 
    function validateStep() {
        if (selectedActivities.length == 0) {
            setStepErrorState(true, 'Выберите хотя бы один вид деятельности!');
            return false;
        };

        /*var message = checkConflictedActivities();                    if (message != null)        {        setStepErrorState(true, '&nbsp;' + message);        return false;        }*/

        setStepErrorState(false);
        return true;
    }

    function setStepErrorState(isError, message) {
        var errorMessage = isError ? message : '';
        var displayCss = isError ? 'block' : 'none';

        var $errorMessageContainer = $('#' + controlIds.errorMessageContainer);
        $errorMessageContainer.find('div.errorText:first').html(errorMessage);
        $errorMessageContainer.css('display', displayCss);
    }
}