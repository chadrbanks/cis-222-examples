<?php
/**
 * Car.php
 *
 * A Car class example
 *
 * @category   Example
 * @package    CIS-222
 * @author     Chad Banks <crbanks1@hfcc.edu>
 * @version    2020.10.27
 * @link       https://cislinux.hfcc.edu/~crbanks1/class/20f/cis222/
 */

class Car
{
	public $color;

	public function __construct( $clr )
	{
		$this -> color = $clr;
	}
	
	
	public function drive( )
	{
		echo 'The ' . $this -> color . ' car is now driving!';
	}
}
