<?php 

class MyNewFieldsFromTable {
  
  var $table = ''; 
  var $userlogin = '';
  var $row;
  var $firstkeyname;
  var $database = '';
  var $limit_from = 0;
  var $limit_to = 30;
  var $mode = '';
  var $RowNumber = 0;
  var $LastCreated = 0;
  
  
  

  //----------- Constructor -------------------
	function MyNewFieldsFromTable($userlogin, $TablePostFix, $id, $get_mode) {
		$this->userlogin = $userlogin;
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
		  $valuesempty = str_replace("(''","(NULL", $valuesempty  );



  $q1 = "INSERT INTO  `".$this->table."`   (".$rest.") VALUES ".$valuesempty."";
  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");

	$this->LastCreated = mysql_insert_id ();
	$this->RowNumber = $this->LastCreated; 
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
  ?>
  <form action="<?=$skript;?>?mode=<?=$this->mode;?>" method="post" name="refresh">
  <table style="border: 1px solid #ccccff;   border-collapse:   collapse; ">
  <?
  $first_f = $row_q1_result['Field'];
  do {
  	
	if (!$row_q1_result['Comment']) $textprop = "font-size:8px; color:#999999; text-align:right;";  // Запрет вывода  служебных полей
	else 							$textprop = "font-size:10px; color:#0000FF; text-align:left;";  // Запрет вывода  служебных полей
	
	$query_fromCust="SELECT * FROM `".$this->table."` WHERE ".$first_f."=".$this->row;
	$Q_f = mysql_query($query_fromCust) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$query_fromCust."<BR>");
	$row_Q_f = mysql_fetch_assoc($Q_f);
	$totalRows_Q_f = mysql_num_rows($Q_f);

	 ?><tr><th style=" <?=$textprop?> ">&nbsp;<? echo $row_q1_result['Comment'] ? $row_q1_result['Comment'] : "";?>&nbsp;</th><td> <?php 
	 
	 
	 if ($row_q1_result['Type'] != 'text' && $row_q1_result['Comment'] == ''){ 
	 	?><input name="<?=$row_q1_result['Field'];?>" type="hidden"<?php 
		if ($row_q1_result['Key'] == 'PRI'){ 		 //echo ' disabled="true" readonly="true"';
	 		$this->firstkeyname = $row_q1_result['Field'];
		}
  		?> value="<?=$row_Q_f[$row_q1_result['Field']];?>" size="68"><?php 
	} 
	
	 elseif ($row_q1_result['Type'] != 'text' && $row_q1_result['Comment'] != ''){ 
	 	?><input name="<?=$row_q1_result['Field'];?>" type="text"<?php 
		if ($row_q1_result['Key'] == 'PRI'){ 		 //echo ' disabled="true" readonly="true"';
	 		$this->firstkeyname = $row_q1_result['Field'];
		}
  		?> value="<?=$row_Q_f[$row_q1_result['Field']];?>" size="68"><?php 
	} 
	
	
	else { 
  		?><textarea name="<?=$row_q1_result['Field'];?>" cols="77" rows="3" style="font-size:11px;  font-family:Verdana, Arial, Helvetica, sans-serif;"><?=$row_Q_f[$row_q1_result['Field']];?></textarea><?php 
	}
	?></td></tr><?
		
	} while ($row_q1_result = mysql_fetch_assoc($q1_result));
?>



   <tr><input name="firstkeyname" type="hidden" value="<?=$this->firstkeyname; ?>">
	<input name="tables" type="hidden" value="<?=$this->table; ?>">
	<input name="dopolnitelno" type="hidden" value="<?=$this->RowNumber; ?>">
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
  }


function RewiseFieldsFromTable ( )  
  { 
  $this->UpdateFieldsFromTable ( );
  $this->PutFieldsFromTable (  );
  }




}// end of CLASS
?>