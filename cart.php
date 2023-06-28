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
    <link rel="stylesheet" href="css/carts.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <!-- HEADER Start --> 
    <?php         

    include 'asset/header.php';

    ?>

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
                            <h1>CART</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section> 
        <div class="table-responsive">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="cart-table">
                            <table>
                                <tr>
                                <th colspan="2">Item</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Sub Price</th>
                                </tr>
                                <?php
                                if(isset($_SESSION['cart']))
                                {
                                    
                                    foreach($_SESSION['cart'] as $key => $value)
                                    {
                                        // echo 
                                        echo 
                                        "
                                        <tr>
                                        <td colspan='2'>
                                            <img src='$value[images]'  height='150px' width='150px'>
                                            <p>IPSUM DOLAR<br>Gram:20<br>30 Reviews</p>  
                                        </td>
                                        <td>
                                                <input type='number' class='text-center' value='$value[quantity]'min=1  max=10 class='update'></button>
                                                <p>Update</p>   
                                        </td>
                                        <td>
                                            <p><b>$value[price]</b></p>  
                                        </td>
                                        <td>
                                            <b>$value[price]</b>
                                            <form action='session_manager_cart.php' method='POST'>
                                            <button name='remove_item'class='cross'><i class='fa-solid fa-xmark'></i></button>
                                            <input type='hidden' name='id' value='$value[id]' >
                                            </form>
                                        </td>
                                    </tr>
                                        ";
                                    }
                                }
                                ?>
                           
                                <!-- <tr>
                                    <td colspan="2">
                                        <img src="Images/prod-1.png" alt="" height="150px" width="150px">
                                        <p>IPSUM DOLAR<br>Gram:20<br>30 Reviews</p>  
                                    </td>
                                    <td>
                                        <button class="update">1</button>
                                            <p>Update</p>   
                                    </td>
                                    <td>
                                        <p><b>$22</b></p>  
                                    </td>
                                    <td >
                                        <b>$44</b>
                                        <button class="cross"><i class="fa-solid fa-xmark"></i></button>
                                    </td>
                                </tr>
                                <tr> -->
                                    <td colspan="2"><h6>Continue Purchasing ></h6></td>
                                    <td colspan="4"> <a href="checkout.php"><button class="proceed">PROCEED TO CHECKOUT</button></a>
                                        <button class="paypal">OR CHECKOUT WITH<img src="images/paypal.jpg"></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="record">
                                <p>Sub Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$76<br>
                                    Discount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$76<br>
                                    Shipping&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$76<br>
                                </p>
                                <p class="total">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;</p><b>$96</b>                             
                            </div>
                            <div class="records">
                                <p><b>Shipping</b><br>Courier($15)</p>
                                <p><b>Estimate For</b><br>United Estate,NY,1230</p>
                                
                            </div>
                    </div> 

                </div>

            </div>

        </div>
    </div>
    </section>
    </section>
  <?php include 'asset/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
