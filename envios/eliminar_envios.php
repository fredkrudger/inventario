<?php //eliminar_envios.php 
     error_reporting(0);
	 session_start();
     include("../db/config.php");
		$id_envio = $_POST["id"]; 
      
		$eliminar_sql  = "DELETE envio FROM envio
		inner join cliente on cliente.codigo_cliente=envio.codigo_cliente       
 		WHERE envio.id_envio='$id_envio'";
 		$eliminar_sql_resultado = $linki->query($eliminar_sql);
 		if($linki->errno) die ($linki->error);	  		
 		
 		$alter_envio  = "ALTER TABLE envio AUTO_INCREMENT = 1";
 		$alter_result_envio = $linki->query($alter_envio);
 		if($linki->errno) die ($linki->error);
?>