<?php //config.php
	
	  $linki = new mysqli("localhost", "root", "", "inventario");
	  $linki->set_charset("utf8");         
	  if ($linki -> connect_errno) {
	     die( "Fallo la conexion a la Base de Datos : (" . $linki -> mysqli_connect_errno() . ") " . $linki -> mysqli_connect_error());
	    }
	
 ?>

