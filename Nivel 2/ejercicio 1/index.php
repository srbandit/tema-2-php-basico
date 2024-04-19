<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de llamadas</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="calcular">
            <h4>Ingrese el tiempo total de llamada en minutos</h4>
        </label>
        <input type="number" name="tiempo" required><br><br>
        <input type="submit" name="submit" value="calcular">
    </form>
</body>

</html>



<?php

if (isset($_POST['submit'])) {
    $tiempoTotal = $_POST['tiempo'];
    calcularLlamada($tiempoTotal);
}



function calcularLlamada($tiempoTotal)
{
    $coste = 0;
    for ($i = 0; $i < $tiempoTotal; $i++) {
        if ($tiempoTotal < 3) {
            $coste = 10;
        } else {
            $coste += 5;
        }
        
    }
    echo "El coste total de la llamada será de: " . $coste . " centimos.";
}


?>