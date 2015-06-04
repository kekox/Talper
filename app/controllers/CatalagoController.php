<?php
class CatalagoController extends Controller 
{
    public function index()
    {
        $users = Empleado::all();
        $departamentos= Departamento::lists('descripcion');

        return View::make('catalago/index',array('users'=>$users,'departamentos' => $departamentos));
    }

    public function store()
    {
        $data=array(
            'nombre'       =>Input::get('nombre'),
            'apPaterno'    =>Input::get('apellidoPaterno'),
            'apMaterno'    =>Input::get('apellidoMaterno'),
            'departamento' =>Input::get('departamentos'),
            'sueldo'       =>Input::get('sueldo'),
            'fecha'        =>Input::get('date')
        );

        

        $rules=array(
            'nombre'       => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3',
            'apPaterno'    => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'apMaterno'    => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'departamento' => 'required',
            'sueldo'       => 'required|regex:/^\d*(\.\d{2})?$/',
            'fecha'        => 'required' 
        );

        $messages=([
            'required'     => 'El campo es obligatorio',
            'regex'        => 'El formato del campo es inválido',
            'sueldo.regex' => 'Ingrese un formato valido',
            'min'          => 'El campo debe contener al menos :min caracteres.',
            ]);
        
        $validator = Validator::make($data, $rules,$messages);

      


        if(Request::ajax())
        {
            if ($validator->passes()) {

                $empleado                = new Empleado;
                $empleado ->nombre       = Input::get('nombre');
                $empleado ->apPaterno    = Input::get('apellidoPaterno');
                $empleado ->apMaterno    = Input::get('apellidoMaterno');
                $empleado ->fecNac       = Input::get('date');
                $empleado ->departamento = Input::get('departamentos');
                $empleado ->sueldo       = Input::get('sueldo');
                $empleado ->save();
                
              
                return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'El empleado se ha creado satisfactoriamente.'
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

    public function edit($empleado_id)
    {
        $empleado = Empleado::find($empleado_id);

        $data=array(
            'success'      =>true,
            'id'           =>$empleado->id,
            'nombre'       =>$empleado->nombre,
            'apPaterno'    =>$empleado->apPaterno,
            'apMaterno'    =>$empleado->apMaterno ,
            'departamento' =>$empleado->departamento,
            'sueldo'       =>$empleado->sueldo,
            'fecha'        =>$empleado->fecNac,
        );

        return Response::json($data);
       
    }
    
    public function update()
    {
        $empleado_id = Input::get('empleado_id');
        $empleado    = Empleado::find($empleado_id);

        $data=array(
            'nombre'       =>Input::get('nombreEdit'),
            'apPaterno'    =>Input::get('apellidoPaternoEdit'),
            'apMaterno'    =>Input::get('apellidoMaternoEdit'),
            'departamento' =>Input::get('departamentosEdit'),
            'sueldo'       =>Input::get('sueldoEdit'),
            'fecha'        =>Input::get('dateEdit')
        );

        $rules=array(
            'nombre'       => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3',
            'apPaterno'    => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'apMaterno'    => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'departamento' => 'required',
            'sueldo'       => 'required|regex:/^\d*(\.\d{2})?$/',
            'fecha'        => 'required' 
        );

        $messages=([
            'required'     => 'El campo es obligatorio',
            'regex'        => 'El formato del campo es inválido',
            'sueldo.regex' => 'Ingrese un formato valido',
            'min'          => 'El campo debe contener al menos :min caracteres.',
            ]);
        
            
   
        $validator = Validator::make($data, $rules,$messages);
        if(Request::ajax())
        {
            if ($validator->passes()) {

                $empleado ->nombre       = Input::get('nombreEdit');
                $empleado ->apPaterno    = Input::get('apellidoPaternoEdit');
                $empleado ->apMaterno    = Input::get('apellidoMaternoEdit');
                $empleado ->fecNac       = Input::get('dateEdit');
                $empleado ->departamento = Input::get('departamentosEdit');
                $empleado ->sueldo       = Input::get('sueldoEdit');
                $empleado ->save();
                
              
                return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'El empleado se ha creado satisfactoriamente.'
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

    
    public function destroy($empleado_id)
    {
        $empleado = Empleado::find($empleado_id);
        $empleado->delete();
        return Redirect::to('catalago')
            ->with('message_delete','Usuario Eliminado Correctamente');
    }
    
    
    
    
    
}