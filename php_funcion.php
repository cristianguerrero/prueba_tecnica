<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cree una función que solucione M^N con sumas</title>
</head>
<body>
    <!-- Menu -->
	<?php include('menu.php');	?>

    <h2>Cree una función que solucione M^N con sumas:</h2>

    <form action="" method="post">
        <label for="base">Base (M):</label>
        <input type="number" id="base" name="base" required><br><br>
        <label for="exponente">Exponente (N):</label>
        <input type="number" id="exponente" name="exponente" required><br><br>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    function potencia($M, $N) {
        $result = 1;
        
        // Realizamos la suma de M por N veces
        for ($i = 0; $i < $N; $i++) {
            $result *= $M;
        }
        return $result;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $M = $_POST['base'];
        $N = $_POST['exponente'];
        
        // Calculamos utilizando la función potencia
        $potencia = potencia($M, $N);
        echo "<p>El resultado de $M^$N es: $potencia</p>";
    }
    ?>

</body>
</html>