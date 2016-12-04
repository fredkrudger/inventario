<?php //login.php
error_reporting(0);
session_start(); 
<<<<<<< HEAD
$correo = htmlentities(addslashes($_POST['correo']));
$clave   = md5($_POST['clave']); 
if (isset($_POST["iniciar_sesion"])!=""){ 
if(!isset($correo) and (!isset($clave))){
    header("location:index.php");
  }else{
    if($correo=="" or $clave==""){
      header("location:index.php");
    }else{    
    $sqli="select * from usuarios where correo='$correo' and clave='$clave'";
    $result = $linki->query($sqli);
    if($linki->errno) die($linki->error);
    $row = $result->fetch_array();
    if($row>0){          
      $_SESSION['nombre_usuario']=$row['nombre_usuario'];

      if($row["id_nivel"]==1){ 
      $_SESSION['admin']=$row['id_nivel'];
      }else{
        if($row["id_nivel"]==2){
      $_SESSION['user']=$row['id_nivel'];  
        }
      }
 
=======
$usuario = htmlentities(addslashes($_POST['usuario']));
$clave   = htmlentities(addslashes($_POST['clave'])); 
if (isset($_POST["iniciar_sesion"])!=""){ 
if(!isset($usuario) and (!isset($clave))){
    header("location:index.php");
  }else{
    if($usuario=="" or $clave==""){
      header("location:index.php");
    }else{    
    $sqli="select * from administrador where usuario='$usuario' and clave='$clave'";
    $result = $linki->query($sqli);
    if($linki->errno) die($linki->error);
    $row = $result->fetch_array();
    if($row>0){            
      $_SESSION['usuario']    =$row['usuario'];
      $_SESSION['nombre']     =$row['nombre'];
      $_SESSION['apellido']   =$row['apellido'];

>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
       echo '<div class="form-group"> 
        <div style="margin-bottom:-12px" class="col-sm-offset-4 col-sm-4">
          <div align="center" class="alert alert-success" role="alert">
            <b> Iniciando Sesión, Espere... </b></div>         
          </div>
          </div>';
<<<<<<< HEAD
       echo '<meta http-equiv="refresh" content="1;url=panel">';      
=======
       echo '<meta http-equiv="refresh" content="4;url=panel">';      
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
      }else{         
        echo '<div class="form-group"> 
        <div style="margin-bottom:-12px" class="col-sm-offset-4 col-sm-4">
          <div align="center" class="alert alert-danger" role="alert"><b> Error de Usuario y/o Contraseña </b></div>         
          </div>
          </div>';
<<<<<<< HEAD
           unset($correo);                      
           echo '<meta http-equiv="refresh" content="1;url=/inventario">';  
=======
           unset($usuario);                      
           echo '<meta http-equiv="refresh" content="3;url=/inventario">';  
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
        }
      }
   }
 }  
?> 