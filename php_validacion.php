<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de Validación de Correo Electrónico</title>
</head>
<body>
    <!-- Menu -->
	<?php include('menu.php');	?>

    <h2>Ejercicio de Validación de Correo Electrónico:</h2>

    <form action="" method="post">
        <label for="correo">Ingrese su dirección de correo electrónico:</label><br><br>
        <input type="text" id="correo" name="correo"><br><br>
        <button type="submit" name="validar">Validar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se ha enviado un dato
        if (isset($_POST["correo"]) && !empty($_POST["correo"])) {
            $correo = $_POST["correo"];
            
            // Validar el correo electrónico
            if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                echo "<p>$correo es una dirección de correo electrónico válida.</p>";
            } else {
                echo "<p>$correo no es una dirección de correo electrónico válida.</p>";
            }
        } else {
            echo "Por favor, ingrese un correo.";
        }
    }
    ?>

</body>
</html>