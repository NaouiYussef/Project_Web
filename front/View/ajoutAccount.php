<?php 

include "../Controller/AccountC.php"; 

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$nouv=new AccountC();
$test_email=new AccountC();
if( $test_email->chercherEmail($Email) == 1){

 $nouv->ajouterAccount($FirstName,$LastName,$Email,$Password);
 header('location:index.php');
}
 else 
{
   
   
    header('location:register.php?error=Email already taken');
    

}