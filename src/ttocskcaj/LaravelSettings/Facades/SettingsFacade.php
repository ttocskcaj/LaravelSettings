<?php namespace ttocskcaj\LaravelSettings\Facades;

use Illuminate\Support\Facades\Facade;

class SettingsFacade extends Facade {

    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'settings';
    }

}
