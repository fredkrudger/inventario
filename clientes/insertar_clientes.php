<!-- insertar_clientes.php -->
<div class=" col-sm-12" id="respuesta"></div>
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Nuevo Cliente</h3>
  </div>
  <div class="panel-body">
<form autocomplete="off" id="cliente" method="POST">
 
 <div class="form-group col-md-6"><br> 
    <label>
            Nombre
    </label>  
   
    <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre del Cliente"> 
</div> 

<div class="form-group col-md-2" style="margin-bottom: 10px"> <br> 
    <label>
         Tipo
    </label>        
     <select title="Tipo de Documento" id="tipo_documento" name="tipo_documento" class="form-control">
        <option value="V">V</option>
        <option value="J">J</option>
        <option value="G">G</option>
    </select>   
</div>   

<div class="form-group col-md-4">  <br> 
    <label>
         N° de Rif / Cedula
    </label>        
     
    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" onkeyup="rif_cedula(this,'-',patron,true)" maxlength="10" id="numero_documento" name="numero_documento" placeholder="Numero de RIF/Cedula"> 

</div> 

 <br>
 
  <div style="margin-bottom: -11px;" class="form-group col-md-6"><br> 
    <label>
            Estado
    </label>      
    <select id="estado" name="estado" class="form-control">
<<<<<<< HEAD
    <option value="">Selecciona un Estado</option> 
        <?php
=======
        <?php 
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
            $wsqli ="select * from ubicacion";
            $result=$linki->query($wsqli);
            while($row=$result->fetch_array()){
                $ide=$row['id_ubicacion'];
                $ne=$row['estado'];
            ?>
<<<<<<< HEAD
                <option id="estado" value="<?php echo $ide; ?>">
=======
                <option  value="<?php echo $ide; ?>">
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
                     <?php echo $ne; ?>
                </option>
            <?php
            }
            ?>
    </select>   
</div>
<<<<<<< HEAD
 
<br>
 <div class="form-group col-md-6"> <br>
    <label>
            Ciudad
    </label>
        
    <select id="ciudad" name="ciudad" class="form-control">

    </select> 
    
</div>


=======
  
  <br>

<div class="form-group col-md-6"> <br>
    <label>
            Ciudad
    </label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="ciudad">  

</div> 
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
<br>
 
  <div style="margin-bottom: -11px;" class="form-group col-md-6"><br>
    <label>
            Dirección
    </label>
    <textarea style="resize: none;" placeholder="Dirección" name="direccion" id="direccion" class="form-control" rows="2"></textarea>
</div>
  
<div class="form-group col-md-6"> <br>
    <label>
            Dirección de Entrega
    </label>
    <textarea style="resize: none;" placeholder="Dirección de Entrega" name="direccionEntrega" id="direccionEntrega" class="form-control" rows="2"></textarea>
</div> 
<br>

  <div style="margin-top: 10px;" class="form-group col-md-3"><br>
    <label>
            Codigo Tlf.
    </label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="codigo_telefono" name="codigo_telefono"  maxlength="4"  placeholder="Codigo de telefono"> 
</div>


  <div style="margin-top: 10px;" class="form-group col-md-3"><br>
    <label>
          N° Telefono
    </label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="numero_telefono"  maxlength="7" name="numero_telefono"   placeholder="Numero de Telefono"> 
</div>
<br>
<div class="form-group col-md-12"><br> 
    <input type="submit" name="insertar" id="insertar" class="btn btn-success" value="Guardar Cliente">   
</div>  
</form>
</div>
</div>
<<<<<<< HEAD
</div>
<script>
$(document).ready(function(){
    $("select[name=estado]").change(function(){
            var idesta = $('select[name=estado').val();
            var url = "lista_ciudades.php";
            $.ajax({
               type: "GET",
               url: url,
               data:'idestado='+idesta, 
               success: function(data)
               {
              $("#ciudad").html(data);
            }
        }); 
    });
});
</script> 
=======
</div>
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
