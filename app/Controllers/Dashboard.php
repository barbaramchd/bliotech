<?php

namespace App\Controllers;

use App\Models\UnitsModel;
use App\Models\UnitUsersModel;
use App\Models\UnitDistModel;
use App\Models\DistrictModel;


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
        if (($DATA["isManager"] == true) OR ($DATA["isAdmin"] == true)) {
            # Find a District of a Manager
            $districts = new DistrictModel();
            $district = $districts->getDistrictByUser($DATA["user"]->id);

            if (isset($district)) {
                # Get all Units from given District
                $unit_districts = new UnitDistModel();

                # Add data to $DATA
                $DATA["events"] = $unit_districts->getEventsFromDistrict($district["id"]);
                //var_dump($DATA["events"]);

                echo view("dashboard/home", $DATA);
            }else{
                $DATA["message"] = "You do not have access to any district. Please contact our tech support.";
                echo view("dashboard/error_message", $DATA);
            }
        }else{
            # IF current user is worker
            # TODO redirect to single unit
            # Find which unit is associated with the worker from user_units table
            $unit_user = new UnitUsersModel();
            //var_dump($DATA["user"]);
            $unit_id = $unit_user->getUnit($DATA["user"]->id)["unit_id"];
            //var_dump($unit_id);
            return redirect()->to('/Dashboard/unit/'.$unit_id);
        }

        echo view("dashboard/footer", $DATA);
    }

    public function unit($unit_id) # For demo purposes
    {
        global $DATA;

        # Displaying Header
        echo view("dashboard/header", $DATA);
        echo view("dashboard/unit", $DATA);
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
