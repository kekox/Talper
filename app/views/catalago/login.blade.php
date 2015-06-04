@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')
 	<section id="loginpage">

            	@if(Session::has('message_exit'))
                        
                  {{ "<script>
                    $(document).ready(function()
                    {
                      $('.MessageExit').modal('show');
                    });
                   </script>"}}
                @endif

            	<div class="container ">
            		<div class="col-lg-4 col-lg-offset-4 ">
            			
					

						<div class="panel  redondo center" >

						  <div class="panel-heading schema-blue">
						    <h3 class="panel-title montserrat text-center text-white">Inicio de Sesión</h3>
						  </div>
             			 <br>
							  <center><span id="mensajefail" class="display-errors" ></span></center>
	             			  <center><span id="mensajesuccess" class="display-success" ></span></center>
	             			  
						  <div class="panel-body">
						   {{ Form::open(array(
                              'route' => 'user.login',
			                  'class' => 'form-horizontal', 
			                  'role' => 'form',
			                  'id' => 'formlogin'
			                   ))}}

			                                      
			                <div class="input-group ">
			                    <span class="input-group-addon "><i class="fa fa-envelope "></i></span>
			                    <input class="form-control" placeholder="Correo Electrónico" id="username" name="email" type="email">
			                </div>
			                <span class=" display-errors"  id="_email">  {{ $errors->first('email') }}</span>
			                <small>test@hotmail.com</small>
			                
			           
			                <div class="input-group space">
			                    <span class="input-group-addon "><i class="glyphicon glyphicon-lock"></i></span>
			                    <input class="form-control" placeholder="Contraseña" id="password" name="password" type="password" value="">     
			                </div>
			                <span class=" display-errors text-justify" id="_password">  {{ $errors->first('password') }}</span>
			                <small>test1234</small>
			                 

			                <div class="form-group space">
			                  &nbsp;&nbsp;&nbsp;&nbsp;<input name="remember" type="checkbox" /> Recordar mi sesión                
			                </div>     
			                              
			                <!-- Login button -->
			                    <div class="col-sm-5 col-lg-6 col-lg-offset-3">
			                      <div class="row">
			                        <button class="btn btn-primary btn-block col-lg-3 montserrat-btn schema-blue" id="btnlogin" type="button">Iniciar Sesion</button>
			              {{ Form::close() }}
						  </div>
						</div>
            			
						
            		</div>
            	</div>
            	
            
          
  	</section>


  <!--Mensajes-->
  @include('includes.Messages.MessageError')
  @include('includes.Messages.MessageBienvenida')
  @include('includes.Messages.MessageExit')


@stop
