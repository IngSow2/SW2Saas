<?php 
	require_once("../datos/actividadD.php");
	require_once("../negocio/itemN.php");
	class ActividadN{

		private $actividadD;
		private $itemN; 

		public function __construct(){
			$this->actividadD = new ActividadD(); 
			$this->itemN = new ItemN();
		}

		public function guardarActividad($nombre,$tipo,$unidad){
			$this->actividadD->guardar($nombre,$tipo,$unidad);
		}

		public function listaActividad(){
			$lista=$this->actividadD->listar();
			return $lista;
		}

		public function obtenerNombre_IdActividad($idActividad){
			return $this->actividadD->obtenerNombre_IdActividad($idActividad);
		}

		public function listaItem_IdProyecto($id_proyecto){
			return $this->itemN->listaItem_IdProyecto($id_proyecto);
		}

	};

	
?>