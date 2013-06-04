// JavaScript Document

$(document).ready(function(){
	
	// THIS CONTROLS THE DROPDOWN SELECTORS
	$('#numberOne').change(function(){ //GRABS THE FIRST NUMBER BOX
		
		// LOGIC TO MAKE SURE SECOND NUMBER DOESN'T EXCEED 20
		var_number = parseInt($('#numberOne').val())+1;
		console.log(parseInt(var_number)-1);
		
		$('#numberTwo').replaceWith('<select id="numberTwo"></select>');
			for (var i=var_number; i<21; i++){
				$('#numberTwo').append('<option>' + i + '</option>')
				}
		
	});
})
