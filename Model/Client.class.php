<?php
class Client{
private $nom_prenom;
private $email;
private $adresse;
private $ville;
private $region;
private $zip;
private $produit;
private $prix;
private $prix_total;



                

function __construct($nom_prenom,$email,$adresse,$ville,$region,$zip,$produit,$prix,$prix_total){
$this->nom_prenom = $nom_prenom;
$this->email = $email;
$this->adresse = $adresse;
$this->ville = $ville;
$this->region = $region;
$this->zip = $zip;
$this->produit = $produit;
$this->prix = $prix;
$this->prix_total = $prix_total;

}


public function ajouter(){ 

include('../includes/connect_db.php');
    
	
		$req = $bdd->exec ("INSERT INTO `client`(`nom_prenom`,`email`,`adresse`,`ville`, `region`, `zip`,`produit`, `prix`, `prix_total`) 
                                         VALUES ('$this->nom_prenom','$this->email','$this->adresse','$this->ville','$this->region','$this->zip','$this->produit','$this->prix','$this->prix_total')");
		
		echo'oui';
                //return TRUE;

}

public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}

}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['produit'],$_POST['pass'],$_POST['type']);


?>