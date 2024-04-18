<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="numero_1">Número 1: </label>
        <input type="number" name="num1" required><br /><br />
        <label for="numero_2">Número 2: </label>
        <input type="number" name="num2" required><br /><br />
        <label>Operación: </label>
        <select name="op">
            <option value="suma">Suma (+)</option>
            <option value="resta">Resta (-)</option>
            <option value="multi">Multiplicar (*)</option>
            <option value="dividir">Dividir (/)</option>
        </select>
        <br /><br />
        <input type="submit" name="submit" value="Calcular">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];
        echo "<br />El resultado es: " . calculo($num1, $num2, $op);
    }
    ?>
</body>

</html>

<?php
function calculo($num1, $num2, $op)
{
    $resultado = 0;
    switch ($op) {
        case 'suma':
            $resultado = $num1 + $num2;
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            break;
        case 'mult':
            $resultado = $num1 * $num2;
            break;
        case 'dividir':
            $resultado = $num1 / $num2;
            break;
        default:
            echo "Lo siento, la operación no puede realizarse";
            break;
    }
    return $resultado;
}


?>