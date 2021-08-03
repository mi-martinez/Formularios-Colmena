<?php
require_once  realpath(__DIR__ . '/vendor/autoload.php');

use Symfony\Component\HttpClient\HttpClient;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (isset($_POST['sendInfoFormOne'])) {
  $firstName = $_POST['firstName'];
  $secondName = $_POST['secondName'];
  $firstSurname = $_POST['firstSurname'];
  $secondSurname = $_POST['secondSurname'];
  $dateBirth = $_POST['dateBirth'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $check01 = $_POST['check01'];
  $check02 = $_POST['check02'];
  $check03 = $_POST['check03'];

  if (empty($firstName) && empty($firstSurname) && empty($secondSurname) && empty($dateBirth) && empty($email) && empty($phone)) {
    echo '<script>
    //Swal.fire({title: "Primer nombre",html: "<b>Detalle: </b><u>Campo vacio</u>",icon: "error",confirmButtonText: "OK"}).then((result)=>{
      document.querySelector("#firstName").style.borderColor="#E15132";
      document.querySelector("#eName").classList.remove("hidden");

      document.querySelector("#firstSurname").style.borderColor="#E15132";
      document.querySelector("#eLastName").classList.remove("hidden");

      document.querySelector("#secondSurname").style.borderColor="#E15132";
      document.querySelector("#eLastName2").classList.remove("hidden");

      document.querySelector("#dateBirth").style.borderColor="#E15132";
      document.querySelector("#eDataBirth").classList.remove("hidden");

      document.querySelector("#email").style.borderColor="#E15132";
      document.querySelector("#eEmail").classList.remove("hidden");

      document.querySelector("#phone").style.borderColor="#E15132";
      document.querySelector("#ePhone").classList.remove("hidden");
    //});
    </script>';
  }

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
  else if (empty($dateBirth))
    echo '<script>
    //Swal.fire({title: "Fecha de nacimiento",html: "<b>Detalle: </b><u>Campo vacio</u>",icon: "error",confirmButtonText: "OK"}).then((result)=>{
       document.querySelector("#dateBirth").style.borderColor="#E15132";
       document.querySelector("#eDataBirth").classList.remove("hidden");
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
  else {
    if (calculateAge($dateBirth) >= 18 && calculateAge($dateBirth) <= 65) {
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
}

function getContact($email)
{
  $client = HttpClient::create();
  $response = $client->request('GET', 'https://api.hubapi.com/contacts/v1/contact/email/' . $email . '/profile?hapikey=' . $_ENV["HUBSPORT_TOKEN"]);
  $content = $response->toArray();
  return  $content['properties'];
}

function createContact()
{
  $client = \HubSpot\Factory::createWithApiKey($_ENV["HUBSPORT_TOKEN"]);
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
