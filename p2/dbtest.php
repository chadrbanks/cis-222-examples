<?php



include( __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR. 'db.php' );


$qry = "SELECT * FROM `users`; ";

$stmt = $pdo->prepare($qry);

$r = $stmt->execute([]);

while($row = $stmt -> fetch() )
{
	var_dump( $row );
	echo '<br><br>';
}
