<?

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
;

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
#--------------------------------------------    function partner_status  ()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function partner_status() 
{
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
$start_date = make_date_c('from');
$end_date = make_date_c('to');

// Проверяем, все ли юзеры прописаны в таблице user_status в нынешнем месяце, если нет - записываем их
$que1 = "SELECT * FROM `users_ivr` ";
 	$result1 = sql_do($que1);
 	while ($row1 = mysql_fetch_array($result1, MYSQL_BOTH)){
		$activationdate = $row1['activationdate'];
		$userlogin = $row1['userlogin'];
		$que = "SELECT * FROM `user_status` WHERE `userlogin` = '".$row1['userlogin']."'  AND `start_date` = '".$start_date."'  ";
 		$result = sql_do($que);
#		echo mysql_num_rows($result)."<br>";
		if (mysql_num_rows($result)) {/* echo "User ".$row1['userlogin']." is present in @user_status@" */;}
		else { 
				$period = substr($start_date, 0, 7); 
				$month = substr($start_date, 5, 2);
				$year = substr($start_date, 0, 4);
				if ($activationdate < $start_date) $activationdate = 'давно';
				$resqq = sql_do("INSERT INTO `user_status` ( `id` , `userlogin` , `start_date` , `end_date` , `period` , `month` , `year` , `seconds` , `activated` , `status` ) VALUES ( '', '$userlogin', '$start_date', '$end_date', '$period', '$month', '$year', '', '$activationdate', '')");
				if(!$resqq) {
					echo "<br><br>Не удалось записать в user_status  логин $userlogin !!!<br>INSERT INTO `user_status` ( `id` , `userlogin` , `start_date` , `end_date` , `period` , `month` , `year` , `seconds` , `activated` , `status` ) VALUES ( '', '$userlogin', '$start_date', '$end_date', '$period', '$month', '$year', '', '$activationdate', '')<br>";
					//exit;
				} 
				else echo "Удалось записать в user_status  логин $userlogin !!!<br>";
		}
		
	}


?><br><br>
Статус Active - более 5999сек.<br>
Статус Light - более 2999сек.<br>
Статус Abonent - менее 3000сек.<br>
<br>
<fieldset><legend>После 2-х обновлений этой страницы - Нажать!</legend>
<form action="../fresh_status_total_tab.php" target="_blank">
	<input type=submit value="Пересчитать Таблицу 2"> это пересчитает ВСЮ табл.2 и проставит правильные статусы...  Можно это и не делать без особой нужды.
</form>
</fieldset>
<br>
<fieldset><legend>Начислить задолженность  статусам Абонент</legend>
<form action="../abonent_payments.php" target="_blank">
	<input type=submit value="Начислить"> это должно начислить задолженность по все закончившимся отчетным периодам.
</form>
</fieldset>


<script src="../../js/sorttable.js"></script>
<h4>Щелкнуть по названию столбца для сортировки</h4>
<table border="1" cellpadding="2" class="sortable"  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  ">
	<thead>
		<tr><th>Логин</th><th>Месяц</th><th>сек.</th><th>calls</th><th>Активирован</th><th>Статус</th><th>Начислено</th></tr>
	</thead>
	<tbody>
<?
$que = "SELECT * FROM `user_status` ORDER BY `period` DESC , `userlogin` ASC ";
 	$result = sql_do($que);
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		$color = $row['seconds']<3000 ? '<font color="#00AA00">' : ($row['seconds']<6000 ? '<font color="#0000FF">' : '<font color="#FF0000">');
		$newstatus = $row['seconds']<3000 ? 'Abonent' : ($row['seconds']<6000 ? 'Light' : 'Active');
	?>
  <tr>
    <td><?=$row['userlogin']?></td>
    <td><?=$row['period']?></td>
    <td><?=$color.$row['seconds']?></font></td>
    <td><?=$color.$row['calls']?></font></td>
    <td><?=$row['activated']?></td>
    <td><?=$color.$row['status']?></font></td>
    <td><?=$row['abonpay']?></td>
  </tr>
<?
		$qStatusUpd = "UPDATE `user_status` SET `status` = '$newstatus' WHERE `id` = '".$row['id']."'";
		sql_do($qStatusUpd);

	}
?>
	</tbody>
 	<tfoot>
		<tr>  <th colspan="6"><div align="right">сек</div></th></tr>
	</tfoot>
</table>
<?


//phpinfo(32);
}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function all_partners  ()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function all_partners() 
{
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
  
  if ($_POST["userlogin"] && $_POST['b'.$_POST["userlogin"]] == 'Go!') {
		$qUserUpd = "UPDATE `users_ivr` SET `document` = '$document', `agreement` = '$agreement', `requisition` = '$requisition', `inn` = '$inn' WHERE `userlogin` = '".$_POST["userlogin"]."'";
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
		<tr><th>&nbsp;</th><th>Логин</th><th>Док-ты</th><th>Рекв/Атт</th><th>Дог.</th><th>ИНН</th><th>Баланс</th><th>Пополнить</th><th>Т-План</th><th>Счет или WM</th>  <th>ФИО</th><th>Мыло</th><th>Аська</th><th>Контакт</th><th>Доп. Инфо</th>   <th>Спец.</th><th>Активирован</th></tr>
	</thead>
	<tbody>
<?
// userlogin fio mail icq tele_concact additional   origname  type wmpurse activationdate  document requisition agreement




$que = "SELECT * FROM `users_ivr` WHERE `redir_num` = '9012029438' ORDER BY `type` ASC , `userlogin` ASC ";
$result = sql_do($que);

 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		$activationdate = $row['activationdate'];
	#-----------
		$T_plus = 0;
		$T_minus = 0;
		$T_payout = 0;
	 	$resultBal = sql_do("SELECT * FROM `user_balans` WHERE `userlogin` = '".$row['userlogin']."' AND `date` >= '$activationdate' ORDER BY `date` ASC ");
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
    <td><? if($row['document']) $che=' checked'; else $che='';?><input name="document" type="checkbox" value="yes"<?=$che?>></td>
    <td><? if($row['requisition']) $che=' checked'; else $che='';?><input name="requisition" type="checkbox" value="yes"<?=$che?>></td>
    <td><? if($row['agreement']) $che=' checked'; else $che='';?><input name="agreement" type="checkbox" value="yes"<?=$che?>></td>
    <td><? if($row['type'] == 'Физическое лицо') {?><? if($row['inn']) $che=' checked'; else $che='';?><input name="inn" type="checkbox" value="yes"<?=$che?>><? } else echo ' X ';?></td>
    <td><?=$balance?></td>
    <td><a href="index.php?mode=payin&userlogin=<?=$row['userlogin'];?>" title="Пополнить">Пополнить Баланс</a></td>
    <td><?=$row['type']?></td>
    <td><?=$row['wmpurse']?$row['wmpurse']:'&nbsp;'?></td>
    <td><?=$row['fio']?></td>
  <input name="userlogin" type="hidden" value="<?=$row['userlogin']?>">
</form>
    <td><?=$row['mail']?><br><form action="../adm_cabinet.php" method="POST" target="_blank"><input name="partnerlogin" type="hidden" value="<?=$row['userlogin']?>"><input type=submit value="ЛК <?=$row['userlogin']?>"></form></td>
    <td><?=$row['icq']?$row['icq']:'&nbsp;'?></td>
    <td><?=$row['tele_concact']?></td>
    <td><?=$row['additional']?$row['additional']:'&nbsp;'?></td>
    <td><?=$row['origname']?$row['origname']:'&nbsp;'?></td>
    <td><?=$row['activationdate']?></td>
  </tr>
<?
	}
?>
	</tbody>
 	<tfoot>
		<tr>  <th colspan="6"><div align="right">сек</div></th></tr>
	</tfoot>
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
	sql_do("INSERT INTO `user_balans` VALUES ('', '$userlogin', '$plus', 0, 0, 0, '20".date("y-m-d")."', '$comment')");
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
<form action="../adm_cabinet.php" method="POST" target="_blank"><input name="partnerlogin" type="hidden" value="<?=$userlogin?>"><input type=submit value="Личный Кабинет Партнера <?=$userlogin?>"></form>

<a href="../total_balance.php" target="_blank">Пересчитать БАЛАНС!!!</a>

<h4>Пополнить Баланс</h4>

<form action="index.php" method="post" name="<?=$userlogin?>">
  <input name="userlogin" type="hidden" value="<?=$userlogin?>">
  <input name="mode" type="hidden" value="payin">
<table border="1" cellpadding="2" class="sortable"  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  ">
 <thead>
	<tr><th>Дата</th><th>Приход</th><th>Комментарий</th></tr>
 </thead>
 <tbody>
  	<tr>
    	<td><input name="date" type="text" value="<?=date("20y-m-d");?>" size="10" readonly="true"></td>
    	<td><input name="plus" type="text" value="" size="5"> (руб.коп или руб,коп)</td>
    	<td><textarea name="comment" cols="20" rows="2">Аккаунт <?=$userlogin?>: Зачисление средств на счет Партнера</textarea></td>
 </tbody>
</table>
    <input name="payin_b" type="submit" value="Receive">
</form>

<?

//phpinfo(32);
}
















#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function Regs()  -------------------------------------------------------------
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
			echo "<font color=#990000>Удалять 809 Клиента с id ".$_GET['id']." ??? </font><font color=#ff0000>Восстановление будет НЕВОЗМОЖНО!!</font> [<a href='index.php?mode=809regs&action=confirmeddelete&user_id=".$_GET['user_id']."&id=".$_GET['id']."' title='Удалить регистрацию 809 клиента'>ДА, удалить!!!</a>]  [<a href='index.php?mode=regs' title='Отказ от  удаления 809 клиента'>НЕТ, не удалять!!!</a>]";
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
#--------------------------------------------    function call_operator() -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function call_operator($partner_num, $abon_number, $duration, $tarif_number, $type, $date) {


  $q = "SELECT * FROM `defcodes` WHERE `from` <=  '$abon_number' AND `to` >= '$abon_number' ";
  $result=sql_do($q);
  if (!mysql_num_rows($result) /* || mysql_num_rows($result) >1 */) return 'N/A Oper';
  else {
  	$row = mysql_fetch_array($result, MYSQL_BOTH);
	$work = $row['work'];
	return $work;
 }

}








#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function mtsforfrod()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function mtsforfrod($datefrom,$dateto){

?><fieldset><legend>По префиксам</legend><?

	;
#	if ($_SERVER['SERVER_NAME'] != 'mcall.ru1') remake_Total($datefrom,$dateto);

?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="mtsforfrod">

Прибыль с <input name="profitfrom" type="text" size="6" value="<?php echo $profitfrom = isset($_POST['profitfrom'])?$_POST['profitfrom']:0; ?>"> по <input name="profitto" type="text" size="6" value="<?php echo $profitto = isset($_POST['profitto'])?$_POST['profitto']:100000; ?>"> рублей<br>

Секунды с <input name="durationfrom" type="text" size="6" value="<?php echo $durationfrom = isset($_POST['durationfrom'])?$_POST['durationfrom']:0; ?>"> по <input name="durationto" type="text" size="6" value="<?php echo $durationto = isset($_POST['durationto'])?$_POST['durationto']:1000000; ?>"><br>


 с <? makeform_from_date("datefrom",$datefrom); ?> по  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="Применить">
</form>
</fieldset>
<script src="../js/sorttable.js"></script>
<h4>Щелкнуть по названию столбца для сортировки</h4>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="markfrod">
<input type="hidden" name="datefrom" value="<?php echo $datefrom; ?>">
<input type="hidden" name="dateto" value="<?php echo $dateto; ?>">

<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>Дата</th><!--th>Спец.</th--><th>Логин</th><!--th>Префикс</th--><th>переадр.</th><th>абонент.</th><th>сек</th><th>мин</th><th>Доход</th><th>Расх.</th><th>Прибыль</th><!--th>Фрод</th--><th>Фрод</th></tr>
</thead>
<tbody>
<?
//exit;
$total_In = 0;
$total_Out = 0;

$profitfrom = isset($_POST['profitfrom'])?$_POST['profitfrom']:0;
if (!$profitfrom) $profitfrom = 0;
$profitto = isset($_POST['profitto'])?$_POST['profitto']:100000;
if (!$profitto) $profitto = 100000;

$durationfrom = isset($_POST['durationfrom'])?$_POST['durationfrom']:0;
if (!$durationfrom) $durationfrom = 0;
$durationto = isset($_POST['durationto'])?$_POST['durationto']:1000000;
if (!$durationto) $durationto = 1000000;

//echo "SELECT * FROM totaldata WHERE profit>'$profitfrom' AND profit<'$profitto' AND duration>'$durationfrom' AND duration<'$durationto' AND date>'$datefrom' AND date<'$dateto'  ORDER BY date desc";

$result= sql_do("SELECT * FROM totaldata WHERE profit>='$profitfrom' AND profit<='$profitto' AND duration>='$durationfrom' AND duration<='$durationto' AND date>'$datefrom' AND date<'$dateto' AND operator='18'  ORDER BY duration  desc,userlogin, date desc");
$total_dur=0;
$total_mins=0;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

		$chdis = " checked disabled";

			$called_number = $row['called_number'];
			$user_code = $row['user_code'];
			$userlogin = $row['userlogin'];

			$in = $row['in'];
			$out = $row['out'];
			$profit = $row['profit'];

			$color = $row['status'] == 'Abonent' ? '<font color="#00AA00">' : ($row['status'] == 'Light' ? '<font color="#0000FF">' : '<font color="#FF0000">');
			$partner_num = $row['partner_num'] ? $row['partner_num'] : '&nbsp;';
			$duration = $row['duration'];
			$called_number=$row['called_number'];

			$session_id = 	$row['session_id'];
			$frod = 		$row['frod'];
			if(!$frod) $chdis = '';

		echo "<tr> <td width='140px'>".$row['date']."</td>";
		/* echo "<td>".$row['origname']."</td>"; */
		echo "<td><font face='Arial' size=2 color='#ffffff'><a href='index.php?mode=by_partner&userlogin=".$row['userlogin']."' title='Посмотреть статистику партнера'>".$row['userlogin']."</a></td>";
		/* echo "<td>".$row['code']."</td>"; */
		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['abon_number']."</td>";
		echo "<td>".$duration."</td>"."<td>".($mins = ceil($duration/60))."</td>";
		echo "<td>".$in."</td>";
		echo "<td>".$color.$out."</font></td>";
		echo "<td>".$profit."</td>";
		/* echo "<td>".$frod."&nbsp;</td>"; */
		echo '<td><input name="call_'.$session_id.'" type="checkbox" value="'.$session_id.'" '.$chdis.'>'.($frod ? '<a href="index.php?mode=cancel_frod&session_id='.$session_id.'&datefrom='.$datefrom.'&dateto='.$dateto.' ">снять отметку</a>' : '').'</td>';
		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']);
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $out;
		$total_mins = $total_mins + $mins;


 }
 ?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="5"><div align="right">Итого: Длительность: <? echo $total_dur; ?> сек</div></th>
  <td><? echo $total_mins; ?>м</td>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
  <!--th><div align="right">&nbsp;</div></th-->
  <th><div align="right"><input type=submit value="Пометить"></div></th>
</tr>
</tfoot>
</table>
</form>
 <?
;
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
	<div style="color:#FFFF00; background-color:#990000; margin:8px 200px 8px 200px; text-align:center; padding:8px; ">Неотвеченно вопросов - <?=$num?> !!!<br><a href='index.php?mode=tickets' title='Смотреть переписку'>ответить</a></div>
	<?
}
;
}








#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function mass_delete_partner($code)     ---------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function mass_delete_partner(){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------

if(isset($deluser)) for ($j=1;$j<$numberofdeleted;$j++)
	{
		if( strlen($_POST['u_'.$j]) > 0 ) {
			delete_partner($_POST['u_'.$j]);
 			/* echo ($_POST['u_'.$j]);
			echo "<br>"; */
		}
 	}



?>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
	<tr><td align="left" valign="top">

<form method="post" action="index.php?mode=mass_delete_partner">
<?
$i =1;
 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin != '' AND partner_type = '2'  ORDER BY code");

 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin[$i] = $row['userlogin'];
		if ( $i>1 && substr( $userlogin[$i],2,1) != substr( $userlogin[$i-1],2,1) ) echo '</td><td align="left" valign="top">';
?>
		<input name="<? echo "u_".$i;?>" type="checkbox" value="<?=$userlogin[$i]?>"> <?=$userlogin[$i]?><br>

<?
		$i++;
	}
?>
<input name="numberofdeleted" type="hidden" value="<?=$i;?>">
</td></tr></table>
<table>
<tr><td align="left" valign="top">
	<input name="deluser" type=submit value="Удалить логины в архив">
</td></tr></table>
</form>

<?




}









?>