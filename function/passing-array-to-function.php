<?php 
/**** % passing an array to function  in PHP % 
*/

$marks = array(1, 2, 3); // defining array

function total($subjects) // array parameter
{
	$sum = 0;
	foreach($subjects as $num)
	{
		$sum = $sum + $num;
		
	}
	return $sum; 
}
 
echo total($marks); //passing array marks
//output: 6


/// default parameter value

$marks = array(1, 2, 3); // defining array

function total($subjects = array(2,4,5)) // array parameter
{
	$sum = 0;
	foreach($subjects as $num)
	{
		$sum = $sum + $num;
		
	}
	return $sum; 
}
 
echo total($marks); //passing array marks
//output : 11
