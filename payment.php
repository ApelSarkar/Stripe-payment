<?php
require 'config.php';
if (isset($_POST['stripeToken'])) {
    $charge = \Stripe\Charge::create([
        'source' => $_POST['stripeToken'],
        'description' => "10 cucumbers from Roger's Farm",
        'amount' => 5000,
        'currency' => 'usd',

    ]);
    echo "<pre>";
    //print_r($charge);
    echo "Payment Successfull";

}
