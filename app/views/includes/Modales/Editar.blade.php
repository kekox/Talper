<div class="modal fade" id="MyModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header schema-green">
                    <button type="button" class="close btncmsclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-pencil text-white"> Editar Usuario </span></h3></center>
                  </div>

                  <div class="modal-body">
                    <center><span id="mensajeupdate" class=" display-errors" ></span></center>
                      <!--Formulario-->
                {{ Form::open(array(
                  'route' => 'empleado.update',
                  'class' => 'form-horizontal formedit', 
                  'role'  => 'form',
                  'id'    =>'formedit')) }}

                <!-- nombre -->
                <div class="input-group " >
                    <span class="input-group-addon "><i class="glyphicon glyphicon-user "></i></span>
                    <input class="form-control" placeholder="Nombre(s)" name="nombreEdit" type="text">
                </div>
                 <!--Errores-->
                 <span class="display-errors" id="nombreEdit">  {{ $errors->first('nombre') }}</span>

                <!-- Apellido Paterno -->
                <div class="input-group space" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" placeholder="Apellido Paterno" name="apellidoPaternoEdit" type="text">
                </div>
                 <!--Errores-->
                <span class="display-errors" id="apellidoPaternoEdit">  {{ $errors->first('apellidoPaternoEdit') }}</span>

                 <!-- Apellido Materno -->
                <div class="input-group space" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" placeholder="Apellido Materno" name="apellidoMaternoEdit" type="text">
                </div>
                 <!--Errores-->
                <span class="display-errors" id="apellidoMaternoEdit">  {{ $errors->first('apellidoMaternoEdit') }}</span>
                

                <!-- Departamentos -->
                <div class="input-group space col-lg-6" >

                <span class="input-group-addon space"><i class="glyphicon glyphicon-tag"></i></span>
                 {{ Form::select('departamentosEdit',$departamentos)}}
                </div>
                
                <span class="display-errors" id="departamentosEdit">  {{ $errors->first('departamentos') }}</span>
                
                 <!-- Sueldo -->
                <div class="input-group space" >
                    <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                    <input class="form-control" placeholder="Sueldo" name="sueldoEdit" type="number" pattern='/^\d*(\.\d{2})?$/'>
                </div>
                 <!--Errores-->
                <span class="display-errors" id="sueldoEdit">  {{ $errors->first('apellidoMaterno') }}</span>

                 <!-- Fecha de nacimiento -->
                <div class="input-group space" >
                  <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                 {{Form::input('date', 'dateEdit', null, ['class' => 'form-control', 'placeholder' => 'Fecha de nacimiento']);}}
                </div>
                <!--Errores-->
                 <span class="display-errors" id="dateEdit">  {{ $errors->first('date') }}</span>
               
                
                 <input type="hidden" name="empleado_id" >


                  </div> <!--Termina el modal body-->

                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                     <input class="btn btn-default btn-block btnclose" data-dismiss="modal" type="button" value="Close">
                      <input class="btn btn-success btn-block " id="btnupdate" type="button" value="Guardar">
                     </div>
                  </div>
                   {{ Form::close() }}
              </div><!--Termina modal content-->
            </div><!--Termina modal dialog-->
          </div><!--Termina modal fade-->