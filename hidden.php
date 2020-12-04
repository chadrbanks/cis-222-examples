

<form style="display:none;" id="myForm">
	<input type="text" id="myInput" name="shown" value="1" >
	<input type="hidden" name="notshown" value="2" >
</form>


<button id="myBtn" onclick="doAjax();">Click Me!</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	// let myForm = document.getElementsById('myForm');

	$('#myForm').show();
	// let myForm = $('#myForm');
	// myForm.show();

	$( "#myInput" ).on( "click", function() {
		console.log( $( this ).val() );
	});

	let success = function(res){
		console.log('The Ajax call was a success!');
		console.log('Response:', res);
	};


	function doAjax(){

		let url = 'https://yoursite.com/tracking';

		let data = {
			user: 14,
			action: 'click',
			target: 'myBtn'
		};

		$.ajax({
			type: "POST",
			url: url,
			data: data,
			success: success
		});
	}
</script>