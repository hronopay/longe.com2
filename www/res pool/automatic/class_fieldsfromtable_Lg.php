<?php 

class FFT_3 {
  
  var $table = ''; 
  var $userlogin = '';
  var $row;
  var $firstkeyname;
  var $mode = '';
  var $RowNumber = 0;
  var $LastCreated = 0;
  var $idlevel_1 = 0;
  var $idlevel_2 = 0;
  var $idlevel_3 = 0;
  var $TablePostFix = '';
  
  
  

  //----------- Constructor -------------------
	function FFT_3($userlogin, $TablePostFix, $id, $get_mode, $idlevel_1, $idlevel_2, $idlevel_3) {
		
		$this->userlogin = $userlogin;
		$this->TablePostFix = $TablePostFix;
		$this->idlevel_3 = $idlevel_3;
		$this->idlevel_2 = $idlevel_2;
		$this->idlevel_1 = $idlevel_1;
		$this->mode = $get_mode;
		$this->RowNumber = $id;
		
		$this->makeTableName($userlogin, $TablePostFix); 
		$this->CreateRow( $id );
		$this->RewiseAllRows($id);

	}
  //----------- END Constructor ----------------







function makeTableName ( $userlogin, $TablePostFix )  {
		$this->table = $userlogin.'_'.$TablePostFix; 
}

function CreateRow( $id ) {
if (!$id)	{

// ------------------------    Вытаскиваем адрес дома и квартиры для установки в 4-е поле жильца
	$qadr = "SELECT * FROM ".( str_replace( $this->TablePostFix, "orgforma",    $this->table)     )." WHERE id = ".$this->idlevel_1;
  	$qadr_result = mysql_query($qadr) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qadr."<BR>");
	while ($ro = mysql_fetch_array($qadr_result, MYSQL_BOTH)){
		$adress=$ro['ulitsa'].", д. ".$ro['dom']. ( $ro['korpus'] ? ", корп. ".$ro['korpus'] : ""  ) .      ( $ro['stroenie'] ? ", стр. ".$ro['stroenie'] : ""  )  ;
	}

	$qadr = "SELECT * FROM ".( str_replace($this->TablePostFix, "persons",    $this->table)     )." WHERE id = ".$this->idlevel_2;
  	$qadr_result = mysql_query($qadr) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qadr."<BR>");
	while ($ro1 = mysql_fetch_array($qadr_result, MYSQL_BOTH)){
		$adress .= ", кв. ".$ro1['nomer'];
	}

	$qadr = "SELECT * FROM ".( str_replace($this->TablePostFix, "giltsy",    $this->table)     )." WHERE id = ".$this->idlevel_3;
  	$qadr_result = mysql_query($qadr) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qadr."<BR>");
	while ($ro2 = mysql_fetch_array($qadr_result, MYSQL_BOTH)){
		$adress .= ", ".$ro2['familiya']." ".$ro2['imya']." ".$ro2['otchestvo'];
	}
// ------------------------   Вытаскиваем адрес дома и квартиры для установки в 4-е поле жильца              END



	$q1 = "SHOW COLUMNS FROM ".$this->table." ";
	$q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");
	$row_q1_result = mysql_fetch_assoc($q1_result);
	$totalRows_q1_result = mysql_num_rows($q1_result);

	$Q = ""; $valuesempty = "";
	do {    
		$valuesempty = $valuesempty."'', ";
		$Q = $Q."`".$row_q1_result['Field']."`, ";
		} while ($row_q1_result = mysql_fetch_assoc($q1_result));
		 
		 
		 $rest = substr($Q, 0, strlen($Q)-2 );
		 $valuesempty = substr($valuesempty, 0, strlen($valuesempty)-2 );
		 $valuesempty = "(".$valuesempty.")";
		  $valuesempty = str_replace(   "('', '', '', '', ''" ,  "(NULL, '"   .$this->idlevel_1.   "', '"  .$this->idlevel_2.   "', '"  .$this->idlevel_3.   "', '".$adress."'"       , $valuesempty  );



  $q1 = "INSERT INTO  `".$this->table."`   (".$rest.") VALUES ".$valuesempty."";
  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");

	$this->LastCreated = mysql_insert_id ();
//	$this->RowNumber = $this->LastCreated; 
	$this->mode = str_replace("create","edit",$this->mode);  //  Префикс возможен либо "create", либо "edit" - подчеркивание, и дом, квартира или жилец
  }
}


/**************************************************************************************/
  /*  Вывод рядов для редактирования из таблицы table    */
/**************************************************************************************/
function RewiseAllRows ( $id )  
  {
  $i = 1;
  
  $q1 = "SELECT * FROM `".$this->table."` ORDER BY `id` ASC";
  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");
  $row_q1_result = mysql_fetch_assoc($q1_result);
  $totalRows_q1_result = mysql_num_rows($q1_result);

//	echo $totalRows_q1_result."=totalRows_q1_result<br>";
  
  $qSHOW = "SHOW FULL FIELDS FROM ".$this->table." ";
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);
  $totalRows_qSHOW_result = mysql_num_rows($qSHOW_result);

  do {
	   if ($row_qSHOW_result['Key'] == 'PRI' || $row_qSHOW_result['Key'] == 'MUL') $this->firstkeyname = $row_qSHOW_result['Field'];
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
  

  do {
	 $this->row = $row_q1_result[$this->firstkeyname] 	/* $i */;
	
//	echo $id."<br>";
	
	 if (!$id)  $id = $this->LastCreated;				//  Если $id = 0, значит создается новый ряд, он последний (totalRows_q1_result), его и выводим на экран

//	echo $id."<br>";
	 
	 if ($row_q1_result['id'] == $id) $this->RewiseFieldsFromTable();    	//  Выводит  строку таблицы с номером $id
	 $i++;
	 } while ($row_q1_result = mysql_fetch_assoc($q1_result));
  
  }
	

/**************************************************************************************/
  /*  Вывод полей для редактирования из таблицы table    */
/**************************************************************************************/
function PutFieldsFromTable ( )  
  {
  
  	if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
	else $skript = 'cabinet.php';

  $q1 = "SHOW FULL FIELDS FROM ".$this->table." ";
  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");
  $row_q1_result = mysql_fetch_assoc($q1_result);
  $totalRows_q1_result = mysql_num_rows($q1_result);
 
 ?><table border="0" width="100%">
  <tr><td><?php 
  
  if(!$this->RowNumber) echo "Создание новой льготы жильца<br>";
  else 					echo "Редактирование льготы жильца<br>";
	?></td><td><?php 
	//if($this->RowNumber) $this->Lg_Button($skript."?mode=lgotygiltsa", 'post', 'lgotygiltsa', 'Льготы Жильца', -1 /* id жильца (все) */, $this->idlevel_1/* id дома */, $this->RowNumber /* id кварт. */ );

	?> </td></tr></table>
<?
  
?>
  <form action="<?=$skript;?>?mode=<?=$this->mode;?>" method="post" name="refresh">
  <table style="border: 1px solid #ccccff;   border-collapse:   collapse; ">
  <?
  $first_f = $row_q1_result['Field'];
  do {
  	
	if (!$row_q1_result['Comment']) $textprop = "font-size:8px; color:#ffffff; text-align:right;";  // Запрет вывода  служебных полей
	elseif ($row_q1_result['Comment'] == 'invisible') $textprop = "font-size:8px; color:#ffffff; text-align:right;";  // Запрет вывода  служебных полей
	else 							$textprop = "font-size:10px; color:#0000FF; text-align:left;";  // Запрет вывода  служебных полей
	
	$query_fromCust="SELECT * FROM `".$this->table."` WHERE ".$first_f."=".$this->row;
	$Q_f = mysql_query($query_fromCust) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query_fromCust."<BR>");
	$row_Q_f = mysql_fetch_assoc($Q_f);
	$totalRows_Q_f = mysql_num_rows($Q_f);
	
	$Comment = $row_q1_result['Comment'];
	if ($Comment=='uneditable') $Comment =  'Адрес'; 

	 ?>
	 <tr><th style=" <?=$textprop?> ">&nbsp;<? echo ($Comment=='invisible' || $Comment=='' || $Comment=='uneditable') ? "" : $Comment;?>
	 &nbsp;</th><td> 
	 <?php 
	 
	 
	                              //   НЕВИДИМОЕ
	 if ($row_q1_result['Type'] != 'text' && $row_q1_result['Comment'] == ''){ 
	 	?><input name="<?=$row_q1_result['Field'];?>" type="hidden"<?php 
		if ($row_q1_result['Key'] == 'PRI'){ 		 //echo ' disabled="true" readonly="true"';
	 		$this->firstkeyname = $row_q1_result['Field'];
		}
  		?> value="<?=$row_Q_f[$row_q1_result['Field']];?>" size="68"><?php 
	} 
	
	                              //   НЕВИДИМОЕ
	 elseif ($row_q1_result['Type'] != 'text' && $row_q1_result['Comment'] == 'invisible'){ 
	 	?><input name="<?=$row_q1_result['Field'];?>" type="hidden"<?php 
		if ($row_q1_result['Key'] == 'PRI'){ 		 echo ' disabled="true" readonly="true"';
	 		$this->firstkeyname = $row_q1_result['Field'];
		}
  		?> value="<?=$row_Q_f[$row_q1_result['Field']];?>" readonly="true" size="68"><?php 
	} 
	
	
	                              //   НЕИЗМЕНЯЕМОЕ
	 elseif ($row_q1_result['Type'] != 'text' && $row_q1_result['Comment'] == 'uneditable'){ 
	 	?><input name="<?=$row_q1_result['Field'];?>" type="text"<?php 
		if ($row_q1_result['Key'] == 'PRI'){ 		 echo ' disabled="true" readonly="true"';
	 		$this->firstkeyname = $row_q1_result['Field'];
		}
  		?> value="<?=$row_Q_f[$row_q1_result['Field']];?>" readonly="true" size="68"><?php 
	} 
	
	
	                              //   ОБЫЧНОЕ с выпадающим меню
/* 	 elseif ($row_q1_result['Type'] != 'text' && $row_q1_result['Comment'] != '' && $row_q1_result['Field'] == 'lgoty'){ 
	 	if ($row_q1_result['Key'] == 'PRI'){ $this->firstkeyname = $row_q1_result['Field'];	}
		$this->SelectDrop_1($row_q1_result['Field'],   "id_".$row_q1_result['Field'],   $row_Q_f[$row_q1_result['Field']]   );
	} 
 */	                              //   ОБЫЧНОЕ с выпадающим меню
	 elseif ($row_q1_result['Type'] != 'text' && $row_q1_result['Comment'] != ''){ 
	 	if ($row_q1_result['Key'] == 'PRI'){ $this->firstkeyname = $row_q1_result['Field'];	}
		
		$this->SelectDrop_2($row_q1_result['Field'],   "id", /* "id_".$row_q1_result['Field'],  */  $row_Q_f[$row_q1_result['Field']]   );
	} 
	
	
	                              //   ОБЫЧНОЕ
/* 	 elseif ($row_q1_result['Type'] != 'text' && $row_q1_result['Comment'] != ''){ 
	 	?><input name="<?=$row_q1_result['Field'];?>" type="text"<?php 
		if ($row_q1_result['Key'] == 'PRI'){ 		 //echo ' disabled="true" readonly="true"';
	 		$this->firstkeyname = $row_q1_result['Field'];
		}
  		?> value="<?=$row_Q_f[$row_q1_result['Field']];?>"  size="68"><?php 
	} 
 */	
	
	                              //   ТЕКСТОВОЕ ПОЛЕ
	else { 
  		?><textarea name="<?=$row_q1_result['Field'];?>" cols="77" rows="3" style="font-size:11px; font-family:Verdana, Arial, Helvetica, sans-serif;"><?=$row_Q_f[$row_q1_result['Field']];?></textarea><?php 
	}
	?></td></tr><?
		
	} while ($row_q1_result = mysql_fetch_assoc($q1_result));


?>

   <tr><input name="firstkeyname" type="hidden" value="<?=$this->firstkeyname; ?>">
	<input name="tables" type="hidden" value="<?=$this->table; ?>">
	<?php if($this->LastCreated){?><input name="dopolnitelno" type="hidden" value="<?=$this->LastCreated; ?>"><?php }  else {?>
	<input name="dopolnitelno" type="hidden" value="<?=$this->RowNumber; ?>"><?php }?>
	<input name="idlevel_1" type="hidden" value="<?=$this->idlevel_1; ?>">
	<input name="idlevel_2" type="hidden" value="<?=$this->idlevel_2; ?>">
	<input name="idlevel_3" type="hidden" value="<?=$this->idlevel_3; ?>">
    <td  align="right"><input value="Сохранить" name="bsohr" type="submit"></td>
    <td ><input type="reset" value="Сбросить" name="B2"></td>
   </tr>
  </table></form><p>&nbsp;</p>
    Вы можете ввести напоминания для дальнейшей работы в поле "Напоминания" - кнопка данного объекта будет подсвечиваться и при наведении мыши будет показываться текст напоминания.
	<?
                        	
  }


/**************************************************************************************/
/*  Обновление полей  таблицы ".$this->table." ( применять вместе с PutFieldsFromCasual($this->row) ) */
/**************************************************************************************/
function UpdateFieldsFromTable (  )  
  { 
  if ( isset($_POST['bsohr']) ) {
	$q1 = "SHOW COLUMNS FROM ".$this->table." ";
	$q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");
	$row_q1_result = mysql_fetch_assoc($q1_result);
	$totalRows_q1_result = mysql_num_rows($q1_result);

	do {    
		$Q = "UPDATE `".$this->table."` SET  ".$row_q1_result['Field']." = '".$_POST[$row_q1_result['Field']]."'  WHERE  ".$_POST['firstkeyname']." = ".$_POST[$_POST['firstkeyname']]." ";
		if ( $row_q1_result['Field'] != $this->firstkeyname ) mysql_query($Q) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$Q."<BR>");	
		} while ($row_q1_result = mysql_fetch_assoc($q1_result));

	}
	/* 
 	  $fio = $_POST['familiya'];
	 $fio .= " ".$_POST['imya'];
	 $fio .= " ".$_POST['otchestvo'];
 		$Qfio = "UPDATE `".$this->table."` SET `fio` = '$fio' WHERE ".$_POST['firstkeyname']." = ".$_POST[$_POST['firstkeyname']]." ";
		if ($fio != '') mysql_query($Qfio) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$Qfio."<BR>");	
 
 */ 
  }


function RewiseFieldsFromTable ( )  
  { 
  $this->UpdateFieldsFromTable ( );
  $this->PutFieldsFromTable (  );
  }




//  ф-ия для создания кнопок для ЖИЛЬЦОВ
function Gl_Button($action, $method, $name, $TextKnopki, $idlevel_2/* для RowNumber */, $idlevel_1, $idlevel_3 ){
?>
<form action="<?php echo $action ?>" method="<?php echo $method ?>" enctype="application/x-www-form-urlencoded" name="<?php echo $name ?>">
<input name="idlevel_3" type="hidden" value="<?php echo $idlevel_3 ;?>">
<input name="idlevel_1" type="hidden" value="<?php echo $idlevel_1 ;?>">
<input name="idlevel_2" type="hidden" value="<?php echo $idlevel_2 ;?>">
<input name="auto" type="submit" value="<?php echo $TextKnopki ?>" style="height:17px; font-size:10px; ">
</form>
<?
}







//  ф-ия для создания выпадающего списка на основе таблиц со структурой полей id name value
function SelectDrop_1($table, $sortBYfield, $znachenie)
{
  $qAuthor = "SELECT * FROM ".$table." ORDER BY ".$sortBYfield."";
//  $resAuthor = @mysql_query ($qAuthor) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qAuthor."<BR>");

 if($resAuthor = @mysql_query ($qAuthor)) {
	echo '<select name="'; echo $table; echo '" style="width:300px;" class="input"><option value="0" selected>выбрать';
	while ($row = mysql_fetch_assoc($resAuthor))
	{
		if ($row[$table.'_name'] == $znachenie)
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$row[$table.'_name']."\" $selected_STR>".$row[$table.'_name']."</option>");
		
	}
	echo '</select>';
}
else {
	 	echo '<input name="'.$table.'" type="text" value="'.$znachenie.'"  size="68">';
}


} // end of function SelectDrop_1



//  ф-ия для создания выпадающего списка на основе таблиц со структурой полей id name value
function SelectDrop_2($table, $sortBYfield, $znachenie)
{
   $qAuthor = "SELECT * FROM ".$table." ORDER BY ".$sortBYfield."";
//  $resAuthor = @mysql_query ($qAuthor) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qAuthor."<BR>");

 if($resAuthor = @mysql_query ($qAuthor)) {
	echo '<select name="'; echo $table; echo '"  class="input"><option value="0" selected>выбрать';
	while ($row = mysql_fetch_assoc($resAuthor))
	{
		if ($row['name'] == $znachenie)
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$row['name']."\" $selected_STR>".$row['name']."</option>");
		
	}
	echo '</select>';
 }
 else {
	 	echo '<input name="'.$table.'" type="text" value="'.$znachenie.'"  size="68">';
 }
} /*eof*/







//  ф-ия для создания кнопок для ЖИЛЬЦОВ
function Lg_Button($action, $method, $name, $TextKnopki, $dopolnitelno/* для RowNumber */, $idlevel_1, $idlevel_2 ){
?>
<form action="<?php echo $action ?>" method="<?php echo $method ?>" enctype="application/x-www-form-urlencoded" name="<?php echo $name ?>">
<input name="dopolnitelno" type="hidden" value="<?php echo $dopolnitelno ;?>">
<input name="idlevel_1" type="hidden" value="<?php echo $idlevel_1 ;?>">
<input name="idlevel_2" type="hidden" value="<?php echo $idlevel_2 ;?>">
<input name="auto" type="submit" value="<?php echo $TextKnopki ?>" style="height:17px; font-size:10px; ">
</form>
<?
}   



}// end of CLASS
?>