<?php
class Admin{
private $login;
private $password;
private $nom;


                

function __construct($login,$password,$nom){
$this->login = $login;
$this->password = $password;
$this->nom = addslashes($nom);




}

public function ajouter(){ 

  include('../includes/connect_db.php');
      
    
      $req = $bdd->exec ("INSERT INTO `admin`(`login`, `password`, `nom`) VALUES ('$this->login','$this->password','$this->nom')");
      
      echo'oui';
                  //return TRUE;
  
  }


    public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
    $req=$bdd->exec("UPDATE `admin` SET  `login`='$this->login',`password`='$this->password',`nom`='$this->nom' WHERE id=$id");
    
    
    echo'oui';
    //return TRUE;
 			}



public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM `admin` WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
        
}

//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['nom'],$_POST['pass'],$_POST['type']);


?>