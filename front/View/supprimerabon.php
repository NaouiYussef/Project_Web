<?PHP
	include "../controller/abonnementC.php";

	$abonnementC=new abonnementC();
	
	if (isset($_POST["username"])){
		$abonnementC->supprimerabon($_POST["lastname"]);
		header('Location:../back/tables.php');
	}

?>