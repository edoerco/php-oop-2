<?php 
//  Pagina principale 

//  Provate ad immaginare quali sono le classi necessarie per creare uno shop online.
// Ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l'ereditarietà dove necessario.
// Ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
// oppure diverse tipologie di prodotti.
// BONUS:
// 1. Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
//     $c = new CreditCard(..);
//     $user->insertCreditCard($c);
// 2. Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). 


    require_once 'user.php';
    require_once 'userPremium.php';
    require_once 'billing.php';

    try {
        $user_1 = new User('mario', 'rossi', 23);
        $user_1->setCountry('Roma');
        $user_1->setStreet_name('via roma 10');
        $user_1->setExpiration(new DateTime('22-10-2019'));
        $user_1->getExpiration();
        var_dump($user_1);
    } 
    catch (Exception $e) {
        echo 'Si è verificato il seguente errore per l\'utente 1 ' . $e->getMessage();
    }

    try {
        $user_2 = new User('elena', 'verdi', 28);
        $user_2->setCountry('Milano');
        $user_2->setStreet_name('via milano 2');
        $user_2->setExpiration(new DateTime('3-7-2022'));
        $user_2->getExpiration();
        var_dump($user_2);
    } 
    catch (Exception $e) {
        echo 'Si è verificato il seguente errore l\'utente 2 ' . $e->getMessage();
    }

    try {
        $user_3 = new UserPremium('edoardo', 'ercolino', 26);
        $user_3->setDiscount(20);
        $user_3->setGiftCard('a1b2c3d4');
        $user_3->setCountry('Parma');
        $user_3->setStreet_name('via parma 5');
        $user_3->setExpiration(new DateTime('15-4-2020'));
        $user_3->getExpiration();
        var_dump($user_3);
    } catch (Exception $e) {
        echo 'Si è verificato il seguente errore l\'utente 3 ' . $e->getMessage();
    }

    

    try {
        $user_4 = new UserPremium('giorgia', 'bianchi', 30);
        $user_4->setDiscount(10);
        $user_4->setGiftCard('a2b3c4d5');
        $user_4->setCountry('Palermo');
        $user_4->setStreet_name('via palermo 7');
        $user_4->setExpiration(new DateTime('5-5-2024'));
        $user_4->getExpiration(); 
        var_dump($user_4);
    } catch (Exception $e) {
        echo 'Si è verificato il seguente errore l\'utente 4 ' . $e->getMessage();
    }

?>
