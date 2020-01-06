<?php
//echo $_SERVER['SCRIPT_NAME'];
if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php")) $skript = 'adm_cabinet.php';
else $skript = 'cabinet.php';
?><fieldset class="bbcodes"><legend>Кабинет</legend>
<table>
	<tr valign=top>
		<td>
<!--li><a href="<?=$skript;?>?mode=current_stats">Текущая статистика по звонкам</a><br>
<li><a href="<?=$skript;?>?mode=data">Личные данные</a><br>
<li><a href="<?=$skript;?>?mode=changepass">Сменить пароль</a><br>
<li><a href="<?=$skript;?>?mode=payouts">Платежи</a><br>
<li><a href="<?=$skript;?>?mode=balance">Баланс</a><br>
<li><a href="<?=$skript;?>?mode=docs">Документы</a><br>
<li><a href="<?=$skript;?>?mode=payshortchange">Изменение логики услуги</a><br>
<li><a href="<?=$skript;?>?mode=b_requesites">Платежные реквизиты</a><br>
<li><a href="<?=$skript;?>?mode=payshort">Оплата подключения номера</a><br-->

<?php 
SubButtonMultiBrowser($skript,"ticket","Обратная связь","mybut1");
SubButtonMultiBrowser($skript,"color","Настройки","mybut1");
SubButtonMultiBrowser('logout.php',"","Выход","red mybut1");
?>

		</td>
	</tr>
</table>
</fieldset>
<br>
<fieldset class="bbcodes"><legend>База Данных</legend>
<?
$idlevel[1] =  $_POST['idlevel_1'] ? $_POST['idlevel_1'] : 1 ;

$mode = getvar('mode');
if (!isset($mode)) $mode="user";

 $get_mode = explode("_", $mode);

if ($get_mode[0] == "create" || $get_mode[0] == "edit")  				$mode = $get_mode[1]; 
else 																	$mode = $get_mode[0]; 	

//if ($mode=='ooo'||$mode=='primenenielgot') 							$mode='ooo';       
if ($mode=='user' || $mode=='ooo' ||$mode=='ip'|| strstr($mode,'ippersons')|| strstr($mode,'ooopersons')|| strstr($mode,'prices'))	$mode='user';
else 																																	$mode='user';
 
/* 
Uni_Button(1, "", $skript."?mode=orgforma", "post", "orgforma", "Клиенты", 1, $idlevel);
Uni_Button(1, "", $skript."?mode=user", "post", "user", "Общие", 1, $idlevel);
 */
LeftColumnShow($mode);
?></fieldset><br>
<?

#-------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------    function LeftColumnShow()      ------------------------------------------------------  
#-------------------------------------------------------------------------------------------------------------------------------------
function LeftColumnShow($mode) {

//$idlevel = array();
$idlevel[1] =  $_POST['idlevel_1'] ? $_POST['idlevel_1'] : 1 ;


if (strstr($_SERVER['SCRIPT_NAME'], "/adm_cabinet.php"))  $skript = 'adm_cabinet.php';
else $skript = 'cabinet.php';

open_connection();
	$id=USER_ID;
 	$result = sql_do("SELECT * FROM users_jkh WHERE user_id='$id'");
 	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		$userlogin=$ro['userlogin'];
	}

if( 1 ){

$orderby = ($mode=='ooo')? ' ORDER BY `nazvanie` ASC' : '' ;

	$result = sql_do("SELECT * FROM ".$userlogin."__".$mode.$orderby);
	$totalRows_result = mysql_num_rows($result);
	$j=0;
	while ($ro = mysql_fetch_array($result, MYSQL_BOTH)){
		($mode=='user')
		? 
		$adress=$ro['organization']
		: 
		$adress=$ro['ulitsa'].", д. ".$ro['dom']. ( $ro['korpus'] ? ", корп. ".$ro['korpus'] : ""  ) .      ( $ro['stroenie'] ? ", стр. ".$ro['stroenie'] : ""  )  
		;
		
		
		$idlevel[1] =  $id = $ro['id'];
		$napominanie = $ro['notes'];
			$j=0;


$tablelevel =1;
		Uni_Button($tablelevel, $napominanie, $skript."?mode=edit_".$mode, "post", "edit_".$mode, "Партнер", $id,  $idlevel);

?>
<fieldset   class="bbcodes"><legend  style="font-size:11px; font-weight:bold;"><font color="#FF0000"><?php /* if($mode!='user') echo "Клиенты"; else */ echo "Клиенты"; ?></font></legend>
<?


$tablelevel =2;
$TextKnopki = ($mode=='user')? 'ООО' : 'Квартиры' ;
$ModeKnopki = ($mode=='user')? 'ooo' : 'kvartira' ;
		Uni_Button($tablelevel, "", $skript."?mode=".$ModeKnopki, "post", $ModeKnopki, $TextKnopki, $id, $idlevel);

$tablelevel =2;
$TextKnopki = ($mode=='user')? 'ИП' : 'Квартиры' ;
$ModeKnopki = ($mode=='user')? 'ip' : 'kvartira' ;
		Uni_Button($tablelevel, "", $skript."?mode=".$ModeKnopki, "post", $ModeKnopki, $TextKnopki, $id, $idlevel);


		
		
		
		
		

	}
$tablelevel =1;
$TextKnopkiCreate = ($mode=='ooo')? 'ООО' : 'ИП' ;
//	Button($tablelevel, "", $skript."?mode=create_orgforma", "post", "create_orgforma", "Создать ДОМ", 0,           0,0,0);
if($mode!='user')	Uni_Button($tablelevel, "", $skript."?mode=create_".$mode, "post",  "create_". $mode, "Создать ".$TextKnopkiCreate, 0,  $idlevel);
?>
</fieldset>



<?

}




close_connection();

}

?>

<fieldset  class="bbcodes"><legend>Юрадрес</legend>
<?php 
SubButtonMultiBrowser($skript,"pso","ПСО","mybut1");
SubButtonMultiBrowser($skript,"arenda","Аренда","mybut1");
SubButtonMultiBrowser($skript,"daysnotes","Дневник","mybut1");
SubButtonMultiBrowser($skript,"svodnaya","Сводная","mybut1");
SubButtonMultiBrowser($skript,"vidimost","Видимость","mybut1");
?>
<li><a href="/automatic/bl/" target="_blank">Блог</a><br>
<?php /* <li><a href="<?=$skript;?>?mode=nachislenie">Начисления</a><br>
<li><a href="<?=$skript;?>?mode=plategy_new">Платежи создать</a><br>
<li><a href="<?=$skript;?>?mode=plategy_show">Платежи Архив</a><br>
 */?></fieldset>