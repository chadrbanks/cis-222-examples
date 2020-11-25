<?php

$qry = "SELECT * FROM `products` ";

$r = $pdo->query( $qry );
?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<br><br>
	<h1 class="display-4">Catalog Page</h1>
	<br><br>
	<?php

	$count = 0;
	while ($row = $r->fetch())
	{
		$count++;

		$pid = $row['product_id'];
		$aTag = '<a href="index.php?page=pdp&product_id=' . $pid . '" >';
		$productName = $row['product_name'];

		echo '<hr>';
		echo $aTag . '<img class="myimg" src="' . $row['product_img'] . '" ></a>  ';
		echo "$aTag $productName</a>";
		echo '$' . $row['product_price'];
		//var_dump($row);
	}

	if($count === 0)
	{
		?><p>Sorry, no products yet. Check back soon!</p><?php
	}
	?>
</div>

<style>

	#myid{
		
	}

	.myimg{
		width:100px;
	}
</style>