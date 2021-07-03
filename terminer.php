<?php
include("includes/connect_db.php");

$req1 = $bdd->query("SELECT * FROM commande ");
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
      
    </div>
  </div>

  <div class="col-25" id="part2">
    <div class="container">
      
      <form action="Controller/AjouterCommande.php" method="post">

      <table id="t01">
  <tr>
    <th>Nom Et Prenom</th>
    <th>Commande</th> 
    
  </tr>
  <?php while($donnees1 = $req1->fetch()){ ?>
  <tr>
    <td><input type="text" name="produit" value="<?php echo $donnees1['']; ?>"></td>
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