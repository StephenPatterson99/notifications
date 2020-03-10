<?php

namespace stephenpatterson99\notify;

use Alphagov\Notifications\Client as NotifyClient;
use Http\Adapter\Guzzle6\Client as GuzzleClient;

class Notify
{

    private $notifyClient;

    public function __construct()
    {
        $this->$notifyClient = new NotifyClient([
            'apiKey' => env('GOVUK_NOTIFY_APIKEY', 'ABCDE12345'),
            'httpClient' => new GuzzleClient
        ]);
    }

    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }

    public function email(String $sName)
    {
        return 'Emailing ' . $sName . ' using GOV.UK Notify mail';
    }

    public function sms(String $sName)
    {
        return 'Sending SMS to ' . $sName . ' using GOV.UK Notify message';
    }
}
