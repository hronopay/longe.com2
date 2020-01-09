<?
include ('connect.php');

$action = $_GET['action'];
$action2 = $_GET['action2'];
$id_site = $_GET['id_site'];
$id_sect = $_GET['id_sect'];
$Type = $_GET['Type'];
$id = $_GET['id'];
$table  = $_GET['table'];
$name  = $_GET['name'];


if (isset($action)) {} else {$action="_UNDEF_";}
if (isset($action2)) {} else {$action2="_UNDEF_";}
if (isset($id_site)) {} else {$id_site=-1;}
if (isset($id_sect)) {} else {$id_sect=-1;}
if (isset($Type)) {} else {$Type="small";}
if (isset($id) && $id != -1) {} else {$id=-1; $action2 = "CREATE";}

if ($action == "DELETE") {


	$qSingleSite = "SELECT * FROM ".$table." WHERE (id_".$table." = $id)";	
  	$resSingleSite = @mysql_query ($qSingleSite) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSingleSite."<BR>");
  	$rSingleSite = mysql_fetch_assoc($resSingleSite);
	$origname_name = $rSingleSite[$table.'_name'];


		$query3="DELETE FROM ".$table." WHERE (id_".$table." = $id)";
		@mysql_query ($query3) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query3."<BR>");

	$q = "UPDATE  `users_jkh` SET `origname` = ''  WHERE `origname` LIKE '$origname_name'";
	@mysql_query ($q) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q."<BR>");




header ("Location:index.php?mode=profdirect");
} else {






//выборка описания раздела
  $qSingleSite = "SELECT * FROM ".$table." WHERE (id_".$table." = $id)";	
  $resSingleSite = @mysql_query ($qSingleSite) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSingleSite."<BR>");
  $rSingleSite = mysql_fetch_assoc($resSingleSite);
	$SectionNameGen = $rSingleSite[$table.'_name'];


$id_sect = $id;
?>

<p>Удаление <b><? echo "$SectionNameGen"; ?></b></p>
<form name="site" method="GET" action="AnyDelete.php">
  <input type="hidden" name="action" value="DELETE">
  <input type="hidden" name="table" value="<?=$table;?>">
  <input type="hidden" name="id_site" value="<?echo $id_site;?>">
  <input type="hidden" name="id" value="<?echo $id;?>">
 <table border="0" cellpadding="2" width="100%">
  <tr>
   <td width="20%"><font color="#000080"><b>Название</b></font>: </td>
   <td width="20%" align="right"><b><?=$rSingleSite[$table.'_name']; ?></b></td>
   <td width="20%" align="center"><input type="submit" value="Удалить" name="B1"></td>
  </tr>
 </table>
</form>
<hr size=1>
 <p><a href="index.php?mode=profdirect">Возврат в список</a></p>

<?
}
?>
