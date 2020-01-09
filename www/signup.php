<?php  
include_once("include/header.php"); 
include_once("config.php");
include_once("engine.php");
open_connection();
?>

<div class="general">

<h3><?php echo $t8; ?></h3>

<form id="form2" name="regclient"  action="registration" enctype="multipart/form-data" method="post">

	
		<div id="radioset" align="left">
		<input type="radio" id="radio1" name="radio" value="ind" checked="checked"><label for="radio1"><?php echo $t9; ?></label>
		<input type="radio" id="radio2" name="radio" value="ind"><label for="radio2"><?php echo $t10; ?></label>
	</div>


	<div align="left">
		<strong><?php echo $t11; ?></strong><br>
		<input maxlength="100"  type="text" name="mail">
	</div>

	<div align="left">
		<?php echo $t12; ?><br>
		<input type="password" name="phone" maxlength="100">
	</div>
		

	<div class="invisible">
		<input value="<?php echo $ti = round (time()/3, 0); ?>" disabled>
	</div>
		
	<div class="invisible">
		<strong>Current time:</strong><br>
		<?php echo $filledin = date("20y-m-d");  echo ' '; echo $filledin_hm = date("H:i:s"); ?>
	</div>

	<input name="id" type="hidden" value="<?php echo $ti; ?>">
	<input name="filledin" type="hidden" value="<?php echo $filledin; ?>">
	<input name="filledin_hm" type="hidden" value="<?php echo $filledin_hm; ?>">

	<input class="CreateAcc" type="submit" name="doreg" value="<?php echo $t13; ?>" align="left">
</form>

	<div class="comment" align="left">
	<?php echo $t14; ?>
	</div>

</div> 
	                                      
<script language="javascript">
<!--
	var data = new Date;
	document.getElementById('id_num').value = data.getTime().toString().substr(7);
-->
</script>

<?php 
	close_connection();
	include('include/footer.php');
//-------------------------------------------------- IMPORTANT !!! --------------------------------------------------------------	
// The js functions should be placed below 	 "include('include/header.php');" instuction as the jquery libs are in footer.php now
//-------------------------------------------------------------------------------------------------------------------------------	
?>

<script>
$( "#radioset" ).buttonset();
</script>
