<?php
require_once('../Model/Admin.class.php');
$admin = new Admin($_POST['login'],$_POST['password'],$_POST['nom']);
$admin->ajouter();

header("location:../login.php?resultat=oui");
//exit();
?>