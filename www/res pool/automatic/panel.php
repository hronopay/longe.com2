<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Panel</title>
<link rel="stylesheet" type="text/css" href="css/ext-all.css" />

    <!-- GC -->
 	<!-- LIBS -->
 	<script type="text/javascript" src="js/ext-base.js"></script>
 	<!-- ENDLIBS -->

    <script type="text/javascript" src="js/ext-all.js"></script>

    <script type="text/javascript" src="js/panels.js"></script>

    <!-- Common Styles for the examples -->
    <link rel="stylesheet" type="text/css" href="css/examples.css" />

    <style type="text/css">
    .x-panel-body p {
        margin:10px;
    }
    .container {
        padding:10px;
    }
	em.cfg { font-style: italic; font-weight: bold;}
    </style>
</head>
<body>
<script type="text/javascript" src="js/examples.js"></script><!-- EXAMPLES -->
<h1>Ext.Panel</h1>
<p>The js is not minified so it is readable. See <a href="panels.js">panels.js</a>.</p>

<div id="panel-basic" class="container">Так  что же это такое?
</div>

<div id="panel-reset-true" class="container">
	<p>Пришла жопа сюдаSetting the Ext.Panel configuration-option <em class="cfg">preventBodyReset: true</em> will ensure your Panel <b>body</b>'s structural html is isolated from the Ext theme.</p>
</div>

<div id="panel-reset-false" class="container">
	<p>Compare the same panel rendered with <em class="cfg">preventBodyReset: false</em></p>
</div>

</body>
</html>
