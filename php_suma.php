<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de Suma de Números Pares</title>
</head>
<body>
    <!-- Menu -->
	<?php include('menu.php');	?>

    <h2>Ejercicio de Suma de Números Pares:</h2>
    
    <form action="" method="post">
        <label for="numero">Ingrese un número entero positivo:</label><br><br>
        <input type="number" id="numero" name="numero" required><br><br>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se ha enviado un dato
        if (isset($_POST["numero"]) && !empty($_POST["numero"])) {
            $numero = $_POST["numero"];
            
            // Verificar si el número es positivo
            if ($numero > 0) {
                $suma = 0;
                // Iterar desde 1 hasta el número dado
                for ($i = 1; $i <= $numero; $i++) {
                    // Si el número actual es par, sumarlo a la variable $suma
                    if ($i % 2 == 0) {
                        $suma += $i;
                    }
                }
                echo "La suma de los números pares hasta $numero es: $suma";
            } else {
                echo "Por favor, ingrese un número entero positivo.";
            }
        } else {
            echo "Por favor, ingrese un número válido.";
        }
    }
    ?>

</body>
</html>