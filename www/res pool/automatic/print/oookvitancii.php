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

$fio = $familya.' '.$imya.' '.$otchestvo;

?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<link rel=File-List href="kvitancii.files/filelist.xml">
<link rel=Edit-Time-Data href="kvitancii.files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>Квитанции</title>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>User</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>Дорофеев Николай Игоревич</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>1</o:TotalTime>
  <o:Created>2011-03-10T21:10:00Z</o:Created>
  <o:LastSaved>2011-03-10T21:10:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>514</o:Words>
  <o:Characters>2930</o:Characters>
  <o:Company>SB RF</o:Company>
  <o:Lines>24</o:Lines>
  <o:Paragraphs>6</o:Paragraphs>
  <o:CharactersWithSpaces>3438</o:CharactersWithSpaces>
  <o:Version>10.2625</o:Version>
 </o:DocumentProperties>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:PunctuationKerning/>
  <w:DrawingGridHorizontalSpacing>6 пт</w:DrawingGridHorizontalSpacing>
  <w:DrawingGridVerticalSpacing>6 пт</w:DrawingGridVerticalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery>
  <w:DisplayVerticalDrawingGridEvery>3</w:DisplayVerticalDrawingGridEvery>
  <w:Compatibility>
   <w:FootnoteLayoutLikeWW8/>
   <w:ShapeLayoutLikeWW8/>
   <w:AlignTablesRowByRow/>
   <w:ForgetLastTabAlignment/>
   <w:AdjustLineHeightInTable/>
   <w:LayoutRawTableWidth/>
   <w:LayoutTableRowsApart/>
   <w:UseWord97LineBreakingRules/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
 </w:WordDocument>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	mso-font-charset:204;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-1610611985 1073750139 0 0 159 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.1, li.1, div.1
	{mso-style-name:"заголовок 1";
	mso-style-next:Обычный;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	text-autospace:none;
	font-size:16.0pt;
	font-family:Arial;
	mso-fareast-font-family:"Times New Roman";
	mso-font-kerning:16.0pt;
	font-weight:bold;}
span.a
	{mso-style-name:"Основной шрифт";
	mso-style-parent:"";}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:8.5pt 2.0cm 8.5pt 2.0cm;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
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
	font-family:Calibri;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2050"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=RU style='tab-interval:35.4pt;text-justify-trim:punctuation'>

<div class=Section1>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=719
 style='width:539.45pt;margin-left:-29.1pt;border-collapse:collapse;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:5.25pt'>
  <td width=201 rowspan=18 valign=top style='width:150.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=1 align=center style='text-align:center;mso-outline-level:1'><span
  style='font-size:8.0pt;font-family:"Times New Roman"'>3,Извещение<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Кассир</span></b><b><span
  style='font-size:9.0pt'><o:p></o:p></span></b></p>
  </td>
  <td width=259 colspan=17 valign=top style='width:194.4pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'><!--[if gte vml 1]><v:shapetype
   id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
   path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
   <v:stroke joinstyle="miter"/>
   <v:formulas>
    <v:f eqn="if lineDrawn pixelLineWidth 0"/>
    <v:f eqn="sum @0 1 0"/>
    <v:f eqn="sum 0 0 @1"/>
    <v:f eqn="prod @2 1 2"/>
    <v:f eqn="prod @3 21600 pixelWidth"/>
    <v:f eqn="prod @3 21600 pixelHeight"/>
    <v:f eqn="sum @0 0 1"/>
    <v:f eqn="prod @6 1 2"/>
    <v:f eqn="prod @7 21600 pixelWidth"/>
    <v:f eqn="sum @8 21600 0"/>
    <v:f eqn="prod @7 21600 pixelHeight"/>
    <v:f eqn="sum @10 21600 0"/>
   </v:formulas>
   <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
   <o:lock v:ext="edit" aspectratio="t"/>
  </v:shapetype><v:shape id="_x0000_i1025" type="#_x0000_t75" style='width:69pt;
   height:6.75pt' fillcolor="window">
   <v:imagedata src="kvitancii.files/image001.jpg" o:title="Logo2"/>
  </v:shape><![endif]--><![if !vml]><img width=92 height=9
  src="kvitancii.files/image002.jpg" v:shapes="_x0000_i1025"><![endif]></span><span
  lang=EN-US style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=259 colspan=13 valign=top style='width:194.45pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=right style='text-align:right'><b><i><span
  style='font-size:8.0pt'>Форма № ПД-4 <span class=SpellE>с<span class=GramE>б</span></span><span
  class=GramE>(</span>налог</span></i></b><span style='font-size:8.0pt'>)</span><span
  lang=EN-US style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:5.25pt'>
  <td width=410 colspan=22 valign=bottom style='width:307.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>УФК по г. Москве (МИФНС России № 46 по г<span
  class=GramE>.М</span>оскве)<o:p></o:p></span></p>
  </td>
  <td width=38 colspan=4 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>КПП<o:p></o:p></span></p>
  </td>
  <td width=71 colspan=4 valign=bottom style='width:53.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>773301001<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:3.75pt'>
  <td width=410 colspan=22 valign=top style='width:307.5pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt;mso-bidi-font-size:7.0pt'>(наименование получателя
  платежа)</span><span lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:
  7.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=38 colspan=4 valign=top style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:6.0pt;mso-bidi-font-size:7.0pt;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=71 colspan=4 valign=top style='width:53.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:6.0pt;mso-bidi-font-size:7.0pt;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:6.75pt'>
  <td width=108 colspan=5 valign=bottom style='width:81.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>7733506810<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=4 valign=bottom style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=293 colspan=14 valign=bottom style='width:219.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>МИФНС России № 46 по г<span class=GramE>.М</span>оскве<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=2 valign=bottom style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=80 colspan=5 valign=bottom style='width:59.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>45373000<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:5.25pt'>
  <td width=108 colspan=5 valign=top style='width:81.0pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(ИНН налогового органа*)<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=4 valign=top style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=293 colspan=14 valign=top style='width:219.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>и его сокращенное наименование<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=2 valign=top style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=80 colspan=5 valign=top style='width:59.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(Код ОКТМО)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:4.5pt'>
  <td width=136 colspan=11 valign=bottom style='width:102.35pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>40101810800000010041<o:p></o:p></span></p>
  </td>
  <td width=19 valign=bottom style='width:14.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>в<o:p></o:p></span></p>
  </td>
  <td width=363 colspan=18 valign=bottom style='width:272.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Отделение 1 Москва<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:5.25pt'>
  <td width=136 colspan=11 valign=top style='width:102.35pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(номер счета получателя платежа)<o:p></o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=363 colspan=18 valign=top style='width:272.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(наименование банка)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:4.5pt'>
  <td width=42 valign=bottom style='width:31.35pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>БИК<o:p></o:p></span></p>
  </td>
  <td width=66 colspan=4 valign=bottom style='width:49.65pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>044583001<o:p></o:p></span></p>
  </td>
  <td width=57 colspan=9 valign=bottom style='width:42.9pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:8.0pt'>Кор</span></span><span style='font-size:8.0pt'>./<span
  class=SpellE>сч</span>.<o:p></o:p></span></p>
  </td>
  <td width=353 colspan=16 valign=bottom style='width:264.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:4.5pt'>
  <td width=364 colspan=20 valign=bottom style='width:273.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  lang=EN-US style='font-size:8.0pt;mso-ansi-language:EN-US'>Регистрация</span></span><span
  lang=EN-US style='font-size:8.0pt;mso-ansi-language:EN-US'> <span
  class=SpellE>юридического</span> <span class=SpellE>лица</span></span><span
  style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
  <td width=18 valign=bottom style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=136 colspan=9 valign=bottom style='width:101.8pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>182 108 07 01 001 1000 110<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid;height:6.75pt'>
  <td width=364 colspan=20 valign=top style='width:273.3pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(наименование платежа)<o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=136 colspan=9 valign=top style='width:101.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(код бюджетной классификации)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid;height:6.75pt'>
  <td width=118 colspan=7 valign=bottom style='width:88.75pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Плательщик</span><span style='font-size:8.0pt;
  mso-ansi-language:EN-US'> </span><span style='font-size:8.0pt'>(Ф.И.О.)<o:p></o:p></span></p>
  </td>
  <td width=400 colspan=23 valign=bottom style='width:300.1pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:8.0pt'><?php echo $fio; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid;height:8.25pt'>
  <td width=109 colspan=6 valign=bottom style='width:81.7pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Адрес</span><span style='font-size:8.0pt;mso-ansi-language:
  EN-US'> </span><span style='font-size:8.0pt'>плательщика</span><span
  lang=EN-US style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=410 colspan=24 valign=bottom style='width:307.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;mso-bidi-font-weight:bold'>
  
<?php 
if ($subject || $gorod) { 
?> 
  
  <?php echo !strstr($subject, "Москва") ? "".$subject.", " : ""; ?> <?php echo $his_newmoscow == 2 ? "Москва, " : ""; ?> <?php echo $rajon ? "".$rajon.", " : ""; ?> <?php echo $gorod ? ($gorod != "Москва город" ? " ".$gorod.", " : "г. Москва, ") : ""; ?> <?php echo $naspunkt ? "".$naspunkt.", " : ""; ?> <?php echo $ulitca ? "".$ulitca.", " : ""; ?> <?php echo $dom ? " ".$dom.", " : ""; ?> <?php echo $korpus ? "  ".$korpus.", " : ""; ?>  <?php echo $kvartira ? " ".$kvartira."" : ""; ?>
  
<?php 
}
else {
 echo " ".$countries[$strana] .", ";  echo $mesto ? " ".$mesto."" : ""; 
}
?> 
  
  </span><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;page-break-inside:avoid;height:8.25pt'>
  <td width=100 colspan=4 valign=bottom style='width:74.75pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>ИНН плательщика<o:p></o:p></span></p>
  </td>
  <td width=85 colspan=11 valign=bottom style='width:63.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=104 colspan=3 valign=bottom style='width:77.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>№ <span class=GramE>л</span>/с плательщика<o:p></o:p></span></p>
  </td>
  <td width=230 colspan=12 valign=bottom style='width:172.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;page-break-inside:avoid;height:9.0pt'>
  <td width=53 colspan=2 valign=bottom style='width:39.5pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Сумма:<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>4000<o:p></o:p></span></p>
  </td>
  <td width=38 colspan=7 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>руб.<o:p></o:p></span></p>
  </td>
  <td width=28 colspan=3 valign=bottom style='width:21.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>00<o:p></o:p></span></p>
  </td>
  <td width=362 colspan=17 valign=bottom style='width:271.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'>коп.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;page-break-inside:avoid;height:10.0pt'>
  <td width=518 colspan=30 style='width:388.85pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;page-break-inside:avoid;height:10.0pt'>
  <td width=119 colspan=8 valign=bottom style='width:89.45pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Плательщик (подпись)<o:p></o:p></span></p>
  </td>
  <td width=123 colspan=8 valign=bottom style='width:92.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=17 valign=bottom style='width:12.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=40 colspan=2 valign=bottom style='width:29.7pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Дата<o:p></o:p></span></p>
  </td>
  <td width=132 colspan=5 valign=bottom style='width:99.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=38 colspan=3 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><?php echo date("20y"); ?> г.<o:p></o:p></span></p>
  </td>
  <td width=19 valign=bottom style='width:14.15pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
  <td width=31 colspan=2 valign=bottom style='width:23.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;page-break-inside:avoid;height:10.0pt'>
  <td width=518 colspan=30 style='width:388.85pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;page-break-inside:avoid;height:30.0pt'>
  <td width=518 colspan=30 valign=top style='width:388.85pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:30.0pt'>
  <p class=MsoNormal><span style='font-size:6.0pt'>*или иной государственный
  орган исполнительной власти</span><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;page-break-inside:avoid;height:5.25pt'>
  <td width=201 rowspan=18 valign=top style='width:150.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'>Квитанция<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'>Кассир<o:p></o:p></span></b></p>
  </td>
  <td width=518 colspan=30 valign=top style='width:388.85pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;page-break-inside:avoid;height:5.25pt'>
  <td width=410 colspan=22 valign=bottom style='width:307.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>УФК по г. Москве (МИФНС России № 46 по г<span
  class=GramE>.М</span>оскве)<o:p></o:p></span></p>
  </td>
  <td width=38 colspan=4 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>КПП<o:p></o:p></span></p>
  </td>
  <td width=71 colspan=4 valign=bottom style='width:53.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>773301001<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;page-break-inside:avoid;height:3.75pt'>
  <td width=410 colspan=22 valign=top style='width:307.5pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt;mso-bidi-font-size:7.0pt'>(наименование получателя
  платежа)</span><span style='font-size:7.0pt'><o:p></o:p></span></p>
  </td>
  <td width=38 colspan=4 valign=top style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:7.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=71 colspan=4 valign=top style='width:53.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:7.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;page-break-inside:avoid;height:6.75pt'>
  <td width=108 colspan=5 valign=bottom style='width:81.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>7733506810<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=4 valign=bottom style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=293 colspan=14 valign=bottom style='width:219.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>МИФНС России № 46 по г<span class=GramE>.М</span>оскве<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=2 valign=bottom style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=80 colspan=5 valign=bottom style='width:59.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>45373000<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;page-break-inside:avoid;height:5.25pt'>
  <td width=108 colspan=5 valign=top style='width:81.0pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(ИНН налогового органа*)<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=4 valign=top style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=293 colspan=14 valign=top style='width:219.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>и его сокращенное наименование<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=2 valign=top style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=80 colspan=5 valign=top style='width:59.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(Код ОКТМО)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;page-break-inside:avoid;height:4.5pt'>
  <td width=136 colspan=11 valign=bottom style='width:102.35pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>40101810800000010041<o:p></o:p></span></p>
  </td>
  <td width=19 valign=bottom style='width:14.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>в<o:p></o:p></span></p>
  </td>
  <td width=363 colspan=18 valign=bottom style='width:272.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Отделение 1 Москва<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;page-break-inside:avoid;height:5.25pt'>
  <td width=136 colspan=11 valign=top style='width:102.35pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(номер счета получателя платежа)<o:p></o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=363 colspan=18 valign=top style='width:272.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(наименование банка)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;page-break-inside:avoid;height:4.5pt;mso-row-margin-right:
  2.9pt'>
  <td width=42 valign=bottom style='width:31.35pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>БИК</span><span lang=EN-US style='font-size:8.0pt;
  mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=66 colspan=4 valign=bottom style='width:49.65pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>044583001<o:p></o:p></span></p>
  </td>
  <td width=57 colspan=9 valign=bottom style='width:42.9pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:8.0pt'>Кор</span></span><span style='font-size:8.0pt'>./<span
  class=SpellE>сч</span>.<o:p></o:p></span></p>
  </td>
  <td width=349 colspan=15 valign=bottom style='width:262.05pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=4><p class='MsoNormal'></td>
 </tr>
 <tr style='mso-yfti-irow:26;page-break-inside:avoid;height:4.5pt'>
  <td width=364 colspan=20 valign=bottom style='width:273.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Регистрация юридического лица<o:p></o:p></span></p>
  </td>
  <td width=18 valign=bottom style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=136 colspan=9 valign=bottom style='width:101.8pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>182 108 07 01 001 1000 110<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:27;page-break-inside:avoid;height:6.75pt'>
  <td width=364 colspan=20 valign=top style='width:273.3pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt'>(наименование платежа)<o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=136 colspan=9 valign=top style='width:101.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt'>(код бюджетной
  классификации)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:28;page-break-inside:avoid;height:1.0pt'>
  <td width=118 colspan=7 valign=bottom style='width:88.75pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:75.25pt'><span
  style='font-size:8.0pt'>Плательщик</span><span style='font-size:8.0pt;
  mso-ansi-language:EN-US'> </span><span style='font-size:8.0pt'>(Ф.И.О.)<o:p></o:p></span></p>
  </td>
  <td width=400 colspan=23 valign=bottom style='width:300.1pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:75.25pt'><span
  class=SpellE><span style='font-size:8.0pt'><?php echo $fio; ?></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:29;page-break-inside:avoid;height:8.25pt'>
  <td width=109 colspan=6 valign=bottom style='width:81.7pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Адрес плательщика</span><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=410 colspan=24 valign=bottom style='width:307.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;mso-bidi-font-weight:bold'>
  
  
  
<?php 
if ($subject || $gorod) { 
?> 
  
  <?php echo !strstr($subject, "Москва") ? "".$subject.", " : ""; ?> <?php echo $his_newmoscow == 2 ? "Москва, " : ""; ?> <?php echo $rajon ? "".$rajon.", " : ""; ?> <?php echo $gorod ? ($gorod != "Москва город" ? " ".$gorod.", " : "г. Москва, ") : ""; ?> <?php echo $naspunkt ? "".$naspunkt.", " : ""; ?> <?php echo $ulitca ? "".$ulitca.", " : ""; ?> <?php echo $dom ? " ".$dom.", " : ""; ?> <?php echo $korpus ? "  ".$korpus.", " : ""; ?>  <?php echo $kvartira ? " ".$kvartira."" : ""; ?>
  
<?php 
}
else {
 echo " ".$countries[$strana] .", ";  echo $mesto ? " ".$mesto."" : ""; 
}
?> 
  
  
  
  </span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:30;page-break-inside:avoid;height:8.25pt'>
  <td width=100 colspan=4 valign=bottom style='width:74.75pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>ИНН плательщика<o:p></o:p></span></p>
  </td>
  <td width=85 colspan=11 valign=bottom style='width:63.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=104 colspan=3 valign=bottom style='width:77.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>№ <span class=GramE>л</span>/с плательщика<o:p></o:p></span></p>
  </td>
  <td width=230 colspan=12 valign=bottom style='width:172.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:31;page-break-inside:avoid;height:9.0pt'>
  <td width=53 colspan=2 valign=bottom style='width:39.5pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Сумма:<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>4000<o:p></o:p></span></p>
  </td>
  <td width=38 colspan=7 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>руб.<o:p></o:p></span></p>
  </td>
  <td width=28 colspan=3 valign=bottom style='width:21.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>00<o:p></o:p></span></p>
  </td>
  <td width=362 colspan=17 valign=bottom style='width:271.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'>коп.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:32;page-break-inside:avoid;height:16.75pt'>
  <td width=518 colspan=30 style='width:388.85pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:33;page-break-inside:avoid;height:16.75pt'>
  <td width=119 colspan=8 valign=bottom style='width:89.45pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Плательщик (подпись)<o:p></o:p></span></p>
  </td>
  <td width=123 colspan=8 valign=bottom style='width:92.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=17 valign=bottom style='width:12.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=40 colspan=2 valign=bottom style='width:29.7pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Дата<o:p></o:p></span></p>
  </td>
  <td width=132 colspan=5 valign=bottom style='width:99.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=38 colspan=3 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><?php echo date("20y"); ?> г.<o:p></o:p></span></p>
  </td>
  <td width=19 valign=bottom style='width:14.15pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
  <td width=31 colspan=2 valign=bottom style='width:23.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:34;page-break-inside:avoid;height:16.75pt'>
  <td width=518 colspan=30 style='width:388.85pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:35;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:36.5pt'>
  <td width=518 colspan=30 valign=top style='width:388.85pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:36.5pt'>
  <p class=MsoNormal><span style='font-size:6.0pt'>*или иной государственный
  орган исполнительной власти</span><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=201 style='border:none'></td>
  <td width=42 style='border:none'></td>
  <td width=11 style='border:none'></td>
  <td width=38 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=8 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=8 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=8 style='border:none'></td>
  <td width=19 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=20 style='border:none'></td>
  <td width=57 style='border:none'></td>
  <td width=17 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=66 style='border:none'></td>
  <td width=18 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=12 style='border:none'></td>
  <td width=7 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=21 style='border:none'></td>
  <td width=19 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=4 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Times New Roman"; mso-fareast-font-family:"Times New Roman";mso-ansi-language:RU;mso-fareast-language:
RU;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break; page-break-before:always'>
</span>


<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=719
 style='width:539.45pt;margin-left:-29.1pt;border-collapse:collapse;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:5.25pt'>
  <td width=201 rowspan=18 valign=top style='width:150.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=1 align=center style='text-align:center;mso-outline-level:1'><span
  style='font-size:8.0pt;font-family:"Times New Roman"'>Извещение<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Кассир</span></b><b><span
  style='font-size:9.0pt'><o:p></o:p></span></b></p>
  </td>
  <td width=259 colspan=17 valign=top style='width:194.4pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'><!--[if gte vml 1]><v:shape
   id="_x0000_i1026" type="#_x0000_t75" style='width:69pt;height:6.75pt'
   fillcolor="window">
   <v:imagedata src="kvitancii.files/image001.jpg" o:title="Logo2"/>
  </v:shape><![endif]--><![if !vml]><img width=92 height=9
  src="kvitancii.files/image002.jpg" v:shapes="_x0000_i1026"><![endif]></span><span
  lang=EN-US style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=259 colspan=13 valign=top style='width:194.45pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=right style='text-align:right'><b><i><span
  style='font-size:8.0pt'>Форма № ПД-4 <span class=SpellE>с<span class=GramE>б</span></span><span
  class=GramE>(</span>налог</span></i></b><span style='font-size:8.0pt'>)</span><span
  lang=EN-US style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:5.25pt'>
  <td width=410 colspan=22 valign=bottom style='width:307.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>УФК по г. Москве (МИФНС России № 46 по г<span
  class=GramE>.М</span>оскве)<o:p></o:p></span></p>
  </td>
  <td width=38 colspan=4 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>КПП<o:p></o:p></span></p>
  </td>
  <td width=71 colspan=4 valign=bottom style='width:53.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>773301001<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:3.75pt'>
  <td width=410 colspan=22 valign=top style='width:307.5pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt;mso-bidi-font-size:7.0pt'>(наименование получателя
  платежа)</span><span lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:
  7.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=38 colspan=4 valign=top style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:6.0pt;mso-bidi-font-size:7.0pt;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=71 colspan=4 valign=top style='width:53.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:6.0pt;mso-bidi-font-size:7.0pt;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:6.75pt'>
  <td width=108 colspan=5 valign=bottom style='width:81.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>7733506810<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=4 valign=bottom style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=293 colspan=14 valign=bottom style='width:219.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>МИФНС России № 46 по г<span class=GramE>.М</span>оскве<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=2 valign=bottom style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=80 colspan=5 valign=bottom style='width:59.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>45373000<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:5.25pt'>
  <td width=108 colspan=5 valign=top style='width:81.0pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(ИНН налогового органа*)<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=4 valign=top style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=293 colspan=14 valign=top style='width:219.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>и его сокращенное наименование<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=2 valign=top style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=80 colspan=5 valign=top style='width:59.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(Код ОКТМО)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:4.5pt'>
  <td width=136 colspan=11 valign=bottom style='width:102.35pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>40101810800000010041<o:p></o:p></span></p>
  </td>
  <td width=19 valign=bottom style='width:14.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>в<o:p></o:p></span></p>
  </td>
  <td width=363 colspan=18 valign=bottom style='width:272.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Отделение 1 Москва<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:5.25pt'>
  <td width=136 colspan=11 valign=top style='width:102.35pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(номер счета получателя платежа)<o:p></o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=363 colspan=18 valign=top style='width:272.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(наименование банка)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:4.5pt'>
  <td width=42 valign=bottom style='width:31.35pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>БИК<o:p></o:p></span></p>
  </td>
  <td width=66 colspan=4 valign=bottom style='width:49.65pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>044583001<o:p></o:p></span></p>
  </td>
  <td width=57 colspan=9 valign=bottom style='width:42.9pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:8.0pt'>Кор</span></span><span style='font-size:8.0pt'>./<span
  class=SpellE>сч</span>.<o:p></o:p></span></p>
  </td>
  <td width=353 colspan=16 valign=bottom style='width:264.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:4.5pt'>
  <td width=364 colspan=20 valign=bottom style='width:273.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Изготовление копий учредительных документов<o:p></o:p></span></p>
  </td>
  <td width=18 valign=bottom style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=136 colspan=9 valign=bottom style='width:101.8pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>182 113 01 02 001 6000 130<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid;height:6.75pt'>
  <td width=364 colspan=20 valign=top style='width:273.3pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(наименование платежа)<o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=136 colspan=9 valign=top style='width:101.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(код бюджетной классификации)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid;height:6.75pt'>
  <td width=118 colspan=7 valign=bottom style='width:88.75pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Плательщик</span><span style='font-size:8.0pt;
  mso-ansi-language:EN-US'> </span><span style='font-size:8.0pt'>(Ф.И.О.)<o:p></o:p></span></p>
  </td>
  <td width=400 colspan=23 valign=bottom style='width:300.1pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:8.0pt'><?php echo $fio; ?></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid;height:8.25pt'>
  <td width=109 colspan=6 valign=bottom style='width:81.7pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Адрес</span><span style='font-size:8.0pt;mso-ansi-language:
  EN-US'> </span><span style='font-size:8.0pt'>плательщика</span><span
  lang=EN-US style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=410 colspan=24 valign=bottom style='width:307.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;mso-bidi-font-weight:bold'>
  
  
  
<?php 
if ($subject || $gorod) { 
?> 
  
  <?php echo !strstr($subject, "Москва") ? "".$subject.", " : ""; ?> <?php echo $his_newmoscow == 2 ? "Москва, " : ""; ?> <?php echo $rajon ? "".$rajon.", " : ""; ?> <?php echo $gorod ? ($gorod != "Москва город" ? " ".$gorod.", " : "г. Москва, ") : ""; ?> <?php echo $naspunkt ? "".$naspunkt.", " : ""; ?> <?php echo $ulitca ? "".$ulitca.", " : ""; ?> <?php echo $dom ? " ".$dom.", " : ""; ?> <?php echo $korpus ? "  ".$korpus.", " : ""; ?>  <?php echo $kvartira ? " ".$kvartira."" : ""; ?>
  
<?php 
}
else {
 echo " ".$strana .", ";  echo $mesto ? " ".$mesto."" : ""; 
}
?> 
  
  
  
  </span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;page-break-inside:avoid;height:8.25pt'>
  <td width=100 colspan=4 valign=bottom style='width:74.75pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>ИНН плательщика<o:p></o:p></span></p>
  </td>
  <td width=85 colspan=11 valign=bottom style='width:63.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=104 colspan=3 valign=bottom style='width:77.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>№ <span class=GramE>л</span>/с плательщика<o:p></o:p></span></p>
  </td>
  <td width=230 colspan=12 valign=bottom style='width:172.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;page-break-inside:avoid;height:9.0pt'>
  <td width=53 colspan=2 valign=bottom style='width:39.5pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Сумма:<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>400<o:p></o:p></span></p>
  </td>
  <td width=38 colspan=7 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>руб.<o:p></o:p></span></p>
  </td>
  <td width=28 colspan=3 valign=bottom style='width:21.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>00<o:p></o:p></span></p>
  </td>
  <td width=362 colspan=17 valign=bottom style='width:271.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'>коп.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;page-break-inside:avoid;height:10.0pt'>
  <td width=518 colspan=30 style='width:388.85pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;page-break-inside:avoid;height:10.0pt'>
  <td width=119 colspan=8 valign=bottom style='width:89.45pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Плательщик (подпись)<o:p></o:p></span></p>
  </td>
  <td width=123 colspan=8 valign=bottom style='width:92.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=17 valign=bottom style='width:12.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=40 colspan=2 valign=bottom style='width:29.7pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Дата<o:p></o:p></span></p>
  </td>
  <td width=132 colspan=5 valign=bottom style='width:99.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=38 colspan=3 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><?php echo date("20y"); ?> г.<o:p></o:p></span></p>
  </td>
  <td width=19 valign=bottom style='width:14.15pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
  <td width=31 colspan=2 valign=bottom style='width:23.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=GramE><span
  style='font-size:8.0pt'></span></span><span style='font-size:8.0pt'>.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;page-break-inside:avoid;height:10.0pt'>
  <td width=518 colspan=30 style='width:388.85pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;page-break-inside:avoid;height:30.0pt'>
  <td width=518 colspan=30 valign=top style='width:388.85pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:30.0pt'>
  <p class=MsoNormal><span style='font-size:6.0pt'>*или иной государственный
  орган исполнительной власти</span><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;page-break-inside:avoid;height:5.25pt'>
  <td width=201 rowspan=18 valign=top style='width:150.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'>Квитанция<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt'>Кассир<o:p></o:p></span></b></p>
  </td>
  <td width=518 colspan=30 valign=top style='width:388.85pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;page-break-inside:avoid;height:5.25pt'>
  <td width=410 colspan=22 valign=bottom style='width:307.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>УФК по г. Москве (МИФНС России № 46 по г<span
  class=GramE>.М</span>оскве)<o:p></o:p></span></p>
  </td>
  <td width=38 colspan=4 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>КПП<o:p></o:p></span></p>
  </td>
  <td width=71 colspan=4 valign=bottom style='width:53.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>773301001<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;page-break-inside:avoid;height:3.75pt'>
  <td width=410 colspan=22 valign=top style='width:307.5pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt;mso-bidi-font-size:7.0pt'>(наименование получателя
  платежа)</span><span style='font-size:7.0pt'><o:p></o:p></span></p>
  </td>
  <td width=38 colspan=4 valign=top style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:7.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=71 colspan=4 valign=top style='width:53.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:7.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;page-break-inside:avoid;height:6.75pt'>
  <td width=108 colspan=5 valign=bottom style='width:81.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>7733506810<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=4 valign=bottom style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=293 colspan=14 valign=bottom style='width:219.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>МИФНС России № 46 по г<span class=GramE>.М</span>оскве<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=2 valign=bottom style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=80 colspan=5 valign=bottom style='width:59.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>45373000<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;page-break-inside:avoid;height:5.25pt'>
  <td width=108 colspan=5 valign=top style='width:81.0pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(ИНН налогового органа*)<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=4 valign=top style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=293 colspan=14 valign=top style='width:219.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>и его сокращенное наименование<o:p></o:p></span></p>
  </td>
  <td width=19 colspan=2 valign=top style='width:14.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=80 colspan=5 valign=top style='width:59.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(Код ОКТМО)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;page-break-inside:avoid;height:4.5pt'>
  <td width=136 colspan=11 valign=bottom style='width:102.35pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>40101810800000010041<o:p></o:p></span></p>
  </td>
  <td width=19 valign=bottom style='width:14.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>в<o:p></o:p></span></p>
  </td>
  <td width=363 colspan=18 valign=bottom style='width:272.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Отделение 1 Москва<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;page-break-inside:avoid;height:5.25pt'>
  <td width=136 colspan=11 valign=top style='width:102.35pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(номер счета получателя платежа)<o:p></o:p></span></p>
  </td>
  <td width=19 valign=top style='width:14.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=363 colspan=18 valign=top style='width:272.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:5.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt'>(наименование банка)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;page-break-inside:avoid;height:4.5pt;mso-row-margin-right:
  2.9pt'>
  <td width=42 valign=bottom style='width:31.35pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>БИК</span><span lang=EN-US style='font-size:8.0pt;
  mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=66 colspan=4 valign=bottom style='width:49.65pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>044583001<o:p></o:p></span></p>
  </td>
  <td width=57 colspan=9 valign=bottom style='width:42.9pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:8.0pt'>Кор</span></span><span style='font-size:8.0pt'>./<span
  class=SpellE>сч</span>.<o:p></o:p></span></p>
  </td>
  <td width=349 colspan=15 valign=bottom style='width:262.05pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=4><p class='MsoNormal'></td>
 </tr>
 <tr style='mso-yfti-irow:26;page-break-inside:avoid;height:4.5pt'>
  <td width=364 colspan=20 valign=bottom style='width:273.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Изготовление копий учредительных документов<o:p></o:p></span></p>
  </td>
  <td width=18 valign=bottom style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=136 colspan=9 valign=bottom style='width:101.8pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>182 113 01 02 001 6000 130<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:27;page-break-inside:avoid;height:6.75pt'>
  <td width=364 colspan=20 valign=top style='width:273.3pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt'>(наименование платежа)<o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=136 colspan=9 valign=top style='width:101.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:6.0pt;mso-bidi-font-size:8.0pt'>(код бюджетной
  классификации)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:28;page-break-inside:avoid;height:1.0pt'>
  <td width=118 colspan=7 valign=bottom style='width:88.75pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:75.25pt'><span
  style='font-size:8.0pt'>Плательщик</span><span style='font-size:8.0pt;
  mso-ansi-language:EN-US'> </span><span style='font-size:8.0pt'>(Ф.И.О.)<o:p></o:p></span></p>
  </td>
  <td width=400 colspan=23 valign=bottom style='width:300.1pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:75.25pt'><span
  class=SpellE><span style='font-size:8.0pt'><?php echo $fio; ?></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:29;page-break-inside:avoid;height:8.25pt'>
  <td width=109 colspan=6 valign=bottom style='width:81.7pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Адрес плательщика</span><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></p>
  </td>
  <td width=410 colspan=24 valign=bottom style='width:307.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;mso-bidi-font-weight:bold'>
  
  
  
<?php 
if ($subject || $gorod) { 
?> 
  
  <?php echo !strstr($subject, "Москва") ? "".$subject.", " : ""; ?> <?php echo $his_newmoscow == 2 ? "Москва, " : ""; ?> <?php echo $rajon ? "".$rajon.", " : ""; ?> <?php echo $gorod ? ($gorod != "Москва город" ? " ".$gorod.", " : "г. Москва, ") : ""; ?> <?php echo $naspunkt ? "".$naspunkt.", " : ""; ?> <?php echo $ulitca ? "".$ulitca.", " : ""; ?> <?php echo $dom ? " ".$dom.", " : ""; ?> <?php echo $korpus ? "  ".$korpus.", " : ""; ?>  <?php echo $kvartira ? " ".$kvartira."" : ""; ?>
  
<?php 
}
else {
 echo " ".$strana .", ";  echo $mesto ? " ".$mesto."" : ""; 
}
?> 
  
  
  
  </span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:30;page-break-inside:avoid;height:8.25pt'>
  <td width=100 colspan=4 valign=bottom style='width:74.75pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>ИНН плательщика<o:p></o:p></span></p>
  </td>
  <td width=85 colspan=11 valign=bottom style='width:63.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=104 colspan=3 valign=bottom style='width:77.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>№ <span class=GramE>л</span>/с плательщика<o:p></o:p></span></p>
  </td>
  <td width=230 colspan=12 valign=bottom style='width:172.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:31;page-break-inside:avoid;height:9.0pt'>
  <td width=53 colspan=2 valign=bottom style='width:39.5pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Сумма:<o:p></o:p></span></p>
  </td>
  <td width=38 valign=bottom style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>400<o:p></o:p></span></p>
  </td>
  <td width=38 colspan=7 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>руб.<o:p></o:p></span></p>
  </td>
  <td width=28 colspan=3 valign=bottom style='width:21.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:9.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>00<o:p></o:p></span></p>
  </td>
  <td width=362 colspan=17 valign=bottom style='width:271.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:9.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'>коп.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:32;page-break-inside:avoid;height:16.75pt'>
  <td width=518 colspan=30 style='width:388.85pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:33;page-break-inside:avoid;height:16.75pt'>
  <td width=119 colspan=8 valign=bottom style='width:89.45pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Плательщик (подпись)<o:p></o:p></span></p>
  </td>
  <td width=123 colspan=8 valign=bottom style='width:92.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=17 valign=bottom style='width:12.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=40 colspan=2 valign=bottom style='width:29.7pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'>Дата<o:p></o:p></span></p>
  </td>
  <td width=132 colspan=5 valign=bottom style='width:99.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=38 colspan=3 valign=bottom style='width:1.0cm;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><?php echo date("20y"); ?> г.<o:p></o:p></span></p>
  </td>
  <td width=19 valign=bottom style='width:14.15pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
  <td width=31 colspan=2 valign=bottom style='width:23.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:34;page-break-inside:avoid;height:16.75pt'>
  <td width=518 colspan=30 style='width:388.85pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:35;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:36.5pt'>
  <td width=518 colspan=30 valign=top style='width:388.85pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:36.5pt'>
  <p class=MsoNormal><span style='font-size:6.0pt'>*или иной государственный
  орган исполнительной власти</span><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=201 style='border:none'></td>
  <td width=42 style='border:none'></td>
  <td width=11 style='border:none'></td>
  <td width=38 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=8 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=8 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=8 style='border:none'></td>
  <td width=19 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=20 style='border:none'></td>
  <td width=57 style='border:none'></td>
  <td width=17 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=66 style='border:none'></td>
  <td width=18 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=12 style='border:none'></td>
  <td width=7 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=21 style='border:none'></td>
  <td width=19 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=4 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

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