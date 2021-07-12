<?php
class Produit{
private $produit;
private $prix;



                

function __construct($produit,$prix){
$this->produit = $produit;
$this->prix = $prix;




}


public function ajouter(){ 

include('../includes/connect_db.php');
    


		$req = $bdd->exec ("INSERT INTO `panier`(`produit`, `prix`) VALUES ('$this->produit','$this->prix')");
		
		echo'oui';
                //return TRUE;

}

public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM `panier` WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}

}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['produit'],$_POST['pass'],$_POST['type']);


?>