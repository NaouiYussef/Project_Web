<?php 
include "../Controller/accountC.php"; 
echo  $_GET['Id'];
$nouv= new AccountC();
$nouv->supprimer($_GET['Id']);
header('Location:index.php');



