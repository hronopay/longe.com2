<?php 
$mo = ' style="color:#FF0000; font-size:14px; font-weight:bold; "';
$moleft = ' style="color:#FF0000; font-size:14px; font-weight:bold; margin-left:15px;"';
$left = ' style="margin-left:15px"';
$mode = isset($_GET['mode']) ? $_GET['mode'] : $_POST['mode'];
?>
<fieldset><legend>�����������</legend>
<table border=0>
<tr valign=top align=left>
<td colspan=3></td>
</tr>
<tr valign=top><td width=20>&nbsp;</td>
<td width="170"><font face="Arial" size=2>

<li ><a href="../admin77/index.php" target="_blank">������� ADRESS-MOSCOW</a><br>
<br>
<?php /* <li <? if ($mode == 'ivr') echo $mo?>> <a href="index.php?mode=ivr">���������� �������� IVR</a><br>
<li <? if ($mode == 'clientpartner') echo $mo?>>  <a href="index.php?mode=clientpartner">���������� �������� ���������</a> <br>
<li <? if ($mode == 'reclam_comp') echo $mo?>> <a href="index.php?mode=reclam_comp">���������� ��������� ��������</a> <br>
<li <? if ($mode == 'start') echo $mo?>>  <a href="index.php?mode=start">����� �������</a> <br> */?>
<li <? if ($mode == 'partners') echo $mo?>> <a href="index.php?mode=partners">���������� ���������</a><br>
<li <? if ($mode == 'all_partners_last') echo $mo?>> <a href="index.php?mode=all_partners_last">���., ���. ������</a><br>
<li <? if ($mode == 'all_partners') echo $mo?>> <a href="index.php?mode=all_partners">���., ���.</a><br>
<li <? if ($mode == 'nopayed_partners') echo $mo?>> <a href="index.php?mode=nopayed_partners">������������ �����.</a><br>
<li <? if ($mode == 'partner_status') echo $mo?>> <a href="index.php?mode=partner_status">������� ���������</a><br>
<li <? if ($mode == 'profession') echo $mo?>>  <a href="index.php?mode=profession">���������� �� ��������������</a> <br>
<li <? if ($mode == 'professionanalys') echo $mo?>>  <a href="index.php?mode=professionanalys">������ �� ��������������</a> <br>
<li <? if ($mode == 'prefix') echo $mo?>>  <a href="index.php?mode=prefix">���������� ����������</a> <br>
<li <? if ($mode == 'prefix_old') echo $mo?>>  <a href="index.php?mode=prefix_old">������� �� �������</a> <br>
<li <? if ($mode == 'poisk') echo $mo?>>  <a href="index.php?mode=poisk">�����</a> <br>
<li <? if ($mode == 'regs') echo $mo?>>  <a href="index.php?mode=regs">�����������</a> <br>
<li <? if ($mode == 'reg_stat') echo $mo?>>  <a href="index.php?mode=reg_stat">���������� �����������</a> <br>
<li <? if ($mode == 'news') echo $mo?>>  <a href="news/news_index.php?mode=news" target="_blank">�������</a> <br>
 <strong>�������</strong> <br>
<li <? if ($mode == 'payouts') echo $moleft; else  echo $left;?>> <a href="index.php?mode=payouts"> �������</a>  <br>
<li <? if ($mode == 'payouts_archive') echo $moleft; else  echo $left;?>> <a href="index.php?mode=payouts_archive">����� �������� </a> <br>
<li <? if ($mode == 'mtsforfrod') echo $mo?>>  <a href="index.php?mode=mtsforfrod">��� ��� �����</a> <br>
<li <? if ($mode == 'beeforfrod') echo $mo?>>  <a href="index.php?mode=beeforfrod">������ ��� �����</a> <br>
<li <? if ($mode == 'megforfrod') echo $mo?>>  <a href="index.php?mode=megforfrod">������� ��� �����</a> <br>
<li <? if ($mode == 'refresh_stat') echo $mo?>>  <a href="index.php?mode=refresh_stat">���������� ����������</a> <br>
<li <? if ($mode == 'email_allpartners') echo $mo?>>  <a href="index.php?mode=email_allpartners">�������� ���������</a> <br>
<li <? if ($mode == 'tickets') echo $mo?>>  <a href="index.php?mode=tickets">���������</a> <br>
<li <? if ($mode == 'files') echo $mo?>>  <a href="index.php?mode=files">����� Upload</a> <br>
<li <? if ($mode == 'docscheck') echo $mo?>>  <a href="index.php?mode=docscheck">����� ��������� ��������</a> <br>
<li <? if ($mode == 'nlcalculator') echo $mo?>>  <a href="index.php?mode=nlcalculator">������ �� ��</a> <br>
<li <? if ($mode == 'operators') echo $mo?>>  <a href="index.php?mode=operators">--���������--</a> <br>
<li ><a href="../index.php">�� ����</a><br>
<li ><a href="../adm_cabinet.php">� ������� ��������</a><br>
<li <? if ($mode == 'logout') echo $mo?>><a href="../logout.php">����� �� ������</a><br><br>
<?php /* <br>
<br>

<li <? if ($mode == '809regs') echo $mo?>>  <a href="index.php?mode=809regs">����������� 809</a> <br>
<li ><a href="../admin809/index.php" target="_blank">������� �������</a><br> */?>

</font>
</td><td width=9></td>
</tr>
</table>
</fieldset>


