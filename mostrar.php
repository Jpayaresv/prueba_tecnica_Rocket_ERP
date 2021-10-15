
<!-- Este archivo nos permite mostrar en una tabla, los datos que hemos almacenado en la BD. También cuenta con unos botones que nos
permiten realizar acciones como eliminar registro, actualizar estado de la tarea, entre otros.  -->

<?php 

$inc = include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="estilosBD.css">
</head>
<body>

<br>
	<table border="1" >
		<tr>
	<!--		<td>ID</td> -->
			<td><b>Nombre de la tarea</b></td>
			<td><b>Descripción de la tarea</b></td>
			<td><b>Estado</b></td>
			<td class="fyh"><b>Fecha / Hora</b></td>	
		</tr>

<?php 		

if ($inc) {
	$consulta = "SELECT * FROM register";
	$resultado = mysqli_query($conex,$consulta);

	if ($resultado) {


		while ($row = $resultado->fetch_array()) {
	//    $id = $row['taskId'];
	    $nameAct = $row['taskName'];
	    $taskDesc = $row['taskDescription'];
	    $estado = $row['taskActive'];
	    $fechareg = $row['taskDate'];
	    ?>
        		<tr>
        <!--			<td><?php echo $id ?><br></td> -->
        			<td><?php echo $nameAct; ?><br></td>
        		    <td><?php echo $taskDesc ?><br></td>
        		    <td><?php echo $estado ?><br></td>
        		    <td><?php echo $fechareg ?><br></td>
        		    <td> <a href="modificarestado.php?id=<?php echo $row["taskId"];?>"> <input type="button" class="boton1" value="Cambiar estado"></a> </td>
	       		    <td> <a href="eliminar.php?id=<?php echo $row["taskId"];?>"><input type="button" class="boton2" value="Eliminar tarea"></a> </td>

        		</tr>    
  
	    <?php
	    }
	}
}
?>

</table>
<div> 
	&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="index.php"> <input type="button" class="boton4" value="Registrar otra tarea"></a> 
	<td> <a href="mostrar.php"> <input type="button" class="boton5" value="Actualizar"></a> </td>
</div>
</body>
</html>