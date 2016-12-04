<?php //lista_proveedores.php
<<<<<<< HEAD
    session_start();
=======
 
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	require("../db/config.php"); 

if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){	

	   $item_per_page = 6; 
	   $sql_contar  = "SELECT count(*) AS val  FROM proveedor    
 		inner join telefono on telefono.id_telefono=proveedor.id_telefono
 		inner join ubicacion on ubicacion.id_ubicacion=proveedor.id_ubicacion
<<<<<<< HEAD
        inner join ciudades on ciudades.id_ciudad=proveedor.id_ciudad
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
 		inner join rif_cedula on rif_cedula.id_rif_cedula=proveedor.id_rif_cedula  ";
 		$contar_resultado = $linki->query($sql_contar);
 		if($linki->errno) die ($linki->error);
 		$assoc1  = $contar_resultado->fetch_assoc();
 		$val = $assoc1["val"]; 
 		if($val > 0){ 
		
	if(isset($_POST["page"])){
		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); 
		if(!is_numeric($page_number)){die('El numero de la pagina es invalido');} 
	}else{
		$page_number = 1; 
	}
 	
	$results = $linki->query("SELECT COUNT(*) FROM proveedor");
	$get_total_rows = $results->fetch_row(); 
    $get_total_rows;
	
	$total_pages = ceil($get_total_rows[0]/$item_per_page);
	
	$page_position = (($page_number-1) * $item_per_page);
	 
	$results = $linki->prepare("SELECT codigo_proveedor, nombre_proveedor, ciudad,estado,codigo_telefono,numero_telefono,tipo_documento,numero_documento FROM proveedor    
 		inner join telefono on telefono.id_telefono=proveedor.id_telefono
 		inner join ubicacion on ubicacion.id_ubicacion=proveedor.id_ubicacion
<<<<<<< HEAD
        inner join ciudades on ciudades.id_ciudad=proveedor.id_ciudad
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
 		inner join rif_cedula on rif_cedula.id_rif_cedula=proveedor.id_rif_cedula 
    	ORDER BY proveedor.codigo_proveedor
	DESC LIMIT $page_position, $item_per_page");
	$results->execute(); 
	$results->bind_result($codigo_proveedor,$nombre_proveedor,$ciudad,$estado,$codigo_telefono,$numero_telefono,$tipo_documento,$numero_documento);
	
	while($results->fetch()){ 
    ?>

  <div class="col-sm-6">
  <div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title"><?php echo $nombre_proveedor;?></h4>
  </div>
  <div align="center" class="panel-body">
      
     <form id="id_proveedor">
		    <h4><?php echo $estado." - ".$ciudad; ?></h4>    
	        <h4><?php echo $tipo_documento." - ".$numero_documento; ?></h4>  
	        
	  <div class="col-md-12">
	     <p style="margin-top:5px"> 
	    <a  title="Ver Proveedor" class="btn btn-default" name="ver" id="ver" role="button" href="javascript:ver(<?php echo $codigo_proveedor;?>)"> Ver</a>  
<<<<<<< HEAD
        <?php if(isset($_SESSION["admin"])){  ?>
	    <a title="Editar Proveedor" class="btn btn-primary" name="editar" id="editar" role="button" href="javascript:editar(<?php echo $codigo_proveedor; ?>)"> Editar</a> 

	    <a title="Eliminar Proveedor" class="btn btn-danger" name="eliminar" id="eliminar" role="button" href="javascript:eliminar(<?php echo $codigo_proveedor; ?>)"> Eliminar</a>
        <?php } ?>
=======

	    <a title="Editar Proveedor" class="btn btn-primary" name="editar" id="editar" role="button" href="javascript:editar(<?php echo $codigo_proveedor; ?>)"> Editar</a> 

	    <a title="Eliminar Proveedor" class="btn btn-danger" name="eliminar" id="eliminar" role="button" href="javascript:eliminar(<?php echo $codigo_proveedor; ?>)"> Eliminar</a>
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
 			</p>
	    </div>
	  </form>
	</div>  
 </div>
</div>

<?php		
	}

	echo '<div class="col-sm-12" align="center">';
	echo paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
	echo '</div>';

 }else{  ?>

   <br>
	   <div class="jumbotron">		   
		  <h2 align="center"> Actualmente no hay proveedores registrados. <br><br> Para ingresar uno solo presione el boton <b>Nuevo Proveedor</b>
	      </h2> 		 
	  </div>

<?php
 }	
} 

function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ 
        $pagination .= '<ul class="paginacion">';
        
        $right_links    = $current_page + 3; 
        $previous       = $current_page - 3; 
        $next           = $current_page + 1; 
        $first_link     = true; 
        
        if($current_page > 1){
            $pagination .= '<li class="first"><a href="#" data-page="1" title="Primera">&laquo;</a></li>'; 
                for($i = ($current_page-2); $i < $current_page; $i++){ 
                    if($i > 0){
                        $pagination .= '<li><a href="#" data-page="'.$i.'" title="Pagina '.$i.'">'.$i.'</a></li>';
                    }
                }   
            $first_link = false;
        }
        
        if($first_link){
            $pagination .= '<li class="first active">'.$current_page.'</li>';
        }elseif($current_page == $total_pages){ 
            $pagination .= '<li class="last active">'.$current_page.'</li>';
        }else{
            $pagination .= '<li class="active">'.$current_page.'</li>';
        }
                
        for($i = $current_page+1; $i < $right_links ; $i++){ 
            if($i<=$total_pages){
                $pagination .= '<li><a href="#" data-page="'.$i.'" title="Pagina '.$i.'">'.$i.'</a></li>';
            }
        }
        if($current_page < $total_pages){ 
	
                $pagination .= '<li class="last"><a href="#" data-page="'.$total_pages.'" title="Ultima">&raquo;</a></li>'; 
        }
        
        $pagination .= '</ul>'; 
    }
    return $pagination;
 }
?>
 

