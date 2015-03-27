<?php namespace App\Http\Controllers;

class DashController extends Controller {

	public function __construct()
	{
            $this->middleware('guest');
	}

	public function index()
	{
            return view('dashboard.index');
	}
        

}
