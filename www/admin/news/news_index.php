<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Редактирование таблицы &quot;Новости&quot;</title>
</head>
<body>
<?php
include("../connect.php");
$title = "Администраторский интерфейс";
$realpath = "../../images/news";
$realpath_real = "../../admin";
?>
<script language="JavaScript">

function editart(s)
{
document.forms[0].func.value="edit";
document.forms[0].ided.value=s;
document.forms[0].submit();
}

function removeart(s,name)
{
sss="Вы действительно хотите удалить статью \""+name+"\"?";
document.forms[0].func.value="delete";
document.forms[0].ided.value=s;
if (confirm(sss)) document.forms[0].submit();
}

function newart()
{
document.forms[0].func.value="new";
document.forms[0].submit();
}

function viewart(s)
{
document.forms[0].func.value="view";
document.forms[0].ided.value=s;
document.forms[0].submit();
}
</script>
<center>
<h4><font color=#444488>Редактирование таблицы "Новости"</font></h4>
<br>

<?
if (isset ($func) && $func=='delete')
{
		$qSiteList = "delete from news where id=$ided";
		$result = @mysql_query ($qSiteList) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query."<BR>");
}

if (isset ($isupdate))
{
if (strlen($month)==1) $month='0'.$month;
if (strlen($day)==1) $day='0'.$day;
$date="$year-$month-$day";
if(isset($isvisible)) $isvisible=1; else $isvisible=0;
if(isset($isarchive)) $isarchive=1; else $isarchive=0;
if ($isupdate==1)
{
	if ($change == "file1")
	{
		$image = "";
		if ($file_size > 0)
		{
			$image = addSlashes($file_name);
			if (($file_type != "image/pjpeg") && ($file_type != "image/gif"))
			{
				$image = "";
			} else {
				$root = realpath($realpath);
				copy($file, $root."/".$image);

#				$root = realpath($realpath_real);
#				chdir($root);
			}
		}
	}
	if ($change == "file2")
	{
		$image = addSlashes($fileExist);
		if ($fileExist == "0") $image = "";
	}
	$qSiteList = "update news set id=$id, adate='$date', name='$name', subname='$subname', article='$article', isvisible=$isvisible, photo='$image', isarchive='$isarchive', vip='$vip_checkbox' where id=$oldid";
	$result = @mysql_query ($qSiteList) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSiteList."<BR>");
} else {
	if ($change == "file1")
	{
		$image = "";
		if ($file_size > 0)
		{
			$image = addSlashes($file_name);
			if (($file_type != "image/jpeg") && ($file_type != "image/gif"))
			{
				$image = "";
			} else {
				$root = realpath($realpath);
				copy($file, $root."/".$image);

#				$root = realpath($realpath_real);
#				chdir($root);
			}
		}
	}
	if ($change == "file2")
	{
		$image = addSlashes($fileExist);
		if ($fileExist == "0") $image = "";
	}
	$qSiteList = "insert into news values(0,'$date','$name', '$subname', '$article', $isvisible, '$image', '', '$isarchive', '$vip_checkbox', '0', '', '')";
	$result = @mysql_query ($qSiteList) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSiteList."<BR>");
	}
}
?>
<table bgcolor=#3B3214 width=100% cellpadding="2" cellspacing="1">
<tr bgcolor=#FFEBAE>
<td align="center">Дата</td>
<td align="center">Название</td>
<td align="center">Заголовок новости</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td colspan=6 bgcolor=#dddddd align="center"><a href="JavaScript:newart();">Добавить</a></td>
</tr>
<?
	$qSiteList = "select * from news order by adate DESC";
	$result = @mysql_query ($qSiteList) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query."<BR>");
$c=mysql_numrows($result);
for($i=0;$i<$c;$i++)
{
$id=mysql_result($result,$i,'id');
$name=htmlspecialchars(mysql_result($result,$i,'name'));
$subname1=htmlspecialchars(mysql_result($result,$i,'subname'));
$date=mysql_result($result,$i,'adate');
$isvisible=mysql_result($result,$i,'isvisible');
$isarchive=mysql_result($result,$i,'isarchive');
if ($isvisible) $scolor='#ffffff'; else $scolor='#e8e8e8';
if ($isarchive) $isarchive_STR = "A"; else $isarchive_STR = "";
echo "
<tr bgcolor=$scolor>
	<td align=center>$date</td>
	<td><a href=\"JavaScript:viewart('$id');\">$name</a></td>
	<td>".substr($subname1, 0, 80)."</td>
	<td>$isarchive_STR</td>
	<td align=center><a href=\"JavaScript:editart('$id');\">редактировать</a></td>
	<td align=center><a href=\"JavaScript:removeart('$id','$name');\">удалить</a></td>
</tr>
";		
}
?>
</table>
<br>
<form method="post" action="news_index.php">
<input type="hidden" name="func">
<input type="hidden" name="ided">
</form>
<?
if (isset ($func))
{
	if ($func=='edit') {
		include('news_editarticle.php');
	} else if ($func=='new') {
		include('news_newarticle.php');
	} else if ($func=='view') {
		include('news_viewarticle.php');
	}
}
?><br>
<br>
<h2>В самом конце работы ЗАФИКСИРОВАТЬ кнопкой ниже сделанные изменения!!!</h2><br>
<?
/* include_once($_SERVER['DOCUMENT_ROOT'].'/newscontent_creater.php'); */
?>
<form action="../../newscontent_creater.php" method="post">
<input name="B1" type="submit" value="Зафиксировать изменения">
</form>
</body>
</html>
