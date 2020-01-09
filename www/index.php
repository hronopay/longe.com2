<?php 
if($_GET["language"] == 'ru' || $_REQUEST["language"] == 'ru') setcookie("lang","ru");
elseif($_GET["language"] == 'chi' || $_REQUEST["language"] == 'chi') setcookie("lang","chi");
else setcookie("lang","en");

//$redirectPage = str_replace('q=','',$_SERVER["QUERY_STRING"]);
$redirectPage = $_REQUEST['q'];
if(!$redirectPage)$redirectPage = 'firstpage';


include('locale.php');

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
	elseif(strstr($_GET['q'],'firstpage')){
		include('firstpage.php');
	}
	else{
		echo  "</h1>ДРУГАЯ страница<br>".$_GET['q']."</h1>";
	}
}
else{
	include('firstpage.php');
}

 
 ?>



