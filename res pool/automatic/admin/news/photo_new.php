<?php
include("../header.php");
include("../connect.php");
$title = "Администраторский интерфейс";
$realpath = "../../images/news";
$realpath_real = "../../admin";
?>
<table align=center width=100% border=0 cellpadding=2>
<tr><th><h4>Изображения в разделе "Новости"</h4></th></tr>
<tr align=center><td><a href="photo_new.php">Добавить фото</a>&nbsp;|&nbsp;<a href="photo.php">Фото</a></td></tr>
<tr><td>

<?
if (isset ($isupdate))
{
	if ($isupdate==1)
	{
		if ($file_size > 0)
		{
			$image = addSlashes($file_name);
			$root = realpath($realpath);
			copy($file, $root."/".$image);
echo ("<p align=center>OK</p>");
		}
	}
}
?>
<table bgcolor=#3B3214 width=100% cellpadding="2" cellspacing="1">
<tr bgcolor=#FFEBAE>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td colspan=1 bgcolor=#dddddd align="center"><form method="post" action="index.php">
<input type="hidden" name="func">
<input type="hidden" name="ided">
</form>
<?
?>
<hr>
<form ENCTYPE="multipart/form-data" name="edit" method="post" action="photo_new.php">
<input type="file" name="file" style="width:300px;" class="input"><br>
<input type="hidden" name="isupdate" value="1">
<input type="submit" value="Добавить">
</form>
</td>
</tr>
</table>
<br>
<?
?>
</body></html>