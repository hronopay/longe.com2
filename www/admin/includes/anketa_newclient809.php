 <form method=post action="index.php?mode=client_edit">
 <table>

  <tr><td>�����:</td><td>
  
  	<input name="user_id" type="hidden" value="<?php echo $user_id; ?>">
<?php 
  	if ($condition) {?><input type="text" name="userlogin111" value="<?=$userlogin?>"><?php } 
  	else {?><fieldset><legend>������� ����� ����� �������</legend>

		<select name="userloginfirst">
			<option value="1" <?php  if ($redir_num == "9012028013") echo " selected";?>>������ IVR $1</option>
			<option value="2" <?php  if ($redir_num == "9012029438") echo " selected";?>>������ IVR $2</option>
			<option value="3">������ ���������</option>
		</select>
		<input type="text" name="newcode" value="33xx" maxlength="4" size="4">
	</fieldset>
<? }
?>
  </td></tr>
  <tr><td>������� (���. �����):</td><td>
     <input type="text" name="code111" value="<?=$code?>" disabled>
  </td></tr>

<tr>
	<td>������:</td>
	<td><? if ($pass_hash) echo $pass_hash; else echo '������ ���!';?></td>
</tr>
<tr>
	<td>������� ����� ������:</td>
	<td><input type="text" name="pass_hash" value=""></td>
</tr>
<tr>
  <td>��� ��������</td>
  <td><?=$type?></td>
</tr>
  	<input name="type" type="hidden" value="<?=$type?>">
<tr>
	<td>���:</td><td>
    <input type="text" name="fio" value="<?=$fio?>">
  </td></tr>
<tr><td>email:</td><td>
    <input type="text" name="mail" value="<?=$mail?>">
  </td></tr>
<tr><td>icq:</td><td>
    <input type="text" name="icq" value="<?=$icq?>">
  </td></tr>
<tr><td>���������� �������:</td><td>
    <input type="text" name="tele_contact" value="<?=$tele_contact?>">
  </td></tr>
  
  
<tr><td>�������������:</td><td>
    <input type="text" name="additional" value="<?=$additional?>">
  </td></tr>
<tr><td>����� �������������:</td><td>
    <input name="partner_num" type="text" value="<?=$partner_num?>" maxlength="10"> (10 ���� ��� ��������)
  </td></tr>
<tr><td>�����:</td><td>
<select name='tarif'>

	        <option value="1" <?php if ($tarif == 1) echo " selected";?>>116.82</option>
	        <option value="2" <?php if ($tarif == 2) echo " selected";?>>29.50</option>
	        <option value="3" <?php if ($tarif == 3) echo " selected";?>>53.10</option>
	        <option value="4" <?php if ($tarif == 4) echo " selected";?>>64.90</option>
	        <option value="5" <?php if ($tarif == 5) echo " selected";?>>69.62</option>
	        <option value="6" <?php if ($tarif == 6) echo " selected";?>>81.42</option>
	        <option value="7" <?php if ($tarif == 7) echo " selected";?>>35.40</option>
	        <option value="8" <?php if ($tarif == 8) echo " selected";?>>94.40</option>
	        <option value="9" <?php if ($tarif == 9) echo " selected";?>>106.20</option>
          </select>

  </td></tr>
<tr><td>����� �������: </td><td>

        � <select name='vremya1'>
<?
	for ($i = 0;$i < 24;$i++)
	{
		if ( $i == $vremya1 )
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$i."\" $selected_STR>".$i.":00</option>");
		
	}
?>
</select>  ��

        <select name='vremya2'>
<?
	for ($i = 0;$i < 24;$i++)
	{
		if ( $i == $vremya2 )
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$i."\" $selected_STR>".$i.":00</option>");
		
	}
?>
</select>
  </td></tr>


<tr><td>�������������</td><td>
		<input type="radio" name="change_radio" value="professionlist" class="input" checked>	    
		������������� &nbsp; 
        <select name="origname_list" style="width:290px;" onclick="document.forms[0].change_radio[0].checked = true;"  class="input">
         <option value="" selected>�������
	  <?php 
	  $q_origname = "SELECT * FROM origname ORDER BY origname_name";
	  $resq_origname = @mysql_query ($q_origname) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query."<BR>");
 	while ($roworigname = mysql_fetch_object($resq_origname))
	{
		if (($roworigname->origname_name == $origname))
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$roworigname->origname_name."\" $selected_STR>".$roworigname->origname_name."</option>");
		

		
	}
 ?>
        </select>
        <br>
        <input class="input" type="radio" name="change_radio" value="newprofession">
        ������ �����   	    &nbsp; &nbsp; 
	    <input type="text" name="origname_new" style="width:290px;" onClick="document.forms[0].change_radio[1].checked = true;" class="input" value="<?=$origname?>">	



<input type="hidden" name="excode" value="<?=$code?>">
  </td></tr>
<tr>
  <td>���� ���������������</td>
  <td><input type="text" name="okrug" style="width:150px;" class="input" value="<?=$okrug?>"> ���. �����</td>
</tr>
<tr>
  <td>ICQ</td>
  <td><?=$icq?></td>
</tr>
<tr>
  <td>WebMoney (R) </td>
  <td><input type="text" name="wmpurse" style="width:150px;" class="input" value="<?=$wmpurse?>"></td>
</tr>
<tr>
  <td>ID</td>
  <td><?=$id?></td>
</tr>
<input name="id" type="hidden" value="<? echo $id; ?>">

<tr>
  <td>���� ���������� </td>
  <td><?php echo $filledin." ".$filledin_hm; ?></td>
</tr>
<input name="filledin" type="hidden" value="<? echo $filledin; ?>">
<input name="filledin_hm" type="hidden" value="<? echo $filledin_hm; ?>">
<tr>
  <td>������</td>
  <td>
<?
  if (!$condition) echo '�������������.  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="activate" type="checkbox" value="1"> ������������! (����� ������� �����...)';
  else echo "<font color=#FF0000>�����������</font>";
?><br>
<?php if ($condition) echo "�������������� ������ �������������� �������� ���������� �� ������� '���������� ���������'"; ?>
<input name="condition" type="hidden" value="<?=$condition?>">
<input name="activationtime" type="hidden" value="<? echo time(); ?>">
<input name="activationdate" type="hidden" value="<? echo date("20y-m-d"); ?>">
<input name="camefrom" type="hidden" value="<? echo $camefrom; ?>">
<input name="tarif" type="hidden" value="<? echo $tarif; ?>">
  </td>
</tr>
  </table>

<input type=submit value="�����!" <?php if ($condition) echo "disabled"; ?>></form> 
