<div class="box-login">
<?php
	
	$form = new form();
	$text_user = new textfield('user_user','','form-control','User');
	$text_pass = new pass('user_pass','form-control','Password');	
	$submit = new buttonok('Login','','btn btn-lg btn-primary btn-block','');
	
	echo "<legend><h4 class='form-signin-heading'><center>Login</center></h2>";
	echo $form->open('form-signin','','','check_login.php','');
	echo $lb_user.$text_user.'<br />';
	echo $lb_pass.$text_pass.'<br />';
	echo $submit;
	echo $form->close();
	echo "</legend>";

?>
</div>