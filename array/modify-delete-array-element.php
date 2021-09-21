<html>
<head> </head>
<body>
<!-- for delete , used unset() function -->

<?php
 $salaries = array("Rahul" => 500, "Ramesh" => 9000, "upen" => 80000);
 	unset($salaries["Rahul"]);
 	echo "the salary of rahul is " . $salaries['Rahul'];
 	// echo $salaries ["Rahul"];
 	// echo "the salary of Rahul {$salaries['Rahul']}"; // string interpolation

// modify the arrray element
 	echo "the salary of Ramesh is " . $salaries['Ramesh'] ."<br/>";
 	
 	$salaries["Ramesh"] = 1000;
 	echo "the salary of Ramesh is " . $salaries['Ramesh'];
 	

?>


</body>
</html>