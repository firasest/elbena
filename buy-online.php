<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/buy-online.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:22:56 GMT -->
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

				<!-- .page-header -->
				<div class="page-header" style="background-image:url(images/title-1.jpg)" data-stellar-background-ratio="0.2">
			        <div class="container">
			            <div class="row">
			            	<div class="col-sm-12">
								<ol class="breadcrumb">
								  <li><a href="index-2.php">Home</a></li>
								  <li class="active">Shop</li>
								</ol>
							  <h1>Buy wines & foods</h1>
			            	</div>
						</div>    
		            </div>
		        </div>
				<!-- /.page-header -->

				<nav id="filter-nav-bar" class="navbar navbar-default">
				  <div class="container">
				  
					<!-- Sort by -->
					<div class="pull-left btn-group">
					  <button type="button" class="btn btn-default dropdown-toggle btn-filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    All Products <span class="fa fa-angle-down carat"></span>
					  </button>
					  <ul class="dropdown-menu">
					  	<li class="dropdown-header">Filter by type</li>
					    <li><a href="#">All Products</a></li>
					    <li><a href="#">Red Wines</a></li>
					    <li><a href="#">White Wines</a></li>
					    <li><a href="#">Rosé Wines</a></li>
					    <li><a href="#">Food Specialties</a></li>
					  </ul>
					</div>
									  
					<!-- Price range -->
					<div class="pull-left btn-group">
					  <button type="button" class="btn btn-default dropdown-toggle btn-filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    $20 - $29 <span class="fa fa-angle-down carat"></span>
					  </button>
					  <ul class="dropdown-menu">
					  	<li class="dropdown-header">Filter by price</li>
					    <li><a href="#">Up to $19</a></li>
					    <li><a href="#">$20 - $29</a></li>
					    <li><a href="#">$30 - $39</a></li>
					  </ul>
					</div>
					
					
					<div id="view-option" class="pull-right btn-group navbar-icons hidden-xs" role="group">
					  <button data-view="col-sm-6" type="button" class="btn btn-default"><span class="fa fa-th-large"></span></button>
					  <button data-view="col-sm-4" type="button" class="btn btn-default active"><span class="fa fa-th"></span></button>
					  <button data-view="col-sm-8 col-sm-offset-2 list-view" type="button" class="btn btn-default"><span class="fa fa-th-list"></span></button>
					</div>					
									  
				  </div>
				</nav>

				<div id="product-gallery">
					<div class="container">
						<div class="row">

							<div class="shop-item col-sm-6 col-lg-4">
								<article>
									<figure class="red-wines">
										<a href="product-sheet.php"><img class="img-responsive" src="images/red-wine-5.png" alt="chateau" width="300" height="600"></a>
										<a href="cart.php" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.php">Pinot Noir</a></h3>
									<h4 class="red-wines-text">Dry red wine</h4>
									<h5 class="price">$29.95</h5>
									</div>
								</article>
							</div>
							
							<div class="shop-item col-sm-6 col-lg-4">
								<article>
									<figure class="white-wines">
										<a href="product-sheet.php"><img class="img-responsive" src="images/white-wine-5.png" alt="chateau" width="300" height="600"></a>
										<a href="cart.php" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.php">Chardonnay</a></h3>
									<h4 class="white-wines-text">Dry white wine</h4>
									<h5 class="price">$29.95</h5>
									</div>
								</article>
							</div>
							
							<div class="shop-item col-sm-6 col-lg-4">
								<article>
									<figure class="rose-wines">
										<a href="product-sheet.php"><img class="img-responsive" src="images/rose-wine-5.png" alt="chateau" width="300" height="600"></a>
										<a href="cart.php" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.php">Bordeaux</a></h3>
									<h4 class="rose-wines-text">Dry rose wine</h4>
									<h5 class="price">$29.95</h5>
									</div>
								</article>
							</div>
							
							<div class="shop-item col-sm-6 col-lg-4">
								<article>
									<figure class="rose-wines">
										<a href="product-sheet.php"><img class="img-responsive" src="images/rose-wine-2.png" alt="chateau" width="300" height="600"></a>
										<a href="cart.php" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.php">Zinfandel</a></h3>
									<h4 class="rose-wines-text">Dry rose wine</h4>
									<h5 class="price">$29.95</h5>
									</div>
								</article>
							</div>
							
							<div class="shop-item col-sm-6 col-lg-4">
								<article>
									<figure class="red-wines">
										<a href="product-sheet.php"><img class="img-responsive" src="images/red-wine-2.png" alt="chateau" width="300" height="600"></a>
										<a href="cart.php" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.php">Pinot Gris</a></h3>
									<h4 class="red-wines-text">Dry red wine</h4>
									<h5 class="price">$29.95</h5>
									</div>
								</article>
							</div>
							
							<div class="shop-item col-sm-6 col-lg-4">
								<article>
									<figure class="white-wines">
										<a href="product-sheet.php"><img class="img-responsive" src="images/white-wine-2.png" alt="chateau" width="300" height="600"></a>
										<a href="cart.php" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.php">Sirah</a></h3>
									<h4 class="white-wines-text">Dry white wine</h4>
									<h5 class="price">$29.95</h5>
									</div>
								</article>
							</div>
							
							<nav class="text-center">
							  <ul class="pagination-product pagination">
							    <li>
							      <a href="#" aria-label="Previous">
							        <span aria-hidden="true" class="fa fa-angle-left"></span>
							      </a>
							    </li>
							    <li class="active"><a href="#">1</a></li>
							    <li><a href="#">2</a></li>
							    <li><a href="#">3</a></li>
							    <li><a href="#">4</a></li>
							    <li><a href="#">5</a></li>
							    <li>
							      <a href="#" aria-label="Next">
							        <span aria-hidden="true" class="fa fa-angle-right"></span>
							      </a>
							    </li>
							  </ul>
							</nav>		
												
						</div>
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

<!-- Mirrored from www.directdesign.it/demos/chateau/buy-online.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:22:56 GMT -->
</html>