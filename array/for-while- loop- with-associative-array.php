 <!-- while loop with associative array using array_key function in php. -->

	<?php

	 $salaries = array("anju"=>2000, "rahul"=>4000, "ramesh"=>5000);
	 $keysValue = array_keys($salaries);
	 
	 $i = 0;
	 while($i<count($keysValue))
	 {
	 	echo $keysValue[$i] . "=" . $salaries[$keysValue[$i]] . "<br/>";
	 	$i++;
	 }
