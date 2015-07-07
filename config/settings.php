<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Persistence Type
    |--------------------------------------------------------------------------
    |
    | The type of persistence to use (Only eloquent is available at the moment)
    |
    */

    'persistence' => 'eloquent',
    /*
    |--------------------------------------------------------------------------
    | Persistence Settings
    |--------------------------------------------------------------------------
    |
    | Settings for each persistence
    |
    */


    'eloquent'    => [
        'table' => 'settings'
    ],

);
