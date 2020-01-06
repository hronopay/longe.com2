<?
// обработка событий get-движка польз. раздела
include("funcz.php");
if (isset($_POST['tablelevel'])){

	show_status();
	$mode = getvar('mode');
	if (!isset($mode)) $mode="house";
	$mode(USER_ID); 

}

//       phpinfo(32);
?>


