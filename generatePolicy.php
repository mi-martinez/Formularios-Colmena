<?php
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

  if (empty($email)) {
    echo "<p class='error'>* Agrega tu correo electrónico.</p>";
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<p class='error'>* El correo electrónico es incorrecto.</p>";
    }
  }

  if (empty($dateBirth)) {
    echo "<p class='error'>* Agrega tu correo electrónico.</p>";
  } else {
    if (!validateDate($dateBirth)) {
      echo "<p class='error'>* Fecha de nacimiento incorrecta.</p>";
    }
  }

  if (empty($phone)) {
    echo "<p class='error'>* Agrega tu correo electrónico.</p>";
  } else {
    if (!is_numeric($phone)) {
      echo "<p class='error'>* El número telefónico debe ser numérico.</p>";
    }
  }

  if ($policy1 && $policy1 == '1') {
    echo "<p class='error'>* Agrega tu correo electrónico.</p>";
  } else {
    echo "<p class='error'>* Debes aceptar el tratamiento de datos personales.</p>";
  }

  
}

function validateDate($date, $format = 'Y-m-d H:i:s')
{
  $d = DateTime::createFromFormat($format, $date);
  return $d && $d->format($format) == $date;
}
