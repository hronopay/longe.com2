<form id="form2" name="regclient"  action="registration.php" enctype="multipart/form-data" method="post" onsubmit="if(document.regclient.licence.value != 'YES' || document.regclient.licence.value == ''){alert('Вы не подтвердили согласия на тестовый период подключения');return false}">
<table style="border:1px solid #007451; border-collapse:collapse;">
	<tr  bgcolor="#0c3eb2">
	  <td align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td width="30" align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left"></div></td>
	  <th><div align="left" style="color:#FFFFFF ">примеры и пояснения </div></th>
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
	  <td align="right" style="padding: 4px 1px 5px 1px;"><strong>Отчество</strong></td>
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
	
	<tr valign="middle" bgcolor="#eeeeee"><td align="right" style="padding: 4px 1px 5px 1px;">
<strong>Контактный телефон:</strong></td>
	  <td width="30" align="right">&nbsp;</td>
	  <td style="padding: 4px 1px 5px 1px;"><div align="left">
	    <input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " size="14" type="text" name="phone" maxlength="20">
	    </div></td>
    <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">произвольно</div></td>
	</tr>
	
	<tr bgcolor="#eeeeee"><td align="right" style="padding: 4px 1px 5px 1px;">
<strong>ICQ:</strong></td>
	  <td width="30" align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
	  <td align="right" style="padding: 4px 1px 5px 1px;">
        <div align="left">
          <input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="45"  size="14" type="text" name="icq">
        </div></td>
<td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">123-456-321</div></td>
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
	<tr><td colspan="4" align="center" bgcolor="#0c3eb2">
	<input name="id" type="hidden" value="<?php echo $ti; ?>">
	<input name="filledin" type="hidden" value="<?php echo $filledin; ?>">
	<input name="filledin_hm" type="hidden" value="<?php echo $filledin_hm; ?>">

  <input type="submit" name="doreg"  class="bbcodes"  value="Послать заявку">
</td></tr>

</table>
</form>
