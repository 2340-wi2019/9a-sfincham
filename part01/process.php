<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    
    /*formula for calculating BMI:
    BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    source: http://www.bmi-calculator.net/bmi-formula.php */  

    function bodyMass($weight, $height)
	{return ($weight / ($height * $height)) * 703;}
	$bmi = bodyMass($weight, $height);
	
    if ($bmi < 18) {$label = "underweight";}
	else if ($bmi > 30) {$label ="overweight";}
	else {$label ="normal";}
?>

<h1>BMI Calculation</h1>
<p id="output-here">Your BMI is <?php echo $bmi; ?>, 
which is considered <?php echo $label; ?></p>
</body>