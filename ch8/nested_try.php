<?php


$var = array( 'a' => 'a', 'b' => 'b', 'c' => 'c' );

try
{
	try
	{
		$data = @file_get_contents( 'test.json' );

		if(!$data)
		{
			throw new Exception( 'JSON data not found!' );
		}

		$obj = json_decode( $data );

		var_dump( $obj );

		echo $obj['name']; // $obj -> name

	}
	catch( Exception $e2 )
	{
		//echo '<p style="color:red;" >E2: ' . $e2 -> getMessage() . '</p>';
		throw new Exception( $e2 -> getMessage() );
	}

}
catch( Exception $e1 )
{
	echo '<p style="color:red;" >E1: ' . $e1 -> getMessage() . '</p>';
}