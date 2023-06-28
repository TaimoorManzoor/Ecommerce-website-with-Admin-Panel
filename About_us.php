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
    <title>About Us</title>
</head>
<?php
    include 'connection.php';
    $sql='SELECT * FROM about_us_table where id=10';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
?>
<body>
<?php include 'asset/header.php'; ?>
    <!-- HEADER End-->
    <!-- Banner Start -->
    <section>
        <div class="about_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">    
                            <h1>ABOUT US</h1>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </section>
    <section class="desc_about_us my-4">
        <div class="fluid-container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo $data['image'] ;?>">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="container">
                        
                          <h6><?php echo $data['title'] ;?></h6>
                        <h1><?php echo $data['sub_title'] ;?></h1>
                        <p style="margin-right: 22px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fug.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fug.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fug Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas sequi voluptas,quisquam sint nam iusto quasi eos necessitatibus quas sequi voluptas,quisquam sint nam iusto quasi eos necessitatibus quas facilis sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fug.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fug.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fug Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere sequi voluptas, quisquam sint nam iusto quasi eos necessitatibus quas sequi voluptas,quisquam sint nam iusto quasi eos necessitatibus quas sequi voluptas,quisquam sint nam iusto quasi eos necessitatibus quas facilis sequi voluptas, quisquam sint nam  </p>
                    </div>
                      
                </div>
            </div>
    </section>
    <section class="desc_about_us">

            <div class="row mb-4">
                <div class="col-lg-12">
                       <p style="margin-top: -34px;padding: 0px 30px;"><?php echo $data['short_description'] ;?></p>
          
                 
            </div>
    </section>   
     </div>
        </div>
    </section>
<?php
    include 'connection.php';
    $sql='SELECT * FROM about_us_table where id=12';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
?>
<!-- Review start -->
<section class="review">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php echo $data['title'];?></h1>
                <p><?php echo $data['sub_title'];?></p>
                <h3><?php echo $data['long_description'];?></h3>
                <button><?php echo $data['short_description'];?></button>
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
<?php
    include 'connection.php';
    $sql='SELECT * FROM about_us_table where id=13';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
?>            
            <div class="col-lg-4 col-4">
                <div class="text-head">
                    <h1><?php echo $data['title'] ;?></h1>
                    <p><?php echo $data['sub_title'] ;?></p>
                </div>
            </div>
<?php
    include 'connection.php';
    $sql='SELECT * FROM about_us_table where id=14';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
?>                
            <div class="col-lg-4  col-4">
                <div class="text-head">
                <h1><?php echo $data['title'] ;?></h1>
                <p><?php echo $data['sub_title'] ;?></p>
                </div>
            </div>
<?php
    include 'connection.php';
    $sql='SELECT * FROM about_us_table where id=15';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
?>                     
            <div class="col-lg-4  col-4">
                <div class="text-head">
                    <h1><?php echo $data['title'] ;?></h1>
                    <p><?php echo $data['sub_title'] ;?></p>
                </div>
            </div>    
        </div>
    </div>
</section>
<!-- text-head END   -->

<?php
    include 'connection.php';
    $sql='SELECT * FROM about_us_table where id=16';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
?>   
<!-- find-your-product start-->
<section>
    <div class="find-your-product">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h1><?php echo $data['title'];?></h1>
            </div>       
            <div class="col-lg-3 col-3"></div>
            <div class="col-6 col-lg-6">
                <p><?php echo $data['short_description'];?></p> 
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
    $sql='SELECT * FROM about_us_table where id=17';
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
                        <h1><?php echo $data['title'];?></h1>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="paragraph">
                        <h5><?php echo $data['sub_title'];?></h5>
                        <p><?php echo $data['short_description'];?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="paragraph">
                        <h5><?php echo $data['sub_title'];?></h5>
                        <p><?php echo $data['short_description'];?></p>
                    </div>
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
<!-- NEW PRODUCT END -->
<!-- SUBSCRIBE START -->
<?php
    include 'connection.php';
    $sql='SELECT * FROM about_us_table where id=18';
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
                    <h1><?php echo $data['title'];?></h1>
                </div>
            </div>
            <div class="col-lg-12 ">
                <div class="subscribe-btn1">
                    <button>Enter your Email Address</button>
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
<!-- SUBSCRIBE END -->
<!-- Footer -->
 <?php include 'asset/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
