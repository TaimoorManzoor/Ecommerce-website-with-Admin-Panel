<?php include 'UsersManagement.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/foam.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Add Product</b></h5>
  </header>
<body>
<div class="container">
<form action="insert_product.php" method="POST">
                                <h1>Add Product</h1>
                                <div class="inputs">
                                <label>LINK</label><br>
                                <input type="text" name='link'required><br>
                                <label>IMAGES</label>        <br>
                                <input type="text" name='images'required><br>
                                <label>DETAIL</label><br>
                                <input type="text" name='detail' required><br>
                                <label>PRICE</label><br>
                                <input type="text" name='price' required><br>                               
                                <button type="submit">Submit</button><br>
                                </div>
</form>

</div>



