<?php
include("includes/connect_db.php");
$id= $_GET['id'];
$req = $bdd->query("SELECT * FROM produit WHERE id=$id");
$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:19:53 GMT -->
<head>
        <title>Contact</title>
        
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
        <style type="text/css">
          @media (min-width:992px){
            .page-header {
                
                padding: 185px 0 !important;
                
            }

          }



        </style>
        </style>
       
        </style>
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

				<!-- .page-header -->
				<div class="page-header"   style="background-image:url(images/elbena/contact.jpg)" data-stellar-background-ratio="0.2">
			        <div class="container">
			            <div class="row">
			            	<div class="col-sm-12">
								<ol class="breadcrumb">
								  <li><a href="index.php" style="color:#fff5ee;text-shadow: #000000 0.5px 0.5px, #000000 -0.5px 0.5px, #000000 -0.5px -0.5px, #000000 0.5px -0.5px;">Accueil</a></li>
								  <li class="active" style="color:#fff5ee;text-shadow: #000000 0.5px 0.5px, #000000 -0.5px 0.5px, #000000 -0.5px -0.5px, #000000 0.5px -0.5px;">Contact</li>
								</ol>
							  <h1 style="color:#fff5ee;text-shadow: #000000 0.5px 0.5px, #000000 -0.5px 0.5px, #000000 -0.5px -0.5px, #000000 0.5px -0.5px;">Contact</h1>
			            	</div>
						</div>    
		            </div>
		        </div>
				<!-- /.page-header -->

	            <section id="contact">
	                <div class="container">
	                    <div class="row">
		                    <div class="col-sm-5">
                       
								<form action="Controller/ajouterproduct.php" method="post">
                     <?php 
                      if (isset($_GET['resultat'])) {

                       if ($_GET['resultat'] == 'oui') {
                      ?>

                          <br><div class="container"><div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    
                                    Message ajouter avec succes.
                                    </div></div>

                          <?php  }else{ ?>
                            <div class="container"></div>
                          <?php } 
                            }?>
									<h2 style="font-weight: bold;color: #ce2b37;">Commander</h2>
									
									<div class="form-group">
									    <label for="msg-email">Produit</label>
    										<input type="text" class="form-control" id="msg-email" placeholder="<?php echo $donnees['produit']; ?>" name="produit" value="<?php echo $donnees['produit'] ?>" >
									</div>
									<div class="form-group">
									    <label for="msg-email">Prix</label>
    										<input type="text" class="form-control" id="msg-email" placeholder="<?php echo $donnees['prix']; ?>" name="prix" value="<?php echo $donnees['prix'] ?>">
									</div>
									
									<button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit">
									<span class="btn-label">Ajouter commander</span>
									<span class="btn-icon fa fa-envelope"></span>
									</button>
									
									
								</form>
		                    </div>
   		                    <div class="col-sm-6">
 								<h2 style="font-weight: bold;color: #ce2b37;">Visitez-nous</h2>
 								<h3>Adresse</h3>
  		                    	<p>
   		                    	<span class="fa fa-map-marker primary bigger" style="font-size: 28px;"></span> <?php echo $donnees['adresse']; ?>
   		                    	</p>
 								<h3>Email</h3>
  		                    	<p>
   		                    	<span class="fa fa-envelope primary bigger"></span> <a href="mailto:info@fiorefromage.com"><?php echo $donnees['email']; ?></a>
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
                                    <div class="col-sm-12"><p><?php echo $donnees['tel']; ?></p></div>
                                    
                                </div>


                              </div>


                              
                              </div>

                            </p>

                <!--<h3>Fax</h3>
                            <p>
                            <span class="fa fa-fax primary bigger"></span> <?php echo $donnees['fax']; ?>
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
        <script type="text/javascript" src="src/js/jquery.swipebox.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.stellar.js"></script>
        <script type="text/javascript" src="src/js/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="src/js/sticky.js"></script>
        <script type="text/javascript" src="src/js/isotope.pkgd.min.js"></script>
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

<!-- Mirrored from www.directdesign.it/demos/chateau/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:20:15 GMT -->
</html>