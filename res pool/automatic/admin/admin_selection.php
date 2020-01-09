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
<h3>Админпанель <font color="#FF0000" >AdressMoscow</font></h3>
<?
// обработка событий админского get-движка
if ( !defined('IS_ADMIN') ) { die("На выход"); }

include("admfuncz.php");

open_connection();

$mode = getvar('mode');
if (!isset($mode)) $mode="none";

ticketsnoanswer ();

switch ($mode)
	{
	
	case "start": echo "Общая прибыль"; stats_total($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "ivr": echo "СТАТИСТИКА КЛИЕНТОВ IVR:"; stats_IVR($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "prefix": echo "Управление префиксами:"; stats_Prefix($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "prefix_old": echo "Сводная по звонкам:"; stats_PrefixOLD($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "poisk": echo "ПОИСК:"; stats_abonent($datefrom = make_date_c('from'), $dateto = make_date('to')); break;

	case "profession": echo "РАЗДЕЛЕНИЕ ПО СПЕЦИАЛЬНОСТЯМ:"; /* stats_PROF */ NewStats_PROF($datefrom = make_date_c('from'), $dateto = make_date('to')); break;

	case "professionanalys": echo "АНАЛИЗ ПО СПЕЦИАЛЬНОСТЯМ:";  Analys_PROF($datefrom = make_date_c('from'), $dateto = make_date('to')); break;

	case "profdirect": echo "СПЕЦИАЛЬНОСТИ:"; profdirect(); break;

	case "total_stats": echo "Общая статистика:"; stats_total($datefrom = make_date_c('from'), $dateto = make_date('to')); break;
	
	case "by_partner":  if($_POST['userlogin']){ echo "Cтатистика по партнёру ".$_POST['userlogin'].". "; stats_part($_POST['userlogin'],$datefrom = make_date_c('from'), $dateto = make_date('to'));  } else if($_GET['userlogin']){ echo "Cтатистика по партнёру ".$_GET['userlogin'].":"; stats_part($_GET['userlogin'],$datefrom = make_date_c('from'), $dateto = make_date('to')); } else die(); break;
	
	case "edit": edit_part($_POST['userlogin'],$_POST['pass_hash'],$_POST['fio'],$_POST['mail'],$_POST['icq'],$_POST['tele_contact'],$_POST['additional'],$_POST['redir_num'],$_POST['partner_num'],$_POST['code'],$_POST['excode'], $_POST['vremya1'], $_POST['vremya2'],$_POST['origname_list'], $_POST['change_radio'], $_POST['origname_new'],$_POST['sday'], $_POST['smonth'], $_POST['syear'],$_POST['eday'], $_POST['emonth'], $_POST['eyear'], $_POST['type']	 ); break;

	case "total_stats_date": echo "Общая статистика:"; $from=$_POST['datefromYear']."-".$_POST['datefromMonth']."-".$_POST['datefromDay']." 00:00:00"; $to=$_POST['datetoYear']."-".$_POST['datetoMonth']."-".$_POST['datetoDay']." 23:59:59";  stats_total($from,$to); break;
	
	case "partners": echo "Управление партнёрами:"; partners(); break;
	
	case "show_partner": echo "Управление партнёрами:"; show_partner($_POST['userlogin']); break;

	case "create_partner": echo "Создать новый логин:"; create_partner($_POST['userloginfirst'],$_POST['newcode']); break;
	
	case "delete_partner": echo "Удаление логина:"; delete_partner($_POST['userlogin']); break;
	
	case "mass_delete_partner": echo "Удаление логина:"; mass_delete_partner(); break;
	
	case "clientpartner": echo "СТАТИСТИКА КЛИЕНТОВ ПАРТНЕРКИ:"; stat_client ($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "reclam_comp": echo "СТАТИСТИКА РЕКЛАМНОЙ КАМПАНИИ :"; stat_ReCo ($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "regs": echo "РЕГИСТРАЦИИ:"; Regs ($datefrom = make_date_c('from'), $dateto = make_date('to')); break;




	case "809regs": echo "РЕГИСТРАЦИИ 8-809-ХХХ-ХХ-ХХ:"; Regs809 ($datefrom = make_date_c('from'), $dateto = make_date('to')); break;

	case "809client": echo "РЕГИСТРАЦИИ :"; clientReg809 (); break;





	case "client": echo "РЕГИСТРАЦИИ :"; clientReg (); break;

	case "reg_stat": echo "СТАТИСТИКА РЕГИСТРАЦИИ :"; RegStat ($datefrom = make_date('from'), $dateto = make_date('to')); break;

	case "refresh_stat": echo "Обновление статистики :"; RefreshStat (); break;

	case "client_edit": echo ""; ClientEdit ($_POST['userloginfirst'],$_POST['newcode'],$_POST['pass_hash'],$_POST['fio'],$_POST['mail'],$_POST['icq'],$_POST['tele_contact'],$_POST['additional'],$_POST['redir_num'],$_POST['partner_num'],$_POST['code'],$_POST['excode'], $_POST['vremya1'], $_POST['vremya2'],$_POST['origname_list'], $_POST['change_radio'], $_POST['origname_new'],$_POST['sday'], $_POST['smonth'], $_POST['syear'],$_POST['eday'], $_POST['emonth'], $_POST['eyear'], $_POST['type'], $_POST['wmpurse'], $_POST['activationdate'], $_POST['activationtime']	); break;

#	case "payouts": echo "Выплаты :"; PayOuts ($datefrom = make_date_c('from'), $dateto = MakeDateForNextMonth()); break;
	case "payouts": echo "Выплаты :"; PayOuts ($datefrom = make_date_2008_06('from'), $dateto = MakeDateForNextMonth_2008_06()); break;

	case "payouts_archive": echo "Архив платежей :"; PayOutsArchive ($datefrom = make_date_c('from'), $dateto = MakeDateForNextMonth()); break;

	case "checkfrod": echo "Отметить фрод :"; CheckFrod ($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "markfrod":  MarkFrod (); break;

	case "cancel_frod":  cancel_frod (); break;

	case "payitout": echo "Оплачено :"; PayItOut ($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "cancelpayout": echo "Отмена оплаты:<br><br>"; CancelPayOut (); break;

	case "inprogress": echo "Расчитывается :"; InProgress ($datefrom = make_date_c('from'), $dateto = make_date_c('to')); break;

	case "email_allpartners": echo "Рассылка партнерам:"; email_allpartners (); break;

	case "email_allpartners_do": echo "Выполнение рассылки партнерам:"; email_allpartners_do (); break;

	case "partner_status": echo "Статусы Партнеров:"; partner_status (); break;

	case "all_partners": echo "Быстрое упрвление партнёрами: Статус документов"; all_partners (); break;

	case "payin": echo "Пополнение Баланса"; payin (); break;

	case "tickets": echo "Переписка"; tickets (); break;

	case "mtsforfrod": echo "МТС для фрода:"; mtsforfrod($datefrom = make_date('from'), $dateto = make_date('to')); break;

	default : Regs ($datefrom = make_date_c('from'), $dateto = make_date('to'));
	}


close_connection();
?>


