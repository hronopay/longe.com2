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

$pr3 = "---";
$pr1 = "<span style='mso-spacerun:yes'> </span>-";
$pr20 = "--------------------";

$qqq = "SELECT * FROM `".$partnerlogin."__okvedooo` WHERE `idlevel_1` = ".$idlevel_1." AND `idlevel_2` = ".$idlevel_2." ORDER BY `nomerokved` ASC";
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
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1251">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<title>Заявление Начало</title>
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
	{font-family:Verdana;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:204;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:536871559 0 0 0 415 0;}
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
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:48.2pt;
	text-align:justify;
	text-indent:-12.2pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	mso-list:l11 level1 lfo32;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-font-kerning:14.0pt;
	mso-bidi-font-weight:normal;}
h2
	{mso-style-next:Обычный;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:2.0cm;
	text-align:justify;
	text-indent:-20.7pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	mso-list:l11 level2 lfo32;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-bidi-font-weight:normal;}
h3
	{mso-style-next:Обычный;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:73.7pt;
	text-align:justify;
	text-indent:-37.7pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:3;
	mso-list:l11 level3 lfo32;
	tab-stops:39.7pt;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-bidi-font-weight:normal;}
h4
	{mso-style-next:Обычный;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:62.35pt;
	text-align:justify;
	text-indent:-26.35pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:4;
	mso-list:l11 level4 lfo32;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-bidi-font-weight:normal;}
h5
	{mso-style-next:Обычный;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:177.0pt;
	text-indent:-35.4pt;
	mso-pagination:widow-orphan;
	mso-outline-level:5;
	mso-list:l0 level5 lfo26;
	font-size:13.0pt;
	font-family:"Times New Roman";
	font-style:italic;}
h6
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:120%;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:6;
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
	mso-bidi-font-size:12.0pt;
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
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;}
p.MsoHeading9, li.MsoHeading9, div.MsoHeading9
	{mso-style-next:Обычный;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	text-align:right;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:9;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;}
p.MsoToc1, li.MsoToc1, div.MsoToc1
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Обычный;
	margin-top:6.0pt;
	margin-right:1.0cm;
	margin-bottom:0cm;
	margin-left:35.45pt;
	margin-bottom:.0001pt;
	text-indent:-35.45pt;
	mso-pagination:none;
	font-size:13.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;
	mso-bidi-font-weight:normal;}
p.MsoToc2, li.MsoToc2, div.MsoToc2
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Обычный;
	margin-top:6.0pt;
	margin-right:1.0cm;
	margin-bottom:0cm;
	margin-left:70.9pt;
	margin-bottom:.0001pt;
	text-indent:-35.45pt;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 481.9pt;
	font-size:13.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoToc3, li.MsoToc3, div.MsoToc3
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Обычный;
	margin-top:3.0pt;
	margin-right:1.0cm;
	margin-bottom:0cm;
	margin-left:62.35pt;
	margin-bottom:.0001pt;
	text-indent:-1.0cm;
	mso-pagination:none;
	font-size:11.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;
	mso-bidi-font-weight:normal;
	mso-no-proof:yes;}
p.MsoToc4, li.MsoToc4, div.MsoToc4
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Обычный;
	margin-top:0cm;
	margin-right:1.0cm;
	margin-bottom:0cm;
	margin-left:104.9pt;
	margin-bottom:.0001pt;
	text-indent:-42.55pt;
	mso-pagination:none;
	font-size:11.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-no-proof:yes;}
p.MsoNormalIndent, li.MsoNormalIndent, div.MsoNormalIndent
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:35.4pt;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoFootnoteText, li.MsoFootnoteText, div.MsoFootnoteText
	{mso-style-noshow:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 207.65pt right 415.3pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 233.85pt right 467.75pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
span.MsoFootnoteReference
	{mso-style-noshow:yes;
	vertical-align:super;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{margin-top:0cm;
	margin-right:-16.1pt;
	margin-bottom:0cm;
	margin-left:294.0pt;
	margin-bottom:.0001pt;
	text-align:center;
	text-indent:-.2pt;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:120%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	color:black;}
p.MsoBodyTextIndent, li.MsoBodyTextIndent, div.MsoBodyTextIndent
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:8.5pt;
	margin-bottom:.0001pt;
	text-indent:-8.5pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoBodyText3, li.MsoBodyText3, div.MsoBodyText3
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:120%;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	color:black;
	font-weight:bold;
	mso-bidi-font-weight:normal;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;
	text-underline:single;}
p.MsoPlainText, li.MsoPlainText, div.MsoPlainText
	{margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
p.3, li.3, div.3
	{mso-style-name:Заг3;
	mso-style-parent:"Обычный отступ";
	mso-style-next:Обычный;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:65.2pt;
	margin-bottom:.0001pt;
	text-indent:-25.5pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-list:l15 level3 lfo14;
	font-size:13.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;
	mso-bidi-font-weight:normal;}
p.30, li.30, div.30
	{mso-style-name:"заголовок 3";
	mso-style-next:Обычный;
	margin-top:0cm;
	margin-right:4.4pt;
	margin-bottom:0cm;
	margin-left:27.5pt;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:3;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	layout-grid-mode:line;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.BodyText2, li.BodyText2, div.BodyText2
	{mso-style-name:"Body Text 2";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
span.footnotereference
	{mso-style-name:"footnote reference";
	vertical-align:super;}
p.footnotetext, li.footnotetext, div.footnotetext
	{mso-style-name:"footnote text";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.a, li.a, div.a
	{mso-style-name:"Регистратор основной";
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:Verdana;
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
p.small, li.small, div.small
	{mso-style-name:"Регистратор small";
	mso-style-parent:"Регистратор основной";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:7.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:Verdana;
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("ФНС2009_11001_00_заявление.files/header.htm") fs;
	mso-footnote-continuation-separator:url("ФНС2009_11001_00_заявление.files/header.htm") fcs;
	mso-endnote-separator:url("ФНС2009_11001_00_заявление.files/header.htm") es;
	mso-endnote-continuation-separator:url("ФНС2009_11001_00_заявление.files/header.htm") ecs;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:36.0pt 42.55pt 1.0cm 62.95pt;
	mso-header-margin:0cm;
	mso-footer-margin:0cm;
	mso-header:url("ФНС2009_11001_00_заявление.files/header.htm") h1;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:-5;
	mso-list-template-ids:1188039336;}
@list l0:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:35.4pt;
	text-indent:-35.4pt;}
@list l0:level2
	{mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:70.8pt;
	text-indent:-35.4pt;}
@list l0:level3
	{mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:106.2pt;
	text-indent:-35.4pt;}
@list l0:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:141.6pt;
	text-indent:-35.4pt;}
@list l0:level5
	{mso-level-style-link:"Заголовок 5";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:177.0pt;
	text-indent:-35.4pt;}
@list l0:level6
	{mso-level-style-link:"Заголовок 6";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:212.4pt;
	text-indent:-35.4pt;}
@list l0:level7
	{mso-level-style-link:"Заголовок 7";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:247.8pt;
	text-indent:-35.4pt;}
@list l0:level8
	{mso-level-style-link:"Заголовок 8";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:283.2pt;
	text-indent:-35.4pt;}
@list l0:level9
	{mso-level-style-link:"Заголовок 9";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:318.6pt;
	text-indent:-35.4pt;}
@list l1
	{mso-list-id:152188492;
	mso-list-type:simple;
	mso-list-template-ids:68747265;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l2
	{mso-list-id:279916021;
	mso-list-type:hybrid;
	mso-list-template-ids:-687732692;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:35.45pt;
	mso-level-number-position:left;
	margin-left:35.45pt;
	text-indent:-35.45pt;
	mso-ansi-font-size:12.0pt;
	font-family:Symbol;}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:26.5pt;
	mso-level-number-position:left;
	margin-left:25.5pt;
	text-indent:-17.0pt;
	mso-ansi-font-size:12.0pt;
	font-family:Symbol;}
@list l3
	{mso-list-id:557861283;
	mso-list-template-ids:934328518;}
@list l3:level1
	{mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l3:level2
	{mso-level-suffix:space;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.6pt;
	text-indent:-21.6pt;}
@list l3:level3
	{mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	margin-left:61.2pt;
	text-indent:-25.2pt;}
@list l3:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	margin-left:86.4pt;
	text-indent:-32.4pt;}
@list l3:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:126.0pt;
	mso-level-number-position:left;
	margin-left:111.6pt;
	text-indent:-39.6pt;}
@list l3:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:162.0pt;
	mso-level-number-position:left;
	margin-left:136.8pt;
	text-indent:-46.8pt;}
@list l3:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-54.0pt;}
@list l3:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	margin-left:187.2pt;
	text-indent:-61.2pt;}
@list l3:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-72.0pt;}
@list l4
	{mso-list-id:561402970;
	mso-list-type:simple;
	mso-list-template-ids:68747265;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l5
	{mso-list-id:575676926;
	mso-list-type:simple;
	mso-list-template-ids:68747265;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l6
	{mso-list-id:630719643;
	mso-list-type:hybrid;
	mso-list-template-ids:-1118422066 68747265 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l7
	{mso-list-id:635178952;
	mso-list-type:simple;
	mso-list-template-ids:68747279;}
@list l7:level1
	{mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l8
	{mso-list-id:771514384;
	mso-list-template-ids:-51371520;}
@list l8:level1
	{mso-level-suffix:space;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l8:level2
	{mso-level-suffix:space;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.6pt;
	text-indent:-21.6pt;}
@list l8:level3
	{mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:61.2pt;
	text-indent:-25.2pt;}
@list l8:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	margin-left:86.4pt;
	text-indent:-32.4pt;}
@list l8:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:126.0pt;
	mso-level-number-position:left;
	margin-left:111.6pt;
	text-indent:-39.6pt;}
@list l8:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:162.0pt;
	mso-level-number-position:left;
	margin-left:136.8pt;
	text-indent:-46.8pt;}
@list l8:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-54.0pt;}
@list l8:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	margin-left:187.2pt;
	text-indent:-61.2pt;}
@list l8:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-72.0pt;}
@list l9
	{mso-list-id:853376919;
	mso-list-type:hybrid;
	mso-list-template-ids:425772362 68747279 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
@list l9:level1
	{mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10
	{mso-list-id:1012295272;
	mso-list-template-ids:2063519898;}
@list l10:level1
	{mso-level-suffix:space;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l10:level2
	{mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:39.6pt;
	mso-level-number-position:left;
	margin-left:39.6pt;
	text-indent:-21.6pt;}
@list l10:level3
	{mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	margin-left:61.2pt;
	text-indent:-25.2pt;}
@list l10:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	margin-left:86.4pt;
	text-indent:-32.4pt;}
@list l10:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:126.0pt;
	mso-level-number-position:left;
	margin-left:111.6pt;
	text-indent:-39.6pt;}
@list l10:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:162.0pt;
	mso-level-number-position:left;
	margin-left:136.8pt;
	text-indent:-46.8pt;}
@list l10:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-54.0pt;}
@list l10:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	margin-left:187.2pt;
	text-indent:-61.2pt;}
@list l10:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-72.0pt;}
@list l11
	{mso-list-id:1230918366;
	mso-list-template-ids:-341147268;}
@list l11:level1
	{mso-level-style-link:"Заголовок 1";
	mso-level-suffix:space;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:48.2pt;
	text-indent:-12.2pt;}
@list l11:level2
	{mso-level-style-link:"Заголовок 2";
	mso-level-suffix:space;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.0cm;
	text-indent:-20.7pt;}
@list l11:level3
	{mso-level-style-link:"Заголовок 3";
	mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:73.7pt;
	text-indent:-37.7pt;}
@list l11:level4
	{mso-level-style-link:"Заголовок 4";
	mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:62.35pt;
	text-indent:-26.35pt;}
@list l11:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:111.6pt;
	mso-level-number-position:left;
	margin-left:111.6pt;
	text-indent:-39.6pt;}
@list l11:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:136.8pt;
	mso-level-number-position:left;
	margin-left:136.8pt;
	text-indent:-46.8pt;}
@list l11:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:162.0pt;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-54.0pt;}
@list l11:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:187.2pt;
	mso-level-number-position:left;
	margin-left:187.2pt;
	text-indent:-61.2pt;}
@list l11:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-72.0pt;}
@list l12
	{mso-list-id:1377043647;
	mso-list-type:simple;
	mso-list-template-ids:68747265;}
@list l12:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l13
	{mso-list-id:1418014908;
	mso-list-template-ids:135169516;}
@list l13:level1
	{mso-level-tab-stop:35.85pt;
	mso-level-number-position:left;
	margin-left:35.85pt;
	text-indent:-18.0pt;}
@list l13:level2
	{mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:57.45pt;
	mso-level-number-position:left;
	margin-left:57.45pt;
	text-indent:-21.6pt;}
@list l13:level3
	{mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:79.05pt;
	text-indent:-25.2pt;}
@list l13:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:125.85pt;
	mso-level-number-position:left;
	margin-left:104.25pt;
	text-indent:-32.4pt;}
@list l13:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:143.85pt;
	mso-level-number-position:left;
	margin-left:129.45pt;
	text-indent:-39.6pt;}
@list l13:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:179.85pt;
	mso-level-number-position:left;
	margin-left:154.65pt;
	text-indent:-46.8pt;}
@list l13:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:197.85pt;
	mso-level-number-position:left;
	margin-left:179.85pt;
	text-indent:-54.0pt;}
@list l13:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:233.85pt;
	mso-level-number-position:left;
	margin-left:205.05pt;
	text-indent:-61.2pt;}
@list l13:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:269.85pt;
	mso-level-number-position:left;
	margin-left:233.85pt;
	text-indent:-72.0pt;}
@list l14
	{mso-list-id:1441530917;
	mso-list-type:hybrid;
	mso-list-template-ids:1723633928;}
@list l14:level1
	{mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:17.0pt;
	text-indent:-17.0pt;}
@list l15
	{mso-list-id:1630163224;
	mso-list-template-ids:1961920066;}
@list l15:level1
	{mso-level-start-at:3;
	mso-level-tab-stop:111.55pt;
	mso-level-number-position:left;
	margin-left:111.55pt;
	text-indent:-18.0pt;}
@list l15:level2
	{mso-level-start-at:2;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:133.15pt;
	mso-level-number-position:left;
	margin-left:133.15pt;
	text-indent:-21.6pt;}
@list l15:level3
	{mso-level-style-link:Заг3;
	mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:65.2pt;
	text-indent:-25.5pt;}
@list l15:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:201.55pt;
	mso-level-number-position:left;
	margin-left:179.95pt;
	text-indent:-32.4pt;}
@list l15:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:219.55pt;
	mso-level-number-position:left;
	margin-left:205.15pt;
	text-indent:-39.6pt;}
@list l15:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:255.55pt;
	mso-level-number-position:left;
	margin-left:230.35pt;
	text-indent:-46.8pt;}
@list l15:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:273.55pt;
	mso-level-number-position:left;
	margin-left:255.55pt;
	text-indent:-54.0pt;}
@list l15:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:309.55pt;
	mso-level-number-position:left;
	margin-left:280.75pt;
	text-indent:-61.2pt;}
@list l15:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:345.55pt;
	mso-level-number-position:left;
	margin-left:309.55pt;
	text-indent:-72.0pt;}
@list l16
	{mso-list-id:1991978716;
	mso-list-type:hybrid;
	mso-list-template-ids:-687732692;}
@list l16:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:35.45pt;
	mso-level-number-position:left;
	margin-left:35.45pt;
	text-indent:-35.45pt;
	mso-ansi-font-size:12.0pt;
	font-family:Symbol;}
@list l16:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>
<style>
<!--


.xl6514427
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;}

.xl19814427
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:center;
	vertical-align:bottom;
	white-space:nowrap;}

.xl12114427
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:nowrap;}


.xl19614427
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:center;
	vertical-align:top;
	white-space:nowrap;}

-->
</style>

<style>
<!--
.xl652191
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;}
.xl682191
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;}
.xl762191
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:center;
	vertical-align:top;
	white-space:nowrap;}
.xl1812191
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	white-space:nowrap;}
.xl1872191
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:nowrap;}
.xl1902191
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:nowrap;}
.xl1912191
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:nowrap;}
.xl2092191
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:center;
	vertical-align:bottom;
	white-space:nowrap;}
.xl2112191
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	text-align:center;
	vertical-align:bottom;
	white-space:nowrap;}
-->
</style>
</head>

<body lang=RU link=blue vlink=purple style='tab-interval:35.4pt'>
<div style="margin:0 0 0 10px; ">
<div class=Section1>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-yfti-tbllook:480;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;height:16.35pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.35pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 valign=top style='width:126.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.35pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=24 valign=top style='width:18.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.35pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:33.5pt'>
  <td width=31 valign=top style='width:23.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:33.5pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 valign=top style='width:126.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:33.5pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=24 valign=top style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:33.5pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:19.2pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:19.2pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 valign=top style='width:126.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:19.2pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=24 valign=top style='width:18.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.2pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal align=right style='margin-left:278.95pt;text-align:right'><span
style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>



<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt;
font-family:Verdana'><o:p>&nbsp;</o:p></span></p>

<table x:str border=0 cellpadding=0 cellspacing=0  width=682 class=xl652191>
  <col class=xl652191 width=5 span=127 style='width:4pt'>
  <tr height=20>
    <td colspan=84 height=20 class=xl2092191></td>
    <td colspan=13 class=xl762191>Форма №</td>
    <td colspan=5 class=xl1872191>Р</td>
    <td colspan=5 class=xl1872191 x:num>1</td>
    <td colspan=5 class=xl1872191 x:num>1</td>
    <td colspan=5 class=xl1872191 x:num>0</td>
    <td colspan=5 class=xl1872191 x:num>0</td>
    <td colspan=5 class=xl1872191 x:num style="border-right:1px solid #000000; ">1</td>
  </tr>
  <tr height=20>
    <td colspan=127 height=20 class=xl2092191></td>
  </tr>
  <tr height=20>
    <td colspan=4 height=20 class=xl2092191>В</td>
    <td colspan=85 class=xl1902191>В Межрайонную Инспекцию ФНС №46 по г.Москве</td>
    <td colspan=8 class=xl2092191></td>
    <td colspan=30 class=xl1912191 style="border-right:1px solid #000000; ">77066</td>
  </tr>
  <tr class=xl682191 height=16>
    <td colspan=4 height=16 class=xl2112191></td>
    <td colspan=85 class=xl1812191>(наименование регистрирующего органа)</td>
    <td colspan=8 class=xl2112191></td>
    <td colspan=30 class=xl1812191>(код)</td>
  </tr>
</table>

<p class=MsoNormal><span style='font-size:7.0pt;mso-bidi-font-size:9.0pt;
font-family:Verdana'><o:p>&nbsp;</o:p></span></p>

<p class=a align=center style='text-align:center'><b><span style='font-size:
11.0pt'>Заявление<o:p></o:p></span></b></p>

<p class=a align=center style='text-align:center'><b><span style='font-size:
9.0pt'>о государственной регистрации юридического лица при создании<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:19.25pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=a align=center style='text-align:center'>1<o:p></o:p></p>
  </td>
  <td width=216 valign=top style='width:162.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=a>Организационно-правовая форма юридического лица<o:p></o:p></p>
  </td>
  <td width=405 style='width:303.45pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>Общество с ограниченной ответственностью<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.25pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=a align=center style='text-align:center'>2<o:p></o:p></p>
  </td>
  <td width=621 colspan=2 valign=top style='width:465.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Наименование
  юридического лица<o:p></o:p></span></p>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Фирменное
  наименование – в отношении коммерческих организаций<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:8.7pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.7pt'>
  <p class=a align=center style='text-align:center'>2.1</p>
  </td>
  <td width=621 colspan=2 valign=top style='width:465.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:8.7pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>На
  русском языке<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:19.3pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=216 valign=top style='width:162.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=a>2.1.1. Полное <o:p></o:p></p>
  </td>
  <td width=405 style='width:303.45pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>Общество с ограниченной ответственностью «<?php echo $naimenovanie; ?>»</span></b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:19.3pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=216 valign=top style='width:162.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=a>2.1.2. Сокращенное<o:p></o:p></p>
  </td>
  <td width=405 style='width:303.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>ООО «<?php echo $nameshort; ?>»</span></b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:12.2pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.2pt'>
  <p class=a align=center style='text-align:center'>2.2<o:p></o:p></p>
  </td>
  <td width=621 colspan=2 valign=top style='width:465.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.2pt'>
  <p class=a>На языке народов Российской Федерации <o:p></o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:19.25pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=216 valign=top style='width:162.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=a>2.2.1. Полное<o:p></o:p></p>
  </td>
  <td width=405 style='width:303.45pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>---</span></b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:19.3pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=216 valign=top style='width:162.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=a>2.2.2. Сокращенное<o:p></o:p></p>
  </td>
  <td width=405 style='width:303.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>---</span></b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:11.7pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:11.7pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=216 valign=top style='width:162.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:11.7pt'>
  <p class=a>2.2.3. Указать на каком языке</p>
  </td>
  <td width=405 style='width:303.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:11.7pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>---</span></b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid;height:11.7pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.7pt'>
  <p class=a align=center style='text-align:center'>2.3<o:p></o:p></p>
  </td>
  <td width=216 valign=top style='width:162.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:11.7pt'>
  <p class=a>На иностранном языке</p>
  </td>
  <td width=405 style='width:303.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:11.7pt'>
  <p class=small><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid;height:19.25pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=216 valign=top style='width:162.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=a>2.3.1. Полное<o:p></o:p></p>
  </td>
  <td width=405 style='width:303.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'><?php echo $foreignnamefull ? $foreignnamefull : "---"; ?></span></b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid;height:19.3pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=216 valign=top style='width:162.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=a>2.3.2. Сокращенное<o:p></o:p></p>
  </td>
  <td width=405 style='width:303.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.3pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'><?php echo $foreignnameshort ? $foreignnameshort : "---"; ?></span></b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:11.7pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:11.7pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=216 valign=top style='width:162.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:11.7pt'>
  <p class=a>2.3.3. Указать на каком языке</p>
  </td>
  <td width=405 style='width:303.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:11.7pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'><?php echo $language ? $language : "---"; ?></span></b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable cellspacing=0 cellpadding=0 width=686 
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-weight:
  bold'>3<o:p></o:p></span></p>
  </td>
  <td colspan=16 valign=top style='width:466.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='mso-bidi-font-weight:bold'>Адрес (место нахождения) <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:3.7pt'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.7pt'>
  <p class=a>3.1<o:p></o:p></p>
  </td>
  <td colspan=12 valign=top style='width:366.5pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.7pt'>
  <p class=small><span style='mso-bidi-font-size:7.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 valign=top style='width:99.85pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.7pt'>
  <p class=small align=center style='text-align:center'><span style='mso-bidi-font-size:
  7.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:15.75pt'>
  <td width=40 style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:15.75pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td colspan=12 style='width:366.5pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Постоянно
  действующего исполнительного органа</span><b><span style='font-size:9.0pt'><o:p></o:p></span></b></p>
  </td>
  <td width=30 style='width:17.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.75pt'>
  <p class=small align=center style='text-align:center'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 style='width:27.25pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:9.0pt;mso-ansi-language:EN-US'>V<o:p></o:p></span></b></p>
  </td>
  <td colspan=2 style='width:54.85pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.75pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:3.5pt'>
  <td width=40 style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=12 style='width:366.5pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 style='width:99.85pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:15.75pt'>
  <td width=40 style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:15.75pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td colspan=12 style='width:366.5pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Иного
  органа</span></p>
  </td>
  <td width=30 style='width:17.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.75pt'>
  <p class=small align=center style='text-align:center'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 style='width:27.25pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt'>
  <p class=small align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-ansi-language:EN-US;mso-bidi-font-weight:bold'><o:p>&nbsp;---</o:p></span></p>
  </td>
  <td colspan=2 style='width:54.85pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.75pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:6.8pt'>
  <td width=40 style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:6.8pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=12 style='width:366.5pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.8pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 style='width:99.85pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.8pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:15.75pt'>
  <td width=40 style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:15.75pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td colspan=12 style='width:366.5pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Лица,
  имеющего право действовать от имени юридического лица без доверенности</span></p>
  </td>
  <td width=30 style='width:17.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.75pt'>
  <p class=small align=center style='text-align:center'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=144 style='width:27.25pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  9.0pt;mso-bidi-font-weight:bold'><o:p>---&nbsp;</o:p></span></p>
  </td>
  <td colspan=2 style='width:54.85pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.75pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:8.0pt'>
  <td width=40 valign=top style='width:29.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:8.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=16 valign=top style='width:466.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.0pt'>
  <p class=small align=center style='text-align:center'>(нужное отметить знаком
  <span lang=EN-US style='mso-ansi-language:EN-US'>&quot;V&quot;</span>)<span
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:14.65pt'>
  <td width=40 style='width:29.4pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'>3.2<o:p></o:p></p>
  </td>
  <td width=433 style='width:186.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a>Наименование органа<o:p></o:p></p>
  </td>
  <td colspan=15 style='width:280.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='mso-bidi-font-size:8.0pt;mso-ansi-language:EN-US'>Директор<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=433 valign=top style='width:186.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><o:p>&nbsp;</o:p></p>
  </td>
  <td width=63 valign=top style='width:11.8pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=8 valign=top style='width:132.8pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=6 valign=top style='width:135.75pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>



 <tr style='mso-yfti-irow:10;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'>3.3<o:p></o:p></p>
  </td>
  <td width=433 valign=top style='width:186.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>3.3.1. Почтовый индекс<o:p></o:p></p>
  </td>
  <td width=63 style='width:11.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td  colspan=2  style='width:22.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p align=center class=small style='text-align:center'><strong><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US;mso-bidi-font-weight:bold'><?php echo substr($pochtindex, 0, 1); ?></span></strong></p>
  </td>
  <td colspan=2 style='width:22.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p align=center class=small style='text-align:center'><strong><span style='font-size:
  8.0pt'><?php echo substr($pochtindex, 1, 1); ?></span></strong></p>
  </td>
  <td  colspan=2  style='width:22.15pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p align=center class=small style='text-align:center'><strong><span style='font-size:
  8.0pt'><?php echo substr($pochtindex, 2, 1); ?></span></strong></p>
  </td>
  <td  colspan=2  style='width:22.1pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p align=center class=small style='text-align:center'><strong><span style='font-size:
  8.0pt'><?php echo substr($pochtindex, 3, 1); ?></span></strong></p>
  </td>
  <td  colspan=2  style='width:22.15pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p align=center class=small style='text-align:center'><strong><span style='font-size:
  8.0pt'><?php echo substr($pochtindex, 4, 1); ?></span></strong></p>
  </td>
  <td  style='width:12.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p align=center class=small style='text-align:center'><strong><span style='font-size:
  8.0pt'><?php echo substr($pochtindex, 5, 1); ?></span></strong></p>
  </td>
  <td colspan=6 valign=top style='width:135.75pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>





 <tr style='mso-yfti-irow:11;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=433 valign=top style='width:186.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><o:p>&nbsp;</o:p></p>
  </td>
  <td width=63 valign=top style='width:11.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=8 valign=top style='width:132.8pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=6 valign=top style='width:135.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=433 valign=top style='width:186.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>3.3.2. Субъект Российской Федерации<o:p></o:p></p>
  </td>
  <td colspan=15 style='width:280.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'><?php echo $subject ? $subject : "---"; ?></span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=433 valign=top style='width:186.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>3.3.3. Район<o:p></o:p></p>
  </td>
  <td colspan=15 style='width:280.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'><?php echo $rajon ? $rajon : "---"; ?></span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=433 valign=top style='width:186.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>3.3.4. Город<o:p></o:p></p>
  </td>
  <td colspan=15 style='width:280.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'><?php echo $gorod ? $gorod : "---"; ?></span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=433 valign=top style='width:186.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>3.3.5.<span style='mso-spacerun:yes'>  </span>Населенный пункт<o:p></o:p></p>
  </td>
  <td colspan=15 style='width:280.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'><?php echo $naspunkt ? $naspunkt : "---"; ?></span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=433 valign=top style='width:186.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>3.3.6. Улица (проспект, переулок и т.п. <span style='font-size:
  7.0pt'>указать нужное с наименованием</span>)<o:p></o:p></p>
  </td>
  <td colspan=15 style='width:280.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'><?php echo $ulitca ? $ulitca : "---"; ?></span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 valign=top style='width:222.6pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=5 style='width:89.8pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=2 style='width:20.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=4 valign=top style='width:106.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=104 style='width:27.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 style='width:222.6pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>3.3.7. Дом
  (владение и т.п. - </span><span style='mso-bidi-font-size:7.0pt'>указать
  нужное</span><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>) <o:p></o:p></span></p>
  </td>
  <td colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><?php $domspl=explode(" ",$dom,2); echo $domspl[0] ? $domspl[0] : "---"; ?></span></b><span
  style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
  <td colspan=2 style='width:20.5pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 style='width:106.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><?php  echo $domspl[1] ? $domspl[1] : "---"; ?></span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=104 style='width:27.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 valign=top style='width:222.6pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=2 style='width:20.5pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=4 style='width:106.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'>номер<o:p></o:p></p>
  </td>
  <td width=104 style='width:27.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 valign=top style='width:222.6pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=5 style='width:89.8pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=2 style='width:20.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=4 valign=top style='width:106.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=104 style='width:27.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 style='width:222.6pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>3.3.8. Корпус
  (строение и т.п. - </span><span style='mso-bidi-font-size:7.0pt'>указать
  нужное</span><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>) <o:p></o:p></span></p>
  </td>
  <td colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><?php $korpusspl=explode(" ",$korpus); echo $korpusspl[0] ? $korpusspl[0] : "---"; ?></span></b><span
  style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
  <td colspan=2 style='width:20.5pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 style='width:106.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><?php echo $korpusspl[1] ? $korpusspl[1] : "---"; ?></span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=104 style='width:27.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 valign=top style='width:222.6pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=2 style='width:20.5pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=4 style='width:106.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'>номер<o:p></o:p></p>
  </td>
  <td width=104 style='width:27.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 valign=top style='width:222.6pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=5 style='width:89.8pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=2 style='width:20.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=4 valign=top style='width:106.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=104 style='width:27.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 style='width:222.6pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>3.3.9. Квартира
  (офис и т.п. - </span><span style='mso-bidi-font-size:7.0pt'>указать нужное</span><span
  style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>) <o:p></o:p></span></p>
  </td>
  <td colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><?php $kvspl=explode(" ",$kvartira); echo $kvspl[0] ? $kvspl[0] : "---"; ?></span></b><span
  style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
  <td colspan=2 style='width:20.5pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 style='width:106.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><?php echo $kvspl[1] ? $kvspl[1] : "---"; ?></span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=104 style='width:27.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=40 valign=top style='width:29.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=4 valign=top style='width:222.6pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=2 style='width:20.5pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td colspan=4 style='width:106.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'>номер<o:p></o:p></p>
  </td>
  <td width=104 style='width:27.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 
</table>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Times New Roman"; mso-fareast-font-family:"Times New Roman";mso-ansi-language:RU;mso-fareast-language:
RU;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break; page-break-before:always'>
</span>


  <table x:str border=0 cellpadding=0 cellspacing=0 width=682 class=xl6514427>
    <col class=xl6514427 width=5 span=127 style='width:4pt'>
    <tr height=20>
      <td colspan=104 height=20 class=xl19814427 width=520></td>
      <td colspan=13 class=xl19814427 width=65>Страница</td>
      <td colspan=5 class=xl12114427 width=25 x:num>0</td>
      <td colspan=5 class=xl12114427 width=25 x:num style="border-right:1px solid #000000; ">2</td>
    </tr>
    <tr height=8>
      <td colspan=127 height=8 class=xl19814427></td>
    </tr>
    <tr height=20>
      <td colspan=84 height=20 class=xl19814427></td>
      <td colspan=13 class=xl19614427>Форма №</td>
      <td colspan=5 class=xl12114427>Р</td>
      <td colspan=5 class=xl12114427 x:num>1</td>
      <td colspan=5 class=xl12114427 x:num>1</td>
      <td colspan=5 class=xl12114427 x:num>0</td>
      <td colspan=5 class=xl12114427 x:num>0</td>
      <td colspan=5 class=xl12114427 x:num style="border-right:1px solid #000000; ">1</td>
    </tr>
</table>


<p class=MsoNormal><span style='font-size:3.0pt;font-family:Verdana'><o:p>&nbsp;</o:p></span></p>



<p class=MsoNormal><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable cellspacing=0 cellpadding=0 width=686
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;height:12.2pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.2pt'>
  <p class=a align=center style='text-align:center'>3.4<o:p></o:p></p>
  </td>
  <td width=621 colspan=2 valign=top style='width:465.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.2pt'>
  <p class=a>Контактный телефон <o:p></o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:17.25pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=216 style='width:162.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>3.4.1. Код города<o:p></o:p></span></p>
  </td>
  <td width=405 style='width:303.45pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>---</span></b><b><span style='font-size:8.0pt'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:17.25pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=216 style='width:162.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>3.4.2. Телефон<o:p></o:p></span></p>
  </td>
  <td width=405 style='width:303.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>---<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:17.25pt'>
  <td width=39 style='width:29.55pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:17.25pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=216 style='width:162.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>3.4.3. Факс<o:p></o:p></span></p>
  </td>
  <td width=405 style='width:303.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>---<o:p></o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=686
 style='margin-left:-3.6pt;border-collapse:collapse;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:4.7pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:4.7pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=622 colspan=7 valign=top style='width:466.2pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.7pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:14.25pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'>4<o:p></o:p></p>
  </td>
  <td width=297 colspan=2 style='width:222.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Количество
  учредителей юридического лица *</span><b><span style='font-size:9.0pt'><o:p></o:p></span></b></p>
  </td>
  <td width=84 colspan=2 style='width:63.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><?php echo $uchr_num; ?></span></b><span
  lang=EN-US style='font-size:9.0pt;mso-ansi-language:EN-US;mso-bidi-font-weight:
  bold'><o:p></o:p></span></p>
  </td>
  <td width=241 colspan=3 style='width:180.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:3.5pt'>
  <td width=39 style='width:29.55pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=622 colspan=7 style='width:466.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:4.9pt'>
  <td width=39 style='width:29.55pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.9pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=622 colspan=7 style='width:466.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.9pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>Учредителями являются (</span><span
  style='font-size:7.0pt'>нужное отметить знаком - </span><span lang=EN-US
  style='font-size:7.0pt;mso-ansi-language:EN-US'>V</span><span
  style='mso-bidi-font-size:8.0pt'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-top:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=48 colspan=2 style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=289 colspan=4 style='width:216.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt'>сведения
  указываются в листе А заявления<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  9.0pt;mso-ansi-language:EN-US'>4.1<o:p></o:p></span></p>
  </td>
  <td width=285 style='width:213.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>юридические
  лица <o:p></o:p></span></p>
  </td>
  <td width=48 colspan=2 style='width:36.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=156 colspan=2 style='width:117.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:9.0pt'>количество листов А<o:p></o:p></span></p>
  </td>
  <td width=72 style='width:54.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=61 style='width:45.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:4.75pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:4.75pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:4.75pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=48 colspan=2 valign=top style='width:36.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:4.75pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:117.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.75pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=72 valign=top style='width:54.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.75pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=61 valign=top style='width:45.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.75pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=48 colspan=2 style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=289 colspan=4 style='width:216.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt'>сведения
  указываются в листе Б заявления<b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  9.0pt;mso-ansi-language:EN-US'>4.2<o:p></o:p></span></p>
  </td>
  <td width=285 style='width:213.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>физические
  лица<o:p></o:p></span></p>
  </td>
  <td width=48 colspan=2 style='width:36.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;
  mso-ansi-language:EN-US'>V<o:p></o:p></span></b></p>
  </td>
  <td width=156 colspan=2 style='width:117.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:9.0pt'>количество листов Б<o:p></o:p></span></p>
  </td>
  <td width=72 style='width:54.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><?php echo $uchr_num; ?></span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=61 style='width:45.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid;height:4.3pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:4.3pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:4.3pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=48 colspan=2 valign=top style='width:36.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:4.3pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=156 colspan=2 valign=top style='width:117.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.3pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=72 valign=top style='width:54.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.3pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=61 valign=top style='width:45.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.3pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>Российская Федерация,<o:p></o:p></span></p>
  </td>
  <td width=48 colspan=2 style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=289 colspan=4 style='width:216.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt'>сведения
  указываются в листе В заявления<b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  9.0pt;mso-ansi-language:EN-US'>4.3<o:p></o:p></span></p>
  </td>
  <td width=285 style='width:213.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>субъект
  Российской Федерации,<o:p></o:p></span></p>
  </td>
  <td width=48 colspan=2 style='width:36.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=156 colspan=2 style='width:117.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:9.0pt'>количество листов В<o:p></o:p></span></p>
  </td>
  <td width=72 style='width:54.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=61 style='width:45.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>муниципальное образование</span><span
  style='font-size:5.0pt'><o:p></o:p></span></p>
  </td>
  <td width=48 colspan=2 style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=156 colspan=2 style='width:117.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=72 style='width:54.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=61 style='width:45.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=bottom style='width:213.45pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>учредители - владельцы<o:p></o:p></span></p>
  </td>
  <td width=48 colspan=2 style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=289 colspan=4 style='width:216.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt'>сведения
  указываются в листе Г заявления<b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  9.0pt;mso-ansi-language:EN-US'>4.</span><span style='font-size:8.0pt;
  mso-bidi-font-size:9.0pt'>4<o:p></o:p></span></p>
  </td>
  <td width=285 style='width:213.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>инвестиционных
  паев паевого<o:p></o:p></span></p>
  </td>
  <td width=48 colspan=2 style='width:36.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=156 colspan=2 style='width:117.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:9.0pt'>количество листов Г<o:p></o:p></span></p>
  </td>
  <td width=72 style='width:54.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=61 style='width:45.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>инвестиционного фонда</span><span
  style='font-size:5.0pt'><o:p></o:p></span></p>
  </td>
  <td width=48 colspan=2 style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=156 colspan=2 style='width:117.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=72 style='width:54.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=61 style='width:45.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=39 style='border:none'></td>
  <td width=285 style='border:none'></td>
  <td width=12 style='border:none'></td>
  <td width=36 style='border:none'></td>
  <td width=48 style='border:none'></td>
  <td width=108 style='border:none'></td>
  <td width=72 style='border:none'></td>
  <td width=61 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0  width=686
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:26.65pt'>
  <td width=39 style='width:29.55pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:26.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'>5<o:p></o:p></span></p>
  </td>
  <td width=333 style='width:249.45pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.65pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>Сведения о держателе
  реестра акционеров акционерного общества<o:p></o:p></span></p>
  </td>
  <td width=288 style='width:216.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.65pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt;
  mso-bidi-font-weight:bold'>указываются в листе Д заявления<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:16.55pt'>
  <td width=39 style='width:29.55pt;border:solid windowtext 1.0pt;border-bottom:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.55pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-weight:
  bold'>6<o:p></o:p></span></p>
  </td>
  <td width=622 colspan=5 style='width:466.2pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.55pt'>
  <p class=a><span style='mso-bidi-font-weight:bold'>Сведения об уставном капитале
  (складочном капитале, уставном фонде, паевом фонде) **<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:8.0pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=622 colspan=5 valign=top style='width:466.2pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.0pt'>
  <p class=small align=center style='text-align:center'>(нужное отметить знаком
  – <span lang=EN-US style='mso-ansi-language:EN-US'>V</span>)<span
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:3.7pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.7pt'>
  <p class=a><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=153 colspan=2 valign=top style='width:114.45pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.7pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=469 colspan=3 valign=top style='width:351.75pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.7pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:14.25pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=153 colspan=2 style='width:114.45pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Уставный
  капитал</span><b><span style='font-size:9.0pt'><o:p></o:p></span></b></p>
  </td>
  <td width=60 style='width:45.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:9.0pt;mso-ansi-language:EN-US'>V<o:p></o:p></span></b></p>
  </td>
  <td width=361 style='width:270.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:7.7pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.7pt'>
  <p class=a><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=153 colspan=2 valign=top style='width:114.45pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.7pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=469 colspan=3 valign=top style='width:351.75pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.7pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:14.25pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=153 colspan=2 style='width:114.45pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Складочный
  капитал</span><b><span style='font-size:9.0pt'><o:p></o:p></span></b></p>
  </td>
  <td width=60 style='width:45.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><b><span
  lang=EN-US style='font-size:9.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>
  <td width=361 style='width:270.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:3.5pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=153 colspan=2 style='width:114.45pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=469 colspan=3 style='width:351.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:14.25pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=153 colspan=2 style='width:114.45pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Уставный
  фонд</span><o:p></o:p></p>
  </td>
  <td width=60 style='width:45.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><b><span
  lang=EN-US style='font-size:9.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>
  <td width=361 style='width:270.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:4.45pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:4.45pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=153 colspan=2 style='width:114.45pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:4.45pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=469 colspan=3 style='width:351.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.45pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid;height:14.25pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=153 colspan=2 style='width:114.45pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Паевой
  фонд</span></p>
  </td>
  <td width=60 style='width:45.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><b><span
  lang=EN-US style='font-size:9.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>
  <td width=361 style='width:270.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid;height:3.7pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.7pt'>
  <p class=a><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=153 colspan=2 valign=top style='width:114.45pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.7pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=469 colspan=3 valign=top style='width:351.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.7pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid;height:8.35pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.35pt'>
  <p class=a><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=622 colspan=5 valign=top style='width:466.2pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.35pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;page-break-inside:avoid;height:14.25pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'>6.1<o:p></o:p></p>
  </td>
  <td width=84 style='width:63.25pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>Размер</span><b><span
  style='font-size:9.0pt'><o:p></o:p></span></b></p>
  </td>
  <td width=176 colspan=3 style='width:132.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small align=right style='text-align:right'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><?php echo $kapital; ?></span></b><span
  lang=EN-US style='font-size:9.0pt;mso-ansi-language:EN-US;mso-bidi-font-weight:
  bold'><o:p></o:p></span></p>
  </td>
  <td width=361 style='width:270.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=a>рублей<span style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:8.0pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:8.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=622 colspan=5 valign=top style='width:466.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.0pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=39 style='border:none'></td>
  <td width=84 style='border:none'></td>
  <td width=68 style='border:none'></td>
  <td width=60 style='border:none'></td>
  <td width=48 style='border:none'></td>
  <td width=361 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-top:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>Количество лиц, имеющих право
  без<o:p></o:p></span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=289 style='width:216.75pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'>7<o:p></o:p></span></p>
  </td>
  <td width=285 style='width:213.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>доверенности
  действовать от имени <o:p></o:p></span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>1<o:p></o:p></span></b></p>
  </td>
  <td width=289 style='width:216.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>сведения указываются в листе Е
  заявления</span><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>юридического лица<o:p></o:p></span></p>
  </td>
  <td width=48 style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=289 style='width:216.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=686
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:17.25pt'>
  <td width=39 style='width:29.55pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'>8<o:p></o:p></span></p>
  </td>
  <td width=333 style='width:249.45pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>Сведения об управляющей
  организации<o:p></o:p></span></p>
  </td>
  <td width=288 style='width:216.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:17.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-weight:bold'>указываются
  в листе Ж заявления<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0  width=686
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:20.7pt'>
  <td width=39 style='width:29.55pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.7pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'>9<o:p></o:p></span></p>
  </td>
  <td width=333 style='width:249.45pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:20.7pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>Сведения об управляющем –<o:p></o:p></span></p>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>индивидуальном
  предпринимателе<o:p></o:p></span></p>
  </td>
  <td width=288 style='width:216.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.7pt'>
  <p class=small style='margin-left:3.6pt'><span style='font-size:8.0pt;
  mso-bidi-font-weight:bold'>указываются в листе З заявления<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-weight:
  bold'>10<o:p></o:p></span></p>
  </td>
  <td width=622 colspan=4 valign=top style='width:466.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='mso-bidi-font-weight:bold'>Количество обособленных
  подразделений юридического лица<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:6.4pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.4pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=153 valign=top style='width:114.45pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=469 colspan=3 valign=top style='width:351.75pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:14.25pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'>10.1<o:p></o:p></p>
  </td>
  <td width=153 style='width:114.45pt;border:none;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>филиалов</span><b><span
  style='font-size:9.0pt'><o:p></o:p></span></b></p>
  </td>
  <td width=60 style='width:45.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><b><span
  lang=EN-US style='font-size:9.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>
  <td width=361 style='width:270.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'>сведения указываются в листе И заявления</span><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:3.5pt'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=153 valign=top style='width:114.45pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=469 colspan=3 valign=top style='width:351.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:3.5pt'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=153 valign=top style='width:114.45pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=469 colspan=3 valign=top style='width:351.75pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:14.25pt'>
  <td width=39 style='width:29.55pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'>10.2<o:p></o:p></p>
  </td>
  <td width=153 style='width:114.45pt;border:none;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>представительств</span><b><span
  style='font-size:9.0pt'><o:p></o:p></span></b></p>
  </td>
  <td width=60 style='width:45.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span
  style='font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><b><span
  lang=EN-US style='font-size:9.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>
  <td width=361 style='width:270.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.25pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'>сведения указываются в листе К заявления</span><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:3.5pt'>
  <td width=39 style='width:29.55pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=153 style='width:114.45pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=469 colspan=3 style='width:351.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'>___________________________________________<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:7.0pt;mso-bidi-font-size:9.0pt;
font-family:Verdana'>* Указывается в отношении хозяйственных товариществ и
обществ, учреждений, унитарных предприятий, производственных кооперативов,
жилищных накопительных кооперативов<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:7.0pt;mso-bidi-font-size:9.0pt;
font-family:Verdana'>** Заполняется в отношении коммерческих организаций<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='page-break-before:always'><span style='font-size:
10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table x:str border=0 cellpadding=0 cellspacing=0 width=682 class=xl6514427>
    <col class=xl6514427 width=5 span=127 style='width:4pt'>
    <tr height=20>
      <td colspan=104 height=20 class=xl19814427 width=520></td>
      <td colspan=13 class=xl19814427 width=65>Страница</td>
      <td colspan=5 class=xl12114427 width=25 x:num>0</td>
      <td colspan=5 class=xl12114427 width=25 x:num style="border-right:1px solid #000000; ">3</td>
    </tr>
    <tr height=8>
      <td colspan=127 height=8 class=xl19814427></td>
    </tr>
    <tr height=20>
      <td colspan=84 height=20 class=xl19814427></td>
      <td colspan=13 class=xl19614427>Форма №</td>
      <td colspan=5 class=xl12114427>Р</td>
      <td colspan=5 class=xl12114427 x:num>1</td>
      <td colspan=5 class=xl12114427 x:num>1</td>
      <td colspan=5 class=xl12114427 x:num>0</td>
      <td colspan=5 class=xl12114427 x:num>0</td>
      <td colspan=5 class=xl12114427 x:num style="border-right:1px solid #000000; ">1</td>
    </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt;
font-family:Verdana'><o:p>&nbsp;</o:p></span></p>



<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-top:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>Количество крестьянских<o:p></o:p></span></p>
  <p class=small><span style='font-size:8.0pt'>(фермерских) хозяйств, на базе<o:p></o:p></span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=289 style='width:216.75pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'>11<o:p></o:p></span></p>
  </td>
  <td width=285 style='width:213.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>имущества
  которых создается <o:p></o:p></span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>---</span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=289 style='width:216.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>сведения указываются в листе Л
  заявления</span><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>производственный кооператив или<o:p></o:p></span></p>
  <p class=small><span style='font-size:8.0pt'>хозяйственное товарищество<o:p></o:p></span></p>
  </td>
  <td width=48 style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=289 style='width:216.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='margin-left:-3.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-top:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=289 style='width:216.75pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small style='margin-left:12.6pt'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'>12<o:p></o:p></span></p>
  </td>
  <td width=285 style='width:213.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>Количество видов экономической
  деятельности</span><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><?php echo $num_rows; ?></span></b><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;mso-ansi-language:
  EN-US'><o:p></o:p></span></p>
  </td>
  <td width=289 style='width:216.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>сведения указываются в листе М
  заявления</span><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=39 valign=top style='width:29.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=285 valign=top style='width:213.45pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=48 style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=289 style='width:216.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

</div>
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
