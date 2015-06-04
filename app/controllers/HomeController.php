<?php

class HomeController extends BaseController {



	public function showLogin()
	{
		// Check if we already logged in
        if (Auth::check())
        {
            // Redirect to homepage
            return Redirect::to('dashboard')
           		 ->with('message_bienvenida', 'hola');
        }
        // Show the login page
        return View::make('catalago.login');
	}

    public function showDashboard()
    {

        $empleados = Empleado::all();
      
    




        //return Response::json($usuario);

        return View::make('dashboard',array('empleados'=>$empleados));
                   
    }

}
