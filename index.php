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
    <script src="dom.js" defer></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>






    <div class="myform">
<form  class="f" action="<?php  echo $urldest; ?>" method="post">


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

<div class="conocimientos">
python: <input  class="valores" value="python" name="lenguajes[]" type="checkbox">
html: <input type="checkbox" value="html" name="lenguajes[]" class="valores">
css: <input type="checkbox" value="css" name="lenguajes[]" class="valores">
javaScript:<input type="checkbox" value="js" name="lenguajes[]" class="valores"><br>
php: <input type="checkbox" value="php" name="lenguajes[]" class="valores"><br>
node: <input type="checkbox" value="node" name="lenguajes[]" class="valores"><br>
c#: <input type="checkbox" value="c#" name="lenguajes[]" class="valores"><br>
typeScript: <input type="checkbox" value="ts" name="lenguajes[]" class="valores"><br>
</div>

<div class="lista" style="display:none;">

</div>



<p>tu nivel de ingles</p>

<select name="ingles">
  <option value="BAJO">bajo</option>
  <option value="MEDIO">intermedio</option>
  <option value="ALTO">alto</option>
</select><br><br>



<div class="botones">
    <input type="reset" value="refrescar" class="shadow__btn"  >
    <button type="submit" class="shadow__btn">
    enviar
    </button>
    </form>
</div>
</div>
    




</body>
</html>

<?php

$longitud = count($_POST['lenguajes']);

foreach($_POST['lenguajes'] as $lenguajes) {
  
}
if($longitud === 2 || $longitud ===3 ){
$urldest = header( 'Location: apolo.php?cc=' . '&nombre=' . $_POST["nombre"] . '%20' . $_POST["apellido"]. '&tel='.$_POST["tel"] .'&email=' . $_POST["email"]  . '&nivelEstudio=' . $_POST["experiencia"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);

} 
elseif($longitud === 4 || $longitud === 5 ){
    $urldest = header( 'Location: artemis.php?cc=' . '&nombre=' . $_POST["nombre"] . '%20' . $_POST["apellido"]. '&tel='.$_POST["tel"] .'&email=' . $_POST["email"]  . '&nivelEstudio=' . $_POST["experiencia"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);
}elseif($longitud >= 6){
    $urldest = header( 'Location: sputnik.php?cc=' . '&nombre=' . $_POST["nombre"] . '%20' . $_POST["apellido"].'&tel=' .$_POST["tel"] .'&email=' . $_POST["email"]  . '&nivelEstudio=' . $_POST["experiencia"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);
}

?>
