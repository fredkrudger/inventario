<?php //actualizar_proveedores.php
	error_reporting(0);
	session_start();

    $codigo_proveedor = htmlentities(addslashes($_POST["codigo_proveedor"]));
	$nombre           = htmlentities(addslashes($_POST['nombre_proveedor']));
	$tipo_documento   = htmlentities(addslashes($_POST['tipo_documento']));
	$numero_documento = htmlentities(addslashes($_POST['numero_documento']));
	$estado  		  = htmlentities(addslashes($_POST['estado']));
	$ciudad 	      = htmlentities(addslashes($_POST['ciudad']));
	$direccion 		  = htmlentities(addslashes($_POST['direccion']));
	$contacto         = htmlentities(addslashes($_POST['nombre_contacto'])); 
	$codigo_telefono  = htmlentities(addslashes($_POST['codigo_telefono']));
	$numero_telefono  = htmlentities(addslashes($_POST['numero_telefono']));
	 
  if(isset($_POST["guardar_cambios_proveedor"])){ 
	  
	 $update_pro = "UPDATE proveedor SET nombre_proveedor='$nombre',direccion='$direccion',nombre_contacto='$contacto',ciudad='$ciudad',id_ubicacion='$estado' WHERE codigo_proveedor='$codigo_proveedor'";	   
	    $resultado_pro = $linki->query($update_pro);     
	    if($link->errno) die($link->error);
	     if($resultado_pro==true){	       
	     echo '<meta http-equiv="refresh" content="0">';
		
		$select_id_rc = "SELECT * FROM rif_cedula WHERE tipo_documento='$tipo_documento' and numero_documento='$numero_documento' ";    
	    $select_resultado_id_rc = $linki->query($select_id_rc);	          
	    if($linki->errno) die($linki->error);	    
	     if($rows=$select_resultado_id_rc->fetch_array()){
	     	 $id_r_c=$rows["id_rif_cedula"];	     	 
	     	
	    $verificar_id_rc = "SELECT codigo_proveedor,id_rif_cedula FROM proveedor WHERE id_rif_cedula='$id_r_c' and codigo_proveedor='$codigo_proveedor'";    
	      $verificar_id_rc_result1 = $linki->query($verificar_id_rc);	          
	      if($linki->errno) die($linki->error);	    
	       if($verf_rc=$verificar_id_rc_result1->fetch_array()){
	       	if ($verf_rc==true){	                	 
	        }	       
               }else{
               	if($_SESSION["verf_rif_cedula"]=$verf_rc==false){ 
             	echo "<script>alert('El rif o cedula ya esta asociado a otro proveedor, ingrese otro.');</script>"; 
                 }
              }
               }else{
             	
             	$idactual=$_SESSION['id_rc'];
				$update_r_c = "UPDATE rif_cedula SET tipo_documento='$tipo_documento',numero_documento='$numero_documento' WHERE id_rif_cedula='$idactual' ";    
			    $update_result1_rc = $linki->query($update_r_c);	          
			    if($linki->errno) die($linki->error);
              }

	   	$select_tlf = "SELECT * FROM telefono 
	   	WHERE telefono.codigo_telefono='$codigo_telefono' and 
	   		  telefono.numero_telefono='$numero_telefono'";   
	    $select_resultado = $linki->query($select_tlf);	          
	    if($linki->errno) die($linki->error);	    
	     if($row=$select_resultado->fetch_array()){
  	        $idt=$row['id_telefono'];
	     	
	    $verificar_id_tlf = "SELECT codigo_proveedor,id_telefono FROM proveedor WHERE id_telefono='$idt' and codigo_proveedor='$codigo_proveedor'";    
	      $verificar_id_tlf_result1 = $linki->query($verificar_id_tlf);	          
	      if($linki->errno) die($linki->error);	    
	       if($verf=$verificar_id_tlf_result1->fetch_array()){
	       	if ($verf['id_telefono']==$idt){  		      	 
	           }
             }
            if ($_SESSION["verf_id"]=$verf['id_telefono']==false){
             		echo '<script>alert("El telefono esta asociado a otro proveedor, ingrese otro.");</script>'; 
             	} 
             }else{
             	error_reporting(0);
        	$select_tlf_new = "SELECT telefono.id_telefono,proveedor.id_telefono,proveedor.codigo_proveedor,telefono.numero_telefono,telefono.codigo_telefono FROM proveedor
              	    inner join telefono on telefono.id_telefono=proveedor.id_telefono 
				   	WHERE  proveedor.codigo_proveedor='$codigo_proveedor'";   
				    $select_resultado_new = $linki->query($select_tlf_new);	          
				    if($linki->errno) die($linki->error);	    
				     if($new=$select_resultado_new->fetch_array()){
			  	        $id_tel=$new['id_telefono'];  
			  $update_tlf = "UPDATE telefono SET codigo_telefono='$codigo_telefono', numero_telefono='$numero_telefono' WHERE telefono.id_telefono='".$id_tel."' ";    
			    $update_result1_tlf = $linki->query($update_tlf);	          
			    if($linki->errno) die($linki->error);	                    	 	
             		}
             	 }
		      
		   if(($_SESSION["verf_id"]) || ($_SESSION["verf_rif_cedula"])){
  						unset($_SESSION["verf_id"]);
  						unset($_SESSION["verf_rif_cedula"]);
		           	}else{  
		 echo'<script>alert("Los cambios fueron realizados correctamente.");</script>';
		        }
            }            
       }          
?>