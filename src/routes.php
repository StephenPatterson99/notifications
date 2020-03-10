<?php

use stephenpatterson99\notify\Notify;

Route::get('greet/{name}', function ($name) {
    $notifier = new Notify();
    return $notifier->greet($name);
});

Route::get('email/{name}', function ($name) {
    $notifier = new Notify();
    return $notifier->email($name);
});

Route::get('sms/{name}', function ($name) {
    $notifier = new Notify();
    return $notifier->sms($name);
});
