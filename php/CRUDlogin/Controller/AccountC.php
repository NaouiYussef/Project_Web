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
   /* public function getAlbumById($idAlbum) {
        $db = connection::getConnexion();
        try {
           
            $query = $db->prepare(
                'SELECT * FROM album WHERE idAlbum = :idAlbum'
            );
            $query->execute([
                'idAlbum' => $idAlbum
            ]);
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }*/
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
/*
        function modifier ($album,$idAlbum)
        {
            $db = connection::getConnexion();
            try { $query =$db->prepare( ' UPDATE album SET titre = :titre , prix = :prix , image = :image where idAlbum =: idAlbum');

              $query -> execute ( [   
                'titre' => $album->getTitre(),
                'prix' => $album->getPrix(),
                'image' => $album->getImage(),
                'idAlbum' => $idAlbum

              ]);    
               echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }            
            
            }
        }*/

     


    }