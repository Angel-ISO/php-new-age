<?php

$nombre = $_GET["nombre"];
$email = $_GET["email"];
$movil = $_GET["tel"];
$nivelEstudio = $_GET["nivelEstudio"];
$lenguajes = explode(',', $_GET["lenguajes"]);
$ingles = $_GET["ingles"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido a apolo</title>
    <link rel="stylesheet" href="redirecciones.css">
</head>
<body>
<div class="centrar">
<?php
       echo "<div class='dato titulo'>welcome to Artemis</div>";
      echo "<div class='dato titulo'>En unos dias llegara la respuesta a tu email</div>";
      echo "<div class='dato'><span class='titulo'>Tu Nombre:</span> " . $nombre . "</div>";
      echo "<div class='dato'><span class='titulo'>Tu Email:</span> " . $email . "</div>";
      echo "<div class='dato'><span class='titulo'>Tu Nivel de Estudio:</span> " . $nivelEstudio . "</div>";
      echo "<div class='dato'><span class='titulo'>Lenguajes más usados:</span> " . implode(", ", $lenguajes) . "</div>";
      echo "<div class='dato'><span class='titulo'>Nivel de Inglés actual:</span> " . $ingles . "</div>";
    ?>

         <a href="index.php">volver al inicio</a>
  </div>
       
            
  
</body>
</html>