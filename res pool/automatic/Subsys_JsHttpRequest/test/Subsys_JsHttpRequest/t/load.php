<?php
// Стартуем сессию.
session_start();
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
  "q"     => $q,
  "md5"   => md5($q)." ".time(),
  'hello' => isset($_SESSION['hello'])? $_SESSION['hello'] : null
); 
// Демонстрация отладочных сообщений.
if (strpos($q, 'error') !== false) {
  callUndefinedFunction();
}

echo "<b>REQUEST_URI:</b> ".$_SERVER['REQUEST_URI']."<br>";
echo "<b>Loader used:</b> ".$JsHttpRequest->LOADER;
?>