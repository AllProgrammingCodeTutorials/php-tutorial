<!-- The array_key() function return an array containing the keys.


====
syntax: array_key(array, value, strict)
=== -->


	<?php

	 $salaries = array("anju"=>2000, "rahul" => 5000, "ramesh" => 10000);
	 $keysValue = array_keys($salaries, 2000);
	 // print_r($salaries);
	 // exit();

	 // return single index value 
	 echo $keysValue[0];

// use of for here is to return all the key value
	 
	//  for($i = 0; $i<=2; $i++)
	//  {
	//  echo $keysValue[$i] ."<br/>";
	// }