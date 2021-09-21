<?php 
/**** % returning an array to function  in PHP % 
*/

//  


function arithmetic($num1, $num2)
{
	$sum = $num1 + $num2;
	$sub = $num1 + $num2;
	$mul = $num1 + $num2;

	$solution = array($sum, $sub, $mul);
	return $solution;
}

$mathop = arithmetic(10, 20);
echo " the sum $mathop[0] <br/>";
echo " the subject $mathop[1] <br/>";
echo " the multiple $mathop[2] <br/>";
