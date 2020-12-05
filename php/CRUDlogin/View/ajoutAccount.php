<?php 

include "../Controller/AccountC.php"; 

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$nouv=new AccountC();

$nouv->ajouterAccount($FirstName,$LastName,$Email,$Password);
header('location:back.php');
