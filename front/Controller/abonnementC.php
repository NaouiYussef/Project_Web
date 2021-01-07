<?PHP
	include_once "../connection.php";
	include_once "../model/abonnement.php";
	

	class abonnementC {
		
		function ajouterabon($firstname,$lastname,$username,$email,$adress1,$adress2,$pasword,$country,$stat,$zip){
			$sql="INSERT INTO abonnement(firstname,lastname,username,email,adress1,adress2,pasword,country,stat,zip)
			VALUES (:firstname ,:lastname ,:username ,:email ,:adress1 ,:adress2 ,:pasword,:country,:stat,:zip )";
			$db = connection::getConnexion();
			try{
				$query = $db->prepare($sql); 
			
				$query->execute([
					
					 'firstname' =>$firstname,
					 'lastname' =>$lastname,
					 'username'=>$username,
					 'email'=>$email,
					 'adress1'=>$adress1,
					 'adress2' =>$adress2,
					 'pasword'=>$pasword,
					 'country'=>$country,
					 'stat'=>$stat,
					 'zip'=>$zip

					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		 function afficherabon(){
			
		$sql="SELECT * FROM abonnement";
		$db = connection::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
			}
		catch (Exception $e){
		die('Erreur: '.$e->getMessage());
			}	
		}


		 function supprimerabon($username)  {
		 	try{
		 	$db=connection::getConnexion();
		 	$query=$db->prepare('DELETE FROM abonnement WHERE username= :username');
	 	$query->execute([
		 		'username'=>$username
		 	]);
		 	echo $query->rowCount() . "records DELETED successfully";
		 	 }catch(PDOException $e)
		 	  {$e->getMessage();}
		}
		 function modifierabon($abonnement,$username){
		 	try {
		 		$db = connection::getConnexion();
		 		$query = $db->prepare(
		 			'UPDATE abonnement SET 
		 		   
		 		    firstname= :firstname,
		 			  lastname= :lastname,
		 			 username= :username,
		 			 email= :email,
					  adress1= :adress1,
		 			 adress2= :adress2,
		 			 pasword= :pasword,
					  country= :country,
					  stat= :stat,
					  zip= :zip
		 			WHERE username = :username'
		 		);
			      $query->execute([
					
		 			'firstname'=>$abonnement->getfirstname(),
		 			 'lastname'=>$abonnement->getlastname(),
		 			'username'=>$abonnement->getusername(),
		 			'email'=>$abonnement->getemail(),
		 			'adress1'=>$abonnement->getadress1(),
		 			'adress2'=>$abonnement->getadress2(),
					 'pasword'=>$abonnement->getpasword(),
					 'country'=>$abonnement->getcountry(),
					 'stat'=>$abonnement->getstat(),
					 'zip'=>$abonnement->getzip(),
					 'username'=> $username
		 		]);
		 		echo $query->rowCount() . " records UPDATED successfully <br>";
		 	} catch (PDOException $e) {
		 		$e->getMessage();
		 	}
		 }
	 function recupererabon($username){
	 	$sql="SELECT * from abonnement where username=$username";
	 	$db = connection::getConnexion();
	 	try{
	 		$query=$db->prepare($sql);
				$query->execute();

	 		$abonnement=$query->fetch();
	 		return $abonnement;
	 	}
	 	catch (Exception $e){
	 		die('Erreur: '.$e->getMessage());
	 	}
	 }

	
	}

?>