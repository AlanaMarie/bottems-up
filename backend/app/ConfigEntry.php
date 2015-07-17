<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigEntry extends Model
{
    //
    protected $table = 'configentries';

    public static function byKey($key)
    {
        return ConfigEntry::where('key', $key);
    }
}
