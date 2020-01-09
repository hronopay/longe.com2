<?php
// Стартуем сессию.
session_start();
// Подключаем библиотеку поддержки.
require_once "../../../lib/config.php";
require_once "Subsys/JsHttpRequest/Php.php";
// Создаем главный объект библиотеки.
// Указываем кодировку страницы (обязательно!).
$JsHttpRequest =& new Subsys_JsHttpRequest_Php("utf-8");
// Получаем запрос.
$q = $_REQUEST['q'];
$rr = $_REQUEST['rr'];
$value = $_REQUEST['b'];
$name = $_REQUEST['i'];
/* $arrAll = $_REQUEST['o'];
$arr = explode("$$$",$arrAll); */
$count = $_REQUEST['o'];

$count=1;

// Формируем результат прямо в виде PHP-массива!
$_RESULT = array(
  "q"     => $q,
  "md5"   => md5($q)." ".time(),
  'hello' => isset($_SESSION['hello'])? $_SESSION['hello'] : null
); 
// Демонстрация отладочных сообщений.
if (strpos($q, 'error') !== false) {
  callUndefinedFunction();
}

$a = 'москва';
$b = 'орел';

if ($name != 'new')
echo '<div id="result" style="border:1px solid #00b; margin:0; width:200px; border-bottom:1px solid #00b; border-left:1px solid #00b; border-right:1px solid #00b; border-top:0 solid #00b;" >
<a href="#" onclick="doLoad(true'.", '".$value."', '".$rr."', '0', 'delete', '".$q."', 'result'".')" >'.$q.'</a>!<br>
<a href="#" onclick="doLoad(true'.", '".$value."', '".$rr."', '0', 'delete', 'москва', 'result'".')" >'.$a.'</a>!<br>
<a href="#" onclick="doLoad(true'.", '".$value."', '".$rr."', '0', 'new', 'орел', 'result'".')" >'.$b.'</a>!
</div>';

else 
echo '<p><input type="text" id="query'.$count.'" onkeyup="doLoadUp(true, '."'query1', 'debug1', '0', 'delete', ".$count.", 'old'".')" style="border:1px solid #00b; margin:0; width:201px;" >
	<div id="debug'.$count.'" ></div>';


echo '$value=' . $value .' $rr=' . $rr ;



?>