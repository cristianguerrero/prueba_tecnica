<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <style>
        .lista-tareas {
            list-style: none;
            display: grid;
        }
        .tarea {
            margin-bottom: 10px;
        }
        .tarea.completa {
            text-decoration: line-through;
        }
        .btn-borrar {
            margin-left: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Menu -->
    <?php include('menu.php');	?>

    <h2>Lista de Tareas</h2>
    <input type="text" id="tareaN" placeholder="Agregar nueva tarea"><br><br>
    <button onclick="agregarTarea()">Agregar</button><br><br>
    <p>Dar Click sobre las tareas completadas</p><br><br>
    
    <ul id="listaTareas" class="lista-tareas"></ul>

<script>
    // Array con lista de tareas
    let tareasArray = [];

    // Función para agregar una tarea
    function agregarTarea() {
        const tareaN = document.getElementById("tareaN");
        const tareaText = tareaN.value.trim();
        if (tareaText !== "") {
            const tarea = {
                id: Date.now(),
                text: tareaText,
                completa: false
            };
            tareasArray.push(tarea);
            mostrarTareas();
            tareaN.value = "";
        }
    }

    // Función para mostrar las tareas
    function mostrarTareas() {
        const listaTareas = document.getElementById("listaTareas");
        listaTareas.innerHTML = "";
        tareasArray.forEach(tarea => {
            const tareaItem = document.createElement("li");
            tareaItem.classList.add("tarea");
            if (tarea.completa) {
                tareaItem.classList.add("completa");
            }
            tareaItem.textContent = tarea.text;
            tareaItem.addEventListener("click", () => completar(tarea.id));
            const btnBorrar = document.createElement("span");
            btnBorrar.classList.add("btn-borrar");
            btnBorrar.textContent = "❌";
            btnBorrar.addEventListener("click", () => borrarTarea(tarea.id));
            tareaItem.appendChild(btnBorrar);
            listaTareas.appendChild(tareaItem);
        });
    }

    // Función para completar o no completar una tarea
    function completar(tareaId) {
        const tareasI = tareasArray.findIndex(tarea => tarea.id === tareaId);
        if (tareasI !== -1) {
            tareasArray[tareasI].completa = !tareasArray[tareasI].completa;
            mostrarTareas();
        }
    }

    // Función para eliminar una tarea
    function borrarTarea(tareaId) {
        tareasArray = tareasArray.filter(tarea => tarea.id !== tareaId);
        mostrarTareas();
    }

    // Inicializar la lista de tareas
    mostrarTareas();
</script>
</body>
</html>