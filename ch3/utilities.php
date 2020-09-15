<?php


// Define a Function
function create_header( $header_string, $type = 1 )
{
	if( $type == 1)
		$tag = 'h1';
	else
		$tag = 'div';

	echo "<$tag>$header_string</$tag>";
}


// Example of calling a Function
// create_header('Include && Require Examples');
