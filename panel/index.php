<?php //index.php 
session_start();
include("../db/config.php");
if (!$_SESSION['usuario']){
  header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width; initial-sacale=1.0">	
	<title> Panel | SumiPan Los LLanos </title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<!-- JS -->
	<script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script> 
	<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="../bootstrap/js/jquery.validate.js" type="text/javascript"></script>
    <?php include("../bootstrap/js/validar.js");?>  
 </head>
  <body>
 	<?php include("../nav/nav.php"); ?>
 	<div class="container-fluid">
	<div class="col-md-12">		 		
 	 <div class="jumbotron"> 	  
 	 <div align="center" class="col-md-4"  >
 	 	<img style="margin-top: -40px" class="img-responsive" src="../img/sumipan.png" width="250px">
 	 </div> 	  
 	  <div align="center">
	  	<h1>SumiPan <small>Los Llanos C.A.</small></h1> 
	  </div>
	</div>
	<div class="row">
	  <div align="center" class="col-md-3">
	    <div class="thumbnail">	      
	      <div class="caption">
	        <h3>Productos</h3>
	        <p>Todos los productos almacenados.</p>
	        <p><a href="../productos" class="btn btn-primary" role="button">Ver Productos</a></p>
	      </div>
	    </div>
	  </div>
	  <div align="center" class="col-md-3">
	    <div class="thumbnail">	      
	      <div class="caption">
	        <h3>Clientes</h3>
	        <p>Clientes Asosiados a la Empresa.</p>
	        <p><a href="../clientes" class="btn btn-primary" role="button">Ver Clientes</a></p>
	      </div>
	    </div>
	  </div>
	  <div align="center" class="col-md-3">
	    <div class="thumbnail">	      
	      <div class="caption">
	        <h3>Proveedores</h3>
	        <p>Proovedores de distribución de productos.</p>
	        <p><a href="../proveedores" class="btn btn-primary" role="button">Ver Proveedores</a></p>
	      </div>
	    </div>
	  </div>
	   <div align="center" class="col-md-3">
	    <div class="thumbnail">	      
	      <div class="caption">
	        <h3>Envios</h3>
	        <p>Envios Realizados a clientes asociados.</p>
	        <p><a href="../envios" class="btn btn-primary" role="button">Ver Envios</a></p>
	      </div>
	    </div>
	  </div>
	</div>
   </div>
   </div>
  </body>
</html>