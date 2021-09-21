<?php 
/****
---- variable 
			-- local variable : 
					* declared inside a function has a local scope
					* its value remains valid just within the functio.

						
			--global variable
					* declared outside a function has a local scope
					* its value remains valid just outsude the function.

					* important note:
							if we want to access data outside a function from code inside a function we have to use 
							"global" keywords within the function.


			-- static variable

*/

// ===== global variable ===== 


$a = 1; // global variable is only accessible in this file
function display ()
{
	 global $a; // defining its global 
	echo "accessing value inside function = $a <br/>";
}
display();
// echo "accessing value outside function = $a"; 
