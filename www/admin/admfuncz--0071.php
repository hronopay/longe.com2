<?php
include("includes/admfun_1.php");

// ����� ����������

function start_stat($datefrom,$dateto){
?><fieldset><legend>�� ��������</legend>
<?
	open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin != ''  ORDER BY code");
?>
	<form method=post action="index.php?mode=by_partner">
�������� ����� �������:
	<select name="userlogin">
<?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?>
			<option value="<?=$row['userlogin'];?>"><?=$row['userlogin'];?></option>
		<?
	}
?>

	</select>
	<input type=submit value="����������� ����������">
</form>

</fieldset>


<br>
<fieldset><legend>�����</legend>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="total_stats">

<select name="tarif">
<option value="0">�����</option>
<option value="1">07278 (1 �.)</option>
<option value="2">07223 (2 �.)</option>
</select>

 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>
</fieldset>
<?
close_connection();

?>
<?php /* ��������� ��������: <? echo (int)($total_dur*(9.5/60)); ?> ���.<br> */?>
<?

}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function stats_total()  -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------



function stats_total($datefrom,$dateto){
?>
<fieldset><legend>�� ��������</legend>
<?
	open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin != ''  ORDER BY code");
?>
	<form method=post action="index.php?mode=by_partner">
�������� ����� �������:
	<select name="userlogin">
<?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?>
			<option value="<?=$row['userlogin'];?>"><?=$row['userlogin'];?></option>
		<?
	}
?>

	</select>
	<input type=submit value="����������� ����������">
</form>

</fieldset><br>
<fieldset><legend>�����</legend>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="total_stats">

<select name="tarif">
<option value="0">�����</option>
<option value="1" <?php if($_POST['tarif']==1) echo ' selected' ?>>07278 (1 �.)</option>
<option value="2" <?php if($_POST['tarif']==2) echo ' selected' ?>>07223 (2 �.)</option>
</select>

 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>
</fieldset>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>����</th><th>�����</th><th>�������</th><th>�������.</th><th>�������.</th><th>���</th><th>���</th><th>�����</th><th>����.</th><th>�������</th></tr>
</thead>
<tbody>
<?
$total_In = 0;
$total_Out = 0;
$tarif = isset($_POST['tarif'])?$_POST['tarif']:0;
if ($tarif == 2) $tarif = "AND called_number = '9012029438'";
elseif ($tarif == 1) $tarif = "AND called_number = '9012028013'";
else $tarif = "";

$result= sql_do("SELECT * FROM incoming WHERE date>'$datefrom' AND date<'$dateto' ".$tarif." ORDER BY date desc");
$total_dur=0;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

	if(aprox($row['duration'])>0){
		//if ($row['user_code'] == ''){
			$called_number = $row['called_number'];
			$user_code = $row['user_code'];
			if($user_code) $uc =" AND code='$user_code'"; else  $uc ='';

			$res=sql_do("SELECT * FROM users_ivr WHERE redir_num='$called_number' ".$uc." ");
			$ro = mysql_fetch_array($res, MYSQL_BOTH) ;
			$row['userlogin'] = $ro['userlogin']?$ro['userlogin']:'&nbsp;';
			$userlogin = $ro['userlogin'];
			$ro['code'] = $ro['code'] ? $ro['code'] : $row['user_code'];

			//$type = $ro['type'];


			$partner_num = $ro['partner_num'] ? $ro['partner_num'] : '&nbsp;';
			$partner_num = ($ro['partner_type'] != 3 && $ro['partner_type'] != 4)  ? $partner_num : 'call-center';
			$duration = $row['duration'];
		//}
		$called_number=$row['called_number'];
		echo "<tr> <td width='140px'>".$row['date']."</td>";
		echo "<td><font face='Arial' size=2 color='#ffffff'><a href='index.php?mode=by_partner&userlogin=".$row['userlogin']."' title='���������� ���������� ��������'>".$row['userlogin']."</a></td>";
		echo "<td>".$ro['code']."</td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['abon_number']."</td>";
		echo "<td>".$duration."</td>"."<td>".ceil($duration/60)."</td>";
		echo "<td>".($in = ($ro['partner_type'] != 3 && $ro['partner_type'] != 4)  ?  CostIn($partner_num, $row['abon_number'], $duration, $called_number, $ro['type'], $row['date']) : CostInClient($partner_num, $row['abon_number'], $duration, $called_number))."</td>";
		echo "<td>".($out = ($ro['partner_type'] == 4) ? CostOutReCo($duration, $userlogin) : ( ($ro['partner_type'] != 3)  ?  CostOut( $in, $row['date'], $partner_num, $row['abon_number'], $duration, $called_number, $ro['type'])  : CostOutClient($row['abon_number'], $duration, $row['date']) ))."</td>";
		echo "<td>".($in - $out)."</td>";
		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']);
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $out;
	}

 }
 ?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="7"><div align="right">�����: ������������: <? echo $total_dur; ?> ���</div></th>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
 <?
echo "";

close_connection();

?>
<?php /* ��������� ��������: <? echo (int)($total_dur*(9.5/60)); ?> ���.<br> */?>
<?

}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function partners()     -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
// ����� ������� ��� �������� ���
function partners(){

?><fieldset><legend>����������</legend><?
	open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin != '' AND partner_type = '1' ORDER BY code");
?>
<form method=post action="index.php?mode=show_partner">
�������� ����� $1 ������� IVR:
	<select name="userlogin"><?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?><option value="<?=$row['userlogin'];?>"><?=$row['userlogin'];?></option><?
	}
?>
	</select>
	<input type=submit value="����������� ������">
</form><br>


<?
 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin != '' AND partner_type = '2' ORDER BY code");
?>���<br><br><form method=post action="index.php?mode=show_partner">
�������� ����� $2 ������� IVR:
	<select name="userlogin"><?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?><option value="<?=$row['userlogin'];?>"><?=$row['userlogin'];?></option><?
	}
?>
	</select>
	<input type=submit value="����������� ������">
</form><br>


<?
 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin != '' AND partner_type = '3' ORDER BY code");
?>���<br><br><form method=post action="index.php?mode=show_partner">
�������� ����� ������� ���������:
	<select name="userlogin"><?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?><option value="<?=$row['userlogin'];?>"><?=$row['userlogin'];?></option><?
	}
?>
	</select>
	<input type=submit value="����������� ������">
</form><br>

<?
 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin != '' AND partner_type = '4' ORDER BY code");
?>���<br><br><form method=post action="index.php?mode=show_partner">
�������� ����� ��������� ��������:
	<select name="userlogin"><?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?><option value="<?=$row['userlogin'];?>"><?=$row['userlogin'];?></option><?
	}
?>
	</select>
	<input type=submit value="����������� ������">
</form>

</fieldset><br>
<? close_connection(); ?>
<fieldset><legend>��������</legend>
	<form method=post action="index.php?mode=create_partner">
������� ����� ����� �������:
	<select name="userloginfirst">
			<option value="1">������ IVR $1</option>
			<option value="2">������ IVR $2</option>
			<option value="3">������ ���������</option>
			<option value="4">����. ��������</option>

	</select><input type="text" name="newcode" value="31xx" maxlength="4" size="4">
	<input type=submit value="�����!">
	</form>
</fieldset>


<?
}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function show_partner($code)     ----------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

// ������ ���������� �� ���������� �������
function show_partner($userlogin){
	open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin='$userlogin'");
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
		$wmpurse=$row['wmpurse'];
	}

if ($partner_type < 3) include('includes/anketa.php');
elseif ($partner_type == 3) include('includes/anketa3.php');
elseif ($partner_type == 4) include('includes/anketa4.php');


?><form method=post action="index.php?mode=delete_partner">
<input name="userlogin" type="hidden" value="<?=$userlogin?>">
	<input type=submit value="������� ����� <?=$userlogin?> � �����">
	</form><?
close_connection();
}







#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function delete_partner()     -------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function delete_partner($userlogin){
	open_connection();
	$deletetime = date("20y-m-d 00:00:01");

 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin='$userlogin'");
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
		/* echo */ $Q = "INSERT INTO `deleted_users` ( `user_id` , `userlogin` , `pass_hash` , `fio` , `mail` , `icq` ,  `tele_concact` , `additional` , `code` , `partner_num` , `redir_num` , `vremya1` , `vremya2` , `partner_type` , `origname` , `startdate` , `enddate` , `type` , `deletetime` ) VALUES ('', '$userlogin', '$pass_hash', '$fio', '$mail', '$icq', '$tele_contact', '$additional', '$code' , '$partner_num', '$redir_num', '$vremya1', '$vremya2', '$partner_type', '$origname', '$startdate', '$enddate', '$type', '$deletetime')";
		mysql_query ($Q) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$Q."<BR>");

	}
	$quer2 = "DELETE FROM users_ivr WHERE userlogin='$userlogin'";
	mysql_query ($quer2) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$quer2."<BR>");

	echo "<br><br><br>����� $userlogin ������� ������ � �����.";
	close_connection();

}








#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function stats_part    --------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
// ���������� �� ���������� �������

function stats_part($userlogin,$datefrom,$dateto){

open_connection();
$id=USER_ID;

//$result = sql_do("SELECT * FROM users_ivr WHERE userlogin='$userlogin'");
$que2 = "SELECT * FROM users_ivr WHERE userlogin='$userlogin'";
$result = mysql_query ($que2) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$que2."<BR>");

?><br><br>������ <a href="javascript:inver('other');">(��������/������)</a><br><br><div ID="other" style="display:none;"><?
show_partner($userlogin);
?></div><br><?

while ($roww = mysql_fetch_array($result, MYSQL_BOTH))
{
	$redir_num=$roww['redir_num'];
	$code=$roww['code'];
	$partner_num = $roww['partner_num'];
}
?>����� ����� �������� - <? echo  $userlogin ? $userlogin: "������� �� �����������!!!";
//close_connection();
if (!$userlogin) die ("<br><br>������� �� �����������!!! ���������� ����������!");
?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="by_partner">
<input type="hidden" name="userlogin" value="<?=$userlogin?>">
<input type="hidden" name="redir_num" value="<?=$redir_num?>">
������:<br>
&nbsp;�&nbsp;&nbsp;
	<? makeform_from_date("datefrom",$datefrom); ?>
&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;
	<? makeform_from_date("dateto",$dateto); ?>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value="���������">
</form> <br><br><br><?
open_connection();

$ququ = "SELECT * FROM totaldata where userlogin='$userlogin' and date>='$datefrom' and date<='$dateto' order by date desc";
$result = mysql_query ($ququ) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$ququ."<BR>");
?>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:12px;  " class="sortable">
<thead>
<tr><td>����</td><td>�������.</td><td>�������</td><td>���</td><td>���</td><th>�����</th><th>����.</th><th>�������</th></tr>
</thead>
<tbody>
<?

$total_mins=0;
$total_dur=0;
$j = 0;
 while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
	if(aprox($row['duration'])>0){
		$color = $row['status'] == 'Abonent' ? '<font color="#00AA00">' : ($row['status'] == 'Light' ? '<font color="#0000FF">' : '<font color="#FF0000">');
		$called_number=$row['called_number'];
		$duration = $row['duration'];
		echo "<tr> <td width='140px'>".$row['date']."</td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['abon_number']."</td>";
		echo "<td>".$duration."</td>"."<td>".($mins = ceil($duration/60))."</td>";
		echo "<td>".($in = $row['in'])."</td>";
		echo "<td>".$color.($out = $row['out'])."</font></td>";
		echo "<td>".($in - $out)."</td>";
		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']);
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $out;
		$total_mins = $total_mins + $mins;
	}
}
close_connection();
?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="4"><div align="right">�����: ������������  <? echo $total_dur; ?> ���</div></th>
  <td><? echo $total_mins; ?>�</td>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
<?php

}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function stat_client    --------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
// ���������� �� ���������� �������

function stat_client ($datefrom,$dateto){
?>
<fieldset><legend>�� �������� ��������</legend>
<?
	open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin != '' AND  partner_type = '3'  ORDER BY code");
?>
	<form method=post action="index.php?mode=by_partner">
�������� ����� ������� ��������:
	<select name="userlogin">
<?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?>
			<option value="<?=$row['userlogin'];?>"><?=$row['userlogin'];?></option>
		<?
	}
?>

	</select>
	<input type=submit value="����������� ����������">
</form>

</fieldset><br>
<fieldset><legend>����� �������� ��������</legend>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="clientpartner">

<?php /* <select name="tarif">
<option value="0">�����</option>
<option value="1" <?php if($_POST['tarif']==1) echo ' selected' ?>>07278 (1 �.)</option>
<option value="2" <?php if($_POST['tarif']==2) echo ' selected' ?>>07223 (2 �.)</option>
</select> */?>

 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>
</fieldset>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>����</th><th>�����</th><th>�������.</th><th>���</th><th>���</th><th>�����</th><th>����.</th><th>�������</th></tr>
</thead>
<tbody>
<?
$total_In = 0;
$total_Out = 0;


$resultClient = sql_do("SELECT userlogin FROM users_ivr WHERE userlogin != '' AND  partner_type = '3'  ORDER BY code");
$total_dur=0;
while ($rowClient = mysql_fetch_array($resultClient, MYSQL_BOTH)){
	$userlogin = $rowClient['userlogin'];
	$result= sql_do("SELECT * FROM totaldata WHERE userlogin='$userlogin' AND date>'$datefrom' AND date<'$dateto'  ORDER BY date desc");
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

			$duration = $row['duration'];
			$in=$row['in'];
			$out=$row['out'];
			$profit=$row['profit'];
			$partner_num=$row['partner_num'];

			echo "<tr> <td width='140px'>".$row['date']."</td>";
			echo "<td><font face='Arial' size=2 color='#ffffff'><a href='index.php?mode=by_partner&userlogin=".$row['userlogin']."' title='���������� ���������� ��������'>".$row['userlogin']."</a></td>";
			//echo "<td>".$partner_num."</td>";
			echo "<td>".$row['abon_number']."</td>";
			echo "<td>".$duration."</td>"."<td>".ceil($duration/60)."</td>";
			echo "<td>".($in)."</td>";
			echo "<td>".($out)."</td>";
			echo "<td>".($profit)."</td>";
			echo "</tr>";


			$total_dur=$total_dur+aprox($row['duration']);
			$total_In = $total_In + $in;
			$total_Out = $total_Out + $out;

	 }
	}
 ?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="5"><div align="right">�����: ������������: <? echo $total_dur; ?> ���</div></th>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
 <?
close_connection();


}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function stat_ReCo    --------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
// ���������� �� ���������� �������

function stat_ReCo ($datefrom,$dateto){
?>
<fieldset><legend>�� ��������� ���������</legend>
<?
	open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin != '' AND  partner_type = '4'  ORDER BY code");
?>
	<form method=post action="index.php?mode=by_partner">
�������� ����� ��������� ��������:
	<select name="userlogin">
<?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?>
			<option value="<?=$row['userlogin'];?>"><?=$row['userlogin'];?></option>
		<?
	}
?>

	</select>
	<input type=submit value="����������� ����������">
</form>

</fieldset><br>
<fieldset><legend>����� ��������� ��������</legend>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="reclam_comp">

<?php /* <select name="tarif">
<option value="0">�����</option>
<option value="1" <?php if($_POST['tarif']==1) echo ' selected' ?>>07278 (1 �.)</option>
<option value="2" <?php if($_POST['tarif']==2) echo ' selected' ?>>07223 (2 �.)</option>
</select> */?>

 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>
</fieldset>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>����</th><th>�����</th><th>�������</th><th>�������.</th><th>���</th><th>���</th><th>�����</th><th>����.</th><th>�������</th></tr>
</thead>
<tbody>
<?
$total_In = 0;
$total_Out = 0;
/* $tarif = isset($_POST['tarif'])?$_POST['tarif']:0;
if ($tarif == 2) $tarif = "AND called_number = '9012029438'";
elseif ($tarif == 1) $tarif = "AND called_number = '9012028013'";
else $tarif = ""; */


$resultClient = sql_do("SELECT * FROM users_ivr WHERE userlogin != '' AND  partner_type = '4'  ORDER BY code");
$total_dur=0;
while ($rowClient = mysql_fetch_array($resultClient, MYSQL_BOTH)){
	$ClientCode = $rowClient['code'];
	$userlogin = $rowClient['userlogin'];
	$redir_num = $rowClient['redir_num'];
	if ($redir_num == '9012029438') $tarif = "AND called_number = '9012029438'";
	elseif ($redir_num == '9012028013') $tarif = "AND called_number = '9012028013'";


	$result= sql_do("SELECT * FROM incoming WHERE date>'$datefrom' AND date<'$dateto' AND user_code = '$ClientCode' ".$tarif." ORDER BY date desc");
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

		if(aprox($row['duration'])>0){

			$called_number = $row['called_number'];
			$user_code = $row['user_code'];
			if($user_code) $uc =" AND code='$user_code'"; else  $uc ='';

			$res=sql_do("SELECT * FROM users_ivr WHERE redir_num='$called_number' ".$uc." ");
			$ro = mysql_fetch_array($res, MYSQL_BOTH) ;
			$row['userlogin'] = $ro['userlogin']?$ro['userlogin']:'&nbsp;';
			$ro['code'] = $ro['code'] ? $ro['code'] : $row['user_code'];
			$partner_num = $ro['partner_num'] ? $ro['partner_num'] : '&nbsp;';
			$duration = $row['duration'];

			$called_number=$row['called_number'];
			echo "<tr> <td width='140px'>".$row['date']."</td>";
			echo "<td><font size=2><a href='index.php?mode=by_partner&userlogin=".$userlogin."' title='���������� ���������� ��������'>".$userlogin."</a></td>";
			echo "<td>".$ro['code']."</td>";
			//echo "<td>".$partner_num."</td>";
			echo "<td>".$row['abon_number']."</td>";
			echo "<td>".$duration."</td>"."<td>".ceil($duration/60)."</td>";
			echo "<td>".($in = CostInClient($partner_num, $row['abon_number'], $duration, $called_number))."</td>";
			echo "<td>".($out = CostOutReCo($duration, $userlogin))."</td>";
			echo "<td>".($in - $out)."</td>";
			echo "</tr>";
			$total_dur=$total_dur+aprox($row['duration']);
			$total_In = $total_In + $in;
			$total_Out = $total_Out + $out;
		}

	 }
	}
 ?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="6"><div align="right">�����: ������������: <? echo $total_dur; ?> ���</div></th>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
 <?
close_connection();


}









#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function edit_part     --------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

// �������������� ������ �������
function edit_part($userlogin,$pass_hash,$fio,$mail,$icq,$tele_contact,$additional,$redir_num,$partner_num,$code,$excode, $vremya1, $vremya2, $origname_list, $change_radio, $origname_new, $sday, $smonth, $syear, $eday, $emonth, $eyear, $type)
{
	open_connection();
	$result=sql_do("SELECT user_id from users_ivr WHERE userlogin='$userlogin'");
	$row = mysql_fetch_array($result, MYSQL_BOTH);

###################### ����� OF origname (�������������) #####################
	if ($change_radio == "professionlist"){
		 $origname = $origname_list;
	}
	if ($change_radio == "newprofession"){
		$origname = $origname_new;
		$query23="INSERT INTO origname (id_origname, origname_name) VALUES ('', '$origname')";
		@mysql_query ($query23) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query23."<BR>");
	}
###################### END OF origname (�������������) ########################

######################      ����� OF startdate enddate    #####################


//echo " $sday, $smonth, $syear, $eday, $emonth, $eyear<br>";
$startdate = mktime(0,0,0,intval($smonth),intval($sday),intval($syear));
$enddate = mktime(0,0,0,intval($emonth),intval($eday),intval($eyear));



	if ($pass_hash) {
		$pass_hash = md5($pass_hash); // ������� ����� ������   partner_num
		$res = sql_do("UPDATE users_ivr SET  pass_hash='$pass_hash', fio='$fio', mail='$mail', icq='$icq', tele_concact='$tele_contact', 	additional='$additional', redir_num='$redir_num', partner_num='$partner_num', code='$code', vremya1='$vremya1', vremya2='$vremya2', origname='$origname', startdate='$startdate', enddate='$enddate', type='$type'  WHERE userlogin='$userlogin'");
	}
	else { // ��������� ������ ������
		$res = sql_do("UPDATE users_ivr SET  fio='$fio', mail='$mail', icq='$icq', tele_concact='$tele_contact', 	additional='$additional', redir_num='$redir_num', partner_num='$partner_num', code='$code', vremya1='$vremya1', vremya2='$vremya2', origname='$origname', startdate='$startdate', enddate='$enddate', type='$type'  WHERE userlogin='$userlogin'");
	}

if(!$res)
		{
	 echo "�� ������� �������� ������.";
		}
else  { 	echo "������ ������� ���������. <a href='index.php?mode=partners'>�����</a>"; }
close_connection();
}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function create_partner($code)   ----------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function create_partner($userloginfirst, $code) {
	echo $userlogin = $userloginfirst.$code;
	echo '<br>';
  if ($code < 3100 || $code > 3199) echo "<br><br>�� ������� ������� ����� $userlogin, ��� ��� ������ �������� ������ ��������!!!";
  else {
	open_connection();

	if ($userloginfirst==2) $redir_num = '9012029438';
	elseif ($userloginfirst==3) $redir_num = '9012029438';
	elseif ($userloginfirst==1) $redir_num = '9012028013';
	else  $redir_num = '';

	$result=sql_do("SELECT * from users_ivr WHERE code='$code'");
	if (mysql_num_rows($result) < 2) {
			if (mysql_num_rows($result)==1) {
				$row = mysql_fetch_array($result, MYSQL_BOTH);
				if($row['userlogin'] == $userlogin) {
					echo  "<br><br>������� � ������� $userlogin ���  ����������!!! <br><br><a href='index.php?mode=partners'>�����</a>";
					exit;
				}
				elseif(  ($row['partner_type']==2 || $row['partner_type']==3 || $row['partner_type']==4) && ($userloginfirst==2 || $userloginfirst==3 || $userloginfirst==4) ) {
					echo  "<br><br>�����  � ��������� $code �� ������ 2 ������� ���  ����������!!! <br><br><a href='index.php?mode=partners'>�����</a>";
					exit;
				}
			}
			// partner_type
			$res = sql_do("INSERT INTO `users_ivr` ( `user_id` , `userlogin` , `pass_hash` , `fio` , `mail` , `icq` , `tele_concact` , `additional` , `code` , `redir_num` , `vremya1` , `vremya2` , `partner_type` ) VALUES ('', '$userlogin', '', '', '', '', '', '', '$code', '$redir_num', '0', '0', '$userloginfirst' )");
			if(!$res) echo "<br><br>�� ������� ������� ����� $userlogin !!!";
			else  echo "<br><br>����� $userlogin ������� �������. <a href='index.php?mode=partners'>�����</a>";
	}
	else echo "<br>�� ������� ������� ����� $userlogin !!!<br>��������� � ��������� $code ��� ���!!! <br><br><a href='index.php?mode=partners'>�����</a>";
	close_connection();
  } // else          9012029438     9012028013


}








#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostIn() -------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostIn($partner_num, $abon_number, $duration, $tarif_number, $type, $date) {

	if (substr($abon_number, 0, 3) == '812') return 0;
	//if ($abon_number == '9037294150' || $abon_number == '9037251299') return 0;

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

#----------����!!!--------------------------------------

if ($tarif_1 == 0 || $tarif_1 =='') {
	$tarif_1 = 30;
	$tarif_2 = 60;
	$porog = 14;
	$procent = 0.45;

}

#   ������� ------------------------------------------------------------
if ($work == '23' && $tarif_number == '9012029438') 	$procent = 0.48;
#-------------------------------------------------------


	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;

	if (!$duraMin) return 0;
#	if (!$work) return "N/M";

	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin;
  	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin;
  	else 									return "N/A";

#---------------------�������� ������ ������� ������ ��������------------------------------------------------------------------
   $q1 = "SELECT * FROM `defcodes` WHERE `from` <=  '$partner_num' AND `to` >= '$partner_num' ";
   $result1=sql_do($q1);
   if (!mysql_num_rows($result1) || mysql_num_rows($result) >1) return 'N/A Pn';
   else {
		$row1 = mysql_fetch_array($result1, MYSQL_BOTH);
		$regionPartner = $row1['region'];
		$idPartner = $row1['id'];                                 //return $idPartner;
		if ($region != $regionPartner) $sp = 2.25 * $duraMin;
		elseif ($region == 'cent') $sp = 1.25 * $duraMin;
		elseif ($region == 'fed') $sp = 3.25 * $duraMin;
		else return 'N/A sp';
   }
#-----------------------------------------------------------------------------------------------------------------------------
/* if ($date >= '2008-04-01 00:00:00') {
	if ($type == '���������� ����') return round( ($svt-$sp)*(0.9*0.14+1) , 2);
	else  return round ( ( $svt  - $sp ), 2) ;
}
 */

 return round ( ( $svt  - $sp ), 2) ;
 }

}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOutLight() -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOutLight ($in, $date, $partner_num, $abon_number, $duration, $tarif_number, $type) {

#---------------
if ($abon_number == '9151076024' || substr($abon_number , 0, 8) == '81264747' ) return 0;

/*                IVR  marazm
if ($date >= '2008-04-01 00:00:00') {
	if ($type == '���������� ����') return round(( $in * 0.9 * 0.86 ), 2);
	else  return round(($in*0.9), 2);
}
 */
#---------------

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


#----------����!!!--------------------------------------

if ($tarif_1 == 0 || $tarif_1 =='') {
	$tarif_1 = 30;
	$tarif_2 = 60;
	$porog = 14;
	$procent = 0.45;

}
#-------------------------------------------------------

#   ������� ------------------------------------------------------------
if ($work == '23' && $tarif_number == '9012029438') 	$procent = 0.48;
#-------------------------------------------------------


#	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;
	$duraMin = ($duration > $porog) ?  ($duration/60) : 0 ;

#	if (!$work) return "N/Op";
	if (!$duraMin) return 0;

#          ������ ������ ��������� �� 3,25
#	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin - (3.25 * ceil($duraMin) );
# 	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin - (3.25 * ceil($duraMin) );
#  	else 									return "N/A";

#          �������� ������ ��������� �� 3,25
	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin - (3.25 * ($duraMin) );
 	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin - (3.25 * ($duraMin) );
  	else 									return "N/A";


/* 	if ($tarif_number == '9012029438') 	{
		if ($type == '����������� ����') $CostOut  =  ($region == 'cent') ? (19/60)*$duration  : (17/60)*$duration  ;
		else $CostOut  =  ($region == 'cent') ? (16.3/60)*$duration  : (14.3/60)*$duration  ;
	}
  	elseif ($tarif_number == '9012028013') 	{
		if ($type == '����������� ����') $CostOut  =  ($region == 'cent') ? (9.5/60)*$duration  : (8.5/60)*$duration  ;
		else $CostOut  =  ($region == 'cent') ? (8/60)*$duration  : (7.3/60)*$duration  ;
	}
  	else 									return "N/A"; */

	$NashaDola = 	0.35;
	$Ndfl = 		0.14;
	$TehRashod = 	0.07;

	if ($type == 		'���������� ����') 		return round( ($svt * (1-$NashaDola)*(1-$Ndfl)), 2);
	elseif ($type == 	'����������� ����')  	return round( $svt * (1-$NashaDola) , 2 );
	else  										return round(  ($svt * (1-$NashaDola) * (1-$TehRashod)), 2  );


 return round ( $CostOut , 2) ;
 }


}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOut() ------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOut ($in, $date, $partner_num, $abon_number, $duration, $tarif_number, $type) {

#---------------
if ($abon_number == '9151076024' || substr($abon_number , 0, 8) == '81264747' ) return 0;


#               ����� ������ � 2008-07-01 (IVR  marazm)
if ($date >= '2008-07-01 00:00:00') {
	if ($type == '���������� ����') return round(( $in * 0.91 * 0.86 ), 2);
	elseif ($type == '�������') return round(( $in * 0.9 * 0.92 ), 2);
	else  return round(($in*0.91), 2);
}
#---------------

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


#----------����!!!--------------------------------------

if ($tarif_1 == 0 || $tarif_1 =='') {
	$tarif_1 = 30;
	$tarif_2 = 60;
	$porog = 14;
	$procent = 0.45;

}

#-------------------------------------------------------

#   ������� ------------------------------------------------------------
if ($work == '23' && $tarif_number == '9012029438') 	$procent = 0.48;
#-------------------------------------------------------


#	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;
	$duraMin = ($duration > $porog) ?  ($duration/60) : 0 ;


#	if (!$work) return "N/Op";
	if (!$duraMin) return 0;

#          ������ ������ ��������� �� 3,25
#	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin - (3.25 * ceil($duraMin) );
# 	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin - (3.25 * ceil($duraMin) );
#  	else 									return "N/A";

#          �������� ������ ��������� �� 3,25
	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin - (3.25 * ($duraMin) );
 	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin - (3.25 * ($duraMin) );
  	else 									return "N/A";


/* 	if ($tarif_number == '9012029438') 	{
		if ($type == '����������� ����') $CostOut  =  ($region == 'cent') ? (19/60)*$duration  : (17/60)*$duration  ;
		else $CostOut  =  ($region == 'cent') ? (16.3/60)*$duration  : (14.3/60)*$duration  ;
	}
  	elseif ($tarif_number == '9012028013') 	{
		if ($type == '����������� ����') $CostOut  =  ($region == 'cent') ? (9.5/60)*$duration  : (8.5/60)*$duration  ;
		else $CostOut  =  ($region == 'cent') ? (8/60)*$duration  : (7.3/60)*$duration  ;
	}
  	else 									return "N/A"; */

	$NashaDola = 	0.1;
	$Ndfl = 		0.14;
	$TehRashod = 	0.07;

	if ($type == 		'���������� ����') 		return round( ($svt * (1-$NashaDola)*(1-$Ndfl)), 2);
	elseif ($type == 	'����������� ����')  	return round( $svt * (1-$NashaDola) , 2 );
	else  										return round(  ($svt * (1-$NashaDola) * (1-$TehRashod)), 2  );


 return round ( $CostOut , 2) ;
 }


}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostInClient() -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostInClient($partner_num, $abon_number, $duration, $tarif_number) {
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

	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin;
  	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin;
  	else 									return "N/A";

	if ($region == 'cent') $sp = 1.25;
	elseif ($region == 'fed') $sp = 2.25;
	else return 'N/A sp';

	$sk = 8 * $duraMin ;

 return round ( ( $svt  - $sp - $sk ), 2) ;
 }

}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOutClient() ------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOutClient ($abon_number, $duration, $date) {

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

#---------------
if ($date >= '2008-04-01 00:00:00') return ($duraMin * 12);
#---------------


return round ( ( $duration * (12/60) ), 2) ;
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
#--------------------------------------------    function stats_IVR()  -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------



function stats_IVR($datefrom,$dateto){
?>
<fieldset><legend>�� �������� IVR</legend>
<?
	open_connection();

 	$result = sql_do("SELECT * FROM users_ivr WHERE userlogin != '' AND (partner_type ='1' OR partner_type ='2') ORDER BY code");
?>
	<form method=post action="index.php?mode=by_partner">
�������� ����� ������� IVR:
	<select name="userlogin">
<?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?>
			<option value="<?=$row['userlogin'];?>"><?=$row['userlogin'];?></option>
		<?
	}
?>

	</select>
	<input type=submit value="����������� ����������">
</form>

</fieldset><br>
<fieldset><legend>����� �������� IVR</legend>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="ivr">

<select name="tarif">
<option value="0">�����</option>
<option value="1" <?php if($_POST['tarif']==1) echo ' selected' ?>>07278 (1 �.)</option>
<option value="2" <?php if($_POST['tarif']==2) echo ' selected' ?>>07223 (2 �.)</option>
</select>

 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>
</fieldset>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>����</th><th>�����</th><th>�������</th><th>�������.</th><th>�������.</th><th>���</th><th>���</th><th>�����</th><th>����.</th><th>�������</th></tr>
</thead>
<tbody>
<?
$total_In = 0;
$total_Out = 0;
$tarif = isset($_POST['tarif'])?$_POST['tarif']:0;
if ($tarif == 2) $tarif = "AND called_number = '9012029438'";
elseif ($tarif == 1) $tarif = "AND called_number = '9012028013'";
else $tarif = "";

$result= sql_do("SELECT * FROM incoming WHERE date>'$datefrom' AND date<'$dateto' ".$tarif." ORDER BY date desc");
$total_dur=0;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

	if(aprox($row['duration'])>0){

			$called_number = $row['called_number'];
			$user_code = $row['user_code'];
			if($user_code) $uc =" AND code='$user_code'"; else  $uc ='';

			$res=sql_do("SELECT * FROM users_ivr WHERE redir_num='$called_number' ".$uc." ");
			$ro = mysql_fetch_array($res, MYSQL_BOTH) ;
			$row['userlogin'] = $ro['userlogin']?$ro['userlogin']:'&nbsp;';
			$userlogin = $ro['userlogin'];
			$ro['code'] = $ro['code'] ? $ro['code'] : $row['user_code'];
			$partner_num = $ro['partner_num'] ? $ro['partner_num'] : '&nbsp;';
			$partner_num = ($ro['partner_type'] != 3 && $ro['partner_type'] != 4)  ? $partner_num : 'call-center';
			$duration = $row['duration'];
	  if ($ro['partner_type'] < 3){
		$called_number=$row['called_number'];
		echo "<tr> <td width='140px'>".$row['date']."</td>";
		echo "<td><font face='Arial' size=2 color='#ffffff'><a href='index.php?mode=by_partner&userlogin=".$row['userlogin']."' title='���������� ���������� ��������'>".$row['userlogin']."</a></td>";
		echo "<td>".$ro['code']."</td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['abon_number']."</td>";
		echo "<td>".$duration."</td>"."<td>".ceil($duration/60)."</td>";
		echo "<td>".($in = ($ro['partner_type'] != 3 && $ro['partner_type'] != 4)  ?  CostIn($partner_num, $row['abon_number'], $duration, $called_number, $ro['type'], $row['date']) : CostInClient($partner_num, $row['abon_number'], $duration, $called_number))."</td>";
		echo "<td>".($out = ($ro['partner_type'] == 4) ? CostOutReCo($duration, $userlogin) : ( ($ro['partner_type'] != 3)  ?  CostOut( $in, $row['date'], $partner_num, $row['abon_number'], $duration, $called_number, $ro['type'])  : CostOutClient($row['abon_number'],  $duration) ))."</td>";
		echo "<td>".($in - $out)."</td>";
		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']);
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $out;
	  } #---------------------------------------	//if ($ro['partner_type'] < 3)
	}

 }
 ?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="7"><div align="right">�����: ������������: <? echo $total_dur; ?> ���</div></th>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
 <?
echo "";

close_connection();


}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function stats_PROF()  -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------



function stats_PROF($datefrom,$dateto){
	open_connection();

?>
<fieldset><legend>���������� ���������������</legend>

<form action="<?=$_SERVER['PHP_SELF']?>" method="GET"><input type="hidden" name="mode" value="profdirect"><input type=submit value="���������"></form>
</fieldset><br>
<fieldset><legend>����� ���������� �������� IVR �� ��������������</legend>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="profession">

<?
 	$result = sql_do("SELECT * FROM origname WHERE origname_name != ''  ORDER BY origname_name");
?>

�������� �������������:
	<select name="origname">
	<option value="" <? if(!isset($_POST['origname'])) echo ' selected' ?>>��� �������������</option>
<?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?>
			<option value="<?=$row['origname_name'];?>" <? if($_POST['origname']==$row['origname_name']) echo ' selected' ?>><?=$row['origname_name'];?></option>
		<?
	}
?>

	</select><br>

 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>
</fieldset>
<?php
if (isset($_POST['origname'])){
?>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>����</th><th>����.</th><th>�����</th><th>�������</th><th>�������.</th><th>�������.</th><th>���</th><th>���</th><th>�����</th><th>����.</th><th>�������</th></tr>
</thead>
<tbody>
<?
$total_In = 0;
$total_Out = 0;
/* $tarif = isset($_POST['tarif'])?$_POST['tarif']:0;
if ($tarif == 2) $tarif = "AND called_number = '9012029438'";
elseif ($tarif == 1) $tarif = "AND called_number = '9012028013'";
else */ $tarif = "";


$origname = isset($_POST['origname']) ? $_POST['origname'] : '';
//$origname = " AND origname = '$origname' ";

 	$result77 = sql_do("SELECT * FROM users_ivr WHERE origname = '$origname' ORDER BY origname");
 	while ($row77 = mysql_fetch_array($result77, MYSQL_BOTH)){
			$orignameData =  " AND called_number = " . $row77['redir_num'] .  " AND user_code = " . $row77['code'] . " ";

$result= sql_do("SELECT * FROM incoming WHERE date>'$datefrom' AND date<'$dateto' ".$tarif.$orignameData." ORDER BY date desc");
$total_dur=0;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

	if(aprox($row['duration'])>0){

			$called_number = $row['called_number'];
			$user_code = $row['user_code'];
			if($user_code) $uc =" AND code='$user_code'"; else  $uc ='';

			$res=sql_do("SELECT * FROM users_ivr WHERE redir_num='$called_number' ".$uc." ");
			$ro = mysql_fetch_array($res, MYSQL_BOTH) ;
			$row['userlogin'] = $ro['userlogin']?$ro['userlogin']:'&nbsp;';
			$userlogin = $ro['userlogin'];
			$ro['code'] = $ro['code'] ? $ro['code'] : $row['user_code'];
			$partner_num = $ro['partner_num'] ? $ro['partner_num'] : '&nbsp;';
			$partner_num = ($ro['partner_type'] != 3 && $ro['partner_type'] != 4)  ? $partner_num : 'call-center';
			$duration = $row['duration'];
	  if ($ro['partner_type'] < 3){
		$called_number=$row['called_number'];
		echo "<tr> <td width='140px'>".$row['date']."</td>";
		echo "<td>".($ro['origname'] = $ro['origname'] ? $ro['origname'] : '���')."</td>";	//------------------------------------
		echo "<td><font face='Arial' size=2 color='#ffffff'><a href='index.php?mode=by_partner&userlogin=".$row['userlogin']."' title='���������� ���������� ��������'>".$row['userlogin']."</a></td>";
		echo "<td>".$ro['code']."</td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['abon_number']."</td>";
		echo "<td>".$duration."</td>"."<td>".ceil($duration/60)."</td>";
		echo "<td>".($in = ($ro['partner_type'] != 3 && $ro['partner_type'] != 4)  ?  CostIn($partner_num, $row['abon_number'], $duration, $called_number, $ro['type'], $row['date']) : CostInClient($partner_num, $row['abon_number'], $duration, $called_number))."</td>";
		echo "<td>".($out = ($ro['partner_type'] == 4) ? CostOutReCo($duration, $userlogin) : ( ($ro['partner_type'] != 3)  ?  CostOut( $in, $row['date'], $partner_num, $row['abon_number'], $duration, $called_number, $ro['type'])  : CostOutClient($row['abon_number'],  $duration) ))."</td>";
		echo "<td>".($in - $out)."</td>";
		echo "</tr>";
		$total_dur=$total_dur+$row['duration'];
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $out;
	  } #---------------------------------------	//if ($ro['partner_type'] < 3)
	}

 }
}

 ?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="8"><div align="right">�����: ������������: <? echo $total_dur; ?> ���</div></th>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
 <?
 } //   -------------------------if (isset($_POST['origname']))
echo "";

close_connection();


}









#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function stats_Prefix()  ------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function stats_Prefix($datefrom,$dateto){

 open_connection();
# if ($_SERVER['SERVER_NAME'] != 'mcall.ru1') remake_Total($datefrom,$dateto);
 if (1) CrateTempUsersData ($datefrom,$dateto);

?>
<fieldset><legend>����������  ���������</legend>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="prefix">
 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?>
<br>
������� � <input name="profitfrom" type="text" size="6" value="<?php echo $profitfrom = isset($_POST['profitfrom'])?$_POST['profitfrom']:0; ?>"> �� <input name="profitto" type="text" size="6" value="<?php echo $profitto = isset($_POST['profitto'])?$_POST['profitto']:100000; ?>"> ������ (����� ���� � �������������!)<br>

������� � <input name="durationfrom" type="text" size="6" value="<?php echo $durationfrom = isset($_POST['durationfrom'])?$_POST['durationfrom']:0; ?>"> �� <input name="durationto" type="text" size="6" value="<?php echo $durationto = isset($_POST['durationto'])?$_POST['durationto']:1000000; ?>"><br>
����������: (���� ������ �� ������� - ���)<br>
<input name="partnertype1" type="checkbox" value="1"> ������ 14��� <br>
<input name="partnertype2" type="checkbox" value="2"> ������ 24��� <br>
<input name="partnertype3" type="checkbox" value="3"> ������ 34��� <br>
<input name="partnertype4" type="checkbox" value="4"> ������ 44��� <br>
<?php probel(72);?><input type=submit value="���������"></form>
</fieldset>

<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>����.</th><th>�����</th><th>�������</th><th>���</th><th>���</th><th>�����</th><th>����.</th><th>�������</th></tr>
</thead>
<tbody>
<?
//exit;
$total_In = 0;
$total_Out = 0;
$total_dur=0;

$profitfrom = isset($_POST['profitfrom'])?$_POST['profitfrom']:0;
if (!$profitfrom) $profitfrom = 0;
$profitto = isset($_POST['profitto'])?$_POST['profitto']:100000;
if (!$profitto) $profitto = 100000;

$durationfrom = isset($_POST['durationfrom'])?$_POST['durationfrom']:0;
if (!$durationfrom) $durationfrom = 0;
$durationto = isset($_POST['durationto'])?$_POST['durationto']:1000000;
if (!$durationto) $durationto = 1000000;

//echo "SELECT * FROM temp_user_data WHERE profit>'$profitfrom' AND profit<'$profitto' AND duration>'$durationfrom' AND duration<'$durationto' ORDER BY userlogin ";

$result= sql_do("SELECT * FROM temp_user_data WHERE profit>'$profitfrom' AND profit<'$profitto' AND duration>'$durationfrom' AND duration<'$durationto' ORDER BY userlogin ");

//echo " ����� ".mysql_num_rows($result);
//echo "<br>pn1=".$_POST['partnertype1']." -- pn2=".$_POST['partnertype2']." -- pn3=".$_POST['partnertype3']." -- pn4=".$_POST['partnertype4'];

while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
 $letshow = 0;

 if ($_POST['partnertype1'] &&  substr($row['userlogin'], 0, 1 ) == $_POST['partnertype1']  ) $letshow = true;
 if ($_POST['partnertype2'] &&  substr($row['userlogin'], 0, 1 ) == $_POST['partnertype2']  ) $letshow = true;
 if ($_POST['partnertype3'] &&  substr($row['userlogin'], 0, 1 ) == $_POST['partnertype3']  ) $letshow = true;
 if ($_POST['partnertype4'] &&  substr($row['userlogin'], 0, 1 ) == $_POST['partnertype4']  ) $letshow = true;
 if ( !$_POST['partnertype1'] && !$_POST['partnertype2'] && !$_POST['partnertype3'] && !$_POST['partnertype4']  ) $letshow = true;

     if ($letshow) {
			$userlogin = $row['userlogin'];
			$calls = $row['calls'];
			$in = $row['in'];
			$out = $row['out'];
			$profit = $row['profit'];
			$duration = $row['duration'];
			$row['origname'] = $row['origname'] ? $row['origname'] : '���';
		echo "<td>".$row['origname']."</td>";
		echo "<td><font size=2><a href='index.php?mode=by_partner&userlogin=".$userlogin."' title='���������� ���������� ��������'>".$userlogin."</a></td>";
		echo "<td>".$calls."</td>";
		echo "<td>".$duration."</td>"."<td>".ceil($duration/60)."</td>";
		echo "<td>".$in."</td>";
		echo "<td>".$out."</td>";
		echo "<td>".$profit."</td>";
		echo "</tr>";
		$total_dur=$total_dur + $duration;
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $out;
	  }

 }
 ?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="5"><div align="right">�����: ������������: <? echo $total_dur; ?> ���</div></th>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
 <?
echo "";

close_connection();


}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function remake_Total() ---------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function remake_Total($datefrom,$dateto){
 ignore_user_abort ();
 $q = "SELECT * FROM `dateoftotal` WHERE id='1'";
 $r = sql_do($q);
 $rowq = mysql_fetch_array($r, MYSQL_BOTH);
 if ($rowq['date'] < /* > */ (time()-3600*24)  ) {   //  > - ���������!!!!

 	$upd = "UPDATE `dateoftotal` SET `date` = ".time()." WHERE `id` =1";
	sql_do($upd);

	echo " -> ���� ��������....";
	$q1 = "DROP TABLE IF EXISTS `totaldata`";
	sql_do($q1);
	$q2 = "CREATE TABLE `totaldata` (  `id` bigint(20) NOT NULL auto_increment,  `date` text NOT NULL,  `origname` varchar(255) NOT NULL default '',  `userlogin` varchar(32) NOT NULL default '',  `code` varchar(8) NOT NULL default '',  `partner_num` varchar(20) NOT NULL default '',  `abon_number` varchar(32) NOT NULL default '',  `duration` bigint(32) NOT NULL default '0',  `in` float NOT NULL default '0',  `out` float NOT NULL default '0',   `l_out` float NOT NULL  default '0',  `a_out` float NOT NULL,  `profit` float NOT NULL default '0',   `frod` varchar(2) NOT NULL,   `session_id` varchar(255) NOT NULL,  `status` varchar(10) NOT NULL, PRIMARY KEY  (`id`)) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
	sql_do($q2);

	$result= sql_do("SELECT * FROM incoming  ORDER BY date desc");
	$total_dur=0;
	echo mysql_num_rows($result);
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){


		$called_number = $row['called_number'];
		$frod = $row['frod'];
		$session_id = $row['session_id'];
		$user_code = $row['user_code'];
		if($user_code) $uc =" AND code='$user_code'"; else  $uc ='';

		$res=sql_do("SELECT * FROM users_ivr WHERE redir_num='$called_number' ".$uc." ");
		$ro = mysql_fetch_array($res, MYSQL_BOTH) ;
		$row['userlogin'] = $ro['userlogin']?$ro['userlogin']:'&nbsp;';
		$userlogin = $ro['userlogin'];
		$ro['code'] = $ro['code'] ? $ro['code'] : $row['user_code'];


		$partner_num = $ro['partner_num'] ? $ro['partner_num'] : '&nbsp;';
		$partner_num = ($ro['partner_type'] != 3 && $ro['partner_type'] != 4)  ? $partner_num : 'call-center';
		$duration = $row['duration'];

		$called_number=$row['called_number'];
		$ro['origname'] = $ro['origname'] ? $ro['origname'] : '���';	//------------------------------------
		$in = ($ro['partner_type'] != 3 && $ro['partner_type'] != 4)  ?  CostIn($partner_num, $row['abon_number'], $duration, $called_number, $ro['type'], $row['date']) : CostInClient($partner_num, $row['abon_number'], $duration, $called_number);
		$out = ($ro['partner_type'] == 4) ? CostOutReCo($duration, $userlogin) : ( ($ro['partner_type'] != 3)  ?  CostOut($in, $row['date'], $partner_num, $row['abon_number'], $duration, $called_number, $ro['type'])  : CostOutClient($row['abon_number'], $duration, $row['date']) );
		$l_out = ($ro['partner_type'] == 4) ? CostOutReCo($duration, $userlogin) : ( ($ro['partner_type'] != 3)  ?  CostOutLight($in, $row['date'], $partner_num, $row['abon_number'], $duration, $called_number, $ro['type'])  : CostOutClient($row['abon_number'], $duration, $row['date']) );


		#-------------------------------STATUS-----------------------------#
		$queStatus = "SELECT * FROM `user_status` WHERE `userlogin` = '".$row['userlogin']."'  AND `start_date` <= '".$row['date']."'  AND `end_date` > '".$row['date']."'  ";
 		$resStatus = sql_do($queStatus);
		 	while ($rowStatus = mysql_fetch_array($resStatus, MYSQL_BOTH)){
				$status = $rowStatus['status'];
			}
		#-------------------------------STATUS END-------------------------#


		$statusout = ($status =='Active')? $out : $l_out;
		$qtot = "INSERT INTO `totaldata` ( `id` , `date` , `origname` , `userlogin` , `code` , `partner_num` , `abon_number` , `duration` , `in` , `out`, `l_out`, `a_out`, `profit`, `frod`, `session_id`,  `status` ) VALUES ('', '".$row['date']."', '".$ro['origname']."', '".$row['userlogin']."', '".$ro['code']."', '".$partner_num."', '".$row['abon_number']."', '".$duration."', '$in', '$statusout', '$l_out', '$out', '".($in - $statusout)."', '$frod' , '$session_id' , '$status'  )";
		sql_do($qtot);
		$total_dur=$total_dur+aprox($row['duration']);
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $statusout;

	}
 }

}









#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function stats_PrefixOLD()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function stats_PrefixOLD($datefrom,$dateto){

?><fieldset><legend>�� ���������</legend><?

	open_connection();
#	if ($_SERVER['SERVER_NAME'] != 'mcall.ru1') remake_Total($datefrom,$dateto);

?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="prefix_old">

������� � <input name="profitfrom" type="text" size="6" value="<?php echo $profitfrom = isset($_POST['profitfrom'])?$_POST['profitfrom']:0; ?>"> �� <input name="profitto" type="text" size="6" value="<?php echo $profitto = isset($_POST['profitto'])?$_POST['profitto']:100000; ?>"> ������<br>

������� � <input name="durationfrom" type="text" size="6" value="<?php echo $durationfrom = isset($_POST['durationfrom'])?$_POST['durationfrom']:0; ?>"> �� <input name="durationto" type="text" size="6" value="<?php echo $durationto = isset($_POST['durationto'])?$_POST['durationto']:1000000; ?>"><br>


 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>
</fieldset>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>����</th><th>����.</th><th>�����</th><th>�������</th><th>�������.</th><th>�������.</th><th>���</th><th>���</th><th>�����</th><th>����.</th><th>�������</th></tr>
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

$result= sql_do("SELECT * FROM totaldata WHERE profit>='$profitfrom' AND profit<='$profitto' AND duration>='$durationfrom' AND duration<='$durationto' AND date>'$datefrom' AND date<'$dateto'  ORDER BY userlogin, date desc");
$total_dur=0;
$total_mins=0;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){


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
		echo "<tr> <td width='140px'>".$row['date']."</td>";
		echo "<td>".$row['origname']."</td>";
		echo "<td><font face='Arial' size=2 color='#ffffff'><a href='index.php?mode=by_partner&userlogin=".$row['userlogin']."' title='���������� ���������� ��������'>".$row['userlogin']."</a></td>";
		echo "<td>".$row['code']."</td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['abon_number']."</td>";
		echo "<td>".$duration."</td>"."<td>".($mins = ceil($duration/60))."</td>";
		echo "<td>".$in."</td>";
		echo "<td>".$color.$out."</font></td>";
		echo "<td>".$profit."</td>";
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
  <th colspan="7"><div align="right">�����: ������������: <? echo $total_dur; ?> ���</div></th>
  <td><? echo $total_mins; ?>�</td>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
 <?
echo "";

close_connection();


}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CrateTempUsersData()  ------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CrateTempUsersData ($datefrom,$dateto){
 $q = "DROP TABLE IF EXISTS `temp_user_data`";
 sql_do($q);
 $q = "CREATE TABLE `temp_user_data` (  `id` bigint(20) NOT NULL auto_increment,  `origname` varchar(255) NOT NULL default '',  `userlogin` varchar(32) NOT NULL default '', `calls` bigint(20) NOT NULL default '0',  `duration` bigint(32) NOT NULL default '0',  `in` float NOT NULL default '0',  `out` float NOT NULL default '0',  `profit` float NOT NULL default '0',   `outwithfrod` float NOT NULL default '0',   PRIMARY KEY  (`id`)) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
 sql_do($q);


 $qusers = "SELECT userlogin, origname FROM `users_ivr` WHERE  userlogin != '' ORDER BY userlogin ";
 $resultusers= sql_do($qusers);
 while ($rowusers = mysql_fetch_array($resultusers, MYSQL_BOTH)){
	$userlogin = $rowusers['userlogin'];
	$origname = $rowusers['origname'];
	if (strlen($userlogin)<5) continue;


	$result= sql_do("SELECT * FROM totaldata WHERE  date>'$datefrom' AND date<'$dateto'  AND userlogin = '$userlogin'  ORDER BY date desc");

//echo "SELECT * FROM totaldata WHERE  date>'$datefrom' AND date<'$dateto'  AND userlogin = '$userlogin'  ORDER BY date desc  = ".mysql_num_rows($result)."<br>";


	$total_dur=0;
	$total_In = 0;
	$total_Out = 0;
	$total_Profit = 0;
	$total_Outwithfrod = 0;
	$i = 0;
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

			$in = $row['in'];
			$frod = $row['frod'];
			$out = $row['out'];
			$profit = $row['profit'];
			$duration = $row['duration'];
		$total_dur=		$total_dur + 	$duration;
		$total_In = 	$total_In + 	$in;
		$total_Out = 	$total_Out + 	$out;
		$total_Profit = $total_Profit + $profit;
		if (!$frod) $total_Outwithfrod = $total_Outwithfrod + $out;
		$i++;
 	}//    while ($row = mysql_fetch_array($result, MYSQL_BOTH))

#		echo "INSERT INTO `temp_user_data` ( `id` , `origname` , `userlogin` , `calls` ,  `duration` , `in` , `out` , `profit` ) VALUES ('', '$origname', '$userlogin', '$i', '$duration', '$in', '$out', '$profit')<br>";

		sql_do("INSERT INTO `temp_user_data` ( `id` , `origname` , `userlogin` , `calls` ,  `duration` , `in` , `out` , `profit`, `outwithfrod` ) VALUES ('', '$origname', '$userlogin', '$i', '$total_dur', '$total_In', '$total_Out', '$total_Profit', '$total_Outwithfrod')");

 } //      while ($rowusers = mysql_fetch_array($resultusers, MYSQL_BOTH))


}








#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function stats_abonent()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function stats_abonent($datefrom,$dateto){

?><fieldset><legend>�� ���������</legend><?

	open_connection();
#	if ($_SERVER['SERVER_NAME'] != 'mcall.ru1') remake_Total($datefrom,$dateto);

?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="poisk">

������� ����� ��������:  <input name="abon_number" type="text" value="<?php echo $abon_number = isset($_POST['abon_number'])?$_POST['abon_number'] : ''; ?>" size="9" maxlength="10">
 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>  10 ���� ��� ��������!
</fieldset>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>����</th><th>����.</th><th>�����</th><th>�������</th><th>�������.</th><th>�������.</th><th>���</th><th>���</th><th>�����</th><th>����.</th><th>�������</th></tr>
</thead>
<tbody>
<?
//exit;
$total_In = 0;
$total_Out = 0;

$abon_number = isset($_POST['abon_number'])?$_POST['abon_number']:'';
if (!$abon_number) $abon_number = '';

//echo "SELECT * FROM totaldata WHERE abon_number = '$abon_number' AND date>'$datefrom' AND date<'$dateto'  ORDER BY userlogin, date desc";

$result= sql_do("SELECT * FROM totaldata WHERE abon_number = '$abon_number' AND date>'$datefrom' AND date<'$dateto'  ORDER BY userlogin, date desc");
$total_dur=0;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){


			$called_number = $row['called_number'];
			$user_code = $row['user_code'];
			$userlogin = $row['userlogin'];

			$in = $row['in'];
			$out = $row['out'];
			$profit = $row['profit'];


			$partner_num = $row['partner_num'] ? $row['partner_num'] : '&nbsp;';
			$duration = $row['duration'];
			$called_number=$row['called_number'];
		echo "<tr> <td width='140px'>".$row['date']."</td>";
		echo "<td>".$row['origname']."</td>";
		echo "<td><font face='Arial' size=2 color='#ffffff'><a href='index.php?mode=by_partner&userlogin=".$row['userlogin']."' title='���������� ���������� ��������'>".$row['userlogin']."</a></td>";
		echo "<td>".$row['code']."</td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['abon_number']."</td>";
		echo "<td>".$duration."</td>"."<td>".ceil($duration/60)."</td>";
		echo "<td>".$in."</td>";
		echo "<td>".$out."</td>";
		echo "<td>".$profit."</td>";
		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']);
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $out;


 }
 ?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="8"><div align="right">�����: ������������: <? echo $total_dur; ?> ���</div></th>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
 <?
echo "";

close_connection();


}









#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function probel()  ------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function probel($times){
for ($i=0;$i<$times;$i++) {echo '&nbsp;';}
}


#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function profdirect()  ------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function profdirect(){
 $table='origname';
 include('AnyView.php');
}





#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function Regs()  -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------



function Regs($datefrom,$dateto){

	open_connection();
?>
<fieldset><legend>�� ID</legend>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="regs">
<input type="hidden" name="by" value="ai_di">

������� ID �������:  <input name="id" type="text" value="<?php echo $id = isset($_POST['id'])?$_POST['id'] : ''; ?>" size="12" maxlength="20">
<input type=submit value="���������">
</form>
</fieldset>

<fieldset><legend>�� �������</legend>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="regs">
<input type="hidden" name="by" value="familiya">

������� ������� �������:  <input name="fio" type="text" value="<?php echo $fio = isset($_POST['fio'])?$_POST['fio'] : ''; ?>" size="12" maxlength="20">
<input type=submit value="���������">
</form>
</fieldset>

<fieldset><legend>�� ����</legend>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="regs">
<input type="hidden" name="by" value="days">


 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>
<?php
		if ($_GET['action'] == 'delete')  {
			sql_do("DELETE FROM registration WHERE user_id = ".$_GET['user_id']);
			echo "<font color=#ff0000>������ ������� ������!</font><br>";
		}
?>
</fieldset>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>ID</th><th>���� ����������</th><th>���</th><th>������</th><th>�������������</th><th>��/���</th><th>Mail</th><th>WM</th><th>�-�</th><th>���</th><th>�</th><th>��</th><th>��������</th></tr>
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

$result= sql_do("SELECT * FROM registration WHERE ".$query);
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

		$status = $row['condition'] ? '��������' : '�������� ���������' ;

		echo "<tr> <td width='140px'>".$row['id']."</td>";
		echo "<td>".$row['filledin'].' '.$row['filledin_hm']."</td>";
		echo "<td><a href='index.php?mode=client&user_id=".$row['user_id']."' title='���������� ������ �������'>".$row['fio']."</a></td>";
		echo "<td>".$status."</td>";
		echo "<td>".($row['origname'] == '' ? "&nbsp;" : $row['origname'] )."</td>";
		echo '<td>'.$row['type'].'</td>';
		echo '<td><a href="mailto:'.$row['mail'].'">��������</a></td>';
		echo "<td>".($row['wmpurse'] == '' ? "&nbsp;" : $row['wmpurse'] )."</td>";
		echo "<td>".($row['redir_num'] == '9012029438' ?  2 : 1  )."</td>";
		echo '<td>'.$row['partner_num'].'</td>';
		echo '<td>'.$row['vremya1'].'</td>';
		echo '<td>'.$row['vremya2'].'</td>';
		echo "<td><a href='index.php?mode=regs&action=delete&user_id=".$row['user_id']."' title='������� ����������� �������'>�������</a></td>";
		echo "</tr>";

 }
 ?>
 </tbody>
</table>
 <?
echo "";

close_connection();


}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function clientReg()     ------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

// ������ ���������� �� ���������� �������
function clientReg(){
	open_connection();

 	$result = sql_do("SELECT * FROM registration WHERE user_id='".$_GET['user_id']."'");
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

 include('includes/anketa_newclient.php');   // wmpurse
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function ClientEdit()     ------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

// ������ ���������� �� ���������� �������
function ClientEdit ( $userloginfirst,$newcode,$pass_hash,$fio,$mail,$icq,$tele_contact,$additional,$redir_num,$partner_num,$code,$excode, $vremya1, $vremya2, $origname_list, $change_radio, $origname_new, $sday, $smonth, $syear, $eday, $emonth, $eyear, $type,  $wmpurse, $activationdate, $activationtime){

$tarif = 			$_POST['tarif'];
$okrug = 			$_POST['okrug'];
$id = 				$_POST['id'];
$filledin = 		$_POST['filledin'];
$filledin_hm = 		$_POST['filledin_hm'];
$camefrom = 		$_POST['camefrom'];

$userlogin = $_POST['userlogin111'];
if (!$userloginfirst) $userloginfirst = substr($_POST['userlogin111'],0,1);
$condition = 	$_POST['condition'];

$origname = ( $_POST['change_radio'] == 'professionlist' )?  $_POST['origname_list']  : $_POST['origname_new']  ;

 if (!$condition && $_POST['activate']) echo $userlogin = $userloginfirst.$newcode;
	/* echo "<br>newcode = ".$newcode;
	echo  "<br>post = ".$_POST['newcode']; */
	echo '<br>';
 if ( ($newcode <= 3100 || $newcode > 3199) && (!$condition && $_POST['activate']) ) {
  	echo "<br><br>�� ������� ������� ����� $userlogin, ��� ��� ������ �������� ������ ��������!!!";
	exit;
 }
 else {
	open_connection();

	if (!$condition && $_POST['activate']) { #----------------   ��������� ��� ������������� � ������� "������������"


	if ($userloginfirst==2) $redir_num = '9012029438';
	elseif ($userloginfirst==3) $redir_num = '9012029438';
	elseif ($userloginfirst==1) $redir_num = '9012028013';
	else  $redir_num = '';

	$result=sql_do("SELECT userlogin from users_ivr WHERE code='$newcode'");
	if (mysql_num_rows($result) < 2) {
			if (mysql_num_rows($result)==1) {
				$row = mysql_fetch_array($result, MYSQL_BOTH);
				if($row['userlogin'] == $userlogin) {
					echo "<br><br>������� � ������� $userlogin ���  ����������!!! <br><br><a href='index.php?mode=partners'>�����</a>";
					exit;
				}
			}

			$res = sql_do("INSERT INTO `users_ivr` ( `user_id` , `userlogin` , `pass_hash` , `fio` , `mail` , `icq` , `tele_concact` , `additional` , `code` , `redir_num` , `vremya1` , `vremya2` , `partner_type`, `type`, `wmpurse`, `activationdate`, `activationtime`  ) VALUES ('', '$userlogin', '', '', '', '', '', '', '$newcode', '$redir_num', '0', '0', '$userloginfirst', '$type', '$wmpurse', '$activationdate', '$activationtime' )");
			if(!$res) {
				echo "<br><br>�� ������� ������� ����� $userlogin !!!";
				exit;
			}
			else  {
				echo "<br><br>����� $userlogin ������� ������.<br>";
				$start_date = make_date_c('from');
				$end_date = make_date_c('to');
				echo $period = substr($start_date, 0, 7);
				echo "<br>";
				echo $month = substr($start_date, 5, 2);
				echo "<br>";
				echo $year = substr($start_date, 0, 4);
				$resqq = sql_do("INSERT INTO `user_status` ( `id` , `userlogin` , `start_date` , `end_date` , `period` , `month` , `year` , `seconds` , `activated` , `status` ) VALUES ( '', '$userlogin', '$start_date', '$end_date', '$period', '$month', '$year', '', '$activationdate', '')");
				if(!$resqq) {
					echo "<br><br>�� ������� �������� � user_status  ����� $userlogin !!!<br>INSERT INTO `user_status` ( `id` , `userlogin` , `start_date` , `end_date` , `period` , `month` , `year` , `seconds` , `activated` , `status` ) VALUES ( '', '$userlogin', '$start_date', '$end_date', '$period', '$month', '$year', '', '$activationdate', '')<br>";
					//exit;
				} else echo "<br><br>!!!$$$ ������� �������� � user_status  ����� $userlogin !!!<br>";

			}
	}
	else {
		echo "<br>�� ������� ������� ����� $userlogin !!!<br>��������� � ��������� $newcode ��� ���!!! <br><br><a href='index.php?mode=partners'>�����</a>";
		exit;
	}
$condition = 1;

	if ($pass_hash) {
		$pwd = $pass_hash;
		$pass_hash = md5($pass_hash); // ������� ����� ������   partner_num    type    //
		$res = sql_do("UPDATE users_ivr SET  pass_hash='$pass_hash', fio='$fio', mail='$mail', icq='$icq', tele_concact='$tele_contact', 	additional='$additional', redir_num='$redir_num', partner_num='$partner_num',  vremya1='$vremya1', vremya2='$vremya2', origname='$origname', startdate='$startdate', enddate='$enddate'  WHERE userlogin='$userlogin'");
	}
	else { // ��������� ������ ������
		$res = sql_do("UPDATE users_ivr SET  fio='$fio', mail='$mail', icq='$icq', tele_concact='$tele_contact', 	additional='$additional', redir_num='$redir_num', partner_num='$partner_num', vremya1='$vremya1', vremya2='$vremya2', origname='$origname', startdate='$startdate', enddate='$enddate'  WHERE userlogin='$userlogin'");
	}

	if(!$res){
		echo "�� ������� �������� ������ � ������� ����������� ��������.";
		exit;
	}
	else {
		echo "������ ������� ���������  � ������� ����������� ��������.<br>";
		/***********************************************************************/
		require "../include/class_email.php";
		$email = new emailer;
				$email->subject = "��� ����� �� ".$_SERVER["SERVER_NAME"];
				$email->to      = $mail.', admin@mcall.ru';
				$email->from    = "info@".$_SERVER["SERVER_NAME"]; //info@mcall.ru
#				$email->message	= "��� ����� ".$userlogin."<br>��� ������ ".$pwd;



				$email->message	= '
������������, '.$fio.'!<br><br>

<b>���� ��������, ��� ��� ����� ���������! </b><br><br>

��� ����� ������ ��� ������� �������� ����� '.($userloginfirst==1 ? '07278'  :  '07223' ).' . � ��������� ����������
��� ���������� ��������� ��������� ������:<br>
<br>
             - �������� ����� - '.($userloginfirst==1 ? '07278'  :  '07223' ).' <br>
             - ���������� �����  '.$newcode.'#   ;<br><br>

             - ������ �������. '.$userloginfirst.'��/������ (��� ���). ������ ��������� ��������� � ������ ���������;<br><br>

             - ������������ ������ ����������� ��������� � ������� �������;<br><br>

             - ������ ������ ������� � '.$vremya1.'-00 �� '.$vremya2.'-00 (�� ����������� �������). <br><br>



��� �����  ��� ����� � ������ ������� �� ����� <a href="http://mcall.ru/" target="_blank">http://mcall.ru/</a>  - '.$userlogin.', ������ - '.$pwd.' <br>

<br>
���� ����� ��������� �����-�� ����������� �������� ��� ������ � ��������� ������, �� �� ������  ��������������� �������� - <a href="http://m-call.ru/" target="_blank">http://m-call.ru/</a> <br>
<br>

����� ������� �������������� ������ ������ ��������, � ������ �� ������ ���������� � ������. ������������ ����������� ��� ����� �������������� ��� �������������� �� ��������� �������� ��� �������������.<br>
��������: ����� �������� ������ ������������� ����� ��������� ���������� �����! ���� � �������� ������������ ������ ������ �������� �� ����������� � ����������, ������� ������� �� ��� �������� ���� ��������� ����������: <br>
�������� ����� � ������� ������� ��������, <br>
���� � ����� ������, <br>
��������� ������� ����� ����� ��������, <br>
���������� ����� � �������� ��������� �����, � �������� ��� �������� �������� �����. <br>
������ ��� ������� �������������� ������ ���������� �� ������� ����������� ������ � ���������� ��������� �������� ������ ��������.<br>
������������ ����������� �� ������������ �������������, ������������ ��� ��������� ����� ��� ������ � ����� ��������. ���� �� �� ������ ���������� �� ��� ������, ���������� � ����������� ������ ������ ��������� ��������� �����.
<br><br>

�������� ��� ��������� ��� ����� ����� �������� ��������� ��������, ����� ���������������� ����� ������ ����� ������. �� ����������� ��� ������������ ����� ���� ������� ���: ����-�������, ��������� � ������������ ������� � �������� ������.������, Google Adwords � �����, ������� ����� ����� �� ������� � ������ ����������, ������� � ������� ������� ����������, � ����� ����� ������ ��������� ��� ����� �������.<br>
<br>
���� �� ��� �� ��������� ����������� ��������, �� �������� ��� ������� ��� � ��������� �����. ����������� �� �������� "����������" ������ �����: <a href="http://mcall.ru/instr.php" target="_blank">http://mcall.ru/instr.php</a><br>
<br>
��� �� ��������� ������ ��� ���������� ����������:<br>
<br>
����� ���������� - ��� ��� ������� ����� ������� ������������, ������������ <br>
� ������� �������, �.�. ���� �����������, ��� ���������� ����� <br>
��������������� � �� ������ ������.<br>
<br>
<a href="http://www.slando.ru" target="_blank">http://www.slando.ru</a> - ����� ���������� ���������� ��� ����������� - ����� <br>
������� ������, ��������, ������� ������ �����.<br>
<br>
<a href="http://doska.us" target="_blank">http://doska.us</a> - ����� ���������� ���������� ��� ����������� - ���������� <br>
������� � ����� ����� ����������.<br>
<br>
<a href="http://www.vsedoski.ru" target="_blank">http://www.vsedoski.ru</a> - ����� ���������� ���������� ��� �����������, <br>
����������� ����� ����������, �� ���� ���������� ����������� ��������, ���� <br>
���������� ����������.<br>
<br>
<a href="http://board.forenet.info" target="_blank">http://board.forenet.info</a> - ������������ ���� ����� ��������<br>
<br>
<a href="http://www.vtorgrad.ru" target="_blank">http://www.vtorgrad.ru</a> - ����� ���������� ����������<br>
<br>
�����<br>
<br>
<a href="http://www.forum-opros.ru" target="_blank">http://www.forum-opros.ru</a> - �����������, ����� ����� �������� ���������� �� <br>
������ � ������� ��� ����, ����� �������� ���� ����.<br>
<br>
������ ��� �������� ������!!!<br>
<br>
<b>���� � ��� �������� �������, ����������, ��������� � ����:<br>
<br>
</b> ����� ���� <br>
�������� �� ������ � ��������� <br>
ICQ: 466-164-103 <br>
E- mail: <a href="mailto:info@mcall.ru" target="_blank">info@mcall.ru</a> <br>
���/����.:+7(499)503-10-18 <br>
117513, ������, ��������� ��-�, ��� 123 ����.3<br>
<a href="http://mcall.ru/" target="_blank">http://mcall.ru/</a><br>
<br>
<font face="Arial" size="2">� ���������, ������� ��� </font>�������';



				$email->html_email = 1;
				$email->char_set = 'windows-1251';
				$email->send_mail();
		/***********************************************************************/
	}

} #--------------------------------------------------------   if (!$condition && $_POST['activate'])
//
	$user_id = 		$_POST['user_id'];

	/* echo */ $qq = "UPDATE `registration` SET  `condition` = '$condition', `additional` = '$additional', `partner_type` = '$userloginfirst', `origname` = '$origname', `userlogin` = '$userlogin', `code` = '$newcode', `pass_hash` = '$pass_hash', `wmpurse` = '$wmpurse', redir_num='$redir_num', partner_num='$partner_num', vremya1='$vremya1', vremya2='$vremya2',     `fio` = '$fio', `mail` = '$mail', `icq` = '$icq', `tele_concact` = '$tele_contact', `type` = '$type', `tarif` = '$tarif', `okrug` = '$okrug', `id` = '$id', `filledin` = '$filledin', `filledin_hm` = '$filledin_hm', `camefrom` = '$camefrom' 	  WHERE `user_id` = '$user_id'";
	$ress2 = mysql_query($qq)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qq."<BR>");


	if(!$ress2){
		echo "�� ������� �������� ������ � ������� �����������.";
		exit;
	}
	else echo "������ ������� ���������  � ������� �����������.";

 	close_connection();
 } // else

//phpinfo(32);
}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function RegStat()  -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------



function RegStat ($datefrom,$dateto){
  open_connection();
?>
<fieldset><legend>�������:</legend>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="reg_stat">
<fieldset><legend>��������:</legend>
<?php /* <input name="cmfr_0" type="checkbox" value="1" checked>�� ����� �������� <br> */?>
<input name="cmfr_poiskoviki" type="checkbox" value="1">���������� <br>
<input name="cmfr_yadir" type="checkbox" value="1">������-������ <br>
<input name="cmfr_begun" type="checkbox" value="1">����� <br>
<input name="cmfr_other" type="checkbox" value="1">������ ��������� <br>
<input name="cmfr_ns" type="checkbox" value="1">�������������� �������� <br>
</fieldset>
<?php
//MakeCheckboxList ("camefrom", "��������", "");
MakeCheckboxList ("origname", "�������������", "������ �����������");
MakeCheckboxList ("okrug", "������", "");
MakeCheckboxList ("tarif", "�����", "");
MakeCheckboxList ("type", "����������� ������",  "");

?>
<fieldset><legend>������:</legend>
� <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?>
</fieldset>
<input type=submit value="���������">
</form>
</fieldset>

<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellpadding="1" cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>N</th><th>���� �����������</th><th>��������</th><th>�������������</th><th>������</th><th>�����</th><th>������</th></tr>
</thead>
<tbody>
<?
$and = " AND ";
$or = " OR ";
#--------------------------------------------------������������ ��������----------------------------------
$q_po = ''; $q_ya = ''; $q_be = ''; $q_ot = ''; $q_ns = '';
$cmfr_0 = isset($_POST['cmfr_0'])?$_POST['cmfr_0']:'';
 if ($cmfr_0) $q_cmfr = 'user_id > 0';
 else {
	if($cmfr_poiskoviki = isset($_POST['cmfr_poiskoviki'])?$_POST['cmfr_poiskoviki']:'') {$q_po = " ( camefrom  LIKE  'yandex' OR camefrom  LIKE  'rambler' OR camefrom  LIKE  'google' OR camefrom  LIKE  'yahoo' OR camefrom  LIKE  'mail' ) " . (($_POST['cmfr_yadir'] || $_POST['cmfr_ns'] || $_POST['cmfr_begun'] /*  || $_POST['cmfr_other'] */)?$or:'');}// �������������� ���� ��� ������
	if($cmfr_yadir = isset($_POST['cmfr_yadir'])?$_POST['cmfr_yadir']:'') {$q_ya = " ( camefrom  LIKE  'yandex_direct' ) " . (($_POST['cmfr_ns']  || $_POST['cmfr_begun'] /* || $_POST['cmfr_other'] */)?$or:'');}// �������������� ���� ��� ������
	if($cmfr_begun = isset($_POST['cmfr_begun'])?$_POST['cmfr_begun']:'') {$q_be = " ( camefrom  LIKE  'begun' ) " . (($_POST['cmfr_ns'] /*  || $_POST['cmfr_other'] */)?$or:'');}// �������������� ���� ��� ������
	if($cmfr_other = isset($_POST['cmfr_other'])?$_POST['cmfr_other']:'') {$q_ot = "";}#  ���� �� ���������, ����� �������� ��������� OR
	if($cmfr_ns = isset($_POST['cmfr_ns'])?$_POST['cmfr_ns']:'') {$q_ns = " ( camefrom  LIKE  'N/S' OR camefrom  LIKE  '' )";}
// 	 echo
	$q_cmfr = $q_po . $q_ya . $q_be . $q_ot . $q_ns;
// 	echo "<br>";
	 if (!$q_cmfr) $q_cmfr = 'user_id > -2';
	 else 	$q_cmfr = " (" . $q_po . $q_ya . $q_be . $q_ot . $q_ns . ") ";


 }
#-------------------------------------------END-------������������ ��������------------------------------------


#--------------------------------------------------������������ ��������----------------------------------
//$q_origname = MakeCheckboxQuery ("camefrom", "��������");
#------------------------------------------END-----������������ ��������----------------------------------

#--------------------------------------------------������������ �������������----------------------------------
$q_origname = MakeCheckboxQuery ("origname", "�������������");
#------------------------------------------END-----������������ �������������----------------------------------

#--------------------------------------------------������������ ������-----------------------------------------
$q_okrug = MakeCheckboxQuery ("okrug", "������");
#------------------------------------------END-----������������ ������-----------------------------------------

#--------------------------------------------------������������ �����-----------------------------------------
$q_tarif = MakeCheckboxQuery ("tarif", "�����");
#------------------------------------------END-----������������ �����-----------------------------------------

#--------------------------------------------------������������ ����������� ������----------------------------------
$q_type = MakeCheckboxQuery ("type", "����������� ������");
#------------------------------------------END----- ����������� ������----------------------------------------------



$q_date = " ( filledin>='$datefrom' AND filledin<='$dateto' )";


$count = 1;
//echo "<br><br>";
//    echo
$qqq = "SELECT * FROM registration WHERE ". $q_date  . " AND "   . $q_cmfr . " AND " . $q_origname . " AND " . $q_okrug. " AND " . $q_tarif . " AND " . $q_type . " ORDER BY filledin desc, filledin_hm desc";

$result= @mysql_query ($qqq) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query."<BR>");
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

		$status = $row['condition'] ? '��������' : '�������� ���������' ;

		echo "<tr><td> ".$count."</td>";
		echo "<td> ".$row['filledin']."</td>";
		echo "<td> ".($row['camefrom']?$row['camefrom']:'��� ������')."</td>";
		echo "<td> ".($row['origname']?$row['origname']:'������ �����������')."</td>";
		echo "<td> ".$row['okrug']."</td>";
		echo '<td align="center"> '.$row['tarif'].'</td>';
		echo "<td> ".$status."</td>";
		echo "</tr>";
		$count++;

 }
 ?>
 </tbody>

  <tfoot>
<tr>
  <th colspan="7"><div align="right">����� �����������: <? echo ($count - 1); ?></div></th>
</tr>
</tfoot>


</table>
 <?
echo "";

close_connection();


}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function MakeCheckboxList()----------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function MakeCheckboxList ($tabname, $nazvanie, $first){
 echo "<fieldset><legend>".$nazvanie.":</legend>";
 if($first) echo '<input name="'.$tabname.'_0" type="checkbox" value="1" >'.$first.'<br>';

	  $q_origname = "SELECT * FROM ".$tabname." ORDER BY ".$tabname."_name";
	  $resq_origname = @mysql_query ($q_origname) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q_origname."<BR>");
//	  $orig_num = mysql_num_rows($resq_origname);
 	while ($roworigname = mysql_fetch_assoc($resq_origname))
	{
		echo '<input name="'.$tabname.'_'.$roworigname['id_'.$tabname].'" type="checkbox" value="1">'.$roworigname[$tabname.'_name'].'<br>';
	}

 echo "</fieldset>";

return '';
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function MakeCheckboxQuery()-------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function MakeCheckboxQuery ($tabname, $nazvanie){

$and = " AND ";
$or = " OR ";

	  $q_origname = "SELECT * FROM ".$tabname." ORDER BY ".$tabname."_name";
	  $resq_origname = @mysql_query ($q_origname) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q_origname."<BR>");
//	  $orig_num = mysql_num_rows($resq_origname);
 	while ($roworigname = mysql_fetch_assoc($resq_origname))
	{
		$origname_name[$roworigname['id_'.$tabname]] = $roworigname[$tabname.'_name'] ;
	}

#--------------------------------------------------������������ ----------------------------------
// $result22 = sql_do("SELECT id_".$tabname." FROM ".$tabname."  ORDER BY id_".$tabname." DESC");
$ee = "SELECT id_".$tabname." FROM ".$tabname."  ORDER BY id_".$tabname." DESC";
$result22 =  @mysql_query ($ee) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$ee."<BR>");
$row22 = mysql_fetch_array($result22, MYSQL_BOTH);
$orig_num = $row22['id_'.$tabname.''];
for ($i=0;$i<=$orig_num;$i++) {
	$orig_POST_var[$i] = "".$tabname."_".$i;	#  ������� ������ �������� ���������� POST
	$$orig_POST_var[$i] = ""; 				#  ������ ��� ������� ������� ��������
}
	$q_origname = '';
 	for ($i=0;$i<=$orig_num;$i++) {   																					# 1
		$dobavim  = '';
		if($$orig_POST_var[$i] = isset($_POST[$orig_POST_var[$i]])  ?  $_POST[$orig_POST_var[$i]]  :  ''  ) {
			for( $j=$orig_num; $j>$i; $j-- ){// ��������� OR ��� ���
				if (!$dobavim) $dobavim  =  $_POST[$orig_POST_var[$j]]  ?  $or  :  ''  ;
			}
			$qorig[$i] = " (".$tabname."  LIKE  '".$origname_name[$i]."') " . $dobavim   ;
		}
		else $qorig[$i] = "" ;
		$q_origname .= $qorig[$i];
	}																													# 1
 if (!$q_origname) $q_origname = ' user_id > -1 ';
 $q_origname = '('.$q_origname.')';
#------------------------------------------END-----������������ ----------------------------------

//echo "SELECT * FROM registration WHERE ".$q_origname."<br>";


return $q_origname;
}





#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function NewStats_PROF()  -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------



function NewStats_PROF($datefrom,$dateto){
	open_connection();

?>
<fieldset><legend>���������� ���������������</legend>

<form action="<?=$_SERVER['PHP_SELF']?>" method="GET"><input type="hidden" name="mode" value="profdirect"><input type=submit value="���������"></form>
</fieldset><br>
<fieldset><legend>����� ���������� �������� IVR �� ��������������</legend>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="profession">

<?
 	$result = sql_do("SELECT * FROM origname WHERE origname_name != ''  ORDER BY origname_name");
?>

�������� �������������:
	<select name="origname">
	<option value="" <? if(!isset($_POST['origname'])) echo ' selected' ?>>��� �������������</option>
<?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?>
			<option value="<?=$row['origname_name'];?>" <? if($_POST['origname']==$row['origname_name']) echo ' selected' ?>><?=$row['origname_name'];?></option>
		<?
	}
?>

	</select><br>

 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>
</fieldset>
<?php
if (isset($_POST['origname'])){
?>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>N</th><th>����</th><th>����.</th><th>�����</th><th>�������</th><th>�������.</th><th>�������.</th><th>���</th><th>���</th><th>�����</th><th>����.</th><th>�������</th></tr>
</thead>
<tbody>
<?
$total_In = 0;
$total_Out = 0;
$total_dur=0;
$count = 1;
$origname = isset($_POST['origname']) ? $_POST['origname'] : '';

$result= sql_do("SELECT * FROM totaldata WHERE  date>'$datefrom' AND date<'$dateto' AND origname = '$origname' ORDER BY userlogin, date desc");
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){


			$called_number = $row['called_number'];
			$user_code = $row['user_code'];
			$userlogin = $row['userlogin'];

			$in = $row['in'];
			$out = $row['out'];
			$profit = $row['profit'];


			$partner_num = $row['partner_num'] ? $row['partner_num'] : '&nbsp;';
			$duration = $row['duration'];
			$called_number=$row['called_number'];
		echo "<tr> <td>".$count."</td>";
		echo "<td width='140px'>".$row['date']."</td>";
		echo "<td>".$row['origname']."</td>";
		echo "<td><a href='index.php?mode=by_partner&userlogin=".$row['userlogin']."' title='���������� ���������� ��������'>".$row['userlogin']."</a></td>";
		echo "<td>".$row['code']."</td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['abon_number']."</td>";
		echo "<td>".$duration."</td>"."<td>".ceil($duration/60)."</td>";
		echo "<td>".$in."</td>";
		echo "<td>".$out."</td>";
		echo "<td>".$profit."</td>";
		echo "</tr>";
		$count++;
		$total_dur=$total_dur+aprox($row['duration']);
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $out;


 }








 ?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="9"><div align="right">�����: ������������: <? echo $total_dur; ?> ���</div></th>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
 <?
 } //   -------------------------if (isset($_POST['origname']))
echo "";

close_connection();


}


#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function Analys_PROF()  -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------



function Analys_PROF($datefrom,$dateto){
	open_connection();
	CrateTempProfessionData ($datefrom,$dateto);



?>
<fieldset><legend>��������� ���������� �������� IVR �� ��������������</legend>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="professionanalys">

<?

MakeCheckboxList ("origname", "������������� (�� ������� - ���)", "");

#--------------------------------------------------������������ �������������----------------------------------
 /* echo */ $q_origname = MakeCheckboxQuery ("origname", "�������������");
#------------------------------------------END-----������������ �������������----------------------------------
?>
 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?> <input type=submit value="���������">
</form>
</fieldset>
<?php
//if (isset($_POST['origname'])){
?>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>N</th><th>����.</th><th>�����.</th><th>���</th><th>���</th><th>�����</th><th>����.</th><th>�������</th></tr>
</thead>
<tbody>
<?
$total_In = 0;
$total_Out = 0;
$total_dur=0;
$total_calls = 0;
$count = 1;
$origname = isset($_POST['origname']) ? $_POST['origname'] : '';

//echo "SELECT * FROM temp_profession_data WHERE ".$q_origname."  ORDER BY origname";

$result= sql_do("SELECT * FROM temp_profession_data WHERE ".$q_origname."  ORDER BY origname");
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){


			$calls = $row['calls'];
			$duration = $row['duration'];

			$in = $row['in'];
			$out = $row['out'];
			$profit = $row['profit'];


			$partner_num = $row['partner_num'] ? $row['partner_num'] : '&nbsp;';
			$duration = $row['duration'];
			$called_number=$row['called_number'];
		 echo "<tr> <td>".$count."</td>";
		echo "<td>".$row['origname']."</td>";
		echo "<td>".$calls."</td>";
		echo "<td>".$duration."</td>"."<td>".ceil($duration/60)."</td>";
		echo "<td>".$in."</td>";
		echo "<td>".$out."</td>";
		echo "<td>".$profit."</td>";
		echo "</tr>";
		$count++;
		$total_dur=$total_dur+$duration;
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $out;
		$total_calls = $total_calls + $calls;
 }
 ?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="3"><? echo "&nbsp;"; ?></th>
  <th ><? echo $total_calls; ?></th>
  <th ><? echo $total_dur; ?></th>
  <th><div align="right"><? echo $total_In; ?>p</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo ($total_In - $total_Out); ?>p</div></th>
</tr>
</tfoot>
</table>
 <?
// } //   -------------------------if (isset($_POST['origname']))
echo "";

close_connection();


}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CrateTempProfessionData()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CrateTempProfessionData ($datefrom,$dateto){
 $q = "DROP TABLE IF EXISTS `temp_profession_data`";
 sql_do($q);
 $q = "CREATE TABLE `temp_profession_data` (  `user_id` bigint(20) NOT NULL auto_increment,  `origname` varchar(255) NOT NULL default '',  `userlogin` varchar(32) NOT NULL default '', `calls` bigint(20) NOT NULL default '0',  `duration` bigint(32) NOT NULL default '0',  `in` float NOT NULL default '0',  `out` float NOT NULL default '0',  `profit` float NOT NULL default '0',  PRIMARY KEY  (`user_id`)) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
 sql_do($q);


 $qusers = "SELECT * FROM `origname` ";
 $resultusers= sql_do($qusers);
 while ($rowusers = mysql_fetch_array($resultusers, MYSQL_BOTH)){
	/* echo */ $origname = $rowusers['origname_name'];
	//echo "<br>";
	//if (strlen($userlogin)<5) continue;


	$result= sql_do("SELECT * FROM totaldata WHERE  date>'$datefrom' AND date<'$dateto'  AND origname = '$origname'  ORDER BY date desc");

//echo "SELECT * FROM totaldata WHERE  date>'$datefrom' AND date<'$dateto'  AND userlogin = '$userlogin'  ORDER BY date desc  = ".mysql_num_rows($result)."<br>";


	$total_dur=0;
	$total_In = 0;
	$total_Out = 0;
	$total_Profit = 0;
	$i = 0;
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

			$in = $row['in'];
			$out = $row['out'];
			$profit = $row['profit'];
			$duration = $row['duration'];
		$total_dur=		$total_dur + 	$duration;
		$total_In = 	$total_In + 	$in;
		$total_Out = 	$total_Out + 	$out;
		$total_Profit = $total_Profit + $profit;
		$i++;
 	}//    while ($row = mysql_fetch_array($result, MYSQL_BOTH))

#		echo "INSERT INTO `temp_user_data` ( `id` , `origname` , `userlogin` , `calls` ,  `duration` , `in` , `out` , `profit` ) VALUES ('', '$origname', '$userlogin', '$i', '$duration', '$in', '$out', '$profit')<br>";

		sql_do("INSERT INTO `temp_profession_data` ( `user_id` , `origname` , `userlogin` , `calls` ,  `duration` , `in` , `out` , `profit` ) VALUES ('', '$origname', '', '$i', '$total_dur', '$total_In', '$total_Out', '$total_Profit')");

 } //      while ($rowusers = mysql_fetch_array($resultusers, MYSQL_BOTH))


}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function RefreshStat()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function RefreshStat (){
?>��� ���������� ���������� ���������� ��������������� ��������� ��������� ��������:
<fieldset><legend>��� �0</legend>
<form action="../stat_grabber.php" target="_blank">
	<input type=submit value="������� � ���������"> � ��������� ������ �������� ���������!
</form>
</fieldset>
<br>
<fieldset><legend>��� �1</legend>
<form action="../csvparse.php" target="_blank">
	<input type=submit value="�������� � ������� 1"> � ��������� ������ �������� ���������!
</form>
</fieldset>
<br>
<fieldset><legend>��� �2 �������� ����������</legend>
<form action="../del_duplicates.php" target="_blank" method="post">
	<input type=submit value="�������!"> ��� �� ������������ ������ ���������, �������������� �� � ������������ �������.
</form>
</fieldset>
<br>
<fieldset><legend>��� �3</legend>
<form action="../append_total_tab.php" target="_blank">
	<input type=submit value="��������� ������� 2"> � ��������� ������ ��������
</form>
</fieldset>
<br>
<fieldset><legend>�������������� ��� �3 (�� ���������!!!)</legend>
<form action="../total_tab.php" target="_blank">
	<input type=submit value="����������� ������� 2"> � ��������� ������ �������� (��� ����� ������ ��������� �����, �� ��������� ����� ������� � ������...)
</form>
</fieldset>
<br>
� ������ ���� ���� ���� �� ������� �����, ������������� ��������� ������ �� �������!
<br>
<fieldset><legend>��� �4 </legend>
<form action="../total_balance.php" target="_blank">
	<input type=submit value="����������� ������"> �����������!!
</form>
</fieldset>
<br>



<br>
<fieldset><legend>��������� ������</legend>
<?php
$res1=sql_do("SELECT * FROM incoming");
$num1 = mysql_num_rows($res1);
$res2=sql_do("SELECT * FROM totaldata");
$num2 = mysql_num_rows($res2);
echo "������� � ������� �1:&nbsp;&nbsp;&nbsp;&nbsp; ".$num1."<br>������� � ������� �2:&nbsp;&nbsp;&nbsp;&nbsp; ".$num2."<br>���� ����� �� ��������� - ��������� ���������� ����������!<br> ���������� ���������� ����� ��������� <font color=#ff0000>�� ���� 1 ���� � 15-20 �����</font>, ����� ������� �2 ����� ������������ �������!.";
?>
</fieldset>



<?

}





#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function PayOuts()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function PayOuts ($datefrom,$dateto){
 open_connection();
# if ($_SERVER['SERVER_NAME'] != 'mcall.ru1') remake_Total($datefrom,$dateto);
 if (1) CrateTempUsersData ($datefrom,$dateto);


 echo " c ".$datefrom." �� ".$dateto            ."<br> ������� ����� � ".date('m')   . '<br>'             ;

?>
<fieldset><legend>����������  ���������</legend>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="payouts">
�� <?php makeform_from_month("datefrom",$datefrom); ?>
<?php /*
 � <? makeform_from_date("datefrom",$datefrom); ?> ��  <? makeform_from_date("dateto",$dateto); ?>

 */?><br>
������� � <input name="durationfrom" type="text" size="6" value="<?php echo $durationfrom = isset($_POST['durationfrom'])?$_POST['durationfrom']:0; ?>"> �� <input name="durationto" type="text" size="6" value="<?php echo $durationto = isset($_POST['durationto'])?$_POST['durationto']:1000000; ?>"><br>
������ � <input name="profitfrom" type="text" size="6" value="<?php echo $profitfrom = isset($_POST['profitfrom'])?$_POST['profitfrom']:0; ?>"> �� <input name="profitto" type="text" size="6" value="<?php echo $profitto = isset($_POST['profitto'])?$_POST['profitto']:100000; ?>"> ���.<br>

����������: (���� ������ �� ������� - ���)<br>
<input name="partnertype1" type="checkbox" value="1"> ������ 14��� <br>
<input name="partnertype2" type="checkbox" value="2"> ������ 24��� <br>
<input name="partnertype3" type="checkbox" value="3"> ������ 34��� <br>

<?php probel(72);?><input type=submit value="���������"></form>
</fieldset>
<?php
$total_Outwithfrod = 0;
$total_Out = 0;
$total_dur=0;

$profitfrom = isset($_POST['profitfrom'])?$_POST['profitfrom']:0;
if (!$profitfrom) $profitfrom = 0;
$profitto = isset($_POST['profitto'])?$_POST['profitto']:100000;
if (!$profitto) $profitto = 100000;

$durationfrom = isset($_POST['durationfrom'])?$_POST['durationfrom']:0;
if (!$durationfrom) $durationfrom = 0;
$durationto = isset($_POST['durationto'])?$_POST['durationto']:1000000;
if (!$durationto) $durationto = 1000000;

/* echo */ $q_223 = "SELECT * FROM `temp_user_data` WHERE `out` > '$profitfrom' AND `out` < '$profitto' AND `duration` >'$durationfrom' AND `duration` <'$durationto'  ORDER BY `duration` DESC  ";
//echo "<br>pn1=".$_POST['partnertype1']." -- pn2=".$_POST['partnertype2']." -- pn3=".$_POST['partnertype3'];

$result =  mysql_query($q_223) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q_223." --- <BR>");

//echo " ����� ".mysql_num_rows($result);


?>

<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>�����</th><th>���</th><th>���</th><th>�������.</th><th>�������. � ������</th><th>��������</th></tr>
</thead>
<tbody>
<?
//exit;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
 $letshow = 0;

 if ($_POST['partnertype1'] &&  substr($row['userlogin'], 0, 1 ) == $_POST['partnertype1']  ) $letshow = true;
 if ($_POST['partnertype2'] &&  substr($row['userlogin'], 0, 1 ) == $_POST['partnertype2']  ) $letshow = true;
 if ($_POST['partnertype3'] &&  substr($row['userlogin'], 0, 1 ) == $_POST['partnertype3']  ) $letshow = true;
 if ( !$_POST['partnertype1'] && !$_POST['partnertype2'] && !$_POST['partnertype3'] ) $letshow = true;

     if ($letshow && substr($row['userlogin'], 0, 1 ) != '4' ) {  //  �� ���� ��� ��  ��������� �������� (4)
			$userlogin = $row['userlogin'];

#--------------------------------
			$q_543 = "SELECT * FROM `payouts` WHERE `userlogin` = '$userlogin' AND `period` = '$datefrom'";
			$result543 =  mysql_query($q_543) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q_543." --- <BR>");
			$row543 = mysql_fetch_array($result543, MYSQL_BOTH);
			if ($row543['out']) 	$started = 1;
			else  					$started = 0;
			if ($row543['complete']) 	$complete = 1;
			else  					$complete = 0;
#--------------------------------



			$outwithfrod = $row['outwithfrod'];
			$in = $row['in'];
			$out = $row['out'];
			$profit = $row['profit'];
			$duration = $row['duration'];
			$row['origname'] = $row['origname'] ? $row['origname'] : '���';
			$color = $row['duration'] < 3000 ? '<font color="#00AA00">' : ($row['duration'] < 6000 ? '<font color="#0000FF">' : '<font color="#FF0000">');
		echo "<tr>";
//		echo "<td>".$row['origname']."</td>";
		echo "<td><font size=2><a href='index.php?mode=by_partner&userlogin=".$userlogin."' title='���������� ���������� ��������'>".$userlogin."</a></td>";
//		echo "<td>".$calls."</td>";
		echo "<td>".$duration."</td>"."<td>".round($duration/60, 2)."</td>";
//		echo "<td>".$in."</td>";
		echo "<td>".$color.$out."</font></td>";
//		echo "<td>".$profit."</td>";
		echo "<td>".$outwithfrod."</td>";

	  echo '<td>';
		if ( $started && $complete ) echo '<font color="#aa0000">��������</font>';
		elseif ( $started && !$complete ) echo '<a href="index.php?mode=payitout&period='.$datefrom.'&userlogin='.$userlogin.'&out='.$outwithfrod.'">�������� ��� "��������"</a>';
		else {
			echo '<a href="index.php?mode=checkfrod&userlogin='.$userlogin.'&datefrom='.$datefrom.'&dateto='.$dateto.'">�������� ����</a><br>';
			echo '<a href="index.php?mode=inprogress&period='.$datefrom.'&userlogin='.$userlogin.'&out='.$outwithfrod.'">������ ������</a>';
		}
	  echo '</td>';

		echo "</tr>";

//		$total_dur=$total_dur + $duration;
		$total_Outwithfrod = $total_Outwithfrod + $outwithfrod;
		$total_Out = $total_Out + $out;
	  }

 }
 ?>
 </tbody>
 <tfoot>
<tr>
  <th><div align="right">�����:</div></th>
  <th><div align="right">&nbsp;</div></th>
  <th><div align="right">&nbsp;</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><? echo $total_Outwithfrod; ?>p</div></th>
  <th><div align="right">&nbsp;</div></th>
</tr>
</tfoot>
</table>
 <?
echo "";

close_connection();



}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function PayItOut()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function PayItOut (){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
 open_connection();

  $date_array=explode("-",$period);


$q = "UPDATE `payouts` SET `complete` = 'YES' WHERE `userlogin` = '$userlogin'  AND `period` = '$period' ";
$result =  mysql_query($q) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q." --- <BR>");


 echo "<br><br>�������� � ������� $userlogin <br>������������� ������� � ����� $out ������ <br>�� ".$date_array[1]." �����  ".$date_array[0]." ����.";

close_connection();

//phpinfo(32);

}







#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function PayOutsArchive()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function PayOutsArchive ($datefrom,$dateto){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
 open_connection();

 echo " c ".$datefrom." �� ".$dateto  ;

?>
<fieldset><legend>����������  ���������</legend>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="payouts_archive">
�� <?php makeform_from_month("datefrom",$datefrom); ?><br>
<? $result = sql_do("SELECT * FROM users_ivr WHERE userlogin != ''  ORDER BY userlogin"); ?>
�������� ����� �������:
	<select name="userlogin">
	<option value="">�������</option>
<?
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		?>
			<option value="<?=$row['userlogin'];?>"><?=$row['userlogin'];?></option>
		<?
	}
?>
	</select>
<?php probel(72);?><input type=submit value="���������"></form>
</fieldset>
<?php
if ($userlogin) $uslog = " `userlogin` = '$userlogin' AND ";
else $uslog = "";

 /* echo */  $q_223 = "SELECT * FROM `payouts` WHERE ".$uslog." `period` = '$datefrom' ";

$result =  mysql_query($q_223) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q_223." --- <BR>");

//echo " ����� ".mysql_num_rows($result);


?>

<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
<thead>
	<tr><th>�����</th><th>������ ������</th><th>���� �������</th><th>�����</th><th>��������</th></tr>
</thead>
<tbody>
<?
//exit;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

			$userlogin = $row['userlogin'];
			$year = $row['year'];
			$payoutdate = $row['payoutdate'];
			$out = $row['out'];
			$month = $row['month'];
			$complete  = $row['complete'];
		echo "<tr>";
		echo "<td><font size=2><a href='index.php?mode=by_partner&userlogin=".$userlogin."' title='���������� ���������� ��������'>".$userlogin."</a></td>";
		echo "<td>".$year.'-'.$month."</td>";
		echo "<td>".$payoutdate."</td>";
		echo "<td>".$out."</td>";
		echo '<td>';
		echo ( ($complete == 'YES') ? '������ ���������� (<a href="index.php?mode=cancelpayout&period='.$datefrom.'&userlogin='.$userlogin.'">��� ����� ��������</a>)' : '<a href="index.php?mode=cancelpayout&period='.$datefrom.'&userlogin='.$userlogin.'">�������� ������� ������</a>');
		echo '</td>';
		echo "</tr>";
		$total_Outwithfrod = $total_Outwithfrod + $outwithfrod;
		$total_Out = $total_Out + $out;

 }
 ?>
 </tbody>
</table>
 <?
close_connection();

}





#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CancelPayOut()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CancelPayOut (){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
 open_connection();

 sql_do ("DELETE FROM `payouts` WHERE period='$period' AND userlogin='$userlogin'");
 $per = substr($period, 0, 7);
 echo "������ �������� $userlogin     <br>��  ������  $per   <br>��������!";

 close_connection();


}











#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CheckFrod()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CheckFrod ($datefrom,$dateto){
open_connection();
//$id=USER_ID;


if($_POST['userlogin']) 	{$userlogin = $_POST['userlogin'];  }
else {
	if($_GET['userlogin']) 	{$userlogin = $_GET['userlogin'];   }
	else die();
}

if(isset($_GET['datefrom'])) 	$datefrom = $_GET['datefrom'];
if(isset($_GET['dateto'])) 	$dateto = $_GET['dateto'];

//echo $datefrom.' ===== '.$dateto;   echo "<br>";

//-------------------------------------------------------------------

$result = sql_do("SELECT * FROM users_ivr WHERE userlogin='$userlogin'");

while ($roww = mysql_fetch_array($result, MYSQL_BOTH))
{
	$redir_num=$roww['redir_num'];
	$code=$roww['code'];
	$partner_num = $roww['partner_num'];
}
?>����� ����� �������� - <? echo  $userlogin ? $userlogin: "������� �� �����������!!!";
//close_connection();
if (!$userlogin) die ("<br><br>������� �� �����������!!! ���������� ����������!");
?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="checkfrod">
<input type="hidden" name="userlogin" value="<?=$userlogin?>">
<input type="hidden" name="redir_num" value="<?=$redir_num?>">
������:<br>
&nbsp;�&nbsp;&nbsp;
	<? makeform_from_date("datefrom",$datefrom); ?>
&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;
	<? makeform_from_date("dateto",$dateto); ?>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value="���������">
</form> <br><br><br><?


$result = sql_do("SELECT * FROM totaldata WHERE userlogin='$userlogin' AND date>'$datefrom' AND date<'$dateto' ORDER BY date DESC");

//$count = mysql_num_rows($res);


?>
<script src="../js/sorttable.js"></script>
<h4>�������� �� �������� ������� ��� ����������</h4>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<input type="hidden" name="mode" value="markfrod">

<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:12px;  " class="sortable">
<thead>
<tr><td>����</td><td>�������.</td><td>�������</td><td>���</td><td>���</td><th>�������.</th><th>����</th></tr>
</thead>
<tbody>
<?
$total_dur=0;
$j = 0;
 while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
	if(aprox($row['duration'])>0){
		//if ($row['user_code'] == ''){
		$chdis = " checked disabled";
			$partner_num = 	$row['partner_num'];
			$abon_number = 	$row['abon_number'];
			$out = 			$row['out'];
			$duration = 	$row['duration'];
			$session_id = 	$row['session_id'];
			$frod = 		$row['frod'];
			if(!$frod) $chdis = '';
		//}
		echo "<tr> <td width='140px'>".$row['date']."</td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".$abon_number."</td>";
		echo "<td>".$duration."</td>"."<td>".ceil($duration/60)."</td>";
		echo "<td>".$out."</td>";
		echo '<td><input name="call_'.$session_id.'" type="checkbox" value="'.$session_id.'" '.$chdis.'></td>';
		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']);
		$total_In = $total_In + $in;
		$total_Out = $total_Out + $out;
	}
}
//echo "</table>";
close_connection();

?>
 </tbody>
 <tfoot>
<tr>
  <th colspan="4"><div align="right">�����:</div></th>
  <th><div align="right"><? echo $total_dur; ?> ���</div></th>
  <th><div align="right"><? echo $total_Out; ?>p</div></th>
  <th><div align="right"><input type=submit value="��������"></div></th>
</tr>
</tfoot>
</table>

</form>
<?php

}








#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function InProgress()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function InProgress ($datefrom,$dateto){
  foreach ($_GET as $key => $value) {
	$$key = $value;
  }
  $date_array=explode("-",$period);

sql_do("INSERT INTO `payouts` ( `id` , `user_id` , `userlogin` , `year` , `month` , `out` , `payoutdate` , `period`, `complete` )
VALUES ( '', '', '$userlogin', '".$date_array[0]."', '".$date_array[1]."', '$out', '20".date("y-m-d")."', '$period', '' )");

 echo "<br><br>�������� � ������� $userlogin <br>������������� ������ �������� ������� � ����� $out ������ <br>�� ".$date_array[1]." �����  ".$date_array[0]." ����.";
?>
<br><br>
������� ������������ �� ��������� ���������:<br><br>

<?
 	$result1 = sql_do("SELECT * FROM users_ivr WHERE userlogin='$userlogin'");
	$ro1 = mysql_fetch_array($result1, MYSQL_BOTH);
	echo $wmpurse = $ro1['wmpurse'];
?>
<br><br>
�����  �������� ��� <strong>������ ���������</strong> �����, � ����� ����� ������ - ��� ����� <strong>����� �������� �����</strong> ������ ��  ������<br>
<br>
<?
echo '<a href="index.php?mode=payitout&period='.$period.'&userlogin='.$userlogin.'&out='.$out.'">�������� ��� "��������"</a>';

}







#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function MarkFrod()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function MarkFrod (){

foreach ($_POST as $key => $value) {

    if (strstr( $key, "call_")) {
		sql_do("UPDATE `totaldata` SET `frod` = 'Y' WHERE `session_id` = '$value' ");
		sql_do("UPDATE `incoming`  SET `frod` = 'Y' WHERE `session_id` = '$value' ");
		echo "������� ��� ���� ������ � id $value<br />\n";
	}
}

}










#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function MakeDateForNextMonth()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function MakeDateForNextMonth() {
	$name ='from';
  if (isset($_POST['date'.$name])) return $_POST['date'.$name];
  	$to_month = date('m');
  	$to_year =  date('Y') ;

	 if ($_POST['date'.$name.'Month'] == '12') 	$year = (isset($_POST['date'.$name.'Year'])) ? ($_POST['date'.$name.'Year']+1) : ($to_year+1);
	 else 	$year = (isset($_POST['date'.$name.'Year'])) ? $_POST['date'.$name.'Year'] : $to_year;
	$month = (isset($_POST['date'.$name.'Month'])) ? PlusOne($_POST['date'.$name.'Month']) : PlusOne($to_month) ;
	$day =  '01';
	return $year."-".$month."-".$day;
}

function PlusOne ($month){
if ( $month == '12') return '01';
elseif ( $month == '11') return '12';
elseif ( $month == '10') return '11';
else{
	if ( substr($month, 0 ,1) == '0' ) {
		$m = substr($month, 1 ,1);
		$m++;
		if ($m<10) $month='0'.$m;
		else $month=$m;
	}
	 return $month;
}
}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function makeform_from_month()  -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function makeform_from_month($name,$date, $status='') {
  $yearlist = array('2007' => '2007', '2008' => '2008', '2009' => '2009', '2010' => '2010');
  $monthlist = array('01' => '������',
                     '02' => '�������',
                     '03' => '����',
                     '04' => '������',
                     '05' => '���',
                     '06' => '����',
                     '07' => '����',
                     '08' => '������',
                     '09' => '��������',
                     '10' => '�������',
                     '11' => '������',
                     '12' => '�������'
                     );

  $date_array=explode("-",$date);
  if ($status == '') {
// 	make_selected_list($name."Day",$daylist,$date_array[2]);
	echo '<input name="datefromDay" type="hidden" value="01">';
	make_selected_list($name."Month",$monthlist,$date_array[1]);
	make_selected_list($name."Year",$yearlist,$date_array[0]);
	echo '<input name="datetoDay" type="hidden" value="01">';
//	echo '<input name="datetoMonth" type="hidden" value="'.(   ($date_array[1] != 12) ? $date_array[1]+1 : 1  ).'">';
//	echo '<input name="datetoYear" type="hidden" value="'.(   ($date_array[1] != 12) ? $date_array[0] : $date_array[0]+1  ).'">';
  }
  else {
  	echo /* $date_array[2] ." ". */ $monthlist[$date_array[1]] ." ". $date_array[0] . " ����";
  }
}

?>