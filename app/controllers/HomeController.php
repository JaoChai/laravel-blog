<?php

class HomeController extends BaseController {

	public function index()
	{
		$posts = Post::where('draft','=', 0)->get();
		return View::make('home')->with('posts',$posts);
	}

}
