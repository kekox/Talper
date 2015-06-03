@extends('layout.master')
@section('title')
:: Dashboard
@stop 

@section('contenido')

 	<section id="dashboard">
            	 @include('includes.header')

            	 @if(Session::has('message_bienvenida'))
              		{{ "<script>
						  $(document).ready(function()
						  {
						    $('.MessageBienvenidaP').modal('show');
						  });
					   </script>"}}
			    @endif
            	
           		<div class="container">
					<div class="row">
						<h1 class="center">Algun dashboard o página de inicio</h1>

							
				            

					</div>
				</div>
          
  	</section>


 	
<!-- Mensajes-->
    @include('includes.Messages.MessageBienvenidaPersonal')

@stop

