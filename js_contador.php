<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Clicks</title>
    <style>
        #contador {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Menu -->
    <?php include('menu.php');	?>

    <h2>Contador de Clicks</h2>
    <div id="contador">0</div>
    <button id="btncontador">Contar click</button>

</body>
</html>

<script>
    btnContador = document.getElementById('btncontador');
    contador = document.getElementById('contador');

    let clicks = 0;

    // Función para manejar el clic
    function aumentaContador() {
        clicks++;
        contador.textContent = clicks;
    }

    // Asociar función al boton
    btnContador.addEventListener('click', aumentaContador);
</script>