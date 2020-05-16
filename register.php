<?php 
session_start();
include("db.php");
include_once("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LNU Shop</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body> 
   <div id="top">
       <div class="container">
           <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-primary">
                   <?php
                   if(!isset($_SESSION['customer_email'])){
                       echo "Welcome: Guest";
                   }else{
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                   }
                   ?>
               </a>
               <a href="checkout.php" style="color:white"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
           </div>
           <div class="col-md-6">
               
               <ul class="menu">
                   
                   <li>
                       <a href="cart.php">Check Cart</a>
                   </li>
                   <li>
                       <a href="checkout.php">Account</a>
                   </li>
                   <li>
                     <a href="checkout.php">
                     <?php
                     if(!isset($_SESSION['customer_email'])){
                          echo "<a href='checkout.php'> Login </a>";
                         }else{
                          echo " <a href='logout.php'> Log Out </a> ";
                         }
                     ?>
                     </a>
                   </li>
                   <li  class="active">
                       <a href="register.php">Register</a>
                   </li> 
               </ul>
           </div>
       </div>
   </div>
   <div id="navbar" class="navbar navbar-default">
       <div class="container">
           <div class="navbar-header">
               <a href="index.php" class="navbar-brand home">
                   <img src="images/Webshop-logo.png" alt="Webshop Logo" class="hidden-xs">
                   <img src="images/Webshop-logo-mobile.png" alt="Webshop Logo Mobile" class="visible-xs"> 
               </a>
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i> 
               </button> 
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search"> 
                   <span class="sr-only">Toggle Search</span> 
                   <i class="fa fa-search"></i> 
               </button> 
           </div>
           
           <div class="navbar-collapse collapse" id="navigation">
               <div class="padding-nav">
                   <ul class="nav navbar-nav left">
                       <li>
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="contact.php">Contacts</a>
                       </li>
                        <li>
                          <?php
                           if(!isset($_SESSION['customer_email'])){
                               echo"<a href='checkout.php'>My Account</a>";
                           }else{
                              echo"<a href='customer/account.php?orders'>My Account</a>";
                           }
                           ?>
                       </li> 
                   </ul>
               </div>
               <a href="cart.php" class="btn navbar-btn btn-primary right">
                   <i class="fa fa-shopping-cart"></i> 
                   <span><?php items(); ?> Items in cart </span> 
               </a> 
               <div class="navbar-collapse collapse right">
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                       <span class="sr-only">Toggle Search</span> 
                       <i class="fa fa-search"></i> 
                   </button>
               </div>
               
               <div class="collapse clearfix" id="search">
                   <form method="get" action="results.php" class="navbar-form">
                       <div class="input-group">
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required> 
                           <span class="input-group-btn"> 
                           <button type="submit" name="search" value="Search" class="btn btn-primary">
                               <i class="fa fa-search"></i> 
                           </button>
                           </span> 
                       </div>
                   </form>   
               </div>
           </div>
       </div>
       
   </div>
   
   <div id="content">
       <div class="container">
           <div class="col-md-12">
               <!--<ul class="breadcrumb">
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul>  -->
               
           </div>
           <div class="col-md-3">
        <?php  
        include("sidebar.php");
        ?>
           </div>
           <div class="col-md-9">
               <div class="box">
                   <div class="box-header1">
                       <center>
                           <h2>Create an account</h2>
                       </center>
                       <form action="register.php" method="post" enctype="multipart/form-data">
                           <div class="form-group">
                               <label>Name</label> 
                               <input type="text" class="form-control" name="c_name" required> 
                           </div>
                           <div class="form-group">
                               <label>Phone</label> 
                               <input type="text" class="form-control" name="c_phone" required> 
                           </div>
                           <div class="form-group">
                               <label>Email</label> 
                               <input type="text" class="form-control" name="c_email" required> 
                           </div>
                           <div class="form-group">
                               <label>Address</label> 
                               <input type="text" class="form-control" name="c_address" required> 
                           </div>
                           <div class="form-group">
                               <label>City</label> 
                               <input type="text" class="form-control" name="c_city" required> 
                           </div>
                           <div class="form-group">
                               <label>Country</label> 
                               <input type="text" class="form-control" name="c_country" required> 
                           </div>
                           <div class="form-group">
                               <label>Password</label> 
                               <input type="password" class="form-control" name="c_password" required> 
                           </div>
                           <div class="text-center"> 
                               <button type="submit" name="register_user" class="btn btn-primary"> 
                               <i class="fa fa-user-md"></i> Send Form 
                               </button> 
                           </div> 
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div> 
   <?php
    include("footer.php");
    ?> 
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>    
</body>
</html>


<?php 

if(isset($_POST['register_user'])){
    $c_name = $_POST['c_name'];
    $c_phone = $_POST['c_phone'];
    $c_email = $_POST['c_email'];
    $c_address = $_POST['c_address'];
    $c_city = $_POST['c_city'];
    $c_country = $_POST['c_country'];
    $c_password = $_POST['c_password'];
    $c_ip = getIpFunc();
    $insert_customer = "insert into customers (customer_name,customer_phone,customer_email,customer_address,customer_city,customer_country,customer_pass,customer_ip) values ('$c_name','$c_phone','$c_email','$c_address','$c_city','$c_country','$c_password','$c_ip')";
    $run_customer = mysqli_query($con,$insert_customer);
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    $run_cart = mysqli_query($con,$sel_cart);
    $check_cart = mysqli_num_rows($run_cart);
    if($check_cart>0){
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('Account was created')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }else{
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('Account was created')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } 
}
?>