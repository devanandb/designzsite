<?php

class PageController extends \BaseController {

	public function home() {

		return View::make('pages.home');
		
	}

	public function products() {

		return View::make('pages.products');
		
	}

	public function services() {

		return View::make('pages.services');
		
	}

	public function people() {

		return View::make('pages.people');
		
	}

	public function contact() {

		return View::make('pages.contact');
		
	}

}