<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>BubblePanel</title>
<link rel="stylesheet" type="text/css" href="css/ext-all.css" />
<link rel="stylesheet" type="text/css" href="css/bubble.css" />
    <!-- GC -->
 	<!-- LIBS -->
 	<script type="text/javascript" src="js/ext-base.js"></script>
 	<!-- ENDLIBS -->

    <script type="text/javascript" src="js/ext-all.js"></script>

    <script type="text/javascript" src="js/BubblePanel.js"></script>





    <!-- Common Styles for the examples -->
    <link rel="stylesheet" type="text/css" href="css/examples.css" />

    <style type="text/css">
	body {
	    background-color: #4E79B2 !important;
	}
	#bubble-markup em {
		font-style: italic
	}
    </style>
</head>
<body>
<script type="text/javascript" src="js/examples.js"></script><!-- EXAMPLES -->

<div id="bubble-markup" class="x-hidden">
<p>vdjhvaDlhv</p>

<p>влорм мклпи молртк <a href="BubblePanel.js">BubblePanel.js</a> and <a href="bubble-panel.js">bubble-panel.js</a>.</p>

<p>The majority of the work is actually done in <a href="css/bubble.css">bubble.css</a>. Ext.ux.BubblePanel defines a custom baseCls ('x-bubble') which will generate unique CSS classes for the markup in a Panel such as <em>'x-bubble-tl'</em>, <em>'x-bubble-tr'</em> and <em>'x-bubble-tc'</em>.</p>

</div>

<div id="bubbleCt" style="padding-top: 5px;"></div>
<div id="panelCt" style="padding-top: 5px;"></div><br>
<br>
<br>

<div id="panelCt" style="padding-top: 5px;"></div>

</body>
</html>

<?php /* <script type="text/javascript" src="js/bubble-panel.js"></script> */?>
<?php echo "

<script type='text/javascript'>Ext.onReady(function(){   
    var title = new Ext.ux.BubblePanel({
	bodyStyle: 'padding-left: 8px;color: #0d2a59',
	renderTo: 'bubbleCt',
	html: '<h3>Ext.ux.BubblePanel</h3',
	width: 200,
	autoHeight: true
    });
    var cp = new Ext.ux.BubblePanel({
	renderTo: 'bubbleCt',
	padding: 5,
	width: 400,
	autoHeight: true,
	contentEl: 'bubble-markup'
    });

    var plainOldPanel = new Ext.Panel({
        renderTo: 'panelCt',
	padding: 5,
	frame: true,
	width: 400,
	autoHeight: true,
	title: 'Plain Old Panel',
	html: Ext.example.bogusMarkup
    });

});
</script>

"; ?>
