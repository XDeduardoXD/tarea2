<!DOCTYPE html>
<html>

<head>
    <title>Calculadora basica v2</title>
</head>

<body>
    <h1>Calculadora Basica Para <b>SUMAR + RESTAR</b></h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <input type="number" name="n1" placeholder="Numero 1" required><br><br>
        <input type="number" name="n2" placeholder="Numero 2" required><br><br>

        <select name="operacion">
            <option value="s">Sumar</option>
            <option value="r">Restar</option>
        </select>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $operacion = $_POST["operacion"];
        $r = 0;

        if ($operacion == "s") {
            $r = $n1 . $n2;
        } elseif ($operacion == "r") {
            $r = $n1 - $n2;
        }

        echo "<h2>El resultado es: $r</h2>";
    }
    ?>
</body>
</html>

