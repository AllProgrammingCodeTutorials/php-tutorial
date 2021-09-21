 <!--multidimensional array -->

	<?php
// for numeric array
	 $laptops = array(
	 	array("anju", "Dell", 5000),
	 	array("Rames", "HP", 7000),
	 	array("Sita", "Mac", 15000),
	 );
	 for($i = 0; $i<count($laptops); $i++) //forrach ($laptops as keys =>$value)
	 {
	 	for($j = 0; $j<count($laptops[$i]); $j++) //forrach ($value as keys =>$detai;)
	 	{
	 		echo $laptops[$i][$j] . " " ;
	 	}
	 	echo "<br/>";

	 }
	 	
	
	// for associative array

	$fees = array(
		"anju" => array("php" => 20, "java" => 30, "css" => 10 ),
		"rames" => array("php" => 240, "java" => 444, "css" => 7410 ),
		"sita" => array("php" => 120, "java" => 530, "css" => 610 ),
	);

	$keys = array_keys($fees);

	
	 for ($i = 0; $i<count($keys); $i++) //forrach ($laptops as keys =>$value)
	 {
	 	
	 	$fees_keys = array_keys($fees[$keys[$i]]);
	 	for($j = 0; $j<count($fees_keys); $j++) //forrach ($value as keys =>$detai;)
	 	{
	 		echo ($keys[$i] . " " . $fees_keys[$j] . " " . $fees[$keys[$i]] [$fees_keys[$j]] . "");
	 	}
	 	echo "<br/>";
	 }
