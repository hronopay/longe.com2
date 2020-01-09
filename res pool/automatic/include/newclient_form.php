<form id="form2" name="regclient"  action="registration.php" enctype="multipart/form-data" method="post" onsubmit="if(document.regclient.licence.value != 'YES' || document.regclient.licence.value == ''){alert('Вы не подтвердили согласия на тестовый период подключения');return false}">
<table style="border:1px solid #007451; border-collapse:collapse; width:50%;">
	<tr  bgcolor="#007451">
	  <td align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td width="30" align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left"></div></td>
	  <th><div align="left" style="color:#FFFFFF ">примеры и пояснения </div></th>
	  </tr>
	<tr bgcolor="#eeeeee">
	  <td align="right" style="padding: 4px 1px 5px 1px;"><strong>Название компании </strong></td>
	  <td align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">
	    <input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 "   size="14" type="text" name="firmname">
      </div></td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">только для Юр. лиц</div></td>
    </tr>
	<tr>
<td align="right" style="padding: 4px 1px 5px 1px;">
<strong>*Фамилия</strong></td>
<td width="30" align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
<td align="right" style="padding: 4px 1px 5px 1px;">
	<div align="left">
	  <input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="45"  size="14" type="text" name="fiof">
	  </div></td>
<td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">Иванов</div></td>
	</tr>
	<tr bgcolor="#eeeeee">
	  <td align="right" style="padding: 4px 1px 5px 1px;"><strong>*Имя</strong></td>
	  <td width="30" align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">
	    <input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="45"  size="14" type="text" name="fioi">
	    </div></td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">Иван</div></td>
	  </tr>
	<tr>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><strong>*Отчество</strong></td>
	  <td width="30" align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">
	    <input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="45"  size="14" type="text" name="fioo">
	    </div></td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">Иванович</div></td>
	  </tr>
	<tr bgcolor="#eeeeee">
	  <td align="right" style="padding: 4px 1px 5px 1px;">
<strong>*E-mail:</strong></td>
	  <td width="30" align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td align="right" style="padding: 4px 1px 5px 1px;">
        <div align="left">
          <input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="45"  size="14" type="text" name="mail">
        </div></td>
<td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">Ivanov@mail.ru</div></td>

	
	<tr>
	  <td align="right" style="padding: 4px 1px 5px 1px;">Вы ознакомлены с условиями <a href="connect.php" target="_blank">Соглашения о предоставлении услуги</a> и принимаете их?</td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><input type="checkbox" name="licence" value="YES"></td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">
      Я принимаю 
      условия Соглашения</div></td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="justify">Пожалуйста, внимательно прочитайте <a href="connect.php" target="_blank">соглашение</a>. </div></td>
    </tr>
	<tr bgcolor="#eeeeee"><td align="right" style="padding: 4px 1px 5px 1px;">
<strong>ID Вашей заявки:</strong></td>
	  <td width="30" align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td align="right" style="padding: 4px 1px 5px 1px;">
        <div align="left">
          <input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="45"  size="14" type="text" name="id_num"  value="<?php echo $ti = round (time()/3, 0); ?>" disabled>
        </div></td>
<td align="right" style="padding: 4px 1px 5px 1px;"><div align="left"></div></td>
	</tr>
	<tr>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><strong>Дата заполнения:</strong></td>
	  <td width="30" align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left"><?php echo $filledin = date("20y-m-d");  echo ' '; echo $filledin_hm = date("H:i"); ?></div>
	    <div align="left"></div>
	    <div align="left"></div></td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left"></div></td>
	  </tr>
	<tr><td colspan="4" align="center" bgcolor="#007451">
	<input name="id" type="hidden" value="<?php echo $ti; ?>">
	<input name="filledin" type="hidden" value="<?php echo $filledin; ?>">
	<input name="filledin_hm" type="hidden" value="<?php echo $filledin_hm; ?>">

  <input type="submit" name="doreg"  class="bbcodes"  value="Послать заявку">
</td></tr>

</table>
</form>
