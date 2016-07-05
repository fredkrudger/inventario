<?php //actualizar_productos.php
	error_reporting(0);
	session_start();

    $codigo_producto   = htmlentities(addslashes($_POST["codigo_producto"]));
	$nombre            = htmlentities(addslashes($_POST['nombre_producto']));
	$marca             = htmlentities(addslashes($_POST['marca']));
    $fecha_vencimiento = htmlentities(addslashes($_POST['fecha_vencimiento']));
    $fecha_ingreso     = htmlentities(addslashes($_POST['fecha_ingreso']));
	$presentacion	   = htmlentities(addslashes($_POST['presentacion']));
	$cantidad	       = htmlentities(addslashes($_POST['cantidad']));
	$precio 	       = htmlentities(addslashes($_POST['precio']));
	$grupo 		       = htmlentities(addslashes($_POST['grupo']));
	$descripcion       = htmlentities(addslashes($_POST['descripcion'])); 
	$proveedor         = htmlentities(addslashes($_POST['proveedor']));
	 
  if(isset($_POST["guardar_cambios_producto"])){

  if($cantidad>0){  
	  
	 $update_prod = "UPDATE producto SET 
	 nombre_producto='$nombre',marca='$marca',fecha_vencimiento='$fecha_vencimiento',fecha_ingreso='$fecha_ingreso',cantidad='$cantidad',presentacion='$presentacion',precio='$precio',codigo_grupo='$grupo',codigo_proveedor='$proveedor',
	 descripcion='$descripcion' WHERE codigo_producto='$codigo_producto'";	   
	    $resultado_prod = $linki->query($update_prod);     
	    if($link->errno) die($link->error);
	     if($resultado_prod==true){	       
	     echo '<meta http-equiv="refresh" content="0">';
		 echo'<script>alert("Los cambios fueron realizados correctamente.");</script>';
        }            
         }else{
           echo '<script>alert("Debes Ingresar un Numero Diferente de Cero.");</script>';
       } 
   }       
?>

