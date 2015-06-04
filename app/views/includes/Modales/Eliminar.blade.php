<div class="modal fade" id="MyModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header schema-red">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <center><h3 class="modal-title" id="myModalLabel"><span class="fa fa-trash-o text-white"> Eliminar Usuario</span></h3></center>
                  </div>

                  <div class="modal-body">
                    
                  <center><strong>¿Realmente desea eliminar este empleado?</strong></center>


                  </div> <!--Termina el modal body-->

                 
                  
                  @if(isset($user))
                  <div class="modal-footer">
                    <div class="col-lg-10 col-lg-offset-1">
                      <button class="btn btn-default btn-block" data-dismiss="modal" type="button">Cerrar</button>
                      <a href="http://www.talperapp.com/catalago/delete/+{{{$user->id}}}" class="btn btn-danger btn-block btn-sm">Eliminar</a>
                    </div>
                  </div>
                  @endif
                  
                  
                  

              </div><!--Termina modal content-->
            </div><!--Termina modal dialog-->
          </div><!--Termina modal fade-->