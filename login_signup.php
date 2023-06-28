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
    <link rel="stylesheet" href="css/checkout.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN SIGNUP</title>
</head>
<body>
    <!-- HEADER Start --> 
    <?php include 'asset/header.php'; ?>

    <!-- HEADER End-->
    <!-- Banner Start -->
    <section>
        <div class="about_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">    
                            <h1>LOGIN/SIGNUP</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="login-register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="login">         
                            <form action="admin_panel/login.php" method="POST">
                                <h1>Login To Your Account</h1>
                                
                                <div class="input-group">
                                    <input type="text" name="first_name"placeholder="User Name"required>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password" placeholder="Password"required>
                                </div>
                                <button type="submit" class="account">Login</button>
                                <input type="radio"required><b>&nbsp;&nbsp;Remeber Me</b><p class="terms"><u>Forget Password</u></p>
                            </form>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="register">         
                            <form action="admin_panel/register_account.php" method="POST">
                                <h1>Register Your Account</h1>
                                <div class="rows">
                                    <div class="input-group">
                                        
                                        <input type="text" name="first_name" placeholder="First Name"required>
                                    </div>
                                    <div class="input-group">
                                        
                                        <input type="text"name="last_name" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="email" placeholder="Email"required>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password" placeholder="Password"required>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="retype_password" placeholder="Retype Password" required>
                                </div>
                                <b>By creating an account, you agree to our</b><p class="term"><u>Term & Condition</u></p>
                                <button type="submit" name='signup' class="account">Create An Account</button>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

<?php include 'asset/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>










