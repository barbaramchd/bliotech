<?php

namespace App\Controllers;
use App\Models\DevicesModel;
use App\Models\EventsModel;

const SECRET = "CHWjuwEL44nqdR6YPKSAqKpTbtWkWvmuLaKeqxqfUg4gNwsgzh4FSYnyezkhjQyXr5F9vxnHNrEUp3khTdt";

class API extends BaseController
{
	public function index()
	{
	    # Redirect generall calls to homepage
        return redirect()->to('/');
	}

	public function button_click($button_id, $secret)
    {
        $devices  = new DevicesModel();


        //Verify secret if matches
        if ($secret == SECRET){

            //Check if button exists
            $device = $devices->getDevice($button_id);
            if (isset($device)){
                //Log the click in the database
                $events = new EventsModel();

                $data = ["e_device_id" => $device["d_id"],
                        "e_type" => 1,
                        "e_note" => "New click received"];

                echo "[DEBUG]Event ID: " . $events->insert($data) . "<br>";

                //Trigger notifications
                // TODO Setup SMS and Email notifications
                echo "[DEBUG]SMS notificiation to: " . $device["notification_phone"]."<br>";
                echo "[DEBUG]EMAIL notificiation to: " . $device["notification_email"]."<br>";

                die("TRUE");
            }
        }

        die("FALSE");



    }
}
