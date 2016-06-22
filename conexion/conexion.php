<?php 
	
	class conexion{

		var $con=NULL;
		private static $conexion;
	var $animal;

		public function __construct(){
			$this->con=mysql_connect("localhost","root");
			mysql_select_db("constructorasaas",$this->con);
		}

		public static function getConexion(){
			if (  !self::$conexion instanceof self){
		        self::$conexion = new self;
		    }
		    return self::$conexion;
		    
		}

		public function consulta($query){
			return $q = mysql_query($query,$this->con);
		}

		public function cerrar(){
			$this->con->mysql_close();
		}




	

	
		
	}	
	/*$link = mysql_connect("127.0.0.1","root");
	if ($link) {
		mysql_select_db("constructora", $link);
		//echo "conectado";
	}else{
			echo 'no se conecto';
	}*/
?>