<?php 
include "../Controller/FeedbackC.php"; 
echo  $_GET['Id'];
$nouv= new feedbackC();
$nouv->supprimer($_GET['id']);
header('Location: ../tables.php');
