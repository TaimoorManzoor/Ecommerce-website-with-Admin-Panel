<?php
session_start();
include "connection.php";
    $first_name=$_POST["first_name"];
    $password=$_POST["password"];

$sql = "SELECT first_name,password FROM user_account where first_name='$first_name' && password='$password'";
$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result) === 1){
    $rows = mysqli_fetch_assoc($result);
    if($rows['first_name']=== $first_name && $rows['password']=== $password){
        $_SESSION['first_name']=$rows['first_name'];
        $_SESSION['password']=$rows['password'];
        echo "<script>alert('You are sucessfully LogIn ')</script>";
        header("Location:login_signup.php");
    }
}
else{
    echo "<script>alert('Incorrect Information')</script>";
        header("Location:login_signup.php");
}




?>
