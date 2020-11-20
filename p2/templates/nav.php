
<div class="container text-center" >
	<br>
	<h2><a href="index.php" >Example Site</a></h2>
	<h4><a href="index.php?page=about" >About Us</a></h4>
	<h4><a href="index.php?page=contact" >Contact Us</a></h4>
	<h4><a href="index.php?page=locations" >Find Us</a></h4>
	<h4><a href="index.php?page=catalog" >Catalog</a></h4>
	<?php
	if( isset($_SESSION['user_id']) && $_SESSION['user_id'] )
	{
		?>
		<h4><a href="index.php?page=signout" >Sign Out</a></h4>
		<?php
	}
	else
	{
		?>
		<h4><a href="index.php?page=signup" >Sign Up</a></h4>
		<h4><a href="index.php?page=signin" >Sign In</a></h4>
		<?php
	}
	?>
</div>


<?php
// var_dump($_SESSION);
?>