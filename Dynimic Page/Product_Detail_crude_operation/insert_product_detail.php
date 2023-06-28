<?php 
include "connection.php";
$title=$_POST['title'];
$price=$_POST['price'];
$short_description=$_POST['short_description'];
$images=$_POST['images'];

$sql="INSERT INTO product_detail(title,price,short_description,images) values ('{$title}','{$price}','{$short_description}','{$images}')";
    mysqli_query($connection,$sql) or die('Error');
    header('Location:product_detail_fetch.php');

?>