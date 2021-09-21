 <!-- For loop with associative array in php. -->



	<?php

	 $salaries = array("anju"=>2000, "rahul" => 5000, "ramesh" => 10000);
	 $keysValue = array_keys($salaries); //echo $fees['anju']

// use of for here is to return all the key value
	 
	 for($i = 0; $i<count($keysValue); $i++)
	 {
	 echo $keysValue[$i] ."=" . $salaries[$keysValue[$i]] . "<br/>";
	}