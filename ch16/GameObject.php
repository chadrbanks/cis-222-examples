<?php



class GameObject
{
	protected $health = 100;
	private $velocity = 0;
	
	function getVelocity()
	{
		return $this -> velocity;
	}
	
	function setVelocity( $n )
	{
		
		$this -> velocity = $n;
	}
	
	
}