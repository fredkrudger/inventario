<<<<<<< HEAD
<!-- insertar_productos.php -->    
 
=======
<!-- insertar_productos.php -->     
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
<div class=" col-sm-12" id="respuesta"></div> 
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Nuevo Producto</h3>
  </div>
  <div class="panel-body">
<<<<<<< HEAD

<!-- Modal -->
<div class="modal fade" id="grupos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form autocomplete="off" id="grupo_nuevo" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Grupo</h4>
      </div>
      <div class="modal-body">
       <div id="resp_grupo"></div> 
        <br>
         <div class="form-group">
          <label for="categoria">Nuevo Grupo</label>
          <input type="text" class="form-control" id="grupo_new" maxlength="100" name="grupo_new" placeholder="Ingresa el Grupo">
        </div>
       
        <a href="index.php?grupos" class="btn btn-primary"> Ver Todos los Grupos</a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="guardar_grupo" id="guardar_grupo" class="btn btn-success">Guardar</button>
      </div>
      </form>
    </div>
   </div>
</div>
 

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
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
<<<<<<< HEAD
          <input type="text" class="form-control" onkeypress="return isNumberKey(event)" id="precio" name="precio" placeholder="Precio">
=======
          <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
      </div>  

</div> 

<br>

<<<<<<< HEAD
  <div class="form-group col-md-4"><br>
=======
  <div class="form-group col-md-6"><br>
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
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
<<<<<<< HEAD
    </select> 
</div> 
<div class="form-group col-md-2"><br>
<label>
       Nuevo Grupo
    </label>
  <button title="Agregar Grupo" type="button" class="btn btn-primary" data-toggle="modal" data-target="#grupos">
    Agregar
  </button> 
=======
    </select>  
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
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
<<<<<<< HEAD
    </label> 
      
    <div class="input-append date" id="dp3"  data-date="12/02/2012" data-date-format="dd/mm/yyyy"> 
      <input type="text" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" onkeypress="return isNumberKey(event)" placeholder="DD/MM/AAAA"> 
    </div>
</div>
<br>
<div class="form-group col-md-6"><br> 
    <label>
             Stock Minimo
    </label>      
      <input type="text" class="form-control" id="cantidad_minima" name="cantidad_minima" onkeypress="return isNumberKey(event)" maxlength="8" placeholder="Cantidad Minima del Producto"> 
</div>
=======
    </label>      
      <input type="text" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento"onkeypress="return isNumberKey(event)" onkeyup="fecha(this,'-',patron,true)" maxlength="10" placeholder="DD-MM-AAAA"> 
</div>

>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
<br>
<div class="form-group col-md-12 "><br> 
    <input type="submit" name="insertar" id="insertar" class="btn btn-success" value="Guardar Producto">   
</div>  
</form>
</div>
</div>
</div>
