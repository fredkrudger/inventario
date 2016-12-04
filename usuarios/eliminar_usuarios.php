<?php //eliminar_usuarios.php 
     error_reporting(0);
	 session_start();
     include("../db/config.php");
		$id_c = $_POST["id"]; 
        
		$eliminar_sql  = "DELETE usuarios,telefono,rif_cedula FROM usuarios    
 		inner join telefono on telefono.id_telefono=usuarios.id_telefono
 		inner join rif_cedula on rif_cedula.id_rif_cedula=usuarios.id_rif_cedula    
 		WHERE usuarios.id_usuario='$id_c'";
 		$eliminar_sql_resultado = $linki->query($eliminar_sql);
 		if($linki->errno) die ($linki->error);	  		
 		
 		$alter_usuario  = "ALTER TABLE usuarios AUTO_INCREMENT = 1";
 		$alter_result_usuario = $linki->query($alter_usuario);
 		if($linki->errno) die ($linki->error);
 	    
 		$alter_telefono  = "ALTER TABLE telefono AUTO_INCREMENT = 1";
 		$alter_result_telefono = $linki->query($alter_telefono);
 		if($linki->errno) die ($linki->error);
 		
 		$alter_rif_cedula  = "ALTER TABLE rif_cedula AUTO_INCREMENT = 1";
 		$alter_result_rif_cedula = $linki->query($alter_rif_cedula);
 		if($linki->errno) die ($linki->error); 
?>
