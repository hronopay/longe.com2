<?php 
session_start(); 
include("../config.php");

if (!defined('IN_SITE')) {
    die("РќР° РІС‹С…РѕРґ");
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

$qqq = "SELECT * FROM `".$partnerlogin."__okvedooo` WHERE `idlevel_1` = ".$idlevel_1." AND `idlevel_2` = ".$idlevel_2." ORDER BY `notes` DESC, `nomerokved` ASC";
$Or = mysql_query($qqq)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>");
$num_rows = mysql_num_rows($Or);
$j=1;
while ($row = mysql_fetch_object($Or)){
	$okv_pkt[$j] = $j;
	$okv_num[$j] = $row->nomerokved;
	$okv_txt[$j] = $row->egotext;
  $j++;
 }
$j=1;
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
<link rel=File-List href="Р¤РќРЎ2009_11001_02_Р‘_СѓС‡_С„РёР·Р»РёС†Рѕ.files/filelist.xml">
<title>Р›РёСЃС‚ Рњ</title>

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
	{mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	{mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	{mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	{mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	{mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	{mso-style-next:РћР±С‹С‡РЅС‹Р№;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:120%;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:6;
	font-size:12.0pt;
	font-family:"Times New Roman";}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	{mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	{mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	{mso-style-name:Р—Р°Рі3;
	mso-style-parent:"РћР±С‹С‡РЅС‹Р№ РѕС‚СЃС‚СѓРї";
	mso-style-next:РћР±С‹С‡РЅС‹Р№;
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
	{mso-style-name:"Р РµРіРёСЃС‚СЂР°С‚РѕСЂ РѕСЃРЅРѕРІРЅРѕР№";
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
	{mso-style-name:"Р РµРіРёСЃС‚СЂР°С‚РѕСЂ small";
	mso-style-parent:"Р РµРіРёСЃС‚СЂР°С‚РѕСЂ РѕСЃРЅРѕРІРЅРѕР№";
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
	{mso-footnote-separator:url("Р¤РќРЎ2009_11001_02_Р‘_СѓС‡_С„РёР·Р»РёС†Рѕ.files/header.htm") fs;
	mso-footnote-continuation-separator:url("Р¤РќРЎ2009_11001_02_Р‘_СѓС‡_С„РёР·Р»РёС†Рѕ.files/header.htm") fcs;
	mso-endnote-separator:url("Р¤РќРЎ2009_11001_02_Р‘_СѓС‡_С„РёР·Р»РёС†Рѕ.files/header.htm") es;
	mso-endnote-continuation-separator:url("Р¤РќРЎ2009_11001_02_Р‘_СѓС‡_С„РёР·Р»РёС†Рѕ.files/header.htm") ecs;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:24.25pt 42.55pt 1.0cm 70.9pt;
	mso-header-margin:9.0pt;
	mso-footer-margin:36.0pt;
	mso-header:url("Р¤РќРЎ2009_11001_02_Р‘_СѓС‡_С„РёР·Р»РёС†Рѕ.files/header.htm") h1;
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
	{mso-level-style-link:"Р—Р°РіРѕР»РѕРІРѕРє 5";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:177.0pt;
	text-indent:-35.4pt;}
@list l0:level6
	{mso-level-style-link:"Р—Р°РіРѕР»РѕРІРѕРє 6";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:212.4pt;
	text-indent:-35.4pt;}
@list l0:level7
	{mso-level-style-link:"Р—Р°РіРѕР»РѕРІРѕРє 7";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:247.8pt;
	text-indent:-35.4pt;}
@list l0:level8
	{mso-level-style-link:"Р—Р°РіРѕР»РѕРІРѕРє 8";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:35.4pt;
	mso-level-legacy-space:0cm;
	margin-left:283.2pt;
	text-indent:-35.4pt;}
@list l0:level9
	{mso-level-style-link:"Р—Р°РіРѕР»РѕРІРѕРє 9";
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
	{mso-level-style-link:"Р—Р°РіРѕР»РѕРІРѕРє 1";
	mso-level-suffix:space;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:48.2pt;
	text-indent:-12.2pt;}
@list l5:level2
	{mso-level-style-link:"Р—Р°РіРѕР»РѕРІРѕРє 2";
	mso-level-suffix:space;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.0cm;
	text-indent:-20.7pt;}
@list l5:level3
	{mso-level-style-link:"Р—Р°РіРѕР»РѕРІРѕРє 3";
	mso-level-suffix:space;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:73.7pt;
	text-indent:-37.7pt;}
@list l5:level4
	{mso-level-style-link:"Р—Р°РіРѕР»РѕРІРѕРє 4";
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
	{mso-level-style-link:Р—Р°Рі3;
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
<?php for($co=0;$co<($num_rows/10);$co++){?>

<div style="margin:0 0 0 10px; ">
<div class=Section1>

<table x:str border=0 cellpadding=0 cellspacing=0  width=682 class=xl6514427>
    <col class=xl6514427 width=5 span=127 style='width:4pt'>
    <tr height=20>
      <td colspan=104 height=20 class=xl19814427 width=520></td>
      <td colspan=13 class=xl19814427 width=65>РЎС‚СЂР°РЅРёС†Р°</td>
      <td colspan=5 class=xl12114427 width=25 x:num><?php 
	  					if(strlen($co+$page*2) ==1) echo '0';
						else echo mb_substr(($co+$page*2), 0, 1,'utf-8');
						 ?></td>
      <td colspan=5 class=xl12114427 width=25 x:num style="border-right:1px solid #000000; "><?php 
	  					if(strlen($co+$page*2) ==1) echo ($co+$page*2);
						else echo mb_substr(($co+$page*2), 1, 1,'utf-8');
						 ?></td>
    </tr>




    <tr height=8>
      <td colspan=127 height=8 class=xl19814427></td>
    </tr>
    <tr height=20>
      <td colspan=84 height=20 class=xl19814427></td>
      <td colspan=13 class=xl19614427>Р¤РѕСЂРјР° в„–</td>
      <td colspan=5 class=xl12114427>Р </td>
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
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:Verdana'>Р›РёСЃС‚ Рњ
  Р·Р°СЏРІР»РµРЅРёСЏ<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=a align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:11.0pt'>РЎРІРµРґРµРЅРёСЏ Рѕ РІРёРґР°С… СЌРєРѕРЅРѕРјРёС‡РµСЃРєРѕР№ РґРµСЏС‚РµР»СЊРЅРѕСЃС‚Рё*</span></b></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:-12.6pt;border-collapse:collapse;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid;height:13.95pt'>
  <td width=672 style='width:504.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.95pt'>
  <p align=center class=a style='text-align:center'><strong><span lang=EN-US
  style='font-size:9.0pt;mso-ansi-language:EN-US'>РћР±С‰РµСЃС‚РІРѕ СЃ РѕРіСЂР°РЅРёС‡РµРЅРЅРѕР№ РѕС‚РІРµС‚СЃС‚РІРµРЅРЅРѕСЃС‚СЊСЋ В«<?php echo $naimenovanie; ?>В»</span></strong></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=672 valign=top style='width:504.0pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=small align=center style='text-align:center'>(РЅР°РёРјРµРЅРѕРІР°РЅРёРµ
  СЃРѕР·РґР°РІР°РµРјРѕРіРѕ СЋСЂРёРґРёС‡РµСЃРєРѕРіРѕ Р»РёС†Р° РЅР° СЂСѓСЃСЃРєРѕРј СЏР·С‹РєРµ)</p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<table width="718"  class=MsoNormalTable  cellspacing=0 cellpadding=0 
 style='width:496.15pt;margin-left:1.4pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 1.4pt 0cm 1.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;page-break-inside:avoid'>
  <td width=28 valign=top style='width:21.3pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;text-align:center;
  tab-stops:35.4pt'><b><span style='font-size:12.0pt'>в„–<o:p></o:p></span></b></p>
  </td>
  <td width=236 colspan=10 valign=top style='width:176.7pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;text-align:center;
  tab-stops:35.4pt'><b><span style='font-size:12.0pt'>РљРѕРґ РїРѕ РћРљР’Р­Р”**<o:p></o:p></span></b></p>
  </td>
  <td width=398 valign=top style='width:298.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader align=center style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:2.85pt;text-align:center;tab-stops:35.4pt'><b><span
  style='font-size:12.0pt'>РќР°РёРјРµРЅРѕРІР°РЅРёРµ РІРёРґР° РґРµСЏС‚РµР»СЊРЅРѕСЃС‚Рё<o:p></o:p></span></b></p>
  </td>
 </tr>






<?php 

//for ($j=1;$j<=10;$j++)
while (   $j<=10*($co+1)   )
{

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
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=mb_substr($okv_num[$j], 0, 1,'utf-8'))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;line-height:normal;tab-stops:35.4pt'><b><span
  style='font-size:12.0pt'><?php echo ($a=mb_substr($okv_num[$j], 1, 1,'utf-8'))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
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
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=mb_substr($okv_num[$j], 3, 1,'utf-8'))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.65pt;border-top:solid windowtext 1.0pt;;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=mb_substr($okv_num[$j], 4, 1,'utf-8'))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
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
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=mb_substr($okv_num[$j], 6, 1,'utf-8'))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.7pt;border-top:solid windowtext 1.0pt;;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php echo ($a=mb_substr($okv_num[$j], 7, 1,'utf-8'))!=""?$a:$pr1; ?><o:p></o:p></span></b></p>
  </td>
  <td width=12 valign=top style='width:9.0pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 1.4pt 0cm 1.4pt'>
  <p class=MsoHeader style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:normal;tab-stops:
  35.4pt'><b><span style='font-size:12.0pt'><?php if ($j==1) echo "***"; else echo "&nbsp;"; ?></span></b></p>
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
$j++;}
?>
</table>


<p class=MsoNormal><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>




<p class=MsoNormal><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>







<p class=MsoNormal><span style='font-size:5.0pt'><o:p>&nbsp;</o:p></span></p>

<hr align=left size=1 width="33%">
<div style='mso-element:footnote' id=ftn1><span style='font-size:7.0pt;font-family:Verdana'>* РЈРєР°Р·С‹РІР°СЋС‚СЃСЏ РІСЃРµ РІРёРґС‹
СЌРєРѕРЅРѕРјРёС‡РµСЃРєРѕР№ РґРµСЏС‚РµР»СЊРЅРѕСЃС‚Рё СЋСЂРёРґРёС‡РµСЃРєРѕРіРѕ Р»РёС†Р°, РєРѕС‚РѕСЂС‹Рµ РїРѕРґР»РµР¶Р°С‚ РІРЅРµСЃРµРЅРёСЋ РІ
Р•РґРёРЅС‹Р№ РіРѕСЃСѓРґР°СЂСЃС‚РІРµРЅРЅС‹Р№ СЂРµРµСЃС‚СЂ СЋСЂРёРґРёС‡РµСЃРєРёС… Р»РёС†. Р•СЃР»Рё РєРѕР»РёС‡РµСЃС‚РІРѕ РІРёРґРѕРІ
РґРµСЏС‚РµР»СЊРЅРѕСЃС‚Рё Р±РѕР»СЊС€Рµ 10, С‚Рѕ Р·Р°РїРѕР»РЅСЏРµС‚СЃСЏ РІС‚РѕСЂРѕР№ Р»РёСЃС‚ Рњ, Р±РѕР»СЊС€Рµ 20<span
style='mso-spacerun:yes'>В  </span>- С‚СЂРµС‚РёР№ Р»РёСЃС‚ Рњ Рё С‚.Рґ. <o:p></o:p></span>
  <p class=MsoFootnoteText style='line-height:12.0pt'><span
class=MsoFootnoteReference><span style='font-family:Symbol;mso-ascii-font-family:
Verdana;mso-hansi-font-family:Verdana;mso-char-type:symbol;mso-symbol-font-family:
Symbol'></span></span><span style='font-size:7.0pt;font-family:
Verdana'>**РЈРєР°Р·С‹РІР°РµС‚СЃСЏ РЅРµ РјРµРЅРµРµ 3 С†РёС„СЂРѕРІС‹С… Р·РЅР°РєРѕРІ РћР±С‰РµСЂРѕСЃСЃРёР№СЃРєРѕРіРѕ РєР»Р°СЃСЃРёС„РёРєР°С‚РѕСЂР°
РІРёРґРѕРІ СЌРєРѕРЅРѕРјРёС‡РµСЃРєРѕР№ РґРµСЏС‚РµР»СЊРЅРѕСЃС‚Рё<o:p></o:p></span></p>

  <p class=MsoFootnoteText><span
style='font-size:7.0pt;font-family:Verdana'>*** РџРµСЂРІС‹Рј СѓРєР°Р·С‹РІР°РµС‚СЃСЏ РѕСЃРЅРѕРІРЅРѕР№ РІРёРґ
РґРµСЏС‚РµР»СЊРЅРѕСЃС‚Рё</span></p>
</div>



<span style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-ansi-language:RU;mso-fareast-language:
RU;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
page-break-before:always'>
</span>

</div>


</div>
</div>








<?php }?>
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
  $monthlist = array('01' => 'СЏРЅРІР°СЂСЏ',
                     '02' => 'С„РµРІСЂР°Р»СЏ',
                     '03' => 'РјР°СЂС‚Р°',
                     '04' => 'Р°РїСЂРµР»СЏ',
                     '05' => 'РјР°СЏ',
                     '06' => 'РёСЋРЅСЏ',
                     '07' => 'РёСЋР»СЏ',
                     '08' => 'Р°РІРіСѓСЃС‚Р°',
                     '09' => 'СЃРµРЅС‚СЏР±СЂСЏ',
                     '10' => 'РѕРєС‚СЏР±СЂСЏ',
                     '11' => 'РЅРѕСЏР±СЂСЏ',
                     '12' => 'РґРµРєР°Р±СЂСЏ'
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
return $res = $ar[2].".".$ar[1].".".$ar[0]." Рі.";

}


?>