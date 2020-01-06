<?php 

if( ($tablelevel = $_POST['tablelevel']) > 1)   {
	
	if($_GET['mode'] == 'kvartira') $idlevel[1] = $_POST['dopolnitelno'];
	else 							$idlevel[1] =  $_POST['idlevel_1'];

//    Вытаскиваем адрес из таблицы домов для заголовка
	$result = sql_do("SELECT * FROM ".$userlogin."_orgforma WHERE id = ".$idlevel[1]);
	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$adress=$ro['ulitsa'].", д. ".$ro['dom']. ( $ro['korpus'] ? ", корп. ".$ro['korpus'] : ""  ) .      ( $ro['stroenie'] ? ", стр. ".$ro['stroenie'] : ""  )  ;
	}
?>
<fieldset  style="border: 1px solid #000099;  padding: 7px; "><legend  style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold;">Работа с домом <font color="#FF0000"><?php echo $adress;?></font></legend>
<?




	$result = sql_do("SELECT * FROM ".$userlogin."_kvartira WHERE idlevel_1 = ".$idlevel[1]." ORDER BY nomer ASC, id ASC");
	$totalRows_result = mysql_num_rows($result);
	$j=1;
	$ii=1;
	$prov[0] = 0;
	$columns = 15;
	
?>
<table border="0">
 <tr><td>
<?
	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){

		$kv_numb = "кв. ".$ro['nomer']  ;
		$id=$ro['id'];
		$prov[$j] = $ro['nomer'];
		$napominanie = $ro['notes'];


		if (1) {
			Kv_Button($tablelevel, $napominanie, $skript."?mode=edit_kvartira", "post", "edit_kvartira", $kv_numb, $id, $idlevel[1], $idlevel[2], $idlevel[3]);
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
	Kv_Button($tablelevel, "", $skript."?mode=create_kvartira", "post", "create_kvartira", "Создать квартиру", 0, $idlevel[1], $idlevel[2], $idlevel[3]);
?>


</fieldset>
<? 
}
?>
