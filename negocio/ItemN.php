<?php 
	require_once("../datos/itemD.php");
	require_once("../negocio/actividadN.php");
	class ItemN{

		private $itemD;
		private $actividadN;

		public function __construct(){
			$this->itemD = new ItemD(); 
			//$this->actividadN = new ActividadN();
		}

		public function guardarItem($actividad,$idProyecto){
			return $idItem=$this->itemD->guardar($actividad,$idProyecto);
		}

		public function listaItem_IdProyecto($idProyecto){
			$lista=$this->itemD->listarItem_IdProyecto($idProyecto);
			return $lista;
		}

		public function guardarDiagrama($idItem,$predecesor,$fechaIni,$fechaFin){
			$this->itemD->guardarDiagrama($idItem,$predecesor,$fechaIni,$fechaFin);
		}

		public function getFechaI($idItem){
			$fecha1=$this->itemD->getFechaI_idItem($idItem);
			//$fecha2=''.substr($fecha1, 6, 4).','.substr($fecha1, 3, 2).','.substr($fecha1, 0, 2).'';
			return str_replace("-", ",", $fecha1);
		}

		public function getFechaF($idItem){
			$fecha1=$this->itemD->getFechaF_idItem($idItem);
			//$fecha2=''.substr($fecha1, 6, 4).','.substr($fecha1, 3, 2).','.substr($fecha1, 0, 2).'';
			return str_replace("-", ",", $fecha1);
		}

		public function obtenerNombre_IdActividad($idActividad){
			$actividadN=new ActividadN();
			return $actividadN->obtenerNombre_IdActividad($idActividad);
		}

	};


	
	
	

?>