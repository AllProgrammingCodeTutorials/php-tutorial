<?php 
// heredoc 
//it works similiar as double quotes
// it can be also print variable's value

    $number = 123;
	echo <<< MYDATA
	my name is anju
	$number
	MYDATA;

	// nowdoc 
//it works similiar as single quotes
	
    $id = 1;
	echo <<< 'MYRESUME'
	my name is anju
	$id
	MYRESUME;