<?php



class Users
{
	
	private $pdo;
	
	function __construct( $p )
	{
		$this -> pdo = $p;
	}

	function InsertNewUser( $email, $password )
	{
		$qry = "INSERT INTO `users`
					(`user_id`, `email`, `password`, `create_date`, `update_date`, `delete_date`)
					VALUES ( NULL, ?, ?, NOW(), NOW(), NULL ); ";

		$stmt = $this -> pdo -> prepare($qry);

		return $stmt -> execute([$email, $password]);
	}

	function SelectUserByEmail( $email )
	{
		$qry = "SELECT * FROM `users` WHERE `email` = ?; ";

		$stmt = $this -> pdo -> prepare($qry);

		$stmt -> execute([$email]);
		
		$users = array();
		
		while ($row = $stmt->fetch())
		{
			$users[] = $row;
		}
		
		if( count( $users ) > 0 )
		{
			return $users;
		}
		
		return false;
	}

	function SelectAllUsers( )
	{
		$qry = "SELECT * FROM `users` ";

		$stmt = $this -> pdo -> prepare($qry);

		$stmt -> execute([]);
		
		$users = array();
		
		while ($row = $stmt->fetch())
		{
			$users[] = $row;
		}
		
		if( count( $users ) > 0 )
		{
			return $users;
		}
		
		return false;
	}
}