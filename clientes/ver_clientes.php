<?php //ver_clientes.php
  include("../db/config.php");
  $ver = htmlentities(addslashes($_GET["ver"]));

	$sqli  = "SELECT * FROM cliente
    inner join cliente AS cli ON cli.codigo_cliente=cliente.codigo_cliente 
    inner join telefono on telefono.id_telefono=cliente.id_telefono
    inner join ubicacion on ubicacion.id_ubicacion=cliente.id_ubicacion
    inner join rif_cedula on rif_cedula.id_rif_cedula=cliente.id_rif_cedula
  WHERE cliente.codigo_cliente='$ver'";
 	$result = $linki->query($sqli);
 		if($linki->errno) die ($linki->error); 
 		      while($cliente = $result->fetch_array()){ 					
 ?>
 <br>
 <div class="col-md-12">
 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Ver Cliente</h3>
  </div>
  <div class="panel-body"><br>
 <div  class="form-group col-md-6">
    <label>
  			Nombre
    </label>      
  <div class="well well-sm">
	  <?php $ver_cliente=$_SESSION["codigo_cliente"]=$cliente["codigo_cliente"]; echo $cliente["nombre_cliente"];  ?> 
  </div>  
</div> 

<div class="form-group col-md-6"> 
    <label>
       	 RIF
    </label> 		 
   <div class="well well-sm">	   	
	  <?php echo $cliente["tipo_documento"]."-".$cliente["numero_documento"]; ?> 
   </div>
</div> 

 <br>  
 
  <div style="margin-bottom: -11px;" class="form-group col-md-6">
    <label>
    		Estado
    </label> 	  
  <div class="well well-sm">	   
	  	<?php echo $cliente["estado"]; ?> 
  </div> 
</div> 

<div class="form-group col-md-6"> 
	<label>
    		Ciudad
    </label>
  <div class="well well-sm">
   	 <?php echo $cliente["ciudad"]; ?> 
  </div> 
</div> 

 <br> 

  <div style="margin-bottom: 15px;" class="form-group col-md-6">
    <label>
    		Dirección
    </label>
    <div class="well well-lg-6">	   	
	   	 <?php echo $cliente["direccion"]; ?> 
	</div>  
</div> 
  
<div class="form-group col-md-6"> 
    <label>
    		Dirección de Entrega
    </label>
    <div class="well well-lg-6">	   	
	 	 <?php echo $cliente["direccion_entrega"]; ?> 
	</div>
</div> 

 <br> 

  <div style="margin-top: 10px;" class="form-group col-md-6"> 
    <label>
    		Telefono
    </label>
  <div class="well well-sm">
   	 <?php echo $cliente["codigo_telefono"]."-".$cliente["numero_telefono"];?> 
  </div> 
</div> 
</div>
</div>
</div>
 
<?php 
 } 
 	if($ver_cliente=$_SESSION["codigo_cliente"] !== $ver){ 
 		unset($ver_cliente);
 		echo '<meta http-equiv="refresh" content="0;url=../clientes">';
 		exit;
 	}
?>
 
 