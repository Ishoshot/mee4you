<?php 
	require_once 'core/init.php';
 ?>


<!DOCTYPE html>
<html>
<head>
<title>Official SendMe Website</title>

<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //for bootstrap working -->

<style type="text/css" media="screen">
	.new{
		color:red;
		background-color:#fff;
	}	
</style>

<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>


<!-- HEADER -->

<div class="header" id="home">
	<div class="container">
		<ul class="row">
		    <li class="col-md-3">
		    	<a href="#" data-toggle="modal" data-target="#myModal">
		    	<i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a>
		    </li>

			<li class="col-md-3">
				<a href="#" data-toggle="modal" data-target="#myModal2">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a>
			</li>
			
			<li class="col-md-3">
				<i class="fa fa-phone" aria-hidden="true"></i> Call : +234 811 806 0583
			</li>
			
			<li class="col-md-3">
				<i class="fa fa-envelope-o" aria-hidden="true"></i> 
				<a href="mailto:sendmee4u@gmail.com">sendmee4u@gmail.com</a>
			</li>
		
		</ul>
	</div>
</div>
<!-- HEADER -->



<!-- HEADER-BOT -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle" style="display:inline-flex;">
			<div class="">
				<img src="images/logo.png" class="" style="width:80px; height:auto;" alt="">
			</div>
			<div class="" style="margin-top:4%;">
				<form action="#" method="post" style="display:inline-flex;">
					<input type="search" name="search" class="form-control" placeholder="Search here..." required="">
					<!-- <button class="btn btn-primary">Search</button> -->
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
		<!-- header-bot -->

		<div class="col-md-4 logo_agile">
			<h1><a href="index.php">
				<span>S</span>end Me 
				<!-- <i class="fa fa-blind top_logo_agile_bag" aria-hidden="true"></i> -->
				</a>
			</h1>
		</div>
        
		<div class="col-md-4 agileits-social top_content">
			<ul class="social-nav model-3d-0 footer-social w3_agile_social">
				<li class="share">Follow On : </li>

				<li>
					<a href="#" class="facebook">
					<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="twitter"> 
					<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="instagram">
					<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="pinterest">
					<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a>
				</li>
			</ul>
		</div>

		<div class="clearfix"></div>

	</div>

</div>
<!-- HEADER-BOT -->



<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  	<ul class="nav navbar-nav menu__list">

						<li class="menu__item menu__item--current">
							<a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>

						<li class="menu__item">
							<a class="menu__link" href="about.php">About</a>
						</li>

						<li class="menu__item">
							<a class="menu__link" href="contact.php">Contact</a>
						</li>

						<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Send Me <sup style="font-size:9px;">TM</sup><span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.php">Grocery Shopping</a></li>
											<li><a href="womens.php">Mail delivery</a></li>
											<li><a href="womens.php">Pet Care</a></li>
											<li><a href="womens.php">School Run</a></li>
											<li><a href="womens.php">Gift Shopping || Wraping</a></li>
										</ul>
									</div>

									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.php">Meal Purchase</a></li>
											<li><a href="womens.php">Packing || Unpacking</a></li>
											<li><a href="womens.php">Buying Medications</a></li>
											<li><a href="womens.php">Bill Payments</a></li>
											<li><a href="womens.php">Office Supplies</a></li>
											<li><a href="womens.php">Others ...</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.php"><img src="images/catch02.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>

						<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Janitorial Services <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.php"><img src="images/catch01.jpeg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><b><a href="mens.php">INDOOR</a></b></li>
											<li><a href="mens.php">General Dusting</a></li>
											<li><a href="mens.php">Sweeping || Mopping</a></li>
											<li><a href="mens.php">Vacuuming</a></li>
											<li><a href="mens.php">Laundry</a></li>
											<li><a href="mens.php">Bathroom Cleaning</a></li>
											<li><a href="mens.php">Preparing Meals</a></li>
										</ul>
									</div>
									
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><b><a href="mens.php">OUTDOOR</a></b></li>
											<li><a href="mens.php">Garden Cleaning</a></li>
											<li><a href="mens.php">Car Washing</a></li>
											<li><a href="mens.php">Compound Cleaning</a></li>
											<li><a href="mens.php">Pool Cleaning</a></li>
											<li><a href="mens.php">Warehouse Cleaning</a></li>
											<li><a href="mens.php">Office Cleaning</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>

						<li class="active menu__item">
							<a class="menu__link" href="#foodcatalogue">Food Order <span class="badge new">new</span></a>
						</li>

						<li class="menu__item">
							<a class="menu__link" href="contact.php">Privacy Policy</a>
						</li>

				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->

<?php 
	require 'signin.php';
	require 'signup.php';
 ?>


<!-- SLIDER -->

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		
		<div class="carousel-inner" role="listbox">
		
			<div class="item active"> 
				<div class="opacity">
					<div class="container">
						<div class="carousel-caption">
							<h3><span>BUSY</span> OR <span>TIRED</span> ?</h3>
							<p>Relax, We'll take Care of it !</p>
							<a class="hvr-outline-out button2" href="mens.php">Send Me </a>
						</div>
					</div>
				</div>
			</div>

			<div class="item item2"> 
				<div class="opacity">
					<div class="container">
						<div class="carousel-caption">
							<h3><span>SPOTLESS</span> CLEANING <span>?</span></h3>
							<p>Lose the Mop and We'll clean the slop !</p>
							<a class="hvr-outline-out button2" href="mens.php">Call Me </a>
						</div>
					</div>
				</div>
			</div>

			<div class="item item3"> 
				<div class="opacity">
					<div class="container">
						<div class="carousel-caption">
							<h3><span>ARE YOU </span> HUNGRY ?</h3>
							<p>We speak the good food language !</p>
							<a class="hvr-outline-out button2" href="mens.php">Order Now </a>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		
   
    </div> 

<!-- SLIDER ENDS -->




<!-- EYE CATCHING INFO -->

    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
					<figure class="effect-roxy">
						<img src="images/catch01.jpeg" alt=" " class="img-responsive" />
						<figcaption>
							<h3><span>INTERIOR </span></h3>
							<p>Send Me Offers for adequate Interior Cleaning Service.</p>
							<p>Feel Free to Call Us!</p>
						</figcaption>
					</figure>
				</div>

				<div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
					<figure class="effect-roxy">
						<img src="images/catch04.jpeg" alt=" " class="img-responsive" />
						<figcaption>
							<h3><span>EXTERIOR</span></h3>
							<p>Send Me Offers for adequate Exterior Cleaning Service.</p>
							<p>Feel Free to Call Us!</p>
						</figcaption>			
					</figure>
				</div>
				<div class="clearfix"></div>
		    </div> 
		</div> 
    </div>

    
<!-- EYE CATCHING INFO -->
	



<!-- OFFERS -->

	<div class="sale-w3ls">
		<div class="container">
			<h6>Beyond the boundaries of taste</h6>
			<p style="color:#fff; font-size:1.5em;font-variant:small-caps;" class="blink">You can't stop at One !!!</p>
			<a class="hvr-outline-out button2" href="#foodcatalogue"> Send Me </a>
		</div>
	</div>

<!-- OFFERS -->




<!-- FOOD CATALOGUE -->


<div class="" style="margin-top:5%;" id="foodcatalogue">
							
	<div class="col-md-3 product-men">
		<div class="men-pro-item simpleCart_shelfItem">
			<div class="men-thumb-item">
				<img src="images/amala.jpg" alt="" class="pro-image-front">
				<img src="images/amala.jpg" alt="" class="pro-image-back">
				<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
						<a href="single.php" class="link-product-add-cart">Quick View</a>
					</div>
				</div>
				<span class="product-new-top">New</span>
			</div>

			<div class="item-info-product ">
				<h4><a href="single.php">Amala and Ewedu</a></h4>
				<div class="info-product-price">
					<span class="item_price">&#8358; 700</span>
					<del>&#8358; 850</del>
				</div>
				<a class="hvr-outline-out button2 btn" style="color:#fff;" href="#"> Order Now </a>
			</div>
			
		</div>
	</div>


	<div class="col-md-3 product-men">
		<div class="men-pro-item simpleCart_shelfItem">
			<div class="men-thumb-item">
				<img src="images/ebaEgusi.jpg" alt="" class="pro-image-front">
				<img src="images/ebaEgusi.jpg" alt="" class="pro-image-back">
				<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
						<a href="single.php" class="link-product-add-cart">Quick View</a>
					</div>
				</div>
				<span class="product-new-top">New</span>
			</div>

			<div class="item-info-product ">
				<h4><a href="single.php">Eba and Egusi soup</a></h4>
				<div class="info-product-price">
					<span class="item_price">&#8358; 700</span>
					<del>&#8358; 900</del>
				</div>
				<a class="hvr-outline-out button2 btn" style="color:#fff;" href="#"> Order Now </a>
			</div>
			
		</div>
	</div>


	<div class="col-md-3 product-men">
		<div class="men-pro-item simpleCart_shelfItem">
			<div class="men-thumb-item">
				<img src="images/ofada.jpg" alt="" class="pro-image-front">
				<img src="images/ofada.jpg" alt="" class="pro-image-back">
				<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
						<a href="single.php" class="link-product-add-cart">Quick View</a>
					</div>
				</div>
				<span class="product-new-top">New</span>
			</div>

			<div class="item-info-product ">
				<h4><a href="single.php">Ofada Rice</a></h4>
				<div class="info-product-price">
					<span class="item_price">&#8358; 500</span>
					<del>&#8358; 700</del>
				</div>
				<a class="hvr-outline-out button2 btn" style="color:#fff;" href="#"> Order Now </a>
			</div>
			
		</div>
	</div>


	<div class="col-md-3 product-men">
		<div class="men-pro-item simpleCart_shelfItem">
			<div class="men-thumb-item">
				<img src="images/indomie.jpg" alt="" class="pro-image-front">
				<img src="images/indomie.jpg" alt="" class="pro-image-back">
				<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
						<a href="single.php" class="link-product-add-cart">Quick View</a>
					</div>
				</div>
				<span class="product-new-top">New</span>
			</div>

			<div class="item-info-product ">
				<h4><a href="single.php">Indomie and Egg</a></h4>
				<div class="info-product-price">
					<span class="item_price">&#8358; 550</span>
					<del>&#8358; 750</del>
				</div>
				<a class="hvr-outline-out button2 btn" style="color:#fff;" href="#"> Order Now </a>
			</div>
			
		</div>
	</div>
	
	
	<div class="clearfix"></div>

</div>




<!-- FOOD CATALOGUE -->





<!-- COUPON -->

<div class="coupons" style="margin-top:5%;">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>RELIABILITY</h3>
						<p>We bring to you quality services at your convenience.</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>We ensure our customers get 24/7 support.</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>We provide Return Policy for <b>some</b> of our services.</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT </h3>
						<p>We provide gift annually of our Best Customer. </p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>

<!-- COUPON -->




<!-- FOOTER -->

<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php"><span>S</span> end Me</a></h2>
			<p>Is a service providing company that covers your errands and chores.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
				<li><a href="#" class="facebook">
					  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
				<li><a href="#" class="twitter"> 
					  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
					  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
				<li><a href="#" class="instagram">
					  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
					  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
				<li><a href="#" class="pinterest">
					  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
					  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
			</ul>
		</div>
		

		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Services</span> </h4>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="mens.php">About</a></li>
						<li><a href="womens.php">Contact</a></li>
						<li><a href="about.php">Send Me <sup style="font-size:9px;">TM</sup></a></li>
						<li><a href="typography.php">Janitorial Services</a></li>
						<li><a href="contact.php">Food Order <span class="badge new">new</span></a></li>
						<li><a href="contact.php">Privacy Policy</a></li>
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4>Office <span>Information</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+234 811 806 0583</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:sendmee4u@gmail.com"> sendmee4u@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>God First Complex Isolo Egbe Road, Jakande Bus stop, Oshodi-Isolo, Lagos.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd flickr-post">
					<h4><span>MEET</span> OUR TEAM</h4>
					<ul>
						<li>
							<a href="images/jonathan.jpg">
								<img src="images/jonathan.jpg" alt="" class="img-responsive" />
							</a>
						</li>
						<li>
							<a href="images/jonathan.jpg">
								<img src="images/ronny.jpg" alt="" class="img-responsive" />
							</a>
						</li>
						<li>
							<a href="images/jonathan.jpg">
								<img src="images/jonathan.jpg" alt="" class="img-responsive" />
							</a>
						</li>
						<li>
							<a href="images/jonathan.jpg">
								<img src="images/jonathan.jpg" alt="" class="img-responsive" />
							</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<hr>	
		<p class="copy-right">&copy 2019 SendMe. All rights reserved</p>
	</div>
</div>

<!-- FOOTER -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 

	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>

<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>

<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
