<?php

namespace App\Controllers;
use App\Models\ClicksModel;
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

                // Get latest event available
                $events = new EventsModel();
                $latest = $events->getLatestByDevice($device);

                # data for new event, if needed
                $data = ["e_device_id" => $device["d_id"],
                    "e_type" => 1,
                    "e_note" => "New click received"];


                // Check if latest event has been resolved
                if (!isset($latest)){
                    // There is no event, create a new one
                    $event_id = $events->insert($data);
                }else{
                    if ($latest["e_type"] != 1){
                        // Event already exist, but it is solved, create a new one
                        $event_id = $events->insert($data);
                    }
                }
                $clicks = new ClicksModel();

                $click_data = [
                    "c_device" => $device["d_id"],
                    "c_event"  => isset($event_id)?$event_id:$latest["e_id"]
                ];
                $clicks->insert($click_data);

                //Trigger notifications
                // TODO Setup SMS and Email notifications
                echo "SMS:" . $device["d_notification_phone"];
                die();
                # echo "[DEBUG]EMAIL notificiation to: " . $device["d_notification_email"]."<br>";
                #die("TRUE");
            }
        }

        die("FALSE");



    }
}
