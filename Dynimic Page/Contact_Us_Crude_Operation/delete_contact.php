<?php
    $id=$_GET['id'];
    include 'connection.php'; 
    $sql="DELETE FROM contact_us_table WHERE id={$id}";
    $resulth=mysqli_query($connection,$sql) or die("Query Unsucessfull");

    header("Location:http://localhost/taimoor/fetch_contact_us.php");
?>