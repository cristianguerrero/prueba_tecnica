<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formulario</title>
</head>
<body>
    <!-- Menu -->
	  <?php include('menu.php');	?>
    
    <h2>Formulario de Registro</h2>
    <form id="form" onsubmit="return validarForm()">
        <div>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre"><br>
            <span id="nombreError" class="error"></span><br><br>
        </div>
        <div>
            <label for="email">Correo Electrónico:</label><br>
            <input type="email" id="email" name="email"><br>
            <span id="emailError" class="error"></span><br><br>
        </div>
        <div>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password"><br>
            <span id="passwordError" class="error"></span><br><br>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<script>
    function validarForm() {
        var nombre = document.getElementById('nombre').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        var nombreError = document.getElementById('nombreError');
        var emailError = document.getElementById('emailError');
        var passwordError = document.getElementById('passwordError');

        nombreError.textContent = '';
        emailError.textContent = '';
        passwordError.textContent = '';

        var valido = true;

        if (nombre === '') {
            nombreError.textContent = 'Por favor, ingrese su nombre';
            valido = false;
        }

        if (email === '') {
            emailError.textContent = 'Por favor, ingrese su correo electrónico';
            valido = false;
        } else if (!validarEmail(email)) {
            emailError.textContent = 'Por favor, ingrese un correo electrónico válido';
            valido = false;
        }

        if (password === '') {
            passwordError.textContent = 'Por favor, ingrese su contraseña';
            valido = false;
        } else if (password.length < 6) {
            passwordError.textContent = 'La contraseña debe tener al menos 6 caracteres';
            valido = false;
        }
  
        return valido;
    }
  
    function validarEmail(email) {
        var correo = /\S+@\S+\.\S+/;
        return correo.test(email);
    }
</script>