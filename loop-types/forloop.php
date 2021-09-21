<html>
<head> </head>
<body>

	<!-- the for loop is frequently usually where the loop will be transvered a fixed number of times -->
 	<!-- syntax -->

	<!-- for (initialization; condition; increment){
   		code to be executed; // block of statements
	} -->

		<!-- alternative synatx -->

		<!--
		 for (initialization; condition; increment):
   		code to be executed;
			endfor; 
		-->

	<?php 
		for ($i=0; $i<=3; $i++)
		{
			echo "the value number is $i <br/>";
		}

	?>

	<?php 
		$a = 0;
		$b = 0;

		for($i=0; $i<=2; $i++){
			$a+=10;
			$b+=5;
		}
		echo "At the end of the loop a=$a and b=$b";
	?>
</body>
</html>