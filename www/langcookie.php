<?php 
if($_GET["language"] == 'ru' || $_REQUEST["language"] == 'ru') setcookie("lang","ru");
elseif($_GET["language"] == 'chi' || $_REQUEST["language"] == 'chi') setcookie("lang","chi");
else setcookie("lang","en");
header('Location: firstpage');
exit;
?>
