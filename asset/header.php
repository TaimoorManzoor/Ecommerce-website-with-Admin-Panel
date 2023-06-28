<?php session_start()?>
<header>
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
                      <?php
                      $count = 0;
                      if(isset($_SESSION['cart']))
                      {
                        $count = count($_SESSION['cart']);
                      }
                      ?>
                        <li><a href="login_signup.php">Account</a></li>
                        <li><a href="cart.php"><i class="fas fa-shopping-cart">
                        </i>(<?php echo $count; ?>) CAD</span></a></li> 
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
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="About_us.php">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="product.php">Product</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="contact-us.php">Contact Us</a>
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
    </header>
