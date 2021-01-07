
<?PHP
	class Gym{
		private $GymAdress = null;
      
        private $GymCapacity = null;
        private $GymEmail= null;
        private $GymNum = null;
        private $GymName = null;
        private $GymPics= null;
       

        
		
	}
        function __construct(string $GymAdress,int $GymCapacity ,string $GymEmail ,int $GymNum ,string $GymName,string $GymPics){
			
		
            $this->GymAdress=$GymAdress;
           
            $this->GymCapacity=$GymCapacity;
            $this->GymEmail=$GymEmail;
            $this->GymNum=$GymNum;
            $this->GymName=$GymName;
            $this->GymPics=$GymPics;
           
			
        }
        function getGymAdress() : string{
            return $this->GymAdress;
        }
      
		function getGymCapacity(): int{
            return $this->GymCapacity;
        }
		
		function getGymEmail() : string{
           return $this->GymEmail;
        }
		
		function getGymNum() : int{
            return $this->GymNum;
        }
		function getGymName() : string{
            return $this->GymName;
        }
		function getGymPics() : string{
            return $this->GymPics;
        }
		
	
		
	?>