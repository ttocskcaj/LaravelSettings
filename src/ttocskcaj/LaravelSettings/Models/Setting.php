<?php
namespace ttocskcaj\LaravelSettings\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Setting extends Eloquent
{
    protected $table = 'settings';
    protected $fillable = ['key', 'value'];

    public function __construct()
    {
        $this->table = Config::get('laravel-settings::table');

        parent::__construct();
    }

}
