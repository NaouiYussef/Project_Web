<?PHP
	include "cartC.php";

	$cartC=new cartC();
	
	if (isset($_POST["id"])){
		$cartC->supprimercart($_POST["id"]);
		header('Location:shop.php');
	}

?>