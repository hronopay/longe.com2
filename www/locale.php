<?php
if($_POST["setCookie"] == 'ru' || $_REQUEST["setCookie"] == 'ru') 
	setcookie("lang","ru");
elseif($_POST["setCookie"] == 'chi' || $_REQUEST["setCookie"] == 'chi') 
	setcookie("lang","chi");
elseif($_POST["setCookie"] == 'en' || $_REQUEST["setCookie"] == 'en') 
	setcookie("lang","chi");

$select = $_POST["setCookie"] ? $_POST["setCookie"] : $_COOKIE["lang"] ;

if ($select=='chi') 	{
	$selectLangMenuEN = '';
	$selectLangMenuRU = '';
	$selectLangMenuCHI = ' selected="selected"';
}
elseif($select=='ru')  					{
	$selectLangMenuEN = '';
	$selectLangMenuRU = ' selected="selected"';
	$selectLangMenuCHI = '';
}
else 												{
	$selectLangMenuEN = ' selected="selected"';
	$selectLangMenuRU = '';
	$selectLangMenuCHI = '';
}


$checkCode = '<br>setCookie = '.$_POST["setCookie"].' <br>_COOKIE = '.$_COOKIE["lang"].'<br>'.date("H:i:s");
$checkCode = '';


$form = '
	<div class="lang1" style="position:absolute; left:1400px; top:10px; ">
		<form id="lang_send">
			<select id="selectmenu">
				<option value="en" '.$selectLangMenuEN.'>English</option>
				<option value="ru" '.$selectLangMenuRU.'>Русский</option>
				<option value="chi" '.$selectLangMenuCHI.'>中国人</option>
			</select>
		</form>'.$checkCode.' 
		</div>
';
echo  $form;

 ?>



