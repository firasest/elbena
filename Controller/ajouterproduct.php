<?php
require_once('../Model/Produit.class.php');
$produit = new Produit($_POST['produit'],$_POST['prix']);
$produit->ajouter();

header("location:../checkout.php?resultat=oui");
//exit();
?>