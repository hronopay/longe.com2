<?php 

class FFT {
  
  var $table = ''; 
  var $TablePostFix = '';
  var $userlogin = '';
  var $row;
  var $firstkeyname;
  var $mode = '';
  var $RowNumber = 0;
  var $LastCreated = 0;
  var $idlevel = array();
  var $TableLevel  = array();
  var $Children = array();
  var $Parent = array();
  var $ButtonNames = array();
  
  

  //----------- Constructor -------------------
	function FFT($userlogin, $TablePostFix, $id, $get_mode) {
		
		$this->userlogin = $userlogin;
		$this->TablePostFix = $TablePostFix;
		$this->mode = $get_mode;
		$this->RowNumber = $id;
		
		$this->makeTableName($userlogin, $TablePostFix); 
		$this->InitializeIdLevel(); 
		$this->InitializeParents(); 
		$this->InitializeChildren(); 
		$this->CreateRow( $id );
		$this->RewiseAllRows($id);

	}
  //----------- END Constructor ----------------




/**************************************************************************************/
  /*  Инициализация идентификаторов принадлежности  - по уровням    */
  /*  Присваиваем элементам массива idlevel значения, взятые из     */
  /*  массива $_POST с ключом, содержащим подстроку 'idlevel'       */
/**************************************************************************************/
function InitializeIdLevel (  )  {

//  $this->idlevel['idlevel_0'] = 0;  //    Для  таблицы user

  foreach ($_POST  as $key => $value) 
  		{  
		if( strstr($key,'idlevel')  ) 		$this->idlevel[$key] = $value; 
		}  

/* 
echo "idlevel SSSSSSSSS". "<br>"; 
	foreach ($this->idlevel  as $key => $value) 
  		{  
		echo "idlevel ".$key  ." ->". $value . "<br>"; 
		}  
echo "idlevel EEEEEEEE". "<br>"; 

 */ 
}  //   EOF



/**************************************************************************************/
  /*  К основному значению названия таблицы добавляем персональ-    */
  /*  ный идентификатор юзера - его логин   через подчеркивание     */
/**************************************************************************************/
function makeTableName ( $userlogin, $TablePostFix )  {
	
	$this->table = $userlogin.'__'.$TablePostFix; 

}  //   EOF



/**************************************************************************************/
  /*  Инициализация названий таблиц        вышестоящих товарищей    */
  /*  Данные выбираются из комментариев к полям                     */
  /*  Функция OtherParents вызывает сама себя пока pa не пустое     */
/**************************************************************************************/
function InitializeParents (  )  {

  $qSHOW = "SHOW FULL FIELDS FROM ".$this->table." ";
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>qq1");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);
  $totalRows_qSHOW_result = mysql_num_rows($qSHOW_result);

  do {
	   if     (  $row_qSHOW_result['Field'] == 'parent'    ) $pa = $row_qSHOW_result['Comment'];
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
   
   
   
  $pa = trim( str_replace("invisible","",$pa) );
  if (!$pa) return;
  $pa = $this->userlogin.$pa;
  $this->Parent[] = $pa;
  $this->OtherParents ( $pa ) ;
  $this->Parent = array_reverse($this->Parent);

//-----------------------------------------------
/*   echo "Предки: "; 
  foreach ($this->Parent  as $key => $value) 
  		{  
		echo $value." "; 
		}  
  echo "<br>";  */
//-----------------------------------------------

}  //   EOF



/**************************************************************************************/
  /*  Инициализация названий таблиц        вышестоящих товарищей    */
  /*  Данные выбираются из комментариев к полям                     */
/**************************************************************************************/
function OtherParents ( $tablename )  {

  $qSHOW = "SHOW FULL FIELDS FROM ".$tablename." ";
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>qq2");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);
  $totalRows_qSHOW_result = mysql_num_rows($qSHOW_result);

  do {
	   if     (  $row_qSHOW_result['Field'] == 'parent'    ) $pa = $row_qSHOW_result['Comment'];
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));

  $pa = trim( str_replace("invisible","",$pa) );
  if (!$pa) return;
  $pa = $this->userlogin.$pa;
  $this->Parent[] = $pa;
  $this->OtherParents ( $pa ) ;

  return $pa;
}  //   EOF



/**************************************************************************************/
  /*  Инициализация названий таблиц        нижестоящих товарищей    */
  /*  Данные выбираются из комментариев к полям                     */
/**************************************************************************************/
function InitializeChildren (  )  {

  $qSHOW = "SHOW FULL FIELDS FROM ".$this->table." ";
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>qq3");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);
  $totalRows_qSHOW_result = mysql_num_rows($qSHOW_result);

  do {
	   if (  $row_qSHOW_result['Field'] == 'children'  ) $ch = $row_qSHOW_result['Comment'];
	   if (  $row_qSHOW_result['Field'] == 'level'  ) $le = $row_qSHOW_result['Comment'];
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
  
$this->Children = explode(  " ", trim( str_replace("invisible","",$ch) ) );
$this->TableLevel = explode(  " ", trim( str_replace("invisible","",$le) ) );
  foreach ($this->TableLevel  as $key => $value) 
  		{  
		if ($key) $this->ButtonNames[] = $value; 
		}  
/* 
  foreach ($this->ButtonNames  as $key => $value) 
  		{  
		echo "ButtonNames = ".$key."->".$value; echo "<br>";
		} */  
/* 
echo "<br>
<br>
<br>
<br>
-----------TableLevel------------".$this->TableLevel[0];
echo "<br>
<br>
<br>
<br>
"; */
//-----------------------------------------------------------------------------------------------------------------------------
/* echo "Дети: "; 
  foreach ($this->Children  as $key => $value) 
  		{  
		echo $value." "; 
		}  
  echo "<br>";  */
 ///-----------------------------------------------------------------------------------------------------------------------------

}  //   EOF



/**************************************************************************************/
  /*  Создание нового объекта - строки в обрабатываемой таблице     */
/**************************************************************************************/
function CreateRow( $id ) {

$adress='';
if (!$id)	{

// ------------------------    Вытаскиваем адрес  родительского объекта для установки в  поле adress


// Создать новый массив, используя один массив в качестве ключей, а другой в качестве соответствующих значений
  if ($this->Parent && $this->idlevel && $this->mode !='create_orgforma') $new_arr = array_combine($this->Parent, $this->idlevel);   



   if ($this->mode !='create_orgforma' && $this->mode !='create_lgoty') foreach ($new_arr  as $key => $value) 
  	{  
#		echo $key." -> ".$value." <br>"; 
		$qadr = "SELECT * FROM ".$key." WHERE id = ".$value;
//echo " <br>"; 
	  	$qadr_result = mysql_query($qadr) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qadr."<BR>q1");


		while ($ro = mysql_fetch_array($qadr_result, MYSQL_BOTH))
			{
			switch ($key)
				{
				case $this->userlogin."__orgforma" : 
					$adress = $ro['ulitsa'].", д. ".$ro['dom']. ( $ro['korpus'] ? ", корп. ".$ro['korpus'] : ""  ) .  ( $ro['stroenie'] ? ", стр. ".$ro['stroenie'] : ""  );  
					break;
	
				case $this->userlogin."__user" : 
					$adress .= $ro['organization']; 
					break;
	
				case $this->userlogin."__ooo" : 
					$adress .= ", ООО ".$ro['naimenovanie']; 
					break;
	
				case $this->userlogin."__ip" : 	
					$adress .= ", ИП ".$ro['familya']/* ." ".$ro['imya']." ".$ro['otchestvo'] */;
					break;
	
				case $this->userlogin."__juradres" : 	
					$adress .= " с ".	$ro['from_date'] . " на ".	$ro['juradr_srok']. " мес."; 
#					echo "-- ".$adress." --<br>";
					break;
	
				default : 	$adress .= ""; 
				}//  switch
			}// while
	}  // foreach

// ------------------------   Вытаскиваем адрес дома и квартиры для установки в 4-е поле жильца              END



	$q1 = "SHOW COLUMNS FROM ".$this->table." ";
	$q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");
	$row_q1_result = mysql_fetch_assoc($q1_result);
	$totalRows_q1_result = mysql_num_rows($q1_result);

	$Q = ""; 
	
	do {    
		$valuesempty[] = "'".$row_q1_result['Default']."', ";
		$Q = $Q."`".$row_q1_result['Field']."`, ";
		} while ($row_q1_result = mysql_fetch_assoc($q1_result));

	 
		// обрезаем последние 2 символа 
		 $rest = substr($Q, 0, strlen($Q)-2 );  

$i=1;
	foreach ($this->idlevel  as $key => $value) 
  		{  
			$valuesempty[$i] =  "'"  .  $value   .  "', "; 
			$i++;
		}  

	$valuesempty[0] =  "NULL, ";
	$valuesempty[$i] =  "'"  .  $adress   .  "', "  ;

	foreach ($valuesempty  as $key => $value) 
  		{  
		$vemp .=  $value ; 
		}  

		 $vemp = substr($vemp, 0, strlen($vemp)-2 );


		 $vemp = "(".$vemp.")";


   $q1 = "INSERT INTO  `".$this->table."`   (".$rest.") VALUES ".$vemp."";
  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>");

	$this->LastCreated = mysql_insert_id ();

	$this->mode = str_replace("create","edit",$this->mode);  //  Префикс возможен либо "create", либо "edit", затем  подчеркивание, и дом, квартира или жилец
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
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>qq4");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);
  $totalRows_qSHOW_result = mysql_num_rows($qSHOW_result);

  do {
	   if ($row_qSHOW_result['Key'] == 'PRI' || $row_qSHOW_result['Key'] == 'MUL'){
	   		 $this->firstkeyname = $row_qSHOW_result['Field'];
			 break;//    останавливае после первого, иначе возьмет из уникальных
		}
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
  

  do {
	  $this->row = $row_q1_result[$this->firstkeyname] 	/* $i */;
//	echo $id."<br>";
	
	 if (!$id)  $id = $this->LastCreated;				//  Если $id = 0, значит создается новый ряд, он последний (totalRows_q1_result), его и выводим на экран

//	echo $id." --<br>";
	 
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
  $q1_result = mysql_query($q1) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q1."<BR>qq5");
  $row_q1_result = mysql_fetch_assoc($q1_result);
  $totalRows_q1_result = mysql_num_rows($q1_result);
 
 ?>
<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
  <tr>
    <td id="ds_calclass"></td>
  </tr>
</table>
<script  language="JavaScript"  src="./js/calendar.js">
</script>

<table border="0" width="100%">
  <tr>
    <td><form action="<?=$skript;?>?mode=<?=$this->mode;?>" method="post" name="refresh">
        <table style="border: 0px solid #ff0000;   border-collapse: collapse; padding:15px; ">
        <?
  $first_f = $row_q1_result['Field'];
  do {
  	
	if (!$row_q1_result['Comment']) $textprop = "font-size:8px; color:#ffffff; text-align:right;";  // Запрет вывода  служебных полей
	elseif ($row_q1_result['Comment'] == 'invisible') $textprop = "font-size:8px; color:#ffffff; text-align:right;";  // Запрет вывода  служебных полей
	else 							$textprop = "font-size:10px; color:#0000FF; text-align:left;";  // Запрет вывода  служебных полей
	
	$query_fromCust="SELECT * FROM `".$this->table."` WHERE ".$first_f."=".$this->row;
	$Q_f = mysql_query($query_fromCust) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()." <br>шифр yyy54y<BR>".$query_fromCust."<BR>");
	$row_Q_f = mysql_fetch_assoc($Q_f);
	$totalRows_Q_f = mysql_num_rows($Q_f);
	
	$Comment = $row_q1_result['Comment'];
	if ($Comment=='uneditable') $Comment =  'Принадлежность'; 

	 ?>
        <tr>
          <th style=" <?=$textprop?> ">&nbsp;<? echo (  strstr($Comment,'invisible') || $Comment=='' || $Comment=='uneditable') ? "" : str_replace('*','<font color="#FF0000">*</font>',$Comment);?> &nbsp;</th>
          <td><?php 
	 
	 
	                              //   НЕВИДИМОЕ
	 if ($row_q1_result['Type'] != 'text' && $row_q1_result['Comment'] == ''){ 
	 	?>
            <input name="<?=$row_q1_result['Field'];?>" type="hidden"<?php 
		if ($row_q1_result['Key'] == 'PRI'){ 		 //echo ' disabled="true" readonly="true"';
	 		$this->firstkeyname = $row_q1_result['Field'];
		}
  		?> value="<?=$row_Q_f[$row_q1_result['Field']];?>" size="68">
            <? //=$row_Q_f[$row_q1_result['Field']];?>
            <?php 
	} 
	
	                              //   НЕВИДИМОЕ
	 elseif ($row_q1_result['Type'] != 'text' && strstr( $row_q1_result['Comment'],  'invisible' ) ){ 
	 	?>
            <input name="<?=$row_q1_result['Field'];?>" type="hidden"<?php 
		if ($row_q1_result['Key'] == 'PRI'){ 		 echo ' disabled="true" readonly="true"';
	 		$this->firstkeyname = $row_q1_result['Field'];
		}
  		?> value="<?=$row_Q_f[$row_q1_result['Field']];?>" readonly="true" size="68">
            <?php 
	} 
	
	
	                              //   НЕИЗМЕНЯЕМОЕ
	 elseif ($row_q1_result['Type'] != 'text' && $row_q1_result['Comment'] == 'uneditable'){ 
	 	?>
            <input name="<?=$row_q1_result['Field'];?>" type="text"
			<?php if ($row_q1_result['Key'] == 'PRI'){ 		 
					echo ' disabled="true" readonly="true"';
	 				$this->firstkeyname = $row_q1_result['Field'];
					}
  		?> 
		value="<?=$row_Q_f[$row_q1_result['Field']];?>" readonly="true" size="68" class="bbcodes">
            <?php 
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
	 	?>
            <input name="<?=$row_q1_result['Field'];?>" type="text"<?php 
		if ($row_q1_result['Key'] == 'PRI'){ 		 //echo ' disabled="true" readonly="true"';
	 		$this->firstkeyname = $row_q1_result['Field'];
		}
  		?> value="<?=$row_Q_f[$row_q1_result['Field']];?>"  size="68">
            <?php 
	} 
 */	
	
	                              //   ТЕКСТОВОЕ ПОЛЕ
	else { 
  		?>
            <textarea class="bbcodes" name="<?=$row_q1_result['Field'];?>" cols="65" rows="3" style="font-size:11px; font-family:Verdana, Arial, Helvetica, sans-serif;" wrap="soft"><?=$row_Q_f[$row_q1_result['Field']];?>
</textarea>
            <?php 
	}
	?></td>
          <td>&nbsp;</td>
        </tr>
        <?
		
	} while ($row_q1_result = mysql_fetch_assoc($q1_result));


?>
        <tr>
          <input name="firstkeyname" type="hidden" value="<?=$this->firstkeyname; ?>">
          <input name="tables" type="hidden" value="<?=$this->table; ?>">
          <?php if($this->LastCreated){?>
          <input name="dopolnitelno" type="hidden" value="<?=$this->LastCreated; ?>">
          <?php }  else {?>
          <input name="dopolnitelno" type="hidden" value="<?=$this->RowNumber; ?>">
          <?php }?>
          <?php 
  foreach ($this->idlevel  as $key => $value) 
  		{  
		echo '<input name='.$key.' type="hidden" value='.$value.'>';
		}  


?>
          <input name="tablelevel" type="hidden" value="<?=$this->TableLevel[0]?>">
          <td></td>
          <td><table border="0">
            <tr>
              <td  align="right"><input value="Сохранить" name="bsohr" type="submit"></td>
              <td ><input type="reset" value="Сбросить" name="B2">
      </form></td>
    <td   align="right" width="100%"><?php 
//	Применяем эту функцию просто для скорости и удобства, хотя она для вывода дочерних кнопок вообще-то. Последний параметр вобще лишний, 2й - тоже

	if($_GET['mode']=='edit_ip' || $_GET['mode']=='edit_ooo')
		$this->FFT_Button($skript."?mode=print_".$this->TablePostFix,  $this->TablePostFix, "Печать" , $this->RowNumber ,  $this->RowNumber /* id */ );

	$this->FFT_Button($skript."?mode=delete_".$this->TablePostFix,  $this->TablePostFix, "Уничтожить" , $this->RowNumber ,  $this->RowNumber /* id */ );
	?></td>
  </tr>
</table>
<td >&nbsp;</td>
</tr>
</table>
<!--p><font color="#FF0000">*</font>Десятичные значения вводятся с точкой, а не с запятой.<br>    Вы можете ввести напоминания для дальнейшей работы в поле "Напоминания" - кнопка данного объекта будет подсвечиваться и при наведении мыши будет показываться текст напоминания.</p-->
</td>
<td width="20%" valign="top"><?php 
/* 	
	foreach ($this->Children  as $key => $value)   		{  			echo " Children "	.$key ." -> ". $value ."<br>";		}  
	foreach ($this->ButtonNames  as $key => $value)   		{  		echo " ButtonNames ".$key ." -> ". $value ."<br>";		}  
 */
	
if ($this->Children  &&  $this->ButtonNames)        $new_array = /* @ */array_combine($this->Children, $this->ButtonNames); 

					#№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№
					#№№№№№№№№№№№№   Вывод кнопок детей	  №№№№№№№№№№№№№№№№№
					#№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№
if ($new_array) foreach ($new_array  as $key => $value) 
{  
	$trunc_value ='';
	if ($key) $trunc_key  = substr( $key, 2); 
	if($this->RowNumber && $key && $value)
		$this->FFT_Button($skript."?mode=".$trunc_key,  $trunc_key, $value , -1 /* (всеx) */,  $this->RowNumber /* id льготы. */ );
}  

	
	
	
?>
</td>
</tr>
</table>
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
// обработаем ПОСТданные для даты
		if ( isset($_POST['datefromYear']) &&  strstr( $row_q1_result['Field'], "from_date") ) $this->DatePostData($row_q1_result['Field'] , 'from' );
		elseif ( isset($_POST['datetoYear'])   &&  strstr( $row_q1_result['Field'], "to_date") ) $this->DatePostData($row_q1_result['Field'] , 'to' );
//-------------------------------


		if ( $row_q1_result['Field'] != $this->firstkeyname ) {
			/* echo */	$Q = "UPDATE `".$this->table."` SET  ".$row_q1_result['Field']." = '".$this->htmlquotchars($_POST[$row_q1_result['Field']])."'  WHERE  ".$_POST['firstkeyname']." = '".$_POST[$_POST['firstkeyname']]."' ";
//			echo '<br>';
			mysql_query($Q) or die ("<p><b>ERROR--0!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$Q."<BR>");	
			}
		} while ($row_q1_result = mysql_fetch_assoc($q1_result));

	}
  }//eof


function RewiseFieldsFromTable ( )  
  { 
  $this->UpdateFieldsFromTable ( );
  $this->PutFieldsFromTable (  );
  }




/* 
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


 */




//  ф-ия для создания выпадающего списка на основе таблиц со структурой полей id name value
function SelectDrop_2($table, $sortBYfield, $znachenie)
{

if ( strstr($table, "from_date") )
{
	$datefrom = $znachenie ? $znachenie : $this->make_date('from') ;
	 $this->makeform_from_date("datefrom", $datefrom );
}
elseif ( strstr($table, "to_date") )
{
	$dateto = $znachenie ? $znachenie : $this->make_date('to') ;
	$this->makeform_from_date("dateto",$dateto); 
}

elseif ( strstr($table, "_yn") )
{
//---------------------------------------------------------------------------------------------------
   $qAuthor = "SELECT * FROM yn ORDER BY ".$sortBYfield."";
 if($resAuthor = @mysql_query ($qAuthor)) {
	echo '<select class="bbcodes" name="'; echo $table; echo '"  class="input"><option value="0" selected>выбрать';
	while ($row = mysql_fetch_assoc($resAuthor))
	{
		if ($row['name'] == $znachenie)
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$row['name']."\" $selected_STR>".$row['name']."</option>");
		
	}// while
	echo '</select>';
 }//  if
//---------------------------------------------------------------------------------------------------
} //    elseif ( strstr($tabl......




elseif (substr($table, (   strlen($table)-2   ), 2) == "_d") 
{
//---------------------------------------------------------------------------------------------------
	echo '<input name="'.$table.'" type="text" size="10" class="bbcodes" value="'.$znachenie.'"  onclick="ds_sh(this);" readonly="readonly" style="cursor: text" title="кликнуть лев. кнопкой мыши">';
//---------------------------------------------------------------------------------------------------
} //    elseif ( strstr($tabl......



elseif(   (strstr($table,"dom")||strstr($table,"ulitca")||strstr($table,"korpus")||strstr($table,"kvartira")) && $_GET['mode'] !='edit_ippersons'   )
{
//---------------------------------------------------------------------------------------------------
	$text ='Вставлять перед номером слова <b>дом, корпус, квартира, улица</b> и т.п.<br>Слово <b>улица</b> можно не вставлять в некоторых отдельных случаях.<br>Например: дом 7<br> между словом и номером - 1 пробел';
	echo '<input name="'.$table.'" type="text"  size="68" class="bbcodes" value="'.$znachenie.'"   onmouseover="Tip(\''.$text.'\',   ABOVE, true, BALLOONSTEMOFFSET, 20, OFFSETX, 0, TITLE,\'ООО и Участники ООО\', FADEOUT, 800)" onmouseout="UnTip()">';
//---------------------------------------------------------------------------------------------------
} //    elseif ( strstr($tabl......


/* 
elseif(   (  strstr($table,"nalogovaya") ) && $_GET['mode'] =='edit_ip'   )
{
//---------------------------------------------------------------------------------------------------
	$text ='Вставлять перед номером слова <b>дом, корпус, квартира, улица</b> и т.п.<br>Слово <b>улица</b> можно не вставлять в некоторых отдельных случаях.<br>Например: дом 7<br> между словом и номером - 1 пробел';
	echo '<input name="'.$table.'" type="text"  size="68" class="bbcodes" value="'.$znachenie.'"   onmouseover="Tip(\''.$text.'\',   ABOVE, true, BALLOONSTEMOFFSET, 20, OFFSETX, 0, TITLE,\'ООО и Участники ООО\', FADEOUT, 800)" onmouseout="UnTip()">';
//---------------------------------------------------------------------------------------------------
} //    elseif ( strstr($tabl......

 */

elseif(strstr($table,"__"))   // Для выборки из таблиц с логин-префиксом, у них должно быть поле не 'name', a 'nazvanie'
{
   $t=explode("__",$table); 
//---------------------------------------------------------------------------------------------------
   $qAuthor = "SELECT * FROM ".$this->userlogin."__".$t[1]." ORDER BY ".$sortBYfield."";
 if($resAuthor = @mysql_query ($qAuthor)) {
	echo '<select class="bbcodes" name="'; echo $table; echo '"  class="input"><option value="0" selected>выбрать';
	while ($row = mysql_fetch_assoc($resAuthor))
	{
		if ($row['id'] == $znachenie)
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$row['id']."\" $selected_STR>".$row['nazvanie']."</option>");
/* 		if ($row['nazvanie'] == $znachenie)
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$row['nazvanie']."\" $selected_STR>".$row['nazvanie']."</option>");
 */		
	}
	echo '</select>';
 }
//---------------------------------------------------------------------------------------------------
 
}
 
 
elseif (strstr($table,"_")) // Для выборки из таблиц без префикса, у них должно быть поле  'name', a не 'nazvanie'
{
   $t=explode("_",$table); 
//---------------------------------------------------------------------------------------------------
   $qAuthor = "SELECT * FROM ".$t[1]." ORDER BY ".$sortBYfield."";
 if($resAuthor = @mysql_query ($qAuthor)) {
	echo '<select class="bbcodes" name="'; echo $table; echo '"  class="input"><option value="0" selected>выбрать';
	while ($row = mysql_fetch_assoc($resAuthor))
	{
		if ($row['value'] == $znachenie)
		{
			$selected_STR = " selected";
		} else {
			$selected_STR = "";
		}
		echo ("<option value=\"".$row['value']."\" $selected_STR>".$row['name']."</option>");
		
	}
	echo '</select>';
 }
//---------------------------------------------------------------------------------------------------
 
}
 else {	 	echo '<input name="'.$table.'" type="text" value="'.$znachenie.'"  size="68" class="bbcodes">'; }
 
 
} /*eof*/






//  ф-ия для создания кнопок для вывода всех объектов дочернего уровня
function FFT_Button($action,  $name, $TextKnopki, $dopolnitelno/* для -1  */, $idlevel_N /* для RowNumber */ ){

?>
<form action="<?php echo $action ?>" method="post" enctype="application/x-www-form-urlencoded" name="<?php echo $name ?>" <?php if ($TextKnopki == 'Уничтожить' || $TextKnopki == 'Печать') {?> target="_blank"<? } ?>>
  <input name="dopolnitelno" type="hidden" value="<?php echo $dopolnitelno ;?>">
  <?php 
	foreach ($this->idlevel  as $key => $value) 
  		{  
			?>
  <input name="<?php echo $key ;?>" type="hidden" value="<?php echo $value ;?>">
  <?php
			$lastkey = $key ;
		}  

//   создадим  последний параметр idlevel_N для кнопки, то есть следующий левел
	$lastkeynumber = substr($lastkey, 8);
	$lastkeynumber++;
	$tl = $this->TableLevel[0]+1;
	?>
  <input name="idlevel_<?=$lastkeynumber?>" type="hidden" value="<?=$idlevel_N?>">
  <input name="tablelevel" type="hidden" value="<?=$tl?>">
  <input name="auto" type="submit" value="<?php echo $TextKnopki ?>" class="mybut1">
</form>
<?




}   






// функции для работы с датами
function makeform_from_date($name,$date, $status='') {
//  $yearlist = array('2007' => '2007', '2008' => '2008', '2009' => '2009', '2010' => '2010');
  $yearlist = $this->MakeYearsArray();
  $monthlist = array('01' => 'Января',
                     '02' => 'Февраля',
                     '03' => 'Марта',
                     '04' => 'Апреля',
                     '05' => 'Мая',
                     '06' => 'Июня',
                     '07' => 'Июля',
                     '08' => 'Августа',
                     '09' => 'Сентября',
                     '10' => 'Октября',
                     '11' => 'Ноября',
                     '12' => 'Декабря'
                     );

  $daylist = array();
  for($i=1;$i<=31;$i++) {
  	if ($i<10) { $i='0'.$i; }
  	$daylist["$i"]="$i";
  }

  $date_array=explode("-",$date);
  if ($status == '') {
  	make_selected_list($name."Day",$daylist,$date_array[2]);
	make_selected_list($name."Month",$monthlist,$date_array[1]);
	make_selected_list($name."Year",$yearlist,$date_array[0]);
  }
  else {
  	echo $date_array[2] ." ". $monthlist[$date_array[1]] ." ". $date_array[0] . " года";
  }
}


function make_datetime($name) {
  if (isset($_POST['datetime'.$name])) return $_POST['datetime'.$name];
	$year = (isset($_POST['datetime'.$name.'Year'])) ? $_POST['datetime'.$name.'Year'] : date('Y');
	$month = (isset($_POST['datetime'.$name.'Month'])) ? $_POST['datetime'.$name.'Month'] : date('m');
	$day = (isset($_POST['datetime'.$name.'Day'])) ? $_POST['datetime'.$name.'Day'] : date('d');
	$hour = (isset($_POST['datetime'.$name.'Hour'])) ? $_POST['datetime'.$name.'Hour'] : date('H');
	$minute = (isset($_POST['datetime'.$name.'Minute'])) ? $_POST['datetime'.$name.'Minute'] : date('i');
	$second = (isset($_POST['datetime'.$name.'Second'])) ? $_POST['datetime'.$name.'Second'] : date('s');
	return $year."-".$month."-".$day." ".$hour.":".$minute.":".$second;
}

function make_date($name) {
  if (isset($_POST['date'.$name])) return $_POST['date'.$name];
	$year = (isset($_POST['date'.$name.'Year'])) ? $_POST['date'.$name.'Year'] : date('Y');
	$month = (isset($_POST['date'.$name.'Month'])) ? $_POST['date'.$name.'Month'] : date('m');
	$day = (isset($_POST['date'.$name.'Day'])) ? $_POST['date'.$name.'Day'] : date('d');
	return $year."-".$month."-".$day;
}


// ф-ия для создания select-листа
function make_selected_list($name, $list, $selected) {
echo '<select class="bbcodes" name="$name">';
foreach($list as $key => $value) {
	if ($key==$selected) {
		echo "<option  class=\"bbcodes\" value=\"$key\" selected>$value</option>";
	} else {
		echo "<option class=\"bbcodes\" value=\"$key\">$value</option>";
	}
}
echo "</select>";
}



// ф-ия для создания нужных ПОСТ-переменных
function DatePostData( $field , $dop)
{
if ($dop == 'from') $_POST[$field] =   $_POST['datefromYear']."-".$_POST['datefromMonth']."-".$_POST['datefromDay'];
elseif ($dop == 'to') $_POST[$field] =   $_POST['datetoYear']."-".$_POST['datetoMonth']."-".$_POST['datetoDay'];
}


// ф-ия для создания years
function MakeYearsArray()
{
//$k = array('2007' => '2007', '2008' => '2008', '2009' => '2009', '2010' => '2010');
$k = array();
for ($i=1900;$i<2100;$i++) $k[$i] = $i;
return $k;
}


function htmlquotchars($str){
if( strstr($str,"\"") ){
  '«»  &quot;  ';
  $i=2;
  $arr = explode("\"",$str);
  foreach ($arr as $value) {
	$i++;
	$quot = $i%2?'«':'»';
	$str2 .= $value.$quot;
#    echo "Value: $str2<br />\n";
  }
  $str2 = substr( $str2, 0, strlen($str2)-1);
  $str = str_replace ("\\","",$str2);
 }
return $str;
}


}// end of CLASS
?>
