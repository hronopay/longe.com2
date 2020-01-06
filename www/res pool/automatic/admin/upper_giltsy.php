<?php 

if( $tablelevel  > 2)   {

	$idlevel[2] = $_POST['idlevel_2'];


//    Вытаскиваем номер из таблицы квартир для заголовка
	$result2 = sql_do("SELECT * FROM ".$userlogin."_kvartira WHERE id = ".$idlevel[2]);
	while ($ro2 = mysql_fetch_array($result2, MYSQL_BOTH)){
		$kv_num = 			$ro2['nomer'];
		$adress .= ", кв. ".	$ro2['nomer'];
	}
?>
<fieldset  style="border: 1px solid #000099;  padding: 7px; "><legend  style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold;">Работа с квартирой <font color="#FF0000"><?php echo $adress;?></font></legend>
<?



	$result3 = sql_do("SELECT * FROM ".$userlogin."_giltsy WHERE idlevel_2 = ".$idlevel[2]." ORDER BY imya ASC, id ASC");
	//$totalRows_result = mysql_num_rows($result3);
	$j=1;
	$ii=1;
	$prov[0] = 0;
	$columns = 5;
?>
<table border="0">
 <tr><td>
<?
	while ($ro3 = mysql_fetch_array($result3, MYSQL_BOTH)){

		$fio = $ro3['fio']  ;
		$familiya = $ro3['familiya']  ;
		$imya = $ro3['imya']  ;
		$otchestvo = $ro3['otchestvo']  ;
		$id=$ro3['id'];
		$prov[$j] = $ro3['fio'];
		$napominanie = $ro3['notes'];
		if (1) 
		{
			Gl_Button($tablelevel, $napominanie, $skript."?mode=edit_giltsy", "post", "edit_giltsy", $familiya." ".$imya." ".$otchestvo, $id, $idlevel[1], $idlevel[2], $idlevel[3]);
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
	Gl_Button($tablelevel, "", $skript."?mode=create_giltsy", "post", "create_giltsy", "Создать жильца", 0, $idlevel[1], $idlevel[2], $idlevel[3]);
?>  
</fieldset>
<? 
}
?>
