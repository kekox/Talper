<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header bg-primary">
                      <button type="button" class="close btncmsclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-user-plus"> Agregar Usuario</span></h3></center>
                  </div>

                  <div class="modal-body">
                    <center><span id="mensaje" class=" display-errors" ></span></center>
                      <!--Formulario-->
                {{ Form::open(array(
                  'route' => 'user.store',
                  'class' => 'form-horizontal', 
                  'role'  => 'form',
                  'id'    =>'formcmsadd')) }}

                <!-- nombre -->
                <div class="input-group " >
                    <span class="input-group-addon "><i class="glyphicon glyphicon-user "></i></span>
                    <input class="form-control" placeholder="Nombre(s)" name="nombre" type="text">
                </div>
                 <!--Errores-->
                 <span class="display-errors" id="nombres">  {{ $errors->first('nombre') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group space" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" placeholder="Apellido Paterno" name="apellido_paterno" type="text">
                </div>
                 <!--Errores-->
                <span class="display-errors" id="apellido_paterno">  {{ $errors->first('apellido_paternoo') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group space" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" placeholder="Apellido Materno" name="apellido_materno" type="text">
                </div>
                 <!--Errores-->
                <span class="display-errors" id="apellido_materno">  {{ $errors->first('apellido_maternoo') }}</span>
                

                <!-- departamentos -->
                <div class="input-group space col-lg-6" >

                <span class="input-group-addon space"><i class="glyphicon glyphicon-tag"></i></span>
                 {{ Form::select('departamentos',$departamentos)}}
                </div>
                
                <span class="display-errors" id="perfil">  {{ $errors->first('perfil') }}</span>
                

                 <!-- Fecha de nacimiento -->
                <div class="input-group space" >
                  <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                 {{Form::input('date', 'date', null, ['class' => 'form-control', 'placeholder' => 'Fecha de nacimiento']);}}
                </div>
                <!--Errores-->
                 <span class="display-errors" id="password">  {{ $errors->first('date') }}</span>
               
                
              


                  </div> <!--Termina el modal body-->

                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                     <input class="btn btn-default btn-block btncmsclose" data-dismiss="modal" type="button" value="Close">
                     <input class="btn btn-primary btn-block " id="btncsmadd" type="button" value="Crear Usuario">
                     </div>
                  </div>
                   {{ Form::close() }}

              </div><!--Termina modal content-->
            </div><!--Termina modal dialog-->
          </div><!--Termina modal fade-->