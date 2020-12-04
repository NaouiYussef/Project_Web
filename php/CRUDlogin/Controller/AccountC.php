<?php
    include "../../connection.php";
    include_once "../Model/account.php";
class AccountC {
     function afficherAccount(){

        $sql="SELECT * FROM createaccount";
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
            $query = $db->prepare ( 'INSERT INTO createaccount (FirstName,LastName,Email,Password) VALUES (:FirstName, :LastName, :Email, :Password)');
        $query-> execute ([ 'FirstName' => $FirstName , 'LastName' => $LastName , 'Email' => $Email, 'Password' => $Password
        
        
        ]);
        
        
        }catch ( PDOException $e) {
            $e->getMessage();
        }

    }
    
     function supprimer ( $Id ) { 
        $db = connection::getConnexion();
        try { 
            $query = $db -> prepare ( 'DELETE FROM createaccount where Id =:Id');
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
             $query =$db->prepare( ' UPDATE createaccount SET 
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
             
               echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }            
            
            }
            
		function recupererUtilisateur($Id){
			$sql="SELECT * from createaccount where Id=$Id";
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
        

     


    }