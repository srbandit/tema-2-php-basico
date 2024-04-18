<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de notas</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="nota"><h4>Ingrese su nota</h4></label>
    <input type="number" name="nota" min="1" max="10" step="0.01" required><br><br>
    <input type="submit" name="submit" value="Calcular">
    </form>
</body>

</html>

<?php

if(isset($_POST['submit'])){
    $nota = $_POST['nota'];
    calcularGrado($nota);
}


function calcularGrado($nota){
    $grado = $nota * 10;
   $resultado = match (true) {
    $grado > 33 && $grado < 44 => "El grado es tercera división",
    $grado > 45 && $grado < 59 => "El grado es segunda división",
    $grado >= 60 => "El grado es primera división",
    default => "El alumno está reprobado"
    };
   echo "<br>" . $resultado;
}
?>