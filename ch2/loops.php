<h1>Chapter 2 Loop Examples</h1>

<?php

// DO WHILE
$x = 0;
do{
	echo "DO: $x<br>";
	$x++;
}
while($x < 10);

// WHILE
while($x > 0)
{
	echo "WHILE: $x<br>";
	$x--;
}

// FOR
for($x = 0; $x < 10; $x++ ){
	echo "FOR: $x<br>";
}

// FOREACH
$names = ["Chad", "Jon", "Matt"];
foreach( $names as $key => $name ){
	echo "FOREACH: $key => $name<br>";
}