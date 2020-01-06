<?

/*------------------------------------------------------*/
/*------------------------------------------------------*/
/*-------- пользовательская  CТАТИСТИКА  ---------------*/
/*------------------------------------------------------*/
/*------------------------------------------------------*/

#----------------------------------------------Текущая статистика по звонкам------------------------------------------------------
function showstats_cur($datefrom,$dateto) {
//echo 'c ' . $datefrom . ' по ' .$dateto .'<br>' ;
open_connection();
	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$redir_num=$ro['redir_num'];
		$partner_num=$ro['partner_num'];
		$code=$ro['code'];
		$userlogin=$ro['userlogin'];
		$partner_type = $ro['partner_type'];
	}
		//echo $code;
		close_connection();
?>
<table width="100%" cellpadding=10 cellspacing=0 border=0>
 <tr height="100%">
  <td width="100%">
	<font face="Arial" size=2 ><br>Статистика  по звонкам за текущий месяц<br><BR>
Номер дозвона: <b><?php 
if 		($redir_num == '9012028013' ) 	echo '07278'; 
elseif 	($redir_num == '9012029438' ) 	echo '07223'; 
else 									echo $redir_num; 
?></b><br>

Ваш добавочный номер: <b><?php echo $code;  ?></b><br><br>Внимание! Точкой отсчета при выборе даты является полночь по МСК, таким образом -  день, завершающий выбранный период (дата "по"), в статистику <font style="font-weight:bold; color:#FF0000; text-decoration:underline;">не включается</font>.<br><br>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="stats">
<font style="font-weight:bold; color:#FF0000;">Период:</font><br>с <? makeform_from_date("datefrom",$datefrom, 'cur'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;по 
	<? makeform_from_date("dateto",$dateto, 'cur'); ?> &nbsp;&nbsp;&nbsp;<input type=submit value="Полная статистика">
</form>
<?
open_connection();
$res = sql_do("SELECT * FROM totaldata where userlogin='$userlogin' and date>='$datefrom' and date<='$dateto' order by date desc");
 $count = mysql_num_rows($res); 
?>
<table  class="printview">
<tr>
<th>Дата</th>
<th>Номер абонента</th>
<th>Номер переадр.</th>
<th>Длит. (сек)</th>     
<th>Доход (руб)</th>     
</tr>
<? 
$duration = $row['duration'];
$total_Out = 0;
$total_L_Out = 0;
$total_dur=0;
 while ($row = mysql_fetch_array($res, MYSQL_BOTH)){
	if(aprox($row['duration'])>0){
 		echo "<tr>";
 		echo "<td>".$row['date']."</td>";

		if ($userlogin == 21616 ) echo "<td>&nbsp;". $row['abon_number'] ." </td>";
		else echo "<td>&nbsp;". substr ( $row['abon_number'], 0, 6 ) ." x x x x </td>";

		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['duration']."</td>";
 		echo "<td>".($out = $row['out'])."</td>";
 		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']); 
		$total_Out = $total_Out + $out;
	}
}
echo "</table>";
close_connection(); 
?><br>
<a name="Vonagragdenie"></a>
 <table style="border: 1px solid #aaaaaa; border-collapse:collapse;  " width="50%">
  <tr>
    <th><div align="center">Длительность</div></th>
    <th> <div align="center">Вознаграждение</div></th>
  </tr>
  <tr>
    <td><div align="center"><? echo $total_dur  ; ?> сек. &nbsp;</div></td>
    <td><div align="center"><?=$total_Out?> руб.</div></td>
    </tr>
</table>
<?
}







#----------------------------------------------Полная статистика по звонкам------------------------------------------------------
function showstats($datefrom,$dateto) {

open_connection();
	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$redir_num=$ro['redir_num'];
		$partner_num=$ro['partner_num'];
		$code=$ro['code'];
		$userlogin=$ro['userlogin'];
		$partner_type = $ro['partner_type'];
	}
#--------------Проверяем, не был ли удален юзер с  таким логином, если да - то берем дату, с какой  показывать стату--#######
 	$result99 = sql_do("SELECT deletetime FROM deleted_users WHERE userlogin='$userlogin'");
 	while ($r99 = mysql_fetch_array($result99, MYSQL_BOTH)){
		$deletetime=$r99['deletetime'];
	}
#---------------------------------------------------------------------------------------------------------------------#######
		//echo $code;
		close_connection();
?>
<table width="100%" cellpadding=10 cellspacing=0 border=0>
 <tr height="100%">
  <td width="100%">
	<font face="Arial" size=2 ><br>Полная статистика по звонкам на ваш короткий номер: <br><BR>
Номер дозвона: <b><?php 
if ($redir_num == '9012028013' ) echo '07278'; 
elseif ($redir_num == '9012029438' ) echo '07223'; 
else echo $redir_num; 
?></b><br>

Ваш добавочный номер: <b><?php echo ($code=='code'? "еще не выделен" : $code);  ?></b><br><?php if(strlen($userlogin)<6) echo '<a href="marshr.php" target="_blank">Текущая стоимость маршрутизации</a>'; ?><br>Внимание! Точкой отсчета при выборе даты является полночь по МСК, таким образом -  день, завершающий выбранный период (дата "по"), в статистику <font style="font-weight:bold; color:#FF0000; text-decoration:underline;">не включается</font>.
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="stats">
Период:<br>с <? makeform_from_date("datefrom",$datefrom); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;по 
	<? makeform_from_date("dateto",$dateto); ?> &nbsp;&nbsp;&nbsp;<input type=submit value="Применить">
</form>
<?
open_connection();

if ($deletetime > $datefrom) $datefrom = $deletetime;

$res = sql_do("SELECT * FROM totaldata where userlogin='$userlogin' and date>='$datefrom' and date<='$dateto' order by date desc");
 $count = mysql_num_rows($res); 
?>
<table  class="printview">
<tr>
<th>Дата</th>
<th>Номер абонента</th>
<th>Номер переадр.</th>
<th>Длит. (сек)</th>     
<th>Доход (руб)</th>     
</tr>
<? 
$duration = $row['duration'];
$total_Out = 0;
$total_L_Out = 0;
$total_dur=0;
 while ($row = mysql_fetch_array($res, MYSQL_BOTH)){
	if(aprox($row['duration'])>0){
 		echo "<tr>";
 		echo "<td>".$row['date']."</td>";

		if ($userlogin == 21616 ) echo "<td>&nbsp;". $row['abon_number'] ." </td>";
		else echo "<td>&nbsp;". substr ( $row['abon_number'], 0, 6 ) ." x x x x </td>";

		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['duration']."</td>";
 		echo "<td>".($out = $row['out'])."</td>";
 		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']); 
		$total_Out = $total_Out + $out;
	}
}
echo "</table>";
close_connection(); 
?><br>
<a name="Vonagragdenie"></a>
 <table style="border: 1px solid #aaaaaa; border-collapse:collapse;  "  width="50%">
  <tr>
    <th>Длительность</th>
    <th> Вознаграждение</th>
  </tr>
  <tr>
    <td><div align="center"><? echo $total_dur  ; ?> сек. </div></td>
    <td><div align="center"><?=$total_Out?> руб.</div></td>
    </tr>
</table>

<?
}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function showdata()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
// личные данные
function showdata($user_id){
open_connection();

 $result = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
 while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
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
}
include('admin/includes/cab_anketa.php'); 

}





// сохраниние изменённых личных данных
function edited($user_id,$fio,$mail,$icq,$tele_contact,$additional,$vremya1,$vremya2){

open_connection();


	$res = sql_do("UPDATE users_ivr SET fio='$fio', mail='$mail', icq='$icq', tele_concact='$tele_contact', additional='$additional', vremya1='$vremya1', vremya2='$vremya2'  where user_id='$user_id'"); 
	if(!$res) { echo "Не удалось обновить данные."; }
	else  { echo "<br><br>&nbsp;&nbsp;Данные успешно обновлены. <a href='cabinet.php?mode=data'>Назад</a>"; }




}
// форма изменения пароля
function changing($user_id){
?><form action="cabinet.php?mode=changed" method=post><br><br>
<table border=0 cellspacing=0 cellpadding=4><tr><td>
Старый пароль: </td><td>
<input type=password name=oldpass></td></tr>
<tr><td>
Введите новый пароль: </td><td>
<input type=password name=pass></td></tr>
<tr><td>
Подтвердите: </td><td>
<input type=password name=passconf></td></tr></table>
<p>
    <input type=hidden name="user_id" value="<?=$user_id?>">
    <input type=submit value="Сохранить">
    <?
}

// изменение пароля
function changed($user_id,$pass,$oldpass,$passconf){
open_connection();

if($pass!=$passconf){ echo "Не совпадают введённые новые пароли. <a href='cabinet.php?mode=changepass'>Назад</a>"; die(); } 
$result = sql_do("SELECT pass_hash FROM users_ivr WHERE user_id='$user_id';");
$row = mysql_fetch_array($result, MYSQL_BOTH);

$pass_old=$row['pass_hash'];
$pass_hash=md5($oldpass);
if($row['pass_hash']!=$pass_hash){ echo "<br>&nbsp;&nbsp;Не совпадают введённые старый и новый пароли. <a href='cabinet.php?mode=changepass'>Назад</a>"; die(); }

$res = sql_do("UPDATE users_ivr SET pass_hash='".md5($pass)."' where user_id='$user_id'"); 
	if(!$res) { echo "Не удалось обновить данные."; }
	else  { 		
		echo "Данные успешно обновлены. <a href='cabinet.php?mode=changepass'>Назад</a>"; 
		session_unset();
		session_destroy();
 }
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOutReCo() --------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOutReCo ($duration, $login) {
 	$res=sql_do("SELECT * FROM users_ivr WHERE userlogin='$login' ");
	$row = mysql_fetch_array($res, MYSQL_BOTH) ;

	$sv = $row['icq'];	//Св = Стоимость одного выхода рекламы При внесении нового партнера
	$kd = $row['mail'];	//Кд = Количество дней в одном выходе, менеджер вручную вбивает
	$pr = ( $row['enddate'] - $row['startdate'] ) / (3600*24);	//Пр = Период рекламы (кол-во дней)  данные      startdate   enddate
	$user_code = $row['code'];
	$redir_num = $row['redir_num'];
	$p = ($sv/$kd) /* *$pr */ ;		//   Где Р – расход

	$result= sql_do("SELECT * FROM incoming WHERE  user_code = '$user_code' AND called_number = '$redir_num' ");
	$num = mysql_num_rows($result);


return round ( $p/$num , 2 ) ;
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOutClient() ------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOutClient ($abon_number, $duration) {
  $q = "SELECT * FROM `defcodes` WHERE `from` <=  '$abon_number' AND `to` >= '$abon_number' ";
  $result=sql_do($q);
  if (!mysql_num_rows($result) || mysql_num_rows($result) >1) return 'N/A An';
  else {
  	if ($tarif_number == '9012029438') 		$t=2;
  	elseif ($tarif_number == '9012028013') 	$t=1;
  	else 									$t=0;
  	//return "OK!";
	$row = mysql_fetch_array($result, MYSQL_BOTH);
	$id = $row['id'];
	$provider = $row['provider'];
	$oblast = $row['oblast'];
	$from = $row['from'];
	$to = $row['to'];
	$tarif_1 = $row['tarif_1'];
	$tarif_2 = $row['tarif_2'];
	$porog = $row['porog'];
	$procent = $row['procent'];
	$work = $row['work'];
	$region = $row['region'];
	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;

	if (!$work) return "N/M";
	if (!$duraMin) return 0;
  }
return round ( ( $duration * (12/60) ), 2) ;
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOut() ------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOut ($partner_num, $abon_number, $duration, $tarif_number) {
  $q = "SELECT * FROM `defcodes` WHERE `from` <=  '$abon_number' AND `to` >= '$abon_number' ";
  $result=sql_do($q);
  if (!mysql_num_rows($result) || mysql_num_rows($result) >1) return 'N/A An';
  else {
  	if ($tarif_number == '9012029438') 		$t=2;
  	elseif ($tarif_number == '9012028013') 	$t=1;
  	else 									$t=0;
  	//return "OK!";
	$row = mysql_fetch_array($result, MYSQL_BOTH);
	$id = $row['id'];
	$provider = $row['provider'];
	$oblast = $row['oblast'];
	$from = $row['from'];
	$to = $row['to'];
	$tarif_1 = $row['tarif_1'];
	$tarif_2 = $row['tarif_2'];
	$porog = $row['porog'];
	$procent = $row['procent'];
	$work = $row['work'];
	$region = $row['region'];
	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;

	if (!$work) return "N/M";
	if (!$duraMin) return 0;

	if ($tarif_number == '9012029438') 	{
		//$svt = ($tarif_2 * $procent) * $duraMin;
		$CostOut  =  ($region == 'cent') ? (19/60)*$duration  : (17/60)*$duration  ;
	}
  	elseif ($tarif_number == '9012028013') 	{
		//$svt = ($tarif_1 * $procent) * $duraMin;
		$CostOut  =  ($region == 'cent') ? (9.5/60)*$duration  : (8.5/60)*$duration  ;
	}
  	else 									return "N/A";
 return round ( $CostOut , 2) ;
 }


}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function Payouts()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
// личные данные
function Payouts($user_id){
open_connection();

 $result = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
 while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
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
		$activationdate=$row['activationdate'];
		$type=$row['type'];
}


$activationdate = substr($activationdate, 0, 8);
$activationdate = $activationdate."00";


 /* echo */  $q_223 = "SELECT * FROM `payouts` WHERE `userlogin` = '$userlogin' AND `period` >= '$activationdate' ORDER BY period DESC";

$result =  mysql_query($q_223) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q_223." --- <BR>");

//echo " Строк ".mysql_num_rows($result);


?>
<h4>Уважаемый(ая) <?=$fio?>!</h4>
Ваш логин в системе - <?=$userlogin?>.<br>
Оплата производится помесячно.


<h4>Статистика взаиморасчетов</h4>
<table  class="printview">
<thead>
	<tr><th>Месяц</th><th>Дата</th><th>Вознаграждение</th><?php 	if ($type != 'Юридическое лицо') {?><th>Сумма*</th><?php } else {?><th>Акт</th><?php }?><th>Статус</th></tr>
</thead>
<tbody>
<?
//exit;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
 
			$period = $row['period'];
			$userlogin = $row['userlogin'];
			$year = $row['year'];
			$payoutdate = $row['payoutdate'];
			$out = $row['out'];
			$month = $row['month'];
			$complete  = $row['complete'];
		echo "<tr>";
		echo "<td>".$year.'-'.$month."</td>";
		echo "<td>".($complete ? $payoutdate : '&nbsp;')."</td>";
		echo "<td>".$out."</td>";
		if ($type == 'Физическое лицо') 	echo "<td>".(round($out*0.87,2))."</td>";
		elseif ($type == 'ВебМани') 	echo "<td>".(round($out*0.951,2))."</td>";
		else echo '<td><a href="actsp.php?period='.$year.'-'.$month.'&userlogin='.$userlogin.'&out='.$out.'"  target="_blank">Распечатать Акт сдачи-приемки оказанных услуг за '.$year.'-'.$month.'</a></td>';
		echo "<td>".( $complete == 'YES' ? 'Выполнен' : ($complete == 'ZAK' ? 'Заказан' : 'Начислен') )."</td>";
		echo "</tr>";
		$total_Outwithfrod = $total_Outwithfrod + $outwithfrod;
		$total_Out = $total_Out + $out;

 }
 ?>
 </tbody>
</table>
<?php 	if ($type == 'Физическое лицо') {?>
* - С суммы вознаграждения в соответствии с действующим законодательством и условиями заключенного с Вами договора удерживается подоходный налог в размере 13%
 <? }
elseif ($type == 'ВебМани') {?>
* - В соответствии с пунктом 3.12 <a href="http://mcall.ru/connect.php">ПУБЛИЧНОЙ ОФЕРТЫ НА ПРЕДОСТАВЛЕНИЕ УСЛУГ И СЕРВИСОВ
</a> (для звонков после 01.09.2008)<? }
 
 $nowperiod = NowPeriod($period);
//close_connection();
//echo "SELECT * FROM totaldata where userlogin='$userlogin' and date>='$nowperiod'  order by date desc";
$res = sql_do("SELECT * FROM totaldata where userlogin='$userlogin' and date>='$nowperiod'  order by date desc");
 $count = mysql_num_rows($res); 
?>
<!--table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:12px;  ">
<tr>
<th>Дата</th>
<th>Номер абонента</th>
<th>Номер переадр.</th>
<th>Длит. (мин)</th>     
<th>Вознаграждение (руб)</th>     
</tr>
<? 
$duration = $row['duration'];
$total_Out = 0;
$total_dur=0;
 while ($row = mysql_fetch_array($res, MYSQL_BOTH)){
	if(aprox($row['duration'])>0){
 		echo "<tr>";
 		echo "<td>".$row['date']."</td>";
		echo "<td>&nbsp;". substr ( $row['abon_number'], 0, 6 ) ." x x x x </td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".(round($row['duration']/60, 2))."</td>";
 		echo "<td>".($out = $row['out'])."</td>";
 		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']); 
		$total_Out = $total_Out + $out;

	}
}

close_connection(); 
?>
</table-->

<p>Напоминаем Вам, что выводятся суммы не менее 500 рублей в месяц, в противном случае – переносятся  до следующей выплаты.
    <?
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function NowPeriod()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
//  Устанавливает  период на месяц больше  (следующий то есть делает месяц)
function NowPeriod($date) {

  $date_array=explode("-",$date);
$day = $date_array[2];
$month = 1+$date_array[1];
$year = $date_array[0];
if ($month == 13) {
	$month=1;
	$year = 1+$year;
}
if ($month<10) $month = "0".$month;
 	return ($year."-".$month."-".$day);
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function show_status()      ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function show_status() {
open_connection();
	$id=USER_ID;
	$start_date = make_date_c('from');
 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
		$type = $ro['type'];
		$fio = $ro['fio'];
		$payed = $ro['payed'];
		$activationdate = $ro['activationdate'];
	}
	$que = "SELECT * FROM `user_status` WHERE `userlogin` = '$userlogin'  AND `start_date` = '$start_date'  ";
	$result1 = sql_do($que);
 	$row1 = mysql_fetch_array($result1, MYSQL_BOTH);
	$status = $row1['status'];
?>
<fieldset  style="border: 1px solid #000099;  padding: 7px; "><legend  style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold;">Приветствуем Вас, <font color="#FF0000"><?php echo $fio;?></font>!</legend>
<table  style="border: 0 solid #aaaaaa; border-collapse:collapse;  font-family:Verdana, Arial, Helvetica, sans-serif; ">
  <tr>
    <td width="200" valign="top">
<?
$color = $status == 'Abonent' ? '<font color="#00AA00">' : ($status == 'Light' ? '<font color="#0000FF">' : '<font color="#FF0000">');

echo '<b style="font-size:10px; ">Тарифный план:</b><br><font color="#00AA00">'.$type.'</font>';
echo "<br><br>";
echo '<b style="font-size:10px; ">Текущий статус:</b><br>'.$color.$status."</font>";
close_connection();
?>
</td>
    <td><font color="#990000"><b style="font-size:10px; "><?php 
	
	if (!$payed && $activationdate > '2011-06-05' && strlen($userlogin) <= 6 ) echo '<b style="font-size:15px; ">Тестовый Режим</b></font>'; 
	elseif ($payed && $activationdate > '2011-06-05' && strlen($userlogin) <= 6 ) echo '<b style="font-size:15px; ">Полно-функциональный (Рабочий) режим</b></font>'; 
	elseif (strlen($userlogin) > 6 ) echo '<b style="font-size:15px; ">Номер не выделен</b></font>'; 
	
	?></b></font></td>
    <td>
	  <div align="justify"><font color="#777777"> <font size="-1"> <?php 
	  if (!$payed && $activationdate > '2011-06-05'  && strlen($userlogin) <= 6 ) echo '<b style="font-size:13px; ">В Тестовом Режиме средства за звонки не начисляются. </b> Списание средств со счета звонящего абонента осуществляется в обычном порядке.  Все расчеты предварительные, по нашим аппаратным данным. <br>Тестовое подключение произведено сроком на 2 недели - за это время необходимо оплатить подключение номера и перейти в РАБОЧИЙ РЕЖИМ. В случае неоплаты подключения номер будет отключен. Обратите внимание - <font color="#990000">оплата за звонки в тестовом режиме НЕ начисляется</font>, режим предназначен для проверки качества сервиса!</font>'; 
	  elseif ($payed || $activationdate < '2011-06-05'  && strlen($userlogin) <= 6 ) {
	  		echo 'Выплатаы по звонкам начисляются в соответствии с Вашим текущим статусом. Все расчеты предварительные, по нашим аппаратным данным.  Перевод средств на счет Вашего аккаунта производится в конце отчетного периода  с учетом статуса и исходя из общего суммарного оплаченного абонентами времени соединения и стоимости маршрутизации по <font color="#990000">данным, полученным от операторов</font>.'; 
#			echo '<br><br><div style="border:1px solid red; padding: 5px; width:400px; ">Уважаемые партнеры! Выплаты за 11.2011 задерживаются в связи со сменой реквизитов одного из операторов связи. Возможная задержка 10-15 дней. Приносим извинения за доставленные неудобства.</div>'; 
include_once('html_gall/obyjavlenie.php'); 
		}
	  elseif ( strlen($userlogin) > 5 ) echo 'Для того, чтобы начать работу, необходимо оплатить подключение короткого номера.<br>Вы можете подключить номер бесплатно в ТЕСТОВОМ РЕЖИМЕ. Для этого напишите на страничке Обратной Связи сообщение "прошу подключить Тестовый Режим". Вам будет произведено тестовое подключение сроком на 2 недели - за это время необходимо оплатить подключение номера и перейти в РАБОЧИЙ РЕЖИМ. В случае неоплаты подключения номер будет отключен. Обратите внимание - <font color="#990000">оплата за звонки в тестовом режиме НЕ начисляется</font>, режим предназначен для проверки качества сервиса!';
	  ?> </font></font><br><br>
	  

<p><a  href="javascript:inver('vajno')" >Нажмите, чтобы прочитать информацию. Важно!</a></p>
<div id="vajno" style="display:none;" ><font color="#0000aa">Уважаемый Партнер! Уведомляем Вас о том, что в соответствии  с новыми требованиями оператора сотовой связи МТС фраза<br>

<font color="#aa0000">«Стоимость доступа к услугам контент-провайдера устанавливается Вашим оператором. Подробную информацию можно узнать в разделе «Услуги по коротким номерам» на сайте www.mts.ru или обратившись в контактный центр по телефону 8 800 333 0890 (0890 для абонентов МТС)»</font> <br>
должна быть добавлена в футер<font color="#ff0000">*</font> на ВСЕ web-ресурсы, где рекламируется Ваши короткие номера. <br><br>
Просим Вас в обязательном порядке  сообщить через Обратную Связь о всех ваших web-ресурсах, на которых рекламируется короткий номер, для плановой проверки этого требования. (Если реклама через интернет не ведется, сообщать ничего не надо.)
В случае необнаружения данной фразы на заявленных площадках, или обнаружения незаявленных ресурсов без этой фразы будут применяться санкции<?php if (strlen($userlogin)<=6)  	 echo " вплоть до отключения  префикса"; ?>.
</font>
<br><br><font color="#ff0000">*</font><font size="-2">Это не означает, что нужно заменить  указание стоимости минуты этой фразой, что могло бы повлиять на решение абонента МТС относительно звонка. Мы рекомендуем давать приблизительную стоимость минуты и сноску на эту фразу, находящуюся ниже и набранную более мелким шрифтом. Желательно дать пояснение, что данная информация относится только к абонентам, пользующимся услугами МТС.</font>
</div>



	  <br>
	    </div></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><font color="#888888" size="-2">Внимание! 915107xxxx, 911906xxxx и 812647xxxx- <font color="#FF0000">тестовые номера</font>, зачисление средств по ним не производится.<br>
        В настоящее время в связи с техническими работами на серверах статистика может отображаться с задержками до 2 суток.</font></td>
    </tr>
</table>


</fieldset>
<br>
<?
}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function Balance()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function Balance($user_id){
open_connection();

 	$result1 = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
	$ro1 = mysql_fetch_array($result1, MYSQL_BOTH);
	echo "<br>Баланс по аккаунту ";
	echo $userlogin = $ro1['userlogin'];
	$activationdate = $ro1['activationdate'];
	echo ".<br>Начисления  произведены условно, окончательный расчет производится после получения подтвержденных данных от операторов связи.<br>";


// plus minus balans  payout date comment
$T_plus = 0;
$T_minus = 0;
$T_payout = 0;
?>
<?php /*  */?>
<h4>Статистика взаиморасчетов</h4>
<table   class="printview">
<thead>
	<tr><th>Дата</th><th>Приход</th><th>Расход</th><th>Выплаты</th><th>Комментарий</th><th>Баланс</th></tr>
</thead>
<tbody>
<?
 	$result = sql_do("SELECT * FROM `user_balans` WHERE `userlogin` = '$userlogin' AND `date` >= '$activationdate'  ORDER BY `date` ASC ");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$date=substr($ro['date'], 0 ,10);
		$plus=$ro['plus'];
		$minus = $ro['minus'];
		$payout = $ro['payout'];
		$comment = $ro['comment'];

		$T_plus = $T_plus + $plus;
		$T_minus = $T_minus + $minus;
		$T_payout = $T_payout + $payout;

		echo "<tr>";
		echo "<td>".$date."</td>";
		echo "<td>".$plus."</td>";
		echo "<td>".$minus."</td>";
		echo "<td>".$payout."</td>";
		echo "<td>".$comment."</td>";
		echo "<td>".(round (($T_plus - $T_minus - $T_payout), 2))."</td>";
		echo "</tr>";
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
  <th><?php echo round (($balance = $T_plus - $T_minus - $T_payout), 2) ;?></th>
</tr>
</tfoot>

</table>
 <?

echo '<br>Предварительный баланс: <strong><font color="#aa0000">' . (round (($balance = $T_plus - $T_minus - $T_payout), 2));
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

close_connection();
}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function Docs()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function Docs($user_id){
?>
	<br>
Вы уже выслали документы, но они все еще помечены как непредоставленные? - <a href="faq.php#q20" target="_blank">Возможная причина	</a><br>
<?
open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	echo "<br>Документы, предоставленные по аккаунту ";
	echo $userlogin = $ro['userlogin'];
	echo ".<br>Внимание! До предоставления ВСЕХ перечисленных ниже документов вывод средств с Вашего аккаунта будет заблокирован.<br>";

	$document=$ro['document'];
	$requisition = $ro['requisition'];
	$agreement = $ro['agreement'];
	$inn = $ro['inn'];
	$type = $ro['type'];
#--------------------------------------------------------------------
	if ($type == 'Физическое лицо') { ?>
	<br><br>
	


<table class="printview">
  <tr>
    <th>Паспорт</th>
    <th>Платежные реквизиты</th>
    <th>Договор</th>
    <th>Копия ИНН (скан или факс)</th>
  </tr>
  <tr>
    <td><?=$ro['document']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
    <td><?=$ro['requisition']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
    <td><?=$ro['agreement']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
    <td><?=$ro['inn']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
  </tr>
</table>
<?
		if ($document && $requisition && $agreement && $inn) $docs = true; else  $docs = false;
}
#--------------------------------------------------------------------

	elseif ($type == 'ВебМани') { ?>
	<br><br>
<table class="printview">
  <tr>
    <th>Паспорт</th>
    <th>Аттестат WM не ниже начального</th>
    <th>Договор</th>
  </tr>
  <tr>
    <td><?=$ro['document']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
    <td><?=$ro['requisition']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
    <td><?=$ro['agreement']?'<font color="#00bb00">не требуется</font>':'<font color="#00bb00">не требуется</font>'?></td>
  </tr>
</table>
<?
		if ($document && $requisition && $agreement) $docs = true; else  $docs = false;
}
#--------------------------------------------------------------------


	else { // Юрики   ?>
	<br><br>
<table class="printview">
  <tr>
    <th>Свидетельство о регистрации</th>
    <th>Банковские реквизиты</th>
    <th>Договор</th>
  </tr>
  <tr>
    <td><?=$ro['document']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
    <td><?=$ro['requisition']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
    <td><?=$ro['agreement']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
  </tr>
</table>
<?
		if ($document && $requisition && $agreement) $docs = true; else  $docs = false;
}
#--------------------------------------------------------------------


echo "<br>Вывод средств: ".($docs? '&nbsp;&nbsp;&nbsp;&nbsp;<font color="#00bb00">Вы можете выводить средства</font>' : '&nbsp;&nbsp;&nbsp;&nbsp;<font color="#BB0000">Вы НЕ можете выводить средства.</font> Необходимо предоставить недостающие документы.');

?><br>
<br>
<h3>Недостающие документы нужно загрузить на страничке <a href="<?=$_SERVER['SCRIPT_NAME'];?>?mode=docfiles">Загрузить файлы</a>.</h3>
<br>
<?php 
if ($type == 'ВебМани' || $type == 'Физическое лицо') {?>Паспорт: <br>
загружаются 2 файла с названиями "Паспорт" (1-я стр.) и "Прописка";<br><br><? }

if ($type == 'ВебМани') { ?>
Аттестат WM не ниже начального: <br>
1 файл  с названием "Аттестат", в формате MS Word или txt, содержащий в себе ссылку на страничку с Вашим WMID, с открытыми данными по ФИО.
<?php }

if ($type == 'Юридическое лицо') { ?> Свидетельство о регистрации юридического лица или ИП.<br>

<?php }

close_connection();
}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function b_requesites()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function b_requesites($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();
if ($sendpayment) sql_do("INSERT INTO `b_requesites` (`id` ,`user_id` ,`userlogin` ,`receivername` ,`receiver_inn` ,`receiver_account` ,`receiver_bankbic` ,`receiver_bank_kc` ,`paymentassignment`) VALUES ('' , '$user_id', '$userlogin', '$receivername', '$receiver_inn', '$receiver_account', '$receiver_bankbic', '$receiver_bank_kc', '$paymentassignment' )" );

if ($sendpaymentagain) sql_do("UPDATE `b_requesites` SET `receivername` =  '$receivername',`receiver_inn` = '$receiver_inn',`receiver_account` ='$receiver_account' , `receiver_bankbic` = '$receiver_bankbic' , `receiver_bank_kc` = '$receiver_bank_kc' , `paymentassignment` = '$paymentassignment'     WHERE `user_id` ='$user_id'" );

if ($wm_payment) sql_do("UPDATE `users_ivr` SET `wmpurse` = '$receiver_wm' WHERE `user_id` ='$user_id' " );


 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];

	$document=$ro['document'];
	$requisition = $ro['requisition'];
	$agreement = $ro['agreement'];
	$inn = $ro['inn'];
	$type = $ro['type'];
	$wmpurse = $ro['wmpurse'];




#--------------------------------------------------------------------
	if ($type  == 'Физическое лицо') { 


 	$result_br = sql_do("SELECT * FROM `b_requesites`  WHERE user_id='$user_id'");
	$robr = mysql_fetch_array($result_br, MYSQL_BOTH);
	if (   mysql_num_rows($result_br)  )  {
		echo "<br><br>По аккаунту ".($userlogin = $robr['userlogin'])." предоставлены следующие реквизиты:<br>";
		include('includes/bankrequisites_again.php'); 

/* 
		?>
		<form method=post action="<?=$_SERVER['PHP_SELF']?>?mode=b_requesites">
<table  class="printview">
   <tbody>
        <tr>
                <td class="maintext" valign="top">Получатель:</td>
	           <td>

			<textarea  style="width: 170px; height: 49px;" tabindex="3" name="receivername" id="receivername" maxlength="160"><?=$robr['receivername']?></textarea>

              </td>
            </tr>
                <tr>

	                <td class="maintext">ИНН:</td>
	                <td><input  style="width: 134px;" tabindex="4" name="receiver_inn" id="receiver_inn" maxlength="12" value="<?=$robr['receiver_inn']?>"></td>
                </tr>
                <tr>
	                <td class="maintext">р/Сч. №:</td>
	                <td><input  style="width: 154px;" tabindex="5" maxlength="20" name="receiver_account" id="receiver_account" value="<?=$robr['receiver_account']?>"></td>
                </tr>
                <tr>

	                <td class="maintext">БИК банка:</td>
	                <td><input  style="width: 100px;" tabindex="6" maxlength="9" id="receiver_bankbic" name="receiver_bankbic" value="<?=$robr['receiver_bankbic']?>"></td>
                </tr>
                <tr>
	                <td class="maintext">к/Сч. №:</td>
	                <td><input  style="width: 154px;" tabindex="7" name="receiver_bank_kc" id="receiver_bank_kc" value="<?=$robr['receiver_bank_kc']?>"></td>
                </tr>
                <tr>

	                <td class="maintext" valign="top">Назначение платежа:</td>
	                <td>
                	
		                <textarea name="paymentassignment"   style="width: 470px; height: 56px;" tabindex="8" maxlength="108"><?=$robr['paymentassignment']?></textarea>
		                <!--center style=""><span ><i>(выше введите свое назначение. макс длина 108 символов)</i></span></center-->
	                </td>
                </tr>
                <!--tr>
                  <td class="maintext" valign="top">&nbsp;</td>
                  <td>
				  <input name="user_id" type="hidden" value="<?=$user_id?>">
				  <input name="userlogin" type="hidden" value="<?=$userlogin?>">
                    <input name="sendpayment" value="отправить уточненные банковские реквизиты"  type="submit">
                </td>
                </tr-->
          </tbody></table>		
        </form>

<ul><li><b>БИК банка получателя</b> - банковский идентификационный код банка получателя в соответствии со "Справочником БИК РФ". </li>
  <li><strong>К/С</strong> <strong>банка получателя</strong> - номер корреспондентского счета открытый кредитной организацией получателя в расчетной сети Банка России.</li>
  <li><b>Р/С получателя</b> - номер лицевого счета получателя в кредитной организации, либо номер счета отделения при отправке в Сбербанк (начинается с 30301...), либо номер кор. счета кредитной организации в банке-получателе при переводе средств в кредитную организацию, имеющую кор. счет в банке-получателе.</li>
  <li><b>ИНН получателя</b> - идентификационный номер налогоплательщика - получателя денежных средств. При переводе в Сбербанк, как правило, указывается ИНН Сбербанка - 7707083893. При переводе в другой коммерческий банк, в случае отсутствия ИНН у получателя денежных средств можно, указать ИНН банка получателя или 0000000000. </li>
  <li><b>Получатель</b> - наименование банка-получателя денежных средств. </li>
  <li><b> Назначение</b> - 
                      ФИО получателя (полностью), номер счета (карточного или сберкнижки)  физического лица – получателя<br>
  Банковский перевод, по указанным Вами реквизитам выполняет наше уполномоченное лицо в соответствии с договором оферты. В назначение платежа будет добавлен текст, поясняющий это. В связи с ограничением ЦБ на длину поля <b>назначение</b> банковского перевода, Ваше назначение платежа не должно превышать 108 символов. </li>
  <li><b>Отметка о НДС в назначении платежа</b> - в соответствии с Законом РФ "О налоге на добавленную стоимость" при платежах необходимо выделять сумму НДС. Физические лица, кроме частных предпринимателей, не являются плательщиками НДС, поэтому при переводах на имя физического лица сумма НДС не выделяется, то есть указывается: "Без НДС". В назначение платежа будет добавлен текст, поясняющий это.</li>
</ul>
<h3>Приведены примеры заполнения реквизитов:</h3>
<ol>
  
  <li> <b>Перевод в отделение Сбербанка</b> <br>
      <b>БИК</b> - 044652323 <br>
      <b>Получатель</b> - СБ "ФИЛ. АК СБ РФ (СБ РОССИИ) ОАО-СПБ БАНК" г.САНКТ-ПЕТЕРБУРГ , Савельева Анна Авдеевна  в ОСБ №2003/0715 <br>
      <strong>KC</strong> - 30101810500000000653 <br>
      <b>РС</b> - 42301810555073124377 <br>
      <b>ИНН</b> - 7707083893 <br>
      <b>Назначение</b> - Савельевой Анне Авдеевне в ОСБ №2003/0715 <br>
      <br>
  </li>
  <li> <b>Перевод в отделение Сбербанка, если номер счета получателя больше 20 знаков (например, на сберегательную книжку)</b> <br>
      <b>БИК</b> - 044030653 <br>
      <b>Получатель</b> - МОСКОВСКИЙ ОБЛАСТНОЙ БАНК СБЕРБАНКА РФ г.МОСКВА, Орехово-зуевское отделение №8038/077 <br>
      <strong>KC</strong> - 30101810900000000323 <br>
      <b>РС</b> - 30301810440000600076 <br>
      <b>ИНН</b> - 7707083893 <br>
      <b>Назначение</b> - Для Петрова Василия Павловича, Л/С. 42301610120141766183/01,<br>
      <br>
  </li>
  <li> <b>Перевод в Сбербанк на карточный счет</b> <br>
      <b>БИК</b> - 044652323 <br>
      <b>Получатель</b> СБ "ФИЛ. АК СБ РФ (СБ РОССИИ) ОАО-СПБ БАНК" г.САНКТ-ПЕТЕРБУРГ , Вагин Александр Александрович в ОСБ №2003/0715 <br>
      <strong>KC</strong> - 30101810500000000653 <br>
      <b>РС</b> - 47422810555019999107 <br>
      <b>ИНН</b> - 7707083893 <br>
      <b>Назначение</b> - На карт-счет 6761956102005286 Вагина Александра Александровича <br>
      <br>
  </li>
  <li> <b>Перевод в коммерческий банк</b> <br>
      <b>БИК</b> - 047308874 <br>
      <b>Получатель</b> - Филиал КБ "Мост-Банк" в г.Ульяновске,  Краевский Семен Василиевич <br>
      <strong>KC</strong> - 30101810100000000874 <br>
      <b>РС</b> - 42301810410010000244 <br>
      <b>ИНН</b> - 0000000000 <br>
      <b>Назначение</b> - Краевскому Семену Василиевичу <br>
      <br>
  </li>
  <li> <b>Перевод в коммерческий банк, у которого открыт кор. счет в другом банке</b> <br>
      <b>БИК</b> - 044525545 <br>
      <b>Получатель</b> - ЗАО МЕЖДУНАРОДНЫЙ МОСКОВСКИЙ БАНК г. МОСКВА, ДЛЯ АО "ПАРЕКС-БАНК" <br>
      <strong>KC</strong> - 30101810300000000545 <br>
      <b>РС</b> - 30111810400010001728 <br>
      <b>ИНН</b> - 7710030411 <br>
      <b>Назначение</b> - ДЛЯ BIS 0008760771 ДЛЯ СЧЕТА 7924-1373<br>
  </li>
</ol>


		<? */
	}
	else {
				echo "<h3>БАНКОВСКИЕ РЕКВИЗИТЫ</h3>Просим Вас  во избежание ошибок и недоразумений заполнить форму с банковскими реквизитами, на которые будут выводится средства с Вашего аккаунта!<br> После сверки с полученными по эл. почте и в случае отсутствия существенных расхождений для оплаты будут использованы реквизиты, введенные на этой странице.<br><br>Пожалуйста, внимательно ознакомьтесь с расшифровкой полей и примерами заполнения, после чего заполните форму внизу страницы.";
			echo '<br><br>Внимание! Вы еще не заполнили форму ПЛАТЕЖНЫХ РЕКВИЗИТОВ. <font color="#FF0000">Без этого вывод средств будет невозможен!</font><br><br>';
			include('includes/bankrequisites.php'); 
	}

  }         //    if ($type  != 'ВебМани')
#--------------------------------------------------------------------


	elseif ($type == 'ВебМани') { 
	
	 include('includes/wmrequisites.php'); 
	}
#--------------------------------------------------------------------
	else { // Юрики  
	?>Банковские реквизиты юридических лиц берутся из договора, на сайте они не заполняются. Для оплаты будут использованы реквизиты, которые Вы предоставили в соответствующем разделе Договора о сотрудничестве.<? 
	}
#--------------------------------------------------------------------



close_connection();

//phpinfo(32);
}










#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function get_money()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function get_money($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];
	$type = $ro['type'];

if ($go == 'yes')  {
	/* echo */ $q = "UPDATE `payouts` SET `complete` = 'ZAK', `payoutdate` = '20".date("y-m-d")."' WHERE `userlogin` = '$userlogin'  AND `period` LIKE '%".$period."%' ";
	$result =  mysql_query($q) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q." --- <BR>");
}





	?><h2>Вывод средств</h2><?


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
if ($total_Out) {
echo '<br>Здесь Вы можете вывести доступные средства в сумме<br>  <strong><font color="#00aa00">'.$total_Out;

	if ($type == 'Физическое лицо') echo "</font></strong> рублей<br> (с этой суммы в соответствии с действующим законодательством в бюджет будет удержан НДФЛ 13%).";
	elseif ($type == 'ВебМани') echo "</font></strong> рублей<br> (на Ваш R-кошелек ВебМани придет сумма ".round($total_Out * 0.951,2)."р. в соответствии с п.3.12 Публичной Оферты о предоставлении услуг).";
	else echo "</font></strong> рублей<br> ";

echo '<br><br> <a href="'.$_SERVER['PHP_SELF'].'?mode=get_money&period='.$year.'-'.$month.'&go=yes">Вывести  '.$total_Out.' рублей</a><br><br>';
//echo  $_SERVER['PHP_SELF'];
}
else echo "Нет доступных средств на балансе."; if ($go == 'yes') echo "<br>Вывод средств заказан (см. \"Платежи\").";

close_connection();
}













#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function ticket()  ------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function ticket($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();
 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];
	$type = $ro['type'];
	$activationdate = $ro['activationdate'];
	$activationdate = substr($activationdate, 0, 10)  ;
	
$answer = str_replace("\n","<br>",$answer);
$question = str_replace("\n","<br>",$question);

	
if ( isset($userlogin) && isset($ticket) && $do == 'update') {
$q = " SELECT * FROM `tickets` WHERE `userlogin` =  '$userlogin' AND `ticket` =  '$ticket' ";
$result= sql_do($q);
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

	$userlogin 	= 		$row['userlogin'];
	$date 		= 		$row['date'];
	$ticket 	= 		$row['ticket'];
	$header 	= 		$row['header'];
	$question 	=	 	$row['question'];
	$answer 	= 		$row['answer'];
	
}

?>
<h3>Обратная связь</h3>
<?php 
$question = str_replace("<br>","\n",$question);
?>
<form action="<?=$_SERVER['PHP_SELF']?>?mode=ticket" method="post">
<table border="0" cellspacing="4" cellpadding="2">
  <tr>
    <td>ticket</td>
    <td><input name="ticket" type="text" size="26" value="<?=$ticket?>"></td>
  </tr>
  <tr>
    <td>Вопрос</td>
    <td><textarea name="question" cols="90" rows="15"><?=$question?></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><div align="right">
      <input name="updatequest" type="submit" value="Отредактировать">
    </div></td>
    </tr>
</table>
</form>

<?
exit();
//die("");
}

if ( isset($quest) && $quest != '')  {

	/* echo */ $q = "INSERT INTO `tickets` (`id` , `userlogin` , `date` , `ticket` , `header` , `question` , `answer` ) VALUES (NULL , '$userlogin', '".date("20y-m-d")." ".date("H:i:s")."', '".($ticket = time())."', '$header', '$question', '')";
	$result =  mysql_query($q) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q." --- <BR>");

/***********************************************************************/		
require "include/class_email.php";

$email = new emailer;

				$email->subject = 'Вопрос на mcall ---  Логин: '.$userlogin.' Вопрос: '.$ticket.' Тема: '.$header;
				$email->to      = 'ilyadok@gmail.com , nickdorofeev@gmail.com';
				$email->from    = "info@".$_SERVER["SERVER_NAME"]; //info@mcall.ru
				$email->message	= $question;
				$email->html_email = 1;
				$email->char_set = 'windows-1251';
				$email->send_mail();

/***********************************************************************/		
}




elseif ( isset($updatequest) && $updatequest != '')  {
		/* echo */ $q = "UPDATE `tickets`  SET `question` = '$question' WHERE `ticket` = '$ticket' AND `userlogin` = '$userlogin' ";
		$result =  mysql_query($q) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q." --- <BR>");
/***********************************************************************/		
$q = " SELECT * FROM `tickets` WHERE `userlogin` =  '$userlogin' AND `ticket` =  '$ticket' ";
$result= sql_do($q);
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

	$userlogin 	= 		$row['userlogin'];
	$date 		= 		$row['date'];
	$ticket 	= 		$row['ticket'];
	$header 	= 		$row['header'];
	$question 	=	 	$row['question'];
	$answer 	= 		$row['answer'];
	
}

require "include/class_email.php";

$email = new emailer;

				$email->subject = 'Вопрос на mcall ---  Логин: '.$userlogin.' Вопрос: '.$ticket.' Тема: '.$header;
				$email->to      = 'ilyadok@gmail.com , nickdorofeev@gmail.com';
				$email->from    = "info@".$_SERVER["SERVER_NAME"]; //info@mcall.ru
				$email->message	= $question;
				$email->html_email = 1;
				$email->char_set = 'windows-1251';
				$email->send_mail();

/***********************************************************************/		
}





?>
<h3>Обратная связь</h3>
<form action="<?=$_SERVER['PHP_SELF']?>?mode=ticket" method="post">
<table border="0" cellspacing="4" cellpadding="2">
  <tr>
    <td>Тема вопроса </td>
    <td><input name="header" type="text" size="26"></td>
  </tr>
  <tr>
    <td>Вопрос</td>
    <td><textarea name="question" cols="20" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><div align="right">
      <input name="quest" type="submit" value="Задать вопрос">
    </div></td>
    </tr>
</table>
</form>
<hr>
<h4>История переписки</h4>
<table class="printview">
<thead>
	<tr><th>Дата</th><th>Тема</th><th>Вопрос</th><th>Ответ</th><th>ticket</th></tr>
</thead>
<tbody>

<?
$q = " SELECT * FROM `tickets` WHERE `userlogin` =  '$userlogin'  AND `date` >  '$activationdate'  ORDER BY `date` DESC";
$result= sql_do($q);
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

	$date 		= 		$row['date'];
	$ticket 	= 		$row['ticket'];
	$header 	= 		$row['header'];
	$question 	=	 	$row['question'];
	$answer 	= 		$row['answer'];
	
		echo "<tr>";
		echo "<td>&nbsp;&nbsp;".$date."&nbsp;&nbsp;</td>";
		echo "<td>&nbsp;&nbsp;".$header."&nbsp;&nbsp;</td>";
		echo "<td>&nbsp;&nbsp;".$question."<p><a href='".$_SERVER['PHP_SELF']."?mode=ticket&userlogin=".$userlogin."&ticket=".$ticket."&do=update' title='Редактировать вопрос'>".( !$answer ? 'Редактировать вопрос':'')."</a></p></td>";
		echo "<td>&nbsp;&nbsp;".$answer."</td>";
		echo "<td>&nbsp;&nbsp;".$ticket."&nbsp;&nbsp;</td>";
		echo "</tr>";
}
 ?>
 </tbody>
</table>
<?
"INSERT INTO `mcall_short`.`tickets` (`id` , `userlogin` , `date` , `ticket` , `header` , `question` , `answer` )
VALUES (NULL , '23456', '2009-04-05', '35355464646', 'yhy nyy nhn', 'htht t wtg tgtgw t tgwtgwtgw', '')";



close_connection();
}











#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function payshort()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function payshort($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];
	$payed = $ro['payed'];
	$type = $ro['type'];

if ($payed == 'YES')  {
	 echo "<h3>Подключение оплачено</h3>";
}
else {

?><h2>Оплата подключения номера</h2><?php 

if ( /* !isset($OneRuble) && isAction() */ 1 == 2)
{
	?>
	В настоящее время действует Акция «Подключись за 1 рубль!». Мы готовы подключить Вас за символическую плату. <a href="action1ruble.php" target="_blank">Узнать подробности акции</a>.<br> Для оплаты по этой акции нажмите кнопку 
	<form action="<?=$_SERVER['SCRIPT_NAME'];?>?mode=pay809" method="post" name="payType">
		<input name="OneRuble" type="submit" value="Подключиться за 1 рубль">
	</form>
	<?
	$file = fopen("html_gall/actionprice.php","r");
	if(!$file) echo("Ошибка открытия файла");  //else  fpassthru($file); //echo $file;
	else {
		$file_array = file("html_gall/actionprice.php");
		if(!$file_array) {
			echo("Ошибка открытия файла");
		}
		else {
			for($i=0; $i < count($file_array); $i++) {
				
						$actionprice =  $file_array[$i];

			} // for     
		} // else
	} // else
	fclose ($file);

	
	
	
	
	$priceR =   $actionprice  ;
	$ActionName = " - Акция Гарантия лучшей цены";
	$Kvitancita = "print".$priceR.".php";
}
elseif ( /* isAction() */  2==3 ) {
	$priceR =  9300   ; 
	$ActionName = " - Акция Подключись за 1 рубль!";
	$Kvitancita = "print9300.php";

}

if ( 1 == 1 ) {
	$priceR =  990   ;
	if ( $userlogin == '419895585' )  	$priceR =  4962   ;
	$ActionName = "";
	$Kvitancita = "kvitanciya990.rtf";

}



$credit_days = 15;

#$priceR = /* 9300 */  7500  ;
$price = round(($priceR / 27), 2);
$name = 'подключение короткого номера, логин '.$userlogin.$ActionName;
 
 /* echo */ $res_url = 'http://'.$_SERVER['SERVER_NAME'].'/resultshort.php';
/*   echo '<br>';
 */  /* echo */ $suc_url = 'http://'.$_SERVER['SERVER_NAME'].'/successshort.php';
/*   echo '<br>';
 */ /* echo */  $fail = 'http://'.$_SERVER['SERVER_NAME'].'/failshort.php';
?> 


<p>&nbsp;</p>
<table border="0" cellpadding="5" cellspacing="20">
  <tr>
    <td colspan="3"><div align="center"><strong>Оплатить через систему <span style="color:#660000;">WebMoney</span> </strong></div></td>
  </tr>
  <tr>
    <td>С кошелька Z (эквивалент - доллары США):
  <br>
  заплатить ООО «Интех»  
  <?=$price;?> 
  WMZ за  
  <?=$name?>
</p>
<form id=pay name=pay method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">

	<input type="hidden" name="LMI_PAYMENT_AMOUNT" value="<?=$price?>">
	<input type="hidden" name="LMI_PAYMENT_DESC" value="<?=$name?>">
	<input type="hidden" name="LMI_PAYMENT_NO" value="<?=$userlogin?>">
	<input type="hidden" name="LMI_PAYEE_PURSE" value="Z658419101697">
	<input type="hidden" name="LMI_SIM_MODE" value="0">
	<input type="hidden" name="LMI_RESULT_URL" value="<?=$res_url?>">
	<input type="hidden" name="LMI_SUCCESS_URL" value="<?=$suc_url?>">
	<input type="hidden" name="LMI_FAIL_URL" value="<?=$fail?>">
	<?php /* <input type="hidden" name="LMI_PAYMENT_CREDITDAYS" value="<?=$credit_days?>"> */?>
	<input type="hidden" name="my_param" value="<?=$userlogin?>">
	<input type="hidden" name="plus" value="<?=$priceR?>">
	<input type="hidden" name="payfornumber" value="yes">
	<input type="hidden" name="comment" value="Оплата подключения короткого номера">
</p>
<p>	
	<input type="submit" value="оплатить <?= $price ;?> WMZ">
</p>
</form></td>
    <td valign="top"> <div align="center">или </div></td>
    <td>С кошелька R (эквивалент - российские рубли):
  <br>заплатить ООО «Интех»  
  <?= $priceR ;?> 
  WMR за  
  <?=$name?>
</p>
<form id=pay name=pay method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">

	<input type="hidden" name="LMI_PAYMENT_AMOUNT" value="<?=$priceR?>">
	<input type="hidden" name="LMI_PAYMENT_DESC" value="<?=$name?>">
	<input type="hidden" name="LMI_PAYMENT_NO" value="<?=$userlogin?>">
	<input type="hidden" name="LMI_PAYEE_PURSE" value="R280352171980">
	<input type="hidden" name="LMI_SIM_MODE" value="0">
	<input type="hidden" name="LMI_RESULT_URL" value="<?=$res_url?>">
	<input type="hidden" name="LMI_SUCCESS_URL" value="<?=$suc_url?>">
	<input type="hidden" name="LMI_FAIL_URL" value="<?=$fail?>">
	<?php /* <input type="hidden" name="LMI_PAYMENT_CREDITDAYS" value="<?=$credit_days?>"> */?>
	<input type="hidden" name="my_param" value="<?=$userlogin?>">
	<input type="hidden" name="plus" value="<?=$priceR?>">
	<input type="hidden" name="payfornumber" value="yes">
	<input type="hidden" name="comment" value="Оплата подключения короткого номера">
</p>
<p>	
	<input type="submit" value="оплатить <?= $priceR ;?> WMR">
</p>
</form></td>
  </tr>
</table>


 

<table border="0" cellpadding="5" cellspacing="20" width="100%">
  <tr>
    <td colspan="3"><div align="center"><strong>Оплатить через  <span style="color:#660000;">БАНК</span> </strong></div></td>
  </tr>
</table>

<a href="<?php echo $Kvitancita; ?>" target="_blank">Квитанция для оплаты через БАНК</a><br>
<br>

Во избежание задержек с подключением номера, после оплаты через Банк сообщите нам об этом на страничке "Обратная связь" и по возможности отправьте отсканированную копию оплаченной квитанции на наш адрес эл. почты <a href="mailto:info@mcall.ru">info@mcall.ru</a>
<br>
<br>




<table border="0" cellpadding="5" cellspacing="20" width="100%">
  <tr>
    <td colspan="3"><div align="center"><strong>Оплатить через  <span style="color:#660000;">Яндекс.Деньги</span> </strong></div></td>
  </tr>
</table>

Счет для оплаты 4100167053549<br><br>


После оплаты через Яндекс.Деньги сообщите нам об этом на страничке "Обратная связь" (обязательно!) и  на наш адрес эл. почты <a href="mailto:info@mcall.ru">info@mcall.ru</a>. Деньги будут зачисленны на  счет Вашего аккаунта только после этого.
<br>
<br>

<?php /* <table border="0" cellpadding="5" cellspacing="20" width="100%">
  <tr>
    <td colspan="3">
	<div align="center"><strong>Оплатить при помощи  <span style="color:#660000;">СМС</span> </strong></div>
	<div align="center">(Альтернативный вариант, в стоимость входит оплата услуг операторов связи по обработке смс сообщения)</div>
	</td>
  </tr>
  <tr>
    <td colspan="3">
<?php
  
$result = false;
if (isset($_POST["key"])) {
  $check_url = "http://check.smspartner.ru?id=121642&key=".urlencode($_POST['key']);
  $content = @file_get_contents($check_url);
  if ($content === "OK") $result = true;
}

if (!$result) {
  //echo file_get_contents("http://dostup.smspartner.ru/send_text.php?id=121642");
  ?>
  <a href="#" onclick="window.open('http://dostup.smspartner.ru/send.php?id=121642', '_blank', 'location=no,height=220,width=740'); return false;">Инструкции по отправке SMS.</a><br>
Для подтверждения оплаты после получения пароля (в ответном смс) его необходимо ввести в форму ниже и отправить в течение 1,5 часов.<br>
<br>

  <?

  $messages = array();
  $messages["ServiceNotFound"] = "Ошибка! Сервис не найден.";
  $messages["PasswordNotSet"]  = "Ошибка! Не указан пароль.";
  $messages["BadPassword"]     = "Ошибка! Неверный пароль или срок действия пароля истёк.";
  $messages["Limit"]           = "Ошибка! Количество ввода пароля превысело установленный предел.";
  
  if (isset($messages[$content])) echo $messages[$content]."<br>\n";
?>

<br>
<form method="post" action="">
  Введите пароль
  <input type="text" name="key" value="">
  <input type="submit" value="OK">
</form>

<?php

} else {
  
  	$plus = 150;
	$comment = "Оплата подключения короткого номера по смс, пароль ".$_POST["key"];
	sql_do("INSERT INTO `payins` ( `id` ,  `userlogin` , `in` , `payindate`, `comment`  ) VALUES ( '',  '$userlogin', '$plus', '20".date("y-m-d")."', '$comment' )");
	sql_do("INSERT INTO `user_balans` VALUES ('', '$userlogin', '$plus', 0, 0, 0, '20".date("y-m-d")."', '$comment')");

	sql_do("UPDATE `registration` SET `payed` = 'YES' WHERE `userlogin` = '$userlogin' OR `id` = '$userlogin'");
	sql_do("UPDATE `users_ivr` SET `payed` = 'YES' WHERE `userlogin` = '$userlogin'");


  echo "<br><br>Оплата подключения короткого номера произведена";
  

require "include/class_email_pay.php";
$qu = "Оплата подключения короткого номера произведена пользователем с логином ".$userlogin.'<br><br>';
$email = new emailer;

				$email->subject = $userlogin." : поступил ПЛАТЕЖ";
				$email->to      = 'nidorofeev@yandex.ru, ilyadok@gmail.com';
				$email->from    = "support@mcall.ru";
				$email->message	= $qu;
				$email->html_email = 1;
				$email->char_set = 'windows-1251';
				$email->send_mail();

	

  
}

?>


</td>
  </tr>
</table> */?>






<?      
			//echo $_SERVER['SCRIPT_NAME'];
}

close_connection();
}
















#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function payshortchange()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function payshortchange($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];
	$payed = $ro['payed'];
	$type = $ro['type'];

?><h2>Оплата изменения логики услуги</h2><?php 


$credit_days = 15;
//$Kvitancita = "print100change.php";
$Kvitancita = "kvitanciya150.rtf";
$priceR = 150  ;
$price = round(($priceR / 27), 2);
$name = 'изменение логики услуги, логин '.$userlogin.$ActionName;
 
 /* echo */ $res_url = 'http://'.$_SERVER['SERVER_NAME'].'/resultshort.php';
/*   echo '<br>';
 */  /* echo */ $suc_url = 'http://'.$_SERVER['SERVER_NAME'].'/successshort.php';
/*   echo '<br>';
 */ /* echo */  $fail = 'http://'.$_SERVER['SERVER_NAME'].'/failshort.php';
?> 


<p>&nbsp;</p>
<table border="0" cellpadding="5" cellspacing="20">
  <tr>
    <td colspan="3"><div align="center"><strong>Оплатить через систему <span style="color:#660000;">WebMoney</span> </strong></div></td>
  </tr>
  <tr>
    <td>С кошелька Z (эквивалент - доллары США):
  <br>
  заплатить ООО «Интех»  
  <?=$price;?> 
  WMZ за  
  <?=$name?>
</p>
<form id=pay name=pay method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">

	<input type="hidden" name="LMI_PAYMENT_AMOUNT" value="<?=$price?>">
	<input type="hidden" name="LMI_PAYMENT_DESC" value="<?=$name?>">
	<input type="hidden" name="LMI_PAYMENT_NO" value="<?=$userlogin?>">
	<input type="hidden" name="LMI_PAYEE_PURSE" value="Z658419101697">
	<input type="hidden" name="LMI_SIM_MODE" value="0">
	<input type="hidden" name="LMI_RESULT_URL" value="<?=$res_url?>">
	<input type="hidden" name="LMI_SUCCESS_URL" value="<?=$suc_url?>">
	<input type="hidden" name="LMI_FAIL_URL" value="<?=$fail?>">
	<?php /* <input type="hidden" name="LMI_PAYMENT_CREDITDAYS" value="<?=$credit_days?>"> */?>
	<input type="hidden" name="my_param" value="<?=$userlogin?>">
	<input type="hidden" name="plus" value="<?=$priceR?>">
	<input type="hidden" name="payfornumber" value="yes">
	<input type="hidden" name="comment" value="Изменение логики услуги (короткий номер)">
</p>
<p>	
	<input type="submit" value="оплатить <?= $price ;?> WMZ">
</p>
</form></td>
    <td valign="top"> <div align="center">или </div></td>
    <td>С кошелька R (эквивалент - российские рубли):
  <br>заплатить ООО «Интех»  
  <?= $priceR ;?> 
  WMR за  
  <?=$name?>
</p>
<form id=pay name=pay method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">

	<input type="hidden" name="LMI_PAYMENT_AMOUNT" value="<?=$priceR?>">
	<input type="hidden" name="LMI_PAYMENT_DESC" value="<?=$name?>">
	<input type="hidden" name="LMI_PAYMENT_NO" value="<?=$userlogin?>">
	<input type="hidden" name="LMI_PAYEE_PURSE" value="R280352171980">
	<input type="hidden" name="LMI_SIM_MODE" value="0">
	<input type="hidden" name="LMI_RESULT_URL" value="<?=$res_url?>">
	<input type="hidden" name="LMI_SUCCESS_URL" value="<?=$suc_url?>">
	<input type="hidden" name="LMI_FAIL_URL" value="<?=$fail?>">
	<?php /* <input type="hidden" name="LMI_PAYMENT_CREDITDAYS" value="<?=$credit_days?>"> */?>
	<input type="hidden" name="my_param" value="<?=$userlogin?>">
	<input type="hidden" name="plus" value="<?=$priceR?>">
	<input type="hidden" name="payfornumber" value="yes">
	<input type="hidden" name="comment" value="Изменение логики услуги (короткий номер)">
</p>
<p>	
	<input type="submit" value="оплатить <?= $priceR ;?> WMR">
</p>
</form></td>
  </tr>
</table>

<table border="0" cellpadding="5" cellspacing="20" width="100%">
  <tr>
    <td colspan="3"><div align="center"><strong>Оплатить через  <span style="color:#660000;">БАНК</span> </strong></div></td>
  </tr>
</table>

<a href="<?php echo $Kvitancita; ?>" target="_blank">Квитанция для оплаты через БАНК</a>
<br>
<br>
<table border="0" cellpadding="5"  width="100%">
  <tr>
    <td><div>Для ускорения обработки Вашего запроса сообщите пожалуйста об оплате через  <span style="color:#660000;">Обратную связь</span> или по телефону. При оплате через банк - пришлите скан платежного документа.</div></td>
  </tr>
</table>

<?      
			//echo $_SERVER['SCRIPT_NAME'];


close_connection();
}














#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function files()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function files($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];
	$payed = $ro['payed'];
	$type = $ro['type'];

	$now_dir="./";
	$now_root = realpath("$now_dir");
	$image_dir="partners_files/";
	$root = realpath("$image_dir");

?><h2>Файлы документов</h2><br>
Доступны для скачивания файлы:<br><br>


<table class="printview">
<thead>
	<tr><th>Файл</th><th>Скачивание</th></tr>
</thead>
<tbody>

        <?
if($_SERVER['SERVER_NAME'] == 'm-call.ru') $http = 'http://mcall.ru/';
else $http = '';
	chdir($root);
	$dir = opendir(".");
	while ( false !== ($file = readdir($dir)) )
	{
		if (($file != ".") && ($file != "..") && ($file != "index.php") && strstr( $file, "_".$userlogin."_")   )
		{
			$login = substr($file,1,4);
?>
  <tr>
    <td><? echo str_replace("_".$userlogin."_","", $file);?></td>
    <td><a href="partners_files/<? echo $file;?>">Скачать</a></td>
  </tr>

        <?
		}
	}
	closedir($dir);
?>
</tbody>
</table>


<?php 
close_connection();
}








#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function docfiles ()  --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function docfiles ($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();

	$now_dir="./";
	$now_root = realpath("$now_dir");
	$image_dir="./partners_files/";
	$root = realpath("$image_dir");

//if($_SERVER['SERVER_NAME'] != 'mcall.ru') echo "<h2>Тут не делать!!! Делать на mcall.ru ! </h2>";
if ($act == "delete"){
 $result = sql_do("DELETE FROM partnerdocs WHERE user_id='$user_id' AND file = '$filename' ");

 echo "<br>";
	echo  "Удален файл ". str_replace("_".$user_id."_","",$filename)    ;
 echo "<br>";
	unlink( $root.'/'.$filename );
}


//echo $b1;



#-----------------------------------------ЗАГРУЗКА-------------------------------------------$$$
if ( $do == 'upload' )
{
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
 
//      application/msword         application/vnd.ms-excel     application/pdf

echo "XXX--- ".$file_ref_type." ---XXX<br><br><br>";

$typeok = (strstr($file_ref_type,'jpg') || strstr($file_ref_type,'jpeg')|| strstr($file_ref_type,'pdf')|| strstr($file_ref_type,'application/vnd.ms-excel') || strstr($file_ref_type,'text/plain') || strstr($file_ref_type,'application/download') || strstr($file_ref_type,'application/msword') )? 1:0;

$image = "";
		if ($file_ref_size > 0 && $file_ref_size < 2000000 && $typeok)
		{
			/* if (preg_match("/^([a-zA-Z0-9._])/i", $file_ref_name) ) */ $file_ref_name = translit ($file_ref_name);
			$image = addSlashes($file_ref_name);
				$root = realpath("$image_dir");
				copy($file_ref_tmp_name, $root."/"."_".$partner."_".$image);
				$fn = "_".$partner."_".$image;

#			 	$result = sql_do("INSERT INTO `partnerdocs`  (`id`, `user_id`, 	`file`,`title`, `created`, 		`status`) VALUES (NULL, '$user_id', '$fn', '$title', CURRENT_TIMESTAMP, '0')");
			 	$result = @mysql_query("INSERT INTO `partnerdocs` 
				(`id`, `user_id`, 	`file`,`title`, `created`, 		`status`) VALUES 
				(NULL, '$user_id', '$fn', '$title', CURRENT_TIMESTAMP, '0')");
		}
		else echo "Недопустимый размер файла $file_ref_size байт!";








}
#--------------------------------------------------------------------------------------------$$$


?>
<br>
<br>
Загрузить<br><font size="-3">(Допустимые типы файлов - jpg , jpeg , txt , pdf , doc , xls , размер файла не более 2 мегабайт!)</font><br><br>


<form action="<?=$_SERVER['SCRIPT_NAME'];?>?mode=docfiles" method="post" name="fi"  ENCTYPE="multipart/form-data">


Название документа <input name="title"  type="text" value=""><br>
Файл <font color="#FFFFFF">____________</font> <input type="file" name="file_ref" style="width:300px;" ><br>
<input name="partner"  type="hidden" value="<?=$user_id?>">
<input name="do"  type="hidden" value="upload">
<br>
<input name="b1" type="submit" value="Загрузить">
</form>

<!--
<table class="printview">
<thead>
	<tr><th>Файл</th><th>Загрузить</th><th>Удалить</th></tr>
</thead>
<tbody>


        <?
//	echo  $user_id."<br>";
	chdir($root);
	$dir = opendir(".");
	while ( false !== ($file = readdir($dir)) )
	{
		if (($file != ".") && ($file != "..")  && ($file != "index.php"))
		{
			$pieces = explode("_", $file);
			$login = $pieces[1];
			if($user_id == $login) { 
?>
				<tr>
				    <td><? echo str_replace("_".$user_id."_","",$file);?></td>
				    <td><a href="../partners_files/<? echo $file;?>">Скачать</a></td>
				    <td><a href="<?=$_SERVER['SCRIPT_NAME'];?>?mode=docfiles&act=delete&filename=<? echo $file;?>">Удалить</a></td>
				</tr> 
<?			}
		}
	}
	closedir($dir);
	
?>
</tbody>
</table>
<br>
<br>
<br>

-->

<table class="printview">
<thead>
	<tr><th>Название</th><th>Создан</th><th>Файл</th><th>Получить</th><th>Просмотр</th><th>Удалить</th><th>Статус</th><th>Пометки</th></tr>
</thead>
<tbody>

<?

 	$result = sql_do("SELECT * FROM partnerdocs WHERE user_id='$user_id'");
	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$user_id = $ro['user_id'];
		$file = $ro['file'];
		$title = $ro['title'];
		$created = $ro['created'];
		$status = $ro['status'];
		$whynot = $ro['whynot'];?>
				<tr>
				    <td><?=$title;?></td>
				    <td><?=substr($created,0,16);?></td>
				    <td><? echo str_replace("_".$user_id."_","",$file);?></td>
				    <td><a href="../partners_files/<? echo $file;?>" target="_blank">Скачать</a></td>


				    <td><? echo !strstr($file, ".jpg") && !strstr($file, ".jpeg") && !strstr($file, ".JPG") && !strstr($file, ".JPEG")? " - ": "<font style=\"text-decoration:underline; font-size:10px; font-weight:bold; cursor:pointer; \" color=blue onmouseover=\"Tip('<img src=../partners_files/".$file." width=400>', SHADOW, true, WIDTH, -450 , FADEOUT, 1000 )\" onmouseout=\"UnTip()\" >Просмотр</font>" ;?></td>


				    <td><?php if ($status < 2) {?><a href="<?=$_SERVER['SCRIPT_NAME'];?>?mode=docfiles&act=delete&filename=<? echo $file;?>">Удалить</a><?php }
					else {?>&nbsp;<?php }?></td>
				    <td><? echo !$status? "На проверке": (  ($status==1)? "Не принят":"Принят");?></td>
				    <td><? echo !$whynot? " - ": "<font style=\"text-decoration:underline; font-size:10px; font-weight:bold; cursor:pointer; \" color=blue onmouseover=\"Tip('".$whynot."', SHADOW, true, WIDTH, -350 , FADEOUT, 1000 )\" onmouseout=\"UnTip()\" >Причина</font>" ;?></td>
				</tr> 
		<?
	}
?>
</tbody>
</table>

<?


//phpinfo();
//phpinfo(32);
close_connection();

}



function translit ($name){ 
$name = str_replace ("а","a",$name);
$name = str_replace ("б","b",$name);
$name = str_replace ("в","v",$name);
$name = str_replace ("г","g",$name);
$name = str_replace ("д","d",$name);
$name = str_replace ("е","e",$name);
$name = str_replace ("ж","g",$name);
$name = str_replace ("з","z",$name);
$name = str_replace ("и","i",$name);
$name = str_replace ("й","i",$name);
$name = str_replace ("к","k",$name);
$name = str_replace ("л","l",$name);
$name = str_replace ("м","m",$name);
$name = str_replace ("н","n",$name);
$name = str_replace ("о","o",$name);
$name = str_replace ("п","p",$name);
$name = str_replace ("р","r",$name);
$name = str_replace ("с","s",$name);
$name = str_replace ("т","t",$name);
$name = str_replace ("у","u",$name);
$name = str_replace ("ф","f",$name);
$name = str_replace ("х","h",$name);
$name = str_replace ("ц","tz",$name);
$name = str_replace ("ч","ch",$name);
$name = str_replace ("ш","sh",$name);
$name = str_replace ("щ","",$name);
$name = str_replace ("ь","",$name);
$name = str_replace ("ъ","",$name);
$name = str_replace ("э","e",$name);
$name = str_replace ("ю","yu",$name);
$name = str_replace ("я","ya",$name);
$name = str_replace ("Ы","Y",$name);
$name = str_replace ("ы","y",$name);
$name = str_replace (" ","",$name);

$name = str_replace ("А","a",$name);
$name = str_replace ("Б","b",$name);
$name = str_replace ("В","v",$name);
$name = str_replace ("Г","g",$name);
$name = str_replace ("Д","d",$name);
$name = str_replace ("Е","e",$name);
$name = str_replace ("Ж","g",$name);
$name = str_replace ("З","z",$name);
$name = str_replace ("И","i",$name);
$name = str_replace ("Й","i",$name);
$name = str_replace ("К","k",$name);
$name = str_replace ("Л","l",$name);
$name = str_replace ("М","m",$name);
$name = str_replace ("Н","n",$name);
$name = str_replace ("О","o",$name);
$name = str_replace ("П","p",$name);
$name = str_replace ("Р","r",$name);
$name = str_replace ("С","s",$name);
$name = str_replace ("Т","t",$name);
$name = str_replace ("У","u",$name);
$name = str_replace ("Ф","f",$name);
$name = str_replace ("Х","h",$name);
$name = str_replace ("Ц","tz",$name);
$name = str_replace ("Ч","ch",$name);
$name = str_replace ("Ш","sh",$name);
$name = str_replace ("Щ","",$name);
$name = str_replace ("Ь","",$name);
$name = str_replace ("Ъ","",$name);
$name = str_replace ("Э","e",$name);
$name = str_replace ("Ю","yu",$name);
$name = str_replace ("Я","ya",$name);
return $name;
}




































?>
  