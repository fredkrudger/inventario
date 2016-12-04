<?php //editar_usuarios.php
	$editar = htmlentities(addslashes($_GET["editar"]));

	$sqli = "SELECT * FROM usuarios 
    inner join telefono on telefono.id_telefono=usuarios.id_telefono
    inner join niveles on niveles.id_nivel=usuarios.id_nivel
    inner join rif_cedula on rif_cedula.id_rif_cedula=usuarios.id_rif_cedula
    WHERE usuarios.id_usuario='$editar'";
 	$result1 = $linki->query($sqli);
 		if($linki->errno) die ($linki->error); 
 		      while($usuarios = $result1->fetch_array()){  
?>
<br>
<div class="col-md-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"> Editar Usuario</h3>
  </div>
  <div class="panel-body"><br>
<form autocomplete="off" method="POST" name="editar_usuarios" id="editar_usuarios"  >
 <div class="form-group col-md-6">
    <label>
  			Nombre
    </label>  
    <input  type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $editar_usuario=$_SESSION["id_usuario"]=$usuarios['id_usuario']; ?>">     
 	<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuarios['nombre_usuario']; ?>" placeholder="Nombre del Usuario"> 
</div> 
 
<div class="form-group col-md-6"> 
    <label>
       	 N° de Cedula
    </label>  		
 
  <div class="input-group">
      <div class="input-group-addon">V-</div>
      <input type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="8" id="numero_documento" name="numero_documento" placeholder="12345678" value="<?php echo $usuarios['numero_documento']; ?>">
    </div> 

</div> 

 <br> 
 
  <div style="margin-bottom: -11px;" class="form-group col-md-6"><br>
    <label>
    		Correo
    </label> 	  
    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="correo" name="correo" placeholder="ejemplo@prueba.com" required value="<?php echo $usuarios['correo']; ?>">  
</div>
  
<div class="form-group col-md-6"> <br>
    <label>
    		Nivel
    </label>

     <select name="nivel" id="nivel" class="form-control">
        <?php 
            $wsqli ="select * from niveles where id_nivel=2";
            $result=$linki->query($wsqli);
            while($row=$result->fetch_array()){
                $idn=$row['id_nivel'];
                $nn=$row['nivel'];
            ?>
                <option  value="<?php echo $idn;?>" 
            <?php 
                if($row['id_nivel']==$usuarios["id_nivel"]){
                    ?>
                    selected
                    <?php
                     }
                     ?>>
                     <?php echo $nn ?>
                </option>
            <?php
            }
            ?>
    </select>   

</div> 
<br>

  <div style="margin-top: 10px;" class="form-group col-md-3"><br>
    <label>
            Codigo Tlf.
    </label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="codigo_telefono"  maxlength="4" name="codigo_telefono" value="<?php echo $usuarios['codigo_telefono']; ?>" placeholder="Codigo de telefono"> 
 </div>
   <div style="margin-top: 10px;" class="form-group col-md-3"><br>
    <label>
        N° Telefono
    </label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="numero_telefono"  maxlength="7" name="numero_telefono" value="<?php echo $usuarios['numero_telefono']; ?>" placeholder="Numero de Telefono"> 
</div>

 
<br>
  <div style="margin-bottom: -11px;" class="form-group col-md-6"><br>
    <label>
        Dirección
    </label>
  <textarea style="resize: none;" name="direccion" id="direccion" class="form-control" rows="2"><?php echo $usuarios["direccion"]; ?></textarea>
</div>
<br>
<div class="form-group col-md-12"> <br>
 	<button  type="submit" name="guardar_cambios" id="guardar_cambios" class="btn btn-success">Guardar Cambios</button> 
</div>

</form>
<?php 
  } 
 	if($editar_usuario=$_SESSION["id_usuario"] !== $editar){ 
 	    unset($_SESSION["id_usuario"]);
 		echo '<meta http-equiv="refresh" content="0;url=../usuarios">';
 		exit;
 	} 
?>
</div>
</div>
</div>                                               

 