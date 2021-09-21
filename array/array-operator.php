	<?php
// php union + array operator 
	 // $a = array("anju"=>2000, "rahul"=>4000, "ramesh"=>5000);
	 // $b = array("anju"=>"php", "rahul"=>"java", "ramesh"=>"html", "sam"=>"CSS");
	 
	 // $result = $a + $b
	 // print_r($result);
?>
<?php
	 //php equality $a == $b array operator
// key value pair must be same , order value doesnot matter

// $a = array("anju"=>2000, "rahul"=>4000, "ramesh"=>5000);
// $x = array("anju"=>2000, "rahul"=>4000, "ramesh"=>5000);
// // $x = array("rahul"=>4000, "anju"=>2000, "ramesh"=>5000);
// $b = array("anju"=>"php", "rahul"=>"java", "ramesh"=>"html", "sam"=>"CSS");
// if($a == $x)
// {
// 	echo "both array key/value pair true";
// }else
// {
// 	echo "key/value pair false";
// }

?>

<?php
// //php identity $a === $b array operator
// // TRUE if $a and $b have the same key/value pairs in the same order and of the same types.
// $a = array("anju"=>2000, "rahul"=>4000, "ramesh"=>5000);
// // $x = array("anju"=>2000, "rahul"=>4000, "ramesh"=>5000);
// $x = array("rahul"=>4000, "anju"=>2000, "ramesh"=>5000);
// // $b = array("anju"=>"php", "rahul"=>"java", "ramesh"=>"html", "sam"=>"CSS");

// if($a === $x)
// {
// 	echo "both array key/value pair true";
// }else
// {
// 	echo "key/values pair false";
// }
?>

<?php
//php inequality != array operator $a != $b
// TRUE if $a isnot equal to $b

$a = array("anju"=>2000, "rahul"=>4000, "ramesh"=>5000);
// $x = array("anju"=>2000, "rahul"=>4000, "ramesh"=>5000);
$x = array("rahul"=>4000, "anju"=>2000, "ramesh"=>5000);
$b = array("anju"=>"php", "rahul"=>"java", "ramesh"=>"html", "sam"=>"CSS"); //order doesnot matter

if($a != $x)
{
	echo "both array key/value pair true";
}else
{
	echo "key/values pair false";
}