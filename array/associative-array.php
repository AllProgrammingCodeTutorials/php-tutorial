<html>
<head> </head>
<body>
	<!-- In associative array, index is written in string -->
<!-- if you want to assign index according to ur desire then u can used operator "=>" -->

<!--
synatx

$array_name["key"] = value;
 -->
<!--for example

 $salary["rahul"]= 500 -->

<?php
 $salaries = array("Rahul" => 500, "Ramesh" => 9000, "upen" => 80000);
 	echo "the salary of rahul is " . $salaries['Rahul'];
 	// echo $salaries ["Rahul"];
 	// echo "the salary of Rahul {$salaries['Rahul']}"; // string interpolation
?>

</body>
</html>