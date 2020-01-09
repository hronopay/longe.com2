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
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1251">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<link rel=File-List href="ooospisok.files/filelist.xml">
<title>Список</title>

<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:204;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:1627421319 -2147483648 8 0 66047 0;}
@font-face
	{font-family:Georgia;
	panose-1:2 4 5 2 5 4 5 2 3 3;
	mso-font-charset:204;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:647 0 0 0 159 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.ConsNormal, li.ConsNormal, div.ConsNormal
	{mso-style-name:ConsNormal;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	text-indent:36.0pt;
	mso-pagination:none;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:10.0pt;
	font-family:Arial;
	mso-fareast-font-family:"Times New Roman";}
p.ConsNonformat, li.ConsNonformat, div.ConsNonformat
	{mso-style-name:ConsNonformat;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:10.0pt;
	font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";}
p.ConsCell, li.ConsCell, div.ConsCell
	{mso-style-name:ConsCell;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:10.0pt;
	font-family:Arial;
	mso-fareast-font-family:"Times New Roman";}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
@page Section1
	{size:842.0pt 21.0cm;
	mso-page-orientation:landscape;
	margin:2.0cm 42.55pt 33.95pt 70.9pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:769619934;
	mso-list-template-ids:228599704;}
@list l0:level1
	{mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l0:level4
	{mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l0:level7
	{mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l1
	{mso-list-id:1670595868;
	mso-list-type:hybrid;
	mso-list-template-ids:-1692215478 -231678804 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
@list l1:level1
	{mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>
<style>
@media print {
body {
page-size: landscape;
}
}
</style>

</head>

<body lang=RU style='tab-interval:35.4pt'>

<div class=Section1>

<p class=ConsNonformat style='text-align:justify'><o:p>&nbsp;</o:p></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:36.0pt;font-family:
Georgia'><o:p>&nbsp;</o:p></span></b></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:36.0pt;font-family:
Georgia'><o:p>&nbsp;</o:p></span></b></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:36.0pt;font-family:
Georgia'>СПИСОК УЧАСТНИКОВ <o:p></o:p></span></b></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:22.0pt;font-family:
Georgia'><o:p>&nbsp;</o:p></span></b></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:24.0pt;font-family:
Georgia'>общества с ограниченной ответственностью<o:p></o:p></span></b></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:24.0pt;font-family:
Georgia'>«<?php echo $naimenovanie; ?>» <o:p></o:p></span></b></p>

<p class=ConsNormal align=right style='text-align:right;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:18.0pt;font-family:
Georgia'><o:p>&nbsp;</o:p></span></b></p>

<p class=ConsNormal align=right style='text-align:right;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:18.0pt;font-family:
Georgia'>ведется с <?php echo date_mnz($ustav_date); ?><o:p></o:p></span></b></p>

<p class=ConsNonformat style='text-align:justify'><span style='font-size:16.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=ConsNonformat style='text-align:justify'><span style='font-size:16.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=ConsNormal style='text-indent:0cm'><b style='mso-bidi-font-weight:
normal'><span style='font-size:18.0pt;font-family:Georgia'><o:p>&nbsp;</o:p></span></b></p>

<p class=ConsNormal style='text-align:justify;text-indent:0cm'><span
style='font-size:14.0pt;font-family:"Times New Roman"'>Ответственное лицо:<o:p></o:p></span></p>

<p class=ConsNormal style='text-align:justify;text-indent:0cm'><span
style='font-size:14.0pt;font-family:"Times New Roman"'><span
style='mso-spacerun:yes'> </span>Генеральный директор<o:p></o:p></span></p>

<p class=ConsNormal style='text-align:justify;text-indent:0cm'><span
style='font-size:14.0pt;font-family:"Times New Roman"'><span
style='mso-spacerun:yes'> </span>ООО «<?php echo $naimenovanie; ?>»<span style='mso-spacerun:yes'>  
</span>________________<span style='mso-spacerun:yes'>  </span><?php echo $familya; ?> <?php echo substr($imya, 0, 1); ?>.<?php echo substr($otchestvo, 0, 1); ?>.</span></p>

<p class=ConsNormal style='margin-bottom:24.0pt;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
style='font-size:16.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></i></b></p>

<p class=ConsNormal align=right style='text-align:right;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:18.0pt;font-family:
Georgia'><o:p>&nbsp;</o:p></span></b></p>

<p class=ConsNormal align=right style='text-align:right;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:18.0pt;font-family:
Georgia'><o:p>&nbsp;</o:p></span></b></p>

<p class=ConsNormal align=right style='text-align:right;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:18.0pt;font-family:
Georgia'><o:p>&nbsp;</o:p></span></b></p>

<p class=ConsNormal align=right style='text-align:right;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:18.0pt;font-family:
Georgia'><o:p>&nbsp;</o:p></span></b></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:18.0pt;font-family:
Georgia'>Москва - <?php echo date("20y");; ?><o:p></o:p></span></b></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:18.0pt;font-family:
Georgia'>СПИСОК УЧАСТНИКОВ <o:p></o:p></span></b></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><b
style='mso-bidi-font-weight:normal'><span style='font-size:18.0pt;font-family:
Georgia'>ООО «<?php echo $naimenovanie; ?>»<o:p></o:p></span></b></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><span
style='font-size:14.0pt;font-family:Georgia'>(далее по тексту – Общество)<o:p></o:p></span></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><span
style='font-size:14.0pt;font-family:Georgia'><o:p>&nbsp;</o:p></span></p>

<p class=ConsNormal align=center style='text-align:center;text-indent:0cm'><span
style='font-size:14.0pt;font-family:Georgia'><o:p>&nbsp;</o:p></span></p>

<div style="margin:0 0 0 50px; ">

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=1007
 style='width:755.0pt;margin-left:-36.5pt;border-collapse:collapse;mso-padding-alt:
 0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;height:94.2pt'>
  
  <td width=33 style='width:25.0pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt;height:94.2pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'>N
  <br>
  <span class=SpellE><span class=GramE>п</span></span>/<span class=SpellE>п</span><o:p></o:p></span></i></b></p>
  </td>
  
  
  <td width=160 style='width:120.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:solid windowtext .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:94.2pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'>Сведения
  об участнике Общества<span style='mso-spacerun:yes'>    </span><br>
  (Ф.И.О., организационно-правовая<span style='mso-spacerun:yes'>    </span><br>
  форма и наименование юридического лица) / Общество<o:p></o:p></span></i></b></p>
  </td>
  <td width=307 style='width:230.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:solid windowtext .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:94.2pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'>Вид,
  номер, серия, дата и место выдачи документа, удостоверяющего личность,
  орган,<span style='mso-spacerun:yes'>  </span><br>
  выдавший документ <o:p></o:p></span></i></b></p>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'>(номер
  <span class=SpellE>гос</span>. регистрации, наименование органа,
  осуществившего регистрацию, дата регистрации)<o:p></o:p></span></i></b></p>
  </td>
  <td width=147 style='width:110.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:solid windowtext .75pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:94.2pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></i></b></p>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'>Адрес
  места регистрации (место нахождения)<o:p></o:p></span></i></b></p>
  </td>
  <td width=133 style='width:100.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .75pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:94.2pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'>Размер
  доли в уставном капитале Общества,<span style='mso-spacerun:yes'>  </span>её
  номинальная стоимость<span style='mso-spacerun:yes'>  </span><o:p></o:p></span></i></b></p>
  </td>
  <td width=227 style='width:170.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:solid windowtext .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:94.2pt'>
  <p class=ConsCell align=center style='margin-right:-3.5pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-family:"Times New Roman"'>Сведения об оплате доли (о переходе
  долей Обществу или о приобретении их Обществом): <o:p></o:p></span></i></b></p>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>дата первоначального взноса / дата полной
  оплаты доли <o:p></o:p></span></i></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.0pt'>
  <td width=33 valign=top style='width:25.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.0pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-family:"Times New Roman"'>1<o:p></o:p></span></b></p>
  </td>
  <td width=160 valign=top style='width:120.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt;height:
  12.0pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-family:"Times New Roman"'>2<o:p></o:p></span></b></p>
  </td>
  <td width=307 valign=top style='width:230.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt;height:
  12.0pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-family:"Times New Roman"'>3<o:p></o:p></span></b></p>
  </td>
  <td width=147 valign=top style='width:110.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.0pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-family:"Times New Roman"'>4<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:100.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.0pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-family:"Times New Roman"'>5<o:p></o:p></span></b></p>
  </td>
  <td width=227 valign=top style='width:170.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt;height:
  12.0pt'>
  <p class=ConsCell align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-family:"Times New Roman"'>6<o:p></o:p></span></b></p>
  </td>
 </tr>
 

<?php 
$sch=0;
$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE  `uchreditel_yn`='да' AND  `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;
    $fiorod = $row->fiorod;
    $fiovin = $row->fiovin;

    $inn = $row->inn;
    $his_pol = $row->his_pol;
    $mestorojdeniya = $row->mestorojdeniya;
    $from_date = $row->from_date;

    $seriap = $row->seriap;
    $nomerp = $row->nomerp;
    $kemvydanp = $row->kemvydanp;
    $to_date = $row->to_date;
    $kodp = $row->kodp;

    $his_newmoscow = $row->his_newmoscow;
    $pochtindex = $row->pochtindex;
    $subject = $row->subject;
    $rajon = $row->rajon;
    $gorod = $row->gorod;
    $naspunkt = $row->naspunkt;
    $ulitca = $row->ulitca;
    $dom = $row->dom;
    $korpus = $row->korpus;
    $kvartira = $row->kvartira;

    $dolyanominal = $row->dolyanominal;
    $dolyaprocent = $row->dolyaprocent;
    $uchreditel_yn = $row->uchreditel_yn;
    $gendir_yn = $row->gendir_yn;
    $zayavitel_yn = $row->zayavitel_yn;

    $dolyanominal = $row->dolyanominal;
    $dolyaprocent = $row->dolyaprocent;

	$dolyanominal = $kapital*$dolyaprocent/100;
	$fio = $familya.' '.$imya.' '.$otchestvo;

    $dokument_dvid 	= $row->dokument_dvid ?"паспорт иностранного гражданина":"заграничный паспорт гражданина России";
    $strana 		= $row->strana;
    $mesto 			= $row->mesto;
	
	if(!$sch) $preds = $fio;
	elseif($sch==1) $sekr = $fio;



	ob_start();

 $passpdata = $dokument_dvid." серия ". $seriap." номер ".  $nomerp.", выдан ".  $kemvydanp." ".  date_order($to_date) . ($kodp? " код
подразделения ".$kodp:"")." "; 
 
if ($subject || $gorod) { 
 echo "РФ, ".$pochtindex.", " ;
 echo !strstr($subject, "Москва") ? "".$subject.", " : "";
 echo $his_newmoscow == 2 ? "Москва, " : "";
 echo $rajon ? "".$rajon.", " : "";  
 echo $gorod ? ($gorod != "Москва город" ? "г. ".$gorod.", " : "г. Москва, ") : "";  
 echo $naspunkt ? "".$naspunkt.", " : "";  
 echo $ulitca ? "".$ulitca.", " : "";  
 echo $dom ? " ".$dom.", " : ""; 
 echo $korpus ? "  ".$korpus.", " : "";  
 echo $kvartira ? " ".$kvartira."" : ""; 
}
else {
 echo $strana .", ";  echo $mesto ? " ".$mesto."" : ""; 
}
	$uchrpasp_content=ob_get_contents();
	ob_end_clean();

	$sch++;

?> 
 
<tr style='mso-yfti-irow:2;height:12.0pt'>
  <td width=33 valign=top style='width:25.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.0pt'>
  <p class=ConsCell align=center style='margin-left:0cm;text-align:center;
  text-indent:0cm;mso-list:l1 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]><span
  style='font-family:"Times New Roman"'><span style='mso-list:Ignore'><?php echo $sch; ?>.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=160 valign=top style='width:120.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt;height:
  12.0pt'>
  <p class=ConsCell><span class=SpellE><span style='font-size:9.0pt;font-family:
  "Times New Roman";color:black;mso-bidi-font-weight:bold'><?php echo $fio; ?></span></span></p>
  </td>
  <td width=307 valign=top style='width:230.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt;height:
  12.0pt'>
  <p class=ConsCell><span style='font-size:9.0pt;font-family:"Times New Roman";
  color:black;mso-bidi-font-weight:bold'><?php echo $passpdata; ?></span><span
  style='font-size:9.0pt;font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td width=147 valign=top style='width:110.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.0pt'>
  <p class=ConsCell><span style='font-size:9.0pt;font-family:"Times New Roman"'><?php echo $uchrpasp_content; ?></span></p>
  </td>
  <td width=133 valign=top style='width:100.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.0pt'>
  <p class=ConsCell align=center style='text-align:center'><span
  style='font-family:"Times New Roman"'><?php echo $dolyaprocent; ?>% = <?php echo $dolyanominal;  ?> рублей<o:p></o:p></span></p>
  </td>
  <td width=227 valign=top style='width:170.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt;height:
  12.0pt'>
  <p class=ConsCell><span style='font-family:"Times New Roman"'><?php echo str_replace("«","",str_replace("»","",date_mn($ustav_date))); ?><o:p></o:p></span></p>
  </td>
 </tr>
 
<?php }
?> 
</table>

</div>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

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
function date_mnz($da) {
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
return $res = "«___» ".$monthlist[$ar[1]]." ".$ar[0]."г.";

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

?>