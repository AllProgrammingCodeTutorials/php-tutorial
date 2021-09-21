<?php 
    include 'database.php';
    
    // -- code for delete data----
    $id = $_GET['id'];
    $q = "DELETE FROM employee Where id=$id";
    $query = mysqli_query($con, $q);
    header("location:main.php")
?>