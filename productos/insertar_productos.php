<!-- insertar_productos.php -->     
<div class=" col-sm-12" id="respuesta"></div> 
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Nuevo Producto</h3>
  </div>
  <div class="panel-body">
<form autocomplete="off" id="producto" method="POST">

<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   Recuerde que para ingresar un producto, antes debe registrar el proveedor.
</div>
 
 <div class="form-group col-md-6"><br> 
    <label>
             Nombre
    </label>  
   
    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto"  placeholder="Nombre del Producto"> 
</div> 
 
  <div  class="form-group col-md-6"><br> 
    <label>
             Marca
    </label>      
    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca del Producto">  
</div> 

 <br>
  <div class="form-group col-md-6"><br> 
    <label>
             Cantidad
    </label>      
      <input type="text" class="form-control" id="cantidad" name="cantidad"onkeypress="return isNumberKey(event)" maxlength="8" placeholder="Cantidad de Producto"> 
</div>
  
  <br>

<div class="form-group col-md-6"> <br>
    <label>
             Presentación
    </label>
    <input type="text" class="form-control" id="presentacion" name="presentacion" placeholder="Presentación del Producto">  

</div> 

<div class="form-group col-md-6"> <br>
    <label>
            Precio
    </label>
      <div class="input-group">
       <span class="input-group-addon"> Bs </span>             
          <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
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
                <option  value="<?php echo $idg; ?>">
                     <?php echo $ng; ?>
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
    <textarea style="resize: none;" placeholder="Descripción" name="descripcion" id="descripcion" class="form-control" rows="2"></textarea>
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
                <option  value="<?php echo $idp; ?>">
                     <?php echo $np; ?>
                </option>
            <?php
            }
            ?>
    </select>  
</div>

  <div class="form-group col-md-6"><br> 
    <label>
             Fecha de Vencimiento
    </label>      
      <input type="text" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento"onkeypress="return isNumberKey(event)" onkeyup="fecha(this,'-',patron,true)" maxlength="10" placeholder="DD-MM-AAAA"> 
</div>

<br>
<div class="form-group col-md-12 "><br> 
    <input type="submit" name="insertar" id="insertar" class="btn btn-success" value="Guardar Producto">   
</div>  
</form>
</div>
</div>
</div>
