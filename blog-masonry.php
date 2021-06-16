<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/blog-masonry.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:22:30 GMT -->
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
					<li class="list-group-item style-1"><a href="register.html">Register</a></li>
					<li class="list-group-item style-1"><a href="login.html">Login</a></li>
					<li class="list-group-item style-1"><a href="contact.html">Contact</a></li>
					<li class="list-group-item style-1"><a href="faq.html">FAQ</a></li>
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
				<div class="page-header" data-stellar-background-ratio="0.2" style="background-image:url(images/title-9.jpg)">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<ol class="breadcrumb">
									<li>
										<a href="index-2.php">Home</a>
									</li>
									<li class="active">Blog
									</li>
								</ol>
								<h1>
									Masonry News
								</h1>
							</div>
						</div>
					</div>
				</div>
				<!-- /.page-header -->

				<!-- #secondary-nav-bar -->
				<nav id="secondary-nav-bar" class="navbar navbar-default">
				  <div class="container">
				    <ul id="secondary-nav" class="nav navbar-nav blog-filters">
	                    <li class="active"><a data-filter="*">All Entries</a></li>
	                    <li><a data-filter=".cat-news">News</a></li>
	                    <li><a data-filter=".cat-events">Events</a></li>
	                    <li><a data-filter=".cat-visits">Visits</a></li>
	                    <li><a data-filter=".cat-reviews">Reviews</a></li>
	                    <li><a data-filter=".cat-tastings">Tastings</a></li>
				    </ul>
				  </div>
				</nav>
				<!-- /#secondary-nav-bar -->

				<section class="section-bg-light-gray" id="blog-masonry">
					<div class="container-fluid">
						<div class="flag">
							<span class="fa fa-newspaper-o"></span>
						</div>
				
						<div class="row">
							<div class="blog-grid">
								<div class="blog-gutter-sizer"></div>
				
								<div class="blog-grid-sizer"></div>
				
								<div class="blog-grid-entry cat-news cat-visits cat-tastings">
									<article class="entry">
										<figure class="box-1">
											<a href="blog-entry.php"><img alt="chateau" class="img-responsive" src="images/blog-400x400.jpg"></a> <a class="icn-appear fa fa-ellipsis-h" href="blog-entry.php"></a>
										</figure>
				
										<div class="entry-preview clearfix">
											<div class="entry-date">
												<span class="fa fa-calendar"></span> <span class="entry-day">21</span> <span class="entry-month">jul</span> <span class="entry-year">2015</span>
											</div><span class="entry-category">news / visits / tastings</span>
				
											<h2><a href="#">Lorem ipsum dolor sit amet consectetur</a></h2>
				
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. <a class="primary" href="blog-entry.php">Read more</a></p>
										</div>
									</article>
								</div>
								
								<!-- .blog-grid-entry -->
								<div class="blog-grid-entry cat-events cat-visits">
									<article class="entry">
										<figure class="box-1">
											<a href="blog-entry.php"><img alt="chateau" class="img-responsive" src="images/blog-400x300.jpg"></a> <a class="icn-appear fa fa-ellipsis-h" href="blog-entry.php"></a>
										</figure>
				
										<div class="entry-preview clearfix">
											<div class="entry-date">
												<span class="fa fa-calendar"></span> <span class="entry-day">21</span> <span class="entry-month">jul</span> <span class="entry-year">2015</span>
											</div><span class="entry-category">events / visits</span>
				
											<h2><a href="#">Lorem ipsum dolor sit amet consectetur</a></h2>
				
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. <a class="primary" href="blog-entry.php">Read more</a></p>
										</div>
									</article>
								</div>
								<!-- ./blog-grid-entry -->
				
								<!-- .blog-grid-entry -->
								<div class="blog-grid-entry cat-events cat-tastings">
									<article class="entry">
										<figure class="box-1">
											<a href="blog-entry.php"><img alt="chateau" class="img-responsive" src="images/blog-400x500.jpg"></a> <a class="icn-appear fa fa-ellipsis-h" href="blog-entry.php"></a>
										</figure>
				
										<div class="entry-preview clearfix">
											<div class="entry-date">
												<span class="fa fa-calendar"></span> <span class="entry-day">21</span> <span class="entry-month">jul</span> <span class="entry-year">2015</span>
											</div><span class="entry-category">events / tastings</span>
				
											<h2><a href="#">Lorem ipsum dolor sit amet consectetur</a></h2>
				
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. <a class="primary" href="blog-entry.php">Read more</a></p>
										</div>
									</article>
								</div>
								<!-- ./blog-grid-entry -->
				
								<!-- .blog-grid-entry -->
								<div class="blog-grid-entry cat-news cat-tastings">
									<article class="entry">
										<figure class="box-1">
											<a href="blog-entry.php"><img alt="chateau" class="img-responsive" src="images/blog-400x500-3.jpg"></a> <a class="icn-appear fa fa-ellipsis-h" href="blog-entry.php"></a>
										</figure>
				
										<div class="entry-preview clearfix">
											<div class="entry-date">
												<span class="fa fa-calendar"></span> <span class="entry-day">21</span> <span class="entry-month">jul</span> <span class="entry-year">2015</span>
											</div><span class="entry-category">news / tastings</span>
				
											<h2><a href="#">Lorem ipsum dolor sit amet consectetur</a></h2>
				
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. <a class="primary" href="blog-entry.php">Read more</a></p>
										</div>
									</article>
								</div>
								<!-- ./blog-grid-entry -->
				
								<!-- .blog-grid-entry -->
								<div class="blog-grid-entry cat-reviews cat-visits">
									<article class="entry">
										<figure class="box-1">
											<a href="blog-entry.php"><img alt="chateau" class="img-responsive" src="images/blog-400x200.jpg"></a> <a class="icn-appear fa fa-ellipsis-h" href="blog-entry.php"></a>
										</figure>
				
										<div class="entry-preview clearfix">
											<div class="entry-date">
												<span class="fa fa-calendar"></span> <span class="entry-day">21</span> <span class="entry-month">jul</span> <span class="entry-year">2015</span>
											</div><span class="entry-category">reviews / visits</span>
				
											<h2><a href="#">Lorem ipsum dolor sit amet consectetur</a></h2>
				
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. <a class="primary" href="blog-entry.php">Read more</a></p>
										</div>
									</article>
								</div>
								<!-- ./blog-grid-entry -->
				
								<!-- .blog-grid-entry -->
								<div class="blog-grid-entry cat-reviews cat-events">
									<article class="entry">
										<figure class="box-1">
											<a href="blog-entry.php"><img alt="chateau" class="img-responsive" src="images/blog-400x200-2.jpg"></a> <a class="icn-appear fa fa-ellipsis-h" href="blog-entry.php"></a>
										</figure>
				
										<div class="entry-preview clearfix">
											<div class="entry-date">
												<span class="fa fa-calendar"></span> <span class="entry-day">21</span> <span class="entry-month">jul</span> <span class="entry-year">2015</span>
											</div><span class="entry-category">events / reviews</span>
				
											<h2><a href="#">Lorem ipsum dolor sit amet consectetur</a></h2>
				
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. <a class="primary" href="blog-entry.php">Read more</a></p>
										</div>
									</article>
								</div>
								<!-- ./blog-grid-entry -->
				
								<!-- .blog-grid-entry -->
								<div class="blog-grid-entry cat-news cat-reviews">
									<article class="entry">
										<figure class="box-1">
											<a href="blog-entry.php"><img alt="chateau" class="img-responsive" src="images/blog-400x500-2.jpg"></a> <a class="icn-appear fa fa-ellipsis-h" href="blog-entry.php"></a>
										</figure>
				
										<div class="entry-preview clearfix">
											<div class="entry-date">
												<span class="fa fa-calendar"></span> <span class="entry-day">21</span> <span class="entry-month">jul</span> <span class="entry-year">2015</span>
											</div><span class="entry-category">news / reviews</span>
				
											<h2><a href="#">Lorem ipsum dolor sit amet consectetur</a></h2>
				
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. <a class="primary" href="blog-entry.php">Read more</a></p>
										</div>
									</article>
								</div>
								<!-- ./blog-grid-entry -->
				
								<!-- .blog-grid-entry -->
								<div class="blog-grid-entry cat-reviews cat-visits cat-tastings">
									<article class="entry">
										<figure class="box-1">
											<a href="blog-entry.php"><img alt="chateau" class="img-responsive" src="images/blog-400x400-2.jpg"></a> <a class="icn-appear fa fa-ellipsis-h" href="blog-entry.php"></a>
										</figure>
				
										<div class="entry-preview clearfix">
											<div class="entry-date">
												<span class="fa fa-calendar"></span> <span class="entry-day">21</span> <span class="entry-month">jul</span> <span class="entry-year">2015</span>
											</div><span class="entry-category">reviews / visits / tastings</span>
				
											<h2><a href="#">Lorem ipsum dolor sit amet consectetur</a></h2>
				
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. <a class="primary" href="blog-entry.php">Read more</a></p>
										</div>
									</article>
								</div>
								<!-- ./blog-grid-entry -->
				
								<!-- .blog-grid-entry -->
								<div class="blog-grid-entry cat-news cat-events">
									<article class="entry">
										<figure class="box-1">
											<a href="blog-entry.php"><img alt="chateau" class="img-responsive" src="images/blog-400x300-2.jpg"></a> <a class="icn-appear fa fa-ellipsis-h" href="blog-entry.php"></a>
										</figure>
				
										<div class="entry-preview clearfix">
											<div class="entry-date">
												<span class="fa fa-calendar"></span> <span class="entry-day">21</span> <span class="entry-month">jul</span> <span class="entry-year">2015</span>
											</div><span class="entry-category">news / events</span>
				
											<h2><a href="#">Lorem ipsum dolor sit amet consectetur</a></h2>
				
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. <a class="primary" href="blog-entry.php">Read more</a></p>
										</div>
									</article>
								</div>
								<!-- ./blog-grid-entry -->
								
							</div>
							<!-- /.blog grid-->
							
							
							<nav class="text-center">
								<ul class="pagination-product pagination">
									<li>
										<a href="#"><span class="fa fa-angle-left"></span></a>
									</li>
				
									<li class="active">
										<a href="#">1</a>
									</li>
				
									<li>
										<a href="#">2</a>
									</li>
				
									<li>
										<a href="#">3</a>
									</li>
				
									<li>
										<a href="#">4</a>
									</li>
				
									<li>
										<a href="#">5</a>
									</li>
				
									<li>
										<a href="#"><span class="fa fa-angle-right"></span></a>
									</li>
								</ul>
							</nav>
							
						</div>
					</div>
				</section>	
							
				<footer>
					<div class="container">
						<div class="row">
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">Products
									</li>
									<li class="list-group-item style-1">
										<a href="products.php#filter=*">All Products</a>
									</li>
									<li class="list-group-item style-1">
										<a href="products.php#filter=.red-wines">Red Wines</a>
									</li>
									<li class="list-group-item style-1">
										<a href="products.php#filter=.white-wines">White Wines</a>
									</li>
									<li class="list-group-item style-1">
										<a href="products.php#filter=.rose-wines">Rosé Wines</a>
									</li>
									<li class="list-group-item style-1">
										<a href="products.php#filter=.food-specialties">Food Specialties</a>
									</li>
								</ul>
							</div>
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">About
									</li>
									<li class="list-group-item style-1">
										<a href="who-we-are.php">Who we are</a>
									</li>
									<li class="list-group-item style-1">
										<a href="our-history.php">Our History</a>
									</li>
									<li class="list-group-item style-1">
										<a href="the-vineyard.php">The Vineyard</a>
									</li>
									<li class="list-group-item style-1">
										<a href="gallery.php">Gallery</a>
									</li>
								</ul>
							</div>
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">Clients
									</li>
									<li class="list-group-item style-1">
										<a href="register.php">Register</a>
									</li>
									<li class="list-group-item style-1">
										<a href="login.php">Login</a>
									</li>
									<li class="list-group-item style-1">
										<a href="contact.php">Contact</a>
									</li>
									<li class="list-group-item style-1">
										<a href="faq.php">FAQ</a>
									</li>
								</ul>
							</div>
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">Services
									</li>
									<li class="list-group-item style-1">
										<a href="buy-online.php">Buy Online <span class="badge">New!</span></a>
									</li>
									<li class="list-group-item style-1">
										<a href="#">Blog</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4 pad-v text-center">
								<img alt="chateau" class="img-responsive" src="images/logo-1x.png">
							</div>
						</div>
					</div>
				</footer>
				
				<footer class="credits">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								Chateau Theme Design by <a href="http://www.directdesign.it/">Direct Design</a> / <a href="http://www.andreapilutti.com/">Andrea Pilutti</a>
							</div>
							<div class="col-sm-6 text-right social">
								<a href="#"><span class="fa fa-facebook-square"></span></a> <a href="#"><span class="fa fa-twitter-square"></span></a> <a href="#"><span class="fa fa-google-plus-square"></span></a> <a href="#"><span class="fa fa-pinterest-square"></span></a>
							</div>
						</div>
					</div>
				</footer>
			</div><!-- /#main-row -->
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
        
        <script>
        
		var $grid = $('.blog-grid');

		$(document).ready(function() {
        
		/* ISOTOPE */
		
			function getHashFilter() {
			  // get filter=filterName
			  var matches = location.hash.match( /filter=([^&]+)/i );
			  var hashFilter = matches && matches[1];
			  return hashFilter && decodeURIComponent( hashFilter );
			}
			
			// bind filter button click
			var $filterButtonGroup = $('.blog-filters');
			$filterButtonGroup.on( 'click', 'a', function() {
			var filterAttr = $( this ).attr('data-filter');
			// set filter in hash
			location.hash = 'filter=' + encodeURIComponent( filterAttr );
			});
			
			var isIsotopeInit = false;
			
			function onHashchange() {
				var hashFilter = getHashFilter();
				if ( !hashFilter && isIsotopeInit ) {
				  return;
				}
				isIsotopeInit = true;
				// filter isotope
				$grid.isotope({
				  itemSelector: '.blog-grid-entry',
				  masonry: {
					columnWidth: '.blog-grid-sizer',
					gutter: '.blog-gutter-sizer',
					isFitWidth: true     
					},
				  filter: hashFilter
				});
				// set selected class on button
				if ( hashFilter ) {
				  $filterButtonGroup.find('.active').removeClass('active');
				  var $current = $filterButtonGroup.find('[data-filter="' + hashFilter + '"]');
				  $current.parent().addClass('active');
				}
			}
			
			$(window).on( 'hashchange', onHashchange );
			
			// trigger event handler to init Isotope
			onHashchange();
			

		}); 
		
		$(window).load(function() {
			
			$grid.isotope('layout');
			
		}); 
        </script>
	</body>

<!-- Mirrored from www.directdesign.it/demos/chateau/blog-masonry.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:22:53 GMT -->
</html>