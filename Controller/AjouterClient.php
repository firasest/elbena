<?php
require_once('../Model/Client.class.php');
$client = new Client($_POST['nom_prenom'],$_POST['email'],$_POST['adresse'],$_POST['ville'],$_POST['region'],$_POST['zip'],$_POST['produit'],$_POST['prix'],$_POST['prix_total']);
$client->ajouter();

header("location:../checkout.php#part2");
//exit();
?>