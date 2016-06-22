<?PHP

include_once("../../conexion/conexion.php");
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$con = new conexion();

$color1='select colorL from style where user="'.$_SESSION['user'].'"';
$color11 =$con->consulta($color1);
$colorL =mysql_fetch_array($color11);


$tamanio1='select tamanioL from style where user="'.$_SESSION['user'].'"';
$tamanio11 =$con->consulta($tamanio1);
$tamanioL =mysql_fetch_array($tamanio11);

$tipo1='select tipoL from style where user="'.$_SESSION['user'].'"';
$tipo11 =$con->consulta($tipo1);
$tipoL =mysql_fetch_array($tipo11);


$fondoImagen1='select fondoImagen from style where user="'.$_SESSION['user'].'"';
$fondoImagen11 =$con->consulta($fondoImagen1);
$fondoImagen =mysql_fetch_array($fondoImagen11);

header('Content-Type: text/css; charset: UTF-8'); //el archivo será text/css
echo ' 
body{
   color: '.$colorL[0].';
   font-size: '.$tamanioL[0].';
   font-family: '.$tipoL[0].';
   background: url('.$fondoImagen[0].') no-repeat fixed center;
   background-size: cover;
}'

;
echo $tipoL[0];
echo "asd";

?>