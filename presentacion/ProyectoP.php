<?php
	

		require_once("../negocio/proyectoN.php");
		$proyectoN=new ProyectoN();
		if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		class ProyectoP{

			private $proyectoN;

			public function __construct(){
				$this->proyectoN = new proyectoN(); 
			}

			public function listarProyectos(){
				$proyectos=$this->proyectoN->listaProyectos();
				echo '<table id="proyectos" class="table">
						<tr>
							<th>nombre del proyecto</th>		
							<th>ingresar al proyecto</th>
						</tr>';
				foreach ($proyectos as $proyecto) {
					echo '<tr>';
					echo '<td>'.$proyecto['nombre'].'</td>';
					echo '<td><a href="gestionarProyectoP.php?id='.$proyecto['id'].'">ingresar</a><td>';
					echo '</tr>';
				}
				echo '</table>';
			}

			public function opcioneProyectos($idProyecto){
				echo '<table id="proyectos" class="table">';
				//$proyectos=$proyectoN->obtenerProyecto($idProyecto);
				echo '<tr>';
				echo '<th><h4>ver actividades</h4></th>';
				//echo '<th><h4>ver analisis de precio unitario</h4></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<td><a href="gestionarActividadP.php?id='.$idProyecto.'"><img src="img/image-actividad.png" alt="actividades"/></a></td>';
				//echo '<td><a href="gestionarProyectoP.php?id='.$idProyecto.'"><img src="img/image-precio.png" alt="analisis de precio unitario"/></a></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<th><h4>ver planificaicon</h4></th>';
				echo '<th><h4>ver diagrama de gantt</h4></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<td><a href="gestionarProyectoP.php?id='.$idProyecto.'"><img src="img/image-planificacion.png" alt="planificacion"/></a></td>';
				echo '<td><a href="diagramaGanttP.php?id='.$idProyecto.'"><img src="img/image-gantt.png" alt="diagrama de gantt"/></a></td>';
				echo '</tr>';
				echo '</table>';
			}

			public function guardarProyecto($nombre,$nombrePropietario,$direccion,$responsable,$user){
				$this->proyectoN->guardarProyecto($nombre,$nombrePropietario,$direccion,$responsable,$user);
			}

		}

	if(isset($_POST['crearProyecto'])){
		if($_POST['crearProyecto']=="crear"){
			$proyectoN=new ProyectoN();
			$proyectoN->guardarProyecto($_POST['nombre'],$_POST['nombrePropietario'],$_POST['direccion'],$_POST['responsable'],$_SESSION['user']);
			echo"<script type=\"text/javascript\">alert('proyecto ingresado correctamente '); window.location='index.php';</script>";  
		}else{
			//echo "no crear";
		}
	}else{
		//echo "no isset";
	}

 	?>