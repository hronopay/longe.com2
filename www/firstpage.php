<?php 
echo '
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">


<link rel="stylesheet" type="text/css" href="css/firstpage.css" />
</head>
<body>
<div id="lang1" style="position:absolute; left:1400px; top:10px; ">
<form id="language1" action="langcookie.php" method="get" name="checklang" enctype="text/plain">
<select id="selectmenu" name="language" onChange="form.submit();">
	<option value="ru">Русский</option>
	<option value="chi" >中国人</option>
	<option value="en" selected="selected">English</option>
</select>
</form>
</div>



<div style="position:absolute; left:165px; top:15px; ">
<h4>'.$t1.'</h4>
</div>
<div style="position:absolute; left:200px; top:85px; ">
<h2>'.$t2.'</h2>
</div>
<h1>'.$t3.'</h1>



<div style="position:absolute; left:500px; top:450px; ">
<h3><a href="gfhfh.com">'.$t4.'</a></h3>
</div>


<div style="position:absolute; left:720px; top:450px; ">
<h3><a href="gfhfh.com">'.$t5.'</a></h3>
</div>


<div style="position:absolute; left:880px; top:450px; ">
<h3><a href="signup">'.$t6.'</a></h3>
</div>


<div style="position:absolute; left:710px; top:550px; ">
<h3><a href="market">'.$t7.'</a></h3>
</div>


</body>
</html>';

//phpinfo(32);
?>