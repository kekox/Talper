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
        return View::make('users.login');
	}

    public function showDashboard()
    {
        $persona = User::find(1);
        $departamento = $persona->descripcion;

        return Response::Json($departamento);

        return View::make('dashboard')
                ->with('message' , ' Hola');
    }

}
