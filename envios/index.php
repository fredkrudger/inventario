<?php //index.php
error_reporting(0);
session_start();
require("../db/config.php");
<<<<<<< HEAD
if (!$_SESSION['nombre_usuario']){
=======
if (!$_SESSION['usuario']){
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
  header('location:../index.php');
}else{}
?>
<!DOCTYPE html>
<html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width; initial-sacale=1.0">	
	<title> Envios | SumiPan Los LLanos </title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/paginacion.css">
<<<<<<< HEAD
	<link rel="stylesheet" href="../bootstrap/css/datepicker.css">
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	<!-- JS -->
	<script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script> 
	<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="../bootstrap/js/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="../bootstrap/js/envio.js"></script>
 </head>
  <body>
 	<?php include("../nav/nav.php");?>
 	<div class="container-fluid">
	<div class="col-md-12">	
	<div class="col-md-12">	
	 <div style="margin-top:-15px;" class="page-header">
	   <h1>Envios</h1>
	    
	   <form method="post" name="agregar" id="agregar">
	<?php 
	  	 if(isset($_GET["ver"]) || isset($_GET["editar"])){
	?>
	<div align="right" style="margin-top: -45px;">
		<button disabled="disabled" name="agregar_envio" id="agregar_envio" type="submit" class="btn btn-default" role="button">
			Nuevo Envio
		</button>
	</div>
	<?php 
	  }else{  
    ?>
    <div align="right" style="margin-top: -45px;">	
	  	<button  name="agregar_envio" id="agregar_envio" type="submit" class="btn btn-default" role="button">
	  		Nuevo Envio
	  	</button>
	</div>
    <?php 
	    }
	?>
	   </form>
	   </div>
	 </div>
	</div>
   <div class="row"> 
 	<?php 
 	 
 	if(isset($_GET["ver"])){    	  
	 		include('ver_envios.php'); 	  
	    }
	    
	elseif(isset($_POST["agregar_envio"]) || ($_GET["producto"])){
	 		 include("insertar_envios.php");  
	    } 
	    else{	   	
	   	echo'
          <div  class="row-fluid"> 
          <div class="col-md-12" style="margin-top: -6px; margin-bottom: 13px;">

                <div class="input-group"> 
			        <input onkeypress="return isNumberKey(event)" required  id="autocomplete" type="text" class="form-control" placeholder="Ingresa el Codigo de Envio que Desea buscar">
			        <span class="input-group-addon">Buscar</span>
			      </div>
                
             	 <div class="col-md-12" style="position:absolute;z-index:2;width: 100%;left: 0;" id="busqueda">             
            	</div>
        	  </div>
          </div>
   		   ';

	   echo'<div align="center" class="loading-div"><img style="height:80px;widht:80px;" src="../img/procesando.gif" ></div>
		<div class="col-md-12" style="z-index:1" id="results"></div>';  
	   } 
 	?>
    </div>
   </div>
  </div>
<<<<<<< HEAD
   </body>
  <script src="../bootstrap/js/bootstrap-datepicker.js"></script>
  <script>
        $(function () {
            $('#fecha_envio').datepicker({
	            format: 'dd/mm/yyyy',
			    language: 'es',
			    minDate: '10/02/2012',
	    		autoclose: true
            });
        });
    </script>

=======
 </body>
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
</html>