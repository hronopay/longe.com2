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

if ($action == "UPDATE") {
  $errror_YES = 0;
  
  
  if ($action2 == "CREATE") {
	
		if (isset($name) && $name != "") {
			$query3="INSERT INTO ".$table." (".$table."_name) VALUES ('$name')";
			@mysql_query ($query3) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query3."<BR>");
			$id = mysql_insert_id ();
			header ("Location:index.php?mode=profdirect");
		} 
		else {
			$ERROR_text = "<br>НЕ ЗАДАНО ИМЯ РАЗДЕЛА";
			$errror_YES = 1;
		}
	
  } 
  else {
	$que1 = "SELECT * FROM ".$table." WHERE (id_".$table." = $id)";
	$res1 = @mysql_query ($que1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$que1."<BR>"  );
  while ($row1 = mysql_fetch_assoc($res1)) {
		if (isset($row1['id_'.$table])) {
			if (isset($id) && isset($name)) {
				if ($id>=0){
					$qSingleSite = "SELECT * FROM ".$table." WHERE (id_".$table." = $id)";	
				  	$resSingleSite = @mysql_query ($qSingleSite) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSingleSite."<BR>");
				  	$rSingleSite = mysql_fetch_assoc($resSingleSite);
					$origname_name = $rSingleSite[$table.'_name'];

					$query3="UPDATE ".$table." SET ".$table."_name='$name' WHERE id_".$table."=$id";
					@mysql_query ($query3) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query3."<BR>");

					$q = "UPDATE  `users_jkh` SET `origname` = '$name'  WHERE `origname` LIKE '$origname_name'";
					mysql_query ($q) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q."<BR>");

					header ("Location:index.php?mode=profdirect"); exit;
				}
			}
			$str_Exist = 1;
			break;
		} else {
			$ERROR_text = "<br>НЕВОЗМ. ИЗМ. НА НОВОЕ ЗНАЧЕНИЕ, УЖЕ ПРИСУТСТВУЕТ";

		}
	}
}
}






//выборка описания раздела
  $qSingleSite = "SELECT * FROM ".$table." WHERE (id_".$table." = $id)";	
  $resSingleSite = @mysql_query ($qSingleSite) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSingleSite."<BR>");
  $rSingleSite = mysql_fetch_assoc($resSingleSite);
	$SectionNameGen = $rSingleSite[$table.'_name'];
/* 	$about = $rSingleSite->about;
	$foto_s = $rSingleSite->foto_s;
 */

$id_sect = $id;


#include("./header.php");
?>

<script language="JavaScript" type="text/javascript">
<!-- 
function check() {
	if (document.site.name.value=="") window.alert("Вы не ввели Название");
	else document.site.submit();
   }
function check1() {
	if (document.site1.id_sect.value=="0") window.alert("Вы не выбрали Основной раздел");
	else document.site1.submit();
   }
// -->
</script>

<p>Редактирование/Создание <b><? 
if ($table == 'series') $table_rus_name = "серии";
elseif ($table == 'origname') $table_rus_name = " СПЕЦИАЛЬНОСТЬ";
elseif ($table == 'translater') $table_rus_name = "переводчик";
elseif ($table == 'composer') $table_rus_name = "Производители";
elseif ($table == 'made_by') $table_rus_name = "производитель";
elseif ($table == 'format') $table_rus_name = "формат";
else $table_rus_name = "";

echo "$table_rus_name"; ?></b></p>
<form name="site" method="GET" action="AnyEdit.php">
  <input type="hidden" name="action" value="UPDATE">
  <?php if ($id == -1){ ?><input type="hidden" name="action2" value="CREATE"><?php }?>
  <input type="hidden" name="table" value="<?=$table;?>">
  <input type="hidden" name="id" value="<?=$id;?>">
 <table border="0" cellpadding="2" width="100%">
  <tr>
   <td width="50%"><font color="#000080"><b>Название</b></font>: </td>
   <td width="35%" align="right"><input type="text" name="name" size="50" value="<?=$rSingleSite[$table.'_name']; ?>"></td>
 </table>
<hr size=1>
 <p>&nbsp;</p>
 <table border="0" cellpadding="2" width="100%">
  <tr>
   <td width="15%" align="center" colspan="2"><input type="button" value="Записать" name="B1" onClick="check();"></td>
  </tr>
 </table>

</form>
<hr size=1>
 <p><a href="index.php?mode=profdirect">Возврат в список</a></p>
 <?php //phpinfo(32);?>
