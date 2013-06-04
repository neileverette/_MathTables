<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="_styles/css_reset.css" rel="stylesheet" type="text/css">
<link href="_styles/main.css" rel="stylesheet" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</script><script type="text/javascript" src="_scripts/script.js"></script>

<title>Math Quiz</title>
</head>
<html>
<body>

	<h1>Math Quiz</h1>
    <h2>Set the numbers for your math Quiz</h2>
    <?php
		$numberOne = $_GET['numberOne'];
		$numberTwo = $_GET['numberTwo'];
		$sum = $numberOne + $numberTwo; 
		echo $numberOne + $numberTwo; 
	?>
    
    <p><a href="answer.php">ANSWER</a></p>
    <p><a href="index.php">START OVER</a></p>

</body>
</html>