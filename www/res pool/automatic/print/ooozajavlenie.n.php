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

$pr1 = "-";
$pr3 = "---";
$pr1 = "<span style='mso-spacerun:yes'> </span>-";
$pr20 = "--------------------";


if(strstr($dolyaprocent,",")) $divider=",";
elseif(strstr($dolyaprocent,".")) $divider=".";
$dolyaprodec = @explode($divider,$dolyaprocent);
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
<link rel=File-List href="ФНС2009_11001_02_Б_уч_физлицо.files/filelist.xml">
<title>Лист Н</title>

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
	mso-list:l5 level1 lfo32;
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
	mso-list:l5 level2 lfo32;
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
	mso-list:l5 level3 lfo32;
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
	mso-list:l5 level4 lfo32;
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
	tab-stops:center 233.85pt right 467.75pt;
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
	mso-list:l8 level3 lfo14;
	font-size:13.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;
	mso-bidi-font-weight:normal;}
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
	{mso-footnote-separator:url("ФНС2009_11001_02_Б_уч_физлицо.files/header.htm") fs;
	mso-footnote-continuation-separator:url("ФНС2009_11001_02_Б_уч_физлицо.files/header.htm") fcs;
	mso-endnote-separator:url("ФНС2009_11001_02_Б_уч_физлицо.files/header.htm") es;
	mso-endnote-continuation-separator:url("ФНС2009_11001_02_Б_уч_физлицо.files/header.htm") ecs;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:24.25pt 42.55pt 1.0cm 70.9pt;
	mso-header-margin:9.0pt;
	mso-footer-margin:36.0pt;
	mso-header:url("ФНС2009_11001_02_Б_уч_физлицо.files/header.htm") h1;
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
	{mso-list-id:279916021;
	mso-list-type:hybrid;
	mso-list-template-ids:-687732692;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:35.45pt;
	mso-level-number-position:left;
	margin-left:35.45pt;
	text-indent:-35.45pt;
	mso-ansi-font-size:12.0pt;
	font-family:Symbol;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:26.5pt;
	mso-level-number-position:left;
	margin-left:25.5pt;
	text-indent:-17.0pt;
	mso-ansi-font-size:12.0pt;
	font-family:Symbol;}
@list l2
	{mso-list-id:557861283;
	mso-list-template-ids:934328518;}
@list l2:level1
	{mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l2:level2
	{mso-level-suffix:space;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.6pt;
	text-indent:-21.6pt;}
@list l2:level3
	{mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	margin-left:61.2pt;
	text-indent:-25.2pt;}
@list l2:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	margin-left:86.4pt;
	text-indent:-32.4pt;}
@list l2:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:126.0pt;
	mso-level-number-position:left;
	margin-left:111.6pt;
	text-indent:-39.6pt;}
@list l2:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:162.0pt;
	mso-level-number-position:left;
	margin-left:136.8pt;
	text-indent:-46.8pt;}
@list l2:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-54.0pt;}
@list l2:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	margin-left:187.2pt;
	text-indent:-61.2pt;}
@list l2:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-72.0pt;}
@list l3
	{mso-list-id:771514384;
	mso-list-template-ids:-51371520;}
@list l3:level1
	{mso-level-suffix:space;
	mso-level-tab-stop:none;
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
	{mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
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
	{mso-list-id:1012295272;
	mso-list-template-ids:2063519898;}
@list l4:level1
	{mso-level-suffix:space;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l4:level2
	{mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:39.6pt;
	mso-level-number-position:left;
	margin-left:39.6pt;
	text-indent:-21.6pt;}
@list l4:level3
	{mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	margin-left:61.2pt;
	text-indent:-25.2pt;}
@list l4:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	margin-left:86.4pt;
	text-indent:-32.4pt;}
@list l4:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:126.0pt;
	mso-level-number-position:left;
	margin-left:111.6pt;
	text-indent:-39.6pt;}
@list l4:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:162.0pt;
	mso-level-number-position:left;
	margin-left:136.8pt;
	text-indent:-46.8pt;}
@list l4:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-54.0pt;}
@list l4:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	margin-left:187.2pt;
	text-indent:-61.2pt;}
@list l4:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-72.0pt;}
@list l5
	{mso-list-id:1230918366;
	mso-list-template-ids:-341147268;}
@list l5:level1
	{mso-level-style-link:"Заголовок 1";
	mso-level-suffix:space;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:48.2pt;
	text-indent:-12.2pt;}
@list l5:level2
	{mso-level-style-link:"Заголовок 2";
	mso-level-suffix:space;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.0cm;
	text-indent:-20.7pt;}
@list l5:level3
	{mso-level-style-link:"Заголовок 3";
	mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:73.7pt;
	text-indent:-37.7pt;}
@list l5:level4
	{mso-level-style-link:"Заголовок 4";
	mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:62.35pt;
	text-indent:-26.35pt;}
@list l5:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:111.6pt;
	mso-level-number-position:left;
	margin-left:111.6pt;
	text-indent:-39.6pt;}
@list l5:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:136.8pt;
	mso-level-number-position:left;
	margin-left:136.8pt;
	text-indent:-46.8pt;}
@list l5:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:162.0pt;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-54.0pt;}
@list l5:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:187.2pt;
	mso-level-number-position:left;
	margin-left:187.2pt;
	text-indent:-61.2pt;}
@list l5:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-72.0pt;}
@list l6
	{mso-list-id:1418014908;
	mso-list-template-ids:135169516;}
@list l6:level1
	{mso-level-tab-stop:35.85pt;
	mso-level-number-position:left;
	margin-left:35.85pt;
	text-indent:-18.0pt;}
@list l6:level2
	{mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:57.45pt;
	mso-level-number-position:left;
	margin-left:57.45pt;
	text-indent:-21.6pt;}
@list l6:level3
	{mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:79.05pt;
	text-indent:-25.2pt;}
@list l6:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:125.85pt;
	mso-level-number-position:left;
	margin-left:104.25pt;
	text-indent:-32.4pt;}
@list l6:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:143.85pt;
	mso-level-number-position:left;
	margin-left:129.45pt;
	text-indent:-39.6pt;}
@list l6:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:179.85pt;
	mso-level-number-position:left;
	margin-left:154.65pt;
	text-indent:-46.8pt;}
@list l6:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:197.85pt;
	mso-level-number-position:left;
	margin-left:179.85pt;
	text-indent:-54.0pt;}
@list l6:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:233.85pt;
	mso-level-number-position:left;
	margin-left:205.05pt;
	text-indent:-61.2pt;}
@list l6:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:269.85pt;
	mso-level-number-position:left;
	margin-left:233.85pt;
	text-indent:-72.0pt;}
@list l7
	{mso-list-id:1441530917;
	mso-list-type:hybrid;
	mso-list-template-ids:1723633928;}
@list l7:level1
	{mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:17.0pt;
	text-indent:-17.0pt;}
@list l8
	{mso-list-id:1630163224;
	mso-list-template-ids:1961920066;}
@list l8:level1
	{mso-level-start-at:3;
	mso-level-tab-stop:111.55pt;
	mso-level-number-position:left;
	margin-left:111.55pt;
	text-indent:-18.0pt;}
@list l8:level2
	{mso-level-start-at:2;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:133.15pt;
	mso-level-number-position:left;
	margin-left:133.15pt;
	text-indent:-21.6pt;}
@list l8:level3
	{mso-level-style-link:Заг3;
	mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:65.2pt;
	text-indent:-25.5pt;}
@list l8:level4
	{mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:201.55pt;
	mso-level-number-position:left;
	margin-left:179.95pt;
	text-indent:-32.4pt;}
@list l8:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:219.55pt;
	mso-level-number-position:left;
	margin-left:205.15pt;
	text-indent:-39.6pt;}
@list l8:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:255.55pt;
	mso-level-number-position:left;
	margin-left:230.35pt;
	text-indent:-46.8pt;}
@list l8:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:273.55pt;
	mso-level-number-position:left;
	margin-left:255.55pt;
	text-indent:-54.0pt;}
@list l8:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:309.55pt;
	mso-level-number-position:left;
	margin-left:280.75pt;
	text-indent:-61.2pt;}
@list l8:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:345.55pt;
	mso-level-number-position:left;
	margin-left:309.55pt;
	text-indent:-72.0pt;}
@list l9
	{mso-list-id:1991978716;
	mso-list-type:hybrid;
	mso-list-template-ids:-687732692;}
@list l9:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:35.45pt;
	mso-level-number-position:left;
	margin-left:35.45pt;
	text-indent:-35.45pt;
	mso-ansi-font-size:12.0pt;
	font-family:Symbol;}
@list l9:level2
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
</head>

<body lang=RU link=blue vlink=purple style='tab-interval:35.4pt'>

<div style="margin:0 0 0 10px; ">
<div class=Section1>

<table x:str border=0 cellpadding=0 cellspacing=0  width=682 class=xl6514427>
    <col class=xl6514427 width=5 span=127 style='width:4pt'>
    <tr height=20>
      <td colspan=104 height=20 class=xl19814427 width=520></td>
      <td colspan=13 class=xl19814427 width=65>Страница</td>
      <td colspan=5 class=xl12114427 width=25 x:num><?php 
	  					if(strlen($page) ==1) echo '0';
						else echo mb_substr(($page), 0, 1,'utf-8');
						 ?></td>
      <td colspan=5 class=xl12114427 width=25 x:num style="border-right:1px solid #000000; "><?php 
	  					if(strlen($page) ==1) echo ($page);
						else echo mb_substr(($page), 1, 1,'utf-8');
						 ?></td>
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

<p class=MsoNormal><span lang=EN-US style='font-size:5.0pt;font-family:Verdana;
mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>



<p class=MsoNormal><span lang=EN-US style='font-size:5.0pt;font-family:Verdana;
mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=511 valign=top style='width:383.4pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt;
  font-family:Verdana'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=146 valign=top style='width:109.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:Verdana'>Лист Н
  заявления<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:11.0pt'>Сведения о заявителе*</span></b></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:-12.6pt;border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:13.95pt'>
  <td width=672 style='width:504.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.95pt'>
  <p align=center class=a style='text-align:center'><strong><span lang=EN-US
  style='font-size:9.0pt;mso-ansi-language:EN-US'>Общество с ограниченной ответственностью «<?php echo $naimenovanie; ?>»</span></strong></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=672 valign=top style='width:504.0pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'>(наименование
  создаваемого юридического лица на русском языке)</p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>


<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=672
 style='width:504.0pt;margin-left:-12.6pt;border-collapse:collapse;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:3.7pt'>
  <td width=48 valign=top style='width:36.0pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.7pt'>
  <p class=a align=center style='text-align:center'>1<o:p></o:p></p>
  </td>
  <td width=624 colspan=5 valign=top style='width:468.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.7pt'>
  <p class=small><span style='font-size:8.0pt'>Заявителем является </span>(нужное
  отметить знаком – <span lang=EN-US style='mso-ansi-language:EN-US'>V</span>)<span
  style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:3.5pt'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=624 colspan=5 valign=top style='width:468.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:8.85pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:8.85pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=576 colspan=3 style='width:432.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.85pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-weight:bold'>1.1.
  Учредитель юридического лица – физическое лицо<o:p></o:p></span></p>
  </td>
  <td width=24 style='width:18.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.85pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>V<o:p></o:p></span></b></p>
  </td>
  <td width=24 style='width:18.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.85pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:3.5pt'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=624 colspan=5 valign=top style='width:468.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:3.5pt'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=624 colspan=5 valign=top style='width:468.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:7.85pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:7.85pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=576 colspan=3 style='width:432.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.85pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-weight:bold'>1.2.
  Руководитель юридического лица - учредителя<o:p></o:p></span></p>
  </td>
  <td width=24 style='width:18.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.85pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>-<o:p></o:p></span></b></p>
  </td>
  <td width=24 style='width:18.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.85pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:17.2pt'>
  <td width=48 valign=bottom style='width:36.0pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.2pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 colspan=2 valign=bottom style='width:27.0pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:17.2pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=540 valign=bottom style='width:405.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.2pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:EN-US'>---<o:p></o:p></span></b></p>
  </td>
  <td width=48 colspan=2 valign=bottom style='width:36.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.2pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:8.65pt'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:8.65pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=36 colspan=2 valign=top style='width:27.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:8.65pt'>
  <p class=small><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=540 valign=top style='width:405.0pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:8.65pt'>
  <p class=small align=center style='text-align:center'><span style='mso-bidi-font-size:
  7.0pt'>(наименование юридического лица на русском языке)<o:p></o:p></span></p>
  </td>
  <td width=48 colspan=2 valign=top style='width:36.0pt;border:none;border-right:
  solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:8.65pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:4.0pt'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:4.0pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=624 colspan=5 valign=top style='width:468.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.0pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid;height:12.25pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>




  <td width=24 style='width:18.0pt;border:none;border-bottom:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-weight:bold'><o:p>1.3.</o:p></span></p>
  </td>


  <td width=600 colspan=2 rowspan="2" style='width:432.0pt;border:none;border-right:none; border-bottom:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.25pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-weight:bold'>
  Лицо, действующее на основании полномочия, предусмотренного федеральным
  законом, <o:p></o:p></span><span style='font-size:8.0pt;mso-bidi-font-weight:bold'>актом
    специально уполномоченного на то государственного органа или актом органа </span><span style='font-size:8.0pt;mso-bidi-font-weight:bold'>местного
самоуправления</span><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>


  <td width=24 style='width:18.0pt;border:solid windowtext 1.0pt;border-left:
  solid windowtext .5pt;;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'>-<o:p></o:p></span></b></p>
  </td>


  <td width=24 style='width:18.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.25pt'>
  <p class=a><span style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>



 <tr style='mso-yfti-irow:10;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:3.5pt'>
  <td width=48 valign=top style='width:36.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>


  <td width=24 style='width:18.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>


  <td width=24 style='width:18.0pt;border:none;border-left:none; border-right:none; border-bottom:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=small align=center style='text-align:center'><b><span lang=EN-US
  style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></b></p>
  </td>


  <td width=24 style='width:18.0pt;border:none;border-right:solid windowtext 1.0pt; border-bottom:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.25pt'>
  <p class=a><span style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>

 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=48 style='border:none'></td>
  <td width=24 style='border:none'></td>
  <td width=12 style='border:none'></td>
  <td width=540 style='border:none'></td>
  <td width=24 style='border:none'></td>
  <td width=24 style='border:none'></td>
 </tr>
 <![endif]>
</table>



<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='width:504.0pt;margin-left:-12.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;height:10.5pt'>
  <td width=48 style='width:35.65pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'>2<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:125.8pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>Фамилия<o:p></o:p></span></p>
  </td>
  <td width=457 colspan=14 style='width:342.55pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='mso-bidi-font-size:8.0pt;mso-ansi-language:EN-US'><?php echo $familya; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:10.5pt'>
  <td width=48 style='width:35.65pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'>3<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:125.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>Имя<o:p></o:p></span></p>
  </td>
  <td width=457 colspan=14 style='width:342.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='mso-bidi-font-size:8.0pt;mso-ansi-language:EN-US'><?php echo $imya; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:10.5pt'>
  <td width=48 style='width:35.65pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'>4<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:125.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>Отчество<o:p></o:p></span></p>
  </td>
  <td width=457 colspan=14 style='width:342.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='mso-bidi-font-size:8.0pt;mso-ansi-language:EN-US'><?php  echo ($otchestvo!='')? $otchestvo :'-'; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:10.5pt'>
  <td width=48 style='width:35.65pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'>5<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:125.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>Дата рождения<o:p></o:p></span></p>
  </td>
  <td width=457 colspan=14 style='width:342.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
  8.0pt'><?php echo  date_order($from_date)  ; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:10.5pt'>
  <td width=48 style='width:35.65pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'>6<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:125.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>Место рождения<o:p></o:p></span></p>
  </td>
  <td width=457 colspan=14 style='width:342.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
  8.0pt'><?php echo $mestorojdeniya; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:3.5pt'>
  <td width=48 style='width:35.65pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 style='width:125.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=24 style='width:18.0pt;border:none;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=360 colspan=12 style='width:270.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=73 style='width:54.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:14.65pt'>
  <td width=48 style='width:35.65pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'>7</p>
  </td>
  <td width=168 style='width:125.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a>ИНН (при наличии **)</p>
  </td>
  <td width=24 style='width:18.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=30 style='width:22.5pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 0,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?></span></b></p>
  </td>
  <td width=30 style='width:22.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 1,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=30 style='width:22.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 2,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=30 style='width:22.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 3,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=30 style='width:22.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 4,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=30 style='width:22.55pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 5,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=30 style='width:22.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 6,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?></span></b></p>
  </td>
  <td width=30 style='width:22.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 7,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?></span></b></p>
  </td>
  <td width=30 style='width:22.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 8,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?></span></b></p>
  </td>
  <td width=30 style='width:22.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 9,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?></span></b></p>
  </td>
  <td width=30 style='width:22.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 10,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?></span></b></p>
  </td>
  <td width=30 style='width:22.55pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($inn && (($a=mb_substr($inn, 11,  1,'utf-8')) || $a=='0'))?$a:$pr1; ?></span></b></p>
  </td>
  <td width=73 style='width:54.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:4.1pt'>
  <td width=48 style='width:35.65pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.1pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 style='width:125.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.1pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=24 style='width:18.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.1pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=360 colspan=12 style='width:270.1pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.1pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=73 style='width:54.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.1pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=48 style='border:none'></td>
  <td width=168 style='border:none'></td>
  <td width=24 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=73 style='border:none'></td>
 </tr>
 <![endif]>
</table>


<p class=MsoNormal><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>













<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='width:504.0pt;margin-left:-12.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;height:12.75pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a align=center style='text-align:center'>8<o:p></o:p></p>
  </td>
  <td width=624 colspan=10 style='width:468.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a>Данные документа, удостоверяющего личность<o:p></o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:12.75pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a align=center style='text-align:center'>8.1</p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a>Вид документа</p>
  </td>
  <td width=456 colspan=9 style='width:342.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
  8.0pt'><?php echo $dokument_dvid; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:12.75pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a align=center style='text-align:center'>8.2</p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a>Серия документа</p>
  </td>
  <td width=456 colspan=9 style='width:342.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
  8.0pt'><?php echo ($seriap!='')? $seriap :'-'; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:12.75pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a align=center style='text-align:center'>8.3</p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a>Номер документа</p>
  </td>
  <td width=456 colspan=9 style='width:342.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
  8.0pt'><?php echo  $nomerp; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:12.75pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a align=center style='text-align:center'>8.4</p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a>Дата выдачи</p>
  </td>
  <td width=456 colspan=9 style='width:342.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
  8.0pt'><?php echo  date_order($to_date)  ; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:12.75pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a align=center style='text-align:center'>8.5</p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a>Кем выдан</p>
  </td>
  <td width=456 colspan=9 style='width:342.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
  8.0pt'><?php echo  $kemvydanp; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:3.5pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=24 style='width:18.0pt;border:none;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=216 style='width:162.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:14.65pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'>8.6</p>
  </td>
  <td width=168 style='width:126.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a>Код подразделения</p>
  </td>
  <td width=24 style='width:18.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($kodp!='')?mb_substr($kodp, 0, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($kodp!='')?mb_substr($kodp, 1, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($kodp!='')?mb_substr($kodp, 2, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'>—<o:p></o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($kodp!='')?mb_substr($kodp, 4, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($kodp!='')?mb_substr($kodp, 5, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:8.0pt'><?php echo ($kodp!='')?mb_substr($kodp, 6, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=216 style='width:162.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:4.95pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.95pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.95pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=24 style='width:18.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.95pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.95pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.95pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.95pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.95pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.95pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.95pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=31 style='width:23.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.95pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=216 style='width:162.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:4.95pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='width:504.0pt;margin-left:-12.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:13.3pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-bottom:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.3pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-weight:
  bold'>9<o:p></o:p></span></p>
  </td>
  <td width=624 colspan=14 style='width:468.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.3pt'>
  <p class=a><span style='mso-bidi-font-weight:bold'>Адрес места жительства <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:6.2pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-bottom:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:6.2pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-weight:
  bold'>9.1<o:p></o:p></span></p>
  </td>
  <td width=624 colspan=14 style='width:468.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.2pt'>
  <p class=a><span style='mso-bidi-font-weight:bold'>В Российской Федерации (</span><span
  style='font-size:7.0pt;mso-bidi-font-weight:bold'>при отсутствии указывается
  место пребывания</span><span style='mso-bidi-font-weight:bold'>)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=251 valign=top style='width:188.4pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=16 colspan=2 valign=top style='width:11.8pt;border:none;border-top:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=177 colspan=8 valign=top style='width:132.8pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=180 colspan=3 valign=top style='width:135.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=251 valign=top style='width:188.4pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>9.1.1. Почтовый индекс<o:p></o:p></p>
  </td>
  <td width=16 colspan=2 style='width:11.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=29 style='width:22.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><?php echo ($pochtindex!='')?mb_substr($pochtindex, 0, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=30 colspan=2 style='width:22.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><?php echo ($pochtindex!='')?mb_substr($pochtindex, 1, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=30 style='width:22.15pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><?php echo ($pochtindex!='')?mb_substr($pochtindex, 2, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=29 style='width:22.1pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><?php echo ($pochtindex!='')?mb_substr($pochtindex, 3, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=30 style='width:22.15pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><?php echo ($pochtindex!='')?mb_substr($pochtindex, 4, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=30 colspan=2 style='width:22.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><?php echo ($pochtindex!='')?mb_substr($pochtindex, 5, 1,'utf-8'):'-'; ?></span></b></p>
  </td>
  <td width=180 colspan=3 valign=top style='width:135.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=251 valign=top style='width:188.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=16 colspan=2 valign=top style='width:11.8pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=177 colspan=8 valign=top style='width:132.8pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=180 colspan=3 valign=top style='width:135.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=251 valign=top style='width:188.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>9.1.2. Субъект Российской Федерации<o:p></o:p></p>
  </td>
  <td width=373 colspan=13 style='width:279.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'><?php echo $subject ? $subject : "---"; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:3.6pt'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.6pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=251 valign=top style='width:188.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:3.6pt'>
  <p class=a>9.1.3. Район<o:p></o:p></p>
  </td>
  <td width=373 colspan=13 style='width:279.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:3.6pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'><?php echo $rajon ? $rajon : "---"; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=251 valign=top style='width:188.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>9.1.4. Город<o:p></o:p></p>
  </td>
  <td width=373 colspan=13 style='width:279.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'><?php echo $gorod ? $gorod : "---"; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=251 valign=top style='width:188.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>9.1.5.<span style='mso-spacerun:yes'>  </span>Населенный пункт<o:p></o:p></p>
  </td>
  <td width=373 colspan=13 style='width:279.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'><?php echo $naspunkt ? $naspunkt : "---"; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=251 valign=top style='width:188.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=a>9.1.6. Улица (проспект, переулок и т.п. <span style='font-size:
  7.0pt'>указать нужное с наименованием</span>)<o:p></o:p></p>
  </td>
  <td width=373 colspan=13 style='width:279.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'><?php echo $ulitca ? $ulitca : "---"; ?></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=300 colspan=5 valign=top style='width:225.0pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=120 colspan=5 style='width:89.8pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=27 colspan=2 style='width:20.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=141 valign=top style='width:106.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=36 style='width:26.7pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=300 colspan=5 style='width:225.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt'>9.1</span><span
  style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>.7. Дом (владение и т.п. - </span><span
  style='mso-bidi-font-size:7.0pt'>указать нужное</span><span style='font-size:
  8.0pt;mso-bidi-font-size:9.0pt'>) <o:p></o:p></span></p>
  </td>
  <td width=120 colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;
  mso-ansi-language:EN-US'><?php $domspl=explode(" ",$dom,2); echo $domspl[0] ? $domspl[0] : "---"; ?><o:p></o:p></span></b></p>
  </td>
  <td width=27 colspan=2 style='width:20.5pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=141 style='width:106.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;
  mso-ansi-language:EN-US'><?php  echo $domspl[1] ? $domspl[1] : "---"; ?><o:p></o:p></span></b></p>
  </td>
  <td width=36 style='width:26.7pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=300 colspan=5 valign=top style='width:225.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=120 colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=27 colspan=2 style='width:20.5pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=141 style='width:106.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'>номер<o:p></o:p></p>
  </td>
  <td width=36 style='width:26.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=300 colspan=5 valign=top style='width:225.0pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=120 colspan=5 style='width:89.8pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=27 colspan=2 style='width:20.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=141 valign=top style='width:106.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=36 style='width:26.7pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=300 colspan=5 style='width:225.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>9.1.8. Корпус
  (строение и т.п. - </span><span style='mso-bidi-font-size:7.0pt'>указать
  нужное</span><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>) <o:p></o:p></span></p>
  </td>
  <td width=120 colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;
  mso-ansi-language:EN-US'><?php $korpusspl=explode(" ",$korpus); echo $korpusspl[0] ? $korpusspl[0] : "---"; ?><o:p></o:p></span></b></p>
  </td>
  <td width=27 colspan=2 style='width:20.5pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=141 style='width:106.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;
  mso-ansi-language:EN-US'><?php echo $korpusspl[1] ? $korpusspl[1] : "---"; ?><o:p></o:p></span></b></p>
  </td>
  <td width=36 style='width:26.7pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=300 colspan=5 valign=top style='width:225.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=120 colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=27 colspan=2 style='width:20.5pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=141 style='width:106.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'>номер<o:p></o:p></p>
  </td>
  <td width=36 style='width:26.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=300 colspan=5 valign=top style='width:225.0pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=120 colspan=5 style='width:89.8pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=27 colspan=2 style='width:20.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=141 valign=top style='width:106.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=36 style='width:26.7pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;page-break-inside:avoid'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=300 colspan=5 style='width:225.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>9.1.9. Квартира
  (офис и т.п. - </span><span style='mso-bidi-font-size:7.0pt'>указать нужное</span><span
  style='font-size:8.0pt;mso-bidi-font-size:9.0pt'>) <o:p></o:p></span></p>
  </td>
  <td width=120 colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;
  mso-ansi-language:EN-US'><?php $kvspl=explode(" ",$kvartira); echo $kvspl[0] ? $kvspl[0] : "---"; ?><o:p></o:p></span></b></p>
  </td>
  <td width=27 colspan=2 style='width:20.5pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=141 style='width:106.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:9.0pt;
  mso-ansi-language:EN-US'><?php echo $kvspl[1] ? $kvspl[1] : "---"; ?><o:p></o:p></span></b></p>
  </td>
  <td width=36 style='width:26.7pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small><span style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;page-break-inside:avoid;height:3.5pt'>
  <td width=48 valign=top style='width:36.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=300 colspan=5 valign=top style='width:225.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=120 colspan=5 style='width:89.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=27 colspan=2 style='width:20.5pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=141 style='width:106.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=small align=center style='text-align:center'>номер<o:p></o:p></p>
  </td>
  <td width=36 style='width:26.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
  <p class=small><b style='mso-bidi-font-weight:normal'><span style='font-size:
  5.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
</table> 
 
<hr align=left size=1 width="33%">
<div style='mso-element:footnote' id=ftn1>
<p class=MsoNormal><span style='font-size:7.0pt;font-family:Verdana'>* В случае, если заявление подписывается несколькими заявителями, в отношении каждого заявителя заполняется отдельный Лист Н заявления.</span></p>
<p class=MsoNormal><span style='font-size:7.0pt;font-family:Verdana'>** Заполняется в отношении физических лиц, получивших документ, подтверждающий
присвоение ИНН (Свидетельство о постановке на учет в налоговом органе, отметка
в паспорте гражданина Российской Федерации)</span></p>
</div>



<span style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-ansi-language:RU;mso-fareast-language:
RU;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
page-break-before:always'>
</span>


<table x:str border=0 cellpadding=0 cellspacing=0  width=682 class=xl6514427>
    <col class=xl6514427 width=5 span=127 style='width:4pt'>
    <tr height=20>
      <td colspan=104 height=20 class=xl19814427 width=520></td>
      <td colspan=13 class=xl19814427 width=65>Страница</td>
      <td colspan=5 class=xl12114427 width=25 x:num><?php 
	  					if(strlen(1+$page) ==1) echo '0';
						else echo mb_substr((1+$page), 0, 1,'utf-8');
						 ?></td>
      <td colspan=5 class=xl12114427 width=25 x:num style="border-right:1px solid #000000; "><?php 
	  					if(strlen(1+$page) ==1) echo (1+$page);
						else echo mb_substr((1+$page), 1, 1,'utf-8');
						 ?></td>
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

<p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
12.0pt;font-family:Verdana;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>



<p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
12.0pt;font-family:Verdana;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:-12.6pt;border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=528 valign=top style='width:396.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt;
  font-family:Verdana'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=146 valign=top style='width:109.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:Verdana'>Лист Н
  заявления<o:p></o:p></span></p>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:Verdana'>страница
  2<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='width:504.0pt;margin-left:-12.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'> 
 
 
 
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:13.3pt'>
  <td width=48 style='width:36.0pt;border-top:solid windowtext 1.0pt;;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a align=center style='text-align:center'>9.2<o:p></o:p></p>
  </td>
  <td width=624 colspan=14 style='width:468.0pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a>За пределами территории Российской Федерации *</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;page-break-inside:avoid;height:12.75pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=252 colspan=2 style='width:189.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a>9.2.1 Страна места жительства</p>
  </td>
  <td width=372 colspan=12 style='width:279.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
  8.0pt'><?php echo $strana ? $strana : "---"; ?><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:12.75pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=252 colspan=2 style='width:189.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a>9.2.2 Адрес места жительства</p>
  </td>
  <td width=372 colspan=12 style='width:279.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
  8.0pt'><?php echo $mesto ? $mesto : "---"; ?></span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=48 style='border:none'></td>
  <td width=251 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=15 style='border:none'></td>
  <td width=29 style='border:none'></td>
  <td width=4 style='border:none'></td>
  <td width=26 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=29 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=5 style='border:none'></td>
  <td width=24 style='border:none'></td>
  <td width=3 style='border:none'></td>
  <td width=141 style='border:none'></td>
  <td width=36 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='width:504.0pt;margin-left:-12.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;height:12.75pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-bottom:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=a align=center style='text-align:center'>10<o:p></o:p></p>
  </td>
  <td width=624 colspan=2 style='width:468.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a>Контактный телефон <o:p></o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:12.75pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=252 style='width:189.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>10.1 Код города<o:p></o:p></span></p>
  </td>
  <td width=372 style='width:279.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>---<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:12.75pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=252 style='width:189.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>10.2 Телефон<o:p></o:p></span></p>
  </td>
  <td width=372 style='width:279.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=small><b><span lang=EN-US style='font-size:8.0pt;mso-ansi-language:
  EN-US'>---<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:12.75pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=252 style='width:189.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=a><span style='mso-bidi-font-size:8.0pt'>10.3 Факс<o:p></o:p></span></p>
  </td>
  <td width=372 style='width:279.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=small><b><span style='font-size:8.0pt'>---<o:p></o:p></span></b></p>
  </td>
 </tr>
</table>




<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=672
 style='width:504.0pt;margin-left:-12.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;height:26.3pt'>
  <td width=48 valign=top style='width:36.0pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:26.3pt'>
  <p class=a align=center style='text-align:center'>11<o:p></o:p></p>
  </td>
  <td width=624 colspan=3 valign=top style='width:468.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:26.3pt'>
  <p class=a>Согласование создания юридического лица на территории закрытого
  административно-территориального образования **<o:p></o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:124.8pt'>
  <td width=48 valign=top style='width:36.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:124.8pt'>
  <p class=a align=center style='text-align:center'>11.1</p>
  </td>
  <td width=624 colspan=3 style='width:468.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:124.8pt'>
  <p class=a><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.25pt'>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'>11.2</p>
  </td>
  <td width=624 colspan=3 style='width:468.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a>Данные должностного лица</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:14.25pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a>11.2.1 Должность</p>
  </td>
  <td width=456 colspan=2 style='width:342.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:7.0pt;mso-ansi-language:EN-US'>---<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:14.25pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a>11.2.2 Фамилия</p>
  </td>
  <td width=456 colspan=2 style='width:342.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:7.0pt;mso-ansi-language:EN-US'>---<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:14.25pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a>11.2.3 Имя</p>
  </td>
  <td width=456 colspan=2 style='width:342.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:7.0pt;mso-ansi-language:EN-US'>---<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:14.25pt'>
  <td width=48 style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a>11.2.4 Отчество</p>
  </td>
  <td width=456 colspan=2 style='width:342.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:7.0pt;mso-ansi-language:EN-US'>---<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:25.35pt'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:25.35pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=624 colspan=3 valign=top style='width:468.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.35pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:26.45pt'>
  <td width=48 valign=bottom style='width:36.0pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.45pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=408 colspan=2 valign=bottom style='width:306.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.45pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=216 valign=bottom style='width:162.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:26.45pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:26.95pt'>
  <td width=48 valign=top style='width:36.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=408 colspan=2 valign=bottom style='width:306.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.95pt'>
  <p class=small align=right style='text-align:right'><span style='font-size:
  8.0pt'>М.П.<o:p></o:p></span></p>
  </td>
  <td width=216 style='width:162.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.95pt'>
  <p class=small align=center style='text-align:center'><span style='mso-bidi-font-size:
  7.0pt'>(подпись)</span><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=48 style='border:none'></td>
  <td width=168 style='border:none'></td>
  <td width=240 style='border:none'></td>
  <td width=216 style='border:none'></td>
 </tr>
 <![endif]>
</table>


</div>

<div style='mso-element:footnote-list'><![if !supportFootnotes]><br clear=all>

<hr align=left size=1 width="33%">

<![endif]>



<div style='mso-element:footnote' id=ftn2>
<p class=MsoNormal><span style='font-size:7.0pt;font-family:Verdana'>*
Заполняется в отношении:<br>
- гражданина Российской Федерации, постоянно проживающего за пределами
территории Российской Федерации и не имеющего постоянного места жительства в
Российской Федерации;</span></p>
<p class=MsoNormal><span style='font-size:7.0pt;font-family:Verdana'>-
иностранного гражданина или лица без гражданства, постоянно проживающего за
пределами территории Российской Федерации<o:p></o:p></span></p>
<p class=MsoNormal><span style='font-size:7.0pt;font-family:Verdana'><o:p>** Заполняется  в  соответствии  с  постановлением  Правительства  Российской  Федерации  от  22.05.2006 № 302 в случае создания организации с иностранными инвестициями на территории закрытого административно-территориального образования</o:p></span></p>
</div>




<span style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-ansi-language:RU;mso-fareast-language:
RU;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
page-break-before:always'>
</span>


<table x:str border=0 cellpadding=0 cellspacing=0  width=682 class=xl6514427>
    <col class=xl6514427 width=5 span=127 style='width:4pt'>
    <tr height=20>
      <td colspan=104 height=20 class=xl19814427 width=520></td>
      <td colspan=13 class=xl19814427 width=65>Страница</td>
      <td colspan=5 class=xl12114427 width=25 x:num><?php 
	  					if(strlen(2+$page) ==1) echo '0';
						else echo mb_substr((2+$page), 0, 1,'utf-8');
						 ?></td>
      <td colspan=5 class=xl12114427 width=25 x:num style="border-right:1px solid #000000; "><?php 
	  					if(strlen(2+$page) ==1) echo (2+$page);
						else echo mb_substr((2+$page), 1, 1,'utf-8');
						 ?></td>
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

<p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
12.0pt;font-family:Verdana;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>



<p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
12.0pt;font-family:Verdana;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:-12.6pt;border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=528 valign=top style='width:396.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt;
  font-family:Verdana'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=146 valign=top style='width:109.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:Verdana'>Лист Н
  заявления<o:p></o:p></span></p>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:Verdana'>страница
  3<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='width:504.0pt;margin-left:-12.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;height:14.25pt'>
  <td width=48 valign=top style='width:36.0pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=a align=center style='text-align:center'>12</p>
  </td>
  <td width=624 colspan=2 style='width:468.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.25pt'>
  <p class=MsoNormal style='margin-bottom:6.0pt'><span style='font-size:8.0pt;
  font-family:Verdana'>Мною подтверждается, что:<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
  margin-left:12.6pt;text-indent:-12.6pt;mso-list:l9 level1 lfo35;tab-stops:
  list 12.6pt'><![if !supportLists]><span style='font-size:8.0pt;font-family:
  Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
  style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;font-family:Verdana'>представленные
  учредительные документы соответствуют установленным законодательством
  Российской Федерации требованиям к учредительным документам юридического лица
  данной организационно-правовой формы (ОПФ);<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
  margin-left:12.6pt;text-indent:-12.6pt;mso-list:l9 level1 lfo35;tab-stops:
  list 12.6pt'><![if !supportLists]><span style='font-size:8.0pt;font-family:
  Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
  style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;font-family:Verdana'>сведения,
  содержащиеся в этих учредительных документах, иных представленных для
  государственной регистрации документах, заявлении о государственной
  регистрации, достоверны;<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
  margin-left:12.6pt;text-indent:-12.6pt;mso-list:l9 level1 lfo35;tab-stops:
  list 12.6pt'><![if !supportLists]><span style='font-size:8.0pt;font-family:
  Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
  style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;font-family:Verdana'>при
  создании юридического лица соблюден установленный для юридических лиц данной
  ОПФ порядок их учреждения, в том числе оплаты уставного капитала (уставного
  фонда, складочного капитала, паевого фонда), на момент государственной
  регистрации;<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;
  margin-left:12.6pt;text-indent:-12.6pt;mso-list:l9 level1 lfo35;tab-stops:
  list 12.6pt'><![if !supportLists]><span style='font-size:8.0pt;font-family:
  Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
  style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;font-family:Verdana'>в
  установленных законом случаях вопросы создания юридического лица согласованы
  с соответствующими государственными органами и (или) органами местного
  самоуправления.<o:p></o:p></span></p>
  <p class=a style='margin-bottom:6.0pt'><span style='mso-bidi-font-size:8.0pt'>Мне
  известно, что в случае представления в регистрирующий орган недостоверных
  сведений, я несу ответственность, установленную законодательством Российской
  Федерации.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:25.35pt'>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:25.35pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=624 colspan=2 valign=top style='width:468.0pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.35pt'>
  <p class=small><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:26.45pt'>
  <td width=48 valign=bottom style='width:36.0pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.45pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=408 style='width:306.0pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.45pt'>
  <p class=small align=right style='text-align:right'><span style='font-size:
  8.0pt'>Заявитель<o:p></o:p></span></p>
  </td>
  <td width=216 valign=bottom style='width:162.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:26.45pt'>
  <p class=small align=center style='text-align:center'><span style='font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:26.95pt'>
  <td width=48 valign=top style='width:36.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:26.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=408 valign=bottom style='width:306.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:26.95pt'>
  <p class=small align=right style='text-align:right'><span style='font-size:
  8.0pt'>М.П.<o:p></o:p></span></p>
  </td>
  <td width=216 style='width:162.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.95pt'>
  <p class=small align=center style='text-align:center'><span style='mso-bidi-font-size:
  7.0pt'>(подпись)</span><span style='font-size:8.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:7.0pt;font-family:Verdana'><o:p>&nbsp;</o:p></span></p>


<table class=MsoNormalTable  cellspacing=0 cellpadding=0 width=686
 style='width:504.0pt;margin-left:-12.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:20.2pt'>
  <td width=48 style='width:35.95pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.2pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-weight:
  bold'>13<o:p></o:p></span></p>
  </td>
  <td width=624 colspan=15 style='width:468.05pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.2pt'>
  <p class=a><span style='mso-bidi-font-weight:bold'>Свидетельствование
  подлинности подписи уполномоченного лица (заявителя) в нотариальном порядке *<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:332.3pt'>
  <td width=48 valign=top style='width:35.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:332.3pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-weight:
  bold'>13.1<o:p></o:p></span></p>
  </td>
  <td width=624 colspan=15 style='width:468.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:332.3pt'>
  <p class=a><span style='mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:11.3pt'>
  <td width=48 style='width:35.95pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:11.3pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-weight:
  bold'>13.2</span></p>
  </td>
  <td width=260 style='width:195.25pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.3pt'>
  <p class=a>ИНН лица, засвидетельствовавшего</p>
  </td>
  <td width=16 style='width:11.8pt;border:none;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.3pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=324 colspan=12 style='width:242.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.3pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=24 style='width:18.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.3pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:14.65pt'>
  <td width=48 style='width:35.95pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=260 style='width:195.25pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a>подлинность подписи заявителя</p>
  </td>
  <td width=16 style='width:11.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=27 style='width:20.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.2pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 style='width:20.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.65pt'>
  <p class=a align=center style='text-align:center'><span style='mso-bidi-font-size:
  8.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=24 style='width:18.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.65pt'>
  <p class=a align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:8.7pt'>
  <td width=48 style='width:35.95pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.7pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=260 style='width:195.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.7pt'>
  <p class=a><span style='font-size:3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=16 style='width:11.8pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:8.7pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=324 colspan=12 style='width:242.9pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.7pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=24 style='width:18.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:8.7pt'>
  <p class=a align=center style='text-align:center'><span style='font-size:
  3.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=48 style='border:none'></td>
  <td width=260 style='border:none'></td>
  <td width=16 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=24 style='border:none'></td>
 </tr>
 <![endif]>
</table>

</div>
<br>
<hr align=left size=1 width="33%">
<p class=MsoNormal><span style='font-size:7.0pt;font-family:Verdana'>*
Заполняется в соответствии с Основами законодательства Российской Федерации о
нотариате<o:p></o:p></span></p>

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