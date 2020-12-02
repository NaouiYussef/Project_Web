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
            return $this->id;
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
            $this->titre = $FirstName;
        }

        public function setLastName ($LastName){
            $this->image = $LastName;
        }

        public function setEmail ($Email){
            $this->prix = $Email;
        }
        public function setPassword ($Password){
            $this->prix = $Password;
        }
    }