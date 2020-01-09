<?php 
session_start(); 
include("config.php");

if (!defined('IN_SITE')) {
    die("На выход");
} 
include("engine.php");
open_connection();

#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------

$pr3 = "---";
$pr1 = "<span style='mso-spacerun:yes'> </span>-";
$pr20 = "--------------------";

$qqq = "SELECT * FROM `".$partnerlogin."__okvedip` WHERE `idlevel_1` = ".$idlevel_1." AND `idlevel_2` = ".$idlevel_2." ORDER BY `nomerokved` ASC";
$Or = mysql_query($qqq)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>");
$num_rows = mysql_num_rows($Or);
$j=1;
while ($row = mysql_fetch_object($Or)){
	$okv_pkt[$j] = $j;
	$okv_num[$j] = $row->nomerokved;
	$okv_txt[$j] = $row->egotext;
  $j++;
 }

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
<link rel=File-List href="21001.files/filelist.xml">
<title>ПРИЛОЖЕНИЕ № 18</title>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Администратор</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor></o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>869</o:TotalTime>
  <o:LastPrinted>2011-02-16T19:38:00Z</o:LastPrinted>
  <o:Created>2011-02-18T11:09:00Z</o:Created>
  <o:LastSaved>2011-02-18T11:09:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>1018</o:Words>
  <o:Characters>5807</o:Characters>
  <o:Company>Интех</o:Company>
  <o:Lines>48</o:Lines>
  <o:Paragraphs>13</o:Paragraphs>
  <o:CharactersWithSpaces>6812</o:CharactersWithSpaces>
  <o:Version>10.2625</o:Version>
 </o:DocumentProperties>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:DoNotHyphenateCaps/>
  <w:PunctuationKerning/>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
 </w:WordDocument>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:"MS Mincho";
	panose-1:2 2 6 9 4 2 5 8 3 4;
	mso-font-alt:"‚l‚r –ѕ’©";
	mso-font-charset:128;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:fixed;
	mso-font-signature:1 134676480 16 0 131072 0;}
@font-face
	{font-family:SimSun;
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-alt:"Kozuka Gothic Pro B";
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:1 135135232 16 0 262144 0;}
@font-face
	{font-family:"\@SimSun";
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:1 135135232 16 0 262144 0;}
@font-face
	{font-family:"\@MS Mincho";
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-charset:128;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:fixed;
	mso-font-signature:1 134676480 16 0 131072 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
h1
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:18.0pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	font-size:18.0pt;
	font-family:"Times New Roman";
	mso-font-kerning:0pt;}
h2
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:18.0pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	font-size:16.0pt;
	font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	font-weight:normal;}
h3
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:3;
	font-size:18.0pt;
	font-family:"Times New Roman";
	letter-spacing:-1.0pt;}
h4
	{mso-style-next:Обычный;
	margin-top:1.0pt;
	margin-right:0cm;
	margin-bottom:1.0pt;
	margin-left:0cm;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:4;
	font-size:12.0pt;
	font-family:"Times New Roman";}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:120%;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:7;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;}
p.MsoHeading8, li.MsoHeading8, div.MsoHeading8
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:120%;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:8;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;}
p.MsoFootnoteText, li.MsoFootnoteText, div.MsoFootnoteText
	{mso-style-noshow:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:18.0pt;
	mso-pagination:widow-orphan;
	tab-stops:center 207.65pt right 415.3pt;
	font-size:14.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
span.MsoFootnoteReference
	{mso-style-noshow:yes;
	vertical-align:super;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoBodyTextIndent, li.MsoBodyTextIndent, div.MsoBodyTextIndent
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:35.45pt;
	line-height:18.0pt;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoBodyText3, li.MsoBodyText3, div.MsoBodyText3
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:150%;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.3, li.3, div.3
	{mso-style-name:"Вертикальный отступ 3";
	mso-style-parent:"Вертикальный отступ 2";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;}
p.2, li.2, div.2
	{mso-style-name:"Вертикальный отступ 2";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	font-size:16.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("21001.files/header.htm") fs;
	mso-footnote-continuation-separator:url("21001.files/header.htm") fcs;
	mso-endnote-separator:url("21001.files/header.htm") es;
	mso-endnote-continuation-separator:url("21001.files/header.htm") ecs;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:2.0cm 2.0cm 2.0cm 2.0cm;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-paper-source:0;
	mso-gutter-direction:rtl;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:148908252;
	mso-list-type:simple;
	mso-list-template-ids:68747265;}
@list l0:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l1
	{mso-list-id:575676926;
	mso-list-type:simple;
	mso-list-template-ids:68747265;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l2
	{mso-list-id:669870324;
	mso-list-template-ids:772689404;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:30.75pt;
	mso-level-number-position:left;
	margin-left:29.75pt;
	text-indent:-17.0pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:84.75pt;
	mso-level-number-position:left;
	margin-left:84.75pt;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:120.75pt;
	mso-level-number-position:left;
	margin-left:120.75pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l2:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:156.75pt;
	mso-level-number-position:left;
	margin-left:156.75pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l2:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:192.75pt;
	mso-level-number-position:left;
	margin-left:192.75pt;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:228.75pt;
	mso-level-number-position:left;
	margin-left:228.75pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l2:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:264.75pt;
	mso-level-number-position:left;
	margin-left:264.75pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l2:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:300.75pt;
	mso-level-number-position:left;
	margin-left:300.75pt;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:336.75pt;
	mso-level-number-position:left;
	margin-left:336.75pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l3
	{mso-list-id:701706796;
	mso-list-type:simple;
	mso-list-template-ids:-434347870;}
@list l3:level1
	{mso-level-start-at:8;
	mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:24.0pt;
	mso-level-number-position:left;
	margin-left:24.0pt;
	text-indent:-24.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l4
	{mso-list-id:884801718;
	mso-list-type:simple;
	mso-list-template-ids:68747279;}
@list l4:level1
	{mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l5
	{mso-list-id:1126463233;
	mso-list-type:simple;
	mso-list-template-ids:1756947776;}
@list l5:level1
	{mso-level-start-at:8;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:18.75pt;
	mso-level-number-position:left;
	margin-left:18.75pt;
	text-indent:-18.75pt;}
@list l6
	{mso-list-id:1324550436;
	mso-list-template-ids:-1628535832;}
@list l6:level1
	{mso-level-tab-stop:24.75pt;
	mso-level-number-position:left;
	margin-left:24.75pt;
	text-indent:-24.75pt;}
@list l6:level2
	{mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:26.15pt;
	mso-level-number-position:left;
	margin-left:26.15pt;
	text-indent:-24.75pt;}
@list l6:level3
	{mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:38.8pt;
	mso-level-number-position:left;
	margin-left:38.8pt;
	text-indent:-36.0pt;}
@list l6:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:40.2pt;
	mso-level-number-position:left;
	margin-left:40.2pt;
	text-indent:-36.0pt;}
@list l6:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:59.6pt;
	mso-level-number-position:left;
	margin-left:59.6pt;
	text-indent:-54.0pt;}
@list l6:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:61.0pt;
	mso-level-number-position:left;
	margin-left:61.0pt;
	text-indent:-54.0pt;}
@list l6:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:62.4pt;
	mso-level-number-position:left;
	margin-left:62.4pt;
	text-indent:-54.0pt;}
@list l6:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:81.8pt;
	mso-level-number-position:left;
	margin-left:81.8pt;
	text-indent:-72.0pt;}
@list l6:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:83.2pt;
	mso-level-number-position:left;
	margin-left:83.2pt;
	text-indent:-72.0pt;}
@list l7
	{mso-list-id:1689867487;
	mso-list-type:simple;
	mso-list-template-ids:68747265;}
@list l7:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l8
	{mso-list-id:1766874707;
	mso-list-type:simple;
	mso-list-template-ids:68747265;}
@list l8:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l9
	{mso-list-id:1781679405;
	mso-list-template-ids:1246150588;}
@list l9:level1
	{mso-level-tab-stop:53.25pt;
	mso-level-number-position:left;
	margin-left:53.25pt;
	text-indent:-18.0pt;}
@list l9:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:89.25pt;
	mso-level-number-position:left;
	margin-left:89.25pt;
	text-indent:-18.0pt;}
@list l9:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:125.25pt;
	mso-level-number-position:right;
	margin-left:125.25pt;
	text-indent:-9.0pt;}
@list l9:level4
	{mso-level-tab-stop:161.25pt;
	mso-level-number-position:left;
	margin-left:161.25pt;
	text-indent:-18.0pt;}
@list l9:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:197.25pt;
	mso-level-number-position:left;
	margin-left:197.25pt;
	text-indent:-18.0pt;}
@list l9:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:233.25pt;
	mso-level-number-position:right;
	margin-left:233.25pt;
	text-indent:-9.0pt;}
@list l9:level7
	{mso-level-tab-stop:269.25pt;
	mso-level-number-position:left;
	margin-left:269.25pt;
	text-indent:-18.0pt;}
@list l9:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:305.25pt;
	mso-level-number-position:left;
	margin-left:305.25pt;
	text-indent:-18.0pt;}
@list l9:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:341.25pt;
	mso-level-number-position:right;
	margin-left:341.25pt;
	text-indent:-9.0pt;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
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

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:-21.25pt;
margin-bottom:0cm;margin-left:248.15pt;margin-bottom:.0001pt;text-align:center;
text-indent:.95pt;line-height:13.0pt;mso-line-height-rule:exactly'><span
style='font-size:10.0pt'>ПРИЛОЖЕНИЕ № 18<o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:-21.25pt;
margin-bottom:0cm;margin-left:248.15pt;margin-bottom:.0001pt;text-align:center;
text-indent:4.85pt;line-height:13.0pt;mso-line-height-rule:exactly'><span
style='font-size:10.0pt'>к постановлению Правительства<o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:-21.25pt;
margin-bottom:0cm;margin-left:248.15pt;margin-bottom:.0001pt;text-align:center;
text-indent:4.85pt;line-height:13.0pt;mso-line-height-rule:exactly'><span
style='font-size:10.0pt'>Российской Федерации<o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:-21.25pt;
margin-bottom:0cm;margin-left:248.15pt;margin-bottom:.0001pt;text-align:center;
text-indent:.95pt;line-height:13.0pt;mso-line-height-rule:exactly'><span
style='font-size:10.0pt'>от 19 июня 2002 г. № 439<o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:-21.25pt;
margin-bottom:0cm;margin-left:248.15pt;margin-bottom:.0001pt;text-align:center;
text-indent:4.85pt;line-height:13.0pt;mso-line-height-rule:exactly'><span
style='font-size:10.0pt'>(в редакции постановления<o:p></o:p></span></p>

<p class=MsoBodyTextIndent align=center style='margin-top:0cm;margin-right:
-21.25pt;margin-bottom:0cm;margin-left:212.7pt;margin-bottom:.0001pt;
text-align:center;line-height:13.0pt;mso-line-height-rule:exactly'><span
style='font-size:10.0pt'>Правительства Российской Федерации<o:p></o:p></span></p>

<p class=MsoBodyTextIndent align=center style='margin-top:0cm;margin-right:
-21.25pt;margin-bottom:0cm;margin-left:212.7pt;margin-bottom:.0001pt;
text-align:center;line-height:13.0pt;mso-line-height-rule:exactly'><span
style='font-size:10.0pt'>от 26 февраля 2004 г. № 110)<o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-left:333.1pt;text-align:center;
text-indent:4.8pt;line-height:12.0pt;mso-line-height-rule:exactly'><span
style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='margin-left:269.35pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=167 valign=top style='width:124.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='margin-right:-2.55pt;text-align:right'>Форма
  №</p>
  </td>
  <td width=23 valign=top style='width:16.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <h4 style='margin:0cm;margin-bottom:.0001pt'>Р</h4>
  </td>
  <td width=22 valign=top style='width:16.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>2<o:p></o:p></b></p>
  </td>
  <td width=22 valign=top style='width:16.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>1<o:p></o:p></b></p>
  </td>
  <td width=22 valign=top style='width:16.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>0<o:p></o:p></b></p>
  </td>
  <td width=22 valign=top style='width:16.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>0<o:p></o:p></b></p>
  </td>
  <td width=22 valign=top style='width:16.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>1<o:p></o:p></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal align=center style='text-align:center;text-indent:1.0cm;
line-height:8.0pt;mso-line-height-rule:exactly'><span style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-yfti-tbllook:480;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0'>
  <td width=27 valign=top style='width:20.1pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal>В</p>
  </td>
  <td width=449 valign=top style='width:336.45pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:9.0pt'>Межрайонную инспекцию
  Федеральной налоговой службы № 46 по г. Москве<o:p></o:p></span></p>
  </td>
  <td width=37 valign=top style='width:27.7pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><o:p>&nbsp;</o:p></p>
  </td>
  <td width=145 valign=top style='width:108.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt'>77066<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width=27 valign=top style='width:20.1pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=449 valign=top style='width:336.45pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt'>(наименование регистрирующего органа)<o:p></o:p></span></p>
  </td>
  <td width=37 valign=top style='width:27.7pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=145 valign=top style='width:108.45pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt'>(код)<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText><span style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
mso-line-height-rule:exactly'><b><span style='font-size:14.0pt'>Заявление<o:p></o:p></span></b></p>

<p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
mso-line-height-rule:exactly'><b><span style='font-size:14.0pt'>о
государственной регистрации физического лица<o:p></o:p></span></b></p>

<p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
mso-line-height-rule:exactly'><b><span style='font-size:14.0pt'>в качестве
индивидуального предпринимателя</span></b><b><span style='font-size:16.0pt'><o:p></o:p></span></b></p>

<p class=MsoBodyText><b><span style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></b></p>

<table width="718"  class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>1.<o:p></o:p></span></b></p>
  </td>
  <td width=644 colspan=2 valign=top style='width:482.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='mso-fareast-font-family:SimSun;mso-fareast-language:ZH-CN'>Данные
  индивидуального предпринимателя на</span> русском языке<o:p></o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=32 style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>1.1.<o:p></o:p></span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Фамилия<o:p></o:p></span></p>
  </td>
  <td width=455 valign=top style='width:341.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:11.0pt'><?php echo $familya; ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=32 style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>1.2.<o:p></o:p></span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Имя<o:p></o:p></span></p>
  </td>
  <td width=455 valign=top style='width:341.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:11.0pt'><?php echo $imya; ?> <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=32 style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>1.3.<o:p></o:p></span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Отчество (при наличии)<o:p></o:p></span></p>
  </td>
  <td width=455 valign=top style='width:341.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:11.0pt'><?php echo $otchestvo; ?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='line-height:6.0pt;mso-line-height-rule:exactly'><span
style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table width="718"  class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>2.<o:p></o:p></span></b></p>
  </td>
  <td width=644 colspan=2 valign=top style='width:482.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b>Данные индивидуального предпринимателя
  (заполняются латинскими буквами )*</b><b><span style='font-size:13.0pt'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=32 style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>2.1.<o:p></o:p></span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Фамилия<o:p></o:p></span></p>
  </td>
  <td width=455 valign=top style='width:341.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><span
  style='font-size:11.0pt'>--------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=32 style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>3.2.<o:p></o:p></span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Имя<o:p></o:p></span></p>
  </td>
  <td width=455 valign=top style='width:341.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><span
  style='font-size:11.0pt'>--------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=32 style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>3.3.<o:p></o:p></span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Отчество (при
  наличии)<o:p></o:p></span></p>
  </td>
  <td width=455 valign=top style='width:341.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><span
  style='font-size:11.0pt'>--------<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='line-height:6.0pt'><span style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table  width="718"  class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>3.<o:p></o:p></span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b>Пол<o:p></o:p></b></p>
  </td>
  <td width=455 valign=top style='width:341.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:11.0pt'><?php echo $his_pol==1?"Мужской":"Женский"; ?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='line-height:6.0pt;mso-line-height-rule:exactly'><span
style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table  width="718"  class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>4.<o:p></o:p></span></b></p>
  </td>
  <td width=644 colspan=2 valign=top style='width:482.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b>Сведения о рождении<o:p></o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=32 style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>4.1.<o:p></o:p></span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Дата рождения<o:p></o:p></span></p>
  </td>
  <td width=455 valign=top style='width:341.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><span
  style='font-size:11.0pt'><?php echo  date_order($from_date)  ; ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td width=32 style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>4.2.<o:p></o:p></span></b></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Место рождения<o:p></o:p></span></p>
  </td>
  <td width=455 valign=top style='width:341.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><span
  style='font-size:11.0pt'><?php echo  $mestorojdeniya; ?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='line-height:6.0pt;mso-line-height-rule:exactly'><span
style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table width="718"  class=MsoNormalTable cellspacing=0 cellpadding=0
 style='
 border-collapse:collapse;
 border:none;
 mso-border-alt:solid windowtext .5pt;
 
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b>5.<o:p></o:p></b></p>
  </td>
  <td width=189 colspan=3 valign=top style='width:5.0cm;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b>Гражданство<o:p></o:p></b></p>
  </td>
  <td width=455 colspan=8 valign=top style='width:341.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:13.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=32 valign=top style='width:24.1pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:11.0pt'>5.1.<o:p></o:p></span></b></p>
  </td>




  <td width=215 colspan=4 valign=top style='width:160.9pt;
  border:0 solid #ffffff;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Гражданин<o:p></o:p></span></p>
  <p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Российской
  Федерации<o:p></o:p></span></p>
  </td>




  <td width=215 colspan=4 valign=top style='width:160.9pt;
    border:0 solid #ffffff;
	padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Иностранный<o:p></o:p></span></p>
  <p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>гражданин<o:p></o:p></span></p>
  </td>



  <td width=215 colspan=3 valign=top style='width:160.95pt;
   border:0 solid #ffffff;
   border-right:  1px solid #000000;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Лицо без<o:p></o:p></span></p>
  <p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>гражданства<o:p></o:p></span></p>
  </td>
 </tr>



 <tr style='mso-yfti-irow:2'>
  <td width=32 valign=top style='width:24.1pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <td width=85 valign=top style='width:63.75pt;
  
   border:0 solid #ffffff;
   border-right:1px solid #000000;
  
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>




  <td width=28 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  
  
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><span style='mso-spacerun:yes'> </span></span></b><b><span
  lang=EN-US style='font-size:11.0pt;mso-ansi-language:EN-US'>V</span></b><b><span
  style='font-size:11.0pt'><o:p></o:p></span></b></p>
  </td>




  <td width=101 colspan=2 valign=top style='width:75.85pt;
  
   border:0 solid #ffffff;
  
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  
  
  
 
 
 
 
 
 
 
 
 
 
 
 
 
  
  <td width=97 valign=top style='width:72.95pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>---<o:p></o:p></span></b></p>
  </td>
  <td width=89 colspan=2 valign=top style='width:66.65pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=91 valign=top style='width:68.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>---<o:p></o:p></span></b></p>
  </td>
  
  
  <td width=96 valign=top style='width:71.7pt;
  border:none;
  border-right:1 solid #000000;
  mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 
 
 
 <tr style='mso-yfti-irow:3'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=644 colspan=11 valign=top style='width:482.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:8.0pt'>(нужное отметить
  знаком – </span><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>V</span><span style='font-size:8.0pt'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:11.0pt'>5.2.<o:p></o:p></span></b></p>
  </td>
  <td width=380 colspan=7 valign=top style='width:284.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Страна,
  гражданином которой является физическое лицо **<o:p></o:p></span></p>
  </td>
  <td width=264 colspan=4 valign=top style='width:198.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  lang=EN-US style='mso-ansi-language:EN-US'>-----------<o:p></o:p></span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=42 style='border:none'></td>
  <td width=111 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=98 style='border:none'></td>
  <td width=33 style='border:none'></td>
  <td width=127 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=51 style='border:none'></td>
  <td width=64 style='border:none'></td>
  <td width=118 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=124 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal style='line-height:6.0pt;mso-line-height-rule:exactly'><span
style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table  width="718"  class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>6.<o:p></o:p></span></b></p>
  </td>
  <td width=644 colspan=2 valign=top style='width:482.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>Место
  жительства в Российской Федерации<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>6.1.<o:p></o:p></span></b></p>
  </td>
  <td width=255 valign=bottom style='width:191.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly;
  tab-stops:35.4pt'><span style='font-size:10.0pt'>Почтовый индекс<o:p></o:p></span></p>
  </td>
  <td width=388 valign=top style='width:291.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'>
  <?php echo $pochtindex ? "<span  style='font-size:11.0pt'>".$pochtindex : "<span  style='font-size:10.0pt'>--------"; ?>
  <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>6.2.<o:p></o:p></span></b></p>
  </td>
  <td width=255 valign=bottom style='width:191.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly;
  tab-stops:35.4pt'><span style='font-size:10.0pt'>Субъект Российской Федерации<o:p></o:p></span></p>
  </td>
  <td width=388 valign=top style='width:291.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'>
  <?php echo $subject ? "<span  style='font-size:11.0pt'>".$subject : "<span  style='font-size:10.0pt'>--------"; ?>
  <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>6.3.<o:p></o:p></span></b></p>
  </td>
  <td width=255 valign=bottom style='width:191.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly;
  tab-stops:35.4pt'><span style='font-size:10.0pt'>Район<o:p></o:p></span></p>
  </td>
  <td width=388 valign=top style='width:291.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'>
  <?php echo $rajon ? "<span  style='font-size:11.0pt'>".$rajon : "<span  style='font-size:10.0pt'>--------"; ?>
  <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>6.4.<o:p></o:p></span></b></p>
  </td>
  <td width=255 valign=bottom style='width:191.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly;
  tab-stops:35.4pt'><span style='font-size:10.0pt'>Город<o:p></o:p></span></p>
  </td>
  <td width=388 valign=top style='width:291.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'>
  <?php echo $gorod ? "<span  style='font-size:11.0pt'>".$gorod : "<span  style='font-size:10.0pt'>--------"; ?>
  <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>6.5.<o:p></o:p></span></b></p>
  </td>
  <td width=255 valign=bottom style='width:191.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly;
  tab-stops:35.4pt'><span style='font-size:10.0pt'>Населенный пункт<o:p></o:p></span></p>
  </td>
  <td width=388 valign=top style='width:291.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'>
  <?php echo $naspunkt ? "<span  style='font-size:11.0pt'>".$naspunkt : "<span  style='font-size:10.0pt'>--------"; ?>
  <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>6.6.<o:p></o:p></span></b></p>
  </td>
  <td width=255 valign=bottom style='width:191.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly;
  tab-stops:35.4pt'><span style='font-size:10.0pt'>Улица (проспект, переулок и
  т.д.)<o:p></o:p></span></p>
  </td>
  <td width=388 valign=top style='width:291.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'>
  <?php echo $ulitca ? "<span  style='font-size:11.0pt'>".$ulitca : "<span  style='font-size:10.0pt'>--------"; ?>
  <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>6.7.<o:p></o:p></span></b></p>
  </td>
  <td width=255 valign=bottom style='width:191.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><span
  style='font-size:10.0pt'>Номер дома (владение) <o:p></o:p></span></p>
  </td>
  <td width=388 valign=top style='width:291.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'>
  <?php echo $dom ? "<span  style='font-size:11.0pt'>".$dom : "<span  style='font-size:10.0pt'>--------"; ?>
  <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>6.8.<o:p></o:p></span></b></p>
  </td>
  <td width=255 valign=top style='width:191.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Корпус
  (строение)<o:p></o:p></span></p>
  </td>
  <td width=388 valign=top style='width:291.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'>
  <?php echo $korpus ? "<span  style='font-size:11.0pt'>".$korpus : "<span  style='font-size:10.0pt'>--------"; ?>
  </span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>6.9.<o:p></o:p></span></b></p>
  </td>
  <td width=255 valign=top style='width:191.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Квартира (офис)<o:p></o:p></span></p>
  </td>
  <td width=388 valign=top style='width:291.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'>
  <?php echo $kvartira ? "<span  style='font-size:11.0pt'>".$kvartira : "<span  style='font-size:10.0pt'>--------"; ?>
  <o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='line-height:6.0pt;mso-line-height-rule:exactly'><span
style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table width="718" class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>


 <tr style='mso-yfti-irow:0'>
  <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>7.<o:p></o:p></span></b></p>
  </td>
  <td  colspan=24 valign=top style='width:482.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b>Контактный телефон<o:p></o:p></b></p>
  </td>
 </tr>
 
 
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width="32" valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>7.1.<o:p></o:p></span></b></p>
  </td>
  <td width=38 valign=top style='width:28.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Код<o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>-<o:p></o:p></span></b></p>
  </td>
  <td width=23 valign=top style='width:16.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>-<o:p></o:p></span></b></p>
  </td>
  <td width=23 valign=top style='width:16.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><span style='mso-spacerun:yes'> </span>-<o:p></o:p></span></b></p>
  </td>
  <td width=23 valign=top style='width:16.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><span style='mso-spacerun:yes'> </span>-<o:p></o:p></span></b></p>
  </td>
  <td width=23 valign=top style='width:16.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'><span style='mso-spacerun:yes'> </span>-<o:p></o:p></span></b></p>
  </td>
  <td width=34 valign=top style='width:25.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>7.2.<o:p></o:p></span></b></p>
  </td>
  <td width=69 valign=top style='width:53.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Телефон<o:p></o:p></span></p>
  </td>
  <td width=21 valign=top style='width:16.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;

  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'><span
  style='mso-spacerun:yes'> </span>-<o:p></o:p></span></b></p>
  </td>
  <td width=21 valign=top style='width:16.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'><span
  style='mso-spacerun:yes'> </span>-<o:p></o:p></span></b></p>
  </td>
  <td width=21 valign=top style='width:16.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'><span
  style='mso-spacerun:yes'> </span>-<o:p></o:p></span></b></p>
  </td>
  <td width=22 valign=top style='width:16.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'><span
  style='mso-spacerun:yes'> </span>-<o:p></o:p></span></b></p>
  </td>
  <td width=22 valign=top style='width:16.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'><span
  style='mso-spacerun:yes'> </span>-<o:p></o:p></span></b></p>
  </td>
  <td width=22 valign=top style='width:16.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'><span
  style='mso-spacerun:yes'> </span>-<o:p></o:p></span></b></p>
  </td>
  <td width=22 valign=top style='width:16.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'><span
  style='mso-spacerun:yes'> </span>-<o:p></o:p></span></b></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>7.3.<o:p></o:p></span></b></p>
  </td>
  <td width=47 valign=top style='width:35.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:10.0pt'>Факс<o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:17.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>-<o:p></o:p></span></b></p>
  </td>
  <td width=23 valign=top style='width:17.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>-<o:p></o:p></span></b></p>
  </td>
  <td width=23 valign=top style='width:17.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>-<o:p></o:p></span></b></p>
  </td>
  <td width=23 valign=top style='width:17.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>-<o:p></o:p></span></b></p>
  </td>
  <td width=23 valign=top style='width:17.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>-<o:p></o:p></span></b></p>
  </td>
  <td width=23 valign=top style='width:17.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>-<o:p></o:p></span></b></p>
  </td>
  <td width=23 valign=top style='width:17.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:10.0pt'>-<o:p></o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='line-height:6.0pt;mso-line-height-rule:exactly'><span
style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table width="718"  class=MsoNormalTable border=1 cellspacing=0 cellpadding=0  style='border-collapse:collapse;border:none;mso-border-alt:  solid windowtext .5pt;mso-padding-alt:0cm 1.4pt 0cm 1.4pt;mso-border-insideh: .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>

 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes;page-break-inside:avoid'>

  <td width="32" valign=top style='width:24.1pt;border:solid windowtext 1.0pt; mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  
  	<p class=MsoHeader align=center style='text-align:center;line-height:12.0pt;  mso-line-height-rule:exactly;tab-stops:35.4pt'>
		<b>
			<span style='font-size:12.0pt'>8.<o:p></o:p></span>
		</b>
	</p>
  
  </td>

  <td  valign=top style='width:483.35pt;border:solid windowtext 1.0pt; border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  	
	<p class=MsoHeader style='margin-left:2.85pt;line-height:12.0pt;mso-line-height-rule:exactly;tab-stops:35.4pt'>
		<b>
			<span style='font-size:12.0pt'>Количество видов экономической деятельности
				<span style='mso-spacerun:yes'>  </span>
			</span>
		</b>
  		<u>
			<span style='font-size:12.0pt'><?php echo  $num_rows; ?></span>
		</u>
		<b>
			<span style='font-size:10.0pt'> </span>
		</b>
			<span style='font-size:10.0pt'>(сведения о видах экономической деятельности указываются в листе А)</span>
	</p>
  
  </td>
  
 </tr>
</table>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span class=MsoFootnoteReference><span
style='font-size:8.0pt;font-family:Symbol;mso-ascii-font-family:"Times New Roman";
mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*</span></span></span><span
style='font-size:8.0pt'> Заполняется иностранным гражданином или лицом без
гражданства на основании сведений, содержащихся в документе, удостоверяющем
личность в соответствии с законодательством Российской Федерации<o:p></o:p></span></p>

<p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly;
tab-stops:35.4pt'><span class=MsoFootnoteReference><span style='font-size:8.0pt;
font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol'><span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*<span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*</span></span></span></span><span
style='font-size:8.0pt'> Заполняется иностранным гражданином</span></p>




<span style='font-size:14.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:RU;mso-fareast-language:RU;mso-bidi-language:
AR-SA'>
<br clear=all style='mso-special-character:line-break;page-break-before:always'>
</span>






<p class=MsoHeader style='line-height:12.0pt;mso-line-height-rule:exactly;
tab-stops:35.4pt'><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:391.2pt;border-collapse:collapse;mso-padding-alt:0cm 1.4pt 0cm 1.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=87 valign=bottom style='width:65.2pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly;tab-stops:35.4pt'><span style='font-size:9.0pt'>Страница<o:p></o:p></span></p>
  </td>
  <td width=26 style='width:19.85pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly;tab-stops:35.4pt'><span style='font-size:9.0pt'>0<o:p></o:p></span></p>

  </td>
  <td width=26 style='width:19.85pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='text-align:center;line-height:12.0pt;
  mso-line-height-rule:exactly;tab-stops:35.4pt'><span style='font-size:9.0pt'>2<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoHeader align=right style='text-align:right;line-height:9.0pt;
mso-line-height-rule:exactly;tab-stops:35.4pt'><span style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 1.4pt 0cm 1.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=525 valign=bottom style='width:394.05pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='margin-right:-4.75pt;text-align:center;
  line-height:12.0pt'><span
  style='mso-spacerun:yes'>                                                                                                           
  </span>Форма №</p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:12.0pt'><b>Р<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:12.0pt'><b>2<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:12.0pt'><b>1<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:12.0pt'><b>0<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:12.0pt'><b>0<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:12.0pt'><b>1<o:p></o:p></b></p>
  </td>
 </tr>
</table>

<p class=MsoHeader style='tab-stops:35.4pt'><span style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table  width="718"  class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>9.<o:p></o:p></span></b></p>
  </td>
  <td width=634 colspan=12 valign=top style='width:475.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b>Данные основного
  документа, удостоверяющего личность гражданина Российской Федерации на
  территории Российской Федерации *<o:p></o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=42 style='width:31.2pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>9.1.<o:p></o:p></span></b></p>
  </td>
  <td width=340 colspan=9 valign=top style='width:9.0cm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Вид документа, удостоверяющего личность<o:p></o:p></span></p>
  </td>
  <td width=294 colspan=3 valign=top style='width:220.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:11.0pt'>Паспорт гражданина РФ<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=42 style='width:31.2pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>9.2.<o:p></o:p></span></b></p>
  </td>
  <td width=151 valign=top style='width:4.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;tab-stops:73.05pt'><span
  style='font-size:10.0pt'>Серия </span><span style='font-size:11.0pt'><?php echo  $seriap; ?><span
  style='mso-tab-count:1'>       </span></span><span style='font-size:10.0pt'><o:p></o:p></span></p>
  </td>
  <td width=38 colspan=2 valign=top style='width:1.0cm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>9.3.<o:p></o:p></span></b></p>
  </td>
  <td width=180 colspan=7 valign=top style='width:134.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Номер </span><span style='font-size:11.0pt'><?php echo  $nomerp; ?></span><span
  style='font-size:10.0pt'><o:p></o:p></span></p>
  </td>
  <td width=28 valign=top style='width:21.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>9.4.<o:p></o:p></span></b></p>
  </td>
  <td width=237 valign=top style='width:177.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Дата выдачи </span><span style='font-size:11.0pt'><?php echo  date_order($to_date)  ; ?></span><span
  style='font-size:10.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>9.5.<o:p></o:p></span></b></p>
  </td>
  <td width=151 valign=top style='width:4.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Кем выдан<o:p></o:p></span></p>
  </td>
  <td width=483 colspan=11 valign=top style='width:362.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:11.0pt'><?php echo  $kemvydanp; ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>9.6.<o:p></o:p></span></b></p>
  </td>
  <td width=151 valign=top style='width:4.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Код подразделения<o:p></o:p></span></p>
  </td>
  <td width=31 valign=top style='width:23.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:10.0pt'><span
  style='mso-spacerun:yes'>  </span></span><span style='font-size:11.0pt'><?php echo substr($kodp, 0, 1); ?><o:p></o:p></span></p>
  </td>
  <td width=31 colspan=2 valign=top style='width:23.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:10.0pt'><span
  style='mso-spacerun:yes'>  </span></span><span style='font-size:11.0pt'><?php echo substr($kodp, 1, 1); ?><o:p></o:p></span></p>
  </td>
  <td width=31 valign=top style='width:23.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:11.0pt'><span
  style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'> </span><?php echo substr($kodp, 2, 1); ?><o:p></o:p></span></p>
  </td>
  <td width=31 valign=top style='width:23.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:11.0pt'>-<o:p></o:p></span></p>
  </td>
  <td width=31 valign=top style='width:23.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:11.0pt'><span
  style='mso-spacerun:yes'>  </span><?php echo substr($kodp, 4, 1); ?><o:p></o:p></span></p>
  </td>
  <td width=31 valign=top style='width:23.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:11.0pt'><span
  style='mso-spacerun:yes'>  </span><?php echo substr($kodp, 5, 1); ?><o:p></o:p></span></p>
  </td>
  <td width=31 colspan=2 valign=top style='width:23.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:11.0pt'><span
  style='mso-spacerun:yes'>  </span><?php echo substr($kodp, 6, 1); ?><o:p></o:p></span></p>
  </td>
  <td width=266 colspan=2 valign=top style='width:199.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=42 style='border:none'></td>
  <td width=151 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=7 style='border:none'></td>
  <td width=24 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=3 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=237 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal style='line-height:6.0pt;mso-line-height-rule:exactly'><span
style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table width="718"  class=MsoNormalTable  cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>10.<o:p></o:p></span></b></p>
  </td>
  <td width=634 colspan=14 valign=top style='width:475.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b>Основания
  приобретения дееспособности несовершеннолетним **<o:p></o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=42 valign=top style='width:31.2pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>10.1.<o:p></o:p></span></b></p>
  </td>
  <td width=170 colspan=4 valign=top style='width:127.6pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>Наличие согласия родителей, усыновителей или
  попечителя на осуществление предпринимательской деятельности<o:p></o:p></span></p>
  </td>
  <td width=104 colspan=3 valign=top style='width:77.95pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>Вступление<o:p></o:p></span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>в брак<o:p></o:p></span></p>
  </td>
  <td width=175 colspan=4 valign=top style='width:131.5pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>Принятие судом решения об объявлении физического
  лица полностью дееспособным<o:p></o:p></span></p>
  </td>
  <td width=185 colspan=3 valign=top style='width:138.6pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>Принятие органами опеки и попечительства решения об
  объявлении физического лица полностью дееспособным<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=42 valign=top style='width:31.2pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 valign=top style='width:42.55pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=38 valign=top style='width:1.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:11.0pt'>---<o:p></o:p></span></b></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:2.0cm;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=35 valign=top style='width:25.95pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:11.0pt'>---<o:p></o:p></span></b></p>
  </td>
  <td width=35 valign=top style='width:26.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=66 colspan=2 valign=top style='width:49.6pt;border:none;border-right:
  solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=38 valign=top style='width:1.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:11.0pt'>---<o:p></o:p></span></b></p>
  </td>
  <td width=71 valign=top style='width:53.55pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=80 valign=top style='width:59.85pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=38 valign=top style='width:1.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:11.0pt'>---<o:p></o:p></span></b></p>
  </td>
  <td width=67 valign=top style='width:50.4pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=634 colspan=14 valign=top style='width:475.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:9.0pt'>(нужное отметить знаком – </span><span lang=EN-US
  style='font-size:9.0pt;mso-ansi-language:EN-US'>V</span><span
  style='font-size:9.0pt'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>10.2.<o:p></o:p></span></b></p>
  </td>
  <td width=321 colspan=8 valign=top style='width:241.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>Вид документа, подтверждающего приобретение
  дееспособности несовершеннолетним<o:p></o:p></span></p>
  </td>
  <td width=313 colspan=6 valign=top style='width:234.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>---------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>10.3.<o:p></o:p></span></b></p>
  </td>
  <td width=151 colspan=3 valign=top style='width:4.0cm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>Номер документа<o:p></o:p></span></p>
  </td>
  <td width=483 colspan=11 valign=top style='width:362.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>----------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>10.4.<o:p></o:p></span></b></p>
  </td>
  <td width=151 colspan=3 valign=top style='width:4.0cm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>Дата выдачи<o:p></o:p></span></p>
  </td>
  <td width=483 colspan=11 valign=top style='width:362.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>----------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>10.5.<o:p></o:p></span></b></p>
  </td>
  <td width=151 colspan=3 valign=top style='width:4.0cm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>Кем выдан<o:p></o:p></span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=483 colspan=11 valign=top style='width:362.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>----------<o:p></o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=42 style='border:none'></td>
  <td width=57 style='border:none'></td>
  <td width=38 style='border:none'></td>
  <td width=57 style='border:none'></td>
  <td width=19 style='border:none'></td>
  <td width=35 style='border:none'></td>
  <td width=35 style='border:none'></td>
  <td width=35 style='border:none'></td>
  <td width=47 style='border:none'></td>
  <td width=19 style='border:none'></td>
  <td width=38 style='border:none'></td>
  <td width=71 style='border:none'></td>
  <td width=80 style='border:none'></td>
  <td width=38 style='border:none'></td>
  <td width=67 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal style='line-height:6.0pt;mso-line-height-rule:exactly'><span
style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table width="718"  class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='mso-line-height-alt:9.0pt'><b><span
  style='font-size:10.0pt'>11.<o:p></o:p></span></b></p>
  </td>
  <td width=634 colspan=2 valign=top style='width:475.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;mso-line-height-alt:
  9.0pt'><b><span style='font-size:11.0pt'>Вид и данные документа,
  установленного федеральным законом или признаваемого в соответствии с
  международным договором Российской Федерации в качестве документа,
  удостоверяющего личность иностранного гражданина или лица без гражданства ***<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>11.1.<o:p></o:p></span></b></p>
  </td>
  <td width=151 valign=top style='width:4.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Вид документа<o:p></o:p></span></p>
  </td>
  <td width=483 valign=top style='width:362.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>-----------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>11.2.<o:p></o:p></span></b></p>
  </td>
  <td width=151 valign=top style='width:4.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Номер документа<o:p></o:p></span></p>
  </td>
  <td width=483 valign=top style='width:362.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>-----------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>11.3.<o:p></o:p></span></b></p>
  </td>
  <td width=151 valign=top style='width:4.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Дата выдачи<o:p></o:p></span></p>
  </td>
  <td width=483 valign=top style='width:362.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>-----------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>11.4.<o:p></o:p></span></b></p>
  </td>
  <td width=151 valign=top style='width:4.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>Кем выдан<o:p></o:p></span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=483 valign=top style='width:362.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:11.0pt'>-----------<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='line-height:10.0pt;mso-line-height-rule:exactly'><span
style='font-size:6.0pt'><o:p>&nbsp;</o:p></span></p>

<table width="718"  class=MsoNormalTable  cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=39 valign=top style='width:29.35pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>12.<o:p></o:p></span></b></p>
  </td>
  <td width=637 colspan=8 valign=top style='width:477.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'>Вид и данные документа, подтверждающего право
  физического лица временно или постоянно проживать на территории Российской
  Федерации ***<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:10.0pt'>12.1.<o:p></o:p></span></b></p>
  </td>
  <td width=296 colspan=4 valign=top style='width:221.65pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>Вид на жительство<o:p></o:p></span></p>
  </td>
  <td width=341 colspan=4 valign=top style='width:255.85pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>Разрешение на<o:p></o:p></span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>временное проживание<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=132 valign=top style='width:98.95pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 colspan=2 valign=top style='width:26.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:11.0pt'>---<o:p></o:p></span></b></p>
  </td>
  <td width=128 valign=top style='width:95.95pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=142 colspan=2 valign=top style='width:106.25pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=38 valign=top style='width:1.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:11.0pt'>---<o:p></o:p></span></b></p>
  </td>
  <td width=162 valign=top style='width:121.25pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=39 valign=top style='width:29.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=637 colspan=8 valign=top style='width:477.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:9.0pt'>(нужное отметить знаком – </span><span lang=EN-US
  style='font-size:9.0pt;mso-ansi-language:EN-US'>V</span><span
  style='font-size:9.0pt'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=39 valign=top style='width:29.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>12.2.<o:p></o:p></span></b></p>
  </td>
  <td width=141 colspan=2 valign=top style='width:105.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'>Номер документа<o:p></o:p></span></p>
  </td>
  <td width=496 colspan=6 valign=top style='width:371.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'>-------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=39 valign=top style='width:29.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>12.3.<o:p></o:p></span></b></p>
  </td>
  <td width=141 colspan=2 valign=top style='width:105.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'>Дата принятия<o:p></o:p></span></p>
  </td>
  <td width=496 colspan=6 valign=top style='width:371.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'>-------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=39 valign=top style='width:29.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>12.4.<o:p></o:p></span></b></p>
  </td>
  <td width=141 colspan=2 valign=top style='width:105.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'>Кем выдан<o:p></o:p></span></p>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=496 colspan=6 valign=top style='width:371.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'>-------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=39 valign=top style='width:29.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>12.5.<o:p></o:p></span></b></p>
  </td>
  <td width=300 colspan=5 valign=top style='width:224.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'>Срок действия
  разрешения<o:p></o:p></span></p>
  </td>
  <td width=337 colspan=3 valign=top style='width:252.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'>--------<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes'>
  <td width=39 valign=top style='width:29.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><b><span
  style='font-size:10.0pt'>12.6.<o:p></o:p></span></b></p>
  </td>
  <td width=300 colspan=5 valign=top style='width:224.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'>Действителен по
  (для вида на жительство)<o:p></o:p></span></p>
  </td>
  <td width=337 colspan=3 valign=top style='width:252.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left;line-height:12.0pt;
  mso-line-height-rule:exactly'><span style='font-size:11.0pt'>--------<o:p></o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=39 style='border:none'></td>
  <td width=132 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=128 style='border:none'></td>
  <td width=4 style='border:none'></td>
  <td width=138 style='border:none'></td>
  <td width=38 style='border:none'></td>
  <td width=162 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span class=MsoFootnoteReference><span
style='font-size:8.0pt;font-family:Symbol;mso-ascii-font-family:"Times New Roman";
mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*</span></span></span><span
style='font-size:8.0pt'> Заполняется гражданином Российской Федерации<o:p></o:p></span></p>

<p class=MsoFootnoteText><span class=MsoFootnoteReference><span
style='font-size:8.0pt;font-family:Symbol;mso-ascii-font-family:"Times New Roman";
mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*<span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*</span></span></span></span><span
style='font-size:8.0pt'> Заполняется в случае, если физическое лицо является
несовершеннолетним<o:p></o:p></span></p>

<p class=MsoFootnoteText><span class=MsoFootnoteReference><span
style='font-size:8.0pt;font-family:Symbol;mso-ascii-font-family:"Times New Roman";
mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*<span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*<span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*</span></span></span></span></span><span
style='font-size:8.0pt'> Заполняется иностранным гражданином или лицом без
гражданства<o:p></o:p></span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<span style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:RU;mso-fareast-language:RU;mso-bidi-language:
AR-SA'><br clear=all style='mso-special-character:line-break;page-break-before:
always'>
</span>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:397.4pt;border-collapse:collapse;mso-padding-alt:0cm 1.4pt 0cm 1.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=81 valign=bottom style='width:60.85pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='tab-stops:35.4pt'><span style='font-size:9.0pt'>Страница<o:p></o:p></span></p>
  </td>
  <td width=25 style='width:18.65pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='text-align:center;tab-stops:35.4pt'><span
  style='font-size:9.0pt'>0<o:p></o:p></span></p>
  </td>
  <td width=25 style='width:18.65pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='text-align:center;tab-stops:35.4pt'><span
  style='font-size:9.0pt'>3<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoHeader style='line-height:8.0pt;mso-line-height-rule:exactly;
tab-stops:35.4pt'><span style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoHeader style='line-height:8.0pt;mso-line-height-rule:exactly;
tab-stops:35.4pt'><span style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 1.4pt 0cm 1.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=525 valign=bottom style='width:394.05pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='mso-spacerun:yes'>                                                                                                           
  </span>Форма №</p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>Р<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>2<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>1<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>0<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>0<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>1<o:p></o:p></b></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><o:p>&nbsp;</o:p></p>

<table width="718"  class=MsoNormalTable cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:
 solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:
 solid windowtext .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 
 
 <tr style='mso-yfti-irow:0'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>13.<o:p></o:p></span></b></p>
  </td>

  <td colspan=16 valign=top style='width:475.65pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText>Представлены документы в соответствии со статьей 22.1
  Федерального закона &quot;О&nbsp;государственной регистрации юридических лиц
  и индивидуальных предпринимателей&quot;</p>
  <p class=MsoBodyText align=left style='text-align:left'>Перечень документов
  указывается в листе Б</p>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoBodyText align=left style='text-align:left'><b>Мною
  подтверждается, что сведения, содержащиеся в заявлении, достоверны и
  соответствуют представленным документам<o:p></o:p></b></p>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=42 valign=top style='width:31.2pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>


  <td colspan=5 valign=top style='border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=right style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:right'><b>Заявитель<o:p></o:p></b></p>
  </td>
  <td colspan=9 valign=top style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width="28" colspan=2 valign=top style='width:22.05pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=42 valign=top style='width:31.2pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=5 valign=top style='border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=9 valign=top style='border:none;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:10.0pt'>(подпись)<o:p></o:p></span></p>
  </td>
  <td  width="28" colspan=2 valign=top style='width:22.05pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=42 valign=top style='width:31.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="312"  valign=top style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'>ИНН заявителя (при
  наличии)<span style='font-size:10.0pt'><o:p></o:p></span></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 0, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 1, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 2, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td colspan=2 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 3, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 4, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 5, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 6, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 7, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 8, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 9, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 10, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td colspan=2 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:11.0pt'><?php echo ($a=substr($inn, 11, 1))?$a:$pr3; ?></span><o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=42 style='border:none'></td>
  <td width=267 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=18 style='border:none'></td>
  <td width=11 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=28 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoBodyText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<table width="718"  class=MsoNormalTable  cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=42 valign=top style='width:31.15pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b>14.<o:p></o:p></b></p>
  </td>
  <td width=634 colspan=15 valign=top style='width:475.7pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b>Заполняется в
  соответствии со статьей 80 &quot;Основ законодательства Российской Федерации
  о нотариате&quot;<o:p></o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:10.0pt'>14.1.<o:p></o:p></span></b></p>
  </td>
  <td width=634 colspan=15 valign=top style='width:475.7pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=350 colspan=4 valign=top style='width:262.3pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=285 colspan=11 valign=top style='width:213.4pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText3 align=left style='text-align:left'><b>Подпись заявителя
  свидетельствую<o:p></o:p></b></p>
  <p class=MsoBodyText align=left style='margin-bottom:6.0pt;text-align:left'><b>Нотариус<o:p></o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=350 colspan=4 valign=top style='width:262.3pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText>М.П.</p>
  </td>
  <td width=255 colspan=9 valign=top style='width:191.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=30 colspan=2 valign=top style='width:22.2pt;border:none;border-right:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=42 valign=top style='width:31.15pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=350 colspan=4 valign=top style='width:262.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=255 colspan=9 valign=top style='width:191.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>(подпись)<o:p></o:p></span></p>
  </td>
  <td width=30 colspan=2 valign=top style='width:22.2pt;border:none;border-right:
  solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>

 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes'>
  <td width=42 valign=top style='width:31.15pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><b><span style='font-size:11.0pt'>14.2.<o:p></o:p></span></b></p>
  </td>
  <td width=264 valign=top style='width:198.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b>ИНН нотариуса <o:p></o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 valign=top style='width:21.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=28 colspan=2 valign=top style='width:21.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
  <td width=29 valign=top style='width:21.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=42 style='border:none'></td>
  <td width=264 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=29 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoBodyText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<table  width="718" class=MsoNormalTable  cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 2.85pt 0cm 2.85pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0'>
  <td width=42 valign=top style='width:31.15pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:10.0pt'>15.<o:p></o:p></span></b></p>
  </td>
  <td width=634 colspan=14 valign=top style='width:475.7pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b>Заполняется должностным
  лицом регистрирующего органа<o:p></o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:10.0pt'>15.1.<o:p></o:p></span></b></p>
  </td>
  <td width=634 colspan=14 valign=top style='width:475.7pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>15.1.1. <b>Документы представлены<o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=317 colspan=6 valign=top style='width:237.85pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:10.0pt'>Непосредственно <o:p></o:p></span></p>
  </td>
  <td width=317 colspan=8 valign=top style='width:237.85pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:10.0pt'>Почтовым отправлением<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=132 valign=top style='width:99.3pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=38 valign=top style='width:1.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=147 colspan=4 valign=top style='width:110.2pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=146 colspan=4 valign=top style='width:109.5pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=38 valign=top style='width:1.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=133 colspan=3 valign=top style='width:100.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=634 colspan=14 valign=top style='width:475.7pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:9.0pt'>(нужное отметить знаком – </span><span lang=EN-US
  style='font-size:9.0pt;mso-ansi-language:EN-US'>V</span><span
  style='font-size:9.0pt'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=634 colspan=14 valign=top style='width:475.7pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>15.1.2. Дата получения документов регистрирующим
  органом<span style='mso-spacerun:yes'>  </span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=246 colspan=4 valign=top style='width:184.35pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=right style='text-align:right'>&quot;<span
  style='font-size:10.0pt'><o:p></o:p></span></p>
  </td>
  <td width=52 valign=top style='width:39.35pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=42 colspan=3 valign=top style='width:31.5pt;border:none;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'>&quot;<span
  style='font-size:10.0pt'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=top style='width:3.0cm;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'>&quot;<span
  style='font-size:10.0pt'><o:p></o:p></span></p>
  </td>
  <td width=47 colspan=2 valign=top style='width:35.45pt;border:none;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'>&quot;<span
  style='font-size:10.0pt'><o:p></o:p></span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:2.0cm;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'>&quot;<span
  style='font-size:10.0pt'><o:p></o:p></span></p>
  </td>
  <td width=58 valign=top style='width:43.3pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'>&quot;<span
  style='font-size:10.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=246 colspan=4 valign=top style='width:184.35pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=52 valign=top style='width:39.35pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>число<o:p></o:p></span></p>
  </td>
  <td width=42 colspan=3 valign=top style='width:31.5pt;border:none;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=113 valign=top style='width:3.0cm;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-bottom:2.0pt;text-align:center'><span
  style='font-size:10.0pt'>месяц<o:p></o:p></span></p>
  </td>
  <td width=47 colspan=2 valign=top style='width:35.45pt;border:none;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:2.0cm;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>год<o:p></o:p></span></p>
  </td>
  <td width=58 valign=top style='width:43.3pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=189 colspan=3 valign=top style='width:141.8pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>15.1.3. Входящий номер<o:p></o:p></span></p>
  </td>
  <td width=142 colspan=4 valign=top style='width:106.35pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=303 colspan=7 valign=top style='width:227.55pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width=42 valign=top style='width:31.15pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=634 colspan=14 valign=top style='width:475.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:10.0pt'>15.2.<o:p></o:p></span></b></p>
  </td>
  <td width=634 colspan=14 valign=top style='width:475.7pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>15.2.1. <b>Расписка в получении документов<o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=317 colspan=6 valign=top style='width:237.85pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:10.0pt'>Выдана непосредственно <o:p></o:p></span></p>
  </td>
  <td width=317 colspan=8 valign=top style='width:237.85pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:10.0pt'>Направлена по почте<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=132 valign=top style='width:99.3pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=38 valign=top style='width:1.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=147 colspan=4 valign=top style='width:110.2pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=146 colspan=4 valign=top style='width:109.5pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=38 valign=top style='width:1.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=133 colspan=3 valign=top style='width:100.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><b><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=634 colspan=14 valign=top style='width:475.7pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><span
  style='font-size:8.0pt'>(нужное отметить знаком – </span><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>V</span><span
  style='font-size:8.0pt'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=246 colspan=4 valign=top style='width:184.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='margin-left:36.0pt;text-align:left;
  text-indent:-36.0pt'><span style='font-size:10.0pt'>15.2.2. Должность
  работника регистрирующего органа<o:p></o:p></span></p>
  </td>
  <td width=388 colspan=10 valign=top style='width:291.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=246 colspan=4 valign=top style='width:184.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>15.2.3. Фамилия<o:p></o:p></span></p>
  </td>
  <td width=388 colspan=10 valign=top style='width:291.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=246 colspan=4 valign=top style='width:184.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>15.2.4. Имя<o:p></o:p></span></p>
  </td>
  <td width=388 colspan=10 valign=top style='width:291.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=246 colspan=4 valign=top style='width:184.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'>15.2.5. Отчество<o:p></o:p></span></p>
  </td>
  <td width=388 colspan=10 valign=top style='width:291.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18'>
  <td width=42 valign=top style='width:31.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=331 colspan=7 valign=top style='width:248.15pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=208 colspan=5 valign=top style='width:155.9pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=96 colspan=2 valign=top style='width:71.65pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;mso-yfti-lastrow:yes'>
  <td width=42 valign=top style='width:31.15pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=331 colspan=7 valign=top style='width:248.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=208 colspan=5 valign=top style='width:155.9pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:10.0pt'>(подпись)<o:p></o:p></span></p>
  </td>
  <td width=96 colspan=2 valign=top style='width:71.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 2.85pt 0cm 2.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=42 style='border:none'></td>
  <td width=132 style='border:none'></td>
  <td width=38 style='border:none'></td>
  <td width=19 style='border:none'></td>
  <td width=57 style='border:none'></td>
  <td width=52 style='border:none'></td>
  <td width=19 style='border:none'></td>
  <td width=14 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=113 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=38 style='border:none'></td>
  <td width=38 style='border:none'></td>
  <td width=38 style='border:none'></td>
  <td width=58 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoBodyText><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<span style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:RU;mso-fareast-language:RU;mso-bidi-language:
AR-SA'><br clear=all style='mso-special-character:line-break;page-break-before:
always'>
</span>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:397.4pt;border-collapse:collapse;mso-padding-alt:0cm 1.4pt 0cm 1.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=81 valign=bottom style='width:60.85pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='tab-stops:35.4pt'><span style='font-size:9.0pt'>Страница<o:p></o:p></span></p>
  </td>
  <td width=25 style='width:18.65pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='text-align:center;tab-stops:35.4pt'><span
  style='font-size:9.0pt'>0<o:p></o:p></span></p>
  </td>
  <td width=25 style='width:18.65pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='text-align:center;tab-stops:35.4pt'><span
  style='font-size:9.0pt'>4<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoHeader style='line-height:8.0pt;mso-line-height-rule:exactly;
tab-stops:35.4pt'><span style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoHeader style='line-height:8.0pt;mso-line-height-rule:exactly;
tab-stops:35.4pt'><span style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 1.4pt 0cm 1.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=525 valign=bottom style='width:394.05pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='mso-spacerun:yes'>                                                                                                           
  </span>Форма №</p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>Р<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>2<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>1<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>0<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>0<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>1<o:p></o:p></b></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><o:p>&nbsp;</o:p></p>

<p class=MsoHeader style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:408.25pt;line-height:normal;tab-stops:35.4pt center 207.65pt right 415.3pt'><b><span
style='font-size:12.0pt'>Лист А<o:p></o:p></span></b></p>

<p class=MsoHeader align=center style='margin-bottom:12.0pt;text-align:center;
tab-stops:35.4pt'><b>Сведения о видах экономической деятельности*<o:p></o:p></b></p>

<p class=MsoHeader align=center style='text-align:center;tab-stops:35.4pt'><span
style='font-size:12.0pt'><?php echo  $familya; ?> <?php echo  $imya; ?> <?php echo  $otchestvo; ?><o:p></o:p></span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;mso-border-top-alt:
solid windowtext .5pt;padding:1.0pt 0cm 0cm 0cm'>

<p class=MsoHeader align=center style='text-align:center;line-height:normal;
tab-stops:35.4pt;border:none;mso-border-top-alt:solid windowtext .5pt;
padding:0cm;mso-padding-alt:1.0pt 0cm 0cm 0cm'><span style='font-size:10.0pt'>(фамилия,
имя, отчество физического лица)<o:p></o:p></span></p>

<p class=MsoHeader align=center style='text-align:center;line-height:normal;
tab-stops:35.4pt;border:none;mso-border-top-alt:solid windowtext .5pt;
padding:0cm;mso-padding-alt:1.0pt 0cm 0cm 0cm'><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

</div>

<table width="718"  class=MsoNormalTable  cellspacing=0 cellpadding=0 
 style='width:496.15pt;margin-left:1.4pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 1.4pt 0cm 1.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid'>
  <td width=28 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;text-align:center;
  tab-stops:35.4pt'><b><span style='font-size:12.0pt'>№<o:p></o:p></span></b></p>
  </td>
  <td width=236 colspan=10 valign=top style='width:176.7pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:center;
  tab-stops:35.4pt'><b><span style='font-size:12.0pt'>Код по ОКВЭД**<o:p></o:p></span></b></p>
  </td>
  <td width=398 valign=top style='width:298.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:2.85pt;text-align:center;tab-stops:35.4pt'><b><span
  style='font-size:12.0pt'>Наименование вида деятельности<o:p></o:p></span></b></p>
  </td>
 </tr>






<?php 
$j=1;

for ($j=1;$j<=10;$j++){

?>






 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td width=28 rowspan=3 style='width:21.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;text-align:center;
  line-height:normal'><b><span style='font-size:12.0pt'><?php echo $okv_pkt[$j]; ?><o:p></o:p></span></b></p>
  </td>
  <td width=236 colspan=10 valign=top style='width:176.7pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=398 rowspan=3 style='width:298.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:left;
  line-height:normal;tab-stops:35.4pt'><span style='mso-fareast-font-family:
  "MS Mincho"'>
  <?php echo $okv_txt[$j]!=""?$okv_txt[$j]:$pr20; ?>
  
  <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td width=14 valign=top style='width:10.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=substr($okv_num[$j], 0, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;line-height:normal;tab-stops:35.4pt'><b><span
  style='font-size:12.0pt'><span style='mso-spacerun:yes'> </span><?php echo ($a=substr($okv_num[$j], 1, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'>.<o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=substr($okv_num[$j], 3, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=substr($okv_num[$j], 4, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'>.<o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=substr($okv_num[$j], 6, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.7pt;border-top:solid windowtext 1.0pt;;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=substr($okv_num[$j], 7, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=12 valign=top style='width:9.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td width=236 colspan=10 valign=top style='width:176.7pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 
<?php 
}
?>
</table>

<p class=MsoHeader style='line-height:normal;tab-stops:35.4pt'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=662
 style='width:496.15pt;margin-left:1.4pt;border-collapse:collapse;mso-padding-alt:
 0cm 1.4pt 0cm 1.4pt'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:15.0pt'>
  <td width=463 valign=bottom style='width:347.3pt;padding:0cm 1.4pt 0cm 1.4pt;
  height:15.0pt'>
  <p class=MsoHeader align=right style='margin-top:0cm;margin-right:5.65pt;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:right;
  line-height:normal;tab-stops:35.4pt'><b><span style='font-size:12.0pt'>Заявитель<o:p></o:p></span></b></p>
  </td>
  <td width=198 style='width:148.85pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt;height:15.0pt'>
  <p class=MsoHeader style='margin-left:2.85pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=463 valign=top style='width:347.3pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=right style='margin-top:0cm;margin-right:5.65pt;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:right;
  line-height:normal;tab-stops:35.4pt'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=198 valign=top style='width:148.85pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.5pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;tab-stops:35.4pt'><span style='font-size:8.0pt'>(подпись)<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span class=MsoFootnoteReference><span
style='font-size:8.0pt'>*</span></span><span style='font-size:8.0pt'>
Указываются все виды экономической деятельности, которыми будет заниматься
физическое лицо, регистрируемое в качестве индивидуального предпринимателя.
Если количество видов деятельности больше 10, то заполняется второй лист А,
больше 20<span style='mso-spacerun:yes'>  </span>- третий лист А и т.д. Первым
указывается основной вид экономической деятельности<o:p></o:p></span></p>

<p class=MsoFootnoteText><span class=MsoFootnoteReference><span
style='font-size:8.0pt;font-family:Symbol;mso-ascii-font-family:"Times New Roman";
mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*<span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*</span></span></span></span><span
style='font-size:8.0pt'> Указывается не менее трех цифровых знаков Общероссийского
классификатора видов экономической деятельности<o:p></o:p></span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>








<?php if ($num_rows>10){ ?>







































<span style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:RU;mso-fareast-language:RU;mso-bidi-language:
AR-SA'><br clear=all style='mso-special-character:line-break;page-break-before:
always'>
</span>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:397.4pt;border-collapse:collapse;mso-padding-alt:0cm 1.4pt 0cm 1.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=81 valign=bottom style='width:60.85pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='tab-stops:35.4pt'><span style='font-size:9.0pt'>Страница<o:p></o:p></span></p>
  </td>
  <td width=25 style='width:18.65pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='text-align:center;tab-stops:35.4pt'><span
  style='font-size:9.0pt'>0<o:p></o:p></span></p>
  </td>
  <td width=25 style='width:18.65pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='text-align:center;tab-stops:35.4pt'><span
  style='font-size:9.0pt'>5<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoHeader style='line-height:8.0pt;mso-line-height-rule:exactly;
tab-stops:35.4pt'><span style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoHeader style='line-height:8.0pt;mso-line-height-rule:exactly;
tab-stops:35.4pt'><span style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 1.4pt 0cm 1.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=525 valign=bottom style='width:394.05pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='mso-spacerun:yes'>                                                                                                           
  </span>Форма №</p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>Р<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>2<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>1<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>0<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>0<o:p></o:p></b></p>
  </td>
  <td width=23 valign=top style='width:17.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>1<o:p></o:p></b></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText style='line-height:12.0pt;mso-line-height-rule:exactly'><o:p>&nbsp;</o:p></p>

<p class=MsoHeader style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:408.25pt;line-height:normal;tab-stops:35.4pt center 207.65pt right 415.3pt'><b><span
style='font-size:12.0pt'>Лист А<o:p></o:p></span></b></p>

<p class=MsoHeader align=center style='margin-bottom:12.0pt;text-align:center;
tab-stops:35.4pt'><b>Сведения о видах экономической деятельности*<o:p></o:p></b></p>

<p class=MsoHeader align=center style='text-align:center;tab-stops:35.4pt'><span
style='font-size:12.0pt'><?php echo  $familya; ?> <?php echo  $imya; ?> <?php echo  $otchestvo; ?><o:p></o:p></span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;mso-border-top-alt:
solid windowtext .5pt;padding:1.0pt 0cm 0cm 0cm'>

<p class=MsoHeader align=center style='text-align:center;line-height:normal;
tab-stops:35.4pt;border:none;mso-border-top-alt:solid windowtext .5pt;
padding:0cm;mso-padding-alt:1.0pt 0cm 0cm 0cm'><span style='font-size:10.0pt'>(фамилия,
имя, отчество физического лица)<o:p></o:p></span></p>

<p class=MsoHeader align=center style='text-align:center;line-height:normal;
tab-stops:35.4pt;border:none;mso-border-top-alt:solid windowtext .5pt;
padding:0cm;mso-padding-alt:1.0pt 0cm 0cm 0cm'><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

</div>

<table width="718"  class=MsoNormalTable  cellspacing=0 cellpadding=0 
 style='width:496.15pt;margin-left:1.4pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 1.4pt 0cm 1.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid'>
  <td width=28 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;text-align:center;
  tab-stops:35.4pt'><b><span style='font-size:12.0pt'>№<o:p></o:p></span></b></p>
  </td>
  <td width=236 colspan=10 valign=top style='width:176.7pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:center;
  tab-stops:35.4pt'><b><span style='font-size:12.0pt'>Код по ОКВЭД**<o:p></o:p></span></b></p>
  </td>
  <td width=398 valign=top style='width:298.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:2.85pt;text-align:center;tab-stops:35.4pt'><b><span
  style='font-size:12.0pt'>Наименование вида деятельности<o:p></o:p></span></b></p>
  </td>
 </tr>






<?php 
for ($j=11;$j<=20;$j++){

?>






 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td width=28 rowspan=3 style='width:21.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;text-align:center;
  line-height:normal'><b><span style='font-size:12.0pt'><?php echo $okv_pkt[$j]; ?><o:p></o:p></span></b></p>
  </td>
  <td width=236 colspan=10 valign=top style='width:176.7pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=398 rowspan=3 style='width:298.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:left;
  line-height:normal;tab-stops:35.4pt'><span style='mso-fareast-font-family:
  "MS Mincho"'>
  <?php echo $okv_txt[$j]!=""?$okv_txt[$j]:$pr20; ?>
  
  <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td width=14 valign=top style='width:10.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=substr($okv_num[$j], 0, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;line-height:normal;tab-stops:35.4pt'><b><span
  style='font-size:12.0pt'><span style='mso-spacerun:yes'> </span><?php echo ($a=substr($okv_num[$j], 1, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'>.<o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=substr($okv_num[$j], 3, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=substr($okv_num[$j], 4, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'>.<o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=substr($okv_num[$j], 6, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.7pt;border-top:solid windowtext 1.0pt;;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=substr($okv_num[$j], 7, 1))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=12 valign=top style='width:9.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td width=236 colspan=10 valign=top style='width:176.7pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 
<?php 
}
?>
</table>

<p class=MsoHeader style='line-height:normal;tab-stops:35.4pt'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=662
 style='width:496.15pt;margin-left:1.4pt;border-collapse:collapse;mso-padding-alt:
 0cm 1.4pt 0cm 1.4pt'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:15.0pt'>
  <td width=463 valign=bottom style='width:347.3pt;padding:0cm 1.4pt 0cm 1.4pt;
  height:15.0pt'>
  <p class=MsoHeader align=right style='margin-top:0cm;margin-right:5.65pt;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:right;
  line-height:normal;tab-stops:35.4pt'><b><span style='font-size:12.0pt'>Заявитель<o:p></o:p></span></b></p>
  </td>
  <td width=198 style='width:148.85pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt;height:15.0pt'>
  <p class=MsoHeader style='margin-left:2.85pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=463 valign=top style='width:347.3pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=right style='margin-top:0cm;margin-right:5.65pt;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:right;
  line-height:normal;tab-stops:35.4pt'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=198 valign=top style='width:148.85pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.5pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;tab-stops:35.4pt'><span style='font-size:8.0pt'>(подпись)<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoFootnoteText><span class=MsoFootnoteReference><span
style='font-size:8.0pt'>*</span></span><span style='font-size:8.0pt'>
Указываются все виды экономической деятельности, которыми будет заниматься
физическое лицо, регистрируемое в качестве индивидуального предпринимателя.
Если количество видов деятельности больше 10, то заполняется второй лист А,
больше 20<span style='mso-spacerun:yes'>  </span>- третий лист А и т.д. Первым
указывается основной вид экономической деятельности<o:p></o:p></span></p>

<p class=MsoFootnoteText><span class=MsoFootnoteReference><span
style='font-size:8.0pt;font-family:Symbol;mso-ascii-font-family:"Times New Roman";
mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*<span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>*</span></span></span></span><span
style='font-size:8.0pt'> Указывается не менее трех цифровых знаков Общероссийского
классификатора видов экономической деятельности<o:p></o:p></span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>


<?php 
}     //    if ($num_rows>10)  больше 10 видов деятельности
?>   









</div>

</body>

</html>
<?php 
close_connection();



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


?>