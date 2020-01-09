<?
// обработка событий get-движка польз. раздела
include("funcz.php");
$mode = getvar('mode');

# echo $mode."<br>== ";
# echo $_POST['tablelevel']." --<br>";
# if (function_exists($mode))   echo $_POST['tablelevel']." --!!!<br>";




if (isset($_POST['tablelevel'])){


	show_status(); 	//  Все новые функции обычные проставить тут, иначе будет лезть шлак
					//  В этой функции содержатся песональные переключатели обращения к таблицам для каждой фунции - анализ составных значений переменной mode,
					//  если что-то не работает - 98% проблема тут
	
	if (!isset($mode)) $mode="user";
//-первоначально
	       if ($mode == 'massedit_okvedip' || $mode == 'massedit_okvedooo') $mode = 'massedit_okved';


// - временно на старую кнопку новая табл
//	if ($mode == 'massedit_okvedip' || $mode == 'massedit_okvedooo') $mode = 'massedit2014_okved';
// - новая кнопка, сначала не работала из-за функции show_status()
	if ($mode == 'massedit2014_okvedip' || $mode == 'massedit2014_okvedooo') $mode = 'massedit2014_okved';

	
	if (function_exists($mode))  	$mode	(USER_ID		)		; 
	else 							jkh		(USER_ID, $mode	)		;

}
else {
	if (!isset($mode))  $mode="startfunc";
	$mode(USER_ID); 
}

//showhelp($mode);
//       phpinfo(32);
?>


