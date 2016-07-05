<?php //ver_envios.php
  include("../db/config.php");
  $ver = htmlentities(addslashes($_GET["ver"]));

	$sqli  = "SELECT * FROM envio
   inner join cliente on cliente.codigo_cliente=envio.codigo_cliente
   inner join telefono on telefono.id_telefono=cliente.id_telefono
   inner join producto on producto.codigo_producto=envio.codigo_producto
   inner join rif_cedula on rif_cedula.id_rif_cedula=cliente.id_rif_cedula
  WHERE envio.id_envio='$ver'";
 	$result = $linki->query($sqli);
 		if($linki->errno) die ($linki->error); 
 		      while($envio = $result->fetch_array()){ 					
 ?>
 <div class="col-md-12">
 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Ver Detalles de Envio</h3>
  </div>
  <div class="panel-body">
 <?php $ver_envio=$_SESSION["id_envio"]=$envio["id_envio"]; ?>
<div class="table-responsive">
  <table class="table table-striped">
     <tbody>
        <tr>
            <th>Producto:</th>
            <td><?php echo $envio["nombre_producto"]; ?></td>
        </tr>
        <tr>
            <th scope="row">Fecha de Vencimiento:</th>
            <td><?php echo $envio["fecha_vencimiento"]; ?></td>
        </tr>
        <tr>
            <th scope="row">Cantidad Enviada:</th>
            <td><?php echo $envio["cantidad_enviada"]; ?></td>
        </tr>
        <tr>
            <th scope="row">Fecha de Envio:</th>
            <td><?php echo $envio["fecha_envio"]; ?></td>
        </tr>
        <tr>
            <th scope="row">Cliente:</th>
            <td><?php echo $envio["nombre_cliente"]; ?></td>
        </tr>
        <tr>
            <th scope="row">Rif/Cedula del Cliente:</th>
            <td><?php echo $envio["tipo_documento"]. "." .$envio["numero_documento"] ; ?></td>
        </tr>
         <tr>
            <th scope="row">Telefono del Cliente:</th>
            <td><?php echo $envio["codigo_telefono"]. "-" .$envio["numero_telefono"] ; ?></td>
        </tr>
       <tr>
            <th scope="row">Dirección de Envio:</th>
            <td><?php echo $envio["direccion_entrega"]; ?></td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
 </div>
</div>
<?php 
 } 
 	if($ver_envio=$_SESSION["id_envio"] !== $ver){ 
 		unset($ver_envio);
 		echo '<meta http-equiv="refresh" content="0;url=../envios">';
 		exit;
 	}
?>