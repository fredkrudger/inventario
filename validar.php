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
     <br>
   </center>
  <div style="margin-top:-10px" class="container-fluid"> 
   	  
    </br>
    <?php if(isset($_GET["nueva_clave"])){ ?>
      <h1 align="center">Nueva Contraseña</h1>
    <?php }else{ ?>
      <h1 align="center">Verifica Tus Datos</h1>
    <?php } ?>        
 
<div class="col-md-6 col-md-offset-3 ">
	<div id="respuesta"></div>
  <?php
   

  if(isset($_GET["respuesta"])){ 

      include("verificar_respuesta.php");

   }

   elseif(isset($_GET["nueva_clave"])){ 

      include("nueva_clave.php");
   }

   else{         
        include("verificar_correo.php");
    }

 
 ?>

<br>
 	
 
 <div style="margin-bottom: 20px;" align="right" class="form-group">  
        <div class="col-sm-12"> <br>  
            <a href="index.php">¿Ya Tienes Cuenta.? Inicia Sesion</a>  
        </div> 
    </div><br>
 

</div>
</div>

 </body>
</html>
