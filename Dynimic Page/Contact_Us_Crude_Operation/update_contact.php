<?php 
include "connection.php";
$main_title=$_POST['main_title'];
$short_description=$_POST['short_description'];
$id=$_POST['id'];

$sql="UPDATE contact_us_table SET main_title='{$main_title}',short_description='{$short_description}' WHERE $id='{id}'";
if(mysqli_query($connection,$sql)){
    header('Location:fetch_contact_us.php');
}
else{
	echo "Error".$sql."<br>".mysqli_error($connection);
}
?>