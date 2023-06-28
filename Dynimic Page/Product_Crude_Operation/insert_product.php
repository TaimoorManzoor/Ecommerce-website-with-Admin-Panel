<?php 
include "connection.php";
$link=$_POST['link'];
$images=$_POST['images'];
$detail=$_POST['detail'];
$price=$_POST['price'];

$sql="INSERT INTO product_table(link,images,detail,price) values ('".$link."','".$images."','".$detail."','".$price."')";
if(mysqli_query($connection,$sql)){
	echo "New record created sucessfully";
}
else{
	echo "Error".$sql."<br>".mysqli_error($connection);
}
?>