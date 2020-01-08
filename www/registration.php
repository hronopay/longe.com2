<?php 
include_once('include/ip.php');  
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
		die("Error! The \"E-mail\" field is not up to standard. <br> \ n Click <a href='javascript: history.back()'> back </a> and try again.<br>");
		//die("Ошибка! Поле \"E-mail\" не соответствует стандартам.<br>\n Нажмите <a href='javascript: history.back()'>назад</a> и попробуйте снова.<br>");



	if ( (!$_POST['mail']) || (!$_POST['phone']) ){
		die ( "<br><br><strong>Error! You have not fully completed the registration form. Click <a href='javascript: history.back()'> back </a> and try again.<br></strong>");
		//die ( "<br><br><strong>Ошибка! Вы не полностью заполнили форму регистрации. Нажмите <a href='javascript: history.back()'>назад</a> и попробуйте снова.<br></strong>");
		}
	else{
		$to      = 'nlo22-go2@yahoo.com,'.$_POST['mail'];
		$subject = 'Client registration on BuySell Project Exchange';
		$message = ' ';
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text; charset=UTF-8\r\n";
		$headers .= 'From: ' . 'no-reply@'.$_SERVER["SERVER_NAME"] . '\r\n' . 'Reply-To: ' . 'no-reply@'.$_SERVER["SERVER_NAME"] . "\r\n" . 'X-Mailer: PHP/' . phpversion();

			// сборка текста отправляемого сообщения
		$message .= "\t Email: ".$_POST['mail']."\n"; 
		$message .= "\t ID: ".$_POST['id']."\n"; 
		$message .= "\t\n"; 
		$message .= "\t Логин в системе (вход в короткие номера): ".$_POST['mail']."\n"; 
		$message .= "\t Пароль для входа: ".(  $pass = rand(11111, $_POST['id'])  )."\n"; 
		$message .= "\t\n"; 
		$message .= "\t Дата заполнения: ".$_POST['filledin']." ".$_POST['filledin_hm']."\n"; 
					
		$qins = "INSERT INTO `registration` ( `user_id` , `userlogin` , `payed` , `pass_hash` , `fio` , `mail` , `icq` , `tele_concact` , `additional` , `code` , `partner_num` , `redir_num` , `vremya1` , `vremya2` , `partner_type` , `origname` , `startdate` , `enddate`,  `type` ,  `tarif` ,  `okrug` ,  `id` ,  `filledin` ,  `filledin_hm` ,  `camefrom`,  `wmpurse` ) VALUES ( '', 'login', '', '".md5($pass)."', '', '".$_POST['mail']."', '', '".$_POST['phone']."', '', 'code', '', '', '', '', '', '', '', '', '', '', '', '".$_POST['id']."', '".$_POST['filledin']."', '".$_POST['filledin_hm']."', '".$_COOKIE["ivrcustref"]."', '' )";

		sql_do($qins);
			//    if ( !isset($_COOKIE["ivrcustref"]) )   camefrom
		$qins1 = "INSERT INTO `users_ivr` ( `user_id` , `userlogin` , `payed` , `pass_hash` , `fio` , `mail` , `icq` , `tele_concact` , `additional` , `code` , `partner_num` , `redir_num` , `vremya1` , `vremya2` , `partner_type` , `origname` , `startdate` , `enddate`,  `type` ,  `activationdate` ,  `activationtime` ,  `wmpurse` ) VALUES ( '', '".$_POST['id']."', '', '".md5($pass)."', '', '".$_POST['mail']."', '', '".$_POST['phone']."', '', 'code', '', '', '', '', '', '', '', '', '', '".$_POST['filledin']."', '".$_POST['filledin_hm']."', '' )";

		sql_do($qins1);

	
		if(mail($to, $subject, $message, $headers)){
			echo '<div class="general">
<h3>Verify Your Email Address</h3>
	<div align="left"><span class="verifyemail" style="font-size:14px; "><strong>
		A verification email has been sent to <span style="color:#66FF66; "> '.$_POST['mail'].'</span>.<br>
		Please open the email and click on the "Verify" button to confirm that the email address belongs to you.
		<br><br>
		Did not receive the email within 5 minutes?<br>
		- Make sure you provided the correct email address.<br>
		- Check your email spam / junk folder.</strong></span>
	</div>
</div>'; 
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
<table border="1" cellpadding="0" cellspacing="0" width="600" style="color: rgb(29, 34, 40); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; border: 3pt solid rgb(231, 232, 239); font-size: 10pt; font-family: Calibri;">
  <tbody>
    <tr style="border: rgb(231, 232, 239); padding: 0px;">
      <td colspan="2" style="background-color: rgb(0, 34, 85); text-align: center; padding-top: 53px; padding-bottom: 53px;"><br>
          <img alt="[BuySell Project]" src="http://'.$_SERVER["SERVER_NAME"].'/img/logoexch.png" style="text-indent: -9999px;"><br>
          <br></td>
    </tr>
    <tr>
      <td width="25" style="border: white;"> </td>
      <td style="border: white;"><br>
          <h1><span style="font-size: 19pt; font-family: Verdana; color: black;">BuySell Project Verification</span></h1>
          <br></td>
    </tr>
    <tr>
      <td width="25" style="border: white;"> </td>
      <td style="border: white;"><div style="color: rgb(129, 129, 129); font-size: 10.5pt; font-family: Verdana;">Dear '.$_POST['mail'].',<br>
              <br>
              Thank you for signing up with<span> </span><a rel="nofollow" target="_blank" href="http://'.$_SERVER["SERVER_NAME"] .'" style="color: rgb(91, 155, 213); text-decoration: underline;">BuySell Project</a>. To provide you the best service possible, we require you to verify your email address. If you are receiving this email and have never signed up with us, please feel free to ignore this email. To finish your verification, please click the button below.<br>
              <a rel="nofollow" target="_blank" href="http://'.$_SERVER["SERVER_NAME"].'/account/VerifyRegistration/H73AmRjnQGgfGmVCyEALpg2" style="color: rgb(25, 106, 212); text-decoration: underline;">
              <input type="button" value="Verify Email" style="min-height: 44px; width: 200px; border-radius: 3px; border: 1px solid rgb(27, 122, 179); background-color: rgb(0, 132, 212); color: rgb(255, 255, 255); font-size: 14px; font-weight: bold; margin: 20px 0px; cursor: pointer;">
              </a><br>
              If you cannot confirm by clicking the button above, copy and paste it into your browser to proceed with your registration.<br>
              <br>
              <a rel="nofollow" target="_blank" href="http://'.$_SERVER["SERVER_NAME"].'/account/VerifyRegistration/H73AmRjnQGgfGmVCyEALpg2" style="color: rgb(91, 155, 213); text-decoration: underline;">http://'.$_SERVER["SERVER_NAME"].'/account/VerifyRegistration/H73AmRjnQGgfGmVCyEALpg2</a><br>
              <br>
              <br>
              Best regards,<br>
              BuySell Project Team<br>
      </div></td>
    </tr>
    <tr>
      <td width="25" style="border: white;"> </td>
      <td style="border: white;"><div style="color: rgb(129, 129, 129); font-size: 9pt; font-family: Verdana;"><br>
              <br>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" style="min-height: 30pt; background-color: rgb(231, 232, 239); border: none;"><center>
          You are receiving this email because you registered on<span> </span><a rel="nofollow" target="_blank" href="http://'.$_SERVER["SERVER_NAME"].'" style="color: rgb(91, 155, 213); text-decoration: underline;">BuySell Project</a>
      </center></td>
    </tr>
  </tbody>
</table>';
		
		$preambula = 'Thank you for signing up for BuySell Project';
		$preambula = '';
  
			
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
