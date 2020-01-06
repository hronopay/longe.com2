<?php
// Проверка работы с сессиями.
session_start();
$_SESSION['hello'] = 'Backend loaded at '.date('r');
?>
<html>
<head></head>
<body>

<script language="JavaScript" 
 src="../../../lib/Subsys/JsHttpRequest/Js.js"></script>
<script>
/* 	// Вызывается по тайм-ауту или при щелчке на кнопке.
	function doLoad(force) {
		// Получаем текст запроса из <input>-поля.
		var query = '' + document.getElementById('query').value;
		// Создаем новый объект JSHttpRequest.
		var req = new Subsys_JsHttpRequest_Js();
		// Код, АВТОМАТИЧЕСКИ вызываемый при окончании загрузки.
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				// Отладочная информация.
				document.getElementById('debug').innerHTML = 
					req.responseText;
			}
		}
		// Разрешаем кэширование (чтобы при одинаковых запросах
		// не обращаться к серверу несколько раз).
		req.caching = true;
		// Подготваливаем объект.
		req.open('POST', 'load2.php?test=abc', true);
		// Посылаем данные запроса (задаются в виде хэша).
		req.send({ q: query, test:303 });
	}
	// Поддержка загрузки данных по тайм-ауту (1 секунда после
	// последнего отпускания клавиши в текстовом поле).
	var timeout = null;
	function doLoadUp() {
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(doLoad, 0);
	} */
</script>


<script>
	// Вызывается по тайм-ауту или при щелчке на кнопке.
//	function doLoad(force) {
	function doLoad(force, result, debug, bn, io, oe, ident) {
		// Получаем текст запроса из <input>-поля.
//		var query = '' + document.getElementById('query').value;
		var query = '' + document.getElementById(result).value;
    var query1 = debug;
//    var q_bn = bn;
    var q_bn = result;
    var q_io = io;
    var q_oe = oe;
		// Создаем новый объект JSHttpRequest.
		var req = new Subsys_JsHttpRequest_Js();
		// Код, АВТОМАТИЧЕСКИ вызываемый при окончании загрузки.
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				
				// Отладочная информация.
				document.getElementById(debug).innerHTML = 
					req.responseText;
			}
		}
		// Разрешаем кэширование (чтобы при одинаковых запросах
		// не обращаться к серверу несколько раз).
		req.caching = false /* true */;
		// Подготваливаем объект.
		req.open('POST', 'load2.php?test=abc', true);
		// Посылаем данные запроса (задаются в виде хэша).
		req.send({ q: query, rr: query1, b: q_bn, i: q_io, o: q_oe, test:303 });


    	if (ident != 'old') document.getElementById(result).value = q_oe;
	}
	// Поддержка загрузки данных по тайм-ауту (1 секунда после
	// последнего отпускания клавиши в текстовом поле).
	var timeout = null;
	function doLoadUp(force, result, debug, bn, io, oe, ident) {
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(doLoad(force, result, debug, bn, io, oe, ident), 1);
	}
</script>
<!-- Форма -->
<a href="<?=$_SERVER['REQUEST_URI']?>">Reload myself</a>

<?php /* 
<form onsubmit="return false">
	<input type="text" id="query" onkeyup="doLoadUp()" style="border:1px solid #00b; margin:0; width:202px;" >
	<div id="debug" style="border:1px solid #fff; margin:0; width:200px;" ></div>
</form>
 */?>
 
 
<form onsubmit="return false">
	<input type="text" id="query" onkeyup="doLoadUp(true, 'query', 'debug', '0', '0', '0', 'old')" style="border:1px solid #00b; margin:0; width:201px;" >
	<div id="debug" ></div>
</form>

</body>
</html>
