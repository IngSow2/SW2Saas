
	<?php
		include_once("head.php"); 
		
 	?>

 	<a class="btn btn-primary" href="crearItem.php?idProyecto=<?php echo $_REQUEST['id']; ?>">agregar actividad</a>

 	<a class="btn btn-primary" href="gestionarProyectoP.php?id=<?php echo $_REQUEST['id']; ?>">volver</a><br><br><br>

	<?php 
		require_once("actividadP.php");
		$n=new ActividadP();
		$n->listarActividades($_REQUEST['id']);
	 ?>

	<?php 
		include_once("foot.php");
	 ?>