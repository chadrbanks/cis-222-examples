<?php

$qry = "SELECT * FROM `products` ";

$r = $pdo->query( $qry );
?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<br><br>
	<h1 class="display-4">Catalog Page</h1>
	<br><br>
	<?php

	while ($row = $r->fetch())
	{
		echo '<hr>' . $row['product_name'] . ' $9.99';
		echo '<img class="myimg" src="' . $row['product_img'] . '" >';
		//var_dump($row);
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