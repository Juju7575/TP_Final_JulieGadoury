<?php
require_once('Stripe/init.php');
$stripe = array(
  "secret_key"      => "sk_test_VZV7Wd1JY3kqBkNG71NQs3kM",
  "publishable_key" => "pk_test_2uVngJUlwknHJP2fLNyifFc0"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>