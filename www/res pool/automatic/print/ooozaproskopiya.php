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
<link rel=File-List href="zaproskopiya.files/filelist.xml">
<title>Запрос Копия</title>
<style>
<!--
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
h1
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-font-kerning:0pt;
	font-weight:normal;}
h2
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	font-size:18.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-bidi-font-weight:normal;}
h3
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:3;
	font-size:18.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	font-weight:normal;}
h4
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:right;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:4;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	font-weight:normal;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;
	mso-bidi-font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.MsoBodyText2, li.MsoBodyText2, div.MsoBodyText2
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:79.4pt 90.7pt 72.0pt 90.7pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
-->
</style>

</head>

<body lang=RU style='tab-interval:36.0pt'>

<div class=Section1>

<p class=MsoNormal style='text-align:justify'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><b style='mso-bidi-font-weight:
normal'><span
style='mso-spacerun:yes'>                                                          
</span></b><span
style='mso-spacerun:yes'>                                  </span><span
style='font-size:14.0pt;mso-bidi-font-size:10.0pt'><span
style='mso-spacerun:yes'> </span><o:p></o:p></span></p>

<h4><span style='mso-bidi-font-size:14.0pt'><span
style='mso-spacerun:yes'>                                                  
</span><span style='mso-spacerun:yes'> </span>В МИФНС России № 46 по<span
style='mso-spacerun:yes'>  </span>г. Москве<o:p></o:p></span></h4>

<p class=MsoNormal align=right style='text-align:right'><span style='font-size:
14.0pt'>от Заявителя ООО «<?php echo $nameshort; ?>»</span></p>

<p class=MsoNormal align=right style='text-align:right'><span style='font-size:
14.0pt'><?php echo $fiorod; ?><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<h3>ЗАПРОС</h3>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><span style='mso-spacerun:yes'>  </span><o:p></o:p></span></p>

<p class=MsoBodyText2><span style='mso-spacerun:yes'>   </span><span
style='mso-spacerun:yes'>   </span><span style='font-size:15.0pt'>Прошу Вас
предоставить <b style='mso-bidi-font-weight:normal'>копию устава </b>ООО «<?php echo $nameshort; ?>» в 1 экземпляре, квитанция об оплате
прилагается.<span style='mso-spacerun:yes'>                  </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><span style='mso-spacerun:yes'>    </span><span
style='mso-spacerun:yes'> </span>Заявитель <span
style='mso-spacerun:yes'>  </span><span style='mso-spacerun:yes'> </span><span
style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'> </span>_______________
<span style='mso-spacerun:yes'> </span><?php echo $familya; ?> <?php echo mb_substr($imya, 0, 1,'utf-8'); ?>.<?php  echo ($otchestvo!='')? mb_substr($otchestvo, 0, 1,'utf-8').'.' :''; ?></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><span style='mso-spacerun:yes'>   </span><span
style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'> </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

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
