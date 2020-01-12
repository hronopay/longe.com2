<script>
	$( "#radioset" ).buttonset();
		
	$('#pass').on('keyup', function(){
		var count = $(this).val().length; // count input letters
		if(count >= 0 && count < 7){
			$('#passcomment').text('<?php echo $t12_1; ?>');
			$('#passcomment').css({ "font-weight":"bold", "font-size":"15px",  "color":"#ff5555"});
		}
		else if(count < 12){
			$('#passcomment').css({ "font-weight":"bold", "font-size":"15px", "color":"#333333"});
			$('#passcomment').text('<?php echo $t12_2; ?>');
		}
		else {
			$('#passcomment').css({ "font-weight":"bold", "font-size":"15px", "color":"#88ff88"});
			$('#passcomment').text('<?php echo $t12_3; ?>');
		}
	});

	$('#CreateAcc').on('click', function(){
		var po_radio1 = $("#radio1 input:radio").val(); 
		var po_radio2 = $("#radio2 input:radio").val(); 
		var po_mail = $("#mail").val(); 
		var po_pass = $("#pass").val(); 
		var po_id = $("#id").val(); 
		var po_f = $("#filledin").val(); 
		var po_h = $("#filledin_hm").val(); 
		var str1 = "registration"; 
		$.ajax({
			url: "api.php",  
			type: 'POST',
			data: {
				radio: po_radio1,      
				mail: po_mail,      
				pass: po_pass,     
				id: po_id,      
				filledin: po_f,      
				filledin_hm: po_h,
				page: str1,
				doreg: 'ok'
			},
			//beforeSend: function(xhr) {},
            success: function(html){
                $('#content_sec').html(html);
                console.log('#4 done ( form2 )');
            },
            error: function() {
                alert('Error #4');
            }
		});
	});
</script>

<div class="general">

	<h3><?php echo $t8; ?></h3>

	<form id="form2">
		<div id="radioset" align="left">
			<input type="radio" id="radio1" name="radio" value="ind1" checked="checked">
				<label for="radio1"><?php echo $t9; ?></label>
			<br>
			<input type="radio" id="radio2" name="radio" value="ind2">
				<label for="radio2"><?php echo $t10; ?></label>
		</div>
		<div align="left">
			<strong><?php echo $t11; ?></strong><br>
			<input id="mail" type="email" name="mail" maxlength="100">
		</div>
		<div align="left">
			<?php echo $t12; ?><br>
			<input id="pass" type="password" name="pass" maxlength="100">
		</div>

		<?php 
		$ti = round (time()/3, 0); 
		$filledin = date("20y-m-d");  
		$filledin_hm = date("H:i:s"); 
		?>

		<input id="id" name="id" type="hidden" value="<?php echo $ti; ?>">
		<input id="filledin" name="filledin" type="hidden" value="<?php echo $filledin; ?>">
		<input id="filledin_hm" name="filledin_hm" type="hidden" value="<?php echo $filledin_hm; ?>">

		<input id="CreateAcc" class="CreateAcc" type="button" name="doreg" value="<?php echo $t13; ?>" align="left">
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
