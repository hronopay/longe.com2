<?php include('include/header.php'); ?>

 
<p style='color:red;padding:10px 20px 10px 15px;margin:1px 0px 5px 0px;font:bold 12px;background:white;background:url(img/bgm.gif) repeat-x bottom;border-bottom:1px solid #dcdcdc'><img src=img/ahh.gif width=6 height=12 alt='Новости компании'> Новости компании</p>
	<table cellpadding=0 cellspacing=0 width=100% height=100%>

<tr><td class=BL id=J>






<?php if (isAction()) { ?><br><a name='n2'></a><br>
	<font color=red><b><?php /* 31.01.2011 */?><? echo date("d.m.20y"); ?></b></font><br>
	<img src=img/sep.gif width=1 height=3><br>
В рамках акции, проходящей  по  <?php include("html_gall/actiondate.php"); ?>г., снижены цены на следующие услуги: регистрация ООО - до 4500 руб., регистрация ИП - до <?php include("html_gall/actionprice.php"); ?> руб.<font color=red>*</font>
<?php if (isActionUradress()) { ?>
, юридический адрес по ИФНС 29 до 5000 руб.
<?php }?>
<br>
Внимание! Акция распространяется только на услуги, оплаченные по <?php include("html_gall/actiondate.php"); ?>г. включительно.<br>
<br>
<font color=red>*</font> - стандартная цена 5500 и 3000 руб. соответственно
<br>
<br><?php }?>






	<!--br><a name='n2'></a><br>
	<font color=red><b>28.04.2014</b></font><br>
	<img src=img/sep.gif width=1 height=3><br>
	График работы на майские праздники:<br>
мы не работаем 30 апреля и с 5 по 8 мая.<br>
Последний день работы - 29 апреля, следующий рабочий день - 12 мая.<br>
	<br-->



	<br><a name='n3'></a><br>
	<font color=red><b>01.07.2013</b></font><br>
	<img src=img/sep.gif width=1 height=3><br>
	С 1 июля стоимость оформления и государственной регистрации сделок купли-продажи долей (вход-выход  участников) в ООО через увеличение уставного капитала составляет всего 10000р.<font color=red>*</font><br>
	<br>



<font color=red>*</font> - осуществляется в 2 этапа, пошлины и услуги нотариуса оплачиваются отдельно
<br>
<br>

 
	<br><a name='n1'></a><br>
	<font color=red><b>01.02.2010</b></font><br>
	<img src=img/sep.gif width=1 height=3><br>
	Наша компания предлагает своим клиентам новый "немассовый" юридический адрес по 29 ИФНС - Москва, <script type="text/javascript"> with (document)	{ 	write('Б' + 'оров' + 'ско' + 'е шоссе' + '');} </script>
 
</td></tr>

	</table>

<?php include('include/footer.php'); ?>



