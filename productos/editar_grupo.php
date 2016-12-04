
  <div class="col-sm-8 col-sm-offset-2">  <br>  <br>
	  <div>
		   <?php 
			if(isset($_POST["update"])!=""){
		    $grupo_id = $_GET["editar_grupo"];
		 	$grupo_new = $_POST["grupo_update"];
		 $sqli_grupo = "SELECT * FROM grupo WHERE  nombre_grupo='$grupo_new'";		
		    $res_grupo = $linki->query($sqli_grupo);				          
				    if($linki->errno) die($linki->error);
				    $row = $res_grupo->fetch_assoc(); 	    
				    $grupobd=$row["nombre_grupo"];
				    $gruid=$row["codigo_grupo"];
				    if($grupo_new==$grupobd){

				    echo '<div class="form-group"> 
						  <div>
						    <div align="center" class="alert alert-success" role="alert">
						    <b>Actualizado...</b></div>         
							  </div>
					    </div>';
				     echo '<meta http-equiv="refresh" content="0;url=index.php?grupos">'; 
				  }else{
				       if($grupo_new!=$grupobd){

		 $updates_grupo="UPDATE grupo SET nombre_grupo='$grupo_new' WHERE codigo_grupo='$grupo_id'";
		 $result_updates = $linki->query($updates_grupo);
				          
				    if($linki->errno) die($linki->error);	    
				    if($result_updates==true){     	

				 echo '<div class="form-group"> 
				     <div>
					   <div align="center" class="alert alert-success" role="alert">
				       <b> Grupo Actualizado Correctamente </b></div>         
					  </div>
			      </div>';
				   echo '<meta http-equiv="refresh" content="0;url=index.php?grupos">';     
				}else{         
				  echo '<script>alert("Error al guardar el Grupo.");</script>';  
			    }  
			  }
		     }	
 
			}
			?>
	   </div>
	  <div class="panel panel-default">
	  <div class="panel-heading">
	    <h4 class="panel-title">Editar Cremas</h4>
	  </div>
	  <div  class="panel-body">
	   <form id="grupoform"  method="POST" autocomplete="off">
	  <div class="col-sm-8">
	  	<?php 
	  	  $grupoid = $_GET["editar_grupo"];
		  $sqli_g = "SELECT * FROM grupo WHERE codigo_grupo='$grupoid'";	
		  $res_g = $linki->query($sqli_g);				          
				    if($linki->errno) die($linki->error);
				    $rows = $res_g->fetch_assoc(); 	    
				    $gid=$rows["codigo_grupo"];
				    if($rows==true){
			  		$nameg=$rows["nombre_grupo"];
		 ?>
	    <div class="form-group">
          <input type="text" class="form-control" id="grupo_update" maxlength="100" name="grupo_update" value="<?php echo $nameg; ?>" placeholder="Ingresa el Grupo">
        </div>
        <?php 
           }else{
           	 header("location: index.php?grupos");
           } 
         ?>
	 	</div> 
	   <div class="col-sm-4">
		 <button type="submit" name="update" id="update" class="btn btn-success">Actualizar Grupo</button>
	   </div>
	  </form>
	  </div>
  	 </div>
  	</div>