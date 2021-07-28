<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

$sid = "ACa7cb174249af28f42773f5fd4c5bccde"; //getenv("ACCOUNT_SID");
$token = "20728f50674a43545b556525aafc7739"; // getenv("TOKEN");
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
