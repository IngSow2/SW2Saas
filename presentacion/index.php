
	<?php
	
		require_once("proyectoP.php");
		include_once("head.php"); 
 	?>
			<?php 
				$p=new ProyectoP(); 
				$p->listarProyectos();
			 ?>
	

	<?php 
		include_once("foot.php");
	 ?>