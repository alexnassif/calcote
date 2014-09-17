<?php

class PagesController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function home()
	{
		return View::make('index');
	}

	public function about()
	{
		return View::make('about');
	}

	public function reel()
	{
		return View::make('reel');
	}
	public function contact()
	{
		return View::make('contact');
	}
}
