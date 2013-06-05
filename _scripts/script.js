// JavaScript Document

$(document).ready(function(){
	update();	
})

$('#numberOne').change(function(){
	update();
})

function update(){
	// THIS CONTROLS THE DROPDOWN SELECTORS
	$('#numberOne').change(function(){ //GRABS THE FIRST NUMBER BOX
		
		// GETS THE VALUE OF THE FIRST FIELD
		var_number1 = parseInt($('#numberOne').val());
		
		// LOGIC TO MAKE SURE SECOND NUMBER DOESN'T EXCEED 20
		$('#numberTwo').replaceWith('<select id="numberTwo"></select>');
			for (var i=var_number1+1; i<21; i++){
				$('#numberTwo').append('<option>' + i + '</option>')
				}
				
		// GETS THE UPDATED VALUE OF THE SECOND FIELD
		var_number2 = parseInt($('#numberTwo').val());
		
		console.log(var_number1);
		console.log(var_number2);		
		
		// THIS PROVIDES A LINK TO THE NEXT PAGE AND PASSES THE TWO NUMBER VARIABLE OVER		
		$('#startButton').replaceWith('<p><a href="quiz.php?numberOne='+ var_number1 +'&numberTwo='+ var_number2 +'">START</a></p>')		
	});

}

