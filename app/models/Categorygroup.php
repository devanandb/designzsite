<?php

class Categorygroup extends \Eloquent {
	protected $fillable = [];

	public function categories() {
		return $this->hasMany('Category')->orderBy('id','ASC')->with('products');
	}
}