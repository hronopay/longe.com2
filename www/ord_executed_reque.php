<?php 
/* function hren($busk_num, $id_ord){     
 $qqq = "SELECT * FROM `customerorder_".$busk_num."` WHERE id_ord=$id_ord"
$Or = mysql_query($qqq);
$row_Orders = mysql_fetch_object($Or);
echo $row_Orders->ord_executed; 
} */
include("connect.php");
require_once "../../Subsys_JsHttpRequest/lib/Subsys/JsHttpRequest/Php.php";
require_once "../../Subsys_JsHttpRequest/lib/config.php";

// Создаем главный объект библиотеки.
// Указываем кодировку страницы (обязательно!).
//$XML_JSHttpRequest = new XML_JSHttpRequest("windows-1251");
$JsHttpRequest =& new Subsys_JsHttpRequest_Php("windows-1251");
// Получаем запрос.
$q = $_REQUEST['q'];
$rr = $_REQUEST['rr'];
$busk_num = $_REQUEST['b'];
$id_ord = $_REQUEST['i'];
$ord_executed = $_REQUEST['o'];

$query3="UPDATE `customerorder_".$busk_num."` SET ord_executed='$ord_executed' WHERE id_ord=".$id_ord."";
      mysql_query ($query3) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query3."<BR>");
       $qqq = "SELECT * FROM `customerorder_".$busk_num."` WHERE id_ord=".$id_ord."";
$Or = mysql_query($qqq);
$row_Orders = mysql_fetch_object($Or);
echo " После обновления странички заказ покрасится в соответствующий цвет..."; 

// Формируем результат прямо в виде PHP-массива!
$_RESULT = array(
  "q"   => $q,
  "rr" => $rr,
  "b" => $busk_num,
  "i" => $id_ord,
  "o" => $ord_executed,
  "md5" => " ".$rr/* .",  ответ базы данных: ".$row_Orders->ord_executed */ ,
    'hello' => isset($_SESSION['hello'])? $_SESSION['hello'] : null
  ); 

// Демонстрация отладочных сообщений.
if (strpos($q, 'error') !== false) {
  callUndefinedFunction();
  }




      
//      echo 'huy  '.$q;


//$back = $_SERVER["HTTP_REFERER"];
//header ("location:".$back);
?>