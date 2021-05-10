<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
	    global $DATA;  # Contains information about logged user to be used in view

	    //die("You are magic!"); # Testing if we managed to log in
        return redirect()->to('/Dashboard/home');
		//return view('welcome_message');
	}

	public function accounts()  # For demo purposes
    {
        echo view("dashboard/header");
        echo view("dashboard/accounts");
        echo view("dashboard/footer");
    }

    public function admin()  # For demo purposes
    {
        echo view("dashboard/header");
        # Content
        echo view("dashboard/footer");
    }

    public function home() # For demo purposes
    {
        echo view("dashboard/header");
        echo view("dashboard/home");
        echo view("dashboard/footer");
    }

    public function units() # For demo purposes
    {
        echo view("dashboard/header");
        echo view("dashboard/units");
        echo view("dashboard/footer");
    }

    public function settings() # For demo purposes
    {
        echo view("dashboard/header");
        # Content
        echo view("dashboard/footer");
    }
}
