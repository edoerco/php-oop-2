<?php 
    // Classe esterna

    trait CreditCard {

        public $expiration = null;

        public function getExpiration(){
            $now = new DateTime();
            if($this->expiration < $now) {
                throw new Exception('Carta scaduta');
            }
            return $this->expiration;
        }

        public function setExpiration($_expiration){
            $this->expiration = $_expiration;
        }
    } 

?>