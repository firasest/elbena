<?php
include("includes/connect_db.php");
$rec=6;

$recbyid= $bdd->query('SELECT * FROM recette');
$rectotal = $recbyid->rowCount();
/*$pagesTotales=ceil($rectotal/$recbyid);
      if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotales) {
	           $_GET['page'] = intval($_GET[page]);
	           $pageCourante = $_GET['page'];
	} else {
	   $pageCourante = 1;
	}
	$depart = ($pageCourante-1)*$rec;*/
$req = $bdd->query("SELECT * FROM recette  ");
/*$donnees = $req->fetch();*/
 ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/blog-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:21:49 GMT -->
<head>
        <title>Galerie</title>
        
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
				<div class="page-header" data-stellar-background-ratio="0.2" style="background-image:url(images/elbena/galerie.jpg)">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Accueil</a>
									</li>
									<li class="active">Galerie
									</li>
								</ol>
								<h1>
									Galerie
								</h1>
							</div>
						</div>
					</div>
				</div>
				<!-- /.page-header -->
				
				<section id="blog">
					<div class="container">
						<div class="row">
								
							<!-- content -->
							<div class="col-sm-8">
								<?php 
							
							while($donnees = $req->fetch()){ ?>
								





								<article class="entry" id="Bistecca-di-fiore-pannee">
								<a href="commander.php?id=<?php echo $donnees['id']; ?>" >
									<figure class="box-1">
										<a href="commander.php?id=<?php echo $donnees['id']; ?>" ><img alt="slider 1" class="img-responsive" src="<?php echo $donnees['img']; ?>"></a>
							</figure>
									<div class="entry-preview clearfix">
										
										<h2>
											<a href="commander.php?id=<?php echo $donnees['id']; ?>"> <?php echo $donnees['titre']; ?></a>
							</h2>
										
									</div>
								</a>
								</article>
								
								<?php } ?>
								

								<?php
      for($i=1;$i<=$pagesTotales;$i++) {
         if($i == $pageCourante) {
            echo $i.' ';
         } else {
            echo '<a href="index.php?page='.$i.'">'.$i.'</a> ';
         }
      }
      ?>
								
								<nav class="text-center">
								  <ul class="pagination-product pagination">
								   
								    <li class="active"><a href="">1</a></li>
								    <li><a href="commander.php?id=<?php echo $donnees['id']; ?>">2</a></li>
								    <li><a href="commander.php?id=<?php echo $donnees['id']; ?>">3</a></li>
								    
								    <li>
								      <a href="recette-page-2.php" aria-label="Next">
								        <span aria-hidden="true" class="fa fa-angle-right"></span>
								      </a>
								    </li>
								  </ul>
								</nav>		
							</div>
							
							<!-- /content -->
							
							<!-- sidebar -->
							<div class="col-sm-4">
								


								<ul class="list-group widget">
									<li class="list-group-item style-2 list-group-label" style="color: #BDB76B;">Nos produits</li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=*">Tous les produits</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.rape">Patisserie traditionnelle</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.pate-presse">Kounefa</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.pate-file"> Baklewa</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.pate-molle">Gateaux</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.pate-fraiche"> Chocolat</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.a-base-alimentaire">Macaron</a></li>

								</ul>    	
							
							
								<!--<ul class="list-group widget list-icon-left">
									<li class="list-group-item style-2 list-group-label" style="color: #fff5ee;
    											text-shadow: #000000 1px 1px, #000000 -1px 1px, #000000 -1px -1px, #000000 1px -1px;">Présentation 
									</li>
									<li class="list-group-item style-2">
										<a href="qui-somme-nous.html"> Qui sommes-nous ?</a>
									</li>
									<li class="list-group-item style-2">
										<a href="historique.html">Historique</a>
									</li>
									<li class="list-group-item style-2">
										<a href="le-saviez-vous.html">  Le saviez-vous ?</a>
									</li>
									<li class="list-group-item style-2">
										<a href="gallery.html"> Gallery</a>
									</li>
								</ul>-->
								
								<ul class="list-group widget list-icon-left no-mar-v">
									<li class="list-group-item style-2 list-group-label" style="color: #CE2B37">Galerie
									</li>
								</ul>
								
								<div class="row row-small-gutter">
									<div class="col-xs-4 col-small-gutter">
										<a href="BISTECCA-DI-FIORE-PANNEE.php"><img alt="BISTECCA-DI-FIORE-PANNEE" class="img-responsive img-thumbnail" src="images/galerie/slide-1-blog.png"/></a>
									</div>
									<div class="col-xs-4 col-small-gutter">
										<a href="TIRAMISU.php"><img alt="TIRAMISU" class="img-responsive img-thumbnail" src="images/galerie/slide-2-blog.png"/></a>
									</div>
									<div class="col-xs-4 col-small-gutter">
										<a href="TORTAFIORE.php"><img alt="TORTAFIORE" class="img-responsive img-thumbnail" src="images/galerie/slide-3-blog.png"/></a>
									</div>
									<div class="col-xs-4 col-small-gutter">
										<a href="CREME-DE-STRACCHINO.php"><img alt="CREME-DE-STRACCHINO" class="img-responsive img-thumbnail" src="images/galerie/slide-4-blog.png"/></a>
									</div>
									<div class="col-xs-4 col-small-gutter">
										<a href="FIORE-DOREES.php"><img alt="FIORE-DOREES" class="img-responsive img-thumbnail" src="images/galerie/slide-5-blog.png"/></a>
									</div>
									<div class="col-xs-4 col-small-gutter">
										<a href="GRATIN-BASTARDO.php"><img alt="GRATIN-BASTARDO" class="img-responsive img-thumbnail" src="images/galerie/slide-6-blog.png"/></a>
									</div>
									
									
								</div>
							</div>
							<!-- /sidebar -->
							
						</div>
					</div>
				</section>
				
				<?php include("includes/footer.php") ?>
				
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
        <!--<script>
			$(document).ready(function(){
		  $('a[href*=#]').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		    && location.hostname == this.hostname) {
		      var $target = $(this.hash);
		      $target = $target.length && $target
		      || $('[name=' + this.hash.slice(1) +']');
		      if ($target.length) {
		        var targetOffset = $target.offset().top;
		        $('html,body')
		        .animate({scrollTop: targetOffset}, 1000);
		       return false;
		      }
		    }
		  });
		}); 
		</script>-->
        
	</body>

<!-- Mirrored from www.directdesign.it/demos/chateau/blog-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:22:28 GMT -->
</html>