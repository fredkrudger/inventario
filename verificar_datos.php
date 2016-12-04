<?php //verificar_datos.php
	error_reporting(0);
    session_start();
    require("db/config.php");

   if(isset($_POST["verificar_email"])=="Verificar Correo"){	
  	
  	$correo = $_POST["correo"];
    $sqli="select * from usuarios where correo='$correo'";
    $result = $linki->query($sqli);
    if($linki->errno) die($linki->error);
    $row = $result->fetch_array();
    if($row==0){
     echo '<div class="form-group"> 
        <div class="col-sm-12">
          <div style="margin-bottom:-5px;" align="center" class="alert alert-danger" role="alert"><b> El correo no se encuentra registrado </b></div>         
        </div>
     </div>';

   }else{
   	if($row>=1){
   		$_SESSION["idusu"]=$row["id_usuario"];
        $_SESSION["correovalido"]=$row["correo"];
        echo "<script>window.location='validar.php?respuesta'</script>";
   	}
   }
 
  }
 

  if(isset($_POST["verificar_respuesta"])=="Verificar Respuesta"){

  	$idu  = $_SESSION["idusu"];
  	$mail = $_SESSION["correovalido"];
  	$p_secret = $_POST["pregunta_secreta"];
  	$r_secret = $_POST["respuesta_secreta"];
    $sqlis="select * from usuarios where correo='$mail' and id_usuario='$idu' and pregunta_secreta='$p_secret' and respuesta_secreta='$r_secret'";
    $results = $linki->query($sqlis);
    if($linki->errno) die($linki->error);
    $rows = $results->fetch_array();
    if($rows==false){
     echo '<div class="form-group"> 
        <div class="col-sm-12">
          <div style="margin-bottom:-5px;" align="center" class="alert alert-danger" role="alert"><b> Los Datos No Concuerdan</b></div>         
        </div>
     </div>';

   }else{
   	if($rows==true){
   		$_SESSION["idusu"]=$rows["id_usuario"];
        $_SESSION["correovalido"]=$rows["correo"];
        echo "<script>window.location='validar.php?nueva_clave'</script>";
   	}
   }

  }


  if(isset($_POST["cambiar_clave"])=="Cambiar Clave"){

  	$id    = $_SESSION["idusu"];
  	$email = $_SESSION["correovalido"];
  	$clave   = $_POST["clave"];
  	$r_clave = $_POST["r_clave"];

  	if($clave==$r_clave){ 
    $pass = md5($clave);		
  	$update = "UPDATE usuarios SET clave='$pass' WHERE id_usuario='$id' AND correo='$email'";
 
    $result = $linki->query($update);
    if($linki->errno) die($linki->error);
    if($result==true){
     session_unset();
     session_destroy();	
     echo '<div class="form-group"> 
        <div class="col-sm-12">
          <div style="margin-bottom:-5px;" align="center" class="alert alert-success" role="alert"><b> Cambios Guardados.</b></div>         
        </div>
     </div>';

    echo "<script>window.location='index.php'</script>";

   }else{
   	if($result==false){

   		echo '<div class="form-group"> 
        <div class="col-sm-12">
          <div style="margin-bottom:-5px;" align="center" class="alert alert-danger" role="alert"><b> Error al cambiar Contraseñas.</b></div>         
        </div>
     </div>'; 
   	}
   }

  }else{
  	echo '<div class="form-group"> 
        <div class="col-sm-12">
          <div style="margin-bottom:-5px;" align="center" class="alert alert-danger" role="alert"><b> Las Contraseñas no Coinciden</b></div>         
        </div>
     </div>';
  }
}
    
?>