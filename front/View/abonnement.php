<?php
include "../connection.php";
include_once "../controller/abonnementC.php";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$adress1=$_POST['adress1'];
$adress2=$_POST['adress2'];
$pasword=$_POST['pasword'];
$country=$_POST['country'];
$stat=$_POST['stat'];
$zip=$_POST['zip'];
$abonnement=new abonnementC();
$abonnement->ajouterabon($firstname,$lastname,$username,$email,$adress1,$adress2,$pasword,$country,$stat,$zip);









?>