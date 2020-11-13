<?php

if( isset($_GLOBAL['location_message']) )
{
	echo $_GLOBAL['location_message'];
}
?>


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<br><br>
	<h1 class="display-4">Locations Page</h1>


	<p>Fill out this form to add a location!</p>
	<form action="index.php" method="get" >
		<input type="hidden" name="page" value="locations" >
		<input type="hidden" name="action" value="add_location" >
		<input type="text" name="location" placeholder="5101" >
		<input type="submit" class="btn btn-success" value="Save Location" >
	</form>
</div>
