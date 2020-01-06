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

$fio = $familya.' '.$imya.' '.$otchestvo;

?><html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<link rel=File-List href="квитанция%20госпошлина.files/filelist.xml">
<title>Квитанция <?php echo $familya; ?></title>

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
	{font-family:CourierCTT;
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-alt:"Times New Roman";
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:CourierCTT;
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
h1
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:right;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	font-size:8.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:CourierCTT;
	mso-font-kerning:0pt;
	font-weight:normal;
	text-decoration:underline;
	text-underline:single;}
h2
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	font-size:10.0pt;
	font-family:CourierCTT;
	mso-bidi-font-weight:normal;}
h3
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:3;
	font-size:10.0pt;
	font-family:CourierCTT;
	mso-bidi-font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
h4
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:4;
	font-size:10.0pt;
	font-family:CourierCTT;
	mso-bidi-font-weight:normal;}
h5
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:200%;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:5;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:CourierCTT;
	font-weight:normal;}
h6
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:6;
	font-size:8.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:CourierCTT;
	mso-bidi-font-weight:normal;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
@page Section1
	{size:21.0cm 842.0pt;
	margin:14.2pt 2.0cm 14.2pt 2.0cm;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Обычная таблица";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2050"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=RU style='tab-interval:35.4pt'>

<div class=Section1>

<p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='margin-left:12.5pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:44.65pt'>
  <td width=198 rowspan=8 valign=top style='width:148.85pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:44.65pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <h2 align=left style='text-align:left'><span style='font-family:"Times New Roman"'>ИЗВЕЩЕНИЕ<o:p></o:p></span></h2>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <h4><span style='font-family:"Times New Roman"'>Кассир<o:p></o:p></span></h4>
  </td>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:44.65pt'>
  <h6 style='text-align:justify'><span style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman";font-weight:normal'><o:p>&nbsp;</o:p></span></h6>
  <h6 style='text-align:justify'><span style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman";font-weight:normal'>Получатель платежа</span><span
  style='font-size:7.0pt;mso-bidi-font-size:10.0pt;font-weight:normal'>:</span><span
  style='font-size:7.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
  font-weight:normal'> </span><span style='font-family:"Times New Roman";
  font-weight:normal'>ИНН 7733506810<span style='mso-spacerun:yes'> 
  </span>КПП: 773301001</span><span style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman";font-weight:normal'><o:p></o:p></span></h6>
  <h6 style='text-align:justify'><span style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman";font-weight:normal'>УФК РФ по г<span
  class=GramE>.М</span>оскве для МИФНС России № 46 по г.Москве<o:p></o:p></span></h6>
  <h6 style='margin-left:68.85pt;text-indent:-68.85pt'><span style='font-family:
  "Times New Roman";font-weight:normal'>Банк получателя:<span
  style='mso-spacerun:yes'>    </span></span><u><span style='font-family:"Times New Roman"'>Отделение
  1 Москва </span></u></h6>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>БИК 044583001, счет
  40101810800000010041<o:p></o:p></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>КБК: 182 108 07 01 001 1000 110</span><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman";mso-ansi-language:EN-US'><span
  style='mso-spacerun:yes'>                       </span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>ОКТМО<span
  style='mso-spacerun:yes'>  </span>45373000<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <h2><i style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'><?php echo $fio;?></span></i><i style='mso-bidi-font-style:normal'><span
  lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p></o:p></span></i></h2>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:12.55pt'>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.55pt'>
  <p class=MsoNormal align=center style='text-align:center'><sup><span
  style='font-family:"Times New Roman"'>(фамилия, имя, отчество, адрес
  плательщика)<o:p></o:p></span></sup></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <h3 style='tab-stops:13.5pt'><span style='font-size:8.0pt;font-family:"Times New Roman";
  font-weight:normal;font-style:normal'><?php echo $subject != "Москва город" ? "".$subject.", " : ""; ?> <?php echo $his_newmoscow == 2 ? "Москва, " : ""; ?> <?php echo $rajon ? "".$rajon.", " : ""; ?> <?php echo $gorod ? ($gorod != "Москва город" ? " ".$gorod.", " : "г. Москва, ") : ""; ?> <?php echo $naspunkt ? "".$naspunkt.", " : ""; ?> <?php echo $ulitca ? "".$ulitca.", " : ""; ?> <?php echo $dom ? " ".$dom.", " : ""; ?> <?php echo $korpus ? "  ".$korpus.", " : ""; ?>  <?php echo $kvartira ? " ".$kvartira."" : ""; ?><o:p></o:p></span></h3>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid'>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <h3><span style='font-size:7.5pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></h3>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid'>
  <td width=253 valign=top style='width:189.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <h2><span style='font-family:"Times New Roman";font-weight:normal'>ВИД УСЛУГ<o:p></o:p></span></h2>
  </td>
  <td width=103 valign=top style='width:77.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <h2><span style='font-family:"Times New Roman";font-weight:normal'>Сумма<o:p></o:p></span></h2>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:23.0pt'>
  <td width=253 style='width:189.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.0pt'>
  <h4><span style='font-family:"Times New Roman"'>Госпошлина <o:p></o:p></span></h4>
  </td>
  <td width=103 style='width:77.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>800-00<o:p></o:p></span></i></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid'>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <div style='border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 0cm 1.0pt 0cm'>
  <p class=MsoNormal align=center style='text-align:center;border:none;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><i
  style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'>Восемьсот
  <span style='mso-spacerun:yes'> </span>рублей 00 копеек</span></i><span
  style='font-family:"Times New Roman";mso-bidi-font-style:italic'><o:p></o:p></span></p>
  </div>
  <p class=MsoNormal align=center style='text-align:center'><sup><span
  style='font-family:"Times New Roman"'>(сумма прописью)<o:p></o:p></span></sup></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'>Плательщик <span
  style='mso-spacerun:yes'> </span><span
  style='mso-spacerun:yes'>        </span><span
  style='mso-spacerun:yes'>                          </span><span
  style='mso-spacerun:yes'>  </span><span style='mso-spacerun:yes'>    </span><?php echo date_mnowx(); ?><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:106.25pt;
  margin-bottom:0cm;margin-left:54.65pt;margin-bottom:.0001pt;text-align:center'><sup><span
  style='font-family:"Times New Roman"'><span style='mso-spacerun:yes'> </span>(подпись
  плательщика)<o:p></o:p></span></sup></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:23.0pt'>
  <td width=198 rowspan=8 valign=top style='width:148.85pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <h4><span style='font-family:"Times New Roman"'>КВИТАНЦИЯ<o:p></o:p></span></h4>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman"'>Кассир<o:p></o:p></span></b></p>
  </td>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:23.0pt'>
  <h6 style='text-align:justify'><span style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman";font-weight:normal'><o:p>&nbsp;</o:p></span></h6>
  <h6 style='text-align:justify'><span style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman";font-weight:normal'>Получатель платежа</span><span
  style='font-size:7.0pt;mso-bidi-font-size:10.0pt;font-weight:normal'>:</span><span
  style='font-size:7.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
  font-weight:normal'> </span><span style='font-family:"Times New Roman";
  font-weight:normal'>ИНН 7733506810<span style='mso-spacerun:yes'> 
  </span>КПП: 773301001</span><span style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman";font-weight:normal'><o:p></o:p></span></h6>
  <h6 style='text-align:justify'><span style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman";font-weight:normal'>УФК РФ по г<span
  class=GramE>.М</span>оскве для МИФНС России № 46 по г.Москве<o:p></o:p></span></h6>
  <h6 style='margin-left:68.85pt;text-indent:-68.85pt'><span style='font-family:
  "Times New Roman";font-weight:normal'>Банк получателя:<span
  style='mso-spacerun:yes'>    </span></span><u><span style='font-family:"Times New Roman"'>Отделение
  1 Москва </span></u></h6>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>БИК 044583001, счет
  40101810800000010041<o:p></o:p></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>КБК: 182 108 07 01 001 1000 110</span><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Times New Roman";mso-ansi-language:EN-US'><span
  style='mso-spacerun:yes'>                       </span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>ОКТМО<span
  style='mso-spacerun:yes'>  </span>45373000<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid'>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <h2><i style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'><?php echo $fio; ?><o:p></o:p></span></i></h2>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid;height:9.3pt'>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:9.3pt'>
  <p class=MsoNormal align=center style='text-align:center'><sup><span
  style='font-family:"Times New Roman"'>(фамилия, имя, отчество, адрес плательщика)<o:p></o:p></span></sup></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid'>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <h3 style='tab-stops:13.5pt'><span style='font-size:8.0pt;font-family:"Times New Roman";
  font-weight:normal;font-style:normal'><?php echo $subject != "Москва город" ? "".$subject.", " : ""; ?> <?php echo $his_newmoscow == 2 ? "Москва, " : ""; ?> <?php echo $rajon ? "".$rajon.", " : ""; ?> <?php echo $gorod ? ($gorod != "Москва город" ? " ".$gorod.", " : "г. Москва, ") : ""; ?> <?php echo $naspunkt ? "".$naspunkt.", " : ""; ?> <?php echo $ulitca ? "".$ulitca.", " : ""; ?> <?php echo $dom ? " ".$dom.", " : ""; ?> <?php echo $korpus ? "  ".$korpus.", " : ""; ?>  <?php echo $kvartira ? " ".$kvartira."" : ""; ?><o:p></o:p></span></h3>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;page-break-inside:avoid'>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <h3><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></h3>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;page-break-inside:avoid'>
  <td width=253 valign=top style='width:189.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <h2><span style='font-family:"Times New Roman";font-weight:normal'>ВИД УСЛУГ<o:p></o:p></span></h2>
  </td>
  <td width=103 valign=top style='width:77.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <h2><span style='font-family:"Times New Roman";font-weight:normal'>Сумма<o:p></o:p></span></h2>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;page-break-inside:avoid;height:25.1pt'>
  <td width=253 style='width:189.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:25.1pt'>
  <h4><span style='font-family:"Times New Roman"'>Госпошлина<o:p></o:p></span></h4>
  </td>
  <td width=103 style='width:77.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:25.1pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>800-00<o:p></o:p></span></i></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=357 colspan=2 valign=top style='width:267.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <div style='border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 0cm 1.0pt 0cm'>
  <p class=MsoNormal align=center style='text-align:center;border:none;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><i
  style='mso-bidi-font-style:normal'><span style='font-family:"Times New Roman"'>Восемьсот
  <span style='mso-spacerun:yes'> </span>рублей 00 копеек</span></i><span
  style='font-family:"Times New Roman";mso-bidi-font-style:italic'><o:p></o:p></span></p>
  </div>
  <p class=MsoNormal align=center style='text-align:center'><sup><span
  style='font-family:"Times New Roman"'>(сумма прописью)<o:p></o:p></span></sup></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'>Плательщик<span
  style='mso-spacerun:yes'>          </span><span
  style='mso-spacerun:yes'>                                </span><?php echo date_mnowx(); ?>.<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:106.25pt;
  margin-bottom:0cm;margin-left:54.65pt;margin-bottom:.0001pt;text-align:center'><sup><span
  style='font-family:"Times New Roman"'>(подпись плательщика)<o:p></o:p></span></sup></p>
  </td>
 </tr>
</table>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

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
function date_mnowx() {
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
return $res = "«___» ".$monthlist[$ar[1]]." ".$ar[2]." г.";

}
?>