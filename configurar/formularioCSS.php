<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="gencyolcu" />

	<title>configuracion</title>
    
    <link href="style.php" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<h1 style="position: absolute; left: 40%; top: 0%; font-family:Kunstler Script; font-size: 100px;">Estilos</h1>
<form action="" method="post" enctype="multipart/form-data" >

<table class="table" border='0' cellpadding='0' cellspacing='3' align='center' style='Position: Absolute; left: 20%; top: 20%; width: 640px; height: 46px;'>
<tr>
<td width="250" style="font-size:30px">Color</td>
<td width="10" style="font-size:30px">:</td>
<td><input type="color" name="color"/></td>
</tr>

<tr>
<td style="font-size:30px">Tipo de Letra</td>
<td style="font-size:30px">:</td>
    <td><select name="tipo" style="width:150px;" class="select">
    <option value="Arial" style="font-family:">Arial</option>
    <option value="Wide Latin" style="font-family:">Wide Latin</option>
    <option value="AR DELANEY" style="font-family:">AR DELANEY</option>
    <option value="AR JULIAN" style="font-family:">AR JULIAN</option>
    <option value="Arial Unicode MS" style="font-family:">Arial Unicode MS</option>
    <option value="Arial Narrow" style="font-family:">Arial Narrow</option>
    <option value="Algerian" style="font-family:">Algerian</option>
    <option value="AR DARLING">AR DARLING</option>
    <option value="Harlow Solid Italic">Harlow Solid Italic</option>
    <option value="Snap ITC">Snap ITC</option>
    <option value="Old English Text MT">Old English Text MT</option>
    </select></td>
  
</tr>

<tr>
<td style="font-size:30px">Tamanio de Letra</td>
<td style="font-size:30px">:</td>
    <td><select name="tamanio">
    <option value="5px">5px</option>
    <option value="10px">10px</option>
    <option value="12px">12px</option>
    <option value="14px">14px</option>
    <option value="16px">16px</option>
    <option value="18px">18px</option>
    <option value="20px" selected="true">20px</option>
    <option value="22px">22px</option>
    <option value="24px">24px</option>
    <option value="26px">26px</option>
    <option value="28px">28px</option>
    <option value="30px">30px</option>
    <option value="32px">32px</option>
    <option value="34px">34px</option>
    <option value="36px">36px</option>
    <option value="38px">38px</option>
    <option value="40px">40px</option>
    </select></td>
</tr>

<tr>
<td width="250" style="font-size:30px">Imagen de fondo</td>
<td width="11" style="font-size:30px">:</td>
<td width="337"><input type="file" name="fondoImagen"/></td>
</tr>

</table>

<input  class="btn btn-primary" type="submit" value="Guardar" name="Guardar" style="position:absolute; top:50%; left:35%"/>

</form>

<tr>
<td><a href="../presentacion/principal.php" class="btn btn-primary" role="button" style="position:absolute; top:50%; left:50%">volver</a></td>
</tr>

<?php
include('cambiarFondo.php');
$tra=new cambiar;
if(isset($_POST["Guardar"])){
    $tra->cambiartodo();

}

?>

</body>
</html>