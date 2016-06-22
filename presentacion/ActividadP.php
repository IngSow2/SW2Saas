<?php 
	require_once("../negocio/actividadN.php");
	
		class ActividadP{

			private $actividadN;
			private $itemN;

			public function __construct(){
				$this->actividadN = new ActividadN(); 
			}

			public function listarActividades($id_proyecto){
				echo '<table id="actividades" class="table">
					<tr>
						<th>nombre de la actividad</th>		
						<th>ver analisis de precio unitario</th>
					</tr>';
							$items=$this->actividadN->listaItem_IdProyecto($id_proyecto);
							foreach ($items as $item) {
								echo '<tr>';
								echo '<td>'.$this->actividadN->obtenerNombre_IdActividad($item['idActividad']).'</td>';
								echo '<td><a href="#"> ingresar </a></td>';
								echo '</tr>';
							}
						
				echo '</table>';
			}

			public function insertarActividad($nombre,$tipo,$unidad){
				$this->actividadN->guardarActividad($nombre,$tipo,$unidad);
			}

		}

	if(isset($_POST['crearActividadP'])){
		if($_POST['crearActividadP']=="crear"){
			$actividad=new ActividadP();
			$actividad->insertarActividad($_POST['nombre'],$_POST['tipo'],$_POST['unidad']);
			echo"<script type=\"text/javascript\">alert('ingresado correctamente'); window.location='../presentacion/crearActividadP.php';</script>";  
		}else{
			//echo "no creo actividad";
		}
	}else{
		//echo "no isset";
	}

 ?>