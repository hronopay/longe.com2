<?                   //---------------------------------     ADRESS-MOSCOW    -----------------------------------------//

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function email_allpartners()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function email_allpartners() {
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------

?>
	<form action="<?=$_SERVER['SCRIPT_NAME'];?>?mode=email_allpartners" method="post" name="galki">
		<input name="bez_galok" type="submit" value="Снять все галки">
	</form>



<form action="index.php?mode=email_allpartners_do" method="post" name="email_all">
	<table border="1" cellpadding="2">
<?
$que = "SELECT * FROM `users_ivr` WHERE partner_type != '4' && mail != '' && fio != ''";
 	$result = sql_do($que);
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
	?>
  <tr>
    <td><input name="<?=$row['userlogin']?>" type="checkbox" value="YES" <?php if (!isset($bez_galok)) {?>checked><?php }?></td>
    <td><?=$row['userlogin']?></td>
    <td><?=$row['fio']?></td>
    <td><a href="mailto:<?=$row['mail']?>">написать <?=$row['mail']?></a></td>
  </tr>

<?
	}
?>
</table><br>Тема письма:<br>
<input name="subject" type="text"><br>
Текст письма:<br>
<textarea name="message" cols="50" rows="6"></textarea><br>
<input name="b1" type="submit" value="Отправить ВСЕМ отмеченным">
</form>
<?

}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function email_allpartners_do()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function email_allpartners_do() {
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------

$que = "SELECT * FROM `users_ivr` WHERE partner_type != '4' && mail != '' && fio != ''";
 	$result = sql_do($que);
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		
		$userlogin = $row['userlogin'];
		if ($_REQUEST[$row['userlogin']] == "YES") {
		
			$to      = $row['mail'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text; charset=windows-1251\r\n";
			$headers .= 'From: info@mcall.ru' . "\r\n" .
		    'Reply-To: info@mcall.ru' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

			if(mail($to, $subject, $message, $headers))
			{
				echo 'Письмо партнеру с логином '.$row['userlogin'].' было успешно отправлено.<br>'; 
			}
			else
			{
				echo '<br>Письмо партнеру с логином '.$row['userlogin'].' отправить НЕ УДАЛОСЬ!!!<br><br>'; 
			 }

		}
		
	}
//phpinfo(32);
}







#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function show_all_partners  ()  -------------------------------------------------  vyezd 	kodypechat 	schet
#-------------------------------------------------------------------------------------------------------------------------------------
function show_all_partners() 
{
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
  
  if ($_POST["userlogin"] && $_POST['b'.$_POST["userlogin"]] == 'Go!') {
		$qUserUpd = "UPDATE `users_ivr` SET `document` = '$document', `vyezd` = '$vyezd', `kodypechat` = '$kodypechat', `schet` = '$schet' , `juradressmonths` = '$juradressmonths' , `pso` = '$pso' WHERE `userlogin` = '".$_POST["userlogin"]."'";
		sql_do($qUserUpd);
  }
  
#-------------------------
$start_date = make_date_c('from');
$end_date = make_date_c('to');
?>


<script src="../../js/sorttable.js"></script>
<h4>Щелкнуть по названию столбца для сортировки</h4>
<table border="1" cellpadding="2" class="sortable"  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  ">
	<thead>
		<tr><th>&nbsp;</th><th>Логин</th><th>Договор</th><th>Заказ</th>  <th>Партнер</th><th>Док-ты</th><th>Выезд в 46</th><th>Коды Печать</th><th>Счет Банк</th>
		<th>Юр. Адрес</th><th>ПСО</th>
		<th>Баланс</th><th>Клиент Внес</th><th>Стоимость услуг</th><th>Задолженность клиента</th><th>Мыло</th><th>Продление Аренды</th><th>Контакт</th>  <th>Создан</th></tr>
	</thead>
	<tbody>
<?
// userlogin fio mail icq tele_concact additional   origname  type wmpurse activationdate  document requisition agreement




$que = "SELECT * FROM `users_ivr` ORDER BY `type` ASC , `userlogin` ASC ";
$result = sql_do($que);

 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
	
	#-----------
		$T_plus = 0;
		$T_minus = 0;
		$T_payout = 0;
	 	$resultBal = sql_do("SELECT * FROM `user_balans` WHERE `userlogin` = '".$row['userlogin']."' ORDER BY `date` ASC ");
	 	while ($ro = mysql_fetch_array($resultBal, MYSQL_BOTH)){
			$plus=$ro['plus'];
			$minus = $ro['minus'];
			$payout = $ro['payout'];
			$T_plus = $T_plus + $plus;
			$T_minus = $T_minus + $minus;
			$T_payout = $T_payout + $payout;
		}
		$balance = $T_plus - $T_minus - $T_payout;
	#-----------
	?>
<form action="index.php?mode=all_partners" method="post" name="<?=$row['userlogin']?>">
  <tr>
    <td><input name="b<?=$row['userlogin']?>" type="submit" value="Go!"></td>
    <td><?=$row['userlogin']?></td>
    <td><?=$row['startdate']?></td>

    <td><? echo $row['partner_type'] == 3 ? "ЮрАдрес" : ($row['partner_type'] == 2 ? "ООО" : "ИП") ;?></td>
    <td><?=$row['fio']?></td>
    <td>
	<? if($row['document']) $che=' checked'; else $che='';?><input name="document" type="checkbox" value="yes"<?=$che?>>
	</td>
    <td>
	<? if($row['vyezd']) $che=' checked'; else $che='';?><input name="vyezd" type="checkbox" value="yes"<?=$che?>>
	</td>
    <td>
	<? if($row['kodypechat']) $che=' checked'; else $che='';?><input name="kodypechat" type="checkbox" value="yes"<?=$che?>>
	</td>



    <td><? if($row['schet']) $che=' checked'; else $che='';?><input name="schet" type="checkbox" value="yes"<?=$che?>>





    <td>
	<? if($row['partner_type'] != 1) {?><? if($row['juradressmonths'] !=0) $che=' style="color:#FFFFFF; background-color:#0000FF;"'; else $che=' style="color:#0000FF; background-color:#FFFFFF;"';?>
	
	
	<select name="juradressmonths" <?=$che?>>
        <option value="0" selected>нет
<?
  $qJ = "SELECT * FROM juradressmonths ORDER BY name";
  $resJ = sql_do ($qJ) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qJ."<BR>");
	while ($rowJ = mysql_fetch_object($resJ))
	{
		if (($rowJ->name == $row['juradressmonths']))
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$rowJ->name."\" $selected_STR>".$rowJ->name."</option>");
	}
?>
</select>

	
	<? } else echo ' X ';?>
	</td>

    <td><? if($row['partner_type'] != 1) {?><? if($row['pso']) $che=' checked'; else $che='';?><input name="pso" type="checkbox" value="yes"<?=$che?>><? } else echo ' X ';?></td>



<?php 
$nachisleno = ($row['document']?($row['partner_type'] == 1?1900:3000):0) + ($row['vyezd']?1500:0) + ($row['kodypechat']?1500:0) + ($row['schet']?3000:0) + 

($row['juradressmonths']==11 ?    ($row['pso']?(9000+11*600):12000)    :     ($row['juradressmonths']==6 ? ($row['pso']?(7000+6*600):9000): 0) );
?>




    <td><?=$balance?></td>
    <td><a href="index.php?mode=payin&userlogin=<?=$row['userlogin'];?>" title="Пополнить">Пополнить Баланс</a></td>


    <td><?=$nachisleno;?></td>
    <td align="center" style="font-weight:bold; font-size:12px; color:#770000 "><? if($row['startdate'] < '2010-10-01')  echo "0"; else echo($nachisleno-$balance);?></td>

  <input name="userlogin" type="hidden" value="<?=$row['userlogin']?>">
</form>
    <td><?=$row['mail']?><br><form action="../adm_cabinet.php" method="POST" target="_blank"><input name="partnerlogin" type="hidden" value="<?=$row['userlogin']?>"><input type=submit value="ЛК <?=$row['userlogin']?>"></form></td>



    <td><? 
	 $enddate = $row['startdate'] ? CalcDateForvard($row['startdate'], $row['juradressmonths']) :'&nbsp;';
	if ($enddate <= date("20y-m-d")) echo '<strong><font color="#FF0000" style="text-decoration: blink;">'.$enddate.'</font></strong>';
	else 	 echo '<font color="#0000FF">'.$enddate.'</font>';
	
	?></td>



    <td>&nbsp;<?=$row['tele_concact']?></td>
    <?php /* <td><?=$row['additional']?$row['additional']:'&nbsp;'?></td> */?>
    <td><?=$row['activationdate']?></td>
  </tr>
<?
	}
?>
	</tbody>
</table>
<?


//phpinfo(32);
}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function payin  ()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function payin() 
{
 foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}

if ($payin_b == 'Receive' && $plus != '' /* && $plus > 0 */) {
	$plus = str_replace(",",".",  $plus);
	sql_do("INSERT INTO `payins` ( `id` ,  `userlogin` , `in` , `payindate`, `comment`  ) VALUES ( '',  '$userlogin', '$plus', '20".date("y-m-d")."', '$comment' )");
	sql_do("INSERT INTO `user_balans` VALUES ('', '$userlogin', '$plus', 0, 0, 0, '20".date("y-m-d")."', '$comment', '', '')");
	if ($payfornumber == 'yes') {	
		sql_do("UPDATE `registration` SET `payed` = 'YES' WHERE `userlogin` = '$userlogin'");
		sql_do("UPDATE `users_ivr` SET `payed` = 'YES' WHERE `userlogin` = '$userlogin'");
	}
}

#---------------------------------------------------------------------------------
 	$result1 = sql_do("SELECT * FROM users_ivr WHERE userlogin='$userlogin'");
	$ro1 = mysql_fetch_array($result1, MYSQL_BOTH);
	$activationdate = $ro1['activationdate'];
#---------------------------------------------------------------------------------
  
// plus minus balans  payout date comment
$T_plus = 0;
$T_minus = 0;
$T_payout = 0;
?>
<script src="../js/sorttable.js"></script>
<h4>Взаиморасчеты</h4>
<table border="1" cellpadding="2" class="sortable"  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  ">
<thead>
	<tr><th>Дата</th><th>Приход</th><th>Расход</th><th>Выплаты</th><th>Комментарий</th></tr>
</thead>
<tbody>
<?
//echo "SELECT * FROM `user_balans` WHERE `userlogin` = '$userlogin' ORDER BY `date` ASC <br>";
 	$result = sql_do("SELECT * FROM `user_balans` WHERE `userlogin` = '$userlogin'  AND `date` >= '$activationdate'  ORDER BY `date` ASC ");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$date=substr($ro['date'], 0 ,10);
		$plus=$ro['plus'];
		$minus = $ro['minus'];
		$payout = $ro['payout'];
		$comment = $ro['comment'];
		echo "<tr>";
		echo "<td>".$date."</td>";
		echo "<td>".$plus."</td>";
		echo "<td>".$minus."</td>";
		echo "<td>".$payout."</td>";
		echo "<td>".$comment."</td>";
		echo "</tr>";

		$T_plus = $T_plus + $plus;
		$T_minus = $T_minus + $minus;
		$T_payout = $T_payout + $payout;
	}
 ?>
 </tbody>
  <tfoot>
<tr>
  <th>&nbsp;</th>
  <th><div align="right"><? echo $T_plus; ?> р.</div></th>
  <th><div align="right"><? echo $T_minus; ?> p.</div></th>
  <th><div align="right"><? echo $T_payout; ?> p.</div></th>
  <th>&nbsp;</th>
</tr>
</tfoot>

</table>
 <?

echo '<br>Предварительный баланс: <strong><font color="#aa0000">'.$balance = $T_plus - $T_minus - $T_payout;
echo "</font></strong> рублей";

//    Доступный баланс
$total_Out = 0;
$q_223 = "SELECT * FROM `payouts` WHERE  `userlogin` = '$userlogin' ";
$resultq_223 =  mysql_query($q_223) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q_223." --- <BR>");
while ($row = mysql_fetch_array($resultq_223, MYSQL_BOTH)){

			$year = $row['year'];
			$out = $row['out'];
			$month = $row['month'];
			$complete  = $row['complete'];
	if (!$complete) $total_Out = $total_Out + $out;
 }
echo '<br>Доступный баланс: <strong><font color="#00aa00">'.$total_Out;
echo "</font></strong> рублей";
if ($total_Out) echo '<br> Вы можете вывести доступные средства в разделе "<a href="cabinet.php?mode=get_money">Вывод Средств</a>"';


// plus minus balans  payout date comment
?>
<form action="../adm_cabinet809.php" method="POST" target="_blank"><input name="partnerlogin" type="hidden" value="<?=$userlogin?>"><input type=submit value="Личный Кабинет Партнера <?=$userlogin?>"></form>

<a href="../total_balance.php" target="_blank">Пересчитать БАЛАНС!!!</a>

<h4>Пополнить Баланс</h4>

<form action="index.php" method="post" name="<?=$userlogin?>">
  <input name="userlogin" type="hidden" value="<?=$userlogin?>">
  <input name="mode" type="hidden" value="payin">
<table border="1" cellpadding="2" class="sortable"  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  ">
 <thead>
	<tr><th>Дата</th><th>Приход</th><th>Комментарий</th><th>За подключение?</th></tr>
 </thead>
 <tbody>
  	<tr>
    	<td><input name="date" type="text" value="<?=date("20y-m-d");?>" size="10" readonly="true"></td>
    	<td><input name="plus" type="text" value="" size="5"> (руб.коп или руб,коп)</td>
    	<td><textarea name="comment" cols="20" rows="2">Аккаунт <?=$userlogin?>: Зачисление средств на счет Партнера</textarea></td>
    	<td><select name="payfornumber">
				        <option value="yes" <?php //echo " selected";?>>За подключение</option>
				        <option value="no" <?php echo " selected";?>>Оплата услуг</option>

		</select></td>
 </tbody>
</table>
    <input name="payin_b" type="submit" value="Receive">
</form>

<?

//phpinfo(32);
}
















#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function Regs809()  -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------



function Regs809($datefrom,$dateto){

	;
?>
<fieldset><legend>По ID</legend>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="809regs">
<input type="hidden" name="by" value="ai_di">

Введите ID клиента:  <input name="id" type="text" value="<?php echo $id = isset($_POST['id'])?$_POST['id'] : ''; ?>" size="12" maxlength="20">
<input type=submit value="Применить">
</form>
</fieldset>

<fieldset><legend>По Фамилии</legend>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="809regs">
<input type="hidden" name="by" value="familiya">

Введите Фамилию клиента:  <input name="fio" type="text" value="<?php echo $fio = isset($_POST['fio'])?$_POST['fio'] : ''; ?>" size="12" maxlength="20">
<input type=submit value="Применить">
</form>
</fieldset>

<fieldset><legend>По Дате</legend>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="809regs">
<input type="hidden" name="by" value="days">


 с <? makeform_from_date("datefrom",$datefrom); ?> по  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="Применить">
</form>
<?php
		if ($_GET['action'] == 'delete')  {
			echo "<font color=#990000>Удалять 809 Клиента с id ".$_GET['id']." ??? </font><font color=#ff0000>Восстановление будет НЕВОЗМОЖНО!!</font> [<a href='index.php?mode=809regs&action=confirmeddelete&user_id=".$_GET['user_id']."&id=".$_GET['id']."' title='Удалить регистрацию 809 клиента'>ДА, удалить!!!</a>]  [<a href='index.php?mode=809regs' title='Отказ от  удаления 809 клиента'>НЕТ, не удалять!!!</a>]";
		}
		if ($_GET['action'] == 'confirmeddelete')  {
			sql_do("DELETE FROM 809registration WHERE user_id = ".$_GET['user_id']);
			echo "<font color=#ff0000>Удален 809 Клиент с id ".$_GET['id']."</font><br>";
		}
?>
</fieldset>
<script src="../js/sorttable.js"></script>
<h4>Щелкнуть по названию столбца для сортировки</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>ID</th><th>Дата заполнения</th><th>ФИО</th><th>Статус</th><th>Специальность</th><th>Юр/Физ</th><th>Mail</th><th>WM</th><th>Т-ф</th><th>тел</th><th>С</th><th>По</th><th>Удаление</th></tr>
</thead>
<tbody>
<?
$and = " AND ";
$id = isset($_POST['id'])?$_POST['id']:'';
if (!$id) $q_id = '';
else $q_id = "id = '$id' ";

$fio = isset($_POST['fio'])?$_POST['fio']:'';
if (!$fio) $q_fio = '';
else $q_fio = " fio  LIKE  '%$fio%' ";

$q_date = " filledin>='$datefrom' AND filledin<='$dateto'  ORDER BY filledin desc, filledin_hm desc";

if ($_POST['by'] == 'ai_di') 			$query = $q_id;
elseif ($_POST['by'] == 'familiya') 	$query = $q_fio;
elseif ($_POST['by'] == 'days') 		$query = $q_date;
else 									$query = $q_date;


/* echo $_POST['by'];
echo "SELECT * FROM registration WHERE ".$query; */

$result= sql_do("SELECT * FROM 809registration WHERE ".$query);
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

		$status = $row['condition'] ? 'работает' : 'ожидание активации' ;

		echo "<tr> <td width='140px'>".$row['id']."</td>";
		echo "<td>".$row['filledin'].' '.$row['filledin_hm']."</td>";
		echo "<td><a href='index.php?mode=809client&user_id=".$row['user_id']."' title='Посмотреть анкету клиента'>".$row['fio']."</a></td>";
		echo "<td>".$status."</td>";
		echo "<td>".($row['origname'] == '' ? "&nbsp;" : $row['origname'] )."</td>";
		echo '<td>'.$row['type'].'</td>';
		echo '<td><a href="mailto:'.$row['mail'].'">написать</a></td>';
		echo "<td>".($row['wmpurse'] == '' ? "&nbsp;" : $row['wmpurse'] )."</td>";
		echo "<td>".($row['redir_num'] == '9012029438' ?  2 : 1  )."</td>";
		echo '<td>'.$row['partner_num'].'</td>';
		echo '<td>'.$row['vremya1'].'</td>';
		echo '<td>'.$row['vremya2'].'</td>';
		echo "<td><a href='index.php?mode=809regs&action=delete&user_id=".$row['user_id']."&id=".$row['id']."' title='Удалить регистрацию 809 клиента'>Удалить 809</a></td>";
		echo "</tr>";

 }
 ?>
 </tbody>
</table>
 <?
echo "";

;


}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function clientReg809()     ------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

// личная информация по выбранному партнёру
function clientReg809(){
	;

 	$result = sql_do("SELECT * FROM 809registration WHERE user_id='".$_GET['user_id']."'");
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		$user_id=$row['user_id'];
		$userlogin=$row['userlogin'];
		$pass_hash=$row['pass_hash'];
		$fio=$row['fio'];
		$mail=$row['mail'];
		$icq=$row['icq'];
		$tele_contact=$row['tele_concact'];
		$additional=$row['additional'];
		$partner_num=$row['partner_num'];
		$redir_num=$row['redir_num'];
		$vremya1=$row['vremya1'];
		$vremya2=$row['vremya2'];
		$code=$row['code'];
		$partner_type=$row['partner_type'];
		$origname=$row['origname'];
		$startdate=$row['startdate'];
		$enddate=$row['enddate'];

		$type=$row['type'];
		$tarif=$row['tarif'];
		$okrug=$row['okrug'];
		$id=$row['id'];
		$filledin=$row['filledin'];
		$filledin_hm=$row['filledin_hm'];
		$condition=$row['condition'];
		$wmpurse=$row['wmpurse'];
		$camefrom=$row['camefrom'];
	}

 include('includes/anketa_newclient809.php');   // wmpurse
}





#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function client_edit_makelogin()    -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

// личная информация по выбранному партнёру
function client_edit_makelogin ( $userloginfirst,$newcode,$pass_hash,$fio,$mail,$icq,$tele_contact,$additional,$redir_num,$partner_num,$code,$excode, $vremya1, $vremya2, $origname_list, $change_radio, $origname_new, $sday, $smonth, $syear, $eday, $emonth, $eyear, $type,  $wmpurse, $activationdate, $activationtime){

foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}

;

$fio = htmlspecialchars($fio);
$userlogin = $newcode;

if (!$pass_hash) {
	echo "<br><br>Не удалось создать логин $userlogin !!!<br>причина: Не указан ПАРОЛЬ";
	exit;
}
else {
	$result=sql_do("SELECT userlogin from users_ivr WHERE userlogin='$userlogin'");
	if (mysql_num_rows($result)) {
			echo "<br><br>Партнер с логином $userlogin уже существует!!! <br><br><a href='index.php?mode=809regs'>Назад</a>";
			exit;
	}
	$origname = ( $_POST['change_radio'] == 'professionlist' )?  $_POST['origname_list']  : $_POST['origname_new']  ;
	$pwd = $pass_hash;
	$pass_hash = md5($pass_hash); // создаем новый пароль     //
	$res = sql_do("INSERT INTO `users_ivr` ( `user_id` , `userlogin` , `pass_hash` , `fio` , `mail` , `icq` , `tele_concact` , `additional` , `code` , `redir_num` , `vremya1` , `vremya2` , `partner_type`, `type`, `wmpurse`, `activationdate`, `activationtime`  ) VALUES ('', '$userlogin', '$pass_hash', '', '', '', '', '', '$newcode', '$redir_num', '0', '0', '$userloginfirst', '$type', '$wmpurse', '$activationdate', '$activationtime' )");
	$res = sql_do("UPDATE users_ivr SET  pass_hash='$pass_hash', fio='$fio', mail='$mail', icq='$icq', tele_concact='$tele_contact', 	additional='$additional', redir_num='$redir_num', partner_num='$partner_num',  vremya1='$vremya1', vremya2='$vremya2', origname='$origname', startdate='$startdate', enddate='$enddate', `tarif` = '$tarif'  WHERE userlogin='$userlogin'");

	if(!$res) {
		echo "<br><br>Не удалось создать логин $userlogin !!!";
		exit;
	}
	else echo "<br><br>Логин $userlogin  успешно создан!<br>";

	
	$qq = "INSERT INTO `registration` (`user_id`, `userlogin`, `payed`, `pass_hash`, `fio`, `mail`, `icq`, `tele_concact`, `additional`, `code`, `partner_num`, `redir_num`, `vremya1`, `vremya2`, `partner_type`, `origname`, `startdate`, `enddate`, `type`, `tarif`, `okrug`, `id`, `filledin`, `filledin_hm`, `condition`, `camefrom`, `wmpurse`, `abon_fee`) VALUES
('', '$userlogin', '', '$pass_hash', '$fio', '$mail', '$icq', '$tele_contact', '$additional', 'code', '$partner_num', 'no need', '$vremya1', '$vremya2', '', '$origname', '', '', '$type', '$tarif', '', '$id', '$filledin', '$filledin_hm', 0, '$camefrom', '$wmpurse', '0');
";
	$ress2 = mysql_query($qq)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qq."<BR>");


	if(!$ress2){
		echo "Не удалось обновить данные в таблице регистраций.";
		exit;
	}
	else echo "Данные успешно обновлены  в таблице регистраций.";

	 $qq1 = "UPDATE `809registration` SET  `condition` = '1', `additional` = '$additional', `partner_type` = '$userloginfirst', `origname` = '$origname', `userlogin` = '$userlogin', `code` = '$newcode', `pass_hash` = '$pass_hash', `wmpurse` = '$wmpurse', redir_num='$redir_num', partner_num='$partner_num', vremya1='$vremya1', vremya2='$vremya2',     `fio` = '$fio', `mail` = '$mail', `icq` = '$icq', `tele_concact` = '$tele_contact', `type` = '$type', `tarif` = '$tarif', `okrug` = '$okrug', `id` = '$id', `filledin` = '$filledin', `filledin_hm` = '$filledin_hm', `camefrom` = '$camefrom' 	  WHERE `user_id` = '$user_id'"; 
	$ress2 = mysql_query($qq1)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qq1."<BR>");


	/***********************************************************************/
		require "../include/class_email.php";
		$email = new emailer;
				$email->subject = "Ваш логин на ".$_SERVER["SERVER_NAME"];
				$email->to      = $mail.', admin@mcall.ru';
				$email->from    = "info@".$_SERVER["SERVER_NAME"]; //info@mcall.ru
#				$email->message	= "Ваш логин ".$userlogin."<br>Ваш пароль ".$pwd;



				$email->message	= 'Здравствуйте, '.$fio.'!<br><br>

				<b>Рады сообщить, что Вам выделены пароль и логин для входа в личный кабинет! </b><br><br>


				Ваш логин  для входа в личный кабинет на сайте <a href="http://mcall.ru/" target="_blank">http://mcall.ru/</a>  - '.$userlogin.', пароль - '.$pwd.' <br>

				<br>
				До подключения платного номера Вы можете контролировать поступление средств в счет оплаты в своем личном кабинете. <br>
				Будьте внимательны, после выделения номера Ваш логин будет изменен!<br>
				Срок оплаты подключения - месяц со дня подачи заявки, в случае непоступления средств аккаунт будет аннулирован.<br>
				<br>

				Если вдруг возникнут какие-то технические проблемы при работе с указанным сайтом, то Вы можете  воспользоваться зеркалом - <a href="http://m-call.ru/" target="_blank">http://m-call.ru/</a> <br>
				<br><br><br>
				Желаем Вам успешной работы!!!<br>
				<br>
				<b>Если у Вас возникли вопросы, пожалуйста, свяжитесь с нами:<br>
				<br>
				</b> Дымов Илья <br>
				менеджер по работе с клиентами <br>
				ICQ: 466-164-103 <br>
				E- mail: <a href="mailto:info@mcall.ru" target="_blank">info@mcall.ru</a> <br>
				Тел/факс.:+7(495)504-31-62 <br>
				119634, Москва, Боровское шоссе, д.37, корп.3<br>
				<a href="http://mcall.ru/" target="_blank">http://mcall.ru/</a><br>
				<br>
				<font face="Arial" size="2">С уважением, команда ООО </font>«Интех»';



				$email->html_email = 1;
				$email->char_set = 'windows-1251';
				$email->send_mail();
	/***********************************************************************/
}

;

//phpinfo(32);
}









#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function call_operator() -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function call_operator($partner_num, $abon_number, $duration, $tarif_number, $type, $date) {


  $q = "SELECT * FROM `defcodes` WHERE `from` <=  '$abon_number' AND `to` >= '$abon_number' ";
  $result=sql_do($q);
  if (!mysql_num_rows($result) /* || mysql_num_rows($result) >1 */) return 999;
  else {
  	$row = mysql_fetch_array($result, MYSQL_BOTH);
	$work = $row['work'];
	return $work;
 }

}









#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function tickets ()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function tickets (){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
;

if ( isset($userlogin) && isset($ticket) ) {

	if ( isset($quest) && $quest != '')  {
		/* echo */ $q = "UPDATE `tickets`  SET `answer` = '$answer' WHERE `ticket` = '$ticket' AND `userlogin` = '$userlogin' ";
		$result =  mysql_query($q) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q." --- <BR>");
}

?>
<h3>Ответить партнеру</h3>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>Дата</th><th>Логин</th><th>ticket</th><th>Заголовок</th><th>Вопрос</th><th>Ответ</th></tr>
</thead>
<tbody>

<?
$q = " SELECT * FROM `tickets` WHERE `userlogin` =  '$userlogin' AND `ticket` =  '$ticket' ";
$result= sql_do($q);
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

	$userlogin 	= 		$row['userlogin'];
	$date 		= 		$row['date'];
	$ticket 	= 		$row['ticket'];
	$header 	= 		$row['header'];
	$question 	=	 	$row['question'];
	$answer 	= 		$row['answer'];
	
		echo "<tr>";
		echo "<td>".$date."</td>";
		echo "<td>".$userlogin."</td>";
		echo "<td>".$ticket."</td>";
		echo "<td>&nbsp;&nbsp;".$header."&nbsp;&nbsp;</td>";
		echo "<td>&nbsp;&nbsp;".$question."</td>";
		echo "<td>&nbsp;&nbsp;".$answer."</td>";
		echo "</tr>";
}
 ?>
 </tbody>
</table>
<br>
<form action="index.php?mode=tickets&userlogin=<?=$userlogin?>&ticket=<?=$ticket?>" method="post">
<table border="0" cellspacing="4" cellpadding="2">
  <tr>
    <td>ticket</td>
    <td><input name="ticket" type="text" size="26" value="<?=$ticket?>"></td>
  </tr>
  <tr>
    <td>Ответ</td>
    <td><textarea name="answer" cols="90" rows="15"><?=$answer?></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><div align="right">
      <input name="quest" type="submit" value="Ответить">
    </div></td>
    </tr>
</table>
</form>

<?
}   //    end      if ( isset($userlogin) && isset($ticket) )


else   {

if ($question == 'all') 	$all = "";  
elseif ( isset($userlogin) && $userlogin != '' ) 	{					
	$UsLog = " WHERE `userlogin` =  ".$userlogin." ";
	$Look = "<a target='_blank' href='index.php?mode=by_partner&userlogin=".$userlogin."' title='Посмотреть статистику партнера'>".$userlogin."</a>";
	echo "<br><br><br>Посмотреть статистику партнера ";
	echo $Look;
	echo "<br>";

	}
else 						$all = " WHERE `answer` =  '' ";

$q = " SELECT * FROM `tickets`" . $all . $UsLog ;
$result= sql_do($q);
?>
<h3>Неотвеченные</h3>
<a href="index.php?mode=tickets&question=all">Посмотреть все вопросы</a><br>

<script src="../js/sorttable.js"></script>

<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>Дата</th><th>Логин</th><th>ticket</th><th>Заголовок</th><th>Вопрос</th><th>Ответ</th></tr>
</thead>
<tbody>

<?

while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

	$userlogin 	= 		$row['userlogin'];
	$date 		= 		$row['date'];
	$ticket 	= 		$row['ticket'];
	$header 	= 		$row['header'];
	$question 	=	 	$row['question'];
	$answer 	= 		$row['answer'];
	
		echo "<tr>";
		echo "<td>".$date."</td>";
		echo "<td>&nbsp;&nbsp;<a href='index.php?mode=tickets&userlogin=".$userlogin."' title='Смотреть переписку партнера'>".$row['userlogin']."</a></p></td>";
		echo "<td>".$ticket."</td>";
		echo "<td>".$header."</td>";
		echo "<td>".$question."</td>";
//		echo "<td>".$answer."&nbsp;</td>";
		echo "<td>&nbsp;&nbsp;".$answer."&nbsp;&nbsp;<a href='index.php?mode=tickets&userlogin=".$userlogin."&ticket=".$ticket."' title='Ответить партнеру'>".($answer? '<p>Редактировать ответ':'Ответить партнеру')." ".$row['userlogin']."</a></p></td>";
		echo "</tr>";
}
 ?>
 </tbody>
</table>
<?

}


;
}














#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function ticketsnoanswer ()  --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function ticketsnoanswer (){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
;
$q = " SELECT * FROM `tickets` WHERE `answer` =  '' ";
$result= sql_do($q);
if ($num = mysql_num_rows($result)) {
	?>
	<div style="color:#FFFF00; background-color:#009900; margin:8px 200px 8px 200px; text-align:center; padding:8px; ">Неотвеченно вопросов - <?=$num?> !!!<br><a href='index.php?mode=tickets' title='Смотреть переписку'>ответить</a></div>
	<?
}
;
}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function files ()  --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function files (){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
	$now_dir="./";
	$now_root = realpath("$now_dir");
	$image_dir="../partners_files/";
	$root = realpath("$image_dir");

if($_SERVER['SERVER_NAME'] != 'mcall.ru') echo "<h2>Тут не делать!!! Делать на mcall.ru ! </h2>";
if ($act == "delete"){
 echo "<br>";
	echo  "Удален файл ".$filename;
 echo "<br>";
	unlink( $root.'/'.$filename );
}


//echo $b1;
#-----------------------------------------ЗАГРУЗКА-------------------------------------------$$$
if ( $b1 == 'go!' ){
 	$file_ref = $_FILES['file_ref'];
/* echo "<br>";
	echo */ $file_ref_name = $file_ref['name'];
/* echo "<br>";
	echo */ $file_ref_size = $file_ref['size'];
/* echo "<br>";
	echo */ $file_ref_type = $file_ref['type'];
/* echo "<br>";
	echo */ $file_ref_tmp_name = $file_ref['tmp_name'];
/* echo "<br>";
echo ("image_dir ".$image_dir."<br>");  */
 
//      application/msword         application/vnd.ms-excel


$image = "";
		if ($file_ref_size > 0)
		{
			$image = addSlashes($file_ref_name);
				$root = realpath("$image_dir");
				copy($file_ref_tmp_name, $root."/"."_".$partner."_".$image);
		}








}
#--------------------------------------------------------------------------------------------$$$


?>
<br>
<br>
Загрузить<br>
<form action="index.php?mode=files" method="post" name="fi"  ENCTYPE="multipart/form-data">


<input type="file" name="file_ref" style="width:300px;" ><br>




Партнеру ЮрЛицу
<br>

<select name="partner" style="width:500px;" >
        <option value="0" selected>Партнеры
<?php 
$que = "SELECT * FROM `users_ivr` WHERE  fio != '' && type = 'Юридическое лицо'  ORDER BY `userlogin` ";
 	$result = sql_do($que);
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
	if( strlen($row['userlogin']) < 5  ) {
	?>
        <option value="<? echo $row['userlogin'];?>"<? if ($rSingleSite->photo == $file) echo (" selected");?>><? echo $row['userlogin']." - ".$row['fio'];   }
		?>

<?
	}

?>
</select><br>
<br>

<input name="b1" type="submit" value="go!">
</form>


<script src="../js/sorttable.js"></script>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>Файл</th><th>Логин</th><th>Загрузить</th><th>Удалить</th></tr>
</thead>
<tbody>


        <?
	chdir($root);
	$dir = opendir(".");
	while ( false !== ($file = readdir($dir)) )
	{
		if (($file != ".") && ($file != "..")  && ($file != "index.php"))
		{
			$login = substr($file,1,4);
?>
  <tr>
    <td><? echo $file;?></td>
    <td><? echo $login;?></td>
    <td><a href="../partners_files/<? echo $file;?>">DownLoad</a></td>
    <td><a href="index.php?mode=files&act=delete&filename=<? echo $file;?>">Delete</a></td>
  </tr>

        <?
		}
	}
	closedir($dir);
?>
</tbody>
</table>


<?
//phpinfo();
//phpinfo(32);

}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CalcDateForvard ()  --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CalcDateForvard($date, $monthsforward){

$a_date = explode("-", $date);
$y = $a_date[0];
$m = $a_date[1];
$d = $a_date[2];

	$m = $m +$monthsforward;
	if($m>=12) {
		$y = $y + floor($m/12);
		$mp = $m%12;
	}
	else $mp = $m;
	
	$mp = $mp < 10  ? $mp='0'.$mp   :   $mp  ;
return $y."-".$mp."-".$d;
}



?>