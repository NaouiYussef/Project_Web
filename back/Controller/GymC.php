<?PHP
	require "../connection.php";
	require "../model/Gym.php";
	

	class GymC {
		
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
		 function modifierGym($gym,$GymId){
		 	try {
			
		 		$db = connection::getConnexion();
		 		$query = $db->prepare(
		 			'UPDATE gym SET 
		 		   
		 		    GymAdress=:GymAdress,
		 			 
		 			 GymCapacity=:GymCapacity,
		 			 GymEmail=:GymEmail,
					  GymNum=:GymNum,
		 			 GymName=:GymName,
		 			 GymPics=:GymPics
		 			WHERE GymId=:GymId'
		 		);
			      $query->execute([
					'GymAdress'=>$gym->getGymAdress(),
					
					'GymCapacity'=>$gym->getgymCapacity(),
					'GymEmail'=>$gym->getgymEmail(),
					'GymNum'=>$gym->getgymNum(),
					'GymName'=>$gym->getgymName(),
					'GymPics'=>$gym->getgymPics(),
					'GymId'=>$GymId
				  ]);
				  echo $query->rowCount() . "records CHANGED successfully";
		 		
				}catch (PDOException $e) {
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