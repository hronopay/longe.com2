<?
// обработка событий get-движка польз. раздела
include("funcz.php");
show_status();
$mode = getvar('mode');
if (!isset($mode)) $mode="none";

switch ($mode)
	{
	case "current_stats" : showstats_cur (   $datefrom = make_date_c('from'),  $dateto = make_date('to')   );  
		break;
	
	case "stats" : showstats (   $datefrom = make_date('from'),  $dateto = make_date('to')   );  
		break;
	
	case "data" : showdata(USER_ID); 
		break;
	
	case "part_edit" : edited($_POST['user_id'],$_POST['fio'],$_POST['mail'],$_POST['icq'],$_POST['tele_contact'],$_POST['additional'],$_POST['vremya1'],$_POST['vremya2']); 
		break;
	
	case "changepass" : changing(USER_ID); 
		break;
	
	case "changed" : changed($_POST['user_id'],$_POST['pass'],$_POST['oldpass'],$_POST['passconf']); 
		break;
	
	case "payouts" : Payouts(USER_ID); 
		break;
	
	case "balance" : Balance(USER_ID); 
		break;
	
	case "docs" : Docs(USER_ID); 
		break;
	
	case "b_requesites" : b_requesites(USER_ID); 
		break;
	
	case "get_money" 	: get_money(USER_ID); 
		break;
	
	case "payshort" : payshort(USER_ID); 
		break;
	
	case "payshortchange" : payshortchange(USER_ID); 
		break;
	
	case "ticket" 		: ticket(USER_ID); 
		break;
	
	case "files" 		: files(USER_ID); 
		break;
	
	case "docfiles" 		: docfiles(USER_ID); 
		break;
	
	default : 	showstats (   $datefrom = make_date('from'),  $dateto = make_date('to')   );  
				//showstats_cur (   $datefrom = make_date_c('from'),  $dateto = make_date_c('to')   );  
	}

?>


