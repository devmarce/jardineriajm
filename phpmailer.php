<?php

/*
echo '<pre>';
//var_dump($_POST);
echo '</pre>';
 */

/* ‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖ VERIFICATION ‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖ */
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


/* ‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖ DATA POST ‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖ */
$nombre      = $_POST["nombre"];
$mensaje     = $_POST["mensaje"];
$telefono    = $_POST["telefono"];
$email = !empty($_POST["email"]) ? $_POST["email"] : "No agregó casilla de mail";
$consulta    = $_POST["consulta"];

if (isset($email) && !empty($email)) {
  $mail_emisor = $email;
} else {
  $mail_emisor = "mareco.mam@gmail.com.ar";
}

/* ‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖ CUERPO DE MAIL ‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖ */
$cuerpo_mail_html = <<<HTML
  <div style="color: white;background: #0d3915e8;padding: 1rem;">
  <h1>Contacto desde la web Jardineria JM &#127808;</h1>
  <hr>
  <p><b>MOTIVO DE CONSULTA:</b> $consulta</p>
  <p><b>Prospecto:</b> $nombre</p>
  <p><b>Teléfono:</b> $telefono</p>
  <p><b>Email:</b> $email</p>
  <h2>Mensaje del posible cliente:</h2>
  <p>$mensaje</p>
  </div>
HTML;
//----------------------------------------- END Data



/* ‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖ PHPMAILER ‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖‖ */

use PHPMailer\PHPMailer\PHPMailer;

//importando los files requeridos (folder phpmailer)
require "./phpmailer/PHPMailer.php";
require "./phpmailer/Exception.php";

// INSTANCIA OBJETO
$mailer = new PHPMailer();

//Acceder a funciones o atributos: $mailer-> ...

$mailer->CharSet = 'UTF-8';
$mailer->Encoding = 'base64';
$mailer->setFrom($mail_emisor, "JJM $nombre");
$mailer->addAddress("info@jardineriajm.com.ar", "Sitio Web");
//$mailer->addCC("marcelo@dex360.net", "Sitio Web");      // con copia
$mailer->addBCC("marcelo12mm@gmail.com", "Sitio Web Cc"); // con copia Oculta
$mailer->Subject = "Mensaje Web: consulta";
$mailer->msgHTML($cuerpo_mail_html);
$rta = $mailer->send();
// sitio esta ok, levanta la pagina de gracias
if ($rta) {
  header("Location: gracias.php");
} else {
  header("Location: volver.php");
}