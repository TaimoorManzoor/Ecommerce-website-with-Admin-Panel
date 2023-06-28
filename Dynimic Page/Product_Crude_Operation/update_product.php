<?php 
include "connection.php";
$link=$_POST['link'];
$images=$_POST['images'];
$detail=$_POST['detail'];
$price=$_POST['price'];
$id=$_POST['id'];

echo $link,$images,$detail,$price,$id;
$sql="UPDATE product_table SET link='{$link}',images='{$images}',detail='{$detail}',price='{$price}' WHERE $id='{id}'";
if(mysqli_query($connection,$sql)){
	echo "New record updated sucessfully";
}
else{
	echo "Error".$sql."<br>".mysqli_error($connection);
}
?>