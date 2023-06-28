<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/productdetail.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>
<?php
    include 'connection.php';
    $sql='SELECT * FROM contact_us_table where id=3';
    $result=$connection->query($sql);
    $data=array();
    if (mysqli_num_rows($result)>0) {
         $data=mysqli_fetch_assoc($result);
     } 
?>
<body>
    <!-- HEADER Start --> 
    <?php include 'asset/header.php'; ?>

    <!-- <header>
        <div class="top_row">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="shopping-text">
                        <p>Free Shipping Over $50 or $5 Flat Rate</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6">
                <div class="cart">
                    <ul>
                        <li><a href="login_signup.html">Account</a></li>
                        <li><a href="cart.html"><i class="fas fa-shopping-cart">
                        </i>0.00 CAD</span></a></li> 
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class ="sec-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-3">
                        <div class="top-logo">
                            <img src="images/toplogo.png" alt="logo">
                        </div>
                    </div>
                    <div class="col-lg-9 col-9">
                        <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse top-nav" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                              <li class="nav-item top-text">
                                    <a class="nav-link" href="#"><p><b>SHOP CBD</b></p></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.html">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="About_us.html">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="product.html">Product</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </header> -->
    <!-- HEADER End-->
    <!-- Banner Start -->
    <section>
        <div class="about_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">    
                            <h1><?php echo 'Contact Us';?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section> 
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="contact-box pt-3 pb-3">
                    <div class="col-lg-4">
                        <h1><?php echo $data['main_title'] ;?></h1>
                        <p><?php echo $data['short_description'] ;?></p>   
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-icon">
                            <div class="col-lg-4">
                                <span class="dot">
                                    <i class="fa-regular fa-paper-plane"></i>
                                </span>
                            </div>
                            <?php
                                include 'connection.php';
                                $sql='SELECT * FROM contact_us_table where id=12';
                                $result=$connection->query($sql);
                                $data=array();
                                if (mysqli_num_rows($result)>0) {
                                    $data=mysqli_fetch_assoc($result);
                                    } 
                            ?>
                            <div icon-text>
                            <div class="col-lg-8">
                                    <h4><?php echo $data['main_title'] ;?></h4>
                                    <p><?php echo $data['short_description'] ;?></</p>
                            </div>
                        </div>
                    </div>   
                </div>

                    <div class="col-lg-4">
                        <div class="contact-icon">
                            <div class="col-lg-4">
                                <span class="dot">
                                      <i class="fa-solid fa-phone"></i>
                                </span>
                            </div>
                            <?php
                                include 'connection.php';
                                $sql='SELECT * FROM contact_us_table where id=13';
                                $result=$connection->query($sql);
                                $data=array();
                                if (mysqli_num_rows($result)>0) {
                                    $data=mysqli_fetch_assoc($result);
                                    } 
                            ?>
                            <div icon-text>
                                <div class="col-lg-8">
                                    <h4><?php echo $data['main_title'] ;?></h4>
                                    <p><?php echo $data['short_description'] ;?></p>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-icon">
                            <div class="col-lg-4">
                                <span class="dot">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                            </div>
                            <?php
                                include 'connection.php';
                                $sql='SELECT * FROM contact_us_table where id=14';
                                $result=$connection->query($sql);
                                $data=array();
                                if (mysqli_num_rows($result)>0) {
                                    $data=mysqli_fetch_assoc($result);
                                    } 
                            ?>
                            <div icon-text>
                                <div class="col-lg-8">
                                    <h4><?php echo $data['main_title'] ;?></h4>
                                    <p><?php echo $data['short_description'] ;?></p>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                <div class="contact-form">
                    <div class="col-lg-5">
                        <form action="contact_form.php" method='POST'>
                            <div class="heading">
                            </div>
                            <h3>CONTACT US</h3>
                            <input type="text" name='name' placeholder=" Name"><br>
                            <input type="text" name='address'placeholder=" Address"><br>	
                            <input type="text" name='email'placeholder=" Email"><br>	
                            <input type="text" name='type'placeholder=" Type"><br>		
                            <button>SUBMIT</button>
                        </form>   
                    </div>
                </div>    
                </div>
    </div>      
    </section>        

<?php include 'asset/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>

