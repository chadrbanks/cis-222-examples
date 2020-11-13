<?php

include( '../../../creds.php' );

$host = '127.0.0.1';
$db   = 'crbanks1';
$user = 'crbanks1';
$pass = MYSQLPASS;
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt =
	[
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false,
	];

$pdo = new PDO($dsn, $user, $pass, $opt);
