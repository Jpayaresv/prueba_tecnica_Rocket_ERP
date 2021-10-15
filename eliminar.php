<!-- Con este archivo podemos eliminar cualquier fila de la base de datos, borrando así cualquier tarea -->
<?php 
$inc = include("connection.php");
?>
<?php 

$id= $_GET['id'];


$eliminar = "DELETE FROM register WHERE taskId ='$id'";
$resultadoEliminar = mysqli_query($conex,$eliminar);

if($resultadoEliminar){
	header("Location: mostrar.php");
	
	

}else{
	echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</sript>";

}
?>