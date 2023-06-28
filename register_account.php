<?php
session_start();
include "connection.php";
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $retype_password = $_POST["retype_password"];

echo "register";
$sql = "INSERT INTO user_account(first_name,last_name,email,password,retype_password) values ('{$first_name}','{$last_name}','{$email}','{$password}','{$retype_password}')";

    if ($password==$retype_password) {
        echo "<script>alert('You are sucessfully Register ')</script>";

        if (mysqli_query($connection, $sql)) {
            $_SESSION['first_name'] = $first_name;
            $_SESSION['password'] = $password;
            echo "<script>alert('You are sucessfully Register ')</script>";
            header("Location:login_signup.php");

        }
    }
    else {
        echo "<script>alert('Incorrect Information')</script>";
        header("Location:login_signup.php");
        echo ("error" . mysqli_error($connection));
    }

?>