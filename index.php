<!DOCTYPE html>
<html lang="en">
<head>
    <!-- BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ICON LINK -->
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
   <!-- CSS FILE LINK -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <!-- HEADER Start --> 
    <?php include 'asset/header.php';?>
    <!-- HEADER End-->
    <!-- Banner Start -->
    <?php
    include 'connection.php';
    $sql='SELECT * FROM home_table where id=1';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
?>
    <section>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12"  >
                            <h3><?php echo $data['main_title']?></h3>    
                            <h1><?php echo $data['sub_title']?></h1>
                            <div class="row">
                                <div class="col-6 col-6 col-md-6">
                                    <p><?php echo $data['short_description']?></p>
                                </div>

                            </div>
                            <button>Shop Now<i class="fa-solid fa-arrow-right"></i></button>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HELP SECTION START -->
    <?php
    include 'connection.php';
    $sql='SELECT * FROM home_table where id=2';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
     ?>
    <section>
        <div class="container">
            <div class="help-section">
            <div class="raw">
                <div class="col-lg-12 col-md-12 col-12" >
                <div class="help-title">
                    <h1><?php echo $data['main_title'];?></h1>
                    <p><?php echo $data['short_description'] ;?></p>
                </div>
                </div>
            </div>    
            </div>
            </div>    
    </section>
<!-- HELP-CARD START  -->
<section class="help-card">
    <div class="container">
        <div class="row">
        <?php
            include 'connection.php';
            $sql='SELECT * FROM home_table where id=3';
            $result=$connection->query($sql);
            $data=array();
            if (mysqli_num_rows($result)>0) {
                $data=mysqli_fetch_assoc($result);
            } 
     ?>
            <div class="col-lg-4 col-sm-12 col-md-6 col-xs-12">
                <a>
                        <img src="<?php echo $data['images']?>" class="img-responsive"  alt="">
                        <h3><?php echo $data['sub_title']?></p></h3>
                </a>
            </div>
            <?php
            include 'connection.php';
            $sql='SELECT * FROM home_table where id=4';
            $result=$connection->query($sql);
            $data=array();
            if (mysqli_num_rows($result)>0) {
                $data=mysqli_fetch_assoc($result);
            } 
            ?>    
            <div class="col-lg-4 col-sm-12 col-md-6 col-xs-12">
                <a>
                        <img src="<?php echo $data['images']?>" class="img-responsive"  alt="">
                        <h3><?php echo $data['sub_title']?></p></h3>
                </a>
            </div>
            <?php
            include 'connection.php';
            $sql='SELECT * FROM home_table where id=5';
            $result=$connection->query($sql);
            $data=array();
            if (mysqli_num_rows($result)>0) {
                $data=mysqli_fetch_assoc($result);
            } 
            ?>
         <div class="col-lg-4 col-sm-12 col-md-6 col-xs-12">
                <a>
                        <img src="<?php echo $data['images']?>" class="img-responsive"  alt="">
                        <h3><?php echo $data['sub_title']?></p></h3>
                </a>
            </div>
            <?php
            include 'connection.php';
            $sql='SELECT * FROM home_table where id=6';
            $result=$connection->query($sql);
            $data=array();
            if (mysqli_num_rows($result)>0) {
                $data=mysqli_fetch_assoc($result);
            } 
            ?>
            <div class="col-lg-4 col-sm-12 col-md-6 col-xs-12">
                <a>
                        <img src="<?php echo $data['images']?>" class="img-responsive"  alt="">
                        <h3><?php echo $data['sub_title']?></p></h3>
                </a>
            </div>
            <?php
            include 'connection.php';
            $sql='SELECT * FROM home_table where id=7';
            $result=$connection->query($sql);
            $data=array();
            if (mysqli_num_rows($result)>0) {
                $data=mysqli_fetch_assoc($result);
            } 
            ?>  
           <div class="col-lg-4 col-sm-12 col-md-6 col-xs-12">
                <a>
                        <img src="<?php echo $data['images']?>" class="img-responsive"  alt="">
                        <h3><?php echo $data['sub_title']?></p></h3>
                </a>
            </div>
            <?php
            include 'connection.php';
            $sql='SELECT * FROM home_table where id=8';
            $result=$connection->query($sql);
            $data=array();
            if (mysqli_num_rows($result)>0) {
                $data=mysqli_fetch_assoc($result);
            } 
            ?>
            <div class="col-lg-4 col-sm-12 col-md-6 col-xs-12">
                <a>
                        <img src="<?php echo $data['images']?>" class="img-responsive"  alt="">
                        <h3><?php echo $data['sub_title']?></p></h3>
                </a>
            </div>
        </div>
    </div>
  
</section>
<!-- HELP-CARD END -->
   <!-- TOP SELL PRODUCT START  -->
<section class="top-seller">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <hr>
                </div>
                <div class="col-lg-3">
                    <h1>TOP SELLERS</h1>
                </div>
                <div class="col-lg-4">
                    <hr>
                </div>
            </div>  
            <div class="row">
                    <!-- <div class="col-lg-3 col-md-6" > -->
                    <?php
                    $count=0;
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
                            $count++;
                            if($count==8)
                            {
                                break;
                            }
                       
                        }
                    ?>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6">
                        <a class="product-link"href="product-detail.html">
                        <div class="box-seller">
                        <img src="images/prod-2.png" alt="">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                        <ul class="rating-cart">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><span>(123)</span></li>    
                        </ul>
                        <h3>$123.00 CAD<h3>
                            <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>
                    </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="product-link"href="product-detail.html">
                        <div class="box-seller">
                        <img src="images/prod-3.png" alt="">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                        <ul class="rating-cart">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><span>(123)</span></li>    
                        </ul>
                        <h3>$123.00 CAD<h3>
                            <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>
                    </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6" >
                        <a class="product-link"href="product-detail.html">
                        <div class="box-seller">
                        <img src="images/prod-4.png" alt="">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                        <ul class="rating-cart">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><span>(123)</span></li>    
                        </ul>
                        <h3>$123.00 CAD<h3>
                            <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>
                    </div>
                        </a>
                    </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a class="product-link"href="product-detail.html">
                    <div class="box-seller">
                    <img src="images/prod-1.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <ul class="rating-cart">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><span>(123)</span></li>    
                    </ul>
                    <h3>$123.00 CAD<h3>
                        <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>
                </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="product-link"href="product-detail.html">
                    <div class="box-seller">
                    <img src="images/prod-2.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <ul class="rating-cart">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><span>(123)</span></li>    
                    </ul>
                    <h3>$123.00 CAD<h3>
                        <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>
                </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="product-link"href="product-detail.html">
                    <div class="box-seller">
                    <img src="images/prod-3.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <ul class="rating-cart">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><span>(123)</span></li>    
                    </ul>
                    <h3>$123.00 CAD<h3>
                        <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>
                </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="product-link"href="product-detail.html">
                    <div class="box-seller">
                    <img src="images/prod-4.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <ul class="rating-cart">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><span>(123)</span></li>    
                    </ul>
                    <h3>$123.00 CAD<h3>
                        <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>
                </div>
                    </a>
                </div>
            </div> -->
           
                    
                   
            
        </div>    
    </div>
</section>

<!-- Review start -->
    <!-- HEADER End-->
    <!-- Banner Start -->
    <?php
    include 'connection.php';
    $sql='SELECT * FROM home_table where id=9';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
?>
<section class="review">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php echo $data['main_title']?>"</h1>
                <p><?php echo $data['short_description']?>"</p>
                <h3><?php echo $data['sub_title']?></h3>
                <button>Verifited by CR</button>
                <ul class="rate">
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star-half-stroke"></i></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Review END -->

<!-- text-head START -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-4">
                <div class="text-head">
                    <h1>30-DAY</h1>
                    <p>Lorem ipsum dolor sit</p>
                </div>
            </div>    
            <div class="col-lg-4  col-4">
                <div class="text-head">
                    <h1>FREE</h1>
                    <p>Lorem ipsum dolor sit</p>
                </div>

            </div>    
            <div class="col-lg-4  col-4">
                <div class="text-head">
                    <h1>365</h1>
                    <p>Lorem ipsum dolor sit</P>
                </div>

            </div>    
        </div>
    </div>
</section>
<!-- text-head END   -->

<!-- find-your-product start-->
<?php
    include 'connection.php';
    $sql='SELECT * FROM home_table where id=10';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
     ?>
<section>
    <div class="find-your-product">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h1><?php echo $data['main_title']?></h1>
            </div>       
            <div class="col-lg-3 col-3"></div>
            <div class="col-6 col-lg-6">
                <p><?php echo $data['short_description']?></p> 
            </div>
            <div class="col-3"></div>
            <div class="col-lg-3 col-3"></div>
            <div class="col-lg-6 col-sm-12 col-12"><button>Shop Now<i class="fa-solid fa-arrow-right"></i></button></div>
            <div class="col-lg-3 col-3"></div>
            
        </div>
            
            </div>
        </div>
    </div>    
</section>
<!-- find-your-product End -->

<!-- LEARNING EVERYTHING START -->
<?php
    include 'connection.php';
    $sql='SELECT * FROM home_table where id=11';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
     ?>
<section>
    <div class="fluid-container">
        <div class="learning">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="head">
                        <h1><?php echo $data['main_title']?></h1>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                <?php
    include 'connection.php';
    $sql='SELECT * FROM home_table where id=12';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
     ?>
                    <div class="paragraph">
                        <h5><?php echo $data['main_title']?></h5>
                        <p><?php echo $data['short_description']?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                <div class="paragraph">
                        <h5><?php echo $data['main_title']?></h5>
                        <p><?php echo $data['short_description']?></p>
                    </div>
                </div>
                <div class="col-lg-12 col-6 col-md-6">
                    <div class="learning-button">
                        <button><p>Continue Reading </p><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LEARNING EVERYTHING END-->
<!-- NEW PRODUCT START -->
<section class="top-seller">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <hr>
            </div>
            <div class="col-lg-4">
                <h1>NEW PRODUCTS</h1>
            </div>
            <div class="col-lg-4">
                <hr>
            </div>
        </div>  
        <div class="row">
        <?php
            $count=0;
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
                            $count++;
                            if($count==4)
                            {
                                break;
                            }
                       
                        }
                    ?>
                <!-- <div class="col-lg-3 col-md-6">
                    <a class="product-link"href="product-detail.html">
                    <div class="box-seller">
                    <img src="images/prod-1.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <ul class="rating-cart">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><span>(123)</span></li>    
                    </ul>
                    <h3>$123.00 CAD<h3>
                        <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>
                </div>
            </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="product-link"href="product-detail.html">
                    <div class="box-seller">
                    <img src="images/prod-2.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <ul class="rating-cart">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><span>(123)</span></li>    
                    </ul>
                    <h3>$123.00 CAD<h3>
                    <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>
                </div>
            </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="product-link"href="product-detail.html">
                    <div class="box-seller">
                    <img src="images/prod-3.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <ul class="rating-cart">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><span>(123)</span></li>    
                    </ul>
                    <h3>$123.00 CAD<h3>
                        <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>                </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="product-link"href="product-detail.html">
                    <div class="box-seller">
                    <img src="images/prod-4.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <ul class="rating-cart">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><span>(123)</span></li>    
                    </ul>
                    <h3>$123.00 CAD<h3>
                        <a href="cart.html"><button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button></a>                </div>
                    </a>
                </div> -->
        </div>
    </div>    
</div>
</section>

<!-- NEW PRODUCT END -->
<!-- SUBSCRIBE START -->
<?php
    include 'connection.php';
    $sql='SELECT * FROM home_table where id=14';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
     ?>
<section>
    <div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div>
                    <h1><?php echo $data['main_title']?></h1>
                </div>
            </div>
            <div class="col-lg-12 ">
                <div class="subscribe-btn1">
                    <button><?php echo $data['short_description']?></button>
                </div>
            </div>
            <div class="col-lg-12 ">
                <div class="subscribe-btn2">
                    <button>Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
    <?php include 'asset/footer.php'; ?>
<!-- SUBSCRIBE END -->
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
