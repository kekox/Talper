$(document).ready(function(){

		/*Empieza ajax de login*/
	  $('#btnlogin').on('click',function()
    	{
      
      $.ajax({
          url: 'login',
          dataType: 'json',
          type:'POST',
          data: $('#formlogin').serialize(), //Se obtienen los datos del formulario


            success: function(datos)
            {
              //Donde se vana  mostrar los errores
              $('#_email , #_password ').text('');

                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){

                    $('#mensajefail').text(datos.message);
                    $('.MessageError').modal('show')

                     $.each(datos.errors, function(index, value)
                      {
                        $('#mensajefail').text('');
                        $('#_'+index).text(value);
                        $('.MessageError').modal('show');
                      });
                }
                else
                {      
                      $('.MessageBienvenida').modal('show');
                      $('#mensajefail').text('');
                      document.getElementById('formlogin').reset();
                      $('#mensajesuccess').text(datos.message);
                      setTimeout(function(){window.location.href="dashboard"} , 1500);  
                      
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              if (XMLHttpRequest.status === 500) {
      
              }else{
                    
                //Se puede obtener informacion útil inspecionando el Objeto XMLHttpRequest
                console.log(XMLHttpRequest.statusText);
                console.log(textStatus);
                console.log(errorThrown);;
          	}
      	  }
        });

    });/*Termina ajax de login*/

    /*Empieza ajax de agregar empleado*/
     $('#btnadd').on('click',function()
        {

        $.ajax({
          url: 'catalago',
          dataType: 'json',
          type:'post',
          data: $('#formadd').serialize(),
          
            success: function(datos)
            {
              $('#nombreAdd ,#apellidoPaternoAdd, #apellidoMaternoAdd, #departamentosAdd, #sueldoAdd, #dateAdd').text('');
                
                if(datos.success == false){
                  $('#nombreAdd').text(datos.errors.nombre);
                  $('#apellidoPaternoAdd').text(datos.errors.apPaterno);
                  $('#apellidoMaternoAdd').text(datos.errors.apPaterno);
                  $('#departamentosAdd').text(datos.errors.departamento);
                  $('#sueldoAdd').text(datos.errors.sueldo);
                  $('#dateAdd').text(datos.errors.date);
                  $('#mensajeAdd').text(datos.message);
                }
                else
                {
                   
                    document.getElementById('formadd').reset();
                    $('.ModalAgregar').modal('hide');
                    $('.MessageAgregado').modal('show');
                     setTimeout(function(){window.location.href="catalago"} , 1500);  
                    
                  

                    
                }
            },

            error: function (XMLHttpRequest, textStatus, errorThrown) {
                    if (XMLHttpRequest.status === 500) {
                      
                    console.log(XMLHttpRequest);
                }else{
                      alert("Algo salió mal");
                  //Se puede obtener informacion útil inspecionando el Objeto XMLHttpRequest
                  console.log(XMLHttpRequest.statusText);
                  console.log(textStatus);
                  console.log(errorThrown);
                }
            }

           
        });

       });

       
       
        $('.btnclose').on('click',function()
        {
              document.getElementById('formadd').reset();
              $('#formadd > span').empty();
              $('#mensajeAdd').empty();
            
        });
    /*Terrmia ajax de agregar empleado*/

    /*Empieza ajax de modificar empleado*/
    $('.edit').on('click',function()
        {
          id = $(this).attr('value'); 
          $.ajax({
          url: 'catalago/edit/'+id,
          dataType: 'json',
          type:'POST',
          data: $('#formedit').serialize(), 

            success: function(datos)
            {
               
                if(datos.success == false){
                
                setTimeout("window.location = 'catalago'",1000);
                  
                }
                else
                {
                  $('#formedit input[name="empleado_id"]').val(datos.id)
                  $('#formedit input[name="nombreEdit"]').val(datos.nombre)
                  $('#formedit input[name="apellidoPaternoEdit"]').val(datos.apPaterno)
                  $('#formedit input[name="apellidoMaternoEdit"]').val(datos.apMaterno)
                  $('#formedit input[name="departamentosEdit"]').val(datos.departamento)
                  $('#formedit input[name="sueldoEdit"]').val(datos.sueldo)
                  $('#formedit input[name="dateEdit"]').val(datos.fecNac)
                  
                  

                  

                }
            },

            error: function (XMLHttpRequest, textStatus, errorThrown) 
            {
              if (XMLHttpRequest.status === 500) {
                /*alert('ERROR 5000');
                console.log(XMLHttpRequest);*/
              }else{
                  /*alert("Algo esta mal");
                  console.log(XMLHttpRequest.statusText);
                  console.log(textStatus);
                  console.log(errorThrown);*/
              }
            }
                 
          });
            
        });
    /*Termina ajax de modificar empleado*/

    /*Empieza ajax de update empleado*/
    $('#btnupdate').on('click',function()
        {

        $.ajax({
          url: 'catalago/update',
          dataType: 'json',
          type:'post',
          data: $('.formedit').serialize(), //Se obtienen los datos del formulario
            success: function(datos)
            {

              $('#nombreEdit ,#apellidoPaternoEdit, #apellidoMaternoEdit, #departamentosEdit, #sueldoEdit, #dateEdit ').text('');
                if(datos.success == false){
                  $('#nombreEdit').text(datos.errors.nombre);
                  $('#apellidoPaternoEdit').text(datos.errors.apPaterno);
                  $('#apellidoMaternoEdit').text(datos.errors.apMaterno);
                  $('#departamentosEdit').text(datos.errors.departamento);
                  $('#sueldoEdit').text(datos.errors.sueldo);
                  $('#dateEdit').text(datos.errors.fecha);

                  $('#mensajeupdate').text(datos.message)
                }
                else
                {

                   $('#MyModalEdit').modal('hide');
                   $('.MessageUpdate').modal('show');

                    setTimeout(function()
                    {
                    window.location.href="catalago"
                    } , 1500); 
                    
                }
            },

           
        });

       });
    /*Termina ajax de update empleado*/
    
});//Termina document ready


