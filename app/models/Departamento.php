<?php

class Departamento extends Eloquent  {

	protected $table = 'departamentos';
	protected $fillable = array(
		'departamento',
		'descripcion',
		);

	public function user(){
		return $this->hasOne('User','departamento');
	}
}
