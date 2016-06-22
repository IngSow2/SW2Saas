<?PHP
include_once("../../conexion/conexion.php");
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class cambiar{
    function cambiartodo(){


$con = new conexion();

$ruta="imagen";
$archivo=$_FILES['fondoImagen']['tmp_name'];
$nombreArchivo=$_FILES['fondoImagen']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
$ruta=$ruta."/".$nombreArchivo;


$color = $_POST['color'];  
$tipo =  $_POST['tipo'];
$tamanio = $_POST['tamanio'];

$res1 =$con->consulta('Update style set colorL="'.$color.'"where user="'.$_SESSION['user'].'"');
$res2 =$con->consulta('Update style set tamanioL="'.$tamanio.'"where user="'.$_SESSION['user'].'"');
$res3 =$con->consulta('Update style set tipoL="'.$tipo.'"where user="'.$_SESSION['user'].'"');	
$res4 =$con->consulta('Update style set fondoImagen="'.$ruta.'"where user="'.$_SESSION['user'].'"');
   

        if ( $res1){  
    
            ?> 
            <script language="javascript"> 
            //alert("Guardado correctamente"); 
            </script> 
            <?php

        }else{
        echo "Error en la Insercion";
        } 
    
   

}
}   
?>