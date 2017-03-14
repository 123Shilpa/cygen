<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Health Care</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Health Care, health" />
<meta name="description" content="Health Care HTML Template" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/main.css" media="screen"/>
<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
<link rel="stylesheet" href="css/simpleMobileMenu.css" media="screen"/>

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
 <!-- <link rel="stylesheet" href="https://resources/demos/style.css">--->

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" type="application/javascript"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/additional-methods.min.js"></script>
	  <script>
	$(document).ready(function(e) {
		$("#datepicker").datepicker({
				 minDate: 0, maxDate: "+1M +10D" 
		 });  
		 
		 
		 	$('a[href^="#"]').on('click', function(event) {

    var target = $(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});
		 
		   
	});
	
	
	
	
	

  </script>
   

	

<link rel="icon" href="images/fav.png" sizes="16x16" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
<!--<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
<nav class="social">

<ul>
          <li><a href="http://facebook.com" target="_blank"> <i class="fa fa-facebook"></i>  Facebook  </a></li>
          <li><a href="http://twitter.com" target="_blank"> <i class="fa fa-twitter"></i>  Twitter  </a></li>
          <li><a href="https://www.linkedin.com" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i>  LinkedIn </a></li>
          <li><a href="https://plus.google.com/" target="_blank">  <i class="fa fa-google-plus" aria-hidden="true"></i>  Google+ </a></li>  
</ul>

</nav>

<style>


</style>
</head>
<body>

  <?php include('login_signup.php'); ?>

<!--header start-->
<header id="hs_header">
  <div class="container">
    <div class="">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 pd0 text-center">
     <div style="width: 300px; margin: 0px auto;">
			<div class="navigation">
			<nav>
<div class="navwrp"><a href="javascript:void(0)" class="smobitrigger ion-navicon-round inrwrpr"><i class="fa fa-bars" aria-hidden="true"></i></a><ul style="z-index: 9999; background-color: rgb(1, 123, 139); transition: all 0.5s ease 0s;" class="mobimenu inrwrpr"><a style="color: rgb(255, 255, 255);" href="javascript:void(0)" class="mnuclose ion-close-round"><i class="fa fa-times" aria-hidden="true"></i></a>

                    <li><a href="index.php">Home</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Health Packages</a></li>
					<li><a href="#">Health Insurance </a></li>
					<li><a href="#">Health Community </a></li>
					<li><a href="healthmall.php">E-Health Mall</a></li>
					<li><a href="http://www.cygengroup.com/newsfeeds/">Newsfeeds</a></li>
                    <li><a href="#">Social Responsibility</a></li>
					<li><a href="#">Careers</a></li>
                    <li><a href="#">Help</a></li>
				    <li><a href="#">FAQs</a></li>
					<li><a href="terms.php">Terms & Conditions </a></li>
                    <!--<li><a href="#">Change a password </a></li>
				    <li><a href="#">Logout</a></li>--->
				</ul></div>
			</nav>
		</div>
     <a href="index.php"><img alt="" src="img/logo.gif" style="padding: 5px;" class="logo01"></a>
        </div>
        
    </div>
    
    <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12 head-lft">
        
        <div class="head-top">
        <div> 
		<ul>
		<?php if(isset($_SESSION['FullName'])){?>
		<li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#"  > Hi <?php echo $_SESSION['FullName'];?> </a>
            <ul style="padding:10px 0px;min-width: 200px;left: 0 !important;" class="dropdown-menu">
                <li> <a id="" href="profile.php" class=""><i class="fa fa-user"></i> User Profile </a> </li>
				 <li> <a id="" href="logout.php"  class=""> <span class="text-uppercase"><i class="fa fa-unlock"></i> Logout</span></a> </li>
              </ul>
          </li>
		<li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="glyphicon glyphicon-search"></i></a>
            <ul style="padding:12px;" class="dropdown-menu">
                <form class="form-inline">
     				<button class="btn btn-default pull-right" type="submit"><i class="glyphicon glyphicon-search"></i></button><input type="text" placeholder="Search" class="form-control pull-left">
                </form>
              </ul>
          </li>
		  <li> <i class="fa fa-shopping-cart"></i> </li>
		 

		<?php }else{?>
		
        <li> <a data-toggle="modal" data-target="#myModal" style="cursor:pointer;"> Login / Signup </a> </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="glyphicon glyphicon-search"></i></a>
            <ul style="padding:12px;" class="dropdown-menu">
                <form class="form-inline">
     				<button class="btn btn-default pull-right" type="submit"><i class="glyphicon glyphicon-search"></i></button><input type="text" placeholder="Search" class="form-control pull-left">
                </form>
              </ul>
          </li>
  <li> <i class="fa fa-shopping-cart"></i> </li>
  <div class="clearfix"></div>
  <?php }?> 
        </ul></div> 
       
        </div>
        
        <div>
          <button type="button" class="hs_nav_toggle navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu<i class="fa fa-bars"></i></button>
          <nav>
            <ul class="hs_menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <li><a href="about.php">ABOUT US</a></li>
              <li><a href="#services">SERVICES</a></li>
              <li><a href="blog.php">BLOG</a></li>
              <li><a href="contact.php">CONTACT US</a></li>
              <li><a href="partner.php">PARTNER WITH US</a></li>
            </ul>
          </nav>
          </div>
        </div>
    <!-- .row --> 
  </div>
  <!-- .container --> 
  
</header>
<!--header end-->