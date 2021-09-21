<?php 
// printf() function formatted string
// the printf() function display data to browser,, which means that the results are not available to ur scripts
printf ("the number between %d and %d is correct", 12, 15);
echo "<br/>";

// with variable 
$a = 1;
$b = 4; 
printf("the correct is both %d and %d", $a, $b);
echo "<br/>";

// with other  format specifier

$items = 2;
$items_name = "laptops";
$price = 2000.40;

printf("I have %d %s and price echo %d", $items, $items_name, $price);
echo "<br/>";
printf("%%"); // to print the % percentage 
echo "<br/>";
printf("%%d"); // to print %d you need to write double %% 
echo "<br/>";
/// ----end here

// position specifier in php

$x = 1;
$y = 2;
$z = 3;

printf("There are %1\$d laptops %2\$d mouses and %3\$d speaker", $x, $y, $z);
echo "<br/>";
//Argument swaping or specific placeholder or position specifier

printf("There are %1\$d laptops %3\$d mouses and %2\$d speaker", $x, $y, $z);
echo "<br/>";