<html>
<head> </head>
<body>

<!-- ====== The do while loop is similiar to while loop,
 but the condition is checked after the loop body is executed.
 this ensure that the loop body is run at least once==== -->
<!-- syntax -->

		 <!-- 
		 initalization;
		do
		{
			block statements;
			increments/decrement;
			}while(condition);
 -->
		<?php 
			$num = 1;
			do {
				echo "the number is $num <br/>";
				$num++;

			}while($num<=3);
			
			

			// 	$num = 1;
			// while($num <= 2):			{
			// 	echo "the number is $num <br/>";
			// 	$num++;
			// 	$var = 1; 

			// 	while($var <= 3):
			// 		echo "val : $var <br/>";
			// 		$var++;
			// 	endwhile;
				
			// 	echo "rest code";
			// endwhile;
			
		?>


</body>
</html>