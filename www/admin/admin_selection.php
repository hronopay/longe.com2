<script language="JavaScript" type="text/javascript">
<!--
function inver(div_id)
{
 if (document.all[div_id].style.display=="none")
 {
  document.all[div_id].style.display="block";
 }
 else
 {
  document.all[div_id].style.display="none";
 }
}
// -->
</script>
<h3>����������� <font color="#FF0000" style="text-decoration:blink; ">��������</font></h3>
<?
// ��������� ������� ���������� get-������
if ( !defined('IS_ADMIN') ) { die("�� �����"); }

include("admfuncz.php");

open_connection();

$mode = getvar('mode');
if (!isset($mode)) $mode="none";

ticketsnoanswer (); docfilescheck ();

switch ($mode)
	{
	
	case "start": echo "����� �������"; stats_total($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "ivr": echo "���������� �������� IVR:"; stats_IVR($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "prefix": echo "���������� ����������:"; stats_Prefix($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "prefix_old": echo "������� �� �������:"; stats_PrefixOLD($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "poisk": echo "�����:"; stats_abonent($datefrom = make_date_c('from'), $dateto = make_date('to')); break;

	case "profession": echo "���������� �� ��������������:"; /* stats_PROF */ NewStats_PROF($datefrom = make_date_c('from'), $dateto = make_date('to')); break;

	case "professionanalys": echo "������ �� ��������������:";  Analys_PROF($datefrom = make_date_c('from'), $dateto = make_date('to')); break;

	case "profdirect": echo "�������������:"; profdirect(); break;

	case "total_stats": echo "����� ����������:"; stats_total($datefrom = make_date_c('from'), $dateto = make_date('to')); break;
	
	case "by_partner":  if($_POST['userlogin']){ echo "C��������� �� ������� ".$_POST['userlogin'].". "; stats_part($_POST['userlogin'],$datefrom = make_date_c('from'), $dateto = make_date('to'));  } else if($_GET['userlogin']){ echo "C��������� �� ������� ".$_GET['userlogin'].":"; stats_part($_GET['userlogin'],$datefrom = make_date_c('from'), $dateto = make_date('to')); } else die(); break;
	
	case "edit": edit_part($_POST['userlogin'],$_POST['pass_hash'],$_POST['fio'],$_POST['mail'],$_POST['icq'],$_POST['tele_contact'],$_POST['additional'],$_POST['redir_num'],$_POST['partner_num'],$_POST['code'],$_POST['excode'], $_POST['vremya1'], $_POST['vremya2'],$_POST['origname_list'], $_POST['change_radio'], $_POST['origname_new'],$_POST['sday'], $_POST['smonth'], $_POST['syear'],$_POST['eday'], $_POST['emonth'], $_POST['eyear'], $_POST['type']	 ); break;

	case "total_stats_date": echo "����� ����������:"; $from=$_POST['datefromYear']."-".$_POST['datefromMonth']."-".$_POST['datefromDay']." 00:00:00"; $to=$_POST['datetoYear']."-".$_POST['datetoMonth']."-".$_POST['datetoDay']." 23:59:59";  stats_total($from,$to); break;
	
	case "partners": echo "���������� ���������:"; partners(); break;
	
	case "show_partner": echo "���������� ���������:"; show_partner($_POST['userlogin']); break;

	case "create_partner": echo "������� ����� �����:"; create_partner($_POST['userloginfirst'],$_POST['newcode']); break;
	
	case "delete_partner": echo "�������� ������:"; delete_partner($_POST['userlogin']); break;
	
	case "mass_delete_partner": echo "�������� ������:"; mass_delete_partner(); break;
	
	case "clientpartner": echo "���������� �������� ���������:"; stat_client ($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "reclam_comp": echo "���������� ��������� �������� :"; stat_ReCo ($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "regs": echo "�����������:"; Regs ($datefrom = make_date_c('from'), $dateto = make_date('to')); break;

	case "files": echo "�����"; files (); break;



	case "809regs": echo "����������� 8-809-���-��-��:"; Regs809 ($datefrom = make_date_c('from'), $dateto = make_date('to')); break;

	case "809client": echo "����������� :"; clientReg809 (); break;





	case "client": echo "����������� :"; clientReg (); break;

	case "reg_stat": echo "���������� ����������� :"; RegStat ($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "refresh_stat": echo "���������� ���������� :"; RefreshStat (); break;

	case "client_edit": echo ""; ClientEdit ($_POST['userloginfirst'],$_POST['newcode'],$_POST['pass_hash'],$_POST['fio'],$_POST['mail'],$_POST['icq'],$_POST['tele_contact'],$_POST['additional'],$_POST['redir_num'],$_POST['partner_num'],$_POST['code'],$_POST['excode'], $_POST['vremya1'], $_POST['vremya2'],$_POST['origname_list'], $_POST['change_radio'], $_POST['origname_new'],$_POST['sday'], $_POST['smonth'], $_POST['syear'],$_POST['eday'], $_POST['emonth'], $_POST['eyear'], $_POST['type'], $_POST['wmpurse'], $_POST['activationdate'], $_POST['activationtime']	); break;

#	case "payouts": echo "������� :"; PayOuts ($datefrom = make_date_c('from'), $dateto = MakeDateForNextMonth()); break;
	case "payouts": echo "������� :"; PayOuts ($datefrom = make_date_2008_06('from'), $dateto = MakeDateForNextMonth_2008_06()); break;

	case "payouts_archive": echo "����� �������� :"; PayOutsArchive ($datefrom = make_date_c('from'), $dateto = MakeDateForNextMonth()); break;

	case "checkfrod": echo "�������� ���� �� ��� :"; CheckFrod ($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "checkBEEfrod": echo "�������� ���� �� ������:"; checkBEEfrod ($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "markfrod":  MarkFrod (); break;

	case "MarkBeeFrod":  MarkBeeFrod (); break;

	case "cancel_frod":  cancel_frod (); break;

	case "cancel_bee_frod":  cancel_bee_frod (); break;

	case "payitout": echo "�������� :"; PayItOut ($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "cancelpayout": echo "������ ������:<br><br>"; CancelPayOut (); break;

	case "inprogress": echo "������������� :"; InProgress ($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "email_allpartners": echo "�������� ���������:"; email_allpartners (); break;

	case "email_allpartners_do": echo "���������� �������� ���������:"; email_allpartners_do (); break;

	case "partner_status": echo "������� ���������:"; partner_status (); break;

	case "all_partners_last": echo "������� ��������� ���������: ������ ���������� ������"; all_partners_last (); break;

	case "all_partners": echo "������� ��������� ���������: ������ ����������"; all_partners (); break;

	case "payin": echo "���������� �������"; payin (); break;

	case "tickets": echo "���������"; tickets (); break;

	case "nopayed_partners": echo "���������"; nopayed_partners (); break;

	case "oplachenopodkl": echo "�������� ��� �����������"; oplachenopodkl (); break;

	case "oplachenopodkl_2": echo "�������� ��� �����������"; oplachenopodkl_2 (); break;

	case "mtsforfrod": echo "��� ��� �����:"; mtsforfrod($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "beeforfrod": echo "������ ��� �����:"; beeforfrod($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "megforfrod": echo "������� ��� �����:"; megforfrod($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "docscheck": echo "�������� ���������� �� ���������:"; docscheck(); break;

	case "nlcalculator": echo "������� �� �������:"; nlcalculator($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "operators": echo "������� �� �������:"; operators(); break;

	default : Regs ($datefrom = make_date_c('from'), $dateto = make_date('to'));
	}


close_connection();
?>


