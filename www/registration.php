<?php 
include("include/header.php"); 
include_once("config.php");
include_once("engine.php");

	open_connection();

$_POST['id'] = round (time()/3, 0);

if ($_POST['doreg']){

	if ((!$_POST['mail']) ) echo "Ошибка! Вы не  заполнили поле 'Почта'. Нажмите <a href='javascript: history.back()'>назад</a> и попробуйте снова.<br>";
		
	if ( isset($_POST['mail']) &&!empty($_POST['mail'])  && preg_match("/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i", trim($_POST['mail']))) 
		{ ; } 
	else  
		die("Ошибка! Поле \"E-mail\" не соответствует стандартам.<br>\n Нажмите <a href='javascript: history.back()'>назад</a> и попробуйте снова.<br>");



	if ( (!$_POST['mail']) || (!$_POST['phone']) ){
		die ( "<br><br><strong>Ошибка! Вы не полностью заполнили форму регистрации. Нажмите <a href='javascript: history.back()'>назад</a> и попробуйте снова.<br></strong>");
		}
	else{
		$to      = 'nlo22-go2@yahoo.com,'.$_POST['mail'];
		$subject = 'Client registration on BuySell Project Exchange';
		$message = ' ';
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text; charset=UTF-8\r\n";
		$headers .= 'From: ' . 'no-reply@'.$_SERVER["SERVER_NAME"] . "\r\n" . 'Reply-To: ' . 'no-reply@'.$_SERVER["SERVER_NAME"] . "\r\n" . 'X-Mailer: PHP/' . phpversion();

			// сборка текста отправляемого сообщения
		$message .= "\t Email: ".$_POST['mail']."\n"; 
		$message .= "\t ID: ".$_POST['id']."\n"; 
		$message .= "\t\n"; 
		$message .= "\t Логин в системе (вход в короткие номера): ".$_POST['mail']."\n"; 
		$message .= "\t Пароль для входа: ".(  $pass = rand(11111, $_POST['id'])  )."\n"; 
		$message .= "\t\n"; 
		$message .= "\t Дата заполнения: ".$_POST['filledin']." ".$_POST['filledin_hm']."\n"; 
		
		if ($_POST['tarif'] == 1) $redir_num = '9012028013';  else  $redir_num = '9012029438';
			
		$qins = "INSERT INTO `registration` ( `user_id` , `userlogin` , `payed` , `pass_hash` , `fio` , `mail` , `icq` , `tele_concact` , `additional` , `code` , `partner_num` , `redir_num` , `vremya1` , `vremya2` , `partner_type` , `origname` , `startdate` , `enddate`,  `type` ,  `tarif` ,  `okrug` ,  `id` ,  `filledin` ,  `filledin_hm` ,  `camefrom`,  `wmpurse` ) VALUES ( '', 'login', '', '".md5($pass)."', '', '".$_POST['mail']."', '', '".$_POST['phone']."', '', 'code', '', '', '', '', '', '', '', '', '', '', '', '".$_POST['id']."', '".$_POST['filledin']."', '".$_POST['filledin_hm']."', '".$_COOKIE["ivrcustref"]."', '' )";

		sql_do($qins);
			//    if ( !isset($_COOKIE["ivrcustref"]) )   camefrom
		$qins1 = "INSERT INTO `users_ivr` ( `user_id` , `userlogin` , `payed` , `pass_hash` , `fio` , `mail` , `icq` , `tele_concact` , `additional` , `code` , `partner_num` , `redir_num` , `vremya1` , `vremya2` , `partner_type` , `origname` , `startdate` , `enddate`,  `type` ,  `activationdate` ,  `activationtime` ,  `wmpurse` ) VALUES ( '', '".$_POST['id']."', '', '".md5($pass)."', '', '".$_POST['mail']."', '', '".$_POST['phone']."', '', 'code', '', '', '', '', '', '', '', '', '', '".$_POST['filledin']."', '".$_POST['filledin_hm']."', '' )";

		sql_do($qins1);

	
		if(mail($to, $subject, $message, $headers)){
			echo '<b>Спасибо, Ваша заявка отправлена.<br> В ближайшее время на указанный вами адрес '.$_POST['mail'].' придет инструкция с дальнейшими действиями.</b>'; 
		}
		else{
			echo "Ваша заявка не отправлена по техническим причинам. Попробуйте отправить заявку позже." ;
		}
			
		$to      = 'admin@buysellcoin.org,'.'nlo22-go2@yahoo.com,'.$_POST['mail'];
		$subject = 'Client registration on BuySell Project Exchange';
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text; charset=UTF-8\r\n";
		$headers .= 'From: info@mcall.ru' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
			
		if (intval($_POST['type']) == 1 ) {			
			$message = '';
			$message .= $_POST['id']; 
			$message .= '';
		} 
		else {
			$message = '';
			$message .= $_POST['id']; 
			$message .= '';
		}
			
		$screenmessage = '
		<br>
		To complete the sign-up process, please follow the link:
		<br>
		http://'.$_SERVER["SERVER_NAME"].'/confirm-email?token=209fbddcdcce8a4084ce4e8e8b8a46d2b927f0c9415c4a89b0d64553e1b5c363
		<br>
		This link will expire in 48 hours.
		<br>
		You may be asked to enter this confirmation code: 209fbddcdcce8a4084ce4e8e8b8a46d2b927f0c9415c4a89b0d64553e1b5c363
		<br><br>
		Best regards,
		<br>
		BuySell Project Team';
		$preambula = 'Thank you for signing up for BuySell Project';
  
			
		/***********************************************************************/		
		
		require "include/class_email.php";

		$email = new emailer;

				$email->subject = $subject;
				$email->to      = $to;
				$email->from    = "no-reply@".$_SERVER["SERVER_NAME"];
				$email->message	= $preambula.$screenmessage;
				$email->html_email = 1;
				$email->char_set = 'UTF-8';
				$email->send_mail();

		/***********************************************************************/		
			
		}
}


	close_connection();
 include('include/footer.php');
?>
