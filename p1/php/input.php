<?php



if( isset($_GET['action']) )
{
	if( $_GET['action'] == 'contact' )
	{
		var_dump($_GET);
		var_dump($pdo);
	}
	else if( $_GET['action'] == 'add_location' )
	{
		$location = $_GET['location'];

		$qry = "INSERT INTO `locations`
					(`location_id`, `location_name`, `create_date`, `update_date`, `delete_date`)
					VALUES
					( NULL, ?, NOW(), NOW(), NULL );  ";

		$stmt = $pdo->prepare( $qry );
		$r = $stmt -> execute( [$location] );

		if( $r )
		{
			$_GLOBAL['location_message'] = '<div class="alert alert-success" role="alert">Location Saved!</div>';
		}
	}
}


