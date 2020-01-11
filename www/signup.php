<script>
$( "#radioset" ).buttonset();

/* $('#pass').on('change',	function(){
	$('.stongpass').css({ "font-weight":"bold",  "color":"red"});
}); */
/* $(document).ready(function(){ */ 
	$('#pass').on('keyup', function(){
		var count = $(this).val().length; // ipput letters
		//var num = max - count; 
		if(count >= 0 && count < 7){
			$('.stongpass').css({ "font-weight":"bold", "font-size":"15px",  "color":"#ff8888"});
			$('.stongpass').text('Weak');
		}
		else if(count < 12){
			$('.stongpass').css({ "font-weight":"bold", "font-size":"15px","color":"#888888"});
			$('.stongpass').text('Medium');
		}
		else {
			$('.stongpass').css({ "font-weight":"bold", "font-size":"15px","color":"#88ff88"});
			$('.stongpass').text('Strong');
		}
	});
/* });  */
</script>

<div class="general">

<h3><?php echo $t8; ?></h3>

<form id="form2" name="regclient"  action="registration" enctype="multipart/form-data" method="post">

	
		<div id="radioset" align="left">
		<input type="radio" id="radio1" name="radio" value="ind" checked="checked"><label for="radio1"><?php echo $t9; ?></label><br>
		<input type="radio" id="radio2" name="radio" value="ind"><label for="radio2"><?php echo $t10; ?></label>
	</div>


	<div align="left">
		<strong><?php echo $t11; ?></strong><br>
		<input id="mail" maxlength="100"  type="email" name="mail">
	</div>

	<div align="left">
		<?php echo $t12; ?><br>
		<input id="pass" type="password" name="phone" maxlength="100">
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
?>


