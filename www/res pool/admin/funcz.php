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
<?php 
if ( strlen($userlogin) == 4) {?>Ваш тел. номер: <b>8-809-505-<?php echo $userlogin;  ?></b><br>
Длительность нетарифицируемых звонков выделена <font color="#FF0000">красным</font> цветом.<?php }?>

<br><br>Внимание! Точкой отсчета при выборе даты является полночь по МСК, таким образом -  день, завершающий выбранный период (дата "по"), в статистику <font style="font-weight:bold; color:#FF0000; text-decoration:underline;">не включается</font>.<br><br>
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
<th>N</th>
<th>Дата</th>
<th>Номер абонента</th>
<th>Номер переадр.</th>
<th>Длит. (сек)</th>     
<?php /* <th>Доход (руб)</th> */?>     
</tr>
<? 
$duration = $row['duration'];
$durationinmins = $row['durationinmins'];
$total_Out = 0;
$total_L_Out = 0;
$total_dur=0;
$total_durMins=0;
$num=1;
 while ($row = mysql_fetch_array($res, MYSQL_BOTH)){
	if(aprox($row['duration'])>0){
		if($row['duration'] < 11) $color = 'color="#ff0000"'; else $color = 'color="#007700"';
 		echo "<tr>";
 		echo "<td>". $num ."</td>";
 		echo "<td>". substr ( $row['date'], 0, 16 ) ."</td>";
#		echo "<td>&nbsp;". substr ( $row['abon_number'], 0, 6 ) ." x x x x </td>";
		echo "<td>&nbsp;". $row['abon_number'] ."</td>";
		echo "<td>".$partner_num."</td>";
		echo '<td><font '.$color.' size="-1">'.$row['duration'].'</font></td>';
 		/* echo "<td>".($out = $row['out'])."</td>"; */
 		echo "</tr>";
		if($row['duration'] > 10 && $row['out']) $total_dur = $total_dur + $row['duration']; 
		$total_Out = $total_Out + $out;
		$durationinmins = $row['durationinmins'];
		$total_durMins = $total_durMins + $durationinmins;
		$num++;
	}
}
echo "</table>";
close_connection(); 
?><br>
 <a name="Vonagragdenie"></a>
 <table style="border: 1px solid #aaaaaa; border-collapse:collapse;  " width="50%">
  <tr>
    <th><div align="center">Суммарный трафик</div></th>
    <?php /* <th> <div align="center">Вознаграждение</div></th> */?>
  </tr>
  <tr>
    <td><div align="center"><? echo $total_dur  ; ?> сек.  &nbsp; (<? echo  round(($total_dur/60),2); /*  $total_durMins; */?> мин. &nbsp;)</div></td>
    <?php /* <td><div align="center"><?=$total_Out?> руб.</div></td> */?>
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
	<font face="Arial" size=2 ><br>Полная статистика по звонкам на ваш номер: <br><BR>
<?php /* Номер дозвона: <b><?php 
if ($redir_num == '9012028013' ) echo '07278'; 
elseif ($redir_num == '9012029438' ) echo '07223'; 
else echo $redir_num; 
?></b><br>
*/

if ( strlen($userlogin) == 4) {?>Ваш тел. номер: <b>8-809-505-<?php echo $userlogin;  ?></b><br>
Длительность нетарифицируемых звонков выделена <font color="#FF0000">красным</font> цветом.<?php }?>

<br><br>Внимание! Точкой отсчета при выборе даты является полночь по МСК, таким образом -  день, завершающий выбранный период (дата "по"), в статистику <font style="font-weight:bold; color:#FF0000; text-decoration:underline;">не включается</font>.
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
<?php /* <th>Доход (руб)</th> */?>     
</tr>
<? 
$duration = $row['duration'];
$durationinmins = $row['durationinmins'];
$total_Out = 0;
$total_L_Out = 0;
$total_dur=0;
$total_durMins=0;

 while ($row = mysql_fetch_array($res, MYSQL_BOTH)){
	if(aprox($row['duration'])>0){
	if($row['duration'] < 11) $color = 'color="#ff0000"'; else $color = 'color="#007700"';
 		echo "<tr>";
 		echo "<td>". substr ( $row['date'], 0, 16 ) ."</td>";
#		echo "<td>&nbsp;". substr ( $row['abon_number'], 0, 6 ) ." x x x x </td>";
		echo "<td>&nbsp;". $row['abon_number'] ."</td>";
		echo "<td>".$partner_num."</td>";
		echo '<td><font '.$color.' size="-1">'.$row['duration'].'</font></td>';
 		/* echo "<td>".($out = $row['out'])."</td>"; */
 		echo "</tr>";
		if($row['duration'] > 10 && $row['out']) $total_dur = $total_dur + $row['duration']; 
		$total_Out = $total_Out + $out;
		$durationinmins = $row['durationinmins'];
		$total_durMins = $total_durMins + $durationinmins;
	}
}
echo "</table>";
close_connection(); 
?><br>
 <a name="Vonagragdenie"></a>
 <table style="border: 1px solid #aaaaaa; border-collapse:collapse;  " width="50%">
  <tr>
    <th><div align="center">Суммарный трафик</div></th>
    <?php /* <th> <div align="center">Вознаграждение</div></th> */?>
  </tr>
  <tr>
    <td><div align="center"><? echo $total_dur  ; ?> сек.  &nbsp; (<? echo  round(($total_dur/60),2); /*  $total_durMins; */?> мин. &nbsp;)</div></td>
    <?php /* <td><div align="center"><?=$total_Out?> руб.</div></td> */?>
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
include('admin809/includes/cab_anketa.php'); 

}





// сохраниние изменённых личных данных
function edited($user_id,$fio,$mail,$icq,$tele_contact,$additional,$vremya1,$vremya2){

open_connection();


	$res = sql_do("UPDATE users_ivr SET fio='$fio', mail='$mail', icq='$icq', tele_concact='$tele_contact', additional='$additional', vremya1='$vremya1', vremya2='$vremya2'  where user_id='$user_id'"); 
	if(!$res) { echo "Не удалось обновить данные."; }
	else  { echo "<br><br>&nbsp;&nbsp;Данные успешно обновлены. <a href='cabinet809.php?mode=data'>Назад</a>"; }




}
// форма изменения пароля
function changing($user_id){
?><form action="cabinet809.php?mode=changed" method=post><br><br>
<table border=0 cellspacing=0 cellpadding=4><tr>
<td>Старый пароль: </td><td><input type="password" name="oldpass"></td></tr>
<tr><td>Введите новый пароль: </td><td><input type="password" name="pass"></td></tr>
<tr><td>Подтвердите: </td><td><input type="password" name="passconf"></td></tr></table>
<p>
    <input type="hidden" name="user_id" value="<?=$user_id?>">
    <input type="submit" value="Сохранить">
    <?
}

// изменение пароля
function changed($user_id,$pass,$oldpass,$passconf){
open_connection();

if($pass!=$passconf){ echo "Не совпадают введённые новые пароли. <a href='cabinet809.php?mode=changepass'>Назад</a>"; die(); } 
$result = sql_do("SELECT pass_hash FROM users_ivr WHERE user_id='$user_id';");
$row = mysql_fetch_array($result, MYSQL_BOTH);

//$pass_old=$row['pass_hash'];
$pass_hash=md5($oldpass);
if($row['pass_hash']!=$pass_hash){ echo "<br>&nbsp;&nbsp;Не совпадают введённые старый и новый пароли. <a href='cabinet809.php?mode=changepass'>Назад</a>"; die(); }

$res = sql_do("UPDATE users_ivr SET pass_hash='".md5($pass)."' where user_id='$user_id'"); 
	if(!$res) { echo "Не удалось обновить данные."; }
	else  { echo "Данные успешно обновлены. Вам потребуется заново авторизоваться!<br><a href='cabinet809.php?mode=changepass'>Ввести логин и новый пароль</a>"; }
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
		$type=$row['type'];
}





 /* echo */  $q_223 = "SELECT * FROM `payouts` WHERE `userlogin` = '$userlogin' ORDER BY period DESC";

$result =  mysql_query($q_223) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q_223." --- <BR>");

//echo " Строк ".mysql_num_rows($result);


?>
<h4>Уважаемый(ая) <?=$fio?>!</h4>
Ваш логин в системе - <?=$userlogin?>.<br>
Оплата производится помесячно.


<h4>Статистика взаиморасчетов</h4>
<table  class="printview">
<thead>
	<tr><th>Месяц</th><th>Дата</th><th>Вознаграждение</th><?php 	if ($type == 'ВебМани') {?><th>Сумма*</th><?php }?><th>Статус</th></tr>
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
/* 		if ($type == 'Физическое лицо') 	echo "<td>".(round($out*0.87,2))."</td>";
		elseif ($type == 'ВебМани') 	echo "<td>".(round($out*0.951,2))."</td>";
 */		if ($type == 'ВебМани') 	echo "<td>".(round($out*0.951,2))."</td>";
		echo "<td>".( $complete == 'YES' ? 'Выполнен' : ($complete == 'ZAK' ? 'Заказан' : 'Начислен') )."</td>";
		echo "</tr>";
		$total_Outwithfrod = $total_Outwithfrod + $outwithfrod;
		$total_Out = $total_Out + $out;

 }
 ?>
 </tbody>
</table>
<?php 	if ($type == 'Физическое лицо') { /* * - С суммы вознаграждения в соответствии с действующим законодательством и условиями заключенного с Вами договора удерживается подоходный налог в размере 13% */ }
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
	}
	$que = "SELECT * FROM `user_status` WHERE `userlogin` = '$userlogin'  AND `start_date` = '$start_date'  ";
	$result1 = sql_do($que);
 	$row1 = mysql_fetch_array($result1, MYSQL_BOTH);
	$status = $row1['status'];
?>
<fieldset  style="border: 1px solid #000099; padding: 7px;"><legend  style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold;">Приветствуем Вас, <font color="#FF0000"><?php echo $fio;?></font>!</legend>
<table  style="border: 0 solid #aaaaaa; border-collapse:collapse;  font-family:Verdana, Arial, Helvetica, sans-serif; ">
  <tr>
    <td width="200" valign="top">
<?
$color = $status == 'Abonent' ? '<font color="#00AA00">' : ($status == 'Light' ? '<font color="#0000FF">' : '<font color="#FF0000">');

echo '<b style="font-size:10px; ">Тарифный план:</b><br><font color="#00AA00">'.$type.'</font>';
echo "<br><br>";
echo '<b style="font-size:10px; ">Текущий статус:</b><br>'.$color.$status."</font>";


/* if ($userlogin == '7420') {
	echo "<br><br>";
	echo '<b style="font-size:10px; ">Финансовый результат за</b>'.$color.' ДЕКАБРЬ 2008:<br>427 руб. 90 коп.</font>';
}
 */

close_connection();
?>
</td>
    <td>&nbsp;&nbsp;&nbsp;<b style="font-size:10px; "></b></td>
    <td>
	  <div align="justify"><font color="#777777"> <font size="-1">Данные по звонкам, представленные на странице, являются предварительными и не могут служить основанием для произведения финансовых расчетов.<br>
	  Начисление средств на счет Вашего аккаунта производится исходя из общего суммарного оплаченного абонентами времени соединения, по <font color="#990000">данным, полученным от операторов</font>.</font> <br>
<?php 
if ( strlen($userlogin) == 4) {?>
      Финансовые результаты  выкладываются после получения  полных данных от операторов связи. <br>
<?php }?>
      </div></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><font color="#888888" size="-2">Внимание! 915107xxxx и 901202xxxx- <font color="#FF0000">тестовые номера</font>, зачисление средств по ним не производится.<br>
        В настоящее время в связи с техническими работами на серверах статистика может отображаться с задержками до 2 суток.</font></td>
  </tr>
  <tr>
    <td colspan="3" valign="top" bgcolor="#aa0000" style="padding:4px; margin: 3px; "><font color="#ffffff" size="-1">Внимание! Звонки длительностью менее 11 секунд НЕ ТАРИФИЦИРУЮТСЯ.</font></td>
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
	echo ".<br><br>Начисления в столбце \"Фин. прогноз\" произведены условно, окончательный расчет производится после получения подтвержденных данных от операторов связи (столбец \"Фин. результат\"<font color='dd0000'>*</font>).<br><br>
Финансовый прогноз дается исходя из вознаграждения (тарифа) за звонок: с мобильного оператора в размере 100%,  с фиксированного оператора в размере 75% (до февраля 2009 -  80%) для учета прогнозной среднестатистической собираемости средств.<br><br>";
?>
Напоминаем, что при суммарном трафике менее 50 мин. (3000сек.) в месяц вознаграждение не выплачивается, а баланс за месяц обнуляется. В этом случае в таблице в строке месячного результата столбец "Комментарий" содержит статус "Abonent". Если же столбец "Комментарий" содержит статус "Active", это означает, что Ваш месячный трафик превысил порог 500 мин., и звонки оплачиваются по повышенному тарифу. В прочих случаях присваивается статус "Light".<br>
<br>

<font color='dd0000'>*</font><font size="-2" color='666666'> По звонкам с фиксированых операторов  вознаграждение вычисляется как тариф домноженный на процент фактически собранных средств. Например, в декабре 2008 года по фиксированым операторам связи собрано 88,44% оплаты за звонки.</font><br><br>
<font size="-2" color='dd0000' style="font-weight:bold; ">Уважаемый Партнер! Финансовые результаты за июль будут доступны для ознакомления до 20 октября. Приносим извинения за задержку.</font>
<?
// plus minus balans  payout date comment
$T_plus = 0;
$T_minus = 0;
$T_payout = 0;
$T_result_out = 0;
?>
<?php /*  */?>
<h4>Статистика взаиморасчетов</h4>

<?php $adm = strstr($_SERVER['SCRIPT_NAME'], "adm_cabinet809.php")? 1 : 0   ; ?>

<table   class="printview">
<thead>
	<tr><th>Дата</th><th>Фин. прогноз</th><th>Фин. результат</th><th>Расход</th><th>Выплаты</th><th>Комментарий</th><?php echo $adm? "<th>sum</th>" : "" ; ?></tr>
</thead>
<tbody>
<?
$month_sum_plus = 0;
$month_sum_result_out = 0;

 	$result = sql_do("SELECT * FROM `user_balans` WHERE `userlogin` = '$userlogin' AND `date` >= '$activationdate'  ORDER BY `date` ASC ");
$i = 0;
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$dateMon[$i]=substr($ro['date'], 0 ,7);
		$date=substr($ro['date'], 0 ,10);
		$plus=$ro['plus'];
		$minus = $ro['minus'];
		$payout = $ro['payout'];
		$comment = $ro['comment'];
		$result_out = $ro['result_out'];
		$operator = $ro['operator'];

				if ($operator != '' && $operator == 0 && $comment != 'Оплата подключения номера' && !strstr($comment,'Зачисление средств на счет Партнера'))   
				{
					if ($ro['date'] < '2009-02-01 00:00:00') 	$plus = $plus * 0.8    	;   
					else 						$plus = $plus * 0.75    ;   
				}
				
				
#-----------------------------------------------------Полоса за месяц------------------------------------------------------------#
				if ($i>1 && $dateMon[$i] != $dateMon[$i-1]){
					$PartnerMonthStatus=trim(   str_replace ("звонок, статус","",$commentLast)   );
					if ($PartnerMonthStatus == 'Abonent'){
						$T_plus = $T_plus - $month_sum_plus;
						$T_result_out = $T_result_out - $month_sum_result_out;
						$month_sum_plus = 0;
						$month_sum_result_out = 0;
					}

					echo "<tr>";
					echo "<th>Суммарно до ".$dateMon[$i]."-01</th>";
					echo "<th>".round($T_plus,2)."</th>";
					echo "<th>".$T_result_out."</th>";
					echo "<th>".$T_minus."</th>";
					echo "<th>".$T_payout."</th>";
					echo "<th>".$PartnerMonthStatus."</th>";
					echo "</tr>";
					$month_sum_plus = 0;
					$month_sum_result_out = 0;
				}
#----------------------------------------------------------------------------------------------------------------------------#

		if ( $plus || $minus || $payout || $result_out || strstr($comment, "ФРОД") ){
			if ($plus != $result_out) $color = '<font color="#660000">'; else $color = '<font color="#000000">';
			echo "<tr>";
			echo "<td>".$date."</td>";
			echo "<td>".round($plus,2)."</td>";
			echo "<td>".$color.$result_out."</font></td>";
			echo "<td>".$minus."</td>";
			echo "<td>".$payout."</td>";
			echo "<td>".$comment."</td>";
			echo $adm? "<td>".($T_result_out + $result_out - $minus - $T_minus - $T_payout - $payout)."</td>" : "" ;
			echo "</tr>";
			if (!strstr($comment, "абонентская плата")) $commentLast = $comment;
			elseif( strstr($comment, "Abonent")  )  $commentLast = "Abonent";
		}

		$T_plus = $T_plus + $plus;
		$T_minus = $T_minus + $minus;
		$T_payout = $T_payout + $payout;
		$T_result_out = $T_result_out + $result_out;

		$month_sum_plus = $month_sum_plus + $plus;
		$month_sum_result_out = $month_sum_result_out + $result_out;

		$i++;
	}
 ?>
 </tbody>
  <tfoot>
<tr>
  <th>&nbsp;</th>
  <th><div align="right"><? echo round($T_plus,2); ?> р.</div></th>
  <th><div align="right"><? echo $T_result_out; ?> p.</div></th>
  <th><div align="right"><? echo $T_minus; ?> p.</div></th>
  <th><div align="right"><? echo $T_payout; ?> p.</div></th>
  <th>&nbsp;</th>
</tr>
</tfoot>

</table>
 <?

echo '<br>Прогнозный баланс: <strong><font color="#0000aa">'.$balancePrognoz = $T_plus - $T_minus - $T_payout;
echo "</font></strong> рублей";
echo '<br>Фактический баланс (с учетом данных от операторов по <b>последнему закрытому отчетному периоду</b>): <strong><font color="#aa0000">'.$balanceReal = round($T_result_out - $T_minus - $T_payout, 2);
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
echo '<br>Доступно для вывода средств: <strong><font color="#00aa00">'.$total_Out;
echo "</font></strong> рублей";
#       if ($balanceReal && !$total_Out) echo " (Физически средства от операторов еще не поступили)";
if ($total_Out) echo '<br> Вы можете вывести доступные средства в разделе "<a href="cabinet809.php?mode=get_money">Вывод Средств</a><br><br>';

close_connection();
}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function Docs()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function Docs($user_id){
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
    <td><?=$ro['agreement']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
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


echo "<br>Вывод средств: ".($docs? '&nbsp;&nbsp;&nbsp;&nbsp;<font color="#00bb00">Вы можете выводить средства</font>' : '&nbsp;&nbsp;&nbsp;&nbsp;<font color="#BB0000">Вы НЕ можете выводить средства.</font><br><br>Необходимо предоставить недостающие документы.');
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
	?>Оплата производится в рублях, путем безналичного перечисления, на основании подписанных актов и выставленных счетов по каждому отчетному периоду.<? 
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
#--------------------------------------------    function pay809()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function pay809($user_id){
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
	 echo "Вы уже оплатили подключение";
}
else {

?><h2>Оплата подключения номера</h2><?php 

if ( !isset($OneRuble) && isAction() )
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
elseif ( isAction() ) {
	$priceR =  9300   ; 
	$ActionName = " - Акция Подключись за 1 рубль!";
	$Kvitancita = "print9300.php";

}

if ( !isAction() ) {
	$priceR =  9300   ; 
	$ActionName = "";
	$Kvitancita = "print9300.php";

}



$credit_days = 15;

#$priceR = /* 9300 */  7500  ;
$price = round(($priceR / 30), 2);
$name = 'подключение номера 8-809-ххххххх, логин '.$userlogin.$ActionName;
 
 /* echo */ $res_url = 'http://'.$_SERVER['SERVER_NAME'].'/result.php';
/*   echo '<br>';
 */  /* echo */ $suc_url = 'http://'.$_SERVER['SERVER_NAME'].'/success.php';
/*   echo '<br>';
 */ /* echo */  $fail = 'http://'.$_SERVER['SERVER_NAME'].'/fail.php';
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
	<input type="hidden" name="comment" value="Оплата подключения номера">
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
	<input type="hidden" name="comment" value="Оплата подключения номера">
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
<?      
			//echo $_SERVER['SCRIPT_NAME'];
}

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
	/* echo */ $q = "INSERT INTO `tickets` (`id` , `userlogin` , `date` , `ticket` , `header` , `question` , `answer` ) VALUES (NULL , '$userlogin', '".date("20y-m-d")." ".date("H:i:s")."', '".time()."', '$header', '$question', '')";
	$result =  mysql_query($q) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q." --- <BR>");
}
elseif ( isset($updatequest) && $updatequest != '')  {
		/* echo */ $q = "UPDATE `tickets`  SET `question` = '$question' WHERE `ticket` = '$ticket' AND `userlogin` = '$userlogin' ";
		$result =  mysql_query($q) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q." --- <BR>");
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
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px; margin:9px;  " class="sortable">
<thead>
	<tr><th>Дата</th><th>Тема</th><th>Вопрос</th><th>Ответ</th><th>ticket</th></tr>
</thead>
<tbody>

<?
$q = " SELECT * FROM `tickets` WHERE `userlogin` =  '$userlogin' ORDER BY `date` DESC";
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
close_connection();
}








#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function pay809change()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function pay809change($user_id){
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
$Kvitancita = "print1200.php";
$priceR = 1200  ;
$price = round(($priceR / 30), 2);
$name = 'изменение логики услуги, логин '.$userlogin.$ActionName;
 
 /* echo */ $res_url = 'http://'.$_SERVER['SERVER_NAME'].'/result.php';
/*   echo '<br>';
 */  /* echo */ $suc_url = 'http://'.$_SERVER['SERVER_NAME'].'/success.php';
/*   echo '<br>';
 */ /* echo */  $fail = 'http://'.$_SERVER['SERVER_NAME'].'/fail.php';
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
	<input type="hidden" name="comment" value="Изменение логики услуги">
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
	<input type="hidden" name="comment" value="Изменение логики услуги">
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
#--------------------------------------------    function show_declare()      ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function show_declare() {
open_connection();
	$id=USER_ID;
	$start_date = make_date_c('from');
 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
		$type = $ro['type'];
		$fio = $ro['fio'];
	}
	$que = "SELECT * FROM `user_status` WHERE `userlogin` = '$userlogin'  AND `start_date` = '$start_date'  ";
	$result1 = sql_do($que);
 	$row1 = mysql_fetch_array($result1, MYSQL_BOTH);
	$status = $row1['status'];
?>
<fieldset  style="border: 1px solid #000099; padding: 7px;"><legend  style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold;">Приветствуем Вас, <font color="#FF0000"><?php echo $fio;?></font>!</legend>
<table  style="border: 0 solid #aaaaaa; border-collapse:collapse;  font-family:Verdana, Arial, Helvetica, sans-serif; ">
  <tr>
    <td width="200" valign="top">
<?
/* $color = $status == 'Abonent' ? '<font color="#00AA00">' : ($status == 'Light' ? '<font color="#0000FF">' : '<font color="#FF0000">');

echo '<b style="font-size:10px; ">Тарифный план:</b><br><font color="#00AA00">'.$type.'</font>';
echo "<br><br>";
echo '<b style="font-size:10px; ">Текущий статус:</b><br>'.$color.$status."</font>";
 */

/* if ($userlogin == '7420') {
	echo "<br><br>";
	echo '<b style="font-size:10px; ">Финансовый результат за</b>'.$color.' ДЕКАБРЬ 2008:<br>427 руб. 90 коп.</font>';
}
 */

close_connection();
?>
</td>
    <td>
	  <div align="justify"><font color="#777777">Уважаемый Партнер! Доводим до  Вашего сведения следующую информацию.<br>
<br>
23.09 компания "Интех" прекратила сотрудничество с владельцем номерной емкости 8-809-505, компанией "Аудиотеле" по причинам организационно-правового характера. По условиям договоренности между компаниями, все добросовестные партнеры, обслуживавшиеся по номерам 8-809, имеют возможность, начиная с 28.09, перезаключить договор на выделенные им ранее номера с компанией "Аудиотеле" (стоимость 3000 рублей без НДС).
 Компания "Интех" со своей стороны обязуется исполнить  обязательства по ранее заключенным договорам. Приносим вам наши извинения за доставленные неудобства.
<br>
<br>

<?php if ( $userlogin == '6805' || $userlogin == '6007' || $userlogin == '6131' || $userlogin == '4077' || $userlogin == '1970' || $userlogin == '6552' || $userlogin == '3313' || $userlogin == '6629' || $userlogin == '4295' ){ ?>
На сегодняшний день мы не получили средств за июль, август и сентябрь от ЗАО "Аудиотеле", и в соответствии с п.4.14. Договора оказания услуг по коду "809" не производим выплаты за соответствующие отчетные периоды. <br><br>
<?php }?>



Контакты ЗАО "Аудиотеле":<br>
Наумов Владимир<br>
Тел.: +7(495) 505-97-30<br>
8(800) 505-97-30<br>
123456, Россия, Москва<br>
1-й Волоколамский пр-т, д.10, стр.1<br>
Электронная почта: naumov@audiotele.ru
</div></td>
    <td width="200" valign="top">&nbsp;&nbsp;&nbsp;</td>

  </tr>
  
</table>


</fieldset>
<br>
<?
}










?>
  