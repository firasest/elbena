<?php
class Commande{
private $produit;
private $prix;
private $prix_total;
        
function __construct($produit,$prix,$prix_total){
$this->produit = $produit;
$this->prix = $prix;
$this->prix_total = $prix_total;

}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->exec ("INSERT INTO `commande`(`produit`, `prix`, `prix_total`) VALUES ('$this->produit','$this->prix','$this->prix_total')");
    $resultat = $req->fetch();
    $id=$resultat['id'];

  if (!$resultat)
{
  header('location:../commander.php?error=oui');
  
}
   else
{
       session_start();
       $_SESSION['id'] = $resultat['id'];
       $_SESSION['produit'] = $resultat['produit'];
       $_SESSION['prix'] = $resultat['prix'];
       
       
	   
	header("location:../commander.php?id=$id");


} 

}
}


$commande = new Commande($_POST['produit'],$_POST['prix'],$_POST['prix_total']);


?>