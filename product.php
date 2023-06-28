<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <!-- HEADER Start --> 
    <?php 
    include 'asset/header.php'; ?>
    <section>
        <div class="about_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">    
                            <h1>PRODUCT</h1>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </section>
    <section>
        <div class="search">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="search-bar">
                            <div class="search-head">
                                <h3>SEARCH PRODUCT</h3>
                            </div>
                            <button>Search..<i class="fas fa-search"></i>
                            </button>
                            <table>
                                <tr>
                                    <th><h1>CATEGORIES</h1></th>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Lorem ipsum</h5></td>
                                </tr>
                                
                            </table>                                    
                            </div>
                    </div>
                    <!-- <form> -->
                    <?php
                        include "connection.php";
                        $sql="Select * from product_table";
                        $result=mysqli_query($connection,$sql);
                        while($row=mysqli_fetch_assoc($result))
                        {
                            
                            echo '<div class="col-lg-3">
                            <form action="session_manager_cart.php" method="POST">
                        <a class="product-link" href=" '.$row["link"].' ">
                        <div class="box-seller">
                            <img src="'.$row["images"].'" alt="">
                            <p>'.$row["detail"].'</p>
                            <ul class="rating-cart">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><span>(123)</span></li>    
                            </ul>
                            <h3>'.$row["price"].'<h3>
                            <input type="hidden" name="price" value='.$row["price"].'>
                            <input type="hidden" name="images" value='.$row["images"].'>
                            <input type="hidden" name="detail" value='.$row["detail"].'>
                            <input type="hidden" name="id" value='.$row["id"].'>
                            <a href="cart.php"><button type="submit" name="add_to_cart"><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>
                        </div>
                        </a>
                        </form>
                        </div>';
                        
                            if($row["id"]==4 || $row["id"]==7)
                            {
                                echo '<div class="col-lg-3"></div>';
                            }
                            
                       
                        }
                    ?>
                    
                    
                   

<?php include 'asset/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
