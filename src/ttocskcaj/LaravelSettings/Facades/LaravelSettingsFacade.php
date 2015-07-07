<?php namespace ttocskcaj\LaravelSettings\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelSettingsFacade extends Facade {

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
