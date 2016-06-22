<?php 
	
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	require_once("../conexion/conexion.php");

	class ContenidoD{

		
		var $conexion;

		public function __construct(){
			$this->conexion=conexion::getConexion();
		}

		public function guardar($titulo,$subtitulo,$titulo2,$contenido2,$titulo3,$contenido3,$telefono,$direccion,$twiter,$facebook,$gmail,$imagen){
			$res1 =$this->conexion->consulta('Update contenido set titulo="'.$titulo.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set subtitulo="'.$subtitulo.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set titulo2="'.$titulo2.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set contenido2="'.$contenido2.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set titulo3="'.$titulo3.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set contenido3="'.$contenido3.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set telefono="'.$telefono.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set direccion="'.$direccion.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set twiter="'.$twiter.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set facebook="'.$facebook.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set gmail="'.$gmail.'"where user="'.$_SESSION['user'].'"');
			$res1 =$this->conexion->consulta('Update contenido set imagen="../'.$imagen.'"where user="'.$_SESSION['user'].'"');
		}

		public function guardar1(){
			$query='insert into suscriptor values (null,"'
				.$this->getUsuario().'","'
				.$this->getPass().'","'
				.$this->getNombre().'");';
			$this->conexion->consulta($query);
			$query='insert into style values ("#000000", "20px", "Arial", "imagen/","'.$this->getUsuario().'")';
			$this->conexion->consulta($query);
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

		public function obtenerContenido($user){
			$query='select * from contenido where user="'.$user.'"';
			$resultado=$this->conexion->consulta($query);
			$suscriptors=array();
			if($resultado!=NULL){
				if(mysql_fetch_row($resultado)>0){
					$i=0;
					$resultado=$this->conexion->consulta($query);
					while ($res=mysql_fetch_array($resultado)) {
						$suscriptors[$i]=array('user'=>$res['user'],'titulo'=>$res['titulo'],'subtitulo'=>$res['subtitulo'],'titulo2'=>$res['titulo2']
							,'contenido2'=>$res['contenido2'],'titulo3'=>$res['titulo3'],'contenido3'=>$res['contenido3'],'telefono'=>$res['telefono']
							,'direccion'=>$res['direccion'],'twiter'=>$res['twiter'],'facebook'=>$res['facebook'],'gmail'=>$res['gmail']
							,'imagen'=>$res['imagen']);
						$i=$i+1;
					}
				}
			}
			return $suscriptors[0];
		}

		
		

	};


 ?>