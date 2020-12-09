<?php


session_start();

define( 'INDEX_PATH', __DIR__ );

// Include DB Connection ($pdo)
include( INDEX_PATH . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR. 'db.php' );
// Include Utility class
include( INDEX_PATH . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR. 'Utilities.php' );
// Include Users class
include( INDEX_PATH . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR. 'Users.php' );
// Include Controller class
include( INDEX_PATH . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR. 'controller.php' );

// Input
//require('php/input.php');
$contr = new Controller( $pdo );


// Render
require('php/render.php');