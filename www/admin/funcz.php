<?

/*------------------------------------------------------*/
/*------------------------------------------------------*/
/*-------- ����������������  C���������  ---------------*/
/*------------------------------------------------------*/
/*------------------------------------------------------*/

#----------------------------------------------������� ���������� �� �������------------------------------------------------------
function showstats_cur($datefrom,$dateto) {
//echo 'c ' . $datefrom . ' �� ' .$dateto .'<br>' ;
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
	<font face="Arial" size=2 ><br>����������  �� ������� �� ������� �����<br><BR>
����� �������: <b><?php 
if 		($redir_num == '9012028013' ) 	echo '07278'; 
elseif 	($redir_num == '9012029438' ) 	echo '07223'; 
else 									echo $redir_num; 
?></b><br>

��� ���������� �����: <b><?php echo $code;  ?></b><br><br>��������! ������ ������� ��� ������ ���� �������� ������� �� ���, ����� ������� -  ����, ����������� ��������� ������ (���� "��"), � ���������� <font style="font-weight:bold; color:#FF0000; text-decoration:underline;">�� ����������</font>.<br><br>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="stats">
<font style="font-weight:bold; color:#FF0000;">������:</font><br>� <? makeform_from_date("datefrom",$datefrom, 'cur'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�� 
	<? makeform_from_date("dateto",$dateto, 'cur'); ?> &nbsp;&nbsp;&nbsp;<input type=submit value="������ ����������">
</form>
<?
open_connection();
$res = sql_do("SELECT * FROM totaldata where userlogin='$userlogin' and date>='$datefrom' and date<='$dateto' order by date desc");
 $count = mysql_num_rows($res); 
?>
<table  class="printview">
<tr>
<th>����</th>
<th>����� ��������</th>
<th>����� �������.</th>
<th>����. (���)</th>     
<th>����� (���)</th>     
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
    <th><div align="center">������������</div></th>
    <th> <div align="center">��������������</div></th>
  </tr>
  <tr>
    <td><div align="center"><? echo $total_dur  ; ?> ���. &nbsp;</div></td>
    <td><div align="center"><?=$total_Out?> ���.</div></td>
    </tr>
</table>
<?
}







#----------------------------------------------������ ���������� �� �������------------------------------------------------------
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
#--------------���������, �� ��� �� ������ ���� �  ����� �������, ���� �� - �� ����� ����, � �����  ���������� �����--#######
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
	<font face="Arial" size=2 ><br>������ ���������� �� ������� �� ��� �������� �����: <br><BR>
����� �������: <b><?php 
if ($redir_num == '9012028013' ) echo '07278'; 
elseif ($redir_num == '9012029438' ) echo '07223'; 
else echo $redir_num; 
?></b><br>

��� ���������� �����: <b><?php echo ($code=='code'? "��� �� �������" : $code);  ?></b><br><?php if(strlen($userlogin)<6) echo '<a href="marshr.php" target="_blank">������� ��������� �������������</a>'; ?><br>��������! ������ ������� ��� ������ ���� �������� ������� �� ���, ����� ������� -  ����, ����������� ��������� ������ (���� "��"), � ���������� <font style="font-weight:bold; color:#FF0000; text-decoration:underline;">�� ����������</font>.
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="stats">
������:<br>� <? makeform_from_date("datefrom",$datefrom); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�� 
	<? makeform_from_date("dateto",$dateto); ?> &nbsp;&nbsp;&nbsp;<input type=submit value="���������">
</form>
<?
open_connection();

if ($deletetime > $datefrom) $datefrom = $deletetime;

$res = sql_do("SELECT * FROM totaldata where userlogin='$userlogin' and date>='$datefrom' and date<='$dateto' order by date desc");
 $count = mysql_num_rows($res); 
?>
<table  class="printview">
<tr>
<th>����</th>
<th>����� ��������</th>
<th>����� �������.</th>
<th>����. (���)</th>     
<th>����� (���)</th>     
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
    <th>������������</th>
    <th> ��������������</th>
  </tr>
  <tr>
    <td><div align="center"><? echo $total_dur  ; ?> ���. </div></td>
    <td><div align="center"><?=$total_Out?> ���.</div></td>
    </tr>
</table>

<?
}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function showdata()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
// ������ ������
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





// ���������� ��������� ������ ������
function edited($user_id,$fio,$mail,$icq,$tele_contact,$additional,$vremya1,$vremya2){

open_connection();


	$res = sql_do("UPDATE users_ivr SET fio='$fio', mail='$mail', icq='$icq', tele_concact='$tele_contact', additional='$additional', vremya1='$vremya1', vremya2='$vremya2'  where user_id='$user_id'"); 
	if(!$res) { echo "�� ������� �������� ������."; }
	else  { echo "<br><br>&nbsp;&nbsp;������ ������� ���������. <a href='cabinet.php?mode=data'>�����</a>"; }




}
// ����� ��������� ������
function changing($user_id){
?><form action="cabinet.php?mode=changed" method=post><br><br>
<table border=0 cellspacing=0 cellpadding=4><tr><td>
������ ������: </td><td>
<input type=password name=oldpass></td></tr>
<tr><td>
������� ����� ������: </td><td>
<input type=password name=pass></td></tr>
<tr><td>
�����������: </td><td>
<input type=password name=passconf></td></tr></table>
<p>
    <input type=hidden name="user_id" value="<?=$user_id?>">
    <input type=submit value="���������">
    <?
}

// ��������� ������
function changed($user_id,$pass,$oldpass,$passconf){
open_connection();

if($pass!=$passconf){ echo "�� ��������� �������� ����� ������. <a href='cabinet.php?mode=changepass'>�����</a>"; die(); } 
$result = sql_do("SELECT pass_hash FROM users_ivr WHERE user_id='$user_id';");
$row = mysql_fetch_array($result, MYSQL_BOTH);

$pass_old=$row['pass_hash'];
$pass_hash=md5($oldpass);
if($row['pass_hash']!=$pass_hash){ echo "<br>&nbsp;&nbsp;�� ��������� �������� ������ � ����� ������. <a href='cabinet.php?mode=changepass'>�����</a>"; die(); }

$res = sql_do("UPDATE users_ivr SET pass_hash='".md5($pass)."' where user_id='$user_id'"); 
	if(!$res) { echo "�� ������� �������� ������."; }
	else  { 		
		echo "������ ������� ���������. <a href='cabinet.php?mode=changepass'>�����</a>"; 
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

	$sv = $row['icq'];	//�� = ��������� ������ ������ ������� ��� �������� ������ ��������
	$kd = $row['mail'];	//�� = ���������� ���� � ����� ������, �������� ������� �������
	$pr = ( $row['enddate'] - $row['startdate'] ) / (3600*24);	//�� = ������ ������� (���-�� ����)  ������      startdate   enddate
	$user_code = $row['code'];
	$redir_num = $row['redir_num'];
	$p = ($sv/$kd) /* *$pr */ ;		//   ��� � � ������

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
// ������ ������
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

//echo " ����� ".mysql_num_rows($result);


?>
<h4>���������(��) <?=$fio?>!</h4>
��� ����� � ������� - <?=$userlogin?>.<br>
������ ������������ ���������.


<h4>���������� ��������������</h4>
<table  class="printview">
<thead>
	<tr><th>�����</th><th>����</th><th>��������������</th><?php 	if ($type != '����������� ����') {?><th>�����*</th><?php } else {?><th>���</th><?php }?><th>������</th></tr>
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
		if ($type == '���������� ����') 	echo "<td>".(round($out*0.87,2))."</td>";
		elseif ($type == '�������') 	echo "<td>".(round($out*0.951,2))."</td>";
		else echo '<td><a href="actsp.php?period='.$year.'-'.$month.'&userlogin='.$userlogin.'&out='.$out.'"  target="_blank">����������� ��� �����-������� ��������� ����� �� '.$year.'-'.$month.'</a></td>';
		echo "<td>".( $complete == 'YES' ? '��������' : ($complete == 'ZAK' ? '�������' : '��������') )."</td>";
		echo "</tr>";
		$total_Outwithfrod = $total_Outwithfrod + $outwithfrod;
		$total_Out = $total_Out + $out;

 }
 ?>
 </tbody>
</table>
<?php 	if ($type == '���������� ����') {?>
* - � ����� �������������� � ������������ � ����������� ����������������� � ��������� ������������ � ���� �������� ������������ ���������� ����� � ������� 13%
 <? }
elseif ($type == '�������') {?>
* - � ������������ � ������� 3.12 <a href="http://mcall.ru/connect.php">��������� ������ �� �������������� ����� � ��������
</a> (��� ������� ����� 01.09.2008)<? }
 
 $nowperiod = NowPeriod($period);
//close_connection();
//echo "SELECT * FROM totaldata where userlogin='$userlogin' and date>='$nowperiod'  order by date desc";
$res = sql_do("SELECT * FROM totaldata where userlogin='$userlogin' and date>='$nowperiod'  order by date desc");
 $count = mysql_num_rows($res); 
?>
<!--table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:12px;  ">
<tr>
<th>����</th>
<th>����� ��������</th>
<th>����� �������.</th>
<th>����. (���)</th>     
<th>�������������� (���)</th>     
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

<p>���������� ���, ��� ��������� ����� �� ����� 500 ������ � �����, � ��������� ������ � �����������  �� ��������� �������.
    <?
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function NowPeriod()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
//  �������������  ������ �� ����� ������  (��������� �� ���� ������ �����)
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
<fieldset  style="border: 1px solid #000099;  padding: 7px; "><legend  style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold;">������������ ���, <font color="#FF0000"><?php echo $fio;?></font>!</legend>
<table  style="border: 0 solid #aaaaaa; border-collapse:collapse;  font-family:Verdana, Arial, Helvetica, sans-serif; ">
  <tr>
    <td width="200" valign="top">
<?
$color = $status == 'Abonent' ? '<font color="#00AA00">' : ($status == 'Light' ? '<font color="#0000FF">' : '<font color="#FF0000">');

echo '<b style="font-size:10px; ">�������� ����:</b><br><font color="#00AA00">'.$type.'</font>';
echo "<br><br>";
echo '<b style="font-size:10px; ">������� ������:</b><br>'.$color.$status."</font>";
close_connection();
?>
</td>
    <td><font color="#990000"><b style="font-size:10px; "><?php 
	
	if (!$payed && $activationdate > '2011-06-05' && strlen($userlogin) <= 6 ) echo '<b style="font-size:15px; ">�������� �����</b></font>'; 
	elseif ($payed && $activationdate > '2011-06-05' && strlen($userlogin) <= 6 ) echo '<b style="font-size:15px; ">�����-�������������� (�������) �����</b></font>'; 
	elseif (strlen($userlogin) > 6 ) echo '<b style="font-size:15px; ">����� �� �������</b></font>'; 
	
	?></b></font></td>
    <td>
	  <div align="justify"><font color="#777777"> <font size="-1"> <?php 
	  if (!$payed && $activationdate > '2011-06-05'  && strlen($userlogin) <= 6 ) echo '<b style="font-size:13px; ">� �������� ������ �������� �� ������ �� �����������. </b> �������� ������� �� ����� ��������� �������� �������������� � ������� �������.  ��� ������� ���������������, �� ����� ���������� ������. <br>�������� ����������� ����������� ������ �� 2 ������ - �� ��� ����� ���������� �������� ����������� ������ � ������� � ������� �����. � ������ �������� ����������� ����� ����� ��������. �������� �������� - <font color="#990000">������ �� ������ � �������� ������ �� �����������</font>, ����� ������������ ��� �������� �������� �������!</font>'; 
	  elseif ($payed || $activationdate < '2011-06-05'  && strlen($userlogin) <= 6 ) {
	  		echo '�������� �� ������� ����������� � ������������ � ����� ������� ��������. ��� ������� ���������������, �� ����� ���������� ������.  ������� ������� �� ���� ������ �������� ������������ � ����� ��������� �������  � ������ ������� � ������ �� ������ ���������� ����������� ���������� ������� ���������� � ��������� ������������� �� <font color="#990000">������, ���������� �� ����������</font>.'; 
#			echo '<br><br><div style="border:1px solid red; padding: 5px; width:400px; ">��������� ��������! ������� �� 11.2011 ������������� � ����� �� ������ ���������� ������ �� ���������� �����. ��������� �������� 10-15 ����. �������� ��������� �� ������������ ����������.</div>'; 
include_once('html_gall/obyjavlenie.php'); 
		}
	  elseif ( strlen($userlogin) > 5 ) echo '��� ����, ����� ������ ������, ���������� �������� ����������� ��������� ������.<br>�� ������ ���������� ����� ��������� � �������� ������. ��� ����� �������� �� ��������� �������� ����� ��������� "����� ���������� �������� �����". ��� ����� ����������� �������� ����������� ������ �� 2 ������ - �� ��� ����� ���������� �������� ����������� ������ � ������� � ������� �����. � ������ �������� ����������� ����� ����� ��������. �������� �������� - <font color="#990000">������ �� ������ � �������� ������ �� �����������</font>, ����� ������������ ��� �������� �������� �������!';
	  ?> </font></font><br><br>
	  

<p><a  href="javascript:inver('vajno')" >�������, ����� ��������� ����������. �����!</a></p>
<div id="vajno" style="display:none;" ><font color="#0000aa">��������� �������! ���������� ��� � ���, ��� � ������������  � ������ ������������ ��������� ������� ����� ��� �����<br>

<font color="#aa0000">���������� ������� � ������� �������-���������� ��������������� ����� ����������. ��������� ���������� ����� ������ � ������� ������� �� �������� ������� �� ����� www.mts.ru ��� ����������� � ���������� ����� �� �������� 8 800 333 0890 (0890 ��� ��������� ���)�</font> <br>
������ ���� ��������� � �����<font color="#ff0000">*</font> �� ��� web-�������, ��� ������������� ���� �������� ������. <br><br>
������ ��� � ������������ �������  �������� ����� �������� ����� � ���� ����� web-��������, �� ������� ������������� �������� �����, ��� �������� �������� ����� ����������. (���� ������� ����� �������� �� �������, �������� ������ �� ����.)
� ������ ������������� ������ ����� �� ���������� ���������, ��� ����������� ������������ �������� ��� ���� ����� ����� ����������� �������<?php if (strlen($userlogin)<=6)  	 echo " ������ �� ����������  ��������"; ?>.
</font>
<br><br><font color="#ff0000">*</font><font size="-2">��� �� ��������, ��� ����� ��������  �������� ��������� ������ ���� ������, ��� ����� �� �������� �� ������� �������� ��� ������������ ������. �� ����������� ������ ��������������� ��������� ������ � ������ �� ��� �����, ����������� ���� � ��������� ����� ������ �������. ���������� ���� ���������, ��� ������ ���������� ��������� ������ � ���������, ������������ �������� ���.</font>
</div>



	  <br>
	    </div></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><font color="#888888" size="-2">��������! 915107xxxx, 911906xxxx � 812647xxxx- <font color="#FF0000">�������� ������</font>, ���������� ������� �� ��� �� ������������.<br>
        � ��������� ����� � ����� � ������������ �������� �� �������� ���������� ����� ������������ � ���������� �� 2 �����.</font></td>
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
	echo "<br>������ �� �������� ";
	echo $userlogin = $ro1['userlogin'];
	$activationdate = $ro1['activationdate'];
	echo ".<br>����������  ����������� �������, ������������� ������ ������������ ����� ��������� �������������� ������ �� ���������� �����.<br>";


// plus minus balans  payout date comment
$T_plus = 0;
$T_minus = 0;
$T_payout = 0;
?>
<?php /*  */?>
<h4>���������� ��������������</h4>
<table   class="printview">
<thead>
	<tr><th>����</th><th>������</th><th>������</th><th>�������</th><th>�����������</th><th>������</th></tr>
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
  <th><div align="right"><? echo $T_plus; ?> �.</div></th>
  <th><div align="right"><? echo $T_minus; ?> p.</div></th>
  <th><div align="right"><? echo $T_payout; ?> p.</div></th>
  <th>&nbsp;</th>
  <th><?php echo round (($balance = $T_plus - $T_minus - $T_payout), 2) ;?></th>
</tr>
</tfoot>

</table>
 <?

echo '<br>��������������� ������: <strong><font color="#aa0000">' . (round (($balance = $T_plus - $T_minus - $T_payout), 2));
echo "</font></strong> ������";

//    ��������� ������
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
echo '<br>��������� ������: <strong><font color="#00aa00">'.$total_Out;
echo "</font></strong> ������";
if ($total_Out) echo '<br> �� ������ ������� ��������� �������� � ������� "<a href="cabinet.php?mode=get_money">����� �������</a>"';

close_connection();
}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function Docs()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function Docs($user_id){
?>
	<br>
�� ��� ������� ���������, �� ��� ��� ��� �������� ��� �����������������? - <a href="faq.php#q20" target="_blank">��������� �������	</a><br>
<?
open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	echo "<br>���������, ��������������� �� �������� ";
	echo $userlogin = $ro['userlogin'];
	echo ".<br>��������! �� �������������� ���� ������������� ���� ���������� ����� ������� � ������ �������� ����� ������������.<br>";

	$document=$ro['document'];
	$requisition = $ro['requisition'];
	$agreement = $ro['agreement'];
	$inn = $ro['inn'];
	$type = $ro['type'];
#--------------------------------------------------------------------
	if ($type == '���������� ����') { ?>
	<br><br>
	


<table class="printview">
  <tr>
    <th>�������</th>
    <th>��������� ���������</th>
    <th>�������</th>
    <th>����� ��� (���� ��� ����)</th>
  </tr>
  <tr>
    <td><?=$ro['document']?'<font color="#00bb00">������������</font>':'<font color="#BB0000">��������������</font>'?></td>
    <td><?=$ro['requisition']?'<font color="#00bb00">������������</font>':'<font color="#BB0000">��������������</font>'?></td>
    <td><?=$ro['agreement']?'<font color="#00bb00">������������</font>':'<font color="#BB0000">��������������</font>'?></td>
    <td><?=$ro['inn']?'<font color="#00bb00">������������</font>':'<font color="#BB0000">��������������</font>'?></td>
  </tr>
</table>
<?
		if ($document && $requisition && $agreement && $inn) $docs = true; else  $docs = false;
}
#--------------------------------------------------------------------

	elseif ($type == '�������') { ?>
	<br><br>
<table class="printview">
  <tr>
    <th>�������</th>
    <th>�������� WM �� ���� ����������</th>
    <th>�������</th>
  </tr>
  <tr>
    <td><?=$ro['document']?'<font color="#00bb00">������������</font>':'<font color="#BB0000">��������������</font>'?></td>
    <td><?=$ro['requisition']?'<font color="#00bb00">������������</font>':'<font color="#BB0000">��������������</font>'?></td>
    <td><?=$ro['agreement']?'<font color="#00bb00">�� ���������</font>':'<font color="#00bb00">�� ���������</font>'?></td>
  </tr>
</table>
<?
		if ($document && $requisition && $agreement) $docs = true; else  $docs = false;
}
#--------------------------------------------------------------------


	else { // �����   ?>
	<br><br>
<table class="printview">
  <tr>
    <th>������������� � �����������</th>
    <th>���������� ���������</th>
    <th>�������</th>
  </tr>
  <tr>
    <td><?=$ro['document']?'<font color="#00bb00">������������</font>':'<font color="#BB0000">��������������</font>'?></td>
    <td><?=$ro['requisition']?'<font color="#00bb00">������������</font>':'<font color="#BB0000">��������������</font>'?></td>
    <td><?=$ro['agreement']?'<font color="#00bb00">������������</font>':'<font color="#BB0000">��������������</font>'?></td>
  </tr>
</table>
<?
		if ($document && $requisition && $agreement) $docs = true; else  $docs = false;
}
#--------------------------------------------------------------------


echo "<br>����� �������: ".($docs? '&nbsp;&nbsp;&nbsp;&nbsp;<font color="#00bb00">�� ������ �������� ��������</font>' : '&nbsp;&nbsp;&nbsp;&nbsp;<font color="#BB0000">�� �� ������ �������� ��������.</font> ���������� ������������ ����������� ���������.');

?><br>
<br>
<h3>����������� ��������� ����� ��������� �� ��������� <a href="<?=$_SERVER['SCRIPT_NAME'];?>?mode=docfiles">��������� �����</a>.</h3>
<br>
<?php 
if ($type == '�������' || $type == '���������� ����') {?>�������: <br>
����������� 2 ����� � ���������� "�������" (1-� ���.) � "��������";<br><br><? }

if ($type == '�������') { ?>
�������� WM �� ���� ����������: <br>
1 ����  � ��������� "��������", � ������� MS Word ��� txt, ���������� � ���� ������ �� ��������� � ����� WMID, � ��������� ������� �� ���.
<?php }

if ($type == '����������� ����') { ?> ������������� � ����������� ������������ ���� ��� ��.<br>

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
	if ($type  == '���������� ����') { 


 	$result_br = sql_do("SELECT * FROM `b_requesites`  WHERE user_id='$user_id'");
	$robr = mysql_fetch_array($result_br, MYSQL_BOTH);
	if (   mysql_num_rows($result_br)  )  {
		echo "<br><br>�� �������� ".($userlogin = $robr['userlogin'])." ������������� ��������� ���������:<br>";
		include('includes/bankrequisites_again.php'); 

/* 
		?>
		<form method=post action="<?=$_SERVER['PHP_SELF']?>?mode=b_requesites">
<table  class="printview">
   <tbody>
        <tr>
                <td class="maintext" valign="top">����������:</td>
	           <td>

			<textarea  style="width: 170px; height: 49px;" tabindex="3" name="receivername" id="receivername" maxlength="160"><?=$robr['receivername']?></textarea>

              </td>
            </tr>
                <tr>

	                <td class="maintext">���:</td>
	                <td><input  style="width: 134px;" tabindex="4" name="receiver_inn" id="receiver_inn" maxlength="12" value="<?=$robr['receiver_inn']?>"></td>
                </tr>
                <tr>
	                <td class="maintext">�/��. �:</td>
	                <td><input  style="width: 154px;" tabindex="5" maxlength="20" name="receiver_account" id="receiver_account" value="<?=$robr['receiver_account']?>"></td>
                </tr>
                <tr>

	                <td class="maintext">��� �����:</td>
	                <td><input  style="width: 100px;" tabindex="6" maxlength="9" id="receiver_bankbic" name="receiver_bankbic" value="<?=$robr['receiver_bankbic']?>"></td>
                </tr>
                <tr>
	                <td class="maintext">�/��. �:</td>
	                <td><input  style="width: 154px;" tabindex="7" name="receiver_bank_kc" id="receiver_bank_kc" value="<?=$robr['receiver_bank_kc']?>"></td>
                </tr>
                <tr>

	                <td class="maintext" valign="top">���������� �������:</td>
	                <td>
                	
		                <textarea name="paymentassignment"   style="width: 470px; height: 56px;" tabindex="8" maxlength="108"><?=$robr['paymentassignment']?></textarea>
		                <!--center style=""><span ><i>(���� ������� ���� ����������. ���� ����� 108 ��������)</i></span></center-->
	                </td>
                </tr>
                <!--tr>
                  <td class="maintext" valign="top">&nbsp;</td>
                  <td>
				  <input name="user_id" type="hidden" value="<?=$user_id?>">
				  <input name="userlogin" type="hidden" value="<?=$userlogin?>">
                    <input name="sendpayment" value="��������� ���������� ���������� ���������"  type="submit">
                </td>
                </tr-->
          </tbody></table>		
        </form>

<ul><li><b>��� ����� ����������</b>�- ���������� ����������������� ��� ����� ���������� � ������������ �� "������������ ��� ��". </li>
  <li><strong>�/�</strong> <strong>����� ����������</strong>�- ����� ������������������ ����� �������� ��������� ������������ ���������� � ��������� ���� ����� ������.</li>
  <li><b>�/� ����������</b>�- ����� �������� ����� ���������� � ��������� �����������, ���� ����� ����� ��������� ��� �������� � �������� (���������� � 30301...), ���� ����� ���. ����� ��������� ����������� � �����-���������� ��� �������� ������� � ��������� �����������, ������� ���. ���� � �����-����������.</li>
  <li><b>��͠����������</b>�- ����������������� ����� ����������������� - ���������� �������� �������. ��� �������� � ��������, ��� �������, ����������� ��� ��������� - 7707083893. ��� �������� � ������ ������������ ����, � ������ ���������� ��� � ���������� �������� ������� �����, ������� ��� ����� ���������� ��� 0000000000. </li>
  <li><b>����������</b> - ������������ �����-���������� �������� �������. </li>
  <li><b> ����������</b> - 
                      ��� ���������� (���������), ����� ����� (���������� ��� ����������)  ����������� ���� � ����������<br>
  ���������� �������, �� ��������� ���� ���������� ��������� ���� �������������� ���� � ������������ � ��������� ������. � ���������� ������� ����� �������� �����, ���������� ���. � ����� � ������������ �� �� ����� ���� <b>����������</b> ����������� ��������, ���� ���������� ������� �� ������ ��������� 108 ��������. </li>
  <li><b>������� � ��� � ���������� �������</b> - � ������������ � ������� �� "� ������ �� ����������� ���������" ��� �������� ���������� �������� ����� ���. ���������� ����, ����� ������� ����������������, �� �������� ������������� ���, ������� ��� ��������� �� ��� ����������� ���� ����� ��� �� ����������, �� ���� �����������: "��� ���". � ���������� ������� ����� �������� �����, ���������� ���.</li>
</ul>
<h3>��������� ������� ���������� ����������:</h3>
<ol>
  
  <li> <b>������� � ��������� ���������</b> <br>
      <b>���</b> - 044652323 <br>
      <b>����������</b> - �� "���. �� �� �� (�� ������) ���-��� ����" �.�����-��������� , ��������� ���� ��������  � ��� �2003/0715 <br>
      <strong>KC</strong> - 30101810500000000653 <br>
      <b>��</b> - 42301810555073124377 <br>
      <b>���</b> - 7707083893 <br>
      <b>����������</b> - ���������� ���� �������� � ��� �2003/0715 <br>
      <br>
  </li>
  <li> <b>������� � ��������� ���������, ���� ����� ����� ���������� ������ 20 ������ (��������, �� �������������� ������)</b> <br>
      <b>���</b> - 044030653 <br>
      <b>����������</b> - ���������� ��������� ���� ��������� �� �.������, �������-�������� ��������� �8038/077 <br>
      <strong>KC</strong> - 30101810900000000323 <br>
      <b>��</b> - 30301810440000600076 <br>
      <b>���</b> - 7707083893 <br>
      <b>����������</b> - ��� ������� ������� ���������, �/�. 42301610120141766183/01,<br>
      <br>
  </li>
  <li> <b>������� � �������� �� ��������� ����</b> <br>
      <b>���</b> - 044652323 <br>
      <b>����������</b> �� "���. �� �� �� (�� ������) ���-��� ����" �.�����-��������� , ����� ��������� ������������� � ��� �2003/0715 <br>
      <strong>KC</strong> - 30101810500000000653 <br>
      <b>��</b> - 47422810555019999107 <br>
      <b>���</b> - 7707083893 <br>
      <b>����������</b> - �� ����-���� 6761956102005286 ������ ���������� �������������� <br>
      <br>
  </li>
  <li> <b>������� � ������������ ����</b> <br>
      <b>���</b> - 047308874 <br>
      <b>����������</b> - ������ �� "����-����" � �.����������,  ��������� ����� ���������� <br>
      <strong>KC</strong> - 30101810100000000874 <br>
      <b>��</b> - 42301810410010000244 <br>
      <b>���</b> - 0000000000 <br>
      <b>����������</b> - ���������� ������ ����������� <br>
      <br>
  </li>
  <li> <b>������� � ������������ ����, � �������� ������ ���. ���� � ������ �����</b> <br>
      <b>���</b> - 044525545 <br>
      <b>����������</b> - ��� ������������� ���������� ���� �. ������, ��� �� "������-����" <br>
      <strong>KC</strong> - 30101810300000000545 <br>
      <b>��</b> - 30111810400010001728 <br>
      <b>���</b> - 7710030411 <br>
      <b>����������</b> - ��� BIS 0008760771 ��� ����� 7924-1373<br>
  </li>
</ol>


		<? */
	}
	else {
				echo "<h3>���������� ���������</h3>������ ���  �� ��������� ������ � ������������� ��������� ����� � ����������� �����������, �� ������� ����� ��������� �������� � ������ ��������!<br> ����� ������ � ����������� �� ��. ����� � � ������ ���������� ������������ ����������� ��� ������ ����� ������������ ���������, ��������� �� ���� ��������.<br><br>����������, ����������� ������������ � ������������ ����� � ��������� ����������, ����� ���� ��������� ����� ����� ��������.";
			echo '<br><br>��������! �� ��� �� ��������� ����� ��������� ����������. <font color="#FF0000">��� ����� ����� ������� ����� ����������!</font><br><br>';
			include('includes/bankrequisites.php'); 
	}

  }         //    if ($type  != '�������')
#--------------------------------------------------------------------


	elseif ($type == '�������') { 
	
	 include('includes/wmrequisites.php'); 
	}
#--------------------------------------------------------------------
	else { // �����  
	?>���������� ��������� ����������� ��� ������� �� ��������, �� ����� ��� �� �����������. ��� ������ ����� ������������ ���������, ������� �� ������������ � ��������������� ������� �������� � ��������������.<? 
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





	?><h2>����� �������</h2><?


//    ��������� ������
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
echo '<br>����� �� ������ ������� ��������� �������� � �����<br>  <strong><font color="#00aa00">'.$total_Out;

	if ($type == '���������� ����') echo "</font></strong> ������<br> (� ���� ����� � ������������ � ����������� ����������������� � ������ ����� ������� ���� 13%).";
	elseif ($type == '�������') echo "</font></strong> ������<br> (�� ��� R-������� ������� ������ ����� ".round($total_Out * 0.951,2)."�. � ������������ � �.3.12 ��������� ������ � �������������� �����).";
	else echo "</font></strong> ������<br> ";

echo '<br><br> <a href="'.$_SERVER['PHP_SELF'].'?mode=get_money&period='.$year.'-'.$month.'&go=yes">�������  '.$total_Out.' ������</a><br><br>';
//echo  $_SERVER['PHP_SELF'];
}
else echo "��� ��������� ������� �� �������."; if ($go == 'yes') echo "<br>����� ������� ������� (��. \"�������\").";

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
<h3>�������� �����</h3>
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
    <td>������</td>
    <td><textarea name="question" cols="90" rows="15"><?=$question?></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><div align="right">
      <input name="updatequest" type="submit" value="���������������">
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

				$email->subject = '������ �� mcall ---  �����: '.$userlogin.' ������: '.$ticket.' ����: '.$header;
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

				$email->subject = '������ �� mcall ---  �����: '.$userlogin.' ������: '.$ticket.' ����: '.$header;
				$email->to      = 'ilyadok@gmail.com , nickdorofeev@gmail.com';
				$email->from    = "info@".$_SERVER["SERVER_NAME"]; //info@mcall.ru
				$email->message	= $question;
				$email->html_email = 1;
				$email->char_set = 'windows-1251';
				$email->send_mail();

/***********************************************************************/		
}





?>
<h3>�������� �����</h3>
<form action="<?=$_SERVER['PHP_SELF']?>?mode=ticket" method="post">
<table border="0" cellspacing="4" cellpadding="2">
  <tr>
    <td>���� ������� </td>
    <td><input name="header" type="text" size="26"></td>
  </tr>
  <tr>
    <td>������</td>
    <td><textarea name="question" cols="20" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><div align="right">
      <input name="quest" type="submit" value="������ ������">
    </div></td>
    </tr>
</table>
</form>
<hr>
<h4>������� ���������</h4>
<table class="printview">
<thead>
	<tr><th>����</th><th>����</th><th>������</th><th>�����</th><th>ticket</th></tr>
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
		echo "<td>&nbsp;&nbsp;".$question."<p><a href='".$_SERVER['PHP_SELF']."?mode=ticket&userlogin=".$userlogin."&ticket=".$ticket."&do=update' title='������������� ������'>".( !$answer ? '������������� ������':'')."</a></p></td>";
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
	 echo "<h3>����������� ��������</h3>";
}
else {

?><h2>������ ����������� ������</h2><?php 

if ( /* !isset($OneRuble) && isAction() */ 1 == 2)
{
	?>
	� ��������� ����� ��������� ����� ����������� �� 1 �����!�. �� ������ ���������� ��� �� ������������� �����. <a href="action1ruble.php" target="_blank">������ ����������� �����</a>.<br> ��� ������ �� ���� ����� ������� ������ 
	<form action="<?=$_SERVER['SCRIPT_NAME'];?>?mode=pay809" method="post" name="payType">
		<input name="OneRuble" type="submit" value="������������ �� 1 �����">
	</form>
	<?
	$file = fopen("html_gall/actionprice.php","r");
	if(!$file) echo("������ �������� �����");  //else  fpassthru($file); //echo $file;
	else {
		$file_array = file("html_gall/actionprice.php");
		if(!$file_array) {
			echo("������ �������� �����");
		}
		else {
			for($i=0; $i < count($file_array); $i++) {
				
						$actionprice =  $file_array[$i];

			} // for     
		} // else
	} // else
	fclose ($file);

	
	
	
	
	$priceR =   $actionprice  ;
	$ActionName = " - ����� �������� ������ ����";
	$Kvitancita = "print".$priceR.".php";
}
elseif ( /* isAction() */  2==3 ) {
	$priceR =  9300   ; 
	$ActionName = " - ����� ���������� �� 1 �����!";
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
$name = '����������� ��������� ������, ����� '.$userlogin.$ActionName;
 
 /* echo */ $res_url = 'http://'.$_SERVER['SERVER_NAME'].'/resultshort.php';
/*   echo '<br>';
 */  /* echo */ $suc_url = 'http://'.$_SERVER['SERVER_NAME'].'/successshort.php';
/*   echo '<br>';
 */ /* echo */  $fail = 'http://'.$_SERVER['SERVER_NAME'].'/failshort.php';
?> 


<p>&nbsp;</p>
<table border="0" cellpadding="5" cellspacing="20">
  <tr>
    <td colspan="3"><div align="center"><strong>�������� ����� ������� <span style="color:#660000;">WebMoney</span> </strong></div></td>
  </tr>
  <tr>
    <td>� �������� Z (���������� - ������� ���):
  <br>
  ��������� ��� �������  
  <?=$price;?> 
  WMZ ��  
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
	<input type="hidden" name="comment" value="������ ����������� ��������� ������">
</p>
<p>	
	<input type="submit" value="�������� <?= $price ;?> WMZ">
</p>
</form></td>
    <td valign="top"> <div align="center">��� </div></td>
    <td>� �������� R (���������� - ���������� �����):
  <br>��������� ��� �������  
  <?= $priceR ;?> 
  WMR ��  
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
	<input type="hidden" name="comment" value="������ ����������� ��������� ������">
</p>
<p>	
	<input type="submit" value="�������� <?= $priceR ;?> WMR">
</p>
</form></td>
  </tr>
</table>


 

<table border="0" cellpadding="5" cellspacing="20" width="100%">
  <tr>
    <td colspan="3"><div align="center"><strong>�������� �����  <span style="color:#660000;">����</span> </strong></div></td>
  </tr>
</table>

<a href="<?php echo $Kvitancita; ?>" target="_blank">��������� ��� ������ ����� ����</a><br>
<br>

�� ��������� �������� � ������������ ������, ����� ������ ����� ���� �������� ��� �� ���� �� ��������� "�������� �����" � �� ����������� ��������� ��������������� ����� ���������� ��������� �� ��� ����� ��. ����� <a href="mailto:info@mcall.ru">info@mcall.ru</a>
<br>
<br>




<table border="0" cellpadding="5" cellspacing="20" width="100%">
  <tr>
    <td colspan="3"><div align="center"><strong>�������� �����  <span style="color:#660000;">������.������</span> </strong></div></td>
  </tr>
</table>

���� ��� ������ 4100167053549<br><br>


����� ������ ����� ������.������ �������� ��� �� ���� �� ��������� "�������� �����" (�����������!) �  �� ��� ����� ��. ����� <a href="mailto:info@mcall.ru">info@mcall.ru</a>. ������ ����� ���������� ��  ���� ������ �������� ������ ����� �����.
<br>
<br>

<?php /* <table border="0" cellpadding="5" cellspacing="20" width="100%">
  <tr>
    <td colspan="3">
	<div align="center"><strong>�������� ��� ������  <span style="color:#660000;">���</span> </strong></div>
	<div align="center">(�������������� �������, � ��������� ������ ������ ����� ���������� ����� �� ��������� ��� ���������)</div>
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
  <a href="#" onclick="window.open('http://dostup.smspartner.ru/send.php?id=121642', '_blank', 'location=no,height=220,width=740'); return false;">���������� �� �������� SMS.</a><br>
��� ������������� ������ ����� ��������� ������ (� �������� ���) ��� ���������� ������ � ����� ���� � ��������� � ������� 1,5 �����.<br>
<br>

  <?

  $messages = array();
  $messages["ServiceNotFound"] = "������! ������ �� ������.";
  $messages["PasswordNotSet"]  = "������! �� ������ ������.";
  $messages["BadPassword"]     = "������! �������� ������ ��� ���� �������� ������ ����.";
  $messages["Limit"]           = "������! ���������� ����� ������ ��������� ������������� ������.";
  
  if (isset($messages[$content])) echo $messages[$content]."<br>\n";
?>

<br>
<form method="post" action="">
  ������� ������
  <input type="text" name="key" value="">
  <input type="submit" value="OK">
</form>

<?php

} else {
  
  	$plus = 150;
	$comment = "������ ����������� ��������� ������ �� ���, ������ ".$_POST["key"];
	sql_do("INSERT INTO `payins` ( `id` ,  `userlogin` , `in` , `payindate`, `comment`  ) VALUES ( '',  '$userlogin', '$plus', '20".date("y-m-d")."', '$comment' )");
	sql_do("INSERT INTO `user_balans` VALUES ('', '$userlogin', '$plus', 0, 0, 0, '20".date("y-m-d")."', '$comment')");

	sql_do("UPDATE `registration` SET `payed` = 'YES' WHERE `userlogin` = '$userlogin' OR `id` = '$userlogin'");
	sql_do("UPDATE `users_ivr` SET `payed` = 'YES' WHERE `userlogin` = '$userlogin'");


  echo "<br><br>������ ����������� ��������� ������ �����������";
  

require "include/class_email_pay.php";
$qu = "������ ����������� ��������� ������ ����������� ������������� � ������� ".$userlogin.'<br><br>';
$email = new emailer;

				$email->subject = $userlogin." : �������� ������";
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

?><h2>������ ��������� ������ ������</h2><?php 


$credit_days = 15;
//$Kvitancita = "print100change.php";
$Kvitancita = "kvitanciya150.rtf";
$priceR = 150  ;
$price = round(($priceR / 27), 2);
$name = '��������� ������ ������, ����� '.$userlogin.$ActionName;
 
 /* echo */ $res_url = 'http://'.$_SERVER['SERVER_NAME'].'/resultshort.php';
/*   echo '<br>';
 */  /* echo */ $suc_url = 'http://'.$_SERVER['SERVER_NAME'].'/successshort.php';
/*   echo '<br>';
 */ /* echo */  $fail = 'http://'.$_SERVER['SERVER_NAME'].'/failshort.php';
?> 


<p>&nbsp;</p>
<table border="0" cellpadding="5" cellspacing="20">
  <tr>
    <td colspan="3"><div align="center"><strong>�������� ����� ������� <span style="color:#660000;">WebMoney</span> </strong></div></td>
  </tr>
  <tr>
    <td>� �������� Z (���������� - ������� ���):
  <br>
  ��������� ��� �������  
  <?=$price;?> 
  WMZ ��  
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
	<input type="hidden" name="comment" value="��������� ������ ������ (�������� �����)">
</p>
<p>	
	<input type="submit" value="�������� <?= $price ;?> WMZ">
</p>
</form></td>
    <td valign="top"> <div align="center">��� </div></td>
    <td>� �������� R (���������� - ���������� �����):
  <br>��������� ��� �������  
  <?= $priceR ;?> 
  WMR ��  
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
	<input type="hidden" name="comment" value="��������� ������ ������ (�������� �����)">
</p>
<p>	
	<input type="submit" value="�������� <?= $priceR ;?> WMR">
</p>
</form></td>
  </tr>
</table>

<table border="0" cellpadding="5" cellspacing="20" width="100%">
  <tr>
    <td colspan="3"><div align="center"><strong>�������� �����  <span style="color:#660000;">����</span> </strong></div></td>
  </tr>
</table>

<a href="<?php echo $Kvitancita; ?>" target="_blank">��������� ��� ������ ����� ����</a>
<br>
<br>
<table border="0" cellpadding="5"  width="100%">
  <tr>
    <td><div>��� ��������� ��������� ������ ������� �������� ���������� �� ������ �����  <span style="color:#660000;">�������� �����</span> ��� �� ��������. ��� ������ ����� ���� - �������� ���� ���������� ���������.</div></td>
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

?><h2>����� ����������</h2><br>
�������� ��� ���������� �����:<br><br>


<table class="printview">
<thead>
	<tr><th>����</th><th>����������</th></tr>
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
    <td><a href="partners_files/<? echo $file;?>">�������</a></td>
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

//if($_SERVER['SERVER_NAME'] != 'mcall.ru') echo "<h2>��� �� ������!!! ������ �� mcall.ru ! </h2>";
if ($act == "delete"){
 $result = sql_do("DELETE FROM partnerdocs WHERE user_id='$user_id' AND file = '$filename' ");

 echo "<br>";
	echo  "������ ���� ". str_replace("_".$user_id."_","",$filename)    ;
 echo "<br>";
	unlink( $root.'/'.$filename );
}


//echo $b1;



#-----------------------------------------��������-------------------------------------------$$$
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
		else echo "������������ ������ ����� $file_ref_size ����!";








}
#--------------------------------------------------------------------------------------------$$$


?>
<br>
<br>
���������<br><font size="-3">(���������� ���� ������ - jpg , jpeg , txt , pdf , doc , xls , ������ ����� �� ����� 2 ��������!)</font><br><br>


<form action="<?=$_SERVER['SCRIPT_NAME'];?>?mode=docfiles" method="post" name="fi"  ENCTYPE="multipart/form-data">


�������� ��������� <input name="title"  type="text" value=""><br>
���� <font color="#FFFFFF">____________</font> <input type="file" name="file_ref" style="width:300px;" ><br>
<input name="partner"  type="hidden" value="<?=$user_id?>">
<input name="do"  type="hidden" value="upload">
<br>
<input name="b1" type="submit" value="���������">
</form>

<!--
<table class="printview">
<thead>
	<tr><th>����</th><th>���������</th><th>�������</th></tr>
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
				    <td><a href="../partners_files/<? echo $file;?>">�������</a></td>
				    <td><a href="<?=$_SERVER['SCRIPT_NAME'];?>?mode=docfiles&act=delete&filename=<? echo $file;?>">�������</a></td>
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
	<tr><th>��������</th><th>������</th><th>����</th><th>��������</th><th>��������</th><th>�������</th><th>������</th><th>�������</th></tr>
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
				    <td><a href="../partners_files/<? echo $file;?>" target="_blank">�������</a></td>


				    <td><? echo !strstr($file, ".jpg") && !strstr($file, ".jpeg") && !strstr($file, ".JPG") && !strstr($file, ".JPEG")? " - ": "<font style=\"text-decoration:underline; font-size:10px; font-weight:bold; cursor:pointer; \" color=blue onmouseover=\"Tip('<img src=../partners_files/".$file." width=400>', SHADOW, true, WIDTH, -450 , FADEOUT, 1000 )\" onmouseout=\"UnTip()\" >��������</font>" ;?></td>


				    <td><?php if ($status < 2) {?><a href="<?=$_SERVER['SCRIPT_NAME'];?>?mode=docfiles&act=delete&filename=<? echo $file;?>">�������</a><?php }
					else {?>&nbsp;<?php }?></td>
				    <td><? echo !$status? "�� ��������": (  ($status==1)? "�� ������":"������");?></td>
				    <td><? echo !$whynot? " - ": "<font style=\"text-decoration:underline; font-size:10px; font-weight:bold; cursor:pointer; \" color=blue onmouseover=\"Tip('".$whynot."', SHADOW, true, WIDTH, -350 , FADEOUT, 1000 )\" onmouseout=\"UnTip()\" >�������</font>" ;?></td>
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
$name = str_replace ("�","a",$name);
$name = str_replace ("�","b",$name);
$name = str_replace ("�","v",$name);
$name = str_replace ("�","g",$name);
$name = str_replace ("�","d",$name);
$name = str_replace ("�","e",$name);
$name = str_replace ("�","g",$name);
$name = str_replace ("�","z",$name);
$name = str_replace ("�","i",$name);
$name = str_replace ("�","i",$name);
$name = str_replace ("�","k",$name);
$name = str_replace ("�","l",$name);
$name = str_replace ("�","m",$name);
$name = str_replace ("�","n",$name);
$name = str_replace ("�","o",$name);
$name = str_replace ("�","p",$name);
$name = str_replace ("�","r",$name);
$name = str_replace ("�","s",$name);
$name = str_replace ("�","t",$name);
$name = str_replace ("�","u",$name);
$name = str_replace ("�","f",$name);
$name = str_replace ("�","h",$name);
$name = str_replace ("�","tz",$name);
$name = str_replace ("�","ch",$name);
$name = str_replace ("�","sh",$name);
$name = str_replace ("�","",$name);
$name = str_replace ("�","",$name);
$name = str_replace ("�","",$name);
$name = str_replace ("�","e",$name);
$name = str_replace ("�","yu",$name);
$name = str_replace ("�","ya",$name);
$name = str_replace ("�","Y",$name);
$name = str_replace ("�","y",$name);
$name = str_replace (" ","",$name);

$name = str_replace ("�","a",$name);
$name = str_replace ("�","b",$name);
$name = str_replace ("�","v",$name);
$name = str_replace ("�","g",$name);
$name = str_replace ("�","d",$name);
$name = str_replace ("�","e",$name);
$name = str_replace ("�","g",$name);
$name = str_replace ("�","z",$name);
$name = str_replace ("�","i",$name);
$name = str_replace ("�","i",$name);
$name = str_replace ("�","k",$name);
$name = str_replace ("�","l",$name);
$name = str_replace ("�","m",$name);
$name = str_replace ("�","n",$name);
$name = str_replace ("�","o",$name);
$name = str_replace ("�","p",$name);
$name = str_replace ("�","r",$name);
$name = str_replace ("�","s",$name);
$name = str_replace ("�","t",$name);
$name = str_replace ("�","u",$name);
$name = str_replace ("�","f",$name);
$name = str_replace ("�","h",$name);
$name = str_replace ("�","tz",$name);
$name = str_replace ("�","ch",$name);
$name = str_replace ("�","sh",$name);
$name = str_replace ("�","",$name);
$name = str_replace ("�","",$name);
$name = str_replace ("�","",$name);
$name = str_replace ("�","e",$name);
$name = str_replace ("�","yu",$name);
$name = str_replace ("�","ya",$name);
return $name;
}




































?>
  