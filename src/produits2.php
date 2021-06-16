<?php
include("includes/connect_db.php");
$req = $bdd->query("SELECT * FROM produit");
$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>VECCHIO BASTARDO PORITION</title>
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <link rel="icon" type="image/png" href="images/icon.png" />
        <meta property="og:url"           content="http://fromagefiore.com/vecchio-bastardo-porition.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="vecchio-bastardo-porition" />
        <meta property="og:description"   content="Notre prédilection va a ce fromage, il est authentique, généreux, au goût fruité et au parfum inimitable, c'est le résultat d'un affinage long et attentif.Prfanes s'abstenir." />
        <meta property="og:image"         content="http://fromagefiore.com/images/presse/VECCHIO-BASTARDO-DI-FIORE-copie_old.png" />
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="src/css/font-awesome.css" rel="stylesheet">
        <link href="src/css/animate.css" rel="stylesheet">
        <link href="src/css/swipebox.css" rel="stylesheet">
        <link href="src/css/swiper.min.css" rel="stylesheet">
        <link href="src/css/winemaker-theme.css" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
        <link href="src/css/style.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <script src="src/js/modernizr-2.6.2.min.js"></script>
        <style type="text/css">
          @media (min-width:992px){
            .produitFont{
               margin-bottom: -51px !important;
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
    	
        <div class="container-fluid" id="main-container" style="background-image: url(images/nofromage.jpg);">
            <div class="row" id="main-row">
            
            <?php include("includes/header.php") ?>

                <div class="container">
                    <div class="row">
	                                        
	            <section id="product-sheet" class="clearfix">
							<div class="col-sm-4 col-sm-offset-1-">
								<a href="images/presse/VECCHIO-BASTARDO-DI-FIORE-copie_old.png" class="img-product swipebox">
									<img class="img-responsive" src="images/presse/VECCHIO-BASTARDO-DI-FIORE-copie_old.png" alt="VECCHIO BASTARDO DI FIORE" width="300" height="600">
								</a>
							</div>
							<div class="col-sm-8">
								<ol class="breadcrumb">
								  <li><a href="index.html" style="text-transform: uppercase;">Accueil</a></li>
								  <li><a href="products.html" style="text-transform: uppercase;">Nos Fromages</a></li>
								  <li class="active">VECCHIO BASTARDO PORITION</li>
								</ol>
							<h1><span style="color:#1a761d">VECCHIO </span><span style="color:#fff5ee;text-shadow: #000000 1px 1px, #000000 -1px 1px, #000000 -1px -1px, #000000 1px -1px;">BASTARDO</span><span style="color:#CE2B37"> PORITION</span></h1>
							<p>
                           Le Vecchio bastardo  di fiore c'est un fromage  vieux authentique,genereux, au gout fruité et au parfum inimitable  Le vecchio  est un fromage qui se marie bien avec les differents gouts.
							</p>				
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      
    </div>
    <div>
      <p class="panel-body">
       <table class="table table-bordered" style="background-color: #744a29;">
          <thead>
            <tr>
              <th scope="col" style="color: #fff">Produit </th>
              <th scope="col" style="color: #fff">Code Produit </th>
              <th scope="col" style="color: #fff">Poids moyen </th>
              <th scope="col" style="color: #fff">Code EAN </th>
              <th scope="col" style="color: #fff">DLC </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="color: #fff"><center>Il Vecchio bastardo di Fiore</center></td>
              <td style="color: #fff"><center>P04F040602</center></td>
              <td style="color: #fff"><center>Portion</center></td>
              <td style="color: #fff"><center>2407802XXXXXX</center></td>
              <td style="color: #fff"><center>360 jours</center></td>
            </tr>
          </tbody>
        </table>
      </p>
    </div>
  </div>
  <br><br>

  <div class="row">
    <div class="col-sm-12 col-sm-offset-10">
        <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Ffromagefiore.com%2Fvecchio-bastardo-porition.html&layout=button&size=large&mobile_iframe=true&width=89&height=28&appId" width="89" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
  </div>
</div>							
</div>
</section>
</div>
</div>

<?php include("includes/footer.php") ?>

            </div>
        </div>
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
		<script type="text/javascript">
		;( function( $ ) {
			$( '.swipebox' ).swipebox();
		} )( jQuery );
		</script>        
	</body>
</html>