<?php

$qry = "SELECT * FROM `products`  "; // THIS SHOULD USE A WHERE SO WE DO NOT HAVE TO LOOP DOWN BELOW!

$r = $pdo->query( $qry );
?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<br><br>

	<?php

	$foundProduct = 0;
	while ($row = $r->fetch())
	{
		if($_GET['product_id'] == $row['product_id'])
		{
			$foundProduct = 1;
			$productName = $row['product_name'];

			echo '<h1 class="display-4">' . $productName . '</h1><br><br><hr>';
			echo '<img class="myimg" src="' . $row['product_img'] . '" >  ';
			echo '$' . $row['product_price'];
			echo '<button id="myBtn" >Add To Cart</button>';
		}
	}

	if($foundProduct === 0)
	{
		?><h1>Sorry, that product is no longer listed!</h1><?php
	}
	?>
</div>

<script>
	let count = 0;
	$("#myBtn").click(function(){
		console.log("You clicked me!");
		//console.log( $("#myNav") );

		count++;

		if( count == 1) {
			$("#myNav").fadeOut(1000);
			//$("#myNav").hide();
		}
		else if(count == 2)
		{
			$("#myNav").fadeIn(1000);
			//$("#myNav").show();
			count = 0;
		}
	});
</script>
<style>

	#myid{

	}

	.myimg{
		width:100px;
	}
</style>