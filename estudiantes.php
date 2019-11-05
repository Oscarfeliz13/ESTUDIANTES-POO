<?php
  class estudiantes{

function __construct(){

	try{
          $host="localhost";
	      $db_name="estudiantes";
	      $user="root";
	      $pass="";

	$this->con=mysqli_connect($host,$user,$pass) or die ("Error en la conexion a la BD");
    mysqli_select_db($this->con,$db_name) or die ("No se encontro la BD");

  

	} 

	catch(Exception $ex){
		  throw $ex;
	}

	}
     
     function consultar($sql){

     	$res=mysqli_query($this->con,$sql);

     	$data=NULL;
     	while($fila=mysqli_fetch_assoc($res)){

           $data[]=$fila;
     	}
          return $data;
     }

        function actualizar($sql){
          
          mysqli_query($this->con,$sql);

          if(mysqli_affected_rows($this->con)<=0){

          	echo "No se pudo realizar la solicitud";
          } else {

          	  echo "Se ha realizado los cambios";
          }

        }
  }

?>