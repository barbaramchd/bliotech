<?php

namespace App\Controllers;

use App\Models\UnitsModel;
use App\Models\UnitUsersModel;
use App\Models\UnitDistModel;
use App\Models\DistrictModel;

const BLIO_TITLE = " | Blio Tech | Button - Manager Dashboard";


class Dashboard extends BaseController
{
	public function index()
	{
        return redirect()->to('/Dashboard/home');
	}

	public function accounts()  # For demo purposes
    {
        # Initializing data for the views
        global $DATA;
        # Side menu ID that should be highlighted
        $DATA["current_menu"] = "Accounts";
        # Displayed in on the begining of the page
        $DATA["page_header"] = $DATA["current_menu"]; # Comment if you want to define your own page title
        # Name of the tab in browser
        $DATA["page_title"] = $DATA["current_menu"].BLIO_TITLE;

        if ($DATA["isManager"] == false){
            return redirect()->to('/Dashboard/home');
        }
        # Find a District of a Manager
        $districts = new DistrictModel();
        $ud   = new UnitDistModel();
        $district = $districts->getDistrictByUser($DATA["user"]->id);

        # Get all accounts associated with the district
        $users = $ud->getUsersFromDistrict($district["id"]);
        $DATA["accounts_all"] = $users;

        # Get all units associated with the district
        $units = $ud->getUnitsFromDistrict($district["id"]);
        $DATA["units_all"] = $units;

        # List all units available for given manager

        # Displaying Header
        echo view("dashboard/header", $DATA);
        echo view("dashboard/accounts", $DATA);
        echo view("dashboard/footer", $DATA);
    }


    public function home() # For demo purposes
    {
        # Initializing data for the views
        global $DATA;
        # Side menu ID that should be highlighted
        $DATA["current_menu"] = "Dashboard";
        # Displayed in on the begining of the page
        $DATA["page_header"] = $DATA["current_menu"]; # Comment if you want to define your own page title
        # Name of the tab in browser
        $DATA["page_title"] = $DATA["current_menu"].BLIO_TITLE;

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

                # Add data for dashbaord to $DATA
                #var_dump($district);
                $DATA["events"] = $unit_districts->getUniqueEventsFromDistrict($district["id"]);
                $DATA["restaurants_no"] = $unit_districts->getActiveCount($district["id"]);
                $DATA["devices_no"] = $unit_districts->getAllEventsCount($district["id"]);
                $DATA["needs_attention_no"] = $unit_districts->getAttentionCount($district["id"]);
                $DATA["overdue_no"] = $unit_districts->getOverdueCount($district["id"]);
                $DATA["solved_no"] = $unit_districts->getSolvedCount($district["id"]);
                //$DATA["solved_count"] = $DATA["restaurants_no"] - $DATA["needs_attention_no"] - $DATA["overdue_no"];

                echo view("dashboard/home", $DATA);
            }else{
                $DATA["message"] = "You do not have access to any district. Please contact our tech support.";
                echo view("dashboard/error_message", $DATA);
            }
        }else{
            # IF current user is worker
            # redirect to single unit
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
        # Initializing data for the views
        global $DATA;
        # Side menu ID that should be highlighted
        $DATA["current_menu"] = "Units";
        # Displayed in on the begining of the page
        $DATA["page_header"] = "Unit ".$unit_id;
        # Name of the tab in browser
        $DATA["page_title"] = $DATA["page_header"].BLIO_TITLE;


        # Displaying Header
        echo view("dashboard/header", $DATA);
        echo view("dashboard/unit", $DATA);
        echo view("dashboard/footer", $DATA);
    }

    public function units() # For demo purposes
    {
        # Initializing data for the views
        global $DATA;
        # Side menu ID that should be highlighted
        $DATA["current_menu"] = "Units";
        # Displayed in on the begining of the page
        $DATA["page_header"] = "All Units";
        # Name of the tab in browser
        $DATA["page_title"] = $DATA["page_header"] .BLIO_TITLE;

        # Find a District of a Manager
        $districts = new DistrictModel();
        $ud   = new UnitDistModel();
        $session = \Config\Services::session();
        $district = $districts->getDistrictByUser($DATA["user"]->id);

        # Get all units associated with the district
        $units = $ud->getUnitsFromDistrict($district["id"]);
        $DATA["units_all"] = $units;
        $DATA["flashdata"] = $session->getFlashdata();

        # Displaying Header
        echo view("dashboard/header", $DATA);
        echo view("dashboard/units", $DATA);
        echo view("dashboard/footer", $DATA);
    }

    public function settings()
    {
        # Initializing data for the views
        global $DATA;
        # Side menu ID that should be highlighted
        $DATA["current_menu"] = "Settings";
        # Displayed in on the begining of the page
        $DATA["page_header"] = "Account Settings";
        # Name of the tab in browser
        $DATA["page_title"] = $DATA["page_header"].BLIO_TITLE;

        # Displaying Header
        echo view("dashboard/header", $DATA);
        # Content
        echo view("dashboard/footer", $DATA);
    }
}
