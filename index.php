<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Math Quize</title>
</head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script><script type="text/javascript" src="_scripts/script.js"></script>

<div>
	<h1>Math Quiz</h1>
    <h2>Set the numbers for your math Quiz</h2>
    
    <!---SELECT BOX TO CHOOSE MIN NUMBER--->
    <select id="number1">
    <!---PHP TO LOOP THROUGH 2-20 --->
    <?php
	for ($i=2; $i<=20; $i++){
  		echo "<option value=".$i.">".$i."</option>";
  	}?>
	</select>	
    
    <!---SELECT BOX TO CHOOSE MIN NUMBER--->
    <select id="number2">
    <!---PHP TO LOOP THROUGH 2-20 --->
    <?php
	for ($i=2; $i<=20; $i++){
  		echo "<option value=".$i.">".$i."</option>";
  	}?>
	</select>

<!---int rand ( int $min , int $max );--->

</div>

<body>
</body>
</html>