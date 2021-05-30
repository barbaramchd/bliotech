<?php

namespace App\Controllers;

use App\Models\UnitsModel;
use App\Models\UnitUsersModel;
use App\Models\UnitDistModel;
use App\Models\DistrictModel;
use App\Models\EventsModel;
use CodeIgniter\Model;

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

    public function add_account()
    {
        global $DATA;
        $session = \Config\Services::session();
        if ($DATA["isManager"] == true){

            # Loading Required Models
            $ud   = new UnitDistModel();
            $uu   = new UnitUsersModel();
            $units = new UnitsModel();
            $districts = new DistrictModel();
            $ionAuth = new \IonAuth\Libraries\IonAuth();

            # Load Libraries and helpers
            helper("form"); # Load form validation library
            $validation =  \Config\Services::validation();
            $request = \Config\Services::request();


            # Get current district of manager;
            $district = $districts->getDistrictByUser($DATA["user"]->id);

            # Verify if unit belongs to given district
            $unit_id = $request->getVar("user_unit", FILTER_SANITIZE_NUMBER_INT);
            if ($ud->checkIfExists($district, $unit_id) == 0){
                $session->setFlashdata('operation_action', 'show_alert');
                $session->setFlashdata('operation_result', 'danger');
                $session->setFlashdata('operation_content', "Invalid data received: User´s Unit");
            }else{

                # Form validation rules
                $validation->setRule('first_name', 'First Name', 'required');
                $validation->setRule('last_name', 'Last Name', 'required');
                $validation->setRule('email', 'E-Mail', 'required');

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
                    $email = $request->getVar("u_email", FILTER_SANITIZE_EMAIL);
                    $additional_data = array(
                        'first_name' => $request->getVar("first_name", FILTER_SANITIZE_STRING),
                        'last_name'  => $request->getVar("last_name", FILTER_SANITIZE_STRING),
                        "phone"      => $request->getVar("phone", FILTER_SANITIZE_STRING),
                    );
                    $password = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(16/strlen($x)) )),1,16);

                    $new_user = $ionAuth->register($email, $password,$email,$additional_data);

                    # Request password by sending an email
                    $ionAuth->forgottenPassword($email);

                    # Add unit to district
                    $data_relations = [
                        "unit_id" => $unit_id,
                        "user_id" => $new_user
                    ];
                    $uu->insert($data_relations);

                    $session->setFlashdata('operation_action', 'show_alert_success');
                    $session->setFlashdata('operation_result', 'success');
                    $session->setFlashdata('operation_id', $email);
                }}
            }else{
                $session->setFlashdata('operation_action', 'show_alert');
                $session->setFlashdata('operation_result', 'danger');
                $session->setFlashdata('operation_content', "You do not have enough permissions for selected action!");

            }
        return redirect()->to('/Dashboard/accounts');
    }

    public function mark_solved($e_id){
        global $DATA;
        $request = \Config\Services::request();
        $events = new EventsModel();

        $latest = $events->getOwnership($DATA["user"]->id,$e_id, $DATA["isManager"]);
        if (isset($latest)) {
            $data = [
                "e_type" => 2,
                "e_resolved_at" => date('Y-m-d H:i:s'),
                "e_resolved_by" => $DATA["user"]->first_name . " ". $DATA["user"]->last_name,
            ];
            $events->update($e_id, $data);
        }
        return redirect()->to('/Dashboard');

    }

    public function mark_unsolved($e_id){
        global $DATA;
        $request = \Config\Services::request();
        $events = new EventsModel();

        $latest = $events->getOwnership($DATA["user"]->id,$e_id, $DATA["isManager"]);
        if (isset($latest)) {
            $data = [
                "e_type" => 1,
            ];
            $events->update($e_id, $data);
        }
        return redirect()->to('/Dashboard');
    }

    public function autosave_event(){
        global $DATA;
        $request = \Config\Services::request();
        $events = new EventsModel();

        $e_note = $request->getVar("content", FILTER_SANITIZE_STRING);
        $e_id = $request->getVar("id", FILTER_SANITIZE_NUMBER_INT);

        $latest = $events->getOwnership($DATA["user"]->id,$e_id, $DATA["isManager"]);
        if (isset($latest)) {
            $data = [
                "e_note" => $e_note,
            ];
            $events->update($e_id, $data);
            return $e_note;

        }
	    return $e_note."Saving Failed. Please login again.";
    }



}
