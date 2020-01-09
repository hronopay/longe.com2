<? 
session_start(); 
?>
<html>
		<head><title>Расчетный Центр</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?
include("config.php");

include("autocomplete.php");


if (!defined('IN_SITE')) {
    die("На выход");
} 

include("engine.php");
open_connection();

if(!defined(IS_PARTNER)){
	if (isset($_SESSION['partnerlogin']) && isset($_SESSION['password'])) 	{
		$_POST['partnerlogin']= $_SESSION['partnerlogin'];
		$_POST['password']= $_SESSION['password'];
	}

	if (   isset($_POST['partnerlogin']) ) {
		$resu=check_adminBYpartner_login($_POST['partnerlogin'],$_SESSION['password']); 
	} 

	?>			
	
	<link href="css/<?=check_partner_color($_POST['partnerlogin']);?>" rel="stylesheet" type="text/css">
			<SCRIPT language=JavaScript type="text/javascript" src="js/scripts.js"></SCRIPT>
		</head>
		<body>
			<script type="text/javascript" src="js/wz_tooltip.js"></script>
			<script type="text/javascript" src="js/tip_balloon.js"></script>

			<table border=0>
				<tr>
					<td  valign=top>&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td  valign=top>&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td  valign=top>&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr>
				<tr>
					<td valign=top>
<?
// в зависимости от результата аутентификации подключаем панель меню
	if($resu)	include("admin/ivrnavi.php"); 
	else 		/* include("admin/partnavi.htm") */;
?>
					</td>

					<td  valign=top>&nbsp;&nbsp;&nbsp;&nbsp;</td>

					<td  valign=top>
<?
// в зависимости от результата аутентификации подключаем либо форму авторизации, либо содержимое польз. раздела
	if($resu){ ?>
<?
		include("admin/selection.php"); 
	}
	else  { 
 		?> 
		<form action="adm_cabinet.php" method="POST">
		<table border=0>
			<tr>
				<td>Логин: </td>
				<td><input type="text" name="partnerlogin"></td>
			</tr>
			
			<tr>
				<td colspan=2 align=left><input type=submit value="Войти"></td>
			</tr>
		</table>
		</form><? 
	} 
?>


				</td>
					<td  valign=top>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
		</table>




		<table border=0 align="center"><tr><td><center>&copy; 2008  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ООО «Интех»&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Все права защищены&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td> 
		
<? 
} 
?>
	</tr>
</table>
</body>
</html>
<?php 
//phpinfo(32);
?>