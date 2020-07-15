<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    'paypal' => array(
        'id' => env('PAYPAL_ID'),
        'secret' => env('PAYPAL_SECRECT'),
        'url' => array(
            'redirect' => 'http://localhost:8000/execute-payment',
            'cancel' => 'http://localhost:8000/cancel',
            'executeAgreement' => array(
                'success' => 'http://localhost:8000/execute-agreement/true',
                'failure' => 'http://localhost:8000/execute-agreement/false',
            )
        )
    ),


];
