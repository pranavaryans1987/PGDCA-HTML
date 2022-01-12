<?php
	$a = 10;
	echo gettype($a) . "<br>";
	
	$b = 10;
	settype ($b,"string");
	echo gettype($b) . "<br>";
	
	$c;
	
	if (isset($c)) 
	{
		echo "Variable 'C' is set.<br>";
	}
	else
	{
		echo "PLease Set Value.<br>";
	}
	
	$d = 10;
	echo $d."<br>";
	unset($d);
	echo $d."<br>";
	
	$e = 1234.00;
	echo strval($e) . "<br>";
	echo floatval($e) . "<br>";
	echo intval($e) . "<br>";
	
	$f = array("red", "green", "blue");
	print_r($f)."<br>";
?>
