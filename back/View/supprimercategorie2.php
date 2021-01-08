<?PHP
include "../controller/abonnementC.php";
$categorieC=new abonnementC();
if (isset($_POST["username"])){
	$categorieC->supprimerabon($_POST["username"]);
	header('Location:afficherabonnement.php');
}

?>