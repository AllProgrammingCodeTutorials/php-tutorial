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
					* A variable within a function reset everytime when we call it. In case if we need, variable values to remain
					save even outside the function then we have to use static keyword.

*/

// ===== static variable ===== 


function display ()
{
	static $a = 0;
	$a++;
	return $a;
}
echo display(). "<br/>";
echo display(). "<br/>";
echo display(). "<br/>";

// non -static
function displayed ()
{
	 $a = 0;
	$a++;
	return $a;
}
echo displayed(). "<br/>";
echo displayed(). "<br/>";
echo displayed(). "<br/>";