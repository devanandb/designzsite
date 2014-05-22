<?php

class HomeController extends BaseController {


	public function home() {

		return View::make('pages.home');
		
	}

}