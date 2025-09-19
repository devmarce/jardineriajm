<?php
  
/* INI: TEST DEBUGGER */
echo '<pre>';
var_dump($_POST);
echo '</pre>';
/* END: TEST DEBUGGER */

//Se asegura de que el formulario se haya enviado por POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  //Si algo falla, el usuario es mandado de vuelta a volver.php.
  header("Location: volver.php");
}

//Comprueba que los campos nombre y mensaje existan y no estén vacíos
if (!isset($_POST["nombre"]) || empty($_POST["nombre"]) || !isset($_POST["mensaje"]) || empty($_POST["mensaje"])) {
  //Si algo falla, el usuario es mandado de vuelta a volver.php.
  header("Location: volver.php");
}

$nombre = $_POST["nombre"];
$mensaje = $_POST["mensaje"];

$cuerpo_mail = <<<HTML
  <h1>Contacto desde la web</h1>
  <p>De: $nombre</p>
  <h2>Mensaje:</h2>
  $mensaje
HTML;


$headers  = "MIME-Vesion: 1.0 \r\n";
$headers .= "Content-type: text/html \r\n; charset=utf-8 \r\n";
$headers .= "From: $nombre <marcelo@dex360.net> \r\n";
$headers .= "To: sitio webbbb <marcelo12mm@gmail.com> \r\n";
//$headers .= "Cc: sitio webbbb <marcelo12mm@gmail.com> \r\n"; //con copia
//$headers .= "Bcc: sitio webbbb <marcelo12mm@gmail.com> \r\n"; // copia oculta

$rta = mail("marcelo12@gmail.com", "Asunto: msj desde la web de $nombre", $cuerpo_mail, $headers);

var_dump($rta);