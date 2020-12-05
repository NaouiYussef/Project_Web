<?php
    class account {
       
        private ?string $FirstName = null;
        private ?string $LastName= null;
        private ?string $Email= null;
        private ?string $Password= null;
        
        

         function __construct( string $FirstName, string $LastName, string $Email, string $Password){
            $this->FirstName = $FirstName;
            $this->LastName = $LastName;
            $this->Email = $Email;
            $this->Password = $Password;
        }

        

         function getFirstName () :string { 
            return $this->FirstName ;
        }

         function getLastName ():string{
            return $this->LastName ;
        }

         function getEmail ():string{
            return $this->Email ;
        }
        
         function getPassword ():string{
            return $this->Password ;
        }

    }
    ?>