<?php include 'session_manage.php'; ?>

<?php 
include "connection.php";
$title=$_POST['title'];
$images=$_POST['images'];
$short_description=$_POST['short_description'];
$price=$_POST['price'];
$id=$_POST['id'];

$sql="UPDATE product_detail SET title='{$title}',images='{$images}',short_description='{$short_description}',price='{$price}' WHERE id='{$id}'";
if(mysqli_query($connection,$sql)){
	header('Location:product_detail_fetch.php');
}
else{
	echo "Error".$sql."<br>".mysqli_error($connection);
}
?>