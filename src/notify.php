<?php

namespace stephenpatterson99\notify;

use Alphagov\Notifications\Client as NotifyClient;
use Http\Adapter\Guzzle6\Client as GuzzleClient;

class Notify
{

    private $notifyClient;

    public function __construct()
    {
        $this->notifyClient = new NotifyClient([
            'apiKey' => config('notify.govuk_notify_apikey'),
            'httpClient' => new GuzzleClient
        ]);
    }

    public function greet(String $name)
    {
        return 'Hi ' . $name . '! How are you doing today?';
    }

    public function sendEmailUsingGovukNotify($emailAddress, $templateId, $params)
    {
        try {
            $response = $this->notifyClient->sendEmail(
                $emailAddress,
                $templateId,
                $params
            );
        } catch (NotifyException $e) {
            // do something
        };
    }

    public function sendSMS(String $sName)
    {
        return 'Sending SMS to ' . $sName . ' using GOV.UK Notify message';
    }
}
