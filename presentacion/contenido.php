<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	//$_SESSION['idSub']=1;

	//require_once("../negocio/empleadoN.php");
	//$empleadoN=new EmpleadoN();
	//$empleados=$empleadoN->obtenerEmpleados();
	
    include_once("head.php");
 ?>
<!DOCTYPE html>

				<!-- END PAGE HEADER-->
				<!-- BEGIN DASHBOARD STATS -->
				<form method="post" action="../negocio/contenidoN.php" enctype="multipart/form-data" >
					<table class="table">
					<tr> <td>titulo :</td> <td><input type="text" name="titulo"></td></tr>
					<tr> <td>subtitulo : </td> <td><input type="text" name="subtitulo"></td></tr>
					<tr> <td>titulo2 : </td> <td><input type="text" name="titulo2"></td></tr>
					<tr> <td>contenido2 : </td> <td><textarea name="contenido2"></textarea></td></tr>
					<tr> <td>titulo3 : </td> <td><input type="text" name="titulo3"></td></tr>
					<tr> <td>contenido3 : </td> <td><textarea name="contenido3"></textarea></td></tr>
					<tr> <td>telefono : </td> <td><input type="text" name="telefono"></td></tr>
					<tr> <td>direccion : </td> <td><input type="text" name="direccion"></td></tr>
					<tr> <td>twiter : </td> <td><input type="text" name="twiter"></td></tr>
					<tr> <td>facebook : </td> <td><input type="text" name="facebook"></td></tr>
					<tr> <td>gmail : </td> <td><input type="text" name="gmail"></td></tr>
					<tr> <td>imagen </td> <td><input type="file" name="fondoImagen" id="fondoImagen" /></td></tr>
					</table>
					<input type="hidden" name="pagina" value="registrar">
					<input type="submit" value="guardar" class="btn btn-primary">
				</form>
			

<?php 
	include_once("foot.php");
 ?>