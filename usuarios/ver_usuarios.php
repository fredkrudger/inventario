<?php //ver_clientes.php
  include("../db/config.php");
  $ver = htmlentities(addslashes($_GET["ver"]));

	$sqli  = "SELECT * FROM usuarios
    inner join telefono on telefono.id_telefono=usuarios.id_telefono
    inner join niveles on niveles.id_nivel=usuarios.id_nivel
    inner join rif_cedula on rif_cedula.id_rif_cedula=usuarios.id_rif_cedula
  WHERE usuarios.id_usuario='$ver'";
 	$result = $linki->query($sqli);
 		if($linki->errno) die ($linki->error); 
 		      while($usuario = $result->fetch_array()){ 					
 ?>
 <br>
 <div class="col-md-12">
 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Ver Usuario</h3>
  </div>
  <div class="panel-body"><br>
 <div  class="form-group col-md-6">
    <label>
  			Nombre
    </label>      
  <div class="well well-sm">
	  <?php $ver_usuario=$_SESSION["id_usuario"]=$usuario["id_usuario"]; echo $usuario["nombre_usuario"];  ?> 
  </div>  
</div> 

<div class="form-group col-md-6"> 
    <label>
       	N° de Cedula
    </label> 		 
   <div class="well well-sm">	   	
	  <?php echo $usuario["tipo_documento"]."-".$usuario["numero_documento"]; ?> 
   </div>
</div> 

 <br>  
 
  <div style="margin-bottom: -11px;" class="form-group col-md-6">
    <label>
    		Correo
    </label> 	  
  <div class="well well-sm">	   
	  	<?php echo $usuario["correo"]; ?> 
  </div> 
</div> 

<div class="form-group col-md-6"> 
	<label>
    		Nivel
    </label>
  <div class="well well-sm">
   	 <?php echo $usuario["nivel"]; ?> 
  </div> 
</div> 

 <br> 
  <div style="margin-top: 10px;" class="form-group col-md-6"> 
    <label>
        Telefono
    </label>
  <div class="well well-sm">
     <?php echo $usuario["codigo_telefono"]."-".$usuario["numero_telefono"];?> 
  </div> 
</div> 

 <br> 
 
  <div style="margin-bottom: 15px;" class="form-group col-md-6">
    <label>
        Dirección
    </label>
    <div class="well well-lg-6">      
       <?php echo $usuario["direccion"]; ?> 
  </div>  
</div> 
</div>
</div>
</div>
 
<?php 
 } 
 	if($ver_usuario=$_SESSION["id_usuario"] !== $ver){ 
 		unset($ver_usuario);
 		echo '<meta http-equiv="refresh" content="0;url=../usuarios">';
 		exit;
 	}
?>
 
 