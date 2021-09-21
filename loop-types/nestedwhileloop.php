<html>
<head> </head>
<body>

<!-- ====== nested while loop==== -->
<!-- syntax -->

		<!-- initalization;
		while(condition){
				while(condition){
				statement(s);
			}
		statements;
		} -->

		<?php 
			$num = 1;
			while($num <= 2)
			{
				echo "the number is $num <br/>";
				$num++;
				$var = 1; 
				
				while($var <= 3)
				{
					echo "val : $var <br/>";
					$var++;
				}
				
				echo "rest code";
			
			}

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