<? 
function referercookie () { //  Это функция для занесения в куки инфы о реферере


if ( !isset($_COOKIE["ivrcustref"]) ) {
	$domain = ".".$_SERVER["SERVER_NAME"];
	if (strstr($_SERVER["SERVER_NAME"], 'www.')) {
		$pieces = explode('www.', $_SERVER["SERVER_NAME"], 2);
		$domain = ".".$pieces[1];
		}
//	$cookie_value=time();
if ( strstr($_SERVER["HTTP_REFERER"], "yandex.") ) 		{$_SESSION['ivrcustref'] = 'yandex';  $cookie_value = "yandex";}
elseif ( strstr($_REQUEST["from"], "begun") ) 				{$_SESSION['ivrcustref'] = 'begun';  $cookie_value = "begun";}
elseif (isset($_REQUEST['_openstat']))						{$_SESSION['ivrcustref'] = 'yandex_direct'; $cookie_value = "yandex_direct";}
elseif ( strstr($_SERVER["HTTP_REFERER"], "rambler.") ) 	{$_SESSION['ivrcustref'] = 'rambler';  $cookie_value = "rambler";}
elseif ( strstr($_SERVER["HTTP_REFERER"], "google.") ) 		{$_SESSION['ivrcustref'] = 'google';  $cookie_value = "google";}
elseif ( strstr($_SERVER["HTTP_REFERER"], "yahoo.") ) 		{$_SESSION['ivrcustref'] = 'yahoo';  $cookie_value = "yahoo";}
elseif ( strstr($_SERVER["HTTP_REFERER"], ".mail.ru") ) 	{$_SESSION['ivrcustref'] = 'mail';  $cookie_value = "mail";}
else														{$_SESSION['ivrcustref'] = 'N/S'; $cookie_value = "N/S";}

	setcookie("ivrcustref", $cookie_value, time()+60*60*24*30*12,"/",$domain,0);

}

}



function here_is_BOSS ($ip) { //  Это функция для определения не вошел ли кто из троих "начальников".

 $NICKOLAY = 		"85.30.193.80";    
 $NICKOLAY_LOCAL = 	"127.0.0.1";
 $NICKOLAY_FAST = 	"85.30.193.80";

                       /* Если кука есть  */

if( $_COOKIE["SuperUser"]=="Николай" ) return "Николай"; //Когда есть кука, АйПи у вебмастера не проверяется...    Включен or not  показ - doesn't matter.
if( SwitchIsOn() && $_COOKIE["SuperUser"]=="Николай" ) return "Николай"; //Когда есть кука, АйПи у вебмастера не проверяется...    Включен показ.
if( !SwitchIsOn() && $_COOKIE["SuperUser"]=="Николай" ) return 0; //Когда есть кука, АйПи у вебмастера не проверяется...   Выключен показ.

//if($_COOKIE["SuperUser"]=="Валентин" ) return "Валентин"; // Когда есть кука, АйПи не проверяется...
//if($_COOKIE["SuperUser"]=="Игорь" ) return "Игорь"; // Когда есть кука, АйПи не проверяется...
//if($_COOKIE["SuperUser"]=="Ира" ) return "Ира"; // Когда есть кука, АйПи не проверяется...


                       //Если вдруг куки отсутствует...
$Nick = "Николай"; 
			if ($ip == $NICKOLAY)  	 				return $Nick;
			elseif ($ip == $NICKOLAY_LOCAL)  	 	return $Nick;
			elseif ($ip == $NICKOLAY_FAST)  	 	return $Nick;
			else							 		return 0;  // Если вошел посторонний, возвращается 0
}



function SwitchIsOn() // Проверяет, включен или выключен режим узнавания (таблица webmaster_switch)
{

$query_Recordset1 = "SELECT * FROM webmaster_switch WHERE webmaster_switch.id=1";
$Recordset1 = mysql_query($query_Recordset1) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

return $row_Recordset1['value'];
}



function set_cookieSU() {  // Эта функция устанавливает cookie СУПЕРпользователя
if ($_SERVER["SERVER_NAME"] == "mcall.ru1") $domain = ".mcall.ru1";
else $domain = ".mcall.ru";
if($boss=here_is_BOSS(getIP())) $cookie_value=$boss; 
if (!isset($_COOKIE["SuperUser"])) setcookie("SuperUser", $cookie_value, time()+60*60*24*30*12,"/",$domain,0);
}

function get_cookieSU() {  // Эта функция определяет cookie СУПУРпользователя
if ( !isset($_COOKIE["SuperUser"]) ) return 0;
else return ($_COOKIE["SuperUser"]);

}

function is_WebMaster() {  // Эта функция определяет cookie ВебМастера
$name=get_cookieSU();
if ($name != "Николай")  return(0); 
if ($name == "Николай") return("OK!") ; 
}


 function getIP() {  // Эта функция определяет АйПи пользователя
$addrs = array();
		
		$addrs[] = $_SERVER['REMOTE_ADDR'];
		$addrs[] = $_SERVER['HTTP_PROXY_USER'];
		$addrs[] = $_SERVER['HTTP_CLIENT_IP'];
	
		$ip = preg_replace( "/^([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})/", "\\1.\\2.\\3.\\4", select_var( $addrs ) );
	//echo $ip;
	return $ip;
	
	//echo $_SERVER["REMOTE_ADDR"]."<br>";
	//echo $_SERVER['HTTP_PROXY_USER']."<br>";
	//echo $_SERVER['HTTP_CLIENT_IP']."<br>";
}


 function select_var($array) {
    	
    	if ( !is_array($array) ) return -1;
    	
    	ksort($array);
    	
    	
    	$chosen = -1;  // Подтвердит что мы возвращаем 0 если больше ничего не доступно
    	
    	foreach ($array as $k => $v)
    	{
    		if (isset($v))
    		{
    			$chosen = $v;
    			break;
    		}
    	}
    	
    	return $chosen;
    }
 
function  dayspassed ($start_d,$start_m,$start_y) 
{
return ( (date("y")*365+date("m")*30+date("d"))-($start_y*365+$start_m*30+$start_d) );
}    

function  dayspassed_ByDate ( $date ) 
{
return ( ( date("y")*365+date("m")*30+date("d") ) - $date );
}    


function  RightColTable ($tabheader, $file_to_include, $second_cell)
{
?>
<table width="100%" align="center" class="RCview">
  <tr><th><?php echo $tabheader;?></th></tr>
   <tr><td><?php include_once($file_to_include); ?></td></tr>
   <?php if ($second_cell != "") {?>
   <tr><td align="center"><?=$second_cell; ?></td></tr><?php }?>
</table><br>
<? }?>
<?php 
 function  get_userBrowser() 
{
//echo $_SERVER['HTTP_USER_AGENT']; 
if ( strstr($_SERVER['HTTP_USER_AGENT'],"MSIE") ) {/* echo "IE"; */ return("IE");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Gecko") ) {/* echo "FF"; */return("FF");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Firefox") ) {/* echo "FF"; */return("FF");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Opera") ) {/* echo "OP"; */return("OP");}
else return (0);
} 
/* MSIE 5           MSIE 6 */ 

 function  IE() 
{
if 		( strstr($_SERVER['HTTP_USER_AGENT'],"MSIE 5") )  	return(5)	;
elseif 	( strstr($_SERVER['HTTP_USER_AGENT'],"MSIE 6") ) 	return(6)	;
elseif 	( strstr($_SERVER['HTTP_USER_AGENT'],"MSIE") ) 		return(999)	;
else 														return (0)	;
} 

 function  Google($text){
?>
<table class="google">
<tr><td>
<?=$text;?>
</td></tr>
</table> 
<?
 } 


// Вставить flash (swf)
function put_swf($path) {
    $size=getimagesize($path);
    $width=$size[0];
    $height=$size[1];
    $swf_tpl = "
    <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\"".$width."\" height=\"".$height."\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0\">
    <param name=\"movie\" value=\"".$path."\">
    <param name=\"quality\" value=\"high\">
    <embed src=\"".$path."\" width=\"".$width."\" height=\"".$height."\"  quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" >
    </embed>
    </object>";
    return $swf_tpl;
}

?>