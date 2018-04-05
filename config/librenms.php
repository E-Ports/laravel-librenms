<?php

return [

    /**
     * IMPORTANT
     * Chane next value to true when need to change and configure different connection on test
     */
    'different_connection_on_test' => false,

    /**
     * Can configure multiple connections to different LibreNMS servers
     */
    'connections' => [
        'default' => [
            /**
             * URL to access to LibreNMS server
             */
            'url' => env('LIBRENMS_API_URL'),


            /**
             * Token key to access to LibreNMS server
             */
            'key' => env('LIBRENMS_API_KEY')
        ],

        /**
         * Connection to be used on testing. If `different_connection_on_test` equals true
         */
        'testing' => [
            'url' => env('LIBRENMS_API_URL_TEST'),

            'key' => env('LIBRENMS_API_KEY_TEST')
        ]

        /**
         * Example of multiple connections:
         *
         * 'server2' => [
         *     'url' => env('LIBRENMS_SERVER2_API_URL'),
         *     'key' => env('LIBRENMS_SERVER2_API_KEY')
         * ]
         *
         */
    ],
];