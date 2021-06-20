<?php
class Client{
private $nom_prenom;
private $email;
private $adresse;
private $ville;
private $region;
private $zip;


                

function __construct($nom_prenom,$email,$adresse,$ville,$region,$zip){
$this->nom_prenom = $nom_prenom;
$this->email = $email;
$this->adresse = $adresse;
$this->ville = $ville;
$this->region = $region;
$this->zip = $zip;


}


public function ajouter(){ 

include('../includes/connect_db.php');
    
	
		$req = $bdd->exec ("INSERT INTO `client`(`nom_prenom`,`email`,`adresse`,`ville`, `region`, `zip`) 
                                         VALUES ('$this->nom_prenom','$this->email','$this->adresse','$this->ville','$this->region','$this->zip')");
		
		echo'oui';
                //return TRUE;

}



}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['produit'],$_POST['pass'],$_POST['type']);


?>