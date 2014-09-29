<?php

class News extends Eloquent {

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function category()
	{
		return $this->belongsTo('NewsCategory');
	}

	public function views()
	{
		return $this->belongsToMany('User', 'views');
	}

	public function getCoverLinkAttribute()
	{
		return asset('uploads/news/' . $this->cover);
	}
	
}