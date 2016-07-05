<?php //lista_productos.php

	require("../db/config.php"); 
 
if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){	

	 $item_per_page = 6;  
	 
	 $sql_contar1  = "SELECT count(*) AS valor  FROM producto    
 	 inner join proveedor on proveedor.codigo_proveedor=producto.codigo_proveedor
 	 inner join grupo on grupo.codigo_grupo=producto.codigo_grupo";
 		$contar_resultado1 = $linki->query($sql_contar1);
 		if($linki->errno) die ($linki->error);
 		$assoc1  = $contar_resultado1->fetch_assoc();
 	    $val = $assoc1["valor"]; 
 		if($val > 0){ 
		
	if(isset($_POST["page"])){
		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
		if(!is_numeric($page_number)){die('El numero de la pagina es invalido');}
	}else{
		$page_number = 1; 
	}
 	
    $results = $linki->query("SELECT count(*) FROM producto");
	$get_total_rows = $results->fetch_row(); 
    $get_total_rows;
	
	$total_pages = ceil($get_total_rows[0]/$item_per_page);
	
	$page_position = (($page_number-1) * $item_per_page);
	
	$results = $linki->prepare("SELECT codigo_producto,nombre_producto,marca,codigo_grupo,codigo_proveedor,precio,presentacion,cantidad,fecha_ingreso FROM producto 
    	ORDER BY producto.codigo_producto
	DESC LIMIT $page_position, $item_per_page");
	$results->execute(); 
	$results->bind_result($codigo_producto,$nombre_producto,$marca,$codigo_grupo,$codigo_proveedor,$precio,$presentacion,$cantidad,$fecha_ingreso);
	
	while($results->fetch()){
    ?>

  <div class="col-sm-6">
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h4 class="panel-title"><?php echo $nombre_producto;?></h4>
  </div>
  <div align="center" class="panel-body">
      
     <form id="id_producto">
		    <h4><?php echo $cantidad." - ".$presentacion; ?></h4>    
	        <h4><?php echo "Bs. ".$precio; ?></h4>  
	        
	  <div class="col-md-12">
	     <p style="margin-top:5px"> 
	    <a  title="Ver Producto" class="btn btn-default" name="ver" id="ver" role="button" href="javascript:ver(<?php echo $codigo_producto;?>)"> Ver</a>  

	    <a title="Editar Producto" class="btn btn-primary" name="editar" id="editar" role="button" href="javascript:editar(<?php echo $codigo_producto; ?>)"> Editar</a> 

	    <a title="Eliminar Producto" class="btn btn-danger" name="eliminar" id="eliminar" role="button" href="javascript:eliminar(<?php echo $codigo_producto; ?>)">Eliminar</a>
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
		  <h2 align="center"> Actualmente no hay productos registrados. <br><br> Para ingresar uno solo presione el boton <b>Nuevo Producto</b>
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