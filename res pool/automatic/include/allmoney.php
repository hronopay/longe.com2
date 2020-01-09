<?
echo "GGGGGGGGGGGGGGGGGGG<br>";
define('_SAPE_USER', '190fe26724e355272d6d5f3d35d988e8');      
require_once($_SERVER['DOCUMENT_ROOT'].'/'._SAPE_USER.'/sape.php'); 
 $sape = new SAPE_client(); 
echo $sape->return_links();

#--------------------------   MainLink   &   Seolin   -----------------------------------

define('SEOLIN_KEY', 'ptc3y8oueg2bea3azrwozlcleyl6nm'); @require_once($_SERVER['DOCUMENT_ROOT'].'/'.SEOLIN_KEY.'/seolinru.php'); $seolin = new SEOLIN_system(); echo $seolin->seo_write_link();

include_once($_SERVER['DOCUMENT_ROOT']."/allmainlink/ML.php");
  if($_SERVER['REQUEST_URI']=='/'){
  	//echo $ml->MainLink(); // Подключение главной страницы (морда)
  }else{
   	echo $ml->MainLink_Second(); // Подключение вторых страниц и вывод всего блока
  }
// if($ml->ml_cfg[debugmode]) echo $ml->ml_cfg[debug_info];

/* $o['force_show_code'] = true; $sape = new SAPE_client($o); echo $sape->return_links();  */

#                     setlinks
  require_once ($_SERVER['DOCUMENT_ROOT'].'/setlinks_fb6a9/slsimple.php'); 

echo "HHHHHHHHHHHHHHHHHHH<br>";

?>