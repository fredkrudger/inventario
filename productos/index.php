<?php //index.php
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
	<title> Productos | SumiPan Los LLanos </title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/paginacion.css">
	<!-- JS -->
<<<<<<< HEAD
	 
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	<script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script> 
	<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="../bootstrap/js/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="../bootstrap/js/producto.js"></script>
<<<<<<< HEAD

    <link rel="stylesheet" href="../bootstrap/css/datepicker.css">
 
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
 </head>
  <body>
 	<?php include("../nav/nav.php");?>
 	<div class="container-fluid">
	<div class="col-md-12">	
	<div class="col-md-12">	
	 <div style="margin-top:-15px;" class="page-header">
<<<<<<< HEAD
	 <?php 
	 	if(isset($_GET["grupos"])){
	  ?>
	   <h1>Listado de Grupos</h1>
	  <?php } 
	  elseif(isset($_GET["editar_grupo"])){ 
	  ?>
		<h1>Editar Grupo</h1>
	  <?}else{ ?>
	   <h1>Productos</h1>
	  <?php } ?>
	   <form method="post" name="agregar" id="agregar">
	<?php 
if(isset($_GET["ver"]) || isset($_GET["editar"]) || isset($_GET["grupos"]) || isset($_GET["editar_grupo"])){
=======
	   <h1>Productos</h1>
	    
	   <form method="post" name="agregar" id="agregar">
	<?php 
	  	 if(isset($_GET["ver"]) || isset($_GET["editar"])){
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	?>
	<div align="right" style="margin-top: -45px;">
		<button disabled="disabled" name="agregar_producto" id="agregar_producto" type="submit" class="btn btn-default" role="button">
			Nuevo Producto
		</button>
	</div>
<<<<<<< HEAD
	<?php
=======
	<?php 
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	  }else{  
    ?>
    <div align="right" style="margin-top: -45px;">	
	  	<button  name="agregar_producto" id="agregar_producto" type="submit" class="btn btn-default" role="button">
	  		Nuevo Producto
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
	 		include('ver_productos.php'); 	  
	    }
	    
	 	elseif(isset($_POST["agregar_producto"])){
	 		 include("insertar_productos.php");  
<<<<<<< HEAD
	    }
	    elseif(isset($_GET["editar_grupo"])){
	    	include("editar_grupo.php");
	    }
	    elseif(isset($_GET["grupos"])){
 
	     echo'		
	          <div align="center" class="listado-div"></div>
		      <div class="col-md-12" style="z-index:1" id="results-div"></div>';
			}
=======
	    } 
	    
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	    elseif(isset($_GET["editar"])){	    	 
	 	include('editar_productos.php');	
	 	  if (isset($_POST["guardar_cambios_producto"])!=""){
	 	    include("actualizar_productos.php");  
	      }
	    }
	    else{	   	
	   	echo'
          <div  class="row-fluid"> 
          <div class="col-md-12" style="margin-top: -6px; margin-bottom: 13px;">

                <div class="input-group"> 
			        <input required  id="autocomplete" type="text" class="form-control" placeholder="Ingresa el nombre del producto a buscar">
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
  <script src="../bootstrap/js/bootstrap-datepicker.js"></script>
  <script src="../bootstrap/js/bootstrap-datepicker.es.js"></script>
 </body>
   <script>

        $(function () {
           $('#fecha_vencimiento').datepicker({
		    format: 'dd/mm/yyyy',
		    language: 'es',
		    minDate: '10/02/2012',
    		autoclose: true
		 });
        });
    </script>
</html>

=======
 </body>
</html>
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
