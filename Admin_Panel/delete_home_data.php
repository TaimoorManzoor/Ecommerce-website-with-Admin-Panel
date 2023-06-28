<?php include 'session_manage.php'; ?>

<?php
    $id=$_GET['id'];
    include 'connection.php'; 
    $sql="DELETE FROM home_table WHERE id={$id}";
    $resulth=mysqli_query($connection,$sql) or die("Query Unsucessfull");

    header("Location:fetch_home.php");
?>