<?php
/**
 * Controller.php
 *
 * This is a controller class for handling project input such as contact and cart requests.
 *
 * @category   P1
 * @package    CIS-222
 * @author     Chad Banks <crbanks1@hfcc.edu>
 * @version    2020.10.22
 * @link       https://cislinux.hfcc.edu/~crbanks1/cis222/p1
 */

class Controller
{

	/**
	 * Controller constructor.
	 *
	 * @param $pdo
	 */
	function __construct($pdo )
	{
		if( isset($_GET['action']) )
		{
			if ( $_GET['action'] == 'add_location')
			{
				$this->processLocation($pdo);
			}
			else if ($_GET['action'] == 'contact')
			{
				$this->processContact($pdo);
			}
			else if ($_GET['action'] == 'sign_in')
			{
				$this->processUserSignIn($pdo);
			}
			else if ($_GET['action'] == 'sign_up')
			{
				$this->processNewUser($pdo);
			}
		}
	}

	/**
	 * @description Process and input location into the database.
	 * @param $pdo
	 */
	function processLocation( $pdo )
	{
		try
		{
			$location = $_GET['location'];

			$qry = "INSERT INTO `locations`
					(`location_id`, `location_name`, `location_phone`, `create_date`, `update_date`, `delete_date`)
					VALUES
					( NULL, ?, NOW(), NOW(), NULL );  ";

			$stmt = $pdo->prepare($qry);
			$r = $stmt->execute([$location]);

			if ($r)
			{
				$_GLOBAL['location_message'] = '<div class="alert alert-success" role="alert">Location Saved!</div>';
			}
		}
		catch(Exception $e)
		{
			$_GLOBAL['location_message'] = '<div class="alert alert-danger" role="alert">' . $e -> getMessage(). '</div>';
		}
	}

	/**
	 * @description Process and input location into the database.
	 * @param $pdo
	 */
	function processNewUser( $pdo )
	{
		try
		{
			$email = $_POST['email'];
			$password = $_POST['password'];

			//$password = encryptPassword($password);

			$qry = "INSERT INTO `users`
					(`uid`, `email`, `password`)
					VALUES
					( NULL, ?, ? );  ";

			$stmt = $pdo->prepare($qry);
			$r = $stmt->execute([$email, $password]);

			if ($r)
			{
				$_GLOBAL['location_message'] = '<div class="alert alert-success" role="alert">Location Saved!</div>';
			}
		}
		catch(Exception $e)
		{
			$_GLOBAL['location_message'] = '<div class="alert alert-danger" role="alert">' . $e -> getMessage(). '</div>';
		}
	}

	/**
	 * @description Process and input a contact into the database.
	 * @param $pdo
	 */
	function processContact( $pdo )
	{
		try{
			var_dump($_GET);
			var_dump($pdo);
		}
		catch( Exception $e ){

		}
	}
}