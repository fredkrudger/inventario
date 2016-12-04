<?php //eliminar_grupo.php 
     error_reporting(0);
	 session_start();
     include("../db/config.php");
		$id_grup = $_POST["id"]; 
        
		$eliminar_sql  = "DELETE FROM grupo WHERE codigo_grupo='$id_grup'";
 		$eliminar_sql_resultado = $linki->query($eliminar_sql);
 		if($linki->errno) die ($linki->error);	  		
 		
 		$alter_grup = "ALTER TABLE grupo AUTO_INCREMENT = 1";
 		$alter_result_grup = $linki->query($alter_grup);
 		if($linki->errno) die ($linki->error);
?>