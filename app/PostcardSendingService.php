<?php

namespace App;

use Illuminate\Support\Facades\Mail;

class PostcardSendingService
{

    private $country;
    private $width;
    private $height;

    public function __construct($country, $width, $height){

        $this->country = $country;
        $this->width = $width;
        $this->height = $height;
    }

    public function hello($message, $email){
        // because PHP don't have access sto email so we use "use"

        Mail::raw($message,function ($message) use ($email){
            $message->to($email);
        });
        //mail out postcard through some service

        dump('Postcard was sent with the message: ' . $message);
    }

}
