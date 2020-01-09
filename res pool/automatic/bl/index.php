<?php
define('CA2',dirname(__FILE__));
define('CB3','/bloly-theme/');

require_once(dirname(__FILE__)."/bloly-inc/settings.php");
require_once(dirname(__FILE__)."/bloly-inc/lang.php");

if(ERROR_LEVEL<1) {error_reporting(0);}


unset($SettingsArray);
unset($CQ8);
unset($ActionAndOffset);
unset($CS0);
$CS0=null;
$SettingsArray['year' ]=@ (int)$_GET['year'];
$SettingsArray['month']=@ (int)$_GET['month'];
$SettingsArray['day' ]=@ (int)$_GET['day'];
$SettingsArray['number']=@ (int)$_GET['number'];
$SettingsArray['offset']=@ (int)$_GET['offset'];
$SettingsArray['user' ]=@ (int)$_GET['user'];
$SettingsArray['mod_rewrite']=@ (int)$_GET['rewrite'];
$SettingsArray['action']=@ (int)$_GET['action'];
$SettingsArray['email' ]=@ preg_replace("/[^\w\._@-]+/","",$_COOKIE['email']);
$SettingsArray['password' ]=@ CookiePassword($_COOKIE['password']);
$SettingsArray['name' ]="Anonymous";
$SettingsArray['level']=0;
$SettingsArray['BLOG_TITLE']=BLOG_TITLE;
$SettingsArray['BLOG_SLOGAN']=BLOG_SLOGAN;
if($SettingsArray['year']<0 || $SettingsArray['year']>2100){
	$SettingsArray['year']=date("Y");
	}
if($SettingsArray['month']<0 || $SettingsArray['month']>12){
	$SettingsArray['month']=date("m");
	}
if($SettingsArray['day']<0 || $SettingsArray['day']>31)		{$SettingsArray['day']=date("d");}
$SettingsArray['PHP_SELF']=@$_SERVER['PHP_SELF'];
$SettingsArray['URL_INDEX']=@$_SERVER['PHP_SELF'];
$SettingsArray['URL_SELF']=@WorkOverUrl("");
$ActionAndOffset['action']=11;
$SettingsArray['URL_SEARCH']=WorkOverUrl("");
foreach($SettingsArray as $key=>$value) {
	$ActionAndOffset[$key]=0;
}
$ActionAndOffset['action']=12;
$SettingsArray['URL_RSS']=WorkOverUrl("");
$ActionAndOffset['offset']=1;
$SettingsArray['URL_RSS_ALL']=WorkOverUrl("");
unset($ActionAndOffset);
$CV3='';


if(!function_exists('substr_compare')){
	function substr_compare($CW4,$CX5,$CY6,$CZ7=NULL,$DA8=false){
		$CY6=(int) $CY6;
		if($CY6 >= strlen($CW4)) return false;
		if($CY6 == 0 && is_int($CZ7) && $DA8 === true){
			return strncasecmp($CW4,$CX5,$CZ7);
		}
		if(is_int($CZ7)){
			$DB9=substr($CW4,$CY6,$CZ7);
			$DC0=substr($CX5,0,$CZ7);
		}
		else{
			$DB9=substr($CW4,$CY6);
			$DC0=$CX5;
		}
		if($DA8 === true){
			return strcasecmp($DB9,$DC0);
		}
		return strcmp($DB9,$DC0);
	}
}







$FU0=null;
$FV1=null;


@ Mysql_Connect(DB_HOST,DB_USER,DB_PASSWORD);
 if(Mysql_Errno()){$CV3=Mysql_Error();
 }

 @ Mysql_Select_db(DB_NAME);

 if(Mysql_Errno()){
 	$CV3 .= "\n" . Mysql_Error();
 }

 BH3($SettingsArray['email'],$SettingsArray['password']);

 if(!isset($_SERVER['NOTMPL'])){
 	if(1==$SettingsArray['action']){
 		BG2();
 		AJ9(CB3.'post.tmpl');
 	}
 	else if(0==$SettingsArray['action']){
 		AJ9(CB3.'main.tmpl');
 	}
 	else if(3==$SettingsArray['action']){
 		if(!BI4()){
 			@ BH3($_POST['email'],$_POST['password']);
		 }

		 AJ9(CB3.'auth.tmpl');
 	}
 	else if(4==$SettingsArray['action']){
 		BD9(true);
 		AJ9(CB3.'main.tmpl');
 	}
 	else if(2==$SettingsArray['action']){
 		AJ9(CB3.'user.tmpl');
 	}
 	else if(5==$SettingsArray['action']){
 		BG2();
 		AJ9(CB3.'new.tmpl');
 	}
 	else if(6==$SettingsArray['action']){
 		BL7();
 		AJ9(CB3.'account.tmpl');
 	}
 	else if(7==$SettingsArray['action']){
 		BM8();
 		AJ9(CB3.'edit_msg.tmpl');
 	}
 	else if(8==$SettingsArray['action']){
 		BM8();
 		AJ9(CB3.'edit_com.tmpl');
 	}
 	else if(9==$SettingsArray['action']){
 		BN9();
 		AJ9(CB3.'blank.tmpl');
 	}
 	else if(10==$SettingsArray['action']){
 		BP1();
 		AJ9(CB3.'blank.tmpl');
 	}
 	else if(11==$SettingsArray['action']){
 		BQ2();
 		AJ9(CB3.'blank.tmpl');
 	}
 	else if(11==$SettingsArray['action']){
 		BQ2();
 		AJ9(CB3.'blank.tmpl');
 	}
 	else {
 		BT5();
 	}
 }






 ##############################################################################
 ##############################################################################
 ##############################################################################
 ##############################################################################
 ##############################################################################
 ##############################################################################















































function F_Error($DD1){
	return "<span class=error>&nbsp;".str_replace("\n","<br>&nbsp;",htmlspecialchars($DD1))." &nbsp;</span><br>\n";
}




function AC2($DD1){
	global $CV3;
	if(!headers_sent()){
		echo "<html><body bgcolor=#FFFFFF text=#000000><p class=error>{$CV3}</p>\n";
	}
	echo F_Error($DD1);
}




function AD3($CX5,$DE2){
	global $CS0;
	if(ERROR_LEVEL>0) $CX5.="\n".Mysql_Error();
	if(ERROR_LEVEL & 128) $CX5.="\n".str_replace($CS0['password'],"<i>skipped</i>",$DE2);
	return $CX5;
}




function AE4($CX5,$DE2){
	AC2(AD3($CX5,$DE2))."<BR>";
}




function CookiePassword($DF3){
	return @ preg_replace("/[^a-zA-Z0-9]+/","",$DF3);
}




function AG6($DG4){
	$DH5=@filesize($DG4);
	$DI6=@fopen($DG4,"r");
	if($DI6){
		$CX5=fread($DI6,$DH5);
		fclose($DI6);
		return $CX5;
	}
	return F_Error("<include> file not found");
}





function AH7($DJ7){
	if(count($DJ7)!=2){
		return F_Error("Bad <include> format!");
	}
	return AI8(AG6(CA2.$DJ7[1]));
}





function AI8($CX5){
	return preg_replace_callback("/<include\\s+([\w+\.\/-]+)>/is","AH7",$CX5);
}








function AJ9($DG4){
	$DG4=CA2.$DG4;
	$DK8=@File($DG4);
	if($DK8 && @count($DK8)>1){
		$DL9=AI8(implode("",$DK8));
		$DL9=preg_replace_callback("/\<%(\w+)%\>/i",'AM2',$DL9);
		$DM0="PHAhvhbafdjkhvvkrvjablkbG9seS5jb20+QmxvbHk8L2E+IHYxLjMgYnkgI3NvZnRjYWIuY29tPlNvZnRDYWIgSW5jPC9hPjwvcD4K";
		$DN1="PGEgY2xhc3M9Y3BybCB0YXJnZXQ9X2JsYW5rIGhyZWY9aHR0cDovL3d3dy4=";
		$DO2=base64_decode("PC9ib2R5");
		$DP3=str_replace("#",base64_decode($DN1),base64_decode($DM0));
		echo str_replace($DO2,$DP3.$DO2,$DL9);
	}
	else{
		AC2("Could not read template");
	}
}





function AK0($DF3){
	$DF3=str_replace("\\","\\\\",$DF3);
	$DF3=str_replace("\"","\\\"",$DF3);
	$DF3=str_replace("\n","\\n",$DF3);
	$DF3=str_replace("\r","\\r",$DF3);
	$DF3=str_replace("\t","\\t",$DF3);
	return $DF3;
}





function AL1($DF3,$DQ4,$DR5){
	if($DQ4){
		return AK0($DF3);
	}
	if($DR5){
		return htmlspecialchars($DF3);
	}
	return $DF3;
}





function AM2($DJ7){
	global $SettingsArray,$ActionAndOffset,$CS0,$CQ8;
	$DS6=$DJ7[1];
	;

	if(strcmp("js_",substr($DS6,0,3))) {
		$DQ4=0;
	}
	else{
		$DS6=substr($DS6,3);
		$DQ4=1;
	}

	if(strcmp("f_",substr($DS6,0,2))) {
		$DR5=0;
	}
	else{
		$DS6=substr($DS6,2);
		$DR5=1;
	}

	if(!substr_compare($DS6,"g_",0,2)){
		foreach($SettingsArray as $DT7=>$DU8){
			if(!substr_compare($DS6,$DT7,2)){
				return AL1($DU8,$DQ4,$DR5);
			}
		}
	return "";
	}

	if(!substr_compare($DS6,"user_",0,5)){
		if(isset($CS0) && null!=$CS0){
			foreach($CS0 as $DT7=>$DU8){
				if(!substr_compare($DS6,$DT7,5)){
					return AL1($DU8,$DQ4,$DR5);
				}
			}
		}
	return AL1(F_Error(IDS_AUTH_ERROR),$DQ4,$DR5);
	}

	if(!substr_compare($DS6,"msg_",0,4)){
		if(isset($CQ8) && null!=$CQ8){
			foreach($CQ8 as $DT7=>$DU8){
				if(!substr_compare($DS6,$DT7,4)){
					return AL1($DU8,$DQ4,$DR5);
				}
			}
		}
	return "";
	}

	if(!substr_compare($DS6,"post_",0,5)){
		if(isset($_POST)){
			foreach($_POST as $DT7=>$DU8){
				if(!substr_compare($DS6,$DT7,5)){
					return AL1($DU8,$DQ4,$DR5);
				}
			}
		}
	return "";
	}

	if(!substr_compare($DS6,"get_",0,4)){if(isset($_GET)){foreach($_GET as $DT7=>$DU8){if(!substr_compare($DS6,$DT7,4)){return AL1($DU8,$DQ4,$DR5);
}}}return "";
}$DV9="";
if(!strcmp($DJ7[1],"messages")){return AY4();
}if(!strcmp($DJ7[1],"comments")){return BA6();
}if(!strcmp($DJ7[1],"authentication")){return BC8();
}if(!strcmp($DJ7[1],"authentication_ok")){if(isset($CS0) && null!=$CS0) return IDS_LOGGED_IN;
return "<input type=submit value=Ok>";
}if(!strcmp($DJ7[1],"welcome")){if(isset($CS0) && null!=$CS0){$ActionAndOffset['action']=4;
$ActionAndOffset['offset']=0;
$ActionAndOffset['number']=0;
$ActionAndOffset['user']=0;
$DW0=WorkOverUrl("");
$ActionAndOffset['action']=5;
$ActionAndOffset['number']=0;
$ActionAndOffset['user']=0;
if($CS0['level']>1) {$DX1=WorkOverUrl("");
} else
{$DX1=IDS_URL_POSTING_DENIED;
} $ActionAndOffset['action']=6;
$DY2=WorkOverUrl("");
$DF3=preg_replace("/%name/i",$CS0['name'],IDS_AUTH_WELCOME1);
$DF3=preg_replace("/%email/i",$CS0['email'],$DF3);
$DF3=preg_replace("/%logout/i",$DW0,$DF3);
$DF3=preg_replace("/%post/i",$DX1,$DF3);
$DF3=preg_replace("/%account/i",$DY2,$DF3);
}else
{$ActionAndOffset['action']=3;
$ActionAndOffset['offset']=0;
$DZ3=WorkOverUrl("");
$DF3=preg_replace("/%link/i",$DZ3,IDS_AUTH_WELCOME2);
}return $DF3;
}if(!strcmp($DJ7[1],"info")){return BB7();
}if(!strcmp($DJ7[1],"calendar")){return F_Calendar();
}if(!strcmp($DJ7[1],"archive")){return BR3();
}return "";
}






function AN3($EA4){return preg_match("/^([\w9\-\.])+@([\w\-])+(.([\w\-])+)+$/i",$EA4);
}



function AO4($CX5){return preg_match("/^\w+$/i",$CX5) && strlen($CX5)>2;
}



function AP5($CX5){return preg_match("/^[^\<\>]+$/i",$CX5) && strlen($CX5)>2;
}



function AQ6($CX5,$F_word){
	global $SettingsArray,$ActionAndOffset;
	$EC6=isset($ActionAndOffset[$F_word]) ? $ActionAndOffset[$F_word] : $SettingsArray[$F_word];
	if($EC6==0){
		return $CX5;
	}
	return $CX5 . (strlen($CX5)>0?"&":"") . "{$F_word}=" . $EC6;
}



function WorkOverUrl($F_rawUrl){global $SettingsArray,$ActionAndOffset;
$DF3=AQ6("","year");
$DF3=AQ6($DF3,"month");
$DF3=AQ6($DF3,"day");
$DF3=AQ6($DF3,"user");
$DF3=AQ6($DF3,"number");
$DF3=AQ6($DF3,"offset");
$DF3=AQ6($DF3,"action");
if(strlen($DF3)>0) $DF3="?" . $DF3;
if(strlen($F_rawUrl)>0) $F_rawUrl="#" . $F_rawUrl;
return $SettingsArray['PHP_SELF'] . $DF3 . $F_rawUrl;
}






function LinkMaker($F_text,$F_class,$F_rawUrl){
	$EG0=WorkOverUrl($F_rawUrl);
	return "<a href=\"{$EG0}\" class=\"{$F_class}\">{$F_text}</a>";
}






function AT9($EH1,$EI2){global $CS0;
if(!isset($CS0)) return 0;
if(null==$CS0) return 0;
if($CS0['level']<2){AC2(IDS_POSTING_DENIED);
return 0;
}$EJ3=0;
$EH1=mysql_escape_string($EH1);
$EI2=mysql_escape_string($EI2);
$EK4=mysql_escape_string($CS0['user']);
$DF3="INSERT INTO ".PREFIX."Message (idx,user,t,header,body) ";
$DF3.= "VALUES (4294967294,{$EK4},NOW(),\"$EH1\",\"$EI2\")";
$EL5=@ Mysql_Query($DF3);
if($EL5 && 1==mysql_affected_rows()){@ Mysql_free_result($EL5);
$DF3="SELECT cnt from ".PREFIX."Message WHERE(idx=4294967294 AND user={$EK4})";
$EL5=@ Mysql_Query($DF3);
if($EL5){if($EM6=mysql_fetch_array($EL5,MYSQL_NUM)) {$EJ3=$EM6[0];
} else
{AC2("Could not FETCH idx");
return 0;
}} else
{AE4("Could not SELECT idx",$DF3);
return 0;
}if($EJ3){$DF3="UPDATE ".PREFIX."Message SET ".PREFIX."Message.idx=$EJ3 WHERE(cnt=$EJ3)";
$EL5=@ Mysql_Query($DF3);
if($EL5){$EN7=mysql_affected_rows();
@ Mysql_free_result($EL5);
return ($EN7==1) ? $EJ3 : 0;
}AE4("Could not UPDATE idx",$DF3);
}else
{AC2("Could not extract idx");
}} else
{AE4("Could not INSERT posting",$DF3);
}return 0;
}






function AU0($EI2){global $SettingsArray,$CS0;
if(!isset($SettingsArray['result'])) {$SettingsArray['result']="";
} if(!isset($CS0)){$SettingsArray['result'] .= F_Error(IDS_MUST_LOGIN);
return 0;
}if(null==$CS0){$SettingsArray['result'] .= F_Error(IDS_MUST_LOGIN);
return 0;
}if($CS0['level']<1){$SettingsArray['result'] .= F_Error(IDS_LOW_RIGHTS);
return 0;
}if(!isset($SettingsArray['result'])) {$SettingsArray['result']="";
} $EO8=(int)$SettingsArray['number'];
$EP9=0;
$DF3="SELECT COUNT(*) FROM ".PREFIX."Message WHERE (cnt=idx AND cnt={$EO8})";
$EL5=@ Mysql_Query($DF3);
if($EL5){$EQ0=mysql_fetch_array($EL5,MYSQL_NUM);
if($EQ0) $EP9=$EQ0[0];
@ Mysql_free_result($EL5);
unset($EQ0,$EL5);
}else
{$SettingsArray['result'] .= AD3("Could not SELECT user count",$DF3);
}if($EP9<1){$SettingsArray['result'] .= F_Error(IDS_MSG_NOT_EXISTS);
return 0;
}$ER1=mysql_escape_string($EI2);
$EK4=mysql_escape_string($CS0['user']);
$DF3="INSERT INTO ".PREFIX."Message (idx,user,t,body) ";
$DF3.= "VALUES ($EO8,{$EK4},NOW(),\"$ER1\")";
$EL5=@ Mysql_Query($DF3);
if($EL5){$EM6=@ mysql_affected_rows();
@ Mysql_free_result($EL5);
if($EM6>0){BK6($EO8,$CS0['name'],strip_tags($EI2));
}return $EM6;
}$SettingsArray['result'] .= AD3("Could not INSERT comment",$DF3);
return 0;
}






function AV1(){global $SettingsArray;
$DF3="SELECT * FROM ".PREFIX."Message AS m JOIN ".PREFIX."User USING (user) WHERE (";
if($SettingsArray['year']>0){$DF3.="YEAR(m.t)={$SettingsArray['year']} AND ";
if($SettingsArray['month']>0){$DF3.="MONTH(m.t)={$SettingsArray['month']} AND ";
if($SettingsArray['day']>0){$DF3.="DAY(m.t)={$SettingsArray['day']} AND ";
}}}if($SettingsArray['user']>0){$DF3.="m.user={$SettingsArray['user']} AND ";
}if($SettingsArray['number']>0){$DF3.="m.idx={$SettingsArray['number']} AND ";
}if($SettingsArray['number']==0){$DF3.="LENGTH(m.header)>0 AND ";
}$DF3.="1) ";
if($SettingsArray['number']==0){$DF3.="ORDER BY m.t DESC LIMIT ". (BLOG_MAX_MSG+1);
}else
{$DF3.="ORDER BY m.t ASC LIMIT ". (($SettingsArray['offset']>0)?BLOG_MAX_COMM:(BLOG_MAX_COMM+1));
}if($SettingsArray['offset']>0){$DF3.=" OFFSET {$SettingsArray['offset']}";
}if($SettingsArray['number']>0 && $SettingsArray['offset']>0){$DF3="(SELECT * FROM ".PREFIX."Message AS m JOIN ".PREFIX."User USING (user) WHERE (cnt={$SettingsArray['number']} AND idx={$SettingsArray['number']})) UNION ({$DF3})";
}return $DF3;
}



function AW2($ES2){$ET3=0;
$ES2=(int)$ES2;
$DF3="SELECT count(*) FROM ".PREFIX."Message WHERE (idx={$ES2})";
$EL5=@ Mysql_Query($DF3);
if($EL5){if($EQ0=mysql_fetch_array($EL5,MYSQL_NUM)){$ET3=$EQ0[0];
}@ Mysql_free_result($EL5);
}else
{AE4("SELECT count(*) error",$DF3);
}return $ET3;
}






function AX3($EU4,$EV5,$EW6){global $CS0,$SettingsArray,$ActionAndOffset;
foreach($ActionAndOffset as $key=>$value) {$ActionAndOffset[$key]=0;
} if(false==$EW6){$ActionAndOffset['action']=12;
$ActionAndOffset['number']=$SettingsArray['number'];
$EX7="<img src=\"./bloly-files/rss.gif\" border=\"0\" alt=\"".htmlspecialchars(IDS_RSS_COMMENTS)."\">";
$EY8=" ".LinkMaker($EX7,"","");
}else
{$EY8="";
}$DV9="<div class=msg{$EV5}>";
$DV9.= "<div class=msg_hdr{$EV5}>{$EU4['header']}{$EY8}</div>";
$ActionAndOffset['action']=2;
$ActionAndOffset['user']=$EU4['user'];
$EZ9=LinkMaker($EU4['name'],"msg_author".$EV5,"");
$FA0=date(IDS_POSTED_TIME,strtotime($EU4['t']));
$FB1=preg_replace("/%name/i",$EZ9,IDS_POSTED_BY);
$FB1=preg_replace("/%time/i",$FA0,$FB1);
$DV9 .= "<div class=msg_info{$EV5}>{$FB1}</div>";
if(isset($CS0) && null!=$CS0 && strlen($EU4['header'])>0){if(($EU4['user']==$CS0['user'] && $CS0['level']>1) || $CS0['level']>2){$ActionAndOffset['action']=7;
$ActionAndOffset['number']=$EU4['idx'];
$ActionAndOffset['user']=0;
$FC2=LinkMaker(IDS_ADMIN_EDIT,"admin_link","");
$ActionAndOffset['action']=9;
$ActionAndOffset['number']=$EU4['cnt'];
$ActionAndOffset['user']=0;
$FD3=WorkOverUrl("");
$F_text=htmlspecialchars(IDS_DEL_MSG_CONFIRM);
$FE4 ="<a href=\"{$FD3}\" class=admin_link onClick=\"javascript:return confirm('{$F_text}')\">".IDS_ADMIN_DELETE."</a>";
$DV9.="\n\n\n<div class=admin>{$FC2} | {$FE4}";
if($CS0['level']>2){$ActionAndOffset['action']=10;
$ActionAndOffset['number']=0;
$ActionAndOffset['user']=$EU4['user'];
$FF5=WorkOverUrl("");
$F_text=htmlspecialchars(IDS_BAN_USER_CONFIRM);
$DV9.=" | <a href=\"{$FF5}\" class=admin_link onClick=\"javascript:return confirm('{$F_text}')\">".IDS_ADMIN_BAN."</a>";
}$DV9.="</div>\n\n\n";
}} if($EW6){$ActionAndOffset['action']=2;
$ActionAndOffset['number']=$EU4['idx'];
$ActionAndOffset['user']=0;
$ActionAndOffset['year']=0;
$ActionAndOffset['month']=0;
$ActionAndOffset['day']=0;
$FG6=AW2($EU4['idx']);
if($FG6>1){$EZ9=sprintf(IDS_NUM_COMMENTS2,$FG6-1);
}else
$EZ9=sprintf(IDS_NUM_COMMENTS1,0);
$ActionAndOffset['action']=1;
$FB1=LinkMaker($EZ9,"msg_com_a".$EV5,"#comments");
$FH7=LinkMaker(IDS_READ_MORE,"msg_more".$EV5,"");
$FI8=preg_replace("/<MORE>.+/si",$FH7,$EU4['body']);
$DV9 .= "<div class=msg_body{$EV5}>{$FI8}</div>";
$DV9 .= "<div class=msg_com{$EV5}>{$FB1}</div>";
}else
{$DV9 .= "<div class=msg_body{$EV5}>{$EU4['body']}</div>";
}$DV9 .= "</div>\n";
return $DV9;
}






function AY4(){global $SettingsArray,$ActionAndOffset;
$DV9="";
$DF3=AV1();
$EL5=@ Mysql_Query($DF3);
if($EL5){$FJ9=1;
for($i=0;
$i<BLOG_MAX_MSG && ($EU4=mysql_fetch_array($EL5,MYSQL_ASSOC));
$i++){$DV9 .= AX3($EU4,$FJ9,true);
$FJ9=($FJ9==1) ? 2 : 1;
}@ Mysql_free_result($EL5);
unset($ActionAndOffset['year']);
unset($ActionAndOffset['month']);
unset($ActionAndOffset['day']);
if($i>=BLOG_MAX_MSG){$ActionAndOffset['number']=0;
$ActionAndOffset['user']=0;
$ActionAndOffset['action']=0;
$ActionAndOffset['offset']=$SettingsArray['offset']+BLOG_MAX_MSG;
$FL1=LinkMaker(IDS_NEXT_PAGE,"next_link","");
}else
{$FL1=IDS_NEXT_PAGE;
}if($SettingsArray['offset']>=BLOG_MAX_MSG){$ActionAndOffset['number']=0;
$ActionAndOffset['user']=0;
$ActionAndOffset['action']=0;
$ActionAndOffset['offset']=$SettingsArray['offset']-BLOG_MAX_MSG;
$FM2=LinkMaker(IDS_PREV_PAGE,"next_link","");
}else
{$FM2=IDS_PREV_PAGE;
}$DV9 .= "<div class=next_t>{$FM2} | {$FL1}</div>\n";
}else
{$DV9=AD3("SELECT error",$DF3);
}return $DV9;
}






function AZ5($EU4,$EV5){global $SettingsArray,$ActionAndOffset,$CS0;
$DV9="<li class=comment{$EV5}>";
$ActionAndOffset['action']=2;
$ActionAndOffset['user']=$EU4['user'];
$ActionAndOffset['number']=0;
$ActionAndOffset['year']=0;
$ActionAndOffset['month']=0;
$ActionAndOffset['day']=0;
$EZ9=LinkMaker($EU4['name'],"comment_author".$EV5,"");
$FA0=date(IDS_COMMENT_TIME,strtotime($EU4['t']));
$FB1=preg_replace("/%name/i",$EZ9,IDS_COMMENT_BY);
$FB1=preg_replace("/%time/i",$FA0,$FB1);
$DV9 .= "<div class=comment_info{$EV5}>{$FB1}</div>";
if(isset($CS0) && null!=$CS0 && strlen($EU4['header'])==0){if(($EU4['user']==$CS0['user'] && $CS0['level']>0) || $CS0['level']>2){$ActionAndOffset['action']=8;
$ActionAndOffset['number']=$EU4['cnt'];
$ActionAndOffset['user']=0;
$FC2=LinkMaker(IDS_ADMIN_EDIT,"admin_link","");
$ActionAndOffset['action']=9;
$ActionAndOffset['number']=$EU4['cnt'];
$ActionAndOffset['user']=0;
$FD3=WorkOverUrl("");
$F_text=htmlspecialchars(IDS_DEL_COM_CONFIRM);
$FE4 ="<a href=\"{$FD3}\" class=admin_link onClick=\"javascript:return confirm('{$F_text}')\">".IDS_ADMIN_DELETE."</a>";
$DV9.="\n\n\n<div class=admin>{$FC2} | {$FE4}";
if($CS0['level']>2){$ActionAndOffset['action']=10;
$ActionAndOffset['number']=0;
$ActionAndOffset['user']=$EU4['user'];
$FF5=WorkOverUrl("");
$F_text=htmlspecialchars(IDS_BAN_USER_CONFIRM);
$DV9.=" | <a href=\"{$FF5}\" class=admin_link onClick=\"javascript:return confirm('{$F_text}')\">".IDS_ADMIN_BAN."</a>";
}$DV9.="</div>\n\n\n";
}} $DV9 .= "<div class=comment_body{$EV5}>{$EU4['body']}</div>";
$DV9 .= "</li>\n";
return $DV9;
}







function BA6(){global $SettingsArray,$ActionAndOffset;
$DV9="";
$DF3=AV1();
$EL5=@ Mysql_Query($DF3);
if($EL5){$FJ9=0;
while($EU4=mysql_fetch_array($EL5,MYSQL_ASSOC)){if($FJ9>0){$DV9 .= AZ5($EU4,$FJ9);
$FJ9=($FJ9==1) ? 2 : 1;
}else
{$CY6=$SettingsArray['offset'];
$DV9 .= AX3($EU4,1,false);
$DV9.="<div class=comments><a name=comments></a>\n";
$FN3=$CY6+($CY6>0?0:1);
$DV9.="<ol class=comments_list start={$FN3}>";
$FJ9=1;
}} if($FJ9>0) $DV9 .= "</div></ol>\n";
@ Mysql_free_result($EL5);
$ET3=AW2($SettingsArray['number'])-1;
if($ET3>=BLOG_MAX_COMM){$DV9.="<div class=pages>".IDS_PAGES1;
for($i=0;
($i)*BLOG_MAX_COMM<$ET3;
$i++){$ActionAndOffset['action']=1;
$ActionAndOffset['offset']=($i)*BLOG_MAX_COMM+1;
$ActionAndOffset['number']=$SettingsArray['number'];
$ActionAndOffset['user']=0;
$ActionAndOffset['year']=0;
$ActionAndOffset['month']=0;
$ActionAndOffset['day']=0;
if($i>0) $DV9.= " - ";
if($ActionAndOffset['offset']==$SettingsArray['offset'] || $ActionAndOffset['offset']==$SettingsArray['offset']+1){$DV9.="<span class=page_this>".($i+1)."</span>";
}else
{$DV9.= LinkMaker($i+1,"page_link","#comments");
}} $DV9.=IDS_PAGES2."</div>\n";
}} else
{$DV9=AD3("SELECT error",$DF3);
}return $DV9;
}







function BB7(){global $SettingsArray,$ActionAndOffset;
$EK4=null;
$DF3="SELECT * from ".PREFIX."User WHERE(user={$SettingsArray['user']})";
$EL5=@ Mysql_Query($DF3);
if($EL5){if($EM6=mysql_fetch_array($EL5,MYSQL_ASSOC)) {$EK4=$EM6;
} else
{return F_Error("Could not get user info");
}} else
{return AD3("Could not SELECT user info",$DF3);
}if(null==$EK4) return IDS_UNKNOWN_USER;
foreach($ActionAndOffset as $key=>$value) {$ActionAndOffset[$key]=0;
} $ActionAndOffset['action']=12;
$ActionAndOffset['user']=$EK4['user'];
$EX7="<img src=\"./bloly-files/rss.gif\" border=\"0\" alt=\"".htmlspecialchars(IDS_RSS_USER)."\">";
$EY8=" ".LinkMaker($EX7,"","");
$FO4="<div class=ui_header>" . $EK4['name'] . $EY8 . "</div>\n";
$FP5=strlen($EK4['info'])>0 ? $EK4['info'] : IDS_NO_USER_INFO;
$FO4.= "<div class=ui_text>" . $FP5 . "</div>\n";
$FQ6=mysql_escape_string($EK4['user']);
$DF3="SELECT idx,header,t FROM ".PREFIX."Message WHERE (user={$FQ6} AND LENGTH(header)>0) ORDER BY t DESC";
$EL5=@ Mysql_Query($DF3);
foreach($ActionAndOffset as $key=>$value) {$ActionAndOffset[$key]=0;
} if($EL5){$FJ9=1;
$ActionAndOffset['action']=1;
$FR7=0;
while($EU4=mysql_fetch_array($EL5,MYSQL_ASSOC)){if($FR7<1){$FR7=1;
$FO4.= "<div class=ui_posts_header>" . sprintf(IDS_USER_POSTS,$EK4['name']) . "</div>\n";
$FO4.= "<div class=ui_posts_text>";
}if(strlen($EU4['header'])>40){$ER1=substr($EU4['header'],0,39) . "...";
}else
{$ER1=$EU4['header'];
}$ActionAndOffset['number']=$EU4['idx'];
$DZ3=LinkMaker($ER1,"ui_link","");
$FO4 .= "<div class=ui_post{$FJ9}><span class=ui_time>{$EU4['t']}</span> - $DZ3</div>\n";
$FJ9=($FJ9==1) ? 2 : 1;
}@ Mysql_free_result($EL5);
if($FR7>0) {$FO4.= "</div>";
}}else
{return AD3("SELECT error",$DF3);
}return $FO4;
}







function BC8(){global $SettingsArray,$CS0;
if($CS0){$FO4="<input type=hidden name=email value=\"{$CS0['email']}\">";
$FO4.= "<input type=hidden name=password value=\"{$CS0['password']}\">";
}else
{if(!isset($_POST['email'])) $_POST['email']="";
$FO4="<table border=0>";
$FO4.= "<tr><td class=t_auth>".IDS_AUTH_EMAIL."</td><td><input type=text name=email style=\"width:150px;
\" value=\"{$_POST['email']}\"></td></tr>";
$FO4.= "<tr><td class=t_auth>".IDS_AUTH_PASSWORD."</td><td><input type=password name=password style=\"width:150px;
\" value=\"{$SettingsArray['password']}\"></td></tr>";
$FO4.= "</table><input type=hidden name=remember value=1>\n";
}return $FO4;
}







function BD9($FS8){
	global $_SERVER,$_POST,$_COOKIE,$CS0;
	$EA4=@ $_POST['email'];
	$FT9=@ $_POST['password'];
	if($FS8){
		$EA4="";
		$FT9="";
		$CS0=null;
	}
	$DF3=str_replace('www.','',strtolower($_SERVER['HTTP_HOST']));
	SetCookie('email',$EA4,time()+(60*60*24*3650),"/",".".$DF3);
	$_COOKIE['email']=$EA4;
	@SetCookie('password',$FT9,time()+(60*60*24*3650),"/",".".$DF3);
	$_COOKIE['password']=$FT9;
}






function BE0($FW2){global $SettingsArray,$FU0,$FV1;
if(count($FW2)!=2){return "";
};
if(!isset($SettingsArray['result'])) {$SettingsArray['result']="";
} $DS6=preg_replace("/javascript:/i","",trim($FW2[1]));
if(!strcasecmp($DS6,"MORE")){return "<MORE>";
} if(!strcmp(substr($DS6,0,1),"/")){$DS6=substr($DS6,1);
$FX3=preg_match("/^[a-z]+/i",$DS6,$FY4);
if(count($FY4)!=1) return "";
$FZ5=explode(" ",$FU0);
for($GA6=0;
$GA6<count($FZ5);
$GA6++){if(!strcasecmp($FY4[0],$FZ5[$GA6])){if(isset($FV1[$FZ5[$GA6]])){unset($FV1[$FZ5[$GA6]]);
return "</" . $FY4[0] . ">";
}else
{$SettingsArray['result']=F_Error(sprintf(IDS_TAG5,$FZ5[$GA6]));
return "";
}}}return "";
}$FZ5=explode(" ",$FU0);
for($GA6=0;
$GA6<count($FZ5);
$GA6++){$FX3=preg_match("/^[a-z]+/i",$DS6,$ER1);
$GB7=isset($ER1[0]) ? $ER1[0] : "";
if(!strcasecmp($GB7,$FZ5[$GA6])){if(strcasecmp($GB7,"BR") && strcasecmp($GB7,"IMG")){$FV1[strtoupper($GB7)]=1;
}$FX3=preg_match_all("/([a-z]+)\s*=\s*[\"]([^\"]+?)[\"]/i",$DS6,$FY4);
if($FX3>0 && 3 == count($FY4) && count($FY4[1])==count($FY4[2])){for($i=0;
$i<count($FY4[1]);
$i++){$GC8=substr($FY4[1][$i],0,2);
if(strcasecmp($GC8,"on") && strcasecmp($FY4[1][$i],"target") && strcasecmp($FY4[1][$i],"class") && strcasecmp($FY4[1][$i],"style")){if(!strcasecmp($GB7,$FZ5[$GA6])) $GB7 .= " {$FY4[1][$i]}=\"{$FY4[2][$i]}\"";
}}}if(!strcasecmp($ER1[0],"A")) $GB7 .= " class=p_link target=_blank";
return "<".$GB7.">";
}} if(strlen($GB7)>0){$SettingsArray['result']=F_Error(sprintf(IDS_TAG6,$GB7));
}return "";
}






function BF1($FO4,$GD9){global $SettingsArray,$FU0,$FV1;
if(!isset($SettingsArray['result'])) {$SettingsArray['result']="";
} $FU0=$GD9;
$FV1=null;
$FO4=stripcslashes($FO4);
if(preg_match("/^[^<]*>/",$FO4)){$SettingsArray['result'].=F_Error(IDS_TAG1);
return "";
}if(preg_match("/<[^>]*$/",$FO4)){$SettingsArray['result'].=F_Error(IDS_TAG2);
return "";
}if(preg_match("/<[^>]*</",$FO4)){$SettingsArray['result'].=F_Error(IDS_TAG3);
return "";
}if(preg_match("/>[^<]*>/",$FO4)){$SettingsArray['result'].=F_Error(IDS_TAG4);
return "";
}$FO4=preg_replace_callback("/<([^<>]+)>/","BE0",$FO4);
$FO4=preg_replace("/\r+/","",$FO4);
$FO4=preg_replace("/[\t ]+/"," ",$FO4);
$FO4=preg_replace("/\n+/","\n",$FO4);
$FO4=trim($FO4);
if($FV1){foreach($FV1 as $ER1=>$value){$FO4.="</$ER1>";
}} $FU0=null;
$FV1=null;
return $FO4;
}








function BG2(){global $SettingsArray,$ActionAndOffset,$CS0,$_SERVER,$_POST;
$SettingsArray['result']="";
if(strcasecmp($_SERVER['REQUEST_METHOD'],"POST")){return;
}if(!isset($CS0) || null==$CS0){if(isset($_POST['remember']) && 1==(int)$_POST['remember']){@ BH3($_POST['email'],$_POST['password']);
}} if(!isset($CS0) || null==$CS0){$SettingsArray['result']="<span class=error>".IDS_MUST_LOGIN."</span>";
return;
}if(isset($_POST['reply']) && 1==$_POST['reply']){if(isset($_POST['header'])){$SettingsArray['result']=F_Error("Header unexpexted!");
return;
}if(!isset($_POST['txt'])){$SettingsArray['result']=F_Error("TXT expexted!");
return;
}$GE0=BF1($_POST['txt'],ALLOWED_TAGS_TEXT);
if(strlen($GE0)>0){if(AU0($GE0)) {$SettingsArray['result'].=IDS_POST_OK;
} else
{$SettingsArray['result'].=F_Error("Unexpected error");
}}else
{$SettingsArray['result'].=F_Error(IDS_EMPTY_BODY);
}} else
{if(isset($_POST['reply'])){$SettingsArray['result'].=F_Error("REPLY fieled unexpexted!");
return;
}if(!isset($_POST['header'])){$SettingsArray['result'].=F_Error("Header expexted!");
return;
}if(!isset($_POST['txt'])){$SettingsArray['result'].=F_Error("TXT expexted!");
return;
}$GF1=BF1($_POST['header'],ALLOWED_TAGS_HEADER);
$GE0=BF1($_POST['txt'],ALLOWED_TAGS_TEXT);
if(strlen($GF1)>0){if(strlen($GE0)>0){$ET3=AT9($GF1,$GE0);
if($ET3>0){$ActionAndOffset['action']=1;
$ActionAndOffset['number']=$ET3;
$ActionAndOffset['user']=0;
$ActionAndOffset['year']=0;
$ActionAndOffset['month']=0;
$ActionAndOffset['day']=0;
$SettingsArray['result'].=sprintf(IDS_NEW_POST_OK,WorkOverUrl(""));
}else
{$SettingsArray['result'].=F_Error("Unexpected error");
}} else
{$SettingsArray['result'].=F_Error(IDS_EMPTY_BODY);
}} else
{$SettingsArray['result']=F_Error(IDS_EMPTY_HEADER);
}}}







function BH3($EA4,$FT9){global $SettingsArray,$CS0,$_POST;
if(strlen($EA4)==0 || strlen($FT9)==0) return;
if(isset($CS0) && null!=$CS0) return;
$EA4=mysql_escape_string($EA4);
$FT9=mysql_escape_string($FT9);
$DF3="SELECT * from ".PREFIX."User WHERE(email=\"{$EA4}\" AND password LIKE BINARY \"{$FT9}\")";
$CS0=null;
$EL5=@ Mysql_Query($DF3);
if($EL5){$CS0=mysql_fetch_array($EL5,MYSQL_ASSOC);
@ Mysql_free_result($EL5);
}else
{AE4("Could not SELECT user",$DF3);
}if($CS0){$_POST['email']=$SettingsArray['email']=$EA4;
$_POST['password']=$SettingsArray['password']=$FT9;
$SettingsArray['result']="";
if(strlen($_COOKIE['password'])<1) {BD9(false);
}}else
{$SettingsArray['email']="";
$SettingsArray['password']="";
$SettingsArray['result']=F_Error(IDS_AUTH_ERROR);
BD9(true);
}}








function BI4(){global $SettingsArray,$_POST;
if(!isset($_POST['email'])) return 0;
if(!AN3($_POST['email'])){$SettingsArray['result']=IDS_BAD_EMAIL;
return 0;
}$SettingsArray['result']="";
if(isset($_POST['register'])){$GG2=substr(md5(time()."x".microtime()),1,6);
$GH3=mysql_escape_string(preg_replace("/@.+/","",$_POST['email']));
$EP9=0;
$GI4=mysql_escape_string($_POST['email']);
$DF3="SELECT COUNT(*) FROM ".PREFIX."User WHERE (email='{$GI4}')";
$EL5=@ Mysql_Query($DF3);
if($EL5){$EQ0=mysql_fetch_array($EL5,MYSQL_NUM);
if($EQ0) $EP9=$EQ0[0];
@ Mysql_free_result($EL5);
unset($EQ0,$EL5);
}else
{$SettingsArray['result'].=AD3("Could not SELECT user count",$DF3);
}if($EP9){$SettingsArray['result'] .= F_Error(IDS_EMAIL_EXISTS);
return 0;
}$EM6=BJ5("e_register.txt","",$_POST['email'],$GG2,"","");
if($EM6){$DF3="INSERT INTO ".PREFIX."User (email,password,name,level,register_time) VALUES ('{$GI4}','{$GG2}','{$GH3}',".USER_LEVEL.",NOW())";
$EL5=@ Mysql_Query($DF3);
if($EL5){if(1==mysql_affected_rows()){$SettingsArray['result'] .= IDS_REGISTRATION_OK;
}else
$SettingsArray['result'] .= F_Error("Unexpected database error");
@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'] .= AD3("Coulf not INSERT user",$DF3);
}} else
{$SettingsArray['result'] .= F_Error(IDS_SENDMAIL_ERROR);
}} if(isset($_POST['remind'])){$GI4=mysql_escape_string($_POST['email']);
$DF3="SELECT * FROM ".PREFIX."User WHERE (email=\"{$GI4}\")";
$EK4=null;
$EL5=@ Mysql_Query($DF3);
if($EL5){if(1==mysql_num_rows($EL5)){$EK4=mysql_fetch_array($EL5,MYSQL_ASSOC);
}@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'].=AD3("Could not SELECT user",$DF3);
}if(null==$EK4){$SettingsArray['result'] .= F_Error(IDS_EMAIL_NOT_FOUND);
return;
}$EM6=BJ5("e_reminder.txt",$EK4['name'],$EK4['email'],$EK4['password'],"","");
if($EM6){$SettingsArray['result'] .= IDS_SENDMAIL_OK;
}else
{$SettingsArray['result'] .= F_Error(IDS_SENDMAIL_ERROR);
}} if(isset($_POST['change'])){$GI4=mysql_escape_string($_POST['email']);
$GJ5=@ mysql_escape_string(CookiePassword($_POST['old']));
$GK6=@ mysql_escape_string(CookiePassword($_POST['new1']));
$GL7=@ mysql_escape_string(CookiePassword($_POST['new2']));
if(strlen($GJ5)<1 || strlen($GK6)<1 || strlen($GL7)<1 || strlen($GI4)<1){$SettingsArray['result'] .= F_Error(IDS_ALL_REQ);
return;
}if(strcmp($GK6,$GL7)){$SettingsArray['result'] .= F_Error(IDS_PASSW_NOT_MATCH);
return;
}$DF3="UPDATE ".PREFIX."User SET ".PREFIX."User.password=\"$GK6\" WHERE(email=\"{$GI4}\" AND password LIKE BINARY \"$GJ5\")";
$EL5=@ Mysql_Query($DF3);
if($EL5){if(1==mysql_affected_rows()){$SettingsArray['result'] .= IDS_PASSWORD_CHANGED;
}else
$SettingsArray['result'] .= F_Error(IDS_USER_NOT_FOUND);
@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'] .= AD3("Could not UPDATE user",$DF3);
}}}



function BJ5($GM8,$GH3,$EA4,$FT9,$DD1,$GN9){global $SettingsArray,$_SERVER;
$DK8=@File(CA2.CB3.$GM8);
if(!($DK8) || (@count($DK8)<3)){$SettingsArray['result'].=F_Error("Template does not exists: {$GM8}");
return;
}if(strlen($GH3)<1){$GH3=IDS_DEFAULT_NAME;
}$GO0=str_replace("www.","",strtolower($_SERVER['SERVER_NAME']));
if(strstr(strtolower($_SERVER['HTTP_REFERER']),$GO0)){$GP1=$_SERVER['HTTP_REFERER'];
}else
{$GP1="http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
}$F_text=preg_replace("/%EMAIL/",$EA4,implode("",$DK8));
$F_text=preg_replace("/%NAME/",$GH3,$F_text);
$F_text=preg_replace("/%PASSWORD/",$FT9,$F_text);
$F_text=preg_replace("/%TEXT/",$DD1,$F_text);
$F_text=preg_replace("/%POSTER/",$GN9,$F_text);
$F_text=preg_replace("/%REFERER/",$_SERVER['HTTP_REFERER'],$F_text);
$F_text=preg_replace("/%SERVER/",$GO0,$F_text);
if(1==preg_match("/Subject:\s*(.+)/i",$F_text,$GQ2)) $GR3=$GQ2[1];
else
$GR3="";
$GS4=preg_replace("/%SERVER/",$GO0,$F_text);
$DK8=explode("\n\n",$F_text,2);
if(count($DK8)!=2){$DK8=explode("\r\n\r\n",$F_text,2);
}if(strlen(EMAIL_BCC)>0) {$DK8[0].="\nbcc: ".EMAIL_BCC;
} return @ mail($EA4,$GR3,$DK8[1],$DK8[0]);
}



function BK6($GT5,$GU6,$EI2){global $CS0;
$GT5=(int)$GT5;
$DF3="SELECT u.email FROM ".PREFIX."User AS u,".PREFIX."Message AS m WHERE (m.idx={$GT5} AND m.cnt={$GT5} AND u.user=m.user)";
$EA4=null;
$EL5=@ Mysql_Query($DF3);
if($EL5){$EK4=mysql_fetch_array($EL5,MYSQL_NUM);
if(null==$EK4){AC2("Could not FETCH email");
return;
}$EA4=$EK4[0];
}else
{AE4("Could not SELECT email",$DF3);
return;
}if(null==$EA4 || strlen($EA4)<3){AC2("Bad email: ".htmlspecialchars($EA4));
return;
}BJ5("e_notify.txt",$CS0['name'],$EA4,"",$EI2,$GU6);
}



function BL7(){global $SettingsArray,$CS0,$_POST,$_SERVER;
$SettingsArray['result']="";
if(strcasecmp($_SERVER['REQUEST_METHOD'],"POST")){return;
}if(!isset($CS0) || null==$CS0){if(isset($_POST['remember']) && 1==(int)$_POST['remember']){@ BH3($_POST['email'],$_POST['password']);
}} if(!isset($CS0) || null==$CS0){$SettingsArray['result']="<span class=error>".IDS_MUST_LOGIN."</span>";
return;
}if(isset($_POST['name']) && isset($_POST['txt'])){$GH3=@ mysql_escape_string(trim(strip_tags($_POST['name'])));
$GV7=@ mysql_escape_string(BF1($_POST['txt'],ALLOWED_TAGS_INFO));
if(strlen($GH3)==0 || strlen($GV7)==0){$SettingsArray['result'].=F_Error(IDS_ALL_REQ);
return;
}if(@ $_POST['notitication']==1) $GW8=1;
else
$GW8=0;
$DF3="UPDATE ".PREFIX."User SET ".PREFIX."User.name=\"$GH3\",".PREFIX."User.info=\"$GV7\",".PREFIX."User.notifications=\"{$GW8}\" WHERE(user=\"{$CS0['user']}\" AND level>0 AND password LIKE BINARY \"{$CS0['password']}\")";
$EL5=@ Mysql_Query($DF3);
if($EL5){if(1==mysql_affected_rows()){$SettingsArray['result'] .= IDS_INFO_SAVED;
$CS0=null;
BH3($SettingsArray['email'],$SettingsArray['password']);
}else
{if(mysql_errno()) $SettingsArray['result'] .= F_Error(IDS_USER_NOT_FOUND);
}@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'] .= AD3("Could not UPDATE user",$DF3);
}}}



function BM8(){global $SettingsArray,$ActionAndOffset,$CS0,$CQ8,$_POST,$_SERVER;
$SettingsArray['result']="";
if(!strcasecmp($_SERVER['REQUEST_METHOD'],"POST")){if(!isset($CS0) || null==$CS0){if(isset($_POST['remember']) && 1==(int)$_POST['remember']){@ BH3($_POST['email'],$_POST['password']);
}} if(!isset($CS0) || null==$CS0){$SettingsArray['result']=F_Error(IDS_MUST_LOGIN);
return;
}if(isset($_POST['txt']) && isset($_POST['header'])){if($CS0['level']<2){$SettingsArray['result']=F_Error(IDS_LOW_RIGHTS);
return;
}$GF1=mysql_escape_string(BF1($_POST['header'],ALLOWED_TAGS_HEADER));
$GE0=mysql_escape_string(BF1($_POST['txt'],ALLOWED_TAGS_TEXT));
if(strlen($GF1)>0){if(strlen($GE0)>0){if($CS0['level']<3) {$GX9="AND user={$CS0['user']}";
} else
$GX9="";
$DF3="UPDATE ".PREFIX."Message SET ".PREFIX."Message.header=\"{$GF1}\",".PREFIX."Message.body=\"{$GE0}\" WHERE(idx=cnt AND cnt={$SettingsArray['number']} {$GX9})";
$EL5=@ Mysql_Query($DF3);
$EN7=0;
if($EL5){$EN7=mysql_affected_rows();
@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'].=AD3("Could not UPDATE message",$DF3);
}if($EN7>0){$ActionAndOffset['action']=1;
$SettingsArray['result']=sprintf(IDS_NEW_POST_OK,WorkOverUrl(""));
}else
{$SettingsArray['result']=F_Error("Unexpected error");
}} else
{$SettingsArray['result']=F_Error(IDS_EMPTY_BODY);
}} else
{$SettingsArray['result']=F_Error(IDS_EMPTY_HEADER);
}} if(isset($_POST['txt']) && !isset($_POST['header'])){if($CS0['level']<1){$SettingsArray['result']=F_Error(IDS_LOW_RIGHTS);
return;
}$GF1=mysql_escape_string(BF1($_POST['txt'],ALLOWED_TAGS_TEXT));
if(strlen($GF1)>0){if($CS0['level']<3) {$GX9="AND user={$CS0['user']}";
} else
$GX9="";
$DF3="UPDATE ".PREFIX."Message SET ".PREFIX."Message.body=\"{$GF1}\" WHERE(cnt!=idx AND cnt={$SettingsArray['number']} {$GX9})";
$EL5=@ Mysql_Query($DF3);
$EN7=0;
if($EL5){$EN7=mysql_affected_rows();
@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'].=AD3("Could not UPDATE message",$DF3);
}if($EN7>0){$ActionAndOffset['action']=1;
$SettingsArray['result']=IDS_POST_OK;
}else
{$SettingsArray['result']=F_Error("Unexpected error");
}} else
{$SettingsArray['result']=F_Error(IDS_EMPTY_BODY);
}}}$CQ8=null;
$DF3="SELECT * FROM ".PREFIX."Message WHERE (cnt={$SettingsArray['number']})";
$EL5=@ Mysql_Query($DF3);
if($EL5){$CQ8=mysql_fetch_array($EL5,MYSQL_ASSOC);
@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'].=AD3("Could not SELECT message",$DF3);
}}



function BN9(){global $SettingsArray;
$SettingsArray['result']="";
if($SettingsArray['number']>0) {BO0($SettingsArray['number']);
}}



function BO0($EV5){global $SettingsArray,$CQ8,$CS0;
if(!isset($SettingsArray['result'])) {$SettingsArray['result']="";
} $CQ8=null;
$DF3="SELECT * FROM ".PREFIX."Message WHERE (cnt={$EV5})";
$EL5=@ Mysql_Query($DF3);
if($EL5){$CQ8=mysql_fetch_array($EL5,MYSQL_ASSOC);
@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'].=AD3("Could not SELECT message",$DF3);
}if(null==$CQ8){$SettingsArray['result'].=F_Error(IDS_DELETE_ERROR);
return;
}if($CQ8['cnt']==$CQ8['idx']){if($CS0['level']<2){$SettingsArray['result'].=F_Error(IDS_LOW_RIGHTS);
return;
}if($CS0['level']<3 && $CS0['user']!=$CQ8['user']){$SettingsArray['result'].=F_Error(IDS_DELETE_OTHER);
return;
}if($CS0['level']<3) {$GX9="AND user=". $CS0['user'];
} else
{$GX9="";
} $DF3="DELETE LOW_PRIORITY FROM ".PREFIX."Message WHERE(idx={$EV5} {$GX9})";
$EL5=@ Mysql_Query($DF3);
$GY0=0;
if($EL5){$GY0=mysql_affected_rows();
@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'].=AD3("Could not DELETE message");
}if($GY0>0) {$SettingsArray['result'].=IDS_DELETE_OK;
} else
{$SettingsArray['result'].=F_Error(IDS_DELETE_ERROR);
} $SettingsArray['result'].="<BR>";
}else
{if($CS0['level']<1){$SettingsArray['result'].=F_Error(IDS_LOW_RIGHTS);
return;
}if($CS0['level']<3 && $CS0['user']!=$CQ8['user']){$SettingsArray['result'].=F_Error(IDS_DELETE_OTHER);
return;
}if($CS0['level']<3) {$GX9="AND user=". $CS0['user'];
} else
{$GX9="";
} $DF3="DELETE LOW_PRIORITY FROM ".PREFIX."Message WHERE(cnt={$EV5} {$GX9})";
$EL5=@ Mysql_Query($DF3);
$GY0=0;
if($EL5){$GY0=mysql_affected_rows();
@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'].=AD3("Could not DELETE message",$DF3);
}if($GY0>0) {$SettingsArray['result'].=IDS_DELETE_OK;
} else
{$SettingsArray['result'].=F_Error(IDS_DELETE_ERROR);
} $SettingsArray['result'].="<BR>";
}}



function BP1(){global $SettingsArray,$CS0;
$SettingsArray['result']="";
if($CS0['level']<3){$SettingsArray['result'].=F_Error(IDS_LOW_RIGHTS);
return;
}if($CS0['user']==$SettingsArray['user']){$SettingsArray['result'].=F_Error(IDS_BAN_YOURSELF);
return;
}$DF3="UPDATE ".PREFIX."User SET ".PREFIX."User.level=0 WHERE(user={$SettingsArray['user']})";
$EL5=@ Mysql_Query($DF3);
if($EL5){@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'].=AD3("Could not UPDATE user",$DF3);
}$DF3="SELECT * FROM ".PREFIX."Message WHERE(user={$SettingsArray['user']})";
$EL5=@ Mysql_Query($DF3);
if($EL5){while($CQ8=mysql_fetch_array($EL5,MYSQL_ASSOC)){BO0($CQ8['cnt']);
}@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'].=AD3("Could not SELECT messages",$DF3);
}$SettingsArray['result']=IDS_USER_BAN_OK;
}



function BQ2(){global $SettingsArray,$ActionAndOffset,$_SERVER,$_POST;
if(strcasecmp($_SERVER['REQUEST_METHOD'],"POST") || !isset($_POST['q'])){$SettingsArray['result']="";
return;
}$ActionAndOffset['action']=1;
$ActionAndOffset['user']=0;
$ActionAndOffset['offset']=0;
$ActionAndOffset['year']=0;
$ActionAndOffset['month']=0;
$ActionAndOffset['day']=0;
$_POST['q']=strip_tags($_POST['q']);
$GZ1=preg_replace("/['\"\\\\]+/"," ",$_POST['q']);
$GZ1=preg_replace("/\s+/"," ",$GZ1);
$DK8=explode(" ",$GZ1);
sort($DK8);
$DE2="";
$FM2="";
foreach($DK8 as $key){if(strcasecmp($FM2,$key) && strlen($key)>1){if(strlen($DE2)>0) {$DE2.=" OR ";
} $DE2.="INSTR(CONCAT(body,header),\"".mysql_escape_string($key)."\")";
$FM2=$key;
}} $SettingsArray['result']="<div>Searching for <b>{$GZ1}</b></div>\n";
$DF3="SELECT * FROM ".PREFIX."Message WHERE (idx=cnt AND ({$DE2})) ORDER BY t DESC LIMIT 50";
$EL5=@ Mysql_Query($DF3);
if($EL5){while($CQ8=mysql_fetch_array($EL5,MYSQL_ASSOC)){$ActionAndOffset['number']=$CQ8['cnt'];
$DZ3=LinkMaker($CQ8['header'],"","");
$SettingsArray['result'].="<p><span class=ui_time>{$CQ8['t']}</span> {$DZ3}</p>\n";
}@ Mysql_free_result($EL5);
}else
{$SettingsArray['result'].=AD3("Could not SELECT messages",$DF3);
}}



function BR3(){global $ActionAndOffset;
$ActionAndOffset['action']=0;
$ActionAndOffset['user']=0;
$ActionAndOffset['offset']=0;
$ActionAndOffset['number']=0;
$ActionAndOffset['day']=0;
$FO4="";
$DF3="SELECT count(*) AS c,MONTH(t) AS m,YEAR(t) AS y FROM ".PREFIX."Message WHERE (cnt=idx) GROUP BY m ORDER BY t DESC";
$EL5=@ Mysql_Query($DF3);
if($EL5){while($EQ0=mysql_fetch_array($EL5,MYSQL_ASSOC)){$mon=MonthWork($EQ0['m']);
if(strlen($FO4)>0) {$FO4.="<br>";
} $ActionAndOffset['year']=$EQ0['y'];
$ActionAndOffset['month']=$EQ0['m'];
$HB3=LinkMaker($mon.",".$EQ0['y'],"arch_link","");
$FO4.="<nobr class=arch_p>{$HB3} <span class=arch_num>[{$EQ0['c']}]</span></nobr>";
}@ Mysql_free_result($EL5);
}else
{return AD3("Could not SELECT archive",$DF3);
}return $FO4;
}



function BS4($DF3){$DF3=preg_replace("/\\]\\]>/","&#93;
]>",$DF3);
return "<![CDATA[".$DF3."]]>";
}



function BT5(){global $SettingsArray,$ActionAndOffset,$_SERVER;
header('Content-type: application/xml',true);
foreach($SettingsArray as $key=>$value) {$ActionAndOffset[$key]=0;
} $HC4="http://" . $_SERVER['SERVER_NAME'];
$HB3=$HC4.WorkOverUrl("");
echo "<?xml version=\"1.0\" encoding=\"".DB_ENCODING."\"?>

\n"; echo "<rss version=\"2.0\">\n"; echo "<channel>\n"; echo "
<title>".BLOG_TITLE."</title>
\n"; echo "
<link>
{$HB3}
</link>
\n"; echo "<description>".BLOG_TITLE."</description>\n"; echo "<language>".DB_LANG."</language>\n"; echo "<pubDate>".date("r")."</pubDate>\n"; echo "<lastBuildDate>".date("r")."</lastBuildDate>\n"; echo "<generator>SoftCab.com</generator>\n"; $DF3=preg_replace("/LIMIT\s+\d+/i","Limit ".RSS_MAX_ITEMS,AV1()); $EL5=@ Mysql_Query($DF3); if($EL5){$HD5=""; while($FW2=mysql_fetch_array($EL5,MYSQL_ASSOC)){if(strlen($HD5)==0) {$HD5="Re: ".$FW2['header']; } echo "<item>\n"; $ActionAndOffset['number']=$FW2['idx']; echo "\t
<title>".BS4(strlen($FW2['header'])>0?$FW2['header']:$HD5)."</title>
\n"; echo "\t
<link>
".$HC4.WorkOverUrl("")."
</link>
\n"; echo "\t<description>".BS4($FW2['body'])."</description>\n"; echo "\t<pubDate>".date("r",strtotime($FW2['t']))."</pubDate>\n"; echo "\t<guid>".$HC4.WorkOverUrl("comment")."</guid>\n"; echo "</item>\n"; }@ Mysql_free_result($EL5); }else {AE4("Could not SELECT messages",$DF3); }echo "</channel>\n"; echo "</rss>\n"; }



function DateEdges($HE6,$HF7,$F_day){if($HE6<0 || $HF7<1 || $HF7>12 || $F_day<1 || $F_day>31) return -1;
 $HH9=(int)($HE6 / 100);
 $HE6=(int)($HE6 % 100);
 if($HF7 < 3){$HF7 += 12;
 if($HE6 > 0) $HE6--;
 else {$HE6=99;
 $HH9--;
 }} $HI0=$F_day;
 $HI0=$HI0 + (int)((($HF7 + 1) * 26) / 10);
 $HI0=$HI0 + $HE6;
 $HI0=$HI0 + (int)($HE6 / 4);
 $HI0=$HI0 + (int)($HH9 / 4);
 $HI0=$HI0 - $HH9 - $HH9;
 while($HI0<0) $HI0+=7;
 $HI0=$HI0 % 7;
 if($HI0==0) $HI0=7;
 return $HI0-1;
 }



function DaysInMonth($mon,$yea){
	$HK2=array(31,28,31,30,31,30,31,31,30,31,30,31);
 	if($mon==2) return 28 + (($yea%4)?0:1);
 	return ($mon>0 && $mon<13) ? $HK2[$mon-1] : 12;
 }



function MonthWork($mon){
	$HL3=explode(" ",IDS_MONTHS);
	if(count($HL3)!=12 || $mon<1 || $mon>12) return "Unknown";
	return $HL3[$mon-1];
}



function F_Sunday(){
	$HL3=explode(" ",IDS_DAYSOFWEEK); 
	if(count($HL3)!=7) return "	<tr>
  									<td colspan=7>".F_Error("ERROR")."</td>
								</tr>";
	if(FIRST_SUNDAY){
		array_push($HL3,array_shift($HL3));
	}
	$FO4=" <tr class=cal_tr_dweek>";
	foreach($HL3 as $DF3) $FO4.="  <td class=cal_td_dweek>".$DF3."</td>";
	return $FO4."</tr>";
}



function F_Calendar(){
	global $SettingsArray,$ActionAndOffset;
	$ActionAndOffset['action']=0;
	$ActionAndOffset['user']=0;
	$ActionAndOffset['offset']=0;
	$ActionAndOffset['number']=0;
	$SettingsArray['number']=0;
	$Year=(int)date("Y");
	$Month_C=(int)date("m");
	$Day_C=(int)date("d");
	$F_year=($SettingsArray['year']>0) ? $SettingsArray['year'] : $Year;
	$F_month=($SettingsArray['month']>0) ? $SettingsArray['month'] : $Month_C;

	if($SettingsArray['day']>0){
		$HR9=$SettingsArray['day'];
	}
	else {
		$HR9=(0==$SettingsArray['year'] && 0==$SettingsArray['month'])? $Day_C : 0; }$HS0=array();

	for($i=0; $i<32; $i++) {
		$HS0[$i]=0;
	}

	$DF3="SELECT count(*) AS cnt,DAY(t) AS d FROM ".PREFIX."Message WHERE (cnt=idx AND YEAR(t)={$F_year} AND MONTH(t)={$F_month}) GROUP BY d";
 $EL5=@ Mysql_Query($DF3);
 if($EL5){while($EQ0=mysql_fetch_array($EL5,MYSQL_ASSOC)){if($EQ0['d']>0 && $EQ0['d']<32) {$HS0[$EQ0['d']]=$EQ0['cnt'];
 }}} else {} $ET3=DaysInMonth($F_month,$F_year);
 $F_day=1;
 $i=DateEdges($F_year,$F_month,$F_day) - FIRST_SUNDAY;
 if($i<0) {$i=6;
 } $Month_name=MonthWork($F_month);
 $HU2="
<div class=calendar>
  <table border=0 cellspacing=0 cellpadding=2 class=cal_table>
";

	$ActionAndOffset['year']=($F_month>1)?$F_year:($F_year-1);
	$ActionAndOffset['month']=($F_month>1)?($F_month-1):12;
	$HV3=LinkMaker("&lt; ","cal_month_link","");
	$ActionAndOffset['year']=($F_month>11)?($F_year+1):$F_year;
	$ActionAndOffset['month']=($F_month>11)?1:($F_month+1);
	$HW4=LinkMaker("&gt; ","cal_month_link","");
	$ActionAndOffset['year']=$F_year>0?($F_year-1):0;
	$ActionAndOffset['month']=$F_month;
	$HX5=LinkMaker("&lt; ","cal_year_link","");
	$ActionAndOffset['year']=$F_year+1;
	$ActionAndOffset['month']=$F_month;
	$HY6=LinkMaker("&gt; ","cal_year_link","");
	$HU2.="
    <tr class=cal_tr_hdr>
      <td colspan=7 class=cal_td_hdr align=center>{$HV3}{$Month_name}$HW4 &nbsp; {$HX5}{$F_year}{$HY6}</td>
    </tr>
	";
	$HU2.=F_Sunday();
	$HU2.="<tr class=cal_tr_day>";

    if($i<7){
    	for($GA6=0; $GA6<$i; $GA6++) $HU2.="<td class=calc_empty>&nbsp;</td>";
	}

	$ActionAndOffset['year']=$F_year;
	$ActionAndOffset['month']=$F_month;

	for($GA6=1; $GA6<7 && $F_day<=$ET3; $GA6++){
		while($i<7 && $F_day<=$ET3){
			if($HS0[$F_day]==0) {
				$F_today=$F_day;
			}
			else {
				$ActionAndOffset['day']=$F_day;
				$F_today=LinkMaker($F_day,"cal_day","");
			}

			if($F_day==$Day_C && $F_month==$Month_C && $F_year==$Year){
				$HU2 .= "<td class=cal_today align=right title='сегодня'>".$F_today."</td>";
			}
			else if($F_day==$HR9){
				$HU2 .= "<td class=cal_select align=right title='выбрано'>".$F_today."</td>";
			}
			else if($HS0[$F_day]==0){
				$HU2 .= "<td class=cal_none align=right>".$F_today."</td>";
			}
			else {
				$HU2 .= "<td class=cal_td_day align=right>".$F_today."</td>";
			}

			$F_day++;
			$i++;
		}

		if($F_day>$ET3){
			for(; $i<7; $i++) $HU2.="<td class=calc_empty>&nbsp;</td>";
		}

		$i=0;
		$HU2 .= "</tr>\n";

		if($F_day<$ET3) $HU2 .= "<tr class=cal_tr_day>";
	}

	$HU2 .= "  </table></div>";
	return $HU2; }





function BZ1($GH3,$IA8){
	global $IB9;
	 $IC0=1;
 	$DF3=Mysql_Query("SELECT * FROM $GH3");
 	$EL5=@ Mysql_Query($DF3);

	 if($EL5){
	 	$IC0=0;
		$IB9=1;
		 @ Mysql_free_result($EL5);
 	}
 	else {
 		AE4("Could not CREATE table",$DF3);
	}

	if($IC0){
		$EL5=@ Mysql_Query($IA8);

		if($EL5){
		@ Mysql_free_result($EL5);
 		}
 		else {
 			AE4("AC2 creating table {$GH3}");
			$IC0=0;
 		}

 	}
 	return $IC0;
 }





?>