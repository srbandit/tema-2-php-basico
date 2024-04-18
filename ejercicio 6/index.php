<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
    <label for="title"><h3>Pulsa para averiguar si Charlie te morderá el dedo.</h3></label>
    <input type="submit" value="Clickeame" name="calcular" class="button">
    </form>
</body>

</html>


<?php

if(isset($_POST['calcular'])) { 
   $boton = $_POST['calcular'];
   isBitten($boton);
} 

function isBitten($boton){
    $boton = rand(true,false);
    if($boton == false){
        $boton = "Oh no! Charlie te ha mordido el dedo!";
    }else{
        $boton = "Que suerte! Charlie no te mordió";
    }
    echo $boton;
}

?>