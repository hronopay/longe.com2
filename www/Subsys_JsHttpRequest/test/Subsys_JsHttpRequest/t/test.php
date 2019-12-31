<?php
// �������� ������ � ��������.
session_start();
$_SESSION['hello'] = 'Backend loaded at '.date('r');
?>
<html>
<head></head>
<body>

<script language="JavaScript" 
 src="../../../lib/Subsys/JsHttpRequest/Js.js"></script>
<script>
	// ���������� �� ����-���� ��� ��� ������ �� ������.
	function doLoad(force) {
		// �������� ����� ������� �� <input>-����.
		var query = '' + document.getElementById('query').value;
		// ������� ����� ������ JSHttpRequest.
		var req = new Subsys_JsHttpRequest_Js();
		// ���, ������������� ���������� ��� ��������� ��������.
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				if (req.responseJS) {
					// ���������� � <div> ��������� ������. 
					document.getElementById('result').innerHTML = 
						'MD5("'+(req.responseJS.q||'')+'") = ' +
						'"' + (req.responseJS.md5||'') + '"<br> ' +
						'Session data: ' + 
						'"' + (req.responseJS.hello || 'unknown') + '"';
				}
				// ���������� ����������.
				document.getElementById('debug').innerHTML = 
					req.responseText;
			}
		}
		// ��������� ����������� (����� ��� ���������� ��������
		// �� ���������� � ������� ��������� ���).
		req.caching = true;
		// �������������� ������.
		req.open('POST', 'load.php?test=abc', true);
		// �������� ������ ������� (�������� � ���� ����).
		req.send({ q: query, test:303 });
	}
	// ��������� �������� ������ �� ����-���� (1 ������� �����
	// ���������� ���������� ������� � ��������� ����).
	var timeout = null;
	function doLoadUp() {
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(doLoad, 1000);
	}
</script>
<!-- ����� -->
<a href="<?=$_SERVER['REQUEST_URI']?>">Reload myself</a>
<form onsubmit="return false">
	<input type="text" id="query" onkeyup="doLoadUp()">
	<input type="button" onclick="doLoad(true)" value="load">
	<br><i>������� "error", ����� �������������� ���������� ����������� ����������.</i>
</form>
<!-- ���������� ������ (����������� �����������) -->
<div id="result" style="border:1px solid #000; margin:2px">
	Results
</div>
<!-- ���������� ���������� (����������� �����������) -->
<div id="debug" style="border:1px dashed red; margin:2px">
	Debug info
</div>

</body>
</html>
<hr>
<?show_source(__FILE__)?>