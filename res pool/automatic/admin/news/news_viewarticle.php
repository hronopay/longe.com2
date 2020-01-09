<?
$id=$ided;
	$qSiteList = "select id, name,subname,article,dayofmonth(adate) as aday, month(adate) as amonth,Year(adate) as ayear, DATE_FORMAT(adate,'%d.%m.%Y') as date, isvisible, photo from news where id='$id'";
	$result = @mysql_query ($qSiteList) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query."<BR>");
$name=mysql_result($result,0,'name');
$subname=mysql_result($result,0,'subname');
$day=mysql_result($result,0,'aday');
$month=mysql_result($result,0,'amonth');
$year=mysql_result($result,0,'ayear');
$isvisible=mysql_result($result,0,'isvisible');
$article=mysql_result($result,0,'article');
$subname=nl2br(htmlspecialchars($subname));
$article=nl2br(htmlspecialchars($article));
if ($isvisible!=0) $isvisibles='checked';
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
$date="$day ".$months[$month]." $year";
echo "
<hr>";
echo "<table cellpadding=0 cellspacing=0 width=\"100%\">";

$i=0;
$id=mysql_result($result,$i,'id');
$date=mysql_result($result,$i,'date');
$name=htmlspecialchars(mysql_result($result,$i,'name'));
$subname=htmlspecialchars(mysql_result($result,$i,'subname'));
$article=mysql_result($result,$i,'article');
$article=str_replace("\n",'<br><br>',(htmlspecialchars($article)));
$article=str_replace("  ",'&nbsp;&nbsp;',$article);
$photo = mysql_result($result,$i,'photo');
if ($photo != "") {
	$photoSTR = "<img src=\"../images/news/".$photo."\" border=1 align=left>";
} else {
	$photoSTR = "";
}
echo "
<tr><td>
<p align=right><font face=\"Arial\" class=\"date1\">$date</font><a name=$i></p>
<center>
<p class=\"names\">$name</p>
<p class=\"names\">$subname</p>
</center>";

echo "<p class=news>".$photoSTR.$article."</p>
</td></tr><tr height=60><td><hr color=#3B3214 size=1 width=100%></td></tr>
";
?>
</table>
