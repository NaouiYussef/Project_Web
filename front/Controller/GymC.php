<?PHP
	include_once "../connection.php";
	include_once "../model/Gym.php";
	

	class gymC {
		
		function ajouterGym($GymAdress,$GymId,$GymCapacity,$GymEmail,$GymNum,$GymName,$GymPics){
			$sql="INSERT INTO Gym(GymAdress,GymId,GymCapacity,GymEmail,GymNum,GymName,GymPics)
			VALUES (:GymAdress ,:GymId ,:GymCapacity ,:GymEmail ,:GymNum ,:GymName ,:GymPics )";
			$db = connection::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					
					 'GymAdress' =>$GymAdress,
					 'GymId' =>$GymId,
					 'GymCapacity'=>$GymCapacity,
					 'GymEmail'=>$GymEmail,
					 'GymNum'=>$GymNum,
					 'GymName' =>$GymName,
					 'GymPics'=>$GymPics
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		 function afficherGym(){
			
		$sql="SELECT * FROM gym";
		$db = connection::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
			}
		catch (Exception $e){
		die('Erreur: '.$e->getMessage());
			}	
		}


		 function supprimerGym($GymId)  {
		 	try{
		 	$db=connection::getConnexion();
		 	$query=$db->prepare('DELETE FROM gym WHERE GymId= :GymId');
	 	$query->execute([
		 		'GymId'=>$GymId
		 	]);
		 	echo $query->rowCount() . "records DELETED successfully";
		 	 }catch(PDOException $e)
		 	  {$e->getMessage();}
		}
		 function modifiergym($gym,$GymId){
	        echo aaaa;	 
			try {
		 		$db = connection::getConnexion();
		 		$query = $db->prepare(
		 			'UPDATE gym SET 
		 		   
		 		    GymAdress= :GymAdress,
		 			  
		 			 GymCapacity= :GymCapacity,
		 			 GymEmail= :GymEmail,
					  GymNum= :GymNum,
		 			 GymName= :GymName,
		 			 GymPics= :GymPics
		 			WHERE GymId = :GymId'
		 		);
			      $query->execute([
					
		 			'GymAdress'=>$gym->getGymAdress(),
		 			 
		 			'GymCapacity'=>$gym->getGymCapacity(),
		 			'GymEmail'=>$gym->getGymEmail(),
		 			'GymNum'=>$gym->getGymNum(),
		 			'GymName'=>$gym->getGymName(),
		 			'GymPics'=>$gym->getGymPics(),
					 'GymId'=> $GymId
		 		]);
		 		echo $query->rowCount() . " records UPDATED successfully <br>";
		 	} catch (PDOException $e) {
		 		$e->getMessage();
		 	}
		 }
	 function recupererGym($GymId){
	 	$sql="SELECT * from gym where GymId=$GymId";
	 	$db = connection::getConnexion();
	 	try{
	 		$query=$db->prepare($sql);
				$query->execute();

	 		$gym=$query->fetch();
	 		return $gym;
	 	}
	 	catch (Exception $e){
	 		die('Erreur: '.$e->getMessage());
	 	}
	 }

	
	}

?>