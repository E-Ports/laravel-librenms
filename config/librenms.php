<?php

return [

    /**
     * Can configure multiple connections to different LibreNMS servers
     */
    'connections' => [
        'default' => [

            /**
             * URL to access to LibreNMS server
             */
            'url' => env('LIBRENMS_URL'),


            /**
             * Token key to access to LibreNMS server
             */
            'key' => env('LIBRENMS_API_KEY')
        ]

        /**
         * Example of multiple connections:
         *
         * 'server2' => [
         *     'url' => env('LIBRENMS_SERVER2_URL'),
         *     'key' => env('LIBRENMS_SERVER2_API_KEY')
         * ]
         *
         */
    ],
];