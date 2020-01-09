<?php 
class Nachislenie /* extends FFT  */
{

var $CurrentMonthInclude 	= 0;
var $ShowCells 	= 1;
var $otladka 	= 0;

//  Для общих               PenyProcent
var $PenyProcent			= 0;
var $__peny 				= array();
var $__lgoty 				= array();
var $LgotyChildren 			= array();
var $__primenenielgot 		= array();
var $__socnormyholvoda 		= array();
var $__socnormygorvoda 		= array();
var $__socnormyvodootvod 	= array();
var $__socnormyploschad 	= array();
var $__shemaraschetavoda 	= array();
var $UserChildren 			= array();

// Для дома         
var $DOMvodoschetciki_from_date = '';
var $DOMstartgorvodoschet = 0;
var $DOMstartholvodoschet = 0;
var $__hvstarif = array();
var $__gvstarif = array();
var $__vodootvodtarif = array();

var $__antenatarif = array();
var $__radiotarif = array();
var $__domofontarif = array();
var $__musortarif = array();
var $__kodovzamoktarif = array();

var $__otoplenietarif = array();
var $__expluatationtarif = array();
var $__sodremonttarif = array();
var $__domvodoschetgor = array();
var $__domvodoschethol = array();
var $__domteploschet = array();

var $Months 			= array();
var $KvMoneyAll			= array();
var $KvVoda 			= array();
var $Kvartiry	  		= array();
var $ButtonNames  		= array();
var $TableLevel  		= array();
var $DomChildren 			= array();
var $userlogin 			= '';
var $skript    			= '';
var $table    			= '';
var $NowDate   			= '';
var $StartDate 			= '';  
var $HouseRowNumber 	= 0;

//  для квартиры
var 	$KVid				;
var 	$nomer				;
var 	$ploschadobschaya	;
var 	$saldostart 		;
var 	$kv_etagsh 			;
var 	$vodoschetciki_yn 	;
var 	$antena_yn 			;
var 	$radio_yn 			;   
var 	$KvChildren				= array();
var 	$LastPokazanie	 		= array(); 
var 	$__giltsy 				= array();
var 	$__oplata 				= array();
var 	$__vodoschetchikgor 	= array();
var 	$__vodoschetchikhol 	= array();
var 	$__koefficients 		= array(); 
var 	$Lg_PerOfReg	 		= array(); 


//  для жильца
var 	$LgotyNumber = 0 	;   
var 	$GiletcNumber = 0 	;   
var 	$GiletcChildren 		= array();
var 	$__lgotygiltsa 			= array();
var 	$__otsutstvie 			= array();
var 	$__propiska 			= array(); 
var 	$GilPeriods 			= array(); 



    function Nachislenie  ($userlogin,  $id) 
    {

		$this->userlogin = $userlogin;
		$this->HouseRowNumber = $id;
		$this->table = $userlogin."__orgforma";
		$this->CleanDomNachTable();
		$this->SetScriptName();
		$this->GetStartDate();
		$this->GetAllChildrenFromUser();
		$this->GetAllTarifs();

															if($this->ShowCells) {?><table border="1" cellpadding="5"><? }
		$this->GetAllKvartiry();
															if($this->ShowCells) {?></table><? }
			
	}//eof                             


function GetAllKvartiry()  {
  $q1 = "SELECT * FROM `".$this->userlogin."__kvartira` WHERE idlevel_1 = ".$this->HouseRowNumber." ORDER BY `nomer` ASC";
  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");
  $res = mysql_fetch_assoc($q1_result);

  do {
		$this->nomer 				= $res['nomer'] 			;
		$this->Kvartiry[$this->nomer]['id']=			$this->KVid 				= $res['id'] 				;
		$this->Kvartiry[$this->nomer]['ploschadobschaya']=			$this->ploschadobschaya 	= $res['ploschadobschaya'] 	;
		$this->Kvartiry[$this->nomer]['saldostart']=				$this->saldostart 			= $res['saldostart'] 		;
		$this->Kvartiry[$this->nomer]['kv_etagsh']=					$this->kv_etagsh 			= $res['kv_etagsh'] 		;
		$this->Kvartiry[$this->nomer]['vodoschetciki_from_date']=	$this->vodoschetciki_from_date 	= $res['vodoschetciki_from_date'];
		$this->Kvartiry[$this->nomer]['startgorvodoschet']=			$this->startgorvodoschet 	= $res['startgorvodoschet'];
		$this->Kvartiry[$this->nomer]['startholvodoschet']=			$this->startholvodoschet 	= $res['startholvodoschet'];
		$this->Kvartiry[$this->nomer]['antena_yn']=					$this->antena_yn 			= ($res['antena_yn'] == 'да') 			? 1 : 0	;
		$this->Kvartiry[$this->nomer]['radio_yn']=					$this->radio_yn 			= ($res['radio_yn']  == 'да') 			? 1 : 0	;


		$this->KvMoneyAll[$this->nomer] = new KvAll($this->nomer);

		$this->GetKvChildren()	;  //  Функция продолжения вычислений по квартире

															if($this->ShowCells) {?><tr><? }
		$this->FillNachTable()	;  //  Функция заполнения начислений по квартире в табл.
															if($this->ShowCells) {?></tr><? }

	 } while ($res = mysql_fetch_assoc($q1_result));

}//eof



//////////////////////////////////////////////////////////////////////////////////////
//  Функция заполнения врем. таблицы начислений
//////////////////////////////////////////////////////////////////////////////////////
function FillNachTable()  {


$this->NowDate = substr(make_date('from'),0, 7);
$Months = $this->MakeMonths ( $this->StartDate , $this->NowDate , $this->CurrentMonthInclude );  // CurrentMonthInclude 0 - не включая текущий месяц, 1 - включая


//Для ВОДЫ
$this->LastPokazanie[0] = $this->startholvodoschet;  
$this->LastPokazanie[1] = $this->startgorvodoschet;
//--------

  foreach ($Months  as $key => $value) 
 {  
															if($this->ShowCells) {?><td valign="top" style="padding:5px; "><? }
	$Nach = $this->MakeMonthsNach($value);
	$Oplata = $this->MakeMonthsOplata($value);
															if($this->ShowCells) {?></td><? }
 
//	echo $key." ----> ".$value; echo "<br>";
	$qins4 = "INSERT INTO `".$this->userlogin."__nachislenia_temp` (`id`, `idlevel_1`, `idlevel_2`, `date`, `nachislenie`, `oplata`) VALUES (NULL, '".$this->HouseRowNumber."', '".$this->KVid."', '".$value."', '".$Nach."', '".$Oplata."')";	
#	sql_do($qins4);
 }  


}//eof






//  Функция создания массива месяцев со старта по сегодня для таблицы начислений
function MakeMonths($StartDate,$NowDate, $IncludLast)  {

$StartDate = substr($StartDate,0, 7);
$NowDate = substr($NowDate,0, 7);

$Start = explode('-', $StartDate);
$Now = explode('-', $NowDate);

if ($Now[1] >= $Start[1])
{
	$years = $Now[0]-$Start[0];
	$mon = $Now[1]-$Start[1];
	$months = $years*12+ $mon;
}
else 
{
	$years = $Now[0]-$Start[0]-1;
	$mon = $Now[1]+(12-$Start[1]);
	$months = $years*12+ $mon;
}

if (!$IncludLast) $months--;   //  не включать в список месяц NowDate

$k = (int)$Start[1]; $j = (int)$Start[0];
for ($i=0;$i<=$months;$i++){
	if ( $k>12 ) {$j++; $k=1;}
	$dob = ($k<10)? '0' : '' ;
  	$Months[] = $j . '-' . $dob . $k ;
//  	$this->Months[] = $j . '-' . $dob . $k ;
$k++;
//echo "<br>";
}

return $Months ;

}//eof





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////  Функция MakeMonthsNach($Month)       /////////////////////////////////
//Эта функция обрабатывает все уровни ниже квартиры (водосчетчики, коэф-ты, жильцов и их льготы и отсутствия)////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function MakeMonthsNach($Month)  {

	ob_start();

 $this->KvVoda[$this->nomer][$Month] = new KvWater($this->nomer, $Month);

 $MonthLen = MonthLength($Month);

echo "<font color='red'>$Month</font><br><font color='blue'>кв. $this->nomer</font><br><hr>";

//-----------
echo "<em>Вода</em><br>";    
//-----------

//В массив MonthStavka  кладем ставку за  данный Month 0-хвс 1-гвс 2-водоотвод
 
$arr[] = $this->__hvstarif; $arr[] = $this->__gvstarif; $arr[] = $this->__vodootvodtarif;
  foreach ($arr  as $akey => $avalue) 
 {  
 	if(!$akey) $chto = 'тар.х'; elseif($akey==1) $chto = 'тар.г'; else $chto = 'тар.к';
 	$MonthStavka[$akey] = 0;
 	for ($i=0; $i<count($avalue); $i++){
		if( $Month >= substr($avalue[$i][0],0,7))  $MonthStavka[$akey] = $avalue[$i][1];
	}   echo "<font size=\"-3\">$chto $MonthStavka[$akey]</font><br>";
 
/*  if(!$akey) $chto = 'тар.х'; elseif($akey==1) $chto = 'тар.г'; else $chto = 'тар.к';
 	$MonthStavka[$akey] = 0;
  foreach ($avalue  as $a1key => $a1value) {
	  foreach ($a1value  as $a2key => $a2value) {
  		echo "$a2key => $a2value<br>";
  	  }
  		echo "---------------<br>";
  }
  		echo "$$$$$$$$$$$$$$<br>";
 */ 
 }  




$socarr[] = $this->__socnormyholvoda; $socarr[] = $this->__socnormygorvoda; $socarr[] = $this->__socnormyvodootvod;
  foreach ($socarr  as $sakey => $savalue) 
 {  
	if(!$sakey) $chto = 'с-нор.х'; elseif($sakey==1) $chto = 'с-нор.г'; else $chto = 'с-нор.к';
 	$MonthSocObjom[$sakey] = 0;
 	for ($i=0; $i<count($savalue); $i++){
		if(!$MonthSocObjom[$sakey] && $Month >= substr($savalue[$i]['from_date'],0,7))  $MonthSocObjom[$sakey] = $savalue[$i]['stavka'];
	}   
	echo "<br>$sakey <font size=\"-3\">$chto $MonthSocObjom[$sakey]</font><br>";
	$this->KvVoda[$this->nomer][$Month]->SetSocNormy ( $MonthSocObjom[$sakey], $sakey ) ;
 }  


###################################   ОПЛАТА   ####################################

  if($this->__oplata) foreach ($this->__oplata  as $opkey => $opvalue) 
 {  
//	echo "<br>$opkey %%%%%%% <font size=\"-3\">$opvalue</font><br>";
	foreach ($opvalue  as $opkey1 => $opvalue1) 
	{
		$op[$opkey1] = $opvalue1;
		//summa -> 3000
		//to_date -> 2010-02-21
	}
	if ( PreveousMonth($op['to_date'])  == $Month ) {
			echo "".$op['to_date']." >>PAY>> ".$op['summa']." # $opkey <br>";
			$Summ =  $this->KvMoneyAll[$this->nomer]->SetMonthPay($Month, $op['summa']);
	}
//	$this->KvVoda[$this->nomer][$Month]->SetSocNormy ( $MonthSocObjom[$sakey], $sakey ) ;
 }  
###################################   ОПЛАТА   #################################end


###################################   ПЕНИ   ####################################

  if($this->__peny) foreach ($this->__peny  as $pkey => $pvalue) 
 {  
//	echo "<br>$opkey %%%%%%% <font size=\"-3\">$opvalue</font><br>";
	foreach ($pvalue  as $pkey1 => $pvalue1) 
	{
		$p[$pkey1] = $pvalue1;
		//summa -> 3000
		//to_date -> 2010-02-21
	}
	if ( substr($p['from_date'],0,7)  == $Month ) {
			echo "".$p['from_date']." -peny-> ".$p['peny']." # $pkey <br>";
			$this->KvMoneyAll[$this->nomer]->SetMonthPenyProcent($Month, $p['peny']);
	}
 }  
###################################   ПЕНИ   #################################end








//                       Только ВОДОСЧЕТЧИКИ
if (substr($this->vodoschetciki_from_date, 0, 7) <= $Month  &&  $this->DOMvodoschetciki_from_date <= $Month) {  

	$scharr[] = $this->__vodoschetchikhol;  $scharr[] = $this->__vodoschetchikgor; 
	foreach ($scharr  as $scharrkey => $scharrvalue) 
 	{
		if($scharrkey) $kakayavoda = 'гор.'; else $kakayavoda = 'хол.';
	 	for ($i=0; $i<count($scharrvalue); $i++){
			 if(substr($scharrvalue[$i]['to_date'],0,7) == NextMonth($Month) ) {
			 		
//				echo  "$kakayavoda ".$scharrvalue[$i]['pokazanie']. "<br>";
				
				$rashod[$scharrkey] = $scharrvalue[$i]['pokazanie'] - $this->LastPokazanie[$scharrkey];
				
				if ($rashod[$scharrkey]<0) $sty = ' style="text-decoration:blink; "';
			 	
//				echo  "<font".$sty.">$kakayavoda ".$rashod[$scharrkey]. "</font><br>";
				
				$this->LastPokazanie[$scharrkey] = $scharrvalue[$i]['pokazanie'];
			}
		}   
  	}  
//	echo "кан. ".($rashod[0] + $rashod[1])."<br>";
	echo "ГХК ".(   $NachislenieVoda = round($rashod[0]*$MonthStavka[0] + $rashod[1]*$MonthStavka[1] + ($rashod[0] + $rashod[1])*$MonthStavka[2] , 2)    )."р.";
	
	$this->KvVoda[$this->nomer][$Month]->SetVolScetchiki ( $rashod[0] , $rashod[1] );
}








//                       Только СОЦНОРМЫ
if (substr($this->vodoschetciki_from_date, 0, 7) >= $Month   ||   $this->DOMvodoschetciki_from_date > $Month )  
{
echo "<hr>";

/* 
$socarr[] = $this->__socnormyholvoda; $socarr[] = $this->__socnormygorvoda; $socarr[] = $this->__socnormyvodootvod;
  foreach ($socarr  as $sakey => $savalue) 
 {  
	if(!$sakey) $chto = 'с-нор.х'; elseif($sakey==1) $chto = 'с-нор.г'; else $chto = 'с-нор.к';
 	$MonthSocObjom[$sakey] = 0;
 	for ($i=0; $i<count($savalue); $i++){
		if(!$MonthSocObjom[$sakey] && $Month >= substr($savalue[$i]['from_date'],0,7))  $MonthSocObjom[$sakey] = $savalue[$i]['stavka'];
	}   echo "<font size=\"-3\">$chto $MonthSocObjom[$sakey]</font><br>";
 }  
 */






//    	обработка прописки (регистрации)  и отсутствия ЖИЛЬЦА для расчета ВОДЫ!!!  
//		Для других целей создавать другиие массивы - тут как ОТСУТСТВИЕ идет остаток 
//						месяца после подключения водосчетчиков

  $garr[] = $this->__propiska; 
  $garr[] = $this->__otsutstvie;  
//  $garr[] = $this->__lgotygiltsa;  НЕЛЬЗЯ!!!

  $j=0;		
	foreach ($garr  as $garrkey => $garrvalue) 
 	{	
		if (!$garrvalue) {
			echo $warning1 = (!$garrkey) ? "Нет зарег. жильцов<br>":"";
			if ($garrkey==1 && $this->DOMvodoschetciki_from_date <= $Month)   for ($i=0;$i<=$this->GiletcNumber;$i++) {
				$Per[$i][$garrkey][1] = new Period($this->vodoschetciki_from_date,  substr($this->vodoschetciki_from_date, 0, 7)."-".MonthLength(substr($this->vodoschetciki_from_date, 0, 7)) );  // для воды вставляем период со дня включения счетчиков по конец того же месяца
//				 echo $this->vodoschetciki_from_date." dobavka999 ".  substr($this->vodoschetciki_from_date, 0, 7)."-".MonthLength(substr($this->vodoschetciki_from_date, 0, 7))."<br>ddd=$this->DOMvodoschetciki_from_date<br><br>";
//				 $Per[$i][$garrkey][1]->Show();
			}

		}
		else {
		  
		  
		  // для того чтобы всем жильцам это было создано, а не только у кого есть отсутствие:
		  if ($garrkey && $this->DOMvodoschetciki_from_date <= $Month)   for ($i=0;$i<=$this->GiletcNumber;$i++) {
			  $Per[$i][$garrkey][1000] = new Period($this->vodoschetciki_from_date,  substr($this->vodoschetciki_from_date, 0, 7)."-".MonthLength(substr($this->vodoschetciki_from_date, 0, 7)) );  // для воды вставляем период со дня включения счетчиков по конец того же месяца
		  }
		  
		  
		  foreach ($garrvalue  as $GiNum => $value1)
		  {	

			foreach ($value1  as $SobNum => $sobytie)
			{	
				foreach ($sobytie  as $pole => $znachenie)
				{
					if (/* $pole == 'adress' ||  */$pole == 'from_date' || $pole == 'to_date' ) 
					{
//						echo "$pole => $znachenie <br>";
						$a = ($pole == 'from_date')? 'start' : 'end' ;
						$$a = $znachenie;
					}
				} //   foreach ($sobytie  as $pole => $znachenie)
				$Per[$GiNum][$garrkey][$SobNum] = new Period($start, $end);
				// Проверка что порядок дат верный
				if ( !$Per[$GiNum][$garrkey][$SobNum]->Validate() ) {
					$Per[$GiNum][$garrkey][$SobNum]->Show();
					echo "!!!!!!-Неверный перилод у жильца $GiNum в свойствах $garrkey <br><br>";
					exit();
				}   // if ( !$Per[$GiNu
			}  // foreach ($value1  as $SobNum => $sobytie)
			
#------для воды вставляем период ПСЕВДООТСУТСТВИЯ с момента установки водосчетчиков до конца месяца---------------------------------
if($garrkey == 1 && $this->DOMvodoschetciki_from_date <= $Month) {
 $Per[$GiNum][$garrkey][$SobNum+1] = new Period($this->vodoschetciki_from_date,  substr($this->vodoschetciki_from_date, 0, 7)."-".MonthLength(substr($this->vodoschetciki_from_date, 0, 7)) );
// echo $this->vodoschetciki_from_date." dobavka ".  substr($this->vodoschetciki_from_date, 0, 7)."-".MonthLength(substr($this->vodoschetciki_from_date, 0, 7))."<br>GiNum=$GiNum<br><br>";
			}
#-----------------------------------------------------------------------------------------------------------------------------------
			
		} // foreach ($garrvalue  as $GiNum => $value1)
	  } //  else
  	} // foreach ($garr  as $garrkey => $garrvalue) 




  $PartOfMonth = 0;
  for ($i=0;$i<=$this->GiletcNumber;$i++) {
	 if (isset($Per[$i][1]))  usort($Per[$i][1], array("Period", "cmp_obj"));
  	/* if(!isset($this->GilPeriods[$i])) */  $this->GilPeriods[$i] = new GiletcPeriod($Per[$i]); 
  	$PartOfMonth += ( $this->GilPeriods[$i]->Check($Month) ) / $MonthLen ;
  }
  //    обработка прописки (регистрации)  и отсутствия ЖИЛЬЦА         КОНеЦ


	echo "ГХК ".(   $NachislenieVoda = round( $PartOfMonth * ($MonthSocObjom[0]*$MonthStavka[0] + $MonthSocObjom[1]*$MonthStavka[1] + $MonthSocObjom[2]*$MonthStavka[2]) ,2)   )."р.";
	
	$this->KvVoda[$this->nomer][$Month]->SetVolNormy ($PartOfMonth * $MonthSocObjom[0] , $PartOfMonth * $MonthSocObjom[1] , $PartOfMonth * $MonthSocObjom[2] ) ;



} //end of   Только СОЦНОРМЫ

//   Прочее
		$this->KvVoda[$this->nomer][$Month]->SetStavka ( $MonthStavka[0] , $MonthStavka[1] , $MonthStavka[2] );
		$this->KvVoda[$this->nomer][$Month]->Show () ;
		
		
		if ($this->__koefficients) $this->Koeffs($Month)  ;
		if ($this->__lgotygiltsa) $this->Lgoty($Month)  ;

####################################
	$ctlg_content=ob_get_contents();
	ob_end_clean();
if($this->otladka)	echo $ctlg_content;
####################################


	return $NachislenieVoda;
}//eof




#----------------------------------------------------------------------
function Koeffs($Month)  {


 foreach ($this->__koefficients  as $key1 => $value1) 
 {	$s=false;  
	 foreach ($value1 as $key => $value) 
	 {  
//		echo "$key1 => $key => $value Koeffs<br>";
		if ($key=='from_date') {
								$mon = substr($value,0, 7); 
								$s=true;
		}
		if ($s && $key != 'from_date' && $key != 'osnovanie' && $key != 'notes') 				$Koeffs[$mon][$key] = $value;
 	 }  
//		echo "$mon => ".$Koeffs[$mon]['expluatationtarif']." --Oto<br>";
 }  
//print_r($Koeffs);

	foreach ($Koeffs as $keymon => $val)  //  $val - массив всех коэффициентов
	 {  
//		echo "<br><br><br>$keymon => $val Koe ffs $mon-now<br>";
		if ($Month >= $keymon) 	$Kfs = $val;
 	 }  
//	echo "<br><br>$mon => --$Otop-- Otop<br>";
		$this->KvVoda[$this->nomer][$Month]->SetKfs ( $Kfs ) ;

 
}#eof


#######################################################################################################################################################
																function Lgoty($Month)  {
#######################################################################################################################################################


 foreach ($this->__lgotygiltsa  as $nomerGiltsa => $value1) 
 {	
   foreach ($value1  as $nomerSobytiyaGiltsa => $value2) 
   {	
	 foreach ($value2 as $key => $value) 
	 {  
//		echo "$nomerGiltsa => $nomerSobytiyaGiltsa => $key => $value <br>";
		 if ($key=='from_date')	$monfrom = substr($value,0, 7);
		 if ($key=='to_date')	$monto = substr($value,0, 7);
		 if ($key!='id' && $key!='idlevel_1' && $key!='idlevel_2' && $key!='idlevel_3' && $key!='adress')
		 	{
				 $Lgoty[$monfrom][$nomerGiltsa][$nomerSobytiyaGiltsa][$key] = $value;
		 		 if( ($monfrom <= $Month && $monto >= $Month) || ($monfrom <= $Month && $key == 'from_date')) $Lg[$nomerGiltsa][$nomerSobytiyaGiltsa][$key] = $value;
		 		 elseif( $monto < $Month )     unset ( $Lg[$nomerGiltsa][$nomerSobytiyaGiltsa] ) ;
			}
 	 	}  
	}
 }  
 
/*  
$results = print_r($Lg, true); 
echo str_replace("[","<br>&nbsp;&nbsp;[",  $results);
 */

		 foreach ($Lg as $key => $val)  //   этот форич ради удаления просроченных unset($Lg[$key][$key1]);
			 {  
			 foreach ($val as $key1 => $val1)  //   
				 {  
						//echo "<br>$key => $$$  $key1  $$$ <br>";
				 foreach ($val1 as $key2 => $val2)  //    
	 				{  
						//echo "$key2 => $val2  <br>";
						if ($key2 =='to_date' && $val2<=$Month ) 	unset($Lg[$key][$key1]);
		 	 		}  
		 	 	}  
		 	 }  


###############
	  foreach ($this->__propiska  as $GiNum => $value1)
		  {	

			foreach ($value1  as $SobNum => $sobytie)
			{	
				foreach ($sobytie  as $pole => $znachenie)
				{
					if ($pole == 'from_date' || $pole == 'to_date' ) 
					{
//						echo "$pole => $znachenie <br>";
						$a = ($pole == 'from_date')? 'start' : 'end' ;
						$$a = $znachenie;
					}
				} //   foreach ($sobytie  as $pole => $znachenie)

				if($Month == substr($this->StartDate,0,7) ) 	$this->Lg_PerOfReg[$GiNum][$SobNum] = new Period($start, $end);
				#if ($this->Lg_PerOfReg[$GiNum][$SobNum]->IsInside ( $Month )) ;;;
				
			}  // foreach ($value1  as $SobNum => $sobytie)
		} // foreach ($garrvalue  as $GiNum => $value1)

###############

/*   for ($i=0;$i<=$this->GiletcNumber;$i++) {
	  if (isset($Lg_PerOfReg[$i]))   usort($Lg_PerOfReg[$i], array("Period", "cmp_obj"));
	  else 		echo "<br>NOOOOOOOOO!!!!<br>";
 
  	  $GP_Reg[$i] = new GiletcPeriod($Lg_PerOfReg[$i]); 
		$GP_Reg[$i]->IsInside($Month) ;
		echo "<br>77777777777<br>";
  }
 */
 $VsegoGiltsov=0;   //  показывает общее число зарегистрированных в квартире жильцов в  данном месяце
			 foreach ($this->Lg_PerOfReg as $key1 => $val1)  //   
				 {  
						//echo "<br>$key => $$$  $key1  $$$ <br>";
				 foreach ($val1 as $key2 => $val2)  //    
	 				{  
						/* echo "key1 = $key1<br>";
						 echo "key2 =  ".$key2."<br>"; */
						if ( $val2->IsInside($Month) ) {
							//echo "Жилец № $key1 внутри<br>";
							$VsegoGiltsov++;
						}
//						$val2->Show();
		 	 		}  
		 	 	}  



 
 $this->KvVoda[$this->nomer][$Month]->SetLgt ( $Lg , $this->__primenenielgot, $this->__giltsy, $VsegoGiltsov, $this->ploschadobschaya ) ;

 
}#eof




























//  Функция 
function MakeMonthsOplata($Month)  {

return ;
}//eof
























function GetKvChildren()  {

unset($this->GilPeriods);    
unset($this->KvChildren);    
unset($this->__giltsy);
unset($this->__oplata);
unset($this->__vodoschetchikgor);
unset($this->__vodoschetchikhol);
unset($this->__koefficients); 

unset($this->__lgotygiltsa);
unset($this->__otsutstvie);
unset($this->__propiska);
unset($this->Lg_PerOfReg);

  $qSHOW = "SHOW FULL FIELDS FROM `".$this->userlogin."__kvartira`  ";
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>GetKvChildrenqq3");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);

  do {
	   if (  $row_qSHOW_result['Field'] == 'children'  ) $chil = $row_qSHOW_result['Comment'];
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
  
$Children = explode(  " ", trim( str_replace("invisible","",$chil) ) );

  foreach ($Children  as $key => $value) 
 {  
		$this->KvChildren[] = $this->userlogin.$value; 
 }  
  foreach ($this->KvChildren  as $key => $value) 
  {  
//		echo /* "KvChildren = ".$key. */"var $". $value." = array(); <br>";
		if 	( strstr($value, '__giltsy') || strstr($value, '__koefficients') ) 	$col='from_date';
		else 																	$col='to_date';
				
		  $q1 = "SELECT * FROM `".$value."` WHERE idlevel_1 = ".$this->HouseRowNumber." AND idlevel_2 = ".$this->KVid ." ORDER BY `".$col."` ASC";
		  if ($this->KVid) {$q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>GetKvChildrenqq22");}  else {echo "Нет  квартир!"; exit();}
  		  $res = mysql_fetch_assoc($q1_result);
		  $KvChilCount = mysql_num_rows($q1_result); 
$i = 0;
	 do {
	 	if (!$KvChilCount) continue;
	  	$sh = "SHOW FULL FIELDS FROM `".$value;
	  	$shr = mysql_query($sh) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sh."<BR>GetKvChildrenqq4");
	  	$row_shr = mysql_fetch_assoc($shr);
	  	do {
				if ($res[$row_shr['Field']] != "") {
					$this->{ $w=str_replace($this->userlogin,"",$value) }[$i][ $row_shr['Field'] ] 	= $res[$row_shr['Field']]; 
//					if ($w == "__koefficients") echo $w." ===>>> ". $row_shr['Field']." ---- ". $res[$row_shr['Field']] ." xxxxxx<br>";/////////////////////////////
				}
				# Перебор всех полей Вместо  $this->{$value}[$i]['gvstarif'] = $res['gvstarif']; 
	 	 } while ($row_shr = mysql_fetch_assoc($shr));

		  if (strstr($value, '__giltsy')) 	$this->GetGiletcChildren($i)	;  //  Функция продолжения вычислений по Жильцу

		  $i++;
	 } while ($res = mysql_fetch_assoc($q1_result));


 }  

}//eof





//////////////////////////////////////////////////////////////////////////////////////////////////// __lgotygiltsa __otsutstvie __propiska
function GetGiletcChildren($GiletcNumber)  {

$this->GiletcNumber = $GiletcNumber;
unset($this->GiletcChildren);    

  $qSHOW = "SHOW FULL FIELDS FROM `".$this->userlogin."__giltsy`  ";
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>GetKvChildrenqq3");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);

  do {
	   if (  $row_qSHOW_result['Field'] == 'children'  ) $chil = $row_qSHOW_result['Comment'];
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
  
$Children = explode(  " ", trim( str_replace("invisible ","",$chil) ) );

  foreach ($Children  as $key => $value) 
 {  
		$this->GiletcChildren[] = $this->userlogin.$value; 
 }  
  foreach ($this->GiletcChildren  as $key => $value) 
  {  
//		echo  "GiletcChildren = ".$key. " var $". $value." = array(); <br>";
		if 	(/*  strstr($value, '__giltsy') || strstr($value, '__koefficients') */ 1 ) 	$col='from_date';
		else 																	$col='to_date';
		
				
/* echo */		  $q1 = "SELECT * FROM `".$value."` WHERE idlevel_3 = ".$this->__giltsy[$GiletcNumber]['id'] ." ORDER BY  `".$col."` ASC";
//echo  " <br>";
		  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>GetGiletcChildren11ww");
  		  $res = mysql_fetch_assoc($q1_result);
$i = 0;
	 do {
	  $sh = "SHOW FULL FIELDS FROM `".$value;
	  $shr = mysql_query($sh) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sh."<BR>GetKvChildrenqq4");
	  $row_shr = mysql_fetch_assoc($shr);
	  do {
			if ($res[$row_shr['Field']] != "") $this->{ str_replace($this->userlogin,"",$value) }[$GiletcNumber][$i][ $row_shr['Field'] ] 	= $res[$row_shr['Field']]; 
			# Перебор всех полей Вместо  $this->{$value}[$i]['gvstarif'] = $res['gvstarif'];  
			#     И тут еще для идентификации трехмерный массив - добавлен НОМЕР ЖИЛЬЦА первым полем массива
			
	 	 } while ($row_shr = mysql_fetch_assoc($shr));
	  $i++;
	  } while ($res = mysql_fetch_assoc($q1_result));
 }  

}//eof











//  Функция создания новой ВРЕМЕННОЙ таблицы начислений
function CleanDomNachTable()  {
$qins4 = "
DELETE FROM `".$this->userlogin."__nachislenia_temp` WHERE `idlevel_1` = ".$this->HouseRowNumber ;
			sql_do($qins4);

}//eof



function SetScriptName()  {
  	if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  	$this->skript = 'adm_cabinet.php';
	else 												$this->skript = 'cabinet.php';
}//eof


function GetStartDate()  {
		  $q1 = "SELECT * FROM `".$this->table."` WHERE id = ".$this->HouseRowNumber;
		  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");
  		  $res = mysql_fetch_assoc($q1_result);
		  $this->StartDate = $res['rasch_to_date'];
		$this->DOMvodoschetciki_from_date 	= substr($res['vodoschetciki_from_date'], 0, 7)   ;
		$this->DOMstartgorvodoschet		 	= $res['startgorvodoschet'];
		$this->DOMstartholvodoschet 		= $res['startholvodoschet'];
		  
}//eof


function GetAllTarifs()  {
  $qSHOW = "SHOW FULL FIELDS FROM ".$this->table." ";
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>GetAllTarifsqq3");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);

  do {
	   if (  $row_qSHOW_result['Field'] == 'children'  ) $chil = $row_qSHOW_result['Comment'];
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
  
$Children = explode(  " ", trim( str_replace("invisible __kvartira ","",$chil) ) );

  foreach ($Children  as $key => $value) 
	{  
		$this->DomChildren[] = $this->userlogin.$value; 
 	}  

  foreach ($this->DomChildren  as $key => $value) 
  {  
//		echo /* "DomChildren = ".$key. */"var $". $value." = array(); <br>";
		if 		(strstr($value, 'tarif')){$col='from_date';}
		elseif 	(strstr($value, 'schet')){$col='to_date';}
		else continue;
		
				
		  $q1 = "SELECT * FROM `".$value."` WHERE idlevel_1 = ".$this->HouseRowNumber." ORDER BY `".$col."` ASC";
		  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");
  		  $res = mysql_fetch_assoc($q1_result);
$i = 0;
$value =str_replace($this->userlogin,"",$value);
  do {
//	 	$this->{$value}[$i][0] = $res[$col] >= $this->StartDate ? $res[$col] : $this->StartDate ;
	 	$this->{$value}[$i][0] = $res[$col]  ;
	 	$this->{$value}[$i][1] = $res['stavka'] 	;
		
/*  		echo $this->{$value}[$i][0]."  <br>";
		echo $this->{$value}[$i][1]."  <br>";
		echo $i." =i ".$res[$col] ." ".$res['stavka'] ."  <br><br><br>";
 */ 	$i++;
	 } while ($res = mysql_fetch_assoc($q1_result));


 }  
  echo "<br>";  

}//eof






//--------------------------------------------------------------
//   Функция для выборки данных из юзера - соцнормы, льготы и тп
//--------------------------------------------------------------
function GetAllChildrenFromUser()  {
  $qSHOW = "SHOW FULL FIELDS FROM ".$this->userlogin."__user ";
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>GetAllFromUser_q3");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);

  do {
	   if (  $row_qSHOW_result['Field'] == 'children'  ) $chil = $row_qSHOW_result['Comment'];
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
  
$Children = explode(  " ", trim( str_replace("invisible ","",$chil) ) );

  foreach ($Children  as $key => $value) 
	{  
		$this->UserChildren[] = $this->userlogin.$value; 
 	}  

  foreach ($this->UserChildren  as $key => $value) 
  {  
		//echo  "UserChildren = ".$key. "var $". $value." = array(); <br>";
		if 		(strstr($value, 'socnormy')||strstr($value, 'shemarascheta')){$col="ORDER BY `".'from_date'."` ASC"   ;}   //---------------__socnormyploschad    возможно надо по ДРУГОМУ!!!!!!!!!!!
		elseif 	(strstr($value, 'lgoty')){$col="ORDER BY `".'id'."` ASC"   ;}
		else $col=""   ;
		
				
		  $q1 = "SELECT * FROM `".$value."` WHERE idlevel_1 = 1  ".$col."";    //  1 - потому что в юзере только запись номер 1
		  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");
  		  $res = mysql_fetch_assoc($q1_result);
$i = 0;
	 do {
	  $sh = "SHOW FULL FIELDS FROM `".$value;
	  $shr = mysql_query($sh) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sh."<BR>GetKvChildrenqq4");
	  $row_shr = mysql_fetch_assoc($shr);
	  do {
			if ($res[$row_shr['Field']] != "") $this->{ str_replace($this->userlogin,"",$value) }[$i][ $row_shr['Field'] ] 	= $res[$row_shr['Field']]; 
			# Перебор всех полей Вместо  $this->{$value}[$i]['gvstarif'] = $res['gvstarif']; как в домах
	 	 } while ($row_shr = mysql_fetch_assoc($shr));


		  if (strstr($value, '__lgoty')) 	$this->GetLgotyChildren($i)	;  //  Функция продолжения вычислений для извлечения схем применения льгот


	  $i++;
	  } while ($res = mysql_fetch_assoc($q1_result));

 }  
  echo "<br>";  

}//eof




//////////////////////////////////////////////////////////////////////////////////////////////////// __lgotygiltsa __otsutstvie __propiska
function GetLgotyChildren($LgotyNumber)  {

//echo  "LgotyChi = ".$LgotyNumber. " 888888888888888888888 <br>";

$this->LgotyNumber = $LgotyNumber;
//unset($this->GiletcChildren);    

  $qSHOW = "SHOW FULL FIELDS FROM `".$this->userlogin."__lgoty`  ";
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>GetLgChildrenq4q3");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);

  do {
	   if (  $row_qSHOW_result['Field'] == 'children'  ) $chil = $row_qSHOW_result['Comment'];
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
  
$Children = explode(  " ", trim( str_replace("invisible ","",$chil) ) );

  foreach ($Children  as $key => $value) 
 {  
		$this->LgotyChildren[] = $this->userlogin.$value; 
 }  
  foreach ($this->LgotyChildren  as $key => $value) 
  {  
		//echo  "LgotyChildren = ".$key. " var $". $value." = array(); <br>";
		if 	(/*  strstr($value, '__lgoty') || strstr($value, '__koefficients') */ 1 ) 	$col='from_date';
		else 																	$col='to_date';
		
				
/* echo */		  $q1 = "SELECT * FROM `".$value."` WHERE idlevel_2 = ".$this->__lgoty[$LgotyNumber]['id'] ." ORDER BY  `".$col."` ASC";
//echo  " <br>";
		  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>GetLgotyChildren11ww");
  		  $res = mysql_fetch_assoc($q1_result);
$i = 0;
	 do {
	  $sh = "SHOW FULL FIELDS FROM `".$value;
	  $shr = mysql_query($sh) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sh."<BR>GetKvChildrenqq4");
	  $row_shr = mysql_fetch_assoc($shr);
	  do {
			if ($res[$row_shr['Field']] != "") $this->{ str_replace($this->userlogin,"",$value) }[$LgotyNumber][$i][ $row_shr['Field'] ] 	= $res[$row_shr['Field']]; 
			# Перебор всех полей Вместо  $this->{$value}[$i]['gvstarif'] = $res['gvstarif'];  
			#     И тут еще для идентификации трехмерный массив - добавлен НОМЕР LgotyNumber первым полем массива
			
	 	 } while ($row_shr = mysql_fetch_assoc($shr));
	  $i++;
	  } while ($res = mysql_fetch_assoc($q1_result));
 }  

}//eof






} // конец класса 
?>