	function doLoad(force, result, debug, bn, oe, ident, io) {
    var q_bn = bn;
    var q_io = io;
    var q_oe = oe;
	var times = ident;
		// Создаем новый объект JSHttpRequest.
		var req = new Subsys_JsHttpRequest_Js();
		// Код, АВТОМАТИЧЕСКИ вызываемый при окончании загрузки.
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				if (req.responseJS) {
					// Записываем в <div> список  разделов. 
					document.getElementById(result).innerHTML = 
						'' + (req.responseJS.md5) ;
				}
				// Список  игр или игра.
				document.getElementById(debug).innerHTML = 
					req.responseText;
			}
		}
		// Разрешаем кэширование (чтобы при одинаковых запросах
		// не обращаться к серверу несколько раз).
		req.caching = false  /* false true */;
		// Подготваливаем объект.
		req.open('POST', 'admin/ord_executed_reque.php?test=abc', true);
		// Посылаем данные запроса (задаются в виде хэша).
		req.send({ rr: times,  b: q_bn, i: q_io, o: q_oe, test:303 });
	}
	// Поддержка загрузки данных по тайм-ауту (1 секунда после
	// последнего отпускания клавиши в текстовом поле).
	var timeout = null;
	function doLoadUp(force, result, debug, bn, oe, ident, io) {
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(doLoad(force, result, debug, bn, oe, ident, io), 1000);
	}
