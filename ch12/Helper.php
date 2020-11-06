<?php
/**
 * Helper.php
 *
 * This is a helper class designed to add utility functionality.
 * This includes the encrypt function.
 *
 * @category   Example
 * @package    CIS-222
 * @author     Chad Banks <crbanks1@hfcc.edu>
 * @version    2020.11.05
 */

class Helper
{
	public function __construct(  )
	{
		//
	}

	public function encrypt( $password, $iterations = 200, $salt = "th3_S4l7" )
	{
		$n = crypt( $password, $salt );

		for( $i = 0; $i < $iterations; ++$i )
		{
			$n = crypt( $n.$password, $salt );
		}

		return $n;
	}

	public function AdjustTimezone( $n = 3 )
	{
		return "DATE_ADD(NOW(), INTERVAL $n HOUR)"; // 3 now, was 2 until March
	}
}

// New file
$pass = 'password123';//$_POST['password'];
$helper = new Helper();

$hashed_password = $helper -> encrypt( $pass );
$hashed_password = $helper -> encrypt( $pass, 1000, "MyOwnS4lt" );