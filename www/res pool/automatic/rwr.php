<?php 
include_once("config.php");
include_once("engine.php");
	open_connection();






$spisok = 'okved2.php';
$domen = " ";
GrabByList ($spisok, $domen);







function GrabByList ($spisok, $dom) {
$dob=0;
$now_dir="./";
$now_root = realpath("$now_dir");
$image_dir2="./";
$root2 = realpath("$image_dir2");


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
				





$strmy = $file_array[$i];
 if (   strstr ($strmy, "Подраздел")   ) {
  				$left = substr($file_array[$i], 0, 14); 
 				$right = substr($file_array[$i], 14); 
				echo "<br><br>".$left." $$$$$$ ".$right  ."<br><br><br>";
				$podrazdel = trim(str_replace("Подраздел","",$left));
				$left = "Подраздел";
}
else {
 				$left = substr($file_array[$i], 0, 10); 
 				$right = substr($file_array[$i], 10); 
				echo $left." $$$ ".$right  ."<br>"; //.($asa>255?"asa=$asa":"") ;
				if (strstr ($strmy, "РАЗДЕЛ")) {
					$razdel = trim(str_replace("РАЗДЕЛ","",$left));
					$podrazdel = "";
					$left = "РАЗДЕЛ";
				}
}
				
				$dob += (($asa = strlen($right)) > 255) ? 1:0;
  				$left = trim($left); 
 				$right = trim($right); 

$qins6 = "
INSERT INTO `okvedfull` (`id` ,`razdel` ,`podrazdel` ,`name` ,`value`) VALUES (NULL , '$razdel', '$podrazdel', '$right', '$left')
";
sql_do($qins6);
 
 
 

 
 
 
			} // for     tabindex="2" onclick="w(this,'80.22.82','84=85');"  </page>
		} // else
		fclose ($file);
	} // $file = fopen($image_dir2.$spisok,"r");
echo "<br><br><br>dob = $dob<br>
************************************************************<br>
************************************************************<br>
";


}
	close_connection();

?>