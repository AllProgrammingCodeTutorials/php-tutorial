<?php 
/****
---- variable 
			-- local variable : 
					* declared inside a function has a local scope
					* its value remains valid just within the functio.

						
			--global variable
			-- static variable

*/

// ===== local variable ===== 


// $a = 1 // global variable
function display ()
{
	$a = 10; //local variable
	echo "accessing value inside function = $a";
}
display();
// echo "accessing value inside function = $a"; // error will be displayed because local variable work only inside the function but in example 2 it will works if u call variable outside
