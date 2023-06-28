<?php include 'UsersManagement.php'; ?>
<?php
     include 'connection.php';
     $id=$_GET['id'];
     $sql="Select * from contact_us_table where id={$id}";
     $resulth=mysqli_query($connection,$sql);
     if(mysqli_num_rows($resulth)>0)
     {
        while($row=mysqli_fetch_assoc($resulth))
        {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> UPDATE PRODUCT</b></h5>
  </header>
<body>
<div class="container">
<form action="update_contact.php ? $id" method="POST">
                                <h2></h2>
                                <div class="inputs">
                                <input type="hidden" name='id' value=<?php echo $row['id']?> required ><br>
                                <label>Title</label><br>
                                <input type="text" name='main_title' value=<?php echo $row['main_title']?> required ><br>
                                <label>Short Description</label>        <br>
                                <input type="text" name='short_description' value=<?php echo $row['short_description']?> required><br>                      
                                <button type="submit">Submit</button><br>
                                
                                </div>
</form>
</div>
<?php }}
   
   ?>


