<?php 
class HelpFFT  extends FFT  
{
var $mode = '';
var $skript = '';

    function HelpFFT($userlogin, $TablePostFix, $id, $get_mode) 
    {
		$this->SetScript(); 
		$this->mode = $get_mode;
			$this->userlogin = $userlogin;
			$this->TablePostFix = $TablePostFix;
			$this->RowNumber = $id;


		$this->SaveHelp(); 
		$this->ShowHelp(); 
	}//----------------------------------------------------------------------------------------------EOF


function SetScript()  {
  	if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  	$this->skript = 'adm_cabinet.php';
	else 												$this->skript = 'cabinet.php';
}//eof


function ShowHelp()  {
  	if (	$this->skript == 'adm_cabinet.php'	) {
			$this->makeTableName($this->userlogin, $this->TablePostFix); 
			$this->InitializeIdLevel(); 
			$this->InitializeParents(); 
			$this->InitializeChildren(); 

													//$this->ShowUserHelp();
													$this->ShowEditableHelp();
	}	
	else 											$this->ShowUserHelp();
}//eof


function SaveHelp()  {

  if ( isset($_POST['sohrhelp']) ) {
  
  
  	$sql = "SELECT * FROM `help` WHERE `table` = '".$_POST['table']."'";
  	$qSHOW_result = mysql_query($sql) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sql."<BR>HelpA3");
  	$row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);

	if( mysql_num_rows($qSHOW_result)) {

		$Q = "UPDATE `help` SET  `text` = '".$_POST['text']."'  WHERE `table` = '".$_POST['table']."'";
		mysql_query($Q) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$Q."<BR>");	
		}
	else {
		$Q = "INSERT INTO `help` (`id` ,`table` ,`text`) VALUES (NULL , '".$_POST['table']."', '".$_POST['text']."')";
		mysql_query($Q) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$Q."<BR>");	
		}
		
 }


}//eof






function ShowEditableHelp()  {
	$sql = "SELECT * FROM `help` WHERE `table` = '".$this->mode."'";
  	$qSHOW_result = mysql_query($sql) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sql."<BR>HelpA3");
  	$row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);

	echo "<p><a  href=\"javascript:inver('admhelp')\">Показать подсказки</a></p>
<div ID=\"admhelp\" style=\"display:none;\" >";
	if( mysql_num_rows($qSHOW_result)) echo '<fieldset style="border: 1px solid rgb(0, 153, 0); padding: 7px;"><legend style="font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 11px; font-weight: bold;">Подсказки</legend>';
?>
    <form action="<?=$this->skript;?>?mode=<?=$this->mode;?>" method="post" name="helprefresh">
<?

  do {
//	   echo $this->mode."<br>";
	   echo  nl2br($row_qSHOW_result['text'])."<br>end<p>&nbsp; </p><p>&nbsp; </p><p>&nbsp; </p>";
	   echo '<textarea name="text" cols="67" rows="10" style="font-size:11px; font-family:Verdana, Arial, Helvetica, sans-serif;">'
	   .$row_qSHOW_result['text'].   	   '</textarea>	   
	   <input name="table" type="hidden" value="'   	   
	   .$this->mode.   	   '" size="68">';	  
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));
?>
<input name="firstkeyname" type="hidden" value="<?=$this->firstkeyname; ?>">
	<input name="tables" type="hidden" value="<?=$this->table; ?>">
	<?php if($this->LastCreated){?><input name="dopolnitelno" type="hidden" value="<?=$this->LastCreated; ?>"><?php }  else {?>
	<input name="dopolnitelno" type="hidden" value="<?=$this->RowNumber; ?>"><?php }?>
<input name="tablelevel" type="hidden" value="<?=$this->TableLevel[0]?>">
<?php 
  foreach ($this->idlevel  as $key => $value) 
  		{  
		echo '<input name='.$key.' type="hidden" value='.$value.'>';
		}  


?>
    <input value="Сохранить" name="sohrhelp" type="submit"></form>
<?

	if( mysql_num_rows($qSHOW_result)) echo '</fieldset>';
	echo '<div>';
}//eof


function ShowUserHelp()  {
	$sql = "SELECT * FROM `help` WHERE `table` = '".$this->mode."'";
  	$qSHOW_result = mysql_query($sql) or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$sql."<BR>HelpA3");
  	$row_qSHOW_result = mysql_fetch_assoc($qSHOW_result);

	if( mysql_num_rows($qSHOW_result)) {
		echo "<p><a  href=\"javascript:inver('help')\">Показать подсказки</a></p>
<div ID=\"help\" style=\"display:none;\" >";
		echo '<fieldset style="border: 1px solid rgb(0, 153, 0); padding: 7px;"><legend style="font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 11px; font-weight: bold;">Подсказки</legend>';

  do {
//	   echo $this->mode."<br>";
	   echo nl2br($row_qSHOW_result['text']);
	 } while ($row_qSHOW_result = mysql_fetch_assoc($qSHOW_result));

		 echo '</fieldset>';
		echo '<div>';
	}

}//eof




} // ----------------------------------------------------------------------------------      конец класса
?>