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

$case1 = false; $case2 = false; $case3 = false; $case4 = false;

if( mb_strlen($familya,'utf-8') + mb_strlen($imya,'utf-8') + mb_strlen($otchestvo,'utf-8') <=38)  	$case1 = true;
elseif(mb_strlen($familya,'utf-8') + mb_strlen($imya,'utf-8')  <=39)  					$case2 = true;
elseif( mb_strlen($imya,'utf-8') + mb_strlen($otchestvo,'utf-8') <=39)  			$case3 = true;
else  																$case4 = true;


?><html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 10">
<link rel=File-List href="usn2.files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="Новое заявление на упрощенку_5334_Styles">
<!--table
	{mso-displayed-decimal-separator:"\,";
	mso-displayed-thousand-separator:" ";}
.font55334
	{color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;}
.font65334
	{color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;}
.font75334
	{color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;}
.xl225334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl235334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl245334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:right;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl255334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl265334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl275334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl285334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl295334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:right;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl305334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl315334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl325334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl335334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl345334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl355334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl365334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl375334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl385334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl395334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl405334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl415334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl425334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl435334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:right;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl445334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl455334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl465334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl475334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt dotted windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl485334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt dotted windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl495334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl505334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl515334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt dotted windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl525334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt dotted windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl535334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl545334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl555334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl565334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt dotted windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl575334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl585334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt dotted windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl595334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl605334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt dotted windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl615334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt dotted windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl625334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl635334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt dotted windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl645334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt dotted windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl655334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl665334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt dotted windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl675334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl685334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl695334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl705334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl715334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl725334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt dotted windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl735334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	background:black;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl745334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Courier New", monospace;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt dotted windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl755334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl765334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl775334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt dotted windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl785334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl795334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl805334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl815334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl825334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt dotted windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl835334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl845334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl855334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl865334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt dotted windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl875334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl885334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl895334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl905334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt dotted windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl915334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl925334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl935334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl945334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl955334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt dotted windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl965334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl975334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl985334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl995334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt dotted windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1005334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1015334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1025334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1035334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt dotted windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1045334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1055334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1065334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1075334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1085334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1095334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1105334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt dotted windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1115334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1125334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl1135334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1145334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1155334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1165334
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:204;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
<title>УСН <?php echo $familya; ?></title></head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--Следующие сведения были подготовлены мастером публикации веб-страниц
Microsoft Excel.-->
<!--При повторной публикации этого документа из Excel все сведения между тегами
DIV будут заменены.-->
<!----------------------------->
<!--НАЧАЛО ФРАГМЕНТА ПУБЛИКАЦИИ МАСТЕРА ВЕБ-СТРАНИЦ EXCEL -->
<!----------------------------->

<div id="Новое заявление на упрощенку_5334" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=720 class=xl225334
 style='border-collapse:collapse;table-layout:fixed;width:600pt'>
 <col class=xl225334 width=6 span=120 style='mso-width-source:userset;
 mso-width-alt:219;width:5pt'>
 <tr class=xl235334 height=19 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=3 height=19 class=xl735334 width=18 style='height:14.25pt;
  width:15pt'><a name="RANGE!A1:DP78">&nbsp;</a></td>
  <td colspan=21 height=19 width=180 style='height:14.25pt;width:105pt'
  align=left valign=top><!--[if gte vml 1]><v:shapetype id="_x0000_t75"
   coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
   filled="f" stroked="f">
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
  </v:shapetype><v:shape id="_x0000_s1029" type="#_x0000_t75" style='position:absolute;
   margin-left:6.75pt;margin-top:0;width:86.25pt;height:38.25pt;z-index:1'
   fillcolor="window [65]" strokecolor="windowText [64]" o:insetmode="auto">
   <v:fill color2="window [65]"/>
   <v:imagedata src="usn2.files/Новое%20заявление%20на%20упрощенку_5334_image001.emz"
    o:title=""/>
   <x:ClientData ObjectType="Pict">
    <x:SizeWithCells/>
    <x:CF>Pict</x:CF>
    <x:AutoPict/>
   </x:ClientData>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:9px;margin-top:0px;width:115px;
  height:51px'><img width=115 height=51
  src="usn2.files/r_5334_image003.gif" v:shapes="_x0000_s1029"></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td colspan=21 height=19 class=xl855334 width=126 style='height:14.25pt;
    width:105pt'></td>
   </tr>
  </table>
  </span></td>
  <td colspan=3 class=xl735334 width=180 style='width:15pt'>&nbsp;</td>
  <td colspan=2 rowspan=2 class=xl855334 width=180 style='width:10pt'></td>
  <td colspan=7 rowspan=2 class=xl715334 width=180 style='border-right:.5pt dotted black;
  width:35pt'>ИНН <font class=font75334><sup>1</sup></font></td>
  <td colspan=3 rowspan=2 class=xl585334 width=180 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>-</td>
  <td colspan=3 rowspan=2 class=xl585334 width=18 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 width=18 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 width=18 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 width=18 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 width=18 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 width=258 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 width=258 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 width=258 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 width=258 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 width=258 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 width=258 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black;width:15pt'>&nbsp;</td>
  <td colspan=16 class=xl865334 width=258 style='border-left:none;width:80pt'>&nbsp;</td>
  <td colspan=32 rowspan=4 class=xl295334 width=258 style='width:160pt'><br>
    </td>
 </tr>
 <tr class=xl235334 height=4 style='mso-height-source:userset;height:3.0pt'>
  <td height=4 class=xl255334 style='height:3.0pt'></td>
  <td class=xl255334></td>
  <td class=xl255334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl235334></td>
  <td class=xl265334></td>
  <td class=xl245334></td>
  <td class=xl245334></td>
  <td class=xl245334></td>
  <td class=xl295334 width=258 style='width:5pt'></td>
  <td class=xl295334 width=258 style='width:5pt'></td>
  <td class=xl295334 width=258 style='width:5pt'></td>
  <td class=xl295334 width=258 style='width:5pt'></td>
  <td class=xl295334 width=258 style='width:5pt'></td>
 </tr>
 <tr class=xl235334 height=6 style='mso-height-source:userset;height:4.5pt'>
  <td colspan=88 height=6 class=xl845334 style='height:4.5pt'></td>
 </tr>
 <tr class=xl235334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td colspan=29 height=23 class=xl875334 style='height:17.25pt'></td>
  <td colspan=7 class=xl715334 style='border-right:.5pt dotted black'>КПП <font
  class=font75334><sup>1</sup></font></td>
  <td colspan=3 class=xl485334 style='border-left:none'>-</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=6 class=xl765334 style='border-right:.5pt dotted black'>Стр.</td>
  <td colspan=3 class=xl485334 style='border-left:none'>0</td>
  <td colspan=3 class=xl485334 style='border-left:none'>0</td>
  <td colspan=3 class=xl485334 style='border-left:none'>1</td>
  <td colspan=10 class=xl645334 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr class=xl235334 height=10 style='mso-height-source:userset;height:8.1pt'>
  <td colspan=120 height=20 class=xl855334 style='height:16.2pt'></td>
 </tr>
 <tr class=xl275334 height=19 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=97 height=19 class=xl385334 style='height:14.25pt'></td>
  <td class=xl275334>Форма по КНД 1150001</td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl425334></td>
  <td class=xl435334></td>
 </tr>
 <tr class=xl235334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=120 height=9 class=xl855334 style='height:6.95pt'></td>
 </tr>
 <tr class=xl455334 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=120 height=17 class=xl755334 style='height:12.75pt'>Уведомление</td>
 </tr>
 <tr class=xl455334 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td colspan=120 height=18 class=xl755334 style='height:13.5pt'>о переходе на
  упрощенную систему налогообложения (форма № 26.2-1)</td>
 </tr>
 <tr class=xl265334 height=9 style='mso-height-source:userset;height:6.75pt'>
  <td colspan=120 height=9 class=xl885334 style='height:6.75pt'></td>
 </tr>
 <tr class=xl305334 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=98 height=16 class=xl335334 style='height:12.0pt'></td>
  <td colspan=22 rowspan=3 class=xl505334 width=192 style='width:110pt'>(выбирается
  из перечня,<br>
    приведенного внизу листа)</td>
 </tr>
 <tr class=xl325334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl325334 style='height:17.25pt'></td>
  <td colspan=33 class=xl285334>Представляется в налоговый орган</td>
  <td colspan=6 class=xl255334 style='border-right:.5pt dotted black'>(код)</td>
  <td colspan=3 class=xl485334 style='border-left:none'><?php echo mb_substr($nalogovaya, 0, 1,'utf-8'); ?></td>
  <td colspan=3 class=xl485334 style='border-left:none'><?php echo mb_substr($nalogovaya, 1, 1,'utf-8'); ?></td>
  <td colspan=3 class=xl485334 style='border-left:none'><?php echo mb_substr($nalogovaya, 2, 1,'utf-8'); ?></td>
  <td colspan=3 class=xl485334 style='border-left:none'><?php echo mb_substr($nalogovaya, 3, 1,'utf-8'); ?></td>
  <td colspan=18 class=xl905334 style='border-left:none'>&nbsp;</td>
  <td colspan=18 class=xl285334>Признак налогоплательщика</td>
  <td colspan=6 class=xl255334 style='border-right:.5pt dotted black'>(код)*</td>
  <td colspan=3 class=xl485334 style='border-left:none'>1</td>
  <td class=xl325334></td>
 </tr>
 <tr class=xl305334 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=98 height=16 class=xl335334 style='height:12.0pt'></td>
 </tr>
 <tr class=xl275334 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl275334 style='height:12.0pt'></td>
  <td colspan=119 class=xl375334>В соответствии с положениями статей 346.12 и
  346.13 главы 26.2 Налогового кодекса Российской Федерации</td>
 </tr>
 <tr class=xl265334 height=8 style='mso-height-source:userset;height:6.0pt'>
  <td colspan=120 height=8 class=xl915334 style='height:6.0pt'>&nbsp;</td>
 </tr>
 <tr class=xl275334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td colspan=3 height=23 class=xl485334 style='height:17.25pt'>И</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Н</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Д</td>
  <td colspan=3 class=xl485334 style='border-left:none'>И</td>
  <td colspan=3 class=xl485334 style='border-left:none'>В</td>
  <td colspan=3 class=xl485334 style='border-left:none'>И</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Д</td>
  <td colspan=3 class=xl485334 style='border-left:none'>У</td>
  <td colspan=3 class=xl485334 style='border-left:none'>А</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Л</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Ь</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Н</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Ы</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Й</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>П</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Р</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Е</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Д</td>
  <td colspan=3 class=xl485334 style='border-left:none'>П</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Р</td>
  <td colspan=3 class=xl485334 style='border-left:none'>И</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Н</td>
  <td colspan=3 class=xl485334 style='border-left:none'>И</td>
  <td colspan=3 class=xl485334 style='border-left:none'>М</td>
  <td colspan=3 class=xl485334 style='border-left:none'>А</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Т</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Е</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Л</td>
  <td colspan=3 class=xl485334 style='border-left:none'>Ь</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=120 height=7 class=xl925334 style='height:5.25pt'>&nbsp;</td>
 </tr>
 <tr class=xl275334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <?php 
if ($case1) $fio = toUpper($familya.' '.$imya.' '.$otchestvo);
elseif ($case2) $fio = toUpper($familya.' '.$imya);
else $fio = toUpper($familya);

	$first = "<td colspan=3 height=23 class=xl485334 style='height:17.25pt'>";
	$other = "<td colspan=3 class=xl485334 style='border-left:none'>";
	$tdcl = "</td>";
	$fllen = mb_strlen($fio,'utf-8');
	echo $first . mb_substr($fio, 0, 1,'utf-8') . $tdcl;
	for($j=1;$j<40;$j++){
			echo $other .( mb_substr($fio, $j, 1,'utf-8')?mb_substr($fio, $j, 1,'utf-8'):"&nbsp;" ). $tdcl;
	}//for
?>

 </tr>
 <tr height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=120 height=7 class=xl925334 style='height:5.25pt'>&nbsp;</td>
 </tr>
 <tr class=xl275334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <?php 
if ($case1) $fio = '';
elseif ($case2) $fio = toUpper($otchestvo);
elseif ($case3) $fio = toUpper($imya.' '.$otchestvo);
else $fio = toUpper($imya);

	$first = "<td colspan=3 height=23 class=xl485334 style='height:17.25pt'>";
	$other = "<td colspan=3 class=xl485334 style='border-left:none'>";
	$tdcl = "</td>";
	$fllen = mb_strlen($fio,'utf-8');
	echo $first . mb_substr($fio, 0, 1,'utf-8') . $tdcl;
	for($j=1;$j<40;$j++){
			echo $other .( mb_substr($fio, $j, 1,'utf-8')?mb_substr($fio, $j, 1,'utf-8'):"&nbsp;" ). $tdcl;
	}//for
?>

 </tr>
 <tr height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=120 height=7 class=xl925334 style='height:5.25pt'>&nbsp;</td>
 </tr>
 <tr class=xl275334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <?php 
if ($case1) $fio = '';
elseif ($case2) $fio = '';
elseif ($case3) $fio = '';
else $fio = toUpper($otchestvo);

	$first = "<td colspan=3 height=23 class=xl485334 style='height:17.25pt'>";
	$other = "<td colspan=3 class=xl485334 style='border-left:none'>";
	$tdcl = "</td>";
	$fllen = mb_strlen($fio,'utf-8');
	echo $first . mb_substr($fio, 0, 1,'utf-8') . $tdcl;
	for($j=1;$j<40;$j++){
			echo $other .( mb_substr($fio, $j, 1,'utf-8')?mb_substr($fio, $j, 1,'utf-8'):"&nbsp;" ). $tdcl;
	}//for
?>

 </tr>
 <tr class=xl445334 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=120 height=16 class=xl495334 style='height:12.0pt'>(наименование
  организации/фамилия, имя, отчество<font class=font65334><sup>5</sup></font> индивидуального предпринимателя)</td>
 </tr>
 <tr class=xl305334 height=8 style='mso-height-source:userset;height:6.0pt'>
  <td colspan=120 height=8 class=xl935334 style='height:6.0pt'></td>
 </tr>
 <tr class=xl325334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl325334 style='height:17.25pt'></td>
  <td colspan=52 class=xl285334 style='border-right:.5pt dotted black'>переходит
  на упрощенную систему налогообложения</td>
  <td colspan=3 class=xl485334 style='border-left:none'>2</td>
  <td class=xl325334></td>
  <td class=xl285334>,</td>
  <td colspan=62 class=xl815334></td>
 </tr>
 <tr class=xl305334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=120 height=7 class=xl935334 style='height:5.25pt'></td>
 </tr>
 <tr class=xl315334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl325334 style='height:17.25pt'></td>
  <td colspan=19 class=xl285334 style='border-right:.5pt dotted black'>где: 1 -
  с 1 января</td>
  <td colspan=3 class=xl485334 style='border-left:none'>2</td>
  <td colspan=3 class=xl485334 style='border-left:none'>0</td>
  <td colspan=3 class=xl485334 style='border-left:none'>1</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td class=xl315334></td>
  <td colspan=6 class=xl285334>года;</td>
  <td colspan=40 class=xl815334>2 - с даты постановки на налоговый учет <font
  class=font65334><sup>3</sup></font><font class=font55334>;</font></td>
  <td colspan=6 class=xl815334>3 - с</td>
  <td class=xl285334></td>
  <td colspan=3 class=xl485334>0</td>
  <td colspan=3 class=xl485334 style='border-left:none'>1</td>
  <td colspan=3 class=xl555334 style='border-right:.5pt dotted black'>.</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl555334 style='border-right:.5pt dotted black'>.</td>
  <td colspan=3 class=xl485334 style='border-left:none'>2</td>
  <td colspan=3 class=xl485334 style='border-left:none'>0</td>
  <td colspan=3 class=xl485334 style='border-left:none'>1</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl825334 style='border-left:none' x:num><sup>4</sup></td>
  <td class=xl285334></td>
 </tr>
 <tr class=xl275334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=55 height=7 class=xl945334 style='height:5.25pt'></td>
  <td colspan=43 rowspan=3 class=xl795334 width=258 style='width:215pt'>1 -
  доходы<br>
    2 - доходы, уменьшенные на величину расходов</td>
  <td colspan=22 class=xl945334></td>
 </tr>
 <tr class=xl465334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl285334 style='height:17.25pt'></td>
  <td colspan=49 class=xl285334 style='border-right:.5pt dotted black'>В
  качестве объекта налогообложения выбраны</td>
  <td colspan=3 class=xl485334 style='border-left:none'><?php echo $usn_chto; ?></td>
  <td class=xl285334></td>
  <td class=xl285334></td>
  <td colspan=22 class=xl945334></td>
 </tr>
 <tr class=xl465334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=55 height=7 class=xl815334 style='height:5.25pt'></td>
  <td colspan=22 class=xl945334></td>
 </tr>
 <tr class=xl465334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl285334 style='height:17.25pt'></td>
  <td colspan=73 class=xl285334 style='border-right:.5pt dotted black'>Год
  подачи заявления о переходе на упрощенную систему налогообложения</td>
  <td colspan=3 class=xl485334 style='border-left:none'>2</td>
  <td colspan=3 class=xl485334 style='border-left:none'>0</td>
  <td colspan=3 class=xl485334 style='border-left:none'>1</td>
  <td colspan=3 class=xl485334 style='border-left:none'>7</td>
  <td colspan=34 class=xl955334 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr class=xl465334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=120 height=7 class=xl815334 style='height:5.25pt'></td>
 </tr>





 <tr class=xl465334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl285334 style='height:17.25pt'></td>
  <td colspan=58 class=xl285334 style='border-right:.5pt dotted black'>Получено
  доходов за девять месяцев года подачи уведомления</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>-</td>
  <td colspan=3 class=xl955334 style='border-left:none'>&nbsp;</td>
  <td colspan=11 class=xl285334>рублей <font class=font65334><sup>2</sup></font></td>
  <td colspan=20 class=xl815334></td>
 </tr>

 <tr class=xl465334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=120 height=7 class=xl815334 style='height:5.25pt'></td>
 </tr>


<tr class=xl465334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl285334 style='height:17.25pt'></td>
  <td colspan=76 class=xl285334 style='border-right:.5pt dotted black'>Остаточная стоимость основных средств на 1 октября подачи уведомления составляет</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>-</td>
  <td colspan=3 class=xl955334 style='border-left:none'>&nbsp;</td>
  <td colspan=11 class=xl285334>рублей <font class=font65334><sup>2</sup></font></td>
  <td colspan=2 class=xl815334></td>
 </tr>







 <tr class=xl465334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=120 height=7 class=xl815334 style='height:5.25pt'></td>
 </tr>
 <tr class=xl465334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl285334 style='height:17.25pt'></td>
  <td colspan=82 class=xl285334 style='border-right:.5pt dotted black'>На 1 странице с приложением подтверждающего документа или его копии<font class=font65334><sup>6</sup></font> на</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>-</td>
  <td colspan=3 class=xl955334 style='border-left:none'>&nbsp;</td>
  <td colspan=14 class=xl285334>листах</td>
  <td colspan=11 class=xl815334></td>
 </tr>






 
 <tr class=xl315334 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=120 height=16 class=xl965334 style='height:12.0pt'>&nbsp;</td>
 </tr>
 <tr class=xl305334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=63 height=7 class=xl975334 style='border-right:.5pt solid black;
  height:5.25pt'>&nbsp;</td>
  <td colspan=57 rowspan=2 class=xl675334>Заполняется работником налогового
  органа</td>
 </tr>
 <tr class=xl305334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td colspan=4 height=23 class=xl335334 style='border-right:.5pt dotted black;
  height:17.25pt'></td>
  <td colspan=3 class=xl485334 style='border-left:none'>1</td>
  <td class=xl335334></td>
  <td colspan=30 class=xl505334 width=180 style='width:150pt'>1 -
  налогоплательщик<br>
    2 - представитель налогоплательщика</td>
  <td colspan=25 class=xl335334 style='border-right:.5pt solid black'></td>
 </tr>
 <tr class=xl305334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=63 height=7 class=xl1015334 style='height:5.25pt'></td>
  <td colspan=57 class=xl1025334>&nbsp;</td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl305334 style='height:17.25pt'></td>
  <?php 
$fio = toUpper($familya);

	$first = "<td colspan=3 class=xl485334>";
	$other = "<td colspan=3 class=xl485334 style='border-left:none'>";
	$tdcl = "</td>";
	$fllen = mb_strlen($fio,'utf-8');
	echo $first . mb_substr($fio, 0, 1,'utf-8') . $tdcl;
	for($j=1;$j<20;$j++){
			echo $other .( mb_substr($fio, $j, 1,'utf-8')?mb_substr($fio, $j, 1,'utf-8'):"&nbsp;" ). $tdcl;
	}//for
?>

  <td colspan=2 class=xl1035334 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td colspan=9 class=xl1055334 style='border-left:none'>&nbsp;</td>
  <td colspan=31 class=xl465334>Данное уведомление представлено</td>
  <td colspan=5 class=xl255334 style='border-right:.5pt dotted black'>(код)</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=6 class=xl1035334 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr class=xl325334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=63 height=7 class=xl1065334 style='border-right:.5pt solid black;
  height:5.25pt'></td>
  <td colspan=57 class=xl1085334 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr class=xl325334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td height=7 class=xl345334 style='height:5.25pt'></td>
  <?php 
$fio = toUpper($imya);

	$first = "<td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;  border-bottom:.5pt dotted black'>";
	$other = "<td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;  border-bottom:.5pt dotted black'>";
	$tdcl = "</td>";
	echo $first . mb_substr($fio, 0, 1,'utf-8') . $tdcl;
	for($j=1;$j<20;$j++){
			echo $other .( mb_substr($fio, $j, 1,'utf-8')?mb_substr($fio, $j, 1,'utf-8'):"&nbsp;" ). $tdcl;
	}//for
?>

  <td colspan=2 rowspan=2 class=xl905334 style='border-right:.5pt solid black'>&nbsp;</td>
  <td rowspan=2 class=xl1085334>&nbsp;</td>
  <td colspan=25 rowspan=4 class=xl785334 width=258 style='width:125pt'>Дата
  представления<br>
    уведомления</td>
  <td colspan=31 class=xl895334></td>
 </tr>
 <tr class=xl325334 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl345334 style='height:12.0pt'></td>
  <td rowspan=2 class=xl1105334>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl745334>.</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl745334>.</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
 </tr>
 <tr class=xl325334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td height=7 class=xl345334 style='height:5.25pt'></td>
  <td class=xl345334></td>
  <td class=xl345334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl325334></td>
  <td class=xl355334>&nbsp;</td>
  <td class=xl325334></td>
 </tr>
 <tr class=xl325334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td height=7 class=xl325334 style='height:5.25pt'></td>
  <?php 
$fio = toUpper($otchestvo);

	$first = "<td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;  border-bottom:.5pt dotted black'>";
	$other = "<td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;  border-bottom:.5pt dotted black'>";
	$tdcl = "</td>";
	echo $first . mb_substr($fio, 0, 1,'utf-8') . $tdcl;
	for($j=1;$j<20;$j++){
			echo $other .( mb_substr($fio, $j, 1,'utf-8')?mb_substr($fio, $j, 1,'utf-8'):"&nbsp;" ). $tdcl;
	}//for
?>

  <td class=xl325334></td>
  <td class=xl355334>&nbsp;</td>
  <td rowspan=3 class=xl1085334>&nbsp;</td>
  <td colspan=31 rowspan=2 class=xl895334 style='border-bottom:.5pt dotted black'></td>
 </tr>
 <tr class=xl325334 height=9 style='mso-height-source:userset;height:6.75pt'>
  <td height=7 class=xl325334 style='height:6.75pt'></td>
  <td class=xl325334></td>
  <td class=xl355334>&nbsp;</td>
  <td colspan=17 rowspan=4 class=xl795334 width=258 style='width:85pt'>Зарегистрировано<br>
    за №</td>
  <td colspan=8 class=xl1125334 width=258 style='width:40pt'>&nbsp;</td>
 </tr>
 <tr class=xl325334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td height=7 colspan="63" class=xl325334 style='height:5.25pt'></td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
  <td colspan=3 rowspan=2 class=xl585334 style='border-right:.5pt dotted black;
  border-bottom:.5pt dotted black'>&nbsp;</td>
 </tr>
 
 
 <tr class=xl325334 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=62 height=16 class=xl805334 style='height:12.0pt'>(фамилия, имя,
  отчество<font class=font65334><sup>5</sup></font> руководителя организации/представителя налогоплательщика)</td>
  <td class=xl355334>&nbsp;</td>
  <td rowspan=2 class=xl1085334>&nbsp;</td>
 </tr>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <tr class=xl305334 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl275334 style='height:12.0pt'></td>
  <td colspan=60 class=xl385334>Номер контактного телефона</td>
  <td class=xl385334></td>
  <td class=xl395334>&nbsp;</td>
  <td colspan=57 rowspan=6 class=xl335334></td>
 </tr>
 <tr class=xl305334 height=6 style='mso-height-source:userset;height:4.5pt'>
  <td colspan=63 height=6 class=xl335334 style='border-right:.5pt solid black;
  height:4.5pt'></td>
 </tr>
 <tr class=xl305334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl305334 style='height:17.25pt'></td>
  <td colspan=3 class=xl485334>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl1035334 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
 </tr>
 <tr class=xl305334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=63 height=7 class=xl335334 style='border-right:.5pt solid black;
  height:5.25pt'></td>
 </tr>

 
 
 
 
 
 <tr class=xl325334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td colspan=9 height=23 class=xl375334 style='height:17.25pt'>Подпись</td>
  <td colspan=15 class=xl545334>&nbsp;</td>
  <td colspan=7 class=xl385334 style='border-right:.5pt dotted black'>Дата</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl555334 style='border-right:.5pt dotted black'>.</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl555334 style='border-right:.5pt dotted black'>.</td>
  <td colspan=3 class=xl485334 style='border-left:none'>2</td>
  <td colspan=3 class=xl485334 style='border-left:none'>0</td>
  <td colspan=3 class=xl485334 style='border-left:none'>1</td>
  <td colspan=3 class=xl485334 style='border-left:none'>7</td>
  <td colspan=2 class=xl905334 style='border-right:.5pt solid black;border-left:
  none'>&nbsp;</td>
  <td colspan=57 class=xl1085334 style='border-left:none'>&nbsp;</td>
 </tr>




 <tr class=xl325334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td colspan=9 height=23 class=xl895334 style='height:17.25pt'></td>
  <td colspan=15 class=xl535334>М.П.</td>
  <td colspan=39 class=xl895334 style='border-right:.5pt solid black'></td>
  <td colspan=57 class=xl1085334 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr class=xl305334 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl275334 style='height:12.0pt'></td>
  <td colspan=60 class=xl385334>Наименование документа,</td>
  <td class=xl385334></td>
  <td class=xl395334>&nbsp;</td>
  <td colspan=2 class=xl1145334 style='border-left:none'>&nbsp;</td>
  <td colspan=30 class=xl575334>Фамилия, И.О. <font class=font65334><sup>5</sup></font></td>
  <td colspan=2 class=xl445334></td>
  <td colspan=21 class=xl575334>Подпись</td>
  <td class=xl305334></td>
  <td class=xl305334></td>
 </tr>




 <tr class=xl305334 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl275334 style='height:12.0pt'></td>
  <td colspan=60 class=xl385334>подтверждающего полномочия представителя</td>
  <td class=xl385334></td>
  <td class=xl395334>&nbsp;</td>
  <td colspan=57 rowspan=6 class=xl335334></td>
 </tr>
 <tr class=xl305334 height=6 style='mso-height-source:userset;height:4.5pt'>
  <td colspan=63 height=6 class=xl335334 style='border-right:.5pt solid black;
  height:4.5pt'></td>
 </tr>
 <tr class=xl305334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl305334 style='height:17.25pt'></td>
  <td colspan=3 class=xl485334>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl1035334 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
 </tr>
 <tr class=xl305334 height=7 style='mso-height-source:userset;height:5.25pt'>
  <td colspan=63 height=7 class=xl335334 style='border-right:.5pt solid black;
  height:5.25pt'></td>
 </tr>
 
 
 <tr class=xl305334 height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl305334 style='height:17.25pt'></td>
  <td colspan=3 class=xl485334>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl485334 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl1035334 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
 </tr>








 <tr class=xl305334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=63 height=18 class=xl335334 style='height:13.9pt'></td>
 </tr>
 <tr class=xl415334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=3 height=9 class=xl805334 style='height:6.95pt'></td>
  <td colspan=117 class=xl405334
  x:str="1, 2 - Сведения, отмеченные сносками 1 и 2, не заполняются заявителями, имеющими соответствующий код признака заявителя. В незаполненных строках заявления ">1,
  2 - Сведения, отмеченные сносками 1 и 2, не заполняются заявителями, имеющими
  соответствующий код признака заявителя. В незаполненных строках
  заявления<span style='mso-spacerun:yes'> </span></td>
 </tr>
 <tr class=xl415334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=6 height=9 class=xl1155334 style='height:6.95pt'></td>
  <td colspan=114 class=xl1165334>проставляется прочерк.</td>
 </tr>
 <tr class=xl415334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=3 height=9 class=xl805334 style='height:6.95pt'></td>
  <td colspan=117 class=xl805334>3 - С даты постановки на учет вправе перейти
  только вновь созданные организации и вновь зарегистрированные индивидуальные
  предприниматели.</td>
 </tr>
 
 
 <tr class=xl415334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=3 height=9 class=xl805334 style='height:6.95pt'></td>
  <td colspan=117 class=xl405334>4 - С начала месяца текущего календарного года
  вправе перейти налогоплательщики, прекратившие применение системы
  налогообложения в виде единого налога на вмененный</td>
 </tr>
 
 
 <tr class=xl415334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=3 height=9 class=xl805334 style='height:6.95pt'></td>
  <td colspan=117 class=xl405334>доход для отдельных видов деятельности (далее
  ЕНВД) в соответствии с законом субъекта Российской Федерации.</td>
 </tr>
 <tr class=xl415334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=3 height=9 class=xl805334 style='height:6.95pt'></td>
  <td colspan=117 class=xl405334>* Код признака налогоплательщика:</td>
 </tr>
 <tr class=xl415334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=6 height=9 class=xl1155334 style='height:6.95pt'></td>
  <td colspan=114 class=xl1165334>1 - Организации и индивидуальные
  предприниматели, подающие заявление одновременно с документами на
  государственную регистрацию;</td>
 </tr>
 <tr class=xl415334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=6 height=9 class=xl1155334 style='height:6.95pt'></td>
  <td colspan=114 class=xl1165334>2 - Вновь созданные организации и вновь
  зарегистрированные индивидуальные предприниматели, подающие заявление в
  пятидневный срок с даты постановки на учет</td>
 </tr>
 <tr class=xl405334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=8 height=9 class=xl1155334 style='height:6.95pt'></td>
  <td colspan=112 class=xl1165334>в налоговом органе, включая организации и
  индивидуальных предпринимателей, подающих заявление одновременно с
  документами на государственную регистрацию,</td>
 </tr>
 <tr class=xl405334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=8 height=9 class=xl1155334 style='height:6.95pt'></td>
  <td colspan=112 class=xl1165334>а также налогоплательщики, прекратившие
  применение системы налогообложения в виде ЕНВД в соответствии с законом
  субъекта Российской Федерации;</td>
 </tr>
 <tr class=xl405334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=6 height=9 class=xl1155334 style='height:6.95pt'></td>
  <td colspan=114 class=xl1165334>3 - Организации и индивидуальные
  предприниматели, переходящие с иных режимов налогообложения, за исключением
  налогоплательщиков ЕНВД.</td>
 </tr>

<tr class=xl415334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=3 height=9 class=xl805334 style='height:6.95pt'></td>
  <td colspan=117 class=xl405334>5  Отчество указывается при наличии.</td>
 </tr>
<tr class=xl415334 height=9 style='mso-height-source:userset;height:6.95pt'>
  <td colspan=3 height=9 class=xl805334 style='height:6.95pt'></td>
  <td colspan=117 class=xl405334>6  К  уведомлению  прилагается  документ  или  его копия, подтверждающие
полномочия представителя.</td>
 </tr>





 <tr class=xl405334 height=4 style='mso-height-source:userset;height:3.0pt'>
  <td colspan=120 height=4 class=xl1155334 style='height:3.0pt'></td>
 </tr>
 <tr class=xl235334 height=19 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=3 height=19 class=xl735334 style='height:14.25pt'>&nbsp;</td>
  <td colspan=114 class=xl855334></td>
  <td colspan=3 class=xl735334>&nbsp;</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=180 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=18 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=258 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
  <td width=192 style='width:5pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--КОНЕЦ ФРАГМЕНТА ПУБЛИКАЦИИ МАСТЕРА ВЕБ-СТРАНИЦ EXCEL-->
<!----------------------------->
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
#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function toUpper($content)   --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function toUpper($content) {
//$content = strtr($content, 'абвгдеёжзийклмнорпстуфхцчшщъьыэюя', 'АБВГДЕЁЖЗИЙКЛМHОРПСТУФХЦЧШЩЪЬЫЭЮЯ');
return mb_strtoupper($content,'utf-8');
}



?>