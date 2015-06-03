<?php
class CatalagoController extends Controller 
{
    public function index()
    {
        $users = User::all();
        return View::make('users/index',array('users'=>$users));
    }

    public function store()
    {
        $data=array(
            'nombre'           =>Input::get('nombre'),
            'apellido_paterno' =>Input::get('apellido_paterno'),
            'apellido_materno' =>Input::get('apellido_materno'),
            'email'            =>Input::get('email'),
            'perfil'           =>Input::get('perfil'),
            'password'         =>Input::get('password')
        );

        $rules=array(
            'nombre'           => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3',
            'apellido_paterno' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'apellido_materno' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'email'            => 'required|min:2|email|unique:users',
            'perfil'           => 'required',
            'password'         => 'required|min:6' 
        );
        
        $validator = Validator::make($data, $rules);



        if(Request::ajax())
        {
            if ($validator->passes()) {
                $user                   = new User;
                $user->nombre           = Input::get('nombre');
                $user->apellido_Paterno = Input::get('apellido_paterno');
                $user->apellido_Materno = Input::get('apellido_materno');
                $user->email            = Input::get('email');
                $user->perfil_id        = Input::get('perfil');
                $user->password         = Hash::make(Input::get('password'));
                $user->save();
               /* Mail::send('emails.welcome', array('nombre'=>Input::get('nombre')), function($message){
                    $message->to(Input::get('email'), Input::get('nombre'));
                    $message->subject('Registro con Éxito');    
                 });*/
                return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'El usuario se ha creado satisfactoriamente.'
                                    ]);
            }else{
                return Response::json
                                    ([
                                        'success' => false,
                                        'errors' => $validator ->getMessageBag()->toArray(),
                                        'message' => 'Verifica los datos.'
                                    ]);
            }
         }     
    }

    public function edit($user_id)
    {
        
        $user = User::find($user_id);

        $data=array(
            'success'          =>true,
            'id'               =>$user->id,
            'nombre'           =>$user->nombre,
            'apellido_Paterno' =>$user->apellido_Paterno,
            'apellido_Materno' =>$user->apellido_Materno,
            'email'            =>$user->email,
            'perfil_id'        =>$user->perfil_id,
            'password'         =>$user->password,
        );

        return Response::json($data);
    }
    
    public function update()
    {
        $user_id = Input::get('user_id');
        $user    = User::find($user_id);

        $data=array(
            'nombre'           =>Input::get('nombre_edit'),
            'apellido_paterno' =>Input::get('apellido_paterno_edit'),
            'apellido_materno' =>Input::get('apellido_materno_edit'),
            'email'            =>Input::get('email_edit'),
            'perfil'           =>Input::get('perfil_edit'),
            'password'         =>Input::get('password_edit'),      
        );

        $rules=array(
            'nombre'           => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3',
            'apellido_paterno' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'apellido_materno' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'email'            => 'required|min:2|email|unique:users',
            'perfil'           => 'required',
            'password'         => 'required|min:6' 
        );
        
        $message=array(
            'email.unique' => 'El correo electrónico que intenta actualizar ya existe.'
            );
     
        $comparepass = Input::get('password_edit');

        $validator = Validator::make($data, $rules,$message);
        if ($validator->passes()) {
            if(Request::ajax())
            {
                if(Hash::check($comparepass,$user->password)){

                    $user->nombre           = Input::get('nombre_edit');
                    $user->apellido_Paterno = Input::get('apellido_paterno_edit');
                    $user->apellido_Materno = Input::get('apellido_materno_edit');
                    $user->email            = Input::get('email_edit');
                    $user->perfil_id        = Input::get('perfil_edit');
                    $user->save();

                    return Response::json
                                                ([
                                                    'success' => true,
                                                    'message' => 'El usuario se ha editado correctamente.',
                                                 ]);
                }else{
                   
                        if($user->password == Input::get('password_edit') && $user->email == Input::get('email_edit')){


                        $user->nombre           = Input::get('nombre_edit');
                        $user->apellido_Paterno = Input::get('apellido_paterno_edit');
                        $user->apellido_Materno = Input::get('apellido_materno_edit');
                        $user->perfil_id        = Input::get('perfil_edit');
                        $user->save();

                                return Response::json
                                        ([
                                            'success' => true,
                                            'message' => 'El password y el correo no se modificaron.',
                                        ]);

                        }else if($user->password != Input::get('password_edit') && $user->email == Input::get('email_edit')){

                        /*$user->nombre           = Input::get('nombre_edit');
                        $user->apellido_Paterno = Input::get('apellido_paterno_edit');
                        $user->apellido_Materno = Input::get('apellido_materno_edit');
                        $user->perfil_id        = Input::get('perfil_edit');
                        $user->password         = Hash::make(Input::get('password_edit'));
                        $user->save();*/

                                return Response::json
                                        ([
                                            'success' => true,
                                            'message' => 'El password si se modifico pero el correo no',
                                        ]);
                        }else if($user->password == Input::get('password_edit') && $user->email != Input::get('email_edit')){

                        $user->nombre           = Input::get('nombre_edit');
                        $user->apellido_Paterno = Input::get('apellido_paterno_edit');
                        $user->apellido_Materno = Input::get('apellido_materno_edit');
                        $user->perfil_id        = Input::get('perfil_edit');
                        $user->email            = Input::get('email_edit');
                        $user->save();

                                return Response::json
                                        ([
                                            'success' => true,
                                            'message' => 'El password no se modifico pero si el correo',
                                            'bandera' => 'ya ha sido registrado' 
                                        ]);
                        }else{

                        /*$user->nombre           = Input::get('nombre_edit');
                        $user->apellido_Paterno = Input::get('apellido_paterno_edit');
                        $user->apellido_Materno = Input::get('apellido_materno_edit');
                        $user->email            = Input::get('email_edit');
                        $user->perfil_id        = Input::get('perfil_edit');
                        $user->password         = Hash::make(Input::get('password_edit'));
                        $user->save();*/

                                return Response::json
                                        ([
                                            'success' => true,
                                            'message' => 'Los dos se modificaron',
                                        ]);
                        }                                
                                                

                }
            }else{
                return Redirect::to('cms')
                   ->with('message_edit','Usuario Editado Correctamente');
            }   
        }
        else
        {
            if(Request::ajax())
            {
                return Response::json
                                    ([
                                        'success' => false,
                                        'errors'  => $validator ->getMessageBag()->toArray(),
                                        'message' => 'Verifique los datos.'
                                    ]);
            }else{
                 return Redirect::to('cms')
                    ->withErrors($validator)
                    ->with('message_fail','Error al modificar el usuario. Favor de revisar los siguientes errores:')
                    ->withInput();
            }          
        }
    }

    
    public function destroy($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return Redirect::to('cms')
            ->with('message_delete','Usuario Eliminado Correctamente');
    }
    
    
    public function postUpdatePerfil()
    {
        $user_id = Input::get('user_id');
        $user    = User::find($user_id);

        $data=array(
            'nombre'           =>Input::get('nombre_edit'),
            'apellido_paterno' =>Input::get('apellido_paterno_edit'),
            'apellido_materno' =>Input::get('apellido_materno_edit'),
            'email'            =>Input::get('email_edit'),
        );
        $rules=array(
            'nombre'           => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3',
            'apellido_paterno' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'apellido_materno' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'email'            => 'required|min:2|email|unique:users',
           
        );
        
        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            $user->nombre           = Input::get('nombre_edit');
            $user->apellido_Paterno = Input::get('apellido_paterno_edit');
            $user->apellido_Materno = Input::get('apellido_materno_edit');
            $user->email            = Input::get('email_edit');
            
            $user->save();

                return Redirect::to('dashboard')
                    ->with('message_perfil','El perfil se ha actualizado de manera Correcta.');
        }
        else
        {   
                return Redirect::to('dashboard')
                    ->with('message','Error al editar el perfil.           Favor de revisarlo')
                    ->withErrors($validator);
            
        }
    }
    
}