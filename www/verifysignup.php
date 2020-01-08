<?php  
include_once('include/ip.php');  
include("include/header.php"); 
include_once("config.php");
include_once("engine.php");
open_connection();
?>

'<div class="general">
<h3>Verify Your Email Address</h3>
	<div align="left"><span class="verifyemail"><strong>
		A verification email has been sent to <span style="color:#66FF66; "> '.$_POST['mail'].'</span>.<br>
		Please open the email and click on the "Verify" button to confirm that the email address belongs to you.
		<br><br>
		Did not receive the email within 5 minutes?<br>
		- Make sure you provided the correct email address.<br>
		- Check your email spam/junk folder.</strong></span>
	</div>
</div>'
	                                      

<?php 
	close_connection();
	include('include/footer.php');
//-------------------------------------------------- IMPORTANT !!! --------------------------------------------------------------	
// The js functions should be placed below 	 "include('include/footer.php');" instuction as the jquery libs are in footer.php now
//-------------------------------------------------------------------------------------------------------------------------------	
?>
