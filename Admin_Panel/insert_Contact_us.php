<?php include 'session_manage.php'; ?>

<?php    
        include "connection.php";
        $main_title=$_POST['main_title'];
        $short_description=$_POST['short_description'];
        $sql="INSERT INTO  contact_us_table(main_title,short_description) VALUES('{$main_title}','{$short_description}')";
        if(mysqli_query($connection,$sql))
        {
            header("Location:fetch_contact_us.php");

        }    
?>