<?php
    class account {
       
        private ?string $nomprenom = null;
        private ?string $email= null;
        private ?int $telephone= null;
        private ?string $option= null;
        private ?string $message= null;
        private ?string $cv= null;
        

         function __construct( string $nomprenom, string $email, int $telephone, string $option, string $message, string $cv){
            $this->nomprenom = $nomprenom;
            $this->email = $email;
            $this->telephone = $telephone;
            $this->option = $option;
            $this->message = $message;
            $this->cv = $cv;
        }

        

         function getnomprenom () :string { 
            return $this->nomprenom ;
        }

         function getemail ():string{
            return $this->email ;
        }

         function gettelephone ():int{
            return $this->telephone ;
        }
        
         function getoption ():string{
            return $this->option ;
        }
        function getmessage ():string{
            return $this->message ;
        }
        function getcv ():string{
            return $this->cv ;
        }

    }
    ?>