<?php //guardar_producto.php
	error_reporting(0);
    include("../db/config.php");
   
	$nombre            = htmlentities(addslashes($_POST['nombre_producto']));
	$marca             = htmlentities(addslashes($_POST['marca']));
    $fecha_vencimiento = htmlentities(addslashes($_POST['fecha_vencimiento']));
    $cantidad 	       = htmlentities(addslashes($_POST['cantidad']));
<<<<<<< HEAD
    $cantidad_minima   = htmlentities(addslashes($_POST['cantidad_minima']));
	$presentacion	   = htmlentities(addslashes($_POST['presentacion']));
	$precio 	       = htmlentities(addslashes($_POST['precio']));
	$grupo 		       = $_POST['grupo'];
	$grupo_new	       = $_POST['grupo_new'];
	$descripcion       = htmlentities(addslashes($_POST['descripcion'])); 
	$proveedor         = htmlentities(addslashes($_POST['proveedor']));
		
		if(isset($_POST["guardar_grupo"])!=""){
		 $sqli_grupo = "SELECT * FROM grupo WHERE nombre_grupo='$grupo_new'";		
		    $res_grupo = $linki->query($sqli_grupo);				          
				    if($linki->errno) die($linki->error);
				    $row = $res_grupo->fetch_assoc(); 	    
				    $grupobd=$row["nombre_grupo"];
				    if($grupo_new==$grupobd){

				    echo '<div class="form-group"> 
						  <div>
						    <div align="center" class="alert alert-danger" role="alert">
						    <b> Este Grupo ya se Encuentra</b></div>         
							  </div>
					    </div>';
				  }else{
				       if($grupo_new!=$grupobd){

		$insert_grupo="INSERT INTO grupo (nombre_grupo) VALUES ('$grupo_new')";
		$result_insert = $linki->query($insert_grupo);
				          
				    if($linki->errno) die($linki->error);	    
				    if($result_insert==true){     	

				 echo '<div class="form-group"> 
				     <div>
					   <div align="center" class="alert alert-success" role="alert">
				       <b> Grupo Agregado Correctamente </b></div>         
					  </div>
			      </div>';
			      echo'<script type="text/javascript">
					 location.reload(true);
				   </script> ';     
				}else{         
				  echo '<script>alert("Error al guardar el Grupo.");</script>';  
			   }
			 }
		   }	
		}

		if(isset($_POST["insertar"])!=""){ 
		if($cantidad>0){
		if($cantidad>=$cantidad_minima){ 
		      $fecha_ingreso = DATE('d/m/Y');
			  $sqli_producto="INSERT INTO producto
			  (nombre_producto,marca,fecha_ingreso,fecha_vencimiento,cantidad,cantidad_minima,presentacion,precio,descripcion,codigo_grupo,codigo_proveedor) VALUES 
			  ('$nombre','$marca','$fecha_ingreso','$fecha_vencimiento','$cantidad','$cantidad_minima','$presentacion','$precio','$descripcion','$grupo','$proveedor')";
=======
	$presentacion	   = htmlentities(addslashes($_POST['presentacion']));
	$precio 	       = htmlentities(addslashes($_POST['precio']));
	$grupo 		       = htmlentities(addslashes($_POST['grupo']));
	$descripcion       = htmlentities(addslashes($_POST['descripcion'])); 
	$proveedor         = htmlentities(addslashes($_POST['proveedor']));

		if($cantidad>0){ 
		      $fecha_ingreso = DATE('d-m-Y');
			  $sqli_producto="INSERT INTO producto
			  (nombre_producto,marca,fecha_ingreso,fecha_vencimiento,cantidad,presentacion,precio,descripcion,codigo_grupo,codigo_proveedor) VALUES 
			  ('$nombre','$marca','$fecha_ingreso','$fecha_vencimiento','$cantidad','$presentacion','$precio','$descripcion','$grupo','$proveedor')";
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
				    $re = $linki->query($sqli_producto);
				          
				    if($linki->errno) die($linki->error);	    
				    if($re==true){      
				        echo '<script>alert("El Producto ha sido guardado Con Exito.");</script>';		       
				       	echo'<script type="text/javascript">
							window.location="index.php";
						 </script> ';         
				        }else{         
				        echo '<script>alert("Error al guardar el Producto.");</script>';  
				     }
				 }else{
<<<<<<< HEAD
			echo '<script>alert("La cantidad debe ser mayor a el Stock minimo.");</script>'; 
		    }
		  }else{
		  	echo '<script>alert("Debes Ingresar un Numero Diferente de Cero.");</script>'; 
		  } 
	 } 
=======
			echo '<script>alert("Debes Ingresar un Numero Diferente de Cero.");</script>'; 
		} 
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
?>