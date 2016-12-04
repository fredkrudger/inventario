<!-- insertar_envios.php --> 
<div class=" col-sm-12" id="respuesta"></div> 
    <div  class="row-fluid"> 
       <div class="col-md-12" style="margin-top: -6px; margin-bottom: 13px;">
          <div class="input-group"> 
              <input required  id="buscar" type="text" class="form-control" placeholder="Ingresa el Producto que deseas enviar">
              <span class="input-group-addon">Buscar</span>
            </div>
            <div class="col-md-12" style="position:absolute;z-index:2;width: 100%;left: 0;" id="resultado">             
           </div>
       </div>
   </div>
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Nuevo Envio</h3>
  </div>
  <div class="panel-body">
  <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   Recuerde que para Guardar un Envio, debe buscar el Producto y también registrar el Cliente.
</div> 
    <?php
   error_reporting(0);
   $producto = htmlentities(addslashes($_GET["producto"]));
      $prod_sqli  = "SELECT * FROM producto
  WHERE producto.codigo_producto='$producto'";
  $prod_result = $linki->query($prod_sqli);
    if($linki->errno) die ($linki->error); 
          while($prod = $prod_result->fetch_array()){  
 ?>    
<form autocomplete="off" id="envio" method="POST">
 <div class="form-group col-md-6"><br> 
    <label>
             Nombre
    </label>  
    <input  type="hidden" class="form-control" id="codigo_producto" name="codigo_producto" value="<?php echo $prod['codigo_producto']; ?>">     

    <input disabled="disabled" type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="<?php echo $prod['nombre_producto']; ?>" placeholder="Nombre del Producto"> 
</div> 

<div class="form-group col-md-6"> <br>
    <label>
             Presentación
    </label>
     <input type="hidden" value="<?php echo $prod["presentacion"]; ?>" class="form-control" id="presentacion" name="presentacion" placeholder="Presentación del Producto">  
    <input disabled="disabled" type="text" value="<?php echo $prod["presentacion"]; ?>" class="form-control" id="presentacion" name="presentacion" placeholder="Presentación del Producto"> 
</div> 

<br>
  <div class="form-group col-md-6"><br>
    <label>
             Cantidad
    </label>      
      <input type="text" value="<?php echo $prod["cantidad"]; ?>" class="form-control" id="cantidad" name="cantidad" onkeypress="return isNumberKey(event)" maxlength="8" placeholder="Cantidad de Producto">
</div>

  <div class="form-group col-md-6"><br>
    <label>
            Cliente
    </label>
     <select id="cliente" name="cliente" class="form-control">
        <?php 
            $wsqli1 ="select * from cliente";
            $result1=$linki->query($wsqli1);
            while($row1=$result1->fetch_array()){
                $idc=$row1['codigo_cliente'];
                $nc=$row1['nombre_cliente'];
            ?>
                <option  value="<?php echo $idc; ?>">
                     <?php echo $nc; ?>
                </option>
            <?php
            }
            ?>
    </select>  
</div>

  <div class="form-group col-md-6"><br> 
    <label>
             Fecha de Envio
<<<<<<< HEAD
    </label>    

    <div class="input-append date" id="dp3"  data-date="12-02-2012" data-date-format="dd-mm-yyyy"> 
      <input type="text" class="form-control" id="fecha_envio" name="fecha_envio" onkeypress="return isNumberKey(event)" placeholder="DD/MM/AAAA"> 
    </div>

=======
    </label>      
      <input type="text" class="form-control" id="fecha_envio" name="fecha_envio" onkeypress="return isNumberKey(event)" onkeyup="fecha(this,'-',patron,true)" maxlength="10" placeholder="DD-MM-AAAA"> 
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
</div>

<br>
<div class="form-group col-md-12 "><br> 
    <input type="submit" name="insertar" id="insertar" class="btn btn-success" value="Guardar Envio">   
</div>  
</form>
<?php 
  };
?>
</div>
</div>
</div>