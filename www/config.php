<?
define('IN_SITE', true);
define('DB_SERVER',"localhost");

define('DB_USER',"root");   
define('DB_PASSWORD',"");    
define('DB_NAME',"longe");




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