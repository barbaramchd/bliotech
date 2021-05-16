<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        return redirect()->to('/Dashboard/');
		//return view('welcome_message');
	}

	public function register(){

	    echo view("auth/header");
	    echo view("auth/register");
	    echo view("auth/footer");
}
}
