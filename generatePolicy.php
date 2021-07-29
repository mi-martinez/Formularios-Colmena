<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Auth.php';

use Twilio\Rest\Client;
use Symfony\Component\HttpClient\HttpClient;

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

  if (empty($dateBirth)) {
    echo "<p class='error'>* Agrega tu correo electrónico.</p>";
  }

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

  echo "<p style='font-size: 15px; word-wrap: break-word;'><strong>EDAD: </strong>" . calculateAge($dateBirth) . "</p>";

  if (calculateAge($dateBirth) >= 18) {
    //create contact 
    // echo getContact($email);
    $expeditionDate = calculateExpeditionDate($dateBirth);
    echo '<script>document.querySelector("#expeditionDate").value="' . $expeditionDate . '";</script>';
    echo "<p style='font-size: 15px; word-wrap: break-word;'><strong>CODE SMS: </strong>" . getContact($email)['code_sms']['value'] . "</p>";

    $isContact = getContact($email);


    nextPage($email, $radioValue, $identificationCard, $expeditionDate, $occupation, $reCode, $policy2);
    if (true)
      echo "<p style='font-size: 14px;word-wrap: break-word;'><strong>TOKEN: </strong>" . Auth::SignIn([
        'id' => $isContact['hs_object_id']['value'],
        'code' => $isContact['code_sms']['value'],
        "document" => $identificationCard,
        "fullName" => $isContact['firstname']['value'],
        "lastname" => $isContact['lastname']['value'],
        "email" => $isContact['email']['value'],
        "phone" => $isContact['phone']['value'],
        "dateBirth" => $dateBirth,
        "expeditionDate" => $expeditionDate,
        "occupationId" => $occupation,
        "planId" => $radioValue
      ]) . "</p>";
    /* echo '<script>document.querySelector("#form1").classList.add("hidden");</script>';

    echo '<script>document.querySelector("#paso_1").classList.remove("hidden");</script>';
    echo '<script>document.querySelector("#buttons_steps").classList.remove("hidden");</script>'; */

    //  echo updateContact($email, $code, $twilio);

    /*    if (array_key_exists('next', $_POST)) {
      nextPage();
    } */
  } else {
    echo "<p class='error' style='word-wrap:break-word;'><strong>No tienes la edad necesaria</strong></p>";
  }

  /* echo updateContact($email, $code, $twilio);
  if ($reCode == $coed) {
    echo "<p class='error'>* numero verificado </p>";
  }

  echo getContact($email);
 */
}

if (isset($_POST['verify'])) {
  if (empty($radioValue)) {
    echo "<p class='error'>* Selecione un plan.</p>";
  }

  if (empty($identificationCard)) {
    echo "<p class='error'>* Agrega tu cédula.</p>";
  }

  if (empty($expeditionDate)) {
    echo "<p class='error'>* Agrega tu fecha de expedución.</p>";
  }

  if (empty($occupation)) {
    echo "<p class='error'>* Escoge tu ocupación.</p>";
  }

  if (empty($reCode)) {
    echo "<p class='error'>* Agrega el código de verificación.</p>";
  } else {
    if ($reCode != getContact($email)['code_sms']['value']) {
      echo "<p class='error'>* Código de verificación invalido.</p>";
    }
  }

  if ($policy2 == 1) {
    echo "<p class='error'>* Acepte los términos, condiciones, declaraciones y autorizaciones de la poliza.</p>";
  }

  nextPage($email, $radioValue, $identificationCard, $expeditionDate, $occupation, $reCode, $policy2);
}
//143992
function nextPage($email, $radioValue, $identificationCard, $expeditionDate, $occupation, $reCode, $policy2)
{
  echo '<script>document.querySelector("#vName").value="' . $_POST['firtName'] . " " . $_POST['firtSurname'] . '";</script>';
  echo '<script>document.querySelector("#vDocument").value="' . $identificationCard . '";</script>';
  echo '<script>document.querySelector("#vEmail").value="' . $email . '";</script>';
  echo '<script>document.querySelector("#vPhone").value="' . $_POST['phone'] . '";</script>';
  echo '<script>document.querySelector("#vPay").value="' . "50.000" . '";</script>';
}


/* if (isset($_POST['next'])) {
  if (!empty($radioValue)) {
    if ($stepStatus == 'step1') {
      echo '<script>window.history.back();<script>';
      echo '<script>document.querySelector("#form1").classList.add("hidden");</script>';
      echo '<script>document.querySelector("#paso_1").classList.add("hidden");</script>';

      echo '<script>document.querySelector("#paso_2").classList.remove("hidden");</script>';
      echo '<script>document.querySelector("#buttons_steps").classList.remove("hidden");</script>';

      $stepStatus = 'step2';
      echo console_log($stepStatus);
      return "<p class='error' style='word-wrap:break-word;'><strong>" . $radioValue . "</strong></p>";
    } else  if ($stepStatus == 'step2') {
      echo '<script>document.querySelector("#form1").classList.add("hidden");</script>';
      echo '<script>document.querySelector("#paso_1").classList.add("hidden");</script>';
      echo '<script>document.querySelector("#paso_2").classList.add("hidden");</script>';

      echo '<script>document.querySelector("#paso_3").classList.remove("hidden");</script>';
      echo '<script>document.querySelector("#buttons_steps").classList.remove("hidden");</script>';

      $stepStatus = 'step2_verify';
      echo console_log($stepStatus);
      return "<p class='error' style='word-wrap:break-word;'><strong> Cédula: " . $identificationCard . "<br> Fecha Expedición: " . $expeditionDate . "<br> Ocupación: " . $occupation . "</strong></p>";
    } else if ($stepStatus == 'step2_verify') {
      echo '<script>document.querySelector("#form1").classList.add("hidden");</script>';
      echo '<script>document.querySelector("#paso_1").classList.add("hidden");</script>';
      echo '<script>document.querySelector("#paso_2").classList.add("hidden");</script>';
      echo '<script>document.querySelector("#paso_3").classList.add("hidden");</script>';

      echo '<script>document.querySelector("#paso_2_verify").classList.remove("hidden");</script>';
      echo '<script>document.querySelector("#buttons_steps").classList.remove("hidden");</script>';

      $stepStatus = 'step3';
      echo console_log($stepStatus);
      return "<p class='error' style='word-wrap:break-word;'><strong> reCode: " . $reCode . "</strong></p>";
    } else  if ($stepStatus == 'step3') {
      echo '<script>document.querySelector("#form1").classList.add("hidden");</script>';
      echo '<script>document.querySelector("#paso_1").classList.add("hidden");</script>';
      echo '<script>document.querySelector("#paso_2").classList.add("hidden");</script>';
      echo '<script>document.querySelector("#paso_3").classList.add("hidden");</script>';

      echo '<script>document.querySelector("#paso_2_verify").classList.remove("hidden");</script>';
      echo '<script>document.querySelector("#buttons_steps").classList.remove("hidden");</script>';

      $stepStatus = 'pagoo';
      echo console_log($stepStatus);
      return "<p class='error' style='word-wrap:break-word;'><strong>" .  $radioValue . "</strong></p>";
    } else if ($stepStatus == 'pagoo') {
      echo '<script>document.querySelector("#form1").classList.remove("hidden");</script>';
      echo '<script>document.querySelector("#paso_1").classList.remove("hidden");</script>';
      echo '<script>document.querySelector("#paso_2").classList.remove("hidden");</script>';
      echo '<script>document.querySelector("#paso_3").classList.remove("hidden");</script>';
      echo '<script>document.querySelector("#paso_2_verify").classList.remove("hidden");</script>';
      echo '<script>document.querySelector("#buttons_steps").classList.remove("hidden");</script>';

      $stepStatus = 'pago';
      echo console_log($stepStatus);
      return "<p class='error' style='word-wrap:break-word;'><strong>" .  $radioValue . "</strong></p>";
    }
  } else {
    echo '<script>document.querySelector("#form1").classList.add("hidden");</script>';

    echo '<script>document.querySelector("#paso_1").classList.remove("hidden");</script>';
    echo '<script>document.querySelector("#buttons_steps").classList.remove("hidden");</script>';
    return "<p class='error' style='word-wrap:break-word;'><strong> * Selecione un plan para continuar</strong></p>";
  }
} */



function getContact($email)
{
  $client = HttpClient::create();
  $response = $client->request('GET', 'https://api.hubapi.com/contacts/v1/contact/email/' . $email . '/profile?hapikey=' . '86ac45a4-9bab-4fcc-a27a-055df47a3418');
  $content = $response->toArray();
  return  $content['properties'];
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
    "firstname" => $_POST['firstName'] . " " . $_POST['secondName'],
    "lastname" => $_POST['firstSurname'] . " " . $_POST['secondSurname'],
    "phone" => $_POST['phone'],
    "code_sms" => $code
  ];

  $simplePublicObjectInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput(['properties' => $properties]);
  $apiResponse = $client->crm()->contacts()->basicApi()->update($contactId, $simplePublicObjectInput);

  //echo sendSMS($_POST['phone'], $twilio, $code);

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

function calculateAge($date)
{
  list($Y, $m, $d) = explode("-", $date);
  return (date("md") < $m . $d ? date("Y") - $Y - 1 : date("Y") - $Y);
}

function calculateExpeditionDate($date)
{
  list($Y, $m, $d) = explode("-", $date);
  $m = $m >= 10 ? $m : $m + 2;
  $newDate = new DateTime(($Y + 18) . "-" . ($m) . "-" . (01));
  //echo "<p style='font-size: 15px; word-wrap: break-word;'><strong>CODE_SMS: </strong>" . $newDate->format('Y-m-d') . "</p>";
  return $newDate->format('Y-m-d');
}

function console_log($data)
{
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}
