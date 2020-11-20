<?php


if( isset($_SESSION['sign_in_error']) )
{
	echo $_SESSION['sign_in_error'];

	$_SESSION['sign_in_error'] = null;
}
//
//if( isset($_SESSION['sign_in_success']) )
//{
//	echo $_SESSION['sign_in_success'];
//
//	$_SESSION['sign_in_success'] = null;
//}

$existingEmail = '';
if( isset($_POST['email']) )
{
	$existingEmail = ' value="' . $_POST['email'] . '" ';
}

?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<br><br>
	<h1 class="display-4">Sign In</h1>
	<br><br>

	<form method="POST" >
		<label for="email" >Email:</label>
		<input type="text" name="email" id="email" <?php echo $existingEmail; ?> >

		<br>

		<label for="password" >Password:</label>
		<input type="password" name="password" id="password" >

		<br>
		<input type="submit" value="Sign In" >
		<input type="hidden" name="action" value="signin" >
	</form>
</div>
