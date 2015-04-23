


<?php
ini_get('display_errors');
  require_once('stripe/config.php');

  $token  = $_POST['stripeToken'];

  $customer = \stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'card'  => $token
  ));

  $charge = \stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 2000,
      'currency' => 'cad'
  ));

echo <h1>Successfully charged $5!</h1>';
?>

