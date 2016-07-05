<?php //login.php
error_reporting(0);
session_start(); 
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

       echo '<div class="form-group"> 
        <div style="margin-bottom:-12px" class="col-sm-offset-4 col-sm-4">
          <div align="center" class="alert alert-success" role="alert">
            <b> Iniciando Sesión, Espere... </b></div>         
          </div>
          </div>';
       echo '<meta http-equiv="refresh" content="4;url=panel">';      
      }else{         
        echo '<div class="form-group"> 
        <div style="margin-bottom:-12px" class="col-sm-offset-4 col-sm-4">
          <div align="center" class="alert alert-danger" role="alert"><b> Error de Usuario y/o Contraseña </b></div>         
          </div>
          </div>';
           unset($usuario);                      
           echo '<meta http-equiv="refresh" content="3;url=/inventario">';  
        }
      }
   }
 }  
?> 