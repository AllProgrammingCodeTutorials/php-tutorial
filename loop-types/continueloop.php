<html>
<head> </head>
<body>


	<!-- //// continue statement : this statement is used to skip an iteration of a loop 
		( continue means skip yedi kunai steps skip garnu cha vaney we can use this statement 
		for instance 1, 2, 3, 4, 5 ma ta step 4 skip garnu cha vaney this is loop is used/// -->

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