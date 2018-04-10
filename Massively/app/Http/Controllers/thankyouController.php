<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class thankyouController extends Controller
{
    /**
     * Sleeps and redirects user to home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
		return view('thankyou'); 
	    sleep(3){
		    back()
	    };
    }
}
