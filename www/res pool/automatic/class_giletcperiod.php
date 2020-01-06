<?php 
class GiletcPeriod {
  
  var $NewAr = array();
  var $OtsAr = array();

  var $PerAr = array();
  var $New2Ar = array();
  var $NewOtsutAr = array();

  //----------- Constructor ------------------- 
	function GiletcPeriod($PeriodsArray) {
		
		$this->PerAr = $PeriodsArray;
		$this->MakeUsable(); 

	}
  //----------- END Constructor ----------------



function MakeUsable (  )  {
$i = 0;
//------------------------------------------------------------if(!$key) $sobytie='регистрация';
		foreach ($this->PerAr  as $key => $value)
			{	if(!$key) $sobytie='регистрация';if($key==1) $sobytie='отсутствие';
			if(!$key){
//				echo $sobytie." $key = num of garr<br>";
				foreach ($value  as $key1 => $value1)
				{	
					if(!$key1) {
					 $this->NewAr[$i]['from'] 	= $value1->Start ;	
					 $this->NewAr[$i]['to']	 	= $value1->End ;	
					 $i++;
					 }
					 else {
					 	if($value1->Start >= $this->NewAr[$i-1]['from'] && $value1->Start < $this->NewAr[$i-1]['to'] && $value1->End < $this->NewAr[$i-1]['to'])
						{;}
					 	elseif($value1->Start >= $this->NewAr[$i-1]['from'] && $value1->Start < $this->NewAr[$i-1]['to'] && $value1->End >= $this->NewAr[$i-1]['to'])
						{
							$this->NewAr[$i-1]['to'] = $value1->End;
						}
						elseif($value1->Start >= $this->NewAr[$i-1]['to'] && $value1->End > $this->NewAr[$i-1]['to'])
						{
							 $this->NewAr[$i]['from'] 	= $value1->Start ;	
							 $this->NewAr[$i]['to']	 	= $value1->End ;	
							 $i++;
						}
						else{ /* echo "ErrORRRRRRRRRR!!!"; exit */;}
					 } //else
				}  //foreach ($value  as $key1 => $value1)
//echo ">><br>";
			  } //if(!$key)



//------------------------------------------------------------if($key==1) $sobytie='отсутствие';
			if($key==1){

#-----------------------------------------------------------------------------------$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

				foreach ($value  as $key1 => $value1)
				{	
					if(!$key1) {
					 $this->OtsAr[$i]['from'] 	= $value1->Start ;	
					 $this->OtsAr[$i]['to']	 	= $value1->End ;	
					 $i++;
					 }
					 else {
					 	if($value1->Start >= $this->OtsAr[$i-1]['from'] && $value1->Start < $this->OtsAr[$i-1]['to'] && $value1->End < $this->OtsAr[$i-1]['to'])
						{;}
					 	elseif($value1->Start >= $this->OtsAr[$i-1]['from'] && $value1->Start < $this->OtsAr[$i-1]['to'] && $value1->End >= $this->OtsAr[$i-1]['to'])
						{
							$this->OtsAr[$i-1]['to'] = $value1->End;
						}
						elseif($value1->Start >= $this->OtsAr[$i-1]['to'] && $value1->End > $this->OtsAr[$i-1]['to'])
						{
							 $this->OtsAr[$i]['from'] 	= $value1->Start ;	
							 $this->OtsAr[$i]['to']	 	= $value1->End ;	
							 $i++;
						}
						else{ /* echo "ErrORRRRRRRRRR!!!"; exit */;}
					 } //else
				}  //foreach ($value  as $key1 => $value1)

#-----------------------------------------------------------------------------------$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

















//				echo $sobytie." $key = num of garr<br>";
				$a=1;
			  while ($a){
			  	$a=0;
				$elnum = count($this->NewAr);
				foreach ($this->NewAr  as $NewArkey => $NewArvalue)
				{
//				echo ">>$NewArkey = NewArkey 7777777777777777777777777777<br>";
		$j = 0;
					foreach ($this->OtsAr  as $key1 => $value1)
					{	
					 /* echo */ $this->NewOtsutAr[$j]['from'] 	= $value1['from'] ;	//echo " from j = $j<br>";
					 /* echo */ $this->NewOtsutAr[$j]['to']	 	= $value1['to'] ;	//echo " to j = $j<br>";
					 	if($j>0){
						  if($value1['from'] < $this->NewOtsutAr[$j-1]['to']  ){
							/* unset($this->PerAr[$key][$key1]);
							$a=1;
							usort($this->PerAr[$key] , "cmp");
							break 2; */
							echo "Ошибка: Пересечение периодов отсутствия! ".$value1['from']." < ".$this->NewOtsutAr[$j-1]['to'] ;
							exit();
						  }
					 	else {;}
						}//if($j>0){
						$j++;



/* 					echo $NewArvalue['from'] ." ---NewArvalue--- ". $NewArvalue['to'];
					echo ">><br>";
					echo $key1."=>".$value1['from'] ;	
					echo "<br>";
					echo $key1."=>".$value1['to'] ;	
					echo "<br>"; */
						if($value1['to'] <= $NewArvalue['from']){
							/* $this->New2Ar[$NewArkey]['from'] = $this->NewAr[$NewArkey]['from'] ;
							$this->New2Ar[$NewArkey]['to'] = $this->NewAr[$NewArkey]['to'] ; */
						}
						elseif($value1['from'] <= $NewArvalue['from'] && $value1['to'] > $NewArvalue['from'] && $value1['to'] < $NewArvalue['to']){
							$this->NewAr[$NewArkey]['from'] = NextDay($value1['to']) ;
							/* $this->New2Ar[$NewArkey]['from'] = $value1['to'] ;
							$this->New2Ar[$NewArkey]['to'] = $this->NewAr[$NewArkey]['to'] ; */
						}
						elseif($value1['from'] <= $NewArvalue['from']  && $value1['to'] >= $NewArvalue['to']){
							unset($this->NewAr[$NewArkey]['from']) ;
							unset($this->NewAr[$NewArkey]['to']);
							/* $this->New2Ar[$NewArkey]['from'] = '' ;
							$this->New2Ar[$NewArkey]['to'] = '' ; */
						}
						elseif($value1['from'] > $NewArvalue['from']  && $value1['to'] < $NewArvalue['to']){  // разбиение на 2 периода  с созданием нового последнего элта
							$this->NewAr[$NewArkey]['to'] = PreveousDay($value1['from'])  ;
							$this->NewAr[$elnum]['from'] = NextDay($value1['to'])  ;
							$this->NewAr[$elnum]['to'] = $NewArvalue['to']  ; 
							$a=1;
							usort($this->NewAr , "cmp");
							break 2;
							
							/* echo "<br>------------------------->><br>";
							echo $this->New2Ar[$NewArkey]['from'] = $this->NewAr[$NewArkey]['from'] ;
							echo $this->New2Ar[$NewArkey]['to'] = $value1['from']  ;
							echo $this->New2Ar[$elnum]['from'] = $value1['to']  ;
							echo $this->New2Ar[$elnum]['to'] = $NewArvalue['to']  ;
							echo "<br>------------------------->><br>"; */
						}
						elseif($value1['from'] > $NewArvalue['from'] && $value1['from'] <= $NewArvalue['to'] && $value1['to'] > $NewArvalue['to']){
							$this->NewAr[$NewArkey]['to'] = PreveousDay($value1['from']) ;
							/* $this->New2Ar[$NewArkey]['from'] = $this->NewAr[$NewArkey]['from'] ;
							$this->New2Ar[$NewArkey]['to'] = $value1['from'] ; */
						}
						else{
							/* $this->New2Ar[$NewArkey]['from'] = $this->NewAr[$NewArkey]['from'] ;
							$this->New2Ar[$NewArkey]['to'] = $this->NewAr[$NewArkey]['to'] ; */
						}

					}  				//foreach ($value  as $key1 => $value1)
				  }//echo ">><br>";  // foreach ($this->NewAr  as $NewArkey => $NewArvalue)
				}				//  while ($a){
			  } 			//if($key==1)

			} //oreach ($this->PerAr  as $key => $value)
		//echo ">><<<br><br>";  


//////////////////////////////////////////////////////////////////////////////////
			usort($this->NewAr , "cmp");


				  /* foreach ($this->NewAr  as $NewArkey => $NewArvalue)
				{
					echo $NewArvalue['from'] ." --<<>>-- ". $NewArvalue['to']; echo "<br>";
				}
				echo "<br><br>";  */

}//eof




function Check($Month)  {
	$MonthLen = MonthLength($Month);
	foreach ($this->NewAr  as $key => $value)
	{
//		echo $value['from'] ." -->>-- ". $value['to']; echo "<br>";
		
		if ( substr($value['from'],0,7) != substr($value['to'],0,7)) {
			if ( $Month == substr($value['from'],0,7) ){
				$m = explode("-", $value['from']);
				$ret =  $MonthLen - (int)$m[2]; 
				break ;  
			}
			elseif ( $Month == substr($value['to'],0,7) ){
				$m = explode("-", $value['to']);
				$ret =   (int)$m[2];   
				break ;  
			}
			elseif ( $Month > substr($value['from'],0,7) && $Month < substr($value['to'],0,7) ){
				$m = explode("-", $value['to']);
				$ret =  $MonthLen;   
				break ;  
			}
			else $ret = 0;   
		}
		else {                                                //   'from' & 'to'  are in the same month
			if ( $Month == substr($value['from'],0,7) ){
				$m1 = explode("-", $value['from']);
				$m2 = explode("-", $value['to']);
				$ret =  (int)$m2[2] - (int)$m1[2] + 1;   
				break ;  
			}
			else $ret = 0;   
		}
	}

echo $ret."	 дней<br>";
return $ret;

		
}

function IsInside($month)  {
	foreach ($this->NewAr  as $key => $value)
	{
		echo $value['from'] ." -->>-- ". $value['to']; echo "<br>";

		if ( strcmp($month, substr($value['from'],0,7) ) > 0  &&  strcmp(substr($value['to'],0,7), $month) > 0) return true;
		elseif ( $month == substr($value['from'],0,7) || substr($value['to'],0,7) == $month ) return true;
		else return false;
	}	
}


}// end of CLASS
?>