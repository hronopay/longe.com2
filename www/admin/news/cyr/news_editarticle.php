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
<h4>�������������� ������� <font color=#ff0000>\"$name\"</font></h4>
<table border=0>
<tr>
<td align=\"center\">
����:
</td>
<td align=\"center\" width=100>
����������:
<input type=\"hidden\" name=\"id\" value=\"$id\">
</td>
<td align=\"center\" width=100>
��������:
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
$months[1]='������';
$months[2]='�������';
$months[3]='�����';
$months[4]='������';
$months[5]='���';
$months[6]='����';
$months[7]='����';
$months[8]='�������';
$months[9]='��������';
$months[10]='�������';
$months[11]='������';
$months[12]='�������';
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
�������� �������: <br><input type=text size=80 name=\"name\" value=\"$name\">
<br><br>
��������� �������: <br><textarea cols=80 rows=8 name=\"subname\">$subname</textarea>
<br><br>
�����
<br>
<textarea cols=80 rows=15 name=\"article\">$article</textarea><br><br>
<input class=input type=radio name=change value=file1>&nbsp; <input type=file name=file style=\"width:300px;\" onclick=\"document.edit.change[0].checked = true;\" class=input><br>
<input type=\"radio\" name=change value=file2 class=input checked>&nbsp; 
<select name=fileExist style=\"width:300px;\" onclick=\"document.edit.change[1].checked = true;\" class=input>
<option value=0 selected>��� ��������";
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
<input type=\"submit\" value=\"���������\">
<input type=\"reset\" value=\"������������\">
</form>
";
?>