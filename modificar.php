<!DOCTYPE html>
<html>
<head>
	<title>Modificar Datos</title>
</head>
<body>

	<?php 

      $cod=$_GET["parametro"];

      require "estudiantes.php";

      $obj= new estudiantes();
     $data=$obj->consultar("select * from registro where id=$cod");

	 ?>
	<h2>Modificar Datos</h2>
	<hr />

	<form action="capturar.php" method="post">
<table width="200" border="1" cellspacing="0" cellpadding="0">

	<?php foreach ($data as $fila) { ?>
		
	
	<tr>
		<td>Id</td>
		<td><?php echo $cod; ?></td>
	</tr>

	<tr>
		<td>Nombre</td>
		<td><input type="text" name="txtNombre" value="<?php echo $fila["Nombre"]; ?>"/> </td>
	</tr>
	<tr>
		<td>Carrera</td>
		<td><input type="text" name="txtCarrera" value="<?php echo $fila["Carrera"]; ?>"/></td>
	</tr>
	<tr>
		<td>Mat.Favorita</td>
		<td><input type="text" name="txtMatFavorita" value="<?php echo $fila["Mat"]; ?>"/></td>
	</tr>
	<tr>
		<td>Estado</td>
		<td><input type="text" name="txtEstado" value="<?php echo $fila["Estado"]; ?>"/></td>
	</tr>
	   <td colspan="2"><input type="submit" value="Guardar"/></td>
		</tr>

		<?php }  ?>
	
</table>
<input type="hidden" name="funcion" value="modificar" />
<input type="hidden" name="cod" value="<?php echo $cod; ?>" />

</form>
</body>
</html>