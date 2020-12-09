<?php 
include "../Controller/formulaireC.php"; 

$nouv= new formulaireC();
$nouv->supprimer($_GET['id']);
header('Location:demande.php');


