

<?php include 'UsersManagement.php'; ?>
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
    <h5><b><i class="fa fa-dashboard"></i> Add Product</b></h5>
  </header>
<body>
<div class="container">
<form action="insert_contact_us.php" method='POST'>
                                <h1>Add Contact Data</h1>
                                <div class="inputs">
                                <label>Title</label><br>
                                        <input type="text" name='main_title'><br>
                                        <label>Short Description</label><br>
                                        <input type="text" name='short_description'><br>                              
                                        <input type="submit" name="submit">
                                </div>
</form>

</div>




