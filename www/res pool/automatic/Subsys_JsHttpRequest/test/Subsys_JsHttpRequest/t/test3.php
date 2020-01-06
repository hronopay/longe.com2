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
//	function doLoad(force) {
	function doLoad(force, arg2, arg3, arg4, arg5, arg6, arg7) {
		// Получаем текст запроса из <input>-поля.
	var q_arg1 = '' + document.getElementById(arg2).value;   //  сюда помещаем содержимое ввода query
    var q_arg2 = arg2;
    var q_arg3 = arg3;
    var q_arg4 = arg4;   //пока не задействована
    var q_arg5 = arg5;
    var q_arg6 = arg6;
    var q_arg7 = arg7;
		// Создаем новый объект JSHttpRequest.
		var req = new Subsys_JsHttpRequest_Js();
		// Код, АВТОМАТИЧЕСКИ вызываемый при окончании загрузки.
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				
				// Отладочная информация.
				document.getElementById(arg3).innerHTML = 
					req.responseText;
			}
		}
		// Разрешаем кэширование (чтобы при одинаковых запросах
		// не обращаться к серверу несколько раз).
		req.caching = false /* true */;
		// Подготваливаем объект.
		req.open('POST', 'load3.php', true);
		// Посылаем данные запроса (задаются в виде хэша).
		req.send({ r1: q_arg1, r2: q_arg2, r3: q_arg3, r5: q_arg5, r6: q_arg6, r7: q_arg7 });


    	if (arg7 != 'old') document.getElementById(arg2).value = q_arg6;
	}
	// Поддержка загрузки данных по тайм-ауту (1 секунда после
	// последнего отпускания клавиши в текстовом поле).
	var timeout = null;
	function doLoadUp(force, arg2, arg3, arg4, arg5, arg6, arg7) {
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(doLoad(force, arg2, arg3, arg4, arg5, arg6, arg7), 1);
	}
</script>
<!-- Форма -->
<a href="<?=$_SERVER['REQUEST_URI']?>">Reload myself</a>

1 - служебный
2 - id поля ввода
3 - id дива ввода
5 - счетчик полей ввода
7 - old / new


<form onsubmit="return false">
	<input type="text" id="query" onkeyup="doLoadUp(true, 'query', 'outputlist', '', 0, '', 'old')" style="border:1px solid #00b; margin:0; width:201px;" >
	<div id="outputlist" ></div>
</form>

</body>
</html>
