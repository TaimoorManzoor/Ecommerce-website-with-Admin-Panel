<?php
        include "session_manage.php";
        include "connection.php";
        $name=$_POST['name'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $type=$_POST['type'];
        $sql="INSERT INTO  contact_form(name,address,email,type) VALUES('{$name}','{$address}','{$email}','{$type}')";
        if(mysqli_query($connection,$sql))
        {
            header("Location:http://localhost/taimoor/contact-us.php");

        }


    
?>