<?php include 'session_manage.php'; ?>

<?php 
include "connection.php";
$link=$_POST['link'];
$images=$_POST['images'];
$detail=$_POST['detail'];
$price=$_POST['price'];

$sql="INSERT INTO product_table(link,images,detail,price) values ('".$link."','".$images."','".$detail."','".$price."')";
if(mysqli_query($connection,$sql)){
	header("Location:product_fetch_data.php");}
else{
	echo "Error".$sql."<br>".mysqli_error($connection);
}
?>