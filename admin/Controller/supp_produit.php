<?php
ob_start();
require_once('../Model/Produit.class.php');
$produit = new Produit(
$_POST['titre'],
$_POST['description'],
$_POST['img'],
$_POST['produit'],
$_POST['code_produit'],
$_POST['poids'],
$_POST['code_ean'],
$_POST['prix'],
$_POST['catagorie'],
$_POST['catagorie2']);
$produit->supprimer();

header("location:../listesproduits.php?resultat=oui");
//exit();
?>