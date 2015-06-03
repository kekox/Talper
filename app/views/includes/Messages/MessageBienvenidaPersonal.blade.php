	<div class="modal fade out MessageBienvenidaP"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body">
              <center class="display-success montserrat" >Bienvenido al sistema de nuevo {{Auth::user()->nombre}} {{Auth::user()->apellido_Paterno}}  <i class="fa fa-smile-o text-yellow"></i><br><span class="text-justify">Hoy es: {{date('d-m-Y');}}</span><br><span>Son las:{{date('H:i:s');}}</span></center>
            </div>
          </div>
        </div>
    </div>