<?PHP
	include "../controller/GymC.php";

	$gymC=new gymC();
	
	if (isset($_POST["GymId"])){
		$gymC->supprimerGym($_POST["GymId"]);
		header('Location:../../back/view/tables.php');
	}

?>