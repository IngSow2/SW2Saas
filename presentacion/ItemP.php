<?php 

	require_once("../negocio/itemN.php");
	require_once("../negocio/actividadN.php");


	class ItemP{

		private $itemN;
		private $actividadN;

		public function __construct(){
			$this->itemN=new ItemN();
			$this->actividadN=new ActividadN();
		}

		public function listaActividad(){
			echo '<select name="actividad" class="form-group"> ';
			$actividad=$this->actividadN->listaActividad();
			foreach ($actividad as $a) {
			    echo '<option value="'.$a['id'].'">'.$a['nombre'].'</option>';
			}
			echo '</select>';

		}

		public function actividadesProyecto($idProyecto){
			echo '<select name="predecesor" class="form-group"> 
										        <option value="0">sin actividad previa</option>;';
			$items=$this->itemN->listaItem_IdProyecto($idProyecto);
			foreach ($items as $it) {
			    echo '<option value="'.$it['id'].'">'.$this->itemN->obtenerNombre_IdActividad($it['idActividad']).'</option>';
			}
			echo '</select>';
		}

		public function guardarItem($actividad,$idProyecto){
			return $idItem=$this->itemN->guardarItem($actividad,$idProyecto);
		}

		public function guardarDiagrama($idItem,$predecesor,$fechaIni,$fechaFin){
			$this->itemN->guardarDiagrama($idItem,$predecesor,$fechaIni,$fechaFin);
		}

	}

	if(isset($_POST['crearItem'])){
		if($_POST['crearItem']=="crear"){
			$itemP=new ItemP();
			$idItem=$itemP->guardarItem($_POST['actividad'],$_POST['idProyecto']);
			$itemP->guardarDiagrama($idItem,$_POST['predecesor'],$_POST['fechaIni'],$_POST['fechaFin']);
			echo"<script type=\"text/javascript\">alert('ingresado correctamenteaa'); window.location='../presentacion/gestionarActividadP.php?id=".$_POST['idProyecto']."';</script>";  
			//echo '<script type=\text/javascript\>alert("ingresado correctamente"); window.location="../presentacion/gestionarActividadP.php";</script>';  
		}else{
			echo "no creo aaaa";
		}
	}else{
		//echo "no isset";
	}

 ?>