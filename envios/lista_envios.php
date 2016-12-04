<<<<<<< HEAD
<?php //lista_envios.php
	session_start();	
=======
<?php //lista_envios.php	
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	require("../db/config.php"); 

if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){	

	$item_per_page = 10;  
	   
	 $sql_contar1  = "SELECT count(*) AS valor  FROM envio";
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
    $results = $linki->query("SELECT count(*) FROM envio");
	$get_total_rows = $results->fetch_row(); 
    $get_total_rows;
	
	$total_pages = ceil($get_total_rows[0]/$item_per_page);
	
	$page_position = (($page_number-1) * $item_per_page);

	$results = $linki->prepare("SELECT id_envio,fecha_envio,codigo_cliente,cantidad_enviada 
		FROM envio
    	ORDER BY id_envio
<<<<<<< HEAD
	DESC LIMIT $page_position, $item_per_page");
=======
	ASC LIMIT $page_position, $item_per_page");
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	$results->execute(); 
	$results->bind_result($id_envio,$fecha_envio,$codigo_cliente,$cantidad_enviada);

	?>
<<<<<<< HEAD

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	  <div class="col-sm-12">
		  <div class="panel panel-primary">
		  <div class="panel-heading">
		    <h4 class="panel-title">Listado de Envios Realizados</h4>
		  </div>
<<<<<<< HEAD
	    <div  class="panel-body">
	    <div class="table-responsive">

	    <div style="margin-bottom: 10px" class="col-sm-12">   
          <a target="_blank" id="reporte"  name="reporte" href="reporte.php" class="btn btn-info">Generar Reporte <b>PDF</b></a>
        </div>

=======
	    <div align="center" class="panel-body">
	    <div class="table-responsive">
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	   <table align="center" class="table table-striped">
		 <thead >
			<tr align="center">
			  <th></th>
			  <th>Codigo de Envio</th>
			  <th>Cantidad Enviada</th>
			  <th>Fecha de Envio</th>
			  <th>Opciones</th>
			 </tr>
		  </thead>
	<?php
	while($results->fetch()){ 
    ?>
	<form id="id_producto">
	  <tbody>
	  <tr>
	      <th></th>
	      <th scope="row"><?php echo $id_envio; ?></th>
		  <td><?php echo $cantidad_enviada; ?></td>
		  <td><?php echo $fecha_envio; ?></td>
		  <td>
		  	<div class="col-md-12">
		    <a  title="Detalles de Envio" class="btn btn-default" name="ver" id="ver" role="button" href="javascript:ver(<?php echo $id_envio;?>)"> Detalles</a>  
<<<<<<< HEAD
			<?php if(isset($_SESSION["admin"])){  ?>
		    <a title="Eliminar Envio" class="btn btn-danger" name="eliminar" id="eliminar" role="button" href="javascript:eliminar(<?php echo $id_envio; ?>)">Eliminar</a>
		    <?php } ?>
=======

		    <a title="Eliminar Envio" class="btn btn-danger" name="eliminar" id="eliminar" role="button" href="javascript:eliminar(<?php echo $id_envio; ?>)">Eliminar</a>
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	    	</div>
		  </td>
	    </tr>
	  </tbody> 
	</form>
<?php
	}
 ?>
   </table> 
   </div> 
  </div>  
 </div>
</div>
<?php
	echo '<div class="col-sm-12" align="center">';
	echo paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
<<<<<<< HEAD
	echo '<br></div>';
=======
	echo '</div>';
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
 }else{  ?>
   <br>
	   <div class="jumbotron">		   
		  <h2 align="center"> Actualmente no hay Envios Guardados. <br><br> Para Insertar uno solo presione el boton <b>Nuevo Envio</b>
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