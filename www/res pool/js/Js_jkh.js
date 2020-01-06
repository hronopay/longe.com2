	function doLoad(force, result, debug, bn, oe, ident, io, dom) {
    var tt = dom;
    var q_bn = bn;
    var q_oe = oe;
	var times = ident;
    var q_io = io;
		// Создаем новый объект JSHttpRequest.
		var req = new Subsys_JsHttpRequest_Js();
		// Код, АВТОМАТИЧЕСКИ вызываемый при окончании загрузки.
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				if (req.responseJS) {
					// Записываем в <div id=result> . 
					document.getElementById(result).innerHTML = 
						'' + (req.responseJS.md5) + (req.responseJS.rr) ;
				}
				//  Записываем в <div id=debug> . 
				document.getElementById(debug).innerHTML = 
					req.responseText;
			}
		}
		// Разрешаем кэширование (чтобы при одинаковых запросах
		// не обращаться к серверу несколько раз).
		req.caching = false  /* false true */;
		// Подготваливаем объект.
		req.open('POST', 'admin/plategy_backend.php?test=abc', true);
		// Посылаем данные запроса (задаются в виде хэша).
		req.send({  r: tt, b: q_bn,  o: q_oe, rr: times,  i: q_io, test:303 });
	}
	// Поддержка загрузки данных по тайм-ауту (1 секунда после
	// последнего отпускания клавиши в текстовом поле).
	var timeout = null;
	function doLoadUp(force, result, debug, bn, oe, ident, io) {
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(doLoad(force, result, debug, bn, oe, ident, io, domid), 1000);
	}
