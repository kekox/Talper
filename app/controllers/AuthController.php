<?php
class AuthController extends BaseController{

     public function index()
    {     
        // Check if we already logged in
        if (Auth::check())
        {
            // Redirect to homepage
            return Redirect::to('dashboard')
                ->with('message_bienvenida');
        }
        // Show the login page
        return View::make('users/login');
        
    }


    public function postLogin()
    {

        $data=array(
            'email'    =>Input::get('email'),
            'password' =>Input::get('password')            
        );

        $remember = (Input::has('remember')) ? true : false;

        $rules=array(
            'email'    => 'required|email',
            'password' => 'required|min:6'
        );

        $messages=array(
            'email.required'    => 'El correo electrónico es obligatorio.',
            'email.email'       => 'Ingrese un correo electrónico válido.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min'      => 'La contraseña debe contener mínimo 6 caracteres.'
        );

        $validator = Validator::make($data,$rules,$messages);

         
            if ($validator->passes()){ 

                if(Request::ajax())
                {
                        if (Auth::attempt($data,$remember))
                        {
                            return Response::json
                                            ([
                                                'success' => true,
                                                'message' => 'Bienvenido al Sistema.'
                                            ]);
                            
                        }else{
                            return Response::json

                                            ([
                                                'success' => false,
                                                'errors'  => $validator ->getMessageBag()->toArray(),
                                                'message' => 'El correo eléctronico/contraseña son incorrectos.'
                                            ]);          
                        }

                
                }

            }else{
                if(Request::ajax())
                {
                    return Response::json
                                    ([
                                        'success' => false,
                                        'errors'  => $validator ->getMessageBag()->toArray(),
                                        'message' => 'Revise los campos porfavor.'

                                    ]);
                } 
            }
        
    }

    public function getLogout()
    {
        // Log out
        Auth::logout();

        return Redirect::to('/')
                ->with('message_exit','');
    }

    
   
}