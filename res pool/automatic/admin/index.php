<?
// аутентификация

session_start();
header ("Content-Type: text/html; charset=utf-8");

include("../config.php");
	if (!defined('IN_SITE')) {
		die("На выход");
	}

include("../engine.php");
open_connection();

if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
	$_POST['login']= $_SESSION['login'];
	$_POST['password']= $_SESSION['password'];
	}

if (isset($_POST['login']) && isset($_POST['password'])) {
	check_admin($_POST['login'],$_POST['password']);
} 
else {
	close_connection();
	?>
<html>
<title>Расчетный Центр</title>
<script src="../js/sorttable.js"></script>
<body>
<div align="center" style="width:200px; border:1px solid #aa0000; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; color:#006666; margin:200px 400px; padding:5px; ">
<form action="" method="POST">
Логин: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="login" size="10"><br>
Пароль:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" size="10"><br>
<input type="submit" name="enter" value="Go!">
</form>
</div>
</body></html>
	<?
die();
}

/*--Paranoid check--*/
if(IS_ADMIN!=1) die("Paranoid check");

?>


<html>
<head><title>Расчетный Центр</title>



<link href="style.css" rel="stylesheet" type="text/css">

<script language="JavaScript1.2">
<!--
function refresh()
{
       window.location.reload( false );
}
//-->
</script>

</head>
<body>
<table border=0>
	<tr>
		<td valign="top">
			<? include("adminnavi.php"); ?>
		</td>
		
		<td  valign="top">
			<table width="100%" cellpadding=10 cellspacing=0 border=0 >
				<tr>
					<td>
						<? include("admin_selection.php"); ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<br><center>
			&copy; 2007  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ООО «Интех»&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Все права защищены&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>
		</td>
	</tr>
</table>
<?php //phpinfo(32);?>

</body></html> 







