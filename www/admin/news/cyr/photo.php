<?php
include("../header.php");
include("../connect.php");
$title = "Администраторский интерфейс";
        $lev = "../";

  $image_dir="../../images/news/";
  $head_color='bgcolor=#0080C0';
  $table="chemisinews";
  $quantity_short=5;
  $quantity_full=10;

	$root = realpath("$image_dir");
if(isset ($delete) && $delete != ""){
	chdir($root);
	unlink ($root."/".$delete);
}
                            
$res=mysql_query("SELECT * from $table order by news_id");


?>
<table align=center width=100% border=0 cellpadding=2>
<tr><th><h4>Изображения в разделе "Новости"</h4></th></tr>
<tr align=center><td><a href="photo_new.php">Добавить фото</a>&nbsp;|&nbsp;<a href="photo.php">Фото</a></td></tr>
<tr><td>
<?





	echo "<table align=center width=100% border=0 cellpadding=2>\n";
?>
<?

	echo "<tr><td>\n";
	echo "<table border=0 align=center width=98% cellpadding=0 bgcolor=navy cellspacing=0><tr><td>";
	echo "<table border=0 align=center width=100% cellpadding=4 cellspacing=1>";
	echo "<tr $head_color align=center><td>Рисунок</td><td>Файл</td><td>Удаление</td></tr>\n";




#	$root = realpath("$image_dir");
#echo ($root);
	chdir($root);
	$dir = opendir(".");
	while ($file = readdir($dir))
	{
		$picture_used = 0;
		if (($file != ".") && ($file != ".."))
		{
#			mysql_data_seek ($res, 0);
#			while($row=mysql_fetch_array($res)){
#				if ($file == $row['news_picture']) {
#					$picture_used = 1;
#				}
#				if ($file == $row['news_picture2']) {
#					$picture_used = 1;
#				}
#				if ($file == $row['news_picture3']) {
#					$picture_used = 1;
#				}
#			}
			if ($picture_used == 1) {
				$news_picture_STR = "<img src=\"$image_dir".$file."\" border=1>";
				echo "<tr><td align=center bgcolor=white>".$news_picture_STR."</td><td align=center bgcolor=white>".$file."</td><td align=center bgcolor=white>удалить</td></tr>\n";
			} else {
				$news_picture_STR = "<img src=\"$image_dir".$file."\" border=1>";
				echo "<tr><td align=center bgcolor=white>".$news_picture_STR."</td><td align=center bgcolor=white>".$file."</td><td align=center bgcolor=white><a href=\"photo.php?delete=".$file."\">удалить</a></td></tr>\n";
			}
		}
	}
	closedir($dir);
		echo "</table></td></tr>\n";
		echo "</table></td></tr>\n";
echo "</table>";

function toInnerFormat($id,$str){
$parts=preg_split("/\./",$str);
$newstr="news$id.".array_pop($parts);
return $newstr;
}

?>
</body></html>