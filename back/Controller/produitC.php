<?PHP
require_once "../connection.php";
class produitC {
function afficherproduit ($produit){
		echo "id_produit: ".$produit->getid_produit()."<br>";
		echo "nom_produit: ".$produit->getnom_produit()."<br>";
		echo "type: ".$produit->gettype()."<br>";
		echo "nom_categorie: ".$produit->getnom_categorie()."<br>";
	
	}

	function ajouterproduit($produit){
		$sql="insert into produit (id_produit,nom_produit,type,nom_categorie) values (:id_produit, :nom_produit,:type,:nom_categorie)";
		$db = connection::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_produit=$produit->getid_produit();
        $nom_produit=$produit->getnom_produit();
        $type=$produit->gettype();
        $nom_categorie=$produit->getnom_categorie();
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue(':type',$type);
		$req->bindValue(':nom_categorie',$nom_categorie);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function afficherproduits(){
		//$sql="SElECT * From produits e inner join formationphp.produit a on e.id_produit= a.produit";
		$sql="SElECT * From produit";
		$db = connection::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherType(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT DISTINCT(type) From produit ORDER BY type DESC";

		$db = connection::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherCategorie(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT nom_categorie From categorie ORDER BY nom_categorie DESC";

		$db = connection::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


function supprimerproduit($id_produit){
		$sql="DELETE FROM produit where id_produit= :id_produit";
		$db = connection::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($produit,$id_produit){
		$sql="UPDATE produit SET id_produit=:id_produitt, nom_produit=:nom_produit,type=:type,nom_categorie=:nom_categorie WHERE id_produit=:id_produit";
		
		$db = connection::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_produitt=$produit->getid_produit();
        $nom_produit=$produit->getnom_produit();
        $type=$produit->gettype();
        $nom_categorie=$produit->getnom_categorie();
		$datas = array(':id_produitt'=>$id_produitt, ':id_produit'=>$id_produit, ':nom_produit'=>$nom_produit,':type'=>$type,':nom_categorie'=>$nom_categorie);
		$req->bindValue(':id_produitt',$id_produitt);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue(':type',$type);
		$req->bindValue(':nom_categorie',$nom_categorie);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($id_produit){
		$sql="SELECT * from produit where id_produit=$id_produit";
		$db = connection::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherproduit($tarif){
		$sql="SELECT * from produit where id_produit=$id_produit";
		$db = connection::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficheOrderNom()
    {
        $sql="SELECT * From produit ORDER BY nom";
        $db = connection::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste ;
        }
        catch (Exception $e)
        {
            die('Erreur; '.$e->getMessage());
        }
}
function afficheproduitF($nbr)
    {
        $sql="SELECT * From produit where nbrf >= $nbr";
        $db = connection::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste ;
        }
        catch (Exception $e)
        {
            die('Erreur; '.$e->getMessage());
        }
}
}

?>