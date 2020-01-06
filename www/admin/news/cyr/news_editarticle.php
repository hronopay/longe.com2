<?
$id=$ided;
	$qSiteList = "select name,subname,article,dayofmonth(adate) as aday, month(adate) as amonth,Year(adate) as ayear, isvisible, photo, vip from news where id='$id'";
	$result = @mysql_query ($qSiteList) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query."<BR>");
$name=htmlspecialchars(mysql_result($result,0,'name'));
$subname=htmlspecialchars(mysql_result($result,0,'subname'));
$day=mysql_result($result,0,'aday');
$month=mysql_result($result,0,'amonth');
$year=mysql_result($result,0,'ayear');
$isvisible=mysql_result($result,0,'isvisible');
$image=mysql_result($result,0,'photo');
$vip=mysql_result($result,0,'vip');
$article=htmlspecialchars(mysql_result($result,0,'article'));
if (isset ($isvisible) && $isvisible!=0) $isvisibles='checked'; else {$isvisibles="";}
if (isset ($isarchive) && $isarchive!=0) $isarchives='checked'; else {$isarchives="";}

echo "vip = ".$vip;
if (isset ($vip) && $vip=="YES") $vips='checked'; else {$vips="";}

echo "
<hr>
<form ENCTYPE=\"multipart/form-data\" name=\"edit\" method=\"post\" action=\"news_index.php\">
<h4>Редактирование новости <font color=#ff0000>\"$name\"</font></h4>
<table border=0>
<tr>
<td align=\"center\">
Дата:
</td>
<td align=\"center\" width=100>
Показывать:
<input type=\"hidden\" name=\"id\" value=\"$id\">
</td>
<td align=\"center\" width=100>
Архивный:
</td>
</tr>
<tr>
<td align=\"center\">
<select name=\"day\">
";
for ($i=1;$i<=31;$i++)
{
if ($i==$day) $sel='selected'; else $sel='';
echo "<option value='$i' $sel>$i";
}
echo "</select><select name=\"month\">";
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
for($i=1;$i<=12;$i++)
{
if ($i==$month) $sel='selected'; else $sel='';
echo "<option value='$i' $sel>".$months[$i];
}
echo "
</select>
<input type=text size=4 maxlength=4 name=\"year\" value=\"$year\">
</td>
<td align=\"center\"><input type=checkbox name=\"isvisible\" $isvisibles></td>
<td align=\"center\"><input type=checkbox name=\"isarchive\" $isarchives></td>
</tr>
</table>
<br>
Название новости: <br><input type=text size=80 name=\"name\" value=\"$name\">
<br><br>
Заголовок новости: <br><textarea cols=80 rows=8 name=\"subname\">$subname</textarea>
<br><br>
Текст
<br>
<textarea cols=80 rows=15 name=\"article\">$article</textarea><br><br>
<input class=input type=radio name=change value=file1>&nbsp; <input type=file name=file style=\"width:300px;\" onclick=\"document.edit.change[0].checked = true;\" class=input><br>
<input type=\"radio\" name=change value=file2 class=input checked>&nbsp; 
<select name=fileExist style=\"width:300px;\" onclick=\"document.edit.change[1].checked = true;\" class=input>
<option value=0 selected>Нет картинки";
?>
<?
	$root = realpath($realpath);
	chdir($root);
	$dir = opendir(".");
	while ($file = readdir($dir))
	{
		if (($file != ".") && ($file != ".."))
		{
?>
		<option value="<?echo $file;?>"<?if ($image == $file) echo (" selected");?>><?echo $file;?>
<?
		}
	}
	closedir($dir);
	$root = realpath($realpath_real);
	chdir($root);
?>
<?
echo "
</select><br><p>
  <input type=\"checkbox\" name=\"vip_checkbox\" value=\"YES\" $vips>
  Vip<br><br>
<input type=\"hidden\" name=\"oldid\" value=\"$id\">
<input type=\"hidden\" name=\"isupdate\" value=\"1\">
<input type=\"submit\" value=\"Сохранить\">
<input type=\"reset\" value=\"Восстановить\">
</form>
";
?>