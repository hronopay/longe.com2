<?php  
include_once("include/header.php"); 
include_once("config.php");
include_once("engine.php");
open_connection();
?>

<div class="general">

<h3>Create an Account</h3>

<form id="form2" name="regclient"  action="registration" enctype="multipart/form-data" method="post" onsubmit="if(document.regclient.licence.value != 'YES' || document.regclient.licence.value == ''){alert('Вы не подтвердили согласия на тестовый период подключения');return false}">

	
		<div id="radioset" align="left">
		<input type="radio" id="radio1" name="radio" value="ind" checked="checked"><label for="radio1">Personal account type <span class="comment">- Trade as an individual </span></label>
		<input type="radio" id="radio2" name="radio" value="ind"><label for="radio2">Corporate account type<span class="comment">- Trade on behalf of your business </span></label>
	</div>


	<div align="left">
		<strong>E-mail address</strong><br>
		<input maxlength="100"  type="text" name="mail">
	</div>

	<div align="left">
		<strong>Password </strong><span class="comment">(must be a <span style="font-style:italic; ">Strong</span> password at least 12 characters long):</span><br>
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

	<input class="CreateAcc" type="submit" name="doreg" value="Create Account" align="left">
</form>

	<div id="signUpWarning" align="left">
	<span class="comment">Already have an account?</span> 
	<a href="login" >Log in</a>
<br>
<br>
     
	 <span class="comment">We are committed to complying with all applicable regulations that help prevent, detect and remediate unlawful behavior by customers and virtual asset developers when using the BuySell Project trading platform or any other BuySell Project services.</span>
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
