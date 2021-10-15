<?php 
$inc = include("connection.php");
?>
<?php 

$id= $_GET['id'];
$estado1= "Activo";
$estado3= "Inactivo";



$modificar = "SELECT taskActive FROM register WHERE taskId ='$id'";
$resultadoModificar = mysqli_query($conex,$modificar);


if ($resultadoModificar) {


		while ($row = $resultadoModificar->fetch_array()) {
	    $estado = $row['taskActive'];
	    $estado2= strval($estado);
	    ?>
<?php
		if (strcmp($estado2, $estado1) === 0){

			$estado= "Inactivo";

			 echo ($estado); 
			
		}

		if (strcmp($estado2, $estado3) === 0){

			$estado= "Activo";

			 echo ($estado); 
			
		}



?>

	    <?php
	    }
	}

$actualizar = "UPDATE register SET taskActive= '$estado' WHERE taskId ='$id'";
$resultadoactualizar = mysqli_query($conex,$actualizar);

if($resultadoactualizar){
	header("Location: mostrar.php");

}else{
	echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</sript>";

}

?>


?>
