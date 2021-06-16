<!DOCTYPE html>
<html lang="en">

<head>
        <title>Fromage Fiore</title>
        
        <!-- meta -->
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <link rel="icon" type="image/png" href="images/icon.png" />
        
        <!-- css -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        
        <link href="src/css/font-awesome.css" rel="stylesheet">
        <link href="src/css/animate.css" rel="stylesheet">
        <link href="src/css/swipebox.css" rel="stylesheet">
        <link href="src/css/swiper.min.css" rel="stylesheet">
        <link href="src/css/winemaker-theme.css" rel="stylesheet">

        <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
        <link href="src/css/style.css" rel="stylesheet">


        
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
						<!--<label for="search-field">Chercher un produit</label>-->
						<input id="search-field" type="text" class="form-control" placeholder="Recherche...">
						<button id="search-btn" type="submit" class="btn"><span class="fa fa-search"></span></button>
					</div>
				</form>

				<!--<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">About</li>
					<li class="list-group-item style-1"><a href="register.html">Register</a></li>
					<li class="list-group-item style-1"><a href="login.html">Login</a></li>
					<li class="list-group-item style-1"><a href="contact.html">Contact</a></li>
					<li class="list-group-item style-1"><a href="faq.html">FAQ</a></li>
				</ul>-->    	
		        
				<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">Réseaux sociaux</li>
					<li class="list-group-item style-1"><a href="https://www.facebook.com/Fromage-Fiore-344785575533009/" target="_blank"><span class="fa fa-facebook-square"></span> Facebook</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-twitter-square"></span> Twitter</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-google-plus-square"></span> Google Plus</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-pinterest-square"></span> Pinterest</a></li>
				</ul>
				
    		</div>

    	</aside><!-- /#side-nav  -->
    	
        <div class="container-fluid" id="main-container">
            <div class="row" id="main-row">
            <?php include("includes/header.php") ?>

                <div class="container-fluid lazy">
                    <div class="row">
                    
                        <!-- Slider main container -->
                        <div id="swiper-1" class="swiper-container">
                        
                            <!-- Required wrapper -->
                            <div class="swiper-wrapper">
                            
                                <!-- Slides -->
                                <!--<div class="swiper-slide" id="slide-0">
                                    <div class="background">
                                        <video autoplay loop poster="https://s3-us-west-2.amazonaws.com/coverr/poster/On-the-vine.jpg" style="width: 1571px;">
                                        <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/On-the-vine.mp4" type="video/mp4">
                                        <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/On-the-vine.mp4" type="video/webm">
                                        Your browser does not support the video tag. I suggest you upgrade your browser.
                                        </video>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3 text-center">
                                                <h1 class="color-light" data-animation="animated bounceInDown">
                                                    Award winning
                                                </h1>
                                                <span class="separator" data-animation="animated bounceInLeft"></span>
                                                <p class="color-light" data-animation="animated bounceInUp">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi.
                                                </p>
                                                <button class="btn btn-primary btn-lg btn-animated btn-style-1" data-animation="animated bounceInUp" type="button"><span class="btn-label">Our wines</span><span class="btn-icon fa fa-chevron-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->

                                <div class="swiper-slide" id="slide-4">
                                    <div class="background"></div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-5">
                                               <h1 class="color-light" data-animation="animated bounceInUp">
                                                    Pâte pressé<br>
                                                    
                                                </h1>
                                                <span class="separator" data-animation="animated bounceInUp"></span>
                                                <p class="color-light" data-animation="animated bounceInUp" style="text-align: justify;">
                                                    Les fromages à pâte pressée sont traditionnellement fabriqués en montagne, l’été, quand le lait est riche et abondant, puis descendus dans la vallée pendant l’hiver : ce sont à l’origine des fromages d’alpages, même si leur de mode de fabrication a été reproduit par l’industrie.
                                                </p>
                                                <a href="products.php#filter=.pate-presse" class="btn btn-primary btn-lg btn-animated btn-style-1" data-animation="animated bounceInUp">Lire plus</span><span class="btn-icon fa fa-chevron-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide" id="slide-3">
                                    <div class="background">
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                           <div class="col-sm-5">
                                                <h1 class="color-light" data-animation="animated bounceInUp">
                                                    Pâte fraîche<br>
                                                    
                                                </h1>
                                                <span class="separator" data-animation="animated bounceInUp"></span>
                                                <p class="color-light" data-animation="animated bounceInUp" style="text-align: justify;">
                                                    Fromage à pâte fraîche est une appellation désignant un fromage ou un fromage de lactosérum jeune, sans croûte formée, élaboré à partir de lait ou de petit lait, et dont la pâte n'a pas fermenté ni été affinée.
                                                </p>
                                                <a href="products.php#filter=.pate-fraiche" class="btn btn-primary btn-lg btn-animated btn-style-1" data-animation="animated bounceInUp">Lire plus</span><span class="btn-icon fa fa-chevron-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide" id="slide-2">
                                    <div class="background">
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-5">
                                               <h1 class="color-light" data-animation="animated bounceInUp">
                                                    Nos fromages<br>
                                                    
                                                </h1>
                                                <span class="separator" data-animation="animated bounceInUp"></span>
                                                <p class="color-light" data-animation="animated bounceInUp" style="text-align: justify;">
                                                    La pizza n'est jamais meilleure que garnie de mozzarella et la mozzarella n’est jamais meilleure que lorsqu’elle est la Mozzarella Di Fiore ...
                                                </p>
                                                <a href="products.php#filter=*" class="btn btn-primary btn-lg btn-animated btn-style-1" data-animation="animated bounceInUp" ><span class="btn-label">Lire plus</span><span class="btn-icon fa fa-chevron-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide" id="slide-1">
                                    <div class="background">
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h1 class="color-light" data-animation="animated bounceInUp">
                                                    Pâte molle<br>
                                                    
                                                </h1>
                                                <span class="separator" data-animation="animated bounceInUp"></span>
                                                <p class="color-light" data-animation="animated bounceInUp" style="text-align: justify;">
                                                    Les pâtes molles sont ensemencées en surface avec une moisissure qui provoque, par affinage en cave, l'apparition d'une croûte. Le terme à pâte molle s'applique à un fromage qui, au moment de sa fabrication, ne subit ni chauffage, ni pressage. La pâte est alors onctueuse voire coulante à pleine maturation du fromage.
                                                </p>
                                                <a href="products.php#filter=.pate-molle" class="btn btn-primary btn-lg btn-animated btn-style-1" data-animation="animated bounceInUp" ><span class="btn-label">Lire plus</span><span class="btn-icon fa fa-chevron-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
                            
                            <!-- Navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            
                        </div>
                        <!-- /#swiper-1 -->
                        
                    </div>
                    <!-- /.row -->
                    
                </div>
                <!-- /.container-fluid -->

                <section>
                    <div class="container">
                    
                        <div class="flag">
                            <span class="fa fa-heart-o"></span>
                        </div>

                        <div class="row">
                        
                            <div class="col-sm-4">
                                <img alt="chateau" class="img-responsive img-thumbnail mar-v os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s" src="images/wine-maker-working.png">
                            </div>

                            <div class="col-sm-8">
                                <h2 style="font-weight: bold;color: #ce2b37;">
                                    Qui somme nous
                                </h2>
                                <span class="separator"></span>
                                <p>
                                        La société FIORE sarl a adopté une démarche qualité qui place le client au centre de ses préoccupations et vise à lui offrir un fromage sain et authentique. <br><br>
                            
                            Au travers de cet Engagement Qualité, FIORE s’engage à offrir à ses consommateurs des fromages de grande qualité choisis parmi plus de 450 types de fromages italiens, notamment ceux qui sont nés dans les belles vallées montagneuses et verdoyantes du nord de l’Italie, la Vallée d’Aoste, le Piémont, la Lombardie, le Frioul…
                                </p>
                                
                            </div>
                            
	                    </div>
	                </div>
                </section>

                <section class="section-photo parallax color-light lazy" data-stellar-background-ratio="0.5" id="img1">
                    <!--<div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2>
                                    <em>Our Manor</em>
                                </h2>

                                <h3>
                                    In the heart of napa valley
                                </h3>
                            </div>
                        </div>
                    </div>-->

                    <div class="overlay">
                    </div>
                </section>

                <section>
                    <div class="container">
                        <div class="flag">
                            <span class="fa fa-leaf"></span>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 style="font-weight: bold;color: #ce2b37;">
                                    Nos Fromages
                                </h2>
                                <span class="separator"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                                <a href="products.php#filter=.pate-fraiche">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>
                                        Pâte fraîche
                                    </figcaption>
                                    <div class="overlay"></div>
                                    <!--<img alt="chateau" class="img-appear" src="images/fraiche/STRACCHINO-DI-FIORE-1.png">-->
                                    <img alt="chateau" class="img-responsive lazy" src="images/home/fraiche.png">
                                </figure></a>
                            </div>


                            <div class="col-sm-4 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                                <a href="products.php#filter=.pate-presse">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>
                                        Pâte pressé
                                    </figcaption>
                                    <div class="overlay"></div>
                                    <!--<img alt="chateau" class="img-appear" src="images/presse/GRAN BASTARDO DI FIORE1.png">-->
                                    <img alt="chateau" class="img-responsive lazy" src="images/home/presse.png">
                                </figure></a>
                            </div>

                            <div class="col-sm-4 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                                <a href="products.php#filter=.pate-file">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>
                                        Pâte filé
                                    </figcaption>
                                    <div class="overlay"></div>
                                    <!--<img alt="chateau" class="img-appear" src="images/filee/MOZZARELLA-BOCCONE-DI-FIORE1.png">-->
                                    <img alt="chateau" class="img-responsive lazy" src="images/home/filee.png">
                                </figure></a>
                            </div>

                            <div class="col-sm-4 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                                <a href="products.php#filter=.rape">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>
                                        Râpé
                                    </figcaption>
                                    <div class="overlay"></div>
                                    <!--<img alt="chateau" class="img-appear" src="images/rape/FROMAGE-RÄPE-DI-FIORE-150G1.png">-->
                                    <img alt="chateau" class="img-responsive lazy" src="images/home/rape.png">
                                </figure></a>
                            </div>


                            <div class="col-sm-4 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                                <a href="products.php#filter=.a-base-alimentaire">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>
                                        Préparation alimentaire
                                    </figcaption>
                                    <div class="overlay"></div>
                                    <!--<img alt="chateau" class="img-appear" src="images/a-base-alimentaire/Fiorella Râpé Primo gruyere1.png">-->
                                    <img alt="chateau" class="img-responsive lazy" src="images/home/abase.png">
                                </figure></a>
                            </div>

                            <div class="col-sm-4 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                                <a href="products.php#filter=.pate-molle">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>
                                        Pâte molle
                                    </figcaption>
                                    <div class="overlay"></div>
                                    <!--<img alt="chateau" class="img-appear" src="images/molle/fiore-bianco-2.png">-->
                                    <img alt="chateau" class="img-responsive lazy" src="images/home/molle.png">
                                </figure></a>
                            </div>



                        </div>
                    </div>
                </section>

                <section class="section-photo parallax color-light lazy" data-stellar-background-ratio="0.5" id="img2">
                    <!--<div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2>
                                    <em>Award Winning Italian Vines</em>
                                </h2>

                                <h3>
                                    To only make the best wines
                                </h3>
                            </div>
                        </div>
                    </div>-->

                    <div class="overlay">
                    </div>
                </section>
                
	            <section id="contact" >
	                <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <form>
                                    <h2 style="font-weight: bold;color: #ce2b37;">Contactez-nous</h2>
                                    <div class="form-group">
                                        <label for="msg-email">Addresse email</label>
                                        <input type="email" class="form-control" id="msg-email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg-email">Objet</label>
                                            <input type="text" class="form-control" id="msg-email" placeholder="Objet">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg-text">Message</label>
                                        <textarea rows="6" class="form-control" id="msg-text" placeholder="Message"></textarea>
                                    </div>
                                    
                                    <button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit">
                                    <span class="btn-label">Envoyer message</span>
                                    <span class="btn-icon fa fa-envelope"></span>
                                    </button>
                                    
                                    
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <h2 style="font-weight: bold;color: #ce2b37;">Visitez-nous</h2>
                                <h3>Adresse</h3>
                                <p>
                                <span class="fa fa-map-marker primary bigger" style="font-size: 28px;"></span> Fromagerie Fiore Km 1 Route d'Azmour 8080 Menzel Temime. Tunisie 
                                </p>
                                <h3>Email</h3>
                                <p>
                                <span class="fa fa-envelope primary bigger"></span> <a href="mailto:info@fiorefromage.com">info@fiorefromage.com</a>
                                </p>
                <h3>Tel</h3>
                            <p>
                            <!--<span class="fa fa-phone-square primary bigger"></span> (+216)72.348.810<br>
                                                                                    <p>(+216)72.348.811</p><br> 
                                                                                    <p>(+216)72.348.812</p><br> -->

                              <div class="row" >
                              <div class="col-sm-1"><span class="fa fa-phone-square primary bigger"></span></div>

                              <div class="col-sm-10">

                                <div class="row" id="tels">
                                    <div class="col-sm-12"><p>(+216)72.348.810</p></div>
                                    <div class="col-sm-12"><p>(+216)72.348.811</p></div>
                                    <div class="col-sm-12"><p>(+216)72.348.812</p></div>
                                </div>


                              </div>


                              
                              </div>

                            </p>

                <h3>Fax</h3>
                            <p>
                            <span class="fa fa-fax primary bigger"></span> (+216)72.348.813
                            </p><br>
                            
                                <!--<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. Quisque cursus ac velit nec elementum. Nulla varius ex quis ante auctor, non consequat velit faucibus.
                                </p>-->
                            
                            </div>
                        </div>
                    </div>
                </section>
	            
	            <section id="location">
		            <div id="map">
		            
		            </div>	         
	            </section>
                
                <?php include("includes/footer.php") ?>
                
            </div>
            <!-- /#main-row -->
        </div>
        <!-- /#main-container -->
        
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!--<script type="text/javascript" src="src/js/jquery.lazy.min.js"></script>-->
        <script type="text/javascript" src="src/js/jquery.swipebox.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.stellar.js"></script>
        <script type="text/javascript" src="src/js/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="src/js/sticky.js"></script>
        <script type="text/javascript" src="src/js/isotope.pkgd.min.js"></script>
        <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu3ZxvDhvYO6JCdL77p6qRveFeAjBOhhk &sensor=false" ></script>
        <script type="text/javascript" src="src/js/winemaker-theme.js"></script>

        <script type="text/javascript">
        	var map;
        	
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                	// Disable mouse scroll
                	scrollwheel: false,
                	
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(36.7921336, 11.002018000000021),

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"road","stylers":[{"hue":"#5e00ff"},{"saturation":-79}]},{"featureType":"poi","stylers":[{"saturation":-78},{"hue":"#6600ff"},{"lightness":-47},{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"lightness":22}]},{"featureType":"landscape","stylers":[{"hue":"#6600ff"},{"saturation":-11}]},{},{},{"featureType":"water","stylers":[{"saturation":-65},{"hue":"#1900ff"},{"lightness":8}]},{"featureType":"road.local","stylers":[{"weight":1.3},{"lightness":30}]},{"featureType":"transit","stylers":[{"visibility":"simplified"},{"hue":"#5e00ff"},{"saturation":-16}]},{"featureType":"transit.line","stylers":[{"saturation":-72}]},{}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(36.7921336, 11.002018000000021),
                    map: map,
                    title: 'Snazzy!'
                });
            }
            
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
            
            // Keep the map centered when resize
			google.maps.event.addDomListener(window, 'resize', function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, 'resize');
			map.setCenter(center); 
			});            
			
        </script>
	</body>

<!-- Mirrored from www.directdesign.it/demos/chateau/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:19:07 GMT -->
</html>