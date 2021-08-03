<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Auth.php';

use Symfony\Component\HttpClient\HttpClient;

$firstName = $_POST["firstName"];
$secondName = $_POST["secondName"];
$firstSurname = $_POST["firstSurname"];
$secondSurname = $_POST["secondSurname"];
$dateBirth = $_POST["dateBirth"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$isPlan = (string) $_POST['plan'];
$identificationCard = $_POST['identificationCard'];
$expeditionDate = $_POST['expeditionDate'];
$occupation = $_POST['occupation'];
$codeSms = $_POST['codeSms'];

$check1 = $_POST['check1'];
$check2 = $_POST['check2'];
$check3  = $_POST['check2'];


$PLAN_CODES = [
  'planA' => "75b96ad4-f7d9-4b10-95f4-49e08f3b1ada",
  'planB' => "07693e33-bf0d-4e83-b763-31d027e12017",
  'planC' => "1b5e055a-c08c-4a52-b402-9453464a84ca",
  'planD' => "7b713dc7-79e8-4b3a-94bd-d493f5204cb0"
];

$SUB_PLAN_ID = [
  'planA' => "6f08437e-8c4c-4f35-af12-9dbe3d191ecc",
  'planB' => "d58c7e9d-ffbd-4783-b7b0-959bfc21e1f2",
  'planC' => "3b588195-6585-4dcc-83f1-90f7b008b620",
  'planD' => "a13e19a2-f455-432e-861b-a1dbdea8a715"
];

$planCode = $PLAN_CODES[$isPlan];
$subPlanId = $SUB_PLAN_ID[$isPlan];

$properties = [
  "firstname" => $firstName . " " . $secondName,
  "lastname" => $firstSurname . " " . $secondSurname,
  "first_name" => $firstName,
  "second_name" => $secondName,
  "first_surname" => $firstSurname,
  "second_surname" => $secondSurname,
  "date_birth" => $dateBirth,
  "email" => $email,
  "phone" => $phone,
  "plan_id" => $planCode,
  "sub_plan_id" => $subPlanId,
  "identification_card" => $identificationCard,
  "expedition_date" => $expeditionDate,
  "occupation" => $occupation,
  "code_sms" => $codeSms,
  "check1" => $check1,
  "check2" => $check2,
  "check3" => $check3
];

updateContact($properties);
$isContact = getContact($email);

if (false) {
  echo "<p style='font-size: 14px;word-wrap: break-word;'><strong>TOKEN: </strong>" . Auth::SignIn([
    'id' => $isContact['hs_object_id']['value'],
    'code' => $isContact['code_sms']['value'],
    "identificationCard" => $isContact['identification_card']['value'],
    "fullName" => $isContact['firstname']['value'],
    "lastname" => $isContact['lastname']['value'],
    "email" => $isContact['email']['value'],
    "phone" => $isContact['phone']['value'],
    "date_birth" => $isContact['date_birth']['value'],
    "expeditionDate" => $isContact['expedition_date']['value'],
    "occupationId" => $isContact['occupation']['value'],
    "planId" =>  $isContact['plan_id']['value'],
    "subPlanId" =>  $isContact['sub_plan_id']['value']
  ]) . "</p>";
}

$dataEncrypt = [
  "sourcePolicyGenerate" => "AA1FCBB5-7E2F-41C9-BE76-3630A5A34132",
  "insuranceEntity" => [
    "GeneralDataInsurance" => [
      "InsuranceId" => "3013e5d9-2e21-41c6-98c2-3a77e99a40e2",
      "PlanId" => $properties['plan_id'],
      "SubPlanId" => $properties['sub_plan_id'],
      "PaymentFrequencyId" => "9dd41eee-1ba0-4fb9-ad77-fb169f28f963",
      "AutomaticRenewal" => false,
      "PaymentPromoter" => false,
      "VerificationCodeId" => "0ef36a72-0909-48cf-b556-ed086694cc86",
      "PostDestinationFinalAssistance" => false,
      "SecondMedicalOpinion" => false
    ],
    "PolicyHolder" => [
      "Name1" => $isContact['first_name']['value'],
      "Name2" => $isContact['second_name']['value'],
      "LastName1" => $isContact['first_surname']['value'],
      "LastName2" => $isContact['second_surname']['value'],
      "DocumentTypeId" => "9dd41eee-1ba0-4fb9-ad77-fb169f28f910",
      "DocumentNumber" => $isContact['identification_card']['value'],
      "Cellphone" => $isContact['phone']['value'],
      "GenderId" => "9dd41eee-1ba0-4fb9-ad77-fb169f28f972",
      "BirthDate" =>  $isContact['birth_date']['value'] . 'T05:00:00.000Z',
      "CountryBirth" => "",
      "DepartmentBirth" => "11",
      "CityBirth" => "11001",
      "IdentificationExpeditionDate" => $isContact['expedition_date']['value'] . 'T05:00:00.000Z',
      "CivilStatusId" => "",
      "Address" => "Sin direccion nn",
      "HomeCountry" => "",
      "HomeDepartment" => "11",
      "HomeCity" => "11001",
      "Email" => $isContact['email']['value'],
      "OccupationId" => $isContact['occupation']['value'],
      "InsuranceCostBasicCoverage" => null
    ],
    "BeneficiaryList" => [],
    "Pep" => [
      "IsPersonExposedPublicy" => false,
      "HasLinkPersonExposedPublicy" => false,
      "AdministersPublicResources" => false,
      "TaxObligationsOtherCountry" => false,
      "CountriesTaxObligations" => null,
      "ListPersonExposedPublicy" => null
    ],
    "Sarlaft" => null,
    "Authorizations" => [
      "Authorization1" => $properties['check1'],
      "Authorization2" => $properties['check2'],
      "Authorization3" => $properties['check3']
    ]
  ]
];

$stringDataEncrypt = json_encode($dataEncrypt);
$stringDataEncrypt = json_encode($stringDataEncrypt);

$dataEncrypt = encrypt($stringDataEncrypt);
$dataGeneratePolicy = _generatePolicy($dataEncrypt);

$dataDecrypt = decrypt($dataGeneratePolicy);
$dataDecrypt = json_decode($dataDecrypt);

$merchantId = 508029;
$accountId = 512321;
$description = "Pago de seguro Colmena con número de Referencia: " . json_encode($dataDecrypt->codeStatus) . "";
$referenceCode = json_encode($dataDecrypt->codeStatus);
$amount = 50000;
$tax = 0;
$taxReturnBase = 0;
$currency = "COP";
$signature = "6a82af482e502e87432bd4912f0017be";
$test = 0;
$buyerEmail = $isContact['email']['value'];
$responseUrl = "";
$confirmationUrl = "";

//echo "{\"codeStatus\":\"" . json_encode($dataDecrypt->codeStatus) . "\",\"merchantId\":" . $merchantId . ",\"accountId\":\"" . $merchantId . "\",\"description\":" . $description . ",\"referenceCode\":\"" . $referenceCode . "\",\"amount\":" . $amount . ",\"tax\":\"" . $tax . "\",\"taxReturnBase\":" . $taxReturnBase . ",\"currency\":\"" . $currency . "\",\"signature\":" . $signature . ",\"test\":\"" . $test . "\",\"buyerEmail\":\"" . $buyerEmail . "\",\"responseUrl\":\"" . $responseUrl . "\",\"confirmationUrl\":\"" . $confirmationUrl . "\"}";
echo "{\"codeStatus\":\"" . json_encode($dataDecrypt->codeStatus) . "\"}";

/* $dataSPayU = settingPayu($dataDecrypt->codeStatus, "50000.00");
$dataSPayU = json_decode($dataSPayU);
echo "dataSPayU::: " . $dataSPayU . "\n";

$paymentConfirmation =  paymentConfirmationPayu($dataSPayU->Reference_sale, "50000.00");
$paymentConfirmation = json_decode($paymentConfirmation);
echo "paymentConfirmation::: " . $paymentConfirmation . "\n\n";

$dataDecrypt2 = decrypt($paymentConfirmation);
$dataDecrypt2 = json_decode($dataDecrypt2);
echo "dataDecrypt2:: " . $dataDecrypt2 . "\n\n"; */


function updateContact($properties)
{
  $client = \HubSpot\Factory::createWithApiKey('86ac45a4-9bab-4fcc-a27a-055df47a3418');
  $filter = new \HubSpot\Client\Crm\Contacts\Model\Filter();
  $filter
    ->setOperator('EQ')
    ->setPropertyName('email')
    ->setValue($properties['email']);

  $filterGroup = new \HubSpot\Client\Crm\Contacts\Model\FilterGroup();
  $filterGroup->setFilters([$filter]);

  $searchRequest = new \HubSpot\Client\Crm\Contacts\Model\PublicObjectSearchRequest();
  $searchRequest->setFilterGroups([$filterGroup]);

  $contactsPage = $client->crm()->contacts()->searchApi()->doSearch($searchRequest);
  $contactId = $contactsPage['results'][0]['id'];

  $simplePublicObjectInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput(['properties' => $properties]);
  $apiResponse = $client->crm()->contacts()->basicApi()->update($contactId, $simplePublicObjectInput);

  return  $apiResponse;
}

function getContact($email)
{
  $client = HttpClient::create();
  $response = $client->request('GET', 'https://api.hubapi.com/contacts/v1/contact/email/' . $email . '/profile?hapikey=' . '86ac45a4-9bab-4fcc-a27a-055df47a3418');
  $content = $response->toArray();
  return  $content['properties'];
}

function encrypt($bobyString)
{
  $url = "http://192.168.217.114:1022/Services/Cryptography/encrypt";

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
    "Content-Type: application/json",
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

  $data = <<<DATA
{
    "bodyData": $bobyString
}
DATA;

  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

  $resp = curl_exec($curl);
  curl_close($curl);
  return $resp;
}

function decrypt($dataString)
{
  $url = "http://192.168.217.114:1022/Services/Cryptography/decrypt";

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
    "Content-Type: application/json",
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

  $data = <<<DATA
{
    "bodyData": $dataString
}
DATA;

  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

  $resp = curl_exec($curl);
  curl_close($curl);

  return json_decode($resp);
}

function _generatePolicy($dataString)
{
  $url = "http://192.168.217.114:1022/Services/PolicyIssuance/generatePolicy";

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
    "Content-Type: application/json",
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

  $data = <<<DATA
{
    "bodyData": $dataString
}
DATA;

  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

  $resp = curl_exec($curl);
  curl_close($curl);

  return $resp;
}

function settingPayu($consecutiveNumber, $amount)
{
  $merchantId = 508029;
  $accountId = 512321;
  $apiLogin = 'pRRXKOl8ikMmt9u';
  $apiKey = '4Vj8eK4rloUd272L48hsrarnUA';
  $currency = 'COP';
  $channelName = "DIGITAL_SI_SR";

  $url = "http://192.168.217.114:1022/Services/Payu/pagoPayU";
  $dataPayment = "{\"consecutiveNumber\":\"" . $consecutiveNumber . "\",\"valor\":\"" . $amount . "\",\"iva\":0,\"app\":\"" . $channelName . "\"}";
  $dataPayment = json_encode($dataPayment);
  $dataEncrypt = encrypt($dataPayment);

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
    "Content-Type: application/json",
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

  $data = <<<DATA
{
    "bodyData": $dataEncrypt
}
DATA;

  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

  $resp = curl_exec($curl);
  curl_close($curl);
  return $resp;
}

function paymentConfirmationPayu($referenceCode, $amount)
{
  $auxCurrentDate = date_create();
  $currentDate = date_timestamp_get($auxCurrentDate);
  $url = "http://192.168.217.114:1022/Services/Payu/pagoPayU";
  $dataPayment = "{\"Reference_sale\":\"" . $referenceCode . "\",\"Value\":\"" . $amount . "\",\"Tax\":\"0.00\",\"State_pol\":\"4\",\"Authorization_code\":\"969524996\",\"Date\":\"" . $currentDate . "\"}";
  $dataPayment = json_encode($dataPayment);
  $dataEncrypt = encrypt($dataPayment);

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
    "Content-Type: application/json",
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

  $data = <<<DATA
{
    "bodyData": $dataEncrypt
}
DATA;

  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

  $resp = curl_exec($curl);
  curl_close($curl);
  return $resp;
}
