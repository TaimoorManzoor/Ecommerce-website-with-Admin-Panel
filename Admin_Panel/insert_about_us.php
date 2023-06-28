<?php include 'session_manage.php'; ?>

<?php 
include "connection.php";
$title=$_POST['title'];
$sub_title=$_POST['sub_title'];
$long_description=$_POST['long_description'];
$short_description=$_POST['short_description'];
$image=$_POST['image'];

$sql="INSERT INTO about_us_table(title,sub_title,long_description,short_description,image) values ('".$title."','".$sub_title."','".$long_description."','".$short_description."','".$image."')";
if(mysqli_query($connection,$sql)){
    header('Location:fetch_about_us_data.php');
}
else{
	echo "Error".$sql."<br>".mysqli_error($connection);
}
?>