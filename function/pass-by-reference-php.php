<?php 
/**** % pass by reference in PHP % 
---- when you pass an argument by reference, that gives code in the function direct access to that argument back in the calling code. 

----to have an argument to a function always passed by reference, prepend an ampersand(&) to the parameter name in the function definition

---- for synatx : function add(&$a){block of statment;}

*/

$a = 1;
 echo "value of a = $a <br/>";
function display(int &$b) // reference
{
	echo "the value inside function b = $b<br/>";
	$b = 4; // you need to change here too same as above variable $b = 1
    echo " the value inside function b = $b <br/>"; // same here 
}
display($a); 
echo " the value of a = $a";
