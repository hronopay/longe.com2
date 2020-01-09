<?php 
class KvWater {

#############################################################################################################################################################
####################### ---------------------------------------------------------------------- ##############################################################
####################### Класс, в котором накапливаются все данные по  конкр. квартире за месяц ##############################################################
####################### ---------------------------------------------------------------------- ##############################################################
#############################################################################################################################################################

  
  var $Month = ''; 
  var $Number = '';
  var $Length;
  var $GorScetchik = 0;
  var $HolScetchik = 0;
  var $KanScetchik = 0;
  var $GorPoNormam = 0;
  var $HolPoNormam = 0;
  var $KanPoNormam = 0;
  var $HolStavka = 0;
  var $GorStavka = 0;
  var $KanStavka = 0;
  var $SodRemTar = 0;
  var $KvObschPlosch = 0;
  var $Expl = 0;
  var $Otop = 0;

  var $antena = 0;
  var $radio = 0;
  var $domofon = 0;
  var $musor = 0;
  var $kodovzamok = 0;

var $koefkoeficent = 1; // вся квартира домнож

var $koefhvstarif = 1;
var $koefgvstarif = 1;
var $koefvodootvodtarif = 1;
var $koefotoplenietarif = 1;
var $koefexpluatationtarif = 1;
var $koefsodremonttarif = 1;
var $koefantenatarif = 1;
var $koefradiotarif = 1;
var $koefdomofontarif = 1;
var $koefkodovzamoktarif = 1;
var $koefmusortarif = 1;
var $iskoeff = false;

// для Льгот
var $NazvanieLgoty = '';
var $KoeficentLgoty = 1;
var $FamilyMembNetrudospos;
var $FamilyMemb;
var $Primenit  = array();
var $VsegoGiltsov;

//    ДЛЯ ЛЬГОТ
var $sodremonttarif ;
var $sodrkploschadi_allornorma ;
var $sodr_oblastdeistviya ;
var $otoplenietarif ;
var $otopkploschadi_allornorma ;
var $hvsgvskan ;
var $lgotykuslugam_allorsocnorma ;
var $usl_oblastdeistviya ;
var $radiotarif  ;
var $antenatarif ;

var $SodRemLg = 1 ;
var $OtopLg = 1 ;

var $HolNorma ;
var $GorNorma ;
var $KanNorma ;

var $HolGorKanLg = 1 ;
var $HolLg = 1 ;
var $GorLg = 1 ;
var $KanLg = 1 ;

var $radioLg  = 1  ;
var $antenaLg  = 1 ;

var $MonthSumm ;





  //----------- Constructor ------------------- 
	function KvWater($Number, $Month) {
		
		$this->Number = $Number;
		$this->Month = $Month;
#		$this->Show(); 

	}
  //----------- END Constructor ----------------

    function cmp_obj($a, $b) 
    {
        $al = strtolower($a->Start);
        $bl = strtolower($b->Start);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }




function SetLgt ($Lg, $Primenenie, $Giltsy, $VsegoGiltsov, $ploschadobschaya)  {
//									echo "<br><br><br>"; 

$this->KvObschPlosch = $ploschadobschaya;

	if(isset($Lg)) {
/* $results = print_r($Lg, true); 
echo str_replace("[","<br>&nbsp;&nbsp;[",  $results);
 */

/*  $results = print_r($Primenenie, true); 
echo str_replace("[","<br>&nbsp;&nbsp;[",  $results);
 */

$results = print_r($Giltsy, true); 
$results = str_replace("[","<br>&nbsp;&nbsp;&nbsp;&nbsp;[",  $results);
$results = str_replace(")","<br>&nbsp;&nbsp;)<br>",  $results);
//echo str_replace("=> Array","=> <br>&nbsp;&nbsp;Array", $results) ;
echo "<br>  <br>";


$this->VsegoGiltsov = $VsegoGiltsov;
	echo "VsegoGiltsov => $VsegoGiltsov <br>";   // $VsegoGiltsov -  показывает общее число зарегистрированных в квартире жильцов в  данном месяце


		 foreach ($Lg as $key => $val)  //   
			 {  
			 foreach ($val as $key1 => $val1)  //   
				 {  
						echo "$key => $$$  $key1  $$$ <br>";
				 foreach ($val1 as $key2 => $val2)  //    
	 				{  
						echo "$key2 => $val2  <br>";
						if ($key2 =='nazvanie__lgoty') 					$this->NazvanieLgoty = $val2;
						elseif ($key2 =='familymemb') 					$this->FamilyMemb = $val2;
						elseif ($key2 =='familymembnetrudospos')		$this->FamilyMembNetrudospos = $val2;
						elseif ($key2 =='koeficent') 					$this->KoeficentLgoty = $val2;
						elseif ($key2 =='glavnaya_yn' && $val2 == 'да') break 3;
						// если "да" не стоит нигде, то последняя по счету льгота отобразится
		 	 		}  
		 	 	}  
		 	 }  

//echo "<br>  <br>--------- ".$this->Month."----------<br><br>";

		foreach ($Primenenie as $k => $v)  //    
	 		{  
//				echo "@@@ $k => $v  <br>";
				if ($k == $this->NazvanieLgoty - 1) 
				   foreach ($v as $k1 => $v1)  //    
	 				{  
//					   echo "### $k1 => $v1  <br>";
					   foreach ($v1 as $k2 => $v2)  //    
		 				{  
//							echo "^^^ $k2 => $v2  <br>";
							if ($k2 =='from_date' && substr($this->v2, 0, 7) <= $this->Month ) $this->Primenit = $Primenenie[$k][$k1];
			 	 		}   
		 	 		}   
		 	 }  




echo "<br>  <br>";

		foreach ($this->Primenit as $k => $v)  //    
	 		{  
//				echo "echo this-&gt;"."$k.' &lt;br&gt;'  ;<br>";
//				$this->{$k} = $v;
		 	 }  
			 
			 
		$this->EchoPrimenit();
#		$this->RaschetLgoty ();
		
	}//if
} #eof
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function EchoPrimenit ()  {
echo "<br>  <br>";

		foreach ($this->Primenit as $k => $v)  //    
	 		{  
//				echo "echo this-&gt;"."$k.' &lt;br&gt;'  ;<br>";
				$this->{$k} = $v;
				echo $this->{$k}." - $k";
				echo "<br>";
		 	 }  

/* 
echo $this->id.' <br>' ;
echo $this->idlevel_1.' <br>' ;
echo $this->idlevel_2.' <br>' ;
echo $this->adress.' <br>' ;
echo $this->from_date.' <br>' ;

echo $this->sodremonttarif.' <br>' ;
echo $this->sodrkploschadi_allornorma.' ------ allornorma <br>' ;
echo $this->sodr_oblastdeistviya.' - sodr_oblastdeistviya <br>' ;


echo $this->otoplenietarif.' <br>' ;
echo $this->otopkploschadi_allornorma.' <br>' ;

echo $this->hvsgvskan.' <br>' ;
echo $this->lgotykuslugam_allorsocnorma.' <br>' ;
echo $this->usl_oblastdeistviya.' - usl_oblastdeistviya <br>' ;


echo $this->radiotarif.' <br>' ;
echo $this->antenatarif.' <br>' ;
 */

} #eof


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function SetKfs ($Kfs)  {
//									echo "<br><br><br>"; 
	if(isset($Kfs)) {
		foreach ($Kfs  as $k => $m){
//									echo "$k = 1;<br>"; 
									$value = 'koef'.$k;
									$this->{$value} = $m;
									if($m != 1) $this->iskoeff = true;
//									echo $this->{$value}." tttt<br>"; 
									}
	}//if
} #eof



function Set_ARDM ($tar , $key)  {
	if(isset($tar)) {
		switch ($key)
		{
			case 0 : 			$this->antena = $tar; 
				break;
			case 1 : 			$this->radio = $tar;
				break;
			case 2 : 			$this->domofon = $tar; 
				break;
			case 3 : 			$this->musor = $tar; 
				break;
			case 4 : 			$this->kodovzamok = $tar; 
				break;
			default : ;
		}

	}
} #eof

function SetOtop ($tar , $plo)  {
		if(isset($tar)) $this->Otop = $tar; 
		if(isset($plo)) $this->KvObschPlosch = $plo; 
}

function SetExpl ($tar , $plo)  {
		if(isset($tar)) $this->Expl = $tar; 
		if(isset($plo)) $this->KvObschPlosch = $plo; 
}

function SetSRT ($tar , $plo)  {
		if(isset($tar)) $this->SodRemTar = $tar; 
		if(isset($plo)) $this->KvObschPlosch = $plo; 
//	echo "$this->SodRemTar руб. => $this->KvObschPlosch кв.м.<br><br><br>";
}


function SetPlo ($plo)  {
		if(isset($plo)) $this->KvObschPlosch = $plo; 
}

function SetStavka ($hol , $gor , $kan )  {
		if(isset($hol)) $this->HolStavka = $hol; 
		if(isset($gor)) $this->GorStavka = $gor; 
		if(isset($kan)) $this->KanStavka = $kan; 
}

function SetVolScetchiki ( $hol , $gor )  {
		if(isset($hol)) $this->HolScetchik = $hol; 
		if(isset($gor)) $this->GorScetchik = $gor; 
		$this->KanScetchik = $gor+$hol; 
}

function SetVolNormy ( $hol , $gor , $kan )  {
		if(isset($hol)) $this->HolPoNormam = $hol; 
		if(isset($gor)) $this->GorPoNormam = $gor; 
		if(isset($kan)) $this->KanPoNormam = $kan; 
}


function SetSocNormy ($SocNorma, $ZaChto) {
		if(ZaChto==0) 		$this->HolNorma = $SocNorma; 		//хол вода
		elseif(ZaChto==1) 	$this->GorNorma = $SocNorma; 		//гор вода
		elseif(ZaChto==2) 	$this->KanNorma = $SocNorma; 		//кан вода
}




################################################################### function RaschetLgoty () #################################################################################

function RaschetLgoty ()  {







														################   СОД и РЕМ   ###############
// СОД и РЕМ   :   с учетом членов семьи
  if($this->sodr_oblastdeistviya == 1) {
	  
	  // Занимаемая площадь
  	if($this->sodrkploschadi_allornorma == 1){
		$this->SodRemLg =    1 - $this->sodremonttarif  * ($this->FamilyMemb+1) / ($this->VsegoGiltsov * 100 );
		$this->SodRemLg = ($this->SodRemLg > 0) ? $this->SodRemLg : 0 ;
	}
	  
	  // В пределах социальной нормы площади жилья
  	elseif($this->sodrkploschadi_allornorma == 2){
		$norma = 0;
		if ($this->FamilyMemb == 0) 		$norma = 33;
		elseif ($this->FamilyMemb == 1) 	$norma = 42;
		elseif ($this->FamilyMemb > 1) 		$norma = 18 * (1+$this->FamilyMemb);

		if($this->KvObschPlosch >= $norma)		$this->SodRemLg = 1-(   $norma * $this->sodremonttarif  /  $this->KvObschPlosch)  /  100   ;
		else  /* if($this->KvObschPlosch < $norma) */ 	$this->SodRemLg =   1-$this->sodremonttarif/100 ;
	}
	  
	  // Занимаемая площадь за вычетом 33кв.м
  	elseif($this->sodrkploschadi_allornorma == 3){}   //   Этим позже заняться!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!888888888888888888888888888888888888888888
  }


##################
// СОД и РЕМ   :   1 человек
  elseif($this->sodr_oblastdeistviya == 2) {
	  
	  // Занимаемая площадь
  	if($this->sodrkploschadi_allornorma == 1){
		$this->SodRemLg =    1 - $this->sodremonttarif  / ($this->VsegoGiltsov * 100 );
	}
	  
	  // В пределах социальной нормы площади жилья
  	elseif($this->sodrkploschadi_allornorma == 2){
		if ($this->VsegoGiltsov == 1) 		$norma = 33;
		elseif ($this->VsegoGiltsov == 2) 	$norma = 42/2;
		elseif ($this->VsegoGiltsov > 2) 		$norma = 18 ;

		$this->SodRemLg = 1 - $this->sodremonttarif * $norma  / ($this->KvObschPlosch * 100 );
	}
	  
	  // Занимаемая площадь за вычетом 33кв.м
  	elseif($this->sodrkploschadi_allornorma == 3){}     //   Этим позже заняться!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!888888888888888888888888888888888888888888
  }


##################
// СОД и РЕМ   :   с учетом трудоспособных членов семьи
  elseif($this->sodr_oblastdeistviya == 3) {
	  
	  // Занимаемая площадь
  	if($this->sodrkploschadi_allornorma == 1){
		$this->SodRemLg =   1 - $this->sodremonttarif  * ($this->FamilyMembNetrudospos+1) / ($this->VsegoGiltsov * 100 );
		$this->SodRemLg = ($this->SodRemLg > 0) ? $this->SodRemLg : 0 ;
	}
	  
	  // В пределах социальной нормы площади жилья
  	elseif($this->sodrkploschadi_allornorma == 2){
		$norma = 0;
		if ($this->FamilyMembNetrudospos == 0) 		$norma = 33;
		elseif ($this->FamilyMembNetrudospos == 1) 	$norma = 42;
		elseif ($this->FamilyMembNetrudospos > 1) 		$norma = 18 * (1+$this->FamilyMembNetrudospos);

		if($this->KvObschPlosch >= $norma)		$this->SodRemLg = 1-(   $norma * $this->sodremonttarif  /  $this->KvObschPlosch)  /  100   ;
		else  /* if($this->KvObschPlosch < $norma) */ 	$this->SodRemLg =   1-$this->sodremonttarif/100 ;
	}
	  
	  // Занимаемая площадь за вычетом 33кв.м
  	elseif($this->sodrkploschadi_allornorma == 3){}		//   Этим позже заняться!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!888888888888888888888888888888888888888888
  }









													################   КОМ УСЛУГИ   #################


// КОМ УСЛУГИ   :   с учетом членов семьи   ***********************
  if($this->usl_oblastdeistviya == 1) {
//---------------------------  #ОТОПЛЕНИЕ----------
	  // Занимаемая площадь
  	if($this->otopkploschadi_allornorma == 1){
		$this->OtopLg =    1 - $this->otoplenietarif  * ($this->FamilyMemb+1) / ($this->VsegoGiltsov * 100 );
		$this->OtopLg = ($this->OtopLg > 0) ? $this->OtopLg : 0 ;
	}
	  
	  // В пределах социальной нормы площади жилья
  	elseif($this->otopkploschadi_allornorma == 2){
		$norma = 0;
		if ($this->FamilyMemb == 0) 		$norma = 33;
		elseif ($this->FamilyMemb == 1) 	$norma = 42;
		elseif ($this->FamilyMemb > 1) 		$norma = 18 * (1+$this->FamilyMemb);

		if($this->KvObschPlosch >= $norma)		$this->OtopLg = 1-(   $norma * $this->otoplenietarif  /  $this->KvObschPlosch)  /  100   ;
		else  /* if($this->KvObschPlosch < $norma) */ 	$this->OtopLg =   1-$this->otoplenietarif/100 ;
	}
	  
	  // Занимаемая площадь за вычетом 33кв.м
  	elseif($this->otopkploschadi_allornorma == 3){}

//--------------------  #ХВС, ГВС и Канализ.
	  // Без ограничения по нормативам потребления
  	if($this->lgotykuslugam_allorsocnorma == 1){
												//  для расчетов по нормам
		$this->HolGorKanLg =    1 - $this->hvsgvskan  * ($this->FamilyMemb+1) / ($this->VsegoGiltsov * 100 );
		$this->HolGorKanLg = ($this->HolGorKanLg > 0) ? $this->HolGorKanLg : 0 ;
												//  для расчетов по счетчикам
		$this->HolLg =    1 - $this->hvsgvskan  * ($this->FamilyMemb+1) / ($this->VsegoGiltsov * 100 );
		$this->HolLg = ($this->HolLg > 0) ? $this->HolLg : 0 ;
		
		$this->GorLg =    $this->HolLg;
		$this->KanLg =    $this->HolLg;
	}
	  
	  // В пределах нормативов потребления
  	elseif($this->lgotykuslugam_allorsocnorma == 2){
												//  для расчетов по нормам
		$this->HolGorKanLg =   1-$this->hvsgvskan/100 ;  
												//  для расчетов по счетчикам
		$norma = $this->FamilyMemb * $this->HolNorma;
		if($this->HolScetchik >= $norma)		$this->HolLg = 1-(   $norma * $this->hvsgvskan  /  $this->HolScetchik)  /  100   ;
		else   	$this->HolLg =   1-$this->hvsgvskan/100 ;
		
		$norma = $this->FamilyMemb * $this->GorNorma;
		if($this->GorScetchik >= $norma)		$this->GorLg = 1-(   $norma * $this->hvsgvskan  /  $this->GorScetchik)  /  100   ;
		else   	$this->GorLg =   1-$this->hvsgvskan/100 ;
		
		$norma = $this->FamilyMemb * $this->KanNorma;
		if($this->KanScetchik >= $norma)		$this->KanLg = 1-(   $norma * $this->hvsgvskan  /  $this->KanScetchik)  /  100   ;
		else   	$this->KanLg =   1-$this->hvsgvskan/100 ;
												
	}
	  
  }

// КОМ УСЛУГИ   :   1 человек *************************************
  elseif($this->usl_oblastdeistviya == 2) {
//---------------------------  #ОТОПЛЕНИЕ----------
	  // Занимаемая площадь
  	if($this->otopkploschadi_allornorma == 1){
		$this->OtopLg =    1 - $this->otoplenietarif  / ($this->VsegoGiltsov * 100 );
	}
	  
	  // В пределах социальной нормы площади жилья
  	elseif($this->otopkploschadi_allornorma == 2){
		if ($this->VsegoGiltsov == 1) 		$norma = 33;
		elseif ($this->VsegoGiltsov == 2) 	$norma = 42/2;
		elseif ($this->VsegoGiltsov > 2) 		$norma = 18 ;   /////////////////     	уточнить - так или всегда 33 !!!!!!!!!!!

		$this->OtopLg = 1 - $this->otoplenietarif * $norma  / ($this->KvObschPlosch * 100 );
	}
	  
	  // Занимаемая площадь за вычетом 33кв.м
  	elseif($this->otopkploschadi_allornorma == 3){}

//--------------------  #ХВС, ГВС и Канализ.
	  // Без ограничения по нормативам потребления
  	if($this->lgotykuslugam_allorsocnorma == 1){
												//  для расчетов по нормам
		$this->HolGorKanLg =    1 - $this->hvsgvskan  / ($this->VsegoGiltsov * 100 );
												//  для расчетов по счетчикам
		$this->HolLg =    1 - $this->hvsgvskan  / ($this->VsegoGiltsov * 100 );
		$this->GorLg =    $this->HolLg;
		$this->KanLg =    $this->HolLg;
	}
	  
	  // В пределах нормативов потребления            ????????????????????????????????????????????????????   from here!!!!
  	elseif($this->lgotykuslugam_allorsocnorma == 2){
												//  для расчетов по нормам
			$this->HolGorKanLg = 1 - $this->hvsgvskan / ($this->VsegoGiltsov * 100 );
												//  для расчетов по счетчикам
		$norma = $this->HolNorma;
			$this->HolLg = 1 - $this->hvsgvskan * $norma  / ($this->HolScetchik * 100 );
		$norma = $this->GorNorma;
			$this->GorLg = 1 - $this->hvsgvskan * $norma  / ($this->GorScetchik * 100 );
		$norma = $this->KanNorma;
			$this->KanLg = 1 - $this->hvsgvskan * $norma  / ($this->KanScetchik * 100 );

	}
  }

// КОМ УСЛУГИ   :   с учетом трудоспособных членов семьи ***************
  elseif($this->usl_oblastdeistviya == 3) {
//---------------------------  #ОТОПЛЕНИЕ----------
	  // Занимаемая площадь
  	if($this->otopkploschadi_allornorma == 1){
		$this->OtopLg =   1 - $this->otoplenietarif  * ($this->FamilyMembNetrudospos+1) / ($this->VsegoGiltsov * 100 );
		$this->OtopLg = ($this->SodRemLg > 0) ? $this->SodRemLg : 0 ;
	}
	  
	  // В пределах социальной нормы площади жилья
  	elseif($this->otopkploschadi_allornorma == 2){
		$norma = 0;
		if ($this->FamilyMembNetrudospos == 0) 		$norma = 33;
		elseif ($this->FamilyMembNetrudospos == 1) 	$norma = 42;
		elseif ($this->FamilyMembNetrudospos > 1) 		$norma = 18 * (1+$this->FamilyMembNetrudospos);

		if($this->KvObschPlosch >= $norma)		$this->OtopLg = 1-(   $norma * $this->otoplenietarif  /  $this->KvObschPlosch)  /  100   ;
		else  /* if($this->KvObschPlosch < $norma) */ 	$this->OtopLg =   1-$this->otoplenietarif/100 ;
	}
	  
	  // Занимаемая площадь за вычетом 33кв.м
  	elseif($this->otopkploschadi_allornorma == 3){}

//--------------------  #ХВС, ГВС и Канализ.
	  // Без ограничения по нормативам потребления
  	if($this->lgotykuslugam_allorsocnorma == 1){
												//  для расчетов по нормам
		$this->HolGorKanLg =    1 - $this->hvsgvskan  * ($this->FamilyMembNetrudospos+1) / ($this->VsegoGiltsov * 100 );
		$this->HolGorKanLg = ($this->HolGorKanLg > 0) ? $this->HolGorKanLg : 0 ;
												//  для расчетов по счетчикам
		$this->HolLg =    1 - $this->hvsgvskan  * ($this->FamilyMembNetrudospos+1) / ($this->VsegoGiltsov * 100 );
		$this->HolLg = ($this->HolLg > 0) ? $this->HolLg : 0 ;
		
		$this->GorLg =    $this->HolLg;
		$this->KanLg =    $this->HolLg;
	}
	  
	  // В пределах нормативов потребления
  	elseif($this->lgotykuslugam_allorsocnorma == 2){
												//  для расчетов по нормам
		$this->HolGorKanLg =   1-$this->hvsgvskan/100 ;  
												//  для расчетов по счетчикам
		$norma = $this->FamilyMembNetrudospos * $this->HolNorma;
		if($this->HolScetchik >= $norma)		$this->HolLg = 1-(   $norma * $this->hvsgvskan  /  $this->HolScetchik)  /  100   ;
		else   	$this->HolLg =   1-$this->hvsgvskan/100 ;
		
		$norma = $this->FamilyMembNetrudospos * $this->GorNorma;
		if($this->GorScetchik >= $norma)		$this->GorLg = 1-(   $norma * $this->hvsgvskan  /  $this->GorScetchik)  /  100   ;
		else   	$this->GorLg =   1-$this->hvsgvskan/100 ;
		
		$norma = $this->FamilyMembNetrudospos * $this->KanNorma;
		if($this->KanScetchik >= $norma)		$this->KanLg = 1-(   $norma * $this->hvsgvskan  /  $this->KanScetchik)  /  100   ;
		else   	$this->KanLg =   1-$this->hvsgvskan/100 ;
												
	}
  }


													################   РАДИОТОЧКУ ТЕЛЕАНТЕННУ #################

$this->radioLg  	= (100 - $this->radiotarif)/100   ;
$this->antenaLg  	= (100 - $this->antenatarif)/100  ;

} #eof
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////










function Show()  {

		$this->RaschetLgoty ();

?>
<table border="1">
  <tr>
    <th scope="col"><font color='red'>м.куб</font></th>
    <th scope="col">хол</th>
    <th scope="col">гор</th>
    <th scope="col">кан</th>
  </tr>
  <tr>
    <th scope="row">вдсч.</th>
    <td><?=round($this->HolScetchik/* *$this->HolLg */,3) ;?></td>
    <td><?=round($this->GorScetchik/* *$this->GorLg */,3) ;?></td>
    <td><?=round($this->KanScetchik/* *$this->KanLg */,3) ;?></td>
  </tr>
  <tr>
    <th scope="row">соц-н.</th>
    <td><?=round($this->HolPoNormam/* *$this->HolGorKanLg */,3) ;?></td>
    <td><?=round($this->GorPoNormam/* *$this->HolGorKanLg */,3) ;?></td>
    <td><?=round($this->KanPoNormam/* *$this->HolGorKanLg */,3) ;?></td>
  </tr>
  <tr>
    <th scope="row"><font color='yellow'>руб</font></th>
    <td><?=round(   ($a=($this->HolPoNormam*$this->HolGorKanLg+$this->HolScetchik*$this->HolLg)*$this->HolStavka*$this->koefhvstarif)    ,2) ;?></td>
    <td><?=round(   ($b=($this->GorPoNormam*$this->HolGorKanLg+$this->GorScetchik*$this->GorLg)*$this->GorStavka*$this->koefgvstarif)    ,2) ;?></td>
    <td><?=round(   ($c=($this->KanPoNormam*$this->HolGorKanLg+$this->KanScetchik*$this->KanLg)*$this->KanStavka*$this->koefvodootvodtarif)    ,2) ;?></td>
  </tr>
  <tr>
    <th scope="row">Итого</th>
    <td colspan="3"><?=$s1=round(   $a+$b+$c    ,2) ;?> руб</td>
  </tr>
</table>
<?php 
$Text_ProcLgKoeff ="процент льготы/коэффмциент домножения";
?>
<table border="1">
  <tr>
    <th scope="col"><font color='red'>-</font></th>
    <th scope="col">тар</th>
    <th scope="col">плщ</th>
    <?php if($this->NazvanieLgoty) {?><th scope="col" title="<?php echo $Text_ProcLgKoeff; ?>">лг<font color="#00FFFF">|</font>лгкф</th>
    <th scope="col">ж<font color="#00FFFF">|</font>чс<font color="#00FFFF">|</font>нтрдспчс</th><?php }?>
    <th scope="col">руб</th>
  </tr>
  <tr>
    <th scope="row">СодРем</th>
    <td><?=round($this->SodRemTar,3) ;?></td>
    <td><?=round($this->KvObschPlosch,3) ;?></td>
    <?php if($this->NazvanieLgoty) {?><td title="<?php echo $Text_ProcLgKoeff; ?>"><? echo $this->sodremonttarif."%<font color=#00FFFF>|</font>".$this->SodRemLg;?></td>
    <td><?php echo $this->VsegoGiltsov."<font color=#00FFFF>|</font>1+".$this->FamilyMemb."<font color=#00FFFF>|</font>".$this->FamilyMembNetrudospos ; ?></td><?php }?>
    <td><?=round($d =    $this->KvObschPlosch * $this->SodRemTar * $this->koefsodremonttarif * $this->SodRemLg   ,   2) ;?></td>
  </tr>
  <tr>
    <th scope="row">Экспл</th>
    <td><?=round($this->Expl,3) ;?></td>
    <td><?=round($this->KvObschPlosch,3) ;?></td>
    <?php if($this->NazvanieLgoty) {?><td>&nbsp;</td>
    <td>&nbsp;</td><?php }?>
    <td><?=round($e=$this->KvObschPlosch*$this->Expl*$this->koefexpluatationtarif,2) ;?></td>
  </tr>
  <tr>
    <th scope="row">Отопл</th>
    <td><?=round($this->Otop,3) ;?></td>
    <td><?=round($this->KvObschPlosch,3) ;?></td>
    <?php if($this->NazvanieLgoty) {?><td title="<?php echo $Text_ProcLgKoeff; ?>"><? echo $this->otoplenietarif."%<font color=#00FFFF>|</font>".$this->OtopLg;?></td>
    <td><?php echo $this->VsegoGiltsov."<font color=#00FFFF>|</font>1+".$this->FamilyMemb."<font color=#00FFFF>|</font>".$this->FamilyMembNetrudospos ; ?></td><?php }?>
    <td><?=round($f=$this->KvObschPlosch*$this->Otop*$this->koefotoplenietarif * $this->OtopLg ,2) ;?></td>
  </tr>
  <tr>
    <th scope="row">Итого</th>
    <td colspan="5"><?=$s2=round(   $d+$e+$f   ,2) ;?> руб</td>
  </tr>
</table>

<?php 

	if ($this->antena || $this->radio || $this->domofon || $this->musor || $this->kodovzamok ){ 

?><table border="1">
  <tr>
    <th scope="col">-</th>
    <th scope="col">тариф</th>
    <th scope="col">руб</th>
  </tr>
<?php 
		if ($this->antena){ ?>
  <tr>
    <th scope="row">Антенна</th>
    <td><?=$aa=round($this->antena,2) ;?></td>
    <td><?=$aa=round($this->antena*$this->koefantenatarif*$this->antenaLg ,2) ;?></td>
  </tr>
<?php } 
		if ($this->radio){ ?>
  <tr>
    <th scope="row">Радио</th>
    <td><?=$ab=round($this->radio,2) ;?></td>
    <td><?=$ab=round($this->radio*$this->koefradiotarif*$this->radioLg ,2) ;?></td>
  </tr>
<?php } 
		if ($this->domofon){ ?>
  <tr>
    <th scope="row">Домофон</th>
    <td><?=$ac=round($this->domofon,2) ;?></td>
    <td><?=$ac=round($this->domofon*$this->koefdomofontarif,2) ;?></td>
  </tr>
<?php } 
		if ($this->musor){ ?>
  <tr>
    <th scope="row">Мусор</th>
    <td><?=$ad=round($this->musor,2) ;?></td>
    <td><?=$ad=round($this->musor*$this->koefmusortarif,2) ;?></td>
  </tr>
<?php } 
		if ($this->kodovzamok){ ?>
  <tr>
    <th scope="row">Код. зам.</th>
    <td><?=$ae=round($this->kodovzamok,2) ;?></td>
    <td><?=$ae=round($this->kodovzamok*$this->koefkodovzamoktarif,2) ;?></td>
  </tr>
<?php }  ?>
  <tr>
    <th scope="row">Итого</th>
    <td colspan="3"><?=$s3=round(   $aa+$ab+$ac+$ad+$ae   ,2) ;?> руб</td>
  </tr>
</table>
<?php 
	}// if
	
echo $this->MonthSumm=$s1+$s2+$s3;
// $this->KvMoneyAll[$this->Number]->SetMonthNachislenie();

 if($this->iskoeff) echo '<br><span style="text-decoration:blink; ">Коэфф.</span>';
 
 echo '<br>';
 
 if($this->NazvanieLgoty) {
 echo '<span style=" color:#FFFF00; "> Льгота: '.$this->Primenit['adress']." (".$this->NazvanieLgoty.')</span> <br>';
 echo '<span style=" color:#FFFF00; ">Коэф. льготы '.$this->KoeficentLgoty.'</span>';
 }
 
return  $this->MonthSumm;
 
} //eof

}// end of CLASS
?>