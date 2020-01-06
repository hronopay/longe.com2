<?

if (isset($action)) {} else {$action="_UNDEF_";}
if (isset($id_site)) {} else {$id_site=-1;}
if (isset($Type)) {} else {$Type="small";}
if (isset($id)) {} else {$id=-1;}


if ($Type == "small") {
//выборка названий и № разделов
  $query = "SELECT * FROM ".$table." ORDER BY ".$table."_name";
  $ress1 = @mysql_query ($query) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query."<BR>");

	$i1 = 0;
	while ($rowRes1 = mysql_fetch_assoc($ress1)) {
		if (isset($rowRes1[$table.'_name'])) {
			$S_id_sect1[$i1] = $rowRes1['id_'.$table];
			$S_name1[$i1] = $rowRes1[$table.'_name'];
			$i1++;
		}
	}
} else if ($Type == "full") {
//выборка названий и № разделов
  $query = "SELECT * FROM ".$table." ORDER BY ".$table."_name";
  $ress1 = @mysql_query ($query) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query."<BR>");

	$i1 = 0;
	while ($rowRes1 = mysql_fetch_object($ress1)) {
		if (isset($rowRes1[$table.'_name'])) {
			$S_id_sect1[$i1] = $rowRes1['id_'.$table];
			$S_name1[$i1] = $rowRes1[$table.'_name'];
			$S_name1_1[$i1] = "";
			$i1++;
		}
	}
}
$id_sect = $id;

if ($table == 'series') $table_rus_name = "серии";
elseif ($table == 'origname') $table_rus_name = "Специальность";
elseif ($table == 'translater') $table_rus_name = "переводчик";
elseif ($table == 'composer') $table_rus_name = "Производители";
elseif ($table == 'made_by') $table_rus_name = "производитель";
elseif ($table == 'format') $table_rus_name = "формат";
else $table_rus_name = "";

//echo $table_rus_name;
?>

 <table border="1" cellpadding="3" cellspacing="1" width="100%">
<?
			echo "
<tr>
<td width=\"100%\"  colspan=3><a href=\"AnyEdit.php?table=".$table."&amp;Type=".$Type."&amp;id=-1&amp;action=ADD\">добавить новую строку</a></td>
</tr>
";
	$j=$i1;
		for ($i1=0; $i1< $j; $i1++) {
			echo "
<tr>

<td width=\"35%\" >".$S_name1[$i1]."</td>
<td width=\"10%\" align=center class=td1><a href=\"AnyEdit.php?table=".$table."&amp;Type=".$Type."&amp;id=".$S_id_sect1[$i1]."&amp;action=EDIT\">редактировать</a></td>
<td width=\"10%\" align=center class=td1><a href=\"AnyDelete.php?table=".$table."&amp;Type=".$Type."&amp;id=".$S_id_sect1[$i1]."&amp;action=EDIT\">удалить</a></td>
</tr>
";
		}
		if ($j > 19) echo "
<tr>
<td width=\"100%\"  colspan=3><a href=\"AnyEdit.php?table=".$table."&amp;Type=".$Type."&amp;id=-1&amp;action=CREATE\">добавить новую строку</a></td>
</tr>
";
?>
  
 </table>

