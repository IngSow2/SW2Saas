<?php 

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	require_once("../datos/suscriptorD.php");


	class SuscriptorN{
		
		private $suscriptor;

		public function __construct(){
			$this->suscriptor = new suscriptorD(); 
		}

		public function guardarSuscriptor($usuario,$password,$nombre){
			$this->suscriptor->guardar($nombre,$password,$usuario);
		}

		public function listaSuscriptors(){
			$lista=$this->suscriptor->listar();
			return $lista;
		}

		public function obtenerSuscriptors(){
			return $this->suscriptor->obtenersuscriptors();
		}

		public function obtenerSuscriptor($id){
			return $this->suscriptor->obtenersuscriptor($id);
		}

		public function existe($user,$pass){
			return $this->suscriptor->existe($user,$pass);
		}

		public function existeUser($user){
			return $this->suscriptor->existeUser($user);
		}

		public function obtenerId($user,$pass){
			return $this->suscriptor->obtenerId($user,$pass);
		}

		public function obtenerNombre($user){
			return $this->suscriptor->obtenerNombre($user);
		}

	};

	if(isset($_POST['pagina'])){
		if($_POST['pagina']=="registrar"){
			$suscriptorN=new SuscriptorN();
			if(!$suscriptorN->existeUser($_POST['usuario'])){
				$suscriptorN->guardarSuscriptor($_POST['usuario'],$_POST['password'],$_POST['nombre']);
				echo"<script type=\"text/javascript\">alert('ingresado correctamente'); window.location='../index.php';</script>"; 
			}else{
				echo"<script type=\"text/javascript\">alert('usuario ya existe'); window.location='../suscriptorP.php';</script>"; 
			}
			 
		}else{
			if($_POST['pagina']=="ingresar"){
				$suscriptorN=new SuscriptorN();
				if($suscriptorN->existe($_POST['username'],$_POST['password'])){
					$_SESSION['idSub']=$suscriptorN->obtenerId($_POST['username'],$_POST['password']);
					$_SESSION['user']=$_POST['username'];
					echo"<script type=\"text/javascript\">; window.location='../presentacion/index.php';</script>";  
				}else{
					echo"<script type=\"text/javascript\">alert('usuario o password invalidos'); window.location='../index.php';</script>";  
				}
			}else{
				echo "no creo ni listo";
			}
		}
	}else{
		//echo "no isset";
	}
	
?>