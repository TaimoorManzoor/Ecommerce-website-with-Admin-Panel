<?php 
include "connection.php";
$main_title=$_POST['main_title'];
$sub_title=$_POST['sub_title'];
$short_description=$_POST['short_description'];
$images=$_POST['images'];

$sql="INSERT INTO home_table(main_title,sub_title,short_description,images) values ('{$main_title}','{$sub_title}','{$short_description}','{$images}')";
if(mysqli_query($connection,$sql)){
    header('Location:fetch_home.php');
}
else{
	echo "Error".$sql."<br>".mysqli_error($connection);
}
?>