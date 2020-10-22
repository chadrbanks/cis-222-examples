<?php



define( 'INDEX_PATH', __DIR__ );

// DB Connection
include( INDEX_PATH . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR. 'db.php' );

// Input
//require('php/input.php');
require('php/controller.php');
$contr = new Controller( $pdo );


// Render
require('php/render.php');