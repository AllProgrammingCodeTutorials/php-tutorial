<?php
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con, 'great');

if($con){
    echo "db connection successfully";
}else{
    echo "not connected";
}
?>