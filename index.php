<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
<link href="_styles/css_reset.css" rel="stylesheet" type="text/css">
<link href="_styles/main.css" rel="stylesheet" type="text/css">

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</script><script type="text/javascript" src="_scripts/script.js"></script>


<title>Math Quiz</title>
</head>

<body>
<div>
	<h1>Math Quiz</h1>
    <h2>Set the numbers for your math Quiz</h2>
 
    <!---SELECTBOX 1 --->
	<select id="numberOne">
    <?php for ($i=2; $i<=19; $i++){
  		echo "<option value=".$i.">".$i."</option>";
			$numberOne=$i;
	}?>
	</select>
    
    <!---SELECT BOX 2 --->
	<select id="numberTwo">
    <?php for ($i=3; $i<=20; $i++){
  		echo "<option value=".$i.">".$i."</option>";
			$numberTwo=$i;
	}?>
	</select>    
    
    <!---LINKS TO THE QUIZ PAGE AND PASSES THE TABLE VARIABLES--->
    <p id=startButton><a href="quiz.php?numberOne=2&numberTwo=3">START</a></p>

</div>



</body>
</html>
