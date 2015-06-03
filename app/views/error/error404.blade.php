<!DOCTYPE html>
<html class="schema-gray">
<!--Head-->
@include('includes.head')
<body>
	
	<!--Nav-->


	<div class="jumbotron" style="margin-bottom:-30px;">
		<div class="container" style="background-color:white; border: #e0e0e0 1px solid; ">
			
			<div class="row">
				

				<div class="col-lg-10 col-lg-offset-1"><center>
				<h3 class="alert alert-danger "><span class="glyphicon glyphicon-fire " ></span> Error 404, la página solicitada no existe</h3>
				</center></div>

				<hr>
					
			</div>	

			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">
					<div class="well" style="margin-top:-20px;">

						<div class="col-lg-12 " align="left">
							<p>Se ha producido un error mientras se procesaba su solicitud.</p>
							<p>No puede visitar esta página debido a:</p>
							<ul>
								<li>Un marcador o favorito caducado</li>
								<li>Una dirección mal escrita</li>
								<li>Un motor de búsquedas que tiene un listado caducado para este sitio</li>
								<li>Usted no tiene acceso a esta página</li>
							</ul>
							<br>
							<br>
							<p style="font-size: 16px">Si la dificultad persiste, por favor, contacte con el administrador del sistema de este sitio y reporte el error de más abajo.</p>

							<span class="label label-invese" style="background-color:#333; border-left: 5px solid #344a1">404</span><small> Categoría no encontrada</small>
						</div>
						<br>
						
						
						<div class="form-inline"><center>
							<div class="form-group">
								<button type="button" class="btn btn-primary control-form" onclick="newLocation()"><span class="glyphicon glyphicon-arrow-left "></span> Página anterior</button>
							</div>

							<!--  <div class="form-group">
								<button type="button" class="btn btn-default control-form" onclick="newHome()"><span class="glyphicon glyphicon-home"></span> Página de inicio</button>
							</div>-->
						</center></div>
						

					</div><!-- /well -->
				</div>

			</div>	
			
		</div>
		<br>
		<br>
		<footer class="text-muted "><center>© 2015 Markoptic</center></footer>
	</div>

	<script>
	function newLocation() 
	{ 
	window.location= history.go(-1);
	} 

	function newHome() 
	{ 
	window.location= 'http://www.webapp.com/bienvenida';
	} 
</script>

	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/jquery.js') }}
</body>
</html>