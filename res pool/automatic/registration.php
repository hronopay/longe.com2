<?php 
include("include/header.php"); 
include_once("config.php");
include_once("engine.php");

	open_connection();


if ($_POST['doreg'])
{

		if ( isset($_POST['mail']) &&!empty($_POST['mail'])  && preg_match("/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i", trim($_POST['mail'])  )    ) { ; } 
		else  die("Ошибка! Поле \"E-mail\" не соответствует стандартам.<br>\n Нажмите <a href='javascript: history.back()'>назад</a> и попробуйте снова.<br>");

		if (0)
		{
			die ( "<br><br><strong>Ошибка! Вы не полностью заполнили форму регистрации. Нажмите <a href='javascript: history.back()'>назад</a> и попробуйте снова.<br></strong>");
		}
		
		else
		{
###################### СТАРТ OF origname (специальность) #####################
			if ($_POST['change_radio'] == "professionlist"){
		 		$origname = $_POST['origname_list'];
			}
			if ($_POST['change_radio'] == "newprofession"){
				$origname = $_POST['origname_new'];
				$query23="INSERT INTO origname (id_origname, origname_name) VALUES ('', '$origname')";
				#@mysql_query ($query23) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query23."<BR>");
			}
###################### END OF origname (специальность) ########################

			$fio_3 = str_replace('"','',$_POST['firmname']).' '.$_POST['fiof'].' '.$_POST['fioi'].' '.$_POST['fioo'];
			$type = (intval($_POST['type']) == 1) ? 'Физическое лицо' : ( intval($_POST['type']) == 2 ?'Юридическое лицо' : 'ВебМани');
			
			$to      = 'info@adressmoscow.ru,'.$_POST['mail'];
			$subject = '<<Регистрация нового клиента на adressmoscow.ru>>';
			$message = ' ';
			$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text; charset=windows-1251\r\n";
			$headers .= 'From: info@adressmoscow.ru' . "\r\n" .
		    'Reply-To: info@adressmoscow.ru' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();


			// сборка текста отправляемого сообщения
			$message = "\t Статус: ".$type."\n";
			$message .= "\t ФИО: ".$fio_3."\n";
			$message .= "\t Email: ".$_POST['mail']."\n"; 
			if($_POST['icq'])
				$message .= "\t ICQ: ".$_POST['icq']."\n";
			$message .= "\t Контактный телефон: ".$_POST['phone']."\n"; 
			$message .= "\t Телефон для сервиса: ".$_POST['phone_serv']."\n"; 
			$message .= "\t Наименование услуги: ".$origname."\n"; 
			$message .= "\t Подробнее: ".$_POST['details']."\n"; 
			$message .= "\t Время работы услуги: c ".$_POST['time_serv1']." до ".$_POST['time_serv2']."\n"; 
			$message .= "\t Тариф: ".$_POST['tarif']."\n"; 
			$message .= "\t Федеральный округ: ".$_POST['okrug']."\n"; 
			$message .= "\t ID: ".$_POST['id']."\n"; 
			$message .= "\t\n"; 
			$message .= "\t Логин в системе (вход в короткие номера): ".$_POST['id']."\n"; 
			$message .= "\t Пароль для входа: ".(  $pass = rand(11111, $_POST['id'])  )."\n"; 
			$message .= "\t\n"; 
			$message .= "\t Дата заполнения: ".$_POST['filledin']." ".$_POST['filledin_hm']."\n"; 
			$message .= "\t R-Кошелек WebMoney: ".$_POST['wmpurse']."\n"; 
			
			
			
			if ($_POST['tarif'] == 1) $redir_num = '9012028013';  else  $redir_num = '9012029438';
			
			$qins = "INSERT INTO `registration` ( `user_id` , `userlogin` , `payed` , `pass_hash` , `fio` , `mail` , `icq` , `tele_concact` , `additional` , `code` , `partner_num` , `redir_num` , `vremya1` , `vremya2` , `partner_type` , `origname` , `startdate` , `enddate`,  `type` ,  `tarif` ,  `okrug` ,  `id` ,  `filledin` ,  `filledin_hm` ,  `camefrom`,  `wmpurse` )
VALUES ( '', 'login', '', '".md5($pass)."', '".$fio_3."', '".$_POST['mail']."', '".$_POST['icq']."', '".$_POST['phone']."', '".$_POST['details']."', 'code', '".$_POST['phone_serv']."', '$redir_num', '".$_POST['time_serv1']."', '".$_POST['time_serv2']."', '', '$origname', '', '', '$type', '".$_POST['tarif']."', '".$_POST['okrug']."', '".$_POST['id']."', '".$_POST['filledin']."', '".$_POST['filledin_hm']."', '".$_COOKIE["ivrcustref"]."', '".$_POST['wmpurse']."' )";

			sql_do($qins);
			//    if ( !isset($_COOKIE["ivrcustref"]) )   camefrom
			$qins1 = "INSERT INTO `users_jkh` ( `user_id` , `userlogin` , `payed` , `pass_hash` , `fio` , `mail` , `icq` , `tele_concact` , `additional` , `code` , `partner_num` , `redir_num` , `vremya1` , `vremya2` , `partner_type` , `origname` , `startdate` , `enddate`,  `type` ,  `activationdate` ,  `activationtime` ,  `wmpurse` )
VALUES ( '', '".$_POST['id']."', '', '".md5($pass)."', '".$fio_3."', '".$_POST['mail']."', '".$_POST['icq']."', '".$_POST['phone']."', '".$_POST['details']."', 'code', '".$_POST['phone_serv']."', '$redir_num', '".$_POST['time_serv1']."', '".$_POST['time_serv2']."', '', '$origname', '', '', '$type', '".$_POST['filledin']."', '".$_POST['filledin_hm']."', '".$_POST['wmpurse']."' )";

			sql_do($qins1);




//-------------------------------------------------------------------------------1й уровень---------------------------------------------------------------------------------


$qins2 = "
CREATE TABLE IF NOT EXISTS `".$_POST['id']."__user` (
  `id` int(5) NOT NULL auto_increment,
  `organization` varchar(255) NOT NULL COMMENT 'Партнер',
  `kolvoip` int(10) NOT NULL COMMENT 'Создано ИП',
  `kolvoooo` int(10) NOT NULL COMMENT 'Создано ООО',
  `color` varchar(255) NOT NULL  default 'cabinet_style.css'  COMMENT 'invisible',

  `parent` varchar(255) NOT NULL COMMENT 'invisible',
  `children` varchar(255) NOT NULL COMMENT 'invisible __ooo __ip __prices',
  `level` varchar(255) NOT NULL COMMENT 'invisible 1 ООО ИП расценки',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible партнер',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			sql_do($qins2);
$qins2 = "
INSERT INTO `".$_POST['id']."__user` (`id`, `organization`, `kolvoip`, `kolvoooo`, `color`, `parent`, `children`, `level`, `objrusname`) VALUES
(1, '".$_POST['firmname']."', '', '', 'cabinet_style.css', '', '', '', '')";
			sql_do($qins2);




$qins2 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__orgforma` (
  `id` int(4) NOT NULL auto_increment,
  `nazvanie` varchar(255) NOT NULL COMMENT 'invisible',
  `kolvoip` varchar(255) NOT NULL COMMENT 'Создано ИП',
  `kolvoooo` varchar(255) NOT NULL COMMENT 'Создано ООО',

  `parent` varchar(255) NOT NULL COMMENT 'invisible',
  `children` varchar(255) NOT NULL COMMENT 'invisible __ooo __ip',
  `level` varchar(255) NOT NULL COMMENT 'invisible 1 ООО ИП',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible оргформами',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins2);


//-------------------------------------------------------------------------- 2й ровень-----------------------------------------------------------------------------


$qins2 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__ooo` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` int(4) NOT NULL COMMENT 'invisible',
  `dateofcreation` varchar(255) NOT NULL COMMENT 'invisible',
  `orgforma` varchar(255) NOT NULL  default 'ООО'  COMMENT 'Организационная форма',
  `naimenovanie` varchar(255) NOT NULL COMMENT 'Наименование полное',

  `nameshort` varchar(255) NOT NULL COMMENT 'Наименование сокращ.',
  `foreignnamefull` varchar(255) NOT NULL COMMENT 'Наим. иностр. полное',
  `foreignnameshort` varchar(255) NOT NULL COMMENT 'Наим. иностр. сокращ.',
  `language` varchar(255) NOT NULL COMMENT 'На каком языке',
  `nalogovaya` varchar(5) NOT NULL  default '7746'  COMMENT 'Номер налоговой (4ц)',
  `from_date` varchar(25) NOT NULL default '2013-01-01'  COMMENT 'Дата устав, реш., прот.',

  `ooo_newmoscow` int(4) NOT NULL COMMENT 'Москва',
  `pochtindex` varchar(255) NOT NULL COMMENT 'Почт. индекс',
  `subyektrf` int(4) NOT NULL default '77'  		COMMENT 'Субъект РФ (код)',
  `subject` varchar(255) NOT NULL  default 'г. Москва'  COMMENT 'Субъект Рос. Федерации',
  `rajon` varchar(255) NOT NULL COMMENT 'Район',
  `gorod` varchar(255) NOT NULL  default 'Москва' COMMENT 'Город',
  `naspunkt` varchar(255) NOT NULL COMMENT 'Населенный пункт',
  `ulitca` varchar(255) NOT NULL COMMENT 'Улица',
  `dom` varchar(255) NOT NULL COMMENT 'Дом*',
  `korpus` varchar(255) NOT NULL COMMENT 'Корпус*',
  `kvartira` varchar(255) NOT NULL COMMENT 'Квартира*',

  `kapital` double NOT NULL COMMENT 'Уставный капитал',
  `docs_yn` varchar(5) NOT NULL COMMENT 'Подготовка документов',
  `vyezd_yn` varchar(5) NOT NULL COMMENT 'Выезд для подачи',
  `statkody_yn` varchar(5) NOT NULL COMMENT 'Коды статистики',
  `pechat_yn` varchar(5) NOT NULL COMMENT 'Изгот. печати',
  `scet_yn` varchar(5) NOT NULL COMMENT 'Открытие счета',
  `usn_chto` varchar(255) NOT NULL COMMENT 'УСН',
  `telefon` varchar(15) NOT NULL COMMENT 'Телефон',
  `email` varchar(255) NOT NULL COMMENT 'E-mail',
  `notes` text NOT NULL COMMENT 'Напоминания',
  `svodnaya_yn` varchar(5) NOT NULL default 'да' COMMENT 'сводная тбл',
  `vidimost_yn` varchar(5) NOT NULL default 'да' COMMENT 'видимость тбл',
  `inn` varchar(14) NOT NULL COMMENT 'ИНН',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __user',
  `children` varchar(255) NOT NULL COMMENT 'invisible __ooopersons __okvedooo __juradres __correspondence __files',
  `level` varchar(255) NOT NULL COMMENT 'invisible 2 участники ОКВЕД ЮрАдрес Письма Файлы',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible ООО',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins2);


$qins2 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__ip` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` int(4) NOT NULL COMMENT 'invisible',
  `dateofcreation` varchar(255) NOT NULL COMMENT 'invisible',
  `orgforma` varchar(255) NOT NULL  default 'ИП'  COMMENT  'Организационная форма',
  `familya` varchar(255) NOT NULL COMMENT 'Фамилия',
  `inn` varchar(12) NOT NULL  COMMENT 'ИНН',
  `nalogovaya` varchar(255) NOT NULL  default '7746'  COMMENT 'Номер налоговой (4ц)',

  `nalogname` varchar(255) NOT NULL  default 'Межрайонную инспекцию Федеральной налоговой службы № 46 по г. Москве'  COMMENT 'В какую налоговую (В ...)',
  `nalognamein` varchar(255) NOT NULL  default 'Межрайонной инспекции Федеральной налоговой службы № 46 по г. Москве'  COMMENT 'В какой налоговой (В ...)',

  `docs_yn` varchar(5) NOT NULL COMMENT 'Подготовка документов',
  `vyezd_yn` varchar(5) NOT NULL COMMENT 'Выезд для подачи',
  `statkody_yn` varchar(5) NOT NULL COMMENT 'Коды статистики',
  `pechat_yn` varchar(5) NOT NULL COMMENT 'Изгот. печати',
  `scet_yn` varchar(5) NOT NULL COMMENT 'Открытие счета',
  `usn_chto` varchar(255) NOT NULL COMMENT 'УСН',
  `telefon` varchar(15) NOT NULL COMMENT 'Телефон',
  `email` varchar(255) NOT NULL COMMENT 'E-mail',

  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __user',
  `children` varchar(255) NOT NULL COMMENT 'invisible __ippersons __okvedip',
  `level` varchar(255) NOT NULL COMMENT 'invisible 2 паспорт ОКВЕД',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible ИП',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins2);





$qins2 = "
CREATE TABLE IF NOT EXISTS `".$_POST['id']."__prices` (
  `id` int(11) NOT NULL auto_increment,
  `idlevel_1` int(4) NOT NULL  default '1'  COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `dateofcreation` varchar(255) NOT NULL COMMENT 'invisible',
  `from_date` varchar(25) NOT NULL default '2010-01-01'  COMMENT 'Дата нач.',
  `docsooo` int(10) NOT NULL COMMENT 'Док-ты для ООО',
  `docsip` 	int(10) NOT NULL COMMENT 'Док-ты для ИП',
  `vyezd` 	int(10) NOT NULL COMMENT 'Выезд в налоговую',
  `kody` 	int(10) NOT NULL COMMENT 'Коды статистики',
  `pechat` 	int(10) NOT NULL COMMENT 'Изг. печати',
  `ja6m`	int(10) NOT NULL COMMENT 'ЮрАдр на 6 месяцев',
  `ja11m` 	int(10) NOT NULL COMMENT 'ЮрАдр на 11 месяцев',
  `pso` 	int(10) NOT NULL COMMENT 'ПСО',
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __user',
  `children` varchar(255) NOT NULL COMMENT 'invisible',
  `level` varchar(255) NOT NULL COMMENT 'invisible 2',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible ценами на услуги',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1
";
sql_do($qins2);




//---------------------------------------------------------------------------------------   3й уровень----------------------------------






$qins3 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__files` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `idlevel_1` int(4) NOT NULL COMMENT 'invisible',
  `idlevel_2` int(4) NOT NULL COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `dateofcreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'invisible',
  `docname` varchar(255) NOT NULL COMMENT 'Документ',
  `upload_d` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Дата загрузки',
  `filename` varchar(255) NOT NULL COMMENT 'Название',
  `size` bigint(20) NOT NULL COMMENT 'Размер',
  `notes` text NOT NULL COMMENT 'Напоминания',
  `parent` varchar(255) NOT NULL COMMENT 'invisible __ooo',
  `children` varchar(255) NOT NULL COMMENT 'invisible',
  `level` varchar(255) NOT NULL COMMENT 'invisible 3',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible файлами',
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins3);





$qins3 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__juradres` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` int(4) NOT NULL COMMENT 'invisible',
  `idlevel_2` int(4) NOT NULL COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `dateofcreation` varchar(255) NOT NULL COMMENT 'invisible',
  `frdate_d` varchar(255) NOT NULL  COMMENT 'Договор с',
  `juradr_srok` varchar(255) NOT NULL COMMENT 'На срок',
  `pso_yn` varchar(255) NOT NULL COMMENT 'ПСО',
  `adr_pismazabor` varchar(255) NOT NULL COMMENT 'Выдача в',
  `cost` int(9) NOT NULL COMMENT 'Начислено оплата',
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __ooo',
  `children` varchar(255) NOT NULL COMMENT 'invisible __oplataja',
  `level` varchar(255) NOT NULL COMMENT 'invisible 3 Оплата',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible периодами аренды',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins3);






$qins3 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__okvedooo` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` int(4) NOT NULL COMMENT 'invisible',
  `idlevel_2` int(4) NOT NULL COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `dateofcreation` varchar(255) NOT NULL COMMENT 'invisible',
  `nomerokved` varchar(255) NOT NULL COMMENT 'Номер',
  `egotext` text NOT NULL COMMENT 'Текст',
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __ooo',
  `children` varchar(255) NOT NULL COMMENT 'invisible',
  `level` varchar(255) NOT NULL COMMENT 'invisible 3',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible видами экономдеятельности',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins3);






$qins3 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__okvedip` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` int(4) NOT NULL COMMENT 'invisible',
  `idlevel_2` int(4) NOT NULL COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `dateofcreation` varchar(255) NOT NULL COMMENT 'invisible',
  `nomerokved` varchar(255) NOT NULL COMMENT 'Номер',
  `egotext` text NOT NULL COMMENT 'Текст',
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __ip',
  `children` varchar(255) NOT NULL COMMENT 'invisible',
  `level` varchar(255) NOT NULL COMMENT 'invisible 3',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible видами экономдеятельности',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins3);





$qins3 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__ooopersons` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` int(4) NOT NULL COMMENT 'invisible',
  `idlevel_2` int(4) NOT NULL COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `dateofcreation` varchar(255) NOT NULL COMMENT 'invisible',
  `familya` varchar(255) NOT NULL COMMENT 'Фамилия',
  `imya` varchar(255) NOT NULL COMMENT 'Имя',
  `otchestvo` varchar(255) NOT NULL COMMENT 'Отчество',

  `fiorod` varchar(255) NOT NULL COMMENT 'От кого заявл. (ФИО)',
  `fiovin` varchar(255) NOT NULL COMMENT 'Кого назначили (ФИО)',

  `uchreditel_yn` varchar(255) NOT NULL COMMENT 'Учредитель',
  `gendir_yn` varchar(255) NOT NULL COMMENT 'Ген. дир.',
  `zayavitel_yn` varchar(255) NOT NULL default 'нет'  COMMENT 'Заявитель',

  `inn` varchar(12) NOT NULL  COMMENT 'ИНН',

  `his_pol` varchar(4) NOT NULL COMMENT 'Пол',
  `mestorojdeniya` varchar(255) NOT NULL COMMENT 'Место рождения',
  `from_date` varchar(25) NOT NULL default '2010-01-01'  COMMENT 'Дата рождения',

  `dokument_dvid` varchar(255) NOT NULL COMMENT 'Вид документа',

  `seriap` varchar(255) NOT NULL COMMENT 'Серия пасп.',
  `nomerp` varchar(255) NOT NULL COMMENT 'Номер  пасп.',
  `kemvydanp` varchar(255) NOT NULL COMMENT 'Кем выдан пасп.',
  `to_date` varchar(25) NOT NULL default '2010-01-01'  COMMENT 'Дата выдачи пасп.',
  `kodp` varchar(255) NOT NULL COMMENT 'Код подразделения',

  `his_newmoscow` int(4) NOT NULL COMMENT 'Москва',
  `pochtindex` varchar(255) NOT NULL COMMENT 'Почт. индекс',
  `subyektrf` int(4) NOT NULL COMMENT 'Субъект РФ (код)',
  `subject` varchar(255) NOT NULL COMMENT 'Субъект Рос. Федерации',
  `rajon` varchar(255) NOT NULL COMMENT 'Район',
  `gorod` varchar(255) NOT NULL COMMENT 'Город',
  `naspunkt` varchar(255) NOT NULL COMMENT 'Населенный пункт',
  `ulitca` varchar(255) NOT NULL COMMENT 'Улица',
  `dom` varchar(255) NOT NULL COMMENT 'Дом',
  `korpus` varchar(255) NOT NULL COMMENT 'Корпус',
  `kvartira` varchar(255) NOT NULL COMMENT 'Квартира',

  `strana` varchar(255) NOT NULL COMMENT 'Не РФ: страна жительства',
  `mesto` varchar(255) NOT NULL COMMENT 'Не РФ: адр. места жительства',


  `dolyanominal` float NOT NULL COMMENT 'Доля рублей*',
  `dolyaprocent` float NOT NULL COMMENT 'Доля проценты*',
  `drob1` int(4) NOT NULL COMMENT 'пр. дробь числитель',
  `drob2` int(4) NOT NULL COMMENT 'пр. дробь знаменатель',

  `telefon` varchar(15) NOT NULL COMMENT 'Телефон',
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __ooo',
  `children` varchar(255) NOT NULL COMMENT 'invisible',
  `level` varchar(255) NOT NULL COMMENT 'invisible 3',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible паспортными данными участников',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins3);




$qins3 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__ippersons` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` int(4) NOT NULL COMMENT 'invisible',
  `idlevel_2` int(4) NOT NULL COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `dateofcreation` varchar(255) NOT NULL COMMENT 'invisible',
  `familya` varchar(255) NOT NULL COMMENT 'Фамилия',
  `imya` varchar(255) NOT NULL COMMENT 'Имя',
  `otchestvo` varchar(255) NOT NULL COMMENT 'Отчество',
  `fiorod` varchar(255) NOT NULL COMMENT 'От кого заявл. (ФИО)',

  `his_pol` varchar(4) NOT NULL COMMENT 'Пол',
  `from_date` varchar(25) NOT NULL default '2010-01-01'  COMMENT 'Дата рождения',
  `mestorojdeniya` varchar(255) NOT NULL COMMENT 'Место рождения',

  `gragdanstvo` int(4) NOT NULL default '1'  		COMMENT 'Гражданство',
  `gosudarstvo` varchar(255) NOT NULL             	COMMENT 'Государство гражданства',

  `his_newmoscow` int(4) NOT NULL COMMENT 'Москва',
  `pochtindex` varchar(255) NOT NULL COMMENT 'Почт. индекс',
  `subyektrf` int(4) NOT NULL default '77'  		COMMENT 'Субъект РФ (код)',
  `subject` varchar(255) NOT NULL COMMENT 'Субъект Рос. Федерации',
  `rajon` varchar(255) NOT NULL COMMENT 'Район',
  `gorod` varchar(255) NOT NULL COMMENT 'Город',
  `naspunkt` varchar(255) NOT NULL COMMENT 'Населенный пункт',
  `ulitca` varchar(255) NOT NULL COMMENT 'Улица',
  `dom` varchar(255) NOT NULL COMMENT 'Дом',
  `korpus` varchar(255) NOT NULL COMMENT 'Корпус',
  `kvartira` varchar(255) NOT NULL COMMENT 'Квартира',

  `kodvidadokumenta` int(4) NOT NULL default '21'  	COMMENT 'Код вида док-та',
  `seriap` varchar(255) NOT NULL COMMENT 'Серия пасп.',
  `nomerp` varchar(255) NOT NULL COMMENT 'Номер  пасп.',
  `kemvydanp` varchar(255) NOT NULL COMMENT 'Кем выдан пасп.',
  `to_date` varchar(25) NOT NULL default '2010-01-01'  COMMENT 'Дата выдачи пасп.',
  `kodp` varchar(255) NOT NULL COMMENT 'Код подразделения',

  `inostrdoctype`  varchar(4) NOT NULL   				COMMENT 'И-Д тип',
  `inostrdocnomer` varchar(100) NOT NULL 			COMMENT 'И-Д номер',
  `inostrdoc_d` varchar(25) NOT NULL 				COMMENT 'И-Д когда выдан',
  `inostrdocvydan` varchar(255) NOT NULL 			COMMENT 'И-Д кем выдан',
  `inostrdocdeystvie_d` varchar(255) NOT NULL 		COMMENT 'И-Д действ. до',
  
  `lfamilya` varchar(255) NOT NULL COMMENT 'Фамилия лат.',
  `limya` varchar(255) NOT NULL COMMENT 'Имя лат.',
  `lotchestvo` varchar(255) NOT NULL COMMENT 'Отчество лат.',


  `vydacha` int(4) NOT NULL default '2'  			COMMENT 'Выдача док-тов из 46 ИФНС',



  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __ip',
  `children` varchar(255) NOT NULL COMMENT 'invisible',
  `level` varchar(255) NOT NULL COMMENT 'invisible 3',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible паспортными_данными',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins3);




$qins3 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__correspondence` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` int(4) NOT NULL COMMENT 'invisible',
  `idlevel_2` int(4) NOT NULL COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `dateofcreation` varchar(255) NOT NULL COMMENT 'invisible',
  `fromp` varchar(255) NOT NULL COMMENT 'От кого',
  `receive_d` varchar(255) NOT NULL COMMENT 'Дата получения',
  `letknow_d` varchar(255) NOT NULL COMMENT 'Когда оповестили',
  `emailinformed_d` varchar(11) NOT NULL COMMENT 'Инф. по email',
  `given_yn` varchar(255) NOT NULL COMMENT 'Отдали',
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __ooo',
  `children` varchar(255) NOT NULL COMMENT 'invisible',
  `level` varchar(255) NOT NULL COMMENT 'invisible 3',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible полученной кореспонденцией',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins3);



//---------------------------------------------------------------------------------------  4й уровень----------------------------------



$qins3 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__oplataja` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` int(4) NOT NULL COMMENT 'invisible',
  `idlevel_2` int(4) NOT NULL COMMENT 'invisible',
  `idlevel_3` int(4) NOT NULL COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `dateofcreation` varchar(255) NOT NULL COMMENT 'invisible',
  `from_date` varchar(25) NOT NULL default '2013-01-01'  COMMENT 'Дата внесения',
  `payed` int(9) NOT NULL COMMENT 'Получено оплата',
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __juradres',
  `children` varchar(255) NOT NULL COMMENT 'invisible',
  `level` varchar(255) NOT NULL COMMENT 'invisible 4',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible внесенными оплатами',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins3);



//------------------------------------------------------------------------------------------------------------------------------------------------------------


$qins4 = "
CREATE TABLE IF NOT EXISTS `".$_POST['id']."__dnevnik` (
  `cnt` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idx` int(10) unsigned NOT NULL,
  `user` int(10) unsigned NOT NULL,
  `t` datetime NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `body` longtext NOT NULL,
  `podacha` text NOT NULL,
  `poluchenie` text NOT NULL,
  PRIMARY KEY (`cnt`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			sql_do($qins4);

$qins4 = "
CREATE TABLE IF NOT EXISTS `".$_POST['id']."__nachislenia_temp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idlevel_1` int(9) NOT NULL,
  `idlevel_2` int(9) NOT NULL,
  `date` varchar(20) NOT NULL,
  `nachislenie` float NOT NULL,
  `oplata` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 
";
			sql_do($qins4);

$qins4 = "
CREATE TABLE IF NOT EXISTS `".$_POST['id']."__saldofixed` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idlevel_1` int(9) NOT NULL,
  `idlevel_2` int(9) NOT NULL,
  `date` varchar(20) NOT NULL,
  `nachislenie` double NOT NULL,
  `oplata` double NOT NULL,
  `peny` double NOT NULL,
  `saldo` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 
";
			sql_do($qins4);






$qins6 = "
CREATE TABLE IF NOT EXISTS `yn` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `value` bigint(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";

			if ( sql_do($qins6) )
{
$qins6 = "TRUNCATE TABLE `yn`"; sql_do($qins6);
$qins6 = "
INSERT INTO `yn` (`id`, `name`, `value`) VALUES(1, 'да', 1),(2, 'нет', 0);
";
			sql_do($qins6);
}


$qins7 = "
CREATE TABLE IF NOT EXISTS `pol` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `value` bigint(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			if ( sql_do($qins7) )
{
$qins6 = "TRUNCATE TABLE `pol`"; sql_do($qins6);
$qins7 = "
INSERT INTO `pol` (`id`, `name`, `value`) VALUES (1, 'муж.', 1), (2, 'жен.', 2);
";
			sql_do($qins7);
}


$qins7 = "
CREATE TABLE IF NOT EXISTS `newmoscow` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `value` bigint(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			if ( sql_do($qins7) )
{
$qins6 = "TRUNCATE TABLE `newmoscow`"; sql_do($qins6);
$qins7 = "
INSERT INTO `newmoscow` (`id`, `name`, `value`) VALUES (1, 'старая', 1), (2, 'новая', 2);
";
			sql_do($qins7);
}


$qins7 = "
CREATE TABLE IF NOT EXISTS `chto` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `value` bigint(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			if ( sql_do($qins7) )
{
$qins6 = "TRUNCATE TABLE `chto`"; sql_do($qins6);
$qins7 = "
INSERT INTO `chto` (`id`, `name`, `value`) VALUES (1, 'нет.', 0), (2, '6%', 1), (3, '15%', 2);
";
			sql_do($qins7);
}

$qins7 = "
CREATE TABLE IF NOT EXISTS `dvid` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `value` bigint(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			if ( sql_do($qins7) )
{
$qins6 = "TRUNCATE TABLE `dvid`"; sql_do($qins6);
$qins7 = "
INSERT INTO `dvid` (`id`, `name`, `value`) VALUES (1, 'паспорт гражданина России', 0), (2, 'паспорт иностранного гражданина', 1);
";
			sql_do($qins7);
}

dvid

$qins6 = "
CREATE TABLE IF NOT EXISTS `dolya` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `value` bigint(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			if ( sql_do($qins6) )
{
$qins6 = "TRUNCATE TABLE `dolya`"; sql_do($qins6);
$qins6 = "
INSERT INTO `dolya` (`id`, `name`, `value`) VALUES(1, '1', 1),(2, '1/2', 2),(3, '1/3', 3),(4, '1/4', 4),(5, '1/5', 5),(6, '1/6', 6),(7, '1/7', 7),(8, '1/8', 8),(9, 'нет', 0);
";
			sql_do($qins6);
}


$qins6 = "
CREATE TABLE IF NOT EXISTS `srok` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `value` bigint(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			if ( sql_do($qins6) )
{
$qins6 = "TRUNCATE TABLE `srok`"; sql_do($qins6);
$qins6 = "
INSERT INTO `srok` (`id`, `name`, `value`) VALUES(1, 'нет', 0),(2, '6 мес', 6),(3, '11 мес', 11);
";
			sql_do($qins6);
}



$qins6 = "
CREATE TABLE IF NOT EXISTS `pismazabor` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `value` bigint(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			if ( sql_do($qins6) )
{
$qins6 = "TRUNCATE TABLE `pismazabor`"; sql_do($qins6);
$qins6 = "
INSERT INTO `pismazabor` (`id`, `name`, `value`) VALUES(1, 'НП', 0),(2, 'БПР', 1);
";
			sql_do($qins6);
}







$qins6 = "
CREATE TABLE IF NOT EXISTS `okved` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `value` varchar(9) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			if ( sql_do($qins6) )
{
$qins6 = "TRUNCATE TABLE `okved`"; sql_do($qins6);
$qins6 = "
INSERT INTO `okved` (`id`, `name`, `value`) VALUES(1, 'СЕЛЬСКОЕ ХОЗЯЙСТВО, ОХОТА И ПРЕДОСТАВЛЕНИЕ УСЛУГ В ЭТИХ ОБЛАСТЯХ', '01'),(2, 'Растениеводство', '01.1'),(3, 'Выращивание зерновых, технических и прочих сельскохозяйственных культур, не включенных в другие группировки', '01.11');
";
			sql_do($qins6);
}





















 $qins6 = "
CREATE TABLE IF NOT EXISTS `help` (
  `id` int(11) NOT NULL auto_increment,
  `table` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			if ( sql_do($qins6) )
{
//$qins6 = "TRUNCATE TABLE `allorsocnorma`"; sql_do($qins6);
 $qins16 = "";
	//		sql_do($qins16);
}




$qins4 = "
CREATE TABLE IF NOT EXISTS `".$_POST['id']."__pachki` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kvid` int(9) NOT NULL,
  `domid` int(9) NOT NULL,
  `kvnumber` int(9) NOT NULL,
  `domadress` varchar(255) NOT NULL,
  `nazvanie` varchar(255) NOT NULL,
  `datecreate` varchar(20) NOT NULL,
  `dateoplaty` varchar(20) NOT NULL,
  `oplata` double NOT NULL,
  `bank` varchar(255) NOT NULL,
  `done` tinyint(3) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 
";
			sql_do($qins4);
$qins4 = "
CREATE TABLE IF NOT EXISTS `".$_POST['id']."__pachkispisok` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nazvanie` varchar(255) NOT NULL,
  `dateofcreation` varchar(20) NOT NULL,
  `razneseno` int(3) NOT NULL,
  `razneszapisey` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 
";
			sql_do($qins4);

$qins4 = "
CREATE TABLE IF NOT EXISTS `".$_POST['id']."__bankplateja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nazvanie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 
";
			sql_do($qins4);




echo "<br>";







			
			if(mail($to, $subject, $message, $headers))
			{
				/* echo "<script>alert(\"Спасибо, Ваша заявка отправлена.\\nВ ближайшее время, на указанный вами e-mail, придет инструкция с дальнейшими действиями.\"); </script>"; //   self.location=\"/\"; */
				echo '<b>Спасибо, Ваша заявка отправлена.<br> В ближайшее время на указанный вами адрес '.$_POST['mail'].' придет инструкция с дальнейшими действиями.</b>'; 
			}
			else
			{
				/* echo "<script>alert(\"Ваша заявка не отправлена по техническим причинам. Попробуйте отправить заявку позже.\"); self.location=\"/register.php\";</script>" */;
			 }
			
			$to      = 'info@adressmoscow.ru,'.$_POST['mail'];
#			$to = $_POST['mail'];
			$subject = '<<Регистрация на adressmoscow.ru>>';
			$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text; charset=windows-1251\r\n";
			$headers .= 'From: info@adressmoscow.ru' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
			
			if (intval($_POST['type']) == 1 ) {			
				$message = '
';

$message .= $_POST['id']; 

$message .= '';
		} 
		else {
			$message = '';

$message .= $_POST['id']; 

$message .= '';
		}
			
			
			//mail($to, $subject, $message, $headers);
			
include('screenmessage.php'); 
			
/***********************************************************************/		
require "include/class_email.php";

$email = new emailer;

				$email->subject = $subject;
				$email->to      = $to;
				$email->from    = "info@".$_SERVER["SERVER_NAME"]; //info@adressmoscow.ru
				$email->message	= $preambula.$screenmessage;
				$email->html_email = 1;
				$email->char_set = 'windows-1251';
				$email->send_mail();

/***********************************************************************/		
			
			
			
			echo "<h4>Рекомендуем Вам сохранить следующую информацию:</h4>";
			//$message = str_replace("ШАГ", "<br><br>ШАГ",$screenmessage);
			$screenmessage = str_replace("Ваш ID", "<span>Ваш ID</span>",$screenmessage);
			echo ''.$screenmessage.'';
		}
}

?>

<br>
<br>
<!-- Google Code for Регистрация Conversion Page -->
<script language="JavaScript" type="text/javascript">
<!--
var google_conversion_id = 1040881165;
var google_conversion_language = "ru";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "mBcbCPWbThCNrKrwAw";
//-->
</script>
<script language="JavaScript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<img height="1" width="1" border="0" src="http://www.googleadservices.com/pagead/conversion/1040881165/?label=mBcbCPWbThCNrKrwAw&amp;script=0">
</noscript>
</td>
<?php 
	close_connection();
 include('include/footer.php'); # Нижнее меню
?>
