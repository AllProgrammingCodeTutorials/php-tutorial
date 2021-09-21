<?php 

// A return statement may be return any type data, including arrays and objects

// function add($a , $b)
// {
// 	return($a + $b);
// }
// echo add(2, 3);


function add($a , $b)
{
	$sum = $a + $b;
	return ($sum);
	
}
$total =  add(2, 3);
echo "Total = $total";