<?php //ver_proveedores.php
  include("../db/config.php");
  $ver = htmlentities(addslashes($_GET["ver"]));

	$sqli  = "SELECT * FROM proveedor
    inner join proveedor AS pro ON pro.codigo_proveedor=proveedor.codigo_proveedor 
    inner join telefono on telefono.id_telefono=proveedor.id_telefono
    inner join ubicacion on ubicacion.id_ubicacion=proveedor.id_ubicacion
    inner join rif_cedula on rif_cedula.id_rif_cedula=proveedor.id_rif_cedula
  WHERE proveedor.codigo_proveedor='$ver'";
 	$result = $linki->query($sqli);
 		if($linki->errno) die ($linki->error); 
 		      while($proveedor = $result->fetch_array()){ 					
 ?>
 <div class="col-md-12">
 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Ver Proveedor</h3>
  </div>
  <div class="panel-body">
 <div class="form-group col-md-6"><br>
    <label>
  			Nombre
    </label>      
  <div class="well well-sm">
	  <?php $ver_proveedor=$_SESSION["codigo_proveedor"]=$proveedor["codigo_proveedor"]; echo $proveedor["nombre_proveedor"];  ?> 
  </div>  
</div> 

<div class="form-group col-md-6"><br> 
    <label>
       	 RIF
    </label> 		 
   <div class="well well-sm">	   	
	  <?php echo $proveedor["tipo_documento"]."-".$proveedor["numero_documento"]; ?> 
   </div>
</div> 

 <br>  
 
  <div style="margin-bottom: -11px" class="form-group col-md-6"> <br>
    <label>
    		Estado
    </label> 	  
  <div class="well well-sm">	   
	  	<?php echo $proveedor["estado"]; ?> 
  </div> 
</div> 
 <br>
  
<div class="form-group col-md-6">  <br>
	<label>
    		Ciudad
    </label>
  <div class="well well-sm">
   	 <?php echo $proveedor["ciudad"]; ?> 
  </div> 
</div> 

 <br> 

  <div style="margin-bottom: 10px" class="form-group col-md-12">
    <label>
    		Dirección
    </label>
    <div class="well well-lg-6">	   	
	   	 <?php echo $proveedor["direccion"]; ?> 
	</div>  
</div> 

  <div style="margin-bottom: 10px" class="form-group col-md-6"><br>
    <label>
    		Telefono
    </label>
  <div class="well well-sm">
   	 <?php echo $proveedor["codigo_telefono"]."-".$proveedor["numero_telefono"];?> 
  </div> 
</div> 

<div class="form-group col-md-6"> <br>
    <label>
        Contacto
    </label>     
   <div class="well well-sm">     
    <?php echo $proveedor["nombre_contacto"];?> 
   </div>
</div> 
</div>
</div>
</div> 
<?php 
 } 
 	if($ver_proveedor=$_SESSION["codigo_proveedor"] !== $ver){ 
 		unset($ver_proveedor);
 		echo '<meta http-equiv="refresh" content="0;url=../clientes">';
 		exit;
 	}
?>
 
 