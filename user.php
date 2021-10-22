<!-- Classe madre -->

<?php 
    // istanzio la classe generica dell'utente
    class User {

        public $name;
        public $surname;
        public $eta;

        public function __construct($_name, $_surname, $_eta)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->eta = $_eta;
        }
    } 

    $mario = new User('mario', 'rossi', 23);
?>