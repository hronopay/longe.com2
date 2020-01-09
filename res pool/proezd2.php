<?php include('include/header.php'); ?>


 
<p style='color:red;padding:10px 20px 10px 15px;margin:1px 0px 5px 0px;font:bold 12px;background:white;background:url(img/bgm.gif) repeat-x bottom;border-bottom:1px solid #dcdcdc'><img src=img/ahh.gif width=6 height=12 alt='Компания "Интех": '> Дополнительный офис </p>

	<table cellpadding=0 cellspacing=0 width=100% height=100%>
	<tr>
	  <td>
	  Уважаемые клиенты! Убедительно просим Вас перед посещением нашего дополнительного офиса <strong><font color="#CC0000">заблаговременно согласовать Ваш приезд</font></strong> с менеджером нашей компании по телефону (495) 504-31-62.<br>
Адрес нашего офиса - г. Москва, <script type="text/javascript">
								with (document)
								{
									write(' Б' + 'оров' + 'ско' + 'е ш.' + '');
									write(", д.37 ко" + "рп.3");
								}
							</script> (1й этаж жилого здания).<br>
<br>

	  
	  <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту  (начало) -->
<script src="http://api-maps.yandex.ru/1.1/?key=AO2seksBAAAAedzpVwIAcZ-98vq_gz8Bqfrz1uXRv7yan0oAAAAAAAAAAAC0l8aLrLWHpLUfd7JsW_DpsTV4fQ==&wizard=constructor" type="text/javascript"></script>
<script type="text/javascript">
    YMaps.jQuery(function () {
        var map = new YMaps.Map(YMaps.jQuery("#YMapsID-1055")[0]);
        map.setCenter(new YMaps.GeoPoint(37.366442,55.643442), 14, YMaps.MapType.MAP);
        map.addControl(new YMaps.Zoom());
        map.addControl(new YMaps.ToolBar());
        map.addControl(new YMaps.TypeControl());

        YMaps.Styles.add("constructor#pmdblPlacemark", {
            iconStyle : {
                href : "http://api-maps.yandex.ru/i/0.3/placemarks/pmdbl.png",
                size : new YMaps.Point(36,41),
                offset: new YMaps.Point(-13,-40)
            }
        });


        YMaps.Styles.add("constructor#FF3732ff5Polyline", {
            lineStyle : {
                strokeColor : "FF3732ff",
                strokeWidth : 5
            }
        });
       map.addOverlay(createObject("Placemark", new YMaps.GeoPoint(37.360177,55.639186), "constructor#pmdblPlacemark", "Офис Интех"));
       map.addOverlay(createObject("Polyline", [new YMaps.GeoPoint(37.428323,55.661323),new YMaps.GeoPoint(37.40914,55.659964),new YMaps.GeoPoint(37.397209,55.656956),new YMaps.GeoPoint(37.393003,55.654311),new YMaps.GeoPoint(37.385536,55.651763),new YMaps.GeoPoint(37.382489,55.651666),new YMaps.GeoPoint(37.378026,55.65203),new YMaps.GeoPoint(37.374764,55.651424),new YMaps.GeoPoint(37.361332,55.643294),new YMaps.GeoPoint(37.363821,55.641959),new YMaps.GeoPoint(37.359444,55.639119)], "constructor#FF3732ff5Polyline", ""));
        
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

<div id="YMapsID-1055" style="width:450px;height:350px"></div>
<div style="width:450px;text-align:right;font-family:Arial"><a href="http://api.yandex.ru/maps/tools/constructor/" style="color:#1A3DC1">Создано с помощью инструментов Яндекс.Карт</a></div>
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->


</td>
	  </tr>
	<tr><td class=BL id=J>
	
	
	    <p><strong> &nbsp;На городском транспорте</strong></p>
	    <p><em>м. Юго-Западная, 1-й вагон, при выходе из вестибюля станции два поворота направо, далее автобус 707 или коммерческий автобус 343М, до остановки «Горнолыжный склон в Ново-Переделкино» (Новоорловская улица, дом 6). От остановки пройти немного вперед, обогнуть дом 8 и идти пешком вглубь жилого массива, до дома 37 корп.3 по Боровскому шоссе (напротив 3-этажное здание спортшколы «Борец»). Вы на месте. </em></p>
	    <p><strong> &nbsp;На личном транспорте</strong></p>
	    <p><em>Ориентиры – МКАД-ЗАПАД, Ленинский проспект, Боровское шоссе. </em></p>
	    <p><em>При движении по МКАД необходимо доехать до развязки с Боровским шоссе (48-й км МКАД), выехать на шоссе и двигаться в сторону от центра, в направлении района Солнцево, до поворота на светофоре налево на Новопеределкинскую улицу. При движении по Новопеределкинской улице второй поворот направо, вглубь жилого массива, двигаться прямо до дома 37 корп.3 по Боровскому шоссе (ориентир - 3-этажное здание спортшколы «Борец»). Вы на месте. </em></p>
	    <p><em>При движении из центра, необходимо выехать на Ленинский проспект (с Садового или 3-го транспортного кольца) и двигаться в сторону области. Пересечь МКАД, проехать БЦ «Румянцево», который будет по правой стороне, и повернуть направо под указатель поворота к району Солнцево, продолжить движение по Родниковой улице никуда не сворачивая, на перекрестке не доезжая до АЗС Лукойл (будет по правой стороне) повернуть налево, на втором светофоре налево, на Новоорловскую улицу. На ней сразу же за домом 8 повернуть вглубь жилого массива, двигаться прямо до дома 37 корп.3 по Боровскому шоссе (ориентир - 3-этажное здание спортшколы «Борец»). Вы на месте. </em></p>
	    <p>Координаты GPS: СШ: 55.63923; ВД: 37.36023 ; </p>
	
	  </td>
	</tr>
	<tr><td>

	  </td>
	</tr>
	<tr>
	  <td><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
	  </tr>
	</table>


<?php include('include/footer.php'); ?>
