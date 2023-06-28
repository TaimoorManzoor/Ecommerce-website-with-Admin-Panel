<?php 
include "connection.php";
$title=$_POST['title'];
$sub_title=$_POST['sub_title'];
$long_description=$_POST['long_description'];
$short_description=$_POST['short_description'];
$image=$_POST['image'];
$id=$_POST['id'];

$sql="UPDATE about_us_table SET title='{$title}',sub_title='{$sub_title}',long_description='{$long_description}',short_description='{$short_description}',image='{$image}' WHERE $id='{id}'";
if(mysqli_query($connection,$sql)){
    header('Location:fetch_about_us_data.php');
}
else{
	echo "Error".$sql."<br>".mysqli_error($connection);
}
?>