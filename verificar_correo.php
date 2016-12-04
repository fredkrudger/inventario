 
<form autocomplete="off" id="validar_correo" method="POST">

 
  <div style="margin-bottom: -11px;" class="form-group col-md-12"><br> 
    <label>
            Correo
    </label> 

    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="correo" name="correo" placeholder="ejemplo@prueba.com" required>  <br>   
 </div>
 

 <div class="form-group">  
        <div class="col-sm-12"> <br>  
          <input style="width: 35%" type="submit" name="verificar_email" id="verificar_email" class="btn btn-warning" value="Verificar Correo"> 
        </div>
    </div>
</form>