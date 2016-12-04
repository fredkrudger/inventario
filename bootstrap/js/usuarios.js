/* usuarios.js */
$(document).ready(function(){ 
	    $("#cuenta_nueva").validate({          
            rules: {
                nombre:{
                    required : true,
                    minlength: 2,
                    maxlength: 90 
                },
                numero_documento:{
                    required  : true,
                    minlength : 7,
                    maxlength : 8
                },
                direccion:{
                    required  : true,
                    minlength : 4,
                    maxlength : 200
                },
                
                codigo_telefono:{
                    required  : true,
                    minlength : 4,
                    maxlength : 4
                }, 
                numero_telefono:{
                    required  : true,
                    minlength : 7,
                    maxlength : 7
                },
                correo:{                    
                    required  : true,
                    email     : true,
                    minlength : 4,
                    maxlength : 100
                },
                clave:{
                    required  : true,
                    minlength : 6,
                    maxlength : 10
                },
                respuesta_secreta:{
                    required  : true,
                    minlength : 2,
                    maxlength : 150
                },                     
            }, 
            messages:{
                    nombre:{
                        required  : '<b style="color:red">Debes Ingresar un nombre.</b>', 
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">El nombre excede de caracteres.</b>'
                    },
                    numero_documento:{
                        required  : '<b style="color:red">Debes Ingresar una cedula.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 7 digitos.</b>',
                        maxlength : '<b style="color:red">cedula excede de digitos.</b>'
                    },
                    direccion:{
                        required  : '<b style="color:red">Debes Ingresar una dirección.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 4 caracteres.</b>',
                        maxlength : '<b style="color:red">La dirección excede de caracteres.</b>'
                    },
                    correo:{
                        email     : '<b style="color:red">Ingresa un Correo Valido.</b>',
                        required  : '<b style="color:red">Debes Ingresar un Correo.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 4 caracteres.</b>',
                        maxlength : '<b style="color:red">El Correo excede de caracteres.</b>'
                    },
                    codigo_telefono:{
                        required  : '<b style="color:red">Debes Ingresar el codigo.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 4 digitos.</b>',
                        maxlength : '<b style="color:red">El codigo excede de digitos.</b>'
                    },
                    numero_telefono:{
                        required  : '<b style="color:red">Debes Ingresar un telefono.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 7 digitos.</b>',
                        maxlength : '<b style="color:red">El telefono excede de digitos.</b>'
                    },
                    clave:{
                        required  : '<b style="color:red">Debes ingresar una contraseña.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 6 caracteres.</b>',
                        maxlength : '<b style="color:red">La contraseña excede de caracteres.</b>'
                    },
                    respuesta_secreta:{
                        required  : '<b style="color:red">Debes ingresar la respuesta secreta.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">La Respuesta secreta excede de caracteres.</b>'
                    }, 
                },

            submitHandler: function(form){
             var url = "guardar_usuarios.php";
                  $.ajax({
                   type: "POST",
                   url: url,
                   data: $("#cuenta_nueva").serialize(),
                   success: function(data)
                   {
                      $("#respuesta").html(data);
                   }
               });
            return false;
            }

       });
 
    $("#results").load( "lista_usuarios.php"); 
    $("#results").on( "click", ".paginacion a", function (e){
    e.preventDefault();
    $(".loading-div").show(); 
    var page = $(this).attr("data-page"); 
    $("#results").load("lista_usuarios.php",{"page":page}, function(){ 
      $(".loading-div").hide();
    });
  });

        $("#editar_usuarios").validate({          
            rules: {
                nombre:{
                    required : true,
                    minlength: 2,
                    maxlength: 90 
                },
                numero_documento:{
                    required  : true,
                    minlength : 7,
                    maxlength : 8
                },
                direccion:{
                    required  : true,
                    minlength : 4,
                    maxlength : 200
                },
                
                codigo_telefono:{
                    required  : true,
                    minlength : 4,
                    maxlength : 4
                }, 
                numero_telefono:{
                    required  : true,
                    minlength : 7,
                    maxlength : 7
                },
                correo:{                    
                    required  : true,
                    email     : true,
                    minlength : 4,
                    maxlength : 100
                },                     
            }, 
            messages:{
                    nombre:{
                        required  : '<b style="color:red">Debes Ingresar un nombre.</b>', 
                        minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
                        maxlength : '<b style="color:red">El nombre excede de caracteres.</b>'
                    },
                    numero_documento:{
                        required  : '<b style="color:red">Debes Ingresar una cedula.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 7 digitos.</b>',
                        maxlength : '<b style="color:red">cedula excede de digitos.</b>'
                    },
                    direccion:{
                        required  : '<b style="color:red">Debes Ingresar una dirección.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 4 caracteres.</b>',
                        maxlength : '<b style="color:red">La dirección excede de caracteres.</b>'
                    },
                    correo:{
                        email     : '<b style="color:red">Ingresa un Correo Valido.</b>',
                        required  : '<b style="color:red">Debes Ingresar un Correo.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 4 caracteres.</b>',
                        maxlength : '<b style="color:red">El Correo excede de caracteres.</b>'
                    },
                    codigo_telefono:{
                        required  : '<b style="color:red">Debes Ingresar el codigo.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 4 digitos.</b>',
                        maxlength : '<b style="color:red">El codigo excede de digitos.</b>'
                    },
                    numero_telefono:{
                        required  : '<b style="color:red">Debes Ingresar un telefono.</b>',
                        minlength : '<b style="color:red">Ingresa al menos 7 digitos.</b>',
                        maxlength : '<b style="color:red">El telefono excede de digitos.</b>'
                    },
                }
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

	}); 
 
function ver(id){
  var url = 'ver_usuarios.php';
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
  var url = 'editar_usuarios.php';
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
  var url = 'eliminar_usuarios.php';
  var pregunta = confirm('¿Estas seguro que deseas eliminar el usuario?');
   if(pregunta==true){
    $.ajax({
           type: "POST",
           url: url,
           data:'id='+id, 
           success: function(data)
           {
            window.location="index.php";
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
 
var patron = new Array(8,1)
function rif_cedula(d,sep,pat,nums){
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