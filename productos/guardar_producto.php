<?php //guardar_producto.php
	error_reporting(0);
    include("../db/config.php");
   
	$nombre            = htmlentities(addslashes($_POST['nombre_producto']));
	$marca             = htmlentities(addslashes($_POST['marca']));
    $fecha_vencimiento = htmlentities(addslashes($_POST['fecha_vencimiento']));
    $cantidad 	       = htmlentities(addslashes($_POST['cantidad']));
	$presentacion	   = htmlentities(addslashes($_POST['presentacion']));
	$precio 	       = htmlentities(addslashes($_POST['precio']));
	$grupo 		       = htmlentities(addslashes($_POST['grupo']));
	$descripcion       = htmlentities(addslashes($_POST['descripcion'])); 
	$proveedor         = htmlentities(addslashes($_POST['proveedor']));

		if($cantidad>0){ 
		      $fecha_ingreso = DATE('d-m-Y');
			  $sqli_producto="INSERT INTO producto
			  (nombre_producto,marca,fecha_ingreso,fecha_vencimiento,cantidad,presentacion,precio,descripcion,codigo_grupo,codigo_proveedor) VALUES 
			  ('$nombre','$marca','$fecha_ingreso','$fecha_vencimiento','$cantidad','$presentacion','$precio','$descripcion','$grupo','$proveedor')";
				    $re = $linki->query($sqli_producto);
				          
				    if($linki->errno) die($linki->error);	    
				    if($re==true){      
				        echo '<script>alert("El Producto ha sido guardado Con Exito.");</script>';		       
				       	echo'<script type="text/javascript">
							window.location="index.php";
						 </script> ';         
				        }else{         
				        echo '<script>alert("Error al guardar el Producto.");</script>';  
				     }
				 }else{
			echo '<script>alert("Debes Ingresar un Numero Diferente de Cero.");</script>'; 
		} 
?>