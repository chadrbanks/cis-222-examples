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
//			else if ($_GET['action'] == 'sign_in')
//			{
//				$this->processUserSignIn($pdo);
//			}
//			else if ($_GET['action'] == 'sign_up')
//			{
//				$this->processNewUser($pdo);
//			}
		}
		else if( isset($_POST['action'] ) )
		{
			if ($_POST['action'] == 'signup')
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
			$confirm = $_POST['confirm'];

			if( $password !== $confirm )
			{
				throw new Exception( 'Passwords do not match!' );
			}
			if( strlen($password) < 8 )
			{
				throw new Exception( 'Password is not long enough!' );
			}

			//$password = encryptPassword($password);

			// PDO INSERT HERE
			$insert_success = true;

			if ($insert_success)
			{
				$_SESSION['sign_up_success'] = '<div class="alert alert-success" role="alert">Account Saved!</div>';

				//$_SESSION['current_account'] = $account_id;
			}
			else{
				throw new Exception( "We failed to create your account!" );
			}
		}
		catch(Exception $e)
		{
			$_SESSION['sign_up_error'] = '<div class="alert alert-danger" role="alert">' . $e -> getMessage(). '</div>';
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