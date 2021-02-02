<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use Mail;


class MailController extends Controller
{
  

    public function basic_email() {
		$data = array('name'=>"Jaturon");
		
		Mail::send(['text'=>'mail'], $data, function($message) {
			$message->to('cs5935512064@phuket.psu.ac.th', 'ToPeeeTAEiEiEiZaZaZa')->subject('Laravel Basic Testing Mail');
			$message->from('s6135512026@phuket.psu.ac.th', 'Jaturon');
		});
		echo "Basic Email Sent. Check your inbox."; 
     }
    


}



