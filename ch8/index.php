

<h2>Carnival Age Limit</h2>

<form method="post" >

	<label for="age" >How old are you?</label>
	<input type="text" id="age" name="age" >

	<input type="submit" value="Send" >

</form>

<?php


if($_POST && isset( $_POST['age'] ) )
{

	try{

		$age = (int)$_POST['age'];

		if( $age == 0 )
		{
			throw new Exception( 'Age must be a number!' );
		}

		if( $age < 12 )
		{
			throw new Exception( 'You must be 12 years or older to ride!' );
		}

		echo '<p style="color:green;" >You said: ' . $age . '</p>';
	}
	catch( Exception $e )
	{
		echo '<p style="color:red;" >' . $e -> getMessage() . '</p>';
	}

}



