<?php 
	require_once("../datos/proyectoD.php");

	class ProyectoN{
		
		private $proyecto;

		public function __construct(){
			$this->proyecto = new proyectoD(); 
		}

		public function guardarProyecto($nombre,$propietario,$direccion,$responsable,$user){
			$this->proyecto->guardar($nombre,$propietario,$direccion,$responsable,$user);
		}

		public function listaProyectos(){
			$lista=$this->proyecto->listar();
			return $lista;
		}

		public function obtenerProyecto($idProyecto){
			return $this->proyecto->obtenerProyecto($idProyecto);
		}

	};

	
	
?>