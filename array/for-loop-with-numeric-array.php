
	 <!-- the count() function returns the number of elements in an array -->
	<!--  syntax
	 count(array,mode) -->

	<?php

	 $name = array("anju", "ramesh", "hita");
	 // for ($i=0; $i<=2 ; $i++) 
	 for ($i=0; $i < count($name); $i++) // keep in mind that in count function dont use equal to operator.
	 { 
	 	
	 	// echo $name[$i]. "<br/>";
	 	echo " \$name[$i] = ". $name[$i]. "<br/>";
	 }


