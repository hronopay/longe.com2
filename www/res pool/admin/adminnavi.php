<?php 
$mo = ' style="color:#FF0000; font-size:14px; font-weight:bold; "';
$moleft = ' style="color:#FF0000; font-size:14px; font-weight:bold; margin-left:15px;"';
$left = ' style="margin-left:15px"';
$mode = isset($_GET['mode']) ? $_GET['mode'] : $_POST['mode'];
?>
<fieldset><legend>Админпанель <font color="#FF0000">AD-MOS</font></legend>
<table border=0>
<tr valign=top align=left>
<td colspan=3></td>
</tr>
<tr valign=top><td width=20>&nbsp;</td>
<td width="170"><font face="Arial" size=2>
<?php /* 
<li <? if ($mode == 'ivr') echo $mo?>> <a href="index.php?mode=ivr">Статистика клиентов</a><br>
<li <? if ($mode == 'start') echo $mo?>>  <a href="index.php?mode=start">Общая прибыль</a> <br>
<li <? if ($mode == 'poisk') echo $mo?>>  <a href="index.php?mode=poisk">Поиск</a> <br>
<li <? if ($mode == 'regs') echo $mo?>>  <a href="index.php?mode=regs">Регистрации</a> <br>
<li <? if ($mode == 'news') echo $mo?>>  <a href="../admin/news/news_index.php?mode=news" target="_blank">Новости</a> <br>

 <strong>Бухучет</strong> <br>
<li <? if ($mode == 'payouts') echo $moleft; else  echo $left;?>> <a href="index.php?mode=payouts"> Выплаты</a>  <br>
<li <? if ($mode == 'payouts_archive') echo $moleft; else  echo $left;?>> <a href="index.php?mode=payouts_archive">Архив платежей </a> <br>
<li <? if ($mode == 'email_allpartners') echo $mo?>>  <a href="index.php?mode=email_allpartners">Рассылка партнерам</a> <br>
<li <? if ($mode == 'tickets') echo $mo?>>  <a href="index.php?mode=tickets">Переписка</a> <br>
<li <? if ($mode == 'files') echo $mo?>>  <a href="index.php?mode=files">Файлы Upload</a> <br>
 */?>
<li <? if ($mode == 'partners') echo $mo?>> <a href="index.php?mode=partners">Управление партнёрами</a><br>
<li <? if ($mode == 'all_partners') echo $mo?>> <a href="index.php?mode=show_all_partners">Документы, Баланс</a><br>
<li> <a href="../automatic/admin/index.php?mode=all_partners">Автоматизация</a><br>
<br>
<br>

<li ><a href="../index.php" target="_blank">На сайт</a><br>
<li <? if ($mode == 'logout') echo $mo?>><a href="../logout.php">Выход из Админа</a><br><br>
</font>
</td><td width=9></td>
</tr>
</table>   /automatic/admin
</fieldset>


