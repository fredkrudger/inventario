/* producto.js */
$(document).ready(function(){
	 $("#producto").validate({          
            rules: {
                nombre_producto:{
                    required : true,
                    minlength: 2,
                    maxlength: 70 
                },
               marca:{
                    required : true,
                    minlength: 2,
                    maxlength: 60 
                },
               fecha_vencimiento:{
                    required  : true,
                    minlength: 10, 
                    maxlength: 10 
                },
                presentacion:{                   
                    required  : true,  
                    minlength : 2,
                    maxlength : 30
                },
                precio:{
                    required  : true,
                    minlength : 2,
                    maxlength : 11
                },
                cantidad:{
                    required  : true,
                    minlength : 1,
                    maxlength : 8
                },
                descripcion:{
                    required  : true,
                    minlength : 4,
                    maxlength : 150
                },
                proveedor:{
                    required  : true,
                },
            }, 
			messages:{
                    nombre_producto:{
                        required  : '<b style="color:red">Debes Ingresar un nombre.</b>', 
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">El nombre excede de caracteres.</b>'
                    },
                   marca:{
                        required  : '<b style="color:red">Debes Ingresar una marca.</b>', 
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">La marca excede de caracteres.</b>'
                    }, 
                    fecha_vencimiento:{
                        required  : '<b style="color:red">Debes Ingresar una fecha.</b>',
                        minlength : '<b style="color:red">Ingresa la fecha completa</b>',
                        maxlength : '<b style="color:red">La fecha excede de digitos.</b>'
                    },
                    presentacion:{
                        required  : '<b style="color:red">Debes Ingresar la presentación del producto.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">La presentación excede de caracteres.</b>'
                    },
                    precio:{
                        required  : '<b style="color:red">Debes Ingresar el precio.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 2 digitos.</b>',
                        maxlength : '<b style="color:red">El precio excede de digitos.</b>'
                    },
                    cantidad:{
                        required  : '<b style="color:red">Debes Ingresar la cantidad.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 1 digito.</b>',
                        maxlength : '<b style="color:red">La cantidad excede de digitos.</b>'
                    },
                    descripcion:{
                        required  : '<b style="color:red">Debes Ingresar una descripción.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 4 digitos.</b>',
                        maxlength : '<b style="color:red">La descripción excede de caracteres.</b>'
                    },
                    proveedor:{
                        required  : '<b style="color:red">No hay Proveedor Registrado.</b>'
                    },
                },

         	submitHandler: function(form){
            var url = "guardar_producto.php";
                  $.ajax({
                   type: "POST",
                   url: url,
                   data: $("#producto").serialize(),
                   success: function(data)
                   {
                       $("#respuesta").html(data);

                   }
               });
            return false;
        	}
  
  });
 
    $("#results").load("lista_productos.php"); 
    $("#results").on( "click", ".paginacion a", function (e){
    e.preventDefault();
    $(".loading-div").show(); 
    var page = $(this).attr("data-page"); 
    $("#results").load("lista_productos.php",{"page":page}, function(){
      $(".loading-div").hide();
     });
    
   });

$("#editar_producto").validate({          
            rules: {
                nombre_producto:{
                    required : true,
                    minlength: 2,
                    maxlength: 70 
                },
               marca:{
                    required : true,
                    minlength: 2,
                    maxlength: 60 
                },
               fecha_vencimiento:{
                    required  : true,
                    minlength: 10, 
                    maxlength: 10 
                },
                presentacion:{                   
                    required  : true,  
                    minlength : 2,
                    maxlength : 30
                },
                precio:{
                    required  : true,
                    minlength : 2,
                    maxlength : 11
                },
                cantidad:{
                    required  : true,
                    minlength : 1,
                    maxlength : 8
                },
                descripcion:{
                    required  : true,
                    minlength : 4,
                    maxlength : 150
                },
                proveedor:{
                    required  : true,
                },
               fecha_ingreso:{
                    required  : true,
                    minlength: 10, 
                    maxlength: 10 
                },
            },
        messages:{
                    nombre_producto:{
                        required  : '<b style="color:red">Debes Ingresar un nombre.</b>', 
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">El nombre excede de caracteres.</b>'
                    },
                   marca:{
                        required  : '<b style="color:red">Debes Ingresar una marca.</b>', 
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">La marca excede de caracteres.</b>'
                    }, 
                    fecha_vencimiento:{
                        required  : '<b style="color:red">Debes Ingresar una fecha.</b>',
                        minlength : '<b style="color:red">Ingresa la fecha completa</b>',
                        maxlength : '<b style="color:red">La fecha excede de digitos.</b>'
                    },
                    presentacion:{
                        required  : '<b style="color:red">Debes Ingresar la presentación del producto.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">La presentación excede de caracteres.</b>'
                    },
                    precio:{
                        required  : '<b style="color:red">Debes Ingresar el precio.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 2 digitos.</b>',
                        maxlength : '<b style="color:red">El precio excede de digitos.</b>'
                    },
                    cantidad:{
                        required  : '<b style="color:red">Debes Ingresar la cantidad.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 1 digito.</b>',
                        maxlength : '<b style="color:red">La cantidad excede de digitos.</b>'
                    },
                    descripcion:{
                        required  : '<b style="color:red">Debes Ingresar una descripción.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 4 digitos.</b>',
                        maxlength : '<b style="color:red">La descripción excede de caracteres.</b>'
                    },
                    proveedor:{
                        required  : '<b style="color:red">No hay Proveedor Registrado.</b>'
                    },
                   fecha_ingreso:{
                        required  : '<b style="color:red">Debes Ingresar una fecha.</b>',
                        minlength : '<b style="color:red">Ingresa la fecha completa</b>',
                        maxlength : '<b style="color:red">La fecha excede de digitos.</b>'
                    },    
                },
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
            url:  "buscar_productos.php",
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
                    html+='' + json.data[datos].nombre_producto+'  -   ';
                            html+='Bs. ' + json.data[datos].precio+'       ';
                             
                            html+='<a style="margin-left:25px"  title="Ver Producto" class="btn btn-sm btn-default"     href="javascript:ver('+json.data[datos].codigo_producto+')"> Ver </a>  ';
                            html+='<a  title="Editar Producto" class="btn btn-sm btn-primary"  href="javascript:editar('+json.data[datos].codigo_producto+')"> Editar </a>  ';
                            html+='<a  title="Eliminar Producto" class="btn btn-sm btn-danger" href="javascript:eliminar('+json.data[datos].codigo_producto+')"> Eliminar</a>';

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

 }); 
 
function ver(id){
  var url = 'ver_productos.php';
    $.ajax({
      type: 'GET',
      url: url,
      data: 'id='+id,
      success: function(data){
       window.location="index.php?ver="+id;
      }
   });  
  } 
 
function editar(id){
  var url = 'editar_productos.php';
      $.ajax({
      type: 'GET',
      url: url,
      data: 'id='+id,
      success: function(data){
       window.location="index.php?editar="+id;
      }
   })    
}

function eliminar(id){ 
  var url = 'eliminar_productos.php';
  var pregunta = confirm('Si elimina el Producto, también se eliminaran todos los registros asociados al mismo. ¿Estas seguro que deseas eliminarlo?');
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