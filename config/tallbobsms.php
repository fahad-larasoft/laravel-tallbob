<?php

return [
    /**
     * Sender Id to be sent with request
     */
    'sender_id' => env('TALLBOB_SENDER_ID', env('APP_NAME')),

    /**
     * Access key provided by VidCorp for API
     */
    'access_key' => env('TALLBOB_ACCESS_KEY', ''),

    /**
     * Secret key provided by VidCorp for API
     */
    'secret_key' => env('TALLBOB_SECRET_KEY', ''),

    /**
     * To check if API is in test mode
     */
    'test_mode' => env('TALLBOB_TEST_MODE', false),

    /**
     * List of api routes provided by VidCorp
     */
    'api_route' => [

        /**
         * Provisioning server address for testing
         */
        'provisioning_server' => 'https://api-test.tallbob.com/v2',

        /**
         * Production server address
         */
        'production_server' => 'https://api.tallbob.com/v2'
    ]
];
