<?php
include("includes/connect_db.php");

$req = $bdd->query("SELECT * FROM produit ");
//$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:20:15 GMT -->
<head>
        <title>produits</title>
        
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
        <link href="src/css/styleaddcart.css" rel="stylesheet">
        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
		<!-- head js -->
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="src/js/modernizr-2.6.2.min.js"></script>
        <style type="text/css">
         
            .page-header {
			    
			    padding: 185px 0 !important;
			    
			}
            /*.imgProduct{
                    width: 218px;
                    height: 35px;
                    z-index: 999999;
                    position: absolute;
                    top: -25px;
                    left: 22px;
            }*/
            .produit.teaser {
                       width: 26.4rem;
                        height: 24.7rem;
                        text-align: center;
                        /*-webkit-box-shadow: 0 5px 15px rgba(0,0,0,.15);*/
                        box-shadow: 0 5px 15px rgba(0,0,0,.15);
                        margin-right: 1.2rem;
                        /* margin-left: 1.2rem; */
                        margin-top: 2rem;
                        background-color: #fff;
                }

            .product-newVert {
                position: absolute;
                top: 0.3rem;
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
                position: absolute;
                top: 0.3rem;
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
                    /*border: 1px solid #000;*/
                position: absolute;
                top: 0.3rem;
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
                position: absolute;
                top: 0.3rem;
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
                position: absolute;
                top: 0.3rem;
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
                position: absolute;
                top: 0.3rem;
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
                z-index: 9999999;
            }


     



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
				<div class="page-header" style="background-image:url(images/elbena/produitt.jpg)" data-stellar-background-ratio="0.2">
			        <div class="container">
			            <div class="row">
			            	<div class="col-sm-12">
								<ol class="breadcrumb">
								  <li><a href="index.php">Accueil</a></li>
								  <li class="active"><a href="#">Nos Produits</a></li>
								</ol>
							  <h1>Liste des Produits</h1>
			            	</div>
						</div>    
		            </div>
		        </div>
				<!-- /.page-header -->

				<!-- #secondary-nav-bar -->
				<nav id="secondary-nav-bar" class="navbar navbar-default">
				  <div class="container">
				    <ul id="secondary-nav" class="nav navbar-nav isotope-filters ">
	                    <li class="active"><a data-filter="*" style="font-weight: bold;">Tous les produits</a></li>
	                    <li><a data-filter=".patisserie_traditionnelle" style="font-weight: bold;">Patisserie Traditionnelle</a></li>
	                    <li><a data-filter=".kunafeh" style="font-weight: bold;">kunafeh</a></li>
	                    <li><a data-filter=".baklewa" style="font-weight: bold;">Baklewa</a></li>
	                    <li><a data-filter=".gateaux" style="font-weight: bold;">Gateaux</a></li>
	                    <li><a data-filter=".chocolat" style="font-weight: bold;">Chocolat</a></li>
                        <li><a data-filter=".macaron" style="font-weight: bold;">Macaron</a></li>
				    </ul>
				  </div>
				</nav>
				<!-- /#secondary-nav-bar -->

                <div class="container-fluid">
                    <div class="row">

		                <section class="section-bg-light-gray" style="background-image: url('images/nofromage.jpg')">
		                    <div class="container">
		                        <!--<div class="flag"><span class="fa fa-heart-o"></span></div>-->

		                        <div class="row">

									<div class="isotope-grid">
										<div class="isotope-gutter-sizer"></div>
										<div class="isotope-grid-sizer"></div>

										
	<?php while($donnees = $req->fetch()){ ?>
						<div class="isotope-grid-item <?php echo $donnees['catagorie2']; ?>">
                                            <article class="produit teaser">
                                                <!--<img src="images/bg-product-teaser-new-vert.png" class="imgProduct">-->
                                                <span class="product-newVert new-fr"><?php echo $donnees['catagorie']; ?></span>
												
    											<div class="b-alimentaire">
    												<h3><a href="produit2.php"><?php echo $donnees['titre']; ?></a></h3>
    												<h4><a href="produit2.php"><?php echo $donnees['poids']; ?></a></h4>
												
												</div>
												<button  class="card_button">  
        <a href="produit-details.php?id=<?php echo $donnees['id']; ?>">Ajouter panier</a>
        </button>
                      
    											<a href="produit-details.php?id=<?php echo $donnees['id']; ?>"><img class="lazy" data-src="<?php echo $donnees['img'];?>" class="lazy" alt="Macaron" width="300" height="600"></a>
												                      </article> 
											
                                        </div> 
										
										
	<?php } ?>



							

									</div><!-- /.isotope grid-->

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
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="src/js/winemaker-theme.js"></script>
        <script type="text/javascript">
        	
			    $('.lazy').Lazy({
			        // your configuration goes here
			        scrollDirection: 'vertical',
			        effect: 'fadeIn',
			        //delay: 5000,
			        //combined: true,
			        //placeholder: "data:images/Loading_icon.gif",
			        effectTime: 2000,
          			threshold: 0,
			        visibleOnly: true,
			        onError: function(element) {
			            console.log('error loading ' + element.data('src'));
			        }
			    });
        </script>


        <script>
        
		$(document).ready(function() {
        
		/* ISOTOPE */
		
			function getHashFilter() {
			  // get filter=filterName
			  var matches = location.hash.match( /filter=([^&]+)/i );
			  var hashFilter = matches && matches[1];
			  return hashFilter && decodeURIComponent( hashFilter );
			}
		
			var $grid = $('.isotope-grid');
			
			// bind filter button click
			var $filterButtonGroup = $('.isotope-filters');
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
				  itemSelector: '.isotope-grid-item',
				  masonry: {
					columnWidth: '.isotope-grid-sizer',
					gutter: '.isotope-gutter-sizer',
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
        
        </script>
        
        
	</body>

<!-- Mirrored from www.directdesign.it/demos/chateau/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:20:56 GMT -->
</html>