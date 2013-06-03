// JavaScript Document

$(document).ready(function(){
	
	$('#number1').change(function(){
		
		// LOGIC TO MAKE SURE SECOND NUMBER DOESN'T EXCEED 20
		var var_number = parseInt($('#number1').val())
		if(var_number < 20){
			var_number = var_number+1;
			}
		
		// THIS CHANGES THE SECOND SELECTOR BASED ON THE FIRST SELECTOR
		$('#number2').replaceWith(
			'<select id="number2"><option value = '+ var_number +'>' + var_number + '</option></select>');
	});
})
