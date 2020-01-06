<?php 
include("include/header.php"); 
include_once("config.php");
include_once("engine.php");

	open_connection();


if ($_POST['doreg'])
{
//	echo "<font color='#ffffff' size='2' face='Arial'>Отправка регистрационных данных...<br><br>";      details

	
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
			
			$to      = 'info@mcall.ru,'.$_POST['mail'];
			$subject = '<<Регистрация нового клиента на mcall.ru>>';
			$message = ' ';
			$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text; charset=windows-1251\r\n";
			$headers .= 'From: info@mcall.ru' . "\r\n" .
		    'Reply-To: info@mcall.ru' . "\r\n" .
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
  `organization` varchar(255) NOT NULL COMMENT 'Организация',
  `director` varchar(255) NOT NULL COMMENT 'Директор',
  `glavbuh` varchar(255) NOT NULL COMMENT 'Главбух',
  `color` varchar(255) NOT NULL  default 'cabinet_style.css'  COMMENT 'invisible',
  `parent` varchar(255) NOT NULL COMMENT 'invisible',
  `children` varchar(255) NOT NULL COMMENT 'invisible __prices',
  `level` varchar(255) NOT NULL COMMENT 'invisible 1 расценки',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible партнеры',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
";
			sql_do($qins2);
$qins2 = "
INSERT INTO `".$_POST['id']."__user` (`id`, `organization`, `director`, `glavbuh`, `color`, `parent`, `children`, `level`, `objrusname`) VALUES
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


//------------------------------------------------------------------------------- 2й уровень---------------------------------------------------------------------------------


$qins2 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__ooo` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` tinyint(4) NOT NULL COMMENT 'invisible',
  `nazvanie` varchar(255) NOT NULL COMMENT 'invisible',
  `orgforma` varchar(255) NOT NULL  default 'ООО'  COMMENT 'Организационная форма',
  `naimenovanie` varchar(255) NOT NULL COMMENT 'Наименование',
  `juradress` varchar(255) NOT NULL COMMENT 'Юридический адрес',
  `kapital` varchar(255) NOT NULL COMMENT 'Уставный капитал',
  `docs_yn` varchar(5) NOT NULL COMMENT 'Подготовка документов',
  `vyezd_yn` varchar(5) NOT NULL COMMENT 'Выезд для подачи',
  `statkody_yn` varchar(5) NOT NULL COMMENT 'Коды статистики',
  `pechat_yn` varchar(5) NOT NULL COMMENT 'Изгот. печати',
  `scet_yn` varchar(5) NOT NULL COMMENT 'Открытие счета',
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __orgforma',
  `children` varchar(255) NOT NULL COMMENT 'invisible __ooopersons',
  `level` varchar(255) NOT NULL COMMENT 'invisible 2 участники',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible ООО',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins2);


$qins2 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__ip` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` tinyint(4) NOT NULL COMMENT 'invisible',
  `nazvanie` varchar(255) NOT NULL COMMENT 'invisible',
  `orgforma` varchar(255) NOT NULL  default 'ИП'  COMMENT  'Организационная форма',
  `familya` varchar(255) NOT NULL COMMENT 'Фамилия',
  `docs_yn` varchar(5) NOT NULL COMMENT 'Подготовка документов',
  `vyezd_yn` varchar(5) NOT NULL COMMENT 'Выезд для подачи',
  `statkody_yn` varchar(5) NOT NULL COMMENT 'Коды статистики',
  `pechat_yn` varchar(5) NOT NULL COMMENT 'Изгот. печати',
  `scet_yn` varchar(5) NOT NULL COMMENT 'Открытие счета',
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __orgforma',
  `children` varchar(255) NOT NULL COMMENT 'invisible __ippersons ',
  `level` varchar(255) NOT NULL COMMENT 'invisible 2 паспорт',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible ИП',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins2);





$qins2 = "
CREATE TABLE IF NOT EXISTS `".$_POST['id']."__prices` (
  `id` int(11) NOT NULL auto_increment,
  `idlevel_1` tinyint(4) NOT NULL  default '1'  COMMENT 'invisible',
  `nazvanie` varchar(255) NOT NULL COMMENT 'Сокр. название',
  `fullname` text NOT NULL COMMENT 'Полное название',
  `osnovanie` text NOT NULL COMMENT 'Основание',
  `docs` text NOT NULL COMMENT 'Необх. документ',
  `value` bigint(5) NOT NULL,
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __user',
  `children` varchar(255) NOT NULL COMMENT 'invisible',
  `level` varchar(255) NOT NULL COMMENT 'invisible 2',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible ценами услуг',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1
";
sql_do($qins2);


//---------------------------------------------------------------------------------------   3й уровень----------------------------------



$qins3 = "CREATE TABLE IF NOT EXISTS `".$_POST['id']."__ooopersons` (
  `id` int(20) NOT NULL auto_increment,
  `idlevel_1` tinyint(4) NOT NULL COMMENT 'invisible',
  `idlevel_2` tinyint(4) NOT NULL COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `nazvanie` varchar(255) NOT NULL COMMENT 'invisible',
  `familya` varchar(255) NOT NULL COMMENT 'Фамилия',
  `imya` varchar(255) NOT NULL COMMENT 'Имя',
  `otchestvo` varchar(255) NOT NULL COMMENT 'Отчество',

  `uchreditel_yn` varchar(255) NOT NULL COMMENT 'Учредитель',
  `gendir_yn` varchar(255) NOT NULL COMMENT 'Ген. дир.',
  `zayavitel_yn` varchar(255) NOT NULL COMMENT 'Заявитель',

  `pol` varchar(255) NOT NULL COMMENT 'Пол',
  `mestorojdeniya` varchar(255) NOT NULL COMMENT 'Место рождения',
  `from_date` varchar(25) NOT NULL default '2010-01-01'  COMMENT 'Дата рождения',

  `seriap` varchar(255) NOT NULL COMMENT 'Серия пасп.',
  `nomerp` varchar(255) NOT NULL COMMENT 'Номер  пасп.',
  `kemvydanp` varchar(255) NOT NULL COMMENT 'Кем выдан пасп.',
  `to_date` varchar(25) NOT NULL default '2010-01-01'  COMMENT 'Дата выдачи пасп.',
  `kodp` varchar(255) NOT NULL COMMENT 'Код подразделения',

  `pochtindex` varchar(255) NOT NULL COMMENT 'Почт. индекс',
  `gorod` varchar(255) NOT NULL COMMENT 'Город',
  `ulitca` varchar(255) NOT NULL COMMENT 'Улица',
  `dom` varchar(255) NOT NULL COMMENT 'Дом',
  `korpus` varchar(255) NOT NULL COMMENT 'Корпус',
  `kvartira` varchar(255) NOT NULL COMMENT 'Квартира',


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
  `idlevel_1` tinyint(4) NOT NULL COMMENT 'invisible',
  `idlevel_2` tinyint(4) NOT NULL COMMENT 'invisible',
  `adress` varchar(255) NOT NULL COMMENT 'uneditable',
  `nazvanie` varchar(255) NOT NULL COMMENT 'invisible',
  `familya` varchar(255) NOT NULL COMMENT 'Фамилия',
  `imya` varchar(255) NOT NULL COMMENT 'Имя',
  `otchestvo` varchar(255) NOT NULL COMMENT 'Отчество',

  `pol` varchar(255) NOT NULL COMMENT 'Пол',
  `mestorojdeniya` varchar(255) NOT NULL COMMENT 'Место рождения',
  `from_date` varchar(25) NOT NULL default '2010-01-01'  COMMENT 'Дата рождения',

  `seriap` varchar(255) NOT NULL COMMENT 'Серия пасп.',
  `nomerp` varchar(255) NOT NULL COMMENT 'Номер  пасп.',
  `kemvydanp` varchar(255) NOT NULL COMMENT 'Кем выдан пасп.',
  `to_date` varchar(25) NOT NULL default '2010-01-01'  COMMENT 'Дата выдачи пасп.',
  `kodp` varchar(255) NOT NULL COMMENT 'Код подразделения',

  `pochtindex` varchar(255) NOT NULL COMMENT 'Почт. индекс',
  `gorod` varchar(255) NOT NULL COMMENT 'Город',
  `ulitca` varchar(255) NOT NULL COMMENT 'Улица',
  `dom` varchar(255) NOT NULL COMMENT 'Дом',
  `korpus` varchar(255) NOT NULL COMMENT 'Корпус',
  `kvartira` varchar(255) NOT NULL COMMENT 'Квартира',


  `telefon` varchar(15) NOT NULL COMMENT 'Телефон',
  `notes` text NOT NULL COMMENT 'Напоминания',

  `parent` varchar(255) NOT NULL COMMENT 'invisible __ip',
  `children` varchar(255) NOT NULL COMMENT 'invisible',
  `level` varchar(255) NOT NULL COMMENT 'invisible 3',
  `objrusname` varchar(20) NOT NULL COMMENT 'invisible паспортными_данными',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
			sql_do($qins3);



//---------------------------------------------------------------------------------------  4й уровень----------------------------------

//------------------------------------------------------------------------------------------------------------------------------------------------------------


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
INSERT INTO `pol` (`id`, `name`, `value`) VALUES (1, 'муж.', 1), (2, 'жен.', 0);
";
			sql_do($qins7);
}



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
			
			$to      = 'info@mcall.ru,'.$_POST['mail'];
#			$to = $_POST['mail'];
			$subject = '<<Регистрация на mcall.ru>>';
			$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text; charset=windows-1251\r\n";
			$headers .= 'From: info@mcall.ru' . "\r\n" .
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
				$email->from    = "info@".$_SERVER["SERVER_NAME"]; //info@mcall.ru
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
