<?
//соединение с базой данных
function open_connection() {
	global $link;
	$link = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die("Could not connect : " . mysql_error());
//	print "Connected successfully<br>\n";
//	sql_do("SET NAMES utf8");
 // sql_do("SET CHARACTER SET utf8");
 // sql_do("SET SESSION collation_connection = 'utf8_general_ci'");
  mysql_select_db(DB_NAME) or die("Could not select database") /* or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sql."<BR>") */;
//	$charset = mysql_client_encoding($link);
 // printf ("current character set is %s\n", $charset);
/*  mysql_query ("set character_set_client='cp1251'");
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
$result = mysql_query($sql,$link)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sql."<BR>");;
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




// ф-ия ползовательской аутентификации
function check_partner_login($login,$password) {
    $md5_pass = md5($password);
    $result = sql_do("SELECT user_id FROM users_ivr WHERE userlogin='$login' AND pass_hash='$md5_pass'");
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
  		echo $_SESSION['login']. " " . $_SESSION['password'] . " - Неверный ЛОГИН и/или ПАРОЛЬ<br><br>";
		return FALSE;
		  //die("WRONG LOGIN OR PASSWORD");
  	} 
	//return true;
}

function check_adminBYpartner_login($login,$password) {

//echo $login. " " . $password. " - Неверный ЛОГИН и/или ПАРОЛЬ ????? ". ADMIN_PASSWORD ." <br><br>";

    $result = sql_do("SELECT user_id FROM users_ivr WHERE userlogin='$login' ");
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
  		echo $_SESSION['login']. " " . $_SESSION['password'] . " - Неверный ЛОГИН и/или ПАРОЛЬ<br><br>";
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
  $yearlist = array('2007' => '2007', '2008' => '2008', '2009' => '2009', '2010' => '2010', '2011' => '2011', '2012' => '2012', '2013' => '2013');
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
  	echo $date_array[2] ." ". $monthlist[$date_array[1]] ." ". $date_array[0] . " года";
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
?>
