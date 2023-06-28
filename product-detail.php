<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">   
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/productdetail.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT DETAIL</title>
</head>
<body>
    <!-- HEADER Start --> 
    <?php include 'asset/header.php';?>
    <!-- HEADER End-->
    
    <!-- Banner Start -->
    <section>
        <div class="about_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">    
                        <h1>PRODUCT DETAILS</h1>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HELP SECTION START -->
    <section>
        <div class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-6">
                        <ul class="rating-cart">
                            <il class="fa-solid fa-star"></il>
                            <il class="fa-solid fa-star"></il>
                            <il class="fa-solid fa-star"></il>
                            <il class="fa-solid fa-star"></il>
                            <il class="fa-solid fa-star"></il>
                        </ul>                                
                    </div>
                    <?php
                        include 'connection.php';
                        $sql='SELECT * FROM product_detail where id=7';
                        $result=$connection->query($sql);
                        $data=array();
                        if (mysqli_num_rows($result)>0) {
                            $data=mysqli_fetch_assoc($result);
                        } 
                    ?>
                    <div class="product-text">
                        <div class="col-lg-6 col-6">    
                            <h1><?php echo $data["title"]?></h1>
                            <h3><?php echo $data["price"]?></h3>
                            <h3>ORIGINAL</h3>
                            <div class="row">
                                <div class="button-lorem">
                                    <button class="loss">Lorem Ipsum</button><button>Lorem Ipsum</button><button>Lorem Ipsum</button><button>Lorem Ipsum</button>
                                </div>
                            </div>
                            <p><?php echo $data["short_description"]?></p>
                            <p><?php echo $data["short_description"]?></p>                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. gnam aspernatur rerum optio magni similique earum, dignissimos pariatur, atque quisquam explicabo omnis, est sint recusandae?</p></p>
                            <p><?php echo $data["short_description"]?></p>
                            <p><?php echo $data["short_description"]?></p>
                            <p><?php echo $data["short_description"]?></p>
                            <p><?php echo $data["short_description"]?></p>
                        </div>  
                    </div>
                  <div class="product-image">
                    <div class="col-lg-6 col-6">    
                        <img src="<?php echo $data["images"]?>" alt="">
                        <div class="sub-img">
                        <?php
                        include 'connection.php';
                        $sql='SELECT * FROM product_detail where id=8';
                        $result=$connection->query($sql);
                        $data=array();
                        if (mysqli_num_rows($result)>0) {
                            $data=mysqli_fetch_assoc($result);
                        } 
                    ?>
                            <img src="<?php echo $data["images"]?>">
                            <img src="<?php echo $data["images"]?>">
                            <img src="<?php echo $data["images"]?>">
                            <img src="<?php echo $data["images"]?>">

                        </div>
                     </div>
                  </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12 col-6">
                        <div class="product-text">
                            <p>
                            <?php echo $data["short_description"]?>
                            <?php echo $data["short_description"]?>
                            <?php echo $data["short_description"]?>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="desc-button">
                        <button class="description">DESCRIPTION</button>
                        <button class="reviews">REVIEWS</button>
                        <button class="addition">ADDITIONAL INFO</button>
                    </div> 
                </div>
                <hr>
                <div class="product-text">
                <p>
                <?php echo $data["short_description"]?>                </p>
                </div>
        </div>
    </section>

<?php include 'asset/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
