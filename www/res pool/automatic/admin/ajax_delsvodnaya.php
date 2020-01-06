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

	 $query3="UPDATE `".$arr[2]."__ooo` SET `svodnaya_yn` = 'нет' WHERE `id` = '".$arr[1]."' AND `idlevel_1` = 1 ";


//	 $query3="INSERT INTO `".$arr[2]."__okved".$arr[3]."` (`id`, `idlevel_1`, `idlevel_2`, `adress`, `dateofcreation`, `nomerokved`, `egotext`, `notes`, `parent`, `children`, `level`, `objrusname`) 	 VALUES (NULL, '".$arr[0]."', '".$arr[1]."', '', '".date("20y-m-d")."', '$value', '$name', '', '', '', '', '')";

	mysql_query ($query3)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query3."<BR>") ;
}
	 

 
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
