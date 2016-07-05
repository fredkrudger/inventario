<?php //editar_productos.php
	$editar = htmlentities(addslashes($_GET["editar"]));

  $sqli  = "SELECT * FROM producto
   inner join proveedor on proveedor.codigo_proveedor=producto.codigo_proveedor
   inner join grupo on grupo.codigo_grupo=producto.codigo_grupo
  WHERE producto.codigo_producto='$editar'";
 	$result1 = $linki->query($sqli);
 		if($linki->errno) die ($linki->error); 
   while($producto = $result1->fetch_array()){  
?>
<br>
<div class="col-md-12">
 <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"> Editar Producto</h3>
  </div>
  <div class="panel-body">
<form autocomplete="off" name="editar_producto" id="editar_producto"  method="POST">
 <div class="form-group col-md-6"><br> 
    <label>
             Nombre
    </label>  
   
    <input  type="hidden" class="form-control" id="codigo_producto" name="codigo_producto" value="<?php echo $editar_producto=$_SESSION["codigo_producto"]=$producto['codigo_producto']; ?>">     

    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="<?php echo $producto['nombre_producto']; ?>" placeholder="Nombre del Producto"> 

</div> 
 
  <div  class="form-group col-md-6"><br> 
    <label>
             Marca
    </label>      
      <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $producto['marca']; ?>" placeholder="Marca del Producto"> 
</div> 

 <br>
  <div class="form-group col-md-6"><br> 
    <label>
             Cantidad
    </label>  
      <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $producto['cantidad']; ?>" onkeypress="return isNumberKey(event)" maxlength="8" placeholder="Cantidad de Producto"> 
</div>
  
  <br>

<div class="form-group col-md-6"> <br>
    <label>
             Presentación
    </label>
          <input type="text" class="form-control" id="presentacion" name="presentacion" value="<?php echo $producto['presentacion']; ?>" placeholder="Presentación del Producto">  

</div> 
<br>
<div class="form-group col-md-6"> <br>
    <label>
            Precio
    </label>
      <div class="input-group">
       <span class="input-group-addon"> Bs </span>             
              <input type="text" class="form-control" value="<?php echo $producto['precio']; ?>"  id="precio" name="precio" placeholder="Precio">
      </div>  
</div> 

<br>

  <div class="form-group col-md-6"><br>
    <label>
            Grupo
    </label>
    <select id="grupo" name="grupo" class="form-control">
        <?php 
            $grupo_sqli ="select * from grupo";
            $grupo_result=$linki->query($grupo_sqli);
            while($row=$grupo_result->fetch_array()){
                $idg=$row['codigo_grupo'];
                $ng=$row['nombre_grupo'];
            ?>
                <option  value="<?php echo $idg; ?>" 
            <?php 
            if($row['codigo_grupo']==$producto["codigo_grupo"]){
                    ?>
                    selected
                    <?php
                     }
                     ?>>
                     <?php echo $ng ?>      
                </option>
            <?php
            }
            ?>
    </select> 
</div>

<br>
 
  <div  class="form-group col-md-12"><br>
    <label>
            Descripción
    </label>

      <textarea style="resize: none;" placeholder="Descripción" name="descripcion" id="descripcion" class="form-control" rows="2"><?php echo  $producto["descripcion"]; ?></textarea>
</div>
 
<br>
  <div class="form-group col-md-6"><br> 
    <label>
             Fecha de Ingreso
    </label>  
      <input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $producto['fecha_ingreso']; ?>" onkeypress="return isNumberKey(event)" onkeyup="fecha(this,'-',patron,true)" maxlength="10" placeholder="DD-MM-AAAA"> 
</div>
<br>
  <div class="form-group col-md-6"><br> 
    <label>
             Fecha de Vencimiento
    </label>  
      <input type="text" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" value="<?php echo $producto['fecha_vencimiento']; ?>"onkeypress="return isNumberKey(event)" onkeyup="fecha(this,'-',patron,true)" maxlength="10" placeholder="DD-MM-AAAA"> 
</div>
<br>

  <div class="form-group col-md-6"><br>
    <label>
            Proveedor
    </label>
     <select id="proveedor" name="proveedor" class="form-control">
        <?php 
            $wsqli1 ="select * from proveedor";
            $result1=$linki->query($wsqli1);
            while($row1=$result1->fetch_array()){
                $idp=$row1['codigo_proveedor'];
                $np=$row1['nombre_proveedor'];
            ?>
                <option  value="<?php echo $idp; ?>"
                        <?php 
            if($row1['codigo_proveedor']==$producto["codigo_proveedor"]){
                    ?>
                    selected
                    <?php
                     }
                     ?>>
                     <?php echo $np ?>
                </option>
            <?php
            }
            ?>
    </select>  
</div>
<br>

<div class="form-group col-md-12"> <br>
  <button  type="submit" name="guardar_cambios_producto" id="guardar_cambios_producto" class="btn btn-success">Guardar Cambios</button> 
</div> 
</form>
<?php 
  } 
  
  if($editar_producto=$_SESSION["codigo_producto"] !== $editar){ 
      unset($_SESSION["codigo_producto"]);
    echo '<meta http-equiv="refresh" content="0;url=../productos">';
    exit;
  } 
?>
</div>
</div>
</div>