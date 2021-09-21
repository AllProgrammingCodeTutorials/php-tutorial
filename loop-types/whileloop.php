<html>
<head> </head>
<body>
 	<!-- syntax -->

<!--	initialization ;
	 while(condition)
	 {
	 	block of statement;
	 	increment and decrement;
	 } -->

		<!-- alternative synatx -->

<!-- initialization;
	 while(condition):
	 	block of statement;
	 	increment and decrement;
	 endwhile; -->


<!-- ===== first example ====== -->
	<?php 
		$num = 0;
		while($num<=2){
			echo "the number will be display $num <br/>";
			$num++;
		}
		echo "the rest of the code <br/>";
	?>

<!-- ===== second example ====== -->
  <?php
     $i = 0;
     $num = 50;
     
     while( $i < 1) {
        $num--;
        $i++;
     }
     
     echo ("Loop stopped at i = $i and num = $num" );
  ?>

<!-- ===== third example ====== -->

<!-- kunai pwni file lai read garnu cha tara file katibela tyo file end huncha thaha chaina 
	however, u know that whenever it is end, u need to exact some code.
	 in such case of while loop lai true gardiney ra condition lekhdiney  
	 i.e if (file ends then display this) .. 

	-->
<?php 

$num = 0;
while(TRUE):
	echo "the number is $num <br/>";
	$num++;
	if($num == 5)
		break;
endwhile;
echo "rest of the code";
?>
	
</body>
</html>