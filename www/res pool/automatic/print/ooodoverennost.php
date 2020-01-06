<?php 
session_start(); 
include("../config.php");

if (!defined('IN_SITE')) {
    die("На выход");
} 
include("../engine.php");
include("countries.php");
open_connection();

#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Доверенность</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<table width="718" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td>&nbsp;</td>
    <td><p align="right" class="style1">В <strong> <span style="text-decoration:underline; ">МИ ФНС России №46 по г. Москве</span></strong></p>
      <p align="right" class="style1"><strong>          </strong> От заявителя,<br>
        учредителя<br>
        ООО «<?php echo $nameshort; ?>»
        <br>
        <strong><?php echo $fiorod; ?><br>
              </strong> (Дата и место рождения: <?php echo  date_order($from_date)  ; ?><br> 
      <?php echo  $mestorojdeniya; ?><br> 
      <?php echo $dokument_dvid; ?>:<br>
		серия <?php echo  $seriap; ?> № <?php echo  $nomerp; ?>,<br> 
      выдан <?php echo  date_order($to_date)  ; ?><br> 
      <?php echo  $kemvydanp;  echo $kodp? " <br>код
подразделения ".$kodp:""; ?>.<br>

<?php if ($subject || $gorod) { ?>
      Зарегистрирован по адресу:<br> 
    <?php echo !strstr($subject, "Москва") ? "".$subject.", " : ""; ?> <?php echo $his_newmoscow == 2 ? "Москва, " : ""; ?> <?php echo $rajon ? "".$rajon.", " : ""; ?> <?php echo $gorod ? ( !strstr($gorod, "Москва")   ? " ".$gorod.", " : "г. Москва, ") : ""; ?> <?php echo $naspunkt ? "".$naspunkt.", " : ""; ?> <?php echo $ulitca ? "".$ulitca.", " : ""; ?> <?php echo $dom ? " ".$dom.", " : ""; ?> <?php echo $korpus ? "  ".$korpus.", " : ""; ?>  <?php echo $kvartira ? " ".$kvartira."" : ""; ?>
	
<?php }
else { ?>Адрес проживания:<br> <?php echo $countries[$strana] ; ?>, <?php echo $mesto ? " ".$mesto."" : ""; ?>
<? } ?>	
	)</p></td>
  </tr>
  <tr>
    <td><p class="style1"> г. Москва<br></p>
    </td>
    <td><div align="right"><?php echo date_mn($ustav_date); ?></div></td>
  </tr>
  <tr>
    <td colspan="2"><p align="center" class="style1"><strong> ДОВЕРЕННОСТЬ </strong></p>
      <p align="justify" class="style1">&nbsp; </p>
      <p align="justify" class="style1">Доверяю___________________________________________________________________<br>
        _________________________________паспорт:___________________________________ выдан_____________________________________________________________________ проживающий_______________________________________________________________ __________________________________________________________________________ </p>
      <p align="justify" class="style1"> Доверяю быть представителем в МИФНС № 46 по городу Москве и в отделениях почтовой связи города Москвы для подачи документов на государственную регистрацию юридического лица, получения на руки Свидетельства о государственной регистрации юридического лица, Свидетельства о постановке на учет в налоговом органе, заверенной копии Устава ООО «<?php echo $nameshort; ?>», Выписки из Единого государственного реестра юридических лиц, листов записи, получать учредительные документы предприятия, получать справки, расписываться в получении и совершать иные действия в целях надлежащего выполнения данного поручения.</p>
      <p class="style1">&nbsp;</p>
      <p class="style1"> Доверенность выдана сроком на 3 (три) месяца.<br> Полномочия по настоящей доверенности не могут быть переданы другим лицам. </p>
      <p class="style1">Подпись лица, получившего доверенность ______________ (________________ ) </p>
      <p align="right" class="style1">&nbsp;</p>
    <p align="right" class="style1">Удостоверяю _______________ (<?php echo $familya; ?> <?php echo $imya; ?> <?php echo $otchestvo; ?>) </p></td>
  </tr>
</table>
</body>
      <script type="text/javascript" language="javascript1.2">
<!--
// Do print the page
if (typeof(window.print) != 'undefined') {
    window.print();
}
//-->
      </script>

</html>
<?php 
function date_mn($da) {
  $monthlist = array('01' => 'января',
                     '02' => 'февраля',
                     '03' => 'марта',
                     '04' => 'апреля',
                     '05' => 'мая',
                     '06' => 'июня',
                     '07' => 'июля',
                     '08' => 'августа',
                     '09' => 'сентября',
                     '10' => 'октября',
                     '11' => 'ноября',
                     '12' => 'декабря'
                     );

$ar = explode ("-", $da);
return $res = "«".$ar[2]."» ".$monthlist[$ar[1]]." ".$ar[0]."г.";

}

function date_order($period) {
  $monthlist = array('01' => 'января',
                     '02' => 'февраля',
                     '03' => 'марта',
                     '04' => 'апреля',
                     '05' => 'мая',
                     '06' => 'июня',
                     '07' => 'июля',
                     '08' => 'августа',
                     '09' => 'сентября',
                     '10' => 'октября',
                     '11' => 'ноября',
                     '12' => 'декабря'
                     );
  $dlist = array(	'01' => '31',
                     '02' => '28',
                     '03' => '31',
                     '04' => '30',
                     '05' => '31',
                     '06' => '30',
                     '07' => '31',
                     '08' => '31',
                     '09' => '30',
                     '10' => '31',
                     '11' => '30',
                     '12' => '31'
                     );

$ar = explode ("-", $period);
return $res = $ar[2].".".$ar[1].".".$ar[0]." г.";

}

#
function toLower($content) { //трансформирует все буквы в нижний регистр
  $content = strtr($content, "АБВГДЕЁЖЗИЙКЛМНОРПСТУФХЦЧШЩЪЬЫЭЮЯ", "абвгдеёжзийклмнорпстуфхцчшщъьыэюя");
  return strtolower($content);
}
?>