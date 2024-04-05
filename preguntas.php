<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Teóricas</title>
    <style>
        p{
            text-align: left;
            /*margin-bottom: 20px;*/
        }
        .respuestas{
            width: 80%;
            margin: 0 auto;
            margin-top: 5px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        h4{
            text-align:left;
        }
    </style>
</head>
<body>
    <!-- Menu -->
	<?php include('menu.php');	?>

    <h1>Preguntas Teóricas</h1>
    <br>
    
    <div class="respuestas">
        <h4>1. ¿Qué es la inyección SQL y cómo se puede prevenir en PHP?</h4>
        <p>La inyección sql es un método para atacar los sitios web que consiste en insertar código sql en una consulta sql, esto para manipular la base de datos. <br>
        Puede prevenirse evitando concatenación en consultas sql, usando funciones de escapado, y limitando privilegios a los usuarios para limitar a los atacantes.
        </p><br>

        <h4>2. Explique la diferencia entre == y === en PHP.</h4>
        <p>En PHP == se utiliza para comprobar si dos operandos tienen valores iguales sin tener en cuenta los tipos de datos. Ej: (24 == ‘24’) True <br>
        Mientras que === se utiliza para comprobar si dos operandos tienen valores y tipos de datos iguales. Ej: (24 === ‘24’) False
        </p><br>

        <h4>3. ¿Qué es Composer y para qué se utiliza en el desarrollo de PHP?</h4>
        <p>Composer es una herramienta que utilizamos para gestionar las dependencias de PHP. Se utiliza en el desarrollo de PHP para instalar, actualizar y cargar las dependencias, gestionar bibliotecas y paquetes de código de un proyecto, teniendo en cuenta las versiones.
        </p><br>

        <h4>4. ¿Qué es el Event Loop en JavaScript y cómo afecta al rendimiento de una aplicación web?</h4>
        <p>El evento loop es una secuencia de eventos en espera de ser procesada, un bucle que se ejecuta continuamente de forma asíncrona. Este afecta en gran medida el rendimiento de una aplicación web debido a la capacidad que tiene para mantener la velocidad de respuesta y la fluidez de la interfaz de usuario.
        </p><br>

        <h4>5. Explique qué son las promesas y cómo se utilizan en JavaScript.</h4>
        <p>Las promesas son objetos que nos indican cuando una operación asíncrona termina o presenta error, tiene 3 estados pending, fulfilled y rejected. Se utilizan haciendo uso del constructor promise y los parámetros resolve para resolver la promesa o reject para rechazarla.
        </p><br>

        <h4>6. ¿Qué es el ámbito léxico y cómo afecta al alcance de las variables en JavaScript?</h4>
        <p>El ámbito léxico determina el alcance de las variables dentro del código, y como se manejan las variables durante la compilacion. Este afecta el alcance de las variables dependiendo de la posición donde tengamos las variables en el código cuando compilamos, y su ubicación en funciones anidadas.
        </p><br>

        <h4>7. Describa brevemente el patrón de diseño MVC y sus componentes.</h4>
        <p>El patrón de diseño MVC es utilizado en el desarrollo de software porque nos permite separar la lógica de negocio de la interfaz de usuario. Esto mediante sus tres componentes: Modelo para la lógica y los datos, la vista para la interfaz de usuario, y el controlador para gestionar entre el modelo y la vista las interacciones del usuario.
        </p><br>

        <h4>8. ¿Cuál es la responsabilidad del modelo en el patrón MVC?</h4>
        <p>El modelo se encarga de representar la lógica de negocio y los datos de la aplicación. Este gestiona y manipula los datos para realizar condiciones de negocio, cálculos y consultas. 
        </p><br>

        <h4>9. ¿Cómo se relacionan el controlador y la vista en MVC? Explique con un ejemplo.</h4>
        <p>El controlador y la vista se relacionan a través de cada interacción del usuario. Por ejemplo, cuando un usuario hace clic en el botón enviar de un formulario, el controlador escucha este evento y recibe la información del formulario. Luego el controlador actualiza el modelo agregando los datos del formulario y cuando finaliza notifica a la vista para que se actualice la interfaz.
        </p>
    </div>

</body>
</html>