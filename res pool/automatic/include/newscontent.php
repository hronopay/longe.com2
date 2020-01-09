<?php 
include_once("config.php");
include_once("engine.php");
	open_connection();
?>
<?php 
$que = "SELECT * FROM `news` WHERE `vip` LIKE  'YES' ORDER BY `adate` DESC";
$result = sql_do($que);
 	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
	?><br><br>
<font size="-2" color="#aa0000"><?=$row['adate']?></font><br>
<? /* $row['subname'] */?>
<font size="-1"><?=$row['subname']?></font> 
	<? }

close_connection();
?>