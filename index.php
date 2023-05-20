<?php
 $urldest='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="myform">
<form action="<?php  echo $urldest; ?>" method="post">


     <div class="group">
  <input required="" type="text" name="nombre" class="input">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>Name</label>
</div><br>
    





<div class="group">
  <input required="" name="apellido" type="text" class="input">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>apellido</label>
</div><br>




<div class="group">
  <input required="" name="email" type="text" class="input">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>email</label>
</div><br>



<div class="group">
  <input required="" name="tel" type="text" class="input">
  <span class="highlight"></span>
  <span class="bar"></span>
  <label>telefono</label>
</div><br>

     

<p class="gg">selecciona su experiencia academica</p>



    <select name="experiencia">
  <option value="bachiller" >bachiller</option>
  <option value="tecnico" >tenico</option>
  <option value="Tecnologo" >tecnologo</option>
  <option value="profesional" >profesional</option>
  <option value="estudiante universitario" >estudiante U</option>


</select>



<p>selecciona tus conocimientos</p><br>


python: <input type="checkbox" value="python" name="lenguajes[]"><br>
html: <input type="checkbox" value="html" name="lenguajes[]"><br>
css: <input type="checkbox" value="css" name="lenguajes[]"><br>
java script: <input type="checkbox" value="js" name="lenguajes[]"><br>
php: <input type="checkbox" value="php" name="lenguajes[]"><br>
node: <input type="checkbox" value="node" name="lenguajes[]"><br>
c#: <input type="checkbox" value="c#" name="lenguajes[]"><br>
typescript: <input type="checkbox" value="ts" name="lenguajes[]"><br>


<p>nivel de ingles</p>

<select name="ingles">
  <option value="BAJO">bajo</option>
  <option value="MEDIO">intermedio</option>
  <option value="ALTO">alto</option>
</select><br><br>




    <input type="reset" value="refrescar" >
     <input type="submit" value="descubre tu valoracion">
    </form>
</div>
    
</body>
</html>

<?php

$longitud = count($_POST['lenguajes']);

foreach($_POST['lenguajes'] as $lenguajes) {
    echo "<p>Valor recibido: $lenguajes </p>";

}
if($longitud <= 2){
$urldest = header( 'Location: apolo.php?cc=' . '&nombre=' . $_POST["nombre"] . '%20' . $_POST["apellido"]. $_POST["tel"] .'&email=' . $_POST["email"]  . '&nivelEstudio=' . $_POST["experiencia"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);

} 
elseif($longitud <= 4){
    $urldest = header( 'Location: artemis.php?cc=' . '&nombre=' . $_POST["nombre"] . '%20' . $_POST["apellido"]. $_POST["tel"] .'&email=' . $_POST["email"]  . '&nivelEstudio=' . $_POST["experiencia"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);
}elseif($longitud <= 6){
    $urldest = header( 'Location: sputnik.php?cc=' . '&nombre=' . $_POST["nombre"] . '%20' . $_POST["apellido"]. $_POST["tel"] .'&email=' . $_POST["email"]  . '&nivelEstudio=' . $_POST["experiencia"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);
}

?>
