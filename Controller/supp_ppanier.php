<?php
require_once('../Model/Produit.class.php');
$produit = new Produit($_POST['produit'],$_POST['prix']);
$produit->supprimer();

header("location:../checkout.php?resultat=ouisupp");
//exit();
?>