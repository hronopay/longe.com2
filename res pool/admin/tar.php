<?
// выборка тарифов по местоположению клиента и юр./физ. лицо

if((!$_POST['us'])||(!$_POST['type'])){
	echo "Ошибка. Возможно Вы некорректно ввели данные. Попробуйте ещё раз";
}

else if(($_POST['us']==1)&&($_POST['type']==1)){
	?>
<h4>Юридическое лицо, Москва, Санкт-Петербург</h4><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td colspan=2><font face="Arial" size=2 color="#ffffff">Вознаграждение Медиапартнера за одну минуту соединения, руб., без НДС</td></tr>
<tr><td widht="150"><font face="Arial" size=2 color="#ffffff">МТС</td><td align=center valign=middle rowspan=3><font face="Arial" size=2 color="#ffffff">9,50р.</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td></tr>

</table><br>
При предоставлении статистики в подсчете учитываются защитные пороги и округление:<br><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td><font face="Arial" size=2 color="#ffffff">Оператор</td><td><font face="Arial" size=2 color="#ffffff">Защитный порог, сек</td><td><font face="Arial" size=2 color="#ffffff">Округление</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">МТС</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td><td><font face="Arial" size=2 color="#ffffff">10</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>

</table>

<?
}

else if(($_POST['us']==1)&&($_POST['type']==2)){
?>
<h4>Юридическое лицо, ФО РФ, номер мобильного оператора</h4><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td colspan=2><font face="Arial" size=2 color="#ffffff">Вознаграждение Медиапартнера за одну минуту соединения, руб., без НДС</td></tr>
<tr><td widht="150"><font face="Arial" size=2 color="#ffffff">МТС</td><td align=center valign=middle rowspan=3><font face="Arial" size=2 color="#ffffff">8,50р.</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td></tr>

</table><br>
При предоставлении статистики в подсчете учитываются защитные пороги и округление:<br><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td><font face="Arial" size=2 color="#ffffff">Оператор</td><td><font face="Arial" size=2 color="#ffffff">Защитный порог, сек</td><td><font face="Arial" size=2 color="#ffffff">Округление</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">МТС</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td><td><font face="Arial" size=2 color="#ffffff">10</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>

</table>

<?
}
else if(($_POST['us']==1)&&($_POST['type']==3)){
	?>
<h4>Юридическое лицо, ФО РФ, "городской номер"</h4><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td colspan=2><font face="Arial" size=2 color="#ffffff">Вознаграждение Медиапартнера за одну минуту соединения, руб., без НДС</td></tr>
<tr><td widht="150"><font face="Arial" size=2 color="#ffffff">МТС</td><td align=center valign=middle rowspan=3><font face="Arial" size=2 color="#ffffff">7,50р.</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td></tr>

</table><br>
При предоставлении статистики в подсчете учитываются защитные пороги и округление:<br><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td><font face="Arial" size=2 color="#ffffff">Оператор</td><td><font face="Arial" size=2 color="#ffffff">Защитный порог, сек</td><td><font face="Arial" size=2 color="#ffffff">Округление</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">МТС</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td><td><font face="Arial" size=2 color="#ffffff">10</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>

</table>

<?
}
else if(($_POST['us']==2)&&($_POST['type']==1)){
	?>
<h4>Физическое лицо, Москва, Санкт-Петербург</h4><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td colspan=2><font face="Arial" size=2 color="#ffffff">Вознаграждение Медиапартнера за одну минуту соединения, руб., без НДС</td></tr>
<tr><td widht="150"><font face="Arial" size=2 color="#ffffff">МТС</td><td align=center valign=middle rowspan=3><font face="Arial" size=2 color="#ffffff">8,50р.</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td></tr>

</table><br>
При предоставлении статистики в подсчете учитываются защитные пороги и округление:<br><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td><font face="Arial" size=2 color="#ffffff">Оператор</td><td><font face="Arial" size=2 color="#ffffff">Защитный порог, сек</td><td><font face="Arial" size=2 color="#ffffff">Округление</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">МТС</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td><td><font face="Arial" size=2 color="#ffffff">10</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>

</table>

<?


}
else if(($_POST['us']==2)&&($_POST['type']==2)){
?>
<h4>Физическое лицо, ФО РФ, номер мобильного оператора</h4><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td colspan=2><font face="Arial" size=2 color="#ffffff">Вознаграждение Медиапартнера за одну минуту соединения, руб., без НДС</td></tr>
<tr><td widht="150"><font face="Arial" size=2 color="#ffffff">МТС</td><td align=center valign=middle rowspan=3><font face="Arial" size=2 color="#ffffff">8,00р.</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td></tr>

</table><br>
При предоставлении статистики в подсчете учитываются защитные пороги и округление:<br><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td><font face="Arial" size=2 color="#ffffff">Оператор</td><td><font face="Arial" size=2 color="#ffffff">Защитный порог, сек</td><td><font face="Arial" size=2 color="#ffffff">Округление</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">МТС</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td><td><font face="Arial" size=2 color="#ffffff">10</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>

</table>

<?


}
else if(($_POST['us']==2)&&($_POST['type']==3)){
?>
<h4>Физическое лицо, ФО РФ, "городской номер"</h4><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td colspan=2><font face="Arial" size=2 color="#ffffff">Вознаграждение Медиапартнера за одну минуту соединения, руб., без НДС</td></tr>
<tr><td widht="150"><font face="Arial" size=2 color="#ffffff">МТС</td><td align=center valign=middle rowspan=3><font face="Arial" size=2 color="#ffffff">7,00р.</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td></tr>

</table><br>
При предоставлении статистики в подсчете учитываются защитные пороги и округление:<br><br>
<table cellspacing=0 cellpadding=5 border=1><tr>
<td><font face="Arial" size=2 color="#ffffff">Оператор</td><td><font face="Arial" size=2 color="#ffffff">Защитный порог, сек</td><td><font face="Arial" size=2 color="#ffffff">Округление</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">МТС</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Билайн</td><td><font face="Arial" size=2 color="#ffffff">10</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>
<tr><td><font face="Arial" size=2 color="#ffffff">Мегафон</td><td><font face="Arial" size=2 color="#ffffff">5</td><td><font face="Arial" size=2 color="#ffffff">поминутное</td></tr>

</table>

<?


}
echo "<br><a href='tar.php'>Назад</a>";
?>
<br><br>

