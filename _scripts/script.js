// JavaScript Document

$(document).ready(function(){
	
	$('#numberOne').change(function(){
		
		// LOGIC TO MAKE SURE SECOND NUMBER DOESN'T EXCEED 20
		var var_number = parseInt($('#numberOne').val());
		if(var_number < 20){
			var_number = var_number+1;
			console.log("Number " + var_number + " was selected");
			}
		
		// THIS CHANGES THE SECOND SELECTOR BASED ON THE FIRST SELECTOR
		$('#numberTwo').replaceWith(
			'<select id="numberTwo"><option value = '+ var_number +'>' + var_number + '</option></select>');
	});
})
