<?php //eliminar_clientes.php 
     error_reporting(0);
	 session_start();
     include("../db/config.php");
		$id_c = $_POST["id"]; 
        
		$eliminar_sql  = "DELETE cliente,telefono,rif_cedula FROM cliente    
 		inner join telefono on cliente.id_telefono=telefono.id_telefono
 		inner join rif_cedula on cliente.id_rif_cedula=rif_cedula.id_rif_cedula    
 		WHERE cliente.codigo_cliente='$id_c'";
 		$eliminar_sql_resultado = $linki->query($eliminar_sql);
 		if($linki->errno) die ($linki->error);	  		
 		
 		$alter_cliente  = "ALTER TABLE cliente AUTO_INCREMENT = 1";
 		$alter_result_cliente = $linki->query($alter_cliente);
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
