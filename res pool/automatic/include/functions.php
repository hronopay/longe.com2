<?





function do_html_URL($url, $name)
{
  // output URL as link and br
?><!--link href="../1shop_styles.css" rel="stylesheet" type="text/css"--><br><a href="<?=$url?>"><?=$name?></a><br><?
}

function getauthor($author){
$q = "SELECT * FROM authors WHERE id_author=$author";
$res = NDsql_query($q);
while ($rowsub = mysql_fetch_assoc($res)){
	$r = $rowsub['name']; 
	} ; 
	return $r;
}

function trim_not_needed($name, $symbol){
	$r = stristr($name, $symbol);
	if ($r) {
		$name = str_replace($r,"",$name);
		}
	return $name;
}

















function make_menu_link($name, $lang, $divider){
$if = "";
if ( GetField_fromCust ('login') ) $if = " OR `if` LIKE 'YES' ";
$q = "SELECT * FROM `site_menus`  WHERE ".$name." LIKE 'YES' AND (`show` LIKE 'yes' ".$if.") ORDER BY order_by";

/* $res = new MySQLCache($q)  or die(mysql_error())." ".$q;
$totalRows = $res->num_rows($res);
 */
$res = mysql_query($q)  or die(mysql_error())." ".$q;
$totalRows = mysql_num_rows($res);

$i=0;
   $link = 'link_'.$lang;
#while ($rowsub = $res->fetch_assoc($res)){
while ($rowsub = mysql_fetch_assoc($res)){
	echo '<a href="'.$rowsub[$link].'" onclick="doPop = 0;">'.($_SESSION['lang']=='eng'?$rowsub['eng']:$rowsub['rus']).'</a>';
	if ($i<$totalRows-1) echo $divider;
	$i++;
}

}

 



function LangChoose($back) {
?><form name="form1" method="post" action="include/rus_eng.php">
   <input type="submit" value="eng" name="lang">
   <input name="back" type="hidden" value="<?=$back?>">
   </form><form name="form2" method="post" action="include/rus_eng.php">
   <input type="submit" value="rus" name="lang">
   <input name="back" type="hidden" value="<?=$back?>">
   </form><?
}

function Eng_Rus_echo ($rus, $eng){
//echo $_SESSION['lang']=='rus'?$rus:$eng; 
//return $_SESSION['lang']=='rus'?($rus):($eng); 
return $_SESSION['lang']=='rus'?($rus!=""?$rus:$eng) : ($eng!=""?$eng:$rus); 
}



function e_mail_us ($name, $server, $ru, $string) {
if ($string == "")	$show = "write(\"".$name."\" + \"@\" + \"".$server.".\" + \"".$ru."\");";
else $show = "write(\"".$string."\" );"; 
	
echo "<script type=\"text/javascript\">
								with (document)
								{
									write(' <a href=\"ma' + 'ilto:' + '".$name."' + '@' + '".$server.".' + '".$ru."' + '\">');
									".$show."
									write(\"</a> \");
								}
							</script>";

}

function for_cookies_dom () {
	return str_replace(".","_",$_SERVER["SERVER_NAME"]);
}

function a_href_invisible ($hyperlink, $linkcontent, $classlink) {

 echo "<script> hyperlink= '".$hyperlink."'; linkcontent= '".$linkcontent."'; classlink = '".$classlink."'; document.write('<a hr' + 'ef=\"' + hyperlink + '\" class=\"' + classlink + '\">' + linkcontent + '</a>'); </script>";

}








function NDsql_query ($q) {
if (!isset ($_GET['sql_counter']) ) {$_GET['sql_counter'] = 1;}
else 								{$_GET['sql_counter']++; }
return mysql_query ($q) /*  or die ("<p><b>ERROR!!!</b></p><br>$php_errormsg ".mysql_errno().": ".mysql_error()."<BR>".$q."<BR>") */;
}   


function Nbsp_1($times){
 for ($i=0;$i<$times;$i++){
 	echo "&nbsp;";
 }
}






function isAction(){

	$file = fopen("html_gall/isaction.php","r");
	if(!$file) $isaction = 0;  //else  fpassthru($file); //echo $file;
	else {
		$file_array = file("html_gall/isaction.php");
		if(!$file_array) {
			$isaction =  0;
		}
		else {
			for($i=0; $i < count($file_array); $i++) {
				
						$isaction =  $file_array[$i];

			} // for     
		} // else
	} // else
	fclose ($file);

return $isaction;
}

?>