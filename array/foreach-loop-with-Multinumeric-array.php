 <!--multidimensional array -->

	<?php
// for numeric array
	 $laptops = array(
	 	array("anju", "Dell", 5000),
	 	array("Rames", "HP", 7000),
	 	array("Sita", "Mac", 15000),
	 );
	 foreach ($laptops as $value) //forrach ($laptops as keys =>$value)
	 {
	 	foreach($value as $detail) //forrach ($value as keys =>$detai;)
	 	{
	 		echo $detail . " " ;
	 	}
	 	echo "<br/>";

	 }
	 	
	
	// for associative array
	$fees = array(
		"anju" => array("php" => 20, "java" => 30, "css" => 10 ),
		"rames" => array("php" => 240, "java" => 444, "css" => 7410 ),
		"sita" => array("php" => 120, "java" => 530, "css" => 610 ),
	);
	
	 foreach ($fees as $keysValue => $value) //forrach ($laptops as keys =>$value)
	 {
	 	foreach($value as $keys => $detail) //forrach ($value as keys =>$detai;)
	 	{
	 		echo $keysValue . " " . $keys . " " . $detail ;
	 	}
	 	echo "<br/>";

	 }
