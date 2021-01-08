<?php
class commande
{
	    private $id;
        private $prenom;
        private $nom;
        private $username;
        private $email;
        private $adress;
        private $adress2;
        private $country;
        private $states;
        private $zip;
        private $method;
        private $cards;
        private $expiration;
        private $cvv;
        private $promo;

	public function getnom()
	{
		return $this->nom ;
	}
    
    public function getprenom()
	{
		return  $this->prenom ;
	}
    
    public function getusername(){
        return $this->username;
    }
    
    public function getemail(){
       return $this->email;
    }
    
    public function getadress(){
        return $this->adress;
    }

    public function getadress2(){
        return $this->adress2;
    }

    public function getcountry() {
        return $this->country;
    }

    public function getstates() {
        return $this->states;
    }

    public function getzip() {
        return $this->zip;
    }

    public function getmethod() {
        return $this->method;
    }

    public function getcards() {
        return $this->cards;
    }
    
    public function getexpiration() {
        return $this->expiration;
    }

    public function getcvv() {
        return $this->cvv;
    }

    public function getpromo(){
        return $this->promo;
    }




	public function setnom($nom)
	{
		$this->nom=$nom ;
	}
	public function setprenom($prenom)
	{
		 $this->prenom=$prenom ;
	}
	public function setusername($username)
	{
		$this->username=$username ;
	}
	public function setemail($email)
	{
		$this->email=$email  ;
	}
	public function setadress($adress)
	{
		$this->adress=$adress ;
	}
    public function setadress2($adress2)
	{
		$this->adress2=$adress2  ;
	}
	public function setcountry($country)
	{
		$this->country=$country  ;
    }
    public function setstates($states)
	{
		$this->states=$states ;
    }
    public function setzip($zip)
	{
		$this->zip=$zip ;
    }
    public function setmethod($method)
	{
		$this->method=$method ;
    }
    public function setcards($cards)
	{
		$this->cards=$cards ;
    }
    public function setexpiration($expiration)
	{
		$this->expiration=$expiration ;
    }
    public function setcvv($Paycvvs)
	{
		$this->cvv=$cvv ;
    }
    public function setpromo($promo)
	{
		$this->promo=$promo ;
    }



	public function __construct($nom,$prenom,$username,$email,$adress,$adress2,$country,$states,$zip,$method,$cards,$expiration,$cvv,$promo)
	{ 
		$this->nom=$nom ;
		$this->prenom=$prenom ;
		$this->username=$username;
        $this->email=$email;
        $this->adress=$adress;
        $this->adress2=$adress2;
        $this->country=$country;
        $this->states=$states;
        $this->zip=$zip;
        $this->method=$method;
        $this->cards=$cards;
        $this->expiration=$expiration;
        $this->cvv=$cvv;
        $this->promo=$promo;
	}
}
?>
