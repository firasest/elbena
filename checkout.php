<?php
include("includes/connect_db.php");

$req = $bdd->query("SELECT * FROM panier ");
//$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html>
    <head>
    <link href="src/css/checkout.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
        
    
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Nom & Prenom</label>
            <input type="text" id="fname" name="nom_prenom" placeholder="Entrer nom et prénom">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="entrer Email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Adresse </label>
            <input type="text" id="adr" name="adresse" placeholder="Entrer Adresse ">
            <label for="city"><i class="fa fa-institution"></i> Ville</label>
            <input type="text" id="city" name="ville" placeholder="Entrer Ville">

            <div class="row">
              <div class="col-50">
                <label for="state">Region</label>
                <input type="text" id="state" name="region" placeholder="Entrer region">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="Entrer ZIP">
              </div>
            </div>
          </div>

          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Adresse de livraison identique à la facturation
        </label>
        <input type="submit" value="Commander" class="btn">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <?php while($donnees = $req->fetch()){ ?>
      <p><a href="#"><?php echo $donnees['produit']; ?></a> <span class="price"><?php echo $donnees['prix']; ?>$</span>
      <button style="font-size:24px">Supprimer <i class="fa fa-trash-o"></i></button>
    </p>
      <?php } ?>
     
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>
</body>
    </html>