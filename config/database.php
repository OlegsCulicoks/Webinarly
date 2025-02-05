<?php

return [

    'default' => env('DB_CONNECTION', 'null'),

    'connections' => [
        'null' => [
            'driver' => 'sqlite',
            'database' => ':memory:', // Temporary in-memory database to prevent errors
            'prefix' => '',
        ],
    ],

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    'redis' => [],

];
