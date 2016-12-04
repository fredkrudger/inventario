<?php //listado_grupos.php

	require("../db/config.php");
 
if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){	

	 $item_per_page = 6;  
	 
	 $sql_contar  = "SELECT count(*) AS valor  FROM grupo";
 		$contar_resultado = $linki->query($sql_contar);
 		if($linki->errno) die ($linki->error);
 		$assoc1  = $contar_resultado->fetch_assoc();
 	    $val = $assoc1["valor"]; 
 		if($val > 0){ 
		
	if(isset($_POST["page"])){
		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
		if(!is_numeric($page_number)){die('El numero de la pagina es invalido');}
	}else{
		$page_number = 1; 
	}
	?>
 
	  <div class="col-sm-12">
	  <div class="panel panel-primary">
	  <div class="panel-heading">
	    <h4 class="panel-title">Grupos Registrados</h4>
	  </div>
	  <div align="center" class="panel-body">
	  	<table class="table table-hover">
	    <thead>
	      <tr>
	        <th></th>
	        <th>#</th>
	        <th></th>
	        <th>Nombre </th>
	        <th>Opciones</th>
	      </tr>
	    </thead>
 
 	<?php
    $results = $linki->query("SELECT count(*) FROM grupo");
	$get_total_rows = $results->fetch_row(); 
    $get_total_rows;
	
	$total_pages = ceil($get_total_rows[0]/$item_per_page);
	
	$page_position = (($page_number-1) * $item_per_page);
	
	$results = $linki->prepare("SELECT codigo_grupo,nombre_grupo FROM grupo 
    	ORDER BY grupo.codigo_grupo
	DESC LIMIT $page_position, $item_per_page");
	$results->execute(); 
	$results->bind_result($codigo_grupo,$nombre_grupo);
	
	while($results->fetch()){
    ?>
    <tbody>
   
      <tr>
        <td></td>
        <td><?php echo $codigo_grupo;?></td>
        <td></td>
        <td><?php echo $nombre_grupo;?></td>
        <td>
  
    	 <a type="submit" title="Editar Grupo" class="btn btn-warning" name="editar" id="editargru" role="submit" href="javascript:editarGrupo(<?php echo $codigo_grupo; ?>)" >  Editar</a>  

	   	  <a title="Eliminar Grupo" class="btn btn-danger" name="eliminar" id="eliminargru" role="button" href="javascript:eliminarGrupo(<?php echo $codigo_grupo; ?>)">Eliminar</a>
	   	  
        </td>
      </tr>
 
    </tbody>
 
<?php

		
	}
?>

  </table>  	
  </div>
  </div>
  </div>
<?php

	echo '<div style="margin-bottom:10px" class="col-sm-12" align="center">';
	echo paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
	echo '</div>';
    
 }else{  ?>

   <br>
	   <div class="jumbotron">		   
		  <h2 align="center"> Actualmente no hay Grupos registrados. <br><br> Para ingresar uno presiona el boton <b>Agregar</b>
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