<?php 
include("connect.php");
include("../engine.php");
require_once "../Subsys_JsHttpRequest/lib/Subsys/JsHttpRequest/Php.php";
require_once "../Subsys_JsHttpRequest/lib/config.php";

// Создаем главный объект библиотеки.
// Указываем кодировку страницы (обязательно!).
//$XML_JSHttpRequest = new XML_JSHttpRequest("windows-1251");

$JsHttpRequest =/* & */ new Subsys_JsHttpRequest_Php("windows-1251");

// Получаем запрос.

$kvid = $_REQUEST['b'];
$nomer = $_REQUEST['o'];
$domadress = $_REQUEST['rr'];
$userlogin = $_REQUEST['i'];
$dom_id = $_REQUEST['r'];

$q = $_REQUEST['q'];

echo ' Кв.  № '.$nomer.'&nbsp;&nbsp;&nbsp;&nbsp;<input name="oplata_'.$kvid.'" type="text" size="9">&nbsp;&nbsp;&nbsp;&nbsp;';
makeform_from_date("d_".$kvid."_",date("20y-m-d"));
echo '&nbsp;&nbsp;&nbsp;&nbsp;';

echo '<select name="bank_'.$kvid.'" style="width:150px;"><option value="" selected>выбрать банк';

	  $q_origname = "SELECT * FROM ".$userlogin."__bankplateja ORDER BY nazvanie";
	  $resq_origname = @mysql_query ($q_origname) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query."<BR>");
 	while ($roworigname = mysql_fetch_object($resq_origname))
	{
		if (($roworigname->nazvanie == $origname))
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$roworigname->nazvanie."\" $selected_STR>".$roworigname->nazvanie."</option>");
		

		
	}
echo '</select>&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input name="nomer_'.$kvid.'" type="hidden" value="'.$nomer.'"><input name="domadress_'.$kvid.'" type="hidden" value="'.$domadress.'"><input name="dom_id_'.$kvid.'" type="hidden" value="'.$dom_id.'">';


// Формируем результат прямо в виде PHP-массива!
 $_RESULT = array(
  "q"   => " ".$q,
  "rr" => " "/* .$domadress */,
  "b" => " ".$kvid,
  "i" => " ".$userlogin,
  "o" => " ".$nomer,
  "md5" => " "/* .makeform_from_date("dateto",date("20y-m-d")) */ ,
    'hello' => isset($_SESSION['hello'])? $_SESSION['hello'] : null
	); 
 
// Демонстрация отладочных сообщений.
if (strpos($q, 'error') !== false) {
  callUndefinedFunction();
	}




			


//$back = $_SERVER["HTTP_REFERER"];
//header ("location:".$back);
?>