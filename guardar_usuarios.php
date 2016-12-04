<?php //guardar_usuarios.php
    error_reporting(0);
	session_start();
    include("db/config.php");
   
	$nombre           = htmlentities(addslashes($_POST['nombre']));
	$numero_documento = htmlentities(addslashes($_POST['numero_documento']));
	$direccion 		  = htmlentities(addslashes($_POST['direccion']));
	$codigo_telefono  = htmlentities(addslashes($_POST['codigo_telefono']));
	$numero_telefono  = htmlentities(addslashes($_POST['numero_telefono']));
	$pregunta  = $_POST['pregunta_secreta'];
	$respuesta = $_POST['respuesta_secreta'];
	$mail   = $_POST['correo'];
	$clave  = md5($_POST['clave']);
	$nivel  = $_POST['nivel'];	
	$tipo_documento   = 'V';

	   	$select = "SELECT * FROM rif_cedula WHERE tipo_documento='$tipo_documento' and numero_documento='$numero_documento' ";    
	    $select_result = $linki->query($select);	          
	    if($linki->errno) die($linki->error);	    
	     if($row=$select_result->fetch_array()){
	     	 $td=$row["tipo_documento"];
	     	 $nd=$row["numero_documento"]; 
	     	 	
	     	if(($nd==$numero_documento) && ($td==$tipo_documento)){
	        echo '<script>alert("La cedula esta siendo usada, ingrese otra.");</script>'; 
	        }
	       }
	        else{
	       	
	      $select1 = "SELECT * FROM telefono WHERE codigo_telefono='$codigo_telefono' and numero_telefono='$numero_telefono' ";    
	      $select_result1 = $linki->query($select1);	          
	      if($linki->errno) die($linki->error);	    
	       if($row=$select_result1->fetch_array()){
	     	 $ct=$row["codigo_telefono"];
	     	 $nt=$row["numero_telefono"];
	     	 	
	     	if(($ct==$codigo_telefono) && ($nt==$numero_telefono)){
	           echo '<script>alert("el telefono ya esta en uso, ingrese otro.");</script>';     	 
	         }	       
	        }
	       	 else{
	       	 
	        $insert_rc = "INSERT INTO rif_cedula(tipo_documento, numero_documento) VALUES ('$tipo_documento', '$numero_documento')";    
		    $insert_rc_result = $linki->query($insert_rc);	          
		    if($linki->errno) die($linki->error);	    
		    if($insert_rc_result==true){
		     
		 	$consult1 = "SELECT * FROM rif_cedula WHERE tipo_documento='$tipo_documento' and numero_documento='$numero_documento' ";    
		    $select_consult1 = $linki->query($consult1);	          
		    if($linki->errno) die($linki->error);	    
		     if($row=$select_consult1->fetch_array()){
		     	 $_SESSION["ID_R_C"]=$row["id_rif_cedula"]; 
		     	} 	
		       } 

		    $insert_t = "INSERT INTO telefono(codigo_telefono, numero_telefono) VALUES ('$codigo_telefono', '$numero_telefono')";    
		    $insert_t_result = $linki->query($insert_t);	          
		    if($linki->errno) die($linki->error);	    
		    if($insert_t_result==true){
		    
		 	$consult = "SELECT * FROM telefono WHERE codigo_telefono='$codigo_telefono' and numero_telefono='$numero_telefono' ";    
		    $select_consult = $linki->query($consult);	          
		    if($linki->errno) die($linki->error);	    
		     if($row=$select_consult->fetch_array()){
		     	 $_SESSION["ID_TLF"]=$row["id_telefono"]; 
		     	}
		       }
	    
		    $sqli="INSERT INTO usuarios(nombre_usuario, correo, clave, direccion, pregunta_secreta, respuesta_secreta, id_nivel, id_telefono, id_rif_cedula) VALUES ('$nombre', '$mail', '$clave', '$direccion', '$pregunta', '$respuesta', '$nivel', '".$_SESSION["ID_TLF"]."', '".$_SESSION["ID_R_C"]."')";
		    $result = $linki->query($sqli);
		          
		    if($linki->errno) die($linki->error);	    
		      if($result==true){      
		        echo '<script>alert("El Usuario ha sido guardado Con Exito.");</script>';		       
		       	 echo'<script type="text/javascript">
					window.location="index.php";
				 </script> ';         
		        }else{         
		        echo '<script>alert("Error al guardar el Usuario");</script>';  
		         }   	
	         }
	     }

?>