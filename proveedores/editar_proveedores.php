<?php //editar_proveedores.php
	$editar = htmlentities(addslashes($_GET["editar"]));

	$sqli  = "SELECT * FROM proveedor 
        inner join proveedor AS pro ON pro.codigo_proveedor=proveedor.codigo_proveedor 
        inner join telefono on telefono.id_telefono=proveedor.id_telefono
        inner join ubicacion on ubicacion.id_ubicacion=proveedor.id_ubicacion
        inner join rif_cedula on rif_cedula.id_rif_cedula=proveedor.id_rif_cedula
    WHERE proveedor.codigo_proveedor='$editar'";
 	$result1 = $linki->query($sqli);
 		if($linki->errno) die ($linki->error); 
   while($proveedor = $result1->fetch_array()){  
?>
<br>
<div class="col-md-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"> Editar Proveedor</h3>
  </div>
  <div class="panel-body">
<form autocomplete="off" name="editar_proveedor" id="editar_proveedor"  method="POST">
 
 <div class="form-group col-md-6"><br> 
    <label>
            Nombre
    </label> 

    <input  type="hidden" class="form-control" id="codigo_proveedor" name="codigo_proveedor" value="<?php echo $editar_proveedor=$_SESSION["codigo_proveedor"]=$proveedor['codigo_proveedor']; ?>">     
  <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" value="<?php echo $proveedor['nombre_proveedor']; ?>" placeholder="Nombre del Cliente"> 

</div> 

<div class="form-group col-md-2" style="margin-bottom: 10px"> <br> 
    <label>
         Tipo
    </label>        
 <select title="Tipo de Documento" name="tipo_documento" class="form-control">
       <?php 
            $wsqli ="select * from rif_cedula ";
            $result=$linki->query($wsqli);
            while($row=$result->fetch_array()){        
                $idrc=$row['id_rif_cedula'];
                $nrc=$row['tipo_documento'];
         if($row['id_rif_cedula']==$proveedor["id_rif_cedula"]){
                $_SESSION['id_rc']=$idrc;     
       ?>
                    <option></option>              
                    <option  value="<?php echo 'V';?>">
                    <?php
                     
                     echo 'V'; 
                    
                     ?> 
                    </option>
                    <option value="<?php echo 'J';?>">
                    <?php
                    
                     echo 'J';
                      ?>                  
                    </option>
                    <option value="<?php echo 'G';?>">
                        <?php
                  
                     echo  'G';
                  
                     ?>                           
                     </option>

        <?php  } 
           }
        ?>
    </select>   
</div>   

<div class="form-group col-md-4">  <br> 
    <label>
         N° de Rif / Cedula
    </label>        
     
  <input type="text" class="form-control" onkeypress="return isNumberKey(event)" onkeyup="rif_cedula(this,'-',patron,true)" maxlength="10" id="numero_documento" name="numero_documento" value="<?php echo $proveedor['numero_documento']; ?>" placeholder="Numero de RIF"> 

</div> 

 <br>
 
  <div style="margin-bottom: -11px;" class="form-group col-md-6"><br> 
    <label>
            Estado
    </label>      
    <select name="estado" id="estado" class="form-control">
        <?php 
            $wsqli ="select * from ubicacion";
            $result=$linki->query($wsqli);
            while($row=$result->fetch_array()){
                $ide=$row['id_ubicacion'];
                $ne=$row['estado'];
            ?>
                <option  value="<?php echo $ide;?>" 
            <?php 
                if($row['id_ubicacion']==$proveedor["id_ubicacion"]){
                    ?>
                    selected
                    <?php
                     }
                     ?>>
                     <?php echo $ne ?>
                </option>
            <?php
            }
            ?>
    </select>   
</div>
  
  <br>

<div class="form-group col-md-6"> <br>
    <label>
            Ciudad
    </label>
 <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $proveedor['ciudad']; ?>" placeholder="ciudad"> 

</div> 
<br>
 
  <div style="margin-bottom: -11px;" class="form-group col-md-12"><br>
    <label>
            Dirección
    </label>
  <textarea style="resize: none;" name="direccion" id="direccion" class="form-control" rows="2"><?php echo $proveedor["direccion"]; ?></textarea>
</div>
 
<br>

  <div style="margin-top: 10px;" class="form-group col-md-3"><br>
    <label>
            Codigo Tlf.
    </label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control" maxlength="4" id="codigo_telefono"  name="codigo_telefono" value="<?php echo $proveedor['codigo_telefono']; ?>" placeholder="Codigo de telefono"> 
</div>


  <div style="margin-top: 10px;" class="form-group col-md-3"><br>
    <label>
           N° Telefono
    </label>
        <input type="text" onkeypress="return isNumberKey(event)" class="form-control" maxlength="7" id="numero_telefono"   name="numero_telefono" value="<?php echo $proveedor['numero_telefono']; ?>" placeholder="Telefono"> 
</div>

  <div style="margin-top: 10px;" class="form-group col-md-6"><br>
    <label>
            Contacto
    </label>
    <input type="text"  class="form-control" id="nombre_contacto" name="nombre_contacto"  value="<?php echo $proveedor['nombre_contacto']; ?>"  placeholder="Nombre de Contacto"> 
</div>

<br>
<div class="form-group col-md-12"> <br>
  <button  type="submit" name="guardar_cambios_proveedor" id="guardar_cambios_proveedor" class="btn btn-success">Guardar Cambios</button> 
</div> 
</form>
<?php 
  } 
  
  if($editar_proveedor=$_SESSION["codigo_proveedor"] !== $editar){ 
      unset($_SESSION["codigo_proveedor"]);
    echo '<meta http-equiv="refresh" content="0;url=../proveedores">';
    exit;
  } 
?>
</div>
</div>
</div>