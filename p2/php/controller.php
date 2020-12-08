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

	private $user_model;
	private $utils;

	/**
	 * Controller constructor.
	 *
	 * @param $pdo
	 */
	function __construct($pdo)
	{
		// TODO : DI?
		$this -> utils = new Utilities();
		$this -> user_model = new Users( $pdo );

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
		}
		else if( isset($_POST['action'] ) )
		{
			if ($_POST['action'] == 'signup')
			{
				$this->processNewUser($pdo);
			}
			else if ($_POST['action'] == 'signin')
			{
				$this->processSignIn($pdo);
			}
			else if ($_POST['action'] == 'add_cart')
			{
				$this->processAddToCart($pdo);
			}
		}


		if ( isset($_GET['page']) )
		{
			if($_GET['page'] == 'signout')
			{
				$this->processSignOut( );
			}
			else if($_GET['page'] == 'signin' || $_GET['page'] == 'signup')
			{
				if( isset($_SESSION['user_id']) && $_SESSION['user_id'] )
				{
					header('Location: https://cislinux.hfcc.edu/~crbanks1/cis222/p2/');
				}
			}
		}
	}

	function processSignOut()
	{
		$_SESSION['user_id'] = false;
		$_SESSION['email'] = null;

		header('Location: https://cislinux.hfcc.edu/~crbanks1/cis222/p2/');
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
	 * @description Process and input a new item into a cart.
	 * @param $pdo
	 */
	function processAddToCart( $pdo )
	{
		try
		{
			$desiredProductId = $_POST['product_id']; // TODO : THESE LINES NEED VALIDATION
			$accountId = $_SESSION['user_id'];
			
			// TODO : YOU MAY NEED TO HANDLE GUEST CHECKOUT
			
			$qry = "INSERT INTO `Cart`
					(`cart_id`, `cart_qty`, `product_id`, `account_id`, `cart_data`, `created_date`, `updated_date`, `removed_date`)
					VALUES
					( NULL, 1, ?, ?, 'Random Text', NOW(), NOW(), NOW() );  ";

			$stmt = $pdo->prepare($qry);
			$r = $stmt->execute([$desiredProductId, $accountId]);

			if ($r)
			{
				$_GLOBAL['cart_message'] = '<div class="alert alert-success" role="alert">Item added to cart!</div>';
			}
		}
		catch(Exception $e)
		{
			var_dump($e -> getMessage());
			$_GLOBAL['cart_message'] = '<div class="alert alert-danger" role="alert">' . $e -> getMessage(). '</div>';
		}
	}


	function processSignIn( $pdo )
	{
		try
		{
			// Gathering Data From User
			$email = $_POST['email'];
			$freshTypedPassword = $this -> utils -> encrypt($_POST['password'], 200, "ThisIsAUniqueS4lt");
			$existingSavedPassword = 'ThyTwSpEm5ahQ'; // TODO : Actually query the existing password in the db

			// Validations
			if($freshTypedPassword === $existingSavedPassword)
			{
				$_SESSION['user_id'] = 2;
				$_SESSION['email'] = $email;

				header('Location: https://cislinux.hfcc.edu/~crbanks1/cis222/p2/');
			}
			else
			{
				throw new Exception( 'Invalid password!' );
			}
		}
		catch( Exception $e )
		{
			$_SESSION['sign_in_error'] = '<div class="alert alert-danger" role="alert">' . $e -> getMessage(). '</div>';
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
			// Gathering Data From User
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm = $_POST['confirm'];

			// Validations
			if( $password !== $confirm )
			{
				throw new Exception( 'Passwords do not match!' );
			}
			if( strlen($password) < 8 )
			{
				throw new Exception( 'Password is not long enough!' );
			}

			// Validate that email doesn't exist
			$users_found = $this -> user_model -> SelectUserByEmail($email);

			if( $users_found )
			{
				//var_dump($users_found);
				throw new Exception( 'Email already exists!' );
			}

			// Encrypt Password
			$password = $this -> utils -> encrypt($password, 200, "ThisIsAUniqueS4lt");
			
			// PDO INSERT HERE
			$qry = "INSERT INTO `users`
					(`user_id`, `email`, `password`, `create_date`, `update_date`, `delete_date`)
					VALUES ( NULL, ?, ?, NOW(), NOW(), NULL ); ";

			$stmt = $pdo->prepare($qry);
			$insert_success = $stmt->execute([$email, $password]);

			if ($insert_success)
			{
				$_SESSION['sign_up_success'] = '<div class="alert alert-success" role="alert">Account Saved!</div>';
			}
			else
			{
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