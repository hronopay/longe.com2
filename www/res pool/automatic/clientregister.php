<?php  
include_once('include/ip.php');  
//include("include/header.php"); 
include_once("config.php");
include_once("engine.php");
	open_connection();

 ?>
<b>Заявка на регистрацию</b><br><br>

<p align="justify">Заполните пожалуйста регистрационную форму.<br>
На указанный Вами эл. адрес придет информационное письмо.<br>
</p>
                                            <?php include('include/newclient_form.php'); ?>
											
											
											
                                            <a href="pers_cab.php">Войти как партнер</a><script language="javascript">
<!--
	var data = new Date;
	document.getElementById('id_num').value = data.getTime().toString().substr(7);
-->
</script>

                                       
									 

<?php 
	close_connection();
// include('include/footer.php'); # Нижнее меню
?>