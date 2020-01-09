<?php 

if (!$_COOKIE['lang'] || $_COOKIE['lang']=='en') 	include('locale/lang_en.php');
elseif($_COOKIE['lang']=='ru')  					include('locale/lang_ru.php');
else 												include('locale/lang_en.php');


if(isset($_GET['q']) AND trim($_GET['q'])){  
	if($_GET['q'] == 'market'){
		include('exchange/BTC-USDT.php');
	}
	elseif($_GET['q'] == 'signup'){
		include('signup.php');
	}
	elseif($_GET['q'] == 'registration'){
		include('registration.php');
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



