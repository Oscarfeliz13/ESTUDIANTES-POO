<html>
<head>
<script>

function modificar(cod){

   window.location="http://127.0.0.1/ESTUDIANTES/modificar.php? parametro="+cod;
}

function eliminar(cod){

	window.location="http://127.0.0.1/ESTUDIANTES/capturar.php? parametro="+cod+ "$funcion=eliminar";


}

</script>

</head>
<body>
		
	<title>Estudiantes(POO)</title>
<style>
	 body{ background-color: blueGreen;
     }

     .Verde{
		  background-color: mediumseagreen;
		  }
     .naranja{
		  background-color: orange;
		  }
	 .blanco{
		  background-color: white;
		  }
        .amarillo{
		  background-color: gold;
</style>



	
<?php 

require"estudiantes.php";

$obj=new estudiantes();

$datos=$obj->consultar("select * from registro");
 ?>
<h1>Registro De Estudiantes</h1>
<hr>
<table border="1">
   <tr>
   	    <td class="Verde">ID</td>
   	    <td class="naranja">Nombre</td>
   	    <td class="Verde">Carrera</td>
   	    <td class="naranja">Mat.Favorita</td>
   	    <td class="blanco">Estado</td>
   	    <td class="amarillo">Editar/Agregar Datos</td>
   	    <td class="amarillo">Agregar Nuevo</td>

   </tr>
       <?php foreach ($datos as $fila){?>
   <tr>
   	   
   	    <td><?php echo $fila["Id"]; ?></td>
   	    <td><?php echo $fila["Nombre"]; ?></td>
   	    <td><?php echo $fila["Carrera"]; ?></td>
   	    <td><?php echo $fila["Mat"]; ?></td>
   	    <td><?php echo $fila["Estado"]; ?></td>
   	    <td><img src="img/Edit-Male-User-icon.png" width="30" onclick="modificar(<?php echo $fila ["Id"]; ?>)"></td>
   	    <td><img src="img/images (1).jpg" width="30" onclick="eliminar(<?php echo $fila ["Id"]; ?>)"></td>
   	        </tr>	
  <?php  }  ?>

</table>



</body>
</html>