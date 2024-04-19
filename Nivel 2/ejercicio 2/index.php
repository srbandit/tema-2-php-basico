<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<label for="productos"><h4>Ingrese la cantidad de productos que desea</h4></label><br>
<ul>
    <li><h5>Chocolate: 1 euro</h5></li>
    <input type="number" name="chocolate">
    <li><h5>Chicles: 0,50 euros</h5></li>
    <input type="number" name="chicle">
    <li><h5>Caramelos: 1,50 euros</h5><input type="number" name="caramelo"></li>
</ul>
    <input type="submit" name="submit" value="Send">
    </form>
</body>

</html>


<?php

if (isset($_POST['submit'])) {
    $chocolate = $_POST['chocolate'];
    $chicle = $_POST['chicle'];
    $caramelo = $_POST['caramelo'];
    echo "El subtotal es: " . subTotal($chocolate, $caramelo, $chicle);
}







function totalChocolates($chocolate){
    return $chocolate * 1;
}

function totalChicles($chicle){
    return $chicle * 0.5;
}

function totalCaramelos($caramelo){
    return $caramelo * 1.5;
}


function subTotal($chocolate, $caramelo, $chicle){
    $subTotal = totalChocolates($chocolate);
    $subTotal += totalChicles($chicle);
    $subTotal += totalCaramelos($caramelo);

    return $subTotal;
}

?>