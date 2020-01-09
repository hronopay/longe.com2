<?php 
class Upper123 extends FFT 
{
var $tablev = 0;
var $adress = '';
var $NameOfObject = '';


    function Upper123($userlogin, $TablePostFix, $id, $get_mode) 
    {

		$this->userlogin = $userlogin;
		$this->TablePostFix = $TablePostFix;
		$this->mode = $get_mode;
		$this->RowNumber = $id;
		
		$this->makeTableName($userlogin, $TablePostFix); 
		$this->InitializeIdLevel(); 
		$this->InitializeParents(); 
		$this->InitializeChildren(); 
//   до сюда инициализация из родительского класса

		$this->tablev = $_POST['tablelevel'];
		
		
		$this->AllUpper();
    }



/**************************************************************************************/
  /*       */
  /*       */
  /*       */
/**************************************************************************************/
    function AllUpper() 
{
for ($i = 1; $i < $this->tablev; $i++)
	{
	$this->upper($i);
	}
}




/**************************************************************************************/
  /*       */
  /*       */
  /*       */
/**************************************************************************************/
    function upper($fieldsetnumber) 
{
#echo "fieldsetnumber = $fieldsetnumber  ----  ";
#echo "this->tablev = ".$this->tablev."<br>";



//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
if ($this->tablev - $fieldsetnumber < 2 )  //  Для последней (нижней) "шапки с кнопками" 
	{
	$DoNow = $this->userlogin."__".$this->TablePostFix;
	if ( !strstr( $this->mode, "_")  )$buttonMode = $this->mode;
	else {	$expmode = explode(  "_", $this->mode ); $buttonMode = $expmode[1];	}
	}
else{										//  Для промежуточной "шапки с кнопками" (варианты $this->tablev - $fieldsetnumber = 3-1, 4-1, 4-2 )
	$DoNow = $this->Parent[$fieldsetnumber];
	$expmode = explode(  "__", $this->Parent[$fieldsetnumber] );
	$buttonMode = $expmode[1];
	}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------


#echo "SELECT * FROM ".$this->Parent[$fieldsetnumber-1]." WHERE id = ".$this->idlevel['idlevel_'.$fieldsetnumber];




	$result = $this->sql_do("SELECT * FROM ".$this->Parent[$fieldsetnumber-1]." WHERE id = ".$this->idlevel['idlevel_'.$fieldsetnumber]);
	
while ($roP = mysql_fetch_array($result, MYSQL_BOTH)){
//--------------------------------------------------------------------//
	if (strstr( $DoNow, "kvartira")|| strstr( $DoNow, "tarif")|| strstr( $DoNow, "domvodoschet"))		{             			  //
		$this->adress=$roP['ulitsa'].", д. ".$roP['dom']. ( $roP['korpus'] ? ", корп. ".$roP['korpus'] : ""  ).( $roP['stroenie'] ? ", стр. ".$roP['stroenie'] : ""  )  ;
	}
	elseif 	(  strstr( $DoNow, "oplataja") )	{             				  //
		$this->adress .= " с ".	$roP['from_date'] . " на ".	$roP['juradr_srok']. " мес.";
	}
	elseif 	(strstr( $DoNow, "juradres") || strstr( $DoNow, "okvedooo") || strstr( $DoNow, "ooopersons") || strstr( $DoNow, "correspondence") || strstr( $DoNow, "files") ){                     //
		$this->adress .= " ".$roP['naimenovanie'];
	}
	elseif 	( strstr( $DoNow, "ippersons") ||strstr( $DoNow, "okvedip") ){                     //
		$this->adress .= "ИП ".$roP['familya'];
	}
	else										{                     //  
		$this->adress = "";
	}
//--------------------------------------------------------------------//  
}

  $q = "SHOW FULL FIELDS FROM ".$DoNow;
  $this->GetNameOfObject($q);



?><fieldset  class="bbcodes">
  <legend  style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold;">
	Работа с<?php if(($we=substr($this->NameOfObject,0,2)) == "сх" || $we=="ль" ) {echo "о ";} echo " ".$this->NameOfObject;?> 
	<font color="#FF0000"><?php echo $this->adress;?></font>
  </legend>
<?









//--------------------------------------------------------------------//
	if ( strstr( $DoNow, "__ooo"))		{             			  //
		$vybor = 'from_date'  ;
	}
	elseif (strstr( $DoNow, "__ooopersons"))		{             			  //
		$vybor = 'familya'  ;
	}
	elseif 	(strstr( $DoNow, "__ip"))	{             				  //
		$vybor = 'id'  ;
	}
	elseif 	(strstr($DoNow,"__prices")||strstr($DoNow,"__juradres")||strstr($DoNow,"shemarascheta")||strstr($DoNow,"primenenielgot")){ //
		$vybor = 'frdate_d'  ;
	}
	elseif 	(strstr($DoNow,"vodoschet")||strstr( $DoNow, "oplata")){ //
		$vybor = 'to_date'  ;
	}
	elseif 	(strstr($DoNow,"okvedip")||strstr( $DoNow, "okvedooo")){ //   
		$vybor = 'nomerokved'  ;
	}
	else 										{                     //
	$vybor = 'id'  ;
	}
//--------------------------------------------------------------------//
	$result = sql_do("SELECT * FROM ".$DoNow." WHERE idlevel_".$fieldsetnumber." = ".$this->idlevel['idlevel_'.$fieldsetnumber]." ORDER BY ".$vybor." ASC, id ASC");
	/* 
	echo  "ДЛЯ КНОПОК -> SELECT * FROM ".$this->userlogin."_".$this->TablePostFix." WHERE idlevel_".$fieldsetnumber." = ".$this->idlevel['idlevel_'.$fieldsetnumber]." ORDER BY ".$vybor." ASC, id ASC <br>";     
	*/

	$totalRows_result = mysql_num_rows($result);
	$j=1;
	$ii=1;
	$prov[0] = 0;
	$columns = 6;

?>
<table border="0">
 <tr><td>
<?

	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){


		$id=$ro['id'];
		$napominanie = $ro['notes'];

//--------------------------------------------------------------------//   
	if 	(strstr( $DoNow, "ippersons") || strstr( $DoNow, "ooopersons"))	{             				  //
	$TextKnopki = $ro['familya']." ".$ro['imya'] ." ".$ro['otchestvo'] ;
	$columns = 10;
	}
	elseif 	(strstr( $DoNow, "okvedip")||strstr( $DoNow, "okvedooo"))	{  				  // 
	$TextKnopki =  $ro['nomerokved'] ;
	$columns = 10;
	}
	elseif 	(strstr( $DoNow, "ip"))	{  				  // 
	$TextKnopki =  $ro['familya'] ;
	$columns = 10;
	}
	elseif 	(strstr( $DoNow, "ooo"))	{  				  // 
	$TextKnopki =  substr($ro['naimenovanie'],0,10)  ; /* $napominanie = $ro['telefon']; */
	}
	elseif 	(strstr($DoNow,"prices"))	{	  //
	$TextKnopki =  "с ". substr($ro['from_date'],0,7) ;
	}
	elseif 	(strstr($DoNow,"juradres"))	{	  //
	$TextKnopki =  "с ". $ro['frdate_d'] . " на " . $ro['juradr_srok']." мес" ;
	}
	elseif 	(strstr($DoNow,"correspondence"))	{	  //
	$TextKnopki =  "от ". $ro['receive_d']  ;
	}
	elseif 	(strstr($DoNow,"files"))	{	  //
	$TextKnopki =  $ro['docname']  ;
	}
	elseif 	(strstr($DoNow,"oplataja"))	{	  // payed
	$TextKnopki =  $ro['payed'] . " р. от ". $ro['to_date']  ;
	}
	else 										{                     //
	$TextKnopki = substr($ro['nazvanie'], 0, 20)   ;
	}
//--------------------------------------------------------------------//   
		





			$this->Uni_Button($fieldsetnumber+1, $napominanie, $skript."?mode=edit_".$buttonMode, "post", "edit_".$buttonMode, $TextKnopki, $id, $fieldsetnumber);
			
			if( ($ii%$columns) ) {?></td><td><? }
			if( !($ii%$columns) ) { ?></td></tr><tr><td><? 	}
			$ii++;
			$j++;
	}
?>  
 </td></tr>
</table>
<?
	if ($buttonMode=="okvedip" || $buttonMode=="okvedooo") 
		$this->Uni_Button($fieldsetnumber+1, "", $skript."?mode=massedit_".$buttonMode, "post", "create_".$buttonMode,"Создать", 0, $fieldsetnumber);
	elseif ($buttonMode=="files") 
		$this->Uni_Button($fieldsetnumber+1, "", $skript."?mode=upload_".$buttonMode, "post", "create_".$buttonMode,"Создать", 0, $fieldsetnumber);
	elseif ($buttonMode!="ippersons") 
		$this->Uni_Button($fieldsetnumber+1, "", $skript."?mode=edit_".$buttonMode, "post", "create_".$buttonMode,"Создать", 0, $fieldsetnumber);
	elseif ($j==1) 
		$this->Uni_Button($fieldsetnumber+1, "", $skript."?mode=edit_".$buttonMode, "post", "create_".$buttonMode,"Создать", 0, $fieldsetnumber);


?>
</fieldset>
<? 

}//  eof





function Uni_Button($tablelevel, $napominanie, $action, $method, $name, $TextKnopki, $dopolnitelno/* для RowNumber */, $fieldsetnumber){
?>
<form action="<?php echo $action ?>" method="<?php echo $method ?>" enctype="application/x-www-form-urlencoded" name="<?php echo $name ?>">
  <input name="dopolnitelno" type="hidden" value="<?php echo $dopolnitelno ;?>">
  <?php 
	$i = 1;
  foreach ($this->idlevel  as $key => $value) 
  		{ 
			if ($fieldsetnumber >= $i){ //   отсекаем $idlevel[0]
				?>  <input name="<?=$key?>" type="hidden" value="<?php echo $value ;?>"><?php 
				$i++;
			}
		}  

/* if ($napominanie) 					$class = ' class="small red foolsome"';
elseif ($TextKnopki == 'Создать') 	$class = ' class="small yellow awesome"';
else 								$class = ' class="small white foolsome"';
 */
if ($napominanie) 					$class = ' class="red mybut1"';
elseif ($TextKnopki == 'Создать') 	$class = ' class="yellow mybut1"';
else 								$class = ' class="mybut1"';

?>
  <input name="tablelevel" type="hidden" value="<?php echo $tablelevel ;?>">
  
<?php if ($this->get_userBrowser()=='IE'){ ?>  

  <input name="auto" type="submit" value="<?php echo $TextKnopki ?>" style="height:17px; font-size:10px;" title="<?php echo $napominanie ;?>" <?php if ($napominanie) echo ' class="bbcodes"'; ?>> <?php }  
  else { ?>
  <button  <?php echo $class;?> title="<?php echo $napominanie ;?>"><?php echo $TextKnopki ?></button>  <?php }
?>
</form>
<?
}   


 function  get_userBrowser() 
{
//echo $_SERVER['HTTP_USER_AGENT']."<br> <br><br><br>";
if ( strstr($_SERVER['HTTP_USER_AGENT'],"MSIE") ) {/* echo "IE"; */ return("IE");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Opera") ) {/* echo "FF"; */return("OP");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Gecko") ) {/* echo "FF"; */return("FF");}
elseif ( strstr($_SERVER['HTTP_USER_AGENT'],"Firefox") ) {/* echo "FF"; */return("FF");}
else return (0);
} 




// выполнение sql-запроса, передаваемого в $sql
function sql_do($sql) {
$result = mysql_query($sql)  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sql."<BR>123this->sql_do");;
if (!$result) {die();}
return $result;
}

function GetNameOfObject($sql)
{
  $q_result = mysql_query($sql) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sql."<BR>GetNameOfObject");
  $row_q_result = mysql_fetch_assoc($q_result);

  do { 
  		if     (  $row_q_result['Field'] == 'objrusname'    		) $rus_noo = $row_q_result['Comment'];
	 } while ($row_q_result = mysql_fetch_assoc($q_result));

  $rn = explode(" ", $rus_noo, 2);
  $this->NameOfObject = $rn[1];
}





// Для выборки из таблиц с логин-префиксом, у них должно быть поле не 'name', a 'nazvanie'
function GetFromLoginTable  (  $field , $value )  
{
 if(strstr($field,"__"))  
 {
   	$t=explode("__",$field); 
   	$qAuthor = "SELECT * FROM ".$this->userlogin."__".$t[1]." WHERE  id = ".$value;
	if($resAuthor = @mysql_query ($qAuthor)) {
		while ($row = mysql_fetch_assoc($resAuthor))
		{
		if ($row['id'] == $value) return $row['nazvanie'];
		}
	}
 }
}//eof


} // конец класса Spinach
?>
