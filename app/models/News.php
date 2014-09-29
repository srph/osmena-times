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
		return $this->hasMany('NewsView');
	}

	public function viewCount()
	{
		return $this->views->count();
	}

	public function getCoverLinkAttribute()
	{
		return asset('uploads/news/' . $this->cover);
	}

	public static function upload($file)
	{
		$name = str_random(10);
		$ext = $file->getOriginalClientExtension();
		$dest = 'uploads/news/';
		$filename = "{$name}.{$ext}";

		if($file->move($dest,$filename))
		{
			return $name;
		}

		return false;
	}
	
}