<?php
    class User extends UserRepository{
        private $id;
        private $lastName;
        private $firstName;
        private $mail;
        private $zipCode;

        public function __construct($id, $lastName, $firstName, $mail, $zipCode){
            $this->setId($id);
            $this->setLastName($lastName);
            $this->setFirstName($firstName);
            $this->setMail($mail);
            $this->setZipCode($zipCode);
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($lastName){
            $this->lastName = $lastName;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }

        public function getMail(){
            return $this->mail;
        }

        public function setMail($mail){
            $this->mail = $mail;
        }

        public function getZipCode(){
            return $this->zipCode;
        }

        public function setZipCode($zipCode){
            $this->zipCode = $zipCode;
        }
    }
?>