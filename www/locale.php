<?php
if($_POST["postID"] == 'ru' || $_REQUEST["postID"] == 'ru') 
	setcookie("lang","ru");
elseif($_POST["postID"] == 'chi' || $_REQUEST["postID"] == 'chi') 
	setcookie("lang","chi");
else 
	setcookie("lang","en");

$select = $_POST["postID"];

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


$checkCode = '<br>postID = '.$_POST["postID"].' <br>_COOKIE = '.$_COOKIE["lang"].'<br>'.date("H:i:s");
$checkCode = '';


$form = '
	<div  style="position:absolute; left:1400px; top:10px; ">
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



