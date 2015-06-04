@extends('layout.master')
@section('title')
:: Dashboard
@stop 

@section('contenido')

 	<section id="catalago">
            	 @include('includes.header')

            	 <div id="catalagobody">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 ">
					  <br>
                      <h3 class="heading"><a href="dashboard" class="fa fa-arrow-left color-black " style="text-decoration:none; margin-right:30px;"></a>Catalago</h3>

                       @if(Session::has('message_delete'))
                        {{ "<script>
                            $(document).ready(function()
                            {
                              $('.MessageDelete').modal('show');
                            });
                           </script>"
                        }}        


                    @elseif(Session::has('message_edit'))
                       <div class="alert alert-success"><center><span class="fa fa-check-circle"></span>
                       <a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message_edit') }}</center></div>
                    @elseif(Session::has('message_fail'))
                       <div class="alert alert-danger"><center><span class="fa fa-times-circle"></span>
                       <a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('message_fail') }}
                        <!--Errores-->
                        <br>
                          <span class="display-errors "> {{ $errors->first('nombre') }}</span><br>
                          <span class="display-errors "> {{ $errors->first('apellido_paterno') }}</span><br>
                          <span class="display-errors "> {{ $errors->first('apellido_Materno') }}</span><br>
                          <span class="display-errors "> {{ $errors->first('email') }}</span><br>
                          <span class="display-errors "> {{ $errors->first('perfil') }}</span><br>
                       </center></div>
                    @endif
                  
                   
				
                      <button id="add" class="btn btn-primary pull-right" data-toggle="modal" data-target=".ModalAgregar"><span class="fa fa-user-plus"> Agregar Usuario</span></button>
					  <br>
                      <br><br>
		
                      <table id="DatatableUsers" class="table table-hover responsive" cellspacing="0" width="100%">
                          
                          <thead class="schema-dark text-white">
                              <tr>
                                  <th><center>Nombre Completo</center></th>
                                  <th><center>Nacimiento</center></th>
                                  <th><center>Departamento</center></th>
                                  <th><center>Sueldo</center></th>
                                  <th><center>Opciones</center></th>

                              </tr>
                          </thead>

					
 
 						
                          <tbody>
                              @if($users)
                                @foreach($users as $user)
                              <tr class="opensans">
                                 	
                                  <td><center>{{$user->nombre." ".$user->apPaterno." ".$user->apMaterno}}</center></td>
                                  <td><center>{{date("d/m/Y",strtotime($user->fecNac))}}</center></td>
                                  <td><center>{{$user->departamento}}</center></td> 
                                  <td><center>{{$user->sueldo}}</center></td> 
                                  <td><center>
                                  <a href="#MyModalEdit" class="btn btn-success btn-sm fa fa-pencil edit" data-toggle="modal" value="{{{$user->id}}}">Editar</a>

                                  <a href="#MyModalDelete" class="btn btn-danger btn-sm fa fa-trash-o " data-toggle="modal" value="{{{$user->id}}}">Eliminar</a>
                                 </td> 
                                  
                                 
                                             
                              </tr>
                              @endforeach 
                          </tbody>
                            @endif
                          
                      </table>
                          

                </div>
              </div>
            </div>
        </div>   
          
  	</section>

          <!-- Modales -->
          @include('includes.Modales.Agregar')
          @include('includes.Modales.Eliminar')
          @include('includes.Modales.Editar')
         
   	      <!-- Mensajes -->
          @include('includes.Messages.MessageAgregado')
          @include('includes.Messages.MessageDelete')
          @include('includes.Messages.MessageUpdate')


 <script>
    $(document).ready( function () {
    $('#DatatableUsers').DataTable();
    responsive: true
    });
  </script>

<script>
  $(document).ready(function(){
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

       
  });
</script>

@stop

