<html>
<head> </head>
<body>

<!-- //// break statement ; this statement is used to stop loop or switch statement at any time//// -->

	<?php 
		for($num = 1; $num<= 5; $num++)
		{
			echo "the number : $num <br/>";
			if($num==4)
				break;
		}

	?>

	<!-- //// continue statement//// -->

	<?php 
		for($num = 1; $num<= 5; $num++)
		{
			
			if($num==4)
				continue;
			echo "the number : $num <br/>";
		}

	?>
</body>
</html>