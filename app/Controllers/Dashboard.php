<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
	    global $DATA;  # Contains information about logged user to be used in view

	    die("You are magic!");
        //return redirect()->to('/Dashboard/');
		//return view('welcome_message');
	}

	public function accounts()  # For demo purposes
    {
        echo view("dashboard/header");
        # Content
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
        # Content
        echo view("dashboard/footer");
    }

    public function restaurant() # For demo purposes
    {
        echo view("dashboard/header");
        # Content
        echo view("dashboard/footer");
    }

    public function settings() # For demo purposes
    {
        echo view("dashboard/header");
        # Content
        echo view("dashboard/footer");
    }
}
