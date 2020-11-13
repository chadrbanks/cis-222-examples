<?php


if( isset($_SESSION['sign_up_error']) )
{
	echo $_SESSION['sign_up_error'];

	$_SESSION['sign_up_error'] = null;
}

if( isset($_SESSION['sign_up_success']) )
{
	echo $_SESSION['sign_up_success'];

	$_SESSION['sign_up_success'] = null;
}

$existingEmail = '';
if( isset($_POST['email']) ){

	$existingEmail = ' value="' . $_POST['email'] . '" ';
}

?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<br><br>
	<h1 class="display-4">Sign Up</h1>
	<br><br>

	<form method="POST" >
		<label for="email" >Email:</label>
		<input type="text" name="email" id="email" <?php echo $existingEmail; ?> >

		<br>

		<label for="password" >Password:</label>
		<input type="password" name="password" id="password" >

		<br>

		<label for="confirm" >Confirm Password:</label>
		<input type="password" name="confirm" id="confirm" >

		<br>
		<input type="submit" value="Sign Up" >
		<input type="hidden" name="action" value="signup" >
	</form>
</div>
