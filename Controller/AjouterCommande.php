<?php
require_once('../Model/Commande.Class.php');
$commande = new Commande($_POST['produit'],$_POST['prix'],$_POST['prix_total']);
$commande->ajouter();

header("location:../commande.php?id=$id");
//exit();
?>