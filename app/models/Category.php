<?php

class Category extends \Eloquent {
	protected $fillable = [];

	public function categorygroup() {
		return $this->belongsTo('CategoryGroup');
	}

	public function products() {
		return $this->hasMany('Product');
	}
}