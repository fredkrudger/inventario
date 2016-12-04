<?php
  require("../db/config.php");
  $ubi_select=$_GET["idestado"];
   $wsqli ="select * from ciudades 
    inner join ubicacion on ubicacion.id_ubicacion=ciudades.id_ubicacion
     where ubicacion.id_ubicacion='$ubi_select'";
     $result=$linki->query($wsqli);
       while($rows=$result->fetch_array()){
           $idc=$rows['id_ciudad'];
           $nc=$rows['ciudad'];   
       ?>
         <option id="city" name="city" value="<?php echo $idc; ?>">
            <?php echo $nc; ?>
         </option>
    <?php
      }  
?>
