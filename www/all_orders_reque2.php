<?php
// Проверка работы с сессиями.
session_start();
$_SESSION['hello'] = 'Backend loaded at '.date('r');
?>
<script language="JavaScript" 
 src="../Subsys_JsHttpRequest/lib/Subsys/JsHttpRequest/Js.js"></script>

<script>
	// Вызывается по тайм-ауту или при щелчке на кнопке.
//	function doLoad(force) {
	function doLoad(force, result, debug, bn, io, oe, ident) {
		// Получаем текст запроса из <input>-поля.
//		var query = '' + document.getElementById('query').value;
    var query = '' + document.getElementById(ident).value + '';
    var query1 = 'Статус: ' + document.getElementById(ident).value + '';
    var q_bn = bn;
    var q_io = io;
    var q_oe = oe;
		// Создаем новый объект JSHttpRequest.
		var req = new Subsys_JsHttpRequest_Js();
		// Код, АВТОМАТИЧЕСКИ вызываемый при окончании загрузки.
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				if (req.responseJS) {
					// Записываем в <div> результат работы. 
					document.getElementById(result).innerHTML = 
						/* 'MD5("'+(req.responseJS.q||'')+'") = ' + */
						'' + (req.responseJS.md5||'') /* + '"<br> ' +
						'Session data: ' + 
						'"' + (req.responseJS.hello || 'unknown') + '"' */;
				}
				// Отладочная информация.
				document.getElementById(debug).innerHTML = 
					req.responseText;
			}
		}
		// Разрешаем кэширование (чтобы при одинаковых запросах
		// не обращаться к серверу несколько раз).
		req.caching = false /* true */;
		// Подготваливаем объект.
		req.open('POST', 'admin/ord_executed_reque.php?test=abc', true);
		// Посылаем данные запроса (задаются в виде хэша).
		req.send({ q: query, rr: query1, b: q_bn, i: q_io, o: q_oe, test:303 });
	}
	// Поддержка загрузки данных по тайм-ауту (1 секунда после
	// последнего отпускания клавиши в текстовом поле).
	var timeout = null;
	function doLoadUp(force, result, debug, bn, io, oe, ident) {
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(doLoad(force, result, debug, bn, io, oe, ident), 1000);
	}
</script>


<? include ('admin/connect.php');
include ('include/functions.php');
$FileName = "all_orders.php";
$FileHeader = "Невыполненные Заказы";
$FileHeader1 = "Невыполненные Заказы";
$FileSlogan = "Ищите, да обрящете; стучите, и откроют вам...";
?><?
include_once("include/header_admin.php"); 
?>
<?php 
$qu = "SELECT busk_table_name FROM customers ORDER BY busk_table_name DESC";
$nu = mysql_query($qu);
$busk_numObj = mysql_fetch_object($nu);
$max_busk_num = $busk_numObj->busk_table_name;

//for ($busk_num=1; $busk_num <= $max_busk_num; $busk_num++){
for ($busk_num=$max_busk_num; $busk_num > 0; $busk_num--){                  //echo $busk_num."<br>";
$q = "SELECT * FROM `customerorder_".$busk_num."` WHERE ord_executed = 'NO'   ORDER BY orderdate DESC, id_ord DESC";
if ( $Or = mysql_query($q) ){
	while ($row_Orders = mysql_fetch_object($Or)){
		if ($row_Orders->ord_executed == 'NO'/* strpos($row_Orders->ord_executed, 'NO') !== false */ || $row_Orders->ord_executed == ""){$st='class="printview"'; $oe='YES';} else {$st='class="executedOrder"'; $oe='NO';}
		if(ereg("Предоплата", $row_Orders->deliver_to) && ($row_Orders->ord_executed == 'NO' || $row_Orders->ord_executed == "")) {$st='class="WaitMoneyOrder"'; $oe='YES';} 
		?>
		
		<table align="center"  <?=$st;?>>  
<?php if ($st=='class="WaitMoneyOrder"') { ?><tr>
    <td colspan="2"><?php echo "Ожидание Предоплаты: ".ereg("Предоплата", $row_Orders->deliver_to); ?></td>
</tr><? } ?> <tr><td>
	
	<?=$row_Orders->orderdate;?><br>
	<form onsubmit="return false">
  <!--input type="text" id="query" onkeyup="doLoadUp(true, 'result_<?=$busk_num;?>_<?=$row_Orders->id_ord;?>', 'debug_<?=$busk_num;?>_<?=$row_Orders->id_ord;?>', '<?=$busk_num;?>', <?=$row_Orders->id_ord;?>, '<?=$oe;?>')"-->
  
  Изменить на: <input id="<?=$busk_num;?>_<?=$row_Orders->id_ord;?>_YES" type="button" onclick="doLoad(true, 'result_<?=$busk_num;?>_<?=$row_Orders->id_ord;?>', 'debug_<?=$busk_num;?>_<?=$row_Orders->id_ord;?>', '<?=$busk_num;?>', <?=$row_Orders->id_ord;?>, 'YES', '<?=$busk_num;?>_<?=$row_Orders->id_ord;?>_YES')" value="Выполнен">
  
  <input id="<?=$busk_num;?>_<?=$row_Orders->id_ord;?>_NO" type="button" onclick="doLoad(true, 'result_<?=$busk_num;?>_<?=$row_Orders->id_ord;?>', 'debug_<?=$busk_num;?>_<?=$row_Orders->id_ord;?>', '<?=$busk_num;?>', <?=$row_Orders->id_ord;?>, 'NO', '<?=$busk_num;?>_<?=$row_Orders->id_ord;?>_NO')" value="Невыполнен">

  <input id="<?=$busk_num;?>_<?=$row_Orders->id_ord;?>_NO" type="button" onclick="doLoad(true, 'result_<?=$busk_num;?>_<?=$row_Orders->id_ord;?>', 'debug_<?=$busk_num;?>_<?=$row_Orders->id_ord;?>', '<?=$busk_num;?>', <?=$row_Orders->id_ord;?>, 'REM', '<?=$busk_num;?>_<?=$row_Orders->id_ord;?>_NO')" value="Аннулировать">
</form>
	<?=$row_Orders->his_orders;?>

<!-- Результаты работы (заполняется динамически) -->
<div id="result_<?=$busk_num;?>_<?=$row_Orders->id_ord;?>" style="border:1px solid #aaa; margin:2px; text-align:center; color:#990000; font-weight:normal;">
  	Статус: <?php if ($row_Orders->ord_executed == 'NO'/* strpos($row_Orders->ord_executed, 'NO') !== false */ || $row_Orders->ord_executed == ""){ ?>Невыполнен (<a href="admin/ord_executed.php?busk_num=<?=$busk_num;?>&id_ord=<?=$row_Orders->id_ord;?>&ord_executed=YES">изменить</a>)<?php } else {?>Выполнено (<a href="admin/ord_executed.php?busk_num=<?=$busk_num;?>&id_ord=<?=$row_Orders->id_ord;?>&ord_executed=NO">изменить</a>)<?php }?>
</div>

<!-- Отладочная информация (заполняется динамически) -->
<div id="debug_<?=$busk_num;?>_<?=$row_Orders->id_ord;?>" style="border:1px dashed red; margin:2px">
</div> 	</td>
	<td>
	<?=$row_Orders->deliver_to;?> 
	</td></tr></table><br>
<? 
	}
	}
}
?>
<?
include_once("include/footer_adm.php");
?>
