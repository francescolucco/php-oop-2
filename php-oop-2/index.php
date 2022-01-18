<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/UserPremium.php";
require_once __DIR__ . "/classes/Product.php";

$new_user = new User('Francesco', 'Lucco', 'Via Roma 11 - Verona');
// var_dump($new_user);

$new_user_premium = new UserPremium('Alessandro', 'Manzoni', 'Via dei Promessi Sposi 600c - Como', 'Premium');
// var_dump($new_user_premium);

$new_product = new Product('Friggitrice ad Aria Calda', 'Innsky', 132.99);
$new_product_2 = new Product('Frigorifero Combinato RB7300T Silver Inox', 'Samsung', 529.00);
// var_dump($new_product);

$new_user_premium->buyProduct($new_product);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <div class="utenti">
      <h1>DATI UTENTE</h1>
      <h3>
         <?php echo $new_user_premium->getName() ?> <?php echo $new_user_premium->getLastname() ?>
      </h3>
      <h5>Prodotti comprati dall'utente <?php echo $new_user_premium->getPackage() ?>:
         <ul>
            <?php foreach ($new_user_premium->buyProduct($new_product_2) as $product) : ?>
               <li><?php echo $product ?></li>
            <?php endforeach; ?>
         </ul>
      </h5>
      <h5> Punti totalizzati: <br>
         <strong><?php echo $new_user_premium->getPoints() ?></strong> punti
      </h5>
   </div>

</body>

</html>