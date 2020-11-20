<?php



class Utilities
{



	public function encrypt( $password, $iterations = 200, $salt = "th3_S4l7" )
	{
		$n = crypt( $password, $salt );

		for( $i = 0; $i < $iterations; ++$i )
		{
			$n = crypt( $n.$password, $salt );
		}

		return $n;
	}
}