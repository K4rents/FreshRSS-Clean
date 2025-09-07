<?php
return [
    // Configuración principal
    'environment' => 'production',
    'salt' => '',

    // Establecer la URL base en la raíz
    'base_url' => '/',

    // Idioma y título
    'language' => 'en',
    'title' => 'FreshRSS',

    // Usuario por defecto
    'default_user' => '_',

    // Permitir o no usuarios anónimos
    'allow_anonymous' => false,
    'allow_anonymous_refresh' => false,

    // Tipo de login: form, http_auth o none
    'auth_type' => 'form',

    // Reautenticación
    'reauth_required' => true,
    'reauth_time' => 1200,

    // API y autologin inseguro
    'api_enabled' => false,
    'unsafe_autologin_enabled' => false,

    // Configuración de base de datos (SQLite por defecto)
    'db' => [
        'type' => 'sqlite',
        'host' => 'localhost',
        'user' => '',
        'password' => '',
        'base' => '',
        'prefix' => 'freshrss_',
    ],
];
