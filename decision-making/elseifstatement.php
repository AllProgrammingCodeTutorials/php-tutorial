<html>
   <body>

   	<!-- 
   	if (condition)
        code to be executed if condition is true;

   elseif (condition)
        code to be executed if condition is true;
   else

        code to be executed if condition is false;
    -->
    
      <?php
         $d = date("D");
         
         if ($d == "Fri")
            echo "Have a nice weekend!"; 
         
         elseif ($d == "sunday")
            echo "Have a nice sunday day!"; 
        else 
        	echo "Have a nice day";
      ?>
   
   </body>
</html>