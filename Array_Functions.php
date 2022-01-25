<?php
	$cars=array("Volvo","BMW","Toyota");
	echo count($cars) . "</br>";
	list($a, $b, $c) = $cars;
	echo "I have several Cars, a $a, a $b and a $c. </br>";
	if(in_array("BMW", $cars))
	{
		echo "Match found</br>";
	}
	else
	{
		echo "Match not found</br>";
	}
	echo current($cars) . "<br>";
	echo next($cars) . "<br>";
	echo end($cars) . "<br>";
	print_r (each($cars));
	echo "</br>";
	sort($cars);
	rsort($cars);
	asort($cars);
	arsort($cars);
	
	$a1=array("blue","red","green");
	$a2=array("blue","yellow");
	print_r(array_merge($a2,$a1));
	echo "</br>";
	$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota","d"=>"Toyota");
	print_r(array_reverse($a));
	echo "</br>";
	
	$result=array_diff($a1,$a2);
	print_r($result);
	echo "</br>";
	print_r(array_merge_recursive($a1,$a2));
	echo "</br>";
	
	echo array_shift($a)."</br>";
	print_r(array_slice($a,0));
	echo "</br>";
	print_r(array_unique($a));
	array_unshift($a,"Volvo");
	echo "<br>";
	print_r($a);
	echo "<br>";
	print_r(array_keys($a));
	echo "<br>";
	if (array_key_exists("d",$a))
	{
		echo "Key exists!";
	}
	else
	{
		echo "Key does not exist!";
	}
	echo "<br>";
	array_push($a,"BLUE","YELLOW");
	print_r($a);
	echo "<br>";
	array_pop($a);
	print_r($a);
	echo "<br>";
	array_multisort($a);
	print_r($a);	
	echo "<br>";
	echo array_search("BLUE",$a);
?>
