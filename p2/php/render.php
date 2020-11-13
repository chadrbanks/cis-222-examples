<?php


// Render Head
echo '<!DOCTYPE html><html lang="en" >';

require('templates/head.php');

echo '<body style="margin:auto;width:75%;" >';

// Render Body
require('templates/nav.php');
if( isset($_GET['page']) )
{
	switch($_GET['page'])
	{
		case '':
		case'home':
			require('pages/homepage.php');
			break;
		case 'catalog':
			require('pages/catalog.php');
			break;
		case 'contact':
			require('pages/contact.php');
			break;
		case 'about':
			require('pages/about.php');
			break;
		case 'locations':
			require('pages/locations.php');
			break;
		case 'signup':
			require('pages/signup.php');
			break;
		default:
			require('pages/404.php');
	}
}
else
{
	require('pages/homepage.php');
}

// Render Footer
require('templates/footer.php');
echo '</body></html>';