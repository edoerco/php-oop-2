<!-- Classe figlio -->

<?php 

    require_once 'user.php';

    class UserPremium extends User {

        public $discount;
        public $giftCard;

        public function __construct($_discount, $_giftCard)
        {
        $this->discount = $_discount;
        $this->giftCard = $_giftCard;
        }
    } 

    $edo = new UserPremium(20, 'aa11bb22cc33')

?>