<?

if(!mysql_connect("localhost","root","")) { echo "Не могу соединиться с базой!"; exit; }
//else echo "OK!!!";
/* mysql_select_db ("starboo_book"); */
mysql_select_db ("mcall_short");

#-------------------------
  foreach ($_GET as $key => $value) {$$key = $value;}  foreach ($_POST as $key => $value) {	$$key = $value;}
#-------------------------



?>
