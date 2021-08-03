<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Auth.php';

use Twilio\Rest\Client;
use Symfony\Component\HttpClient\HttpClient;

$merchantId = 508029;
$accountId = 512321;
$apiLogin = 'pRRXKOl8ikMmt9u';
$apiKey = '4Vj8eK4rloUd272L48hsrarnUA';
$currency = 'COP';

$sid = "ACa7cb174249af28f42773f5fd4c5bccde"; //getenv("ACCOUNT_SID");
$token = "610b0eee86915db8d42d6c3b81e53ed5"; // getenv("TOKEN");
$twilio = new Client($sid, $token);
$code = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);

if (isset($_POST['sendInfoFormOne'])) {
  $firstName = $_POST['firstName'];
  $secondName = $_POST['secondName'];
  $firstSurname = $_POST['firstSurname'];
  $secondSurname = $_POST['secondSurname'];
  $email = $_POST['email'];
  $dateBirth = $_POST['dateBirth'];
  $phone = $_POST['phone'];

  $check01 = $_POST['check01'];
  $check02 = $_POST['check02'];
  $check03 = $_POST['check03'];

  if (empty($firstName))
    echo '<script>
    //Swal.fire({title: "Primer nombre",html: "<b>Detalle: </b><u>Campo vacio</u>",icon: "error",confirmButtonText: "OK"}).then((result)=>{
      document.querySelector("#firstName").style.borderColor="#E15132";
      document.querySelector("#eName").classList.remove("hidden");
    //});
    </script>';
  else if (empty($firstSurname))
    echo '<script>
    //Swal.fire({title: "Primer apellido",html: "<b>Detalle: </b><u>Campo vacio</u>",icon: "error",confirmButtonText: "OK"}).then((result)=>{
      document.querySelector("#firstSurname").style.borderColor="#E15132";
      document.querySelector("#eLastName").classList.remove("hidden");
    //});
    </script>';
  else if (empty($secondSurname))
    echo '<script>
    //Swal.fire({title: "Segundo apellido",html: "<b>Detalle: </b><u>Campo vacio</u>",icon: "error",confirmButtonText: "OK"}).then((result)=>{
      document.querySelector("#secondSurname").style.borderColor="#E15132";
      document.querySelector("#eLastName2").classList.remove("hidden");
    //});
    </script>';
  else if (empty($email))
    echo '<script>
    //Swal.fire({title: "Correo electrónico",html: "<b>Detalle: </b><u>Campo vacio</u>",icon: "error",confirmButtonText: "OK"}).then((result)=>{
      document.querySelector("#email").style.borderColor="#E15132";
      document.querySelector("#eEmail").classList.remove("hidden");
    //});
    </script>';
  else if (empty($phone))
    echo '<script>
    //Swal.fire({title: "Número telefonico",html: "<b>Detalle: </b><u>Campo vacio</u>",icon: "error",confirmButtonText: "OK"}).then((result)=>{
      document.querySelector("#phone").style.borderColor="#E15132";
      document.querySelector("#ePhone").classList.remove("hidden");
    //});
    </script>';
  else if (empty($dateBirth))
    echo '<script>
    //Swal.fire({title: "Fecha de nacimiento",html: "<b>Detalle: </b><u>Campo vacio</u>",icon: "error",confirmButtonText: "OK"}).then((result)=>{
       document.querySelector("#dateBirth").style.borderColor="#E15132";
       document.querySelector("#eDataBirth").classList.remove("hidden");
    //});
    </script>';
  else if (calculateAge($dateBirth) >= 18 || calculateAge($dateBirth) <= 65) {
    $expeditionDate = calculateExpeditionDate($dateBirth);
    $check01 = $check01 == "true" ? $check01 = true : $check01 = false;
    $check02 = $check02 == "true" ? $check02 = true : $check02 = false;
    $check03 = $check03 == "true" ? $check03 = true : $check03 = false;

    //$dataContact = createContact();

    echo '<script>
  /*   Swal.fire({
      icon: "info",
      title: "Paso completo"
    }).then((resolve)=>{ */
      setTimeout(function timeX(){
        sessionStorage.clear();
        
        sessionStorage.setItem("lFirstName", ' . json_encode($firstName) . ' );
        sessionStorage.setItem("lSecondName", ' . json_encode($secondName) . ' );
        sessionStorage.setItem("lFirstSurname", ' . json_encode($firstSurname) . ' );
        sessionStorage.setItem("lSecondSurname", ' . json_encode($secondSurname) . ' );
        sessionStorage.setItem("lDateBirth", ' . json_encode($dateBirth) . ' );
        sessionStorage.setItem("lEmail", ' . json_encode($email) . ' );
        sessionStorage.setItem("lPhone", ' . json_encode($phone) . ' );
        sessionStorage.setItem("lCheck1", ' . json_encode($check01) . ' );
        sessionStorage.setItem("lCheck2", ' . json_encode($check02) . ' );
        sessionStorage.setItem("lCheck3", ' . json_encode($check03) . ' );
        document.querySelector(".form-2").classList.remove("hidden");
        document.querySelector(".form-1").classList.add("hidden");
      },01);
  /*   }); */
    </script>';
  } else {
    echo '<script>
    Swal.fire({
      icon: "error",
      title: "<strong>Edad de ingreso</strong>",
      html: "Recuerda que la edad mínima es <b>18 años</b> <br>y la edad máxima permitida es <b>65 años</b>"
    })
    </script>';
  }
}

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

function updateContact($dataUpdate, $twilio)
{
  $client = \HubSpot\Factory::createWithApiKey('86ac45a4-9bab-4fcc-a27a-055df47a3418');
  $filter = new \HubSpot\Client\Crm\Contacts\Model\Filter();
  $filter
    ->setOperator('EQ')
    ->setPropertyName('email')
    ->setValue($dataUpdate['email']);

  $filterGroup = new \HubSpot\Client\Crm\Contacts\Model\FilterGroup();
  $filterGroup->setFilters([$filter]);

  $searchRequest = new \HubSpot\Client\Crm\Contacts\Model\PublicObjectSearchRequest();
  $searchRequest->setFilterGroups([$filterGroup]);

  $contactsPage = $client->crm()->contacts()->searchApi()->doSearch($searchRequest);
  $contactId = $contactsPage['results'][0]['id'];

  $properties = [
    "email" => $dataUpdate['email'],
    "firstname" => $dataUpdate['firstname'],
    "lastname" => $dataUpdate['firstSurname'],

    "first_name" => $dataUpdate['first_name'],
    "second_name" => $dataUpdate['second_name'],
    "first_surname" => $dataUpdate['first_surname'],
    "second_surname" => $dataUpdate['second_surname'],

    "birth_date" => $dataUpdate['birth_date'],
    "phone" => $dataUpdate['phone'],
    "code_sms" => $dataUpdate['code_sms']
  ];

  $simplePublicObjectInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput(['properties' => $properties]);
  $apiResponse = $client->crm()->contacts()->basicApi()->update($contactId, $simplePublicObjectInput);

  //sendSMS($dataUpdate['phone'], $twilio, $dataUpdate['code_sms']);

  return "<p> data=" . $apiResponse . "</p>";
}

function reVerify()
{
  if (empty($_POST['reCode'])) {
    echo '<script> $("#verify").on("click", (event) => {
      event.preventDefault();
      document.querySelector("#form1").classList.add("hidden");
    };</script>';
    echo "<p class='error'>* Agrega el código de autentificación.</p>";
  }
}

function reSendSMS()
{
  $sid = "ACa7cb174249af28f42773f5fd4c5bccde"; //getenv("ACCOUNT_SID");
  $token = "610b0eee86915db8d42d6c3b81e53ed5"; // getenv("TOKEN");
  $twilio = new Client($sid, $token);
  $code = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);

  echo updateContact($_POST['phone'], $code, $twilio);
  return true;
}

function createContact()
{
  $client = \HubSpot\Factory::createWithApiKey('86ac45a4-9bab-4fcc-a27a-055df47a3418');
  $properties = [
    "email" => $_POST['email'],
    "firstname" => $_POST['firstName'] . " " . $_POST['secondName'],
    "lastname" => $_POST['firstSurname'] . " " . $_POST['secondSurname'],
    "first_name" => $_POST['firstName'],
    "second_name" => $_POST['secondName'],
    "first_surname" => $_POST['firstSurname'],
    "second_surname" => $_POST['secondSurname'],
    "birth_date" => $_POST['dateBirth'],
    "phone" => $_POST['phone']
  ];
  $simplePublicObjectInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput(['properties' => $properties]);
  $apiResponse  = $client->crm()->contacts()->basicApi()->create($simplePublicObjectInput);
  return $apiResponse;
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
  return $newDate->format('Y-m-d');
}

function console_log($data)
{
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}
