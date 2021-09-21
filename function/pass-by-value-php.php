<?php 
/**** % pass by value in PHP % 
---- when you pass a data to a function , a copy of that data is passed. 

----for instance : if you pass a variable, a copy is made of that variable and that copy is actually passed to the function. 

---- by default, function arguments are passed by value(so that if the value of the arugment within the function is changed, it doesnot get changed outside of the function)

*/

$a = 1;

function display(int $b) // you can change name of variable i.e $c or whatever) $a = $b = 1 here b is duplicate 
{
	echo "the value inside function b = $b<br/>";
	$b = 4; // you need to change here too same as above variable $b = 1
    echo " the value inside function b = $b <br/>"; // same here 
}
display($a); 
echo " the value of a = $a";

