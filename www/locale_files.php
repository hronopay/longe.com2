<?php
//if ($_COOKIE['lang']) include('locale/lang_'.$_COOKIE['lang'].'.php');
if ($_POST['langv']) include('locale/lang_'.$_POST['langv'].'.php');
elseif ($_COOKIE["lang"]) include('locale/lang_'.$_COOKIE["lang"].'.php');
else include('locale/lang_en.php');
/* 
echo ' <br>_COOKIE = '.$_COOKIE["lang"].'<br>';
echo ' <br>langv = '.$_POST["langv"].'<br>';
echo ' <br>action = '.$_POST["action"].'<br>';
 */
?>



