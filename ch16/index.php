<?php
/**
 * index.php
 *
 * This file is the chapter 16 examples landing page.
 *
 * @category   Example
 * @package    CIS-222
 * @author     Chad Banks <crbanks1@hfcc.edu>
 * @version    2020.10.27
 * @link       https://cislinux.hfcc.edu/~crbanks1/cis222/ch16
 */

require( 'GameObject.php' );
require( 'Enemy.php' );

$enemy1 = new Enemy( 'Joe' );
$enemy2 = new Enemy( 'Susan' );

$enemy1 -> sayHello();
$enemy1 -> takeDamage(35);
$enemy1 -> sayHello();

$enemy2 -> sayHello();
$enemy2 -> takeDamage(10);
$enemy2 -> sayHello();

$enemy1 -> sayHello();




echo '<br><br><br>';

$dt = new DateTime();
var_dump($dt);

echo '<br><br><br>';

require( 'Car.php' );

$redCar = new Car( 'Red' );
var_dump( $redCar );

echo '<br><br>';

$blueCar = new Car( 'Blue' );
var_dump( $blueCar );
echo '<br><br>';
$blueCar -> drive( );
