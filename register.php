<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:19:41 GMT -->
<head>
        <title>Wine Maker</title>
        
        <!-- meta -->
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        
        <!-- css -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="src/css/font-awesome.css" rel="stylesheet">
        <link href="src/css/animate.css" rel="stylesheet">
        <link href="src/css/swipebox.css" rel="stylesheet">
        <link href="src/css/swiper.min.css" rel="stylesheet">
        <link href="src/css/winemaker-theme.css" rel="stylesheet">
        
        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
		<!-- head js -->
        <script src="src/js/modernizr-2.6.2.min.js"></script>
    </head>
    
    <body>
    
    	<aside id="side-nav">
    	
    		<div>

				<form class="form-inline">
					<div class="form-group has-feedback">
						<label for="search-field">Search site</label>
						<input id="search-field" type="text" class="form-control" placeholder="Search...">
						<button id="search-btn" type="submit" class="btn"><span class="fa fa-search"></span></button>
					</div>
				</form>

				<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">About</li>
					<li class="list-group-item style-1"><a href="register.php">Register</a></li>
					<li class="list-group-item style-1"><a href="login.php">Login</a></li>
					<li class="list-group-item style-1"><a href="contact.php">Contact</a></li>
					<li class="list-group-item style-1"><a href="faq.php">FAQ</a></li>
				</ul>    	
		        
				<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">Social</li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-facebook-square"></span> Facebook</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-twitter-square"></span> Twitter</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-google-plus-square"></span> Google Plus</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-pinterest-square"></span> Pinterest</a></li>
				</ul>
				
    		</div>

    	</aside><!-- /#side-nav  -->
    	
        <div class="container-fluid" id="main-container">
            <div class="row" id="main-row">
            
			<?php include("includes/header.php") ?>

                <div class="container-fluid bg-cover" style="background-image:url(images/gallery-1.jpg)">
                    <div class="row">
	                                        
	                    <section id="register" class="clearfix os-animation" data-os-animation="fadeIn">
	                    
		                    <div class="col-sm-6 col-sm-offset-3">
		                    	<div class="form-box">
								<form>
									<h2 class="text-center">Register</h2>
								  <div class="form-group">
								    <label for="reg-fname">First Name</label>
								    <input type="text" class="form-control" id="reg-fname" placeholder="First Name">
								  </div>
								  <div class="form-group">
								    <label for="reg-lname">Last name</label>
								    <input type="text" class="form-control" id="reg-lname" placeholder="Last name">
								  </div>
								  <div class="form-group">
								    <label for="reg-email">Email address</label>
								    <input type="email" class="form-control" id="reg-email" placeholder="Email">
								  </div>
								  <div class="form-group">
								    <label for="reg-pass">Password</label>
								    <input type="password" class="form-control" id="reg-pass" placeholder="Password">
								  </div>
								  <div class="form-group">
								    <label for="reg-pass-conf">Confirm Password</label>
								    <input type="password" class="form-control" id="reg-pass-conf" placeholder="Password">
								  </div>
								  <div class="checkbox">
								  </div>
								  <button type="submit" class="btn btn-primary btn-lg btn-style-1 center-block">Register</button>
								</form>
								<div class="form-box-msg text-center">
								  You already have an account? <a href="login.php">Sign in here</a>
								</div>
		                    	</div>	
									                  
		                    </div>
	                    </section>

                    </div>
                </div>

				<?php include("includes/footer.php") ?>

            </div>
            <!-- /#main-row -->
        </div>
        <!-- /#main-container -->
        
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.swipebox.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.stellar.js"></script>
        <script type="text/javascript" src="src/js/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="src/js/sticky.js"></script>
        <script type="text/javascript" src="src/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="src/js/winemaker-theme.js"></script>
        
	</body>

<!-- Mirrored from www.directdesign.it/demos/chateau/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:19:42 GMT -->
</html>