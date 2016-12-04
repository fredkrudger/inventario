<?php //index.php 
session_start();
include("../db/config.php");
<<<<<<< HEAD
if (!$_SESSION['nombre_usuario']){
=======
if (!$_SESSION['usuario']){
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
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
<<<<<<< HEAD

	<div class="row">
		 <div class="col-sm-12">
	  <div class="panel panel-danger">
	  <div class="panel-heading">
	    <h4 class="panel-title">Productos con Stock Minimo</h4>
	  </div>
	  <div align="center" class="panel-body">
	  	<table class="table table-hover">
	    <thead>
	      <tr>
	        <th></th>
	        <th>Producto</th>
	        <th>Cantidad Disponible</th>
	        <th>Grupo </th> 
	      </tr>
	    </thead>
		<?php 
		 $sqli_pro = "SELECT * FROM producto 
		 inner join grupo on grupo.codigo_grupo=producto.codigo_grupo ";		
		    $res_pro = $linki->query($sqli_pro);         
			 if($linki->errno) die($linki->error);
			  while($row=$res_pro->fetch_array()){ 	    
			  $cantidad=$row["cantidad"];
			  $cantidad_minima=$row["cantidad_minima"];
			  if($cantidad<=$cantidad_minima){ 
		?>
	    <tbody>
	        <td></td>
	    	<td><?php echo $row["nombre_producto"]; ?></td>
	    	<td><?php echo $row["cantidad"].' '.$row["presentacion"] ; ?></td>
	    	<td><?php echo $row["nombre_grupo"]; ?></td>
	    </tbody>
	    <?php }
	       }
	    ?>     
	    </table>
	  </div>
     </div>
    </div>
	</div>


=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
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
<<<<<<< HEAD

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
  </body>
</html>