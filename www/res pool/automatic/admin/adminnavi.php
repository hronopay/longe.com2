<?php 
$mo = ' style="color:#FF0000; font-size:14px; font-weight:bold; "';
$moleft = ' style="color:#FF0000; font-size:14px; font-weight:bold; margin-left:15px;"';
$left = ' style="margin-left:15px"';
$mode = isset($_GET['mode']) ? $_GET['mode'] : $_POST['mode'];
?>
<fieldset><legend>Админпанель</legend>
<table border=0>
<tr valign=top align=left>
<td colspan=3></td>
</tr>
<tr valign=top><td width=20>&nbsp;</td>
<td width="170"><font face="Arial" size=2>


<li <? if ($mode == 'all_partners') echo $mo?>> <a href="index.php?mode=all_partners">Документы, Баланс</a><br>
<li <? if ($mode == 'regs') echo $mo?>>  <a href="index.php?mode=regs">Регистрации</a> <br>
<li> <a href="../../admin/index.php?mode=show_all_partners">Юр. Адреса</a><br>

<?php /* 
<li ><a href="../adm_cabinet.php">В кабинет партнера</a><br>
<li <? if ($mode == 'ivr') echo $mo?>> <a href="index.php?mode=ivr">Статистика клиентов IVR</a><br>
<li <? if ($mode == 'clientpartner') echo $mo?>>  <a href="index.php?mode=clientpartner">Статистика клиентов партнерки</a> <br>
<li <? if ($mode == 'reclam_comp') echo $mo?>> <a href="index.php?mode=reclam_comp">Статистика рекламной кампании</a> <br>
<li <? if ($mode == 'start') echo $mo?>>  <a href="index.php?mode=start">Общая прибыль</a> <br>
<li <? if ($mode == 'partners') echo $mo?>> <a href="index.php?mode=partners">Управление партнёрами</a><br>
<li <? if ($mode == 'partner_status') echo $mo?>> <a href="index.php?mode=partner_status">Статусы Партнеров</a><br>
<li <? if ($mode == 'profession') echo $mo?>>  <a href="index.php?mode=profession">Разделение по специальностям</a> <br>
<li <? if ($mode == 'professionanalys') echo $mo?>>  <a href="index.php?mode=professionanalys">Анализ по специальностям</a> <br>
<li <? if ($mode == 'prefix') echo $mo?>>  <a href="index.php?mode=prefix">Управление префиксами</a> <br>
<li <? if ($mode == 'prefix_old') echo $mo?>>  <a href="index.php?mode=prefix_old">Сводная по звонкам</a> <br>
<li <? if ($mode == 'poisk') echo $mo?>>  <a href="index.php?mode=poisk">Поиск</a> <br>
<li <? if ($mode == 'reg_stat') echo $mo?>>  <a href="index.php?mode=reg_stat">Статистика Регистрации</a> <br>
<li <? if ($mode == 'news') echo $mo?>>  <a href="news/news_index.php?mode=news" target="_blank">Новости</a> <br>
 <strong>Бухучет</strong> <br>
<li <? if ($mode == 'payouts') echo $moleft; else  echo $left;?>> <a href="index.php?mode=payouts"> Выплаты</a>  <br>
<li <? if ($mode == 'payouts_archive') echo $moleft; else  echo $left;?>> <a href="index.php?mode=payouts_archive">Архив платежей </a> <br>
<li <? if ($mode == 'prefix_old') echo $mo?>>  <a href="index.php?mode=mtsforfrod">МТС для фрода</a> <br>
<li <? if ($mode == 'refresh_stat') echo $mo?>>  <a href="index.php?mode=refresh_stat">Обновление статистики</a> <br>
<li <? if ($mode == 'email_allpartners') echo $mo?>>  <a href="index.php?mode=email_allpartners">Рассылка партнерам</a> <br>
<li <? if ($mode == 'tickets') echo $mo?>>  <a href="index.php?mode=tickets">Переписка</a> <br>
<li ><a href="../admin809/index.php" target="_blank">Админка ДЛИННЫЕ</a><br>
 */?>
<br><br>
<li ><a href="../index.php">На сайт</a><br>
<li <? if ($mode == 'logout') echo $mo?>><a href="../logout.php">Выход из Админа</a><br><br>
<br>
<br>


</font>
</td><td width=9></td>
</tr>
</table>
</fieldset>


