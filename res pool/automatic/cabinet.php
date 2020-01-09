<?  
session_start(); 
include("config.php");

if (!defined('IN_SITE')) {
    die("На выход");
} 
include("engine.php");
open_connection();






if(!defined(IS_PARTNER)){
	if (isset($_SESSION['login']) && isset($_SESSION['password'])) 	{
		$_POST['login']= $_SESSION['login'];
		$_POST['password']= $_SESSION['password'];
	}

	if (isset($_POST['login']) && isset($_POST['password'])) {
		$resu=check_partner_login($_POST['login'],$_POST['password']); 
	} 

	?><html>
		<head><title>Единый Дистанционный Расчетный Центр</title>
			<link href="css/<?=check_partner_color($_POST['login']);?>" rel="stylesheet" type="text/css">
			<SCRIPT language=JavaScript type="text/javascript" src="js/scripts.js"></SCRIPT>
		</head>
		<body>
			<script type="text/javascript" src="js/wz_tooltip.js"></script>
			<script type="text/javascript" src="js/tip_balloon.js"></script>

			<table border=0 bordercolor="#ff0000">
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
	else 		include("admin/partnavi.htm");
?>
					</td>
					
					<td  valign=top>&nbsp;&nbsp;&nbsp;&nbsp;</td>
					
					<td  valign=top>
<?
// в зависимости от результата аутентификации подключаем либо форму авторизации, либо содержимое польз. раздела
	if($resu)		include("admin/selection.php"); 
	else   echo '<form action="cabinet.php" method="POST">
		<table border=0>
			<tr>
				<td>Логин: </td>
				<td><input type="text" name="login"></td>
			</tr>
			<tr>
				<td>Пароль:</td>
				<td><input type=hidden name="doreg" value="1"><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan=2 align=left><input type=submit value="Войти"></td>
			</tr>
		</table>
		</form>';
	?>


				</td>
					<td  valign=top>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
		</table>




		<table border=0 bordercolor="#0000FF" align="center"><tr><td><center>&copy; 2009  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ООО «Интех»&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Все права защищены&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td> 
		
	</tr>
</table>
</body>
</html>

<? 
} 
?>
