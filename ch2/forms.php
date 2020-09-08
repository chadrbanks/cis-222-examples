<h1>Chapter 2 Form Examples</h1>

<?php
var_dump($_POST);

echo '<br><br><h3>POST</h3>';

if($_POST && $_POST['status']){
	$status = $_POST['status'];

	echo 'You said: ' . $status;
}
?>

<form method="post" >

	<label for="status" >How are you?</label>
	<input type="text" id="status" name="status" >

	<input type="submit" value="Send" >

</form>

<br><br>

<?php
var_dump($_GET);

echo '<br><br><h3>GET</h3>';

if( isset($_GET['status'])){
	$status = $_GET['status'];

	echo 'You said: ' . $status;
}
?>
<form method="get" >

	<label for="status" >How are you?</label>
	<input type="text" id="status" name="status" >

	<input type="submit" value="Send" >

</form>



<?php
