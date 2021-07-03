<?php
class Commande{
private $produit;
private $prix;
private $prix_total;


                

function __construct($produit,$prix,$prix_total){
$this->produit = $produit;
$this->prix = $prix;
$this->prix_total = addslashes($prix_total);



}


public function ajouter(){ 

include('../includes/connect_db.php');
    
	
		$req = $bdd->exec ("INSERT INTO `commande`(`produit`, `prix`, `prix_total`) VALUES ('$this->produit','$this->prix','$this->prix_total')");
		
		echo'oui';
                //return TRUE;

}



}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['produit'],$_POST['pass'],$_POST['type']);


?>