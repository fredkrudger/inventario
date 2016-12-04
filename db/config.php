<?php //config.php
	
<<<<<<< HEAD
	  $linki = new mysqli("mysql.hostinger.es", "u608912532_root", "123456", "u608912532_bd");
=======
	  $linki = new mysqli("localhost", "root", "", "inventario");
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	  $linki->set_charset("utf8");         
	  if ($linki -> connect_errno) {
	     die( "Fallo la conexion a la Base de Datos : (" . $linki -> mysqli_connect_errno() . ") " . $linki -> mysqli_connect_error());
	    }
	
 ?>

