<?php 


function plategy_new($user_id){
open_connection();

if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
else $skript = 'cabinet.php';
	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
	}

?><fieldset  style="border: 1px solid #000099;  padding: 7px; "><legend  style="font-size:11px; font-weight:bold;"><font color="#FF0000">Платежи:</font> Новая приходная пачка  </legend>
<table  class="buttonprintview">
<?
$orderby = ' ORDER BY `idlevel_1` ASC' ;

	$result = sql_do("SELECT * FROM ".$userlogin."__kvartira".$orderby);
	$totalRows_result = mysql_num_rows($result);
	$j=0;
	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$adress=$ro['adress'];
		$nomer=$ro['nomer'];
		$napominanie = $ro['notes'];

		if(!$j || ($j && $dom!=$ro['idlevel_1']) ) {
			$dom = $ro['idlevel_1'];
			?><tr><th><?		echo $adress; ?></th><th>Сумма</th><th>Дата</th></tr><?php
		}
		
		?><tr><td>Кв.  № &nbsp;&nbsp;&nbsp;&nbsp;<?=$nomer;?></td><td>&nbsp;&nbsp;<input name="oplata" type="text" size="9">&nbsp;&nbsp;</td><td><?php makeform_from_date("dateto",date("20y-m-d"));  ?></td></tr>
<?php 
		$j++;
	}?></table><br></fieldset>

<br>
<?
close_connection(); 
}
?>