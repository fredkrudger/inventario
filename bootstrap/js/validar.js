  <script type="text/javascript">   
    /* validar.js */ 
    $(document).ready(function() {
           
        $("#formulario").validate({          
        rules: {         
        
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
         maxlength : '<div><b style="color:red">La contraseña excede de caracteres.</b></div>'
         }
         }        
      });
    });
</script>