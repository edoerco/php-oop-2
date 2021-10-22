<?php 
    // Classe madre
    require_once 'billing.php';
    require_once 'credit_card.php';


    // istanzio la classe generica dell'utente
    class User {

        use Billing;
        use CreditCard;

        public $name;
        public $surname;
        public $eta;

        public function getName(){
            return $this->name;
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function getEta(){
            return $this->eta;
        }

        public function setEta($_eta){
            $this->eta = $_eta;
        }

        public function __construct($_name, $_surname, $_eta)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->eta = $_eta;
        }
    } 
?>