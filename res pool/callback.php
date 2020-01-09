<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
</head>
<body>

<?
			
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
if (strstr($text, "<") || strstr($text, "http") || strstr($name, "<") || strstr($email, "<") || strstr($phone, "<")) $name = '';

if (/* $sec_code == '941327' && */ $name && $phone){
	$qu = $_SERVER["SERVER_NAME"]."<br>С сайта adressmoscow поступил вопрос!<br><br><br>".$text.'<br><br>'.$name.'<br><br>'.$email.'<br><br>'.$phone;
/***********************************************************************/
	require "include/class_email.php";

	$email9 = new emailer;

				$email9->subject = "".$_SERVER["SERVER_NAME"]." - Позвонить клиенту (от ".date("H:i:s d-m-20y").")";
				$email9->to      = /* 'info@adressmoscow.ru, '. */'nickdorofeev@gmail.com, ilyadok@gmail.com';
				$email9->from    = "feedback@".$_SERVER["SERVER_NAME"];
				$email9->message	= $qu;
				$email9->html_email = 1;
				$email9->char_set = 'utf-8';
				$email9->send_mail();
?>
<div style="
	border:1px solid blue; 
	left:300px; 
	padding:20px; 
	margin: 50px 300px 10px 300px; 
	font-family:Arial, Helvetica, sans-serif; 
	text-align:center; 
	background-color:#eeeeee">

<strong>Ваше сообщение было отправлено в службу поддержки.</strong><br><br>
Текст сообщения:<br><?=$text?><br><br>
Имя:<br><?=$name?><br><br>
Адрес для ответа:<br><?=$email?><br><br>
Телефон:<br><?=$phone?><br><br>
<strong>Спасибо за интерес к нашей компании! <br>
В самое ближайшее время наши сотрудники обязательно свяжутся с Вами.</strong>										 
										
</div>										
										
										
<?php }
else  echo "Неверный код безопасности!!!<br>";

?>
										

<br>
<br>
<div style="
	border:1px solid blue; 
	left:300px; 
	padding:20px; 
	margin: 5px 600px 50px 600px; 
	font-family:Arial, Helvetica, sans-serif; 
	text-align:center; 
	background-color:#0000aa;
	color:#FFFFFF">
	<a style="color:#FFFFFF " href="http://adressmoscow.ru">Вернуться на главную страницу</a>
</div>

</body>
</html>

