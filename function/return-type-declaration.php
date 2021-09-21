<?php 
// valid type (int, float, string, bool, iterable, array, callable, self , class/interface name)

/**
 function add( $a ,  $b) :int
{
	$sum = $a + $b;
 	return ($sum);
}
 $total =  add(2, 3);
 echo "Total = $total";

 */

/** scalar type of declaration :
 1. coercive mode : default mode
 2. strict
 */

//coercive mode

// function add(int $a , int $b) : float
// {
// 	echo '$a is' . gettype($a) . " type variable and value = $a <br/>";
// 	echo '$b is' . gettype($b) . " type variable and value = $b <br/>";
// 	$sum = $a + $b;
// 	return ($sum);
	
// }
// // $total =  add(2.4, "20");
// $total =  add(2.4, 1);

// echo "Total = $total";





//strict mode :int means value must be return int though parameter is integer
// a single declare directive must be placed at the top of the file


declare(strict_types = 1); // enabling strict mode
function add(int $a , int $b) : int
{
	echo '$a is' . gettype($a) . " type variable and value = $a <br/>";
	echo '$b is' . gettype($b) . " type variable and value = $b <br/>";
	$sum = $a + $b;
	return ($sum);
	
}
// $total =  add(2.4, "20"); // error
// $total =  add(2.4, "hello"); // error
$total =  add(2, 3); // correct
echo gettype($total) . " ";
echo "Total = $total";