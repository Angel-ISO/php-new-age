<?php

$nombre = $_GET["nombre"];
$email = $_GET["email"];
$movil = $_GET["movil"];
$nivelEstudio = $_GET["nivelEstudio"];
$lenguajes = explode(',', $_GET["lenguajes"]);
$ingles = $_GET["ingles"];


echo "eres sputnik <br>";
echo "tu Nombre: " . $nombre . "<br>";
echo "tu Email: " . $email . "<br>";
echo "tu Nivel de Estudio: " . $nivelEstudio . "<br>";
echo "Lenguajes mas usados: " . implode(", ", $lenguajes) . "<br>";
echo "Nivel de Inglés actual: " . $ingles . "<br>";
?>