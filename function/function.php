<?php 
// to run the code you need to comment other function means run each function

// function display() // no parameter
// {
// 	echo "welcome to Germany";
// }
// display(); // no arguments
// echo "<br/>"

// //function with parameter || call function with parameter
// function students($name, $age) //with parameter
// {
// 	echo "$name to $age"; 
// }
// students("anju" , 12); // with arguments
// students("google" , 13);

//default arugments

// default arguments is always writtem in last

 // function FunctionName($para1, $para2 = "value", $para3) // wrong synatx
 // function FunctionName($para1, $para2 ="value", $para3 = "value") //correct 
//  function FunctionName($name, $age, $address = "Nepal") // correct
// {
// 	echo "$name $age $address <br/>";
// }
// FunctionName("anju", "27"); // my name is anju
// FunctionName("upen", "30", "Germany"); // default value will be replaced by upen 

// with null values

//  function FunctionName($name, $age, $address = Null) // correct
// {
// 	if($address == Null)
// 		echo "Sorry data is not found <br/>";
// 	else
// 		echo "$name $age and $address";

// }
// FunctionName("anju", "27"); // my name is anju
// FunctionName("upen", "30", "Germany"); // default value will be replaced by upen 

// with arrays 
function add_some_extra(&$string)
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str; 