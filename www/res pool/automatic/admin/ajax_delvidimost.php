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

if ($name == 'off'){
	 $query3="UPDATE `".$arr[2]."__ooo` SET `vidimost_yn` = 'нет' WHERE `id` = '".$arr[1]."' AND `idlevel_1` = 1 ";
	mysql_query ($query3)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query3."<BR>") ;
echo " Видимость отключена. После обновления странички переместится вниз таблицы."; 
}
else {
	 $query3="UPDATE `".$arr[2]."__ooo` SET `vidimost_yn` = 'да' WHERE `id` = '".$arr[1]."' AND `idlevel_1` = 1 ";
	mysql_query ($query3)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query3."<BR>") ;
echo " Видимость включена. После обновления странички переместится в верхнюю часть таблицы."; 
}
	 

 

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
