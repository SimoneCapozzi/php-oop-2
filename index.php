<?php 

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/User_premium.php';
require_once __DIR__ . '/Product.php';

/* prodotto */
$prodotto_1 = new Product('motosega', 90);
$prodotto_2 = new Product('cacciavite', 15);

/* user */
$user_1 = new User('pincopallo4');
$user_1->setCard('7', '2030-08', 'ciao', 5);

$user_2 = new User('Ugo906');
$user_2->setCard('7', '2010-08', 'ciao', 5);

var_dump($user_1);
var_dump($user_2);

/* user premium */
$user_premium_1 = new User_premium('UGO876', '20%');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e-commerce</title>
</head>
<body>
  
  
<h1>
  <?php echo $user_1->username ?>, la tua carta scade il <?php echo $user_1->addDate($user_1->getDate()) ?> 
</h1>
<hr>
<h1>
  <?php echo $user_2->username ?>: <?php echo $user_2->addDate($user_2->getDate()) ?> 
</h1>

<h2>
  <?php echo $prodotto_1->nome  ?>, il prezzo dell'oggetto é: <?php echo $prodotto_1->prezzo ?> euro.
</h2>
<hr>
<h2>
  <?php echo $prodotto_2->nome  ?>, il prezzo dell'oggetto é: <?php echo $prodotto_2->prezzo ?> euro.
</h2>
  
  
  

</body>
</html>