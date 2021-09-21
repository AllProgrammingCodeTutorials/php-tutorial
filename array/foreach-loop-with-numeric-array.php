 <!-- Foreach loop with numberic array in php. -->

<!-- The foreach loop works only on arrays, and is used to loop through each key/value pair in an array -->

<!-- 

syntax: 
foreach($array_name as $value)
{
	block of statement
}

alternative synatx: 
foreach($array_name as $value):
	block of statement
endforeach;

 -->

<!-- 
 to display the index value :

 foreach($array_name as $Key=>$values)
 {
 	block of statement
 }

 where, $value is array's value 
 		$key is array's key/index

 -->


	<?php

	 $salaries = array("anju"=>2000, "rahul" => 5000, "ramesh" => 10000);

// use of for here is to return all the key value
	 
	 foreach($salaries as $value):
	 echo $value . "<br/>";
	endforeach;

	 foreach($salaries as $keysValue => $value):
	 echo $keysValue . "=" . $value ."<br/>";
	endforeach;