<?php 
if ($_COOKIE['lang']=='chi') 	{
	include('locale/lang_chi.php');
	$selectLangMenuEN = '';
	$selectLangMenuRU = '';
	$selectLangMenuCHI = ' selected="selected"';
	$langMenu = '
	<div class="lang1" style="position:absolute; left:1400px; top:10px; ">
	<form id="language1" action="langcookie.php" method="get" name="checklang" enctype="text/plain">
		<select id="selectmenu" name="language" onChange="form.submit();">
			<option value="en" '.$selectLangMenuEN.'>English</option>
			<option value="ru" '.$selectLangMenuRU.'>Русский</option>
			<option value="chi" '.$selectLangMenuCHI.'>中国人</option>
		</select>
		<input type="hidden" name="redirectPage" value="'.$redirectPage.'">
	</form>
	</div>
	';
}
elseif($_COOKIE['lang']=='ru')  					{
	include('locale/lang_ru.php');
	$selectLangMenuEN = '';
	$selectLangMenuRU = ' selected="selected"';
	$selectLangMenuCHI = '';
	$langMenu = '
	<div class="lang1" style="position:absolute; left:1400px; top:10px; ">
	<form id="language1" action="langcookie.php" method="get" name="checklang" enctype="text/plain">
		<select id="selectmenu" name="language" onChange="form.submit();">
			<option value="en" '.$selectLangMenuEN.'>English</option>
			<option value="ru" '.$selectLangMenuRU.'>Русский</option>
			<option value="chi" '.$selectLangMenuCHI.'>中国人</option>
		</select>
		<input type="hidden" name="redirectPage" value="'.$redirectPage.'">
	</form>
	</div>
	';
}
else 												{
	include('locale/lang_en.php');
	$selectLangMenuEN = ' selected="selected"';
	$selectLangMenuRU = '';
	$selectLangMenuCHI = '';
	$langMenu = '
	<div class="lang1" style="position:absolute; left:1400px; top:10px; ">
	<form id="language1" action="langcookie.php" method="get" name="checklang" enctype="text/plain">
		<select id="selectmenu" name="language" onChange="form.submit();">
			<option value="en" '.$selectLangMenuEN.'>English</option>
			<option value="ru" '.$selectLangMenuRU.'>Русский</option>
			<option value="chi" '.$selectLangMenuCHI.'>中国人</option>
		</select>
		<input type="hidden" name="redirectPage" value="'.$redirectPage.'">
	</form>
	</div>
	';
}

 ?>



