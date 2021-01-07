
<?PHP
	class abonnement{
		private $firstname = null;
        private $lastname = null;
        private $username = null;
        private $email= null;
        private $adress1 = null;
        private $adress2 = null;
        private $pasword= null;
        private $country= null;
        private $stat= null;
        private $zip= null;
       

        
		
	}
        function __construct(string $firstname,string $lastname ,string $username ,string $email ,string $adress1 ,string $adress2,string $pasword,string $country,string $stat,int $zip){
			
		
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            $this->username=$username;
            $this->email=$email;
            $this->adress1=$adress1;
            $this->adress2=$adress2;
            $this->pasword=$pasword;
            $this->country=$country;
            $this->stat=$stat;
            $this->zip=$zip;
           
			
        }
        function getfirstname() : string{
            return $this->firstname;
        }
        function getlastname() : string{
            return $this->lastname;
        }
		function getusername(): string{
            return $this->username;
        }
		
		function getemail() : string{
           return $this->email;
        }
		
		function getadress1() : string{
            return $this->adress1;
        }
		function getadress2() : string{
            return $this->adress2;
        }
		function getpasword() : string{
            return $this->pasword;
        }
        function getcountry() : string{
            return $this->country;
        }
        function getstat() : string{
            return $this->stat;
        }
        function getzip() : int{
            return $this->zip;
        }
		
	
		
	?>