<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Columns filalble
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'password', 'remember_token'];

	protected $dates = ['deleted_at'];

	public function profile()
	{
		return $this->hasOne('Profile');
	}

	public function news()
	{
		return $this->hasMany('News');
	}

}
