<?PHP
	include_once "../connection.php";
	

	class commandeC {
		
		function ajouterCommande( $prenom ,$nom  ,$username,$email ,$adress ,$adress2,$country,$states ,$zip ,$method ,$cards,$expiration,$cvv){
			$sql="INSERT INTO commande (prenom ,nom  ,username,email ,adress ,adress2,country,states ,zip ,method ,cards,expiration,cvv) 
			VALUES (:prenom ,:nom  ,:username,:email ,:adress ,:adress2,:country,:states ,:zip ,:method ,:cards,:expiration ,:cvv )";
			$db = connection::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					
					 'prenom' =>$prenom,
					 'nom' =>$nom,
					 'username'=>$username,
					 'email'=>$email,
					 'adress'=>$adress,
					 'adress2' =>$adress2,
					 'country'=>$country,
					 'zip'=>$zip,
					 'states'=>$states,
					 'method' =>$method,
					 'cards'=>$cards, 
					 'expiration'=>$expiration,
					 'cvv'=>$cvv,
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		 function afficherALLCommande(){
			
		$sql="SELECT * FROM commande";
		$db = connection::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
			}
		catch (Exception $e){
		die('Erreur: '.$e->getMessage());
			}	
		}
		
		public function afficherCommande($id) {
            $sql='SELECT * from commande where id=:id'; // Select * (all) el utilisateur el id mte3ou 1
            $db=connection::getConnexion(); // madhebik t3awedhom nafshom
            $query=$db->prepare($sql); // madhebik t3awedhom nafshom
            $query->execute(['id' => $id]); // madhebik t3awedhom nafshom
            return $query->fetch(PDO::FETCH_ASSOC); // madhebik t3awedhom nafshom
        }

		 function supprimerCommande($id)  {
		 	try{
		 	$db=connection::getConnexion();
		 	$query=$db->prepare('DELETE FROM commande WHERE id= :id');
	 	$query->execute([
		 		'id'=>$id
		 	]);
		 	echo $query->rowCount() . "records DELETED successfully";
		 	 }catch(PDOException $e)
		 	  {$e->getMessage();}
		}
		 function modifierCommande($commande,$id){
		 			$sql='UPDATE commande SET 
		 		   
		 		    prenom= :prenom,
		 			  nom= :nom,
		 			 username= :username,
		 			 email= :email,
					  adress= :adress,
		 			 adress2= :adress2,
		 			 country= :country,
					  states= :states,
					  zip= :zip,
					  method= :method,
		 			 cards= :cards,
					  expiration= :expiration,
					  cvv= :cv,
					  promo= :promo,
					 WHERE id = :id';
					 $db=connection::getConnexion();
					 $query=$db->prepare($sql);
		 		
			      $query->execute([
					
		 			'prenom'=>$commande->getprenom(),
		 			 'nom'=>$commande->getnom(),
		 			'username'=>$commande->getusernameP(),
		 			'email'=>$commande->getemailP(),
		 			'adress'=>$commande->getadress(),
		 			'adress2'=>$commande->getadress2(),
		 			'country'=>$commande->getcountryP(),
					 'states'=>$commande->getstatesP(),
					 'zip'=>$commande->getzip(),
		 			'method'=>$commande->getmethod(),
					 'cards'=>$commande->getcardsP(),
					 'expiration'=>$commande->getexpiration(),
					 'cvv'=>$commande->getcvv(),
					 'promo'=>$commande->getpromo(),
					 'id'=> $id
		 		]);
		 		
		 }
	 function recupererCommande($id){
	 	$sql="SELECT * from commande where id=$id";
	 	$db = connection::getConnexion();
	 	try{
	 		$query=$db->prepare($sql);
				$query->execute();

	 		$commande=$query->fetch();
	 		return $commande;
	 	}
	 	catch (Exception $e){
	 		die('Erreur: '.$e->getMessage());
	 	}
	 }

	
	}

?>