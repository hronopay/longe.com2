<?php 
class DeleteFFT extends FFT 
{
var $ChildrenNames = array();
var $AllChildren = array();
var $TabLev = array();


    function DeleteFFT($userlogin, $TablePostFix, $id, $get_mode) 
    {

		$this->userlogin = $userlogin;
		$this->TablePostFix = $TablePostFix;
		$this->mode = $get_mode;
		$this->RowNumber = $id;
		
		$this->makeTableName($userlogin, $TablePostFix); 
		$this->InitializeIdLevel(); 
		$this->InitializeChildren(); 
//   до сюда инициализация из родительского класса
		$this->TabLev = $_POST['tablelevel']  -  1   ;

		$this->makeLastQuest($userlogin, $TablePostFix, $id, $get_mode); 
		$this->InitializeAllChildren(); 
		if (strstr($get_mode, 'confirmdelete_')) $this->DeleteAllChildren(); 




	
	}//eof


function makeLastQuest($userlogin, $TablePostFix, $id, $get_mode)  {

 if (!strstr($this->mode, 'confirmdelete')) 

 {  
  	if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
	else $skript = 'cabinet.php';

?>
<div style="
background-color:#FFFF00; 
color:#FF0000; 
width:300px; 
font-weight:bold; 
font-size:14px;  
padding: 15px; 
border-radius: 8px;
-moz-border-radius: 8px; 
-webkit-border-radius: 8px;" 
align="center" >
Подтверждаете ли Вы удаление выбранного объекта и всех его свойств (дочерних объектов)? Автоматическое восстановление после подтверждения невозможно.<br><br>

В случае отказа от удаления просто закройте это окно (вкладку).<br>
<br>Для удаления нажмите кнопку...

</div><br><br>
<div align="center">

<?
	$this->FFT_Button($skript."?mode=confirmdelete_".$this->TablePostFix,  $this->TablePostFix, "Подтверждаю: Уничтожить!" , $this->RowNumber ,  $this->TabLev /* id */ );
?></div>
<?
 
 }
 else {?>
<div style="background-color:#ccccFF; 
color:#FF0000; 
width:300px; 
font-weight:bold; 
font-size:14px;  
padding: 15px; 
border-radius: 8px;
-moz-border-radius: 8px; 
-webkit-border-radius: 8px;" 
" align="center">
Удаление выбранного объекта и всех его свойств (дочерних объектов)завершено.<br>
Вы можете закрыть это окно (вкладку).

</div> 
 
 <? }
 
}//eof









function DeleteAllChildren ()  {

$sql = "DELETE FROM `".$this->table."` WHERE `id` = ".$this->RowNumber;
sql_do($sql);


//		 echo $this->RowNumber."<br>"; 
//		 echo $this->table."<br>"; 
  foreach ($this->AllChildren  as $key => $value) 
  		{  
			//echo ">>>>>>>>  >>>>>>>>>> ".$value."<br>";
			$sql = "DELETE FROM `".$value."` WHERE  `idlevel_".$this->TabLev."` = ".$this->RowNumber;
			if ($value && $value != $this->userlogin)  sql_do($sql);
		}  
    

}//eof





function InitializeAllChildren ()  {
//	 	 echo "Дети: "; 
		  foreach ($this->Children  as $key => $value) 
  			{  
//			echo $this->userlogin.$value." <br>"; 
			$this->AllChildren[] = $this->userlogin.$value;
			if ($value) $this->GetChildrenChildren($this->userlogin.$value); 
			}  
//		  echo "<br><br>"; 

}//eof






function GetChildrenChildren ( $table )  {

  $qSHOW = "SHOW FULL FIELDS FROM ".$table." ";
  $qSHOW_result = mysql_query($qSHOW) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$qSHOW."<BR>qqA3");
  $row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);
  $totalRows_qSHOW_result = mysql_num_rows($qSHOW_result);

  do {
	   if (  $row_qSHOW_result['Field'] == 'children'  ) $ch = $row_qSHOW_result['Comment'];
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
  
$Children = explode(  " ", trim( str_replace("invisible","",$ch) ) );

// echo "GetChildrenChildren : "; 
  foreach ($Children  as $key => $value) 
  		{  if ($value && $value!=" "){
//			echo $this->userlogin.$value." "; 
			$this->AllChildren[] = $this->userlogin.$value;
			$this->GetChildrenChildren($this->userlogin.$value); 
		  }
		}  
//  echo " --->end<br><br>";  
 ///-----------------------------------------------------------------------------------------------------------------------------

}  //   EOF




} // конец класса Spinach
?>