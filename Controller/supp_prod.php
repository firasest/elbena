<?php
require_once('../Model/Produit.class.phpp');
$client = new Client($_POST['produit'],$_POST['prix']);
$client->supprimer();

header("location:../checkout.php?resultat=ouiSupp");
//exit();
?>