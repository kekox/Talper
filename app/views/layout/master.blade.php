<!DOCTYPE html>
<html lang="es">
<head>
	<!--Se carga el header y los stylos necesarios-->
	@include('includes.head')
</head>
<body>
	
	<div class="container-fluid schema-gray" >
        <div class="row ">
            
                
                    @show
                    @yield('contenido')
                
           
        </div>
    </div>

	


		@include('includes.scripts')

		@include('includes.footer')
</body>
</html>