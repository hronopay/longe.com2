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
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns:st1="urn:schemas-microsoft-com:office:smarttags"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<link rel=File-List href="РЕШЕНИЕ.files/filelist.xml">
<title>РЕШЕНИЕ 1</title>
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
	{font-family:"MS Mincho";
	panose-1:2 2 6 9 4 2 5 8 3 4;
	mso-font-alt:"\FF2D\FF33 \660E\671D";
	mso-font-charset:128;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:fixed;
	mso-font-signature:1 134676480 16 0 131072 0;}
@font-face
	{font-family:Verdana;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:204;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:536871559 0 0 0 415 0;}
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
	text-indent:0cm;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	mso-list:l0 level1 lfo1;
	mso-hyphenate:none;
	tab-stops:list 0cm;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-font-kerning:0pt;
	mso-fareast-language:AR-SA;
	mso-bidi-font-weight:normal;}
h2
	{mso-style-next:Обычный;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:150%;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	mso-hyphenate:none;
	font-size:16.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-language:AR-SA;
	font-weight:normal;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 207.65pt right 415.3pt;
	text-autospace:none;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	tab-stops:center 233.85pt right 467.75pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:AR-SA;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	text-autospace:none;
	font-size:11.0pt;
	font-family:Arial;
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:AR-SA;}
p.MsoBodyTextIndent, li.MsoBodyTextIndent, div.MsoBodyTextIndent
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:14.15pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoSubtitle, li.MsoSubtitle, div.MsoSubtitle
	{mso-style-next:"Основной текст";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	text-autospace:ideograph-numeric;
	font-size:12.0pt;
	font-family:Arial;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-language:AR-SA;}
p.MsoBodyText2, li.MsoBodyText2, div.MsoBodyText2
	{margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	text-autospace:none;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.2, li.2, div.2
	{mso-style-name:Текст2;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:10.0pt;
	font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	mso-fareast-language:AR-SA;}
p.1, li.1, div.1
	{mso-style-name:Текст1;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-hyphenate:none;
	font-size:10.0pt;
	font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	mso-fareast-language:AR-SA;}
span.greenurl
	{mso-style-name:green_url;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("РЕШЕНИЕ.files/header.htm") fs;
	mso-footnote-continuation-separator:url("РЕШЕНИЕ.files/header.htm") fcs;
	mso-endnote-separator:url("РЕШЕНИЕ.files/header.htm") es;
	mso-endnote-continuation-separator:url("РЕШЕНИЕ.files/header.htm") ecs;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:18.0pt 1.0cm 1.0cm 42.55pt;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-even-header:url("РЕШЕНИЕ.files/header.htm") eh1;
	mso-header:url("РЕШЕНИЕ.files/header.htm") h1;
	mso-even-footer:url("РЕШЕНИЕ.files/header.htm") ef1;
	mso-footer:url("РЕШЕНИЕ.files/header.htm") f1;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:1;
	mso-list-template-ids:1;}
@list l0:level1
	{mso-level-number-format:none;
	mso-level-suffix:none;
	mso-level-text:"";
	mso-level-tab-stop:0cm;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level2
	{mso-level-number-format:none;
	mso-level-suffix:none;
	mso-level-text:"";
	mso-level-tab-stop:0cm;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level3
	{mso-level-number-format:none;
	mso-level-suffix:none;
	mso-level-text:"";
	mso-level-tab-stop:0cm;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level4
	{mso-level-number-format:none;
	mso-level-suffix:none;
	mso-level-text:"";
	mso-level-tab-stop:0cm;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level5
	{mso-level-number-format:none;
	mso-level-suffix:none;
	mso-level-text:"";
	mso-level-tab-stop:0cm;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level6
	{mso-level-number-format:none;
	mso-level-suffix:none;
	mso-level-text:"";
	mso-level-tab-stop:0cm;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level7
	{mso-level-number-format:none;
	mso-level-suffix:none;
	mso-level-text:"";
	mso-level-tab-stop:0cm;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level8
	{mso-level-number-format:none;
	mso-level-suffix:none;
	mso-level-text:"";
	mso-level-tab-stop:0cm;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level9
	{mso-level-number-format:none;
	mso-level-suffix:none;
	mso-level-text:"";
	mso-level-tab-stop:0cm;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1
	{mso-list-id:2;
	mso-list-type:simple;
	mso-list-template-ids:2;
	mso-list-name:WW8Num1;}
@list l1:level1
	{mso-level-tab-stop:30.0pt;
	mso-level-number-position:left;
	margin-left:30.0pt;
	text-indent:-18.0pt;}
@list l2
	{mso-list-id:350880343;
	mso-list-type:hybrid;
	mso-list-template-ids:-695823632 68747279 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
@list l2:level1
	{mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3
	{mso-list-id:549999024;
	mso-list-type:hybrid;
	mso-list-template-ids:839825256 68747279 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
@list l3:level1
	{mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l4
	{mso-list-id:1171794430;
	mso-list-template-ids:-142568584;}
@list l4:level1
	{mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l4:level2
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.";
	mso-level-tab-stop:56.45pt;
	mso-level-number-position:left;
	margin-left:56.45pt;
	text-indent:-21.0pt;}
@list l4:level3
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.";
	mso-level-tab-stop:88.9pt;
	mso-level-number-position:left;
	margin-left:88.9pt;
	text-indent:-36.0pt;}
@list l4:level4
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.";
	mso-level-tab-stop:106.35pt;
	mso-level-number-position:left;
	margin-left:106.35pt;
	text-indent:-36.0pt;}
@list l4:level5
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
	mso-level-tab-stop:141.8pt;
	mso-level-number-position:left;
	margin-left:141.8pt;
	text-indent:-54.0pt;}
@list l4:level6
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
	mso-level-tab-stop:159.25pt;
	mso-level-number-position:left;
	margin-left:159.25pt;
	text-indent:-54.0pt;}
@list l4:level7
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
	mso-level-tab-stop:194.7pt;
	mso-level-number-position:left;
	margin-left:194.7pt;
	text-indent:-72.0pt;}
@list l4:level8
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
	mso-level-tab-stop:212.15pt;
	mso-level-number-position:left;
	margin-left:212.15pt;
	text-indent:-72.0pt;}
@list l4:level9
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
	mso-level-tab-stop:247.6pt;
	mso-level-number-position:left;
	margin-left:247.6pt;
	text-indent:-90.0pt;}
@list l5
	{mso-list-id:1247152489;
	mso-list-type:hybrid;
	mso-list-template-ids:2027067842 68747265 68747267 68747269 68747265 68747267 68747269 68747265 68747267 68747269;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:45.0pt;
	mso-level-number-position:left;
	margin-left:45.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l5:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:81.0pt;
	mso-level-number-position:left;
	margin-left:81.0pt;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l6
	{mso-list-id:1385713675;
	mso-list-type:simple;
	mso-list-template-ids:-81898788;}
@list l6:level1
	{mso-level-tab-stop:54.0pt;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>

</head>

<body lang=RU style='tab-interval:35.4pt'>

<div class=Section1>

<p class=2><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></b></p>

<p class=2 align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt;font-family:"Times New Roman"'>РЕШЕНИЕ №1<o:p></o:p></span></b></p>

<h1 style='margin-left:0cm;text-indent:0cm;mso-list:l0 level1 lfo8;tab-stops:
0cm'>Учредителя Общества с ограниченной ответственностью<span style='font-size:
9.0pt;mso-bidi-font-weight:bold'><o:p></o:p></span></h1>

<p class=MsoBodyText align=center style='text-align:center'><b
style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt'><span
style='mso-spacerun:yes'> </span>«<?php echo $naimenovanie; ?>»<span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="98%"
 style='width:98.96%;margin-left:5.4pt;border-collapse:collapse;border:none;
 mso-border-top-alt:solid windowtext 3.0pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-lastrow:yes'>
  <td width="61%" valign=top style='width:61%;border:solid windowtext 3.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='mso-fareast-font-family:"MS Mincho"'>г. Москва</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-family:Verdana;
  mso-bidi-font-family:Verdana'><o:p></o:p></span></b></p>
  </td>
  <td  valign=top style='width:39%;border:solid windowtext 3.0pt;
  border-left:none;mso-border-left-alt:solid windowtext 3.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='mso-fareast-font-family:"MS Mincho"'><?php echo date_mn($ustav_date) ?></span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-family:Verdana;
  mso-bidi-font-family:Verdana'><o:p></o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-right:-10.6pt'><span style='color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'>Я, <?php echo $fio; ?>, дата рождения <?php echo  date_order($from_date)  ; ?>, <?php echo  $mestorojdeniya; ?>, (<?php echo $dokument_dvid; ?> серия <?php echo  $seriap; ?> номер <?php echo  $nomerp; ?> выдан <?php echo  $kemvydanp; ?> <?php echo  date_order($to_date)  ;  echo $kodp? " код
подразделения ".$kodp:""; ?>, 

<?php if ($subject || $gorod) { ?>
адрес регистрации <?php echo $pochtindex ; ?>, <?php echo !strstr($subject, "Москва") ? "".$subject.", " : ""; ?> <?php echo $his_newmoscow == 2 ? "Москва, " : ""; ?> <?php echo $rajon ? "".$rajon.", " : ""; ?> <?php echo $gorod ? ($gorod != "Москва город" ? " ".$gorod.", " : "г. Москва, ") : ""; ?> <?php echo $naspunkt ? "".$naspunkt.", " : ""; ?> <?php echo $ulitca ? "".$ulitca.", " : ""; ?> <?php echo $dom ? " ".$dom.", " : ""; ?> <?php echo $korpus ? "  ".$korpus.", " : ""; ?>  <?php echo $kvartira ? " ".$kvartira."" : ""; ?>
<?php }
else { ?>
адрес проживания: <?php echo $countries[$strana] ; ?>, <?php echo $mesto ? " ".$mesto."" : ""; ?>
<? } ?>)</span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><?php echo $his_pol==1?"РЕШИЛ":"РЕШИЛА"; ?>:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><o:p>&nbsp;</o:p></span></p>

<ol style='margin-top:0cm' start=1 type=1>
 <li class=MsoNormal style='text-align:justify;mso-list:l2 level1 lfo9;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-weight:bold'>Учредить
     Общество с ограниченной ответственностью «<?php echo $naimenovanie; ?>» (далее –
     общество).<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo9;tab-stops:list 36.0pt right 360.0pt'><span
     style='mso-bidi-font-weight:bold'>Размер уставного капитала </span>общества
     определить в размере <?php echo $kapital; ?> рублей. Размер доли учредителя –
     100%, номинальная стоимость - <?php echo $kapital; ?> рублей. Уставный капитал вносится учредителем денежными средствами на счет Общества. Учредитель общества оплачивает Уставный капитал в течение 4 месяцев с момента государственной регистрации общества. </li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo9;tab-stops:list 36.0pt right 360.0pt'>
 Утвердить Устав общества от <?php echo date_mn($ustav_date); ?>   </li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo9;tab-stops:list 36.0pt right 360.0pt'>Утвердить
     местонахождение общества – <?php echo $juraddr_content; ?>.</li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo9;tab-stops:list 36.0pt right 360.0pt'>Генеральным
     директором общества назначить <?php
$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE `gendir_yn`='да' AND `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
while ($row = mysql_fetch_object($Or)){
    $fiovin = $row->fiovin;
    $gendir_yn = $row->gendir_yn;

if($gendir_yn=='да') echo  $fiovin; }?>.</li>
</ol>

<p class=MsoNormal style='margin-left:18.0pt;tab-stops:right 360.0pt'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-left:18.0pt;tab-stops:right 360.0pt'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='text-indent:12.0pt;tab-stops:0cm'><b
style='mso-bidi-font-weight:normal'>Учредитель:<o:p></o:p></b>

<?php /* </p>

<p class=1 align=right style='text-align:right;text-indent:180.0pt'><b
style='mso-bidi-font-weight:normal'> */?>
 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
<span style='font-size:12.0pt;font-family:
"Times New Roman"'>______________________________________ / <?php echo $familya; ?> <?php echo mb_substr($imya, 0, 1,'utf-8'); ?>.<?php  echo ($otchestvo!='')? mb_substr($otchestvo, 0, 1,'utf-8').'.' :''; ?>/<o:p></o:p></span></b></p>

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