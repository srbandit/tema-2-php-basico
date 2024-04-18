<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="numero_1">Ingrese el número hasta el cual contar <br><b>(El número por defecto será 10 en caso de no ingresar ninguno.)</b></label><br>
    <input type="number" name="num1" value="10"><br>
    <label for="numero_2">Ingrese de cuanto en cuanto desea contar <br><b>(El número por defecto será 1 en caso de no ingresar ninguno.)</b></label><br>
    <input type="number" name="num2" value="1"><br><br>
    <input type="submit" name="submit" value="Calcular">
    
</form>
</body>
</html>


<?php

if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    contar($num1, $num2);
}








function contar($num1, $num2){
    $valorAnterior = 0;
    for($i = $num2; $i <= $num1; $i+=$num2){
        echo "<br>" . $valorAnterior . " + " . $num2 . " = " . $i;
        $valorAnterior = $i;
    }
}
    
?>



