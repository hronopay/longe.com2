<?php
// �������� ������.
session_start();
// ���������� ���������� ���������.
require_once "../../../lib/config.php";
require_once "Subsys/JsHttpRequest/Php.php";
// ������� ������� ������ ����������.
// ��������� ��������� �������� (�����������!).
$JsHttpRequest =& new Subsys_JsHttpRequest_Php("windows-1251");
// �������� ������.
$q = $_REQUEST['q'];
// ��������� ��������� ����� � ���� PHP-�������!
$_RESULT = array(
  "q"     => $q,
  "md5"   => md5($q),
  'hello' => isset($_SESSION['hello'])? $_SESSION['hello'] : null
); 
// ������������ ���������� ���������.
if (strpos($q, 'error') !== false) {
  callUndefinedFunction();
}

echo "<b>REQUEST_URI:</b> ".$_SERVER['REQUEST_URI']."<br>";
echo "<b>Loader used:</b> ".$JsHttpRequest->LOADER;
?>