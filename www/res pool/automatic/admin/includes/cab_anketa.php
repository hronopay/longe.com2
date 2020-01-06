 <table>

  <tr><td>Логин:</td><td>
  <input name="userlogin" type="hidden" value="<?=$userlogin?>">
    <input type="text" name="userlogin111" value="<?=$userlogin?>" disabled>
  </td></tr>
  <tr><td>Префикс:</td><td>
  <input name="code" type="hidden" value="<?=$code?>">
    <input type="text" name="code111" value="<?=$code?>" disabled>
  </td></tr>

<tr>
	<td>Пароль:</td>
	<td><? if ($pass_hash) echo 'Пароль  есть!'; else echo 'Пароля нет!';?></td>
</tr>
<tr>
	<td>ФИО:</td><td>
    <input type="text" name="fio" value="<?=$fio?>" disabled size="50">
  </td></tr>
<tr>
  <td>Юр. статус </td>
  <td><select name='type' disabled>
<?
  if ($type == "Юридическое лицо") echo "<option value='Юридическое лицо' selected>Юридическое лицо</option>\n<option value='Физическое лицо'>Физическое лицо</option>\n";
  else echo "<option value='Юридическое лицо'>Юридическое лицо</option>\n<option value='Физическое лицо' selected>Физическое лицо</option>\n";
?>
</select></td>
</tr>
<tr><td>email:</td><td>
    <input type="text" name="mail" value="<?=$mail?>"  disabled>
  </td></tr>
<tr><td>icq:</td><td>
    <input type="text" name="icq" value="<?=$icq?>" disabled>
  </td></tr>
<tr><td>Контактный телефон:</td><td>
    <input type="text" name="tele_contact" value="<?=$tele_contact?>" disabled>
  </td></tr>
  
  
<tr><td>Дополнительно:</td><td>
    <input type="text" name="additional" value="<?=$additional?>" disabled>
  </td></tr>
<tr><td>Номер переадресации:</td><td>
    <input name="partner_num" type="text" value="<?=$partner_num?>" maxlength="10" disabled> 
  </td></tr>
<tr><td>Тариф:</td><td>
<select name='redir_num' disabled>
<?
  if ($redir_num == "9012028013") echo "<option value='9012028013' selected>1 доллар</option>\n<option value='9012029438'>2 доллара</option>\n";
  else echo "<option value='9012028013'>1 доллар</option>\n<option value='9012029438' selected>2 доллара</option>\n";
?>
</select>
  </td></tr>
<tr><td>Время доступа: </td><td>

        С <select name='vremya1' disabled>
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
</select>  по

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


<tr><td>Специальность</td><td><?=$origname?></td></tr>
  </table><br>
<fieldset><legend style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#FF0000; font-weight:bold ">Внимание!</legend>
Если в Ваших личных данных произошли изменения, Вам необходимо сообщить об этом, отправив письмо на e-mail: <a href="mailto:info@mcall.ru">info@mcall.ru</a></fieldset>


