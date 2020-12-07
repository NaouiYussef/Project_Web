<?php
    include "../connection.php";
    include_once "../Model/account.php";
class AccountC {
     function afficherAccount(){

        $sql="SELECT * FROM utilisateur";
        $db = connection::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
  
    function ajouterAccount ($FirstName,$LastName,$Email,$Password) {
        $db = connection::getConnexion();
        try { 
            $query = $db->prepare ( 'INSERT INTO utilisateur (FirstName,LastName,Email,Password) VALUES (:FirstName, :LastName, :Email, :Password)');
        $query-> execute ([ 'FirstName' => $FirstName , 'LastName' => $LastName , 'Email' => $Email, 'Password' => $Password
        
        
        ]);
        
        
        }catch ( PDOException $e) {
            $e->getMessage();
        }

    }
    
     function supprimer ( $Id ) { 
        $db = connection::getConnexion();
        try { 
            $query = $db -> prepare ( 'DELETE FROM utilisateur where Id =:Id');
            $query -> execute ( ['Id' => $Id
            
            ]);
            
        }
        catch(PDOException $e) {
            $e -> getMessage();
        }
        }

        function modifier ($account1,$Id)
        {
            try {
            $db = connection::getConnexion();
             $query =$db->prepare( ' UPDATE utilisateur SET 
             FirstName= :FirstName , 
             LastName = :LastName , 
             Email = :Email,
              Password= :Password 
              WHERE Id = :Id'
              );
       
              $query -> execute ( [   
                'FirstName' => $account1->getFirstName(),
                'LastName' => $account1->getLastName(),
                'Email' => $account1->getEmail(),
                'Password' => $account1->getPassword(),
                'Id' => $Id

              ]);    
             
              
            } catch (PDOException $e) {
                $e->getMessage();
            }            
            
            }
            
		function recupererUtilisateur($Id){
			$sql="SELECT * from utilisateur where Id=$Id";
			$db = connection::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
        }
        function connexionAccount($Email,$Password) {
            $sql="SELECT * FROM utilisateur WHERE Email='" . $Email ."' and Password = '". $Password."'";
            $db = connection::getConnexion();
            try {
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0)
                {$message= "pseudo ou mot de passe incorrect";
                
                }
                else { 
                    $x = $query->fetch();
                    $message = $x['role'];
                    session_start(); 
                    $_SESSION['user_id']= $x['Id'];
                    $_SESSION['FirstName']= $x['FirstName'];
                    $_SESSION['LastName']= $x['LastName'];
                }
                }


            
            catch (Exception $e)
            {
                $message= " ".$e->getMessage();        
                }
                return $message;
        }


		function chercherEmail($Email){
			$sql="SELECT * from utilisateur where Email='$Email'";
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

    
        

        

     


    