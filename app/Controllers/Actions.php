<?php

namespace App\Controllers;

use App\Models\UnitsModel;
use App\Models\UnitUsersModel;
use App\Models\UnitDistModel;
use App\Models\DistrictModel;

const BLIO_TITLE = " | Blio Tech | Button - Manager Dashboard";


class Actions extends BaseController
{
	public function index()
	{
        return redirect()->to('/Dashboard/home');
	}

	public function add_unit()
    {
        global $DATA;
        if ($DATA["isManager"] == true){

            # Loading Required Models
            $ud   = new UnitDistModel();
            $units = new UnitsModel();
            $districts = new DistrictModel();

            # Load Libraries and helpers
            helper("form"); # Load form validation library
            $validation =  \Config\Services::validation();
            $request = \Config\Services::request(); # TODO: probably can be removed
            $session = \Config\Services::session();

            # Get current district of manager;
            $district = $districts->getDistrictByUser($DATA["user"]->id);

            # Form validation rules
            $validation->setRule('u_name', 'Unit Name', 'required');
            $validation->setRule('u_address1', 'Unit Address', 'required');
            # TODO Add validation rules  https://codeigniter.com/user_guide/libraries/validation.html


            # Run form validations
            $validation->withRequest($this->request);
            if (! $validation->run())
            {
                $session->setFlashdata('operation_action', 'show_alert');
                $session->setFlashdata('operation_result', 'danger');
                $session->setFlashdata('operation_content', "Invalid data received: ". $validation->listErrors());
            }
            else
            {
                # Validated, parsing all input data and filtering
                $data=[
                    "u_name" => $request->getVar("u_name", FILTER_SANITIZE_STRING),
                    "u_name" =>   $request->getVar("u_name", FILTER_SANITIZE_STRING),
                    "u_address1" =>   $request->getVar("u_address1", FILTER_SANITIZE_STRING),
                    "u_address2" =>   $request->getVar("u_address2", FILTER_SANITIZE_STRING),
                    "u_city" =>   $request->getVar("u_city", FILTER_SANITIZE_STRING),
                    "u_state" =>   $request->getVar("u_state", FILTER_SANITIZE_STRING),
                    "u_zip" =>   $request->getVar("u_zip", FILTER_SANITIZE_STRING),
                    "u_phone" =>   $request->getVar("u_phone", FILTER_SANITIZE_STRING),
                    "u_email" =>   $request->getVar("u_email", FILTER_SANITIZE_EMAIL),
                    "u_website" =>   $request->getVar("u_website", FILTER_SANITIZE_STRING),
                    "u_size" =>   $request->getVar("u_size", FILTER_SANITIZE_STRING)
                ];
                # Add to units
                $unit_id = $units->insert($data);

                # Add unit to district
                $data_relations = [
                    "unit_id" => $unit_id,
                    "district_id" => $district["id"]
                ];
                $ud->insert($data_relations);

                $session->setFlashdata('operation_action', 'show_alert_success');
                $session->setFlashdata('operation_result', 'success');
                $session->setFlashdata('operation_id', $unit_id);
            }
        }else{
            $session->setFlashdata('operation_action', 'show_alert');
            $session->setFlashdata('operation_result', 'danger');
            $session->setFlashdata('operation_content', "You do not have enough permissions for selected action!");

        }
        return redirect()->to('/Dashboard/units');
    }

    public function mark_solved($id){


    }

    public function mark_unsolved($id){


    }

    public function autosave_event(){
	    var_dump($_POST);
    }



}
