<?


include_once("config.php");
	if (!defined('IN_SITE')) {
		die("На выход");
	}

include_once("engine.php");
include_once("admin/admfuncz.php");

@set_time_limit( 6000 ); //in seconds
ignore_user_abort( true );




open_connection();
#make_temp_incoming_2();
make_2014();
close_connection();

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function make_2014() ---------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function make_2014(){


$query31="SELECT * FROM `okved2014full` ORDER BY  id ASC";
$result = mysql_query ($query31) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query31."<BR>");
$totalRows_result = mysql_num_rows($result); 

/*  value 

strstr($value, 'РАЗДЕЛ');
*/

while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
	$counter++;
	$id=$ro['id'];
#	$razdel = $ro['razdel'];
#	$podrazdel=$ro['podrazdel'];
#	$name=$ro['name'];
	$value=$ro['value'];
#	$ipspravka=$ro['ipspravka'];

	$value = str_replace('.', '', $value);
	
	if ($value=='РАЗДЕЛ') $value = '99000000';

	if (strlen($value)==1) $value = $value.'000000';
	elseif (strlen($value)==2) $value = $value.'00000';
	elseif (strlen($value)==3) $value = $value.'0000';
	elseif (strlen($value)==4) $value = $value.'000';
	elseif (strlen($value)==5) $value = $value.'00';
	elseif (strlen($value)==6) $value = $value.'0';
	
	
	
 	$upd = "UPDATE `okved2014full` SET `na_ekrane` = '".$value."' WHERE `id` = $id";

#   чтобы случайно не запустилось и не запороло все на хрен
#	sql_do($upd);
#   чтобы случайно не запустилось и не запороло все на хрен, т.к. после этого еще в ручную обрабатывались косяки многочисленные в этом столбце

	
}




}












#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function make_Total() ---------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function make_Total(){

global $DataFrom;
global $marsrutizatciya;
global $usd;
global $svt;

global $nl_in;
global $marsh_in;
global $marsh_out;
global $raznitcaM;
global $way;

$bonus = 0;

 $q = "SELECT * FROM `dateoftotal` WHERE id='1'";
 $r = sql_do($q);
 $rowq = mysql_fetch_array($r, MYSQL_BOTH);
# if ( 1 ) {   //   - заглушили!!!!

 	$upd = "UPDATE `dateoftotal` SET `date` = ".time()." WHERE `id` =1";
	sql_do($upd);

	echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Untitled Document</title>
</head>

<body>
	 -> Идет ПЕРЕСЧЕТ....<br>';


  
	$q1 = "DROP TABLE IF EXISTS `totaldata_2`";
	sql_do($q1);
	$q2 = "CREATE TABLE `totaldata_2` (  
	`id` bigint(20) NOT NULL auto_increment, 
  `date` text NOT NULL, 
  `origname` varchar(255) NOT NULL default '', 
  `userlogin` varchar(32) NOT NULL default '', 
  `code` varchar(8) NOT NULL default '', 
  `partner_num` varchar(20) NOT NULL default '', 
  `abon_number` varchar(32) NOT NULL default '', 
  `duration` bigint(32) NOT NULL default '0', 
  `in` float NOT NULL default '0', 


  `nl_in` float NOT NULL default '0', 
  `marsh_in` float NOT NULL  default '0', 
  `marsh_out` float NOT NULL, 
  `raznitca` float NOT NULL, 
  `way` varchar(5) NOT NULL default '', 
  PRIMARY KEY  (`id`)) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ";
	sql_do($q2);



//$RefreshDate = "2009-02-01 00:00:00";
//$StatusRefreshDate = "2009-02-01";
$RefreshDate = $DataFrom." 00:00:00";
$StatusRefreshDate = $DataFrom ;


	$q1 = "DELETE FROM `totaldata_2` WHERE `date` >= '$RefreshDate' ";
	sql_do($q1);



	$result= sql_do("SELECT * FROM incoming WHERE `date` >= '$RefreshDate' ORDER BY date ASC");
	$total_dur=0;
	$total_In=0;
	$total_Out=0;
	$iii=0;
	echo mysql_num_rows($result);
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)){

$iii++;
		$called_number = $row['called_number'];
		$called_number = '9012029438';  /*так как тариф один 07223 а после 2017 01 18 мтс стало приходить на 812******* - изменена маршрутизация*/

		$frod = $row['frod'];
		$acn = $row['acn'];
		$session_id = $row['session_id'];
		$user_code = $row['user_code'];
		if($user_code) $uc =" AND code='$user_code'"; else  $uc ='';

		$res=sql_do("SELECT * FROM users_ivr WHERE redir_num='$called_number' ".$uc." ");
		$ro = mysql_fetch_array($res, MYSQL_BOTH) ;
		$row['userlogin'] = $ro['userlogin']?$ro['userlogin']:'&nbsp;';
		$userlogin = $ro['userlogin'];
		$ro['code'] = $ro['code'] ? $ro['code'] : $row['user_code'];

		$partner_num = $ro['partner_num'] ? $ro['partner_num'] : '&nbsp;';
		$partner_num = ($ro['partner_type'] != 3 && $ro['partner_type'] != 4)  ? $partner_num : 'call-center';
		$duration = $row['duration'];

		$called_number=$row['called_number'];
		$called_number = '9012029438'; /*так как тариф один 07223 а после 2017 01 18 мтс стало приходить на 812******* - изменена маршрутизация*/
		$ro['origname'] = $ro['origname'] ? $ro['origname'] : 'нет';	//------------------------------------

$marsrutizatciya = 0;   //  обнуляем  величину  стоимости  маршрутизации для данного звонка
$svt = 0;   			//  обнуляем  величину  стоимости  для данного звонка

$nl_in = 0;   			
$marsh_in = 0;   			
$marsh_out = 0;   			
$raznitcaM = 0;   			





 $in09 =  CostIn2009($partner_num, $row['abon_number'], $duration, $called_number, $ro['type'], $row['date']) ;
		



	
		
		
		
		$qtot = "INSERT INTO `totaldata_2` ( 
 `id` , 
 `date` , 
 `origname` , 
 `userlogin` , 
 `code` , 
 `partner_num` , 
 `abon_number` , 
 `duration` , 
 `in` , 

 `nl_in`, 
 `marsh_in`, 
 `marsh_out`, 
 `raznitca`, 
 `way`
  ) 
   
   VALUES ('', 
 '".$row['date']."', 
 '".$ro['origname']."', 
 '".$row['userlogin']."', 
 '".$ro['code']."', 
 '".$partner_num."', 
 '".$row['abon_number']."', 
 '".$duration."', 
 '$in09', 

 '$nl_in', 
 '$marsh_in', 
 '$marsh_out', 
 '$raznitcaM', 
 '$way'
  )";
		sql_do($qtot);
		$total_dur=$total_dur+aprox($row['duration']);
		$total_In = $total_In + $in09;
		$total_Out = $total_Out + $statusout;
		
	}
# }

echo "total_In=$total_In  $$$  total_Out=$total_Out $$$  bonus = $bonus";

}






#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostIn2009() ---------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostIn2009($partner_num, $abon_number, $duration, $tarif_number, $type, $date) {

global $marsrutizatciya;
global $usd;
global $svt;

global $nl_in;
global $marsh_in;
global $marsh_out;
global $raznitcaM;
global $way;




	if (substr($abon_number, 0, 3) == '812') return 0;
	//if ($abon_number == '9037294150' || $abon_number == '9037251299') return 0;

  $q = "SELECT * FROM `defcodes` WHERE `from` <=  '$abon_number' AND `to` >= '$abon_number' ";
  $result=sql_do($q);
  if (!mysql_num_rows($result) /* || mysql_num_rows($result) >1 */) return 'N/A An';
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

#----------НУЛИ!!!--------------------------------------

	if ($tarif_1 == 0 || $tarif_1 =='') {
		$tarif_1 = 30;
		$tarif_2 = 60;
		$porog = 14;
		$procent = 0.45;
	}

#   Мегафон --------------------------------------------
//	if ( $abon_number >= '9200000000' && $abon_number <= '9299999999' && $tarif_number == '9012029438') 	$procent = 0.48;
#-------------------------------------------------------


	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;

	if (!$duraMin) return 0;
#	if (!$work) return "N/M";

	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin;
  	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin;
  	else 									return "N/A";

#---------------------выбираем данные региона нашего Партнера------------------------------------------------------------------
   $q1 = "SELECT * FROM `defcodes` WHERE `from` <=  '$partner_num' AND `to` >= '$partner_num' ";
   $result1=sql_do($q1);
   if (!mysql_num_rows($result1) /* || mysql_num_rows($result) >1 */) return 'N/A Pn';
   else {
		$row1 = mysql_fetch_array($result1, MYSQL_BOTH);
		$regionPartner = $row1['region'];
		$idPartner = $row1['id'];                                 //return $idPartner;


	
		if ($date <  '2009-01-01 00:00:00' ) {
			if ($region != $regionPartner) $marsrutizatciya = 2.25 * $duraMin;
			elseif ($region == 'cent') $marsrutizatciya = 1.25 * $duraMin;
			elseif ($region == 'fed') $marsrutizatciya = 3.25 * $duraMin;
			else return 'N/A sp';
		}
		else {
		
		
#		if ($abon_number == '9175085055') echo "region=$region  regionPartner=$regionPartner<br>";
		
		
			if 		($region == 'cent' 	&& $regionPartner  == 'cent') { 
				$way = 'cc';
				$marsh_in = 1.17* $duraMin;
				$marsh_out = 1.56* $duraMin;
				$marsrutizatciya = 0.07 	* $usd * $duraMin;
				$raznitcaM = $marsh_in + $marsh_out - $marsrutizatciya;
			}
			elseif 	($region == 'cent' 	&& $regionPartner  == 'fed') 	{ 
				$way = 'cf';
				$marsh_in = 1.17* $duraMin;
				$marsh_out = 4.67* $duraMin;
				$marsrutizatciya = 0.15 	* $usd * $duraMin;
				$raznitcaM = $marsh_in + $marsh_out - $marsrutizatciya;
			}
			elseif 	($region == 'fed' 	&& $regionPartner  == 'cent') 	{ 
				$way = 'fc';
				$marsh_in = 2.54* $duraMin;
				$marsh_out = 1.56* $duraMin;
				$marsrutizatciya = 0.105 * $usd * $duraMin;
				$raznitcaM = $marsh_in + $marsh_out - $marsrutizatciya;
			}
			elseif 	($region == 'fed' 	&& $regionPartner  == 'fed') 	{ 
				$way = 'ff';
				$marsh_in = 2.54* $duraMin;
				$marsh_out = 4.67* $duraMin;
				$marsrutizatciya = 0.185 * $usd * $duraMin;
				$raznitcaM = $marsh_in + $marsh_out - $marsrutizatciya;
			}
			else return 'N/A sp';
		}
   }

$nl_in = $svt;

return round ( ( $svt  - $marsrutizatciya ), 2) ;


}

}







#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostInFrod() ---------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostInFrod($partner_num, $abon_number, $duration, $tarif_number, $type, $date) {

global $marsrutizatciya;
global $usd;
global $svt;

	if (substr($abon_number, 0, 3) == '812') return 0;
	//if ($abon_number == '9037294150' || $abon_number == '9037251299') return 0;

  $q = "SELECT * FROM `defcodes` WHERE `from` <=  '$abon_number' AND `to` >= '$abon_number' ";
  $result=sql_do($q);
  if (!mysql_num_rows($result) /* || mysql_num_rows($result) >1 */) return 'N/A An';
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

#----------НУЛИ!!!--------------------------------------

	if ($tarif_1 == 0 || $tarif_1 =='') {
		$tarif_1 = 30;
		$tarif_2 = 60;
		$porog = 14;
		$procent = 0.45;
	}

#   Мегафон --------------------------------------------
//if ( $abon_number >= '9200000000' && $abon_number <= '9299999999' && $tarif_number == '9012029438') 	$procent = 0.48;
#-------------------------------------------------------


	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;

	if (!$duraMin) return 0;
#	if (!$work) return "N/M";

	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin;
  	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin;
  	else 									return "N/A";

#---------------------выбираем данные региона нашего Партнера------------------------------------------------------------------
   $q1 = "SELECT * FROM `defcodes` WHERE `from` <=  '$partner_num' AND `to` >= '$partner_num' ";
   $result1=sql_do($q1);
   if (!mysql_num_rows($result1) /* || mysql_num_rows($result) >1 */) return 'N/A Pn';
   else {
		$row1 = mysql_fetch_array($result1, MYSQL_BOTH);
		$regionPartner = $row1['region'];
		$idPartner = $row1['id'];                                 //return $idPartner;
		
		if ($date < /* '2008-11-01 00:00:00' */ '2009-01-01 00:00:00' ) {
			if ($region != $regionPartner) $marsrutizatciya = 2.25 * $duraMin;
			elseif ($region == 'cent') $marsrutizatciya = 1.25 * $duraMin;
			elseif ($region == 'fed') $marsrutizatciya = 3.25 * $duraMin;
			else return 'N/A sp';
		}
		else {
			if 		($region == 'cent' 	&& $regionPartner  == 'cent') 	$marsrutizatciya = 0.07 	* $usd * $duraMin;
			elseif 	($region == 'cent' 	&& $regionPartner  == 'fed') 	$marsrutizatciya = 0.15 	* $usd * $duraMin;
			elseif 	($region == 'fed' 	&& $regionPartner  == 'cent') 	$marsrutizatciya = 0.105 * $usd * $duraMin;
			elseif 	($region == 'fed' 	&& $regionPartner  == 'fed') 	$marsrutizatciya = 0.185 * $usd * $duraMin;
			else return 'N/A sp';
		}
   }

 $svt = 0;
 return round ( ( $svt  - $marsrutizatciya ), 2) ;
 }

}



















#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOutLight() -------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOutLight ($in, $date, $partner_num, $abon_number, $duration, $tarif_number, $type) {

global $marsrutizatciya;
global $usd;
global $svt;
global $koeff;




#---------------
if ($abon_number == '9151076024' || $abon_number == '9119069089'  || $abon_number == '9035803723' || substr($abon_number , 0, 8) == '81264747' ) return 0;



#---------------

  $q = "SELECT * FROM `defcodes` WHERE `from` <=  '$abon_number' AND `to` >= '$abon_number' ";
  $result=sql_do($q);
  if (!mysql_num_rows($result) /* || mysql_num_rows($result) >1 */) return 'N/A An';
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


#----------НУЛИ!!!--------------------------------------

if ($tarif_1 == 0 || $tarif_1 =='') {
	$tarif_1 = 30;
	$tarif_2 = 60;
	$porog = 14;
	$procent = 0.45;

}
#-------------------------------------------------------

#   Мегафон ------------------------------------------------------------
//if ($work == '23' && $tarif_number == '9012029438') 	$procent = 0.48;
#-------------------------------------------------------


#	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;
	$duraMin = ($duration > $porog) ?  ($duration/60) : 0 ;

#	if (!$work) return "N/Op";
	if (!$duraMin) return 0;

#          Полная минута считается по 3,25
#	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin - (3.25 * ceil($duraMin) );
# 	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin - (3.25 * ceil($duraMin) );
#  	else 									return "N/A";

#          Неполная минута считается по 3,25

	if ($date <  '2009-02-01 00:00:00' ) {
		if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin - (3.25 * ($duraMin) );
 		elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin - (3.25 * ($duraMin) );
  		else 									return "N/A";
	}

	elseif ($date >=  '2009-02-01 00:00:00' ) {
		$svt = ($tarif_2 * $procent) * $duraMin ;
		$koeff = 1;
		if ($type == 		'Физическое лицо') 		return round( $koeff * ( ($svt * 0.9 *0.86 * 0.67 ) - $marsrutizatciya ) , 2);
		elseif ($type == 	'Юридическое лицо')  	return round( $koeff * ( ($svt * 0.91 * 0.67      ) - $marsrutizatciya ) , 2);
		else  										return round( $koeff * ( ($svt * 0.9 * 0.67       ) - $marsrutizatciya ) , 2);
	}





	$NashaDola = 	0.35;
	$Ndfl = 		0.14;
	$TehRashod = 	0.07;

	if ($type == 		'Физическое лицо') 		return round( ($svt * (1-$NashaDola)*(1-$Ndfl)), 2);
	elseif ($type == 	'Юридическое лицо')  	return round( $svt * (1-$NashaDola) , 2 );
	else  										return round(  ($svt * (1-$NashaDola) * (1-$TehRashod)), 2  );


 return round ( $CostOut , 2) ;
 }


}



#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function CostOut() ------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------------------------------------------
function CostOut ($in, $date, $partner_num, $abon_number, $duration, $tarif_number, $type) {

global $marsrutizatciya;
global $usd;
global $svt;
global $koeff;


#---------------
if ($abon_number == '9151076024' || $abon_number == '9119069089'  || $abon_number == '9035803723'  || substr($abon_number , 0, 8) == '81264747' ) return 0;


if ($date >=  '2009-02-01 00:00:00' ) {
		$koeff = 1;
		if ($type == 		'Физическое лицо') 		return round( $koeff * ( ($svt * 0.9 *0.86 ) - $marsrutizatciya ) , 2);
		elseif ($type == 	'Юридическое лицо')  	return round( $koeff * ( ($svt * 0.91      ) - $marsrutizatciya ) , 2);
		else  										return round( $koeff * ( ($svt * 0.9       ) - $marsrutizatciya ) , 2);
}


#               Новые тарифы с 2008-07-01 (IVR  marazm)
if ($date >= '2008-07-01 00:00:00') {
	if ($type == 'Физическое лицо') return round(( $in * 0.91 * 0.86 ), 2);
	elseif ($type == 'ВебМани') return round(( $in * 0.9 * 0.92 ), 2);
	else  return round(($in*0.91), 2);
}
#---------------

  $q = "SELECT * FROM `defcodes` WHERE `from` <=  '$abon_number' AND `to` >= '$abon_number' ";
  $result=sql_do($q);
  if (!mysql_num_rows($result) /* || mysql_num_rows($result) >1 */) return 'N/A An';
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


#----------НУЛИ!!!--------------------------------------

	if ($tarif_1 == 0 || $tarif_1 =='') {
		$tarif_1 = 30;
		$tarif_2 = 60;
		$porog = 14;
		$procent = 0.45;

	}

#-------------------------------------------------------

#   Мегафон ------------------------------------------------------------
///	if ($work == '23' && $tarif_number == '9012029438') 	$procent = 0.48;
#-------------------------------------------------------


#	$duraMin = ($duration > $porog) ?  ceil($duration/60) : 0 ;
	$duraMin = ($duration > $porog) ?  ($duration/60) : 0 ;


#	if (!$work) return "N/Op";
	if (!$duraMin) return 0;

#          Полная минута считается по 3,25
#	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin - (3.25 * ceil($duraMin) );
# 	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin - (3.25 * ceil($duraMin) );
#  	else 									return "N/A";

#          Неполная минута считается по 3,25
	if ($tarif_number == '9012029438') 		$svt = ($tarif_2 * $procent) * $duraMin - (3.25 * ($duraMin) );
 	elseif ($tarif_number == '9012028013') 	$svt = ($tarif_1 * $procent) * $duraMin - (3.25 * ($duraMin) );
  	else 									return "N/A";



	$NashaDola = 	0.1;
	$Ndfl = 		0.14;
	$TehRashod = 	0.07;

	if ($type == 		'Физическое лицо') 		return round( ($svt * (1-$NashaDola)*(1-$Ndfl)), 2);
	elseif ($type == 	'Юридическое лицо')  	return round( $svt * (1-$NashaDola) , 2 );
	else  										return round(  ($svt * (1-$NashaDola) * (1-$TehRashod)), 2  );


 return round ( $CostOut , 2) ;
 }


}
?>