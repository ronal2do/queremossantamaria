<?php

return [

    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

    'port' => env('MAIL_PORT', 587),

    'from' => ['address' => 'postmaster@vcfazsbc.com.br', 'name' => 'Vc faz SBC.'],

    'encryption' => env('MAIL_ENCRYPTION', ''),

    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

    'sendmail' => '/usr/sbin/sendmail -bs',

];
