<?php
    include "../connection.php";
    include_once "../Model/formulaire.php";
    include_once "../Model/account.php";

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
  
    function ajouterformulaire ($nomprenom,$email,$telephone,$option,$message,$cv) {
        $db = connection::getConnexion();
        try { 
            $query = $db->prepare ( 'INSERT INTO formulaire (nomprenom,email,telephone,option,message,cv) VALUES (:nomprenom, :email, :telephone, :option , :message, :cv)');
        $query-> execute ([ 'nomprenom' => $nomprenom , 'email' => $email , 'telephone' => $telephone, 'option' => $option , 'message' => $message , 'cv' => $cv 
        
        
        ]);
        
        
        }catch ( PDOException $e) {
            $e->getMessage();
        }

     }
    
     function supprimer ( $id ) { 
        $db = connection::getConnexion();
        try { 
            $query = $db -> prepare ( 'DELETE FROM formulaire where id =:id');
            $query -> execute ( ['id' => $id
            
            ]);
            
        }
        catch(PDOException $e) {
            $e -> getMessage();
        }
        }

        function modifierRole ($option,$Id)
        {
            try {
            $db = connection::getConnexion();
             $query =$db->prepare( ' UPDATE utilisateur SET 
             Role = :Role
              WHERE Id = :Id'
              );
              
       if ($option=="Gérant d'une salle")
       {
        $query -> execute ( [   
           
            'Role' => 2,
            'Id' => $Id

          ]);   
       }
       elseif ($option=="Coach")
              {
                $query -> execute ( [   
           
                    'Role' => 3,
                    'Id' => $Id
        
                  ]);  

              }
             
              
            } catch (PDOException $e) {
                $e->getMessage();
            }            
            
            }
            
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


	// 	function chercherEmail($Email){
	// 		$sql="SELECT * from utilisateur where Email='$Email'";
	// 		$db = connection::getConnexion();
	// 		try{
	// 			$query=$db->prepare($sql);
	// 			$query->execute();
    //             $user=$query->fetch();
    //             if($user==false)
    //             return 1;
    //             else return 0;
	// 		}
	// 		catch (Exception $e){
	// 			die('Erreur: '.$e->getMessage());
	// 		}
    //     }




        }

    
        

        

     


    