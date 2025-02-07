<?php

// config for Moontechs/FilamentWebauthn
return [
    'login_page_url' => '/webauthn-login',
    'webauthn_layout' => 'filament::components.layouts.card',
    'user' => [
        'auth_identifier' => 'email', // column in users table with unique user id
    ],
    'widget' => [
        'column_span' => '',
    ],
    'register_button' => [
        'icon' => 'heroicon-o-key',
        'class' => 'w-full',
    ],
    'login_button' => [
        'icon' => 'heroicon-o-key',
        'class' => 'w-full',
    ],
    'auth' => [
        'relying_party' => [
            'name' => env('APP_NAME'),
            'origin' => env('APP_URL'),
            'id' => env('APP_HOST', parse_url(env('APP_URL'))['host']),
        ],
        'client_options' => [
            'timeout' => 60000,
            'platform' => '', // available: platform, cross-platform, or leave empty
            'attestation' => 'direct', // available: direct, indirect, none
            'user_verification' => 'required', // available: required, preferred, discouraged
        ],
    ],
];
