<hr>
<form ENCTYPE="multipart/form-data" name="edit" method="post" action="news_index.php">
<h2>Новая статья</h2>
<table border=0>
<tr>
<td align="center">
Дата:
</td>
<td align="center" width=100>
Показывать:
</td>
<td align="center" width=100>
Архивный:
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
  Название новости: <br>
  <input type=text size=60 name="name">
  <br>
  <br>
  Заголовок новости: <br>
  <textarea cols=40 rows=8 name="subname"></textarea>
  <br>
  <br>
  Текст
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
    <option value="0" selected>Нет картинки
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
    <input type="submit" value="Сохранить">
    <input type="reset" value="Восстановить">
</p>
</form>
