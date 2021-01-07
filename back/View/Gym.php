<?php
//include "../config.php";
include_once "../controller/GymC.php";

$GymAdress=$_POST['GymAdress'];
$GymId=$_POST['GymId'];
$GymCapacity=$_POST['GymCapacity'];
$GymEmail=$_POST['GymEmail'];
$GymNum=$_POST['GymNum'];
$GymName=$_POST['GymName'];
$GymPics=$_POST['GymPics'];
$gym=new gymC();
$gym->ajoutergym($GymAdress,$GymId,$GymCapacity,$GymEmail,$GymNum,$GymName,$GymPics);









?>