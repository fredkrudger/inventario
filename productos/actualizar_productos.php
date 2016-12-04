<?php //actualizar_productos.php
	error_reporting(0);
	session_start();

    $codigo_producto   = htmlentities(addslashes($_POST["codigo_producto"]));
	$nombre            = htmlentities(addslashes($_POST['nombre_producto']));
	$marca             = htmlentities(addslashes($_POST['marca']));
    $fecha_vencimiento = htmlentities(addslashes($_POST['fecha_vencimiento']));
<<<<<<< HEAD
	$presentacion	   = htmlentities(addslashes($_POST['presentacion']));
	$cantidad	       = htmlentities(addslashes($_POST['cantidad']));
	$cantidad_minima   = htmlentities(addslashes($_POST['cantidad_minima']));
=======
    $fecha_ingreso     = htmlentities(addslashes($_POST['fecha_ingreso']));
	$presentacion	   = htmlentities(addslashes($_POST['presentacion']));
	$cantidad	       = htmlentities(addslashes($_POST['cantidad']));
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	$precio 	       = htmlentities(addslashes($_POST['precio']));
	$grupo 		       = htmlentities(addslashes($_POST['grupo']));
	$descripcion       = htmlentities(addslashes($_POST['descripcion'])); 
	$proveedor         = htmlentities(addslashes($_POST['proveedor']));
	 
  if(isset($_POST["guardar_cambios_producto"])){

<<<<<<< HEAD
  if($cantidad>0){ 
   if($cantidad_minima>0){ 
	  
	 $update_prod = "UPDATE producto SET 
	 nombre_producto='$nombre',marca='$marca',fecha_vencimiento='$fecha_vencimiento',cantidad='$cantidad',cantidad_minima='$cantidad_minima',presentacion='$presentacion',precio='$precio',codigo_grupo='$grupo',codigo_proveedor='$proveedor',
=======
  if($cantidad>0){  
	  
	 $update_prod = "UPDATE producto SET 
	 nombre_producto='$nombre',marca='$marca',fecha_vencimiento='$fecha_vencimiento',fecha_ingreso='$fecha_ingreso',cantidad='$cantidad',presentacion='$presentacion',precio='$precio',codigo_grupo='$grupo',codigo_proveedor='$proveedor',
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	 descripcion='$descripcion' WHERE codigo_producto='$codigo_producto'";	   
	    $resultado_prod = $linki->query($update_prod);     
	    if($link->errno) die($link->error);
	     if($resultado_prod==true){	       
	     echo '<meta http-equiv="refresh" content="0">';
		 echo'<script>alert("Los cambios fueron realizados correctamente.");</script>';
        }            
<<<<<<< HEAD
       }else{
        echo '<script>alert("La cantidad del Stock debe ser diferente de cero.");</script>';   
       } 
   }else{
   	echo '<script>alert("Debes Ingresar un Numero Diferente de Cero.");</script>';
   }
  }       
=======
         }else{
           echo '<script>alert("Debes Ingresar un Numero Diferente de Cero.");</script>';
       } 
   }       
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
?>

