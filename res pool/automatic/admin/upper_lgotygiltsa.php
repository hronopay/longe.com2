<?php 

if( $tablelevel  > 3)   {
	
	$idlevel[3] = $_POST['idlevel_3'];


//    Вытаскиваем номер из таблицы жильцов для заголовка
	$result2 = sql_do("SELECT * FROM ".$userlogin."_giltsy WHERE id = ".$idlevel[3]);
	while ($ro2 = mysql_fetch_array($result2, MYSQL_BOTH)){
		$idlevel_3 = 			$ro2['id'];
		$adress .= ", ".$ro2['familiya']." ".$ro2['imya']." ".$ro2['otchestvo'];
	}

	
	
?>
<fieldset  style="border: 1px solid #000099;  padding: 7px; "><legend  style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold;">Работа с жильцом <font color="#FF0000"><?php echo $adress;?></font></legend>
<?



	$result3 = sql_do("SELECT * FROM ".$userlogin."_lgotygiltsa WHERE idlevel_3 = ".$idlevel[3]." ORDER BY nazvanie ASC, id ASC");
	$j=1;
	$ii=1;
	$prov[0] = 0;
	$columns = 5;
?>
<table border="0">
 <tr><td>
<?
	while ($ro3 = mysql_fetch_array($result3, MYSQL_BOTH)){

		$nazvanie = $ro3['nazvanie']  ;
		$id=$ro3['id'];
		$napominanie = $ro3['notes'];
		if (1) 
		{
			Lg_Button($tablelevel, $napominanie, $skript."?mode=edit_lgotygiltsa", "post", "edit_lgotygiltsa", substr($nazvanie, 0, 20)  , $id, $idlevel[1], $idlevel[2], $idlevel[3]);
			if( ($ii%$columns) ) {?></td><td><? }
			if( !($ii%$columns) ) {  
				?></td></tr><tr><td><? 
			}
			$ii++;
		}
		$j++;
	}
?>  
 </td></tr>
</table>
<?
	Lg_Button($tablelevel, "", $skript."?mode=create_lgotygiltsa", "post", "create_lgotygiltsa","Создать льготу", 0, $idlevel[1], $idlevel[2], $idlevel[3]);
?>  
</fieldset>
<? 
}
?>