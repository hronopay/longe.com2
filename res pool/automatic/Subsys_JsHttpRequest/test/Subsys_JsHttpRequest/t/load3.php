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
$r1 = $_REQUEST['r1'];
$r2 = $_REQUEST['r2'];
$r3 = $_REQUEST['r3'];
$r5 = $_REQUEST['r5'];
$r6 = $_REQUEST['r6'];
$r7 = $_REQUEST['r7'];
/* 
$arr = explode("$$$",$r6); */

$r5++;


$a = 'москва';
$b = 'орел';

if ($r7 != 'new')
echo '<div id="result" style="border:1px solid #00b; margin:0; width:200px; border-bottom:1px solid #00b; border-left:1px solid #00b; border-right:1px solid #00b; border-top:0 solid #00b;" >
<a href="#" onclick="doLoad(true'.", '".$r2."', '".$r3."', '0', '".$r5."', '".$r1."', 'result'".')" >'.$r1.'</a>!<br>
<a href="#" onclick="doLoad(true'.", '".$r2."', '".$r3."', '0', '".$r5."', 'москва', 'result'".')" >'.$a.'</a>!<br>
<a href="#" onclick="doLoad(true'.", '".$r2."', '".$r3."', '0', '".$r5."', 'орел', 'new'".')" >'.$b.'</a>!
</div>';

else 
echo '<p><form onsubmit="return false"><input type="text" id="query'.$r5.'" onkeyup="doLoadUp(true, '."'query".$r5."', 'outputlist".$r5."', '0', '".$r5."', 0, 'old'".')" style="border:1px solid #00b; margin:0; width:201px;" ><div id="outputlist'.$r5.'" ></div></form>';


echo '$r2=' . $r2 .' $r3=' . $r3 .' $r5=' . $r5 ;



?>