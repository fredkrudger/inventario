
<form autocomplete="off" id="respuesta_secret" method="POST">

  <div style="margin-top: -10px;" class="form-group col-md-12"><br>
    <label>
            Pregunta Secreta
    </label>
   <select name="pregunta_secreta" id="pregunta_secreta" class="form-control">
            <option value="¿Como Se Llama Tu Mejor Amigo?">¿Como Se Llama Tu Mejor Amigo?</option>
            <option value="¿Cual Es Tu Color Favorito?">¿Cual Es Tu Color Favorito?</option>       
            <option value="¿Nombre De Tu Mascota?">¿Nombre De Tu Mascota?</option>
            <option value="¿Lugar Donde Nacio Tu Abuelo?">¿Lugar Donde Nacio Tu Abuelo?</option>
            <option value="¿Cual Es Tu Equipo Preferido?">¿Cual Es Tu Equipo Preferido?</option>  
    </select>      
</div>

  
<div class="form-group col-md-12"> 
    <label>
            Respuesta Secreta
    </label>
    <input type="password" class="form-control" placeholder="Ingresa Tu Respuesta Secreta" name="respuesta_secreta" id="respuesta_secreta" required>
</div> 
 

<div class="form-group">  
        <div class="col-sm-12">   
          <input style="width: 35%" type="submit" name="verificar_respuesta" id="verificar_respuesta" class="btn btn-warning" value="Verificar Respuesta"> 
        </div>
    </div>
 
</form> 