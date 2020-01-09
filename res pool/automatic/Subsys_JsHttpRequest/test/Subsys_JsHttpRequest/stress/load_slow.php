<?php
// Подключаем библиотеку поддержки.
require_once "../../../lib/config.php";
require_once "Subsys/JsHttpRequest/Php.php";
// Создаем главный объект библиотеки.
// Указываем кодировку страницы (обязательно!).
$JsHttpRequest =& new Subsys_JsHttpRequest_Php("windows-1251");
// Получаем запрос.
$q = $_REQUEST['q'];
// Формируем результат прямо в виде PHP-массива!
$_RESULT = array(
  "q"   => $q,
  "md5" => "<table><tr><td>".md5($q)."</td></tr></table>",
); 
sleep(2);
// Демонстрация отладочных сообщений.
if (strpos($q, 'error') !== false) {
  callUndefinedFunction();
}
?>