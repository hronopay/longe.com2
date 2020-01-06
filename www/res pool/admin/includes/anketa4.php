 <form method=post action="index.php?mode=edit">
 <table style="color:#FFFFFF; font-size:12px; font-family:Verdana, Arial, Helvetica, sans-serif; ">

  <tr><td>Логин:</td><td>
  <input name="userlogin" type="hidden" value="<?=$userlogin?>">
    <input type="text" name="userlogin111" value="<?=$userlogin?>" disabled>
  </td></tr>
  <tr><td>Префикс:</td><td>
  <input name="code" type="hidden" value="<?=$code?>">
    <input type="text" name="code111" value="<?=$code?>" disabled>
  </td></tr>

<!--tr>
	<td>Пароль:</td>
	<td><? if ($pass_hash) echo 'Пароль уже есть!'; else echo 'Пароля нет!';?></td>
</tr>
<tr>
	<td>Создать новый пароль:</td>
	<td><input type="text" name="pass_hash" value=""></td>
</tr-->
<tr>
	<td>Издание:</td><td>
    <input type="text" name="fio" value="<?=$fio?>">
  </td></tr>
<tr><td>Кол-во дней в выпуске:</td><td>
    <input type="text" name="mail" value="<?=$mail?>">
  </td></tr>
<tr><td>Стоимость выпуска:</td><td>
    <input type="text" name="icq" value="<?=$icq?>">
  </td></tr>
<tr><td>Контактный телефон:</td><td>
    <input type="text" name="tele_contact" value="<?=$tele_contact?>">
  </td></tr>

  <tr>
   <td>Дата начала: </td><td>
<table border=0>
<tr><td>
<select name="sday">
<?
if ($startdate == "") $startdate = time(); 
$day = date ("d", $startdate);
$month = date ("m", $startdate);
$year = date ("Y", $startdate);

$months[1]='Января';
$months[2]='Февраля';
$months[3]='Марта';
$months[4]='Апреля';
$months[5]='Мая';
$months[6]='Июня';
$months[7]='Июля';
$months[8]='Августа';
$months[9]='Сентября';
$months[10]='Октября';
$months[11]='Ноября';
$months[12]='Декабря';

  for($i=1;$i<=31;$i++) {
  	if ($i<10)  $j='0'.$i; else  $j=$i; 
  	$daylist[$i]="$j";
  }
for($i=1;$i<=31;$i++)
{
if ($i==$day) $sel='selected'; else $sel='';
echo "<option value='$i' $sel>".$daylist[$i];
}


?>
</select>
<select name="smonth">
<?
for($i=1;$i<=12;$i++)
{
if ($i==$month) $sel='selected'; else $sel='';
echo "<option value='$i' $sel>".$months[$i];
}
?>
</select>
<select name="syear">
<?
for ($i=2008; $i<=2012; $i++)
{
if ($i==$year) $sel='selected'; else $sel='';
echo "<option value='$i' $sel>$i";
}
?>
</select>
</td>
</table>
</td>
  </tr>





  <tr>
   <td>Дата окончания: </td><td>
<table border=0>
<tr><td>
<select name="eday">
<?
if ($enddate == "") $enddate = time(); 
$day = date ("d", $enddate);
$month = date ("m", $enddate);
$year = date ("Y", $enddate);


  for($i=1;$i<=31;$i++) {
  	if ($i<10)  $j='0'.$i; else  $j=$i; 
  	$daylist[$i]="$j";
  }
for($i=1;$i<=31;$i++)
{
if ($i==$day) $sel='selected'; else $sel='';
echo "<option value='$i' $sel>".$daylist[$i];
}


?>
</select>
<select name="emonth">
<?
for($i=1;$i<=12;$i++)
{
if ($i==$month) $sel='selected'; else $sel='';
echo "<option value='$i' $sel>".$months[$i];
}
?>
</select>
<select name="eyear">
<?
for ($i=2008; $i<=2012; $i++)
{
if ($i==$year) $sel='selected'; else $sel='';
echo "<option value='$i' $sel>$i";
}
?>
</select>
</td></table>

</td></tr>














<tr><td>Тариф:</td><td>
<select name='redir_num'>
<?
  if ($redir_num == "9012028013") echo "<option value='9012028013' selected>1 доллар</option>\n<option value='9012029438'>2 доллара</option>\n";
  else echo "<option value='9012028013'>1 доллар</option>\n<option value='9012029438' selected>2 доллара</option>\n";
?>
</select>
  </td></tr>  
<?php  #----------------------------------------------------------------------
if ($partner_type < 3) {
?>
  
<tr><td>Дополнительно:</td><td>
    <input type="text" name="additional" value="<?=$additional?>">
  </td></tr>
<tr><td>Номер переадресации:</td><td>
    <input name="partner_num" type="text" value="<?=$partner_num?>" maxlength="10"> (10 цифр без пробелов)
  </td></tr>

<tr><td>Время доступа: </td><td>

        С <select name='vremya1'>
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


<tr><td>Специальность</td><td>
		<input type="radio" name="change_radio" value="professionlist" class="input" checked>	    
		специальность &nbsp; 
        <select name="origname_list" style="width:150px;" onclick="document.forms[0].change_radio[0].checked = true;"  class="input">
         <option value="" selected>выбрать
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
        ввести другую   	    &nbsp; 
	    <input type="text" name="origname_new" style="width:150px;" onClick="document.forms[0].change_radio[1].checked = true;" class="input">	



<input type="hidden" name="excode" value="<?=$code?>">
  </td></tr>
<?php 
} #-----------------------------------------------------------   if ($partner_type)
?>
  </table>
<input type=submit value="Сохранить"></form>
