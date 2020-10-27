<?php



// ...

$rows = array(
	array(
		'name' => 'Product 1',
		'price' => 5.99,
		'color' => 'red'
	),
	array(
		'name' => 'Product 2',
		'price' => 9.99,
		'color' => 'blue'
	)
);


foreach( $rows as $row )
{
	?>
		<form style="border: 1px solid black;" >
			<h3>Edit Item: <?php echo $row['name']; ?></h3>
			<label for="price" >Price: </label>
			<input type="text" id="price" name="price" value="<?php echo $row['price']; ?>" >
			<br><br>
			<label for="color" >Color: </label>
			<input type="text" id="color" name="color" value="<?php echo $row['color']; ?>" >
			<br><br>
			<input type="submit" value="Save" >
		</form>
	<?php
}