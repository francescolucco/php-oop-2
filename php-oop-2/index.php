// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
// Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
// $c = new CreditCard(..);
// $user->insertCreditCard($c);
// BONUS:
// Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).

<?php

require_once __DIR__ ."/classes/User.php";
require_once __DIR__ ."/classes/UserPremium.php";
require_once __DIR__ ."/classes/Product.php";

$new_user = new User('Francesco', 'Lucco', 'Via Roma 11 - Verona');
var_dump($new_user);

$new_user_premium = new UserPremium('Alessandro', 'Manzoni', 'Via dei Promessi Sposi 600c - Como', 'Premium');
var_dump($new_user_premium);



