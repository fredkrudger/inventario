<?php //editar_clientes.php
	$editar = htmlentities(addslashes($_GET["editar"]));

	$sqli = "SELECT * FROM cliente 
        inner join cliente AS cli ON cli.codigo_cliente=cliente.codigo_cliente 
        inner join telefono on telefono.id_telefono=cliente.id_telefono
        inner join ubicacion on ubicacion.id_ubicacion=cliente.id_ubicacion
<<<<<<< HEAD
        inner join ciudades on ciudades.id_ciudad=cliente.id_ciudad
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
        inner join rif_cedula on rif_cedula.id_rif_cedula=cliente.id_rif_cedula
    WHERE cliente.codigo_cliente='$editar'";
 	$result1 = $linki->query($sqli);
 		if($linki->errno) die ($linki->error); 
 		      while($cliente = $result1->fetch_array()){  
?>
<br>
<div class="col-md-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"> Editar Cliente</h3>
  </div>
  <div class="panel-body"><br>
<form autocomplete="off" method="POST" name="editar_cliente" id="editar_cliente"  >
 <div class="form-group col-md-6">
    <label>
  			Nombre
    </label>  
    <input  type="hidden" class="form-control" id="codigo_cliente" name="codigo_cliente" value="<?php echo $editar_cliente=$_SESSION["codigo_cliente"]=$cliente['codigo_cliente']; ?>">     
 	<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $cliente['nombre_cliente']; ?>" placeholder="Nombre del Cliente"> 
</div> 

<div class="form-group col-md-2" style="margin-bottom: 10px"> 
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
         if($row['id_rif_cedula']==$cliente["id_rif_cedula"]){
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
 
<div class="form-group col-md-4"> 
    <label>
       	 N° de Rif / Cedula
    </label>  		
 	 
 	<input type="text" class="form-control" onkeypress="return isNumberKey(event)" onkeyup="rif_cedula(this,'-',patron,true)" maxlength="10" id="numero_documento" name="numero_documento" value="<?php echo $cliente['numero_documento']; ?>" placeholder="Numero de RIF/Cedula"> 

</div> 

 <br> 
 
  <div style="margin-bottom: -11px;" class="form-group col-md-6"><br>
    <label>
    		Estado
    </label> 	  
    <select name="estado" id="estado" class="form-control">
<<<<<<< HEAD
    <option value="">Selecciona un Estado</option> 
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
        <?php 
            $wsqli ="select * from ubicacion";
            $result=$linki->query($wsqli);
            while($row=$result->fetch_array()){
                $ide=$row['id_ubicacion'];
                $ne=$row['estado'];
            ?>
                <option  value="<?php echo $ide;?>" 
            <?php 
                if($row['id_ubicacion']==$cliente["id_ubicacion"]){
                    ?>
<<<<<<< HEAD
                    
=======
                    selected
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
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
  
<div class="form-group col-md-6"> <br>
    <label>
    		Ciudad
    </label>
<<<<<<< HEAD
     <select name="ciudad" id="ciudad" class="form-control">
    </select>   
=======
    <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $cliente['ciudad']; ?>" placeholder="ciudad">  
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908

</div> 
<br>

  <div style="margin-bottom: -11px;" class="form-group col-md-6"><br>
    <label>
    		Dirección
    </label>
 	<textarea style="resize: none;" name="direccion" id="direccion" class="form-control" rows="2"><?php echo $cliente["direccion"]; ?></textarea>
</div>
   
<div class="form-group col-md-6"> <br>
    <label>
    		Dirección de Entrega
    </label>
	<textarea style="resize: none;" name="direccionEntrega" id="direccionEntrega" class="form-control" rows="2"><?php echo $cliente["direccion_entrega"]; ?></textarea>
</div> 
<br>

  <div style="margin-top: 10px;" class="form-group col-md-3"><br>
    <label>
            Codigo Tlf.
    </label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="codigo_telefono"  maxlength="4" name="codigo_telefono" value="<?php echo $cliente['codigo_telefono']; ?>" placeholder="Codigo de telefono"> 
</div>

  <div style="margin-top: 10px;" class="form-group col-md-3"><br>
    <label>
    		N° Telefono
    </label>
   	<input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="numero_telefono"  maxlength="7" name="numero_telefono" value="<?php echo $cliente['numero_telefono']; ?>" placeholder="Numero de Telefono"> 
</div>
<br>
<div class="form-group col-md-12"> <br>
 	<button  type="submit" name="guardar_cambios" id="guardar_cambios" class="btn btn-success">Guardar Cambios</button> 
</div>

</form>
<?php 
  } 
 	if($editar_cliente=$_SESSION["codigo_cliente"] !== $editar){ 
 	    unset($_SESSION["codigo_cliente"]);
 		echo '<meta http-equiv="refresh" content="0;url=../clientes">';
 		exit;
 	} 
?>
</div>
</div>
</div>                                               
<<<<<<< HEAD
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

>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
 