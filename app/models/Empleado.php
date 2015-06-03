<?php


class Empleado extends Eloquent {

	protected $table = 'empleados';
	protected $fillable = array(
		'id',
		'nombre',
		'apPaterno',
		'Apmaterno',
		'fecNac',
		'departamento',
		'sueldo',
		);

	public function departamento()
    {
        return $this->belongsTo('Departamento','departamento'); 
    }



}
