 <table>

  <tr><td>�����:</td><td>
  <input name="userlogin" type="hidden" value="<?=$userlogin?>">
    <input type="text" name="userlogin111" value="<?=$userlogin?>" disabled>
  </td></tr>
  <tr><td>�������:</td><td>
  <input name="code" type="hidden" value="<?=$code?>">
    <input type="text" name="code111" value="<?=$code?>" disabled>
  </td></tr>

<tr>
	<td>������:</td>
	<td><? if ($pass_hash) echo '������  ����!'; else echo '������ ���!';?></td>
</tr>
<tr>
	<td>���:</td><td>
    <input type="text" name="fio" value="<?=$fio?>" disabled size="50">
  </td></tr>
<tr>
  <td>��. ������ </td>
  <td><select name='type' disabled>
<?
  if ($type == "����������� ����") echo "<option value='����������� ����' selected>����������� ����</option>\n<option value='���������� ����'>���������� ����</option>\n";
  elseif ($type == "���������� ����") echo "<option value='����������� ����'>����������� ����</option>\n<option value='���������� ����' selected>���������� ����</option>\n";
  else echo "<option value='����������� ����'>����������� ����</option>\n<option value='�������' selected>�������</option>\n";
?>
</select></td>
</tr>
<tr><td>email:</td><td>
    <input type="text" name="mail" value="<?=$mail?>"  disabled>
  </td></tr>
<tr><td>icq:</td><td>
    <input type="text" name="icq" value="<?=$icq?>" disabled>
  </td></tr>
<tr><td>���������� �������:</td><td>
    <input type="text" name="tele_contact" value="<?=$tele_contact?>" disabled>
  </td></tr>
  
  
<tr><td>�������������:</td><td>
    <input type="text" name="additional" value="<?=$additional?>" disabled>
  </td></tr>
<tr><td>����� �������������:</td><td>
    <input name="partner_num" type="text" value="<?=$partner_num?>" maxlength="10" disabled> 
  </td></tr>
<tr><td>�����:</td><td>
<select name='redir_num' disabled>
<?
  if ($redir_num == "9012028013") echo "<option value='9012028013' selected>1 ������</option>\n<option value='9012029438'>70 ������</option>\n";
  else echo "<option value='9012028013'>1 ������</option>\n<option value='9012029438' selected>70 ������</option>\n";
?>
</select>
  </td></tr>
<tr><td>����� �������: </td><td>

        � <select name='vremya1' disabled>
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

        <select name='vremya2' disabled>
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


<tr><td>�������������</td><td><?=$origname?></td></tr>
  </table><br>
<fieldset><legend style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#FF0000; font-weight:bold ">��������!</legend>
���� � ����� ������ ������ ��������� ���������, ��� ���������� �������� �� ���� ����� ����� �� ��������� �������� �����</fieldset>


