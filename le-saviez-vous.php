<?php
include("includes/connect_db.php");
$req = $bdd->query("SELECT * FROM savez_vous");
//$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/the-vineyard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:21:11 GMT -->
<head>
        <title>le saviez vous</title>
        
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
          .navbar-default .navbar-nav>.active>.soustitre, .navbar-default .navbar-nav>.active>.soustitre:hover {
                background-color: transparent !important;
                border-bottom: 3px solid #fff;
                padding-left: 0;
                padding-right: 0;
                color: #009246;
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
				<!--<div class="page-header" style="background-image:url(images/sv/sv.png)" data-stellar-background-ratio="0.2">-->
					<div class="page-header" style="background-image:url(images/qui-somme-nous.png)" data-stellar-background-ratio="0.2">
			        <div class="container">
			            <div class="row">
			            	<div class="col-sm-12">
								<ol class="breadcrumb">
								  <li><a href="index.php">Accueil</a></li>
								  <li><a href="#">Présentation</a></li>
								  <li class="active">Le saviez-vous ?</li>
								</ol>
							  <h1>Le saviez-vous ?</h1>
			            	</div>
						</div>    
		            </div>
		        </div>
				<!-- /.page-header -->

				<!-- #secondary-nav-bar -->
				<nav id="secondary-nav-bar" class="navbar navbar-default" style="background-color: #074529">
                  <div class="container">
                    <ul id="secondary-nav" class="nav navbar-nav">
                        <li><a href="qui-somme-nous.php" class="soustitre" style="font-weight: bold;color: #fff;">Qui somme nous</a></li>
                        <!--<li><a href="historique.html" style="font-weight: bold;">Historique</a></li>-->
                        
                        <li class="active"><a href="le-saviez-vous.html"  class="soustitre" style="font-weight: bold;color: #fff">Le saviez vous</a></li>
                        <!--<li><a href="gallery.html" style="font-weight: bold;">Galerie</a></li>-->
                    </ul>
                  </div>
                </nav>
				<!-- /#secondary-nav-bar -->

                <div class="container-fluid">
                    <div class="row">

		                <section class="section-bg-light-gray " style="background-image: url('images/bg-quisomme.jpg')">
		                    <div class="container">
		                    
		                        <!--<div class="flag">
		                            <span class="fa fa-heart-o"></span>
		                        </div>-->
		
		                        <div class="row">
		                        <?php while($donnees = $req->fetch()){ ?>
		                            <div class="col-sm-4 pad-v">
		                            	<figure class="box-3">
		                            	<figcaption><span class="fa fa-heart"></span></figcaption>
		                            	<img class="img-responsive img-thumbnail" src="<?php echo $donnees['img'];?>" width="1200" height="800" alt="<?php echo $donnees['titre'];?>">
		                            	</figure>
		                                <center><h3 style="color: #CE2B37;"><?php echo $donnees['titre']; ?> </h3></center>
		                                <p style="text-align: justify;"><?php echo $donnees['description']; ?>
		                                </p>
		                            </div>
									<?php } ?>
		                          
		                       <!--     <div class="col-sm-4 pad-v">
		                            	<figure class="box-3">
		                            	<figcaption><span class="fa fa-heart"></span></figcaption>
		                            	<img class="img-responsive img-thumbnail" src="images/sv/002.png" width="1200" height="800" alt="002">
		                            	</figure>
		                                <center><h3 style="color: #CE2B37;">Peut-on congeler le fromage ?</h3></center>
		                                <br>
		                                <p style="text-align: justify;">Comme tous les autres aliments Il est toujours possible de congeler le fromage, mais sans dépasser trois mois, il ne faut surtout pas, bien sur, le recongeler ou le laisser trop longtemps a l'aire libre avant de le déguster. Le seul souci que vous pouvez rencontrer est l'aspect extérieur. En effet, un fromage congelé, au contact de l'air ambiant va subir un choc thermique qui, s'il est a pâte souple, donc humide, va le faire couler et s'il est a pâte pressée va le rendre friable. Mais, congelé, le fromage conserve toutes ses qualités nutritionnelles.
		                                </p>
		                            </div>
		                            
		                            <div class="col-sm-4 pad-v">
		                            	<figure class="box-3">
		                            	<figcaption><span class="fa fa-heart"></span></figcaption>
		                            	<img class="img-responsive img-thumbnail" src="images/sv/003.png" width="1200" height="800" alt="003">
		                            	</figure>
		                                <center><h3 style="color: #CE2B37;">Que signifie le taux de matiere grasse ?</h3></center>
		                                <p style="text-align: justify;">On calcule le taux de matiere grasse du fromage sur l'extrait sec. En d'autres termes, c'est comme si on faisait s'évaporer toute l'eau contenue dans le fromage et qu'on calculait le taux de matiere grasse sur le résidu quand l'eau a disparu. Or, notre fromage contient, en moyenne, 50% a 70% d'eau. Donc en réalité si un fromage a un taux d'humidité de 70% et un taux de matiere grasse sur l'extrait sec de 50% cela veut dire qu'il contient en réalité 15% de matiere grasse sur l'ensemble de son poids. Cela nous permet de mettre fin a des idées reçues : "Le fromage fait grossir". Si on en abuse, peut-etre. Mais les hamburgers, pizzas, cacahuetes et autres plats préparés d'avance font bien plus grossir que le fromage, le remede a tous les maux est la modération.<br>

                                        "Cette leçon vaut bien un fromage sans doute." Jean de La Fontaine.
		                                </p>
		                            </div>-->
		                            
		                        </div>
		                        
		                    </div>
		                </section>

		                <!--<section>
		                    <div class="container">
		                        <div class="flag">
		                            <span class="fa fa-heart-o"></span>
		                        </div>
		
		                        <div class="row">
		                            <div class="col-sm-6">
		                                <img alt="chateau" class="img-responsive os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s" src="images/wine-bottles-1.jpg">
		                            </div>
		
		                            <div class="col-sm-6">
		                                <h2>Prestigious vines,<br/>make great wines</h2>
		                                <span class="separator"></span>
		                                <p>
		                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. Quisque cursus ac velit nec elementum. Nulla varius ex quis ante auctor, non consequat velit faucibus.
		                                </p>
		                                <p>
		                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. Quisque cursus ac velit nec elementum. Nulla varius ex quis ante auctor, non consequat velit faucibus.
		                                </p>
		                            </div>
		                        </div>
		                    </div>
		                </section>-->

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

<!-- Mirrored from www.directdesign.it/demos/chateau/the-vineyard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:21:17 GMT -->
</html>