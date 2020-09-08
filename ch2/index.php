<h1>Chapter 2 Conditional Examples</h1>

<?php
if( 1 == 1 ){
	echo "Truth!<br><br>";
}

echo '1 == 2 :';
var_dump( 1 == 2 ); // false
echo '<br> &lt;br&gt;';

echo '1 == 1 :';
var_dump( 1 == 1 ); // true
echo '<br>';

echo '1 == "1" :';
var_dump( 1 == "1" ); // true
echo '<br>';

echo '1 == "the 1" :';
var_dump( 1 == "the 1" ); // false
echo '<br>';

echo '1 === "1" :';
var_dump( 1 === "1" ); // false
echo '<br>';



$myArray = ["Chad", "Farhana", "Colin" ];
var_dump($myArray);

array_push($myArray, "Matt");
echo "<br><br>";
var_dump($myArray);

echo "<br><br>";
$myAssocArray = ["Chad" => 42, "Farhana" => 117, "Colin" => 0 ];
var_dump($myAssocArray);
