<?
define('IN_SITE', true);
//define('DB_SERVER',"89.188.106.142");
//define('DB_SERVER',"host3-web.mastak.com");
define('DB_SERVER',"localhost");

define('DB_USER',"root");   
define('DB_PASSWORD',"");    
define('DB_NAME',"adress");

/*  define('DB_USER',"admin_ivr");
define('DB_PASSWORD',"CbRWMTQu");
define('DB_NAME',"admin_ivr"); */
 /* define('DB_USER',"p0892_ivr");
define('DB_PASSWORD',"ivr3ivr6ivr9");
define('DB_NAME',"p0892_ivr");  */


global $payments_state;
$payments_state = array('0'=>'Подана заявка',
                        '10'=>'Принята к рассмотрению',
                        '100'=>'В процессе рассчёта',
                        '500'=>'Платёж проведён, занесён в архив',
                        '1000'=>'Платёж отклонен'
                        );

define('ADMIN_LOGIN',"admin");
define('ADMIN_PASSWORD',"YtJnVbhfCtuj");

?>