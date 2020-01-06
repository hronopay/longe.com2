<SCRIPT>

function filloldmoscow() {
	var x =  document.getElementById('check1').value;
	if(x == 1) document.getElementById('tags4').value = 'Москва';
	if(x == 2) document.getElementById('tags4').value = '';
}
</SCRIPT>

<?php
?>
<br>

<select name="eee" id="check1" onChange="filloldmoscow()" >
<option value="0">выбрать</option>
<option value="1">старая</option>
<option value="2">новая</option>
</select>
<br><br>
<br>
<br>


<input id="tags4" name="trt" type="text" value="ну так?" maxlength="15">

