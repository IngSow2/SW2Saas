<?php 
	require_once("../datos/contenidoD.php");

	/*class EmpleadoN{
		
		private $empleado;

		public function __construct(){
			$this->empleado = new empleadoD(); 
		}

		public function guardarEmpleado($nombre,$direccion,$telefono){
			$this->empleado->guardar($nombre,$direccion,$telefono);
		}

		public function listaEmpleados(){
			$lista=$this->empleado->listar();
			return $lista;
		}

		public function obtenerEmpleados(){
			return $this->empleado->obtenerEmpleados();
		}

		public function obtenerEmpleado($id){
			return $this->empleado->obtenerEmpleado($id);
		}

	};*/

	
	if(isset($_POST['pagina'])){
		if($_POST['pagina']=="registrar"){

			$ruta="../configurar/imagen";
			$archivo=$_FILES['fondoImagen']['tmp_name'];
			$nombreArchivo=$_FILES['fondoImagen']['name'];
			move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
			$ruta=$ruta."/".$nombreArchivo;

			$contenidoD=new contenidoD();
			$contenidoD->guardar($_POST['titulo'],$_POST['subtitulo'],$_POST['titulo2'],$_POST['contenido2'],$_POST['titulo3'],$_POST['contenido3']
				,$_POST['telefono'],$_POST['direccion'],$_POST['twiter'],$_POST['facebook'],$_POST['gmail'],$ruta);
			echo"<script type=\"text/javascript\">alert('ingresado correctamente'); window.location='../presentacion/principal.php';</script>";  
		}else{
			if(false){

			}else{
				echo "no creo ni listo";
			}
		}
	}else{
		//echo "no isset";
	}
	
?>