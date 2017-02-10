<script src="js/jquery.min.js"></script>


<form action="" method="post">
	English<input name="lang[]" type="checkbox" value="English"/> Hindi
	<input name="lang[]" type="checkbox" value="Hindi"/> Urdu
	<input name="lang[]" type="checkbox" value="Urdu"/>
	<input type="submit" value="show data " name="submit"/>
</form>

<script>
	$( 'form' ).submit( function () {
		var totalCheckboxSelected = $( 'input[name="lang[]"]:checked' ).val;
		.each( totalCheckboxSelected, function ( index, value ) {
			alert( value );
		} );

	} );
</script>