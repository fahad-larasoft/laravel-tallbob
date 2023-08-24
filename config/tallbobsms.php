<?php

return [
    /**
     * Sender Id to be sent with request
     */
    'sender_id' => env('TALLBOB_SENDER_ID', env('APP_NAME')),

    /**
     * API Username provided by Tall Bob for API
     */
    'api_username' => env('TALLBOB_API_USERNAME', ''),

    /**
     * API Key provided by Tall Bob for API
     */
    'api_key' => env('TALLBOB_API_KEY', ''),

    /**
     * To check if API is in test mode
     */
    'test_mode' => env('TALLBOB_TEST_MODE', false),

    /**
     * List of api routes provided by Tall Bob
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
