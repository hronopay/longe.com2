<?
/* 
include_once ('class_kvalltime.php');
include_once ('class_kvvoda.php');
include_once ('class_giletcperiod.php');
include_once ('class_period.php');
include_once ('class_nachislenie.php');
include_once ('class_n2.php');
 */
include_once ('class_fft.php');
include_once ('class_upper123.php');
include_once ('class_deletefft.php');
include_once ('class_helpfft.php');

//соединение с базой данных
function open_connection() {
	global $link;
	$link = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die("Could not connect : " . mysql_error());
  mysql_select_db(DB_NAME) or die("Could not select database") /* or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sql."<BR>") */;
/* 
mysql_query ("set character_set_client='cp1251'");
mysql_query ("set character_set_results='cp1251'");
mysql_query ("set collation_connection='cp1251_general_ci'");
 */
mysql_query ("set character_set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_unicode_ci'");
 
}

//закрытие соединения с базой данных
function close_connection() {
	global $link;
	mysql_close($link);
//	print "Disconnected successfully<br>\n";
}

// выполнение sql-запроса, передаваемого в $sql
function sql_do($sql) {
global $link;
$result = mysql_query($sql,$link)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sql."<BR>sql_do");;
if (!$result) {
die();
}
return $result;
}

// выполнение sql-запроса, передаваемого в $sql  без сообщ. об ОШИБКЕ
function sql_doNE($sql) {
global $link;
$result = @mysql_query($sql,$link);
if (!$result) {
die();
}
return $result;
}

// редирект на страницу $relative_url посредством header
function redirect_to($relative_url) {
  $dirname=dirname($_SERVER['PHP_SELF']);
  if ($dirname=='/' || $dirname=='\\') $dirname='';
	header("Location: http://" . $_SERVER['HTTP_HOST']
                      . $dirname
                      . "/" . $relative_url);
	exit;
}

// получение переменных из post и get по $name
function getvar($name) {
  if (isset($_POST[$name]) && !empty($_POST[$name])) $tmp= htmlspecialchars($_POST[$name]);
  	elseif (isset($_GET[$name]) && !empty($_GET[$name])) $tmp = htmlspecialchars($_GET[$name]);
       else unset($tmp);
  if (isset($tmp)) {
  	$tmp=addslashes($tmp);
    return $tmp;
  } else {
  	return NULL;
  }
}

// получение переменных из POST
function getpostvar($name) {
if (isset($_POST[$name])) $tmp= htmlspecialchars($_POST[$name]);
    else unset($tmp);
    if (isset($tmp)) {
  	$tmp=addslashes($tmp);
    return $tmp;
  } else {
  	return NULL;
  }
}




// ф-ия ползовательской цветовой гаммы
function check_partner_color($login) {
    $result = sql_do("SELECT color FROM ".$login."__user WHERE id= 1 ");
    while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    	$color=$row['color'];
    }
	return $color;
}



// ф-ия ползовательской аутентификации
function check_partner_login($login,$password) {
    $md5_pass = md5($password);
    $result = sql_do("SELECT user_id FROM users_jkh WHERE userlogin='$login' AND pass_hash='$md5_pass'");
    while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    	$user_id=$row['user_id'];
    }
     $count = mysql_num_rows($result);

    if ($count==1) {
		$_SESSION['login']=$login;
		$_SESSION['password']=$password;
		$_SESSION['partner_id']=$user_id;
		define('USER_ID',$user_id);
		define('IS_PARTNER','1'); 
		return true;
  	} 
	else {
  		echo $_SESSION['login']. " " . $_SESSION['password'] . " - $count - Неверный ЛОГИН и/или ПАРОЛЬ<br><br>";
		return FALSE;
		  //die("WRONG LOGIN OR PASSWORD");
  	} 
	//return true;
}

function check_adminBYpartner_login($login,$password) {


    $result = sql_do("SELECT user_id FROM users_jkh WHERE userlogin='$login' ");
    while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    	$user_id=$row['user_id'];
    }
    $count = mysql_num_rows($result);

    if ($count==1 &&  $password == ADMIN_PASSWORD) {
		$_SESSION['partnerlogin']=$login;
		$_SESSION['password']=$password;
		$_SESSION['partner_id']=$user_id;
		define('USER_ID',$user_id);
		define('IS_PARTNER','1'); 
		return true;
  	} 
	else {
		echo "$count -----888777<br>";
		echo " -----888777<br>";

  		echo $_SESSION['login']. " " . $_SESSION['password'] . " - $count - Неверный ЛОГИН и/или ПАРОЛЬ<br><br>";
		return FALSE;
		  //die("WRONG LOGIN OR PASSWORD");
  	} 
	//return true;
}




// фильтр вводимых данных
function filter_var2($var) {
	$var = addslashes($var);
	$var = htmlspecialchars($var);
	return $var;
}

// функции для работы с датами
function makeform_from_date($name,$date, $status='') {
//  $yearlist = array('2007' => '2007', '2008' => '2008', '2009' => '2009', '2010' => '2010');
  $yearlist = MakeYearsArray();
  $monthlist = array('01' => 'Января',
                     '02' => 'Февраля',
                     '03' => 'Марта',
                     '04' => 'Апреля',
                     '05' => 'Мая',
                     '06' => 'Июня',
                     '07' => 'Июля',
                     '08' => 'Августа',
                     '09' => 'Сентября',
                     '10' => 'Октября',
                     '11' => 'Ноября',
                     '12' => 'Декабря'
                     );

  $daylist = array();
  for($i=1;$i<=31;$i++) {
  	if ($i<10) { $i='0'.$i; }
  	$daylist["$i"]="$i";
  }

  $date_array=explode("-",$date);
  if ($status == '') {
  	make_selected_list($name."Day",$daylist,$date_array[2]);
	make_selected_list($name."Month",$monthlist,$date_array[1]);
	make_selected_list($name."Year",$yearlist,$date_array[0]);
  }
  else {
  	echo $date_array[2] ." ". $monthlist[$date_array[1]] ." ". $date_array[0] . ($status==1 ? "г.":" года");
  }
}


function make_datetime($name) {
  if (isset($_POST['datetime'.$name])) return $_POST['datetime'.$name];
	$year = (isset($_POST['datetime'.$name.'Year'])) ? $_POST['datetime'.$name.'Year'] : date('Y');
	$month = (isset($_POST['datetime'.$name.'Month'])) ? $_POST['datetime'.$name.'Month'] : date('m');
	$day = (isset($_POST['datetime'.$name.'Day'])) ? $_POST['datetime'.$name.'Day'] : date('d');
	$hour = (isset($_POST['datetime'.$name.'Hour'])) ? $_POST['datetime'.$name.'Hour'] : date('H');
	$minute = (isset($_POST['datetime'.$name.'Minute'])) ? $_POST['datetime'.$name.'Minute'] : date('i');
	$second = (isset($_POST['datetime'.$name.'Second'])) ? $_POST['datetime'.$name.'Second'] : date('s');
	return $year."-".$month."-".$day." ".$hour.":".$minute.":".$second;
}

function make_date($name) {
  if (isset($_POST['date'.$name])) return $_POST['date'.$name];
	$year = (isset($_POST['date'.$name.'Year'])) ? $_POST['date'.$name.'Year'] : date('Y');
	$month = (isset($_POST['date'.$name.'Month'])) ? $_POST['date'.$name.'Month'] : date('m');
	$day = (isset($_POST['date'.$name.'Day'])) ? $_POST['date'.$name.'Day'] : date('d');
	return $year."-".$month."-".$day;
}

/* function make_date($name) {
  if (isset($_POST['date'.$name])) {if ($name != 'to') return $_POST['date'.$name]; else return $_POST['date'.$name].' 23:59:59';}
	$year = (isset($_POST['date'.$name.'Year'])) ? $_POST['date'.$name.'Year'] : date('Y');
	$month = (isset($_POST['date'.$name.'Month'])) ? $_POST['date'.$name.'Month'] : date('m');
	$day = (isset($_POST['date'.$name.'Day'])) ? $_POST['date'.$name.'Day'] : date('d');
	if ($name != 'to') return $year."-".$month."-".$day;
	else return $year."-".$month."-".$day.' 23:59:59';
} */

function make_date_c($name) { //  возвращает 1-е число текущего месяца или следующего
  if (isset($_POST['date'.$name])) return $_POST['date'.$name];
  if ($name=='to')  {
  	$to_month = ( date('m')=='12' ) ? '01' : (   ($jd = (1 + date('m'))) < 10  ? $jd='0'.$jd   :   $jd    ) ;
  	$to_year = ( date('m')=='12' ) ? 1 + date('Y') : date('Y') ;
  }
  else {
  	$to_month = date('m');
  	$to_year =  date('Y') ;
  }
	$year = (isset($_POST['date'.$name.'Year'])) ? $_POST['date'.$name.'Year'] : $to_year;
	$month = (isset($_POST['date'.$name.'Month'])) ? $_POST['date'.$name.'Month'] : $to_month ;
	$day = (isset($_POST['date'.$name.'Day'])) ? $_POST['date'.$name.'Day'] : '01';
	return $year."-".$month."-".$day;
}

function make_date_2008_06($name) { //  возвращает 1-е число 2008_06
  if (isset($_POST['date'.$name])) return $_POST['date'.$name];
  if ($name=='to')  {
  	$to_month = '07';
  	$to_year =  '2008' ;
  }
  else {
  	$to_month = '06';
  	$to_year =  '2008' ;
  }
	$year = (isset($_POST['date'.$name.'Year'])) ? $_POST['date'.$name.'Year'] : $to_year;
	$month = (isset($_POST['date'.$name.'Month'])) ? $_POST['date'.$name.'Month'] : $to_month ;
	$day = (isset($_POST['date'.$name.'Day'])) ? $_POST['date'.$name.'Day'] : '01';
	return $year."-".$month."-".$day;
}


function MakeDateForNextMonth_2008_06() {
	$name ='from';
  if (isset($_POST['date'.$name])) return $_POST['date'.$name];
  	$to_month = '07';
  	$to_year =  '2008' ;

	 if ($_POST['date'.$name.'Month'] == '12') 	$year = (isset($_POST['date'.$name.'Year'])) ? ($_POST['date'.$name.'Year']+1) : ($to_year+1);
	 else 	$year = (isset($_POST['date'.$name.'Year'])) ? $_POST['date'.$name.'Year'] : $to_year;
	$month = (isset($_POST['date'.$name.'Month'])) ? PlusOne($_POST['date'.$name.'Month']) : $to_month ;
	$day =  '01';
	return $year."-".$month."-".$day;
}




// ф-ия для создания select-листа
function make_selected_list($name, $list, $selected) {
echo "<select name=\"$name\">";
foreach($list as $key => $value) {
	if ($key==$selected) {
		echo "<option value=\"$key\" selected>$value</option>";
	} else {
		echo "<option value=\"$key\">$value</option>";
	}
}
echo "</select>";
}

// админская аутентификация
function check_admin($login,$password) {
	if ($login===ADMIN_LOGIN && $password===ADMIN_PASSWORD) {
		$_SESSION['login']=$login;
		$_SESSION['password']=$password;
		define('IS_ADMIN',"1");
	} else {
		die("WRONG PASSWORD!");
	}
}

// отключенная ф-ия для порога тарификации
function aprox($duration){
//if($duration>20){
//$count=(int)($duration/60);
//$ostat=$duration%60;
//if($ostat>20){ $count++; }
//}
//else $count="0";
//return $count;
return $duration;

}



//  ф-ия для создания кнопок для ДОМОВ
function Button($tablelevel, $napominanie, $action, $method, $name, $TextKnopki, $dopolnitelno/* для RowNumber */, $idlevel_1, $idlevel_2, $idlevel_3 ){
?>
<form action="<?php echo $action ?>" method="<?php echo $method ?>" enctype="application/x-www-form-urlencoded" name="<?php echo $name ?>">
<input name="dopolnitelno" type="hidden" value="<?php echo $dopolnitelno ;?>">
<input name="tablelevel" type="hidden" value="<?php echo $tablelevel ;?>">
<input name="auto" type="submit" value="<?php echo $TextKnopki ?>" style="height:17px; font-size:10px;" title="<?php echo $napominanie ;?>" <?php if ($napominanie) echo ' class="bbcodes"'; ?>>
</form>
<?
}


//  ф-ия для создания кнопок для КВАРТИР
function Kv_Button($tablelevel, $napominanie, $action, $method, $name, $TextKnopki, $dopolnitelno/* для RowNumber */, $idlevel_1, $idlevel_2, $idlevel_3 ){
?>
<form action="<?php echo $action ?>" method="<?php echo $method ?>" enctype="application/x-www-form-urlencoded" name="<?php echo $name ?>">
<input name="dopolnitelno" type="hidden" value="<?php echo $dopolnitelno ;?>">
<input name="idlevel_1" type="hidden" value="<?php echo $idlevel_1 ;?>">
<input name="tablelevel" type="hidden" value="<?php echo $tablelevel ;?>">
<input name="auto" type="submit" value="<?php echo $TextKnopki ?>" style="height:17px; font-size:10px;" title="<?php echo $napominanie ;?>" <?php if ($napominanie) echo ' class="bbcodes"'; ?>>
</form>
<?
}


//  ф-ия для создания кнопок для ЖИЛЬЦОВ
function Gl_Button($tablelevel, $napominanie, $action, $method, $name, $TextKnopki, $dopolnitelno/* для RowNumber */, $idlevel_1, $idlevel_2, $idlevel_3 ){
?>
<form action="<?php echo $action ?>" method="<?php echo $method ?>" enctype="application/x-www-form-urlencoded" name="<?php echo $name ?>">
<input name="dopolnitelno" type="hidden" value="<?php echo $dopolnitelno ;?>">
<input name="idlevel_1" type="hidden" value="<?php echo $idlevel_1 ;?>">
<input name="tablelevel" type="hidden" value="<?php echo $tablelevel ;?>">
<input name="idlevel_2" type="hidden" value="<?php echo $idlevel_2 ;?>">
<input name="auto" type="submit" value="<?php echo $TextKnopki ?>" style="height:17px; font-size:10px;" title="<?php echo $napominanie ;?>" <?php if ($napominanie) echo ' class="bbcodes"'; ?>>
</form>
<?
}


//  ф-ия для создания кнопок для ЛЬГОТ 
function Lg_Button($tablelevel, $napominanie, $action, $method, $name, $TextKnopki, $dopolnitelno/* для RowNumber */, $idlevel_1, $idlevel_2, $idlevel_3 ){
?>
<form action="<?php echo $action ?>" method="<?php echo $method ?>" enctype="application/x-www-form-urlencoded" name="<?php echo $name ?>">
<input name="dopolnitelno" type="hidden" value="<?php echo $dopolnitelno ;?>">
<input name="idlevel_1" type="hidden" value="<?php echo $idlevel_1 ;?>">
<input name="idlevel_2" type="hidden" value="<?php echo $idlevel_2 ;?>">
<input name="idlevel_3" type="hidden" value="<?php echo $idlevel_3 ;?>">
<input name="tablelevel" type="hidden" value="<?php echo $tablelevel ;?>">
<input name="auto" type="submit" value="<?php echo $TextKnopki ?>" style="height:17px; font-size:10px;" title="<?php echo $napominanie ;?>" <?php if ($napominanie) echo ' class="bbcodes"'; ?>>
</form>
<?
}   

//  ф-ия для создания кнопок УНИВЕРСАЛЬНЫХ
function Uni_Button($tablelevel, $napominanie, $action, $method, $name, $TextKnopki, $dopolnitelno/* для RowNumber */, $idlevel){
?>
<form action="<?php echo $action ?>" method="<?php echo $method ?>" enctype="application/x-www-form-urlencoded" name="<?php echo $name ?>">
<input name="dopolnitelno" type="hidden" value="<?php echo $dopolnitelno ;?>">

<?php 
  foreach ($idlevel  as $key => $value) 
  		{ 
			if ($key){ //   отсекаем $idlevel[0]
			?>
			<input name="idlevel_<?=$key?>" type="hidden" value="<?php echo $value ;?>">
			<?php
			}
		}  
?>
<input name="tablelevel" type="hidden" value="<?php echo $tablelevel ;?>">
<?php if (userBrowser()=='IE'){ ?> 
<input name="auto" type="submit" value="<?php echo $TextKnopki ?>" style="height:17px; font-size:10px;" title="<?php echo $napominanie ;?>" <?php if ($napominanie) echo ' class="bbcodes"'; ?>>

<?php } else { if ($napominanie) $class = ' class="red mybut1"'; else $class = ' class="mybut1"';?>
  <button  <?php echo $class;?> title="<?php echo $napominanie ;?>"><?php echo $TextKnopki ?></button>
<!--input name="auto" type="submit" value="<?php echo $TextKnopki ?>" style="height:17px; font-size:10px;" title="<?php echo $napominanie ;?>" <?php if ($napominanie) echo ' class="bbcodes"'; ?>--><?php }?>
</form>
<?
}   


 function  userBrowser() 
{
//echo $_SERVER['HTTP_USER_AGENT']."<br> <br><br><br>";
if ( strstr($_SERVER['HTTP_USER_AGENT'],"MSIE") ) {/* echo "IE"; */ return("IE");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Opera") ) {/* echo "FF"; */return("OP");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Gecko") ) {/* echo "FF"; */return("FF");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Firefox") ) {/* echo "FF"; */return("FF");}
else return (0);
} 




function MonthLength($Month) {
 $m = explode("-", $Month);
 $yea = $m[0];
 $mon = (int)$m[1];
  if ($mon ==1 || $mon ==3 || $mon ==5 || $mon ==7 || $mon ==8 || $mon ==10 || $mon ==12) $len = 31;
  elseif ($mon ==2) 
	{
	if (!$yea%4) $len = 29;
	else $len = 28;
	}
  else $len = 30;
 return $len;
}



//  Функция 
function NextMonth($Month)  {
$Month = substr($Month,0,7);
 $mon = explode('-', $Month);

	$year = $mon[0];
	$month = $mon[1];
	$Nmonth = ($month==12) ? 1 : $month+1 ;
	$Nyear = ($month==12) ? $year+1 : $year ;
	$dob = ($Nmonth<10)? '0' : '' ;
	$NextMon = $Nyear . '-' . $dob . $Nmonth ;

 return 	$NextMon = $Nyear . '-' . $dob . $Nmonth ;
}//eof


//  Функция 
function PreveousMonth($Month)  {
$Month = substr($Month,0,7);
 $mon = explode('-', $Month);

	$year = $mon[0];
	$month = $mon[1];
	$Nmonth = ($month==1) ? 12 : $month-1 ;
	$Nyear = ($month==1) ? $year-1 : $year ;
	$dob = ($Nmonth<10)? '0' : '' ;
	$NextMon = $Nyear . '-' . $dob . $Nmonth ;

 return 	$NextMon = $Nyear . '-' . $dob . $Nmonth ;
}//eof


function NextDay($Date)  {
 $mon = explode('-', $Date);

	$year = (int)$mon[0];
	$month = (int)$mon[1];
	$day = (int)$mon[2];
	
	$len = MonthLength($year."-".$month);
	$Nday = ($day==$len) ? 1 : $day+1 ;
	
	$Nmonth = ($day==$len && $month==12) ? 1 : (($day==$len && $month<12) ?  $month+1 :  $month );
	$Nyear = ($day==$len && $month==12) ? $year+1 : $year ;
	$dobM = ($Nmonth<10)? '0' : '' ;
	$dobD = ($Nday<10)? '0' : '' ;
	$NextDay = $Nyear . '-' . $dobM . $Nmonth . '-' . $dobD . $Nday ;

 return 	$NextDay;
}//eof



function PreveousDay($Date)  {
 $mon = explode('-', $Date);

	$year = (int)$mon[0];
	$month = (int)$mon[1];
	$day = (int)$mon[2];
	
	$len = MonthLength( PreveousMonth($year."-".$month) );

	$Nday = ($day==1) ? $len : $day-1 ;
	$Nmonth = ($day==1 && $month==1) ? 12 : ( ($day==1 && $month>1) ? $month-1 : $month );
	$Nyear = ($day==1 &&  $month==1) ? $year-1 : $year ;
	$dobM = ($Nmonth<10)? '0' : '' ;
	$dobD = ($Nday<10)? '0' : '' ;
	$NextDay = $Nyear . '-' . $dobM . $Nmonth . '-' . $dobD . $Nday ;

 return 	$NextDay;
}//eof





function cmp($a, $b) 
{
    return strcmp($a['from'], $b['from']);
}



function MakeYearsArray()
{
//$k = array('2007' => '2007', '2008' => '2008', '2009' => '2009', '2010' => '2010');
$k = array();
for ($i=1900;$i<2100;$i++) $k[$i] = $i;
return $k;
}






function Nbsp($num)
{
$k = '';
for ($i=0;$i<$num;$i++) $k .= '&nbsp;';
return $k;
}



function SubButtonMultiBrowser($skript,$mode,$name,$class)
{
if ($skript == 'adm_cabinet.php'  || $skript == 'cabinet.php'){
?>
<form action="<?=$skript;?>?mode=<?=$mode;?>" method="post"><?php } 
else  {?><form action="<?=$skript;?>" method="post"><?php }?>
<input name="mode" type="hidden" value="<?=$mode;?>">
<!--button class="<?=$class?>" title="Обратная связь"><?=$name;?></button><br-->
<input name="yyy" type="submit" value="<?=$name;?>" class="<?=$class?>">
</form><? }?>