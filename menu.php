<style>
/* Estilo General */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    text-align: center;
    background-color: #e1e1e1;
}
h1, h2, h3{
    margin-top:15px;
    margin-bottom:15px;
}
button {
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
button:hover {
    background-color: #c5c5c5;
    color:#000;
}

/* Estilo para los menús */
nav {
    background-color: #333;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}
li {
    display: inline;
}
li a {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    color: white;
}
li a:hover {
    background-color: #555;
}

/* Estilo para los submenús */
.submenu ul {
    display: none;
    position: absolute;
    background-color: #333;
}
.submenu:hover ul {
    display: block;
}
.submenu ul li {
    display: block;
}
.submenu ul li a {
    padding: 10px 20px;
    color: white;
}
.submenu ul li a:hover {
    background-color: #555;
}
</style>

<nav>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="preguntas.php">Preguntas Teóricas</a></li>
        <li class="submenu">
            <a href="#">PHP</a>
            <ul class="submenu">
                <li><a href="php_suma.php">Suma de numeros pares</a></li>
                <li><a href="php_validacion.php">Validación de correo</a></li>
                <li><a href="php_funcion.php">Función que solucione M^N</a></li>
                <li><a href="php_crud.php">Crud Básico</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="#">JavaScript</a>
            <ul class="submenu">
                <li><a href="js_contador.php">Contador de Clicks</a></li>
                <li><a href="js_lista_tareas.php">Lista De Tareas</a></li>
                <li><a href="js_valida_form.php">Validación De Formulario</a></li>
            </ul>
        </li>
    </ul>
</nav>