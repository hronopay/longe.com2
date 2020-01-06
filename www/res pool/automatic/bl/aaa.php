<?php 

echo '<link rel=stylesheet href="./bloly-files/style.css" type="text/css">';

define('IDS_MONTHS', 'Январь Февраль Март Апрель Май Июнь Июль Август Сентябрь Октябрь Ноябрь Декабрь');
define('IDS_DAYSOFWEEK', 'Вс Пн Вт Ср Чт Пт Сб');


define('DB_NAME', 'adress');	// the name of the database
define('DB_USER', 'root');		// MySQL username
define('DB_PASSWORD', '');	// MySQL password
define('DB_HOST', 'localhost');		// host:port
define('PREFIX', 'bloly_');		// MySQL table trefix
define('FIRST_SUNDAY', '1');  // possible values are: 1 and 0

 Mysql_Connect(DB_HOST,DB_USER,DB_PASSWORD);
 if(mysql_errno())$CV3=mysql_error();
 mysql_select_db(DB_NAME);

 if(mysql_errno())
 	$CV3 .= "\n" . mysql_error();
 



$CS0=null;
$SettingsArray['year' ]= (int)$_GET['year'];
$SettingsArray['month']= (int)$_GET['month'];
$SettingsArray['day' ]= (int)$_GET['day'];
$SettingsArray['offset']= (int)$_GET['offset'];





if($SettingsArray['year']<0 || $SettingsArray['year']>2100){
	$SettingsArray['year']=date("Y");
}
if($SettingsArray['month']<0 || $SettingsArray['month']>12){
	$SettingsArray['month']=date("m");
}
if($SettingsArray['day']<0 || $SettingsArray['day']>31)		{
	$SettingsArray['day']=date("d");
}








echo F_Calendar();




function F_Calendar(){
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

	echo $stringForUrl="SELECT count(*) AS cnt,DAY(t) AS d FROM ".PREFIX."Message WHERE (cnt=idx AND YEAR(t)={$F_year} AND MONTH(t)={$F_month}) GROUP BY d";
 $result5= mysql_query($stringForUrl);
 if($result5){
 	while($row5=mysql_fetch_array($result5,MYSQL_ASSOC)){
		if($row5['d']>0 && $row5['d']<32) {
			$Days_C[$row5['d']]=$row5['cnt'];
 		}
	}
 } 
 else {} 

$ET3=DaysInMonth($F_month,$F_year);
 $HG8=1;
 $i=DateEdges($F_year,$F_month,$HG8) - FIRST_SUNDAY;
 if($i<0) {$i=6; } 
 $Month_name=MonthWork($F_month);
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

	for($GA6=1; $GA6<7 && $HG8<=$ET3; $GA6++){
		while($i<7 && $HG8<=$ET3){
			if($Days_C[$HG8]==0) {
				$HZ7=$HG8;
			}
			else {
				$ActionAndOffset['day']=$HG8;
				$HZ7=LinkMaker($HG8,"cal_day","");
			}

			if($HG8==$Day_C && $F_month==$Month_C && $F_year==$Year){
				$HU2 .= "<td class=cal_today align=right title=today>".$HZ7."</td>";
			}
			else if($HG8==$HR9){
				$HU2 .= "<td class=cal_select align=right title=selected>".$HZ7."</td>";
			}
			else if($Days_C[$HG8]==0){
				$HU2 .= "<td class=cal_none align=right>".$HZ7."</td>";
			}
			else {
				$HU2 .= "<td class=cal_td_day align=right>".$HZ7."</td>";
			}

			$HG8++;
			$i++;
		}

		if($HG8>$ET3){
			for(; $i<7; $i++) $HU2.="<td class=calc_empty>&nbsp;</td>";
		}

		$i=0;
		$HU2 .= "</tr>\n";

		if($HG8<$ET3) $HU2 .= "<tr class=cal_tr_day>";
	}

	$HU2 .= "  </table></div>";
	return $HU2; }







function WorkOverUrl($ED7){global $SettingsArray,$ActionAndOffset;
$stringForUrl=AQ6("","year");
$stringForUrl=AQ6($stringForUrl,"month");
$stringForUrl=AQ6($stringForUrl,"day");
$stringForUrl=AQ6($stringForUrl,"user");
$stringForUrl=AQ6($stringForUrl,"number");
$stringForUrl=AQ6($stringForUrl,"offset");
$stringForUrl=AQ6($stringForUrl,"action");
if(strlen($stringForUrl)>0) $stringForUrl="?" . $stringForUrl;
if(strlen($ED7)>0) $ED7="#" . $ED7;
return $SettingsArray['PHP_SELF'] . $stringForUrl . $ED7;
}







function AQ6($nach_str,$EB5){
	global $SettingsArray,$ActionAndOffset;
	$EC6=isset($ActionAndOffset[$EB5]) ? $ActionAndOffset[$EB5] : $SettingsArray[$EB5];
	if($EC6==0){
		return $nach_str;
	}
	return $nach_str . (strlen($nach_str)>0?"&":"") . "{$EB5}=" . $EC6;
}


function DaysInMonth($mon,$yea){
	$HK2=array(31,28,31,30,31,30,31,31,30,31,30,31);
 	if($mon==2) return 28 + (($yea%4)?0:1);
 	return ($mon>0 && $mon<13) ? $HK2[$mon-1] : 12;
 }


function DateEdges($HE6,$HF7,$HG8){
 if($HE6<0 || $HF7<1 || $HF7>12 || $HG8<1 || $HG8>31) return -1;
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
 $HI0=$HG8;
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



function LinkMaker($EE8,$EF9,$ED7){
	$EG0=WorkOverUrl($ED7);
	return "<a href=\"{$EG0}\" class=\"{$EF9}\">{$EE8}</a>";
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





?>