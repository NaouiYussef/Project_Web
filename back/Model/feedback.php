<?php
    class account {
       
        private ?string $Name = null;
        private ?string $Email= null;
        private ?string $phone= null;
        private ?string $message= null;
        
        

         function __construct( string $Name, string $Email, string $phone, string $message){
            $this->name = $Name;
            $this->email = $Email;
            $this->phone = $phone;
            $this->message = $message;
        }

        

         function getName () :string { 
            return $this->Name ;
        }

         function getEmail ():string{
            return $this->email ;
        }

         function getphone ():string{
            return $this->phone ;
        }
        
         function getmessage ():string{
            return $this->message ;
        }

    }
    ?>
