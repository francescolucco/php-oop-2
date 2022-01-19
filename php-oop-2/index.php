<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/UserPremium.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/showcase.php";

$new_user = new User('Francesco', 'Lucco', 'Via Roma 11 - Verona');
$new_user->setProductsToBuy($product3, $product6, $product2, $product4);

foreach ($new_user->getProductsToBuy() as $product) {
   echo "<br>" . $product->name . ": " . $product->price . "&euro;" . "<br>" . "Quntità: " . $product->quantity . "<br>";
 };

 //$new_user->setTotalPay([$product3]);

//  $new_user->setProductsToBuy($product3);
 var_dump($new_user);

 echo " Costo totale nel carrello: " . $new_user->getTotalPay() . " &euro;";



$new_user_premium = new UserPremium('Alessandro', 'Manzoni', 'Via dei Promessi Sposi 600c - Como', 'Premium');
// var_dump($new_user_premium);




