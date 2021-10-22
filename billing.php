<?php 
    // Classe esterna

    trait Billing {

        public $country;
        public $street_name;


        public function getCountry(){
            return $this->country;
        }

        public function setCountry($_country){
            $this->country = $_country;
        }

        public function getStreet_name(){
            return $this->street_name;
        }

        public function setStreet_name($_street_name){
            $this->street_name = $_street_name;
        }
    } 

?>