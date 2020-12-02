<?php
    class account {
        private ?int $Id = null;
        private string $FirstName;
        private string $LastName;
        private string $Email;
        private string $Password;
        
        

        public function __construct($FirstName, $LastName, $Email, $Password){
            $this->FirstName = $FirstName;
            $this->LastName = $LastName;
            $this->Email = $Email;
            $this->Password = $Password;
        }

        public function getId () {
            return $this->Id;
        }

        public function getFirstName (){
            return $this->FirstName ;
        }

        public function getLastName (){
            return $this->LastName ;
        }

        public function getEmail (){
            return $this->Email ;
        }
        
        public function getPassword (){
            return $this->Password ;
        }

        public function setFirstName ($FirstName){
            $this->FirstName = $FirstName;
        }

        public function setLastName ($LastName){
            $this->LastName = $LastName;
        }

        public function setEmail ($Email){
            $this->Email = $Email;
        }
        public function setPassword ($Password){
            $this->Password = $Password;
        }
    }