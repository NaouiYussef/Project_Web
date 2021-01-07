<?PHP
    include_once "../connection.php";
    include_once "../model/commandeM.php";
	

	class commandeC {
		
		function ajouterCommande( $prenom ,$nom  ,$username,$email ,$adress ,$adress2,$country,$states ,$zip ,$method ,$cards,$expiration,$cvv,$promo){
			$sql="INSERT INTO commande (prenom ,nom  ,username,email ,adress ,adress2,country,states ,zip ,method ,cards,expiration,cvv,promo) 
			VALUES (:prenom ,:nom  ,:username,:email ,:adress ,:adress2,:country,:states ,:zip ,:method ,:cards,:expiration ,:cvv ,:promo)";
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
					 'promo'=>$promo
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		 function afficherCommande(){
			
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


		 function supprimerCommande($id)  {
		 	try{
		 	$db=connection::getConnexion();
		 	$query=$db->prepare('DELETE FROM commande WHERE id= :id');
	 	$query->execute([
		 		'id'=>$id
		 	]);
		 	 }catch(PDOException $e)
		 	  {$e->getMessage();}
		}
		 function modifierCommande($commande,$id){
		 	try {
		 		$db = connection::getConnexion();
		 		$query = $db->prepare(
		 			'UPDATE commande SET 
		 		   
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
					  cvv= :cvv,
					  promo= :promo,
		 			WHERE id = :id'
		 		);
			      $query->execute([
					
		 			'prenom'=>$commande->getprenom(),
		 			 'nom'=>$commande->getnom(),
		 			'username'=>$commande->getusername(),
		 			'email'=>$commande->getemail(),
		 			'adress'=>$commande->getadress(),
		 			'adress2'=>$commande->getadress2(),
		 			'country'=>$commande->getcountry(),
					 'states'=>$commande->getstates(),
					 'zip'=>$commande->getzip(),
		 			'method'=>$commande->getmethod(),
					 'cards'=>$commande->getcards(),
					 'expiration'=>$commande->getexpiration(),
					 'cvv'=>$commande->getcvv(),
					 'promo'=>$commande->getpromo(),
					 'id'=> $id
		 		]);
		 		echo $query->rowCount() . " records UPDATED successfully <br>";
		 	} catch (PDOException $e) {
		 		$e->getMessage();
		 	}
         }
         
        /* function modifierCommande($commande,$id)
{
		$sql="UPDATE commande SET 
		 		   
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
         cvv= :cvv,
         promo= :promo,
        WHERE id = :id";

		$db = connection::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		 $nom=$commande->getnom();
        $prenom=$commande->getprenom();
        $username=$commande->getusername();
		$email=$commande->getemail();
		$adress=$commande->getadress();
		$adress2=$commande->getadress2();
        $country=$commande->getcountry();
        $states=$commande->getstates();
        $zip=$commande->getzip();
        $method=$commande->getmethod();
        $cards=$commande->getcards();
        $expiration=$commande->getexpiration();
        $cvv=$commande->getcvv();
        $promo=$commande->getpromo();



$datas = array( ':nom'=>$nom, ':prenom'=>$prenom,':username'=>$username,':email'=>$email,':adress'=>$adress,':adress2'=>$adress2,':country'=>$country,':states'=>$states,':zip'=>$zip,':method'=>$method,':cards'=>$cards,':expiration'=>$expiration,':cvv'=>$cvv,':promo'=>$promo);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':username',$username);
		$req->bindValue(':email',$email);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':adress2',$adress2);
        $req->bindValue(':states',$states);
        $req->bindValue(':country',$country);
        $req->bindValue(':method',$method);
        $req->bindValue(':cards',$cards);
        $req->bindValue(':expiration',$expiration);
        $req->bindValue(':cvv',$cvv);
		$req->bindValue(':promo',$promo);
		$req->bindValue(':zip',$zip);




            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}*/

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