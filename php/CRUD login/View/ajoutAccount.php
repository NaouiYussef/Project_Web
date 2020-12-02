<?php 

include "../Controller/AccountC.php"; 

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$Password=$_POST['Email'];
$nouv=new AccountC();

$nouv->ajouterAlbum($titre,$prix,$image);
