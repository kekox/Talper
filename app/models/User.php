<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;
	protected $table = 'users';
	protected $hidden = array('id','password', 'remember_token');
	protected $fillable = array(
		'id',
		'nombre',
		'apPaterno',
		'Apmaterno',
		'email',
		'fecNac',
		'departamento',
		'sueldo',
		'password'
		);

	public function departamento()
    {
        return $this->hasOne('Departamento','departamento'); 
    }



}
