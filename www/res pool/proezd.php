<?php include('include/header.php'); ?>
<style type="text/css">
<!--
.style1 {color: #990000}
-->
</style>



 
<p style='color:red;padding:10px 20px 10px 15px;margin:1px 0px 5px 0px;font:bold 12px;background:white;background:url(img/bgm.gif) repeat-x bottom;border-bottom:1px solid #dcdcdc'><img src=img/ahh.gif width=6 height=12 alt='Компания "Интех": '> Как к нам проехать </p>

	<table cellpadding=0 cellspacing=0 width=100% height=100%>
	<tr>
	  <td>
	  Уважаемые клиенты! Убедительно просим Вас перед посещением нашего офиса <strong><font color="#CC0000">заблаговременно согласовать Ваш приезд</font></strong> с менеджером нашей компании по телефону (495) 504-31-62.<br>
	  Мы находимся в 500м от МКАД по Киевскому шоссе (продолжение Ленинского проспекта).<br>

Адрес нашего офиса -   Москва, п. Московский,  Киевское шоссе (М-3),  домовл.4  строение 3 корпус Д (до 1.07.2012 - Московская обл. Ленинский р-н, д. Румянцево, Бизнес Парк "Румянцево", Строение 3 Корпус Д) , Подъезд №19,  Этаж 6, Офис 610д. <br>
<br>

	  
	  
	  
	  <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту  (начало) -->
<script src="http://api-maps.yandex.ru/1.1/?key=ADzVe0sBAAAA8MUcSgIA1smx1RLLK9SuHfjyCwBgzsb83QYAAAAAAAAAAAAY83g72lNs6ONjXfhkpjx3rEYMvQ==&modules=pmap&wizard=constructor" type="text/javascript"></script>
<script type="text/javascript">
    YMaps.jQuery(window).load(function () {
        var map = new YMaps.Map(YMaps.jQuery("#YMapsID-1719")[0]);
        map.setCenter(new YMaps.GeoPoint(37.450681,55.636321), 14, YMaps.MapType.MAP);
        map.addControl(new YMaps.Zoom());
        map.addControl(new YMaps.ToolBar());
        YMaps.MapType.PMAP.getName = function () { return "Народная"; };
        map.addControl(new YMaps.TypeControl([
            YMaps.MapType.MAP,
            YMaps.MapType.SATELLITE,
            YMaps.MapType.HYBRID,
            YMaps.MapType.PMAP
        ], [0, 1, 2, 3]));

        YMaps.Styles.add("constructor#pmblmPlacemark", {
            iconStyle : {
                href : "http://api-maps.yandex.ru/i/0.3/placemarks/pmblm.png",
                size : new YMaps.Point(28,29),
                offset: new YMaps.Point(-8,-27)
            }
        });


        YMaps.Styles.add("constructor#FF3732c81Polyline", {
            lineStyle : {
                strokeColor : "FF3732c8",
                strokeWidth : 1
            }
        });
       map.addOverlay(createObject("Placemark", new YMaps.GeoPoint(37.437911,55.635282), "constructor#pmblmPlacemark", "Подъезд 19, 6 этаж, офис 610д"));
       map.addOverlay(createObject("Polyline", [new YMaps.GeoPoint(37.455248,55.636931),new YMaps.GeoPoint(37.45277,55.635796),new YMaps.GeoPoint(37.452215,55.635643),new YMaps.GeoPoint(37.45166,55.635659),new YMaps.GeoPoint(37.449047,55.6346),new YMaps.GeoPoint(37.446751,55.634697),new YMaps.GeoPoint(37.44452,55.634552),new YMaps.GeoPoint(37.442181,55.634661),new YMaps.GeoPoint(37.440142,55.635183),new YMaps.GeoPoint(37.437868,55.635062)], "constructor#FF3732c81Polyline", "Проезд из Центра или с МКАД"));
       map.addOverlay(createObject("Polyline", [new YMaps.GeoPoint(37.433539,55.629556),new YMaps.GeoPoint(37.439075,55.631),new YMaps.GeoPoint(37.439327,55.630984),new YMaps.GeoPoint(37.439558,55.630943),new YMaps.GeoPoint(37.439764,55.630849),new YMaps.GeoPoint(37.439885,55.630738),new YMaps.GeoPoint(37.439895,55.630527),new YMaps.GeoPoint(37.439523,55.628867),new YMaps.GeoPoint(37.439495,55.628723),new YMaps.GeoPoint(37.439381,55.628598),new YMaps.GeoPoint(37.439155,55.628518),new YMaps.GeoPoint(37.438942,55.628505),new YMaps.GeoPoint(37.438739,55.628544),new YMaps.GeoPoint(37.438495,55.628712),new YMaps.GeoPoint(37.437962,55.629569),new YMaps.GeoPoint(37.437444,55.63046),new YMaps.GeoPoint(37.437127,55.631082),new YMaps.GeoPoint(37.436784,55.631677),new YMaps.GeoPoint(37.436752,55.6319),new YMaps.GeoPoint(37.436838,55.632087),new YMaps.GeoPoint(37.437111,55.632277),new YMaps.GeoPoint(37.43746,55.63239),new YMaps.GeoPoint(37.437924,55.632424),new YMaps.GeoPoint(37.438367,55.632384),new YMaps.GeoPoint(37.439112,55.632269),new YMaps.GeoPoint(37.439413,55.632169),new YMaps.GeoPoint(37.439606,55.631987),new YMaps.GeoPoint(37.439702,55.631827),new YMaps.GeoPoint(37.439659,55.63168),new YMaps.GeoPoint(37.439413,55.631453),new YMaps.GeoPoint(37.437417,55.630894),new YMaps.GeoPoint(37.436602,55.630773),new YMaps.GeoPoint(37.436419,55.630755),new YMaps.GeoPoint(37.436237,55.630809),new YMaps.GeoPoint(37.436108,55.630922),new YMaps.GeoPoint(37.436151,55.631046),new YMaps.GeoPoint(37.436189,55.631377),new YMaps.GeoPoint(37.43614,55.631653),new YMaps.GeoPoint(37.436151,55.631926),new YMaps.GeoPoint(37.436312,55.632199),new YMaps.GeoPoint(37.436559,55.632424),new YMaps.GeoPoint(37.437288,55.632715),new YMaps.GeoPoint(37.438114,55.632823),new YMaps.GeoPoint(37.437458,55.633622),new YMaps.GeoPoint(37.438142,55.633911),new YMaps.GeoPoint(37.440256,55.634445),new YMaps.GeoPoint(37.441586,55.634755)], "constructor#FF3732c81Polyline", "Заезд при движении со стороны области"));
        
        function createObject (type, point, style, description) {
            var allowObjects = ["Placemark", "Polyline", "Polygon"],
                index = YMaps.jQuery.inArray( type, allowObjects),
                constructor = allowObjects[(index == -1) ? 0 : index];
                description = description || "";
            
            var object = new YMaps[constructor](point, {style: style, hasBalloon : !!description});
            object.description = description;
            
            return object;
        }
    });
</script>

<div id="YMapsID-1719" style="width:450px;height:350px"></div>
<div style="width:450px;text-align:right;font-family:Arial"><a href="http://api.yandex.ru/maps/tools/constructor/" style="color:#1A3DC1">Создано с помощью инструментов Яндекс.Карт</a></div>
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
	  
	  


</td>
	  </tr>
	<tr><td class=BL id=J>
	
	
	    <p><strong> &nbsp;На городском транспорте</strong></p>
      <p><em>От м. <span class="style1">Румянцево</span>:<br>
      </em><em>Выход у последнего вагона из центра, далее можно пройти через корпуса (входы №5 или №6 БП Румянцево в корпусе Б), либо обойти через улицу по правой стороне вдоль леса, до корпуса Д.
 </em></p>
      <!--p><em>От м. <span class="style1">Теплый Стан</span>: <br>
        Выход из последнего вагона из центра на ул. Профсоюзная, к к/т «Аврора».
    Маршрутное такси следует с остановки на ул. Теплый стан до БП РУМЯНЦЕВО и обратно (7:00-11:00 и 16:00-19:00).
    </em></p>
      <p><em>Проход от <a href="img/ost2.jpg" target="_blank">ОСТАНОВКИ №2</a> (только для бесплатных автобусов БП Румянцево) к Строению 3 Корпус Д (ориентир — м-н «Бегемот»). Вход в ПОДЪЕЗД № 19. Проход по пропускам, при себе необходимо иметь документ (паспорт, права, воен.билет и т.п.). Этаж 6. Офис 610д. (<a href="../img/bc-rum.jpg" target="_blank">См. схему</a>) </em></p-->
      <p><strong> &nbsp;На личном транспорте</strong></p>
	    <p><em>Из <span class="style1">Центра</span>: <br>
        До МКАД по Ленинскому проспекту. После пересечения МКАД примерно 500м по Киевскому ш. Сразу после автобусной остановки и «<a href="img/frommsk.JPG" target="_blank">трубы</a>» надземного перехода, любой из 4х съездов направо к парковкам БП РУМЯНЦЕВО.
      <a href="http://www.youtube.com/watch?v=_0FSdcZcuRY" target="_blank">Видео</a></em></p>
	    <p><em>Из <span class="style1">Области</span>:<br>
	    До развязки на Хованское кладбище. Подняться на эстакаду для разворота на а/п Внуково (в область). Сразу под эстакадой съехать направо к парковкам БП РУМЯНЦЕВО (НЕ путать с поворотом на дер. Румянцево!).
      <a href="http://www.youtube.com/watch?v=b2p5vbw6BWY&feature=youtu.be" target="_blank">Видео</a>    </em></p>
	    <p><em>По <span class="style1">МКАД</span>: <br>
        До съезда на Киевское ш. в сторону а/п Внуково. После съезда на Киевское ш., примерно через 500м, сразу после автобусной остановки и «<a href="img/frommsk.JPG" target="_blank">трубы</a>» надземного перехода, любой из 4х съездов направо к парковкам БП РУМЯНЦЕВО.
      <a href="http://www.youtube.com/watch?v=_0FSdcZcuRY" target="_blank">Видео</a> </em></p>
	    <p><em>Наш офис — в Строении 3 Корпус Д (ориентир — м-н «Бегемот»). Вход в ПОДЪЕЗД № 19.  Проход по пропускам, при себе необходимо иметь документ (паспорт, права, воен.билет и т.п.). Этаж 6. Офис 610д. (<a href="../img/bc-rum.jpg" target="_blank">См. схему</a>)<br>   
		Въезд на паркинг между корпусами В, Г и Д под шлагбаум (стоянка менее  1 часа бесплатна, далее 50р./час), либо в любом другом месте вокруг корпуса на территории БП РУМЯНЦЕВО (стоянка бесплатная).

		
		</em></p>
	    <p>Координаты GPS: СШ: 55.635748; ВД: 37.4381 ; </p>
	
	  </td>
	</tr>
	<tr><td>
<a href="proezd2.php">Дополнительный офис</a> (получение корреспонденции)</p>
	  </td>
	</tr>
	<tr>
	  <td><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
	  </tr>
	</table>


<?php include('include/footer.php'); ?>
