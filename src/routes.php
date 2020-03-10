<?php

use stephenpatterson99\notify\Notify;

Route::get('greet/{name}', function ($name) {
    $notifier = new Notify();
    return $notifier->greet($name);
});

Route::get('email', 'stephenpatterson99\notify\NotificationController@sendEmail');

Route::get('sms/{name}', function ($name) {
    $notifier = new Notify();
    return $notifier->sendSMS($name);
});
