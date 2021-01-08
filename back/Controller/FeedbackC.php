<?php
    require_once '../view/databasecoonect.php';
    class feedbackC {
         function afficherfeedback() {
            $sql="SELECT * FROM feedback";
            $db = connection::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        
        }
        

        

       function getfeedbackByname($title) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM feedback WHERE name = :name'
                );
                $query->execute([
                    'name' => $name
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

     

        

        function supprimer ( $id ) { 
            $db = connection::getConnexion();
            try { 
                $query = $db -> prepare ( 'DELETE FROM feedback where id =:id');
                $query -> execute ( ['id' => $id
                
                ]);
                
            }
            catch(PDOException $e) {
                $e -> getMessage();
                header("Location: index.php");

            }
            }
    
    }
      ?>