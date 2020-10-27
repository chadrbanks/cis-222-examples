<?php

$filename = 'data.txt';




// file_get_contents
$content = file_get_contents( $filename );
var_dump($content);

$content .= date( 'Y-m-d H:i:s' ). "<br>\n";

// file_put_contents
file_put_contents( $filename, $content );