<?php

class Profile extends Eloquent {

	protected $fillable = ['name', 'about_me', 'photo', 'twitter', 'facebook'];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function getDpLinkAttribute($value)
	{
		return 'uploads/users/' . $this->photo;
	}
	
}