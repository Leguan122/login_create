<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '338259447799-oib1vdttr7j901lii1l6pu764ngo7ma4.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://www.laravellogin.h10s.eu/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '1050443852320459',
        'client_secret' => '5c3c35ca22ce076e536f97e0c923b7b9',
        'redirect' => 'https://www.laravellogin.h10s.eu/auth/facebook/callback',
    ],

];
