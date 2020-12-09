<?php 

include "../Controller/formulaireC.php"; 
session_start();
$nomprenom=$_POST['nomprenom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$option=$_POST['option'];
$message=$_POST['message'];
$cv=$_POST['cv'];
$idClient=$_SESSION['user_id'];
$nouv=new formulaireC();



 $nouv->ajouterformulaire ($nomprenom,$email,$telephone,$option,$message,$cv,$idClient);
  header('location:profile.php');

 