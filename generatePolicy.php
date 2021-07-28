<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Auth.php';

use Twilio\Rest\Client;

$sid = "ACa7cb174249af28f42773f5fd4c5bccde"; //getenv("ACCOUNT_SID");
$token = "20728f50674a43545b556525aafc7739"; // getenv("TOKEN");
$twilio = new Client($sid, $token);
$code = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);

if (isset($_POST['submit'])) {
  if (empty($firstName)) {
    echo "<p class='error'>* Agrega tu primer nombre.</p>";
  } else {
    if (strlen($firstName) > 15) {
      echo "<p class='error'>*El primer nombre es muy largo.</p>";
    }
  }

  if (empty($secondName)) {
    echo "<p class='error'>* Agrega tu segundo nombre.</p>";
  }

  if (empty($firstSurname)) {
    echo "<p class='error'>* Agrega tu primer apellido.</p>";
  }

  if (empty($secondSurname)) {
    echo "<p class='error'>* Agrega tu segundo apellido.</p>";
  }

  /*   if (empty($dateBirth)) {
    echo "<p class='error'>* Agrega tu correo electrónico.</p>";
  } else {
    if (!validateDate($dateBirth)) {
      echo "<p class='error'>* Fecha de nacimiento incorrecta.</p>";
    }
  } */

  if (empty($phone)) {
    echo "<p class='error'>* Agrega tu correo electrónico.</p>";
  } else {
    if (!is_numeric($phone)) {
      echo "<p class='error'>* El número telefónico debe ser numérico.</p>";
    }
  }

  if (empty($email)) {
    echo "<p class='error'>* Agrega tu correo electrónico.</p>";
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<p class='error'>* El correo electrónico es incorrecto.</p>";
    }
  }

  if ($policy1 && $policy1 == '1') {
    echo "<p class='error'>* Agrega tu correo electrónico.</p>";
  } else {
    echo "<p class='error'>* Debes aceptar el tratamiento de datos personales.</p>";
  }

  echo updateContact($email, $code, $twilio);
  if ($reCode == $coed) {
    echo "<p class='error'>* numero verificado </p>";
  }

  echo getContact($email);

  echo "<p style='font-size: 14px;word-wrap: break-word;'><strong>Token: </strong>" . Auth::SignIn([
    'id' => $code,
    "firstName" => $firstName,
    "firstSurname" => $firstSurname,
    "email" => $email,
    "phone" => $phone
  ]) . "</p>";
}

function sendSMS($phone, $twilio, $code)
{
  $twilioNumber = "+13865970640";

  $message = $twilio->messages->create(
    "+57" . $phone,
    [
      "from" => $twilioNumber,
      "body" => "El código de verificación para Colmena es: " . $code
    ]
  );
  return  "<p>" . $message->sid . "</p>";
}

function updateContact($email, $code, $twilio)
{
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
    "firstname" => $_POST['firstName'],
    "lastname" => $_POST['firstSurname'],
    "phone" => $_POST['phone'],
    "code_sms" => $code
  ];

  $simplePublicObjectInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput(['properties' => $properties]);
  $apiResponse = $client->crm()->contacts()->basicApi()->update($contactId, $simplePublicObjectInput);

  echo sendSMS($_POST['phone'], $twilio, $code);

  return "<p> data=" . $apiResponse . "</p>";
}

function createContact()
{
  $client = \HubSpot\Factory::createWithApiKey('86ac45a4-9bab-4fcc-a27a-055df47a3418');
  $properties = [
    "email" => $_POST['phone'],
    "firstname" => $_POST['firstName'],
    "lastname" => $_POST['firstSurname'],
    "phone" => $_POST['phone']
  ];

  $simplePublicObjectInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput(['properties' => $properties]);
  $apiResponse  = $client->crm()->contacts()->basicApi()->create($simplePublicObjectInput);

  return "<p> create contact: " . $apiResponse . "</p>";
}

function createPropertiesContacts($name, $detail = 'new property created by Colmena')
{
  $request = new HTTP_Request2();
  $request->setUrl('https://api.hubapi.com/properties/v1/contacts/properties?hapikey=' . '86ac45a4-9bab-4fcc-a27a-055df47a3418');
  $request->setMethod(HTTP_Request2::METHOD_POST);
  $request->setHeader(array(
    'Content-Type' => 'application/json'
  ));
  $request->setBody('{
    "name": ' . $name . ',
    "label": ' . $name . ',
    "description": '  . $detail . ',
    "groupName": "contactinformation",
    "type": "string",
    "fieldType": "text",
    "formField": true,
    "displayOrder": 6
  }');

  try {
    $response = $request->send();
    if ($response->getStatus() == 200) {
      echo $response->getBody();
    } else {
      echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
        $response->getReasonPhrase();
    }
  } catch (HTTP_Request2_Exception $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function getContact($email)
{
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
  echo "<p>" . $contactsPage['results'][0]['id'] . "</p>";

  $isContact = $client->crm()->contacts()->basicApi()->getById(
    $contactsPage['results'][0]['id'],
    [['email', 'code_sms']],
    null,
    false,
    null
  );

  return "<p style='font-size: 15px; word-wrap: break-word;'>Datos: <strong>" . $isContact . "</strong></p>";
}
