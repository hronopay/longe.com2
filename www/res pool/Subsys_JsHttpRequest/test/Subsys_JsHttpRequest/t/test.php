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
	// Вызывается по тайм-ауту или при щелчке на кнопке.
	function doLoad(force) {
		// Получаем текст запроса из <input>-поля.
		var query = '' + document.getElementById('query').value;
		// Создаем новый объект JSHttpRequest.
		var req = new Subsys_JsHttpRequest_Js();
		// Код, АВТОМАТИЧЕСКИ вызываемый при окончании загрузки.
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				if (req.responseJS) {
					// Записываем в <div> результат работы. 
					document.getElementById('result').innerHTML = 
						'MD5("'+(req.responseJS.q||'')+'") = ' +
						'"' + (req.responseJS.md5||'') + '"<br> ' +
						'Session data: ' + 
						'"' + (req.responseJS.hello || 'unknown') + '"';
				}
				// Отладочная информация.
				document.getElementById('debug').innerHTML = 
					req.responseText;
			}
		}
		// Разрешаем кэширование (чтобы при одинаковых запросах
		// не обращаться к серверу несколько раз).
		req.caching = true;
		// Подготваливаем объект.
		req.open('POST', 'load.php?test=abc', true);
		// Посылаем данные запроса (задаются в виде хэша).
		req.send({ q: query, test:303 });
	}
	// Поддержка загрузки данных по тайм-ауту (1 секунда после
	// последнего отпускания клавиши в текстовом поле).
	var timeout = null;
	function doLoadUp() {
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(doLoad, 1000);
	}
</script>
<!-- Форма -->
<a href="<?=$_SERVER['REQUEST_URI']?>">Reload myself</a>
<form onsubmit="return false">
	<input type="text" id="query" onkeyup="doLoadUp()">
	<input type="button" onclick="doLoad(true)" value="load">
	<br><i>Введите "error", чтобы протестировать отладочные возможности библиотеки.</i>
</form>
<!-- Результаты работы (заполняется динамически) -->
<div id="result" style="border:1px solid #000; margin:2px">
	Results
</div>
<!-- Отладочная информация (заполняется динамически) -->
<div id="debug" style="border:1px dashed red; margin:2px">
	Debug info
</div>

</body>
</html>
<hr>
<?show_source(__FILE__)?>