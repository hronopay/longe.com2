<?php  
include_once('include/ip.php');  
include("include/header.php"); 
include_once("config.php");
include_once("engine.php");
open_connection();
?>

<div class="general">

Verify Your Email Address

A verification email has been sent to nlo22-go2@yahoo.com.
Please open the email and click on the "Verify" button to confirm that the email address belongs to you.

Did not receive the email within 5 minutes?
Make sure you provided the correct email address.
Check your email spam/junk folder.


<h3>Verify Your Email Address</h3>



	<div align="left">
A verification email has been sent to nlo22-go2@yahoo.com.<br>
Please open the email and click on the "Verify" button to confirm that the email address belongs to you.	</div>

	<div align="left">
		<strong>Did not receive the email within 5 minutes?
Make sure you provided the correct email address.
Check your email spam/junk folder.</strong><span class="comment">Did not receive the email within 5 minutes?
Make sure you provided the correct email address.
Check your email spam/junk folder.</span><br>
		<input type="password" name="phone" maxlength="100">
	</div>
		



	<div id="signUpWarning" align="left">
     
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
// The js functions should be placed below 	 "include('include/footer.php');" instuction as the jquery libs are in footer.php now
//-------------------------------------------------------------------------------------------------------------------------------	
?>

<script>
$( "#radioset" ).buttonset();
</script>
