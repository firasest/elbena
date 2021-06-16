<?php
include("includes/connect_db.php");
$req = $bdd->query("SELECT * FROM quisommenous");
$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/who-we-are.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:20:56 GMT -->
<head>
        <title>qui somme nous</title>
        
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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Satisfy" rel="stylesheet">
        
		<!-- head js -->
        <script src="src/js/modernizr-2.6.2.min.js"></script>
        <style type="text/css">
          @media (min-width:992px){
            .page-header {
                
                padding: 185px 0 !important;
                
            }
            #quisommenousP{
                /*margin-bottom: -5pc;*/
            }

          }

          /*.soustitre:hover{
            color: #000;
          }*/


          .navbar-default .navbar-nav>.active>.soustitre, .navbar-default .navbar-nav>.active>.soustitre:hover {
                background-color: transparent !important;
                border-bottom: 3px solid #fff;
                padding-left: 0;
                padding-right: 0;
                color: #F0E68C;
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
				<div class="page-header" style="background-image:url(images/elbena/nous.jpg)" data-stellar-background-ratio="0.2">
			        <div class="container">
			            <div class="row">
			            	<div class="col-sm-12">
								<ol class="breadcrumb">
								  <li><a href="index.php">Accueil</a></li>
								  <li><a href="#">Présentation</a></li>
								  <li class="active">Qui sommes-nous ?</li>
								</ol>
							  <h1>Qui sommes-nous ?</h1>
			            	</div>
						</div>    
		            </div>
		        </div>
				<!-- /.page-header -->

				<!-- #secondary-nav-bar -->
				<nav id="secondary-nav-bar" class="navbar navbar-default" style="background-color: #074529">
				  <div class="container">
				    <ul id="secondary-nav" class="nav navbar-nav">
	                    <li class="active"><a href="qui-somme-nous.php" class="soustitre" style="font-weight: bold;color: #fff;">Qui somme nous</a></li>
	                    <!--<li><a href="historique.html" style="font-weight: bold;">Historique</a></li>-->
	                    
	                    <li><a href="le-saviez-vous.php"  class="soustitre" style="font-weight: bold;color: #fff">Le saviez vous</a></li>
	                    <!--<li><a href="gallery.html" style="font-weight: bold;">Galerie</a></li>-->
				    </ul>
				  </div>
				</nav>
				<!-- /#secondary-nav-bar -->

                <section id="quisommenous">
                    <div class="container">
                        <!--<div class="flag">
                            <span class="fa fa-heart-o"></span>
                        </div>-->

                        <div class="row">
                            <div class="col-sm-4">
                                <img alt="qui somme nous" class="img-responsive img-thumbnail img-circle" src="images/elbena/pattiserie_bena.jpg">
                            </div>

                            <div class="col-sm-8" style="margin-top: -40px;">
                                <h2 style="font-weight: bold;color: #ce2b37;"><?php echo $donnees['titre']; ?></h2>
                                <p style="text-align: justify;" id="quisommenousP">
                                    <?php echo $donnees['description'] ?>
                                <!--<img alt="chateau" height="103" src="images/signature.png" width="202">-->
                            </div>
                        </div>
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
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="src/js/winemaker-theme.js"></script>
        
	</body>

<!-- Mirrored from www.directdesign.it/demos/chateau/who-we-are.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:20:57 GMT -->
</html>