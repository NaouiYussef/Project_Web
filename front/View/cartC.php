<?PHP
require_once '../connection.php';
require_once 'cartM.php';

	class cartC {
		
		function ajoutercart( $product_name ,$product_size  ,$product_price,$quantity ){
			$sql="INSERT INTO cart (product_name,product_size,product_price,quantity) 
			VALUES (:product_name ,:product_size  ,:product_price,:quantity )";
			$db = connection::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					
					 'product_name' =>$cart->getproduct_name(),
					 'product_size' =>$cart->getproduct_size(),
					 'product_price'=>$cart->getproduct_price(),
					 'quantity'=>$cart->getquantity(),

				]);	
				mysqli_query($query);		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		public function affichercart($id) {
            $sql='SELECT * FROM cart WHERE id=:id'; // Select * (all) el utilisateur el id mte3ou 1
            $db=connection::getConnexion(); 
            $query=$db->prepare($sql); 
            $query->execute(['id' => $id]); 
            return $query->fetch(PDO::FETCH_ASSOC); 
        }

		 function afficherallcart(){//affocher tout les produits
			
		$sql="SELECT * FROM cart";
		$db = connection::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
			}
		catch (Exception $e){
		die('Erreur: '.$e->getMessage());
			}	
		}


		 function supprimercart($id)  {
			$sql='DELETE from cart where id=:id';
            $db=connection::getConnexion();
            $query=$db->prepare($sql);
            $query->execute(['id' => $id]);
		}
		 function modifiercart($cart,$id){
			$sql='UPDATE cart SET 
		 		   
		 		    product_name= :product_name,
		 			  product_size= :product_size,
		 			 product_price= :product_price,
		 			 quantity= :quantity,
		 			WHERE id = :id';
		 		$db=connection::getConnexion();
				 $query=$db->prepare($sql);
			      $query->execute([
					
		 			'product_name'=>$cart->getproduct_name(),
		 			 'product_size'=>$cart->getproduct_size(),
		 			'product_price'=>$cart->getproduct_priceP(),
		 			'quantity'=>$cart->getquantityP(),
					 'id'=> $id
		 		]);
		 		
		 }
	 function recuperercart($id){
	 	$sql="SELECT * from cart where id=$id";
	 	$db = connection::getConnexion();
	 	try{
	 		$query=$db->prepare($sql);
				$query->execute();

	 		$cart=$query->fetch();
	 		return $cart;
	 	}
	 	catch (Exception $e){
	 		die('Erreur: '.$e->getMessage());
	 	}
	 }

	
	}

?>