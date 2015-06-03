<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Login extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;
	protected $table = 'login';
	protected $hidden = array('id','password', 'remember_token');
	protected $fillable = array(
		'id',
		'email',
		'password',
		);



}
