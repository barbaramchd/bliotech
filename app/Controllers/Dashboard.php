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
        global $DATA;

        # Displaying Header
        echo view("dashboard/header", $DATA);
        echo view("dashboard/accounts", $DATA);
        echo view("dashboard/footer", $DATA);
    }

    public function admin()  # For demo purposes
    {
        global $DATA;

        # Displaying Header
        echo view("dashboard/header", $DATA);
        # Content
        echo view("dashboard/footer", $DATA);
    }

    public function home() # For demo purposes
    {
        global $DATA;

        # Displaying Header
        echo view("dashboard/header", $DATA);

        # IF current user is manager
        if (($DATA["isManager"] == true) OR ($DATA["isAdmin"] == true)){
            echo view("dashboard/home", $DATA);
        }else{
            # IF current user is worker
            # TODO redirect to single unit
            # Find which unit is associated with the worker


            return redirect()->to('/Dashboard/unit/'+$unit_id);
        }

        echo view("dashboard/footer", $DATA);
    }

    public function unit($unit_id) # For demo purposes
    {
        global $DATA;

        # Displaying Header
        echo view("dashboard/header", $DATA);
        echo view("dashboard/home", $DATA);
        echo view("dashboard/footer", $DATA);
    }

    public function units() # For demo purposes
    {
        global $DATA;

        # Displaying Header
        echo view("dashboard/header", $DATA);
        echo view("dashboard/units", $DATA);
        echo view("dashboard/footer", $DATA);
    }

    public function settings() # For demo purposes
    {
        global $DATA;

        # Displaying Header
        echo view("dashboard/header", $DATA);
        # Content
        echo view("dashboard/footer", $DATA);
    }
}
