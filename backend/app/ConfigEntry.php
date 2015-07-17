<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigEntry extends Model
{
    //
    protected $table = 'configentries';

    public static function byKey($key)
    {
        return ConfigEntry::where('key', $key)->first();
    }

    public static function setKey($key, $value)
    {
        $entry = ConfigEntry::byKey($key);
        if ($entry == null) {
            $entry = new ConfigEntry();
        }
        $entry->key = $key;
        $entry->value = $value;
        $entry->save();
        return $entry;
    }
}
