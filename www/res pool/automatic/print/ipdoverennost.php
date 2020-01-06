<?php 
session_start(); 
include("../config.php");

if (!defined('IN_SITE')) {
    die("На выход");
} 
include("../engine.php");
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
<title>Доверенность <?php echo $familya; ?></title>
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
    <td><p align="right" class="style1">&nbsp; </p>
      <p align="right" class="style1">В <strong> <span style="text-decoration:underline; "><?php if($nalogovaya=='7746') echo "МИ ФНС России №46 по г. Москве"; else echo $nalogname; ?></span></strong></p>
      <p align="right" class="style1"><strong>          </strong> От заявителя, <br>
        <strong><?php echo $fiorod; ?><br>
              </strong> (Дата и место рождения: <?php echo  date_order($from_date)  ; ?><br> 
      <?php echo  $mestorojdeniya; ?><br> 
      Паспорт: серия <?php echo  $seriap; ?> № <?php echo  $nomerp; ?>,<br> 
      выдан <?php echo  date_order($to_date)  ; ?><br> 
      <?php echo  $kemvydanp; ?><br> 
      код подразделения <?php echo $kodp; ?>.<br> 
      Зарегистрирован по адресу:<br> 
    <?php echo $subject != "Москва город" ? "".$subject.", " : ""; ?> <?php echo $his_newmoscow == 2 ? "Москва, " : ""; ?> <?php echo $rajon ? "".$rajon.", " : ""; ?> <?php echo $gorod ? ($gorod != "Москва город" ? " ".$gorod.", " : "г. Москва, ") : ""; ?> <?php echo $naspunkt ? "".$naspunkt.", " : ""; ?> <?php echo $ulitca ? "".$ulitca.", " : ""; ?> <?php echo $dom ? " ".$dom.", " : ""; ?> <?php echo $korpus ? "  ".$korpus.", " : ""; ?>  <?php echo $kvartira ? " ".$kvartira."" : ""; ?>)</p></td>
  </tr>
  <tr>
    <td><p class="style1"> г. Москва<br><?php echo date_mnow(); ?></p>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><p align="center" class="style1"><strong> ДОВЕРЕННОСТЬ </strong></p>
      <p align="justify" class="style1">&nbsp; </p>
      <p align="justify" class="style1">Доверяю___________________________________________________________________<br>
        _________________________________паспорт:___________________________________ выдан_____________________________________________________________________ проживающий_______________________________________________________________ __________________________________________________________________________ </p>
      <p align="justify" class="style1"> Доверяю быть представителем в <?php if($nalogovaya=='7746') echo "Межрайонной инспекции Федеральной налоговой службы № 46 по городу Москве"; else echo $nalognamein; ?> для подачи документов на регистрацию физического лица в качестве индивидуального предпринимателя, получения на руки Свидетельства о государственной регистрации в качестве индивидуального предпринимателя, Свидетельства о постановке на учет в налоговом органе, Выписки из Единого государственного реестра индивидуальных предпринимателей, листов записи, получать справки, расписываться в получении и совершать иные действия в целях надлежащего выполнения данного поручения. </p>
      <p class="style1">Доверенность выдана сроком на один месяц.<br> Полномочия по настоящей доверенности не могут быть переданы другим лицам. </p>
      <p class="style1">Подпись лица, получившего доверенность ______________ (________________ ) </p>
      <p align="right" class="style1">&nbsp;</p>
    <p align="right" class="style1">Удостоверяю _______________ (<?php echo $familya; ?> <?php echo mb_substr($imya, 0, 1,'utf-8'); ?>.<?php echo mb_substr($otchestvo, 0, 1,'utf-8'); ?>.) </p></td>
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

function date_mnow() {
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

$ar = explode ("-", date("d-m-20y"));
return $res = "«".$ar[0]."» ".$monthlist[$ar[1]]." ".$ar[2]." г.";

}


?>