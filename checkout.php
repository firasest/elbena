<?php
include("includes/connect_db.php");

$req1 = $bdd->query("SELECT * FROM panier ");
$req2 = $bdd->query("SELECT * FROM client ");
$donnees2 = $req2->fetch();
$req3 = $bdd->query("SELECT SUM(prix) AS total FROM panier ");
$donnees3 = $req3->fetch();
//$donnees = $req->fetch();
 ?>
 <?php
include("includes/connect_db.php");

$req = $bdd->query("SELECT * FROM client ");
$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- meta -->
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <link rel="icon" type="image/png" href="images/icon.png" />
        <!-- You can use Open Graph tags to customize link previews.
        Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
        <meta property="og:url"           content="http://fromagefiore.com/barbarossa-edam.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="barbarossa-edam" />
        <meta property="og:description"   content="Barbarossa :  Préparation  aromatisé au fromage Edam." />
        <meta property="og:image"         content="http://fromagefiore.com/images/a-base-alimentaire/Edam%20Barbarossa%20.png" />
        
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
        <script src="src/js/modernizr-2.6.2.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <style type="text/css">
          @media (min-width:992px){
            .produitFont{
               margin-bottom: -51px !important;
            }

          }



        </style>
    <link href="src/css/checkout.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
.check{
  margin: 50%;
}
</style>
    </head>
    <body>
        
    
<div class="row" class="check">
  <div class="he" style="
    margin-left: 7%;
">
<?php include("includes/header.php") ?>
</div>
  <div class="col-75">
    <div class="container">

   
      <form action="Controller/AjouterClient.php" method="post">

    

        <div class="row">
          <div class="col-50" style="
    margin-right: 20%;
    margin-left: 20%;
">
            <h3>Adresse de facturation</h3>
            <table>
            <tr>
            <label for="fname"><i class="fa fa-user"></i> Nom & Prenom</label>
            <input type="text" class="form-control" id="msg-email" placeholder="Entrer votre Nom & Prénom" name="nom_prenom"  >

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" class="form-control" id="msg-email" placeholder="Entrer votre Email" name="email" >

            <label for="adr"><i class="fa fa-address-card-o"></i> Adresse </label>
            <input type="text" class="form-control" id="msg-email" placeholder="Entrer votre Adresse" name="adresse"  >

            <label for="city"><i class="fa fa-institution"></i> Ville</label>
            <input type="text" class="form-control" id="msg-email" placeholder="Entrer votre Ville" name="ville"  >

            <div class="row">
              <div class="col-50">
                <label for="state">Region</label>
                <input type="text" class="form-control" id="msg-email" placeholder="Entrer votre Region" name="region" >
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="msg-email" placeholder="Entrer votre ZIP" name="zip" >
              </div>
            </div>
          </div>

          
        </div>

        <table id="t01">
  <tr>
    <th>Produit</th>
    <th>Prix</th> 
    
  </tr>
  <?php while($donnees1 = $req1->fetch()){ ?>
  <tr>
    <td><input type="text" name="produit" value="<?php echo $donnees1['produit']; ?>"></td>
    <td><input type="text" name="prix" value="<?php echo $donnees1['prix']; ?>"></td>
    <td><a href="Controller/supp_ppanier.php?id=<?php echo $donnees1['id']; ?>">Supprimer</a></td>
  </tr>
  <?php } ?>
  <tr>
  <th>Total</th>
    <th style="
    color: green;
"><input type="text" name="prix_total" value="<?php echo $donnees3['total']; ?>"></th>  
  </tr>
</table>
        
        <button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit">
									<span class="btn-label">Valider</span>
									<span class="btn-icon fa fa-envelope"></span>
									</button>
                  <button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit">
									<span class="btn-label"><a href="Controller/supp_ppanier.php?id=<?php echo $donnees['id']; ?>">Supprimer</a></span>
									<span class="btn-icon fa fa-envelope"></span>
									</button>
      </form>
    </div>
  </div>


</div>
  <!--<script type="text/javascript" src="../../../code.jquery.com/jquery-1.11.3.min.js"></script>-->
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