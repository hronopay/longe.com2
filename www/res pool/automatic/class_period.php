<?php 
class Period {
  
  var $Start = ''; 
  var $End = '';
  var $Length;

  //----------- Constructor -------------------
	function Period($Start, $End) {
		
		$this->Start = $Start;
		$this->End = $End;
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




function MakeLength (  )  {
		$this->Length = 0; 
}

function SetStart ( $val )  {
		$this->Start = $val; 
}
function SetEnd ( $val )  {
		$this->End = $val; 
}

function Validate (  )  {
		if ( strcmp($this->End, $this->Start) > 0) return true;
		else return false;
}

function Show (  )  {
		echo "Start ".$this->Start."<br>"; 
		echo "End ".$this->End."<br>"; 
		echo "<br>"; 
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

function IsInside ( $month )  {
		if ( strcmp($month, substr($this->Start,0,7) ) > 0  &&  strcmp(substr($this->End,0,7), $month) > 0) return true;
		elseif ( $month == substr($this->Start,0,7) || substr($this->End,0,7) == $month ) return true;
		else return false;
}


}// end of CLASS
?>