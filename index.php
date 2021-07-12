<?php
include("includes/connect_db.php");

$req = $bdd->query("SELECT * FROM produit ");
//$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <title>Patisserie Lbena</title>
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <link rel="icon" type="image/png" href="images/icon.png" />


        <link rel="alternate" hreflang="fr-TN" href="#" />

        <meta name="description" content="Le Maître affineur Fiore grant du maintien du savoir-faire séculaire italien transmis de père en fils depuis des générations: l'art et la conduite de l'affinage requièrement développés.">


        
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        
        <link href="src/css/font-awesome.css" rel="stylesheet">
        <link href="src/css/animate.css" rel="stylesheet">
        <link href="src/css/swipebox.css" rel="stylesheet">
        <link href="src/css/swiper.min.css" rel="stylesheet">
        <link href="src/css/winemaker-theme.css" rel="stylesheet">

        <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
        <link href="src/css/style.css" rel="stylesheet">
        <!--<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">-->
        <!--<link href="http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">-->
        <link href="http://fonts.googleapis.com/css?family=Cookie|Raleway:100,200,300,400,500,600,700,800,900|Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Satisfy" rel="stylesheet">


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119324841-1"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-119324841-1');
        </script>


        <script src="src/js/modernizr-2.6.2.min.js"></script>

        <style type="text/css">
         
            .page-header {
                
                padding: 185px 0 !important;
                
            }
            .isotope-grid-item:hover img {
                
                -ms-transform: scale(1.05);
                transform: rotate(0.5);
                
                transform: none !important;
            }
            .produit.teaser {

                        width: 34.4rem;
                        height: 32.7rem;
                        text-align: center;

                        box-shadow: 0 5px 15px rgba(0,0,0,.15);
                        margin-right: 1.2rem;

                        margin-top: 2rem;
                        background-color: #fff;
                }

            .product-newVert {
               z-index: 999999;
                position: absolute;
                top: 0.8rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-new-vert.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }

            .product-newMaron {
                z-index: 999999;
                position: absolute;
                top: 0.8rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-new-maron.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }

            .product-newBlanc {
                z-index: 999999;
                position: absolute;
                top: 0.8rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-new-rouge.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }


            .product-newBleu {
                z-index: 999999;
                position: absolute;
                top: 0.8rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-bleu.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }

            .product-newRz {
                z-index: 999999;
                position: absolute;
                top: 0.8rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-rz.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }



            .product-newRouge {
                z-index: 999999;
                position: absolute;
                top: 0.8rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-new-jaune.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }
            .img-thumbnail {
                padding: 4px;
                line-height: 1.42857143;
                background-color: transparent;
                border: transparent;
            }

            @media (max-width:1199px) and (min-width:992px){
                    .container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse, .container-fluid > .navbar-collapse {
                    /* margin-right: 0; */
                    margin-left: -141px !important;
                }
                .produit.teaser {
                    width: 27.4rem !important;
                    height: 27.4rem;

                }
                .isotope-grid-item {
                    float: left;
                    width: 295px !important;
                    height: 295px !important;
                    margin-bottom: 25px;
                    text-align: center;
                    overflow: hidden;
                    border-radius: 3px;
                    box-shadow: 0px 10px 10px -5px rgba(0,0,0,0.5);
                }
                }

            @media (min-width:992px){

                .isotope-grid-item {
                    float: left;
                    width: 345px;
                    height: 345px;
                    margin-bottom: 25px;
                    text-align: center;
                    overflow: hidden;
                    border-radius: 3px;
                    box-shadow: 0px 10px 10px -5px rgba(0,0,0,0.5);
                }
            }

     @media (max-width:991px) and (min-width: 600px){
        .produit.teaser {
                width: 19.9rem;
                height: 19.4rem;
                text-align: center;
                box-shadow: 0 5px 15px rgba(0,0,0,.15);
                margin-right: 1.2rem;
                margin-top: 2rem;
                background-color: #fff;
            }

        .isotope-grid-item {
            float: left;
            width: 215px;
            height: 215px;
            margin-bottom: 25px;
            text-align: center;
            overflow: hidden;
            border-radius: 3px;
            box-shadow: 0 10px 10px -5px rgba(0,0,0,.5);
        }

        
     }



        </style>

    </head>
    
    <body>
    
    	<aside id="side-nav">
    	
    		<div>

				<form class="form-inline">
					<div class="form-group has-feedback">
						<input id="search-field" type="text" class="form-control" placeholder="Recherche...">
						<button id="search-btn" type="submit" class="btn"><span class="fa fa-search"></span></button>
					</div>
				</form>  	
		        
				<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">Réseaux sociaux</li>
					<li class="list-group-item style-1"><a href="https://www.facebook.com/Fromage-Fiore-344785575533009/" target="_blank"><span class="fa fa-facebook-square"></span> Facebook</a></li>
					


                    <li class="list-group-item style-1"><a href="#"><span class="fa fa-twitter-square"></span> Twitter</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-google-plus-square"></span> Google Plus</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-pinterest-square"></span> Pinterest</a></li>
				</ul>
				
    		</div>

    	</aside>
    	
        <div class="container-fluid" id="main-container">
            <div class="row" id="main-row">
            
       
                <?php include("includes/header.php") ?>


                <div class="container-fluid lazy">
                    <div class="row">
                    
                        <div id="swiper-1" class="swiper-container">
                        
                            <div class="swiper-wrapper">

                                <div class="swiper-slide" id="slide-4">
                                    <div class="background"></div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 descSlider">
                                                <a href="qui-somme-nous.php">
                                                <div class="col-sm-5 titleSlider">
                                                    <a href="qui-somme-nous.php" style="text-decoration: none;"><h1 class="color-light titleSl" data-animation="animated bounceInUp">
                                                    Patisserie Elbena<br>
                                                    
                                                    </h1></a>
                                                </div>

                                            </div>
                                          </a>
                                        </div>
                                    </div>
                                </div>



                                <div class="swiper-slide" id="slide-3">
                                    <div class="background"></div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 descSlider">
                                                <a href="products.php#filter=.chocolat">
                                                <div class="col-sm-5 titleSlider">
                                                    <h1 class="color-light titleSl" data-animation="animated bounceInUp">
                                                    Chocolat<br>
                                                    
                                                    </h1>
                                                    
                                                </div>
                                               
                                            </div>
                                          </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" id="slide-2">
                                    <div class="background"></div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 descSlider">
                                                <a href="products.php#filter=*">
                                                <div class="col-sm-5 titleSlider">
                                                    <h1 class="color-light titleSl" data-animation="animated bounceInUp">
                                                    Nos Produits<br>
                                                    
                                                    </h1>
                                                    
                                                </div>
                                            </div>
                                          </a>
                                        </div>
                                    </div>
                                </div>

                                 <div class="swiper-slide" id="slide-1">
                                    <div class="background"></div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 descSlider">
                                                <a href="products.php#filter=.macaron">
                                                <div class="col-sm-5 titleSlider">
                                                    <h1 class="color-light titleSl" data-animation="animated bounceInUp">
                                                    Macaron<br>
                                                    
                                                    </h1>
                                                </div>  
                                            </div>
                                          </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            
                        </div>
                        
                    </div>
                    
                </div>

                <section id="quisommenous">
                    <div class="container">
                        <div class="row" id="quisommenousDiv">
                        
                            <div class="col-sm-4">
                                <img alt="wine-maker-working" class="lazy img-responsive img-thumbnail mar-v os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s"  data-src="images/elbena/patissieuse.jpg">
                            </div>

                            <div class="col-sm-8">
                                <h2 style="font-weight: bold;color: #ce2b37;">
                                    Qui somme nous
                                </h2>
                                <span class="separator"></span>
                                <p id="quisommenousP">
                                La Pâtissière Elbena tient à être un label de qualité inscrit dans la tradition qu’elle s’emploie à perpétuer avec une dose appropriée de modernité qui la concilie avec le goût du jour.
                                </p>
                                
                            </div>
                            
	                    </div>
	                </div>
                </section>

                <section id="nofromage_bg">
                    <div class="container">
                        <div class="row" id="nofromageDiv">
                            <div class="col-sm-12 text-center">
                                <h2 style="font-weight: bold;color: #ce2b37;">
                                    Nos Produits
                                </h2>
                                <span class="separator"></span>
                            </div>
                        </div>

                        <div class="row">
                        <?php while($donnees = $req->fetch()){ ?>
                            <div class="col-sm-4 col-xs-12 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                                <a href="products.php#filter=.<?php echo $donnees['catagorie2']; ?>">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <div class="isotope-grid-item <?php echo $donnees['catagorie2']; ?>">
                                            <article class="produit teaser">
                                               
                                                <span class="product-newMaron new-fr"><?php echo $donnees['catagorie2']; ?></span>
                                                
                                                    <img alt="presse" class="img-responsive lazy" data-src="<?php echo $donnees['img'];?>">
                                                    
                                            </article>
                                        </div>
                                </figure>
                            </a>
                            </div>
                            <?php } ?>
                        






                           



                        </div>
                    </div>
                </section>         
	            <section id="contact" >
	                <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                            <form action="Controller/AjoutContact.php" method="post">
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
                                    <h2 style="font-weight: bold;color: #ce2b37;">Contactez-nous</h2>
                                    <div class="form-group">
                                        <label for="msg-email">Addresse email</label>
                                        <input type="email" class="form-control" id="msg-email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg-email2">Objet</label>
                                            <input type="text" class="form-control" id="msg-email2" placeholder="Objet">
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
                                <p aria-hidden="true">
                                <span class="fa fa-map-marker primary bigger" style="font-size: 28px;"></span> Patisserie ELbena   Route  nozha Zouila Mahdia 5100. Tunisie 
                                </p>
                                <h3>Email</h3>
                                <p aria-hidden="true">
                                <span class="fa fa-envelope primary bigger"></span> <a href="mailto:info@patisserieelbena.com">info@patisserieelbena.com</a>
                                </p>
                <h3>Tel</h3>
                            <p aria-hidden="true">

                              <div class="row" >
                              <div class="col-sm-1"><span class="fa fa-phone-square primary bigger"></span></div>

                              <div class="col-sm-10">

                                <div class="row" id="tels">
                                    <div class="col-sm-12"><p aria-hidden="true">(+216)52.908.471</p></div>

                                </div>


                              </div>


                              
                              </div>

                            </p>

               
                            
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
        </div>
        <!--<script type="text/javascript">if (!window.jQuery) { document.write('<script src="src/js/jquery-1.11.3.min.js"><\/script>'); }</script>-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <!-- jsDeliver -->
        <script type="text/javascript" src="src/js/jquery.lazy-master/jquery.lazy.js"></script>
        <script type="text/javascript" src="src/js/jquery.lazy-master/jquery.lazy.min.js"></script>

        <!-- cdnjs -->
        <script type="text/javascript" src="src/js/jquery.lazy-master/jquery.lazy.plugins.js"></script>
        <script type="text/javascript" src="src/js/jquery.lazy-master/jquery.lazy.plugins.min.js"></script>
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
            
                $('.lazy').Lazy({
                    // your configuration goes here
                    scrollDirection: 'vertical',
                    effect: 'fadeIn',
                    //delay: 5000,
                    //combined: true,
                    //placeholder: "data:images/Loading_icon.gif",
                    //effectTime: 2000,
                    placeholder: "data:image/gif;base64,R0lGODlhEALAPQAPzl5uLr9Nrl8e7...",
                    threshold: 0,
                    visibleOnly: true,
                    onError: function(element) {
                        console.log('error loading ' + element.data('src'));
                    }
                });
        </script>

        <script type="text/javascript">
        	var map;
        	
            function init() {
                var mapOptions = {
                	scrollwheel: false,
                    zoom: 11,
                    center: new google.maps.LatLng(36.7921336, 11.002018000000021),
                    styles: [{"featureType":"road","stylers":[{"hue":"#5e00ff"},{"saturation":-79}]},{"featureType":"poi","stylers":[{"saturation":-78},{"hue":"#6600ff"},{"lightness":-47},{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"lightness":22}]},{"featureType":"landscape","stylers":[{"hue":"#6600ff"},{"saturation":-11}]},{},{},{"featureType":"water","stylers":[{"saturation":-65},{"hue":"#1900ff"},{"lightness":8}]},{"featureType":"road.local","stylers":[{"weight":1.3},{"lightness":30}]},{"featureType":"transit","stylers":[{"visibility":"simplified"},{"hue":"#5e00ff"},{"saturation":-16}]},{"featureType":"transit.line","stylers":[{"saturation":-72}]},{}]
                };
                var mapElement = document.getElementById('map');
                map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(36.7921336, 11.002018000000021),
                    map: map,
                    title: 'Snazzy!'
                });
            }
            google.maps.event.addDomListener(window, 'load', init);
			google.maps.event.addDomListener(window, 'resize', function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, 'resize');
			map.setCenter(center); 
			});            
        </script>
	</body>
</html>