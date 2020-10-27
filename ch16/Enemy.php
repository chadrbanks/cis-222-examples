<?php



class Enemy extends GameObject
{
	protected $name;

	function __construct( $n )
	{
		$this -> name = $n;
	}

	function sayHello()
	{
		echo 'Hi my name is ' . $this -> name;
		echo ', I have ' . $this -> health . ' health!<br><br>';
	}
	
	function heal( $num )
	{
		$this -> health += $num;
	}
	
	function takeDamage( $num )
	{
		// Calculate armor mods
		$this -> health -= $num;
	}
}