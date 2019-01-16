<?php

if (isset($_POST['number1']) && isset($_POST['number2']) ) {
	if (isset($_POST['add'])) 
{
	$number1=$_POST['number1'];
	$number2=$_POST['number2'];
	addition($number1,$number2);
}
if (isset($_POST['sub'])) 
{
	$number1=$_POST['number1'];
	$number2=$_POST['number2'];
	substraction($number1,$number2);
}
if (isset($_POST['mul'])) 
{
	$number1=$_POST['number1'];
	$number2=$_POST['number2'];
	multiplication($number1,$number2);
}
if (isset($_POST['div'])) 
{
	$number1=$_POST['number1'];
	$number2=$_POST['number2'];
	Division($number1,$number2);
}
}



function addition($a,$b){
	
		$result=$a+$b;
		echo " The Addition of ".$a." and ".$b." . and the result is  ".$result;
}

function substraction($a,$b){
	
		$result=$a-$b;
		echo " The Substraction of ".$a." and ".$b." . and the result is  ".$result;
}
function multiplication($a,$b){
	
		$result=$a*$b;
		echo " The Multiplication of ".$a." and ".$b." . and the result is  ".$result;
}

function Division($a,$b){
	
		$result=$a/$b;
		echo " The Division of ".$a." and ".$b." . and the result is  ".$result;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
</head>
<body>
	<form method="post" action="#">
		Number1:<input type="number" name="number1"><br>
		Number2:<input type="number" name="number2"><br>
		<input type="submit" name="add"value="Add">
		<input type="submit" name="sub"value="Sub">
		<input type="submit" name="mul"value="Mul">
		<input type="submit" name="div" value="Div">
	</form>
</body>
</html>