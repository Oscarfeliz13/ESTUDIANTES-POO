<?php 

require"estudiantes.php";

$funcion=$_REQUEST["funcion"];
$parametro=$_GET["parametro"];

if($funcion!="eliminar"){

	$cod=$_POST["cod"]; 

$Nombre=$_POST["txtNombre"];
$Carrera=$_POST["txtCarrera"];
$MatFavorita=$_POST["txtMatFavorita"];
$Estado=$_POST["txtEstado"];

}
//instancia de estudiantes
$obj= new estudiantes();


if($funcion=="modificar"){

 $sql="update registro set Nombre='$Nombre', Carrera='$Carrera', Mat='$MatFavorita', Estado='Estado' where Id=$cod";
 $obj->actualizar($sql);

} else if($funcion=="eliminar"){
	$sql="delete from regristro where Id='$parametro'";

} 
else{
$sql="insert into registro(Nombre,Carrera,Mat,Estado) values ('$Nombre','$Carrera','$MatFavorita','$Estado')";

}

$obj->actualizar($sql);
echo $sql;
header("location: registro.php");


 ?>