<?php 
    // Classe figlio

    require_once 'user.php';


    class UserPremium extends User {

        public $discount;
        public $giftCard;

        public function getDiscount(){
            return $this->discount;
        }

        public function setDiscount($_discount){
            $this->discount = $_discount;
        }

        public function getGiftCard(){
            return $this->giftCard;
        }

        public function setGiftCard($_giftCard){
            $this->giftCard = $_giftCard;
        }
    } 
?>