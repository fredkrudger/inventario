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
   <center>
  	 <img src="img/sumipan.png" width="300px" height="70px" class="img-responsive" alt="SumiPan Los Llanos C.A.">
   </center>
  <div style="margin-top:-10px" class="container-fluid"> 
   	<h1 align="center">Accesar al Sistema</h1>  
    </br>         
    <form autocomplete="off" method="POST"  id="formulario" class="form-horizontal">
    <div class="form-group">
    <div class="col-md-12">
      <label class="col-sm-4 control-label">Usuario:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingresa el Usuario">
      </div>
      </div>
    </div>
    <div class="form-group">
    <div class="col-md-12">
      <label  class="col-sm-4 control-label">Contraseña:</label>
      <div class="col-sm-4">
        <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingresa la Contraseña">
      </div>
    </div>
    </div>
    <div class="form-group">  
      <div class="col-md-12">   
         <?php
           if (isset($_POST["iniciar_sesion"])!=""){
            if (!isset($_POST['usuario']) and (!isset($_POST['clave']))) {
                header("location:index.php");
              }else{         
                include_once("login.php");
               }
             }
          ?> 
        </div>         
      </div>
    <div style="margin-top:-15px" class="form-group">  
        <div class="col-sm-offset-4 col-sm-4">   
          <button id="iniciar_sesion"  name="iniciar_sesion" type="submit" class="btn btn-success">Iniciar Sesion
          </button>
        </div>
    </div> 
   </form>
   </div>	
 </body>
</html>
