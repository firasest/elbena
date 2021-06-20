<?php
require_once('../Model/Client.class.php');
$client = new Client($_POST['nom_prenom'],$_POST['email'],$_POST['adresse'],$_POST['prix'],$_POST['ville'],$_POST['region'],$_POST['zip']);
$client->ajouter();

header("location:../checkout.php?resultat=oui");
//exit();
?>