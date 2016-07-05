<?php //ver_productos.php
  include("../db/config.php");
  $ver = htmlentities(addslashes($_GET["ver"]));

	$sqli  = "SELECT * FROM producto
   inner join proveedor on proveedor.codigo_proveedor=producto.codigo_proveedor
   inner join grupo on grupo.codigo_grupo=producto.codigo_grupo
  WHERE producto.codigo_producto='$ver'";
 	$result = $linki->query($sqli);
 		if($linki->errno) die ($linki->error); 
 		      while($producto = $result->fetch_array()){ 					
 ?>
 <div class="col-md-12">
 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Ver Producto</h3>
  </div>
  <div class="panel-body">
 <div class="form-group col-md-6"><br>
    <label>
  			Nombre
    </label>      
  <div class="well well-sm">
	  <?php $ver_producto=$_SESSION["codigo_producto"]=$producto["codigo_producto"]; echo $producto["nombre_producto"];  ?> 
  </div>  
</div> 
  
<div class="form-group col-md-6"  ><br> 
    <label>
       	 Marca del Producto
    </label> 		 
   <div class="well well-sm">	   	
	  <?php echo $producto["marca"]; ?> 
   </div>
</div> 

 <br>  
 
  <div style="margin-bottom: -11px" class="form-group col-md-6"> <br>
    <label>
    		Cantidad
    </label> 	  
  <div class="well well-sm">	   
	  	<?php echo $producto["cantidad"]; ?> 
  </div> 
</div> 
 <br>
  
<div class="form-group col-md-6">  <br>
	<label>
    		Presentación
    </label>
  <div class="well well-sm">
   	 <?php echo $producto["presentacion"]; ?> 
  </div> 
</div> 

 <br> 

   <div style="margin-bottom: -11px" class="form-group col-md-6"> <br>
    <label>
        Precio
    </label>    
  <div class="well well-sm">     
      <?php echo "Bs. ".$producto["precio"]; ?> 
  </div> 
</div> 
 <br>
  
<div class="form-group col-md-6">  <br>
  <label>
        Grupo
    </label>
  <div class="well well-sm">
     <?php echo $producto["nombre_grupo"]; ?> 
  </div> 
</div> 

 <br> 

  <div style="margin-bottom: 10px" class="form-group col-md-12">
    <label>
    		Descripción
    </label>
    <div class="well well-lg-6">	   	
	   	 <?php echo $producto["descripcion"]; ?> 
	</div>  
</div> 
  
<div class="form-group col-md-6">  <br>
  <label>
        Fecha de Ingreso
    </label>
  <div class="well well-sm">
     <?php echo $producto["fecha_ingreso"]; ?> 
  </div> 
</div> 

  <div class="form-group col-md-6"> <br>
    <label>
        Fecha de Vencimiento
    </label>    
  <div class="well well-sm">     
      <?php echo $producto["fecha_vencimiento"]; ?> 
  </div> 
</div> 

  <div  class="form-group col-md-6"><br>
    <label>
        Proveedor
    </label>
  <div class="well well-sm">
     <?php echo $producto["nombre_proveedor"];?> 
  </div> 
  </div> 

  </div>
 </div>
</div>
<?php 
 } 
 	if($ver_producto=$_SESSION["codigo_producto"] !== $ver){ 
 		unset($ver_producto);
 		echo '<meta http-equiv="refresh" content="0;url=../productos">';
 		exit;
 	}
?>
 
 