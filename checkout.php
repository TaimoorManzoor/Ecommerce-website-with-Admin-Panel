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
    <title>Check Out</title>
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
                            <h1>CHECKOUT</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="billing-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="check-out">         
                            <form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST">
                                <h5>Billing Details</h5>
                                <div class="rows">
                                <div class="input-group">
                                        <label for="first-name">First Name*</label><br>
                                        <input type="text" name="first_name" required>
                                </div>   
                                <div class="input-group">
                                        <label for="last-name">Last Name*</label><br>
                                        <input type="text" name="last_name" required>
                                </div>
                                </div>
                                <div class="input-group">
                                    <label for="Company-name" >Company name(optional)</label><br>
                                    <input type="text" name="company_name" required>
                                </div>
                                <div class="input-group">
                                    <label for="Name" >Country/Region*</label><br>
                                    <input type="text" name="country" value="United State(US)"required>
                                </div>
                                <div class="input-group">
                                    <label for="Name" >Street Address*</label><br>
                                    <input type="text" name="street_address" value="Home Number And Street Number" required>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="apartment" value="Apartment.suit.unit.etc(optional)" required>
                                </div>
                                <div class="rows">
                                    <div class="input-group">
                                        <label for="Name" >Tower/City*</label><br>
                                        <input type="text" name="city"  required>
                                    </div>
                                    <div class="input-group">
                                        <label for="Name" >State*</label><br>
                                        <input type="text" name="state" required>
                                    </div>
                                </div>
                                <div class="rows">
                                    <div class="input-group">
                                        <label for="Name" >Zip*</label><br>
                                        <input type="text" name="zip" required>
                                    </div>
                                    <div class="input-group">
                                        <label for="Name" >Phone*</label><br>
                                        <input type="text" name="phone" required>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label for="Name"  >Email*</label><br>
                                    <input type="text" name="email"required>
                                </div>
                                <!-- <input type="submit" name='submit'> -->
                            </form>
                        </div>
            </div>
            <div class="col-lg-5">
                <div class="billing">
                    <h5>Your Order</h5>
                    <h6>Product</h6>
                    <ul>
                        <li>Palm Print Jacket x1</li>
                        <li>$40.00</li>
                    </ul>
                    <ul>
                        <li>Palm Print Jacket x1</li>
                        <li>60.00$</li>
                    </ul>
                    <ul class="total">
                        <li>SubTotal</li>
                        <li>100.0$</li>
                    </ul>
                    <hr>
                    <form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST">
                    <ul class="total">Shipping</ul>
                    <input type="radio" name="rate" value="Free Shipping" >Free Shipping</input><br>
                    <input type="radio" name="rate" value="Local PickUp" >Local PickUp</input><br>
                    <input type="radio" name="rate" value="Flate rate $5.00" >Flate rate $5.00</input><br>
                    <hr>
                    <ul class="total">
                        <li>SubTotal</li>
                        <li>100.0$</li>
                    </ul>
                    <hr>
                    <ul class="total">Payment</ul>
                    <input type="radio" name="payment" value="Bank Transfer">Bank Transfer</input><br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam eius soluta doloribus  alias magnam culpa.</p>
                    <input type="radio" name="payment"value="Check Payments">Check Payments</input><br>
                    <input type="radio"name="payment"value="Cash On delivery">Cash On delivery</input><br>
                    <input type="radio"name="payment" value="Paypal">Paypal</input><br>
                    <button type="submit">Place Order</button>
                </div>
                    </form>
            </div>
            </div>
            

        </div>
    </section> 

<?php include 'asset/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php
include 'connection.php';
    if(isset($_POST["submit"]))
    {
        $first_name=$_POST["first_name"];
        $last_name=$_POST["last_name"];
        $company_name=$_POST["company_name"];
        $country=$_POST["country"];
        $street_address=$_POST["street_address"];
        $apartment=$_POST["apartment"];
        $city=$_POST["city"];
        $state=$_POST["state"];
        $zip=$_POST["zip"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        $rate=$_POST['rate'];
        $payment = $_POST['payment'];

        $sql="INSERT INTO CHECKOUT_TABLE (first_name,last_name,company_name,country,street_address,apartment,city,state,zip,phone,email,rate,payment) VALUES('{$first_name}','{$last_name}','{$company_name}','{$country}','{$street_address}','{$apartment}','{$city}','{$state}','{$zip}','{$phone}','{$email}','{$rate}','{$payment}')";
        mysqli_query($connection, $sql) or die('error');
    }
?>
