<?php include 'session_manage.php'; ?>

<?php
    $id=$_GET['id'];
    include 'connection.php'; 
    $sql="DELETE FROM product_detail WHERE id={$id}";
    $resulth=mysqli_query($connection,$sql) or die("Query Unsucessfull");

    header("Location:product_detail_fetch.php");
?>