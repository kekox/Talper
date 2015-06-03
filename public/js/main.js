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
    

});//Termina document ready


