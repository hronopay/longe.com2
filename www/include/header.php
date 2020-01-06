<?php 
include("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<?php
	if($_GET['q'] == 'signup'){
		echo '<link rel="stylesheet" type="text/css" href="../css/signup.css" />';
	}
	elseif($_GET['q'] == 'firstpage'){
		echo '<link rel="stylesheet" type="text/css" href="../css/firstpage.css" />';
	}
	else{
	echo  '<link rel="stylesheet" type="text/css" href="../css/market.css" />';
	//include('HitBTC.php');
	}
	
?>

	<link href="jquery-ui.css" rel="stylesheet">


</head>
<body>



<?php // phpinfo(32);?>


