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
                      <h3 class="heading"><a href="dashboard" class="fa fa-arrow-left color-black pull-left" style="text-decoration:none;"></a>Catalago</h3>

                       @if(Session::has('message_delete'))
                        {{ "<script>
                            $(document).ready(function()
                            {
                              $('.ModalUserDelete').modal('show');
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
                  
                   
				
                      <button id="add" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"> Agregar Usuario</span></button>
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
                                  {{HTML::link('#MyModalEdit',' Editar',array('class'=>'btn btn-success btn-sm fa fa-pencil edit','data-toggle'=>'modal','title'=>$user->id))}}
                                  &nbsp;
                                  {{HTML::link('#MyModalDelete',' Eliminar',array('class'=>'btn btn-danger btn-sm fa fa-trash-o ','data-toggle'=>'modal','title'=>$user->id))}}</center></td> 
                                 
                                             
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


 	


 <script>
    $(document).ready( function () {
    $('#DatatableUsers').DataTable();
    responsive: true
    });
  </script>
@stop

