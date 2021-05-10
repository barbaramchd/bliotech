<?php

namespace App\Controllers;

class API extends BaseController
{
	public function index()
	{
	    # Redirect generall calls to homepage
        return redirect()->to('/');
	}

	public function button_click($button_id, $secret)
    {

        //Verify secret if matches

        //Check if button exists

        //Log the click in the database

        die("TRUE");
        die("FALSE");


    }
}
