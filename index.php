
    <!-- Este código contiene la base html de la página para el registro de las tareas, 
         posteriormete se llama el archivo "registro.php" para vincularlo -->


<!DOCTYPE html>
<html>
<head>  
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css"> 

    <title>Prueba Técnica</title>
</head>
    <h1>PRUEBA TÉCNICA ROCKET ERP</h1>
<body>

            <form method="post">
            	<label for="taskName">Ingrese el nombre de la tarea</label>
            	<input type="text" id="taskName" name="taskName" placeholder="Agregar nombre de la tarea">
                <br><br>
                <label for="taskDescription">Agregue la descripción de la tarea</label>
                <br><br>
                <textarea type="text" id="taskDescription" name="taskDescription" placeholder="Agregar descripción"></textarea>
                <br><br>
                <label for="taskActive">Seleccione el estado de la tarea</label> 
                <input type="radio" id="taskActive" name="estado" value="Activo">Activo 
                <input type="radio" id="taskActive" name= "estado" value="Inactivo">Inactivo   
            	<input type="submit" name="botonenviar" class="boton1" value="Registrar tarea">
                <td> <a href="mostrar.php" target="_blank"> <input type="button" class="boton2" value="Ver lista de tareas"></a> </td>
            </form>

    <?php 
    include("registro.php");
    ?>


</body>
</html>