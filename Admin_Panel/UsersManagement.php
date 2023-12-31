<?php include 'session_manage.php'; ?>

<!DOCTYPE html>
<!-- saved from url=(0040)http://localhost/Project/admin/users.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Users Management</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./Users Management_files/w3.css">
<link rel="stylesheet" href="./Users Management_files/css">
<link rel="stylesheet" href="./Users Management_files/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <!-- <span class="w3-bar-item w3-right">Logo</span> -->
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="./Users Management_files/avatar.jpg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Taimoor</strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="http://localhost/Project/admin/users.php#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu</a>
    <a href="fetch_home.php" class="w3-bar-item w3-button w3-padding">
    <i class="fa-solid fa-house"></i>&nbsp; Home 
    </a>
    <a href="fetch_user.php" class="w3-bar-item w3-button w3-padding">
    <i class="fa-regular fa-user" ></i>&nbsp; User Management
    </a>
   
    <a href="fetch_about_us_data.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa fa-users fa-fw"></i>&nbsp; About Us
    </a>
    <a href="fetch_contact_us.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa-regular fa-address-book"></i>&nbsp; Contact Us 
    </a> 
    <a href="fetch_contact_form_data.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa-regular fa-rectangle-list"></i>&nbsp; Contact Form
    </a>
    <a href="product_detail_fetch.php" class="w3-bar-item w3-button w3-padding">
    <i class="fa-solid fa-circle-info"></i>&nbsp; Product Detail
    </a>
    <a href="product_fetch_data.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa fa-diamond fa-fw"></i>&nbsp; Product Management
    </a> 
    <a href="fetch_checkout.php" class="w3-bar-item w3-button w3-padding">
    <i class="fa-solid fa-cart-shopping"></i>&nbsp; Checkout
    </a>   
    <a href="logout.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa fa-cog fa-fw"></i>&nbsp; Logout
    </a><br><br>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>



</body></html>