<?php 

include("connection.php");
date_default_timezone_set("America/Bogota");

if (isset($_POST['botonenviar'])) {
    if (strlen($_POST['taskName']) >= 1 && strlen($_POST['taskDescription']) >= 1) {
	    $nameAct = trim($_POST['taskName']);
	    $taskDesc  = trim($_POST['taskDescription']);
	    $estado = trim($_POST['estado']); 
	    $fechareg = date("Y-m-d / H:i:s");
	    $consulta = "INSERT INTO register(taskName, taskDescription, taskActive, taskDate) VALUES ('$nameAct','$taskDesc','$estado','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	
	    	?> 

	    	<h3>¡Has agregado la tarea correctamente!</h3>


           <?php
	    } else {
	    	?> 
	    	<h3>¡Ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3>¡Por favor complete los campos!</h3>
           <?php
    }


}



?>
