  <script type="text/javascript">   
    /* validar.js */ 
<<<<<<< HEAD

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
    $(document).ready(function() {
           
        $("#formulario").validate({          
        rules: {         
        
<<<<<<< HEAD
       correo : {
         email : true,
         required : true,
         minlength : 4,  
         maxlength : 100  
         },
       clave : {
         required : true,
         minlength : 6,  
         maxlength : 10  
         }         
        },
       messages : {
        correo:{
          email     : '<b style="color:red">Ingresa un Correo Valido.</b>',
          required  : '<b style="color:red">Debes Ingresar un Correo.</b>',
          minlength : '<b style="color:red">Ingresa al menos 4 caracteres.</b>',
          maxlength : '<b style="color:red">El Correo excede de caracteres.</b>'
         },
         clave : {
         required  : '<div><b style="color:red">Debes Ingresar una contraseña.</b></div>' ,
         minlength : '<div><b style="color:red">La contraseña debe tener al menos 6 caracteres.</b></div>',
=======
       usuario : {
         required : true,
         minlength : 5,  
         maxlength : 15  
         },
       clave : {
         required : true,
         minlength : 5,  
         maxlength : 15  
         }         
        },
       messages : {
         usuario : {
         required  : '<div><b style="color:red">Debes Ingresar un usuario.</b></div> ',
         minlength : '<div><b style="color:red">El usuario debe tener al menos 5 caracteres.</b></div>',        
         maxlength : '<div><b style="color:red">El usuario excede de caracteres.</b></div>'  
         },
         clave : {
         required  : '<div><b style="color:red">Debes Ingresar una contraseña.</b></div>' ,
         minlength : '<div><b style="color:red">La contraseña debe tener al menos 5 caracteres.</b></div>',
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
         maxlength : '<div><b style="color:red">La contraseña excede de caracteres.</b></div>'
         }
         }        
      });
<<<<<<< HEAD


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


  $("#validar_correo").validate({          
       rules: {         
         correo : {
         email : true,
         required : true,
         minlength : 4,  
         maxlength : 100  
         },         
        },
       messages : {
        correo:{
          email     : '<b style="color:red">Ingresa un Correo Valido.</b>',
          required  : '<b style="color:red">Debes Ingresar un Correo.</b>',
          minlength : '<b style="color:red">Ingresa al menos 4 caracteres.</b>',
          maxlength : '<b style="color:red">El Correo excede de caracteres.</b>'
         },
         },

         submitHandler: function(form){
            var url = "verificar_datos.php";
                  $.ajax({
                   type: "POST",
                   url: url,
                   data: $("#validar_correo").serialize(),
                   success: function(data)
                   {  
                    $("#respuesta").html(data);
                   }
               });
            return false;
            }
      });


  $("#respuesta_secret").validate({          
       rules: {         
   
       respuesta_secreta:{
           required  : true,
           minlength : 2,
           maxlength : 150
         },         
        },
       messages : {
  
         respuesta_secreta:{
          required  : '<b style="color:red">Debes ingresar la respuesta secreta.</b>',
          minlength : '<b style="color:red">Ingresa al menos 2 caracteres.</b>',
          maxlength : '<b style="color:red">La Respuesta secreta excede de caracteres.</b>'
          }, 
         },

         submitHandler: function(form){
            var url = "verificar_datos.php";
                  $.ajax({
                   type: "POST",
                   url: url,
                   data: $("#respuesta_secret").serialize(),
                   success: function(data)
                   {  
                    $("#respuesta").html(data);
                   }
               });
            return false;
            }
 
      });


  $("#nueva_clave").validate({          
       rules: {         
   
       clave:{
           required  : true,
           minlength : 6,
           maxlength : 10
         },
       r_clave:{
           required  : true,
           minlength : 6,
           maxlength : 10
         },         
        },
       messages : {
  
         clave:{
          required  : '<b style="color:red">Debes ingresar la contraseña.</b>',
          minlength : '<b style="color:red">Ingresa al menos 6 caracteres.</b>',
          maxlength : '<b style="color:red">La contraseña excede de caracteres.</b>'
          },

         r_clave:{
          required  : '<b style="color:red">Confirma la contraseña.</b>',
          minlength : '<b style="color:red">Ingresa al menos 6 caracteres.</b>',
          maxlength : '<b style="color:red">La contraseña excede de caracteres.</b>'
          }, 
            
         },

         submitHandler: function(form){
            var url = "verificar_datos.php";
                  $.ajax({
                   type: "POST",
                   url: url,
                   data: $("#nueva_clave").serialize(),
                   success: function(data)
                   {  
                    $("#respuesta").html(data);
                   }
               });
            return false;
            }
 
      });


    });//end

  function isNumberKey(evt){   
      
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
 }
=======
    });
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
</script>