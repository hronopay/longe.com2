<hr>
<form ENCTYPE="multipart/form-data" name="edit" method="post" action="news_index.php">
<h2>����� ������</h2>
<table border=0>
<tr>
<td align="center">
����:
</td>
<td align="center" width=100>
����������:
</td>
<td align="center" width=100>
��������:
</td>
</tr>
<tr>
<td align="center">
<?
echo "<select name=\"day\">";
$day=date("j");
$month=date("n");
$year=date("Y");
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
</td>";
?>
<td align="center">
<input type=checkbox name="isvisible">
</td>
<td align="center">
<input type=checkbox name="isarchive">
</td>
</tr>
</table>
<p><br>
  �������� �������: <br>
  <input type=text size=60 name="name">
  <br>
  <br>
  ��������� �������: <br>
  <textarea cols=40 rows=8 name="subname"></textarea>
  <br>
  <br>
  �����
  <br>
  <textarea cols=80 rows=20 name="article">
</textarea>
  <br>
  <br>
  <input class="input" type="radio" name="change" value="file1" checked>
&nbsp; 
  <input type="file" name="file" style="width:300px;" onclick="document.edit.change[0].checked = true;" class="input">
  <br>
  <input type="radio" name="change" value="file2" class="input">
&nbsp; 
  <select name="fileExist" style="width:300px;" onclick="document.edit.change[1].checked = true;" class="input">
    <option value="0" selected>��� ��������
    <?
	$root = realpath($realpath);
	chdir($root);
	$dir = opendir(".");
	while ($file = readdir($dir))
	{
		if (($file != ".") && ($file != ".."))
		{
?>
      <option value="<?echo $file;?>"><?echo $file;?>
      <?
		}
	}
	closedir($dir);

	$root = realpath($realpath_real);
	chdir($root);
?>
          </select>
  </p>
<p>
  <input type="checkbox" name="vip_checkbox" value="YES">
  Vip<br>
    <br>
    <input type="hidden" name="isupdate" value="2">
    <input type="submit" value="���������">
    <input type="reset" value="������������">
</p>
</form>
