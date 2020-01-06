<?php 

#include('include/header.php'); 


if(isset($_GET['q']) AND trim($_GET['q'])){  
	if($_GET['q'] == 'market'){
		include('exchange/BTC-USDT.php');
	}
	elseif($_GET['q'] == 'signup'){
		include('signup.php');
	}
	else{
	echo  "</h1>ДРУГАЯ страница<br>".$_GET['q']."</h1>";
	//include('HitBTC.php');
	}
}
else{
	//echo  "<h1>главная страница<br>".$_GET['q']."</h1>";
	include('firstpage.php');

}

 
 ?>



