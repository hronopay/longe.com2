<?

if(!mysql_connect("localhost","root","")) { echo "Не могу соединиться с базой!"; exit; }
//else echo "OK!!!";
mysql_select_db ("adress");

mysql_query ("set character_set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_unicode_ci'");


#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------



?>
