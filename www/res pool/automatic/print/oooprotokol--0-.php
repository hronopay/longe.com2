<?php 
session_start(); 
include("../config.php");
include("chisla.php");

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
xmlns:st1="urn:schemas-microsoft-com:office:smarttags"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<link rel=File-List href="Протокол_ООО_СДС%20Моторс%20+.files/filelist.xml">
<title>Протокол</title>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="metricconverter"/>

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
	{font-family:"Bookman Old Style";
	panose-1:2 5 6 4 5 5 5 2 2 4;
	mso-font-charset:204;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:647 0 0 0 159 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:36.0pt;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
h1
	{mso-style-next:Обычный;
	margin-top:24.0pt;
	margin-right:0cm;
	margin-bottom:12.0pt;
	margin-left:0cm;
	text-indent:35.45pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	font-size:18.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Bookman Old Style";
	mso-font-kerning:0pt;
	mso-bidi-font-weight:normal;}
h2
	{mso-style-next:Обычный;
	margin-top:18.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:0cm;
	text-align:justify;
	text-indent:36.0pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:Arial;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-font-weight:normal;}
h3
	{mso-style-next:Обычный;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:36.0pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:3;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:Arial;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
h4
	{mso-style-next:Обычный;
	margin-top:0cm;
	margin-right:-2.9pt;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:4;
	tab-stops:496.15pt;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-bidi-font-weight:normal;
	mso-bidi-font-style:italic;}
h5
	{mso-style-next:Обычный;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:0cm;
	text-align:justify;
	text-indent:36.0pt;
	mso-pagination:widow-orphan;
	mso-outline-level:5;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	font-weight:normal;
	text-decoration:underline;
	text-underline:single;}
h6
	{mso-style-next:Обычный;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:0cm;
	text-align:justify;
	text-indent:36.0pt;
	mso-pagination:widow-orphan;
	mso-outline-level:6;
	font-size:11.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-next:Обычный;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:0cm;
	text-align:justify;
	text-indent:36.0pt;
	mso-pagination:widow-orphan;
	mso-outline-level:7;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 207.65pt right 415.3pt;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:36.0pt;
	mso-pagination:widow-orphan;
	tab-stops:center 207.65pt right 415.3pt;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;
	mso-bidi-font-weight:normal;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	color:black;}
p.MsoBodyTextIndent3, li.MsoBodyTextIndent3, div.MsoBodyTextIndent3
	{margin-top:0cm;
	margin-right:-2.9pt;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	text-indent:35.45pt;
	mso-pagination:widow-orphan;
	tab-stops:496.15pt;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoBlockText, li.MsoBlockText, div.MsoBlockText
	{margin-top:0cm;
	margin-right:1.0cm;
	margin-bottom:0cm;
	margin-left:1.0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.7, li.7, div.7
	{mso-style-name:"заголовок 7";
	mso-style-update:auto;
	mso-style-parent:"";
	mso-style-next:Обычный;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	text-indent:36.0pt;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-no-proof:yes;}
p.ConsNormal, li.ConsNormal, div.ConsNormal
	{mso-style-name:ConsNormal;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	text-indent:36.0pt;
	mso-pagination:none;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	layout-grid-mode:line;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:1.0cm 36.85pt 1.0cm 53.85pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:58677212;
	mso-list-type:simple;
	mso-list-template-ids:-1338363442;}
@list l0:level1
	{mso-level-tab-stop:53.45pt;
	mso-level-number-position:left;
	margin-left:53.45pt;
	text-indent:-18.0pt;}
@list l1
	{mso-list-id:63645449;
	mso-list-type:hybrid;
	mso-list-template-ids:388002738 341225396 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F02D;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:17.0pt;
	text-indent:-17.0pt;
	font-family:Symbol;}
@list l2
	{mso-list-id:274531075;
	mso-list-type:simple;
	mso-list-template-ids:1632372064;}
@list l2:level1
	{mso-level-start-at:2;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:18.05pt;
	mso-level-number-position:left;
	margin-left:18.05pt;
	text-indent:-18.0pt;}
@list l3
	{mso-list-id:339625874;
	mso-list-type:hybrid;
	mso-list-template-ids:-704620016 -296291068 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-hansi-font-family:"Courier New";}
@list l4
	{mso-list-id:398596561;
	mso-list-type:hybrid;
	mso-list-template-ids:388002738 2086275786 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:1.0cm;
	mso-level-number-position:left;
	margin-left:1.0cm;
	text-indent:-1.0cm;
	font-family:"Times New Roman";}
@list l5
	{mso-list-id:419183219;
	mso-list-type:hybrid;
	mso-list-template-ids:1049905162 -76361338 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
@list l5:level1
	{mso-level-tab-stop:52.65pt;
	mso-level-number-position:left;
	margin-left:52.65pt;
	text-indent:-18.0pt;
	mso-ansi-font-weight:bold;
	mso-ansi-font-style:italic;}
@list l6
	{mso-list-id:465245755;
	mso-list-type:hybrid;
	mso-list-template-ids:388002738 1745093398 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F02D;
	mso-level-tab-stop:38.55pt;
	mso-level-number-position:left;
	margin-left:38.55pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l7
	{mso-list-id:467750812;
	mso-list-type:hybrid;
	mso-list-template-ids:388002738 1176778916 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l7:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:1.0cm;
	mso-level-number-position:left;
	margin-left:1.0cm;
	text-indent:-1.0cm;
	font-family:"Times New Roman";}
@list l8
	{mso-list-id:518928654;
	mso-list-type:hybrid;
	mso-list-template-ids:-1631918566 -76361338 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
@list l8:level1
	{mso-level-tab-stop:56.45pt;
	mso-level-number-position:left;
	margin-left:56.45pt;
	text-indent:-18.0pt;
	mso-ansi-font-weight:bold;
	mso-ansi-font-style:italic;}
@list l9
	{mso-list-id:657851660;
	mso-list-type:hybrid;
	mso-list-template-ids:777390756 -1149499426 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l9:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:17.0pt;
	text-indent:-17.0pt;
	font-family:"Times New Roman";}
@list l10
	{mso-list-id:702755456;
	mso-list-type:hybrid;
	mso-list-template-ids:244770762 -1836523322 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l10:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:50.2pt;
	mso-level-number-position:left;
	margin-left:50.2pt;
	text-indent:-14.2pt;
	font-family:Arial;
	mso-bidi-font-family:"Times New Roman";}
@list l11
	{mso-list-id:766389033;
	mso-list-type:hybrid;
	mso-list-template-ids:388002738 -1093137650 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l11:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:17.0pt;
	text-indent:-17.0pt;
	font-family:"Times New Roman";}
@list l12
	{mso-list-id:804084560;
	mso-list-type:simple;
	mso-list-template-ids:1720872082;}
@list l12:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:54.0pt;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;}
@list l13
	{mso-list-id:851146945;
	mso-list-type:hybrid;
	mso-list-template-ids:-1550048780 257876960 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
@list l13:level1
	{mso-level-tab-stop:14.7pt;
	mso-level-number-position:left;
	margin-left:14.7pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l14
	{mso-list-id:869538132;
	mso-list-type:hybrid;
	mso-list-template-ids:388002738 1999249644 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l14:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F02D;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:17.0pt;
	text-indent:-17.0pt;
	font-family:Symbol;}
@list l15
	{mso-list-id:1045300311;
	mso-list-type:hybrid;
	mso-list-template-ids:1606313654 68747279 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
@list l15:level1
	{mso-level-tab-stop:14.7pt;
	mso-level-number-position:left;
	margin-left:14.7pt;
	text-indent:-18.0pt;}
@list l16
	{mso-list-id:1195848668;
	mso-list-template-ids:1606313654;}
@list l16:level1
	{mso-level-tab-stop:14.7pt;
	mso-level-number-position:left;
	margin-left:14.7pt;
	text-indent:-18.0pt;}
@list l16:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l16:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l16:level4
	{mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l16:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l16:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l16:level7
	{mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l16:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l16:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l17
	{mso-list-id:1281376415;
	mso-list-type:hybrid;
	mso-list-template-ids:388002738 270443490 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l17:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:25.5pt;
	mso-level-number-position:left;
	margin-left:25.5pt;
	text-indent:-25.5pt;
	font-family:"Times New Roman";}
@list l18
	{mso-list-id:1304239393;
	mso-list-type:simple;
	mso-list-template-ids:1911208406;}
@list l18:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:67.65pt;
	mso-level-number-position:left;
	margin-left:67.65pt;
	text-indent:-18.0pt;
	font-family:"Times New Roman";}
@list l19
	{mso-list-id:1326395015;
	mso-list-type:hybrid;
	mso-list-template-ids:388002738 -1967865736 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l19:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F02D;
	mso-level-tab-stop:38.55pt;
	mso-level-number-position:left;
	margin-left:37.55pt;
	text-indent:-17.0pt;
	font-family:Symbol;}
@list l20
	{mso-list-id:1373841410;
	mso-list-type:hybrid;
	mso-list-template-ids:983839400 -296291068 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l20:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-18.0pt;
	mso-hansi-font-family:"Courier New";}
@list l21
	{mso-list-id:1612006578;
	mso-list-type:hybrid;
	mso-list-template-ids:685958390 68747265 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l21:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l22
	{mso-list-id:1676684527;
	mso-list-type:hybrid;
	mso-list-template-ids:388002738 -865964122 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l22:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F02D;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:17.0pt;
	text-indent:-17.0pt;
	font-family:Symbol;}
@list l23
	{mso-list-id:1713576962;
	mso-list-type:hybrid;
	mso-list-template-ids:1168296190 1745093398 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l23:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F02D;
	mso-level-tab-stop:38.55pt;
	mso-level-number-position:left;
	margin-left:38.55pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l24
	{mso-list-id:1731541376;
	mso-list-type:simple;
	mso-list-template-ids:1516275054;}
@list l24:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l25
	{mso-list-id:1771120071;
	mso-list-type:hybrid;
	mso-list-template-ids:388002738 299806114 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l25:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:17.0pt;
	text-indent:-17.0pt;
	font-family:"Times New Roman";}
@list l26
	{mso-list-id:1872037985;
	mso-list-type:hybrid;
	mso-list-template-ids:-1719890314 -1748714670 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l26:level1
	{mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:17.0pt;
	text-indent:-17.0pt;}
@list l27
	{mso-list-id:1887834284;
	mso-list-type:hybrid;
	mso-list-template-ids:1955907842 68747279 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
@list l27:level1
	{mso-level-tab-stop:14.7pt;
	mso-level-number-position:left;
	margin-left:14.7pt;
	text-indent:-18.0pt;}
@list l28
	{mso-list-id:2018605970;
	mso-list-type:hybrid;
	mso-list-template-ids:-912376800 1988141284 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l28:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F02A;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>

</head>

<body lang=RU style='tab-interval:36.0pt;'>

<div class=Section1>

<p class=MsoTitle><span style='font-size:10.0pt;color:black;mso-bidi-font-weight:
bold'>ПРОТОКОЛ № 1<o:p></o:p></span></p>

<p class=MsoTitle><span style='font-size:10.0pt;color:black;mso-bidi-font-weight:
bold'>заседания Общего собрания Учредителей<o:p></o:p></span></p>

<h1 align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center;
text-indent:0cm'><span style='font-size:10.0pt;font-family:"Times New Roman";
color:black;mso-bidi-font-weight:bold'>Общества с ограниченной ответственностью<o:p></o:p></span></h1>

<h4><span style='color:black;mso-bidi-font-weight:bold;mso-bidi-font-style:
normal'>«<?php echo $naimenovanie; ?>»<o:p></o:p></span></h4>

<p class=MsoBlockText align=center style='margin-top:0cm;margin-right:-2.9pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center'><b><span
lang=EN-US style='font-size:10.0pt;color:black;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=328 style='width:246.35pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBlockText align=left style='margin-top:0cm;margin-right:-2.9pt;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:left'><span
  style='font-size:10.0pt;color:black;mso-bidi-font-weight:bold'>г.<span
  style='mso-spacerun:yes'>  </span>Москва<o:p></o:p></span></p>
  </td>
  <td width=350 style='width:262.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBlockText align=right style='margin-top:0cm;margin-right:-2.9pt;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right'><span
  style='font-size:10.0pt;color:black;mso-bidi-font-weight:bold'><?php echo str_replace("«","",str_replace("»","",date_mn($ustav_date))); ?></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal align=left style='text-align:left;text-indent:0cm;
tab-stops:496.15pt'><span style='font-size:8.0pt;color:black;mso-bidi-font-weight:
bold'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=left style='text-align:left;text-indent:0cm;
tab-stops:496.15pt'><b><span style='font-size:10.0pt;color:black'>Присутствовали:<o:p></o:p></span></b></p>

<p class=MsoNormal><span style='font-size:1.0pt;mso-bidi-font-size:10.0pt;
color:black'><o:p>&nbsp;</o:p></span></p>













<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 
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

    $dokument_dvid 	= $row->dokument_dvid ?"паспорт иностранного гражданина":"паспорт гражданина России";
    $strana 		= $row->strana;
    $mesto 			= $row->mesto;
	

	$dolyanominal = $kapital*$dolyaprocent/100;
	$fio = $familya.' '.$imya.' '.$otchestvo;
	
	if(!$sch) {$preds = $fiovin; $predsimp = $fio;}
	elseif($sch==1) {$sekr = $fiovin; $sekrimp = $fio;}



	ob_start();

 echo $fio; ?>  (<?php echo $dokument_dvid; ?> серия <?php echo  $seriap; ?> номер <?php echo  $nomerp; ?> выдан <?php echo  $kemvydanp; ?> <?php echo  date_order($to_date)  ; echo $kodp? " код подразделения ".$kodp:""; ?>, 
 
<?php 
if ($subject || $gorod) { 
?> 
 адрес регистрации <?php echo $pochtindex ; ?>, <?php 
 echo !strstr($subject, "Москва") ? "".$subject.", " : "";
echo $his_newmoscow == 2 ? "Москва, " : ""; echo $rajon ? "".$rajon.", " : "";  
 echo $gorod ? ($gorod != "Москва город" ? " ".$gorod.", " : "г. Москва, ") : "";  
 echo $naspunkt ? "".$naspunkt.", " : "";  
 echo $ulitca ? "".$ulitca.", " : "";  
 echo $dom ? " ".$dom.", " : ""; 
 echo $korpus ? "  ".$korpus.", " : "";  
 echo $kvartira ? " ".$kvartira."" : ""; 
 echo ")"; 
}
else {
 echo "адрес проживания: ".$strana .", ";  echo $mesto ? " ".$mesto."" : ""; 
}



	$uchrpasp_content[$sch]=ob_get_contents();
	ob_end_clean();
$counter_strana[$sch] = $strana;
	$sch++;

?> 
 
 <tr style='mso-yfti-irow:0'>
  <td width=678 valign=top style='width:508.65pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:1.4pt;margin-bottom:
  0cm;margin-left:17.0pt;margin-bottom:.0001pt;text-indent:-17.0pt;mso-list:
  l26 level1 lfo24;tab-stops:list 18.0pt'><![if !supportLists]><span
  style='font-size:10.0pt;color:black;mso-bidi-font-weight:bold'><span
  style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:10.0pt;color:black;
  mso-bidi-font-weight:bold'>гражданин <?php echo $strana?$strana:"Российской Федерации" ; ?> <?php echo $fio; ?>;<o:p></o:p></span></p>
  </td>
 </tr>
 
<?php }
?> 
 



</table>












<p class=MsoNormal align=left style='text-align:left;text-indent:0cm;
mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;
color:black'>Единогласно председателем общего собрания участников избрали <span
style='mso-spacerun:yes'>  </span><span style='mso-bidi-font-weight:bold'><?php echo $preds; ?></span></span><span style='font-size:10.0pt;mso-bidi-font-size:
11.0pt;color:black'>.</span><span style='font-size:10.0pt;mso-bidi-font-size:
12.0pt;color:black'><o:p></o:p></span></p>

<p class=MsoBodyTextIndent3 style='text-indent:0cm'><span style='font-size:
10.0pt;color:black'>Единогласно секретарем общего собрания участников
избрали <span style='mso-spacerun:yes'>  </span><span style='mso-bidi-font-weight:
bold'><?php echo $sekr; ?></span></span><span style='font-size:10.0pt;
mso-bidi-font-size:11.0pt;color:black'>.<o:p></o:p></span></p>

<p class=MsoNormal align=left style='margin-right:-.05pt;text-align:left;
text-indent:0cm;tab-stops:496.15pt'><span style='font-size:8.0pt;color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=left style='margin-right:-.05pt;text-align:left;
text-indent:0cm;tab-stops:496.15pt'><b><span style='font-size:10.0pt;
color:black'>Повестка дня:<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:0cm;text-indent:0cm;mso-list:l27 level1 lfo20;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Учреждение
Общества с ограниченной ответственностью «<?php echo $naimenovanie; ?>»
(далее Общество).<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:0cm;text-indent:0cm;mso-list:l27 level1 lfo20;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Утверждение
состава Учредителей Общества.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:0cm;text-indent:0cm;mso-list:l27 level1 lfo20;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Утверждение
Уставного капитала Общества.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:0cm;text-indent:0cm;mso-list:l27 level1 lfo20;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Утверждение
Устава Общества.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:0cm;text-indent:0cm;mso-list:l27 level1 lfo20;
tab-stops:list 14.7pt left 70.9pt'><![if !supportLists]><span style='font-size:
10.0pt;color:black'><span style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Утверждение
места нахождения Общества, почтового адреса и места хранения документов
Общества.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:0cm;text-indent:0cm;mso-list:l27 level1 lfo20;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Избрание
</span><span class=SpellE><span lang=EN-US style='font-size:10.0pt;color:black;
mso-ansi-language:EN-US'>Генерального</span></span><span lang=EN-US
style='font-size:10.0pt;color:black;mso-ansi-language:EN-US'> <span
class=SpellE>директора</span></span><span style='font-size:10.0pt;color:black'>
Общества.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:0cm;text-indent:0cm;mso-list:l27 level1 lfo20;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Утверждение
эскиза печати Общества.<o:p></o:p></span></p>

<p class=MsoNormal align=left style='margin-right:-.05pt;text-align:left;
text-indent:0cm'><span style='font-size:8.0pt;color:black;mso-bidi-font-weight:
bold'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=left style='margin-right:-.05pt;text-align:left;
text-indent:0cm'><b><span style='font-size:10.0pt;color:black'>Постановили:<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo31;
tab-stops:list 14.7pt'>
<span style='font-size:10.0pt;color:black'>В соответствии с действующим российским законодательством </span></p>
<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo31;
tab-stops:list 14.7pt'><span style='font-size:10.0pt;color:black'>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Учредить Общество с ограниченной ответственностью «<?php echo $naimenovanie; ?>».</span>
  
</p>
<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo31;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Утвердить
состав Учредителей Общества:<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:1.0pt;mso-bidi-font-size:10.0pt;
color:black'><o:p>&nbsp;</o:p></span></p>









<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>


<?php 
for($i=0;$i<$uchr_num;$i++){
?>




 <tr style='mso-yfti-irow:0'>
  <td width=678 valign=top style='width:508.65pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:1.4pt;margin-bottom:0cm;margin-left:17.0pt;margin-bottom:.0001pt;text-indent:-17.0pt;mso-list:
  l26 level1 lfo24;tab-stops:list 18.0pt'>
  <span class=GramE><span style='font-size:10.0pt;color:black;mso-bidi-font-weight:bold'>гражданин <span style='font-size:10.0pt;color:black;mso-bidi-font-weight:bold'><?php echo $counter_strana[$i]?$counter_strana[$i]:"Российской Федерации" ; ?></span> <?php echo $uchrpasp_content[$i]; ?>. 
  </span></p>
  </td>
 </tr>

<?php }
?>












</table>

<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo31;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Утвердить
для обеспечения деятельности Общества за счет вкладов участников Уставный
капитал в размере <span style='mso-bidi-font-weight:bold'><?php echo $kapital; ?> <?php /* (Десять тысяч) */?> </span>рублей,
разделенный на <?php echo $uchr_num; ?> <?php /* (две) */?> доли и распределить его среди Учредителей следующим
образом:</span></p>

<p class=MsoFooter style='tab-stops:36.0pt'><span style='font-size:1.0pt;
mso-bidi-font-size:10.0pt;color:black'><o:p>&nbsp;</o:p></span></p>











<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=678
 style='width:508.6pt;border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>






<?php 
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


    $dokument_dvid 	= $row->dokument_dvid ?"паспорт иностранного гражданина":"паспорт гражданина России";
    $strana 		= $row->strana;
    $mesto 			= $row->mesto;
	

	$dolyanominal = $kapital*$dolyaprocent/100;
	$fio = $familya.' '.$imya.' '.$otchestvo;
?>



 <tr style='mso-yfti-irow:0'>
  <td width=671 style='width:503.2pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-left:17.0pt;text-indent:-17.0pt;mso-list:
  l25 level1 lfo29;tab-stops:list 18.0pt'><![if !supportLists]><span
  style='font-size:10.0pt;color:black;mso-bidi-font-weight:bold'><span
  style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:10.0pt;color:black;
  mso-bidi-font-weight:bold'><?php echo $fio; ?> - номинальная стоимость
  доли <?php echo $dolyanominal;  echo " ( ".FloatToText($dolyanominal,0).") "; ?> <?php /* (Пять тысяч) */?> рублей, что составляет <?php echo $dolyaprocent; ?>% Уставного капитала;</span></p>
  </td>
 </tr>




<?php }
?>
</table>




<p class=ConsNormal style='text-align:justify;text-indent:18.45pt;mso-pagination:
widow-orphan'><span style='mso-bidi-font-size:11.0pt;color:black'>Всего <?php echo $kapital;  echo " ( ".FloatToText($kapital,0).") "; ?>
<?php /* (Десять тысяч) */?> рублей - 100% Уставного капитала.<o:p></o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=678
 style='width:508.6pt;border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width=678 valign=top style='width:508.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=ConsNormal style='text-align:justify;text-indent:18.45pt;mso-pagination:
  widow-orphan'><span style='mso-bidi-font-size:11.0pt;color:black'>Вклады в
  Уставный капитал подлежат внесению в<span style='mso-spacerun:yes'> 
  </span>денежной<span style='mso-spacerun:yes'>  </span>форме.</span><span
  style='color:black'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo31;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Утвердить
Устав Общества. <o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo31;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Утвердить
место нахождения Общества, почтовый адрес и место хранения документов Общества: <?php echo $juraddr_content; ?>.</span></p>

<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo31;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
color:black'>На должность Генерального директора Общества с ограниченной
ответственностью «<?php echo $naimenovanie; ?>» назначить 


<?php 
$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE `gendir_yn`='да' AND `idlevel_2` = ".$_POST["idlevel_2"];
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

    $pochtindex = $row->pochtindex;
    $subject = $row->subject;
    $rajon = $row->rajon;
    $gorod = $row->gorod;
    $naspunkt = $row->naspunkt;
    $ulitca = $row->ulitca;
    $dom = $row->dom;
    $korpus = $row->korpus;
    $kvartira = $row->kvartira;
	
	
    $dokument_dvid 	= $row->dokument_dvid ?"паспорт иностранного гражданина":"паспорт гражданина России";
    $strana 		= $row->strana;
    $mesto 			= $row->mesto;
	

}


	ob_start();

 echo $fiovin; ?>  (<?php echo $dokument_dvid; ?> серия <?php echo  $seriap; ?> номер <?php echo  $nomerp; ?> выдан <?php echo  $kemvydanp; ?> <?php echo  date_order($to_date)  ; echo $kodp? " код подразделения ".$kodp:""; ?>, 



<?php 
if ($subject || $gorod) { 
?> 
 адрес регистрации <?php echo $pochtindex ; ?>, <?php 
 echo !strstr($subject, "Москва") ? "".$subject.", " : "";
 
 echo $his_newmoscow == 2 ? "Москва, " : "";
 
 echo $rajon ? "".$rajon.", " : "";  
 echo $gorod ? ($gorod != "Москва город" ? " ".$gorod.", " : "г. Москва, ") : "";  
 echo $naspunkt ? "".$naspunkt.", " : "";  
 echo $ulitca ? "".$ulitca.", " : "";  
 echo $dom ? " ".$dom.", " : ""; 
 echo $korpus ? "  ".$korpus.", " : "";  
 echo $kvartira ? " ".$kvartira."" : ""; 
}
else {
 echo "адрес проживания: ".$strana .", ";  echo $mesto ? " ".$mesto."" : ""; 
}
 echo ")"; 

	$gena_content=ob_get_contents();
	ob_end_clean();
echo $gena_content;
?>








с правом распоряжения имуществом Общества<span style='mso-spacerun:yes'> 
</span>и правом первой подписи на банковской карточке.</span></span><span
style='font-size:10.0pt;color:black'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo31;
tab-stops:list 14.7pt'><![if !supportLists]><span style='font-size:10.0pt;
color:black'><span style='mso-list:Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;color:black'>Утвердить
эскиз печати.<o:p></o:p></span></p>

<p class=MsoNormal align=left style='margin-right:-.05pt;text-align:left;
text-indent:0cm'><span style='font-size:8.0pt;color:black;mso-bidi-font-weight:
bold'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-indent:14.2pt'><span style='font-size:10.0pt'>Все
решения приняты единогласно.<o:p></o:p></span></p>

<p class=MsoNormal style='text-indent:14.2pt'><span style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-indent:14.2pt'><span style='font-size:10.0pt'>Подписи:<b
style='mso-bidi-font-weight:normal'><span style='color:black'><o:p></o:p></span></b></span></p>

<p class=MsoNormal align=left style='margin-right:28.3pt;text-align:left;
text-indent:0cm;tab-stops:496.15pt'><span style='font-size:8.0pt;color:black;
mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes;height:40.35pt'>
  <td width=348 style='width:260.65pt;padding:0cm 5.4pt 0cm 5.4pt;height:40.35pt'>
  <p class=MsoNormal align=left style='text-align:left;text-indent:0cm;
  mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;
  mso-bidi-font-size:11.0pt;color:black'>Председатель собрания<span
  style='mso-spacerun:yes'>  </span>____________________________<o:p></o:p></span></p>
  <p class=MsoHeader style='tab-stops:36.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='mso-bidi-font-size:12.0pt;color:black'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoBodyTextIndent3 style='text-indent:0cm'><span style='font-size:
  10.0pt;color:black'>Секретарь собрания<span style='mso-spacerun:yes'>       
  </span>____________________________<o:p></o:p></span></p>
  <p class=MsoBodyTextIndent3 style='text-indent:0cm'><span style='font-size:
  10.0pt;color:black'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=331 style='width:248.1pt;padding:0cm 5.4pt 0cm 5.4pt;height:40.35pt'>
  <p class=MsoNormal align=left style='text-align:left;text-indent:0cm'><span
  style='font-size:10.0pt;color:black;mso-bidi-font-weight:bold'><?php echo $predsimp ; ?></span></p>
  <p class=MsoNormal align=left style='text-align:left;text-indent:0cm'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:black'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=left style='text-align:left;text-indent:0cm'><span
  style='font-size:10.0pt;color:black;mso-bidi-font-weight:bold'><?php echo $sekrimp ; ?></span></p>
  </td>
 </tr>
</table>


<p class=ConsNormal style='mso-pagination:widow-orphan'><span style='font-size:
8.0pt;color:black;layout-grid-mode:both'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=left style='text-align:left'><span style='font-size:
8.0pt;color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-indent:0cm'><span style='font-size:1.0pt;
color:black'><o:p>&nbsp;</o:p></span></p>

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
return $res = "«".$ar[2]."» ".$monthlist[$ar[1]]." ".$ar[0]." г.";

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


?>