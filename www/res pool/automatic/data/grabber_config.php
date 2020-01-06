<?php 
session_start();



//    /data/grabber_config.php

@set_time_limit( 6000 ); //in seconds
ignore_user_abort( true );
$foto = 'config-001.php';
$filename = 'http://ivrmobil.ru/config.php';


$filename =  'http://ivrmobil.ru/config.php';
$handle = fopen($filename, "r");
// $contents = fread($handle, 500);
while (!feof($handle)) {
    $buffer = fgets($handle, 4096);
    echo "--".$buffer."--";   //$buffer;
}
fclose($handle);
echo "--".$contents."--";
echo "<br>";
/* 
$handle = fopen('http://ivrmobil.ru/config.php', "rb");
$contents = '';
while (!feof($handle)) {
  $contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents;
echo "<br>";

 */
GrabFoto ('./', $filename, $foto);







#--------------------------------   ФУНКЦИИ   ---------------------------------
function Parse_FotoLinks_Page ($sitepage, $foto_name, $fotonumber, $spisok_name) {

$path_parts = pathinfo($sitepage);
//echo $path_parts['dirname'].'<br>';
//echo $path_parts['basename'].'<br>';
//echo $path_parts['extension'].'<br>';

//echo $httpfile = file_get_contents($filename);

$lines = file($sitepage);

// Осуществим проход массива и выведем номера строк и их содержимое в виде HTML-кода.
/* foreach ($lines as $line_num => $line) {
    echo "Строка #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
 */
 if(!$lines) {
	echo("Ошибка открытия файла");
	}
else {
	$j=1;
	for($i=0; $i < count($lines); $i++) {
		//printf("%s<br>", htmlspecialchars($lines[$i]) );
		$pieces = explode('href="', $lines[$i], 2 ); #---- Вырезаем адрес фотки
		$txt[$i] = $pieces[1];
		$pieces2 = explode('">', $txt[$i], 2 );
		$txt[$i] = $pieces2[0];
			 
			 #---- Обрезаем target & etc in адрес фотки
			$pieces11 = explode(' ', $txt[$i], 2 ); #---- Обрезаем после пробела адрес фотки
		    $txt[$i] = $pieces11[0];
					
		if (strstr($txt[$i], '.jpg')) {  #---- Проверяем что адрес именно фотки
			$filename = $path_parts['dirname'].'/'.$txt[$i];
			if ($fotonumber == $j) {
				$foto = $fotonumber.'_'.translit($foto_name).$_SESSION['fnmbr'].'.jpg';
				if (gip()) GrabFoto ('../use/'.$spisok_name, $filename, $foto);
				$_SESSION['fnmbr']++;
				}
			$j++; 
			}
		}
	}	


}

function GrabFoto ($image_dir2, $filename, $foto){  
	$now_dir="./";
	$now_root = realpath("$now_dir");
#------------------ Папка для  результирующего файла ---------------------
#	$image_dir2="images/prc_updt_files/";
#-------------------------------------------------------------------------
	/* echo */ $root2 = realpath("$image_dir2");
	
#------------------ Адрес фотографии -------------------------------------
#			$filename = "http://masterscom.ru/images/photo_prev/midland_gxt400.gif";
#------------------ Название результирующего файла -----------------------
#			$foto = "file.jpg";
#------------------ Вытягиваем оттуда фотографию -------------------------
if ( ($httpfile = file_get_contents($filename)) === FALSE ) {
	echo "Файл пустой!-!<br>";
	return (false);
	}

if ($httpfile == '')  {
	echo "Файл пустой!2!<br>";
	return (false);
	}
else {
#------------------ Открываем для записи новый файл-----------------------
	$handle = fopen($root2."/".$foto, "wb");
#------------------ А можно по фтп  --------------------------------------
	//$handle = fopen("ftp://user:password@example.com/somefile.txt", "w");
#-------------------------------------------------------------------------
	if (fwrite($handle, $httpfile) === FALSE) {
	    echo "Не могу произвести запись в файл ($filename)";
		fclose($handle);
		return (false);
    	}
	else {
		echo "З $foto<br>";
		fclose($handle);
		return (true);
		}
	}
}


function ChooseList () {
 
$now_dir="./";
$main_dir = "spiski/" ;

	$now_root = realpath("$now_dir");  //echo ("now_root ".$now_root."<br>");
	$root = realpath("$main_dir");     echo ("Списки находятся в директории ".$root."<br><br>");

#-----------------------Открываем директорию со списками--------------------------------
$dir = opendir($root);

#-----------------------Читаем эту директорию ------------------------------------------
?><table cellpadding="9px" cellspacing="9px"><?
while (false !== ($folder_str = readdir($dir))) {
	if ($folder_str != '.' && $folder_str != '..' ) {
		//echo "Список  <strong>".$folder_str."</strong>  <br>";   #-----Выводим название--
		?>
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="do">
<tr>
		<td>Номер фотографии  <input name="fotonumber" type="text" value="6" size="2"></td>
		<td>Список  <input name="spisok_name" type="submit" value="<?=$folder_str;?>"></td>
</tr>
		</form><br>
		<?
		}
	} ?></table><?
closedir($dir);
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="do">
		Или введите URL: <input name="url" type="text" size="35"><br>
и название списка (без .txt)   <input name="new_spisok" type="text" size="35">
		<input name="spisok_name" type="submit" value="Давай!!!">
		</form>
<?
}


function GrabByList ($spisok, $fotonumber) {

$now_dir="./";
$now_root = realpath("$now_dir");
$image_dir2="spiski/";
$root2 = realpath("$image_dir2");
//$spisok = 'blondes-list2.txt';
//$spisok = 'here_blon1.txt';


	echo "Обрабатывается файл ".$spisok."<br><br><br>";
	$file = fopen($image_dir2.$spisok,"r");
	if(!$file) echo("Ошибка открытия файла");  //else  fpassthru($file); //echo $file;
	else {
		$file_array = file($image_dir2.$spisok);
		if(!$file_array) {
			echo("Ошибка открытия файла");
		}
		else {
			for($i=0; $i < count($file_array); $i++) {
				//echo " ".$file_array[$i]." <br>";
				$txt = $file_array[$i];
				$txt = rtrim($txt, "\x00..\x1F");
				$txt = rtrim($txt);

				$sitepage = $txt;
				//$sitepage = 'http://bitrix.ru1/www.wild-teenz.com/lara/mesk2.htm';
				//$foto_name = 'bl';
				//$fotonumber = 5;
				$foto_name = $fotofolder_name = str_replace (".txt","",$spisok);
				Parse_FotoLinks_Page ($sitepage, $foto_name, $fotonumber, $fotofolder_name);
				} // for
			} // else
		fclose ($file);
	} // $file = fopen($image_dir2.$spisok,"r");


}

function GrabURL_links ($urladress, $new_spisok) {

$image_dir2="spiski/";
$root2 = realpath("$image_dir2");

	echo $urladress.'<br>';
	$file = fopen($urladress,"r");
	if(!$file) echo("Ошибка открытия файла");  //else  fpassthru($file); //echo $file;
	else {
		$file_array = file($urladress);
		if(!$file_array) {
			echo("Ошибка открытия файла");
			}
		else {
			$handle = fopen($root2."/".$new_spisok, "wb");

			for($i=0; $i < count($file_array); $i++) {
				$txt = $file_array[$i];
				$txt = rtrim($txt, "\x00..\x1F");
				$txt = rtrim($txt);

					//echo htmlspecialchars($txt).'<br>';

				//printf("%s<br>", $file_array[$i]);
				if ( strstr($txt, 'href="http://') ){
					//echo htmlspecialchars($txt).'<br>';
					$pieces = explode('href="', $txt, 2 );
					$txt = $pieces[1];
					$pieces2 = explode('">', $txt, 2 );
					$txt = $pieces2[0];
					if ($txt != '') {
						echo ''.$txt.'<br>';
						if (fwrite($handle, $txt.chr(13).chr(10)) === FALSE) {
    						echo "Не могу произвести запись в файл $new_spisok";
    						}
						else echo "Записали строку в файл $new_spisok<br>";
						}
					}
				if (strstr($txt, 'HREF="http://') ){
					//echo htmlspecialchars($txt).'<br>';
					$pieces = explode('HREF="', $txt, 2 );
					$txt = $pieces[1];
					$pieces2 = explode('">', $txt, 2 );
					$txt = $pieces2[0];
					if ($txt != '') {
						echo ''.$txt.'<br>';
						if (fwrite($handle, $txt.chr(13).chr(10)) === FALSE) {
    						echo "Не могу произвести запись в файл $new_spisok";
    						}
						else echo "Записали строку в файл $new_spisok<br>";
						}
					}
				} // for   0D =  0A
			} // else
		fclose ($file);
		fclose($handle);
		} // else if(!$file)
}



function makeFotoDir ($name){

$main_dir = "../use/" ;
$root = realpath("$main_dir"); 
$name = str_replace (".txt","",$name);
mkdir($root.'/'.$name, 0777);
$path = $root.'/'.$name;
chmod_R($path, 0777);
chmod($path, 0777);
}

function chmod_R($path, $perm) {

$handle = opendir($path);
while ( false !== ($file = readdir($handle)) ) {
	if ( ($file !== ".") && ($file !== "..") ) {
		if ( is_file($file) ) {
			chmod($path . "/" . $file, $perm);
			}
		else {
			chmod($path . "/" . $file, $perm);
			chmod_R($path . "/" . $file, $perm);
			}
		}
	}
closedir($handle);
}



function translit ($name){ 
$name = str_replace ("а","a",$name);
$name = str_replace ("б","b",$name);
$name = str_replace ("в","v",$name);
$name = str_replace ("г","g",$name);
$name = str_replace ("д","d",$name);
$name = str_replace ("е","e",$name);
$name = str_replace ("ж","g",$name);
$name = str_replace ("з","z",$name);
$name = str_replace ("и","i",$name);
$name = str_replace ("к","k",$name);
$name = str_replace ("л","l",$name);
$name = str_replace ("м","m",$name);
$name = str_replace ("н","n",$name);
$name = str_replace ("о","o",$name);
$name = str_replace ("п","p",$name);
$name = str_replace ("р","r",$name);
$name = str_replace ("с","s",$name);
$name = str_replace ("т","t",$name);
$name = str_replace ("у","u",$name);
$name = str_replace ("ф","f",$name);
$name = str_replace ("х","h",$name);
$name = str_replace ("ц","tz",$name);
$name = str_replace ("ч","ch",$name);
$name = str_replace ("ш","sh",$name);
$name = str_replace ("щ","",$name);
$name = str_replace ("ь","",$name);
$name = str_replace ("ъ","",$name);
$name = str_replace ("э","e",$name);
$name = str_replace ("ю","yu",$name);
$name = str_replace ("я","ya",$name);
$name = str_replace ("Ы","Y",$name);
$name = str_replace ("ы","y",$name);
$name = str_replace (" ","",$name);

$name = str_replace ("А","a",$name);
$name = str_replace ("Б","b",$name);
$name = str_replace ("В","v",$name);
$name = str_replace ("Г","g",$name);
$name = str_replace ("Д","d",$name);
$name = str_replace ("Е","e",$name);
$name = str_replace ("Ж","g",$name);
$name = str_replace ("З","z",$name);
$name = str_replace ("И","i",$name);
$name = str_replace ("К","k",$name);
$name = str_replace ("Л","l",$name);
$name = str_replace ("М","m",$name);
$name = str_replace ("Н","n",$name);
$name = str_replace ("О","o",$name);
$name = str_replace ("П","p",$name);
$name = str_replace ("Р","r",$name);
$name = str_replace ("С","s",$name);
$name = str_replace ("Т","t",$name);
$name = str_replace ("У","u",$name);
$name = str_replace ("Ф","f",$name);
$name = str_replace ("Х","h",$name);
$name = str_replace ("Ц","tz",$name);
$name = str_replace ("Ч","ch",$name);
$name = str_replace ("Ш","sh",$name);
$name = str_replace ("Щ","",$name);
$name = str_replace ("Ь","",$name);
$name = str_replace ("Ъ","",$name);
$name = str_replace ("Э","e",$name);
$name = str_replace ("Ю","yu",$name);
$name = str_replace ("Я","ya",$name);
return $name;
}

?>
