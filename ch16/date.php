<?php


$dt = new DateTime( strtotime('-3 weeks') );
var_dump($dt);

echo '<br><br>';

$date = strtotime('+5 weeks');
var_dump( date( 'Y-m-d H:i:s', $date ) );
