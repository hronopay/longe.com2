<?php include('include/header.php'); ?>
<?php /* 
<script language="JavaScript" type="text/javascript">
<!-- 
function check() {
	if (document.callback.name.value=="") window.alert("Вы не ввели ИМЯ");
	else if (document.callback.phone.value=="") window.alert("Вы не ввели ТЕЛЕФОН");
	else document.callback.submit();
   }
// -->
</script>

 */?>
 
<p style='color:red;padding:10px 20px 10px 15px;margin:1px 0px 5px 0px;font:bold 12px;background:white;background:url(img/bgm.gif) repeat-x bottom;border-bottom:1px solid #dcdcdc'><img src=img/ahh.gif width=6 height=12 alt='О компании'> Заказать консультацию </p>
	<table cellpadding=0 cellspacing=0 width=100% height=100%>
	<tr><td class=BL id=J>
	
	<form id="form1" action="callback.php" enctype="multipart/form-data" name="callback" method="post" onsubmit="if(document.callback.name.value == '' || document.callback.phone.value == ''){alert('Введите пожалуйста имя и телефон!');return false}">

<h3>После отправки  запроса в ближайший рабочий день с Вами свяжется сотрудник нашей компании</h3>		
Звездочками отмечены обязательные для заполнения поля<br>
<br>

		
<table width="100%" class="slink">

  <tr>
    <td align="right" style="padding:4px;">Ваше имя:<font color="#FF0000">*</font></td>
    <td>
	<script type="text/javascript">
								with (document)
								{
									write('<in' + 'p' + 'ut style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="35" na' + 'me="n' + 'a' + 'me" size="14">' + '');
								}
							</script>
</td>
  </tr>
  
  
  <tr>
     <td align="right" style="padding:4px;">E-Mail:</td>
     <td><input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="35" name="email" size="14">
	 	<?php /* <script type="text/javascript">
								with (document)
								{
									write('<input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="35" nam' + 'e="em' + 'ail" size="14">' + '');
								}
							</script> */?>
</td>
  </tr>


  <tr>
  	<td align="right" style="padding:4px;">Заголовок:</td><td><input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="45" name="subject" size="14" value="Заказ обратного звонка">
	</td>
</tr>

<tr>
	<td align="right" style="padding:4px;">Телефон:<font color="#FF0000">*</font></td><td>
		 	<script type="text/javascript">
								with (document)
								{
									write('<input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="45" n' + 'am' + 'e="p' + 'ho' + 'ne" size="14">' + '');
								}
							</script>

  </td>
 </tr>
  
 <tr>
  <td align="right" valign="top" style="padding:4px;">Сообщение:</td>
  <td>
  <textarea style="font-family:verdana; font-size:11px; border:1px solid #E0E0E0" name="text" rows="12" cols="55"></textarea>
  	</td>
</tr>
  
 <!--tr>
 	<td align="right" style="padding:4px;">Код безопасности:</td><td><span id="dle-captcha"><img src="img/captchamcall.jpg" alt="Включите эту картинку для отображения кода безопасности" width="165" height="60" border="0" /></span>
	</td>
</tr>

<tr>
	<td align="right" style="padding:4px;">Введите код:</td><td><input style="width:167px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="45" name="sec_code" size="14">
  	</td>
  </tr-->

  <tr>
  <td></td>
  <td>Нажимая кнопку "Отправить" Вы даёте свое согласие на <font color="#000099">обработку отправляемых персональных данных</font> в рамках Федерального закона №152-ФЗ.<br>

<input name="send_btn" type="submit" class="bbcodes" value="Отправить">
  <br /><br />
  	</td>
</tr>
</table>
<script type="text/javascript">
								with (document)
								{
									write('1196' + '34, Мо' + 'сква, Б' + 'оров' + 'ско' + 'е ш.' + '');
									write(", д.3" + "7 ко" + "рп.3");
								}
							</script>

</form>


	</td></tr>
	</table>

<?php include('include/footer.php'); ?>
