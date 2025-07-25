<?php

return [

    'name' => env('APP_NAME', 'Gym One'),

    'env' => env('APP_ENV', 'production'),

    'superadminemail' => 'sirjone100@gmail.com', // the emai where notifications are send, put gym owners email here @



    'debug' => (bool) env('APP_DEBUG', false),

    'url' => env('APP_URL', 'http://localhost'),

    // 'timezone' => env('APP_TIMEZONE', 'UTC'),
    'timezone' => 'Asia/Manila',


    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],
    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],
    Yajra\DataTables\DataTablesServiceProvider::class,
    App\Providers\SideNavigationDataProvider::class,
];