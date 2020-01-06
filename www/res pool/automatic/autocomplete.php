	<link href="css/cupertino/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>


<SCRIPT>
/* самодельный */
function filloldmoscow() {
	var x =  document.getElementById('check1').value;
	if(x == 1) document.getElementById('tags4').value = 'Москва';
	else document.getElementById('tags4').value = '';
}
</SCRIPT>

	<script>
	$(function() {
		
		
var availableTags = [
  "Испанский",
  "Итальянский",
  "Английский",
  "Китайский",
  "Русский"
];



// или массив объектов
availableTags6 = [

{label:"Аал", value:"аал "},
{label:"Поселок", value:"п "},
{label:"Аллея", value:"аллея "},
{label:"Почтовое отделение", value:"п/о "},
{label:"Аул", value:"аул "},
{label:"Планировочный район", value:"п/р "},
{label:"Бульвар", value:"б-р "},
{label:"Поселок и (при) станция(и)", value:"п/ст "},
{label:"Вал", value:"вал "},
{label:"Парк", value:"парк "},
{label:"Въезд", value:"въезд "},
{label:"Переулок", value:"пер "},
{label:"Выселки(ок)", value:"высел "},
{label:"Переезд", value:"переезд "},
{label:"Городок", value:"городок "},
{label:"Площадь", value:"пл "},
{label:"Гаражно-строительный кооператив", value:"гск "},
{label:"Платформа", value:"платф "},
{label:"Деревня", value:"д "},
{label:"Площадка", value:"пл-ка "},
{label:"Дорога", value:"дор "},
{label:"Полустанок", value:"полустанок "},
{label:"Железнодорожная будка", value:"ж/д_будка "},
{label:"Проспект", value:"пр-кт "},
{label:"Железнодорожная казарма", value:"ж/д_казарм "},
{label:"Проезд", value:"проезд "},
{label:"ж/д останов, (обгонный) пункт", value:"ж/д_оп "},
{label:"Просек", value:"просек "},
{label:"Железнодорожная платформа", value:"ж/д_платф "},
{label:"Проселок", value:"проселок "},
{label:"Железнодорожный пост", value:"ж/д_пост "},
{label:"Проток", value:"проток "},
{label:"Железнодорожный разъезд", value:"ж/д_рзд "},
{label:"Проулок", value:"проулок "},
{label:"Железнодорожная станция", value:"ж/д_ст "},
{label:"Разъезд", value:"рзд "},
{label:"Животноводческая точка", value:"жт "},
{label:"Ряды", value:"ряды "},
{label:"Заезд", value:"заезд "},
{label:"Село", value:"с "},
{label:"Казарма", value:"казарма "},
{label:"Сад", value:"сад "},
{label:"Канал", value:"канал "},
{label:"Сквер", value:"сквер "},
{label:"Квартал", value:"кв-л "},
{label:"Слобода", value:"сл "},
{label:"Километр", value:"км "},
{label:"Садовое неком-е товарищество", value:"снт "},
{label:"Кольцо", value:"кольцо "},
{label:"Спуск", value:"спуск "},
{label:"Коса", value:"коса "},
{label:"Станция", value:"ст "},
{label:"Линия", value:"линия "},
{label:"Строение", value:"стр "},
{label:"Леспромхоз", value:"лпх "},
{label:"Территория", value:"тер "},
{label:"Местечко", value:"м "},
{label:"Тракт", value:"тракт "},
{label:"Микрорайон", value:"мкр "},
{label:"Тупик", value:"туп "},
{label:"Мост", value:"мост "},
{label:"Улица", value:"ул Новоорловская"},
{label:"Набережная", value:"наб "},
{label:"Участок", value:"уч-к "},
{label:"Населенный пункт", value:"нп "},
{label:"Ферма", value:"ферма "},
{label:"Остров", value:"остров "},
{label:"Хутор", value:"х "},
{label:"Шоссе", value:"ш "}


];
 
  
// задаем массив в качестве источника слов для автозаполнения.
$( "#tags6" ).autocomplete({source: availableTags6});
		




















 
// или массив объектов
availableTags5 = [

{label:"Аал", value:"аал "},
{label:"Леспромхоз", value:"лпх "},
{label:"Автодорога", value:"автодорога "},
{label:"Местечко", value:"м "},
{label:"Арбан", value:"арбан "},
{label:"Микрорайон", value:"мкр "},
{label:"Аул", value:"аул "},
{label:"Населенный пункт", value:"нп "},
{label:"Волость", value:"волость "},
{label:"Остров", value:"остров "},
{label:"Выселки(ок)", value:"высел "},
{label:"Поселок", value:"п "},
{label:"Город", value:"г "},
{label:"Почтовое отделение", value:"п/о "},
{label:"Городок", value:"городок "},
{label:"Планировочный район", value:"п/р "},
{label:"Деревня", value:"д "},
{label:"Поселок и (при) станция(и)", value:"п/ст "},
{label:"Дачный поселок", value:"дп "},
{label:"Поселок городского типа", value:"пгт "},
{label:"Железнодорожная будка", value:"ж/д_будка "},
{label:"Погост", value:"погост "},
{label:"Железнодорожная казарма", value:"ж/д_казарм "},
{label:"Починок", value:"починок "},
{label:"Ж/д останов, (обгонный) пункт", value:"ж/д_оп "},
{label:"Промышленная зона", value:"промзона "},
{label:"Железнодорожная платформа", value:"ж/д_платф "},
{label:"Разъезд", value:"рзд "},
{label:"Железнодорожный пост", value:"ж/д_пост "},
{label:"Рабочий поселок", value:"рп "},
{label:"Железнодорожный разъезд", value:"ж/д_рзд "},
{label:"Село", value:"с "},
{label:"Железнодорожная станция", value:"ж/д_ст "},
{label:"Слобода", value:"сл "},
{label:"Жилой район", value:"жилрайон "},
{label:"Садовое некоммерческое товарищество", value:"снт "},
{label:"Заимка", value:"заимка "},
{label:"Станция", value:"ст "},
{label:"Казарма", value:"казарма "},
{label:"Станица", value:"ст-ца "},
{label:"Квартал", value:"кв-л "},
{label:"Территория", value:"тер "},
{label:"Кордон", value:"кордон "},
{label:"Улус", value:"У "},
{label:"Курортный поселок", value:"кп "},
{label:"Хутор", value:"х "}

];
 
  
// задаем массив в качестве источника слов для автозаполнения.
$( "#tags5" ).autocomplete({source: availableTags5});
		







 
// или массив объектов
availableTags4 = [

{label:"Волость", value:"волость "},
{label:"Город", value:"г "},
{label:"Дачный поселок", value:"дп "},
{label:"Почтовое отделение", value:"п/о "},
{label:"Поселок городского типа", value:"пгт "},
{label:"Рабочий поселок", value:"рп "},
{label:"", value:"г "},
{label:"Сельская администрация", value:"с/а "},
{label:"Сельский округ", value:"с/о "},
{label:"Сельское поселение", value:"с/п "},
{label:"Сельсовет", value:"с/с "},
{label:"Территория", value:"тер "},
{label:"Массив", value:"массив "}


];

  
// задаем массив в качестве источника слов для автозаполнения.
$( "#tags4" ).autocomplete({source: availableTags4});



 
// или массив объектов
availableTags3 = [

{label:"Район", value:"р-н "},
{label:"Территория", value:"тер "},
{label:"Улус", value:"у "},
{label:"Поселение", value:"п "}


];
 
  
// задаем массив в качестве источника слов для автозаполнения.
$( "#tags3" ).autocomplete({source: availableTags3});
		




 
// или массив объектов
availableTags = [

{label:"Республика Адыгея(Адыгея)", value:"01"},
{label:"Республика Башкортостан", value:"02"},
{label:"Республика Бурятия", value:"03"},
{label:"Республика Алтай", value:"04"},
{label:"Республика Дагестан", value:"05"},
{label:"Республика Ингушетия", value:"06"},
{label:"Кабардино-Балкарская Республика", value:"07"},
{label:"Республика Калмыкия", value:"08"},
{label:"Карачаево-Черкесская Республика", value:"09"},
{label:"Республика Карелия", value:"10"},
{label:"Республика Коми", value:"11"},
{label:"Республика Марий Эл", value:"12"},
{label:"Республика Мордовия", value:"13"},
{label:"Республика Саха (Якутия)", value:"14"},
{label:"Республика Северная Осетия - Алания", value:"15"},
{label:"Республика Татарстан (Татарстан)", value:"16"},
{label:"Республика Тыва", value:"17"},
{label:"Удмуртская Республика", value:"18"},
{label:"Республика Хакасия", value:"19"},
{label:"Чеченская Республика", value:"20"},
{label:"Чувашская Республика – Чувашия", value:"21"},
{label:"Алтайский край", value:"22"},
{label:"Краснодарский край", value:"23"},
{label:"Красноярский край", value:"24"},
{label:"Приморский край", value:"25"},
{label:"Ставропольский край", value:"26"},
{label:"Хабаровский край", value:"27"},
{label:"Амурская область", value:"28"},
{label:"Архангельская область", value:"29"},
{label:"Астраханская область", value:"30"},
{label:"Белгородская область", value:"31"},
{label:"Брянская область", value:"32"},
{label:"Владимирская область", value:"33"},
{label:"Волгоградская область", value:"34"},
{label:"Вологодская область", value:"35"},
{label:"Воронежская область", value:"36"},
{label:"Ивановскаяобласть", value:"37"},
{label:"Иркутская область", value:"38"},
{label:"Калининградская область", value:"39"},
{label:"Калужская область", value:"40"},
{label:"Камчатская область", value:"41"},
{label:"Кемеровская область", value:"42"},
{label:"Кировская область", value:"43"},
{label:"Костромская область", value:"44"},
{label:"Курганская область", value:"45"},
{label:"Курская область", value:"46"},
{label:"Ленинградская область", value:"47"},
{label:"Липецкая область", value:"48"},
{label:"Магаданская область", value:"49"},
{label:"Московская область", value:"50"},
{label:"Мурманская область", value:"51"},
{label:"Нижегородская область", value:"52"},
{label:"Новгородская область", value:"53"},
{label:"Новосибирская область", value:"54"},
{label:"Омская область", value:"55"},
{label:"Оренбургская область", value:"56"},
{label:"Орловская область", value:"57"},
{label:"Пензенская область", value:"58"},
{label:"Пермская область", value:"59"},
{label:"Псковская область", value:"60"},
{label:"Ростовская область", value:"61"},
{label:"Рязанская область", value:"62"},
{label:"Самарская область", value:"63"},
{label:"Саратовская область", value:"64"},
{label:"Сахалинская область", value:"65"},
{label:"Свердловская область", value:"66"},
{label:"Смоленская область", value:"67"},
{label:"Тамбовская область", value:"68"},
{label:"Тверская область", value:"69"},
{label:"Томская область", value:"70"},
{label:"Тульская область", value:"71"},
{label:"Тюменская область", value:"72"},
{label:"Ульяновская область", value:"73"},
{label:"Челябинская область", value:"74"},
{label:"Читинская область", value:"75"},
{label:"Ярославская область", value:"76"},
{label:"Г. Москва", value:"77"},
{label:"Г. Санкт-Петербург", value:"78"},
{label:"Еврейская автономная область", value:"79"},
{label:"Агинский Бурятский автономный округ", value:"80"},
{label:"Коми-Пермяцкий автономный округ", value:"81"},
{label:"Корякский автономный округ", value:"82"},
{label:"Ненецкий автономный округ", value:"83"},
{label:"Таймырский (Долгано-Ненецкий) автономный округ", value:"84"},
{label:"Усть-Ордынский Бурятский автономный округ", value:"85"},
{label:"Ханты-Мансийский автономный округ - Югра", value:"86"},
{label:"Чукотский автономный округ", value:"87"},
{label:"Эвенкийский автономный округ", value:"88"},
{label:"Ямало-Ненецкий автономный округ", value:"89"},
{label:"Иные территории, включая город и космодром Байконур", value:"99"}


];
 

  
// задаем массив в качестве источника слов для автозаполнения.
$( "#tags" ).autocomplete({source: availableTags});
		


// или массив объектов
availableTags2 = [

{label:"АФГАНИСТАН", value:"004"},
{label:"АЛБАНИЯ", value:"008"},
{label:"АНТАРКТИДА", value:"010"},
{label:"АЛЖИР", value:"012"},
{label:"АМЕРИКАНСКОЕ САМОА", value:"016"},
{label:"АНДОРРА", value:"020"},
{label:"АНГОЛА", value:"024"},
{label:"АНТИГУА И БАРБУДА", value:"028"},
{label:"АЗЕРБАЙДЖАН", value:"031"},
{label:"АРГЕНТИНА", value:"032"},
{label:"АВСТРАЛИЯ", value:"036"},
{label:"АВСТРИЯ", value:"040"},
{label:"БАГАМЫ", value:"044"},
{label:"БАХРЕЙН", value:"048"},
{label:"БАНГЛАДЕШ", value:"050"},
{label:"АРМЕНИЯ", value:"051"},
{label:"БАРБАДОС", value:"052"},
{label:"БЕЛЬГИЯ", value:"056"},
{label:"БЕРМУДЫ", value:"060"},
{label:"БУТАН", value:"064"},
{label:"БОЛИВИЯ,МНОГОНАЦИОНАЛЬНОЕ ГОСУДАРСТВО", value:"068"},
{label:"БОСНИЯ И ГЕРЦЕГОВИНА", value:"070"},
{label:"БОТСВАНА", value:"072"},
{label:"ОСТРОВБУВЕ", value:"074"},
{label:"БРАЗИЛИЯ", value:"076"},
{label:"БЕЛИЗ", value:"084"},
{label:"БРИТАНСКАЯ ТЕРРИТОРИЯ В ИНДИЙСКОМ ОКЕАНЕ", value:"086"},
{label:"СОЛОМОНОВЫ ОСТРОВА", value:"090"},
{label:"ВИРГИНСКИЕ ОСТРОВА, БРИТАНСКИЕ", value:"092"},
{label:"БРУНЕЙ-ДАРУССАЛАМ", value:"096"},
{label:"БОЛГАРИЯ", value:"100"},
{label:"МЬЯНМА", value:"104"},
{label:"БУРУНДИ", value:"108"},
{label:"БЕЛАРУСЬ", value:"112"},
{label:"КАМБОДЖА", value:"116"},
{label:"КАМЕРУН", value:"120"},
{label:"КАНАДА", value:"124"},
{label:"КАБО-ВЕРДЕ", value:"132"},
{label:"ОСТРОВА КАЙМАН", value:"136"},
{label:"ЦЕНТРАЛЬНО-АФРИКАНСКАЯ РЕСПУБЛИКА", value:"140"},
{label:"ШРИ-ЛАНКА", value:"144"},
{label:"ЧАД", value:"148"},
{label:"ЧИЛИ", value:"152"},
{label:"КИТАЙ", value:"156"},
{label:"ТАЙВАНЬ(КИТАЙ)", value:"158"},
{label:"ОСТРОВ РОЖДЕСТВА", value:"162"},
{label:"КОКОСОВЫЕ (КИЛИНГ) ОСТРОВА", value:"166"},
{label:"КОЛУМБИЯ", value:"170"},
{label:"КОМОРЫ", value:"174"},
{label:"МАЙОТТА", value:"175"},
{label:"КОНГО", value:"178"},
{label:"КОНГО, ДЕМОКРАТИЧЕСКАЯ РЕСПУБЛИКА", value:"180"},
{label:"ОСТРОВА КУКА", value:"184"},
{label:"КОСТА-РИКА", value:"188"},
{label:"ХОРВАТИЯ", value:"191"},
{label:"КУБА", value:"192"},
{label:"КИПР", value:"196"},
{label:"ЧЕШСКАЯ РЕСПУБЛИКА", value:"203"},
{label:"БЕНИН", value:"204"},
{label:"ДАНИЯ", value:"208"},
{label:"ДОМИНИКА", value:"212"},
{label:"ДОМИНИКАНСКАЯ РЕСПУБЛИКА", value:"214"},
{label:"ЭКВАДОР", value:"218"},
{label:"ЭЛЬ-САЛЬВАДОР", value:"222"},
{label:"ЭКВАТОРИАЛЬНАЯ ГВИНЕЯ", value:"226"},
{label:"ЭФИОПИЯ", value:"231"},
{label:"ЭРИТРЕЯ", value:"232"},
{label:"ЭСТОНИЯ", value:"233"},
{label:"ФАРЕРСКИЕ ОСТРОВА", value:"234"},
{label:"ФОЛКЛЕНДСКИЕ ОСТРОВА (МАЛЬВИНСКИЕ)", value:"238"},
{label:"ЮЖНАЯ ДЖОРДЖИЯ И ЮЖНЫЕ САНДВИЧЕВЫ ОСТРОВА", value:"239"},
{label:"ФИДЖИ", value:"242"},
{label:"ФИНЛЯНДИЯ", value:"246"},
{label:"ЭЛАНДСКИЕ ОСТРОВА", value:"248"},
{label:"ФРАНЦИЯ", value:"250"},
{label:"ФРАНЦУЗСКАЯ ГВИАНА", value:"254"},
{label:"ФРАНЦУЗСКАЯ ПОЛИНЕЗИЯ", value:"258"},
{label:"ФРАНЦУЗСКИЕ ЮЖНЫЕ ТЕРРИТОРИИ", value:"260"},
{label:"ДЖИБУТИ", value:"262"},
{label:"ГАБОН", value:"266"},
{label:"ГРУЗИЯ", value:"268"},
{label:"ГАМБИЯ", value:"270"},
{label:"ПАЛЕСТИНСКАЯ ТЕРРИТОРИЯ, ОККУПИРОВАННАЯ", value:"275"},
{label:"ГЕРМАНИЯ", value:"276"},
{label:"ГАНА", value:"288"},
{label:"ГИБРАЛТАР", value:"292"},
{label:"КИРИБАТИ", value:"296"},
{label:"ГРЕЦИЯ", value:"300"},
{label:"ГРЕНЛАНДИЯ", value:"304"},
{label:"ГРЕНАДА", value:"308"},
{label:"ГВАДЕЛУПА", value:"312"},
{label:"ГУАМ", value:"316"},
{label:"ГВАТЕМАЛА", value:"320"},
{label:"ГВИНЕЯ", value:"324"},
{label:"ГАЙАНА", value:"328"},
{label:"ГАИТИ", value:"332"},
{label:"ОСТРОВ ХЕРДИ ОСТРОВА МАКДОНАЛЬД", value:"334"},
{label:"ПАПСКИЙ ПРЕСТОЛ (ГОСУДАРСТВО-ГОРОД ВАТИКАН)", value:"336"},
{label:"ГОНДУРАС", value:"340"},
{label:"ГОНКОНГ", value:"344"},
{label:"ВЕНГРИЯ", value:"348"},
{label:"ИСЛАНДИЯ", value:"352"},
{label:"ИНДИЯ", value:"356"},
{label:"ИНДОНЕЗИЯ", value:"360"},
{label:"ИРАН, ИСЛАМСКАЯ РЕСПУБЛИКА", value:"364"},
{label:"ИРАК", value:"368"},
{label:"ИРЛАНДИЯ", value:"372"},
{label:"ИЗРАИЛЬ", value:"376"},
{label:"ИТАЛИЯ", value:"380"},
{label:"КОТ Д'ИВУАР", value:"384"},
{label:"ЯМАЙКА", value:"388"},
{label:"ЯПОНИЯ", value:"392"},
{label:"КАЗАХСТАН", value:"398"},
{label:"ИОРДАНИЯ", value:"400"},
{label:"КЕНИЯ", value:"404"},
{label:"КОРЕЯ, НАРОДНО-ДЕМОКРАТИЧЕСКАЯ РЕСПУБЛИКА", value:"408"},
{label:"КОРЕЯ, РЕСПУБЛИКА", value:"410"},
{label:"КУВЕЙТ", value:"414"},
{label:"КИРГИЗИЯ", value:"417"},
{label:"ЛАОССКАЯ НАРОДНО-ДЕМОКРАТИЧЕСКАЯ РЕСПУБЛИКА", value:"418"},
{label:"ЛИВАН", value:"422"},
{label:"ЛЕСОТО", value:"426"},
{label:"ЛАТВИЯ", value:"428"},
{label:"ЛИБЕРИЯ", value:"430"},
{label:"ЛИВИЙСКАЯ АРАБСКАЯ ДЖАМАХИРИЯ", value:"434"},
{label:"ЛИХТЕНШТЕЙН", value:"438"},
{label:"ЛИТВА", value:"440"},
{label:"ЛЮКСЕМБУРГ", value:"442"},
{label:"МАКАО", value:"446"},
{label:"МАДАГАСКАР", value:"450"},
{label:"МАЛАВИ", value:"454"},
{label:"МАЛАЙЗИЯ", value:"458"},
{label:"МАЛЬДИВЫ", value:"462"},
{label:"МАЛИ", value:"466"},
{label:"МАЛЬТА", value:"470"},
{label:"МАРТИНИКА", value:"474"},
{label:"МАВРИТАНИЯ", value:"478"},
{label:"МАВРИКИЙ", value:"480"},
{label:"МЕКСИКА", value:"484"},
{label:"МОНАКО", value:"492"},
{label:"МОНГОЛИЯ", value:"496"},
{label:"МОЛДОВА, РЕСПУБЛИКА", value:"498"},
{label:"ЧЕРНОГОРИЯ", value:"499"},
{label:"МОНТСЕРРАТ", value:"500"},
{label:"МАРОККО", value:"504"},
{label:"МОЗАМБИК", value:"508"},
{label:"ОМАН", value:"512"},
{label:"НАМИБИЯ", value:"516"},
{label:"НАУРУ", value:"520"},
{label:"НЕПАЛ", value:"524"},
{label:"НИДЕРЛАНДЫ", value:"528"},
{label:"НИДЕРЛАНДСКИЕ АНТИЛЫ", value:"530"},
{label:"АРУБА", value:"533"},
{label:"НОВАЯ КАЛЕДОНИЯ", value:"540"},
{label:"ВАНУАТУ", value:"548"},
{label:"НОВАЯ ЗЕЛАНДИЯ", value:"554"},
{label:"НИКАРАГУА", value:"558"},
{label:"НИГЕР", value:"562"},
{label:"НИГЕРИЯ", value:"566"},
{label:"НИУЭ", value:"570"},
{label:"ОСТРОВ НОРФОЛК", value:"574"},
{label:"НОРВЕГИЯ", value:"578"},
{label:"СЕВЕРНЫЕ МАРИАНСКИЕ ОСТРОВА", value:"580"},
{label:"МАЛЫЕ ТИХООКЕАНСКИЕ ОТДАЛЕННЫЕ ОСТРОВА СОЕДИНЕННЫХ ШТАТОВ", value:"581"},
{label:"МИКРОНЕЗИЯ,ФЕДЕРАТИВНЫЕ ШТАТЫ", value:"583"},
{label:"МАРШАЛЛОВЫ ОСТРОВА", value:"584"},
{label:"ПАЛАУ", value:"585"},
{label:"ПАКИСТАН", value:"586"},
{label:"ПАНАМА", value:"591"},
{label:"ПАПУА-НОВАЯ ГВИНЕЯ", value:"598"},
{label:"ПАРАГВАЙ", value:"600"},
{label:"ПЕРУ", value:"604"},
{label:"ФИЛИППИНЫ", value:"608"},
{label:"ПИТКЕРН", value:"612"},
{label:"ПОЛЬША", value:"616"},
{label:"ПОРТУГАЛИЯ", value:"620"},
{label:"ГВИНЕЯ-БИСАУ", value:"624"},
{label:"ТИМОР-ЛЕСТЕ", value:"626"},
{label:"ПУЭРТО-РИКО", value:"630"},
{label:"КАТАР", value:"634"},
{label:"РЕЮНЬОН", value:"638"},
{label:"РУМЫНИЯ", value:"642"},
{label:"РОССИЯ", value:"643"},
{label:"РУАНДА", value:"646"},
{label:"СЕН-БАРТЕЛЕМИ", value:"652"},
{label:"СВЯТАЯ ЕЛЕНА", value:"654"},
{label:"СЕНТ-КИТС И НЕВИС", value:"659"},
{label:"АНГИЛЬЯ", value:"660"},
{label:"СЕНТ-ЛЮСИЯ", value:"662"},
{label:"СЕН-МАРТЕН", value:"663"},
{label:"СЕН-ПЬЕР И МИКЕЛОН", value:"666"},
{label:"СЕНТ-ВИНСЕНТ И ГРЕНАДИНЫ", value:"670"},
{label:"САН-МАРИНО", value:"674"},
{label:"САН-ТОМЕ И ПРИНСИПИ", value:"678"},
{label:"САУДОВСКАЯ АРАВИЯ", value:"682"},
{label:"СЕНЕГАЛ", value:"686"},
{label:"СЕРБИЯ", value:"688"},
{label:"СЕЙШЕЛЫ", value:"690"},
{label:"СЬЕРРА-ЛЕОНЕ", value:"694"},
{label:"СИНГАПУР", value:"702"},
{label:"СЛОВАКИЯ", value:"703"},
{label:"ВЬЕТНАМ", value:"704"},
{label:"СЛОВЕНИЯ", value:"705"},
{label:"СОМАЛИ", value:"706"},
{label:"ЮЖНАЯ АФРИКА", value:"710"},
{label:"ЗИМБАБВЕ", value:"716"},
{label:"ИСПАНИЯ", value:"724"},
{label:"ЗАПАДНАЯ САХАРА", value:"732"},
{label:"СУДАН", value:"736"},
{label:"СУРИНАМ", value:"740"},
{label:"ШПИЦБЕРГЕН И ЯНМАЙЕН", value:"744"},
{label:"СВАЗИЛЕНД", value:"748"},
{label:"ШВЕЦИЯ", value:"752"},
{label:"ШВЕЙЦАРИЯ", value:"756"},
{label:"СИРИЙСКАЯ АРАБСКАЯ РЕСПУБЛИКА", value:"760"},
{label:"ТАДЖИКИСТАН", value:"762"},
{label:"ТАИЛАНД", value:"764"},
{label:"ТОГО", value:"768"},
{label:"ТОКЕЛАУ", value:"772"},
{label:"ТОНГА", value:"776"},
{label:"ТРИНИДАД И ТОБАГО", value:"780"},
{label:"ОБЪЕДИНЕННЫЕ АРАБСКИЕ ЭМИРАТЫ", value:"784"},
{label:"ТУНИС", value:"788"},
{label:"ТУРЦИЯ", value:"792"},
{label:"ТУРКМЕНИЯ", value:"795"},
{label:"ОСТРОВА ТЕРКС И КАЙКОС", value:"796"},
{label:"ТУВАЛУ", value:"798"},
{label:"УГАНДА", value:"800"},
{label:"УКРАИНА", value:"804"},
{label:"РЕСПУБЛИКА МАКЕДОНИЯ", value:"807"},
{label:"ЕГИПЕТ", value:"818"},
{label:"СОЕДИНЕННОЕ КОРОЛЕВСТВО", value:"826"},
{label:"ГЕРНСИ", value:"831"},
{label:"ДЖЕРСИ", value:"832"},
{label:"ОСТРОВ МЭН", value:"833"},
{label:"ТАНЗАНИЯ, ОБЪЕДИНЕННАЯ РЕСПУБЛИКА", value:"834"},
{label:"СОЕДИНЕННЫЕ ШТАТЫ", value:"840"},
{label:"ВИРГИНСКИЕ ОСТРОВА,США", value:"850"},
{label:"БУРКИНА-ФАСО", value:"854"},
{label:"УРУГВАЙ", value:"858"},
{label:"УЗБЕКИСТАН", value:"860"},
{label:"ВЕНЕСУЭЛА БОЛИВАРИАНСКАЯ РЕСПУБЛИКА", value:"862"},
{label:"УОЛЛИС И ФУТУНА", value:"876"},
{label:"САМОА", value:"882"},
{label:"ЙЕМЕН", value:"887"},
{label:"ЗАМБИЯ", value:"894"},
{label:"АБХАЗИЯ", value:"895"},
{label:"ЮЖНАЯ ОСЕТИЯ", value:"896"}

];
 
 
  
// задаем массив в качестве источника слов для автозаполнения.
$( "#tags2" ).autocomplete({source: availableTags2});
		






		
		var availableTags1 = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion", "Коля", "Маша","Вася", "Петя",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags1
		});
		


	});
	</script>
	<style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	</style>






<!-- Autocomplete -->
<!--div>
	<input id="autocomplete" title="type &quot;a&quot;">
</div>


<div>
	<input id="tags" title="type &quot;и&quot;">
</div-->




