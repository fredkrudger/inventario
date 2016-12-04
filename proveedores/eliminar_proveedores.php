<?php //eliminar_proveedores.php 
     error_reporting(0);
	 session_start();
     include("../db/config.php");
		$id_p = $_POST["id"]; 

	$eliminar_sql  = "DELETE proveedor,telefono,rif_cedula FROM proveedor    
 		inner join telefono on proveedor.id_telefono=telefono.id_telefono
 		inner join rif_cedula on proveedor.id_rif_cedula=rif_cedula.id_rif_cedula   
 		WHERE proveedor.codigo_proveedor='$id_p'";
 		$eliminar_sql_resultado = $linki->query($eliminar_sql);
 		if($linki->errno) die ($linki->error);	  		

 		$alter_proveedor  = "ALTER TABLE proveedor AUTO_INCREMENT = 1";
 		$alter_result_proveedor = $linki->query($alter_proveedor);
 		if($linki->errno) die ($linki->error);

 		$alter_telefono  = "ALTER TABLE telefono AUTO_INCREMENT = 1";
 		$alter_result_telefono = $linki->query($alter_telefono);
 		if($linki->errno) die ($linki->error);

 		$alter_rif_cedula  = "ALTER TABLE rif_cedula AUTO_INCREMENT = 1";
 		$alter_result_rif_cedula = $linki->query($alter_rif_cedula);
 		if($linki->errno) die ($linki->error);

 		$alter_proveedor  = "ALTER TABLE producto AUTO_INCREMENT = 1";
 		$alter_result_proveedor = $linki->query($alter_proveedor);
 		if($linki->errno) die ($linki->error);

 		$alter_envio  = "ALTER TABLE envio AUTO_INCREMENT = 1";
 		$alter_result_envio = $linki->query($alter_envio);
 		if($linki->errno) die ($linki->error);
?>
