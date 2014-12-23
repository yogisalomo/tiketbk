<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getPlane()
	{
		return View::make('frontend.index');
	}

	public function getTicket()
	{
		return View::make('frontend.ticket');
	}

	public function getCustomer()
	{
		return View::make('frontend.customer');
	}

	public function getPesan()
	{
		return View::make('frontend.pesan');
	}
}
