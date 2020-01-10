<?php 
include_once('include/ip.php');  
include("functions.php");

if($_GET['q'] == 'signup' || $_GET['q'] == 'registration'){
		echo '<link rel="stylesheet" type="text/css" href="../css/signup.css" />';
	}
	elseif($_GET['q'] == 'firstpage'){
		echo '<link rel="stylesheet" type="text/css" href="../css/firstpage.css" />';
	}
	else{
	echo  '<link rel="stylesheet" type="text/css" href="../css/market.css" />';
	//include('HitBTC.php');
	}
	

echo $langMenu;
// phpinfo(32);
?>


