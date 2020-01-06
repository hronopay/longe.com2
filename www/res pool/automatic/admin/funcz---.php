<?
unset($SettingsArray);
unset($CQ8);
unset($ActionAndOffset);
unset($CS0);
$CS0=null;
$SettingsArray['year' ]= (int)$_GET['year'];
$SettingsArray['month']= (int)$_GET['month'];
$SettingsArray['day' ]= (int)$_GET['day'];
$SettingsArray['offset']= (int)$_GET['offset'];

if($SettingsArray['year']<=0 || $SettingsArray['year']>2100){
	$SettingsArray['year']=date("Y");
}
if($SettingsArray['month']<=0 || $SettingsArray['month']>12){
	$SettingsArray['month']=date("m");
}
if($SettingsArray['day']<=0 || $SettingsArray['day']>31)		{
	$SettingsArray['day']=date("d");
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function wwwwwww($user_id)     ------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function wwwwwww($user_id){
open_connection();
#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  {$skript = 'adm_cabinet.php'; }
else {$skript = 'cabinet.php'; $partnerlogin = $_POST["partnerlogin"] = $_POST["login"];}


close_connection(); 
}
















#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function upload_files($user_id)     ---------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function upload_files($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  	{
																$skript 	= 'adm_cabinet.php'; 
																$arr2 		= $_POST["partnerlogin"];
															}
else 														{
																$skript 	= 'cabinet.php'; 
																$arr2 		= $_POST["login"];
															}
$arr0 = $idlevel_1;
$arr1 = $idlevel_2;
#$arr = $arr0."$$$".$arr1."$$$".$arr2."$$$".$postfix;


open_connection();

	$now_dir="./";
	$now_root = realpath("$now_dir");
	$image_dir="./partners_files/";
	$root = realpath("$image_dir");

//if($_SERVER['SERVER_NAME'] != 'mcall.ru') echo "<h2>Тут не делать!!! Делать на mcall.ru ! </h2>";
if ($act == "delete"){
 $result = sql_do("DELETE FROM partnerdocs WHERE user_id='$user_id' AND file = '$filename' ");

 echo "<br>";
	echo  "Удален файл ". str_replace("_".$user_id."_","",$filename)    ;
 echo "<br>";
	unlink( $root.'/'.$filename );
}


//echo $b1;



#-----------------------------------------ЗАГРУЗКА-------------------------------------------$$$
if ( $do == 'upload' )
{
 	$file_ref = $_FILES['file_ref'];
/* echo "<br>";
	echo */ $file_ref_name = $file_ref['name'];
/* echo "<br>";
	echo */ $file_ref_size = $file_ref['size'];
/* echo "<br>";
	echo */ $file_ref_type = $file_ref['type'];
/* echo "<br>";
	echo */ $file_ref_tmp_name = $file_ref['tmp_name'];
/* echo "<br>";
echo ("image_dir ".$image_dir."<br>");  */
 
//      application/msword         application/vnd.ms-excel

//echo "XXX--- ".$file_ref_type." ---XXX<br><br><br>";

$typeok = (strstr($file_ref_type,'jpg') || strstr($file_ref_type,'jpeg')|| strstr($file_ref_type,'application/vnd.ms-excel') || strstr($file_ref_type,'text/plain') || strstr($file_ref_type,'application/download') || strstr($file_ref_type,'application/msword') )? 1:0;

$image = "";
		if ($file_ref_size > 0 && $file_ref_size < 2000000 && $typeok)
		{
			if (preg_match("/^([a-zA-Z0-9._])/i", $file_ref_name) ) $file_ref_name = translit ($file_ref_name);
			$image = addSlashes($file_ref_name);
				$root = realpath("$image_dir");
				copy($file_ref_tmp_name, $root."/"."_".$partner."_".$arr0."_".$arr1."_".$image);
				$fn = "_".$partner."_".$arr0."_".$arr1."_".$image;

#			 	$result = @mysql_query("INSERT INTO `partnerdocs` (`id`, `user_id`, 	`file`,`title`, `created`, 		`status`) VALUES (NULL, '$user_id', '$fn', '$title', CURRENT_TIMESTAMP, '0')");
				
			 	$result = mysql_query("INSERT INTO `".$arr2."__files`  (`id`, `idlevel_1`, `idlevel_2`, `adress`, `dateofcreation`, `docname`, `upload_d`, `filename`, `size`, `notes`, `parent`, `children`, `level`, `objrusname`) 
				VALUES (NULL, '$arr0', '$arr1', '', CURRENT_TIMESTAMP, '$title', CURRENT_TIMESTAMP, '$fn', '$file_ref_size', '', '', '', '', '');");
		}
		else echo "Недопустимый размер файла $file_ref_size байт!";








}
#--------------------------------------------------------------------------------------------$$$


?>
<br>
<br>
Загрузить<br><font size="-3">(Допустимые типы файлов - jpg , jpeg , txt , pdf , doc , xls , размер файла не более 2 мегабайт!)</font><br><br>


<form action="<?=$_SERVER['SCRIPT_NAME'];?>?mode=upload_files" method="post" name="fi"  ENCTYPE="multipart/form-data">


Название документа <input name="title"  type="text" value=""><br>
Файл <font color="#FFFFFF">____________</font> <input type="file" name="file_ref" style="width:300px;" ><br>
<input name="partner"  type="hidden" value="<?=$user_id?>">
<input name="idlevel_1"  type="hidden" value="<?=$arr0?>">
<input name="idlevel_2"  type="hidden" value="<?=$arr1?>">
<input name="tablelevel"  type="hidden" value="<?=$_POST['tablelevel'];?>">
<input name="do"  type="hidden" value="upload">
<br>
<input name="b1" type="submit" value="Загрузить">
</form>

<?php /* <!-- */?>
<table class="printview">
<thead>
	<tr><th>Файл</th><th>Загрузить</th><th>Удалить</th></tr>
</thead>
<tbody>


        <?
//	echo  $user_id."<br>";
	chdir($root);
	$dir = opendir(".");
	while ( false !== ($file = readdir($dir)) )
	{
		if (($file != ".") && ($file != "..")  && ($file != "index.php"))
		{
			$pieces = explode("_", $file);
			$login = $pieces[1];
			if($user_id == $login) { 
?>
				<tr>
				    <td><? echo str_replace("_".$user_id."_".$arr0."_".$arr1."_","",$file);?></td>
				    <td><a href="./partners_files/<? echo $file;?>">Скачать</a></td>
				    <td><a href="<?=$_SERVER['SCRIPT_NAME'];?>?mode=docfiles&act=delete&filename=<? echo $file;?>">Удалить</a></td>
				</tr> 
<?			}
		}
	}
	closedir($dir);
	
?>
</tbody>
</table>
<br>
<br>
<br>

<?php /* --> */?>

<table class="printview">
<thead>
	<tr><th>Название</th><th>Создан</th><th>Файл</th><th>Размер</th><th>Получить</th><th>Просмотр</th><th>Удалить</th><th>Пометки</th></tr>
</thead>
<tbody>

<?


 	$result = sql_do("SELECT * FROM  `".$arr2."__files`  WHERE  `idlevel_1` = ".$arr0." AND `idlevel_2` = ".$arr1." ");
	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$id = $ro['id'];
		$file = $ro['filename'];
		$title = $ro['docname'];
		$size = $ro['size'];
		$created = $ro['upload_d'];
		$whynot = $ro['notes'];?>
				<tr>
				    <td><?=$title;?></td>
				    <td><?=substr($created,0,16);?></td>
				    <td><? echo str_replace("_".$user_id."_".$arr0."_".$arr1."_","",$file);?></td>
				    <td><? echo round($size/1024,2);?> Мб</td>
				    <td><a href="./partners_files/<? echo $file;?>" target="_blank">Скачать</a></td>


				    <td><? echo !strstr($file, ".jpg") && !strstr($file, ".jpeg")? " - ": "<font style=\"text-decoration:underline; font-size:10px; font-weight:bold; cursor:pointer; \" color=blue onmouseover=\"Tip('<img src=./partners_files/".$file." width=400>', SHADOW, true, WIDTH, -450 , FADEOUT, 1000 )\" onmouseout=\"UnTip()\" >Просмотр</font>" ;?></td>


				    <td><?php if ($status < 2) {?><a href="<?=$_SERVER['SCRIPT_NAME'];?>?mode=upload_files&act=delete&id=<? echo $id;?>">Удалить</a><?php }
					else {?>&nbsp;<?php }?></td>
				    <td><? echo !$whynot? " - ": $whynot ;?></td>
				</tr> 
		<?
	}
?>
</tbody>
</table>

<?


//phpinfo();
//phpinfo(32);
close_connection();

}

function translit ($name){ 
$name = str_replace ("а","a",$name);
$name = str_replace ("б","b",$name);
$name = str_replace ("в","v",$name);
$name = str_replace ("г","g",$name);
$name = str_replace ("д","d",$name);
$name = str_replace ("е","e",$name);
$name = str_replace ("ж","g",$name);
$name = str_replace ("з","z",$name);
$name = str_replace ("и","i",$name);
$name = str_replace ("й","i",$name);
$name = str_replace ("к","k",$name);
$name = str_replace ("л","l",$name);
$name = str_replace ("м","m",$name);
$name = str_replace ("н","n",$name);
$name = str_replace ("о","o",$name);
$name = str_replace ("п","p",$name);
$name = str_replace ("р","r",$name);
$name = str_replace ("с","s",$name);
$name = str_replace ("т","t",$name);
$name = str_replace ("у","u",$name);
$name = str_replace ("ф","f",$name);
$name = str_replace ("х","h",$name);
$name = str_replace ("ц","tz",$name);
$name = str_replace ("ч","ch",$name);
$name = str_replace ("ш","sh",$name);
$name = str_replace ("щ","",$name);
$name = str_replace ("ь","",$name);
$name = str_replace ("ъ","",$name);
$name = str_replace ("э","e",$name);
$name = str_replace ("ю","yu",$name);
$name = str_replace ("я","ya",$name);
$name = str_replace ("Ы","Y",$name);
$name = str_replace ("ы","y",$name);
$name = str_replace (" ","",$name);

$name = str_replace ("А","a",$name);
$name = str_replace ("Б","b",$name);
$name = str_replace ("В","v",$name);
$name = str_replace ("Г","g",$name);
$name = str_replace ("Д","d",$name);
$name = str_replace ("Е","e",$name);
$name = str_replace ("Ж","g",$name);
$name = str_replace ("З","z",$name);
$name = str_replace ("И","i",$name);
$name = str_replace ("Й","i",$name);
$name = str_replace ("К","k",$name);
$name = str_replace ("Л","l",$name);
$name = str_replace ("М","m",$name);
$name = str_replace ("Н","n",$name);
$name = str_replace ("О","o",$name);
$name = str_replace ("П","p",$name);
$name = str_replace ("Р","r",$name);
$name = str_replace ("С","s",$name);
$name = str_replace ("Т","t",$name);
$name = str_replace ("У","u",$name);
$name = str_replace ("Ф","f",$name);
$name = str_replace ("Х","h",$name);
$name = str_replace ("Ц","tz",$name);
$name = str_replace ("Ч","ch",$name);
$name = str_replace ("Ш","sh",$name);
$name = str_replace ("Щ","",$name);
$name = str_replace ("Ь","",$name);
$name = str_replace ("Ъ","",$name);
$name = str_replace ("Э","e",$name);
$name = str_replace ("Ю","yu",$name);
$name = str_replace ("Я","ya",$name);
return $name;
}











#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function podacha_poluchenie_46()     ------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function podacha_poluchenie_46(){
#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------
global $SettingsArray,$ActionAndOffset;

###########################################################################################
if($sohr == '888'){//  то есть обрабатывем сохранение результата
	
	if(isset($_POST['daydate'])) $t=$daydate.' '.$hour.':'.$minutes.':00';
	else $t=date("20y").'-'.date("m").'-'.date("d").' '.$hour.':'.$minutes.':00';

	$stringForUrl="INSERT INTO ".PREFIX."__dnevnik (t,podacha,poluchenie) ";
	$stringForUrl.= "VALUES ('$t','$podacha','$poluchenie')";
	$EL5= mysql_query($stringForUrl);

	echo "Сохранено<br><br>";
}
###########################################################################################

$daydate = $SettingsArray['year'] .'-'. $SettingsArray['month'] .'-'. $SettingsArray['day'];
$yearV = $SettingsArray['year' ];
$monthV = $SettingsArray['month'];
$dayV = $SettingsArray['day' ];

echo '<fieldset class="bbcodes"><legend>В 46-й</legend>';


echo '<table width="710"  class="printview"> 	<form action="?mode=daysnotes&year='.($SettingsArray['year']).'&month='.($SettingsArray['month']).'&day='.($SettingsArray['day']).'" method="post" enctype="application/x-www-form-urlencoded" name="form46">
  <tr>
    <th scope="col">Подача</th>
    <th scope="col">Получение</th>
  </tr>
';
for ($i=1;$i<2;$i++){
	
	/* echo */ $q="SELECT * FROM ".PREFIX."__dnevnik WHERE (YEAR(t)={$yearV} AND MONTH(t)={$monthV}  AND DAY(t)={$dayV}    AND HOUR(t)={$i} ) ";
 $result15= mysql_query($q);
 if($result15){
 	while($row15=mysql_fetch_array($result15,MYSQL_ASSOC)){
			 $podacha = $row15['podacha'];
			 $poluchenie = $row15['poluchenie'];
	}
 }   	 	
	echo '  <tr>

															<input name="daydate" type="hidden" value="'.($daydate).'">
															<input name="hour" type="hidden" value="'.($i).'">
															<input name="minutes" type="hidden" value="00">
															
    <td><textarea name="podacha" cols="40" rows="8">'.$podacha.'</textarea></td>
    <td><textarea name="poluchenie" cols="40" rows="8">'.$poluchenie.'</textarea></td>
															<input name="sohr" type="hidden" value="888">
  </tr>
';

}
echo '</table>';
echo '<br>    <input name="b1" type="submit" value="Сохранить">	</form>';





echo '</fieldset>';
}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function weekdaytoday()     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function weekdaytoday(){
	$d = date("D");
	if ($d=='Mon') $d='Понедельник';
	elseif ($d=='Tue') $d='Вторник';
	elseif ($d=='Wed') $d='Среда';
	elseif ($d=='Thu') $d='Четверг';
	elseif ($d=='Fri') $d='Пятница';
	elseif ($d=='Sat') $d='Суббота';
	else $d='Воскресенье';
	return $d;
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function daysnotes($user_id)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function daysnotes($user_id){
global $SettingsArray,$ActionAndOffset;
open_connection();
#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  {$skript = 'adm_cabinet.php'; }
else {$skript = 'cabinet.php'; $partnerlogin = $_POST["partnerlogin"] = $_POST["login"];}

define('IDS_MONTHS', 'Январь Февраль Март Апрель Май Июнь Июль Август Сентябрь Октябрь Ноябрь Декабрь');
define('IDS_DAYSOFWEEK', 'Вс Пн Вт Ср Чт Пт Сб');
define('PREFIX', $_POST["partnerlogin"]);		// MySQL table trefix
define('FIRST_SUNDAY', '1');  // possible values are: 1 and 0


###########################################################################################
if($sohr == '777'){//  то есть обрабатывем сохранение результата
	
	if(isset($_POST['daydate'])) $t=$daydate.' '.$hour.':'.$minutes.':00';
	else $t=date("20y").'-'.date("m").'-'.date("d").' '.$hour.':'.$minutes.':00';

	$stringForUrl="INSERT INTO ".PREFIX."__dnevnik (t,tel,name,body) ";
	$stringForUrl.= "VALUES ('$t','$tel','$name','$body')";
	$EL5= mysql_query($stringForUrl);

	echo "Сохранено<br>$t<br>";
}
###########################################################################################

$CS0=null;
$SettingsArray['year' ]= (int)$_GET['year'];
$SettingsArray['month']= (int)$_GET['month'];
$SettingsArray['day' ]= (int)$_GET['day'];
$SettingsArray['offset']= (int)$_GET['offset'];

if($SettingsArray['year']<=0 || $SettingsArray['year']>2100){
	$SettingsArray['year']=date("Y");
}
if($SettingsArray['month']<=0 || $SettingsArray['month']>12){
	$SettingsArray['month']=date("m");
}
if($SettingsArray['day']<=0 || $SettingsArray['day']>31)		{
	$SettingsArray['day']=date("d");
}

$yearV = $SettingsArray['year' ];
$monthV = $SettingsArray['month'];
$dayV = $SettingsArray['day' ];

echo F_Calendar();
echo '<br><h3 align="center">';
if ($SettingsArray['day']==date("d")&&$SettingsArray['month']==date("m")) echo "Сегодня ";
echo $daydate = $SettingsArray['year'] .'-'. $SettingsArray['month'] .'-'. $SettingsArray['day'];
if ($SettingsArray['day']==date("d")&&$SettingsArray['month']==date("m")) echo ', '. weekdaytoday();
echo '</h3><br>';




echo '<table width="718"  class="printview">
  <tr>
    <th scope="col">Время</th>
    <th scope="col">Телефон</th>
    <th scope="col">Имя</th>
    <th scope="col">Суть дела</th>
    <th scope="col">Кнопа</th>
  </tr>
';
 $tel = '';
 $name = '';
 $body = '';

for ($i=9;$i<17;$i++){
	
	$q="SELECT * FROM ".PREFIX."__dnevnik WHERE (YEAR(t)={$yearV} AND MONTH(t)={$monthV}  AND DAY(t)={$dayV}    AND HOUR(t)={$i} ) ";
 $result15= mysql_query($q);
 if($result15){
 	while($row15=mysql_fetch_array($result15,MYSQL_ASSOC)){
			 $tel = $row15['tel'];
			 $name = $row15['name'];
			 $body = $row15['body'];
	}
 }   	 	
	echo '  <tr>
	<form action="?mode=daysnotes&year='.($SettingsArray['year']).'&month='.($SettingsArray['month']).'&day='.($SettingsArray['day']).'" method="post" enctype="application/x-www-form-urlencoded" name="form'.($i).'">
    <td><div align="center"><b>'.($i).'ч.</b></div></td>
															<input name="daydate" type="hidden" value="'.($daydate).'">
															<input name="hour" type="hidden" value="'.($i).'">
															<input name="minutes" type="hidden" value="00">
    <td><input name="tel" type="text" value="'.$tel.'"></td>
    <td><input name="name" type="text" value="'.$name.'"></td>
    <td><input name="body" type="text" value="'.$body.'"></td>
															<input name="sohr" type="hidden" value="777">
    <td><input name="b1" type="submit" value="Сохранить"></td>
	</form>
  </tr>
';
			 $tel = '';
			 $name = '';
			 $body = '';

}
echo '</table>';
echo '<br>';
echo '<br>';

podacha_poluchenie_46();
echo '<br>';

echo "Сегодня ";
echo weekdaytoday();
echo ' '.date("20y").'-'.date("m").'-'.date("d");


close_connection(); 
}

#####################################################################################################################################
#########################################       Функкции для F_Calendar()       #####################################################
#####################################################################################################################################

function F_Calendar(){

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  {$skript = 'adm_cabinet.php'; }
else {$skript = 'cabinet.php'; $partnerlogin = $_POST["partnerlogin"] = $_POST["login"];}

	global $SettingsArray,$ActionAndOffset;
	$ActionAndOffset['action']=0;
	$ActionAndOffset['user']=0;
	$ActionAndOffset['offset']=0;
	$ActionAndOffset['number']=0;
	$SettingsArray['number']=0;
	$Year=(int)date("Y");
	$Month_C=(int)date("m");
	$Day_C=(int)date("d");
	$F_year=($SettingsArray['year']>0) ? $SettingsArray['year'] : $Year;
	$F_month=($SettingsArray['month']>0) ? $SettingsArray['month'] : $Month_C;

	if($SettingsArray['day']>0){
		$HR9=$SettingsArray['day'];
	}
	else {
		$HR9=(0==$SettingsArray['year'] && 0==$SettingsArray['month'])? $Day_C : 0; 
	}
	
	$Days_C=array();

	for($i=0; $i<32; $i++) {
		$Days_C[$i]=0;
	}

	/* echo */ $stringForUrl="SELECT count(*) AS cnt,DAY(t) AS d FROM ".PREFIX."__dnevnik WHERE (YEAR(t)={$F_year} AND MONTH(t)={$F_month}) GROUP BY d";
 $result5= mysql_query($stringForUrl);
 if($result5){
 	while($row5=mysql_fetch_array($result5,MYSQL_ASSOC)){
		if($row5['d']>0 && $row5['d']<32) {
			/* echo */ $Days_C[$row5['d']]=$row5['cnt'];
 		}
	}
 } 
 else {} 

$F_daysInmonth=DaysInMonth($F_month,$F_year);
 $F_day=1;
 $i=DateEdges($F_year,$F_month,$F_day) - FIRST_SUNDAY;
 
 if($i<0) {$i=6; } 
 
 $Month_name=MonthWork($F_month);   // Возвр. название месяца.
 $HU2="
<div class=calendar> 
  <table border=0 cellspacing=0 cellpadding=2 class=cal_table>
";

	$ActionAndOffset['year']=($F_month>1)?$F_year:($F_year-1);
	$ActionAndOffset['month']=($F_month>1)?($F_month-1):12;
	$HV3=LinkMaker("&lt; ","cal_month_link","");
	$ActionAndOffset['year']=($F_month>11)?($F_year+1):$F_year;
	$ActionAndOffset['month']=($F_month>11)?1:($F_month+1);
	$HW4=LinkMaker("&gt; ","cal_month_link","");
	$ActionAndOffset['year']=$F_year>0?($F_year-1):0;
	$ActionAndOffset['month']=$F_month;
	$HX5=LinkMaker("&lt; ","cal_year_link","");
	$ActionAndOffset['year']=$F_year+1;
	$ActionAndOffset['month']=$F_month;
	$HY6=LinkMaker("&gt; ","cal_year_link","");
	$HU2.="
    <tr class=cal_tr_hdr>
      <td colspan=7 class=cal_td_hdr align=center>{$HV3}{$Month_name}$HW4 &nbsp; {$HX5}{$F_year}{$HY6}</td>
    </tr>
	";
	$HU2.=F_Sunday();
	$HU2.="<tr class=cal_tr_day>";

    if($i<7){
    	for($GA6=0; $GA6<$i; $GA6++) $HU2.="<td class=calc_empty>&nbsp;</td>";
	}

	$ActionAndOffset['year']=$F_year;
	$ActionAndOffset['month']=$F_month;

	for($GA6=1; $GA6<7 && $F_day<=$F_daysInmonth; $GA6++){
		while($i<7 && $F_day<=$F_daysInmonth){
			if($Days_C[$F_day]==0) {
				$F_today=$F_day;
				$F_today='<a href="/automatic/'.$skript.'?mode=daysnotes&year='.$F_year.'&month='.$F_month.'&day='.$F_day.'">'.$F_day.'</a>';
			}
			else {
				$ActionAndOffset['day']=$F_day;
				$F_today=LinkMaker($F_day,"cal_day","");
				$F_today='<a class="cal_day" href="/automatic/'.$skript.'?mode=daysnotes&year='.$F_year.'&month='.$F_month.'&day='.$F_day.'">'.$F_day.'</a>';
			}

			if($F_day==$Day_C && $F_month==$Month_C && $F_year==$Year){
				$HU2 .= "<td class=cal_today align=right title='сегодня'>".$F_today."</td>";
			}
			else if($F_day==$HR9){
				$HU2 .= "<td class=cal_select align=right title='выбрано'>".$F_today."</td>";
			}
			else if($Days_C[$F_day]==0){
				$HU2 .= "<td class=cal_none align=right>".$F_today."</td>";
			}
			else {
				$HU2 .= "<td class=cal_td_day align=right>".$F_today."</td>";
			}

			$F_day++;
			$i++;
		}

		if($F_day>$F_daysInmonth){
			for(; $i<7; $i++) $HU2.="<td class=calc_empty>&nbsp;</td>";
		}

		$i=0;
		$HU2 .= "</tr>\n";

		if($F_day<$F_daysInmonth) $HU2 .= "<tr class=cal_tr_day>";
	}

	$HU2 .= "  </table></div>";
	return $HU2; }







function WorkOverUrl($F_rawUrl){
global $SettingsArray,$ActionAndOffset;
$stringForUrl=AQ6("","year");
$stringForUrl=AQ6($stringForUrl,"month");
$stringForUrl=AQ6($stringForUrl,"day");
$stringForUrl=AQ6($stringForUrl,"user");
$stringForUrl=AQ6($stringForUrl,"number");
$stringForUrl=AQ6($stringForUrl,"offset");
$stringForUrl=AQ6($stringForUrl,"action");
if(strlen($stringForUrl)>0) $stringForUrl="?mode=daysnotes&" . $stringForUrl;
if(strlen($F_rawUrl)>0) $F_rawUrl="#" . $F_rawUrl;
return $SettingsArray['PHP_SELF'] . $stringForUrl . $F_rawUrl;
}


function AQ6($nach_str,$F_word){
	global $SettingsArray,$ActionAndOffset;
	$EC6=isset($ActionAndOffset[$F_word]) ? $ActionAndOffset[$F_word] : $SettingsArray[$F_word];
	if($EC6==0){
		return $nach_str;
	}
	return $nach_str . (strlen($nach_str)>0?"&":"") . "{$F_word}=" . $EC6;
}


function DaysInMonth($mon,$yea){
	$HK2=array(31,28,31,30,31,30,31,31,30,31,30,31);
 	if($mon==2) return 28 + (($yea%4)?0:1);
 	return ($mon>0 && $mon<13) ? $HK2[$mon-1] : 12;
 }


function DateEdges($HE6,$HF7,$F_day){
 if($HE6<0 || $HF7<1 || $HF7>12 || $F_day<1 || $F_day>31) return -1;
 $HH9=(int)($HE6 / 100);
 $HE6=(int)($HE6 % 100);
 
 if($HF7 < 3){
 	$HF7 += 12;
 	
	if($HE6 > 0) $HE6--;
 	else {
		$HE6=99;
 		$HH9--;
 	}
 } 
 $HI0=$F_day;
 $HI0=$HI0 + (int)((($HF7 + 1) * 26) / 10);
 $HI0=$HI0 + $HE6;
 $HI0=$HI0 + (int)($HE6 / 4);
 $HI0=$HI0 + (int)($HH9 / 4);
 $HI0=$HI0 - $HH9 - $HH9;
 while($HI0<0) $HI0+=7;
 $HI0=$HI0 % 7;
 if($HI0==0) $HI0=7;
 return $HI0-1;
 }



function MonthWork($mon){
	$HL3=explode(" ",IDS_MONTHS);
	if(count($HL3)!=12 || $mon<1 || $mon>12) return "Unknown";
	return $HL3[$mon-1];
}



function LinkMaker($F_text,$F_class,$F_rawUrl){
	$EG0=WorkOverUrl($F_rawUrl);
	return "<a href=\"{$EG0}\" class=\"{$F_class}\">{$F_text}</a>";
}






function F_Sunday(){
	$HL3=explode(" ",IDS_DAYSOFWEEK); 
	if(count($HL3)!=7) return "	<tr>
  									<td colspan=7>".F_Error("ERROR")."</td>
								</tr>";
	if(FIRST_SUNDAY){
		array_push($HL3,array_shift($HL3));
	}
	$FO4=" <tr class=cal_tr_dweek>";
	foreach($HL3 as $stringForUrl) $FO4.="  <td class=cal_td_dweek>".$stringForUrl."</td>";
	return $FO4."</tr>";
}



function F_Error($DD1){
	return "<span class=error>&nbsp;".str_replace("\n","<br>&nbsp;",htmlspecialchars($DD1))." &nbsp;</span><br>\n";
}



#####################################################################################################################################
######################################### КОНЕЦ   Функкции для F_Calendar()       ###################################################
#####################################################################################################################################


#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function WriteCheck99()     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function WriteCheck99(){
?>
<script language="JavaScript" type="text/javascript">
<!-- 
function check99( ss ) {
	//if (document.getElementById(ss).dopolnitelno.value!="") window.alert("dopolnitelno");
	document.getElementById(ss).submit();
   }
// -->
</script>
<?
}





#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------      function pso($user_id)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function pso($user_id){
open_connection();
#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  {$skript = 'adm_cabinet.php'; }
else {$skript = 'cabinet.php'; $partnerlogin = $_POST["partnerlogin"] = $_POST["login"];}

$qrq1 = "SELECT * FROM `".$_POST["partnerlogin"]."__user`  ";
$Orquser = mysql_query($qrq1)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<br>qqq1:<BR>".$qrq1."<BR>") ;
while ($rowuser = mysql_fetch_object($Orquser)){
    $user 	= $rowuser->organization;
}

$qqq1 = "SELECT * FROM `".$_POST["partnerlogin"]."__correspondence`  ";
$Or1 = mysql_query($qqq1)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<br>qqq1:<BR>".$qqq1."<BR>") ;


WriteCheck99();

echo '<script src="./js/sorttable.js"></script>';
echo'<table  class="printview sortable"><thead>
  <tr>
    <th scope="col">Получатель</th>
    <th scope="col">От</th>
    <th scope="col">Получено</th>
    <th scope="col">Сообщено</th>
    <th scope="col">Вручено</th>
    <th scope="col">email</th>
    <th scope="col">Коммент</th>
    <th scope="col">Изменить</th>
  </tr></thead><tbody>
';




while ($row1 = mysql_fetch_object($Or1)){
    $adress 	= $row1->adress;

    $idlevel_1 	= $row1->idlevel_1;
    $idlevel_2 	= $row1->idlevel_2;
    $id 	= $row1->id;

	$adr=explode ("ООО ",$adress);
    $adress 	= $adr[1];
    $fromp 		= $row1->fromp;
    $receive_d 	= $row1->receive_d;
    $letknow_d 	=    (!$row1->letknow_d)?'<font color="#FF0000">сообщить</font>':$row1->letknow_d;



#---------------------- email ------------------------------------------------------------------------------------------------

$qqq_email = "SELECT * FROM `".$_POST["partnerlogin"]."__ooo`  WHERE  id = $idlevel_2 ";
$Or_qqq_email = mysql_query($qqq_email)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<br>qqq1:<BR>".$qqq_email."<BR>") ;
$row_email = mysql_fetch_object($Or_qqq_email);
    $ooo_email 		= $row_email->email;
    $ooo_name		= $row_email->naimenovanie;



	$emailbutton = /* $idlevel_1.' ----  '.$idlevel_2. */
  '<form  id="eml'.$id.'"   action="?mode=emailooo" method="post" enctype="application/x-www-form-urlencoded" name="emailooo"  target="_blank">
  	<input name="dopolnitelno" value="'.$id.'" type="hidden">
    <input name="idlevel_1" value="'.$idlevel_1.'" type="hidden">
	<input name="idlevel_2" value="'.$idlevel_2.'" type="hidden">
	<input name="tablelevel" value="3" type="hidden">  
	<input name="ooo_email" value="'.$ooo_email.'" type="hidden">
	<input name="ooo_name" value="'.$ooo_name.'" type="hidden">
	<input name="fromp" value="'.$fromp.'" type="hidden">
  	<div class="mybut2" title=""  onClick="check99(\'eml'.$id.'\');">email</div>
  </form>';
    $emailinformed_d 	=    (!$row1->emailinformed_d)?( $ooo_email? $emailbutton :'<font color="#FF0000">нету</font>'):'<font color="#009900">'.$row1->emailinformed_d.'</font>';
#----------------------  end email ---------------------------------------------------------------------------------------------



    $given_yn 	= ($row1->given_yn=='нет' || $row1->given_yn=='0')?'<font color="#FF0000">нет</font>':$row1->given_yn;
    $notes 		= $row1->notes;
	$button = /* $idlevel_1.' ----  '.$idlevel_2. */
  '<form  id="site'.$id.'"   action="?mode=edit_correspondence" method="post" enctype="application/x-www-form-urlencoded" name="edit_correspondence"  target="_blank">
  	<input name="dopolnitelno" value="'.$id.'" type="hidden">
    <input name="idlevel_1" value="'.$idlevel_1.'" type="hidden">
	<input name="idlevel_2" value="'.$idlevel_2.'" type="hidden">
	<input name="tablelevel" value="3" type="hidden">  
  	<div class="mybut2" title=""  onClick="check99(\'site'.$id.'\');">изменить</div>
  </form>';


	if($adress != $user)
	echo'  
   		  <tr>
		    <td title="'.$adress.'"><div align="left">'.$adress.'</div></td>
		    <td><div align="center">'.$fromp.'</div></td>
		    <td><div align="center">'.$receive_d.'</div></td>
		    <td><div align="center">'.$letknow_d.'</div></td>
		    <td><div align="center">'.$given_yn.'</div></td>
		    <td><div align="center">'.$emailinformed_d.'</div></td>
		    <td><div align="left">'.$notes.'</div></td>
		    <td>'.$button.'</td>
		  </tr>
	';
}
echo '</tbody></table><br>';

close_connection(); 
}










#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function emailooo($user_id)     ------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function emailooo($user_id){
open_connection();
#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  {$skript = 'adm_cabinet.php'; }
else {$skript = 'cabinet.php'; $partnerlogin = $_POST["partnerlogin"] = $_POST["login"];}


$subject = 'Интех: для Вашей компании '.$ooo_name.' поступила корреспонденция  от '.$fromp;
$text = ' Уведомляем, что для Вашей компании  "'.$ooo_name.'"  поступила корреспонденция. <br>Отправитель: '.$fromp.'. <br>Просим связаться для уточнения деталей и получения. <br><br> По вопросам, связанным с получением почтовой корреспонденции, пишите нам на inteh.ooo@mail.ru<br><br>ООО Интех<br>+7(495) 504-31-62';

$pieces = explode(" ", $ooo_email);
$ooo_email = str_replace (" ",",",$ooo_email);

//echo $dopolnitelno; 
//echo "<br>".date("20y-m-d")."<br>"; 


/***********************************************************************/		
require "include/class_email.php";

$email = new emailer;

				$email->subject = $subject;
				$email->to      = $ooo_email;
				$email->from    = "info@".$_SERVER["SERVER_NAME"]; //info@adressmoscow.ru
				$email->message	= $text;
				$email->html_email = 1;
				$email->char_set = 'utf-8';
				$email->send_mail();

/***********************************************************************/		
echo "<br>на адрес(а)<br>".$pieces[0]."<br>".$pieces[1]."<br>".$pieces[2]. '<br>было отправлено письмо со следующим текстом <br><br><br><div style="border:1px solid red; left:300px; top:200;  padding: 20px; margin: 100px;  ">'.$text."</div><br><br>";

$d = date("20y-m-d");
$qemail  = "UPDATE `".$_POST["partnerlogin"]."__correspondence` SET `emailinformed_d` = '$d' WHERE `id` = '$dopolnitelno'";
mysql_query($qemail)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<br>qqq1:<BR>".$qemail."<BR>") ;

echo   '<form  id="site'.$id.'"   action="?mode=edit_correspondence" method="post" enctype="application/x-www-form-urlencoded" name="edit_correspondence">
  	<input name="dopolnitelno" value="'.$dopolnitelno.'" type="hidden">
    <input name="idlevel_1" value="'.$idlevel_1.'" type="hidden">
	<input name="idlevel_2" value="'.$idlevel_2.'" type="hidden">
	<input name="tablelevel" value="3" type="hidden">  
	<input name="go" type="submit" value="Перейти к информации по хранящемуся письму">
  </form>';
	


close_connection(); 
}

















#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------      function arenda($user_id)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function arenda($user_id){
open_connection();
#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  {$skript = 'adm_cabinet.php'; }
else {$skript = 'cabinet.php'; $partnerlogin = $_POST["partnerlogin"] = $_POST["login"];}

$qqq1 = "SELECT * FROM `".$_POST["partnerlogin"]."__juradres`  ORDER BY `frdate_d` ASC ";
$Or1 = mysql_query($qqq1)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<br>qqq1:<BR>".$qqq1."<BR>") ;

WriteCheck99();

echo '<script src="./js/sorttable.js"></script>';
echo'<table  class="printview sortable"><thead>
  <tr>
    <th scope="col">Название</th>
    <th scope="col">Начало</th>
    <th scope="col">На_срок</th>
    <th scope="col">Продление</th>
    <th scope="col">ПСО</th>
    <th scope="col">Начисленно</th>
    <th scope="col">Получено</th>
    <th scope="col">Долг</th>
    <th scope="col">Почта_в</th>
    <th scope="col">Коммент</th>
    <th scope="col">Изменить</th>
  </tr></thead><tbody>
';




while ($row1 = mysql_fetch_object($Or1)){
    $adress 	= $row1->adress;

    $idlevel_1 	= $row1->idlevel_1;
    $idlevel_2 	= $row1->idlevel_2;
    $id 	= $row1->id;

	$adr=explode ("ООО ",$adress);
    $adress 	= $adr[1];
    $frdate_d 		= $row1->frdate_d;
    $juradr_srok 	= $row1->juradr_srok;

    $pso_yn 		= $row1->pso_yn;
    $adr_pismazabor = $row1->adr_pismazabor;
    $cost 			= $row1->cost;
    $payed 			= $row1->payed;


    $letknow_d 	=    (!$row1->letknow_d)?'<font color="#FF0000">сообщить</font>':$row1->letknow_d;
    $given_yn 	= ($row1->given_yn=='нет' || $row1->given_yn=='0')?'<font color="#FF0000">нет</font>':$row1->given_yn;
    $notes 		= $row1->notes;
	$button = /* $idlevel_1.' ----  '.$idlevel_2. */
	'<form  id="site'.$id.'"  action="?mode=edit_juradres" method="post" enctype="application/x-www-form-urlencoded"   target="_blank">
  <input name="dopolnitelno" value="'.$id.'" type="hidden">
    <input name="idlevel_1" value="'.$idlevel_1.'" type="hidden">
	<input name="idlevel_2" value="'.$idlevel_2.'" type="hidden">
	<input name="tablelevel" value="3" type="hidden">  
  <!--button class="mybut2" title="">изменить</button-->
  <div class="mybut2" title=""  onClick="check99(\'site'.$id.'\');">изменить</div>
  </form>';



$payednew=0;
$tit = '';
$qqopja = "SELECT * FROM `".$_POST["partnerlogin"]."__oplataja` WHERE idlevel_1 ='$idlevel_1' AND idlevel_2 = '$idlevel_2' AND idlevel_3 = '$id' ";   //    
$Or1qqopja = mysql_query($qqopja)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<br>qqq1:<BR>".$qqopja."<BR>") ;
while ($row33 = mysql_fetch_object($Or1qqopja)){
    $p 	= $row33->payed;
    $d 	= $row33->to_date;
	$payednew += $p;
	$d = str_replace("«","",str_replace("»","",date_mn($d)));
	$tit .= $d." внесено ".$p."р.<br>";
}
$tit = substr( $tit, 0, strlen($tit)-4);
$debt = $cost - $payednew;
$color = $debt?' style="color:#FF0000; "':'';
 $pso_yn =  $pso_yn? $pso_yn:'нет';

########################################################## Обработка даты продления #########################################################
	$enddate = $frdate_d ? CalcDateForvard($frdate_d, $juradr_srok) :'&nbsp;';
	if ($enddate <= date("20y-m-d")) {
		$qend = "SELECT * FROM `".$_POST["partnerlogin"]."__juradres`WHERE  idlevel_2 = '$idlevel_2'   ORDER BY `frdate_d` ASC ";
		$Oqend = mysql_query($qend)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<br>qqq1:<BR>".$qend."<BR>") ;
		while ($row3e = mysql_fetch_object($Oqend)){
		    if($id!=$row3e->id && $frdate_d<$row3e->frdate_d) {
				$enddate1 = 'продлён';//'<font color="#0000FF">'.$enddate.'</font>';
#				echo $id ." --$$$-- ". $frdate_d."<br>";
#				echo $row3e->id ." -$$- ". $row3e->frdate_d."<br>";
			}
			else {
				$enddate1 = '<strong><font color="#FF0000" style="text-decoration: underline;">'.$enddate.'</font></strong>';
#				echo $id ." --&&&-- ". $frdate_d."<br>";
#				echo $row3e->id ." ---- ". $row3e->frdate_d."<br>";
			}
		}
	}
	else 	 $enddate1 = '<font color="#0000FF">'.$enddate.'</font>';
########################################################## Обработка даты продления #########################################################

	if($adress != $user)
	echo'  
   		  <tr>
		    <td title="'.$adress.'"><div align="left">'.$adress.'</div></td>
		    <td><div align="center">'.$frdate_d.'</div></td>
		    <td><div align="center">'.$juradr_srok.'</div></td>
		    <td><div align="center" onmouseover="Tip(\''.str_replace("«","",str_replace("»","",date_mn($enddate))).'\', BALLOON, true, ABOVE, true, BALLOONSTEMOFFSET, 20, OFFSETX, 0)" onmouseout="UnTip()">'.$enddate1.'</div></td>
		    <td><div align="center">'.$pso_yn.'</div></td>
		    <td><div align="center">'.$cost.'</div></td>
		    <td><div align="center" onmouseover="Tip(\'<div class=&quot;mybut777&quot;>'.$tit.'</div>\', SHADOW, true, WIDTH, -350 ,TITLE,\'Подробнее\', FADEOUT, 1000 )" onmouseout="UnTip()" >'.$payednew.'</div></td>
		    <td><div align="center"'.$color.'>'.$debt.'</div></td>
		    <td><div align="center">'.($adr_pismazabor?'БПР':'НП').'</div></td>
		    <td><div align="left">'.$notes.'</div></td>
		    <td>'.$button.'</td>
		  </tr>
	';
}
echo '</tbody></table><br>';




close_connection(); 
}





#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CalcDateForvard ()  --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CalcDateForvard($date, $monthsforward){

$a_date = explode("-", $date);
$y = $a_date[0];
$m = $a_date[1];
$d = $a_date[2];

	$m = $m +$monthsforward;
	if($m>12) {
		$y = $y + floor($m/12);
		$mp = $m%12;
	}
	else $mp = $m;
	
	$mp = $mp < 10  ? $mp='0'.$mp   :   $mp  ;
return $y."-".$mp."-".$d;
}










#-------------------------------------------------------------------------------------------------------------------------------------
#----------------------------------------------------------   function get_userBrowser()    ------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
 function  get_userBrowser() 
{
if ( strstr($_SERVER['HTTP_USER_AGENT'],"MSIE") ) {/* echo "IE"; */ return("IE");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Gecko") ) {/* echo "FF"; */return("FF");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Firefox") ) {/* echo "FF"; */return("FF");}
else return (0);
} 

#-------------------------------------------------------------------------------------------------------------------------------------
#----------------------------------------   function SubmitButton($TextKnopki, $class, $title)    ------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
 function  SubmitButton($TextKnopki, $color, $title) {
 $a=get_userBrowser();
if ($a=="IE") 		$str = '<button class="mybut1" title="'. $title .'">'. $TextKnopki .'</button>';
elseif($color)	 	$str = '<button class="small '. $color.' awesome" title="'. $title .'">'. $TextKnopki .'</button>'; 
else				$str = '<button class="mybut1" title="'. $title .'">'. $TextKnopki .'</button>';
return 	$str;
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function print_ooo($user_id)     ----------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function print_ooo($user_id){
open_connection();

################################################################################
#        	__ippersons : 		$_POST['idlevel_2'] = idlevel_2,  
#			__okvedip:  		$_POST['idlevel_2'] = idlevel_2
#			__ip				$_POST['idlevel_2'] = id 
################################################################################

#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  {$skript = 'adm_cabinet.php'; }
else {$skript = 'cabinet.php'; $partnerlogin = $_POST["partnerlogin"] = $_POST["login"];}

$qqq1 = "SELECT * FROM `".$_POST["partnerlogin"]."__ooo` WHERE  `id` = ".$_POST["idlevel_2"];
$Or1 = mysql_query($qqq1)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<br>qqq1:<BR>".$qqq1."<BR>") ;
while ($row1 = mysql_fetch_object($Or1)){
    $inn = $row1->inn;
    $nalogovaya = $row1->nalogovaya;
	$usn_chto = $row1->usn_chto;
    $ooo_newmoscow = $row1->ooo_newmoscow;
    $pochtindex = $row1->pochtindex;
    $subyektrf = $row1->subyektrf;
    $subject = $row1->subject;
    $rajon = $row1->rajon;
    $gorod = $row1->gorod;
    $naspunkt = $row1->naspunkt;
    $ulitca = $row1->ulitca;
    $dom = $row1->dom;
    $korpus = $row1->korpus;
    $kvartira = $row1->kvartira;

    $naimenovanie = $row1->naimenovanie;
    $nameshort = $row1->nameshort;
    $foreignnamefull = $row1->foreignnamefull;
    $foreignnameshort = $row1->foreignnameshort;
    $language = $row1->language;
    $kapital = $row1->kapital;
    $ustav_date = $row1->from_date;
	
}

if ($subyektrf==78 || ($subyektrf==77 && stristr($gorod,'Москва') ))	$notowndisplay=1;
else 																$notowndisplay=0;


	ob_start();

 echo $pochtindex ? "".$pochtindex."" : "";  
 echo !strstr($subject, "Москва") ? ", ".$subject."" : "";
 echo $ooo_newmoscow == 2 ? ", Москва" : "";
 echo $rajon ? ", ".$rajon."" : "";  
 echo $gorod ? ($gorod != "Москва город" ? ", г. ".$gorod."" : ", г. Москва") : "";  
 echo $naspunkt ? ", ".$naspunkt."" : "";  
 echo $ulitca ? ", ".$ulitca."" : "";  
 echo $dom ? ", ".$dom."" : ""; 
 echo $korpus ? ",  ".$korpus."" : "";  
 echo $kvartira ? ", ".$kvartira."" : ""; 

	$juraddr_content=ob_get_contents();
	ob_end_clean();
echo "--- ".$juraddr_content." ---<br><br>";

$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE  `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;

echo'<table width="90%"  class="printview">
  <tr>
    <th scope="col"><div align="center">ФИО</div></th>
    <th scope="col"><div align="center">Учредитель</div></th>
    <th scope="col"><div align="center">Заявитель</div></th>
    <th scope="col"><div align="center">Гена</div></th>
    <th scope="col"><div align="center">Доля ном.</div></th>
    <th scope="col"><div align="center">Доля %</div></th>
  </tr>
';

$uchr_num=0;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;

    $uchreditel_yn = $row->uchreditel_yn;
    $gendir_yn = $row->gendir_yn;
    $zayavitel_yn = $row->zayavitel_yn;

#    $dolyanominal = $row->dolyanominal;
    $dolyaprocent = $row->dolyaprocent;

    $uchreditel = $uchreditel_yn=='да'?$uchreditel_yn:'';
    $zayavitel = $zayavitel_yn=='да'?$zayavitel_yn:'';
    $gendir = $gendir_yn=='да'?$gendir_yn:'';
	$tr = $uchreditel_yn=='да'?'th':'td';

	$dolyanominal = $kapital*$dolyaprocent/100;

	echo'  
   		  <tr>
    		<'.$tr.' scope="row"><div align="left">'.$familya.' '.$imya.' '.$otchestvo.'</div></'.$tr.'>
		    <td><div align="center">'.$uchreditel.'</div></td>
		    <td><div align="center">'.$zayavitel.'</div></td>
		    <td><div align="center">'.$gendir.'</div></td>
		    <td><div align="center">'.$dolyanominal.'</div></td>
		    <td><div align="center">'.$dolyaprocent.'</div></td>
		  </tr>
	';
	if($uchreditel=='да') $uchr_num++;
}
echo '</table><br>';


############################################################
#####################   Заявление   ########################
############################################################
/* echo '
<form action="print/ooozajavlenie.php" method="post" target="_blank">

<input name="partnerlogin" 		type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 		type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 		type="hidden" value="'.$idlevel_2.'">

<input name="uchr_num" 		type="hidden" value="'.$uchr_num.'">
<input name="naimenovanie" 		type="hidden" value="'.$naimenovanie.'">
<input name="nameshort" 		type="hidden" value="'.$nameshort.'">
<input name="foreignnamefull" 	type="hidden" value="'.$foreignnamefull.'">
<input name="foreignnameshort" 	type="hidden" value="'.$foreignnameshort.'">
<input name="language" 			type="hidden" value="'.$language.'">

<input name="nalogovaya" 		type="hidden" value="'.$nalogovaya.'">
<input name="kapital" 			type="hidden" value="'.$kapital.'">

<input name="pochtindex" 	type="hidden" value="'.$pochtindex.'">
<input name="subject" 		type="hidden" value="'.$subject.'">
<input name="rajon" 		type="hidden" value="'.$rajon.'">
<input name="gorod" 		type="hidden" value="'.$gorod.'">
<input name="naspunkt" 		type="hidden" value="'.$naspunkt.'">
<input name="ulitca" 		type="hidden" value="'.$ulitca.'">
<input name="dom" 			type="hidden" value="'.$dom.'">
<input name="korpus" 		type="hidden" value="'.$korpus.'">
<input name="kvartira" 		type="hidden" value="'.$kvartira.'">


'.SubmitButton("стар Нач", '', '').'  
</form>
'; */

echo '
<form action="../automatic_utf8/tcpdf/examples/ooo11001.php" method="post" target="_blank">

<input name="partnerlogin" 		type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 		type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 		type="hidden" value="'.$idlevel_2.'">

<input name="uchr_num" 		type="hidden" value="'.$uchr_num.'">
<input name="naimenovanie" 		type="hidden" value="'.$naimenovanie.'">
<input name="nameshort" 		type="hidden" value="'.$nameshort.'">
<input name="foreignnamefull" 	type="hidden" value="'.$foreignnamefull.'">
<input name="foreignnameshort" 	type="hidden" value="'.$foreignnameshort.'">
<input name="language" 			type="hidden" value="'.$language.'">

<input name="nalogovaya" 		type="hidden" value="'.$nalogovaya.'">
<input name="kapital" 			type="hidden" value="'.$kapital.'">

<input name="pochtindex" 	type="hidden" value="'.$pochtindex.'">
<input name="subyektrf" 	type="hidden" value="'.$subyektrf.'">
<input name="subject" 		type="hidden" value="'.$subject.'">
<input name="rajon" 		type="hidden" value="'.$rajon.'">
<input name="gorod" 		type="hidden" value="'.$gorod.'">
<input name="naspunkt" 		type="hidden" value="'.$naspunkt.'">
<input name="ulitca" 		type="hidden" value="'.$ulitca.'">
<input name="dom" 			type="hidden" value="'.$dom.'">
<input name="korpus" 		type="hidden" value="'.$korpus.'">
<input name="kvartira" 		type="hidden" value="'.$kvartira.'">
<input name="notowndisplay" 		type="hidden" value="'.$notowndisplay.'">


'.SubmitButton("Заявление Начало с 04.07", '', '').'  
</form>
';






//echo 'Учредителей '.$uchr_num.' чел.<br><br>';
############################################################
#####################   Заявление лист В   #################
############################################################

$page=1;
$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE  `uchreditel_yn`='да' AND  `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;
    $fiorod = $row->fiorod;

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
    $subyektrf = $row->subyektrf;
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

// foreigner
    $dokument_dvid 	= $row->dokument_dvid ?"паспорт иностранного гражданина":"паспорт гражданина России";
    $strana 		= $row->strana;
    $mesto 			= $row->mesto;


	$dolyanominal = $kapital*$dolyaprocent/100;
$page++;


if ($subyektrf==78 || ($subyektrf==77 && stristr($gorod,'Москва') ))	$no_birthplacedisplay=1;
else 																$no_birthplacedisplay=0;


/* if($uchreditel_yn=='да') echo '
<form action="print/ooozajavlenie.b.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="page" 			type="hidden" value="'.$page.'">
<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="familya" 		type="hidden" value="'.$familya.'">
<input name="inn" 			type="hidden" value="'.$inn.'">
<input name="nalogovaya" 	type="hidden" value="'.$nalogovaya.'">

<input name="imya" 			type="hidden" value="'.$imya.'">
<input name="otchestvo" 	type="hidden" value="'.$otchestvo.'">
<input name="fiorod" 		type="hidden" value="'.$fiorod.'">

<input name="his_pol" 		type="hidden" value="'.$his_pol.'">
<input name="mestorojdeniya" type="hidden" value="'.$mestorojdeniya.'">
<input name="from_date" 	type="hidden" value="'.$from_date.'">

<input name="seriap" 		type="hidden" value="'.$seriap.'">
<input name="nomerp" 		type="hidden" value="'.$nomerp.'">
<input name="kemvydanp" 	type="hidden" value="'.$kemvydanp.'">
<input name="to_date" 		type="hidden" value="'.$to_date.'">
<input name="kodp" 			type="hidden" value="'.$kodp.'">

<input name="pochtindex" 	type="hidden" value="'.$pochtindex.'">
<input name="subject" 		type="hidden" value="'.$subject.'">
<input name="rajon" 		type="hidden" value="'.$rajon.'">
<input name="gorod" 		type="hidden" value="'.$gorod.'">
<input name="naspunkt" 		type="hidden" value="'.$naspunkt.'">
<input name="ulitca" 		type="hidden" value="'.$ulitca.'">
<input name="dom" 			type="hidden" value="'.$dom.'">
<input name="korpus" 		type="hidden" value="'.$korpus.'">
<input name="kvartira" 		type="hidden" value="'.$kvartira.'">

<input name="dolyanominal" 		type="hidden" value="'.$dolyanominal.'">
<input name="dolyaprocent" 		type="hidden" value="'.$dolyaprocent.'">




<input name="dokument_dvid" 		type="hidden" value="'.$dokument_dvid.'">
<input name="strana" 		type="hidden" value="'.$strana.'">
<input name="mesto" 		type="hidden" value="'.$mesto.'">



'.SubmitButton('стар Б', '', '').'  
</form>
';
 */





if($uchreditel_yn=='да') echo '
<form action="../automatic_utf8/tcpdf/examples/ooo11001.v.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="page" 			type="hidden" value="'.$page.'">
<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="familya" 		type="hidden" value="'.$familya.'">
<input name="inn" 			type="hidden" value="'.$inn.'">
<input name="nalogovaya" 	type="hidden" value="'.$nalogovaya.'">

<input name="imya" 			type="hidden" value="'.$imya.'">
<input name="otchestvo" 	type="hidden" value="'.$otchestvo.'">
<input name="fiorod" 		type="hidden" value="'.$fiorod.'">

<input name="his_pol" 		type="hidden" value="'.$his_pol.'">
<input name="mestorojdeniya" type="hidden" value="'.$mestorojdeniya.'">
<input name="from_date" 	type="hidden" value="'.$from_date.'">

<input name="seriap" 		type="hidden" value="'.$seriap.'">
<input name="nomerp" 		type="hidden" value="'.$nomerp.'">
<input name="kemvydanp" 	type="hidden" value="'.$kemvydanp.'">
<input name="to_date" 		type="hidden" value="'.$to_date.'">
<input name="kodp" 			type="hidden" value="'.$kodp.'">

<input name="pochtindex" 	type="hidden" value="'.$pochtindex.'">
<input name="subyektrf" 	type="hidden" value="'.$subyektrf.'">
<input name="subject" 		type="hidden" value="'.$subject.'">
<input name="rajon" 		type="hidden" value="'.$rajon.'">
<input name="gorod" 		type="hidden" value="'.$gorod.'">
<input name="naspunkt" 		type="hidden" value="'.$naspunkt.'">
<input name="ulitca" 		type="hidden" value="'.$ulitca.'">
<input name="dom" 			type="hidden" value="'.$dom.'">
<input name="korpus" 		type="hidden" value="'.$korpus.'">
<input name="kvartira" 		type="hidden" value="'.$kvartira.'">

<input name="dolyanominal" 		type="hidden" value="'.$dolyanominal.'">
<input name="dolyaprocent" 		type="hidden" value="'.$dolyaprocent.'">




<input name="dokument_dvid" 			type="hidden" value="'.$dokument_dvid.'">
<input name="strana" 					type="hidden" value="'.$strana.'">
<input name="mesto" 					type="hidden" value="'.$mesto.'">
<input name="no_birthplacedisplay" 		type="hidden" value="'.$no_birthplacedisplay.'">



'.SubmitButton('Лист В (Учредитель) '.$familya.' '.$imya.' '.$otchestvo.' с 04.07', '', '').'  
</form>
';


$rod = explode("-", $from_date); 
$rod20 = ($rod[0]+20)."-".$rod[1]." ".$rod[2];
$rod45 = ($rod[0]+45)."-".$rod[1]." ".$rod[2];
$nov = date("20y-m-d");
if (($to_date < $rod20 && $rod20 <= $nov) || ($to_date < $rod45 && $rod45 <= $nov)) echo $familya." - <b><font color=#CC0000>ПАСПОРТ ПРОСРОЧЕН</font> !!!</b>";


}








############################################################
##############   Заявление лист Е (Гена)   #################
############################################################

$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE `gendir_yn`='да' AND `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;
    $fiorod = $row->fiorod;

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
    $subyektrf = $row->subyektrf;
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

// foreigner
    $dokument_dvid 	= $row->dokument_dvid ?"паспорт иностранного гражданина":"паспорт гражданина России";
    $strana 		= $row->strana;
    $mesto 			= $row->mesto;
    $telefon 		= $row->telefon;
	
if ($subyektrf==78 || ($subyektrf==77 && stristr($gorod,'Москва') ))	$no_birthplacedisplay=1;
else 																$no_birthplacedisplay=0;
	

$page++;

/* 
if($gendir_yn=='да') echo '
<form action="print/ooozajavlenie.e.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="page" 			type="hidden" value="'.$page.'">
<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="familya" 		type="hidden" value="'.$familya.'">
<input name="inn" 			type="hidden" value="'.$inn.'">
<input name="nalogovaya" 	type="hidden" value="'.$nalogovaya.'">

<input name="imya" 			type="hidden" value="'.$imya.'">
<input name="otchestvo" 	type="hidden" value="'.$otchestvo.'">
<input name="fiorod" 		type="hidden" value="'.$fiorod.'">

<input name="his_pol" 		type="hidden" value="'.$his_pol.'">
<input name="mestorojdeniya" type="hidden" value="'.$mestorojdeniya.'">
<input name="from_date" 	type="hidden" value="'.$from_date.'">

<input name="seriap" 		type="hidden" value="'.$seriap.'">
<input name="nomerp" 		type="hidden" value="'.$nomerp.'">
<input name="kemvydanp" 	type="hidden" value="'.$kemvydanp.'">
<input name="to_date" 		type="hidden" value="'.$to_date.'">
<input name="kodp" 			type="hidden" value="'.$kodp.'">

<input name="pochtindex" 	type="hidden" value="'.$pochtindex.'">
<input name="pochtindex" 	type="hidden" value="'.$subyektrf.'">
<input name="subject" 		type="hidden" value="'.$subject.'">
<input name="rajon" 		type="hidden" value="'.$rajon.'">
<input name="gorod" 		type="hidden" value="'.$gorod.'">
<input name="naspunkt" 		type="hidden" value="'.$naspunkt.'">
<input name="ulitca" 		type="hidden" value="'.$ulitca.'">
<input name="dom" 			type="hidden" value="'.$dom.'">
<input name="korpus" 		type="hidden" value="'.$korpus.'">
<input name="kvartira" 		type="hidden" value="'.$kvartira.'">


<input name="dokument_dvid" 		type="hidden" value="'.$dokument_dvid.'">
<input name="strana" 		type="hidden" value="'.$strana.'">
<input name="mesto" 		type="hidden" value="'.$mesto.'">

'.SubmitButton('стар Е', '', '').'  
</form>
';
 */


if($gendir_yn=='да') echo '


<form action="../automatic_utf8/tcpdf/examples/ooo11001.e.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="page" 			type="hidden" value="'.$page.'">
<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="familya" 		type="hidden" value="'.$familya.'">
<input name="inn" 			type="hidden" value="'.$inn.'">
<input name="nalogovaya" 	type="hidden" value="'.$nalogovaya.'">

<input name="imya" 			type="hidden" value="'.$imya.'">
<input name="otchestvo" 	type="hidden" value="'.$otchestvo.'">
<input name="fiorod" 		type="hidden" value="'.$fiorod.'">

<input name="his_pol" 		type="hidden" value="'.$his_pol.'">
<input name="mestorojdeniya" type="hidden" value="'.$mestorojdeniya.'">
<input name="from_date" 	type="hidden" value="'.$from_date.'">

<input name="seriap" 		type="hidden" value="'.$seriap.'">
<input name="nomerp" 		type="hidden" value="'.$nomerp.'">
<input name="kemvydanp" 	type="hidden" value="'.$kemvydanp.'">
<input name="to_date" 		type="hidden" value="'.$to_date.'">
<input name="kodp" 			type="hidden" value="'.$kodp.'">

<input name="pochtindex" 	type="hidden" value="'.$pochtindex.'">
<input name="subyektrf" 	type="hidden" value="'.$subyektrf.'">
<input name="subject" 		type="hidden" value="'.$subject.'">
<input name="rajon" 		type="hidden" value="'.$rajon.'">
<input name="gorod" 		type="hidden" value="'.$gorod.'">
<input name="naspunkt" 		type="hidden" value="'.$naspunkt.'">
<input name="ulitca" 		type="hidden" value="'.$ulitca.'">
<input name="dom" 			type="hidden" value="'.$dom.'">
<input name="korpus" 		type="hidden" value="'.$korpus.'">
<input name="kvartira" 		type="hidden" value="'.$kvartira.'">


<input name="dokument_dvid" 		type="hidden" value="'.$dokument_dvid.'">
<input name="strana" 		type="hidden" value="'.$strana.'">
<input name="mesto" 		type="hidden" value="'.$mesto.'">
<input name="telefon" 		type="hidden" value="'.$telefon.'">
<input name="no_birthplacedisplay" 		type="hidden" value="'.$no_birthplacedisplay.'">

'.SubmitButton('Лист Е (Гендир)  '.$familya.' '.$imya.' '.$otchestvo.' с 04.07', '', '').'  
</form>
';


}

############################################################
##############   Заявление лист М (ОКВЭД)   #################
############################################################

$page++;

/* 
echo '
<form action="print/ooozajavlenie.m.php" method="post" target="_blank">

<input name="page" 			type="hidden" value="'.$page.'">
<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">


'.SubmitButton("стар окв", '', '').'    
</form>
';

 */

echo '
<form action="../automatic_utf8/tcpdf/examples/ooo11001.i.php" method="post" target="_blank">

<input name="page" 			type="hidden" value="'.$page.'">
<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">


'.SubmitButton("Лист И (ОКВЭД) с 04.07", '', '').'    
</form>
';







$qqq = "SELECT * FROM `".$partnerlogin."__okvedooo` WHERE `idlevel_1` = ".$idlevel_1." AND `idlevel_2` = ".$idlevel_2." ORDER BY `notes` DESC, `nomerokved` ASC";
$Or = mysql_query($qqq)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>");
$num_rows = mysql_num_rows($Or);
$co=ceil(  ($num_rows-1)/56    );


$page = $page*2 + $co;



############################################################
#########   Заявление Лист Н (Заявитель)   #################   
############################################################

#$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE  `zayavitel_yn`='да' AND  `idlevel_2` = ".$_POST["idlevel_2"];
$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE  `uchreditel_yn`='да' AND  `idlevel_2` = ".$_POST["idlevel_2"]." ORDER BY `zayavitel_yn` ASC";
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
$num_rows = mysql_num_rows($Or);
$first = 1;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;
    $fiorod = $row->fiorod;

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

	$dolyanominal = $kapital*$dolyaprocent/100;


// foreigner
    $dokument_dvid 	= $row->dokument_dvid ?"паспорт иностранного гражданина":"паспорт гражданина России";
    $strana 		= $row->strana;
    $mesto 			= $row->mesto;
    $telefon 		= $row->telefon;
    $subyektrf 		= $row->subyektrf;



/* 
if($zayavitel_yn=='да') echo '
<form action="print/ooozajavlenie.n.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="page" 			type="hidden" value="'.$page.'">
<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="familya" 		type="hidden" value="'.$familya.'">
<input name="inn" 			type="hidden" value="'.$inn.'">
<input name="nalogovaya" 	type="hidden" value="'.$nalogovaya.'">

<input name="imya" 			type="hidden" value="'.$imya.'">
<input name="otchestvo" 	type="hidden" value="'.$otchestvo.'">
<input name="fiorod" 		type="hidden" value="'.$fiorod.'">

<input name="telefon" 		type="hidden" value="'.$telefon.'">
<input name="subyektrf" 		type="hidden" value="'.$subyektrf.'">



<input name="his_pol" 		type="hidden" value="'.$his_pol.'">
<input name="mestorojdeniya" type="hidden" value="'.$mestorojdeniya.'">
<input name="from_date" 	type="hidden" value="'.$from_date.'">

<input name="seriap" 		type="hidden" value="'.$seriap.'">
<input name="nomerp" 		type="hidden" value="'.$nomerp.'">
<input name="kemvydanp" 	type="hidden" value="'.$kemvydanp.'">
<input name="to_date" 		type="hidden" value="'.$to_date.'">
<input name="kodp" 			type="hidden" value="'.$kodp.'">

<input name="pochtindex" 	type="hidden" value="'.$pochtindex.'">
<input name="subject" 		type="hidden" value="'.$subject.'">
<input name="rajon" 		type="hidden" value="'.$rajon.'">
<input name="gorod" 		type="hidden" value="'.$gorod.'">
<input name="naspunkt" 		type="hidden" value="'.$naspunkt.'">
<input name="ulitca" 		type="hidden" value="'.$ulitca.'">
<input name="dom" 			type="hidden" value="'.$dom.'">
<input name="korpus" 		type="hidden" value="'.$korpus.'">
<input name="kvartira" 		type="hidden" value="'.$kvartira.'">

<input name="dolyanominal" 		type="hidden" value="'.$dolyanominal.'">
<input name="dolyaprocent" 		type="hidden" value="'.$dolyaprocent.'">



<input name="dokument_dvid" 		type="hidden" value="'.$dokument_dvid.'">
<input name="strana" 		type="hidden" value="'.$strana.'">
<input name="mesto" 		type="hidden" value="'.$mesto.'">


<!--button  class="small blue awesome" title="Лист Н">Лист Н (Заявитель) '.$familya.' '.$imya.' '.$otchestvo.'</button--> 
'.SubmitButton('стар Зая', '', '').'  

 
</form>
';
 */



if($uchreditel_yn=='да') echo '
<form action="../automatic_utf8/tcpdf/examples/ooo11001.n.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="page" 			type="hidden" value="'.$page.'">
<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="familya" 		type="hidden" value="'.$familya.'">
<input name="inn" 			type="hidden" value="'.$inn.'">
<input name="nalogovaya" 	type="hidden" value="'.$nalogovaya.'">

<input name="imya" 			type="hidden" value="'.$imya.'">
<input name="otchestvo" 	type="hidden" value="'.$otchestvo.'">
<input name="fiorod" 		type="hidden" value="'.$fiorod.'">

<input name="telefon" 		type="hidden" value="'.$telefon.'">
<input name="subyektrf" 		type="hidden" value="'.$subyektrf.'">



<input name="his_pol" 		type="hidden" value="'.$his_pol.'">
<input name="mestorojdeniya" type="hidden" value="'.$mestorojdeniya.'">
<input name="from_date" 	type="hidden" value="'.$from_date.'">

<input name="seriap" 		type="hidden" value="'.$seriap.'">
<input name="nomerp" 		type="hidden" value="'.$nomerp.'">
<input name="kemvydanp" 	type="hidden" value="'.$kemvydanp.'">
<input name="to_date" 		type="hidden" value="'.$to_date.'">
<input name="kodp" 			type="hidden" value="'.$kodp.'">

<input name="pochtindex" 	type="hidden" value="'.$pochtindex.'">
<input name="subject" 		type="hidden" value="'.$subject.'">
<input name="rajon" 		type="hidden" value="'.$rajon.'">
<input name="gorod" 		type="hidden" value="'.$gorod.'">
<input name="naspunkt" 		type="hidden" value="'.$naspunkt.'">
<input name="ulitca" 		type="hidden" value="'.$ulitca.'">
<input name="dom" 			type="hidden" value="'.$dom.'">
<input name="korpus" 		type="hidden" value="'.$korpus.'">
<input name="kvartira" 		type="hidden" value="'.$kvartira.'">

<input name="dolyanominal" 		type="hidden" value="'.$dolyanominal.'">
<input name="dolyaprocent" 		type="hidden" value="'.$dolyaprocent.'">



<input name="dokument_dvid" 		type="hidden" value="'.$dokument_dvid.'">
<input name="strana" 		type="hidden" value="'.$strana.'">
<input name="mesto" 		type="hidden" value="'.$mesto.'">
<input name="num_rows" 		type="hidden" value="'.$num_rows.'">
<input name="first" 		type="hidden" value="'.$first.'">

 
'.SubmitButton('Лист Н (Заявитель) '.$familya.' '.$imya.' '.$otchestvo.' с 04.07', '', '').'  

 
</form>
';

#---------------------ТАК КАК 2-Й ЛИСТ НИКОГДА НЕ ПЕЧАТАЕТСЯ ВРОДЕ  БЫ-------------
#$page = $page+3;
$page = $page+2;
#----------------------------------------------------------------------------------
$first++;

}


if($uchr_num == 1) {
############################################################
#####################   Решение        #####################
############################################################
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

	$dolyanominal = $kapital*$dolyaprocent/100;

    $dokument_dvid 	= $row->dokument_dvid ?"паспорт иностранного гражданина":"паспорт гражданина России";
    $strana 		= $row->strana;
    $mesto 			= $row->mesto;



if($uchreditel_yn=='да') echo '
<form action="print/oooreshenie.php" method="post" target="_blank">

<input name="juraddr_content"	type="hidden" value="'.$juraddr_content.'">
<input name="kapital" 		type="hidden" value="'.$kapital.'">
<input name="ustav_date" 	type="hidden" value="'.$ustav_date.'">
<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="page" 			type="hidden" value="'.$page.'">
<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="familya" 		type="hidden" value="'.$familya.'">
<input name="inn" 			type="hidden" value="'.$inn.'">
<input name="nalogovaya" 	type="hidden" value="'.$nalogovaya.'">

<input name="imya" 			type="hidden" value="'.$imya.'">
<input name="otchestvo" 	type="hidden" value="'.$otchestvo.'">
<input name="fiorod" 		type="hidden" value="'.$fiorod.'">
<input name="fiovin" 		type="hidden" value="'.$fiovin.'">

<input name="his_pol" 		type="hidden" value="'.$his_pol.'">
<input name="mestorojdeniya" type="hidden" value="'.$mestorojdeniya.'">
<input name="from_date" 	type="hidden" value="'.$from_date.'">

<input name="seriap" 		type="hidden" value="'.$seriap.'">
<input name="nomerp" 		type="hidden" value="'.$nomerp.'">
<input name="kemvydanp" 	type="hidden" value="'.$kemvydanp.'">
<input name="to_date" 		type="hidden" value="'.$to_date.'">
<input name="kodp" 			type="hidden" value="'.$kodp.'">

<input name="his_newmoscow" 	type="hidden" value="'.$his_newmoscow.'">
<input name="pochtindex" 	type="hidden" value="'.$pochtindex.'">
<input name="subject" 		type="hidden" value="'.$subject.'">
<input name="rajon" 		type="hidden" value="'.$rajon.'">
<input name="gorod" 		type="hidden" value="'.$gorod.'">
<input name="naspunkt" 		type="hidden" value="'.$naspunkt.'">
<input name="ulitca" 		type="hidden" value="'.$ulitca.'">
<input name="dom" 			type="hidden" value="'.$dom.'">
<input name="korpus" 		type="hidden" value="'.$korpus.'">
<input name="kvartira" 		type="hidden" value="'.$kvartira.'">

<input name="dolyanominal" 		type="hidden" value="'.$dolyanominal.'">
<input name="dolyaprocent" 		type="hidden" value="'.$dolyaprocent.'">


<input name="dokument_dvid" 		type="hidden" value="'.$dokument_dvid.'">
<input name="strana" 		type="hidden" value="'.$strana.'">
<input name="mesto" 		type="hidden" value="'.$mesto.'">

<!--button  class="small magenta awesome" title="Решение">Решение '.$familya.' '.$imya.' '.$otchestvo.'</button-->  
'.SubmitButton('Решение  '.$familya.' '.$imya.' '.$otchestvo.'', '', '').'  

</form>
';
}

}

 
elseif($uchr_num > 1) {
############################################################
#####################   Протокол       #####################
############################################################


echo '
<form action="print/oooprotokol.php" method="post" target="_blank">

<input name="juraddr_content"	type="hidden" value="'.$juraddr_content.'">
<input name="kapital" 		type="hidden" value="'.$kapital.'">
<input name="ustav_date" 	type="hidden" value="'.$ustav_date.'">
<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="familya" 		type="hidden" value="'.$familya.'">
<input name="inn" 			type="hidden" value="'.$inn.'">
<input name="nalogovaya" 	type="hidden" value="'.$nalogovaya.'">
<input name="uchr_num" 		type="hidden" value="'.$uchr_num.'">



<!--button  class="small magenta awesome" title="Протокол">Протокол</button-->  
'.SubmitButton('Протокол', '', '').'  

</form>
';
} //   elseif($uchr_num > 1) 












$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE  `zayavitel_yn`='да' AND  `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;
    $fiorod = $row->fiorod;
	
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


    $dokument_dvid 	= $row->dokument_dvid ?"паспорт иностранного гражданина":"паспорт гражданина России";
    $strana 		= $row->strana;
    $mesto 			= $row->mesto;



}
############################################################
#####################   Запрос Копия   #####################
############################################################
echo '
<form action="print/ooozaproskopiya.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">

<input name="familya" 	type="hidden" value="'.$familya.'">
<input name="imya" 	type="hidden" value="'.$imya.'">
<input name="otchestvo" 	type="hidden" value="'.$otchestvo.'">
<input name="fiorod" 	type="hidden" value="'.$fiorod.'">

<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">



<!--button  class="small blue awesome" title="Запрос Копия">Запрос Копия</button-->  
'.SubmitButton('Запрос Копия', '', '').'  

</form>
';

















############################################################
#####################   Доверенность   #####################
############################################################
echo '
<form action="print/ooodoverennost.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="ustav_date" 	type="hidden" value="'.$ustav_date.'">

<input name="partnerlogin" type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" type="hidden" value="'.$idlevel_2.'">

<input name="familya" type="hidden" value="'.$familya.'">
<input name="inn" type="hidden" value="'.$inn.'">
<input name="nalogovaya" type="hidden" value="'.$nalogovaya.'">

<input name="imya" type="hidden" value="'.$imya.'">
<input name="otchestvo" type="hidden" value="'.$otchestvo.'">
<input name="fiorod" type="hidden" value="'.$fiorod.'">

<input name="his_pol" type="hidden" value="'.$his_pol.'">
<input name="mestorojdeniya" type="hidden" value="'.$mestorojdeniya.'">
<input name="from_date" type="hidden" value="'.$from_date.'">

<input name="seriap" type="hidden" value="'.$seriap.'">
<input name="nomerp" type="hidden" value="'.$nomerp.'">
<input name="kemvydanp" type="hidden" value="'.$kemvydanp.'">
<input name="to_date" type="hidden" value="'.$to_date.'">
<input name="kodp" type="hidden" value="'.$kodp.'">

<input name="his_newmoscow" type="hidden" value="'.$his_newmoscow.'">
<input name="pochtindex" type="hidden" value="'.$pochtindex.'">
<input name="subject" type="hidden" value="'.$subject.'">
<input name="rajon" type="hidden" value="'.$rajon.'">
<input name="gorod" type="hidden" value="'.$gorod.'">
<input name="naspunkt" type="hidden" value="'.$naspunkt.'">
<input name="ulitca" type="hidden" value="'.$ulitca.'">
<input name="dom" type="hidden" value="'.$dom.'">
<input name="korpus" type="hidden" value="'.$korpus.'">
<input name="kvartira" type="hidden" value="'.$kvartira.'">

<input name="dokument_dvid" 		type="hidden" value="'.$dokument_dvid.'">
<input name="strana" 		type="hidden" value="'.$strana.'">
<input name="mesto" 		type="hidden" value="'.$mesto.'">

<!--button  class="small blue awesome" title="Доверенность">Доверенность</button--> 
'.SubmitButton('Доверенность', '', '').'  
 
</form>
';













$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE `gendir_yn`='да' AND `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;
    $fiorod = $row->fiorod;
}
############################################################
################   ГАРАНТИЙНОЕ ПИСЬМО  #####################
############################################################
echo '
<form action="print/ooogarantpismo.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="ustav_date" 	type="hidden" value="'.$ustav_date.'">

<input name="partnerlogin" type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" type="hidden" value="'.$idlevel_2.'">

<input name="familya" type="hidden" value="'.$familya.'">
<input name="kapital" 		type="hidden" value="'.$kapital.'">

<input name="imya" type="hidden" value="'.$imya.'">
<input name="otchestvo" type="hidden" value="'.$otchestvo.'">
<input name="fiorod" type="hidden" value="'.$fiorod.'">


<!--button  class="small magenta awesome" title="ГАРАНТИЙНОЕ ПИСЬМО">ГАРАНТИЙНОЕ ПИСЬМО</button-->  
'.SubmitButton('ГАРАНТИЙНОЕ ПИСЬМО', '', '').'  

</form>
';



############################################################
#####################   Квитанции     #####################
############################################################
$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE  `zayavitel_yn`='да' AND  `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;
    $fiorod = $row->fiorod;

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


}
echo '
<form action="print/oookvitancii.php" method="post" target="_blank">


<input name="familya" type="hidden" value="'.$familya.'">

<input name="imya" type="hidden" value="'.$imya.'">
<input name="otchestvo" type="hidden" value="'.$otchestvo.'">
<input name="subject" type="hidden" value="'.$subject.'">
<input name="rajon" type="hidden" value="'.$rajon.'">
<input name="gorod" type="hidden" value="'.$gorod.'">
<input name="naspunkt" type="hidden" value="'.$naspunkt.'">
<input name="ulitca" type="hidden" value="'.$ulitca.'">
<input name="dom" type="hidden" value="'.$dom.'">
<input name="korpus" type="hidden" value="'.$korpus.'">
<input name="kvartira" type="hidden" value="'.$kvartira.'">
<input name="his_newmoscow" type="hidden" value="'.$his_newmoscow.'">

<input name="dokument_dvid" 		type="hidden" value="'.$dokument_dvid.'">
<input name="strana" 		type="hidden" value="'.$strana.'">
<input name="mesto" 		type="hidden" value="'.$mesto.'">


<!--button  class="small blue awesome" title="Квитанции">Квитанции</button-->  
'.SubmitButton('Квитанции', '', '').'  

</form>
';
















$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE `gendir_yn`='да' AND `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;
    $fiorod = $row->fiorod;
}

############################################################
#####################       УСН        #####################
############################################################
if ($usn_chto) echo '
<form action="print/ooousn.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="familya" type="hidden" value="'.$familya.'">
<input name="inn" type="hidden" value="'.$inn.'">
<input name="nalogovaya" type="hidden" value="'.$nalogovaya.'">

<input name="imya" type="hidden" value="'.$imya.'">
<input name="otchestvo" type="hidden" value="'.$otchestvo.'">
<input name="usn_chto" type="hidden" value="'.$usn_chto.'">


<!--button  class="small yellow awesome" title="УСН">Заявл. на УСН '.($usn_chto==1?"6%":"15%").'</button-->  
'.SubmitButton('Заявл. на УСН '.($usn_chto==1?"6%":"15%").'', '', '').'  

</form>
';







echo "Установить в предпросмотре АЛЬБОМНУЮ ориентацию страницы<br>";





$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ooopersons` WHERE `gendir_yn`='да' AND `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;
    $fiorod = $row->fiorod;
}
############################################################
################   СПИСОК УЧАСТНИКОВ   #####################
############################################################
echo '
<form action="print/ooospisok.php" method="post" target="_blank">

<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">
<input name="ustav_date" 	type="hidden" value="'.$ustav_date.'">

<input name="partnerlogin" type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" type="hidden" value="'.$idlevel_2.'">

<input name="familya" type="hidden" value="'.$familya.'">
<input name="kapital" 		type="hidden" value="'.$kapital.'">

<input name="imya" type="hidden" value="'.$imya.'">
<input name="otchestvo" type="hidden" value="'.$otchestvo.'">


<!--button  class="small blue awesome" title="СПИСОК УЧАСТНИКОВ">СПИСОК УЧАСТНИКОВ</button-->  
'.SubmitButton('СПИСОК УЧАСТНИКОВ', '', '').'  

</form>
';






echo "Вернуть в предпросмотре КНИЖНУЮ ориентацию страницы.<br>Первую страницу печатать БЕЗ нумерации, потом установить нумерацию и печатать стр-цы с 2 по последнюю пронумерованными в нижнем правом колонтитуле.";








############################################################
#####################   Устав          #####################
############################################################
echo '
<form action="print/oooustav.php" method="post" target="_blank">

<input name="juraddr_content"	type="hidden" value="'.$juraddr_content.'">
<input name="kapital" 		type="hidden" value="'.$kapital.'">
<input name="ustav_date" 	type="hidden" value="'.$ustav_date.'">
<input name="naimenovanie" 	type="hidden" value="'.$naimenovanie.'">

<input name="nameshort" 	type="hidden" value="'.$nameshort.'">
<input name="foreignnamefull" 	type="hidden" value="'.$foreignnamefull.'">
<input name="foreignnameshort" 	type="hidden" value="'.$foreignnameshort.'">
<input name="language" 	type="hidden" value="'.$language.'">


<input name="partnerlogin" 	type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" 	type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" 	type="hidden" value="'.$idlevel_2.'">

<input name="uchr_num" 		type="hidden" value="'.$uchr_num.'">


<!--button  class="small red awesome" title="Устав">Устав</button-->  
'.SubmitButton('Устав', '', '').'  

</form>
';

echo "Вернуть в предпросмотре  печать БЕЗ нумерации!!!";



close_connection(); 

//phpinfo(32);
}

























#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function print_ip($user_id)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function print_ip($user_id){
open_connection();

################################################################################
#        	__ippersons : 		$_POST['idlevel_2'] = idlevel_2,  
#			__okvedip:  		$_POST['idlevel_2'] = idlevel_2
#			__ip				$_POST['idlevel_2'] = id 
################################################################################

#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  {$skript = 'adm_cabinet.php'; }
else {$skript = 'cabinet.php'; $partnerlogin = $_POST["partnerlogin"] = $_POST["login"];}

$qqq1 = "SELECT * FROM `".$_POST["partnerlogin"]."__ip` WHERE  `id` = ".$_POST["idlevel_2"];
$Or1 = mysql_query($qqq1)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<br>qqq1:<BR>".$qqq1."<BR>") ;
while ($row1 = mysql_fetch_object($Or1)){
    $inn = $row1->inn;
    $nalogovaya = $row1->nalogovaya;
    $nalogname = $row1->nalogname;
    $nalognamein = $row1->nalognamein;
	$usn_chto = $row1->usn_chto;
}

$qqq = "SELECT * FROM `".$_POST["partnerlogin"]."__ippersons` WHERE  `idlevel_2` = ".$_POST["idlevel_2"];
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>") ;
while ($row = mysql_fetch_object($Or)){
    $familya = $row->familya;
    $imya = $row->imya;
    $otchestvo = $row->otchestvo;
    $fiorod = $row->fiorod;

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
}

$rod = explode("-", $from_date); 
$rod20 = ($rod[0]+20)."-".$rod[1]." ".$rod[2];
$rod45 = ($rod[0]+45)."-".$rod[1]." ".$rod[2];
$nov = date("20y-m-d");
if (($to_date < $rod20 && $rod20 <= $nov) || ($to_date < $rod45 && $rod45 <= $nov)) echo "<br><br><br><b><font color=#CC0000>ПАСПОРТ ПРОСРОЧЕН</font> !!!</b>";







############################################################
#####################   Заявление   ########################
############################################################
echo '
<form action="print/ipzajavlenie.php" method="post" target="_blank">

<input name="partnerlogin" type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" type="hidden" value="'.$idlevel_2.'">

<input name="familya" type="hidden" value="'.$familya.'">
<input name="inn" type="hidden" value="'.$inn.'">
<input name="nalogovaya" type="hidden" value="'.$nalogovaya.'">
<input name="nalogname" type="hidden" value="'.$nalogname.'">

<input name="imya" type="hidden" value="'.$imya.'">
<input name="otchestvo" type="hidden" value="'.$otchestvo.'">
<input name="fiorod" type="hidden" value="'.$fiorod.'">

<input name="his_pol" type="hidden" value="'.$his_pol.'">
<input name="mestorojdeniya" type="hidden" value="'.$mestorojdeniya.'">
<input name="from_date" type="hidden" value="'.$from_date.'">

<input name="seriap" type="hidden" value="'.$seriap.'">
<input name="nomerp" type="hidden" value="'.$nomerp.'">
<input name="kemvydanp" type="hidden" value="'.$kemvydanp.'">
<input name="to_date" type="hidden" value="'.$to_date.'">
<input name="kodp" type="hidden" value="'.$kodp.'">

<input name="pochtindex" type="hidden" value="'.$pochtindex.'">
<input name="subject" type="hidden" value="'.$subject.'">
<input name="rajon" type="hidden" value="'.$rajon.'">
<input name="gorod" type="hidden" value="'.$gorod.'">
<input name="naspunkt" type="hidden" value="'.$naspunkt.'">
<input name="ulitca" type="hidden" value="'.$ulitca.'">
<input name="dom" type="hidden" value="'.$dom.'">
<input name="korpus" type="hidden" value="'.$korpus.'">
<input name="kvartira" type="hidden" value="'.$kvartira.'">

<!--input name="zgo" type="submit" value="Распечатать Заявление"-->
'.SubmitButton('Заявление', '', '').'  

</form>
';

############################################################
#####################   Доверенность   #####################
############################################################
echo '
<form action="print/ipdoverennost.php" method="post" target="_blank">

<input name="partnerlogin" type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" type="hidden" value="'.$idlevel_2.'">

<input name="familya" type="hidden" value="'.$familya.'">
<input name="inn" type="hidden" value="'.$inn.'">
<input name="nalogovaya" type="hidden" value="'.$nalogovaya.'">
<input name="nalogname" type="hidden" value="'.$nalogname.'">
<input name="nalognamein" type="hidden" value="'.$nalognamein.'">

<input name="imya" type="hidden" value="'.$imya.'">
<input name="otchestvo" type="hidden" value="'.$otchestvo.'">
<input name="fiorod" type="hidden" value="'.$fiorod.'">

<input name="his_pol" type="hidden" value="'.$his_pol.'">
<input name="mestorojdeniya" type="hidden" value="'.$mestorojdeniya.'">
<input name="from_date" type="hidden" value="'.$from_date.'">

<input name="seriap" type="hidden" value="'.$seriap.'">
<input name="nomerp" type="hidden" value="'.$nomerp.'">
<input name="kemvydanp" type="hidden" value="'.$kemvydanp.'">
<input name="to_date" type="hidden" value="'.$to_date.'">
<input name="kodp" type="hidden" value="'.$kodp.'">

<input name="pochtindex" type="hidden" value="'.$pochtindex.'">
<input name="subject" type="hidden" value="'.$subject.'">
<input name="rajon" type="hidden" value="'.$rajon.'">
<input name="gorod" type="hidden" value="'.$gorod.'">
<input name="naspunkt" type="hidden" value="'.$naspunkt.'">
<input name="ulitca" type="hidden" value="'.$ulitca.'">
<input name="dom" type="hidden" value="'.$dom.'">
<input name="korpus" type="hidden" value="'.$korpus.'">
<input name="kvartira" type="hidden" value="'.$kvartira.'">
<input name="his_newmoscow" type="hidden" value="'.$his_newmoscow.'">

<!--input name="zgo" type="submit" value="Распечатать Доверенность"-->
'.SubmitButton('Доверенность', '', '').'  

</form>
';


############################################################
#####################       УСН        #####################
############################################################
if ($usn_chto) echo '
<form action="print/ipusn.php" method="post" target="_blank">

<input name="familya" type="hidden" value="'.$familya.'">
<input name="inn" type="hidden" value="'.$inn.'">
<input name="nalogovaya" type="hidden" value="'.$nalogovaya.'">

<input name="imya" type="hidden" value="'.$imya.'">
<input name="otchestvo" type="hidden" value="'.$otchestvo.'">
<input name="usn_chto" type="hidden" value="'.$usn_chto.'">

<!--input name="zgo" type="submit" value="Распечатать Заявл. на УСН '.($usn_chto==1?"6%":"15%").'"-->
'.SubmitButton('Заявл. на УСН '.($usn_chto==1?"6%":"15%").'', '', '').'  

</form>
';



############################################################
#####################   ГосПошлина     #####################
############################################################
echo '
<form action="print/ipgosposhlina.php" method="post" target="_blank">


<input name="familya" type="hidden" value="'.$familya.'">

<input name="imya" type="hidden" value="'.$imya.'">
<input name="otchestvo" type="hidden" value="'.$otchestvo.'">
<input name="subject" type="hidden" value="'.$subject.'">
<input name="rajon" type="hidden" value="'.$rajon.'">
<input name="gorod" type="hidden" value="'.$gorod.'">
<input name="naspunkt" type="hidden" value="'.$naspunkt.'">
<input name="ulitca" type="hidden" value="'.$ulitca.'">
<input name="dom" type="hidden" value="'.$dom.'">
<input name="korpus" type="hidden" value="'.$korpus.'">
<input name="kvartira" type="hidden" value="'.$kvartira.'">
<input name="his_newmoscow" type="hidden" value="'.$his_newmoscow.'">

<!--input name="zgo" type="submit" value="Распечатать Квитанцию"-->
'.SubmitButton('Квитанция', '', '').'  

</form><br><br>
';



############################################################
#            НОВАЯ ФОРМА ЗАЯВЛЕНИЯ ВЫВОД В PDF
############################################################
echo '
<form action="../automatic_utf8/tcpdf/examples/ip21001.php" method="post" target="_blank">

<input name="partnerlogin" type="hidden" value="'.$partnerlogin.'">
<input name="idlevel_1" type="hidden" value="'.$idlevel_1.'">
<input name="idlevel_2" type="hidden" value="'.$idlevel_2.'">
<!--input name="zgo" type="submit" value="Распечатать Заявление"-->
'.SubmitButton('Заявление (PDF)', '', '').'  

</form>
';



close_connection(); 

//phpinfo(32);
}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function massedit_okved($user_id)     ---------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function massedit_okved($user_id){
?>
<script language="JavaScript"  src="Subsys_JsHttpRequest/lib/Subsys/JsHttpRequest/Js.js"></script>
<script>
	// Вызывается по тайм-ауту или при щелчке на кнопке.
//	function doLoad(force) {
	function doLoad(force, result, debug, bn, io, oe, ident) {
		// Получаем текст запроса из <input>-поля.
//		var query = '' + document.getElementById('query').value;
    var query = '' + document.getElementById(ident).value + '';
    var query1 = 'Статус: ' + document.getElementById(ident).value + '';
    var q_bn = bn;
    var q_io = io;
    var q_oe = oe;
		// Создаем новый объект JSHttpRequest.
		var req = new Subsys_JsHttpRequest_Js();
		// Код, АВТОМАТИЧЕСКИ вызываемый при окончании загрузки.
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				if (req.responseJS) {
					// Записываем в <div> результат работы. 
					document.getElementById(result).innerHTML = 
						/* 'MD5("'+(req.responseJS.q||'')+'") = ' + */
						'' + (req.responseJS.md5||'') /* + '"<br> ' +
						'Session data: ' + 
						'"' + (req.responseJS.hello || 'unknown') + '"' */;
				}
				// Отладочная информация.
				document.getElementById(debug).innerHTML = 
					req.responseText;
			}
		}
		// Разрешаем кэширование (чтобы при одинаковых запросах
		// не обращаться к серверу несколько раз).
		req.caching = false /* true */;
		// Подготваливаем объект.
		req.open('POST', 'admin/ajax_okved.php?test=abc', true);
		// Посылаем данные запроса (задаются в виде хэша).
		req.send({ q: query, rr: query1, b: q_bn, i: q_io, o: q_oe, test:303 });
	}
	// Поддержка загрузки данных по тайм-ауту (1 секунда после
	// последнего отпускания клавиши в текстовом поле).
	var timeout = null;
	function doLoadUp(force, result, debug, bn, io, oe, ident) {
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(doLoad(force, result, debug, bn, io, oe, ident), 1000);
	}
</script>
<?


open_connection();

$xmode = $_GET['mode'];
if		(strstr($xmode, "ooo"))  $postfix = 'ooo';
elseif	(strstr($xmode, "ip"))   $postfix = 'ip';

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  {$skript = 'adm_cabinet.php'; $arr2 = $_POST["partnerlogin"];}
else {$skript = 'cabinet.php'; $arr2 = $_POST["login"];}

$arr0 = $_POST["idlevel_1"];
$arr1 = $_POST["idlevel_2"];
$arr = $arr0."$$$".$arr1."$$$".$arr2."$$$".$postfix;


?>
<!-- Какие уже отмечены информация (заполняется динамически) -->

<a  href="javascript:inver('debug')">Выбрано</a>
<div id="debug" style="display:none; border:2px solid red; margin:2px; padding:5px;	 width: 850px; left: 164px; background-color:#000099; color:#FFFF00;  z-index:10; ">
  <table border="0" width="100%" style="background-color:#000099; color:#FFFF00;">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <th  style="color:#FFFF00;">Выбранные виды деятельности</th>
      <th ><a  style="background-color:#000099; color:#FFFF00;" href="javascript:inver('debug')">[X]</a></th>
    </tr>
    <?php 
$j=1;
$tdblack_style = "<td style=\"background-color:#000000; color:#FFFFFF; padding: 0 5px; \">";
$qqq = "SELECT * FROM `".$arr2."__okved".$postfix."` WHERE `idlevel_1` = ".$arr0." AND `idlevel_2` = ".$arr1." ORDER BY `nomerokved` ASC";
$Or = mysql_query($qqq)   or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qqq."<BR>"); 
while ($row = mysql_fetch_object($Or)){
	if ($j%2) 	$td_style = "<td style=\"background-color:#000099; color:#FFFF00; \">";
	else 		$td_style = "<td style=\"background-color:#0f00bf; color:#FFFF00;\">";
		echo "  <tr>
    ".$tdblack_style.$j."</td>
    ".$td_style.Nbsp(3).$row->nomerokved."</td>
    ".$td_style.Nbsp(5).$row->egotext."</td>
    ".$tdblack_style."<span onclick=\"doLoad(true, 'result', 'debug', '".$row->id."', 'delete', '".$arr."', 'result')\">Удалить</span></td>
  </tr>";
  $j++;
		
 }
 

?>
  </table>
</div>
<div id="result"></div>
<?

$query31="SELECT * FROM `okvedfull` ORDER BY  id ASC";
$result = mysql_query ($query31) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query31."<BR>");
$totalRows_result = mysql_num_rows($result); 


$counter = 0;
$razd_counter = 0;
$pr_counter = false;
while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
	$counter++;
	$id=$ro['id'];
	$razdel = $ro['razdel'];
	$podrazdel=$ro['podrazdel'];
	$name=$ro['name'];
	$value=$ro['value'];
	$ipspravka=$ro['ipspravka'];

	$spr = '';
	if($ipspravka==1 && $postfix == 'ip') $spr = ' background-color:#CCFF66; ';
	elseif($ipspravka==2 && $postfix == 'ip') $spr = ' background-color:#88FF66; ';


	if ($value == "РАЗДЕЛ") {
		if($pr_counter) echo '</div><!--ID="pDiv_'.$podrazdel.'"-->';
		if($razd_counter>0) echo '</div><!--ID="Div_'.$razdel.'"-->';
		$pr_counter = false;

		echo "<p><a  href=\"javascript:inver_mod('Div_".$razdel."')\">".$razdel." ".$name."</a></p>";
		echo '<div ID="Div_'.$razdel.'" style="display:none;" >';
		$razd_counter++;
	}
	elseif ($value == "Подраздел") {
		if($pr_counter) echo '</div><!--ID="pDiv_'.$podrazdel.'"-->';
		
		echo "<p>".Nbsp(8)."<a  href=\"javascript:inver_xmod('pDiv_".$podrazdel."')\">".$podrazdel." ".$name."</a></p>";
		echo '<div ID="pDiv_'.$podrazdel.'" style="display:none;" >';
		$pr_counter = true;
	}
	else{
		$inp = "";
		echo "<div id=\"id_".$value."\" onclick=\"doLoad(true, 'result_".$value."', 'debug', '".$value."', '".$name."', '".$arr."', 'id_".$value."')\" style=\" padding:0 0 0 50px; margin: 10px  30px 10px 0;\">".$inp.''.Nbsp(3).$value." ";
#		echo '<div  style="display:inline; left:350px; position:absolute; ">'.$name."</div></div>\n";

?>
<!-- Результаты работы (заполняется динамически) -->
<div id="result_<?=$value;?>" style="border:0px solid #aaa; margin:2px; text-align:center; color:#990000; font-weight:normal; display:inline; left:300px; position:absolute;"> </div>
<?
		echo "<div  style=\"display:inline; left:350px; position:absolute; $spr\">".$name."</div>";
#		</div>\n";

	echo "</div>\n";

	}
}
echo '</div><!--ID="Div_'.$razdel.'"-->';



// phpinfo(32);
close_connection(); 
}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function delfrompachka($user_id)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function delfrompachka($user_id){
open_connection();

close_connection(); 
}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function plategy_show($user_id)     -------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function plategy_show($user_id){
open_connection();
if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
else $skript = 'cabinet.php';
	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
	}

if($_GET['delete']=='yes'){
//---------------------------------- Удаление пачки ----------------------------------
	$query41="SELECT * FROM `".$userlogin."__pachkispisok` WHERE `id` = '".$_GET['pachka']."' ";
	$result41 = mysql_query ($query41) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query41."<BR>");
	while ($ro41 = mysql_fetch_array($result41, MYSQL_BOTH)){
		$nazvanie = $ro41['nazvanie'];
	}

echo "<h3>Удаление  Пачки \"$nazvanie\"</h3>";

?>
<form action="<?=$skript ; ?>?mode=delfrompachka" method="post" name="plategi"  ENCTYPE="multipart/form-data">
  <input name="pachka" type="hidden" value="<?php echo $_GET['pachka']; ?>">
  <table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
    <thead>
      <tr>
        <th>N</th>
        <th>№ кв.</th>
        <th>Дом</th>
        <th>Дата опл.</th>
        <th>Сумма</th>
        <th>Банк</th>
        <th>Удалить
          <input name="all_plategi" onclick="checkall('plategi', this.form.all_plategi.checked)" type="checkbox"></th>
      </tr>
    </thead>
    <tbody>
      <?
$summaoplata=0;
$counter = 0;
$ShowButton = false;
$td_st = '<td align="right" style="padding:2px;">';
$td_cnt = '<td align="center" style="padding:2px;">';
$result = sql_do("SELECT * FROM ".$userlogin."__pachki WHERE nazvanie = '$nazvanie'  ORDER BY `id` ASC ");
while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
	$counter++;
	$id=$ro['id'];
	$domid = $ro['domid'];
	$kvnumber=$ro['kvnumber'];
	$kvid=$ro['kvid'];
	$domadress=$ro['domadress'] ? $ro['domadress'] : '?';;
	$datecreate = $ro['datecreate'];
	$dateoplaty = $ro['dateoplaty'];
	$oplata = $ro['oplata'];
	$bank = $ro['bank'] ? $ro['bank'] : '?';
	$checkbox = '<input name="plateg_'.$id.'" type="checkbox" value="'.$id.'" checked>';	
		echo "<tr>";
		echo '<td align="right">'.$counter."</td>";
		echo '<td align="center" style="padding:2px;">'.$kvnumber.$hidden_domid."</td>";
		echo '<td align="center" style="padding:2px;">'.$domadress."</td>";
		echo $td_st.$dateoplaty."</td>";
		echo $td_st.$oplata."</td>";
		echo $td_st.$bank."</td>";
		echo $td_cnt.$checkbox."</td>";
		echo "</tr>";
	$summaoplata += $oplata;

}
?>
    </tbody>
    <input name="pachka" type="hidden" value="<?php echo $pachkaname; ?>">
    <input name="items" type="hidden" value="<?php echo $counter; ?>">
    <tfoot>
      <tr>
        <th colspan="4"><div align="right">Итого: </div></th>
        <th><div align="right"><? echo $summaoplata; ?>p</div></th>
        <th><div align="right">-</div></th>
        <th><div align="right">
            <input name="bdel" type="submit" value="Удалить помеченные">
          </div></th>
      </tr>
    </tfoot>
  </table>
</form>
<?
//end------------------------------- Удаление пачки -------------------------------end
}  //    if($_GET['delete']=='yes'){

else {


$query31="SELECT * FROM `".$userlogin."__pachkispisok` WHERE `razneseno` = '1'  ORDER BY nazvanie DESC";
$result = mysql_query ($query31) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query31."<BR>");
$totalRows_result = mysql_num_rows($result); 

//echo "<br><hr>";
echo "<h3>Разнесенные  Пачки</h3>";
?>
<script src="../js/sorttable.js"></script>
<h4>Щелкнуть по названию столбца для сортировки</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
  <thead>
    <tr>
      <th>N</th>
      <th>Название</th>
      <th>Дата созд.</th>
      <th>Разнесено записей</th>
      <th>Действие</th>
    </tr>
  </thead>
  <tbody>
    <?
$counter = 0;
$td_st = '<td align="center" style="padding:2px;">';
$td_le = '<td align="left" style="padding:2px;">';
while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
	$counter++;
	$id=$ro['id'];
	$nazvanie = $ro['nazvanie'];
	$dateofcreation=$ro['dateofcreation'];
	$razneseno=$ro['razneseno'];
	$razneszapisey=$ro['razneszapisey'];
	$udalit = '<a href='.$skript.'?mode=plategy_show&pachka='.$id.'>Просмотр</a>';
	
		echo "<tr>";
		echo $td_st.$counter."</td>";
		echo $td_le.$nazvanie."</td>";
		echo $td_st.$dateofcreation."</td>";
		echo $td_st.$razneszapisey."</td>";
		echo $td_st.$udalit."</td>";
		echo "</tr>";

}
?>
  </tbody>
</table>
<?


$query31="SELECT * FROM `".$userlogin."__pachkispisok` WHERE `razneseno` = '0' ORDER BY nazvanie DESC";
$result = mysql_query ($query31) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query31."<BR>");
$totalRows_result = mysql_num_rows($result); 

echo "<br><hr>";
echo "<h3>Неразнесенные  Пачки</h3>";
?>
<h4>Щелкнуть по названию столбца для сортировки</h4>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
  <thead>
    <tr>
      <th>N</th>
      <th>Название</th>
      <th>Дата созд.</th>
      <th>Разнесено записей</th>
      <th>Действие</th>
      <th>Удаление</th>
    </tr>
  </thead>
  <tbody>
    <?
$counter = 0;
while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
	$counter++;
	$id=$ro['id'];
	$nazvanie = $ro['nazvanie'];
	$dateofcreation=$ro['dateofcreation'];
	$razneseno=$ro['razneseno'];
	$razneszapisey=$ro['razneszapisey'];
	$edit = '<a href='.$skript.'?mode=plategy_show&pachka='.$id.'&edit=yes>Редактировать/Разнести</a>';
	$udalit = '<a href='.$skript.'?mode=plategy_show&pachka='.$id.'&delete=yes>Удалить</a>';
	
		echo "<tr>";
		echo $td_st.$counter."</td>";
		echo $td_le.$nazvanie."</td>";
		echo $td_st.$dateofcreation."</td>";
		echo $td_st.$razneszapisey."</td>";
		echo $td_st.$edit."</td>";
		echo $td_st.$udalit."</td>";
		echo "</tr>";

}
?>
  </tbody>
</table>
<?
} //  else

close_connection(); 
}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function pachka_raznosim($user_id)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function pachka_raznosim($user_id){
open_connection();
if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
else $skript = 'cabinet.php';
	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
	}

###################### СТАРТ разнос по квартирам  #####################
	if ($_POST['add_to_oplata']){
		$pachkaname = $_POST['pachka'];
		$j=0;
		
		$result1 = sql_do("SELECT * FROM ".$userlogin."__pachki WHERE nazvanie='$pachkaname'"); 
		while ($ro1 = mysql_fetch_object($result1)){
			$id = $ro1->id;
			$kvid = $ro1->kvid;
			$domid = $ro1->domid;
			$kvnumber=$ro1->kvnumber;
			$domadress=$ro1->domadress;
			$nazvanie=$ro1->nazvanie;
			$datecreate = $ro1->datecreate;
			$dateoplaty = $ro1->dateoplaty;
			$oplata = $ro1->oplata;
			$bank = $ro1->bank;
			$done = $ro1->done;
			
			if (!$done){
				$nazvanie = 'Пачка ('.$nazvanie.'), занесено '.$datecreate.', банк: '.$bank;

				$query23="INSERT INTO `".$userlogin."__oplata` (`id`, `idlevel_1`, `idlevel_2`, `adress`, `nazvanie`, `summa`, `to_date`, `notes`, `parent`, `children`, `level`, `objrusname`) VALUES (NULL, '$domid', '$kvid', '$domadress', '$nazvanie', '$oplata', '$dateoplaty', '$nazvanie', '', '', '', '')";
				$a=mysql_query ($query23) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query23."<BR>");
		
				$query33="UPDATE `".$userlogin."__pachki` SET `done` = '1' WHERE `id` ='$id'";
				$b=mysql_query ($query33) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query33."<BR>");
				if($a && $b) $j++;
			}  //  if (!$done)
		} // while ($ro1

	$query53 = "UPDATE `".$userlogin."__pachkispisok` SET `razneseno` = '1', `razneszapisey` = '$j' WHERE `nazvanie` = '$pachkaname' ";
	mysql_query ($query53) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query53."<BR>");
	echo "<br><h3>Пачка $pachkaname разнесена по квартирам, всего создано записей:  $j </h3>";
	}
###################### END разнос по квартирам  ########################

close_connection(); 
}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function pachka_check($user_id)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function pachka_check($user_id){
open_connection();
$today = date("20y-m-d");
$control='';
$checkneeded = false;

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
else $skript = 'cabinet.php';
	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
	}

###################### СТАРТ сохранения  #####################
	if ($_POST['b2']){

		$result1 = sql_do("SELECT * FROM ".$userlogin."__orgforma"); 
		while ($ro1 = mysql_fetch_object($result1)){
			$adress1=$ro1->ulitsa.", д. ".$ro1->dom. ( $ro1->korpus ? ", корп. ".$ro1->korpus : ""  ).( $ro1->stroenie ? ", стр. ".$ro1->stroenie : ""  )  ;
			$id = $ro1->id;
			$doma_adressa[$id] = $adress1;
			$dom_kvs[$id] = '';
	
			$result = sql_do("SELECT * FROM ".$userlogin."__kvartira WHERE `idlevel_1` = '$id' ");
			while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
				$nomer=$ro['nomer'];
				$kvid=$ro['id'];
				$napominanie = $ro['notes'];
				$kvarts_kvid[$id][$nomer] = $kvid;
				$dom_kvs[$id] .= '<option value="'.$nomer.'">'.$nomer.'</option>';
			}
		}







		$pachkaname = $_POST['pachka'];
		
		$query31="SELECT * FROM `".$userlogin."__pachkispisok` WHERE `nazvanie` LIKE '%".$pachkaname."%' ";
		$res31 = mysql_query ($query31) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query31."<BR>");
		if( $totalRows_result31 = mysql_num_rows($res31) ) $pachkaname .= '-'.$totalRows_result31; 
		
		
		$query23="INSERT INTO ".$userlogin."__pachkispisok (id, nazvanie, dateofcreation ) VALUES ('', '$pachkaname', '$today')";
		mysql_query ($query23) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query23."<BR>");
		
		$items = $_POST['items'];

		for  ($value=1; $value<=$items; $value++) {
			if(  $_POST['oplata_'.$value]   ) {
				$oplatanomer = 		$_POST['nomer_'.$value];
				$oplatadomid = 		$_POST['domid_'.$value];
				$oplataSum = 		round(str_replace("," , "." , $_POST['oplata_'.$value]) , 2);
				$oplatabank = 		$_POST['bank_'.$value];
				$oplataDate = 		$_POST["dateplat_".$value];

				$oplatadomadress =	$doma_adressa[$oplatadomid];
				$kvid =	$kvarts_kvid[$oplatadomid][$oplatanomer];
				if (!$kvid) {
					$kvid = 0; 
					$checkneeded = true;
				}


				$query23="INSERT INTO ".$userlogin."__pachki (`id`, `kvid`, `domid`, `kvnumber`, `domadress`, `nazvanie`, `datecreate`, `dateoplaty`, `oplata`, `bank`) VALUES (NULL, '$kvid', '$oplatadomid', '$oplatanomer', '$oplatadomadress', '$pachkaname', '$today', '$oplataDate', '$oplataSum', '$oplatabank')";
				mysql_query ($query23) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query23."<BR>");

			}
		}
	}
###################### END сохранения  ########################







###################### СТАРТ сохранения вторичная правка  #####################
	elseif ($_POST['b3']){

		$pachkaname = $_POST['pachka'];

		$result1 = sql_do("SELECT * FROM ".$userlogin."__orgforma"); 
		while ($ro1 = mysql_fetch_object($result1)){
			$adress1=$ro1->ulitsa.", д. ".$ro1->dom. ( $ro1->korpus ? ", корп. ".$ro1->korpus : ""  ).( $ro1->stroenie ? ", стр. ".$ro1->stroenie : ""  )  ;
			$id = $ro1->id;
			$doma_adressa[$id] = $adress1;
			$dom_kvs[$id] = '';
	
			$result = sql_do("SELECT * FROM ".$userlogin."__kvartira WHERE `idlevel_1` = '$id' ");
			while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
				$nomer=$ro['nomer'];
				$kvid=$ro['id'];
				$napominanie = $ro['notes'];
				$kvarts_kvid[$id][$nomer] = $kvid;
				$dom_kvs[$id] .= '<option value="'.$nomer.'">'.$nomer.'</option>';
			}
		}







		
		$items = $_POST['items'];

		for  ($value=1; $value<=$items; $value++) {
				$oplatanomer = 		$_POST['nomer_'.$value];
				$oplatadomid = 		$_POST['domid_'.$value];
				$oplataid = 		$_POST['id_'.$value];

				$oplatadomadress =	$doma_adressa[$oplatadomid];
				$kvid =	$kvarts_kvid[$oplatadomid][$oplatanomer];
				if (!$kvid) {
					$kvid = 0; 
					$checkneeded = true;
				}


//				echo $query43="UPDATE ".$userlogin."__pachki` SET `kvid` = '$kvid', `kvnumber` = '$oplatanomer' WHERE `id` = ".$oplataid;
				/* echo */ $query43="UPDATE ".$userlogin."__pachki SET `kvid` = '$kvid', `kvnumber` = '$oplatanomer' WHERE `id` = '$oplataid'";
				mysql_query ($query43) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query43."<BR>");

		}
	}
###################### END сохранения вторичная правка  ########################









###################### СТАРТ  проверки #####################
if($checkneeded) {}


echo "<h2>Название Пачки: ".$pachkaname."</h2>";
?>
<script src="../js/sorttable.js"></script>
<h4>Щелкнуть по названию столбца для сортировки</h4>
<form action="<?=$skript ; ?>?mode=pachka_check" method="post" name="kvitantcii"  ENCTYPE="multipart/form-data" name="repair">
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
  <thead>
    <tr>
      <th>N</th>
      <th>№ кв.</th>
      <th>Дом</th>
      <th>Дата опл.</th>
      <th>Сумма</th>
      <th>Банк</th>
    </tr>
  </thead>
  <tbody>
    <?
$summaoplata=0;
$counter = 0;
$ShowButton = false;
$td_st = '<td align="right" style="padding:2px;">';
$result = sql_do("SELECT * FROM ".$userlogin."__pachki WHERE nazvanie = '".$pachkaname."'  ORDER BY `id` ASC ");
while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
	$counter++;
	$id=$ro['id'];
	$domid = $ro['domid'];
	$kvnumber=$ro['kvnumber'];
	$kvid=$ro['kvid'];
	$domadress=$ro['domadress'] ? $ro['domadress'] : '?';;
	if(!$kvid) {
	  $kvnumber = '<select name="nomer_'.$counter.'"><option value="0" selected>0</option>'.$dom_kvs[$domid].'</select>'.' <input name="id_'.$counter.'" type="hidden" value="'.$id.'">';
	  $hidden_domid = '<input name="domid_'.$counter.'" type="hidden" value="'.$domid.'">';
		$ShowButton = true;
	}
	$datecreate = $ro['datecreate'];
	$dateoplaty = $ro['dateoplaty'];
	$oplata = $ro['oplata'];
	$bank = $ro['bank'] ? $ro['bank'] : '?';
	
		echo "<tr>";
		echo '<td align="right">'.$counter."</td>";
		echo '<td align="center" style="padding:2px;">'.$kvnumber.$hidden_domid."</td>";
		echo '<td align="center" style="padding:2px;">'.$domadress."</td>";
		echo $td_st.$dateoplaty."</td>";
		echo $td_st.$oplata."</td>";
		echo $td_st.$bank."</td>";
		echo "</tr>";
	$summaoplata += $oplata;

}
?>
  </tbody>
  <input name="pachka" type="hidden" value="<?php echo $pachkaname; ?>">
  <input name="items" type="hidden" value="<?php echo $counter; ?>">
  <tfoot>
    <tr>
      <th colspan="4"><div align="right">Итого: </div></th>
      <th><div align="right"><? echo $summaoplata; ?>p</div></th>
      <th><div align="right">
          <?php if($ShowButton) {?>
          <input name="b3" type="submit" value="Исправить">
          <? } ?>
        </div></th>
    </tr>
  </tfoot>
</table>
</form>
<?
#------   Если все квартиры верные, кнопка разноса платежей по квартирам   -----------
 if(!$ShowButton) {?>
<form action="<?=$skript ; ?>?mode=pachka_raznosim" method="post" name="kvitantcii"  ENCTYPE="multipart/form-data">
  <input name="pachka" type="hidden" value="<?php echo $pachkaname; ?>">
  <input name="add_to_oplata" type="submit" value="Занести платежи в данные  по квартирам">
</form>
<br>
<br>
<form action="<?=$skript ; ?>?mode=plategy_show" method="post"   ENCTYPE="multipart/form-data" name="show">
  <input name="pachka" type="hidden" value="<?php echo $pachkaname; ?>">
  <input name="show" type="submit" value="Перейти в архив для дополнительного редактирования пачки">
</form>
<? }


###################### END  проверки ########################


close_connection(); 
//if ($_POST['b3']) phpinfo(32);

}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function plategy_new($user_id)     --------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function plategy_new($user_id){
?>
<script language="JavaScript"  src="./js/Js.js"></script>
<script language="JavaScript"  src="./js/Js_jkh.js"></script>
<?
open_connection();

$today = date("20y-m-d");
$control='';

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
else $skript = 'cabinet.php';
	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
	}
###################### СТАРТ OF  (банки) #####################
			if ($_POST['change_radio'] == "newprofession"){
				$nazvaniebank = $_POST['origname_new'];
				$query23="INSERT INTO ".$userlogin."__bankplateja (id, nazvanie) VALUES ('', '$nazvaniebank')";
				if ($nazvaniebank) mysql_query ($query23) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query23."<BR>");
			}
			if ($_GET['delbank']){
				$delbank = $_GET['delbank'];
				$query33="DELETE FROM ".$userlogin."__bankplateja WHERE id='$delbank'";
				if ($delbank > 0) mysql_query ($query33) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query33."<BR>");
			}
###################### END OF  (банки) ########################
?>
<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
  <tr>
    <td id="ds_calclass"></td>
  </tr>
</table>
<script  language="JavaScript"  src="./js/calendar.js">
</script>
<script language="JavaScript">
var items=1;
var bra='&nbsp;';
function AddItem() {
	isIE=window.ActiveXObject?true:false;
	if (isIE) bra='<br>';
	var display='';
	var doma='';
	var newitem='';
	var domovmnogo = <?php $result1 = sql_do("SELECT * FROM ".$userlogin."__orgforma"); echo $totalRows_result = mysql_num_rows($result1); ?>;
	var bankovmnogo=<?php 	$resq_origname = @mysql_query ("SELECT * FROM ".$userlogin."__bankplateja ORDER BY nazvanie") ; echo $totalRows_resq_origname = mysql_num_rows($resq_origname); ?>;
  div=document.getElementById("items");
  button=document.getElementById("add");
	if(!domovmnogo)   doma =  ' домов нет ';
	else 
	{	
		if(domovmnogo==1)   display =  ' style="display:none;"';
		  	doma =  ' <select name="domid_' + items + '"' + display + ' ><option value="" selected>выбрать дом<?php 
 	while ($ro1 = mysql_fetch_object($result1)){
	$adress1=$ro1->ulitsa.", д. ".$ro1->dom. ( $ro1->korpus ? ", корп. ".$ro1->korpus : ""  ).( $ro1->stroenie ? ", стр. ".$ro1->stroenie : ""  )  ;
	$id = $ro1->id;
		if ($totalRows_result == 1)
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$id."\"$selected_STR>".$adress1."</option>");
	}
		?></select>';
	}
  newitem='<br><font size="-3">' + items + '. &nbsp;&nbsp;&nbsp;&nbsp; кв.№</font>';
  newitem +=  '<input  name="nomer_' + items + '" type=\"text\" value="0"   size="3"   onfocus="this.value=\'\'" title="Номер квартиры - только цифры">' ;
  newitem +=  ' &nbsp;&nbsp;&nbsp;&nbsp; ' ;
  newitem += doma;
  newitem +=  ' &nbsp;&nbsp;&nbsp;&nbsp; <font size="-3">сумма</font>' ;
  newitem +=  ' <input name="oplata_' + items + '" type="text" value="" size="9" onfocus="this.value=\'\'" title="Сумма платежа в формате рубли.копейки" onChange="calcSum();">' ;
  newitem +=  ' &nbsp;&nbsp;&nbsp;&nbsp; ' ;
  newitem +=  ' <input name="dateplat_' + items + '" type="text" size="10" value="<?php echo date("20y-m-d");?>"  onclick="ds_sh(this);" readonly="readonly" style="cursor: text" title="кликнуть лев. кнопкой мыши">';
  newitem +=  ' &nbsp;&nbsp;&nbsp;&nbsp; ' ;
  newitem +=  ' <select name="bank_' + items + '" style="width:150px;"><option value="" selected>выбрать банк';
  newitem +=  ' <?php 
 	while ($roworigname = mysql_fetch_object($resq_origname))
	{
		if (($totalRows_resq_origname == 1))
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$roworigname->nazvanie."\"$selected_STR>".$roworigname->nazvanie."</option>");
		
	}
		?>';
  newitem +=  '</select><input name="items" type="hidden" value="' + items + '">';
  newitem +=  '<br>';
  newnode=document.createElement("span");
  newnode.innerHTML=newitem;
  div.insertBefore(newnode,button);
  items++;
}

function calcSum() 
{
//if (document.all) alert("IE"); else alert("Firefox");
var sum=0;
var bum=0;
 for (var i=0;i<items*6;i++){
	sum = parseFloat(sum);
	if ( (i-3)%6 == 0  ) {
		bum = parseFloat(document.kvitantcii.elements[i].value); 
		if(bum>0) sum = sum + bum;
	}
 }

var payed = document.getElementById("totalsum");
var payed2 = document.getElementById("totalsum2");
//payed.innerHTML = i;
payed2.innerHTML = sum.toFixed(2);
//document.write(i + " <<<<<<<" + "<br>");
}

function CheckHouseAndBank() 
{
var payed = document.getElementById("totalsum");
//payed.innerHTML = items;
var isok= true;
 for (var i=0;i<(items-1)*6;i++){
	if ( (i-5)%6 == 0 ) {
	 if(document.kvitantcii.elements[i].value == ""|| document.kvitantcii.elements[i].value == 0) {window.alert("Вы не ввыбрали банк - строка "+(1+(i-5)/6) ); return false;}
	}
	if ( (i-2)%6 == 0 ) {
	 if(document.kvitantcii.elements[i].value == "" || document.kvitantcii.elements[i].value == 0) {window.alert("Вы не ввыбрали дом - строка "+(1+(i-2)/6)); return false; }
	}
	if ( !((i-3)%6) ) {
     if(document.kvitantcii.elements[i].value == ""/*  || document.kvitantcii.elements[i].value == 0 */) {window.alert("Вы не ввели сумму - строка "+(1+(i-3)/6)); return false; }
	}
 }
  return true; //document.kvitantcii.submit();
}

</script>
<fieldset  style="border: 1px solid #000099;  padding: 7px;">
<legend  style="font-size:11px; font-weight:bold;"><font color="#FF0000">Платежи:</font> Новая приходная пачка </legend>
<?php /* <form action="<?=$skript?>
?mode=plategy_new" method="post"> */?>
<form action="<?=$skript?>?mode=pachka_check" method="post" name="kvitantcii"  ENCTYPE="multipart/form-data" onSubmit="return CheckHouseAndBank();">
  Задайте название для новой пачки платежей:
  <input name="pachka" type="text" value="<?php makeform_from_date("d_".$kvid."_", $today, 1); echo " ".date("h:i:s A");?>" size="30" maxlength="250">
  <div ID="items"> <br>
    <input type="button" value="Добавить платеж" onClick="AddItem();" ID="add" class="b" ID="buttonaddestce" style="color:#000099;	background-color:#FFFFFF; border:1px solid #ffffff;">
  </div>
  <br>
  <span id="totalsum"></span> <br>
  <button onClick="return false">контроль суммы</button>
  <span id="totalsum2" style="font-weight:bold; text-align:right; ">0</span> руб. <br>
  <br>
  <input name="b2" type="submit" value="Сохранить и проверить">
</form>
<br>
<br>
Подсказка: если вы создали лишнюю строчку для платежа - поставьте в ней сумму платежа равной 0, в этом случае при сохранении это строка будет аннулирована.
</fieldset>
<br>
<?


?>
<fieldset  style="border: 1px solid #000099;  padding: 7px;">
<legend  style="font-size:11px; font-weight:bold;"><font color="#FF0000">Банк платежа:</font> добавьте сначала список недостающих банков </legend>
<form action="<?=$skript?>?mode=plategy_new" method="post">
  <table>
    <tr>
      <td colspan="4" style="padding: 4px 1px 5px 1px;">Обратите внимание! <br>
        После добавления банка он появится в списке выбора банка в платежах только после перезагрузки этой страницы. Поэтому, если вы уже заполнили значительное количество платежей (&quot;квитанций&quot;) по квартирам, - имеет смысл сначала <strong>сохранить</strong> проделанную работу при помощи нажатия кнопки &quot;Сохранить и проверить&quot;. После этого можно добавить нужные банки и начать заполнять новую пачку платежей. В противном случае сделанная работа не сохранится и платежи придется заполнять снова. <br>
        <strong>Совет 1</strong>: Создайте &quot;банк&quot; с названием <em>прочие банки</em> - все неуказанные в списке банки можно будет помечать этим выбором. <br>
        <strong>Совет 2</strong>: Создайте в доме несуществующую квартиру (например с №999), и заносите в нее неопознанные платежи. В будущем отправитель платежа скорее всего найдется, и вы перенесете платеж в настоящую квартиру. </td>
    </tr>
    <tr>
      <td style="padding: 4px 1px 5px 1px;"><strong>Добавить Банк:</strong></td>
      <td width="30" align="right" style="padding: 4px 1px 5px 1px;">&nbsp;</td>
      <td style="padding: 4px 1px 5px 1px;"><input id="rad" type="hidden" name="change_radio" value="newprofession">
        <input style="width:223px; height:18px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 " maxlength="254"  size="14" type="text" name="origname_new">
      </td>
      <td align="right" style="padding: 4px 1px 5px 1px;"><div align="left">
          <input name="b1" type="submit" value="Создать">
        </div></td>
    </tr>
  </table>
</form>
<br>
<br>
<table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  " class="sortable">
  <thead>
    <tr>
      <th>Банк</th>
      <th>Действие</th>
    </tr>
  </thead>
  <tbody>
    <?
$td_st = '<td align="left" style="padding:3px;">';
$result = sql_do("SELECT * FROM ".$userlogin."__bankplateja  ORDER BY `nazvanie` ASC ");
while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
	$id=$ro['id'];
	$nazvanie = $ro['nazvanie'];
	$do = '<a href="'.$skript.'?mode=plategy_new&delbank='.$id.'">Удалить</a>';
	
		echo "<tr>";
		echo $td_st.$nazvanie."</td>";
		echo '<td align="center" style="padding:2px;">'.$do."</td>";
		echo "</tr>";
}
?>
  </tbody>
</table>
</fieldset>
<?
close_connection(); 
//if ($_POST['b2']) phpinfo(32);
}


#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function show_status()      ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function show_status() {
if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
else $skript = 'cabinet.php';

$mode = $_GET['mode'];


open_connection();
	$iduser=USER_ID;
	$start_date = make_date_c('from');
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$iduser'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
	}


 $get_mode = explode("_", $mode);

if ($get_mode[0] == "create")   	
	{
		$id = 0; 
		$abcdefg = new 	Upper123 	($userlogin, 	$get_mode[1],  	$id, 	$mode); 
//		$abc = new 		HelpFFT 	($userlogin, 	$get_mode[1],  	$id, 	$mode); 
	}
elseif ($get_mode[0] == "edit")   	
	{
		$id = $_POST['dopolnitelno']; 
		$abcdefg = new 	Upper123 	($userlogin, 	$get_mode[1],  	$id, 	$mode); 
//		$abc = new 		HelpFFT 	($userlogin, 	$get_mode[1],  	$id, 	$mode); 
	}


#-------------------  Сюда добавляем все нестандартные ФУНКЦИИ!!!!!!!!   ---------------------------------------=
elseif ($get_mode[0] == "delete" || $get_mode[0] == "confirmdelete" || $get_mode[0] == "massedit" || $get_mode[0] == "print" || $get_mode[0] == "upload" || $get_mode[0] == "emailooo")   	
	{
		$id = $_POST['dopolnitelno']; 
	}
#----------------------------------------------------------------------------------------------------------------



else {
		$abcdefg = new 	Upper123 	($userlogin, 	$get_mode[0],  	$id, 	$mode); 
		$abc = new 		HelpFFT 	($userlogin, 	$get_mode[0],  	$id, 	$mode); 
	}


close_connection();

}





function orgforma($user_id){
;
}





#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function jkh($USER_ID, $mode)     ----------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function jkh($user_id, $mode){
#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------

open_connection();

	$iduser=USER_ID;
 	$result = sql_do("SELECT userlogin FROM users_jkh WHERE user_id='$iduser'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
	}

if (strstr($mode, "_")) $get_mode = explode("_", $mode);

if ($get_mode[0] == "create")   	
	{
		$id = 0; 
		$abcdefg = new FFT (	$userlogin, 	$get_mode[1],  	$id, 	$mode); 
		$abc = new 		HelpFFT 	($userlogin, 	$get_mode[1],  	$id, 	$mode); 
	}
elseif ($get_mode[0] == "edit")   	
	{
		$id = $_POST['dopolnitelno']; 
		$abcdefg = new FFT (	$userlogin, 	$get_mode[1],  	$id, 	$mode); 
		$abc = new 		HelpFFT 	($userlogin, 	$get_mode[1],  	$id, 	$mode); 
	}
elseif ($get_mode[0] == "delete" || $get_mode[0] == "confirmdelete")   	
	{
		$id = $_POST['dopolnitelno']; 
		$abcdefg = new DeleteFFT (	$userlogin, 	$get_mode[1],  	$id, 	$mode); 
		$abc = new 		HelpFFT 	($userlogin, 	$get_mode[1],  	$id, 	$mode); 
	}
else {
//		$abc = new 		HelpFFT 	($userlogin, 	$get_mode[0],  	$id, 	$mode); 
		;
}

close_connection(); 

}


#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function showhelp($mode)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function showhelp($mode){

open_connection();
		$abc = new HelpFFT ($userlogin, 	$get_mode[1],  	$id, 	$mode); 
close_connection(); 

}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function color($user_id)   ----------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function color ($user_id){
#-------------------------
  foreach ($_GET  as $key => $value) {  $$key = filter_var2($value);}  
  foreach ($_POST as $key => $value) {	$$key = filter_var2($value);}
#-------------------------
open_connection();

 $result = sql_do("SELECT * FROM users_jkh WHERE user_id='$user_id'");
 while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$row['userlogin'];
}
#---------------------------------------------------------------------------------

if (isset ($_POST['csstab']))     $result = sql_do("UPDATE `".$userlogin."__user` SET `color` = '".$_POST['csstab']."' WHERE `id` =1 ");

#---------------------------------------------------------------------------------

    $result = sql_do("SELECT color FROM ".$userlogin."__user WHERE id= 1 ");
    while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    	$color=$row['color'];
    }
	$blue  = '';
	$white = '';
	if ( $color == 'cabinet_style_blue.css') $blue = ' selected';
	elseif ( $color == 'cabinet_style.css') $white = ' selected';

?>
<div align="center" style="margin:100px; padding:5px; ">
  <h3>Настройка цветовой гаммы личного кабинета</h3>
  <form action="" method="post" enctype="application/x-www-form-urlencoded" name="color">
    <select name="csstab">
      <option value="cabinet_style.css" <?php echo $white; ?>>Светлый</option>
      <option value="cabinet_style_blue.css" <?php echo $blue; ?>>Синий</option>
    </select>
    <br>
    <input type="submit" name="colorchange"  class="bbcodes"  value="Выбрать цветовую гамму">
    <br>
    <font size="-2">(Изменения произойдут после 2-го нажатия)</font>
  </form>
</div>
<?



close_connection(); 
}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function startfunc($user_id)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function startfunc($user_id){
open_connection();
?>
<div align="center" style="margin:50px; padding:5px; ">
  <h3>Начало работы</h3>
  <div align="justify" style="margin:10px; padding:2px; "> Для начала работы с нашей программой Вам нужно создать нужных Вам клиентов. Интерфейс программы интуитивно понятен, к тому же на каждой страничке Вы найдете кнопку с контекстными подсказками.<br>
    <br>
    <span style="text-align:center; color:#FF0000; "><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;С чего начать</em></span> <br>
    Итак, для начала Вам нужно создать....... <br>
    <br>
    <span style="text-align:center; color:#FF0000; "><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Как устроена База Данных</em></span><br>
    Чтобы Вам было легче ориентироваться в подсказках, ставим Вас в известность, что База данных состоит из "Объектов" и их "Свойств".<br>
"Свойство" в свою очередь может быть <em>простым</em> или <em>составным</em>.<br>
    Простые свойства заполняются в текстовом поле или выбираются из выпадающего списка.<br>
    Составные свойства являются в свою очередь Объектами - так называемыми <em>дочерними объектами</em> рассматриваемого Объекта.<br>
    Например: Если мы рассматриваем объект ИП, то одним из его составных свойств (т.е. дочерних объектов) будет являтся Паспорт, и так далее.<br>
    Таким образом, Вы видите, что термин "составное свойство" равнозначен термину "дочерний объект" и обозначает всего лишь объект следующего уровня вложенности. Скорее всего, эти сведения Вам при работе и не пригодятся, но в подсказках эти термины иногда употребляются, поэтому мы решили заранее пояснить, что они в данном случае означают. <br>
  </div>
</div>
<?
close_connection(); 
}





#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function nachislenie($user_id)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function nachislenie($user_id){
open_connection();

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
else $skript = 'cabinet.php';


	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
	}

?>
<fieldset  style="border: 1px solid #000099;  padding: 7px; ">
<legend  style="font-size:11px; font-weight:bold;"><font color="#FF0000">Начисления:</font> Выбрать дом </legend>
<?
$orderby = '' ;

	$result = sql_do("SELECT * FROM ".$userlogin."__orgforma".$orderby);
	$totalRows_result = mysql_num_rows($result);
	$j=0;
	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$adress=$ro['ulitsa'].", д. ".$ro['dom']. ( $ro['korpus'] ? ", корп. ".$ro['korpus'] : ""  ) .      ( $ro['stroenie'] ? ", стр. ".$ro['stroenie'] : ""  )  ;
		$id = $ro['id'];
		$napominanie = $ro['notes'];
			$j=0;
		?>
<table  class="buttonprintview">
  <tr>
    <th><a href="<?=$skript?>?mode=domonachislenie&id=<?=$id?>&fix=0">Начисления по дому
      <?
		echo $adress." "; 
		?>
      </a></th>
  </tr>
</table>
<br>
<?php }?>
</fieldset>
<br>
<?
close_connection(); 
}


#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function domonachislenie($user_id)     --------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function domonachislenie($user_id){
open_connection();

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
else $skript = 'cabinet.php';

	$iduser=USER_ID;
 	$result = sql_do("SELECT userlogin FROM users_jkh WHERE user_id='$iduser'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
	}
?>
<fieldset  style="border: 1px solid #000099;  padding: 7px; ">
<legend  style="font-size:11px; font-weight:bold;"><font color="#FF0000">Начисления:</font> Фиксация сальдо </legend>
<?
$where = ' where id='.$_GET['id'] ;

	$result = sql_do("SELECT * FROM ".$userlogin."__orgforma".$where);
	$totalRows_result = mysql_num_rows($result);
	$j=0;
	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$adress=$ro['ulitsa'].", д. ".$ro['dom']. ( $ro['korpus'] ? ", корп. ".$ro['korpus'] : ""  ) .      ( $ro['stroenie'] ? ", стр. ".$ro['stroenie'] : ""  )  ;
		$id = $ro['id'];
		$napominanie = $ro['notes'];
			$j=0;
		?>
<?php /* <table  class="buttonprintview"><tr><th><a href="<?=$skript?>
?mode=domonachislenie&id=
<?=$id?>
&fix=0">Начисления по дому
<?=$adress;?>
</a>
</th>
</tr>
</table>
<table  class="buttonprintview">
  <tr>
    <th><a href="<?=$skript?>?mode=domonachislenie&id=<?=$id?>&fix=1">Зафиксировать начисления по дому
      <?=$adress;?>
      </a></th>
  </tr>
</table>
*/?>
<table border="0">
  <tr>
    <td><table  class="buttonprintview">
        <tr>
          <th><a href="<?=$skript?>?mode=domonachislenie&id=<?=$id?>&fix=0">Расчитать начисления по
            <?=$adress;?>
            </a></th>
        </tr>
      </table></td>
    <td>&nbsp;</td>
    <td><table  class="buttonprintview">
        <tr>
          <th><a href="<?=$skript?>?mode=domonachislenie&id=<?=$id?>&fix=1">Зафиксировать эти начисления</a></th>
        </tr>
      </table></td>
  </tr>
</table>
<br>
<?php }?>
</fieldset>
<br>
<?
#  $abc = new Nachislenie ($userlogin, $_GET['id']); 
  $abc = new N_2			 ($userlogin, $_GET['id'], $_GET['fix']); 

close_connection(); 
}
























/*------------------------------------------------------*/
/*------------------------------------------------------*/
/*-------- пользовательская  CТАТИСТИКА  ---------------*/
/*------------------------------------------------------*/
/*------------------------------------------------------*/

#----------------------------------------------Текущая статистика по звонкам------------------------------------------------------
function showstats_cur($datefrom,$dateto) {
//echo 'c ' . $datefrom . ' по ' .$dateto .'<br>' ;
open_connection();
	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$redir_num=$ro['redir_num'];
		$partner_num=$ro['partner_num'];
		$code=$ro['code'];
		$userlogin=$ro['userlogin'];
		$partner_type = $ro['partner_type'];
	}
		//echo $code;
		close_connection();
?>
<table width="100%" cellpadding=10 cellspacing=0 border=0>
<tr height="100%">
  <td width="100%"><font face="Arial" size=2 ><br>
    Статистика по звонкам за текущий месяц<br>
    <BR>
    Номер дозвона: <b>
    <?php 
if 		($redir_num == '9012028013' ) 	echo '07278'; 
elseif 	($redir_num == '9012029438' ) 	echo '07223'; 
else 									echo $redir_num; 
?>
    </b><br>
    Ваш добавочный номер: <b><?php echo $code;  ?></b><br>
    <br>
    Внимание! Точкой отсчета при выборе даты является полночь по МСК, таким образом - день, завершающий выбранный период (дата "по"), в статистику <font style="font-weight:bold; color:#FF0000; text-decoration:underline;">не включается</font>.<br>
    <br>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
      <input type="hidden" name="mode" value="stats">
      <font style="font-weight:bold; color:#FF0000;">Период:</font><br>
      с
      <? makeform_from_date("datefrom",$datefrom, 'cur'); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;по
      <? makeform_from_date("dateto",$dateto, 'cur'); ?>
&nbsp;&nbsp;&nbsp;
      <input type=submit value="Полная статистика">
    </form>
    <?
open_connection();
$res = sql_do("SELECT * FROM totaldata where userlogin='$userlogin' and date>='$datefrom' and date<='$dateto' order by date desc");
 $count = mysql_num_rows($res); 
?>
    <table  class="printview">
    <tr>
      <th>Дата</th>
      <th>Номер абонента</th>
      <th>Номер переадр.</th>
      <th>Длит. (сек)</th>
      <th>Доход (руб)</th>
    </tr>
    <? 
$duration = $row['duration'];
$total_Out = 0;
$total_L_Out = 0;
$total_dur=0;
 while ($row = mysql_fetch_array($res, MYSQL_BOTH)){
	if(aprox($row['duration'])>0){
 		echo "<tr>";
 		echo "<td>".$row['date']."</td>";
		echo "<td>&nbsp;". substr ( $row['abon_number'], 0, 6 ) ." x x x x </td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['duration']."</td>";
 		echo "<td>".($out = $row['out'])."</td>";
 		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']); 
		$total_Out = $total_Out + $out;
	}
}
echo "</table>";
close_connection(); 
?>
    <br>
    <a name="Vonagragdenie"></a>
    <table style="border: 1px solid #aaaaaa; border-collapse:collapse;  " width="50%">
      <tr>
        <th><div align="center">Длительность</div></th>
        <th> <div align="center">Вознаграждение</div></th>
      </tr>
      <tr>
        <td><div align="center"><? echo $total_dur  ; ?> сек. &nbsp;</div></td>
        <td><div align="center">
            <?=$total_Out?>
            руб.</div></td>
      </tr>
    </table>
    <?
}







#----------------------------------------------Полная статистика по звонкам------------------------------------------------------
function showstats($datefrom,$dateto) {

open_connection();
	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$redir_num=$ro['redir_num'];
		$partner_num=$ro['partner_num'];
		$code=$ro['code'];
		$userlogin=$ro['userlogin'];
		$partner_type = $ro['partner_type'];
	}
#--------------Проверяем, не был ли удален юзер с  таким логином, если да - то берем дату, с какой  показывать стату--#######
 	$result99 = sql_do("SELECT deletetime FROM deleted_users WHERE userlogin='$userlogin'");
 	while ($r99 = mysql_fetch_array($result99, MYSQL_BOTH)){
		$deletetime=$r99['deletetime'];
	}
#---------------------------------------------------------------------------------------------------------------------#######
		//echo $code;
		close_connection();
?>
    <table width="100%" cellpadding=10 cellspacing=0 border=0>
    <tr height="100%">
    <td width="100%">
    <font face="Arial" size=2 ><br>
    Полная статистика по звонкам на ваш короткий номер: <br>
    <BR>
    Номер дозвона: <b>
    <?php 
if ($redir_num == '9012028013' ) echo '07278'; 
elseif ($redir_num == '9012029438' ) echo '07223'; 
else echo $redir_num; 
?>
    </b><br>
    Ваш добавочный номер: <b><?php echo $code;  ?></b><br>
    <br>
    Внимание! Точкой отсчета при выборе даты является полночь по МСК, таким образом - день, завершающий выбранный период (дата "по"), в статистику <font style="font-weight:bold; color:#FF0000; text-decoration:underline;">не включается</font>.
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
      <input type="hidden" name="mode" value="stats">
      Период:<br>
      с
      <? makeform_from_date("datefrom",$datefrom); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;по
      <? makeform_from_date("dateto",$dateto); ?>
&nbsp;&nbsp;&nbsp;
      <input type=submit value="Применить">
    </form>
    <?
open_connection();

if ($deletetime > $datefrom) $datefrom = $deletetime;

$res = sql_do("SELECT * FROM totaldata where userlogin='$userlogin' and date>='$datefrom' and date<='$dateto' order by date desc");
 $count = mysql_num_rows($res); 
?>
    <table  class="printview">
      <tr>
        <th>Дата</th>
        <th>Номер абонента</th>
        <th>Номер переадр.</th>
        <th>Длит. (сек)</th>
        <th>Доход (руб)</th>
      </tr>
      <? 
$duration = $row['duration'];
$total_Out = 0;
$total_L_Out = 0;
$total_dur=0;
 while ($row = mysql_fetch_array($res, MYSQL_BOTH)){
	if(aprox($row['duration'])>0){
 		echo "<tr>";
 		echo "<td>".$row['date']."</td>";
		echo "<td>&nbsp;". substr ( $row['abon_number'], 0, 6 ) ." x x x x </td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".$row['duration']."</td>";
 		echo "<td>".($out = $row['out'])."</td>";
 		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']); 
		$total_Out = $total_Out + $out;
	}
}
echo "</table>";
close_connection(); 
?>
      <br>
      <a name="Vonagragdenie"></a>
      <table style="border: 1px solid #aaaaaa; border-collapse:collapse;  "  width="50%">
        <tr>
          <th>Длительность</th>
          <th> Вознаграждение</th>
        </tr>
        <tr>
          <td><div align="center"><? echo $total_dur  ; ?> сек. </div></td>
          <td><div align="center">
              <?=$total_Out?>
              руб.</div></td>
        </tr>
      </table>
      <?
}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function data()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
// личные данные
function data($user_id){
open_connection();

 $result = sql_do("SELECT * FROM users_jkh WHERE user_id='$user_id'");
 while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$row['userlogin'];
		$pass_hash=$row['pass_hash'];
		$fio=$row['fio'];
		$mail=$row['mail'];
		$icq=$row['icq'];
		$tele_contact=$row['tele_concact'];
		$additional=$row['additional'];
		$partner_num=$row['partner_num'];
		$redir_num=$row['redir_num'];
		$vremya1=$row['vremya1'];
		$vremya2=$row['vremya2'];
		$code=$row['code'];
		$partner_type=$row['partner_type'];
		$origname=$row['origname'];
		$startdate=$row['startdate'];
		$enddate=$row['enddate'];
		$type=$row['type'];
}
include('admin/includes/cab_anketa.php'); 

}





// сохраниние изменённых личных данных
function edited($user_id,$fio,$mail,$icq,$tele_contact,$additional,$vremya1,$vremya2){

open_connection();


	$res = sql_do("UPDATE users_jkh SET fio='$fio', mail='$mail', icq='$icq', tele_concact='$tele_contact', additional='$additional', vremya1='$vremya1', vremya2='$vremya2'  where user_id='$user_id'"); 
	if(!$res) { echo "Не удалось обновить данные."; }
	else  { echo "<br><br>&nbsp;&nbsp;Данные успешно обновлены. <a href='cabinet.php?mode=data'>Назад</a>"; }




}



function part_edit($user_id)
{ edited($_POST['user_id'],$_POST['fio'],$_POST['mail'],$_POST['icq'],$_POST['tele_contact'],$_POST['additional'],$_POST['vremya1'],$_POST['vremya2']);  }


// форма изменения пароля
function changepass($user_id){
?>
      <form action="cabinet.php?mode=changed" method=post>
      
      <br>
      <br>
      <table border=0 cellspacing=0 cellpadding=4>
        <tr>
          <td> Старый пароль: </td>
          <td><input type=password name=oldpass></td>
        </tr>
        <tr>
          <td> Введите новый пароль: </td>
          <td><input type=password name=pass></td>
        </tr>
        <tr>
          <td> Подтвердите: </td>
          <td><input type=password name=passconf></td>
        </tr>
      </table>
      <p>
        <input type=hidden name="user_id" value="<?=$user_id?>">
        <input type=submit value="Сохранить">
        <?
}

// изменение пароля
function changed(){

$user_id = $_POST['user_id'];
$pass = $_POST['pass'];
$oldpass = $_POST['oldpass'];
$passconf  =  $_POST['passconf'];


open_connection();

if($pass!=$passconf){ echo "Не совпадают введённые новые пароли. <a href='cabinet.php?mode=changepass'>Назад</a>"; die(); } 
$result = sql_do("SELECT pass_hash FROM users_jkh WHERE user_id='$user_id';");
$row = mysql_fetch_array($result, MYSQL_BOTH);

$pass_old=$row['pass_hash'];
$pass_hash=md5($oldpass);
if($row['pass_hash']!=$pass_hash){ echo "<br>&nbsp;&nbsp;Не совпадают введённые старый и новый пароли. <a href='cabinet.php?mode=changepass'>Назад</a>"; die(); }

$res = sql_do("UPDATE users_jkh SET pass_hash='".md5($pass)."' where user_id='$user_id'"); 
	if(!$res) { echo "Не удалось обновить данные."; }
	else  { echo "Данные успешно обновлены. <a href='cabinet.php?mode=changepass'>Назад</a>"; }
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOutReCo() --------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOutReCo ($duration, $login) {
 	$res=sql_do("SELECT * FROM users_jkh WHERE userlogin='$login' ");
	$row = mysql_fetch_array($res, MYSQL_BOTH) ;

	$sv = $row['icq'];	//Св = Стоимость одного выхода рекламы При внесении нового партнера
	$kd = $row['mail'];	//Кд = Количество дней в одном выходе, менеджер вручную вбивает
	$pr = ( $row['enddate'] - $row['startdate'] ) / (3600*24);	//Пр = Период рекламы (кол-во дней)  данные      startdate   enddate
	$user_code = $row['code'];
	$redir_num = $row['redir_num'];
	$p = ($sv/$kd) /* *$pr */ ;		//   Где Р – расход

	$result= sql_do("SELECT * FROM incoming WHERE  user_code = '$user_code' AND called_number = '$redir_num' ");
	$num = mysql_num_rows($result);


return round ( $p/$num , 2 ) ;
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOutClient() ------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOutClient ($abon_number, $duration) {
  $q = "SELECT * FROM `defcodes` WHERE `from` <=  '$abon_number' AND `to` >= '$abon_number' ";
  $result=sql_do($q);
  if (!mysql_num_rows($result) || mysql_num_rows($result) >1) return 'N/A An';
  else {
  	if ($tarif_number == '9012029438') 		$t=2;
  	elseif ($tarif_number == '9012028013') 	$t=1;
  	else 									$t=0;
  	//return "OK!";
	$row = mysql_fetch_array($result, MYSQL_BOTH);
	$id = $row['id'];
	$provider = $row['provider'];
	$oblast = $row['oblast'];
	$from = $row['from'];
	$to = $row['to'];
	$tarif_1 = $row['tarif_1'];
	$tarif_2 = $row['tarif_2'];
	$porog = $row['porog'];
	$procent = $row['procent'];
	$work = $row['work'];
	$region = $row['region'];
	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;

	if (!$work) return "N/M";
	if (!$duraMin) return 0;
  }
return round ( ( $duration * (12/60) ), 2) ;
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOut() ------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOut ($partner_num, $abon_number, $duration, $tarif_number) {
  $q = "SELECT * FROM `defcodes` WHERE `from` <=  '$abon_number' AND `to` >= '$abon_number' ";
  $result=sql_do($q);
  if (!mysql_num_rows($result) || mysql_num_rows($result) >1) return 'N/A An';
  else {
  	if ($tarif_number == '9012029438') 		$t=2;
  	elseif ($tarif_number == '9012028013') 	$t=1;
  	else 									$t=0;
  	//return "OK!";
	$row = mysql_fetch_array($result, MYSQL_BOTH);
	$id = $row['id'];
	$provider = $row['provider'];
	$oblast = $row['oblast'];
	$from = $row['from'];
	$to = $row['to'];
	$tarif_1 = $row['tarif_1'];
	$tarif_2 = $row['tarif_2'];
	$porog = $row['porog'];
	$procent = $row['procent'];
	$work = $row['work'];
	$region = $row['region'];
	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;

	if (!$work) return "N/M";
	if (!$duraMin) return 0;

	if ($tarif_number == '9012029438') 	{
		//$svt = ($tarif_2 * $procent) * $duraMin;
		$CostOut  =  ($region == 'cent') ? (19/60)*$duration  : (17/60)*$duration  ;
	}
  	elseif ($tarif_number == '9012028013') 	{
		//$svt = ($tarif_1 * $procent) * $duraMin;
		$CostOut  =  ($region == 'cent') ? (9.5/60)*$duration  : (8.5/60)*$duration  ;
	}
  	else 									return "N/A";
 return round ( $CostOut , 2) ;
 }


}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function payouts()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
// личные данные
function payouts($user_id){
open_connection();

 $result = sql_do("SELECT * FROM users_jkh WHERE user_id='$user_id'");
 while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$row['userlogin'];
		$pass_hash=$row['pass_hash'];
		$fio=$row['fio'];
		$mail=$row['mail'];
		$icq=$row['icq'];
		$tele_contact=$row['tele_concact'];
		$additional=$row['additional'];
		$partner_num=$row['partner_num'];
		$redir_num=$row['redir_num'];
		$vremya1=$row['vremya1'];
		$vremya2=$row['vremya2'];
		$code=$row['code'];
		$partner_type=$row['partner_type'];
		$origname=$row['origname'];
		$startdate=$row['startdate'];
		$enddate=$row['enddate'];
		$type=$row['type'];
}





 /* echo */  $q_223 = "SELECT * FROM `payouts` WHERE `userlogin` = '$userlogin' ORDER BY period DESC";

$result =  mysql_query($q_223) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q_223." --- <BR>");

//echo " Строк ".mysql_num_rows($result);


?>
      <h4>Уважаемый(ая)
        <?=$fio?>
        !</h4>
      Ваш логин в системе -
      <?=$userlogin?>
      .<br>
      Оплата производится помесячно.
      <h4>Статистика взаиморасчетов</h4>
      <table  class="printview">
        <thead>
          <tr>
            <th>Месяц</th>
            <th>Дата</th>
            <th>Вознаграждение</th>
            <?php 	if ($type != 'Юридическое лицо') {?>
            <th>Сумма*</th>
            <?php }?>
            <th>Статус</th>
          </tr>
        </thead>
        <tbody>
          <?
//exit;
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){
 
			$period = $row['period'];
			$userlogin = $row['userlogin'];
			$year = $row['year'];
			$payoutdate = $row['payoutdate'];
			$out = $row['out'];
			$month = $row['month'];
			$complete  = $row['complete'];
		echo "<tr>";
		echo "<td>".$year.'-'.$month."</td>";
		echo "<td>".($complete ? $payoutdate : '&nbsp;')."</td>";
		echo "<td>".$out."</td>";
		if ($type == 'Физическое лицо') 	echo "<td>".(round($out*0.87,2))."</td>";
		elseif ($type == 'ВебМани') 	echo "<td>".(round($out*0.951,2))."</td>";
		echo "<td>".( $complete == 'YES' ? 'Выполнен' : ($complete == 'ZAK' ? 'Заказан' : 'Начислен') )."</td>";
		echo "</tr>";
		$total_Outwithfrod = $total_Outwithfrod + $outwithfrod;
		$total_Out = $total_Out + $out;

 }
 ?>
        </tbody>
      </table>
      <?php 	if ($type == 'Физическое лицо') {?>
      * - С суммы вознаграждения в соответствии с действующим законодательством и условиями заключенного с Вами договора удерживается подоходный налог в размере 13%
      <? }
elseif ($type == 'ВебМани') {?>
      * - В соответствии с пунктом 3.12 <a href="http://mcall.ru/connect.php">ПУБЛИЧНОЙ ОФЕРТЫ НА ПРЕДОСТАВЛЕНИЕ УСЛУГ И СЕРВИСОВ </a> (для звонков после 01.09.2008)
      <? }
 
 $nowperiod = NowPeriod($period);
//close_connection();
//echo "SELECT * FROM totaldata where userlogin='$userlogin' and date>='$nowperiod'  order by date desc";
$res = sql_do("SELECT * FROM totaldata where userlogin='$userlogin' and date>='$nowperiod'  order by date desc");
 $count = mysql_num_rows($res); 
?>
      <!--table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:12px;  ">
<tr>
<th>Дата</th>
<th>Номер абонента</th>
<th>Номер переадр.</th>
<th>Длит. (мин)</th>     
<th>Вознаграждение (руб)</th>     
</tr>
<? 
$duration = $row['duration'];
$total_Out = 0;
$total_dur=0;
 while ($row = mysql_fetch_array($res, MYSQL_BOTH)){
	if(aprox($row['duration'])>0){
 		echo "<tr>";
 		echo "<td>".$row['date']."</td>";
		echo "<td>&nbsp;". substr ( $row['abon_number'], 0, 6 ) ." x x x x </td>";
		echo "<td>".$partner_num."</td>";
		echo "<td>".(round($row['duration']/60, 2))."</td>";
 		echo "<td>".($out = $row['out'])."</td>";
 		echo "</tr>";
		$total_dur=$total_dur+aprox($row['duration']); 
		$total_Out = $total_Out + $out;

	}
}

close_connection(); 
?>
</table-->
      <p>Напоминаем Вам, что выводятся суммы не менее 500 рублей в месяц, в противном случае – переносятся до следующей выплаты.
        <?
}

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function NowPeriod()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
//  Устанавливает  период на месяц больше  (следующий то есть делает месяц)
function NowPeriod($date) {

  $date_array=explode("-",$date);
$day = $date_array[2];
$month = 1+$date_array[1];
$year = $date_array[0];
if ($month == 13) {
	$month=1;
	$year = 1+$year;
}
if ($month<10) $month = "0".$month;
 	return ($year."-".$month."-".$day);
}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function balance()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function balance($user_id){
open_connection();

 	$result1 = sql_do("SELECT * FROM users_jkh WHERE user_id='$user_id'");
	$ro1 = mysql_fetch_array($result1, MYSQL_BOTH);
	echo "<br>Баланс по аккаунту ";
	echo $userlogin = $ro1['userlogin'];
	$activationdate = $ro1['activationdate'];
	echo ".<br>Начисления  произведены условно, окончательный расчет производится после получения подтвержденных данных от операторов связи.<br>";


// plus minus balans  payout date comment
$T_plus = 0;
$T_minus = 0;
$T_payout = 0;
?>
        <?php /*  */?>
      <h4>Статистика взаиморасчетов</h4>
      <table   class="printview">
        <thead>
          <tr>
            <th>Дата</th>
            <th>Приход</th>
            <th>Расход</th>
            <th>Выплаты</th>
            <th>Комментарий</th>
            <th>Баланс</th>
          </tr>
        </thead>
        <tbody>
          <?
 	$result = sql_do("SELECT * FROM `user_balans` WHERE `userlogin` = '$userlogin' AND `date` >= '$activationdate'  ORDER BY `date` ASC ");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$date=substr($ro['date'], 0 ,10);
		$plus=$ro['plus'];
		$minus = $ro['minus'];
		$payout = $ro['payout'];
		$comment = $ro['comment'];

		$T_plus = $T_plus + $plus;
		$T_minus = $T_minus + $minus;
		$T_payout = $T_payout + $payout;

		echo "<tr>";
		echo "<td>".$date."</td>";
		echo "<td>".$plus."</td>";
		echo "<td>".$minus."</td>";
		echo "<td>".$payout."</td>";
		echo "<td>".$comment."</td>";
		echo "<td>".(round (($T_plus - $T_minus - $T_payout), 2))."</td>";
		echo "</tr>";
	}
 ?>
        </tbody>
        <tfoot>
          <tr>
            <th>&nbsp;</th>
            <th><div align="right"><? echo $T_plus; ?> р.</div></th>
            <th><div align="right"><? echo $T_minus; ?> p.</div></th>
            <th><div align="right"><? echo $T_payout; ?> p.</div></th>
            <th>&nbsp;</th>
            <th><?php echo round (($balance = $T_plus - $T_minus - $T_payout), 2) ;?></th>
          </tr>
        </tfoot>
      </table>
      <?

echo '<br>Предварительный баланс: <strong><font color="#aa0000">' . (round (($balance = $T_plus - $T_minus - $T_payout), 2));
echo "</font></strong> рублей";

//    Доступный баланс
$total_Out = 0;
$q_223 = "SELECT * FROM `payouts` WHERE  `userlogin` = '$userlogin' ";
$resultq_223 =  mysql_query($q_223) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q_223." --- <BR>");
while ($row = mysql_fetch_array($resultq_223, MYSQL_BOTH)){

			$year = $row['year'];
			$out = $row['out'];
			$month = $row['month'];
			$complete  = $row['complete'];
	if (!$complete) $total_Out = $total_Out + $out;
 }
echo '<br>Доступный баланс: <strong><font color="#00aa00">'.$total_Out;
echo "</font></strong> рублей";
if ($total_Out) echo '<br> Вы можете вывести доступные средства в разделе "<a href="cabinet.php?mode=get_money">Вывод Средств</a>"';

close_connection();
}




#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function docs()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function docs($user_id){
?>
      <br>
      Вы уже выслали документы, но они все еще помечены как непредоставленные? - <a href="faq.php#q20" target="_blank">Возможная причина </a><br>
      <?
open_connection();

 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	echo "<br>Документы, предоставленные по аккаунту ";
	echo $userlogin = $ro['userlogin'];
	echo ".<br>Внимание! До предоставления ВСЕХ перечисленных ниже документов вывод средств с Вашего аккаунта будет заблокирован.<br>";

	$document=$ro['document'];
	$requisition = $ro['requisition'];
	$agreement = $ro['agreement'];
	$inn = $ro['inn'];
	$type = $ro['type'];
#--------------------------------------------------------------------
	if ($type == 'Физическое лицо') { ?>
      <br>
      <br>
      <table class="printview">
        <tr>
          <th>Паспорт</th>
          <th>Платежные реквизиты</th>
          <th>Договор</th>
          <th>Копия ИНН (скан или факс)</th>
        </tr>
        <tr>
          <td><?=$ro['document']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
          <td><?=$ro['requisition']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
          <td><?=$ro['agreement']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
          <td><?=$ro['inn']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
        </tr>
      </table>
      <?
		if ($document && $requisition && $agreement && $inn) $docs = true; else  $docs = false;
}
#--------------------------------------------------------------------

	elseif ($type == 'ВебМани') { ?>
      <br>
      <br>
      <table class="printview">
        <tr>
          <th>Паспорт</th>
          <th>Аттестат WM не ниже начального</th>
          <th>Договор</th>
        </tr>
        <tr>
          <td><?=$ro['document']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
          <td><?=$ro['requisition']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
          <td><?=$ro['agreement']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
        </tr>
      </table>
      <?
		if ($document && $requisition && $agreement) $docs = true; else  $docs = false;
}
#--------------------------------------------------------------------


	else { // Юрики   ?>
      <br>
      <br>
      <table class="printview">
        <tr>
          <th>Свидетельство о регистрации</th>
          <th>Банковские реквизиты</th>
          <th>Договор</th>
        </tr>
        <tr>
          <td><?=$ro['document']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
          <td><?=$ro['requisition']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
          <td><?=$ro['agreement']?'<font color="#00bb00">предоставлен</font>':'<font color="#BB0000">непредоставлен</font>'?></td>
        </tr>
      </table>
      <?
		if ($document && $requisition && $agreement) $docs = true; else  $docs = false;
}
#--------------------------------------------------------------------


echo "<br>Вывод средств: ".($docs? '&nbsp;&nbsp;&nbsp;&nbsp;<font color="#00bb00">Вы можете выводить средства</font>' : '&nbsp;&nbsp;&nbsp;&nbsp;<font color="#BB0000">Вы НЕ можете выводить средства.</font><br><br>Необходимо предоставить недостающие документы.');
close_connection();
}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function b_requesites()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function b_requesites($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();
if ($sendpayment) sql_do("INSERT INTO `b_requesites` (`id` ,`user_id` ,`userlogin` ,`receivername` ,`receiver_inn` ,`receiver_account` ,`receiver_bankbic` ,`receiver_bank_kc` ,`paymentassignment`) VALUES ('' , '$user_id', '$userlogin', '$receivername', '$receiver_inn', '$receiver_account', '$receiver_bankbic', '$receiver_bank_kc', '$paymentassignment' )" );

if ($sendpaymentagain) sql_do("UPDATE `b_requesites` SET `receivername` =  '$receivername',`receiver_inn` = '$receiver_inn',`receiver_account` ='$receiver_account' , `receiver_bankbic` = '$receiver_bankbic' , `receiver_bank_kc` = '$receiver_bank_kc' , `paymentassignment` = '$paymentassignment'     WHERE `user_id` ='$user_id'" );

if ($wm_payment) sql_do("UPDATE `users_jkh` SET `wmpurse` = '$receiver_wm' WHERE `user_id` ='$user_id' " );


 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];

	$document=$ro['document'];
	$requisition = $ro['requisition'];
	$agreement = $ro['agreement'];
	$inn = $ro['inn'];
	$type = $ro['type'];
	$wmpurse = $ro['wmpurse'];




#--------------------------------------------------------------------
	if ($type  == 'Физическое лицо') { 


 	$result_br = sql_do("SELECT * FROM `b_requesites`  WHERE user_id='$user_id'");
	$robr = mysql_fetch_array($result_br, MYSQL_BOTH);
	if (   mysql_num_rows($result_br)  )  {
		echo "<br><br>По аккаунту ".($userlogin = $robr['userlogin'])." предоставлены следующие реквизиты:<br>";
		include('includes/bankrequisites_again.php'); 

/* 
		?>
      <form method=post action="<?=$_SERVER['PHP_SELF']?>?mode=b_requesites">
        <table  class="printview">
          <tbody>
            <tr>
              <td class="maintext" valign="top">Получатель:</td>
              <td><textarea  style="width: 170px; height: 49px;" tabindex="3" name="receivername" id="receivername" maxlength="160"><?=$robr['receivername']?>
</textarea>
              </td>
            </tr>
            <tr>
              <td class="maintext">ИНН:</td>
              <td><input  style="width: 134px;" tabindex="4" name="receiver_inn" id="receiver_inn" maxlength="12" value="<?=$robr['receiver_inn']?>"></td>
            </tr>
            <tr>
              <td class="maintext">р/Сч. №:</td>
              <td><input  style="width: 154px;" tabindex="5" maxlength="20" name="receiver_account" id="receiver_account" value="<?=$robr['receiver_account']?>"></td>
            </tr>
            <tr>
              <td class="maintext">БИК банка:</td>
              <td><input  style="width: 100px;" tabindex="6" maxlength="9" id="receiver_bankbic" name="receiver_bankbic" value="<?=$robr['receiver_bankbic']?>"></td>
            </tr>
            <tr>
              <td class="maintext">к/Сч. №:</td>
              <td><input  style="width: 154px;" tabindex="7" name="receiver_bank_kc" id="receiver_bank_kc" value="<?=$robr['receiver_bank_kc']?>"></td>
            </tr>
            <tr>
              <td class="maintext" valign="top">Назначение платежа:</td>
              <td><textarea name="paymentassignment"   style="width: 470px; height: 56px;" tabindex="8" maxlength="108"><?=$robr['paymentassignment']?>
</textarea>
                <!--center style=""><span ><i>(выше введите свое назначение. макс длина 108 символов)</i></span></center-->
              </td>
            </tr>
            <!--tr>
                  <td class="maintext" valign="top">&nbsp;</td>
                  <td>
				  <input name="user_id" type="hidden" value="<?=$user_id?>">
				  <input name="userlogin" type="hidden" value="<?=$userlogin?>">
                    <input name="sendpayment" value="отправить уточненные банковские реквизиты"  type="submit">
                </td>
                </tr-->
          </tbody>
        </table>
      </form>
      <ul>
        <li><b>БИК банка получателя</b> - банковский идентификационный код банка получателя в соответствии со "Справочником БИК РФ". </li>
        <li><strong>К/С</strong> <strong>банка получателя</strong> - номер корреспондентского счета открытый кредитной организацией получателя в расчетной сети Банка России.</li>
        <li><b>Р/С получателя</b> - номер лицевого счета получателя в кредитной организации, либо номер счета отделения при отправке в Сбербанк (начинается с 30301...), либо номер кор. счета кредитной организации в банке-получателе при переводе средств в кредитную организацию, имеющую кор. счет в банке-получателе.</li>
        <li><b>ИНН получателя</b> - идентификационный номер налогоплательщика - получателя денежных средств. При переводе в Сбербанк, как правило, указывается ИНН Сбербанка - 7707083893. При переводе в другой коммерческий банк, в случае отсутствия ИНН у получателя денежных средств можно, указать ИНН банка получателя или 0000000000. </li>
        <li><b>Получатель</b> - наименование банка-получателя денежных средств. </li>
        <li><b> Назначение</b> - ФИО получателя (полностью), номер счета (карточного или сберкнижки) физического лица – получателя<br>
          Банковский перевод, по указанным Вами реквизитам выполняет наше уполномоченное лицо в соответствии с договором оферты. В назначение платежа будет добавлен текст, поясняющий это. В связи с ограничением ЦБ на длину поля <b>назначение</b> банковского перевода, Ваше назначение платежа не должно превышать 108 символов. </li>
        <li><b>Отметка о НДС в назначении платежа</b> - в соответствии с Законом РФ "О налоге на добавленную стоимость" при платежах необходимо выделять сумму НДС. Физические лица, кроме частных предпринимателей, не являются плательщиками НДС, поэтому при переводах на имя физического лица сумма НДС не выделяется, то есть указывается: "Без НДС". В назначение платежа будет добавлен текст, поясняющий это.</li>
      </ul>
      <h3>Приведены примеры заполнения реквизитов:</h3>
      <ol>
        <li> <b>Перевод в отделение Сбербанка</b> <br>
          <b>БИК</b> - 044652323 <br>
          <b>Получатель</b> - СБ "ФИЛ. АК СБ РФ (СБ РОССИИ) ОАО-СПБ БАНК" г.САНКТ-ПЕТЕРБУРГ , Савельева Анна Авдеевна в ОСБ №2003/0715 <br>
          <strong>KC</strong> - 30101810500000000653 <br>
          <b>РС</b> - 42301810555073124377 <br>
          <b>ИНН</b> - 7707083893 <br>
          <b>Назначение</b> - Савельевой Анне Авдеевне в ОСБ №2003/0715 <br>
          <br>
        </li>
        <li> <b>Перевод в отделение Сбербанка, если номер счета получателя больше 20 знаков (например, на сберегательную книжку)</b> <br>
          <b>БИК</b> - 044030653 <br>
          <b>Получатель</b> - МОСКОВСКИЙ ОБЛАСТНОЙ БАНК СБЕРБАНКА РФ г.МОСКВА, Орехово-зуевское отделение №8038/077 <br>
          <strong>KC</strong> - 30101810900000000323 <br>
          <b>РС</b> - 30301810440000600076 <br>
          <b>ИНН</b> - 7707083893 <br>
          <b>Назначение</b> - Для Петрова Василия Павловича, Л/С. 42301610120141766183/01,<br>
          <br>
        </li>
        <li> <b>Перевод в Сбербанк на карточный счет</b> <br>
          <b>БИК</b> - 044652323 <br>
          <b>Получатель</b> СБ "ФИЛ. АК СБ РФ (СБ РОССИИ) ОАО-СПБ БАНК" г.САНКТ-ПЕТЕРБУРГ , Вагин Александр Александрович в ОСБ №2003/0715 <br>
          <strong>KC</strong> - 30101810500000000653 <br>
          <b>РС</b> - 47422810555019999107 <br>
          <b>ИНН</b> - 7707083893 <br>
          <b>Назначение</b> - На карт-счет 6761956102005286 Вагина Александра Александровича <br>
          <br>
        </li>
        <li> <b>Перевод в коммерческий банк</b> <br>
          <b>БИК</b> - 047308874 <br>
          <b>Получатель</b> - Филиал КБ "Мост-Банк" в г.Ульяновске, Краевский Семен Василиевич <br>
          <strong>KC</strong> - 30101810100000000874 <br>
          <b>РС</b> - 42301810410010000244 <br>
          <b>ИНН</b> - 0000000000 <br>
          <b>Назначение</b> - Краевскому Семену Василиевичу <br>
          <br>
        </li>
        <li> <b>Перевод в коммерческий банк, у которого открыт кор. счет в другом банке</b> <br>
          <b>БИК</b> - 044525545 <br>
          <b>Получатель</b> - ЗАО МЕЖДУНАРОДНЫЙ МОСКОВСКИЙ БАНК г. МОСКВА, ДЛЯ АО "ПАРЕКС-БАНК" <br>
          <strong>KC</strong> - 30101810300000000545 <br>
          <b>РС</b> - 30111810400010001728 <br>
          <b>ИНН</b> - 7710030411 <br>
          <b>Назначение</b> - ДЛЯ BIS 0008760771 ДЛЯ СЧЕТА 7924-1373<br>
        </li>
      </ol>
      <? */
	}
	else {
				echo "<h3>БАНКОВСКИЕ РЕКВИЗИТЫ</h3>Просим Вас  во избежание ошибок и недоразумений заполнить форму с банковскими реквизитами, на которые будут выводится средства с Вашего аккаунта!<br> После сверки с полученными по эл. почте и в случае отсутствия существенных расхождений для оплаты будут использованы реквизиты, введенные на этой странице.<br><br>Пожалуйста, внимательно ознакомьтесь с расшифровкой полей и примерами заполнения, после чего заполните форму внизу страницы.";
			echo '<br><br>Внимание! Вы еще не заполнили форму ПЛАТЕЖНЫХ РЕКВИЗИТОВ. <font color="#FF0000">Без этого вывод средств будет невозможен!</font><br><br>';
			include('includes/bankrequisites.php'); 
	}

  }         //    if ($type  != 'ВебМани')
#--------------------------------------------------------------------


	elseif ($type == 'ВебМани') { 
	
	 include('includes/wmrequisites.php'); 
	}
#--------------------------------------------------------------------
	else { // Юрики  
	?>
      Банковские реквизиты юридических лиц берутся из договора, на сайте они не заполняются. Для оплаты будут использованы реквизиты, которые Вы предоставили в соответствующем разделе Договора о сотрудничестве.
      <? 
	}
#--------------------------------------------------------------------



close_connection();

//phpinfo(32);
}










#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function get_money()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function get_money($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();

 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];
	$type = $ro['type'];

if ($go == 'yes')  {
	/* echo */ $q = "UPDATE `payouts` SET `complete` = 'ZAK', `payoutdate` = '20".date("y-m-d")."' WHERE `userlogin` = '$userlogin'  AND `period` LIKE '%".$period."%' ";
	$result =  mysql_query($q) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q." --- <BR>");
}





	?>
      <h2>Вывод средств</h2>
      <?


//    Доступный баланс
$total_Out = 0;
$q_223 = "SELECT * FROM `payouts` WHERE  `userlogin` = '$userlogin' ";
$resultq_223 =  mysql_query($q_223) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q_223." --- <BR>");
while ($row = mysql_fetch_array($resultq_223, MYSQL_BOTH)){

			$year = $row['year'];
			$out = $row['out'];
			$month = $row['month'];
			$complete  = $row['complete'];
	if (!$complete) $total_Out = $total_Out + $out;
 }
if ($total_Out) {
echo '<br>Здесь Вы можете вывести доступные средства в сумме<br>  <strong><font color="#00aa00">'.$total_Out;

	if ($type == 'Физическое лицо') echo "</font></strong> рублей<br> (с этой суммы в соответствии с действующим законодательством в бюджет будет удержан НДФЛ 13%).";
	elseif ($type == 'ВебМани') echo "</font></strong> рублей<br> (на Ваш R-кошелек ВебМани придет сумма ".round($total_Out * 0.951,2)."р. в соответствии с п.3.12 Публичной Оферты о предоставлении услуг).";
	else echo "</font></strong> рублей<br> ";

echo '<br><br> <a href="'.$_SERVER['PHP_SELF'].'?mode=get_money&period='.$year.'-'.$month.'&go=yes">Вывести  '.$total_Out.' рублей</a><br><br>';
//echo  $_SERVER['PHP_SELF'];
}
else echo "Нет доступных средств на балансе."; if ($go == 'yes') echo "<br>Вывод средств заказан (см. \"Платежи\").";

close_connection();
}













#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function ticket()  ------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function ticket($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];
	$type = $ro['type'];
	$activationdate = $ro['activationdate'];
	$activationdate = substr($activationdate, 0, 10)  ;
	
	
if ( isset($userlogin) && isset($ticket) && $do == 'update') {
$q = " SELECT * FROM `tickets` WHERE `userlogin` =  '$userlogin' AND `ticket` =  '$ticket' ";
$result= sql_do($q);
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

	$userlogin 	= 		$row['userlogin'];
	$date 		= 		$row['date'];
	$ticket 	= 		$row['ticket'];
	$header 	= 		$row['header'];
	$question 	=	 	$row['question'];
	$answer 	= 		$row['answer'];
	
}

?>
      <h3>Обратная связь</h3>
      <form action="<?=$_SERVER['PHP_SELF']?>?mode=ticket" method="post">
        <table border="0" cellspacing="4" cellpadding="2">
          <tr>
            <td>ticket</td>
            <td><input name="ticket" type="text" size="26" value="<?=$ticket?>"></td>
          </tr>
          <tr>
            <td>Вопрос</td>
            <td><textarea name="question" cols="90" rows="15"><?=$question?>
</textarea></td>
          </tr>
          <tr>
            <td colspan="2"><div align="right">
                <input name="updatequest" type="submit" value="Отредактировать">
              </div></td>
          </tr>
        </table>
      </form>
      <?
exit();
//die("");
}

if ( isset($quest) && $quest != '')  {
	/* echo */ $q = "INSERT INTO `tickets` (`id` , `userlogin` , `date` , `ticket` , `header` , `question` , `answer` ) VALUES (NULL , '$userlogin', '".date("20y-m-d")." ".date("H:i:s")."', '".time()."', '$header', '$question', '')";
	$result =  mysql_query($q) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q." --- <BR>");
}
elseif ( isset($updatequest) && $updatequest != '')  {
		/* echo */ $q = "UPDATE `tickets`  SET `question` = '$question' WHERE `ticket` = '$ticket' AND `userlogin` = '$userlogin' ";
		$result =  mysql_query($q) or die ("<p><b>ERROR---!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR> --- ".$q." --- <BR>");
}


?>
      <h3>Обратная связь</h3>
      <form action="<?=$_SERVER['PHP_SELF']?>?mode=ticket" method="post">
        <table border="0" cellspacing="4" cellpadding="2">
          <tr>
            <td>Тема вопроса </td>
            <td><input name="header" type="text" size="26"></td>
          </tr>
          <tr>
            <td>Вопрос</td>
            <td><textarea name="question" cols="20" rows="5"></textarea></td>
          </tr>
          <tr>
            <td colspan="2"><div align="right">
                <input name="quest" type="submit" value="Задать вопрос">
              </div></td>
          </tr>
        </table>
      </form>
      <hr>
      <h4>История переписки</h4>
      <table cellspacing=0 border=1  style="font-family:Arial, Helvetica, sans-serif; font-size:11px; margin:9px;  " class="sortable">
        <thead>
          <tr>
            <th>Дата</th>
            <th>Тема</th>
            <th>Вопрос</th>
            <th>Ответ</th>
            <th>ticket</th>
          </tr>
        </thead>
        <tbody>
          <?
$q = " SELECT * FROM `tickets` WHERE `userlogin` =  '$userlogin'  AND `date` >  '$activationdate'  ORDER BY `date` DESC";
$result= sql_do($q);
while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

	$date 		= 		$row['date'];
	$ticket 	= 		$row['ticket'];
	$header 	= 		$row['header'];
	$question 	=	 	$row['question'];
	$answer 	= 		$row['answer'];
	
		echo "<tr>";
		echo "<td>&nbsp;&nbsp;".$date."&nbsp;&nbsp;</td>";
		echo "<td>&nbsp;&nbsp;".$header."&nbsp;&nbsp;</td>";
		echo "<td>&nbsp;&nbsp;".$question."<p><a href='".$_SERVER['PHP_SELF']."?mode=ticket&userlogin=".$userlogin."&ticket=".$ticket."&do=update' title='Редактировать вопрос'>".( !$answer ? 'Редактировать вопрос':'')."</a></p></td>";
		echo "<td>&nbsp;&nbsp;".$answer."</td>";
		echo "<td>&nbsp;&nbsp;".$ticket."&nbsp;&nbsp;</td>";
		echo "</tr>";
}
 ?>
        </tbody>
      </table>
      <?
"INSERT INTO `mcall_short`.`tickets` (`id` , `userlogin` , `date` , `ticket` , `header` , `question` , `answer` )
VALUES (NULL , '23456', '2009-04-05', '35355464646', 'yhy nyy nhn', 'htht t wtg tgtgw t tgwtgwtgw', '')";



close_connection();
}











#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function payshort()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function payshort($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();

 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];
	$payed = $ro['payed'];
	$type = $ro['type'];

if ($payed == 'YES')  {
	 echo "Вы уже оплатили подключение";
}
else {

?>
      <h2>Оплата подключения номера</h2>
      <?php 

if ( /* !isset($OneRuble) && isAction() */ 1 == 2)
{
	?>
      В настоящее время действует Акция «Подключись за 1 рубль!». Мы готовы подключить Вас за символическую плату. <a href="action1ruble.php" target="_blank">Узнать подробности акции</a>.<br>
      Для оплаты по этой акции нажмите кнопку
      <form action="<?=$_SERVER['SCRIPT_NAME'];?>?mode=pay809" method="post" name="payType">
        <input name="OneRuble" type="submit" value="Подключиться за 1 рубль">
      </form>
      <?
	$file = fopen("html_gall/actionprice.php","r");
	if(!$file) echo("Ошибка открытия файла");  //else  fpassthru($file); //echo $file;
	else {
		$file_array = file("html_gall/actionprice.php");
		if(!$file_array) {
			echo("Ошибка открытия файла");
		}
		else {
			for($i=0; $i < count($file_array); $i++) {
				
						$actionprice =  $file_array[$i];

			} // for     
		} // else
	} // else
	fclose ($file);

	
	
	
	
	$priceR =   $actionprice  ;
	$ActionName = " - Акция Гарантия лучшей цены";
	$Kvitancita = "print".$priceR.".php";
}
elseif ( /* isAction() */  2==3 ) {
	$priceR =  9300   ; 
	$ActionName = " - Акция Подключись за 1 рубль!";
	$Kvitancita = "print9300.php";

}

if ( 1 == 1 ) {
	$priceR =  990   ; 
	$ActionName = "";
	$Kvitancita = "print990.php";

}



$credit_days = 15;

#$priceR = /* 9300 */  7500  ;
$price = round(($priceR / 28), 2);
$name = 'подключение короткого номера, логин '.$userlogin.$ActionName;
 
 /* echo */ $res_url = 'http://'.$_SERVER['SERVER_NAME'].'/resultshort.php';
/*   echo '<br>';
 */  /* echo */ $suc_url = 'http://'.$_SERVER['SERVER_NAME'].'/successshort.php';
/*   echo '<br>';
 */ /* echo */  $fail = 'http://'.$_SERVER['SERVER_NAME'].'/failshort.php';
?>
      <p>&nbsp;</p>
      <table border="0" cellpadding="5" cellspacing="20">
        <tr>
          <td colspan="3"><div align="center"><strong>Оплатить через систему <span style="color:#660000;">WebMoney</span> </strong></div></td>
        </tr>
        <tr>
          <td>С кошелька Z (эквивалент - доллары США): <br>
            заплатить ООО «Интех»
            <?=$price;?>
            WMZ за
            <?=$name?>
            </p>
            <form id=pay name=pay method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">
              <input type="hidden" name="LMI_PAYMENT_AMOUNT" value="<?=$price?>">
              <input type="hidden" name="LMI_PAYMENT_DESC" value="<?=$name?>">
              <input type="hidden" name="LMI_PAYMENT_NO" value="<?=$userlogin?>">
              <input type="hidden" name="LMI_PAYEE_PURSE" value="Z658419101697">
              <input type="hidden" name="LMI_SIM_MODE" value="0">
              <input type="hidden" name="LMI_RESULT_URL" value="<?=$res_url?>">
              <input type="hidden" name="LMI_SUCCESS_URL" value="<?=$suc_url?>">
              <input type="hidden" name="LMI_FAIL_URL" value="<?=$fail?>">
              <?php /* <input type="hidden" name="LMI_PAYMENT_CREDITDAYS" value="<?=$credit_days?>
"> */?>
              <input type="hidden" name="my_param" value="<?=$userlogin?>">
              <input type="hidden" name="plus" value="<?=$priceR?>">
              <input type="hidden" name="payfornumber" value="yes">
              <input type="hidden" name="comment" value="Оплата подключения короткого номера">
              </p>
              <p>
                <input type="submit" value="оплатить <?= $price ;?> WMZ">
              </p>
            </form></td>
          <td valign="top"><div align="center">или </div></td>
          <td>С кошелька R (эквивалент - российские рубли): <br>
            заплатить ООО «Интех»
            <?= $priceR ;?>
            WMR за
            <?=$name?>
            </p>
            <form id=pay name=pay method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">
              <input type="hidden" name="LMI_PAYMENT_AMOUNT" value="<?=$priceR?>">
              <input type="hidden" name="LMI_PAYMENT_DESC" value="<?=$name?>">
              <input type="hidden" name="LMI_PAYMENT_NO" value="<?=$userlogin?>">
              <input type="hidden" name="LMI_PAYEE_PURSE" value="R280352171980">
              <input type="hidden" name="LMI_SIM_MODE" value="0">
              <input type="hidden" name="LMI_RESULT_URL" value="<?=$res_url?>">
              <input type="hidden" name="LMI_SUCCESS_URL" value="<?=$suc_url?>">
              <input type="hidden" name="LMI_FAIL_URL" value="<?=$fail?>">
              <?php /* <input type="hidden" name="LMI_PAYMENT_CREDITDAYS" value="<?=$credit_days?>
"> */?>
              <input type="hidden" name="my_param" value="<?=$userlogin?>">
              <input type="hidden" name="plus" value="<?=$priceR?>">
              <input type="hidden" name="payfornumber" value="yes">
              <input type="hidden" name="comment" value="Оплата подключения короткого номера">
              </p>
              <p>
                <input type="submit" value="оплатить <?= $priceR ;?> WMR">
              </p>
            </form></td>
        </tr>
      </table>
      <table border="0" cellpadding="5" cellspacing="20" width="100%">
        <tr>
          <td colspan="3"><div align="center"><strong>Оплатить через <span style="color:#660000;">БАНК</span> </strong></div></td>
        </tr>
      </table>
      <a href="<?php echo $Kvitancita; ?>" target="_blank">Квитанция для оплаты через БАНК</a> <br>
      <br>
      <?php /* <table border="0" cellpadding="5" cellspacing="20" width="100%">
  <tr>
    <td colspan="3">
	<div align="center"><strong>Оплатить при помощи  <span style="color:#660000;">СМС</span> </strong></div>
	<div align="center">(Альтернативный вариант, в стоимость входит оплата услуг операторов связи по обработке смс сообщения)</div>
	</td>
  </tr>
  <tr>
    <td colspan="3">
<?php
  
$result = false;
if (isset($_POST["key"])) {
  $check_url = "http://check.smspartner.ru?id=121642&key=".urlencode($_POST['key']);
  $content = @file_get_contents($check_url);
  if ($content === "OK") $result = true;
}

if (!$result) {
  //echo file_get_contents("http://dostup.smspartner.ru/send_text.php?id=121642");
  ?>
      <a href="#" onclick="window.open('http://dostup.smspartner.ru/send.php?id=121642', '_blank', 'location=no,height=220,width=740'); return false;">Инструкции по отправке SMS.</a><br>
      Для подтверждения оплаты после получения пароля (в ответном смс) его необходимо ввести в форму ниже и отправить в течение 1,5 часов.<br>
      <br>
      <?

  $messages = array();
  $messages["ServiceNotFound"] = "Ошибка! Сервис не найден.";
  $messages["PasswordNotSet"]  = "Ошибка! Не указан пароль.";
  $messages["BadPassword"]     = "Ошибка! Неверный пароль или срок действия пароля истёк.";
  $messages["Limit"]           = "Ошибка! Количество ввода пароля превысело установленный предел.";
  
  if (isset($messages[$content])) echo $messages[$content]."<br>\n";
?>
      <br>
      <form method="post" action="">
        Введите пароль
        <input type="text" name="key" value="">
        <input type="submit" value="OK">
      </form>
      <?php

} else {
  
  	$plus = 150;
	$comment = "Оплата подключения короткого номера по смс, пароль ".$_POST["key"];
	sql_do("INSERT INTO `payins` ( `id` ,  `userlogin` , `in` , `payindate`, `comment`  ) VALUES ( '',  '$userlogin', '$plus', '20".date("y-m-d")."', '$comment' )");
	sql_do("INSERT INTO `user_balans` VALUES ('', '$userlogin', '$plus', 0, 0, 0, '20".date("y-m-d")."', '$comment')");

	sql_do("UPDATE `registration` SET `payed` = 'YES' WHERE `userlogin` = '$userlogin' OR `id` = '$userlogin'");
	sql_do("UPDATE `users_jkh` SET `payed` = 'YES' WHERE `userlogin` = '$userlogin'");


  echo "<br><br>Оплата подключения короткого номера произведена";
  

require "include/class_email_pay.php";
$qu = "Оплата подключения короткого номера произведена пользователем с логином ".$userlogin.'<br><br>';
$email = new emailer;

				$email->subject = $userlogin." : поступил ПЛАТЕЖ";
				$email->to      = 'nidorofeev@yandex.ru, ilyadok@gmail.com';
				$email->from    = "support@mcall.ru";
				$email->message	= $qu;
				$email->html_email = 1;
				$email->char_set = 'windows-1251';
				$email->send_mail();

	

  
}

?>
      </td>
      
      </tr>
      
    </table>
    */?>
    <?      
			//echo $_SERVER['SCRIPT_NAME'];
}

close_connection();
}
















#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function payshortchange()  ---------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------

function payshortchange($user_id){
#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------
open_connection();

 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$user_id'");
	$ro = mysql_fetch_array($result, MYSQL_BOTH);
	$userlogin = $ro['userlogin'];
	$payed = $ro['payed'];
	$type = $ro['type'];

?>
    <h2>Оплата изменения логики услуги</h2>
    <?php 


$credit_days = 15;
$Kvitancita = "print100change.php";
$priceR = 150  ;
$price = round(($priceR / 30), 2);
$name = 'изменение логики услуги, логин '.$userlogin.$ActionName;
 
 /* echo */ $res_url = 'http://'.$_SERVER['SERVER_NAME'].'/resultshort.php';
/*   echo '<br>';
 */  /* echo */ $suc_url = 'http://'.$_SERVER['SERVER_NAME'].'/successshort.php';
/*   echo '<br>';
 */ /* echo */  $fail = 'http://'.$_SERVER['SERVER_NAME'].'/failshort.php';
?>
    <p>&nbsp;</p>
    <table border="0" cellpadding="5" cellspacing="20">
      <tr>
        <td colspan="3"><div align="center"><strong>Оплатить через систему <span style="color:#660000;">WebMoney</span> </strong></div></td>
      </tr>
      <tr>
        <td>С кошелька Z (эквивалент - доллары США): <br>
          заплатить ООО «Интех»
          <?=$price;?>
          WMZ за
          <?=$name?>
          </p>
          <form id=pay name=pay method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">
            <input type="hidden" name="LMI_PAYMENT_AMOUNT" value="<?=$price?>">
            <input type="hidden" name="LMI_PAYMENT_DESC" value="<?=$name?>">
            <input type="hidden" name="LMI_PAYMENT_NO" value="<?=$userlogin?>">
            <input type="hidden" name="LMI_PAYEE_PURSE" value="Z658419101697">
            <input type="hidden" name="LMI_SIM_MODE" value="0">
            <input type="hidden" name="LMI_RESULT_URL" value="<?=$res_url?>">
            <input type="hidden" name="LMI_SUCCESS_URL" value="<?=$suc_url?>">
            <input type="hidden" name="LMI_FAIL_URL" value="<?=$fail?>">
            <?php /* <input type="hidden" name="LMI_PAYMENT_CREDITDAYS" value="<?=$credit_days?>
"> */?>
            <input type="hidden" name="my_param" value="<?=$userlogin?>">
            <input type="hidden" name="plus" value="<?=$priceR?>">
            <input type="hidden" name="payfornumber" value="yes">
            <input type="hidden" name="comment" value="Изменение логики услуги (короткий номер)">
            </p>
            <p>
              <input type="submit" value="оплатить <?= $price ;?> WMZ">
            </p>
          </form></td>
        <td valign="top"><div align="center">или </div></td>
        <td>С кошелька R (эквивалент - российские рубли): <br>
          заплатить ООО «Интех»
          <?= $priceR ;?>
          WMR за
          <?=$name?>
          </p>
          <form id=pay name=pay method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">
            <input type="hidden" name="LMI_PAYMENT_AMOUNT" value="<?=$priceR?>">
            <input type="hidden" name="LMI_PAYMENT_DESC" value="<?=$name?>">
            <input type="hidden" name="LMI_PAYMENT_NO" value="<?=$userlogin?>">
            <input type="hidden" name="LMI_PAYEE_PURSE" value="R280352171980">
            <input type="hidden" name="LMI_SIM_MODE" value="0">
            <input type="hidden" name="LMI_RESULT_URL" value="<?=$res_url?>">
            <input type="hidden" name="LMI_SUCCESS_URL" value="<?=$suc_url?>">
            <input type="hidden" name="LMI_FAIL_URL" value="<?=$fail?>">
            <?php /* <input type="hidden" name="LMI_PAYMENT_CREDITDAYS" value="<?=$credit_days?>
"> */?>
            <input type="hidden" name="my_param" value="<?=$userlogin?>">
            <input type="hidden" name="plus" value="<?=$priceR?>">
            <input type="hidden" name="payfornumber" value="yes">
            <input type="hidden" name="comment" value="Изменение логики услуги (короткий номер)">
            </p>
            <p>
              <input type="submit" value="оплатить <?= $priceR ;?> WMR">
            </p>
          </form></td>
      </tr>
    </table>
    <table border="0" cellpadding="5" cellspacing="20" width="100%">
      <tr>
        <td colspan="3"><div align="center"><strong>Оплатить через <span style="color:#660000;">БАНК</span> </strong></div></td>
      </tr>
    </table>
    <a href="<?php echo $Kvitancita; ?>" target="_blank">Квитанция для оплаты через БАНК</a> <br>
    <br>
    <table border="0" cellpadding="5"  width="100%">
      <tr>
        <td><div>Для ускорения обработки Вашего запроса сообщите пожалуйста об оплате через <span style="color:#660000;">Обратную связь</span> или по телефону. При оплате через банк - пришлите скан платежного документа.</div></td>
      </tr>
    </table>
    <?      
			//echo $_SERVER['SCRIPT_NAME'];


close_connection();
}























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


?>
