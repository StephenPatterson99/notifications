<?php

namespace stephenpatterson99\notify;

class Notify
{

    private $notifyClient;

    public function __construct()
    {
        // $this->$notifyClient = new \Alphagov\Notifications\Client([
        //     'apiKey' => env('GOVUK_NOTIFY_APIKEY', 'ABCDE12345'),
        //     'httpClient' => new \Http\Adapter\Guzzle6\Client
        // ]);
    }

    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }

    public function email(String $sName)
    {
        return 'Emailing ' . $sName;
    }

    public function sms(String $sName)
    {
        return 'Sending SMS to ' . $sName;
    }
}
