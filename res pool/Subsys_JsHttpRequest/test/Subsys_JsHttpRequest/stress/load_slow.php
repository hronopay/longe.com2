<?php
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
  "q"   => $q,
  "md5" => "<table><tr><td>".md5($q)."</td></tr></table>",
); 
sleep(2);
// ������������ ���������� ���������.
if (strpos($q, 'error') !== false) {
  callUndefinedFunction();
}
?>