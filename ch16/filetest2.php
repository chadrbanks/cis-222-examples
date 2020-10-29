<?php

try
{
	$filename = 'data/people.json';
	$content = json_encode( array
	(
		array( 'name' => 'Chad', 'email' => 'crbanks1@hfcc.edu' ),
		array( 'name' => 'Susan', 'email' => 'ssagi@hfcc.edu' )
	));

	var_dump($content);

	// file_put_contents
	file_put_contents( $filename, $content );

	echo '<h1>It worked!</h1>';


	$people = file_get_contents( $filename );

	var_dump($people);
}
catch( Exception $e )
{
	echo '<h1>Error: ' . $e -> getMessage() . '</h1>';
}
