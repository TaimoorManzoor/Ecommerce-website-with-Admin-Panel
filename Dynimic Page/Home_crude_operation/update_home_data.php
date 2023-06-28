<?php 
include "connection.php";
$main_title=$_POST['main_title'];
$sub_title=$_POST['sub_title'];
$images=$_POST['images'];
$short_description=$_POST['short_description'];
$id=$_POST['id'];

$sql="UPDATE home_table SET main_title='{$main_title}',sub_title='{$sub_title}',images='{$images}',short_description='{$short_description}' WHERE $id='{id}'";
if(mysqli_query($connection,$sql)){
	header('Location:fetch_home.php');
}
else{
	echo "Error".$sql."<br>".mysqli_error($connection);
}
?>