<?php 
include("connect.php");
require_once "../Subsys_JsHttpRequest/lib/Subsys/JsHttpRequest/Php.php";
require_once "../Subsys_JsHttpRequest/lib/config.php";

// Создаем главный объект библиотеки.
// Указываем кодировку страницы (обязательно!).
//$XML_JSHttpRequest = new XML_JSHttpRequest("windows-1251");

$JsHttpRequest =/* & */ new Subsys_JsHttpRequest_Php("utf-8");

// Получаем запрос.
$q = $_REQUEST['q'];
$rr = $_REQUEST['rr'];
$value = $_REQUEST['b'];
$name = $_REQUEST['i'];
$arrAll = $_REQUEST['o'];
$arr = explode("$$$",$arrAll);

if ($name == 'delete'){
	$query3="DELETE FROM `".$arr[2]."__okved".$arr[3]."` WHERE `id` = ".$value ;
	mysql_query ($query3) or die ("<p><b>ERROR-----!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query3."<BR>");
}
else {
	 $query3="INSERT INTO `".$arr[2]."__okved".$arr[3]."` (`id`, `idlevel_1`, `idlevel_2`, `adress`, `dateofcreation`, `nomerokved`, `egotext`, `notes`, `parent`, `children`, `level`, `objrusname`) 	 VALUES (NULL, '".$arr[0]."', '".$arr[1]."', '', '".date("20y-m-d")."', '$value', '$name', '', '', '', '', '')";
	mysql_query ($query3)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query3."<BR>") ;
}
	 
?>

<table border="0" width="100%" style="background-color:#000099; color:#FFFF00;">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <th  style="color:#FFFF00;">Выбранные виды деятельности</th>
    <th ><a  style="background-color:#000099; color:#FFFF00;" href="javascript:inver('debug')">[X]</a></th>
  </tr>
  <?

//echo "<a  href=\"javascript:inver('debug')\"  style=\"text-align:right; \">Закрыть</a><br>";
$qqq = "SELECT * FROM `".$arr[2]."__okved".$arr[3]."` WHERE `idlevel_1` = ".$arr[0]." AND `idlevel_2` = ".$arr[1]." ORDER BY `nomerokved` ASC";
$Or = mysql_query($qqq)  or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>");
$j=1;
$tdblack_style = "<td style=\"background-color:#000000; color:#FFFFFF; padding: 0 5px; \">";

while ($row = mysql_fetch_object($Or)){
	if ($j%2) 	$td_style = "<td style=\"background-color:#000099; color:#FFFF00; \">";
	else 		$td_style = "<td style=\"background-color:#0f00bf; color:#FFFF00;\">";
		echo "  <tr>
    ".$tdblack_style.$j."</td>
    ".$td_style.Nbsp(3).$row->nomerokved."</td>
    ".$td_style.Nbsp(5).$row->egotext."</td>
    ".$tdblack_style."<span onclick=\"doLoad(true, 'result', 'debug', '".$row->id."', 'delete', '".$arrAll."', 'result')\">Удалить</span></td>
  </tr>";
  $j++;
		
 }
 

?>
</table>
<?

 
//echo " После обновления странички заказ покрасится в соответствующий цвет..."; 

// Формируем результат прямо в виде PHP-массива!
 $_RESULT = array(
  "q"   => "дур ".$q,
  "rr" => "ко ".$rr,
  "b" => "та ".$busk_num,
  "i" => "апапап ".$id_ord,
  "o" => "ророта ".$ord_executed,
  "md5" => "<input   name=\"ggg\" type=\"checkbox\" value=\"444\" checked>" ,
  'hello' => isset($_SESSION['hello'])? $_SESSION['hello'] : null
	); 
 
// Демонстрация отладочных сообщений.
if (strpos($q, 'error') !== false) {
  callUndefinedFunction();
	}


function Nbsp($num)
{
$k = '';
for ($i=0;$i<$num;$i++) $k .= '&nbsp;';
return $k;
}



			


//$back = $_SERVER["HTTP_REFERER"];
//header ("location:".$back);
?>
