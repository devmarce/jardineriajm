<?php

/* INI: TEST DEBUGGER */

use PHPMailer\PHPMailer\PHPMailer;

echo '<pre>';
//var_dump($_POST);
echo '</pre>';
/* END: TEST DEBUGGER */

//Se asegura de que el formulario se haya enviado por POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  //Si algo falla, el usuario es mandado de vuelta a volver.php.
  header("Location: volver.php");
}

//Comprueba que los campos nombre y mensaje existan y no estén vacíos
if (!isset($_POST["nombre"]) || empty($_POST["nombre"]) || !isset($_POST["telefono"]) || empty($_POST["telefono"]) || !isset($_POST["mensaje"]) || empty($_POST["mensaje"])) {
  //Si algo falla, el usuario es mandado de vuelta a volver.php.
  header("Location: volver.php");
}


$nombre   = $_POST["nombre"];
$mensaje  = $_POST["mensaje"];
$telefono = $_POST["telefono"];
$email    = $_POST["email"];

$cuerpo_mail = <<<HTML
  <div style="color: white;background: #0d3915e8;padding: 1rem;">
  <h1>Contacto desde la web Jardineria JM</h1>
  <hr>
  <p><b>Prospecto:</b> $nombre</p>
  <p><b>Teléfono:</b> $nombre</p>
  <p><b>Email:</b> $nombre</p>
  <h2>Mensaje del posible cliente:</h2>
  <p>$mensaje</p>
  </div>
HTML;
//----------------------------------------- END Data

//importando los files requeridos:
require "./phpmailer/PHPMailer.php";
require "./phpmailer/Exception.php";

//use PHPMailer\PHPMailer\PHPMailer;

// lo que viene desde aqui, se puede hacer usando com Composer o colo con php

$mailer = new PHPMailer();


//Acceder a funciones o atributos: $mailer-> ...

$mailer->setFrom("info@jardineriajm.com.ar", "JJM $nombre");
$mailer->addAddress("info@jardineriajm.com.ar", "Sitio Web");
//$mailer->addCC("marcelo@dex360.net", "Sitio Web");
$mailer->addBCC("marcelo12mm@gmail.com", "Sitio Web Cc"); // con copia oculta
$mailer->Subject = "Mensaje Web: consulta";
$mailer->msgHTML($cuerpo_mail);
$rta = $mailer->send();

if ($rta) {
  header("Location: gracias.php");
}
