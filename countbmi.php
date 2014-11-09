<?php
session_start();
$height = $_POST['height'];
$weight = $_POST['weight'];

if (isset($height) && isset($weight)) {
	$bmi = $weight / (($height/100)^2);
	$_SESSION['bmi'] = "Your BMI is : " . $bmi;
}

header('Location: /');