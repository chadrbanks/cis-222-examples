<?php

$key = 'has_sent_form';

session_start();

var_dump($_SESSION);

if( !isset($_SESSION[$key]) )
{
	$_SESSION['has_sent_form'] = 'No';
}


if( isset( $_POST['action'] ) )
{
	if( $_POST['action'] == 'Sign In' )
	{
		$_SESSION['has_sent_form'] = 'Yes';
	}
	else if( $_POST['action'] == 'Sign Out' )
	{
		$_SESSION['has_sent_form'] = null;
		// unset($_SESSION['has_sent_form']);
	}
}

$output = 'No Session Data!';

if( isset($_SESSION[$key]) )
{
	$output = $_SESSION[$key];
}

?>

<h1>Sessions</h1>


<form method="post" >
	<input type="submit" name="action" value="Sign In" >
</form>

<form method="post" >
	<input type="submit" name="action" value="Sign Out" >
</form>

<?php

echo '<p>Has Sent Form: ' . $output . '</p>';

unset($key);
