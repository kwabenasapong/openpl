<?php
require_once('stripe/init.php');
// Read the config file to get our secret key
$config = parse_ini_file('../stripe.ini')

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey($config['api_key']);

// Token is created using Stripe.js or Checkout!
// Get the payment token submitted by the form:
$token = $_POST['token'];
$amount = $_POST['amount'] * 100;
$return_url = $_POST['return-url'];
$message = '?';

try {
  // Charge the user's card:
  $charge = \Stripe\Charge::create(array(
    "amount" => $amount,
    "currency" => "usd",
    "description" => "Donation to OpenLP",
    "source" => $token,
  ));
  $message .= 'success=' . rawurlencode('Thank you for your donation!');
}
catch(\Stripe\Error\Card $e) {
  // Since it's a decline, \Stripe\Error\Card will be caught
  $body = $e->getJsonBody();
  $err  = $body['error'];
  $message .= 'error=' . rawurlencode($err['message']);
}
catch (\Stripe\Error\RateLimit $e) {
  // Too many requests made to the API too quickly
  $message .= 'error=' . rawurlencode('Woah, hold up there, it seems like you\'re clicking the donate button a bit too much. Try again in about 10 minutes');
}
catch (\Stripe\Error\InvalidRequest $e) {
  // Invalid parameters were supplied to Stripe's API
  $message .= 'error=' . rawurlencode('Oops, there was a problem processing your card. Don\'t worry, you should not have been charged.');
}
catch (\Stripe\Error\Authentication $e) {
  // Authentication with Stripe's API failed
  // (maybe you changed API keys recently)
  $message .= 'error=' . rawurlencode('Oops, there was a glitch when processing your card. Don\'t worry, you should not have been charged.');
}
catch (\Stripe\Error\ApiConnection $e) {
  // Network communication with Stripe failed
  $message .= 'error=' . rawurlencode('Oops, we were unable to process your card. Don\'t worry, you should not have been charged.');
}
catch (\Stripe\Error\Base $e) {
  // Display a very generic error to the user, and maybe send
  // yourself an email
  $message .= 'error=' . rawurlencode('Oh dear, something went wrong. Don\'t worry, you should not have been charged.');
}
catch (Exception $e) {
  // Something else happened, completely unrelated to Stripe
  $message .= 'error=' . rawurlencode('Oh dear, something went wrong. Don\'t worry, you should not have been charged.');
}

header("Location: " . $return_url . $message);
