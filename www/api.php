<?php
include_once("config.php");
include_once("engine.php");
open_connection();
include('locale_files.php');


if(isset($_POST['page']) AND trim($_POST['page'])){  
	if($_POST['page'] == 'market'){
		include('exchange/BTC-USDT.php');
	}
	elseif($_POST['page'] == 'signup'){
		include('signup.php');
	}
	elseif($_POST['page'] == 'registration'){
		include('registration.php');
	}
	elseif(strstr($_POST['page'],'firstpage')){
		include('firstpage.php');
	}
	else{
		echo  "</h1>ДРУГАЯ страница<br>".$_POST['page']."</h1>";
	}
}
else{
	include('firstpage.php');
}



close_connection();
include('include/footer.php');

?>