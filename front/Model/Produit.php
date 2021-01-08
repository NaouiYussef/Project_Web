<?PHP
class produit{
	private $id_produit;
	private $nom_produit;
	private $type;
	private $nom_categorie;
	function __construct($id_produit,$nom_produit,$type,$nom_categorie){
		$this->id_produit=$id_produit;
		$this->nom_produit=$nom_produit;
		$this->type=$type;
		$this->nom_categorie=$nom_categorie;
	}
	
	function getid_produit(){
		return $this->id_produit;
	}
	function getnom_produit(){
		return $this->nom_produit;
	}
	function gettype(){
		return $this->type;
	}

	function getnom_categorie(){
		return $this->nom_categorie;
	}

	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setnom_produit($nom_produit){
		$this->nom_produit;
	}
	function settype($type){
		$this->type=$type;
	}
	function setnom_categorie($nom_categorie){
		$this->nom_categorie=$nom_categorie;
	}
	
}

?>