<?php

include 'lib/conexion.php';

// Crear usuario (CREATE)
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['crear'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario creado correctamente";
    } else {
        echo "Error al crear usuario: " . $conn->error;
    }
}

// Actualizar usuario (UPDATE)
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    
    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario actualizado correctamente";
    } else {
        echo "Error al actualizar usuario: " . $conn->error;
    }
}

// Eliminar usuario (DELETE)
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminar'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM usuarios WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado correctamente";
    } else {
        echo "Error al eliminar usuario: " . $conn->error;
    }
}

// Leer usuarios
$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de CRUD Básico</title>
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
            margin: 0 auto;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <!-- Menu -->
	<?php include('menu.php');	?>

    <h2>Ejercicio de CRUD Básico:</h2>

    <!-- Formulario para crear usuario -->
    <h3>Crear Usuario</h3>
    <form method="post" action="">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email"><br><br>
        <button type="submit" name="crear">Crear</button>
    </form>

    <!-- Tabla para Leer usuarios -->
    <h3>Listar Usuarios</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        <?php
        if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay usuarios registrados</td></tr>";
        }
        ?>
    </table>

    <!-- Formulario para actualizar usuario -->
    <h3>Actualizar Usuario</h3>
    <form method="post" action="">
        <input type="number" name="id" placeholder="ID del usuario a actualizar"><br><br>
        <input type="text" name="nombre" placeholder="Nuevo nombre">
        <input type="email" name="email" placeholder="Nuevo email"><br><br>
        <button type="submit" name="actualizar">Actualizar</button>
    </form>

    <!-- Formulario para eliminar usuario -->
    <h3>Eliminar Usuario</h3>
    <form method="post" action="">
        <input type="number" name="id" placeholder="ID del usuario a eliminar"><br><br>
        <button type="submit" name="eliminar">Eliminar</button>
    </form>
</body>
</html>

<?php
// Cerrar conexión
$conn->close();
?>