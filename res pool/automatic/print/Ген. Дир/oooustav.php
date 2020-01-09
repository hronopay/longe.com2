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
<meta http-equiv=Content-Type content="text/html; charset=windows-1251">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<link rel=File-List href="oooustav.files/filelist.xml">
<link rel=Edit-Time-Data href="oooustav.files/editdata.mso">

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
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:204;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:1627421319 -2147483648 8 0 66047 0;}
@font-face
	{font-family:FloraCTT;
	mso-font-alt:"Times New Roman";
	mso-font-charset:204;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:515 0 0 0 5 0;}
@font-face
	{font-family:"Courier New CYR";
	panose-1:2 7 3 9 2 2 5 2 4 4;
	mso-font-charset:204;
	mso-generic-font-family:modern;
	mso-font-pitch:fixed;
	mso-font-signature:536902279 -2147483648 8 0 511 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	tab-stops:center 207.65pt right 415.3pt;
	text-autospace:ideograph-numeric;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:AR-SA;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 233.85pt right 467.75pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:AR-SA;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;
	text-underline:single;}
p.1, li.1, div.1
	{mso-style-name:Текст1;
	margin:0cm;
	margin-bottom:10pt;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:12.0pt;
	font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	mso-fareast-language:AR-SA;}
p.21, li.21, div.21
	{mso-style-name:"Основной текст 21";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	color:black;
	mso-fareast-language:AR-SA;}
span.greenurl
	{mso-style-name:green_url;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("oooustav.files/header.htm") fs;
	mso-footnote-continuation-separator:url("oooustav.files/header.htm") fcs;
	mso-endnote-separator:url("oooustav.files/header.htm") es;
	mso-endnote-continuation-separator:url("oooustav.files/header.htm") ecs;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:53.35pt 1.0cm 1.0cm 63.0pt;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-title-page:yes;
	mso-even-header:url("oooustav.files/header.htm") eh1;
	mso-header:url("oooustav.files/header.htm") h1;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:-2;
	mso-list-type:simple;
	mso-list-template-ids:217630214;}
@list l0:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:*;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1
	{mso-list-id:2;
	mso-list-type:simple;
	mso-list-template-ids:2;
	mso-list-name:WW8Num1;}
@list l1:level1
	{mso-level-start-at:11;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:25.5pt;
	mso-level-number-position:left;
	margin-left:25.5pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Times New Roman";
	mso-hansi-font-family:"Times New Roman";}
@list l2
	{mso-list-id:3;
	mso-list-type:simple;
	mso-list-template-ids:3;
	mso-list-name:WW8Num2;}
@list l2:level1
	{mso-level-start-at:11;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:24.75pt;
	mso-level-number-position:left;
	margin-left:24.75pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Times New Roman";
	mso-hansi-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
@list l3
	{mso-list-id:236865880;
	mso-list-type:hybrid;
	mso-list-template-ids:1557443900 68747265 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l4
	{mso-list-id:898857967;
	mso-list-type:hybrid;
	mso-list-template-ids:1203921910 68747265 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l5
	{mso-list-id:1222717803;
	mso-list-type:simple;
	mso-list-template-ids:834434084;}
@list l5:level1
	{mso-level-start-at:8;
	mso-level-text:"1\.1\.%1\.";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:32.4pt;
	mso-level-legacy-space:0cm;
	margin-left:0cm;
	text-indent:0cm;
	font-family:"Times New Roman";}
@list l6
	{mso-list-id:1441610496;
	mso-list-type:hybrid;
	mso-list-template-ids:-1242155220 68747265 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l7
	{mso-list-id:1924681347;
	mso-list-type:hybrid;
	mso-list-template-ids:1542646322 68747265 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l7:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l0:level1 lfo5
	{mso-level-start-at:65535;
	mso-level-numbering:continue;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:17.75pt;
	mso-level-legacy-space:0cm;
	margin-left:0cm;
	text-indent:0cm;
	font-family:"Times New Roman";}
@list l0:level1 lfo6
	{mso-level-start-at:65535;
	mso-level-numbering:continue;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:17.5pt;
	mso-level-legacy-space:0cm;
	margin-left:0cm;
	text-indent:0cm;
	font-family:"Times New Roman";}
@list l0:level1 lfo9
	{mso-level-start-at:65535;
	mso-level-numbering:continue;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:14.15pt;
	mso-level-legacy-space:0cm;
	margin-left:0cm;
	text-indent:0cm;
	font-family:"Times New Roman";}
@list l0:level1 lfo10
	{mso-level-start-at:65535;
	mso-level-numbering:continue;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:14.4pt;
	mso-level-legacy-space:0cm;
	margin-left:0cm;
	text-indent:0cm;
	font-family:"Times New Roman";}
@list l0:level1 lfo11
	{mso-level-start-at:65535;
	mso-level-numbering:continue;
	mso-level-text:•;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	mso-level-legacy:yes;
	mso-level-legacy-indent:14.65pt;
	mso-level-legacy-space:0cm;
	margin-left:0cm;
	text-indent:0cm;
	font-family:"Times New Roman";}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>

<title>Устав</title></head>

<body lang=RU link=blue vlink=purple style='tab-interval:35.4pt'><div style="margin:0 0 0 30px; ">

<div class=Section1>

<p class=MsoNormal style='line-height:200%'><!--[if gte vml 1]><v:rect id="_x0000_s1026"
 style='position:absolute;margin-left:-9pt;margin-top:0;width:513pt;height:745.7pt;
 z-index:1' filled="f" strokeweight="4.5pt">
 <v:stroke linestyle="thickThin"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
relative;z-index:1'><span style='position:absolute;left:10px;top:-3px;
width:690px;height:1001px'><img width=690 height=1001
src="oooustav.files/image001.gif" v:shapes="_x0000_s1026"></span></span><![endif]><b
style='mso-bidi-font-weight:normal'><span style='font-family:FloraCTT;
color:black'><o:p>&nbsp;</o:p></span></b></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoNormal align=center style='margin-left:290.6pt;text-align:center;
line-height:200%'><b style='mso-bidi-font-weight:normal'><span
style='font-family:FloraCTT;color:black'>УТВЕРЖДЕН<o:p></o:p></span></b></p>

<?php 
if ($uchr_num==1)  echo "<p class=MsoNormal align=center style='margin-left:279.0pt;text-align:center;
line-height:200%'><b style='mso-bidi-font-weight:normal'><span
style='font-family:FloraCTT;color:black'>Решением №1 <o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-left:279.0pt;text-align:center;
line-height:200%'><b style='mso-bidi-font-weight:normal'><span
style='font-family:FloraCTT;color:black'>Учредителя Общества<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-left:290.6pt;text-align:center;
line-height:200%'><b style='mso-bidi-font-weight:normal'><span
style='font-family:FloraCTT;color:black'>от ".date_mn($ustav_date)."</span></b></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>";

 
else echo "<p class=MsoNormal align=center style='margin-left:279.0pt;text-align:center;
line-height:200%'><b style='mso-bidi-font-weight:normal'><span
style='font-family:FloraCTT;color:black'>Общим собранием <o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-left:279.0pt;text-align:center;
line-height:200%'><b style='mso-bidi-font-weight:normal'><span
style='font-family:FloraCTT;color:black'>Учредителей Общества<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-left:279.0pt;text-align:center;
line-height:200%'><b style='mso-bidi-font-weight:normal'><span
style='font-family:FloraCTT;color:black'>Протокол №1 <o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-left:290.6pt;text-align:center;
line-height:200%'><b style='mso-bidi-font-weight:normal'><span
style='font-family:FloraCTT;color:black'>от ".date_mn($ustav_date)."</span></b></p>";
?>


<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:12.0pt;mso-bidi-font-size:12.0pt;font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center;
mso-pagination:none;tab-stops:35.45pt 432.0pt;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'><span
style='font-size:22.0pt;mso-bidi-font-size:12.0pt;font-family:FloraCTT;
color:black'>УСТАВ<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center;
mso-pagination:none;tab-stops:35.45pt 432.0pt;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'><span
style='font-size:22.0pt;mso-bidi-font-size:12.0pt;font-family:FloraCTT;
color:black'>Общества с ограниченной ответственностью<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center;
mso-pagination:none;tab-stops:35.45pt 432.0pt;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'><span
style='font-size:22.0pt;mso-bidi-font-size:12.0pt;font-family:FloraCTT;
color:black'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center;
mso-pagination:none;tab-stops:35.45pt;mso-layout-grid-align:none;text-autospace:
none'><b style='mso-bidi-font-weight:normal'><span style='font-size:36.0pt;
mso-bidi-font-size:12.0pt;font-family:FloraCTT;color:black'><span
style='mso-spacerun:yes'> </span>«<?php echo $naimenovanie; ?>»</span></b><b
style='mso-bidi-font-weight:normal'><span style='font-size:16.0pt;mso-bidi-font-size:
12.0pt;font-family:FloraCTT'><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-family:FloraCTT'><span style='mso-spacerun:yes'>  
</span><o:p></o:p></span></b></p>

<p class=MsoHeader style='tab-stops:35.4pt center 207.65pt right 415.3pt'><span
style='font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoHeader style='tab-stops:35.4pt center 207.65pt right 415.3pt'><span
style='font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<div style='mso-element:frame;mso-element-frame-hspace:7.1pt;mso-element-wrap:
auto;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:page;
mso-element-left:57.55pt;mso-element-top:.05pt;mso-height-rule:exactly'>

<table cellspacing=0 cellpadding=0 hspace=0 vspace=0>
 <tr>
  <td valign=top align=left style='padding-top:0cm;padding-right:7.1pt;
  padding-bottom:0cm;padding-left:7.1pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-5.85pt;
  margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center;
  mso-element:frame;mso-element-frame-hspace:7.1pt;mso-element-wrap:auto;
  mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:page;
  mso-element-left:57.55pt;mso-element-top:.05pt;mso-height-rule:exactly'><!--[if gte vml 1]><v:shapetype
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
  </v:shapetype><v:shape id="_x0000_i1025" type="#_x0000_t75" style='width:483pt;
   height:23.25pt' fillcolor="window">
   <v:imagedata src="oooustav.files/image002.wmz" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img width=644 height=31
  src="oooustav.files/image003.gif" v:shapes="_x0000_i1025"><![endif]><o:p></o:p></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt;
font-family:FloraCTT'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=justify style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;font-family:
FloraCTT;color:black;mso-font-kerning:14.0pt'>г. Москва,<span
style='mso-spacerun:yes'>  </span><?php echo date("20y"); ?>г.
<br clear=all style='page-break-before:always'>
</span></b></p>
<p class=MsoNormal align=justify style='text-align:justify'>

<b><span style='font-size:10.0pt'>Общество с ограниченной ответственностью «<?php echo $naimenovanie; ?>»</span></b>
<span style='font-size:10.0pt;mso-bidi-font-size:10.0pt'>, именуемое в дальнейшем
        Общество, создано в соответствии с действующим законодательством РФ на основании Гражданского кодекса РФ (Часть 1),
        далее - ГК РФ, Федерального закона РФ &quot;Об обществах с ограниченной
        ответственностью&quot; №14-ФЗ, далее - Федеральный закон, и иного действующего
        законодательства РФ.</span>
</p>
<p align="justify" class=MsoNormal style='text-align:justify'><span style='font-size:10.0pt;
mso-bidi-font-size:10.0pt'><span style='mso-spacerun:yes'>           
</span>Все вопросы, не урегулированные в настоящем Уставе, решаются в
соответствии с действующим законодательством РФ.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>1.
ОБЩИЕ<span style='mso-spacerun:yes'>  </span>ПОЛОЖЕНИЯ<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:10.0pt;
mso-bidi-font-size:10.0pt'><span style='mso-spacerun:yes'>    </span>1.1.
Организация </span><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>«<?php echo $naimenovanie; ?>»</span></b><span style='font-size:
12.0pt;mso-bidi-font-size:10.0pt'> в правовом отношении является Обществом с
ограниченной<span style='mso-spacerun:yes'>  </span>ответственностью.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt 139.8pt'><span
style='font-family:"Times New Roman"'><span style='mso-spacerun:yes'>   
</span>1.2. Участники Общества не отвечают по обязательствам Общества и несут
риск убытков, связанных с его деятельностью, в пределах стоимости принадлежащих
им долей в уставном капитале общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>Участники Общества, не полностью оплатившие
доли, несут солидарную ответственность по обязательствам<span
style='mso-spacerun:yes'>  </span>Общества<span style='mso-spacerun:yes'> 
</span>в пределах стоимости принадлежащих им долей в уставном капитале общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>    </span>1.3. Общество
имеет в собственности обособленное имущество, учитываемое на его самостоятельном
балансе, может от своего имени приобретать и осуществлять имущественные и<span
style='mso-spacerun:yes'>  </span>личные<span style='mso-spacerun:yes'>  
</span>неимущественные права, нести обязанности, быть истцом и ответчиком в
суде.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>1.4. Общество имеет
гражданские права и несет обязанности,<span style='mso-spacerun:yes'> 
</span>необходимые для осуществления любых видов деятельности, не запрещенных
федеральными законами. Отдельными видами деятельности, перечень которых
определяется федеральными законами, Общество может заниматься только на
основании специального разрешения (лицензии). Если условиями предоставления
специального разрешения (лицензии) на занятие определенным видом деятельности
предусмотрено требование о занятии такой<span style='mso-spacerun:yes'> 
</span>деятельностью<span style='mso-spacerun:yes'>  </span>как исключительной,
то Общество в течение срока действия специального разрешения (лицензии) не
вправе осуществлять иные виды деятельности, за исключением<span
style='mso-spacerun:yes'>  </span>видов<span style='mso-spacerun:yes'> 
</span>деятельности, предусмотренных специальным разрешением (лицензией) и им
сопутствующих.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>1.5. Общество<span
style='mso-spacerun:yes'>  </span>считается<span style='mso-spacerun:yes'> 
</span>созданным как юридическое лицо с момента его государственной регистрации
в установленном федеральными законами порядке. Общество создается без
ограничения срока.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>1.6. Общество
вправе в установленном порядке открывать банковские счета на территории
Российской Федерации и за ее пределами.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>1.7. Общество имеет
круглую печать, содержащую его полное фирменное наименование на русском языке и
указание на место его нахождения. В печати может быть также указано фирменное
наименование Общества на любом иностранном языке или языке народов Российской
Федерации.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>1.8. Общество имеет
штампы и бланки со своим наименованием, собственную эмблему,<span
style='mso-spacerun:yes'>  </span>а<span style='mso-spacerun:yes'> 
</span>также<span style='mso-spacerun:yes'>  </span>зарегистрированный в
установленном порядке товарный знак и другие средства визуальной идентификации.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;tab-stops:30.0pt;background:
#BFBFBF'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>2.ОТВЕТСТВЕННОСТЬ
ОБЩЕСТВА<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>2.1. Общество несет
ответственность по своим обязательствам всем принадлежащим ему имуществом.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>2.2. Общество не
отвечает по обязательствам своих участников. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>2.3. Если
несостоятельность (банкротство) Общества вызвана действиями (бездействием) его
участников или других лиц, которые имеют право давать обязательные для Общества
указания либо иным образом имеют возможность определять его действия, то на
указанных участников или других лиц в случае недостаточности имущества Общества
может быть возложена субсидиарная ответственность по его обязательствам.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:66.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>2.4. Государство и
его органы не несут ответственности по обязательствам Общества, равно как и
Общество не отвечает по обязательствам государства и его органов.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>3.
ФИРМЕННОЕ НАИМЕНОВАНИЕ И МЕСТОНАХОЖДЕНИЕ ОБЩЕСТВА<o:p></o:p></span></b></p>

<p class=MsoNormal><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>3.1. Полное наименование Общества на русском
языке:<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Times New Roman"'>
<span style='mso-spacerun:yes'>       </span><span style='mso-spacerun:yes'>   </span>
<b style='mso-bidi-font-weight:normal'>Общество
с ограниченной ответственностью «<?php echo $naimenovanie; ?>».<o:p></o:p></b></span></p>

<p class=MsoNormal>
<span style='mso-spacerun:yes'>       </span><span style='mso-spacerun:yes'>   </span>
<span style='font-size:10.0pt'>Сокращенное наименование на русском
языке: <b style='mso-bidi-font-weight:normal'>ООО «<?php echo $nameshort; ?>». <o:p></o:p></b></span></p>


<?php 
if($foreignnamefull) echo "<p class=MsoNormal>
	<span style='font-family:Times New Roman'>
		<span style='mso-spacerun:yes'>       </span><span style='mso-spacerun:yes'>   </span>
				Полное наименование на ". toLower($language)." языке:<b style='mso-bidi-font-weight:normal'> «". $foreignnamefull."».<o:p></o:p></b>
	</span></p>";

if($foreignnameshort) echo "<p class=MsoNormal>
	<span style='mso-spacerun:yes'>       </span><span style='mso-spacerun:yes'>   </span>
	<span style='font-size:10.0pt'>
			Сокращенное наименование на ". toLower($language)." языке: <b style='mso-bidi-font-weight:normal'> «". $foreignnameshort."». </b>
	</span></p>
" ;
?>



<p class=MsoNormal><span style='font-size:10.0pt'><span
style='mso-spacerun:yes'>   </span></span><span style='font-size:10.0pt;
mso-bidi-font-size:10.0pt'>3.2. Место нахождения и почтовый адрес Общества
определяется местом нахождения постоянного действующего исполнительного органа
- генерального директора, по адресу: <b style='mso-bidi-font-weight:normal'>РФ,</b></span>
<b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
mso-bidi-font-size:10.0pt'><?php echo $juraddr_content; ?>.<o:p></o:p></span></b></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>4.
ЦЕЛЬ ДЕЯТЕЛЬНОСТИ ОБЩЕСТВА<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>4.1. Основной целью деятельности Общества
является осуществление торгово-хозяйственной и иной деятельности,<span
style='mso-spacerun:yes'>  </span>направленной на получение прибыли и ее
распределение между Участниками в соответствии с действующим законодательством
и Уставом Общества.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>5.
ПРЕДМЕТ ДЕЯТЕЛЬНОСТИ ОБЩЕСТВА<o:p></o:p></span></b></p>

<p class=MsoNormal><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>5.1. Предметом деятельности Общества
является:<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
<?php 

	$qqq = "SELECT * FROM `".$partnerlogin."__okvedooo` WHERE `idlevel_1` = ".$idlevel_1." AND `idlevel_2` = ".$idlevel_2." ORDER BY `notes` DESC, `nomerokved` ASC";
$Or = mysql_query($qqq)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>");
$num_rows = mysql_num_rows($Or);
while ($row = mysql_fetch_object($Or)){
	$okv_num = $row->nomerokved;
	$okv_txt = $row->egotext;
	echo " <li class=MsoNormal style='line-height:12.7pt;mso-line-height-rule:exactly;
     mso-list:l6 level1 lfo12;tab-stops:list 36.0pt;background:white'><span
     style='font-size:10.0pt;mso-fareast-language:AR-SA'>".$okv_txt.";</span></li>";
 }


?> 
<li class=MsoNormal style='text-align:justify;mso-list:l6 level1 lfo12;
     mso-hyphenate:none;tab-stops:list 36.0pt'><span style='font-size:10.0pt;
     mso-fareast-language:AR-SA'>Иные виды хозяйственной деятельности, не
     запрещенные законодательством РФ.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>5.2. Общество обладает универсальной
правоспособностью, может иметь гражданские права и нести гражданские
обязанности, необходимые для осуществления любых видов деятельности, в т.ч.
прямо не предусмотренных в Уставе, и не запрещенных действующим
законодательством.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>5.3. Отдельными видами деятельности,
перечень которых определяется законом, Общество может заниматься только на
основании специального разрешения (лицензии).</span><span lang=EN-US
style='font-size:10.0pt;color:windowtext;mso-ansi-language:EN-US'><o:p></o:p></span></p>

<p class=21 style='text-indent:14.2pt;tab-stops:-78.0pt'><span lang=EN-US
style='font-size:10.0pt;color:windowtext;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<p class=21 style='text-indent:14.2pt;tab-stops:-78.0pt'><span lang=EN-US
style='font-size:10.0pt;color:windowtext;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>6.
ФИЛИАЛЫ И ПРЕДСТАВИТЕЛЬСТВА<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>6.1. Общество может создавать филиалы и
открывать представительства по решению общего собрания<span
style='mso-spacerun:yes'>   </span>участников Общества. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>6.2. Создание Обществом<span
style='mso-spacerun:yes'>  </span>филиалов и открытие представительств за
пределами территории Российской Федерации осуществляются в соответствии<span
style='mso-spacerun:yes'>  </span>с<span style='mso-spacerun:yes'> 
</span>законодательством иностранного<span style='mso-spacerun:yes'> 
</span>государства<span style='mso-spacerun:yes'>  </span>по<span
style='mso-spacerun:yes'>  </span>месту нахождения филиалов и
представительств,<span style='mso-spacerun:yes'>  </span>если<span
style='mso-spacerun:yes'>  </span>иное не предусмотрено международным договором
Российской Федерации.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:48.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>6.3. Филиалом<span
style='mso-spacerun:yes'>  </span>Общества<span style='mso-spacerun:yes'> 
</span>является его обособленное подразделение,<span style='mso-spacerun:yes'> 
</span>расположенное вне места нахождения Общества и осуществляющее все его
функции,<span style='mso-spacerun:yes'>  </span>в том числе функции
представительства, или их часть.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:48.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>  </span>6.4. Представительством
Общества является его обособленное подразделение, расположенное<span
style='mso-spacerun:yes'>  </span>вне<span style='mso-spacerun:yes'> 
</span>места нахождения Общества,<span style='mso-spacerun:yes'> 
</span>представляющее интересы Общества и осуществляющее их защиту.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:48.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>6.5. Филиал<span
style='mso-spacerun:yes'>  </span>и<span style='mso-spacerun:yes'> 
</span>представительство не являются юридическими лицами,<span
style='mso-spacerun:yes'>  </span>действуют на основании утвержденного
Обществом положения. Филиал и представительство наделяются создавшим их
Обществом имуществом. Руководитель филиала<span style='mso-spacerun:yes'> 
</span>и руководитель представительства назначаются Обществом и<span
style='mso-spacerun:yes'>  </span>действуют на основании доверенности, выданной
Обществом.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:48.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>6.6. Филиал и
представительство осуществляют деятельность от имени Общества.<span
style='mso-spacerun:yes'>  </span>Ответственность за деятельность филиала и
представительства несет Общество.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:48.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>6.7. Устав Общества
должен содержать сведения о его филиалах и<span style='mso-spacerun:yes'> 
</span>представительствах.<span style='mso-spacerun:yes'>  </span>Сообщения об
изменениях в уставе Общества, связанных с изменением сведений о его филиалах и
представительствах, представляются органу государственной регистрации
юридических лиц в уведомительном порядке. Указанные изменения в уставе Общества
вступают в силу для третьих лиц с момента уведомления.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>7.<span
style='mso-spacerun:yes'>  </span>ДОЧЕРНИЕ И ЗАВИСИМЫЕ ОБЩЕСТВА<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;tab-stops:30.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>7.1. Общество может
иметь дочерние и зависимые Общества с<span style='mso-spacerun:yes'> 
</span>правами<span style='mso-spacerun:yes'>  </span>юридического лица на
территории<span style='mso-spacerun:yes'>  </span>Российской Федерации,<span
style='mso-spacerun:yes'>  </span>созданные в соответствии Федеральными
законами,<span style='mso-spacerun:yes'>  </span>а за пределами территории<span
style='mso-spacerun:yes'>  </span>Российской Федерации - в соответствии с
законодательством иностранного государства по<span style='mso-spacerun:yes'> 
</span>месту нахождения дочернего или зависимого Обществ, если иное не
предусмотрено международным<span style='mso-spacerun:yes'>  </span>договором
Российской Федерации.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:30.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>  </span>7.2. Общество
признается дочерним, если другое (основное) хозяйственное Общество<span
style='mso-spacerun:yes'>  </span>в силу преобладающего участия в его уставном
капитале, либо в соответствии с заключенным между ними договором,<span
style='mso-spacerun:yes'>  </span>либо иным образом имеет<span
style='mso-spacerun:yes'>  </span>возможность определять решения, принимаемые
таким Обществом.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:30.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>7.3.<span
style='mso-tab-count:1'>    </span>Дочернее Общество не отвечает по долгам
основного Общества . Основное Общество, которое имеет право давать дочернему
Обществу обязательные для последнего указания,<span style='mso-spacerun:yes'> 
</span>отвечает солидарно с дочерним<span style='mso-spacerun:yes'> 
</span>Обществом по сделкам,<span style='mso-spacerun:yes'>  </span>заключенным
последним во исполнение таких указаний. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:30.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>7.4.<span
style='mso-tab-count:1'>    </span> В случае<span style='mso-spacerun:yes'> 
</span>несостоятельности (банкротства) дочернего Общества по вине основного Общества,
последнее несет субсидиарную ответственность по<span style='mso-spacerun:yes'> 
</span>его<span style='mso-spacerun:yes'>  </span>долгам.<span
style='mso-spacerun:yes'>  </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:30.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>7.5.<span
style='mso-tab-count:1'>    </span>Участники дочернего Общества вправе
требовать<span style='mso-spacerun:yes'>  </span>возмещения<span
style='mso-spacerun:yes'>  </span>основным<span style='mso-spacerun:yes'> 
</span>Обществом убытков, причиненных по его вине дочернему Обществу. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>7.6. Общество признается зависимым,<span
style='mso-spacerun:yes'>  </span>если другое (преобладающее) хозяйственное<span
style='mso-spacerun:yes'>  </span>Общество<span style='mso-spacerun:yes'> 
</span>имеет более 20 процентов уставного капитала первого Общества.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>8.<span
style='mso-spacerun:yes'>  </span>УЧАСТНИК ОБЩЕСТВА<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>8.1. Участниками<span
style='mso-spacerun:yes'>  </span>Общества могут быть российские и иностранные
предприятия, Общественные организации,<span style='mso-spacerun:yes'> 
</span>являющиеся юридическими лицами,<span style='mso-spacerun:yes'>  </span>а
также российские и иностранные граждане.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>9.
ПРАВА<span style='mso-spacerun:yes'>   </span>УЧАСТНИКА<o:p></o:p></span></b></p>

<p class=MsoNormal><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>9.1. Участник Общества вправе:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:48.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>     </span>-<span
style='mso-spacerun:yes'>  </span>участвовать в управлении делами Общества в
порядке, определенном Федеральным законом и настоящим Уставом;<o:p></o:p></span></p>

<p class=MsoNormal style='mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><span
style='mso-spacerun:yes'>     </span>- получать<span
style='mso-spacerun:yes'>     </span>информацию<span
style='mso-spacerun:yes'>      </span>о деятельности<span
style='mso-spacerun:yes'>      </span>общества<span
style='mso-spacerun:yes'>       </span>и<span style='mso-spacerun:yes'> 
</span>знакомиться с<span style='mso-spacerun:yes'>  </span>его<span
style='mso-spacerun:yes'>  </span>бухгалтерскими книгами<span
style='mso-spacerun:yes'>  </span>и<span style='mso-spacerun:yes'> 
</span>иной<span style='mso-spacerun:yes'>  </span>документацией<span
style='mso-spacerun:yes'>  </span>в установленном<span
style='mso-spacerun:yes'>     </span>его<span style='mso-spacerun:yes'>     
</span>уставом<span style='mso-spacerun:yes'>  </span>порядке;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:48.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>     </span>-<span
style='mso-spacerun:yes'>  </span>принимать участие в распределении прибыли;<o:p></o:p></span></p>

<p class=MsoNormal style='mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-spacerun:yes'>     </span><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span
style='mso-spacerun:yes'>  </span>продать<span style='mso-spacerun:yes'>   
</span>или<span style='mso-spacerun:yes'>     </span>осуществить
отчуждение<span style='mso-spacerun:yes'>  </span>иным<span
style='mso-spacerun:yes'>   </span>образом<span style='mso-spacerun:yes'>  
</span>своей доли или<span style='mso-spacerun:yes'>  </span>части<span
style='mso-spacerun:yes'>  </span>доли<span style='mso-spacerun:yes'> 
</span>в<span style='mso-spacerun:yes'>  </span>уставном капитале<span
style='mso-spacerun:yes'>   </span>общества<span style='mso-spacerun:yes'>  
</span>одному<span style='mso-spacerun:yes'>   </span>или<span
style='mso-spacerun:yes'>  </span>нескольким<span style='mso-spacerun:yes'>  
</span>участникам<span style='mso-spacerun:yes'>    </span>данного общества<span
style='mso-spacerun:yes'>  </span>либо<span style='mso-spacerun:yes'> 
</span>другому<span style='mso-spacerun:yes'>   </span>лицу<span
style='mso-spacerun:yes'>   </span>в порядке,<span
style='mso-spacerun:yes'>        </span>предусмотренном Федеральным<span
style='mso-spacerun:yes'>  </span>законом<span style='mso-spacerun:yes'> 
</span>и уставом общества;<o:p></o:p></span></p>

<p class=MsoNormal style='mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><span
style='mso-spacerun:yes'>     </span>-<span style='mso-spacerun:yes'> 
</span>выйти<span style='mso-spacerun:yes'>   </span>из<span
style='mso-spacerun:yes'>   </span>общества<span style='mso-spacerun:yes'>   
</span>путем отчуждения<span style='mso-spacerun:yes'>  </span>своей<span
style='mso-spacerun:yes'>  </span>доли<span style='mso-spacerun:yes'> 
</span>обществу или<span style='mso-spacerun:yes'>    </span>потребовать<span
style='mso-spacerun:yes'>    </span>приобретения обществом<span
style='mso-spacerun:yes'>       </span>доли<span style='mso-spacerun:yes'>   
</span>в<span style='mso-spacerun:yes'>    </span>случаях,предусмотренных
Федеральным законом;<o:p></o:p></span></p>

<p class=MsoNormal style='mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none'><span style='font-size:9.0pt;font-family:"Courier New CYR"'><span
style='mso-spacerun:yes'> </span>- </span><span style='font-size:10.0pt;
mso-fareast-language:AR-SA'>дополнительные<span
style='mso-spacerun:yes'>          </span>права, предоставленные<span
style='mso-spacerun:yes'>      </span>определенному участнику<span
style='mso-spacerun:yes'>   </span>общества,<span style='mso-spacerun:yes'>  
</span>в<span style='mso-spacerun:yes'>   </span>случае<span
style='mso-spacerun:yes'>  </span>отчуждения<span style='mso-spacerun:yes'> 
</span>его<span style='mso-spacerun:yes'>  </span>доли<span
style='mso-spacerun:yes'>  </span>или<span style='mso-spacerun:yes'>  
</span>части доли<span style='mso-spacerun:yes'>  </span>к<span
style='mso-spacerun:yes'>  </span>приобретателю<span style='mso-spacerun:yes'> 
</span>доли<span style='mso-spacerun:yes'>   </span>или</span><span
style='font-size:10.0pt;mso-ansi-language:EN-US;mso-fareast-language:AR-SA'> </span><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'><span
style='mso-spacerun:yes'> </span>части доли не переходят</span><span
lang=EN-US style='font-size:10.0pt;mso-ansi-language:EN-US;mso-fareast-language:
AR-SA'>;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:48.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>     </span>-<span
style='mso-spacerun:yes'>  </span>получить часть имущества, оставшегося после
ликвидации Общества, или его стоимость;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>        </span>Участник Общества имеет также другие
права, предусмотренные Федеральным законом и настоящим Уставом.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>10.
ОБЯЗАННОСТИ УЧАСТНИКА</span></b><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>       </span>10.1. Участник Общества обязан:<o:p></o:p></span></p>

<p class=MsoNormal style='mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-spacerun:yes'>  </span>- <span
style='font-size:10.0pt;mso-fareast-language:AR-SA'>оплачивать<span
style='mso-spacerun:yes'>  </span>доли<span style='mso-spacerun:yes'> 
</span>в<span style='mso-spacerun:yes'>   </span>уставном капитале<span
style='mso-spacerun:yes'>  </span>общества<span style='mso-spacerun:yes'> 
</span>в<span style='mso-spacerun:yes'>  </span>порядке,<span
style='mso-spacerun:yes'>  </span>в размерах<span style='mso-spacerun:yes'> 
</span>и<span style='mso-spacerun:yes'>   </span>в<span
style='mso-spacerun:yes'>   </span>сроки,<span style='mso-spacerun:yes'>  
</span>которые предусмотрены<span style='mso-spacerun:yes'>  
</span>Федеральным<span style='mso-spacerun:yes'>  </span>законом;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:48.0pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>  </span><span
style='mso-spacerun:yes'> </span>-<span style='mso-spacerun:yes'>  </span>не
разглашать конфиденциальную информацию о деятельности Общества.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><span
style='mso-spacerun:yes'>   </span>- дополнительные<span
style='mso-spacerun:yes'>    </span>обязанности, возложенные<span
style='mso-spacerun:yes'>    </span>на<span style='mso-spacerun:yes'>   </span><span
style='mso-spacerun:yes'> </span>определенного участника<span
style='mso-spacerun:yes'>   </span>общества,<span style='mso-spacerun:yes'>  
</span>в<span style='mso-spacerun:yes'>   </span>случае отчуждения<span
style='mso-spacerun:yes'>  </span>его<span style='mso-spacerun:yes'> 
</span>доли<span style='mso-spacerun:yes'>  </span>или<span
style='mso-spacerun:yes'>   </span>части доли<span style='mso-spacerun:yes'> 
</span>к<span style='mso-spacerun:yes'>  </span>приобретателю<span
style='mso-spacerun:yes'>  </span>доли<span style='mso-spacerun:yes'>  
</span>или части доли не переходят.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>Участник несет и другие обязанности,
предусмотренные учредительными документами Общества и Федеральным законом.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>11.
УСТАВНЫЙ КАПИТАЛ<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'><span style='mso-spacerun:yes'>  </span>11.1. Уставный капитал общества
составляется из номинальной стоимости долей его участников. Размер уставного
капитала общества должен быть не менее чем десять тысяч рублей. </span><b
style='mso-bidi-font-weight:normal'>Уставный капитал Общества составляет <?php echo $kapital; echo " (".FloatToText($kapital,0).") "; ?>
<?php /* (Десять тысяч) */?><span style='mso-spacerun:yes'>  </span>рублей.</b><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>Уставный капитал Общества определяет минимальный размер его имущества,
гарантирующий интересы его кредиторов.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'><span style='mso-spacerun:yes'>  </span>11.2. Сведения о размере и
номинальной стоимости доли каждого участника общества вносятся в единый
государственный реестр юридических лиц в соответствии с федеральным законом о
государственной регистрации юридических лиц. При этом сведения о номинальной
стоимости долей участников общества при его учреждении определяются исходя из
положений договора об учреждении общества или решения единственного учредителя
общества, в том числе в случае, если эти доли не оплачены в полном объеме и
подлежат оплате в порядке и в сроки, которые предусмотрены<span
style='mso-spacerun:yes'>  </span>Федеральным законом.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><span
style='mso-spacerun:yes'> </span>11.3.<span style='mso-spacerun:yes'> 
</span>Каждый учредитель<span style='mso-spacerun:yes'>  </span>общества
должен<span style='mso-spacerun:yes'>  </span>оплатить<span
style='mso-spacerun:yes'>  </span>полностью<span style='mso-spacerun:yes'>  
</span>свою долю в уставном капитале<span style='mso-spacerun:yes'> 
</span>общества<o:p></o:p></span></p>

<p class=MsoNormal style='mso-pagination:none;mso-layout-grid-align:none;
text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><span
style='mso-spacerun:yes'> </span>в<span style='mso-spacerun:yes'>   
</span>течение<span style='mso-spacerun:yes'>    </span>срока,<span
style='mso-spacerun:yes'>     </span>который определен договором об<span
style='mso-spacerun:yes'>  </span>учреждении общества или в<span
style='mso-spacerun:yes'>  </span>случае<span style='mso-spacerun:yes'> 
</span>учреждения общества одним лицом<span style='mso-spacerun:yes'> 
</span>решением<span style='mso-spacerun:yes'>  </span>об учреждении<span
style='mso-spacerun:yes'>  </span>общества<span style='mso-spacerun:yes'> 
</span>и<span style='mso-spacerun:yes'>  </span>не<span
style='mso-spacerun:yes'>  </span>может превышать<span
style='mso-spacerun:yes'>  </span>один<span style='mso-spacerun:yes'> 
</span>год<span style='mso-spacerun:yes'>   </span>с<span
style='mso-spacerun:yes'>   </span>момента государственной<span
style='mso-spacerun:yes'>        </span>регистрации общества. При<span
style='mso-spacerun:yes'>  </span>этом<span style='mso-spacerun:yes'> 
</span>доля<span style='mso-spacerun:yes'>  </span>каждого учредителя<span
style='mso-spacerun:yes'>  </span>общества<span style='mso-spacerun:yes'> 
</span>может<span style='mso-spacerun:yes'>   </span>быть оплачена<span
style='mso-spacerun:yes'>  </span>по<span style='mso-spacerun:yes'> 
</span>цене<span style='mso-spacerun:yes'>  </span>не<span
style='mso-spacerun:yes'>   </span>ниже<span style='mso-spacerun:yes'>  
</span>ее номинальной стоимости. Не<span style='mso-spacerun:yes'> 
</span>допускается<span style='mso-spacerun:yes'>   </span>освобождение
учредителя<span style='mso-spacerun:yes'>       </span>общества<span
style='mso-spacerun:yes'>       </span>от обязанности<span
style='mso-spacerun:yes'>   </span>оплатить<span style='mso-spacerun:yes'>  
</span>долю<span style='mso-spacerun:yes'>    </span>в уставном капитале
общества, в<span style='mso-spacerun:yes'>  </span>том числе путем зачета
его<span style='mso-spacerun:yes'>  </span>требований к обществу.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>11.4. В случае неполной оплаты доли в уставном капитале общества в
течение срока, определяемого в соответствии с пунктом 11.3 настоящей статьи,
неоплаченная часть доли переходит к обществу. Такая часть доли должна быть
реализована обществом в порядке и в сроки, которые установлены статьей 15 настоящего
Устава.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span><span style='mso-spacerun:yes'>     </span><span
style='mso-spacerun:yes'> </span>Дополнительными вкладами в Уставный капитал
Общества могут быть здания,<span style='mso-spacerun:yes'>  </span>сооружения,
оборудование и другие материальные ценности,<span style='mso-spacerun:yes'> 
</span>ценные бумаги, права пользования землей, водой и другими природными
ресурсами, а также иные имущественные и неимущественные права (в том числе на
интеллектуальную собственность), денежные средства.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>12.
УВЕЛИЧЕНИЕ УСТАВНОГО КАПИТАЛА<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span lang=EN-US style='font-size:10.0pt;mso-ansi-language:
EN-US;mso-fareast-language:AR-SA'>12.</span><span style='font-size:10.0pt;
mso-fareast-language:AR-SA'>1. Увеличение уставного капитала общества
допускается только после его полной оплаты.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span lang=EN-US style='font-size:10.0pt;mso-ansi-language:
EN-US;mso-fareast-language:AR-SA'>12.</span><span style='font-size:10.0pt;
mso-fareast-language:AR-SA'>2. Увеличение уставного капитала общества может
осуществляться за счет имущества общества, и (или) за счет дополнительных
вкладов участников общества, и (или), если это не запрещено уставом общества,
за счет вкладов третьих лиц, принимаемых в общество.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>12.3.1 Увеличение уставного капитала общества за счет его имущества
осуществляется по решению общего собрания участников общества, принятому
большинством не менее двух третей голосов от общего числа голосов участников
общества. Решение об увеличении уставного капитала общества за счет имущества
общества может быть принято только на основании данных бухгалтерской отчетности
общества за год, предшествующий году, в течение которого принято такое решение.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>12.3.2 Сумма, на которую увеличивается уставный капитал общества за счет
имущества общества, не должна превышать разницу между стоимостью чистых активов
общества и суммой уставного капитала и резервного фонда общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>12.3.3. При увеличении уставного капитала общества в соответствии с
настоящей статьей пропорционально увеличивается номинальная стоимость долей
всех участников общества без изменения размеров их долей.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>12.3.4. Заявление и иные документы для государственной регистрации
изменений, вносимых в устав общества в связи с увеличением уставного капитала
общества, а также изменений номинальной стоимости долей участников общества
должны быть представлены в орган, осуществляющий государственную регистрацию
юридических лиц, в течение месяца со дня принятия решения об увеличении
уставного капитала общества за счет его имущества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>12.4.1. Общее собрание участников общества большинством не менее двух
третей голосов от общего числа голосов участников общества, если необходимость
большего числа голосов для принятия такого решения не предусмотрена уставом
общества, может принять решение об увеличении уставного капитала общества за
счет внесения дополнительных вкладов участниками общества. Таким решением
должна быть определена общая стоимость дополнительных вкладов, а также
установлено единое для всех участников общества соотношение между стоимостью
дополнительного вклада участника общества и суммой, на которую увеличивается
номинальная стоимость его доли. Указанное соотношение устанавливается исходя из
того, что номинальная стоимость доли участника общества может увеличиваться на
сумму, равную или меньшую стоимости его дополнительного вклада.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Каждый участник общества вправе внести
дополнительный вклад, не превышающий части общей стоимости дополнительных
вкладов, пропорциональной размеру доли этого участника в уставном капитале
общества. Дополнительные вклады могут быть внесены участниками общества в
течение двух месяцев со дня принятия общим собранием участников общества
решения, указанного в абзаце первом настоящего пункта, если уставом общества
или решением общего собрания участников общества не установлен иной срок.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Не позднее месяца со дня окончания срока
внесения дополнительных вкладов общее собрание участников общества должно
принять решение об утверждении итогов внесения дополнительных вкладов
участниками общества и о внесении в устав общества изменений, связанных с
увеличением размера уставного капитала общества. При этом номинальная стоимость
доли каждого участника общества, внесшего дополнительный вклад, увеличивается в
соответствии с указанным в абзаце первом настоящего пункта соотношением.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>12.4.2. Общее собрание участников общества может принять решение об
увеличении его уставного капитала на основании заявления участника общества (заявлений
участников общества) о внесении дополнительного вклада и (или), если это не
запрещено уставом общества, заявления третьего лица (заявлений третьих лиц) о
принятии его в общество и внесении вклада. Такое решение принимается всеми
участниками общества единогласно.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>В заявлении участника общества и в заявлении
третьего лица должны быть указаны размер и состав вклада, порядок и срок его
внесения, а также размер доли, которую участник общества или третье лицо хотели
бы иметь в уставном капитале общества. В заявлении могут быть указаны и иные
условия внесения вкладов и вступления в общество.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Одновременно с решением об увеличении
уставного капитала общества на основании заявления участника общества или
заявлений участников общества о внесении им или ими дополнительного вклада
должно быть принято решение о внесении в устав общества изменений в связи с
увеличением уставного капитала общества, а также решение об увеличении
номинальной стоимости доли участника общества или долей участников общества,
подавших заявления о внесении дополнительного вклада, и в случае необходимости
решение об изменении размеров долей участников общества. Такие решения
принимаются всеми участниками общества единогласно. При этом номинальная
стоимость доли каждого участника общества, подавшего заявление о внесении
дополнительного вклада, увеличивается на сумму, равную или меньшую стоимости
его дополнительного вклада.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Одновременно с решением об увеличении
уставного капитала общества на основании заявления третьего лица или заявлений
третьих лиц о принятии его или их в общество и внесении вклада должны быть
приняты решения о принятии его или их в общество, о внесении в устав общества
изменений в связи с увеличением уставного капитала общества, об определении
номинальной стоимости и размера доли или долей третьего лица или третьих лиц, а
также об изменении размеров долей участников общества. Такие решения
принимаются всеми участниками общества единогласно. Номинальная стоимость доли,
приобретаемой каждым третьим лицом, принимаемым в общество, не должна быть
больше стоимости его вклада.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Внесение дополнительных вкладов участниками
общества и вкладов третьими лицами должно быть осуществлено не позднее чем в
течение шести месяцев со дня принятия общим собранием участников общества
предусмотренных настоящим пунктом решений.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>12.4.3. В течение трех лет с момента
государственной регистрации соответствующих изменений в уставе общества
участники общества солидарно несут при недостаточности имущества общества
субсидиарную ответственность по его обязательствам в размере стоимости
невнесенных дополнительных вкладов.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>12.4.4. Заявление и иные документы для
государственной регистрации предусмотренных настоящей статьей изменений в связи
с увеличением уставного капитала общества, увеличением номинальной стоимости долей
участников общества, внесших дополнительные вклады, принятием третьих лиц в
общество, определением номинальной стоимости и размера их долей и в случае
необходимости с изменением размеров долей участников общества, а также
документы, подтверждающие внесение в полном объеме участниками общества
дополнительных вкладов или вкладов третьими лицами, должны быть представлены в
орган, осуществляющий государственную регистрацию юридических лиц, в течение
месяца со дня принятия решения об утверждении итогов внесения дополнительных
вкладов участниками общества в соответствии с пунктом 12.4.1. <span
style='mso-spacerun:yes'> </span>настоящей статьи либо внесения дополнительных
вкладов участниками общества или третьими лицами на основании их заявлений.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>12.5. В случае несоблюдения сроков,
предусмотренных настоящей статьей, увеличение уставного капитала общества
признается несостоявшимся.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>12.6. Если увеличение уставного капитала
общества не состоялось, общество обязано в разумный срок вернуть участникам
общества и третьим лицам, которые внесли вклады деньгами, их вклады, а в случае
невозврата вкладов в указанный срок также уплатить проценты в порядке и в
сроки, предусмотренные статьей 395 Гражданского кодекса Российской Федерации.<span
style='mso-spacerun:yes'>  </span>Участникам общества и третьим лицам, которые
внесли неденежные вклады, общество обязано в разумный срок вернуть их вклады, а
в случае невозврата вкладов в указанный срок также возместить упущенную выгоду,
обусловленную невозможностью использовать внесенное в качестве вклада
имущество.<o:p></o:p></span></p>

<p class=1 align=center style='margin-right:-2.9pt;text-align:center;
background:#BFBFBF'><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Times New Roman"'>13.<span style='mso-spacerun:yes'> 
</span>УМЕНЬШЕНИЕ УСТАВНОГО КАПИТАЛА<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-right:-2.9pt;text-align:justify;tab-stops:18.0pt'><span
style='font-family:"Times New Roman"'>13.1. Общество вправе, а в случаях,
предусмотренных настоящим Федеральным законом, обязано уменьшить свой уставный
капитал.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-2.9pt;text-align:justify;tab-stops:18.0pt'><span
style='font-family:"Times New Roman"'>Уменьшение уставного капитала общества
может осуществляться путем уменьшения номинальной стоимости долей всех
участников общества в уставном капитале общества и (или) погашения долей,
принадлежащих обществу.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-2.9pt;text-align:justify;tab-stops:18.0pt'><span
style='font-family:"Times New Roman"'>Общество не вправе уменьшать свой
уставный капитал, если в результате такого уменьшения его размер станет меньше
минимального размера уставного капитала, определенного в соответствии с настоящим
Федеральным законом на дату представления документов для государственной
регистрации соответствующих изменений в уставе общества, а в случаях, если в
соответствии с настоящим Федеральным законом общество обязано уменьшить свой
уставный капитал, на дату государственной регистрации общества.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-2.9pt;text-align:justify;tab-stops:18.0pt'><span
style='font-family:"Times New Roman"'>Уменьшение уставного капитала общества
путем уменьшения номинальной стоимости долей всех участников общества должно
осуществляться с сохранением размеров долей всех участников общества.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-2.9pt;text-align:justify;tab-stops:18.0pt'><span
style='font-family:"Times New Roman"'>13.2. В течение тридцати дней с даты
принятия решения об уменьшении своего уставного капитала общество обязано
письменно уведомить об уменьшении уставного капитала общества и о его новом
размере всех известных ему кредиторов общества, а также опубликовать в органе
печати, в котором публикуются данные о государственной регистрации юридических
лиц, сообщение о принятом решении. При этом кредиторы общества вправе в течение
тридцати дней с даты направления им уведомления или в течение тридцати дней с
даты опубликования сообщения о принятом решении письменно потребовать
досрочного прекращения или исполнения соответствующих обязательств общества и
возмещения им убытков.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-2.9pt;text-align:justify;tab-stops:18.0pt'><span
style='font-family:"Times New Roman"'>Документы для государственной регистрации
вносимых в устав общества изменений в связи с уменьшением уставного капитала
общества и изменения номинальной стоимости долей участников общества должны
быть представлены в орган, осуществляющий государственную регистрацию
юридических лиц, в течение одного месяца с даты направления кредиторам
последнего уведомления об уменьшении уставного капитала общества и о его новом
размере.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-2.9pt;text-align:justify;tab-stops:18.0pt'><span
style='font-family:"Times New Roman"'>13.3. Если в случаях, предусмотренных
настоящей статьей, общество в разумный срок не примет решение об уменьшении
своего уставного капитала или о своей ликвидации, кредиторы вправе потребовать
от общества досрочного прекращения или исполнения обязательств общества и
возмещения им убытков. Орган, осуществляющий государственную регистрацию
юридических лиц, либо иные государственные органы или органы местного
самоуправления, которым право на предъявление такого требования предоставлено
федеральным законом, в этих случаях вправе предъявить требование в суд о
ликвидации общества.<o:p></o:p></span></p>

<p class=1 align=center style='margin-right:-2.9pt;text-align:center;
tab-stops:18.0pt;background:#BFBFBF'><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Times New Roman"'>14.<span style='mso-tab-count:1'>  </span>ПЕРЕХОД<span
style='mso-spacerun:yes'>  </span>ДОЛИ ИЛИ ЧАСТИ ДОЛИ<span
style='mso-spacerun:yes'>  </span>УЧАСТНИКА ОБЩЕСТВА В УСТАВНОМ<o:p></o:p></span></b></p>

<p class=1 align=center style='margin-right:-2.9pt;text-align:center;
background:#BFBFBF'><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Times New Roman"'>КАПИТАЛЕ ОБЩЕСТВА К ДРУГИМ УЧАСТНИКАМ
ОБЩЕСТВА И ТРЕТЬИМ ЛИЦАМ<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.1. Переход доли или части доли в уставном
капитале общества к одному или нескольким участникам данного общества либо к
третьим лицам осуществляется на основании сделки, в порядке правопреемства или
на ином законном основании.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.2. Участник общества вправе продать или осуществить
отчуждение иным образом своей доли или части доли в уставном капитале общества
одному или нескольким участникам данного общества. Согласие других участников
общества или общества на совершение такой сделки не требуется.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.3. Продажа либо отчуждение иным образом
доли или части доли в уставном капитале общества третьим лицам разрешена.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.4. Доля участника общества может быть
отчуждена до полной ее оплаты только в части, в которой она оплачена.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.5. Участники общества пользуются
преимущественным правом покупки доли или части доли участника общества по цене
предложения третьему лицу.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.6. Участники общества или Общество могут
воспользоваться преимущественным правом покупки не всей доли или не всей части
доли в уставном капитале общества, предлагаемой для продажи. При этом
оставшаяся доля или часть доли может быть продана третьему лицу после частичной
реализации указанного права Обществом или его участниками по цене и на условиях,
которые были сообщены Обществу и его участникам. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.7 Участники общества могут
воспользоваться преимущественным правом покупки доли или части доли в уставном
капитале общества всем участникам общества непропорционально размерам их долей.<span
style='color:red'> <o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.8. Общество вправе воспользоваться
преимущественным правом покупки доли или части доли в уставном капитале
общества в течение 30 (Тридцати) дней с даты получения оферты Обществом.<span
style='color:red'><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.9. Участник общества, намеренный продать
свою долю или часть доли в уставном капитале общества третьему лицу, обязан
известить в письменной форме об этом остальных участников общества и само
общество путем направления через общество за свой счет оферты, адресованной
этим лицам и содержащей указание цены и других условий продажи. Оферта о
продаже доли или части доли в уставном капитале общества считается полученной
всеми участниками общества в момент ее получения обществом. При этом она может
быть акцептована лицом, являющимся участником общества на момент акцепта, а
также обществом в случаях, предусмотренных настоящим Федеральным законом.
Оферта считается неполученной, если в срок не позднее дня ее получения
обществом участнику общества поступило извещение о ее отзыве. Отзыв оферты о
продаже доли или части доли после ее получения обществом допускается только с
согласия всех участников общества, если иное не предусмотрено уставом общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.10. Участники общества вправе
воспользоваться преимущественным правом покупки доли или части доли в уставном
капитале общества в течение 30 (Тридцати) дней с даты получения оферты Обществом.
<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.11. При отказе отдельных участников
общества от использования преимущественного права покупки доли или части доли в
уставном капитале общества либо использовании ими преимущественного права
покупки не всей предлагаемой для продажи доли или не всей предлагаемой для
продажи части доли другие участники общества могут реализовать преимущественное
право покупки доли или части доли в уставном капитале общества в
соответствующей части пропорционально размерам своих долей в пределах
оставшейся части срока реализации ими преимущественного права покупки доли или
части доли.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14. 12. Преимущественное право покупки доли
или части доли в уставном капитале общества у участника и преимущественное
право покупки Обществом доли или части доли у общества прекращаются в день:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>представления составленного в письменной
форме заявления об отказе от использования данного преимущественного права в
порядке, предусмотренном настоящим пунктом;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>истечения срока использования данного
преимущественного права.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Заявления участников общества об отказе от
использования преимущественного права покупки доли или части доли должны
поступить в общество до истечения срока осуществления указанного
преимущественного права, установленного в соответствии с пунктами 14.8.<span
style='mso-spacerun:yes'>  </span>и 14.10. настоящей статьи. Заявление общества
об отказе от использования предусмотренного уставом преимущественного права
покупки доли или части доли в уставном капитале общества представляется в
установленный уставом срок участнику общества, направившему оферту о продаже
доли или части доли, единоличным исполнительным органом общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14. 13. <span
style='mso-spacerun:yes'> </span>В случае, если в течение 30 (Тридцати) дней с
даты получения оферты обществом участники общества или Общество не
воспользуются преимущественным правом покупки доли или части доли в уставном
капитале общества, предлагаемых для продажи, в том числе образующихся в
результате использования преимущественного права покупки не всей доли или не
всей части доли либо отказа отдельных участников общества и общества от
преимущественного права покупки доли или части доли в уставном капитале
общества, оставшиеся доля или часть доли могут быть проданы третьему лицу по
цене, которая не ниже установленной в оферте для общества и его участников
цены, и на условиях, которые были сообщены обществу и его участникам, или по
цене, которая не ниже заранее определенной уставом цены. В случае, если заранее
определенная цена покупки доли или части доли обществом отличается от заранее
определенной цены покупки доли или части доли участниками общества, доля или
часть доли в уставном капитале общества может быть продана третьему лицу по
цене, которая не ниже заранее определенной цены покупки доли или части доли
обществом.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.14. Доли в уставном капитале общества
переходят к наследникам граждан и к правопреемникам юридических лиц, являвшихся
участниками общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>До принятия наследником умершего участника
общества наследства управление его долей в уставном капитале общества
осуществляется в порядке, предусмотренном Гражданским кодексом Российской
Федерации.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.15. При продаже доли или части доли в
уставном капитале общества с публичных торгов права и обязанности участника
общества по таким доле или части доли переходят с согласия участников общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.16. Сделка, направленная на отчуждение
доли или части доли в уставном капитале общества, подлежит нотариальному
удостоверению. Несоблюдение нотариальной формы указанной сделки влечет за собой
ее недействительность. Нотариальное удостоверение не требуется в случае
перехода доли к обществу в порядке, предусмотренном статьей 23, пунктом 2
статьи 26 </span><span style='font-size:10.0pt;mso-bidi-font-size:10.0pt'>Федерального
закона РФ &quot;Об обществах с ограниченной ответственностью&quot; № 14-ФЗ</span><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'>, а также распределения
доли между участниками общества и продажи доли всем или некоторым участникам
общества либо третьим лицам в соответствии со статьей 24 </span><span
style='font-size:10.0pt;mso-bidi-font-size:10.0pt'>Федерального закона РФ
&quot;Об обществах с ограниченной ответственностью&quot; № 14-ФЗ.</span><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.17. Доля или часть доли в уставном
капитале общества переходит к ее приобретателю с момента нотариального
удостоверения сделки, направленной на отчуждение доли или части доли в уставном
капитале общества, либо в случаях, не требующих нотариального удостоверения, с
момента внесения в единый государственный реестр юридических лиц
соответствующих изменений на основании правоустанавливающих документов.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>К приобретателю доли или части доли в
уставном капитале общества переходят все права и обязанности участника
общества, возникшие до совершения сделки, направленной на отчуждение указанной
доли или части доли в уставном капитале общества, или до возникновения иного
основания ее перехода, за исключением прав и обязанностей, предусмотренных
соответственно абзацем вторым пункта 2 статьи 8 и абзацем вторым пункта 2
статьи 9 </span><span style='font-size:10.0pt;mso-bidi-font-size:10.0pt'>Федерального
закона РФ &quot;Об обществах с ограниченной ответственностью&quot; № 14-ФЗ</span><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'> Участник общества,
осуществивший отчуждение своей доли или части доли в уставном капитале
общества, несет перед обществом обязанность по внесению вклада в имущество,
возникшую до совершения сделки, направленной на отчуждение указанных доли или
части доли в уставном капитале общества, солидарно с ее приобретателем.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>После нотариального удостоверения сделки,
направленной на отчуждение доли или части доли в уставном капитале общества,
либо в случаях, не требующих нотариального удостоверения, с момента внесения
соответствующих изменений в единый государственный реестр юридических лиц переход
доли или части доли может быть оспорен только в судебном порядке путем
предъявления иска в арбитражный суд.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.18. Нотариус, совершающий нотариальное
удостоверение сделки, направленной на отчуждение доли или части доли в уставном
капитале общества, проверяет полномочие отчуждающего их лица на распоряжение
такими долей или частью доли.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Полномочие лица, отчуждающего долю или часть
доли в уставном капитале общества, на распоряжение ими подтверждается
нотариально удостоверенным договором, на основании которого такие доля или
часть доли ранее были приобретены соответствующим лицом, а также выпиской из
единого государственного реестра юридических лиц, содержащей сведения о
принадлежности лицу доли или части доли в уставном капитале общества и об их
размере. Если лицо, отчуждающее долю или часть доли в уставном капитале
общества, для подтверждения полномочия на распоряжение такими долей или частью
доли представляет дубликат нотариально удостоверенного договора, указанная
выписка должна быть составлена не ранее чем за десять дней до дня обращения к
нотариусу для нотариального удостоверения сделки. Если доля или часть доли была
получена в порядке правопреемства или в иных случаях, не требующих или ранее не
требовавших нотариального удостоверения, полномочие лица, отчуждающего такие
долю или часть доли в уставном капитале общества, на распоряжение ими
подтверждается документом о переходе доли или части доли в порядке
правопреемства или документом, выражающим содержание сделки, совершенной в
простой письменной форме, либо при создании общества одним лицом решением
единственного учредителя (участника) о создании общества, а также выпиской из
единого государственного реестра юридических лиц, составленной не ранее чем за
тридцать дней до дня обращения к нотариусу для нотариального удостоверения
сделки. В случае, если доля или часть доли в уставном капитале общества
отчуждается учредителем общества, учрежденного несколькими лицами, его
полномочия подтверждаются нотариально удостоверенной копией договора об
учреждении общества, а также выпиской из единого государственного реестра
юридических лиц, составленной не ранее чем в течение тридцати дней до дня
обращения к нотариусу для нотариального удостоверения сделки.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Нотариус, совершающий нотариальное
удостоверение сделки, направленной на отчуждение доли или части доли в уставном
капитале общества, проставляет на нотариально удостоверенном договоре, на
основании которого отчуждаемые доля или часть доли ранее были приобретены,
отметку о совершении сделки по переходу таких доли или части доли.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.19. После нотариального удостоверения
сделки, направленной на отчуждение доли или части доли в уставном капитале
общества, нотариус, совершивший ее нотариальное удостоверение, в срок не
позднее чем в течение трех дней со дня такого удостоверения совершает
нотариальное действие по передаче в орган, осуществляющий государственную
регистрацию юридических лиц, заявления о внесении соответствующих изменений в
единый государственный реестр юридических лиц, подписанного участником
общества, отчуждающим долю или часть доли, с приложением соответствующего
договора или иного выражающего содержание односторонней сделки и
подтверждающего основание перехода доли или части доли документа.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Если по условиям сделки, направленной на
отчуждение доли или части доли в уставном капитале общества, такие доля или
часть доли переходят к приобретателю с установлением одновременно залога или
иных обременений, в заявлении о внесении соответствующих изменений в единый
государственный реестр юридических лиц, подписываемом участником общества,
отчуждающим долю или часть доли, указываются соответствующие обременения.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Заявление может быть направлено по почте с
уведомлением о вручении, представлено непосредственно в орган, осуществляющий
государственную регистрацию юридических лиц, а также направлено с
использованием факсимильной связи, компьютерных сетей и иных технических
средств, если порядок такой передачи заявления определен Правительством
Российской Федерации.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Соглашением сторон сделки, направленной на
отчуждение доли в уставном капитале общества и составленной в письменной форме,
может быть определен способ передачи указанного заявления с учетом требований
настоящей статьи.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.20. В срок не позднее чем в течение трех
дней с момента нотариального удостоверения сделки, направленной на отчуждение
доли или части доли в уставном капитале общества, нотариус, совершивший ее
нотариальное удостоверение, совершает нотариальное действие по передаче
обществу, отчуждение доли или части доли в уставном капитале которого
осуществляется, копии заявления, предусмотренного пунктом 14.21. <span
style='mso-spacerun:yes'> </span>настоящей статьи, с приложением
соответствующего договора или выражающего содержание односторонней сделки и
подтверждающего основание для перехода доли или части доли документа.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>По соглашению лиц, совершающих сделку,
направленную на отчуждение доли или части доли в уставном капитале общества,
общество, отчуждение доли или части доли в уставном капитале которого
осуществляется, может быть уведомлено об этом одним из указанных лиц,
совершающих сделку. В таком случае нотариус не несет ответственность за
неуведомление общества о совершенной сделке.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.21. В течение трех дней с момента
получения согласия участников общества, предусмотренного пунктом 14.15. настоящей
статьи, общество и орган, осуществляющий государственную регистрацию
юридических лиц, должны быть извещены о переходе доли или части доли в уставном
капитале общества путем направления заявления о внесении соответствующих
изменений в единый государственный реестр юридических лиц, подписанного
правопреемником реорганизованного юридического лица - участника общества, либо
участником ликвидированного юридического лица - участника общества, либо
собственником имущества ликвидированного учреждения, государственного или
муниципального унитарного предприятия - участника общества, либо наследником
или до принятия наследства исполнителем завещания, либо нотариусом, с
приложением документа, подтверждающего основание для перехода прав и
обязанностей в порядке правопреемства или передачи доли или части доли в
уставном капитале общества, принадлежавших ликвидированному юридическому лицу,
его учредителям (участникам), имеющим вещные права на имущество или
обязательственные права в отношении этого юридического лица.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.22. Если доля или часть доли в уставном
капитале общества возмездно приобретена у лица, которое не имело права ее
отчуждать, о чем приобретатель не знал и не мог знать (добросовестный
приобретатель), лицо, утратившее долю или часть доли, вправе требовать
признания за ним права на данные долю или часть доли в уставном капитале
общества с одновременным лишением права на данные долю или часть доли
добросовестного приобретателя при условии, что данные доля или часть доли были
утрачены в результате противоправных действий третьих лиц или иным путем помимо
воли лица, утратившего долю или часть доли.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>В случае отказа лицу, утратившему долю или
часть доли в уставном капитале общества, в удовлетворении указанного иска,
предъявленного добросовестному приобретателю, доля или часть доли признается
принадлежащей добросовестному приобретателю с момента нотариального
удостоверения соответствующей сделки, послужившей основанием приобретения таких
доли или части доли. В случае, если доля или часть доли приобретена
добросовестным приобретателем на публичных торгах, она признается принадлежащей
добросовестному приобретателю с момента внесения соответствующей записи в
единый государственный реестр юридических лиц.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Требование о признании за лицом, утратившим
долю или часть доли, права на данные долю или часть доли и одновременно о
лишении права на данные долю или часть доли добросовестного приобретателя,
которое предусмотрено настоящим пунктом, может быть заявлено в течение трех лет
со дня, когда лицо, утратившее долю или часть доли, узнало или должно было
узнать о нарушении своих прав.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.23. При продаже доли или части доли в
уставном капитале общества с нарушением преимущественного права покупки доли
или части доли любые участник или участники общества либо Общество в течение
трех месяцев со дня, когда участник или участники общества либо общество узнали
или должны были узнать о таком нарушении, вправе потребовать в судебном порядке
перевода на них прав и обязанностей покупателя. Арбитражный суд,
рассматривающий дело по указанному иску, обеспечивает другим участникам
общества и Обществу возможность присоединиться к ранее заявленному иску, для
чего в определении о подготовке дела к судебному разбирательству устанавливает
срок, в течение которого другие участники общества и само общество могут
присоединиться к заявленному требованию. Указанный срок не может составлять
менее чем два месяца.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Решение суда о передаче доли или части доли
участнику общества или обществу является основанием для государственной
регистрации вносимых в единый государственный реестр юридических лиц
соответствующих изменений.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.24. В случае отчуждения либо перехода
доли или части доли в уставном капитале общества по иным основаниям к третьим
лицам с нарушением порядка получения согласия участников общества или общества,
предусмотренного настоящей статьей, а также в случае нарушения запрета на
продажу или отчуждение иным образом доли или части доли участник или участники
общества либо общество вправе потребовать в судебном порядке передачи доли или
части доли Обществу в течение трех месяцев со дня, когда они узнали или должны
были узнать о таком нарушении. При этом в случае передачи доли или части доли
обществу расходы, понесенные приобретателем доли или части доли в связи с ее
приобретением, возмещаются лицом, которое произвело отчуждение доли или части
доли с нарушением указанного порядка.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Решение суда о передаче доли или части доли
обществу является основанием государственной регистрации соответствующего
изменения. Такие доля или часть доли в уставном капитале общества должны быть
реализованы обществом в порядке и в сроки, которые установлены статьей 15
настоящего устава.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.25. В случае принятия общим собранием
участников общества решения о совершении крупной сделки или об увеличении
уставного капитала общества в соответствии с пунктом 12.4.1.<span
style='mso-spacerun:yes'>  </span>статьи 12 настоящего Устава Общество обязано
приобрести по требованию участника общества, голосовавшего против принятия
такого решения или не принимавшего участия в голосовании, долю в уставном
капитале общества, принадлежащую этому участнику. Данное требование может быть
предъявлено участником общества в течение сорока пяти дней со дня, когда
участник общества узнал или должен был узнать о принятом решении. В случае,
если участник общества принимал участие в общем собрании участников общества,
принявшем такое решение, подобное требование может быть предъявлено в течение
сорока пяти дней со дня его принятия.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>В случае, предусмотренном абзацем первым
настоящего пункта, в течение 1 (Одного) года со дня возникновения
соответствующей обязанности, оно обязано выплатить участнику общества
действительную стоимость его доли в уставном капитале общества, определенную на
основании данных бухгалтерской отчетности общества за последний отчетный
период, предшествующий дню обращения участника общества с соответствующим
требованием, или с согласия участника общества выдать ему в натуре имущество
такой же стоимости. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.26. Доля участника общества, исключенного
из общества, переходит к обществу. При этом общество обязано выплатить
исключенному участнику общества действительную стоимость его доли, которая
определяется по данным бухгалтерской отчетности общества за последний отчетный
период, предшествующий дате вступления в законную силу решения суда об
исключении, или с согласия исключенного участника общества выдать ему в натуре
имущество такой же стоимости.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.27. В случае если предусмотренное в
соответствии с пунктом 14.15. настоящей статьи<span style='mso-spacerun:yes'> 
</span>согласие участников общества на переход доли или части доли не получено,
доля или часть доли переходит к обществу в день, следующий за датой истечения
срока установленного <span style='mso-spacerun:yes'> </span>уставом общества
для получения такого согласия участников общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>При этом общество обязано выплатить<span
style='mso-spacerun:yes'>  </span>участнику общества или лицу, которое
приобрело долю или часть доли в уставном капитале общества на публичных торгах,
действительную стоимость доли или части доли, определенную на основании данных
бухгалтерской отчетности общества за последний отчетный период, предшествующий
дню приобретения доли или части доли на публичных торгах, либо с их согласия
выдать им в натуре имущество такой же стоимости.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>14.28. В случае выплаты обществом в
соответствии со статьей 25 </span><span style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'>Федерального закона РФ &quot;Об обществах с ограниченной
ответственностью&quot; № 14-ФЗ </span><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>действительной стоимости доли или части доли участника общества по
требованию его кредиторов часть доли, действительная стоимость которой не была
оплачена другими участниками общества, переходит к обществу, а остальная часть
доли распределяется между участниками общества пропорционально внесенной ими
плате.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'><span style='mso-spacerun:yes'>          </span>14.29. В случае выхода
участника общества из общества его доля переходит к обществу.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'><span style='mso-spacerun:yes'>          </span>14.30. Доля или часть
доли переходит к обществу с даты:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>1) получения обществом требования участника
общества о ее приобретении;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>2) получения обществом заявления участника
общества о выходе из общества, если право на выход из общества участника
предусмотрено уставом общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>3) истечения срока оплаты доли в уставном
капитале общества или предоставления компенсации, предусмотренной пунктом 15.7
статьи 15 настоящего Устава;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>4) вступления в законную силу решения суда
об исключении участника общества из общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>5) получения от любого участника общества
отказа от дачи согласия на переход доли или части доли в уставном капитале
общества к лицу, которое приобрело долю или часть доли в уставном капитале
общества на публичных торгах;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>6) оплаты обществом действительной стоимости
доли или части доли, принадлежащих участнику общества, по требованию его
кредиторов.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'><span style='mso-spacerun:yes'>         </span>14.31. Документы для
государственной регистрации соответствующих изменений должны быть представлены
в орган, осуществляющий государственную регистрацию юридических лиц, в течение
месяца со дня перехода доли или части доли к обществу. Указанные изменения
приобретают силу для третьих лиц с момента их государственной регистрации.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'><span style='mso-spacerun:yes'>        </span>14.32. В случае если
общество не вправе выплачивать действительную стоимость доли в уставном
капитале общества либо выдавать в натуре имущество такой же стоимости, общество
на основании заявления в письменной форме, поданного не позднее чем в течение
трех месяцев со дня истечения срока выплаты действительной стоимости доли
лицом, вышедшим из общества, вправе восстановить его как участника общества и
передать ему соответствующую долю в уставном капитале общества.<o:p></o:p></span></p>

<p class=1 style='margin-right:-2.9pt;text-align:justify;tab-stops:18.0pt'><span
style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=1 align=center style='margin-right:-2.9pt;text-align:center;
background:#BFBFBF'><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Times New Roman"'>15. ДОЛИ, ПРИНАДЛЕЖАЩИЕ ОБЩЕСТВУ<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>15.1.<span style='mso-spacerun:yes'> 
</span>Доли, принадлежащие Обществу, не учитываются при определении результатов
голосования на общем собрании участников Общества, при распределении прибыли
общества, также имущества общества в случае его ликвидации.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>15.2. В течение одного года со дня перехода
доли или части доли в уставном капитале общества к Обществу они должны быть по
решению общего собрания участников общества распределены между всеми
участниками общества пропорционально их долям в уставном капитале общества или
предложены для приобретения всем либо некоторым участникам общества и третьим
лицам.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>15.3. Распределение доли или части доли
между участниками общества допускается только в случае, если до перехода доли
или части доли к обществу они были оплачены или за них была предоставлена
компенсация, предусмотренная пунктом 15.7 настоящей статьи.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>15.4. Продажа неоплаченных доли или части
доли в уставном капитале общества, а также доли или части доли, принадлежащих
участнику общества, который не предоставил денежную или иную компенсацию в
порядке и в срок, которые предусмотрены пунктом 15.7 настоящей статьи,
осуществляется по цене, которая не ниже номинальной стоимости доли или части
доли. Продажа долей или частей долей, приобретенных обществом в соответствии с
настоящим Федеральным законом, в том числе долей вышедших из общества участников,
осуществляется по цене не ниже цены, которая была уплачена обществом в связи с
переходом к нему доли или части доли, если иная цена не определена решением
общего собрания участников общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Продажа доли или части доли участникам
общества, в результате которой изменяются размеры долей его участников, а также
продажа доли или части доли третьим лицам и определение иной цены на
продаваемую долю осуществляются по решению общего собрания участников общества,
принятому всеми участниками общества единогласно.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>15.5. Не распределенные или не проданные в
установленный настоящей статьей срок доля или часть доли в уставном капитале
общества должны быть погашены, и размер уставного капитала общества должен быть
уменьшен на величину номинальной стоимости этой доли или этой части доли.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>15.6. Орган, осуществляющий государственную
регистрацию юридических лиц, должен быть извещен о состоявшемся переходе к
обществу доли или части доли в уставном капитале общества не позднее чем в
течение месяца со дня перехода к обществу доли или части доли путем направления
заявления о внесении соответствующих изменений в единый государственный реестр
юридических лиц и документа, подтверждающего основания перехода к обществу доли
или части доли. В случае если в течение указанного срока доля или часть доли
будет распределена, продана или погашена, орган, осуществляющий государственную
регистрацию юридических лиц, извещается обществом путем направления заявления о
внесении соответствующих изменений в единый государственный реестр юридических
лиц и документов, подтверждающих основания перехода к обществу доли или части
доли, а также их последующих распределения, продажи или погашения. Документы
для государственной регистрации предусмотренных настоящей статьей изменений, а
при продаже доли или части доли также документы, подтверждающие оплату доли или
части доли в уставном капитале общества, должны быть представлены в орган,
осуществляющий государственную регистрацию юридических лиц, в течение месяца со
дня принятия решения о распределении доли или части доли между всеми
участниками общества, об их оплате приобретателем либо о погашении. Указанные
изменения приобретают силу для третьих лиц с момента их государственной
регистрации.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>15.7 В случае прекращения у общества права
пользования имуществом до истечения срока, на который такое имущество было
передано в пользование обществу для оплаты доли, участник общества, передавший
имущество, обязан предоставить обществу по его требованию денежную компенсацию,
равную плате за пользование таким же имуществом на подобных условиях в течение
оставшегося срока пользования имуществом. Денежная компенсация должна быть
предоставлена единовременно в разумный срок с момента предъявления обществом
требования о ее предоставлении, если иной порядок предоставления денежной
компенсации не установлен решением общего собрания участников общества. Данное
решение принимается общим собранием участников общества без учета голосов
участника общества, передавшего обществу для оплаты своей доли право
пользования имуществом, которое прекратилось досрочно.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Договором об учреждении общества или в
случае учреждения общества одним лицом решением об учреждении общества могут
быть предусмотрены иные способы и иной порядок предоставления участником
общества компенсации досрочного прекращения права пользования имуществом,
переданным им в пользование обществу для оплаты доли в уставном капитале
общества.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>16.
ВЫХОД УЧАСТНИКА ИЗ ОБЩЕСТВА </span></b><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>16.1. Участник общества вправе выйти из
общества путем отчуждения доли обществу независимо от согласия других его
участников или общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>16.2. Выход участников общества из общества,
в результате которого в обществе не остается ни одного участника, а также выход
единственного участника общества из общества не допускается.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>16.3. Выход участника общества из общества
не освобождает его от обязанности перед обществом по внесению вклада в
имущество общества, возникшей до подачи заявления о выходе из общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>16.4. Имущество, переданное участником
общества в пользование обществу для оплаты своей доли, в случае выхода или
исключения такого участника из общества остается в пользовании общества в
течение срока, на который данное имущество было передано, если иное не
предусмотрено договором об учреждении общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>16.5. В случае выхода участника общества из
общества его доля переходит к обществу. Общество обязано выплатить участнику
общества, подавшему заявление о выходе из общества, действительную стоимость
его доли в уставном капитале общества, определяемую на основании данных
бухгалтерской отчетности общества за последний отчетный период, предшествующий
дню подачи заявления о выходе из общества, или с согласия этого участника
общества выдать ему в натуре имущество такой же стоимости либо в случае
неполной оплаты им доли в уставном капитале общества действительную стоимость
оплаченной части доли.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>16.6. Общество обязано выплатить участнику
общества действительную стоимость его доли или части доли в уставном капитале
общества либо выдать ему в натуре имущество такой же стоимости в течение 1 (Одного)
года со дня возникновения соответствующей обязанности.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><o:p>&nbsp;</o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>17.
РАСПРЕДЕЛЕНИЕ ПРИБЫЛИ ОБЩЕСТВА </span></b><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span
style='mso-spacerun:yes'>   </span><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>17.1. Общество вправе ежеквартально, раз в полгода или раз в год
принимать решение о распределении своей чистой прибыли между участниками
общества. Решение об определении части прибыли общества, распределяемой между
участниками общества, принимается общим собранием участников общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><span style='mso-spacerun:yes'> </span><span
style='mso-spacerun:yes'>  </span>17.2. Часть прибыли общества, предназначенная
для распределения между его участниками, распределяется пропорционально их
долям в уставном капитале общества.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>18.
ОГРАНИЧЕНИЕ РАСПРЕДЕЛЕНИЯ ПРИБЫЛИ</span></b><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span
style='mso-spacerun:yes'>   </span><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>18.1. Общество не вправе принимать решение о распределении своей прибыли
между участниками общества:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>- до полной оплаты всего уставного капитала
общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'>до выплаты действительной стоимости доли или части доли участника
общества; <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>- если на момент принятия такого решения
общество отвечает признакам несостоятельности (банкротства) в соответствии с
федеральным законом о несостоятельности (банкротстве) или если указанные
признаки появятся у общества в результате принятия такого решения;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>- если на момент принятия такого решения
стоимость чистых активов общества меньше его уставного капитала и резервного
фонда или станет меньше их размера в результате принятия такого решения;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>- в иных случаях, предусмотренных
федеральными законами.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><span style='mso-spacerun:yes'>  </span>18.2.
Общество не вправе выплачивать участникам общества прибыль, решение о
распределении которой между участниками общества принято:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>- если на момент выплаты общество отвечает
признакам несостоятельности (банкротства) в соответствии с федеральным законом
о несостоятельности (банкротстве) или если указанные признаки появятся у
общества в результате выплаты;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>- если на момент выплаты стоимость чистых
активов общества меньше его уставного капитала и резервного фонда или станет меньше
их размера в результате выплаты;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>- в иных случаях, предусмотренных
федеральными законами.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>По прекращении указанных в настоящем пункте
обстоятельств общество обязано выплатить участникам общества прибыль, решение о
распределении которой между участниками общества принято.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>19.<span
style='mso-spacerun:yes'>  </span>РЕЗЕРВНЫЙ И ИНЫЕ ФОНДЫ ОБЩЕСТВА</span></b><span
style='font-family:"Times New Roman"'><span style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:24.75pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>19.1.<span
style='mso-tab-count:1'>     </span>Общество по решению Участника создает
резервный и<span style='mso-spacerun:yes'>  </span>другие<span
style='mso-spacerun:yes'>  </span>фонды. Резервный<span
style='mso-spacerun:yes'>  </span>фонд<span style='mso-spacerun:yes'>   
</span>создается в размере до 25%<span style='mso-spacerun:yes'> 
</span>Уставного капитала.<span style='mso-spacerun:yes'>  </span>Средства
резервного фонда используются на покрытие убытков Общества и на другие цели по
решению<span style='mso-spacerun:yes'>   </span>Участника.<o:p></o:p></span></p>

<p class=1 align=center style='margin-right:-4.05pt;text-align:center;
background:#BFBFBF'><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Times New Roman"'>20. ОРГАНЫ УПРАВЛЕНИЯ ОБЩЕСТВА</span></b><span
style='font-family:"Times New Roman"'><span style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-38.3pt'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>20.1.<span style='mso-spacerun:yes'> 
</span>Органами управления Общества являются:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><span style='mso-spacerun:yes'>  
</span>-<span style='mso-spacerun:yes'>     </span>Общее собрание Участников;
при наличии в Обществе единственного Участника решения по вопросам, относящимся
к компетенции общего собрания, принимаются единственным Участником единолично и
оформляются в письменном виде. Все участники общества имеют право
присутствовать на общем собрании участников общества, принимать участие в
обсуждении вопросов повестки дня и голосовать при принятии решений. Положения
устава общества или решения органов общества, ограничивающие указанные права
участников общества, ничтожны;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Генеральный директор - постоянно
действующий единоличный исполнительный орган Общества.</span></p>

<p class=1 align=center style='margin-right:-4.05pt;text-align:center;
background:#BFBFBF'><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Times New Roman"'>21.<span style='mso-spacerun:yes'> 
</span>ОБЩЕЕ СОБРАНИЕ.<span style='mso-spacerun:yes'>  </span>ПРИНЯТИЕ РЕШЕНИЙ ОБЩИМ
СОБРАНИЕМ (УЧАСТНИКОМ) <span style='mso-spacerun:yes'> </span>ОБЩЕСТВА</span></b><span
style='font-family:"Times New Roman"'><span style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.1. Высшим органом общества является общее
собрание участников общества. Общее собрание участников общества может быть
очередным или внеочередным. Все участники общества имеют право присутствовать
на общем собрании участников общества, принимать участие в обсуждении вопросов
повестки дня и голосовать при принятии решений. В обществе, состоящем из одного
участника, решения по вопросам, относящимся к компетенции общего собрания
участников общества, принимаются единственным участником общества единолично и
оформляются письменно.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.2. Каждый участник общества имеет на
общем собрании участников общества число голосов, пропорциональное его доле в
уставном капитале общества, за исключением случаев, предусмотренных<span
style='mso-spacerun:yes'>  </span>законом.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Путем внесения в устав общества изменений по
решению общего собрания участников общества, принятому всеми участниками
общества единогласно, может быть установлен иной порядок определения числа
голосов участников общества. Изменение и исключение положений устава общества,
устанавливающих такой порядок, осуществляются по решению общего собрания
участников общества, принятому всеми участниками общества единогласно.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.</span><span lang=EN-US style='font-size:10.0pt;mso-ansi-language:EN-US;mso-fareast-language:AR-SA'>3</span><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'>. Руководство текущей
деятельностью общества осуществляется единоличным исполнительным органом
общества.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-4.05pt'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>  </span><span
style='mso-spacerun:yes'>        </span><span style='mso-spacerun:yes'> </span>21.</span><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>4</span><span
style='font-family:"Times New Roman"'>. К исключительной компетенции Общего
собрания (единственного Участника) Общества относятся следующие вопросы,
которые не могут быть переданы на решение исполнительному органу:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>1) определение основных направлений
деятельности общества, а также принятие решения об участии в ассоциациях и
других объединениях коммерческих организаций;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>2) изменение устава общества, в том числе
изменение размера уставного капитала общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>3) образование исполнительных органов
общества и досрочное прекращение их полномочий, а также принятие решения о
передаче полномочий единоличного исполнительного органа общества управляющему,
утверждение такого управляющего и условий договора с ним;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>4) избрание и досрочное прекращение
полномочий ревизионной комиссии (ревизора) общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>5) утверждение годовых отчетов и годовых
бухгалтерских балансов;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>6) принятие решения о распределении чистой
прибыли общества между участниками общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>7) утверждение (принятие) документов,
регулирующих внутреннюю деятельность общества (внутренних документов общества);<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>8) принятие решения о размещении обществом
облигаций и иных эмиссионных ценных бумаг;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>9) назначение аудиторской проверки,
утверждение аудитора и определение размера оплаты его услуг;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>10) принятие решения о реорганизации или
ликвидации общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>11) назначение ликвидационной комиссии и
утверждение ликвидационных балансов;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>12) решение иных вопросов, предусмотренных
настоящим Федеральным законом.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>13) решение об одобрении крупных сделок;<o:p></o:p></span></p>
<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><o:p>14)
    получение кредитов/займов;</o:p></span></p>
<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><o:p>15)
      предоставление займов;</o:p></span></p>
<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><o:p>16)
      покупка/продажа основных средств стоимостью более 100 тысяч рублей;</o:p></span></p>
<p class=MsoNormal style='margin-right:-4.05pt;text-align:justify;tab-stops:18.0pt'><span
style='font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
</span><span style='mso-spacerun:yes'>      </span>17) к компетенции<span
style='mso-spacerun:yes'>  </span>Общего собрания (единственного Участника)
Общества относятся также решения<span style='mso-spacerun:yes'> 
</span>вопросов хозяйственной деятельности Общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Очередное общее собрание участников общества
проводится два раза в год. Очередное общее собрание участников общества
созывается исполнительным органом общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Срок проведения очередного общего собрания
участников общества, на котором утверждаются годовые результаты деятельности
общества - не ранее чем через два месяца и не позднее чем через четыре месяца
после окончания финансового года.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'><span style='mso-spacerun:yes'>           </span>21.5. Перед открытием
общего собрания участников общества проводится регистрация прибывших участников
общества.<span style='mso-spacerun:yes'>  </span>Участники общества вправе
участвовать в общем собрании лично или через своих представителей. Представители
участников общества должны предъявить документы, подтверждающие их надлежащие
полномочия. Доверенность, выданная представителю участника общества, должна
содержать сведения о представляемом и представителе (имя или наименование,
место жительства или место нахождения, паспортные данные), быть оформлена в
соответствии с требованиями пунктов 4 и 5 статьи 185 Гражданского кодекса
Российской Федерации или удостоверена нотариально. Незарегистрировавшийся
участник общества (представитель участника общества) не вправе принимать
участие в голосовании.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.6. Общее собрание участников общества
открывается в указанное в уведомлении о проведении общего собрания участников
общества время или, если все участники общества уже зарегистрированы, ранее.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.7. Общее собрание участников общества
открывается лицом, осуществляющим функции единоличного исполнительного органа
общества. Общее собрание участников общества, созванное ревизионной комиссией
(ревизором) общества, аудитором или участниками общества, открывает председатель
ревизионной комиссии (ревизор) общества, аудитор или один из участников
общества, созвавших данное общее собрание.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.8. <span
style='mso-spacerun:yes'> </span>Лицо, открывающее общее собрание участников
общества, проводит выборы председательствующего из числа участников общества. При
голосовании по вопросу об избрании председательствующего каждый участник общего
собрания участников общества имеет один голос, а решение по указанному вопросу
принимается большинством голосов от общего числа голосов участников общества,
имеющих право голосовать на данном общем собрании.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.9. Исполнительный орган общества
организует ведение протокола общего собрания участников общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Протоколы всех общих собраний участников
общества подшиваются в книгу протоколов, которая должна в любое время
предоставляться любому участнику общества для ознакомления. По требованию
участников общества им выдаются выписки из книги протоколов, удостоверенные
исполнительным органом общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.10. Не позднее чем в течение десяти дней
после составления протокола общего собрания участников общества исполнительный
орган общества или иное осуществлявшее ведение указанного протокола лицо
обязаны направить копию протокола общего собрания участников общества всем
участникам общества в порядке, предусмотренном для сообщения о проведении общего
собрания участников общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.11. Общее собрание участников общества
вправе принимать решения только по вопросам повестки дня, сообщенным участникам
общества в соответствии с пунктами 1 и 2 статьи 36 </span><span
style='font-size:10.0pt;mso-bidi-font-size:10.0pt'>Федерального закона РФ
&quot;Об обществах с ограниченной ответственностью&quot; № 14-ФЗ</span><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'>, за исключением случаев,
если в данном общем собрании участвуют все участники общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.12. Решения по вопросам, указанным в
подпункте 2 пункта 21.4. настоящей статьи <span
style='mso-spacerun:yes'> </span>принимаются большинством не менее двух третей
голосов от общего числа голосов участников общества, если необходимость
большего числа голосов для принятия такого решения не предусмотрена настоящим
Федеральным законом или уставом общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Решения по вопросам, указанным в подпункте
11 пункта 21.4. настоящей статьи принимаются всеми участниками общества
единогласно.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>Остальные решения принимаются большинством
голосов от общего числа голосов участников общества, если необходимость
большего числа голосов для принятия таких решений не предусмотрена законом. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>21.13. Решения общего собрания участников
общества принимаются открытым голосованием.<o:p></o:p></span></p>

<p class=1 style='margin-right:-4.05pt;text-align:justify;tab-stops:18.0pt'><span
style='font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>22.
СРОКИ ПРИНЯТИЯ РЕШЕНИЯ ПО ИТОГАМ ФИНАНСОВО-ХОЗЯЙСТВЕННОЙ ДЕЯТЕЛЬНОСТИ ОБЩЕСТВА</span></b><span
style='font-family:"Times New Roman"'><span style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>22.1 Решение по итогам
финансово-хозяйственной деятельности Общества за год принимается <span
style='mso-spacerun:yes'> </span>в первой декаде апреля месяца. <o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>23.
ЕДИНОЛИЧНЫЙ ИСПОЛНИТЕЛЬНЫЙ ОРГАН ОБЩЕСТВА.<span style='mso-spacerun:yes'>  
</span><o:p></o:p></span></b></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>ГЕНЕРАЛЬНЫЙ
ДИРЕКТОР.</span></b><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>23.1. Единоличным<span
style='mso-spacerun:yes'>  </span>исполнительным органом Общества является
генеральный директор. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>23.2. Генеральный директор назначается
решением участников Общества на срок три года.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:19.5pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>   </span>23.3. Договор между
обществом и лицом, осуществляющим функции единоличного исполнительного органа
общества, подписывается от имени общества лицом, председательствовавшим на
общем собрании участников общества, на котором избрано лицо, осуществляющее
функции единоличного исполнительного органа общества, или участником общества,
уполномоченным решением общего собрания участников общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:19.5pt'><span style='font-family:
"Times New Roman"'><span style='mso-spacerun:yes'>  </span>23.4. Генеральный
директор Общества:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>а) без доверенности действует от имени<span
style='mso-spacerun:yes'>  </span>Общества, в том числе представляет его
интересы и совершает сделки;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>б) выдает доверенности на право
представительства от имени Общества, в том числе доверенности с правом
передоверия;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>в) издает приказы о назначении на должности
работников Общества,<span style='mso-spacerun:yes'>  </span>об их переводе и
увольнении, применяет меры поощрения и налагает дисциплинарные взыскания;<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>г) осуществляет иные полномочия, не
отнесенные Федеральным законом и настоящим уставом к компетенции<span
style='mso-spacerun:yes'>  </span>участника<span style='mso-spacerun:yes'> 
</span>Общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>Порядок деятельности генерального директора
и принятия им решений<span style='mso-spacerun:yes'>  </span>устанавливается
настоящим уставом,<span style='mso-spacerun:yes'>  </span>внутренними
документами Общества и договором, заключенным с генеральным директором.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>23.5. Ответственность генерального директора
определена Федеральным законом.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>24.
КРУПНЫЕ СДЕЛКИ</span></b><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><span style='mso-spacerun:yes'>   </span>24.1.
Крупной сделкой является сделка (в том числе заем, кредит, залог,
поручительство) или несколько взаимосвязанных сделок, связанных с
приобретением, отчуждением или возможностью отчуждения обществом прямо либо
косвенно имущества, стоимость которого составляет двадцать пять и более
процентов стоимости имущества общества, определенной на основании данных
бухгалтерской отчетности за последний отчетный период, предшествующий дню
принятия решения о совершении таких сделок, если уставом общества не
предусмотрен более высокий размер крупной сделки. Крупными сделками не
признаются сделки, совершаемые в процессе обычной хозяйственной деятельности
общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span lang=EN-US
style='font-size:10.0pt;mso-ansi-language:EN-US;mso-fareast-language:AR-SA'>24.</span><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'>2. Для целей настоящей
статьи стоимость отчуждаемого обществом в результате крупной сделки имущества
определяется на основании данных его бухгалтерского учета, а стоимость
приобретаемого обществом имущества - на основании цены предложения.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span lang=EN-US
style='font-size:10.0pt;mso-ansi-language:EN-US;mso-fareast-language:AR-SA'>24.</span><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'>3. Решение об одобрении
крупной сделки принимается общим собранием участников общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-pagination:none;mso-layout-grid-align:
none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:
AR-SA'><span style='mso-spacerun:yes'> </span>В решении об одобрении крупной
сделки должны быть указаны лица, являющиеся сторонами, выгодоприобретателями в
сделке, цена, предмет сделки и иные ее существенные условия. В решении могут не
указываться лица, являющиеся сторонами, выгодоприобретателями в сделке, если
сделка подлежит заключению на торгах, а также в иных случаях, если стороны,
выгодоприобретатели не могут быть определены к моменту одобрения крупной
сделки.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>24.4. Крупная сделка, совершенная с
нарушением требований, предусмотренных настоящей статьей, может быть признана
недействительной по иску общества или его участника.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>24.5. В случае если крупная сделка
одновременно является сделкой, в совершении которой имеется заинтересованность,
к порядку одобрения такой крупной сделки применяются положения статьи 45 </span><span
style='font-size:10.0pt;mso-bidi-font-size:10.0pt'>Федерального закона РФ
&quot;Об обществах с ограниченной ответственностью&quot; № 14-ФЗ</span><span
style='font-size:10.0pt;mso-fareast-language:AR-SA'>, за исключением случая,
если в совершении сделки заинтересованы все участники общества. В случае если в
совершении крупной сделки заинтересованы все участники общества, к порядку ее
одобрения применяются положения настоящей статьи.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>24.6. Положения настоящей статьи о порядке
одобрения крупных сделок не применяются к:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>1) обществам, состоящим из одного участника,
который одновременно осуществляет функции единоличного исполнительного органа
данного общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>2) отношениям, возникающим при переходе к
обществу доли или части доли в его уставном капитале<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>3) отношениям, возникающим при переходе прав
на имущество в процессе реорганизации общества, в том числе договорам о слиянии
и договорам о присоединении.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>25.
РЕВИЗОР ОБЩЕСТВА</span></b><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:10.0pt;mso-line-height-rule:
exactly'><span style='mso-spacerun:yes'>    </span><span style='font-size:10.0pt'>25.1.
На момент регистрации Общества ревизионная комиссия не создается. В случае,
если число Участников Общества превысит 15, должна быть образована ревизионная
комиссия. Ревизионная комиссия (ревизор) Общества избирается общим собранием Участников
Общества в составе 3 человек сроком на 5 лет.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>25.2. Ревизионная комиссия Общества в
обязательном порядке проводит проверку годовых отчетов и бухгалтерских балансов
общества до их утверждения общим собранием Участников Общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>25.3. Порядок ревизионной комиссии
определяется внутренними документами общества.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>26.
АУДИТОРСКАЯ ПРОВЕРКА ОБЩЕСТВА</span></b><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>26.1. По решению Участника Общества для
проверки и подтверждения правильности годовых отчетов Общества<span
style='mso-spacerun:yes'>  </span>может быть привлечен профессиональный аудитор,
не связанный имущественными интересами с обществом.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>26.2. Привлечение аудиторский проверки
является обязательным в случаях, предусмотренных законодательством РФ. <o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>27.
ХРАНЕНИЕ ДОКУМЕНТОВ ОБЩЕСТВА</span></b><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'><span style='mso-spacerun:yes'>   </span>27.1.
<span style='mso-spacerun:yes'> </span>Общество обязано хранить следующие документы:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span style='mso-spacerun:yes'>  </span>договор
об учреждении общества, за исключением случая учреждения общества одним лицом, <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span style='mso-spacerun:yes'>  </span>решение
об учреждении общества, <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>- устав общества, а также внесенные в устав
общества и зарегистрированные в установленном порядке изменения;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>- протокол (протоколы) собрания учредителей
общества, содержащий решение о создании общества и об утверждении денежной
оценки неденежных вкладов в уставный капитал общества, а также иные решения,
связанные с созданием общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>- документ, подтверждающий государственную
регистрацию общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span style='mso-spacerun:yes'>  </span>документы,
подтверждающие права общества на имущество, находящееся на его балансе;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span style='mso-spacerun:yes'>  </span>внутренние
документы общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span style='mso-spacerun:yes'>  </span>положения
о филиалах и представительствах общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span style='mso-spacerun:yes'>  </span>документы,
связанные с эмиссией облигаций и иных эмиссионных ценных бумаг общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span style='mso-spacerun:yes'>  </span>протоколы
общих собраний участников общества и ревизионной комиссии общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span style='mso-spacerun:yes'>  </span>списки
аффилированных лиц общества;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span style='mso-spacerun:yes'>  </span>заключения
ревизионной комиссии (ревизора) общества, аудитора, государственных и
муниципальных органов финансового контроля;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>-<span style='mso-spacerun:yes'>  </span>иные
документы, предусмотренные федеральными законами и иными правовыми актами
Российской Федерации, уставом общества, внутренними документами общества,
решениями общего собрания участников общества и исполнительных органов общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:27.0pt;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:10.0pt;mso-fareast-language:AR-SA'>27.2. Общество хранит документы,
предусмотренные пунктом 27.1. настоящей статьи, по месту нахождения его
единоличного исполнительного органа - генерального директора или в ином месте,
известном и доступном участникам общества.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>28.<span
style='mso-spacerun:yes'>  </span>РЕОРГАНИЗАЦИЯ ОБЩЕСТВА</span></b><span
style='font-family:"Times New Roman"'><span style='mso-spacerun:yes'>  </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>28.1. Общество может быть добровольно
реорганизовано в порядке, предусмотренном Федеральным законом.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>28.2. Реорганизация Общества (слияние,<span
style='mso-spacerun:yes'>  </span>присоединение,<span
style='mso-spacerun:yes'>  </span>разделение,<span style='mso-spacerun:yes'> 
</span>выделение, преобразование) производится по решению<span
style='mso-spacerun:yes'>  </span>Участников.<span style='mso-spacerun:yes'> 
</span>Реорганизация<span style='mso-spacerun:yes'>  </span>Общества влечет за
собой переход прав и обязанностей,<span style='mso-spacerun:yes'> 
</span>принадлежащих Обществу, к его правопреемникам.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>28.3. Общество считается реорганизованным,
за исключением случаев реорганизации в форме присоединения, с момента
государственной регистрации юридического лица, создаваемого в результате
реорганизации. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>При реорганизации общества в форме
присоединения к нему другого общества первое из них считается реорганизованным
с момента внесения в единый государственный реестр юридических лиц записи о прекращении
деятельности присоединенного общества.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>28.4. Государственная регистрация обществ,
созданных в результате реорганизации и внесение записей о прекращении
деятельности реорганизуемых обществ, а также государственная регистрация
изменений в уставе осуществляется в порядке, определяемом Федеральными
законами.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>29.
ЛИКВИДАЦИЯ ОБЩЕСТВА</span></b><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>  </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>29.1. Ликвидация<span
style='mso-spacerun:yes'>  </span>Общества производится по решению Участника
либо суда в случаях, предусмотренных законодательством РФ. Участник Общества
письменно сообщает органу, осуществляющему регистрацию, о принятом решении.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>29.2. Ликвидация Общества производится
ликвидационной комиссией, назначенной органом, принявшим решение о ликвидации.
С момента назначения ликвидационной комиссии к ней переходят все полномочия по
управлению делами Общества.<span style='mso-spacerun:yes'>  </span>Порядок и
сроки ликвидации устанавливаются решением Участника или органом,<span
style='mso-spacerun:yes'>  </span>назначившим ликвидационную комиссию.<span
style='mso-spacerun:yes'>  </span>Ликвидационная комиссия производит публикацию
в официальной печати по<span style='mso-spacerun:yes'>  </span>месту нахождения
Общества о предстоящей его ликвидации,<span style='mso-spacerun:yes'>  </span>о
порядке и сроке заявления требований его кредиторами.<span
style='mso-spacerun:yes'>  </span>Срок для заявления претензий кредиторам не
может<span style='mso-spacerun:yes'>  </span>быть<span
style='mso-spacerun:yes'>  </span>менее двух<span style='mso-spacerun:yes'> 
</span>месяцев<span style='mso-spacerun:yes'>  </span>с<span
style='mso-spacerun:yes'>  </span>момента объявления о ликвидации.<span
style='mso-spacerun:yes'>  </span>Ликвидационная комиссия оценивает имущество
Общества, выявляет его дебиторов и кредиторов и рассчитывается с ними,
принимает меры к оплате долгов Общества третьим лицам,<span
style='mso-spacerun:yes'>  </span>составляет ликвидационный баланс и
представляет его на утверждение Участнику Общества или органу<span
style='mso-spacerun:yes'>  </span>принявшему решение о ликвидации
Общества.<span style='mso-spacerun:yes'>  </span>Перед представлением
ликвидационного баланса Участнику он должен быть проверен и подтвержден
назначенной<span style='mso-spacerun:yes'>  </span>Участником<span
style='mso-spacerun:yes'>  </span>или<span style='mso-spacerun:yes'> 
</span>органом, назначившим ликвидационную комиссию, аудиторской организацией. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>Свободный остаток имущества Общества после
расчетов по оплате труда работников<span style='mso-spacerun:yes'> 
</span>Общества,<span style='mso-spacerun:yes'>  </span>кредиторами,<span
style='mso-spacerun:yes'>  </span>с бюджетом и выполнения иных обязательств
остается в распоряжении Участников и распределяется в соответствии с
Федеральным законом.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>29.3. Общество считается реорганизованным
или ликвидированным с момента внесения в единый государственный реестр
соответствующей записи.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>   </span>29.4. При реорганизации или прекращении
деятельности Общества все документы (управленческие,<span
style='mso-spacerun:yes'>  </span>финансово-хозяйственные,<span
style='mso-spacerun:yes'>  </span>по личному составу и др.) передаются в
соответствии с установленными правилами предприятию-правопреемнику.<span
style='mso-spacerun:yes'>  </span>При отсутствии<span
style='mso-spacerun:yes'>  </span>правопреемника документы постоянного
хранения, имеющие научно-историческое значение, передаются на государственное
хранение в архивы объединения «Мосгорархив», документы по личному составу
(приказы, личные дела и карточки учета, лицевые счета и т.п.) передаются на
хранение в архив административного округа,<span style='mso-spacerun:yes'> 
</span>на территории которого<span style='mso-spacerun:yes'>  </span>находится
Общество.<span style='mso-spacerun:yes'>  </span>Передача и упорядочение
документов осуществляется силами и за счет средств Общества в соответствии с
требованиями архивных органов.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>30.
ПОРЯДОК РАСПРЕДЕЛЕНИЯ ИМУЩЕСТВА ЛИКВИДИРУЕМОГО ОБЩЕСТВА<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>30.1. Оставшееся после расчетов с
кредиторами имущество ликвидируемого общества распределяется ликвидационной
комиссией в следующей очередности:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>в первую очередь осуществляется выплата
участникам общества распределенной, но не выплаченной части прибыли;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>во вторую очередь осуществляется
распределение имущества ликвидируемого общества между Участниками
пропорционально долям их уставного капитала.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>30.2. Требования каждой очереди
удовлетворяется после полного удовлетворения требований предыдущей очереди.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>Если имеющегося у общества имущества
недостаточно для выплаты распределенной, но не выплаченной части прибыли,
имущество общества распределяется пропорционально долям в Уставном капитале.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>31.<span
style='mso-spacerun:yes'>  </span>УЧЕТ И ОТЧЕТНОСТЬ<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>31.1. Общество осуществляет учет
результатов работы,<span style='mso-spacerun:yes'>  </span>контроль за<span
style='mso-spacerun:yes'>  </span>финансово-хозяйственной деятельностью, ведет
оперативный, бухгалтерский и статистический учет.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>31.2. Ответственность за организацию бухгалтерского
учета,<span style='mso-spacerun:yes'>  </span>своевременное представление
бухгалтерской и иной отчетности несет генеральный директор Общества,<span
style='mso-spacerun:yes'>  </span>компетенция которого определена действующим
законодательством.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>31.3. Финансовый год устанавливается с 1
января по 31 декабря включительно.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>32.
ТРУДОВЫЕ ОТНОШЕНИЯ В ОБЩЕСТВЕ<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>32.1. Трудовые отношения, включая вопросы
найма и увольнения, режима труда и отдыха, условий оплаты труда, гарантий и
компенсаций в Обществе регулируются коллективным<span
style='mso-spacerun:yes'>  </span>договором и индивидуальными трудовыми договорами
(контрактами).<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>32.2. Условия коллективного и
индивидуальных контрактов не могут ухудшать<span style='mso-spacerun:yes'> 
</span>положения<span style='mso-spacerun:yes'>  </span>работников предприятия
по сравнению с условиями,<span style='mso-spacerun:yes'>  </span>предусмотренными
действующим на территории РФ законодательством.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>32.3. Работники Общества подлежат
социальному и медицинскому страхованию и социальному обеспечению.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>32.4. Общество<span
style='mso-spacerun:yes'>  </span>вправе<span style='mso-spacerun:yes'> 
</span>за счет собственных средств дохода вводить членам своего трудового
коллектива дополнительные льготы по социальному обеспечению.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>33.
ПРЕДОСТАВЛЕНИЕ ОБЩЕСТВОМ ИНФОРМАЦИИ.<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>33.1. Информация об Обществе
предоставляется в соответствии с требованиями Федерального закона и иных
правовых актов Российской Федерации.<span style='mso-spacerun:yes'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>33.2. Общество обеспечивает участнику<span
style='mso-spacerun:yes'>  </span>доступ к документам, предусмотренным пунктом
27.1. настоящего устава,<span style='mso-spacerun:yes'>  </span>а также
бухгалтерским книгам и документам бухгалтерского учета.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>33.3. По требованию участника общество
обязано предоставить ему за разумную плату копии документов, предусмотренных
пунктом<span style='mso-spacerun:yes'>  </span>27.1 настоящего устава и иных
документов общества,<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'>предусмотренных
правовыми актами РФ. Размер платы не может превышать стоимости расходов на
изготовление копии документов и оплаты расходов, связанных с направлением
документов по почте.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>    </span>33.4. По требованию аудитора,
правоохранительных или других заинтересованных лиц общество обязано по
письменному заявлению на имя генерального директора<span
style='mso-spacerun:yes'>  </span>в десятидневный срок предоставлять
возможность ознакомиться с Учредительными документами общества и другими
документами.<o:p></o:p></span></p>

<p class=1 align=center style='text-align:center;background:#BFBFBF'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman"'>34.
ПРОЧИЕ ПОЛОЖЕНИЯ<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>34.1. Настоящий Устав вступает в силу с
момента его государственной<span style='mso-spacerun:yes'>  </span>регистрации
в порядке, установленном законодательством.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman"'><span
style='mso-spacerun:yes'>     </span>34.2. Если какое-либо из положений
настоящего Устава становится недействительным (в том числе в связи с
изменениями,<span style='mso-spacerun:yes'>  </span>внесенными в действующее
законодательство),<span style='mso-spacerun:yes'>  </span>это не затрагивает
остальных положений. В этом случае Участник принимает решение о замене
недействительных положений Устава положением,<span style='mso-spacerun:yes'> 
</span>допустимым в правовом отношении и позволяющим достичь сходный
экономический результат.<o:p></o:p></span></p>

</div>

</div></body>
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

#
function toLower($content) { //трансформирует все буквы в нижний регистр
  $content = strtr($content, "АБВГДЕЁЖЗИЙКЛМНОРПСТУФХЦЧШЩЪЬЫЭЮЯ", "абвгдеёжзийклмнорпстуфхцчшщъьыэюя");
  return strtolower($content);
}
?>