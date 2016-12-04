<?php require("db/config.php");?> 
<!DOCTYPE html>
<html lang="es">
<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width; initial-sacale=1.0">	
	<title>SumiPan Los LLanos</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!-- JS -->
  <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>	
  <script src="bootstrap/js/jquery.validate.js" type="text/javascript"></script>
  <?php require("bootstrap/js/validar.js");?>
 </head>
  <body>
  <br><br>
  <?php if(!isset($_SESSION["admin"])){  ?>
   <center>
  	 <img src="img/sumipan.png" width="300px" height="70px" class="img-responsive" alt="SumiPan Los Llanos C.A.">
     <br>
   </center>
   <?php } ?>
  <div style="margin-top:-10px" class="container-fluid"> 
     <?php if(!isset($_SESSION["admin"])){  ?>
        <h1 align="center">Crear Cuenta</h1> 
     <?php } ?>    
    </br>         

<div class=" col-sm-12" id="respuesta"></div>
<div class="col-md-12">
<div class="panel panel-default">
 
  <div class="panel-body">
<form autocomplete="off" id="cuenta_nueva" method="POST">
 
 <div class="form-group col-md-6"><br> 
    <label>
            Nombre
    </label>  
   
    <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre de Usuario"> 
</div> 

<div class="form-group col-md-2" style="margin-bottom: 10px"> <br> 
    <label>
         Nivel
    </label>        
     <select name="nivel" id="nivel" class="form-control">
     <?php 
      $query_verificar="SELECT * from usuarios 
         inner join niveles on niveles.id_nivel=usuarios.id_nivel
         WHERE usuarios.id_nivel=1";
            $result_query = $linki->query($query_verificar);
            if($linki->errno) die($linki->error);
            if($row=$result_query->fetch_array()){
      ?>
          <option selected value="2">Usuario</option>
      <?php   
        }else{ 
      ?>
            <option selected value="1">Administrador</option>
      <?php 
       }
      ?>            
            
    </select>   
</div>   

<div class="form-group col-md-4">  <br> 
    <label>
         N° Cedula
    </label>        
     
    <div class="input-group">
      <div class="input-group-addon">V-</div>
      <input type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="8" id="numero_documento" name="numero_documento" placeholder="12345678">
    </div> 

</div> 

 <br>
 
  <div style="margin-bottom: -11px;" class="form-group col-md-6"><br> 
    <label>
            Correo
    </label> 

    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="correo" name="correo" placeholder="ejemplo@prueba.com" required>     
</div>
  
  <br>

<div class="form-group col-md-6"> <br>
    <label>
            Contraseña
    </label>
    <input type="password"  class="form-control" id="clave" name="clave"    placeholder="**************" required maxlength="10">  

</div> 
 
<br>

  <div style="margin-bottom: -11px;" class="form-group col-md-6"><br>
    <label>
            Pregunta Secreta
    </label>
      <select name="pregunta_secreta" id="pregunta_secreta" class="form-control">
            <option value="¿Como Se Llama Tu Mejor Amigo?">¿Como Se Llama Tu Mejor Amigo?</option>
            <option value="¿Cual Es Tu Color Favorito?">¿Cual Es Tu Color Favorito?</option>       
            <option value="¿Nombre De Tu Mascota?">¿Nombre De Tu Mascota?</option>
            <option value="¿Lugar Donde Nacio Tu Abuelo?">¿Lugar Donde Nacio Tu Abuelo?</option>
            <option value="¿Cual Es Tu Equipo Preferido?">¿Cual Es Tu Equipo Preferido?</option>  
    </select> 
</div>
  
<div class="form-group col-md-6"> <br>
    <label>
            Respuesta Secreta
    </label>
    <input type="password" class="form-control" placeholder="Ingresa Tu Respuesta Secreta" name="respuesta_secreta" id="respuesta_secreta" required>
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

<div class="form-group col-md-6"> <br>
    <label>
            Dirección
    </label>
    <textarea style="resize: none;" placeholder="Dirección" name="direccion" id="direccion" class="form-control" rows="2"></textarea>
</div>

<br> 

    <div class="form-group">  
        <div class="col-sm-12"> <br>  
          <input style="width: 35%" type="submit" name="registrame" id="registrame" class="btn btn-success" value="Registrar"> 
        </div>
    </div>
<?php if(!isset($_SESSION["admin"])){  ?>
    <div align="right" class="form-group">  
        <div class="col-sm-12"> <br>  
            <a href="index.php">¿Ya Tienes Cuenta.? Inicia Sesion</a> 
        </div>
    </div>
<?php } ?>    
</form>
</div>
</div>
</div>
</div>

 </body>
</html>
