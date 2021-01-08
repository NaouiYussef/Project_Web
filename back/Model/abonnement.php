
<?PHP
	class abonnement{
		private $firstname;
        private $lastname;
        private $username ;
        private $email;
        private $adress1;
        private $adress2;
        private $pasword;
        private $country;
        private $stat;
        private $zip;
       

        
		
	
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
        function getfirstname(){
            return $this->firstname;
        }
        function getlastname() {
            return $this->lastname;
        }
		function getusername(){
            return $this->username;
        }
		
		function getemail(){
           return $this->email;
        }
		
		function getadress1() {
            return $this->adress1;
        }
		function getadress2() {
            return $this->adress2;
        }
		function getpasword() {
            return $this->pasword;
        }
        function getcountry() {
            return $this->country;
        }
        function getstat() {
            return $this->stat;
        }
        function getzip(){
            return $this->zip;
        }
    }
	
		
	?>