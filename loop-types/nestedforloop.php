<html>
<head> </head>
<body>

	<!-- the for loop is frequently usually where the loop will be transvered a fixed number of times -->
 	<!-- syntax -->

	<!-- 
		for (initialization; condition; increment){

		 	for (initialization; condition; increment){
			code to be executed; // block of statements
		 	}
   			code to be executed; // block of statements
		} 
-->

		<!-- alternative synatx -->

		<!--
		 for (initialization; condition; increment):

		 	for (initialization; condition; increment):
   			code to be executed;
			endfor; 

			code to be executed;
		endfor;
		-->

	<?php 
		for ($i=0; $i<=2; $i++)
		{
			echo "the outer loop: is $i <br/>";

			for($a=0; $a<=4; $a++)
			{
				echo"Inner loop: is $a <br/>";
			}
		}

	?>

</body>
</html>