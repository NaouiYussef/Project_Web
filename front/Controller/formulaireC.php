<?php
    include "../connection.php";
    include_once "../Model/formulaire.php";
class formulaireC {
     function afficherformulaire(){

        $sql="SELECT * FROM formulaire";
        $db = connection::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
  
    function ajouterformulaire ($nomprenom,$email,$telephone,$option,$message,$cv,$idClient) {
        $db = connection::getConnexion();
        try { 
            $query = $db->prepare ( 'INSERT INTO formulaire (nomprenom,email,telephone,option,message,cv,idClient) VALUES (:nomprenom, :email, :telephone, :option , :message, :cv, :idClient)');
        $query-> execute ([ 'nomprenom' => $nomprenom , 'email' => $email , 'telephone' => $telephone, 'option' => $option , 'message' => $message , 'cv' => $cv ,'idClient' => $idClient
        
        
        ]);
        
        
        }catch ( PDOException $e) {
            $e->getMessage();
        }

     }
    
    //  function supprimer ( $Id ) { 
    //     $db = connection::getConnexion();
    //     try { 
    //         $query = $db -> prepare ( 'DELETE FROM utilisateur where Id =:Id');
    //         $query -> execute ( ['Id' => $Id
            
    //         ]);
            
    //     }
    //     catch(PDOException $e) {
    //         $e -> getMessage();
    //     }
    //     }

    //     function modifier ($account1,$Id)
    //     {
    //         try {
    //         $db = connection::getConnexion();
    //          $query =$db->prepare( ' UPDATE utilisateur SET 
    //          FirstName= :FirstName , 
    //          LastName = :LastName , 
    //          Email = :Email,
    //           Password= :Password 
    //           WHERE Id = :Id'
    //           );
       
    //           $query -> execute ( [   
    //             'FirstName' => $account1->getFirstName(),
    //             'LastName' => $account1->getLastName(),
    //             'Email' => $account1->getEmail(),
    //             'Password' => $account1->getPassword(),
    //             'Id' => $Id

    //           ]);    
             
              
    //         } catch (PDOException $e) {
    //             $e->getMessage();
    //         }            
            
    //         }
            
	// 	function recupererUtilisateur($Id){
	// 		$sql="SELECT * from utilisateur where Id=$Id";
	// 		$db = connection::getConnexion();
	// 		try{
	// 			$query=$db->prepare($sql);
	// 			$query->execute();
	// 			$user=$query->fetch();
	// 			return $user;
	// 		}
	// 		catch (Exception $e){
	// 			die('Erreur: '.$e->getMessage());
	// 		}
    //     }
    //     function connexionAccount($Email,$Password) {
    //         $sql="SELECT * FROM utilisateur WHERE Email='" . $Email ."' and Password = '". $Password."'";
    //         $db = connection::getConnexion();
    //         try {
    //             $query=$db->prepare($sql);
    //             $query->execute();
    //             $count=$query->rowCount();
    //             if($count==0)
    //             {$message= "pseudo ou mot de passe incorrect";
                
    //             }
    //             else { 
    //                 $x = $query->fetch();
  
    //                 session_start(); 
    //                 $_SESSION['user_id']= $x['Id'];
    //                 $_SESSION['FirstName']= $x['FirstName'];
    //                 $_SESSION['LastName']= $x['LastName'];
    //             }
    //             }


            
    //         catch (Exception $e)
    //         {
    //             $message= " ".$e->getMessage();        
    //             }
    //             return $message;

    //     }


		function chercherId($Id){
			$sql="SELECT * from formulaire where idClient='$Id'";
			$db = connection::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
                $user=$query->fetch();
                if($user==false)
                return 1;
                else return 0;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
      }




        }

    
        

        

     


    