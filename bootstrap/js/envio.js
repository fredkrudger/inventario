/* envio.js */
$(document).ready(function(){
	 $("#envio").validate({          
            rules: {
                nombre_producto:{
                    required : true,
                    minlength: 2,
                    maxlength: 70 
                },
               fecha_envio:{
                    required  : true,
                    minlength: 10, 
                    maxlength: 10 
                },
                presentacion:{                   
                    required  : true,  
                    minlength : 2,
                    maxlength : 30
                },
                cantidad:{
                    required  : true,
                    minlength : 1,
                    maxlength : 8
                },
                cliente:{
                    required  : true,
                },
            }, 
			messages:{
                    nombre_producto:{
                        required  : '<b style="color:red">Debes Ingresar un nombre.</b>', 
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">El nombre excede de caracteres.</b>'
                    },
                    fecha_envio:{
                        required  : '<b style="color:red">Debes Ingresar una fecha.</b>',
                        minlength : '<b style="color:red">Ingresa la fecha completa</b>',
                        maxlength : '<b style="color:red">La fecha excede de digitos.</b>'
                    },
                    presentacion:{
                        required  : '<b style="color:red">Debes Ingresar la presentación del producto.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">La presentación excede de caracteres.</b>'
                    },
                    cantidad:{
                        required  : '<b style="color:red">Debes Ingresar la cantidad.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 1 digito.</b>',
                        maxlength : '<b style="color:red">La cantidad excede de digitos.</b>'
                    },
                    cliente:{
                        required  : '<b style="color:red">No hay Cliente Registrado.</b>'
                    },
                },

         	submitHandler: function(form){
            var url = "guardar_envios.php";
                  $.ajax({
                   type: "POST",
                   url: url,
                   data: $("#envio").serialize(),
                   success: function(data)
                   {
                       $("#respuesta").html(data);

                   }
               });
            return false;
        }
  });
 
    $("#results").load("lista_envios.php"); 
    $("#results").on( "click", ".paginacion a", function (e){
    e.preventDefault();
    $(".loading-div").show(); 
    var page = $(this).attr("data-page"); 
    $("#results").load("lista_envios.php",{"page":page}, function(){
      $(".loading-div").hide();
     });
   });

     $.fn.delayPasteKeyUp = function(fn, ms)
    {
        var timer = 0;
        $(this).on("keyup paste", function()
        {
            clearTimeout(timer);
            timer = setTimeout(fn, ms);
        });
    }; 
    var autocompletar;
    $("#autocomplete").delayPasteKeyUp(function()
    {
        autocompletar = $("#autocomplete").val();

        if (autocompletar!="") {
        $.ajax({
          type: "POST",
            url:  "buscar_envios.php",
            data: "autocomplete="+autocompletar,
            success: function(data)
            { 
              if(data)
              {
                var json = JSON.parse(data),
                  html = '<ul class="list-group">';
                if(json.res == 'full')
                {
                  for(datos in json.data)
                  {
                    html+='<li style="background:#E3E3E3;border:solid 1px #333" class="list-group-item">';
                            html+='<div class="caption">';
                    html+='<h4 class="list-group-item-heading">';                       
                    html+='' + json.data[datos].cantidad_enviada+'  -   ';
                            html+='' + json.data[datos].fecha_envio+'       ';
                             
                            html+='<a style="margin-left:25px"  title="Ver Detalles" class="btn btn-sm btn-default" href="javascript:ver('+json.data[datos].id_envio+')"> Detalles </a>  ';
<<<<<<< HEAD
                            if(json.rol == 1)
                              {                            
                            html+='<a style="margin-left:5px" title="Eliminar Envio" class="btn btn-sm btn-danger" href="javascript:eliminar('+json.data[datos].id_envio+')"> Eliminar</a>';
                              }
=======
                            html+='<a  title="Eliminar Envio" class="btn btn-sm btn-danger" href="javascript:eliminar('+json.data[datos].id_envio+')"> Eliminar</a>';

>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
                            html+='</h4></div>';

                    html+='</li>';

                  }
                }
                  else
                {
                html+='<li style="background:#E3E3E3;border:solid 1px #333" class="list-group-item">';
                html+='<h4 class="list-group-item-heading">No se encontraron resultados de la busqueda </h4>';
                html+='</li>'; 
                }  
                 html+='</ul>';
                     
                 $("#busqueda").html("").append(html); 
              }
            } 
        });

        }else{

           $("#busqueda").html("");
        }

    }, 500 );

<<<<<<< HEAD

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
 $.fn.delayPasteKeyUp = function(fn, ms)
    {
        var timer = 0;
        $(this).on("keyup paste", function()
        {
            clearTimeout(timer);
            timer = setTimeout(fn, ms);
        });
    }; 
    var producto;
    $("#buscar").delayPasteKeyUp(function()
    {
        producto = $("#buscar").val();

        if (producto!="") {
        $.ajax({
          type: "POST",
            url:  "buscar_productos_envios.php",
            data: "buscar="+producto,
            success: function(data)
            { 
              if(data)
              {
                var json = JSON.parse(data),
                  html = '<ul class="list-group">';
                if(json.res == 'full')
                {
                  for(datos in json.data)
                  {
                    html+='<li style="background:#E3E3E3;border:solid 1px #333" class="list-group-item">';
                            html+='<div class="caption">';
                    html+='<h4 class="list-group-item-heading">';                       
                    html+='' + json.data[datos].nombre_producto+'  -   ';
                            html+='' + json.data[datos].marca+'       ';                             
                            html+='<a style="margin-left:25px"   class="btn btn-sm btn-default"     href="javascript:envio('+json.data[datos].codigo_producto+')"> Aceptar </a>  ';
                            html+='</h4></div>';
                    html+='</li>';

                  }
                }
                  else
                {
                html+='<li style="background:#E3E3E3;border:solid 1px #333" class="list-group-item">';
                html+='<h4 class="list-group-item-heading">No se encontraron resultados de la busqueda </h4>';
                html+='</li>'; 
                }  
                 html+='</ul>';
                     
                 $("#resultado").html("").append(html); 
              }
            } 
        });

        }else{

           $("#resultado").html("");
        }
    }, 500 );
 }); 

 function envio(id){
  var url = 'insertar_envios.php';
    $.ajax({
      type: 'GET',
      url: url,
      data: 'id='+id,
      success: function(data){
       window.location="index.php?producto="+id;
      }
   });  
  } 

function ver(id){
  var url = 'ver_envios.php';
    $.ajax({
      type: 'GET',
      url: url,
      data: 'id='+id,
      success: function(data){
       window.location="index.php?ver="+id;
      }
   });  
  } 

function eliminar(id){ 
  var url = 'eliminar_envios.php';
  var pregunta = confirm('¿Estas seguro que deseas eliminar el Envio?');
   if(pregunta==true){
    $.ajax({
           type: "POST",
           url: url,
           data:'id='+id, 
           success: function()
           {
           window.location="index.php"
           }
        });
    }
} 

 function isNumberKey(evt){ 
      
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
}
 
var patron = new Array(2,2,4)
function fecha(d,sep,pat,nums){
if(d.valant != d.value){
  val = d.value
  largo = val.length
  val = val.split(sep)
  val2 = ''
  for(r=0;r<val.length;r++){
    val2 += val[r]  
  }
  if(nums){
    for(z=0;z<val2.length;z++){
      if(isNaN(val2.charAt(z))){
        letra = new RegExp(val2.charAt(z),"g")
        val2 = val2.replace(letra,"")
      }
    }
  }
  val = ''
  val3 = new Array()
  for(s=0; s<pat.length; s++){
    val3[s] = val2.substring(0,pat[s])
    val2 = val2.substr(pat[s])
  }
  for(q=0;q<val3.length; q++){
    if(q ==0){
      val = val3[q]
    }
    else{
      if(val3[q] != ""){
        val += sep + val3[q]
        }
    }
  }
  d.value = val
  d.valant = val
  }
}