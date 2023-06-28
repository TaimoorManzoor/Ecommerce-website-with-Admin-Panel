<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="../css/admin_panel.css"> -->
    <link rel="stylesheet" href="../css/foam.css">
    <style>
        body{
            background: #1c87c9; 
        }
        form{
            margin:20% 20% 20% 30%;
            /* height:50%; */
            width: 600px;
        }
        h1{
            text-align:center;
        }
        </style>


    <title>Login</title>
</head>
<body>
    <!-- <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div> -->
    <form action="<?php $_SERVER['PHP_SELF']?>" method='POST'>
        <h1>Login Here</h1>
        <label for="username">Username</label>
        <input type="text" name='name'>
        <label for="password">Password</label>
        <input type="password" name='password'><br>
        <button type="submit" name='submit'>Login</button>
    </form>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{   session_start();
    $name = $_POST['name'];
    $password = $_POST['password'];
      ?>
    <?php
    $sql = "Select * from admin where name='{$name}' and password='{$password}'";
    $resulth=mysqli_query($connection, $sql) or die('error');
    if(mysqli_num_rows($resulth)==1)
    {
        $row = mysqli_fetch_assoc($resulth);
        if($row['name']==$name && $row['password']==$password)
        {
            $_SESSION['is_login']='yes';
            ?>
            <?php
            header('Location:UsersManagement.php');
        }
    }
    else{
        echo "<script>alert('Incorrect Password Or Admin name')</script>";
    }

}

?>

