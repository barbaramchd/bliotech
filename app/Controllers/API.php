<?php

namespace App\Controllers;
use App\Models\ClicksModel;
use App\Models\DevicesModel;
use App\Models\EventsModel;
#use App\ThirdParty\Twilio\Rest\Client;
require "../app/ThirdParty/Twilio/autoload.php";
use Twilio\Rest\Client;

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
                $latest = $events->getLatestByDevice($device["d_id"]);

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
                $counter = $clicks->getClickCount(isset($event_id)?$event_id:$latest["e_id"])+1;
                $click_data = [
                    "c_device" => $device["d_id"],
                    "c_event"  => isset($event_id)?$event_id:$latest["e_id"]
                ];
                $clicks->insert($click_data);


                $message = "Button ".$device["d_name"]." has just been pressed ".($counter!=1?"(".$counter."x)":"").". Reply FIXED to (415) 306-8588 after resolving the issue.";


                $this->send_sms("+".$device["d_notification_phone"], $message);



                //Trigger notifications
                // TODO Setup SMS and Email notifications
                # echo "[DEBUG]EMAIL notificiation to: " . $device["d_notification_email"]."<br>";
                die("TRUE");
            }
        }

        die("FALSE");
    }

    public function recieve_sms(){
	    $from = $_POST["From"];
        $body = $_POST['Body'];
        if (strtolower($body)=="fixed"){
            # Find Button button with latest record
            $events = new EventsModel();
            $latest = $events->getLatestByPhone($from);
            if (isset($latest)){
            $data=[
                "e_type"=>2,
                "e_resolved_at"=>date('Y-m-d H:i:s'),
                "e_resolved_by"=>"SMS ".$from
            ];
            $events->update($latest["e_id"],$data);

            $this->send_sms($from, "Great! Event in ".$latest["d_name"]." marked as solved.");
            }else{
                #$this->send_sms($from, "Sorry, We did not recognized your phone number. Please use https://blio.tech");
                $this->send_sms($from, "We did not find any unsolved event. Please check https://blio.tech");

            }
        }else{
            $this->send_sms($from, "Sorry, we did not recognized your request.");

        }
    }

    public function test($number){
        $events = new EventsModel();
        $latest = $events->getLatestByPhone("$number");
        var_dump($latest);
        die();
    }

    private function send_sms($number, $message)
    {

        // Your Account SID and Auth Token from twilio.com/console
        // To set up environmental variables, see http://twil.io/secure
        $account_sid = getenv('TWILIO_ACCOUNT_SID');
        $auth_token = getenv('TWILIO_AUTH_TOKEN');
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

        // A Twilio number you own with SMS capabilities
        $twilio_number = "+14153068588";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
        // Where to send a text message (your cell phone?)
            $number,
            array(
                'from' => $twilio_number,
                'body' => $message
            ));

    }
}
