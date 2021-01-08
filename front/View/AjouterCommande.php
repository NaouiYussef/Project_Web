<?php
include_once "../controller/commandeC.php";

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$username=$_POST['username'];
$email=$_POST['email'];
$adress=$_POST['adress'];
$adress2=$_POST['adress2'];
$country=$_POST['country'];
$states=$_POST['states'];
$zip=$_POST['zip'];
$method=$_POST['method'];
$cards=$_POST['cards'];
$expiration=$_POST['expiration'];
$cvv=$_POST['cvv'];
$commande=new commandeC();
$commande->ajouterCommande( $prenom,$nom,$username,$email,$adress,$adress2,$country,$states,$zip,$method,$cards,$expiration,$cvv);

header('Location:index.php');





?>