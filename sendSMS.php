<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

$sid = "ACa7cb174249af28f42773f5fd4c5bccde"; //getenv("ACCOUNT_SID");
$token = "0cb61f9e686aaa797cba41784fda4a2c"; // getenv("TOKEN");
$twilioNumber = "+13865970640";
$code = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);

$twilio = new Client($sid, $token);
$message = $twilio->messages->create(
  "+573133011867",
  [
    "from" => $twilioNumber,
    "body" => "El código de verificación para Colmena es: " . $code
  ]
);

print($message);
