<?php

class NewsView extends Eloquent {

	protected $fillable = ['news_id'];

	public function news()
	{
		$this->belongsTo('News');
	}

}