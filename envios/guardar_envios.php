<?php //guardar_envios.php
	error_reporting(0);
    include("../db/config.php");
   
	$codigo_producto   = htmlentities(addslashes($_POST['codigo_producto']));
    $fecha_envio       = htmlentities(addslashes($_POST['fecha_envio']));
    $cantidad 	       = htmlentities(addslashes($_POST['cantidad']));
    $presentacion      = htmlentities(addslashes($_POST['presentacion']));
    $cantidad_enviada  = $cantidad." - ".$presentacion;
	$cliente           = htmlentities(addslashes($_POST['cliente']));

	        $select = "SELECT * FROM producto 
	      	WHERE codigo_producto='$codigo_producto'";    
			 $select_result = $linki->query($select);	          
			  if($linki->errno) die($linki->error);	    
			   if($row=$select_result->fetch_array()){
			   	$cantidad_almacenada=$row["cantidad"];
		         if($cantidad > $cantidad_almacenada){
			     	echo '<script>alert("La Cantidad Ingresada Es Mayor a la Cantidad del Producto Actual.");</script>';	
			     }else{ 
	       if($cantidad>0){ 	      	          
			  $sqli_envio="INSERT INTO envio
			  (fecha_envio,cantidad_enviada,codigo_cliente,codigo_producto) 
			  VALUES 
			  ('$fecha_envio','$cantidad_enviada','$cliente','$codigo_producto')";
				    $envio_result = $linki->query($sqli_envio);
				          
				    if($linki->errno) die($linki->error);	    
				    if($envio_result==true){
                   echo  $cantidad_final = $cantidad_almacenada - $cantidad; 
		  	   $update_cantidad = "UPDATE producto SET cantidad='$cantidad_final'
				    	 WHERE codigo_producto='$codigo_producto'";	   
					  $resultado_cantidad = $linki->query($update_cantidad);     
						    if($link->errno) die($link->error);
						     if($resultado_cantidad==true){	 

				        echo '<script>alert("El Envio ha sido guardado Con Exito.");</script>';		        
				       	echo'<script type="text/javascript">
								window.location="index.php";
						     </script> '; 
						     }        
				        }else{         
				        echo '<script>alert("Error al guardar el Envio.");</script>';  
				         }
				   }else{
				    echo '<script>alert("Debes Ingresar un Numero Diferente de Cero.");</script>'; 
				}
		   }
	  } 
?>