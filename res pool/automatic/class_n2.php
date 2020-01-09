<?php 
class N_2  extends Nachislenie  
{
var $ShowCells 		= 1;
var $ShowCellsN2 	= 1;
var $fix 			= 0;
var $ShemaRaschVoda	= array();
var $AllV_GOR_IndShetchiki	= array();
var $AllV_HOL_IndShetchiki	= array();
var $AllV_KAN_IndShetchiki	= array();
var $AllV_GOR_Normy	= array();
var $AllV_HOL_Normy	= array();
var $AllV_KAN_Normy	= array();
var $DomVodoschet_HOL	= array();
var $DomVodoschet_GOR	= array();

var $OtoplenTarif	= array();
var $ExpluatTarif	= array();
var $SodRemonTarif	= array();

    function N_2  ($userlogin,  $id, $fix) 
 {
		$this->fix = $fix;
		$this->InitNachislenie($userlogin,$id);
		$this->InitShemaRaschVoda();
		
/* 		  foreach ($this->Months  as $key => $mon) 
		 {  
			echo "$key => $mon UUUUUU<br>";
	 	 }  
 */
		
		
		
															if($this->ShowCellsN2) 		{?><table border="1" cellpadding="5"><? }
		$this->SodRemonTarif();
		$this->ExpluatTarif();
		$this->OtoplenTarif();
		$this->ARDMTarif();
		/////////////////////////$this->Koeffs();
		$this->VodaPoShemam();
		$this->CountMonthNachisleniaPoSheme2();
															if($this->ShowCellsN2) 		{?></table><? }
															
															

 }//eof



#------------Антенна, радио, домофон, мусор, код.замок -----------------------------------
function ARDMTarif()  {

$ARDM[] = $this->__antenatarif;
$ARDM[] = $this->__radiotarif;
$ARDM[] = $this->__domofontarif;
$ARDM[] = $this->__musortarif;
$ARDM[] = $this->__kodovzamoktarif;

foreach ($ARDM  as $keyARDM => $valueARDM) 
{

 foreach ($valueARDM  as $key1 => $value1) 
 {  
	 foreach ($value1 as $key => $value) 
	 {  
//		echo "$key => $value Otoplen<br>";
		if ($key==0) $mon = substr($value,0, 7);
		if ($key==1) $stavka = $value;
 	 }  
		$A_R_D_M_Tarif[$mon] = $stavka; 
//	echo "$mon => $stavka Otop<br>";
 }  


  foreach ($this->Months  as $key => $mon) 
 {  
	foreach ($A_R_D_M_Tarif as $keymon => $val) 
	 {  
		if ($mon >= $keymon) $ardmk = $val;
 	 }  
//	echo "<br><br>$mon => --$Otop-- Otop<br>";
	 foreach ($this->Kvartiry  as $nomer => $kvarr) 
 	{  
//		echo "кв№ $nomer <br>";
		if($keyARDM == 0 && $this->Kvartiry[$nomer]['antena_yn']) $this->KvVoda[$nomer][$mon]->Set_ARDM ( $ardmk , $keyARDM ) ;
		elseif($keyARDM == 1 && $this->Kvartiry[$nomer]['radio_yn']) $this->KvVoda[$nomer][$mon]->Set_ARDM ( $ardmk , $keyARDM ) ;
		elseif( $keyARDM > 1 ) $this->KvVoda[$nomer][$mon]->Set_ARDM ( $ardmk , $keyARDM ) ;
	}
 }
 unset($A_R_D_M_Tarif); 
}// foreach ($ARDM  as $keyARDM => $valueARDM) 
}#eof


#----------------------------------------------------------------------
function OtoplenTarif()  {

 foreach ($this->__otoplenietarif  as $key1 => $value1) 
 {  
	 foreach ($value1 as $key => $value) 
	 {  
//		echo "$key => $value Otoplen<br>";
		if ($key==0) $mon = substr($value,0, 7);
		if ($key==1) $stavka = $value;
 	 }  
		$this->OtoplenTarif[$mon] = $stavka; 
//		echo "$mon => $stavka Otop<br>";
 }  


  foreach ($this->Months  as $key => $mon) 
 {  
	foreach ($this->OtoplenTarif as $keymon => $val) 
	 {  
		if ($mon >= $keymon) $Otop = $val;
 	 }  
//	echo "<br><br>$mon => --$Otop-- Otop<br>";
	 foreach ($this->Kvartiry  as $nomer => $kvarr) 
 	{  
//		echo "кв№ $nomer <br>";
		$this->KvVoda[$nomer][$mon]->SetOtop ( $Otop , $this->Kvartiry[$nomer]['ploschadobschaya'] ) ;
	}
 }
 
}#eof


#----------------------------------------------------------------------
function ExpluatTarif()  {

 foreach ($this->__expluatationtarif  as $key1 => $value1) 
 {  
	 foreach ($value1 as $key => $value) 
	 {  
//		echo "$key => $value SodRemonTarif<br>";
		if ($key==0) $mon = substr($value,0, 7);
		if ($key==1) $stavka = $value;
 	 }  
		$this->ExpluatTarif[$mon] = $stavka; 
//		echo "$mon => $stavka Expl<br>";
 }  


  foreach ($this->Months  as $key => $mon) 
 {  
	foreach ($this->ExpluatTarif as $keymon => $val) 
	 {  
		if ($mon >= $keymon) $Expl = $val;
 	 }  
//	echo "<br><br>$mon => --$Expl-- Expl<br>";
	 foreach ($this->Kvartiry  as $nomer => $kvarr) 
 	{  
//		echo "кв№ $nomer <br>";
		$this->KvVoda[$nomer][$mon]->SetExpl ( $Expl , $this->Kvartiry[$nomer]['ploschadobschaya'] ) ;
	}
 }
 
}#eof




#----------------------------------------------------------------------
function SodRemonTarif()  {

 foreach ($this->__sodremonttarif  as $key1 => $value1) 
 {  
	 foreach ($value1 as $key => $value) 
	 {  
//		echo "$key => $value SodRemonTarif<br>";
		if ($key==0) $mon = substr($value,0, 7);
		if ($key==1) $stavka = $value;
 	 }  
		$this->SodRemonTarif[$mon] = $stavka; 
//		echo "$mon => $stavka SRT<br>";
 }  


  foreach ($this->Months  as $key => $mon) 
 {  
	foreach ($this->SodRemonTarif as $keymon => $val) 
	 {  
		if ($mon >= $keymon) $SRT = $val;
 	 }  
//	echo "<br><br>$mon => --$SRT-- SRT<br>";
	 foreach ($this->Kvartiry  as $nomer => $kvarr) 
 	{  
//		echo "кв№ $nomer <br>";
		$this->KvVoda[$nomer][$mon]->SetSRT ( $SRT , $this->Kvartiry[$nomer]['ploschadobschaya'] ) ;
	}
 }
 
}#eof





#----------------------------------------------------------------------
function CountMonthNachisleniaPoSheme()  {

  foreach ($this->Months  as $key => $mon) 
 {  
	foreach ($this->ShemaRaschVoda as $keymon => $val) 
	 {  
		if ($mon >= $keymon) $MonthShema = $val;
 	 }  

//	echo "<br><br>$mon => --$MonthShema-- MonthShema<br>";



															if($this->ShowCellsN2) {?><tr><? }
   if($MonthShema == 1 && $this->DOMvodoschetciki_from_date <= $mon) {
	 foreach ($this->Kvartiry  as $nomer => $kvarr) 
 	{  
															if($this->ShowCellsN2) {?><td valign="top" style="padding:5px; "><? }
echo "<font color='red'>$mon</font><br><font color='blue'>кв. $nomer</font><br><hr>";

		$h = $this->AllV_HOL_IndShetchiki[$mon] + $this->AllV_HOL_Normy[$mon];
		$g = $this->AllV_GOR_IndShetchiki[$mon] + $this->AllV_GOR_Normy[$mon];

/* echo "h=$h g=$g<br>";
echo "DomVod_HOL=".$this->DomVodoschet_HOL[$mon]." DomVod_GOR=".$this->DomVodoschet_GOR[$mon]."<br>"; */
		
		$hol = 0;
		$gor = 0;

		if ($h) $hol = ($this->DomVodoschet_HOL[$mon] / ( $h ) )  * $this->KvVoda[$nomer][$mon]->HolScetchik ;
		if ($g) $gor = ($this->DomVodoschet_GOR[$mon] / ( $g ) )  * $this->KvVoda[$nomer][$mon]->GorScetchik ;
		$this->KvVoda[$nomer][$mon]->SetVolScetchiki ( $hol , $gor ) ;
		$sum = $this->KvVoda[$nomer][$mon]->Show();

#    заполняем месячные начисления и вытаскиваем назад общую сумму начислений 		
 		$Summ =  $this->KvMoneyAll[$nomer]->SetMonthNachislenie($mon, $sum);
echo "<br><font color='yellow'>Постан. № 307 , сумма начислений $Summ</font><br>";
		$Pay =  $this->KvMoneyAll[$nomer]->GetMonthPay ($mon);
		$SummPay =  $this->KvMoneyAll[$nomer]->GetAllPay ($mon) ;
echo "<br><font color='red'>Оплата $Pay , Всего оплата $SummPay</font><br>";
 
// $this->ShowNachAndPays($mon, $sum);
															if($this->ShowCellsN2) {?></td><? }
 	}  // foreach
  }//if
   elseif($MonthShema == 2 && $this->DOMvodoschetciki_from_date <= $mon) {
	 foreach ($this->Kvartiry  as $nomer => $kvarr) 
 	{  
															if($this->ShowCellsN2) {?><td valign="top" style="padding:5px; "><? }
echo "<font color='red'>$mon</font><br><font color='blue'>кв. $nomer</font><br><hr>";

		$h = $this->AllV_HOL_Normy[$mon];
		$g = $this->AllV_GOR_Normy[$mon];

/* echo "h=$h g=$g<br>";
echo "DomVod_HOL=".$this->DomVodoschet_HOL[$mon]." DomVod_GOR=".$this->DomVodoschet_GOR[$mon]."<br>"; */

		$hol = 0;
		$gor = 0;

		if ($h) $hol = ( ( $this->DomVodoschet_HOL[$mon] *0.95 - $this->AllV_HOL_IndShetchiki[$mon] ) / $h )   * $this->KvVoda[$nomer][$mon]->HolPoNormam ;
		if ($g) $gor = ( ( $this->DomVodoschet_GOR[$mon] *0.95 - $this->AllV_GOR_IndShetchiki[$mon] ) / $g )   * $this->KvVoda[$nomer][$mon]->GorPoNormam ;

//echo " hol=$hol , gor=$gor <br>";

		$this->KvVoda[$nomer][$mon]->SetVolNormy ( $hol , $gor , $hol + $gor ) ;
		$sum = $this->KvVoda[$nomer][$mon]->Show();

#    заполняем месячные начисления и вытаскиваем назад общую сумму начислений 		
 		$Summ =  $this->KvMoneyAll[$nomer]->SetMonthNachislenie($mon, $sum);
echo "<br><font color='yellow'>Постан. № 77-ПП , сумма начислений $Summ</font><br>";
		$Pay =  $this->KvMoneyAll[$nomer]->GetMonthPay ($mon);
		$SummPay =  $this->KvMoneyAll[$nomer]->GetAllPay ($mon) ;
echo "<br><font color='red'>Оплата $Pay , Всего оплата $SummPay</font><br>";
 


															if($this->ShowCellsN2) {?></td><? }
 	}  
  }//if
   elseif($MonthShema == 0 || $this->DOMvodoschetciki_from_date > $mon) {
	 foreach ($this->Kvartiry  as $nomer => $kvarr) 
 	{  
															if($this->ShowCellsN2) {?><td valign="top" style="padding:5px; "><? }
echo "<font color='red'>$mon</font><br><font color='blue'>кв. $nomer</font><br><hr>";

		$this->KvVoda[$nomer][$mon]->Show();
echo "<br><font color='silver'>б/уч. домосчет.</font><br>";

															if($this->ShowCellsN2) {?></td><? }
 	}  
  }//if
															if($this->ShowCellsN2) {?></tr><? }
 }  

}#eof








#----------------------------------------------------------------------
function VodaPoShemam()  {

  foreach ($this->Months  as $key => $mon) 
 {  
															/* if($this->ShowCellsN2) {?><tr><? } */
	 foreach ($this->Kvartiry  as $nomer => $kvarr) 
 	{  
															/* if($this->ShowCellsN2) {?><td valign="top" style="padding:5px; "><? } */

/* echo "<font color='red'>$mon</font><br>";
echo "<font color='blue'>кв. $nomer</font><br>";
echo "<hr>";
 */
//		$this->KvVoda[$nomer][$mon]->Show();
		$this->AllV_GOR_IndShetchiki[$mon] += 	$this->KvVoda[$nomer][$mon]->GorScetchik;
		$this->AllV_HOL_IndShetchiki[$mon] += 	$this->KvVoda[$nomer][$mon]->HolScetchik;
		$this->AllV_KAN_IndShetchiki[$mon] += 	$this->KvVoda[$nomer][$mon]->KanScetchik;
		$this->AllV_GOR_Normy[$mon] += 			$this->KvVoda[$nomer][$mon]->GorPoNormam;
		$this->AllV_HOL_Normy[$mon] += 			$this->KvVoda[$nomer][$mon]->HolPoNormam;
		$this->AllV_KAN_Normy[$mon] += 			$this->KvVoda[$nomer][$mon]->KanPoNormam;
/*foreach ($kvarr as $key2 => $value2){echo "$key2 => $value2<br>";}*/	
															/* if($this->ShowCellsN2) {?></td><? } */
 	}  
															/* if($this->ShowCellsN2) {?></tr><? } */
 }  

}#eof

#----------------------------------------------------------------------
function InitShemaRaschVoda()  {

 foreach ($this->__shemaraschetavoda  as $key1 => $value1) 
 {  
	 foreach ($value1 as $key => $value) 
	 {  
//		echo "$key => $value shema<br>";
		if ($key=='from_date') $mon = substr($value,0, 7);
		if ($key=='nazvanie_shemavoda') $shema = $value;
 	 }  
		$this->ShemaRaschVoda[$mon] = $shema; 
 }  

$i=1;
$stavka[0] = $this->DOMstartgorvodoschet;
 foreach ($this->__domvodoschetgor  as $key1 => $value1) 
 {   
	 foreach ($value1 as $key => $value) 
	 {  
//		echo "$key => $value Dom_GOR<br>";
		if ($key==0) $mon = PreveousMonth(substr($value,0, 7));
		if ($key==1) $stavka[$i] = $value;
 	 }  
	$this->DomVodoschet_GOR[$mon] = $stavka[$i]-$stavka[$i-1]; 
//	echo $this->DomVodoschet_GOR[$mon]." this->DomVodoschet_GOR ----<br>";
	$i++;
 }  

$i=1;
$stavka[0] = $this->DOMstartholvodoschet;
 foreach ($this->__domvodoschethol  as $key1 => $value1) 
 {  
	 foreach ($value1 as $key => $value) 
	 {  
//		echo "$key => $value Dom_HOL<br>";
		if ($key==0) $mon = PreveousMonth(substr($value,0, 7));
		if ($key==1) $stavka[$i] = $value;
 	 }  
	$this->DomVodoschet_HOL[$mon] = $stavka[$i]-$stavka[$i-1]; 
//	echo $this->DomVodoschet_HOL[$mon]." this->DomVodoschet_HOL -----<br>";
	$i++;
 }  



}#eof

#----------------------------------------------------------------------
function InitNachislenie($userlogin,$id)  {

	$this->userlogin = $userlogin;
	$this->HouseRowNumber = $id;
	$this->table = $userlogin."__orgforma";
	$this->CleanDomNachTable();
	$this->SetScriptName();
	$this->GetStartDate();
	$this->GetAllChildrenFromUser();
	$this->GetAllTarifs();
		
		$this->NowDate = substr(make_date('from'),0, 7);
		$this->Months = $this->MakeMonths ( $this->StartDate , $this->NowDate , $this->CurrentMonthInclude );

		if($this->ShowCells) 		{?><table border="1" cellpadding="5"><? }
	$this->GetAllKvartiry();
		if($this->ShowCells) 		{?></table><? }

}#eof

#----------------------------------------------------------------------
function ShowNachAndPays($mon, $sum)
{
#    заполняем месячные начисления и вытаскиваем назад общую сумму начислений 		
		$Summ =  $this->KvMoneyAll[$nomer]->SetMonthNachislenie($mon, $sum);
echo "<br><font color='yellow'>Постан. № 307 , сумма начислений $Summ</font><br>";
		$Pay =  $this->KvMoneyAll[$nomer]->GetMonthPay ($mon);
		$SummPay =  $this->KvMoneyAll[$nomer]->GetAllPay ($mon) ;
echo "<br><font color='red'>Оплата $Pay , Всего оплата $SummPay</font><br>";
}#eof









































#----------------------------------------------------------------------
function CountMonthNachisleniaPoSheme2()  {



foreach ($this->Kvartiry  as $nomer => $kvarr) {
															if($this->ShowCellsN2) {?><tr><? }

  foreach ($this->Months  as $key => $mon) 
 {  
	foreach ($this->ShemaRaschVoda as $keymon => $val) 
	 {  
		if ($mon >= $keymon) $MonthShema = $val;
 	 }  

//	echo "<br><br>$mon => --$MonthShema-- MonthShema<br>";




															if($this->ShowCellsN2) {?><td valign="top" style="padding:5px; "><? }
															
echo '<font color="red">'.$mon.'</font><br><font color="blue">кв. '.$nomer.'</font><br><hr><a  href="javascript:inver(\''.$mon.$nomer.'\')">Подробнее</a>
<div ID="'.$mon.$nomer.'" style="display:none;" >';






   if($MonthShema == 1 && $this->DOMvodoschetciki_from_date <= $mon) {

		$h = $this->AllV_HOL_IndShetchiki[$mon] + $this->AllV_HOL_Normy[$mon];
		$g = $this->AllV_GOR_IndShetchiki[$mon] + $this->AllV_GOR_Normy[$mon];

/* echo "h=$h g=$g<br>";
echo "DomVod_HOL=".$this->DomVodoschet_HOL[$mon]." DomVod_GOR=".$this->DomVodoschet_GOR[$mon]."<br>"; */
		
		$hol = 0;
		$gor = 0;

		if ($h) $hol = ($this->DomVodoschet_HOL[$mon] / ( $h ) )  * $this->KvVoda[$nomer][$mon]->HolScetchik ;
		if ($g) $gor = ($this->DomVodoschet_GOR[$mon] / ( $g ) )  * $this->KvVoda[$nomer][$mon]->GorScetchik ;
		$this->KvVoda[$nomer][$mon]->SetVolScetchiki ( $hol , $gor ) ;

echo "<br><font color='yellow'>Постан. № 307</font><br>";
  }//if


   elseif($MonthShema == 2 && $this->DOMvodoschetciki_from_date <= $mon) {

		$h = $this->AllV_HOL_Normy[$mon];
		$g = $this->AllV_GOR_Normy[$mon];

/* echo "h=$h g=$g<br>";
echo "DomVod_HOL=".$this->DomVodoschet_HOL[$mon]." DomVod_GOR=".$this->DomVodoschet_GOR[$mon]."<br>"; */

		$hol = 0;
		$gor = 0;

		if ($h) $hol = ( ( $this->DomVodoschet_HOL[$mon] *0.95 - $this->AllV_HOL_IndShetchiki[$mon] ) / $h )   * $this->KvVoda[$nomer][$mon]->HolPoNormam ;
		if ($g) $gor = ( ( $this->DomVodoschet_GOR[$mon] *0.95 - $this->AllV_GOR_IndShetchiki[$mon] ) / $g )   * $this->KvVoda[$nomer][$mon]->GorPoNormam ;

//echo " hol=$hol , gor=$gor <br>";

		$this->KvVoda[$nomer][$mon]->SetVolNormy ( $hol , $gor , $hol + $gor ) ;
echo "<br><font color='yellow'>Постан. № 77-ПП</font><br>";
  }//if

   elseif($MonthShema == 0 || $this->DOMvodoschetciki_from_date > $mon) {
		echo "<br><font color='silver'>б/уч. домосчет.</font><br>";
  }//if
  




		$sum = $this->KvVoda[$nomer][$mon]->Show();

#    заполняем месячные начисления и вытаскиваем назад общую сумму начислений 		
 		$Summ =  $this->KvMoneyAll[$nomer]->SetMonthNachislenie($mon, $sum);
		$Pay =  $this->KvMoneyAll[$nomer]->GetMonthPay ($mon);
		$Pay = $Pay?$Pay:0;
		$SummPay =  $this->KvMoneyAll[$nomer]->GetAllPay ($mon) ;

$Saldo = round($SummPay-$Summ, 2);
		$this->KvMoneyAll[$nomer]->SetMonthSaldo ($mon, $Saldo);
$Peny = 0;
$cx=$this->KvMoneyAll[$nomer]->GetMonthPenyProcent($mon);
$this->PenyProcent = isset($cx)? $cx : $this->PenyProcent ;
if($Saldo < 0 && $mon < PreveousMonth($this->NowDate) ) $Peny = round((-1) * $Saldo * $this->PenyProcent, 2);
		
		$this->KvMoneyAll[$nomer]->SetMonthPeny ($mon, $Peny);//  загоняет пени от сальдо этого месяца в следующий месяц 
		$Peny =  $this->KvMoneyAll[$nomer]->GetMonthPeny ($mon);  //    узнаем пени этого месяца (то есть от минусового сальдо прошлого месяца)
 		$SumPeny =  $this->KvMoneyAll[$nomer]->GetMonthNachislenie($mon);
			################## проверяем фиксированые #####################
$qins4 = "SELECT * FROM `".$this->userlogin."__saldofixed` WHERE idlevel_1 = ".$this->HouseRowNumber." AND idlevel_2 = ".$this->Kvartiry[$nomer]['id']." AND date = '".$mon."' ";
	$result4 = mysql_query($qins4) /* or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qins4."<BR>") */;
	$num_rows = mysql_num_rows($result4);
	$res4 = mysql_fetch_assoc($result4);
	$FixedSaldo = isset($res4['saldo'])? round($res4['saldo'] , 2 )  : "- незафиксировано"	;
			################## проверяем фиксированые ##################end

echo "<br><font color='yellow'>За все месяцы начислений $Summ</font><br>";
echo "<br><font color='magenta'>Всего оплата $SummPay</font><br>";
echo "<br>Новое Сальдо ".$Saldo."";
echo "<br>Фиксированое Сальдо ".$FixedSaldo."";

echo '</div>';
$SaldoText = ($FixedSaldo >= 0) ? "<font size='-3' color='#33FF66'>Переплата" : "<font  color='#CCCC00'>К оплате";
$SaldoMinus = ($FixedSaldo >= 0) ? 1 : -1;
if($Peny>0) {
	echo "<br><font size='-3'><font color='silver'>Квартплата</font> $sum<br>";
	echo "<font color='red'>Пени</font> $Peny<br></font>";
	}
echo "<br><font color='silver'>За $mon начисленно</font> $SumPeny<br>";

echo "<br><font color='orange'>Оплата</font> $Pay<br>";

if( $FixedSaldo != "- незафиксировано" /* &&  $mon < PreveousMonth($this->NowDate) */ ) echo "<br>$SaldoText (ф.) ".$SaldoMinus*$FixedSaldo."</font>";
//elseif( $FixedSaldo == "- незафиксировано" &&  $mon < PreveousMonth($this->NowDate) ) echo "<br>$SaldoText (ф.) ".$SaldoMinus*$FixedSaldo."</font>";
else {
$SaldoText1 = ($Saldo >= 0) ? "<font size='-3' color='#33FF66'>Переплата" : "<font  color='#CCCC00'>К оплате";
$SaldoMinus1 = ($Saldo >= 0) ? 1 : -1;
echo "<br>$SaldoText1 ".$SaldoMinus1*$Saldo."</font>";
if(	!$this->fix /* || $FixedSaldo == "- незафиксировано" */) echo "<br> ".$FixedSaldo."";
}



																		#ФИКСАЦИЯ#

if(	$this->fix )	{
//echo "<br>num_rows = $num_rows";
	$qins3 = 
"INSERT INTO `".$this->userlogin."__saldofixed` (`id`, `idlevel_1`, `idlevel_2`, `date`, `nachislenie`, `oplata`, `peny`, `saldo`) VALUES (NULL, '".$this->HouseRowNumber."', '".$this->Kvartiry[$nomer]['id']."', '".$mon."', '".$SumPeny."', '".$Pay."', '".$Peny."', '$Saldo')";	//	в nachislenie  записываем квартплату + пени
			
			################## фиксируем #####################
				if(	!$num_rows &&	sql_do($qins3)  ) echo "<br>  Фиксация сальдо осуществлена";;
			################## фиксируем #####################
}// if(	$this->fix )



															if($this->ShowCellsN2) {?></td><? }
  
  
 }//   month  

															if($this->ShowCellsN2) {?></tr><? }

} // kvartira


}#eof









######
######
###### 
} // конец класса     
?>