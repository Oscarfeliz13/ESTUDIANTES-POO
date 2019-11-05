<!DOCTYPE html>
<html>
<head>
	<title>Insertar Datos</title>
</head>
<body>
  <h2>Insertar Registro de Estudiantes</h2>
<hr/>
<form action="capturar.php" method="post">
<table width="200" border="1" cellspacing="0" cellpadding="0">
	
	<tr>
		<td>Nombre</td>
		<td><input type="text" name="txtNombre"></td>
	</tr>
	<tr>
		<td>Carrera</td>
		<td><input type="text" name="txtCarrera"></td>
	</tr>
	<tr>
		<td>Mat.Favorita</td>
		<td><input type="text" name="txtMatFavorita"></td>
	</tr>
	<tr>
		<td>Estado</td>
		<td><input type="text" name="txtEstado"></td>
	</tr>
	   <td colspan="2"><input type="submit" value="Insertar"/></td>
		</tr>
	</form>
</table>
</body>
</html>