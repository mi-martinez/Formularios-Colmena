<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$sid = "ACa7cb174249af28f42773f5fd4c5bccde"; //getenv("ACCOUNT_SID");
$token = "610b0eee86915db8d42d6c3b81e53ed5"; // getenv("TOKEN");
$twilioNumber = "+13865970640";
$code = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
echo $code;
$twilio = new Client($sid, $token);

$email = $_POST["email"];
$email2 = $_COOKIE["cEmail"];
$firstName = $_POST["firstName"];
$secondName = $_POST["secondName"];
$firstSurname = $_POST["firstSurname"];
$secondSurname = $_POST["secondSurname"];
$dateBirth = $_POST["dateBirth"];
$phone = $_POST["phone"];
$checkCode = $_POST['checkCode'];
$checkCode = $code;

$client = \HubSpot\Factory::createWithApiKey('86ac45a4-9bab-4fcc-a27a-055df47a3418');
$filter = new \HubSpot\Client\Crm\Contacts\Model\Filter();
$filter
  ->setOperator('EQ')
  ->setPropertyName('email')
  ->setValue($email);

$filterGroup = new \HubSpot\Client\Crm\Contacts\Model\FilterGroup();
$filterGroup->setFilters([$filter]);

$searchRequest = new \HubSpot\Client\Crm\Contacts\Model\PublicObjectSearchRequest();
$searchRequest->setFilterGroups([$filterGroup]);

$contactsPage = $client->crm()->contacts()->searchApi()->doSearch($searchRequest);
$contactId = $contactsPage['results'][0]['id'];

$properties = [
  "email" => $email,
  "firstname" => $firstName,
  "lastname" => $firstSurname,

  "first_name" => $firstName,
  "second_name" => $secondName,
  "first_surname" => $firstSurname,
  "second_surname" => $secondSurname,

  "birth_date" => $birthDate,
  "phone" => $phone,
  "code_sms" => $code
];

$simplePublicObjectInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput(['properties' => $properties]);
$apiResponse = $client->crm()->contacts()->basicApi()->update($contactId, $simplePublicObjectInput);

sendSms($phone, $code, $twilioNumber, $twilio);

return $code;

function sendSms($phone, $code, $twilioNumber, $twilio)
{
  $message = $twilio->messages->create(
    "+57" . $phone,
    [
      "from" => $twilioNumber,
      "body" => "El código de verificación para Colmena es: " . $code
    ]
  );
}
