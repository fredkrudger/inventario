<?php //eliminar_productos.php 
     error_reporting(0);
	 session_start();
     include("../db/config.php");
		$id_prod = $_POST["id"]; 
        
		$eliminar_sql  = "DELETE producto FROM producto
		inner join grupo on grupo.codigo_grupo=producto.codigo_grupo       
 		WHERE producto.codigo_producto='$id_prod'";
 		$eliminar_sql_resultado = $linki->query($eliminar_sql);
 		if($linki->errno) die ($linki->error);	  		
 		
 		$alter_proveedor  = "ALTER TABLE producto AUTO_INCREMENT = 1";
 		$alter_result_proveedor = $linki->query($alter_proveedor);
 		if($linki->errno) die ($linki->error);
 	   
 		$alter_telefono  = "ALTER TABLE telefono AUTO_INCREMENT = 1";
 		$alter_result_telefono = $linki->query($alter_telefono);
 		if($linki->errno) die ($linki->error);
 		
 		$alter_rif_cedula  = "ALTER TABLE rif_cedula AUTO_INCREMENT = 1";
 		$alter_result_rif_cedula = $linki->query($alter_rif_cedula);
 		if($linki->errno) die ($linki->error); 
 	   
 		$alter_envio  = "ALTER TABLE envio AUTO_INCREMENT = 1";
 		$alter_result_envio = $linki->query($alter_envio);
 		if($linki->errno) die ($linki->error);
?>
