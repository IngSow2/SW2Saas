<?php 
	
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	require_once("../conexion/conexion.php");

	class SuscriptorD{

		var $nombre;
		var $pass;
		var $usuario;
		var $conexion;

		public function __construct(){
			$this->nombre="";
			$this->pass="";
			$this->usuario="";
			$this->conexion=conexion::getConexion();
		}

		public function getNombre(){
			return $this->nombre;			
		}

		public function setNombre($nombre){
			$this->nombre=$nombre;
		}

		public function getPass(){
			return $this->pass;
		}

		public function setPass($pass){
			$this->pass=$pass;
		}

		public function getUsuario(){
			return $this->usuario;
		}

		public function setUsuario($usuario){
			$this->usuario=$usuario;
		}

		public function guardar($nombre,$pass,$usuario){
			$this->setNombre($nombre);
			$this->setPass($pass);
			$this->setUsuario($usuario);
			$this->guardar1();
		}

		public function guardar1(){
			$query='insert into suscriptor values (null,"'
				.$this->getUsuario().'","'
				.$this->getPass().'","'
				.$this->getNombre().'");';
			$this->conexion->consulta($query);
			//$query='insert into style values ("#000000", "20px", "Arial", "imagen/","'.$this->getUsuario().'")';
			//$this->conexion->consulta($query);
			$query='insert into contenido values ("'.$this->getUsuario().'","titulo de la pagina","subtitulo","titulo2","contenido2",
				"titulo3","contenido3","telefono","direccion","#","#","#","../configurar/imagen/image.jpg")';
			$this->conexion->consulta($query);
		}

		public function listar(){//devuelve un array con todos los datos
			$query='select * from suscriptor ';
			$resultado=$this->conexion->consulta($query);
			$suscriptors=array();
			if($resultado!=NULL){
				if(mysql_fetch_row($resultado)>0){
					$i=0;
					$resultado=$this->conexion->consulta($query);
					while ($res=mysql_fetch_array($resultado)) {
						$suscriptors[$i]=array('id'=>$res['id'],'nombre'=>$res['nombre'],'pass'=>$res['pass'],'usuario'=>$res['usuario'],'idSub'=>$res['idsub']);
						$i=$i+1;
					}
				}
			}
			return $suscriptors;
		}

		public function existeUser($user){
			$query='select * from suscriptor where usuario="'.$user.'"';
			$resultado=$this->conexion->consulta($query);
			if($resultado!=NULL){
				if(mysql_fetch_row($resultado)>0){
					return true;
				}
			}
			return false;
		}

		public function existe($user,$pass){
			$query='select * from suscriptor where usuario="'.$user.'" and pass="'.$pass.'"';
			$resultado=$this->conexion->consulta($query);
			if($resultado!=NULL){
				if(mysql_fetch_row($resultado)>0){
					return true;
				}
			}
			return false;
		}

		public function obtenerId($user,$pass){
			$query='select * from suscriptor where usuario="'.$user.'" and pass="'.$pass.'"';
			$resultado=$this->conexion->consulta($query);
			$suscriptors=array();
			if($resultado!=NULL){
				if(mysql_fetch_row($resultado)>0){
					$i=0;
					$resultado=$this->conexion->consulta($query);
					while ($res=mysql_fetch_array($resultado)) {
						$suscriptors[$i]=array('id'=>$res['id']);
						$i=$i+1;
					}
				}
			}
			return $suscriptors[0]['id'];
		}

		public function obtenerNombre($user){
			$query='select * from suscriptor where usuario="'.$user.'"';
			$resultado=$this->conexion->consulta($query);
			$suscriptors=array();
			if($resultado!=NULL){
				if(mysql_fetch_row($resultado)>0){
					$i=0;
					$resultado=$this->conexion->consulta($query);
					while ($res=mysql_fetch_array($resultado)) {
						$suscriptors[$i]=array('nombre'=>$res['nombre']);
						$i=$i+1;
					}
				}
			}
			return $suscriptors[0]['nombre'];
		}
		

	};


 ?>