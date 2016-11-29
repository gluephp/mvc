<?php

return [

    /**
     * Debugging
     * ------------------------------------------------------------------------
     */
    'debug'     => false,


    /**
     * Logging
     * ------------------------------------------------------------------------
     */
    'monolog'   => [
        'folder'    => __DIR__ . '/../storage/logs',
        'file'      => 'app_' . date('Y-m-d') . '.log',
        'level'     => 'error',
    ],


    /**
     * Date & Time
     * ------------------------------------------------------------------------
     */
    'timezone'  => 'UTC',


    /**
     * Views
     * ------------------------------------------------------------------------
     */
    'plates' => [
        'path'    => __DIR__ . '/views',
        'assets'  => '/static', // Relative from the public-folder
    ],


    /**
     * Views
     * ------------------------------------------------------------------------
     */
    'database' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'database',
        'username'  => 'username',
        'password'  => 'password',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ],


    /**
     * Service Providers
     * ------------------------------------------------------------------------
     * Logging libraries should be registered first, since other packages might
     * depend on them.
     */
    'providers' => [
        'Glue\Monolog\ServiceProvider',
        'Glue\Whoops\ServiceProvider',
        'Glue\Database\ServiceProvider',
        'Glue\Plates\ServiceProvider',
        'Glue\Mvc\ServiceProvider',
        'App\Providers\AppServiceProvider'
    ],

];