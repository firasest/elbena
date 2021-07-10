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
</style>
    </head>
    <body>
        
    
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="Controller/AjouterClient.php?<?php echo $donnees['id']; ?>" method="post">

        <div class="row">
          <div class="col-50">
            <h3>Adresse de facturation</h3>
            <table>
            <tr>
            <label for="fname"><i class="fa fa-user"></i> Nom & Prenom</label>
            <input type="text" class="form-control" id="msg-email" placeholder="<?php echo $donnees['nom_prenom']; ?>" name="nom_prenom" value="<?php echo $donnees['nom_prenom'] ?>" >

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" class="form-control" id="msg-email" placeholder="<?php echo $donnees['email']; ?>" name="email" value="<?php echo $donnees['email'] ?>">

            <label for="adr"><i class="fa fa-address-card-o"></i> Adresse </label>
            <input type="text" class="form-control" id="msg-email" placeholder="<?php echo $donnees['adresse']; ?>" name="adresse" value="<?php echo $donnees['adresse'] ?>" >

            <label for="city"><i class="fa fa-institution"></i> Ville</label>
            <input type="text" class="form-control" id="msg-email" placeholder="<?php echo $donnees['ville']; ?>" name="ville" value="<?php echo $donnees['ville'] ?>" >

            <div class="row">
              <div class="col-50">
                <label for="state">Region</label>
                <input type="text" class="form-control" id="msg-email" placeholder="<?php echo $donnees['region']; ?>" name="region" value="<?php echo $donnees['region'] ?>">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="msg-email" placeholder="<?php echo $donnees['zip']; ?>" name="zip" value="<?php echo $donnees['zip'] ?>">
              </div>
            </div>
          </div>

          
        </div>
        
        <button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit">
									<span class="btn-label">Valider</span>
									<span class="btn-icon fa fa-envelope"></span>
									</button>
      </form>
    </div>
  </div>

  <div class="col-25" id="part2">
    <div class="container">
      
      <form action="Controller/AjouterCommande.php" method="post">

      <table id="t01">
  <tr>
    <th>Produit</th>
    <th>Prix</th> 
    
  </tr>
  <?php while($donnees1 = $req1->fetch()){ ?>
  <tr>
    <td><input type="text" name="produit" value="<?php echo $donnees1['produit']; ?>"></td>
    <td><input type="text" name="prix" value="<?php echo $donnees1['prix']; ?>"></td>
  </tr>
  <?php } ?>
  <tr>
  <th>Total</th>
    <th><input type="text" name="prix_total" value="<?php echo $donnees3['total']; ?>"></th>  
  </tr>
</table>


<button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit">
									<span class="btn-label">Commander</span>
									<span class="btn-icon fa fa-envelope"></span>
									</button>



</form>












    </div>
  </div>
</div>
</body>
    </html>